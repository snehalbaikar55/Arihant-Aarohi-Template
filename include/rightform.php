<?php

$name='';

$email='';

$mobile='';

?>


<?php

$agent = $_SERVER['HTTP_USER_AGENT'];

// Browser Detection

if(preg_match('/Firefox/i',$agent)) $br = 'Firefox'; 
  elseif(preg_match('/Mac/i',$agent)) $br = 'Mac';
  elseif(preg_match('/Chrome/i',$agent)) $br = 'Chrome'; 
  elseif(preg_match('/Opera/i',$agent)) $br = 'Opera'; 
  elseif(preg_match('/MSIE/i',$agent)) $br = 'IE'; 
  else $bs = 'Unknown';

$useragent=$_SERVER['HTTP_USER_AGENT'];

// Detect Device/Operating System

if(preg_match('/Linux/i',$useragent)) $os = 'Linux';
  elseif(preg_match('/Mac/i',$useragent)) $os = 'Mac'; 
  elseif(preg_match('/iPhone/i',$useragent)) $os = 'iPhone'; 
  elseif(preg_match('/iPad/i',$useragent)) $os = 'iPad'; 
  elseif(preg_match('/Droid/i',$useragent)) $os = 'Droid'; 
  elseif(preg_match('/Unix/i',$useragent)) $os = 'Unix'; 
  elseif(preg_match('/Windows/i',$useragent)) $os = 'Windows';
  else $os = 'Unknown';
  $url = "https://smashsst.com/mcrm/modules/Webforms/capture.php";
  $enu = base64_encode($url);

?>
  

<form id ="form" name="<?php  echo $form['formname']; ?>" action="">
    
<input type="hidden" name="__vtrftk" value="<?php echo $form['id1'];?>">
<input type="hidden" name="publicid" value="<?php echo $form['id2'];?>">

<input name="cf_950" data-label="" value="<?php echo $form['domain'];?>" type="hidden">
  

<input type="hidden" name="urlencodeenable" value="1">
    
    
<input type="hidden" name="name" value="<?php echo $propertydetails['PropertyName'];?>">
<input name="cf_854" data-label="" value="<?php echo $propertydetails['PropertyName'];?>" type="hidden">
<input name="cf_886" data-label="" value="<?php echo $propertydetails['Location'];?>" type="hidden">  
<input name="cf_1359" data-label="" value="<?php echo $propertydetails['PropertyName'];?>" type="hidden"> 
 <input name="cf_1291" data-label="" value="<?php echo $propertydetails['Region']?>" type="hidden"> 
<input name="cf_1293" data-label="" value="<?php echo $propertydetails['SubRegion']?>" type="hidden"> 
  

<input type="hidden" name="cf_976" value="" id="lead"><!--from which lead is comming-->
<input type="hidden" name="cf_942" value="">  
<input type="hidden" name="cf_1050" data-label="" value="<?php print $os; ?>"> 
<input type="hidden" name="cf_948" data-label="" value="<?php print $agent; ?>"> 
<input type="hidden" name="cf_964" data-label="" value="<?php print $br; ?>">
<input type="hidden" name="cf_1063" data-label="" value="<?php print $logdetails; ?>"> 

<input name="cf_908" data-label="" value="" type="hidden">
<input name="leadsource" data-label="" value="website" type="hidden">
<input name="cf_928" data-label="" value="Website" type="hidden"> 
<input name="cf_954" data-label="" value="<?php echo $sessionid; ?>" type="hidden">  <!--session id-->
<input name="cf_938" data-label="" value="<?php print $uri; ?>" type="hidden"> <!--referral URL-->

<!--User Details-->
<input name="cf_1271" data-label="" value="<?php echo $result['lat']; ?>" type="hidden"> 
<input name="cf_1281" data-label="" value="<?php echo $result['lon']; ?>" type="hidden"> 
<input name="cf_1307" data-label="" value="<?php echo $result['regionName']; ?>" type="hidden">
<input name="cf_1297" data-label="" value="<?php echo $result['city']; ?>" type="hidden">
<input name="cf_998" data-label="" value="<?php echo $result['country']; ?>" type="hidden">
<input name="cf_1299" data-label="" value="<?php echo $result['zip']; ?>" type="hidden">
<input name="cf_1301" data-label="" value="<?php echo $result['timezone']; ?>" type="hidden">
<input name="cf_1305" data-label="" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" type="hidden">



<input name="cf_1277" data-label="" value="admin" type="hidden">
<!--end user details -->


<input type="hidden" name="cf_952" data-label="" value="<?php echo $adposition; ?>">  <!-- ad position-->
<input type="hidden" name="cf_974" data-label="" value="<?php echo $matchtype; ?>"> 
<input type="hidden" name="cf_970" data-label="" value="<?php echo $campaignid; ?>"> 

<input type="hidden" name="cf_978" data-label="" value="<?php echo $tar; ?>"> 
<input type="hidden" name="cf_962" data-label="" value="<?php echo $place ;?>"> 
<input type="hidden" name="cf_982" data-label="" value="<?php echo $create; ?>"> 
<input type="hidden" name="cf_966" data-label="" value="<?php echo $physical; ?>"> 
<input type="hidden" name="cf_968" data-label="" value="<?php echo $CampaignSource; ?>"> 
<input type="hidden" name="cf_948"  data-label="" value="<?php echo $dev; ?>"> 
<input type="hidden" name="cf_980"  data-label="" value="<?php echo $keyw; ?>"> 
<input type="hidden" name="cf_960"  data-label="" value="<?php echo $campaigntype; ?>"> 
<input type="hidden" name="cf_946"  data-label="" value="<?php echo  $src; ?>"> 
<input type="hidden" name="cf_986"  data-label="" value="<?php echo $netw; ?>">
<input type="hidden" name="cf_1002"  data-label="" value="<?php echo $CampaignContent; ?>">

<input name="enu" id="enu" data-label="" value="<?php echo $enu;?>" type="hidden">
<input name="cf_984" data-label="" value="<?php echo $propertyid; ?>" type="hidden"> 
<input name="cf_1038" data-label="" value="" type="hidden">   
<div class="form-group"  style="    width: 95%;"> 
<input type="text" name="lastname" pattern="[a-zA-Z ]+" class="form-control rounded-0 micro-form-field" required placeholder="Name"> 
</div>
<div class="form-group"   style="    width: 95%;"> 
<select name="cf_888" data-label="label:Country+Code" class="form-control form-group" id="cc" onChange=selectedCountry(value) style="width: 25%;  float: left;">
				<option value="India+91">India +91</option> 
				<option value=" Afghanistan +93"> Afghanistan +93</option>
				<option value=" Albania +355">Albania +355</option><option value="Algeria +213">Algeria +213</option><option value="Andorra +376">Andorra +376</option><option value="Angola +244">Angola +244</option><option value="Argentina +54">Argentina +54</option><option value="Armenia +374">Armenia +374</option><option value="Australia +61">Australia +61</option><option value="Austria +43">Austria +43</option><option value="Azerbaigan +994">Azerbaigan +994</option><option value="Bahrain +973">Bahrain +973</option><option value="Bangladesh +880">Bangladesh +880</option><option value="Belarus +375">Belarus +375</option><option value="Belgium +32">Belgium +32</option><option value="Bolivia +591">Bolivia +591</option><option value="Bosnia +387">Bosnia +387</option><option value="Brazil +55">Brazil +55</option><option value="Bulgaria +359">Bulgaria +359</option>
				<option value="Cameroon +237">Cameroon +237</option><option value="Canada +1">Canada +1</option><option value="Chad +235">Chad +235</option><option value="Chile +56">Chile +56</option><option value="China[People's Republic] +86">China[People's Republic] +86</option><option value="Colombia +57">Colombia +57</option><option value="Congo +242">Congo +242</option><option value="Costa Rica +506">Costa Rica +506</option><option value="Croatia +385">Croatia +385</option><option value="Cuba +53">Cuba +53</option><option value="Cyprus +357">Cyprus +357</option><option value="Czech Republic +420">Czech Republic +420</option><option value="Denmark +45">Denmark +45</option><option value="Ecuador +593">Ecuador +593</option>
				<option value="Egypt +20">Egypt +20</option><option value="France +33">France +33</option><option value="Georgia +995">Georgia +995</option><option value="Germany +49">Germany +49</option><option value="Hong Kong +852">Hong Kong +852</option><option value="Iceland +354">Iceland +354</option>
				<option value="Indonesia +62">Indonesia +62</option><option value="Iran +98">Iran +98</option><option value="Iraq +964">Iraq +964</option><option value="Ireland +353">Ireland +353</option><option value="Italy +36">Italy +36</option><option value="Japan +81">Japan +81</option><option value="Kenya +254">Kenya +254</option><option value="Korea +85">Korea +85</option><option value="Liberia +231">Liberia +231</option><option value="Libya +218">Libya +218</option>
				<option value="Liechtenstein +41">Liechtenstein +41</option><option value="Nepal +977">Nepal +977</option><option value="New Zealand +64">New Zealand +64</option>
				<option value="Nigeria +234">Nigeria +234</option><option value="North Korea +850">North Korea +850</option><option value="Pakistan +92">Pakistan +92</option><option value="Romania +40">Romania +40</option><option value="Russia +70">Russia +70</option><option value="Saudi Arabia +966">Saudi Arabia +966</option>
				<option value="Senegal +221">Senegal +221</option><option value="Serbia +381">Serbia +381</option><option value="Singapore+65">Singapore +65</option><option value="Somalia +252">Somalia +252</option><option value="South Africa +27">South Africa +27</option><option value="Sri Lanka +94">Sri Lanka +94</option><option value="Sweden +46">Sweden +46</option><option value="Switzerland +41">Switzerland +41</option><option value="Turkey +90">Turkey +90</option><option value="United-Arab-Emirates+971">United Arab Emirates +971</option><option value="United-Kingdom+44">United Kingdom +44</option><option value="USA+1">USA+1</option><option value="Zaire +243">Zaire +243</option><option value="Zambia +260">Zambia +260</option><option value="Zimbabwe +263">Zimbabwe +263</option> 
			</select>
			<input type="tel" inputmode="numeric" pattern="^[6-9]\d{9}$"  minlength="10" maxlength="16" id="india" class="form-control rounded-0 micro-form-field" placeholder="Mobile No"  style="float: right; width: 75%;"> 
      <input type="tel" inputmode="numeric" maxlength="20" class="form-control rounded-0 micro-form-field" placeholder="Mobile No" id="ocountry"style="float: right; width: 75%; display:none;"> 

</div> 
<div class="form-group "   style="width: 95%;"> <input type="email" name="email" class="form-control rounded-0 micro-form-field" required placeholder="E-Mail Address"> 
</div> 
<div id="waiting" style="display:none">Please wait...</div>
<!-- <button id="myRightbtnRight" type="submit" name="enq_formBtn" class="btn btn-info micro-form-btn mt-2 effetMoveGradient" >Enquiry Now</button> -->
<input id="myRightbtn" name="myRightbtn" class="btn btn-info micro-form-btn mt-2 effetMoveGradient" type="submit" value="Enquiry Now">
</form>

<div style="margin-top: 24px;">
<h6 class="aa animate__bounceIn infinite" style="animation-duration: 3s;"><div class="form-last-heading" style="padding: 2px 8px;background: #e8e8e8; display:flex;"><img src="img/ola.jpeg" style="width: 50px;"> Free cab facility for site visit</div></h6>
</div>


