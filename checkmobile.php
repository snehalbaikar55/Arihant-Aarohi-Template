<?php
$con=mysqli_connect("localhost", "horizonf_runwal", "runwal@123", "horizonf_runwalnew");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}?>
<?php
include('include/vid.php');
 ?>
<?php  

$logfile= 'mobilelog.txt';
$IP = $_SERVER['REMOTE_ADDR'];

$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

if($lastname!=null&&$email!=null&&$mobile!=null){
$ret23=mysqli_query($con, "select * from tblproperty where ID='$propertyid'");   
$row=mysqli_fetch_array($ret23);
$propname=$row['PropertyName'];

$query2=mysqli_query($con, "insert into leads (PropertyID,PropertyName,Name,Email,Mobile) value('$propertyid','$propname','$lastname','$email','$mobile')");

$project = $row['PropertyName']; 

date_default_timezone_set("Asia/Kolkata");
//$logdetails= date("F j, Y, g:i a") . ': ' . '<a href=http://dnsstuff.com/tools/city.ch?ip='.$_SERVER['REMOTE_ADDR'].' target=_blank>'.$_SERVER['REMOTE_ADDR'].'</a>';

$logdetails= date("F j, Y, h:i:sa") . ':' . 'Visitor ip='.$_SERVER['REMOTE_ADDR'] . ': ' .'Name='.$lastname. ': ' . 'Mobile='.$mobile. ': ' .'Email='.$email. ': ' .'Project='.$project. ': ' .'Url='.$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// open the file for reading and writing
$fp = fopen($logfile, "a+");
// write out new log entry to the beginning of the file
fwrite($fp, $logdetails, strlen($logdetails));
file_put_contents('mobilelog.txt',"\r\n",FILE_APPEND);
fclose($fp);
}

$con -> close();
?>



