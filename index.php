<?php

if(isset($_POST['submit'])){
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];

       move_uploaded_file($file_tmp, "/public_html/". $file_name);
}
?>

<html>
<head>
<title>11</title>
</head>

<body>

<form method="post" enctype="multipart/form-data" >

<input type="file" name="file" />
<input type="submit" name="submit" />

</form>

</body>
</html>