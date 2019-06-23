
<?php $this->load->view('Home/Header_h'); ?>

<?php foreach ($products as $product): ?>
<?php $harga = $product->harga;

function convert_to_rupiah($angka)
	{
		return 'Rp '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
    }
?>

<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color:white;">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#"><?php echo $product->kategori1 ?></a></li>
            <li class="breadcrumb-item"><a href="#"><?php echo $product->kategori2 ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $product->nama ?></li>
        </ol>
    </nav>
</div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card" style="max-width:100%">
                    <img class="card-img-top" src="<?php echo base_url('assets/img/post/'.$product->gambar) ?>" alt="Card image cap" style="padding:5px;">
                </div>
            </div>
            <div class="col-md-5">
                <h3><?php echo $product->nama ?></h3><hr>
                <button type="button" class="btn" style="background-color:#fa591d;color:white">Tambahkan ke keranjang</button>
                <p class="mt-3">100%  Transaksi Sukses Dari  8  Transaksi</p>
                <h4 style="color:#fa591d;"><?php echo convert_to_rupiah($harga); ?> x <input type="text" style="width:50px;"> pcs</h4>
                <p> Dapatkan cashback 5%<br>Harga grosir mulai dari Rp 35.000 / 6 pcs</p>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title" style="font-size:12px;">Dukungan Pengiriman</p>
                        <img src="<?=base_url()?>assets/img/kurir-jne.png" alt="" style="max-width:100%;">
                        <p style="font-size:12px;">✓Reguler ✓OKE ✓YES</p>
                        <img src="<?=base_url()?>assets/img/kurir-tiki.png" alt="" style="max-width:100%;">
                        <p style="font-size:12px;">✓Reguler <br>✓Over Night Service</p>
                        <img src="<?=base_url()?>assets/img/kurir-pos.png" alt="" style="max-width:100%;">
                        <p style="font-size:12px;">✓Pos Kilat Khusus</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#deskripsi">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#ulasan">Ulasan</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="tab-content" id="tabs">
                    <div class="tab-pane mt-5" id="deskripsi">
                        <?php echo $product->deskripsi ?>
                    </div>
                    <div class="tab-pane" id="ulasan">
                        <h1>ulasan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php $this->load->view('Home/Footer_h'); ?>
