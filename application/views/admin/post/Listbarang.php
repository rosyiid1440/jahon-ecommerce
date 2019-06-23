<?php $this->load->view('admin/Head'); ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/Header'); ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/Sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        List Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url();?>Admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List Barang</li>
      </ol>
    </section>
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
                <div class="container-fluid">
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('admin/barang') ?>"><i class="fa fa-plus"></i> Add New</a>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Photo</th>
                                            <th>Kategori</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    function convert_rupiah($angka)
                                    {
                                        return 'Rp '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
                                    }
                                    ?>
                                        <?php foreach ($products as $product): ?>
                                        <tr>
                                            <td width="150">
                                                <?php echo $product->nama ?>
                                            </td>
                                            <td>
                                                <?php echo convert_rupiah($product->harga); ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo base_url('assets/img/post/'.$product->gambar) ?>" width="64" />
                                            </td>
                                            <td>
                                                <?php echo $product->kategori1 ?>, <?php echo $product->kategori2 ?>
                                            </td>
                                            <td class="small">
                                                <?php echo substr($product->deskripsi, 0, 120) ?>...</td>
                                            <td width="250">
                                                <a href="<?php echo site_url('admin/editbarang/'.$product->id) ?>"
                                                class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                                <a href="<?php echo site_url('admin/deletebarang/'.$product->id) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php $this->load->view('admin/Footer');?>
