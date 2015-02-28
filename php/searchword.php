<?php 
//header("Content-Type: text/plain");
$characters = array(
"A","B","C","D","E","F","G","H","J","K","L","M",
"N","O","P","Q","R","S","T","U","V","W","X","Y","Z",
"a","b","c","d","e","f","g","h","j","k","l","m",
"n","o","p","q","r","s","t","u","v","w","x","y","z",
"1","2","3","4","5","6","7","8","9");

$secret = "rustybullethole";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html> 
<head> 
<style>
*{
	margin:0px;
	padding:0px;
}
body{
	font-family: "Courier New", Courier, monospace;
	font-size: 22px;
	color:gray;
	background-color:black;
	letter-spacing:-8px;
	line-height:75%;
	height:100%;
	margin:2px;
	overflow:hidden;
	font-weight:1;
}
.red{
	color:red;
}
.red:hover{
 text-shadow: blue 2px 2px, red -2px -2px
 }
#debug{
	position:fixed;
	right:0px;
	bottom:0px;
	letter-spacing:-1px;
	line-height:20px;
	background-color:white;
}
</style>
</head> 
<body>
<?php
$i=0;
$pos=0;
$repeatammount=0;
$amount = 15000;
while($i < $amount){
	$char = $characters[rand(0, count($characters)-1)];
	if($secret[$pos]==strtolower($char)&&($pos < strlen($secret))){
		echo "<font class='red'>$char</font> ";
		$pos++;
		if($pos >= strlen($secret)){
			$repeatammount++;
			$pos=0;
		}
	}else{
		echo $char." ";
	}
	$i++;
}
?>
<div id="debug">
Total chars: <?php echo $amount;?><br>
Platern repeat: <?php echo "$repeatammount.$pos";?><br>
</div>
</body>
</html>