<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All-in-one Video Platform</title> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guizenow/jsv/main3.css">
</head>

<body>
<script type="text/javascript">document.write("<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/gh/guizenow/jsv/jquery.js\"></sc"+"ript>");</script>
		<?php
include_once('simple_html_dom_cu.php');
$value1 = $_GET['link'];
$html = file_get_html($value1);
$list = $html->find('div[class="fullw"]');
foreach ( $list as $item ) {
    echo $item->outertext . PHP_EOL;
}
$html->clear();
unset($html);
?>
<script src="https://cdn.jsdelivr.net/gh/guizenow/jsv/jwplayerl.js" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/gh/guizenow/jsv/jqry.js"></script>	
<style>.jw-controlbar-center-group .jw-slider-time, .jw-controlbar-center-group .jw-text-alt {margin-top: -8px;}.jw-state-idle .jw-controlbar.jw-background-color.jw-reset {display: none !important;}.jw-state-idle .jw-media.jw-reset {z-index: 10;position: relative !important;}.jw-state-idle .jw-controls.jw-reset {z-index: 11;}</style>
</body>
</html>
