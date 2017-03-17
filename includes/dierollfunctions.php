<?php

function addDieroll($roll, $die, $whorolled) {

  $dt = new DateTime();
  $dtstr = $dt->format('d-m-Y H:i:s');

  include_once '../includes/dierolldb.php';

  // Check connection
  if ($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO dicerolls (die, result, timerolled, whorolled) VALUES ('$die', $roll, '$dtstr', '$whorolled')";

  try
  {
      $result = $conn->query($sql);
  }
  catch (Exception $e)
  {
    echo "Exception: ".$e->getMessage();
  }

  $conn->close();  
}

function echoback($val)
{
  echo "Received: ".$val;
}
?>
