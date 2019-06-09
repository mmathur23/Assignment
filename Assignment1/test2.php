<?php
session_start();
  if(isset($_POST['value'])) {
	$_SESSION['value'] = $_POST['value'];
}
?>
<html>
<body>

<form action="test3.php" name = 'form1' method="post">
Input: <input type="text" name="name" required><br>
<input type="submit"/>
</form>

</body>
</html>
