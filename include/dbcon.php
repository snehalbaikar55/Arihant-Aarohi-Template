<?php
$con=mysqli_connect("localhost", "horizonf_runwal", "runwal@123", "horizonf_runwalnew");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}?>
<?php
include('include/vid.php');
 ?>
 <?php
$query1=mysqli_query($con,"select * from tblpropertydetails where PropertyID='$propertyid'");
while ($result1=mysqli_fetch_array($query1)) {
    $propertydetails = $result1;
}

$query2=mysqli_query($con,"select Type, CarpetArea, Price from tblpricing where PropertyID='$propertyid'");
while ($result2=mysqli_fetch_array($query2)) {
    $priceType[] = $result2['Type'];
    $priceCA[] = $result2['CarpetArea'];
    $price[] = $result2['Price'];    
}

$query3=mysqli_query($con,"select Image, Title from tblfloorplans where PropertyID='$propertyid'");
while ($result3=mysqli_fetch_array($query3)) {
    $floorplanimage[] = $result3['Image'];
    $title[] = $result3['Title'];   
}

$query4=mysqli_query($con,"select FeaturedImage from tblgalleryimages where PropertyID='$propertyid'");
while ($result4=mysqli_fetch_array($query4)) {
    $gallery[] = $result4['FeaturedImage'];
}

$query5=mysqli_query($con,"select URL from tblurl where PropertyID='$propertyid'");
while ($result5=mysqli_fetch_array($query5)) {
    $location = $result5;
}

$query6=mysqli_query($con,"select FeaturedImage from tblfavicon where PropertyID='$propertyid'");
while ($result6=mysqli_fetch_array($query6)) {
    $favicon = $result6;
}
$query7=mysqli_query($con,"select FeaturedImage from tbllogos where PropertyID='$propertyid'");
while ($result7=mysqli_fetch_array($query7)) {
    $logo = $result7;
}

$query8=mysqli_query($con,"select FeaturedImage from tblfeaturedimages where PropertyID='$propertyid'");
while ($result8=mysqli_fetch_array($query8)) {
    $banner[] = $result8['FeaturedImage'];
}

$query8=mysqli_query($con,"select Rera from tblrera where PropertyID='$propertyid'");
while ($result8=mysqli_fetch_array($query8)) {
    $Rera[] = $result8['Rera'];
}

$query9=mysqli_query($con,"select * from tblform where PropertyID='$propertyid'");
while ($result9=mysqli_fetch_array($query9)) {
    $form= $result9;
}

$query10=mysqli_query($con,"select * from tblextracode where PropertyID='$propertyid'");
while ($result10=mysqli_fetch_array($query10)) {
    $script = $result10;
}
$query11=mysqli_query($con,"select l from tblnearbylocation where PropertyID='$propertyid'");
while ($result11=mysqli_fetch_array($query11)) {
    $nearbyloc[] = $result11['l'];
    
}
$query12=mysqli_query($con,"select metadescription, keywords from tblkeywords where PropertyID='$propertyid'");
while ($result12=mysqli_fetch_array($query12)) {
    $metadata = $result12;
    
}


$query13=mysqli_query($con,"select Title from tblamenities where PropertyID='$propertyid' AND status = '1'");
while ($result13=mysqli_fetch_array($query13)) {
    $amenities[] = $result13['Title'];
    
}
   // echo $amenities[0];

// $query12=mysqli_query($con,"select metadescription,keywords from tblkeyword where PropertyID='$propertyid'");
// while ($result12=mysqli_fetch_array($query12)) {
//     $matadesc = $result12;
    
    
// }

$con -> close();

?>


