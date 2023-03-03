  <?php



$uri = $_SERVER['REQUEST_URI'];
$base_url = $uri;



$str1 = explode("?", $base_url);



// // Use parse_url() function to parse the URL
// // and return an associative array which
// // contains its various components
 $url_components = parse_url($base_url);

// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);

// Display result
$sourceurl=$str1[0];

$dev= $params['device'];

$matchtype= $params['matchtype'];

//Keywords
if($params['keyword']!=null)
{$keyw=$params['keyword'];}
else if($params['utm_term']!=null){
    $keyw=$params['utm_term'];}
else{$keyw="";}

$tar= $params['target'];
$place= $params['placement'];
$create= $params['creative'];
$physical= $params['loc_physical_ms'];

//backend source

if($params['utm_medium']!=null)
{$src=$params['utm_medium'];}
else if($params['source']!=null){
    $src=$params['source'];}
else{$src="";}

//Network
if($params['network']=="g"){
$netw= "Google Search";
}else if($params['network']=="s"){
    $netw= "Search Partner";
}else if($params['network']=="d"){
    $netw= "Display Network";
}else if($params['network']=="u"){
    $netw= "Smart Shopping Campaingn";
}else if($params['network']=="ytu"){
    $netw= "Youtube Video";
}else if($params['network']=="yts"){
    $netw= "Youtube Search";
}else if($params['network']=="vp"){
    $netw= "Google Video Partner";
}

$adposition= $params['adposition'];

//Campaign ID
if($params['campaignid']!=null)
{$campaignid=$params['campaignid'];}
else if($params['utm_id']!=null){
    $campaignid=$params['utm_id'];}
else{$campaignid="";}

//Campaign Name
if($params['campaigntype']!=null)
{$campaigntype=$params['campaigntype'];}
else if($params['utm_campaign']!=null){
    $campaigntype=$params['utm_campaign'];}
else{$campaigntype="";}

$CampaignSource = $params['utm_source'];//Ad Source 

$CampaignContent = $params['utm_content'];//Source Like video_ad, text_ad, blue_banner, green_banner



?>






