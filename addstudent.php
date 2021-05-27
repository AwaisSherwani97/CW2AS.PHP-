<?php

$msg="";
$filename = "";
if (isset($_GET['filename'])) {
      $msg="";
      if ($_GET['filename'] == "fail") {$msg = "upload failed";}
      else {
		  $msg = 'File uploaded sucessfully';
		  $filename = $_GET['filename'];
	  }
	  echo $msg;
   }
?>
<html>

<body>

<form action="_includes/upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

<form action="_includes/signup.inc.php" method="POST">

 <input type="text" name="firstname" placeholder="Firstname">
 <input type="text" name="lastname" placeholder="Lastname">
 <input type="date" name="dob" placeholder="DoB">
 <input type="text" name="house" placeholder="House">
 <input type="text" name="town" placeholder="Town">
 <input type="text" name="county" placeholder="County">
 <input type="text" name="country" placeholder="Country">
 <input type="text" name="postcode" placeholder="PostCode">
 <input type="password" name="password" placeholder="PassWord">
 <input type="text" name="picture" value="<?php echo $filename; ?>">
 <button type="submit" name="submit">Add student </button>
</form>
</body>
</html>