<?php
$url = isset($_GET['url']) ? $_GET['url'] : "";
$size = isset($_GET['size']) ? $_GET['size'] : "";

if(empty($url)) {
  echo "Need to specify URL (?url=http://...)";
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
html,body {
  margin:0;
  padding:0;
  width:auto;
  overflow:hidden;
}
</style>
</head>
<body>
<!-- See http://www.google.com/webmasters/+1/button/index.html -->
<!-- Place this tag where you want the +1 button to render -->
<g:plusone size="<?php echo htmlspecialchars($size); ?>" href="<?php echo htmlspecialchars($url); ?>"></g:plusone>
<!-- Place this tag in your head or just before your close body tag -->
<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
</body>
</html>
