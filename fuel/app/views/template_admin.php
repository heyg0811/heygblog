<!DOCTYPE html>
<html>
<head>
  <title>あどみん</title>
  <!-- Bootstrap styles -->
  <?php echo Asset::css('admintheme/bootstrap.min.css');?>
  <?php echo Asset::css('admintheme/bootstrap-responsive.min.css');?>
  <?php echo Asset::css('admintheme/jquery.easy-pie-chart.css');?>
  <?php echo Asset::css('admintheme/styles.css');?>
  <?php echo Asset::css('admintheme/morris.css') ?>
  <?php echo Asset::js('vendor/modernizr/modernizr.js');?>
</head>
<body>
  <?php echo $content?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery/jquery-1.9.1.min.js"><\/script>')</script>
  <?php echo Asset::js('admintheme/raphael-min.js');?>
  <?php echo Asset::js('admintheme/morris.min.js');?>
  <?php echo Asset::js('admintheme/bootstrap.min.js');?>
  <?php echo Asset::js('admintheme/jquery.easy-pie-chart.js');?>
  <?php echo Asset::js('admin-original.js');?>
</body>
</html>