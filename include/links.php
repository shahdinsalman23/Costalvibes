<?php
$site_name = "Costal Vibes of Florida";
$site_url = "www.costalvibesofflorida.com";
$facebook = "#";
$twitter = "#";
$instagram = "#";
$youtube = "#";
$email = "info@costalvibesofflorida.com";
$call = "1234567890";
$phone = "123 456 7890";
$address = "Lorem Ipsum is simply dummy text of the printing";
$currency = "$";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="<?php echo isset($description) ? $description : '';  ?>" name="description">
    <title> <?php echo isset($title) ? $title : 'Costal Vibes of Florida';  ?> </title>

    <?php
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    	{
    		$url_p = "https://";
    	}
    	else{  
    	    $url_p = "https://";   
    	}
    	$url_p.= $_SERVER['HTTP_HOST'];   
    	$url_p.= $_SERVER['REQUEST_URI'];
    	$url_p = str_replace(".php","",$url_p);
    	$url_p = str_replace("index","",$url_p);
    	$url_p = preg_replace('/\?.*/', '', $url_p);
    	$url_p = str_replace("//","/",$url_p);
    	$url_p = str_replace("https:/","https://",$url_p);
    ?>

    <meta property="og:locale" content="en_US" />
	<meta property="fb:app_id" content="" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="<?=$url_p;?>"/>
	<meta property="og:site_name" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:secure_url" content="" />
	<meta property="og:image:width" content="1024" />
	<meta property="og:image:height" content="576" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:image:alt" content="" />

    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- aos animation -->
    <link rel="stylesheet" href="css/aos.css">

	<!-- JQUERY UI CSS -->
	<link rel="stylesheet" href="css/jquery-ui.min.css">

    <!-- SLICK CSS -->
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">

	<!-- OWL CSS -->
	<link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">

	<!-- FANCYBOX -->
	<link href="css/fancybox.min.css" rel="stylesheet">

	<!-- CUSTOM STYLE -->
    <link href="css/custom.css" rel="stylesheet">
    
</head>

<body>