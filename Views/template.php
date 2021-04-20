<?php

if (isset($_GET['route'])) {

	if (
		$_GET['route'] == 'dashboard' 									||
		$_GET['route'] == 'profile' 									||
		$_GET['route'] == 'project' 									||
		$_GET['route'] == 'notification' 								||
		$_GET['route'] == 'account-settings' 							||
		$_GET['route'] == 'users' 										||
		$_GET['route'] == 'team'	 									||
		$_GET['route'] == 'working' 									||
		$_GET['route'] == 'business' 									||
		$_GET['route'] == '404'
	) {

		include("Views/includes/header.php");
		include("modules/cms/".$_GET['route'].".php");
		include("Views/includes/footer.php");

	}
	else if(
		$_GET['route'] == 'login' 										||
		$_GET['route'] == 'forget-password'
	
	) {
		include("Views/modules/Login/login-header.php");
		include("Views/modules/Login/" . $_GET['route'] . ".php");
		include("Views/modules/Login/login-footer.php");
	}
	else if(
		$_GET['route'] == 'index' 										||
		$_GET['route'] == 'aboutus'										||
		$_GET['route'] == 'testimonials'								||
		$_GET['route'] == 'portfolio'									||
		$_GET['route'] == 'why-us'
		
		){

		include("Views/includes/header-front.php");
		include("Views/modules/". $_GET['route'] .".php");
		include("Views/includes/footer-front.php");

	}else{

		include("Views/modules/404.php");
	}

} else {
	include("Views/includes/header.php");
	include("modules/dashboard.php");
	include("Views/includes/footer.php");

}

?>