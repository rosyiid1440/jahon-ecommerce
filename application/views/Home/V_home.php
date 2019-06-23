    <!--promo-->
    <div class="container">
        <div class="jumbotron jumbotron-fluid" style="min-height:350px;">
            <div class="container">
                <h1 class="display-4">Fluid jumbotron</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>
    </div>


    <!--konten-->
    <div class="container">
        <div class="row">
            <div class="col">
                <label for="" class="float-left"><b>Kemeja</b></label>
            </div>
            <div class="col">
                <label for=""class="float-right"><b>Lainnya</b></label>
            </div>
        </div>

        <div class="row">
            <?php
            function convert_rupiah($angka)
            {
                return 'Rp '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
            }
            ?>
            <?php foreach ($products as $product): ?>
                <?php $rupiah = $product->harga;?>
                <div class="col-md-3">
                    <a href="<?php echo base_url('home/viewpost/'.$product->id) ?>">
                        <div class="card" style="width: 16rem;">
                            <img src="<?php echo base_url('assets/img/post/'.$product->gambar) ?>" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna"><?php echo $product->nama ?></h6>
                                <p class="oren"><?php echo convert_rupiah($rupiah); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>


        <div class="row mt-4">
            <div class="col">
                <label for="" class="float-left"><b>Celana</b></label>
            </div>
            <div class="col">
                <label for=""class="float-right"><b>Lainnya</b></label>
            </div>
        </div>

        <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="width: 16rem;">
                            <img src="<?=base_url()?>assets/img/post/celana.jpg" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna">Celana Terlaris 2019</h6>
                                <p class="oren">Rp 120.000</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="width: 16rem;">
                            <img src="<?=base_url()?>assets/img/post/celana.jpg" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna">Celana Terlaris 2019</h6>
                                <p class="oren">Rp 120.000</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="width: 16rem;">
                            <img src="<?=base_url()?>assets/img/post/celana.jpg" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna">Celana Terlaris 2019</h6>
                                <p class="oren">Rp 120.000</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="width: 16rem;">
                            <img src="<?=base_url()?>assets/img/post/celana.jpg" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna">Celana Terlaris 2019</h6>
                                <p class="oren">Rp 120.000</p>
                            </div>
                        </div>
                    </a>
                </div>
        </div>


        <div class="row mt-4">
            <div class="col">
                <label for="" class="float-left"><b>Kaos</b></label>
            </div>
            <div class="col">
                <label for=""class="float-right"><b>Lainnya</b></label>
            </div>
        </div>

        <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="width: 16rem;">
                            <img src="<?=base_url()?>assets/img/post/kaos.jpg" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna">Kaos Terlaris 2019</h6>
                                <p class="oren">Rp 120.000</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="width: 16rem;">
                            <img src="<?=base_url()?>assets/img/post/kaos.jpg" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna">Kaos Terlaris 2019</h6>
                                <p class="oren">Rp 120.000</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="width: 16rem;">
                            <img src="<?=base_url()?>assets/img/post/kaos.jpg" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna">Kaos Terlaris 2019</h6>
                                <p class="oren">Rp 120.000</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="width: 16rem;">
                            <img src="<?=base_url()?>assets/img/post/kaos.jpg" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna">Kaos Terlaris 2019</h6>
                                <p class="oren">Rp 120.000</p>
                            </div>
                        </div>
                    </a>
                </div>
        </div>


        <div class="row mt-4">
            <div class="col">
                <label for="" class="float-left"><b>Hoodie</b></label>
            </div>
            <div class="col">
                <label for=""class="float-right"><b>Lainnya</b></label>
            </div>
        </div>

        <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="width: 16rem;">
                            <img src="<?=base_url()?>assets/img/post/hoodie.jpg" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna">Hoodie Terlaris 2019</h6>
                                <p class="oren">Rp 120.000</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="width: 16rem;">
                            <img src="<?=base_url()?>assets/img/post/hoodie.jpg" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna">Hoodie Terlaris 2019</h6>
                                <p class="oren">Rp 120.000</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="width: 16rem;">
                            <img src="<?=base_url()?>assets/img/post/hoodie.jpg" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna">Hoodie Terlaris 2019</h6>
                                <p class="oren">Rp 120.000</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="">
                        <div class="card" style="width: 16rem;">
                            <img src="<?=base_url()?>assets/img/post/hoodie.jpg" alt="" style="max-width:260px;">
                            <div class="card-body">
                                <h6 class="card-title no-warna">Hoodie Terlaris 2019</h6>
                                <p class="oren">Rp 120.000</p>
                            </div>
                        </div>
                    </a>
                </div>
        </div>
    </div>
    
