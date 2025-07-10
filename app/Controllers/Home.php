<?php

namespace App\Controllers;

use CodeIgniterCart\Cart;
use App\Models\ProductModel; 

class Home extends BaseController
{
    protected $product;

    function __construct()
    {
        helper('form');
        helper('number');
        $this->product = new ProductModel();
    }

    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
        
        return view('v_home', $data);
    }

    public function bantuan()
    {
        return view('v_bantuan');
    }

    public function search()
    {
        $query = $this->request->getGet('q');
        $products = $this->product->like('nama', $query)->findAll();

        // Map your DB fields to what the view expects
        $items = [];
        foreach ($products as $p) {
            $items[] = [
                'id'          => $p['id'],
                'image'       => base_url('img/' . $p['foto']),
                'name'        => $p['nama'],
                'description' => $p['ket'],
                'price'       => $p['harga'],
            ];
        }

        if (empty($items)) {
            session()->setFlashdata('message', 'No products found for your search query.');
        }

        return view('v_search', [
            'items' => $items,
            'query' => $query
        ]);
    }

}
