<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

    <section class="section faq">
      <div class="row">
        <div class="col-lg-6">

          <div class="card basic">
            <div class="card-body">
              <h5 class="card-title">Pertanyaan Umum</h5>

              <div>
                <h6>Q1: Produk apa saja yang dijual di toko ini?</h6>
                <p>Kami menyediakan berbagai perlengkapan audio berkualitas seperti in-ear monitor (IEM), headphone berkabel, headphone Bluetooth, dan earbud true wireless stereo (TWS).</p>
              </div>

              <div class="pt-2">
                <h6>Q2: Apakah semua produk yang dijual asli dan bergaransi?</h6>
                <p>Ya, semua produk yang kami jual 100% asli dan dilengkapi garansi resmi dari distributor atau produsen terpercaya.</p>
              </div>

              <div class="pt-2">
                <h6>Q3: Apakah tersedia layanan bantuan jika saya mengalami kendala pada produk?</h6>
                <p>Tentu. Anda dapat menghubungi kami lewat telepon, email, maupun Whatsapp, tim layanan pelanggan kami siap membantu Anda terkait masalah teknis, kesulitan saat penggunaan, hingga klaim garansi.</p>
              </div>

            </div>
          </div>

          <!-- F.A.Q Group 1 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tentang Produk</h5>

              <div class="accordion accordion-flush" id="faq-group-1">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse">
                      Bagaimana cara mengetahui apakah produk asli atau bukan?
                    </button>
                  </h2>
                  <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      Semua produk kami dijamin keasliannya karena kami hanya bekerja sama dengan distributor resmi. Anda juga akan mendapatkan kartu garansi dan segel pabrik sebagai bukti keaslian.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                      Apakah produk IEM, headphone, dan TWS bisa dicoba sebelum membeli?
                    </button>
                  </h2>
                  <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      Untuk saat ini, kami belum menyediakan fasilitas demo fisik. Namun, kami menyediakan deskripsi detail, ulasan pengguna, serta rekomendasi berdasarkan kebutuhan Anda.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button" data-bs-toggle="collapse">
                      Apakah tersedia informasi teknis seperti impedansi, sensitivitas, dan jenis driver?
                    </button>
                  </h2>
                  <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      Ya. Spesifikasi teknis lengkap seperti impedansi, sensitivitas, jenis driver, dan konektivitas dapat dilihat pada halaman produk masing-masing.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-4" type="button" data-bs-toggle="collapse">
                      Apakah produk yang dijual cocok digunakan untuk semua jenis perangkat?
                    </button>
                  </h2>
                  <div id="faqsOne-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      Sebagian besar produk kompatibel dengan perangkat umum seperti smartphone, laptop, dan DAP. Namun, kami sarankan memeriksa impedansi dan kebutuhan output pada deskripsi produk.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-5" type="button" data-bs-toggle="collapse">
                      Bagaimana cara merawat produk agar lebih awet?
                    </button>
                  </h2>
                  <div id="faqsOne-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      Hindari paparan air, suhu ekstrem, dan benturan keras. Simpan produk dalam tempat penyimpanan yang aman dan gunakan dengan volume sedang untuk menjaga kualitas komponen audio.
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End F.A.Q Group 1 -->

        </div>

        <div class="col-lg-6">

          <!-- F.A.Q Group 2 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pembelian Barang</h5>

              <div class="accordion accordion-flush" id="faq-group-2">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
                      Metode pembayaran apa saja yang tersedia?
                    </button>
                  </h2>
                  <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Kami menerima transfer bank, kartu kredit, e-wallet (seperti OVO, DANA, GoPay), serta pembayaran melalui marketplace mitra resmi kami.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse">
                      Bagaimana jika saya salah memilih produk saat checkout?
                    </button>
                  </h2>
                  <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Silakan hubungi layanan pelanggan kami maksimal 1x24 jam setelah pemesanan. Kami akan membantu membatalkan atau menyesuaikan pesanan jika belum diproses.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button" data-bs-toggle="collapse">
                      Apakah harga produk sudah termasuk pajak dan ongkos kirim?
                    </button>
                  </h2>
                  <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Harga produk sudah termasuk pajak (PPN). Ongkos kirim akan ditampilkan secara otomatis saat checkout sesuai dengan lokasi tujuan.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4" type="button" data-bs-toggle="collapse">
                      Apakah saya bisa mendapatkan diskon atau promo khusus?
                    </button>
                  </h2>
                  <div id="faqsTwo-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Kami secara berkala menawarkan promo dan diskon tertentu. Silakan langganan newsletter kami atau ikuti media sosial untuk mendapatkan informasi promo terbaru.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                      Apakah saya bisa memesan produk secara pre-order jika sedang tidak tersedia?
                    </button>
                  </h2>
                  <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Ya, untuk beberapa produk tertentu kami menyediakan sistem pre-order. Informasi ketersediaan dan estimasi waktu pengiriman akan diinformasikan di halaman produk.
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End F.A.Q Group 2 -->

          <!-- F.A.Q Group 3 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pengiriman Barang</h5>

              <div class="accordion accordion-flush" id="faq-group-3">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-1" type="button" data-bs-toggle="collapse">
                      Berapa lama waktu pengiriman ke daerah saya?
                    </button>
                  </h2>
                  <div id="faqsThree-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Lama pengiriman bervariasi tergantung lokasi Anda. Rata-rata pengiriman ke Pulau Jawa memakan waktu 2–3 hari kerja, sementara luar Jawa sekitar 3–7 hari kerja.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-2" type="button" data-bs-toggle="collapse">
                      Apakah saya bisa melacak status pengiriman pesanan?
                    </button>
                  </h2>
                  <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Tentu. Setelah pesanan dikirim, Anda akan menerima nomor resi beserta tautan pelacakan melalui email atau WhatsApp.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-3" type="button" data-bs-toggle="collapse">
                      Apakah tersedia opsi pengiriman ekspres atau same-day delivery?
                    </button>
                  </h2>
                  <div id="faqsThree-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Kami menyediakan pengiriman ekspres untuk area tertentu melalui layanan kurir tertentu. Silakan pilih opsi pengiriman saat checkout jika tersedia.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-4" type="button" data-bs-toggle="collapse">
                      Bagaimana jika paket saya rusak, hilang, atau tidak sampai?
                    </button>
                  </h2>
                  <div id="faqsThree-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Jika terjadi kerusakan atau kehilangan dalam proses pengiriman, segera hubungi kami maksimal 3 hari setelah barang diterima atau seharusnya tiba. Kami akan bantu proses klaim ke pihak ekspedisi.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-5" type="button" data-bs-toggle="collapse">
                      Apakah saya bisa mengganti alamat pengiriman setelah memesan?
                    </button>
                  </h2>
                  <div id="faqsThree-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Penggantian alamat hanya bisa dilakukan sebelum pesanan diproses. Silakan segera hubungi layanan pelanggan untuk permintaan perubahan data pengiriman.
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End F.A.Q Group 3 -->

        </div>

      </div>
    </section>
    <section class="section contact">
            <!-- Four small boxes in a row -->
        <div class="row">
        <div class="col-md-3">
            <div class="card text-center p-3">
            <i class="bi bi-geo-alt fs-1"></i>
            <h5 class="mt-2">Alamat</h5>
            <p class="mb-0">Jl. Tlogosari Raya No. 78,<br>Kelurahan Tlogosari Kulon, Kecamatan Pedurungan, Kota Semarang, Jawa Tengah 50196</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-3">
            <i class="bi bi-telephone fs-1"></i>
            <h5 class="mt-2">Telepon</h5>
            <p class="mb-0">(024) 7654 3210<br>0813 4567 8901 (WA: Camplitude CS)<br>0857 1234 5678 (Personal)</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-3">
            <i class="bi bi-envelope fs-1"></i>
            <h5 class="mt-2">Email</h5>
            <p class="mb-0">camplitudesmg061@gmail.com</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-3">
            <i class="bi bi-clock fs-1"></i>
            <h5 class="mt-2">Buka</h5>
            <p class="mb-0">Senin - Sabtu<br>9:00 - 16:00 WIB</p>
            </div>
        </div>
        </div>
<?= $this->endSection() ?>