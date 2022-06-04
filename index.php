<?php include("./title.php"); ?>
<?php include("./config/con.php"); ?>

<!DOCTYPE html>
<html>
<head>
<table style="background-color:#59b04c">
	<?php include("./front.php"); ?>
	<title></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
</head>
<body>
<?php include("./banner.php"); ?>

<div class="container">
	
	<div class="row">
		<p>Tool description</p>
	</div>
	
	<div class='row' style='border: 1px solid #CCC; margin: 10px; padding: 10px; box-shadow: 2px 2px 0px 0px #CCC; border-radius: 10px; overflow: hidden;'>	
		<div style='text-align: center; margin: 10px;'>
			<?php
				if(isset($_POST['submit'])) {
					uploadAndConvert();
				}
			?>
		</div>

		<div class="row" style='text-align: center; border: 1px dashed #CCC; padding: 20px; max-width: 1200px; margin: 20px auto; border-radius: 10px;'>
			<form action="" method="post" enctype="multipart/form-data">
				<input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" required />
				<input class="btn btn-primary" type="submit" value="Upload Image" name="submit" style='margin: 10px;' />
			</form>
		</div>
	</div>
	
	
	
	<hr />
	
	<div class="row">
		<img src='./img/fronted.png' style="max-width: 700px; margin-bottom: 20px;" class="rounded mx-auto d-block" alt="" />
		<h2 class='display-6'>Thanks for using this script</h2>
		
	</div>
</div>
	
<?php include("./footing.php"); ?>

<html>

<head>
<title>Color Change</title>
</head>

<body bgcolor="<?php
if (isset($_POST['btn']))
{
$col=$_POST['t1'];
if(isset($col))
{
echo $p=$col;
}
else
{
echo $p="#ffffff";
}
}
?>">

<form action="" method="post" >
<strong> Choose Color to Change Background :- </strong>
<select name="t1">
<option value="">Choose Color </option>
<option value="#000000"> Black </option>
<option value="#0000ff"> Blue </option>
<option value="#a52a2a"> Brown </option>
<option value="#00ffff"> Cyan </option>
<option value="#006400"> Dark Green </option>
<option value="#808080"> Grey </option>
<option value="#008000"> Green </option>
<option value="#ffa500"> Orange </option>
<option value="#ffc0cb"> Pink </option>
<option value="#800080"> Purple </option>
<option value="#ff0000"> Red </option>
<option value="#ffffff"> White </option>
<option value="#ffff00"> Yellow </option>
</select>
<br>
<input type="submit" name="btn" value="Submit">
</form>

</body>
</html>
