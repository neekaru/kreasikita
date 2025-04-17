@extends('layouts.app')

@section('title', 'Tentang Kami - RumahKita')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h1 class="text-center mb-5">Tentang Kami – RumahKita</h1>
            
            <div class="about-content">
                <p>Semua berawal dari sebuah desa kecil yang tenang, di mana suara anyaman rotan lebih jujur daripada keramaian kota. Di sana, tangan-tangan terampil merajut rotan menjadi karya seni—kursi yang nyaman, keranjang yang kuat, hingga hiasan rumah yang penuh makna.</p>

                <p>Namun, di balik keindahan itu, ada kenyataan yang tak bisa diabaikan.</p>

                <p><strong>Penjualan kerajinan lokal—terutama dari para pengrajin rotan di Kalimantan dan sekitarnya—terus menurun dari tahun ke tahun.</strong> Banyak dari mereka yang akhirnya harus beralih profesi, meninggalkan warisan keterampilan yang sudah turun-temurun. Hingga tahun 2025, penurunan ini makin terasa, bahkan di pasar lokal sekalipun.</p>

                <p>Dari keresahan itulah, tiga sahabat — <strong>Nafis</strong>, <strong>Hidayah</strong>, dan <strong>Hanafi</strong> — memutuskan untuk bertindak. Mereka percaya bahwa setiap karya rotan punya cerita, dan cerita itu layak dibagikan ke seluruh dunia.</p>

                <blockquote class="blockquote my-4">
                    <p><strong>"Kami ingin karya sederhana dari desa bisa menghiasi rumah di mana saja — dari Jakarta hingga Tokyo, dari hati pengrajin ke hati pembeli."</strong></p>
                </blockquote>

                <h3 class="mt-5 mb-4">Perjalanan Kami</h3>
                <div class="accordion" id="accordionPerjalanan">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2021">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2021" aria-expanded="false" aria-controls="collapse2021">
                                🔸 <strong>2021</strong>
                            </button>
                        </h2>
                        <div id="collapse2021" class="accordion-collapse collapse" aria-labelledby="heading2021" data-bs-parent="#accordionPerjalanan">
                            <div class="accordion-body">
                                Gagasan <em>KreasiKita</em> lahir di sebuah warung kopi kecil di Jogja. Awal mula ide untuk membantu para pengrajin rotan memasarkan produk mereka secara digital.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2022">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2022" aria-expanded="false" aria-controls="collapse2022">
                                🔸 <strong>2022</strong>
                            </button>
                        </h2>
                        <div id="collapse2022" class="accordion-collapse collapse" aria-labelledby="heading2022" data-bs-parent="#accordionPerjalanan">
                            <div class="accordion-body">
                                Mulai menjalin kemitraan dengan pengrajin rotan dari Kalimantan, Jawa, dan Sumatera. Tahap membangun jaringan dengan komunitas pengrajin di berbagai daerah.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2023">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2023" aria-expanded="false" aria-controls="collapse2023">
                                🔸 <strong>2023</strong>
                            </button>
                        </h2>
                        <div id="collapse2023" class="accordion-collapse collapse" aria-labelledby="heading2023" data-bs-parent="#accordionPerjalanan">
                            <div class="accordion-body">
                                Platform e-commerce diluncurkan dengan nama baru: <strong>RumahKita</strong>. Peluncuran platform digital yang menghubungkan pengrajin dengan pasar yang lebih luas.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2024">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2024" aria-expanded="false" aria-controls="collapse2024">
                                🔸 <strong>2024</strong>
                            </button>
                        </h2>
                        <div id="collapse2024" class="accordion-collapse collapse" aria-labelledby="heading2024" data-bs-parent="#accordionPerjalanan">
                            <div class="accordion-body">
                                RumahKita menjangkau ribuan pengguna dan menjadi tempat bertemunya seni rotan dan teknologi. Pertumbuhan signifikan dalam jumlah pengguna dan transaksi di platform.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2025">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2025" aria-expanded="false" aria-controls="collapse2025">
                                🔸 <strong>2025</strong>
                            </button>
                        </h2>
                        <div id="collapse2025" class="accordion-collapse collapse" aria-labelledby="heading2025" data-bs-parent="#accordionPerjalanan">
                            <div class="accordion-body">
                                Fokus memperluas jangkauan dan mendukung keberlanjutan ekonomi para pengrajin lokal. Pengembangan program-program untuk mendukung keberlanjutan usaha para pengrajin.
                            </div>
                        </div>
                    </div>
                </div>

                <p class="mt-4">Kini, <strong>RumahKita bukan sekadar marketplace</strong>, tapi rumah besar untuk para pengrajin lokal, rumah yang terbuka untuk semua yang ingin membawa keindahan alam ke dalam ruang hidup mereka.</p>

                <p>Setiap produk di RumahKita bukan sekadar barang—ia adalah warisan, cerita, dan harapan.<br>
                Dan kamu, adalah bagian dari cerita itu.</p>
            </div>
        </div>
    </div>
</div>
@endsection