<?php $this->load->view('admin/Head'); ?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/Header'); ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/Sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url();?>Admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('admin/Footer'); ?>