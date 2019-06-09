<?php
  session_start();
  if(isset($_POST['value'])) {
	$_SESSION['value1'] = $_POST['value'];
}
$arr = $final = array(); 
foreach($_SESSION['value1'] as $valchar) {
	$lastPos = 0; $count = 0;
    $positions = array();

  while (($lastPos = strpos($valchar, '?', $lastPos))!== false) {
    $positions[] = $lastPos;
    $lastPos = $lastPos + strlen('?');
  } 
    //$pos = strpos($_SESSION['value1'], '?', $start);
	//print_r($positions);print "\n";
  foreach($_SESSION['value'] as $valchar1) {
    $match = TRUE;
	for($i=0; $i<$_SESSION['name'][1]; $i++)
	{
      if(!in_array($i, $positions)) {
	    if($valchar[$i] != $valchar1[$i]) {
		   $match = FALSE;
	    }
      }
    }
	if($match == TRUE) {
		$count++;
	}
  }
  $final[] = $count;
} 
//session_destroy();
print("Output:");
foreach($final as $finals) {
echo "<br><input type='text' value='$finals'/><hr/>";
}
?>