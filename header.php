	<meta http-equiv="Content-Type" content="text/html; CHARSET=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta name="description" content="<?php print Settings::get('metaDescription') ?>" />
	<meta name="keywords" content="<?php print Settings::get('metaTags') ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php print $layout_favicon;?>" />
	<link rel="stylesheet" type="text/css" href="<?php print resourceLink("css/common.css");?>" />
	<link rel="stylesheetasdf" type="text/css" id="theme_css" href="<?php print resourceLink($layout_themefile); ?>" /> 

	<script type="text/javascript" src="<?php print resourceLink("lib/jquery.js");?>"></script>
	<script type="text/javascript" src="<?php print resourceLink("lib/tricks.js");?>"></script>
	<script type="text/javascript" src="<?php print resourceLink("lib/jquery.tablednd_0_5.js");?>"></script>
	<script type="text/javascript" src="<?php print resourceLink("lib/jquery.scrollTo-1.4.2-min.js");?>"></script>

	<?php
		$bucket = "pageHeader"; include("./lib/pluginloader.php");
	?>
	
