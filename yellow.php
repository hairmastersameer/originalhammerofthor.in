<?php
if(isset($_POST['sendorder'])){
$cusName=$_POST['cname'];
$cusMob=$_POST['cmob'];

$msg='From= '.$cusName;
$msg.='Mobile Number= '.$cusMob;
$msg.='Message= NEW ORDER';
$email ="ramanjeet.singh8@gmail.com";
$sub='NEW ORDER';

date_default_timezone_set('Asia/Kolkata');
$datetime= date ('d-M-y H:i:s');

$message = "
<html>
<head>
<title></title>
<style type='text/css'>
	table,td,th{
		font-family: calibri;
		border-collapse: collapse;
		border:2px solid green;
	}
	td,th{
		padding:10px 15px;
	}
	th{
	background:black;
	color:white;
		font-size: 2em;
	}
</style>
</head>
<body>
<table>
<tr>
<th colspan='2'>New Order</th>
</tr>
<tr>
<td>Name</td>
<td><b>".$cusName."</b></td>
</tr>
<tr>
<td>Contact No</td>
<td><b>".$cusMob."</b></td>
</tr>
<tr>
<td>Time</td>
<td><b>".$datetime."</b></td>
</tr>
</table>
</body>
</html>
";



$sender ='TSTSMS';
$mob ='919997273429';
$auth='D!~4809J7ob0SgVeC';
$msg = urlencode("Name: ".$cusName."\r\n Contact: ".$cusMob."\r\n Time: ".$datetime); 

$url = 'https://global.datagenit.com/API/sms-api.php?auth='.$auth.'&msisdn='.$mob.'&senderid='.$sender.'&message='.$msg.'';  // API URL

//function define
function SendSMS($hostUrl){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $hostUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // change to 1 to verify cert
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
$result = curl_exec($ch);
return $result;
} 
$result=SendSMS($url);  // call function that return response with code
echo $result;





$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .="From:<no-reply@originalhammerofthor.in>". "\r\n";
$maildone= mail($email,$sub,$message,$headers);
if($maildone){
  ?><script type="text/javascript">
    alert('Your order has been received. We will contact you soon.');
  </script><?php
}
else{
    ?><script type="text/javascript">
    alert('Some error is occuring. please try later');
  </script><?php
}

}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Hammer of Thor</title>
	
	    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157987713-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157987713-2');
</script>
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="sty4.css">
</head>
<body style="position: relative;">

<section id="callnow3">
	<div id="callnow3in"><a href="tel:8750408408" style="color: white"><img src="image/yellow.png"></a></div>
</section>
<div style="height: 110px;"></div>

<main style="">

<section id="secA">
	<br>
	<h1><span style="color:red">ORIGINAL</span><br><span>HAMMER OF THOR</span></h1>
	<h2>हमेशा के लिए और भी बड़ा लिंग प्राप्त करें</h2>
	<p>90% महिलाएं चरमानंद का नाटक करती हैं। यह सब इसलिए है क्योंकि ज्यादातर पुरुषों का लिंग छोटा और ढीला होता है। क्या आप इसके लिए राजी हैं?</p>
</section>
<br>

<section id="secB">
	<div id="secBA">
		<ul>
			<li><div><img src="image/tick.png"></div><p>लंबाई में +35%</p></li>
			<li><div><img src="image/tick.png"></div><p>मोटाई में +18%</p></li>
			<li><div><img src="image/tick.png"></div><p>तुरंत लिंग का खड़ा होना</p></li>
			<li><div><img src="image/tick.png"></div><p>मजबूत सहनशक्ति: 3 घंटे तक सेक्स करें</p></li>
		</ul>
	</div>
	<div id="secBB">
			<div class="no1">
				<img src="image/no1.png">
			</div>
			<div>
				<img src="image/bot.png">
			</div>

	</div>	
</section>
<section style="width: 100%;text-align: center;">
	<img id="mygif" src="image/01.webp">
</section>
<br><br>
<section id="secC">

	<div id="secCA">
		<form id="mform" action="" method="POST">
			<h1>50% Discount पाने के लिए अभी फॉर्म भरें</h1>
			<input type="hidden" name="sendorder" value="sendorder">
			<input type="text" placeholder="Name" name="cname"  required>
			<input type="text" placeholder="Mobile Number" name="cmob" required="">
			<div style="text-align: center;"><button id="or-btn">ऑर्डर करें</button></div>
		</form>
	</div>
	<div id="secCB">
		<div class="secCBA">
		<h1>लिंग को मोटा लम्बा और सेक्स पावर बढ़ाने में रामबाण तरीका</h1>
		<h1>Capsule + Oil</h1>
		</div>
		<div><img src="image/04.webp"></div>
	</div>
</section>



<style type="text/css">

</style>
<section id="secD">
	<div id="secDB">
		<h1>HAMMER OF THOR</h1>
		<h1>लिंग बड़ा करने के लिए मर्दों का नंबर 1 ब्रांड</h1>
	</div>
	<div id="secDA">
		<img src="image/03.webwp">
	</div>

</section>
<section id="callnow4">
	<div id="callnow4in"><a href="tel:8750408408" style="color: white"><img src="image/yellow.png"></a></div>
</section>
<br><br><br><br>
</main>

</body>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</html>