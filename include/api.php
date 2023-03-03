<?php
$request = $_REQUEST;
//print $request['fname'];
read($request);
function read($request){
                $curl_connection =curl_init('https://smashsst.com/mcrm/modules/Webforms/capture.php');
                curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
                curl_setopt($curl_connection, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
                curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $request);
                $result = curl_exec($curl_connection);
                //print_r(curl_getinfo($curl_connection));
                //echo curl_errno($curl_connection) . '-' . curl_error($curl_connection);
                curl_close($curl_connection); 
                //print($result);

                date_default_timezone_set('Asia/Kolkata'); 
            
                $logfile= '../mylog.txt';
                //$IP = $_SERVER['REMOTE_ADDR'];
                 $logdetails= date("F j, Y, g:i a") . ': ' . 'Visitor ip='.$_SERVER['REMOTE_ADDR'] . 'project_id='.$request['cf_984']  .'project_name='.$request['cf_854']  .'Email='.$request['email'] .'Mobile='. $request['mobile'].'ISD='.$request['cf_888'].'lastname='.$request['lastname'] .'Result='.$result."<br>" ;

                // open the file for reading and writing
                $fp = fopen($logfile, "a+");

                // write out new log entry to the beginning of the file
                fwrite($fp, $logdetails, strlen($logdetails));
                file_put_contents('../mylog.txt',"\r\n",FILE_APPEND);
                fclose($fp);
                return"success";
}
?>