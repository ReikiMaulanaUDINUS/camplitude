<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniterCart\Cart;

class TransaksiController extends BaseController
{
    protected $cart;

    function __construct()
    {
        helper('number');
        helper('form');
        $this->cart = \Config\Services::cart();
    }

    public function index()
    {
        $data['items'] = $this->cart->contents();
        $data['total'] = $this->cart->total();
        return view('v_keranjang', $data);
    }

    public function cart_add()
    {
        $this->cart->insert(array(
            'id'        => $this->request->getPost('id'),
            'qty'       => 1,
            'price'     => $this->request->getPost('harga'),
            'name'      => $this->request->getPost('nama'),
            'options'   => array('foto' => $this->request->getPost('foto'))
        ));
        session()->setFlashdata('success', 'Produk berhasil ditambahkan ke keranjang. (<a href="' . base_url() . 'keranjang">Lihat</a>)');
        return redirect()->to(base_url('/'));
    }

    public function cart_clear()
    {
        $this->cart->destroy();
        session()->setFlashdata('success', 'Keranjang Berhasil Dikosongkan');
        return redirect()->to(base_url('keranjang'));
    }

    public function cart_edit()
    {
        $i = 1;
        foreach ($this->cart->contents() as $value) {
            $this->cart->update(array(
                'rowid' => $value['rowid'],
                'qty'   => $this->request->getPost('qty' . $i++)
            ));
        }

        session()->setFlashdata('success', 'Keranjang Berhasil Diedit');
        return redirect()->to(base_url('keranjang'));
    }

    public function cart_delete($rowid)
    {
        $this->cart->remove($rowid);
        session()->setFlashdata('success', 'Keranjang Berhasil Dihapus');
        return redirect()->to(base_url('keranjang'));
    }

    public function checkout()
    {
        $cartItems = $this->cart->contents();
        if (empty($cartItems)) {
            session()->setFlashdata('success', 'Keranjang kosong, tidak bisa checkout.');
            return redirect()->to(base_url('keranjang'));
        }

        $productModel = new \App\Models\ProductModel();
        $transactionModel = new \App\Models\TransactionModel();
        $transactionDetailModel = new \App\Models\TransactiondetailModel();

        // Start transaction
        $db = \Config\Database::connect();
        $db->transStart();

        // Create transaction record
        $transactionData = [
            'username'    => session()->get('username'),
            'total_harga' => $this->cart->total(),
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s')
        ];
        $transactionModel->insert($transactionData);
        $transactionId = $transactionModel->getInsertID();

        // For each cart item, create detail and update stock
        foreach ($cartItems as $item) {
            // Get current stock
            $product = $productModel->find($item['id']);
            if ($product && $product['jumlah'] >= $item['qty']) {
                // Subtract stock
                $productModel->update($item['id'], [
                    'jumlah' => $product['jumlah'] - $item['qty']
                ]);
                // Insert transaction detail
                $transactionDetailModel->insert([
                    'transaction_id' => $transactionId,
                    'product_id'     => $item['id'],
                    'jumlah'         => $item['qty'],
                    'diskon'         => 0,
                    'subtotal_harga' => $item['subtotal'],
                    'created_at'     => date('Y-m-d H:i:s'),
                    'updated_at'     => date('Y-m-d H:i:s')
                ]);
            } else {
                // Rollback and notify if stock not enough
                $db->transRollback();
                session()->setFlashdata('success', 'Stok produk "' . $item['name'] . '" tidak cukup!');
                return redirect()->to(base_url('keranjang'));
            }
        }

        $db->transComplete();

        // Clear cart
        $this->cart->destroy();

        // Set notification
        session()->setFlashdata('success', 'Checkout berhasil! Pesanan Anda telah diproses.');

        return redirect()->to(base_url('/'));
    }

    public function history()
    {
        // Only allow admin
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/')->with('error', 'Akses ditolak.');
        }

        $transactionModel = new \App\Models\TransactionModel();
        $transactionDetailModel = new \App\Models\TransactiondetailModel();
        $productModel = new \App\Models\ProductModel();

        $transactions = $transactionModel->findAll();
        foreach ($transactions as &$trx) {
            $trx['details'] = $transactionDetailModel->where('transaction_id', $trx['id'])->findAll();
            foreach ($trx['details'] as &$detail) {
                $product = $productModel->find($detail['product_id']);
                $detail['product_name'] = $product['nama'] ?? '';
            }
        }

        return view('v_transactions', ['transactions' => $transactions]);
    }
}
