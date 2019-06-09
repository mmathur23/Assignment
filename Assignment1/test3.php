<html>
<body>

<form action="test4.php" name = 'form2' method="post">
<?php
$name = $arr = array();
if($_POST!= NULL) {
  $name = explode(" ",$_POST["name"]);
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