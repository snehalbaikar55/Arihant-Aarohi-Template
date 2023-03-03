<?php include 'dbcon.php';?>
<?php include "include/backend.php";?>
<?php include "include/log.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $propertydetails['PropertyName'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="<?php echo $propertydetails['PropertyName'];?>">
    <meta name="description" content="<?php echo $metadata['metadescription'];?>">
    <meta name="keywords" content="<?php echo $metadata['keywords'];?>">
    <link rel="canonical" href="<?php echo $form['domain'];?>"/>
    <link rel="icon" href="img/<?php echo $favicon['FeaturedImage'];?>"  sizes="16x16" alt="<?php echo $propertydetails['PropertyName'];?> favicon">

    <link rel="stylesheet" href="css/bt.css" />
    <link rel="stylesheet" href="css/Animate.css" />
    <link rel="stylesheet" href="font/css/fontawesome.min.css">
    <link rel="stylesheet" href="font/css/solid.css">
    <link rel="dns-prefetch" href="http://googletagmanager.com/" crossorigin>
    <link rel="dns-prefetch" href="https://www.clickcease.com" crossorigin>
    <!--<link rel="dns-prefetch" href="https://www.clickcease.com/monitor/stat.js" crossorigin>-->


 <style> :root{--colorPrimary:<?php echo $propertydetails['Colour1'] ?>;--colorSecondary:<?php echo $propertydetails['Colour2'] ?>;--colorBtn:#ffffff}
</style>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WD6Q2RN');</script>
<!-- End Google Tag Manager -->


</head>

<body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WD6Q2RN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


 <div class="col-md-12 col-lg-9 col-xl-9 col-xs-12 no-gutters" id="home">
        <header class="fixed-top"> 
        <div class="navbar navbar-expand-lg navbar-light bg-light">


                <a class="" href="<?php echo $form['domain'];?>#home">
                <img width="150" height="48" src="./img/<?php echo $logo['FeaturedImage'];?>" class="logo" alt="logo" >
                </a> 
                
                <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" id="burger" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                </button>
            <nav class="main-nav navbar-light bg-light"  id="main-nav">

               
                    <ul class="navbar-nav mr-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo $form['domain'];?>#home"><i class="fa fa-home nav-icon" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $form['domain'];?>#price"><span><b>&#8377;</b></span> Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $form['domain'];?>#floorplan"><i class="fa fa-building" aria-hidden="true"></i>Floorplan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $form['domain'];?>#amenities"><i class="fa fa-cutlery font-weight-bold nav-icon"></i> Amenities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $form['domain'];?>#images"><i class="fa fa-image"></i> Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $form['domain'];?>#map"><i class="fa fa-road font-weight-bold nav-icon" aria-hidden="true"></i> Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $form['domain'];?>#NRI"><i class="fa fa-plane font-weight-bold nav-icon" aria-hidden="true"></i> NRI Services</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal"   data-title="Download Brochure" id="DownloadBrochure_head"><i class="fa fa-download font-weight-bold animated slideInDown infinite nav-icon" aria-hidden="true"></i> Brochure</a>
                        </li>
                    </ul>
            </nav>
                        
           </div>  
       
      </header>
 