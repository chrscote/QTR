<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quality Tool Repair (QTR)</title>
        <link rel="stylesheet" href="qtrNew.css" type="text/css" />
        <script language="javascript" src="qtr.js"></script>
        <meta http-equiv="cache-control" content="no-cache" />
        <META NAME="keywords" CONTENT="Tool Repair, Quality Tool Repair, QTR, Jewett City Tool Repair, Connecticut Tool Repair, Power Tools, Power Tool Repair, DeWalt Tools, Hitachi Tools, Porter-Cable Tools, CT Tool Repair, Black and Decker, DeWalt, Hitachi, Makita, Metabo, Milwaukee, Porter-Cable, Bosch, Kango">
        <META NAME="description" CONTENT="QTR is a factory authorized service center for a number of manufacturers. We are here to provide parts and service to all commercial applications, contractors and individual users of power tools and equipment.">
        <META NAME="robots" CONTENT="FOLLOW,INDEX">
    </head>

<body>
	<div id="container">
        <div id="hdr">
        	<?php include("header.inc.php");  ?>
        </div>
        <div id="content">
        	<?php 
				if (!isset($_REQUEST["pg"])) {
					include("home.inc.php"); 
				} else {
					$content = $_REQUEST["pg"];
					$page = $content.".inc.php";
					include($page);
				}
			?>
        </div>
        <div id="footer">
        	<?php include("footer.inc.php"); ?>
        </div>
    </div>
</body>
</html>