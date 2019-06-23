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
        <li class="active">Edit Profile</li>
      </ol>
    </section>
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
            <?php foreach ($data as $data): ?>
            <form method="post" action="<?=base_url();?>admin/updateprofile" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data->username ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $data->email ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo $data->password ?>">
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