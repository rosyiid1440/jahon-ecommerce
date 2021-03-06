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
        Input Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url();?>Admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input Barang</li>
      </ol>
    </section>
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
            <?php foreach ($data as $data): ?>
            <form method="post" action="<?php echo site_url('admin/updatebarang/'.$data->id) ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data->nama ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi Barang</label>
                    <textarea type="text" name="deskripsi" class="form-control" id="exampleInputPassword1"><?php echo $data->deskripsi ?></textarea>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" onkeypress="return hanyaAngka(event)" value="<?php echo $data->harga ?>">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori1" id="kategori1">
                      <option value="<?php echo $data->kategori1 ?>"><?php echo $data->kategori1 ?></option>
                      <?php foreach ($products as $product): ?>
                        <option value="<?php echo $product->nama_kategori1 ?>"><?php echo $product->nama_kategori1 ?></option>
                      <?php endforeach; ?>
                    </select><br>
                    <select name="kategori2" id="kategori2" class="form-control">
                      <option value="<?php echo $data->kategori2 ?>"><?php echo $data->kategori2 ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Gambar</label><br>
                    <img src="<?php echo base_url('assets/img/post/'.$data->gambar) ?>" width="64" /><br><br>
                    <input type="file" name="filefoto" value="<?php echo $data->gambar ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      
    </section>
</div>
<?php $this->load->view('admin/Footer'); ?>
  

  