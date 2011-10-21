<?php
$url = isset($_GET['url']) ? $_GET['url'] : "";
$size = isset($_GET['size']) ? $_GET['size'] : "";
$anno = isset($_GET['annotation']) ? $_GET['annotation'] : "inline";

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
<g:plusone size="<?php echo htmlspecialchars($size); ?>" annotation="<?php echo htmlspecialchars($anno) ?>" href="<?php echo htmlspecialchars($url); ?>"></g:plusone>

<!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</body>
</html>
