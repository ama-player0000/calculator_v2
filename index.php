<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/css" href="style.css" rel="stylesheet">
    <title>calcultor</title>
</head>
<body>
<?php 

if(isset($_POST['idname'])){
	$text1 = $_POST['number1'];
	$text2 = $_POST['number2'];
	$operator = $_POST['idname'];
if($operator = "+"){
		$result = $text1+$text2;
	}
elseif($operator == "-"){
		$result = $text1-$text2;
	}
elseif($operator == "*"){
		$result = $text1*$text2;
	}
elseif($operator == "/"){
		$result = $text1/$text2;
	}
}
?>
<form action="" method="post">
	<fieldset>
	<p>calculator AMA</p>
	<input name="number1" value="<?php echo $text1="0" ?>" />
	<br>
	<br>
	<input name="number2" value="<?php echo $text2="0" ?>" />
	<br>
	<br>
	<input name="result" value="<?php echo $result="0" ?>" />
	<br>
	<br>
	<input type="submit" class="click" name="idname" value="+">
	<input type="submit" class="click" name="idname" value="-">
	<input type="submit" class="click" name="idname" value="*">
	<input type="submit" class="click" name="idname" value="/">
	</fieldset>
</body>
</html>
