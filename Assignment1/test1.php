<html>
<body>

<form action="test2.php" name = 'form2' method="post">
<?php
session_start();
$name = $arr = array();
if($_POST!= NULL) {
  $name = explode(" ",$_POST["name"]);
  $_SESSION['name'] = $name;
  for($i = 0; $i < $name[0]; $i++)  {
    echo "Input: <input type='text' name='value[$i]' required><br>";
  }
?>
<input type="submit">
</form>
<?php
}
?>
</body>
</html>