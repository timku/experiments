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
	font-family: Prestige, monospace;
	font-size: 22px;
	color:gray;
	background-color:black;
	letter-spacing:-5px;
	line-height:80%;
	height:100%;
	margin:2px;
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
<body>2 <?php
for ($i = 2; $i <= 50090; $i++){ 
    if($i % 2 == 1){
		$d = 3; 
		$x = sqrt($i); 
		while ($i % $d != 0 && $d < $x) $d += 2; 
		if((($i % $d == 0 && $i != $d) * 1) == 0) echo "$i ";
	}
}//*/
?>
</div>
</body>
</html>