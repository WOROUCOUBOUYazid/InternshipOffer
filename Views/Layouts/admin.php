<!DOCTYPE html>
<html>
<?php include(VIEW."Admin/_head.php") ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
    <?php include(VIEW."Admin/_navbar.php") ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php include(VIEW."Admin/_sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $contentPage ?>
  </div>
  <!-- /.content-wrapper -->
  <?php include(VIEW."Admin/_footer.php") ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include(VIEW."Admin/_js_files.php") ?>

</body>
</html>
