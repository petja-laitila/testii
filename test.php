<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="test.php" method="post">
Project name: <input type="text" name="project"><br>
<input type="submit" value="Submit">
</form>
<?php
$get_params = $_GET['saibaa'];
$post_params = $_POST['project'];
  $h = fopen('param_log', 'a');
  fwrite($h, 'POST params: ' . $post_params . "\n");
  fwrite($h, 'GET params: ' . $get_params . "\n");
  fclose($h);
?>
</body>
</html>
