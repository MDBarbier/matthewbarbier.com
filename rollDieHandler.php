<?php
include_once '../includes/dierollfunctions.php';
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';

//Global variables
$dietype = "";

sec_session_start();

function rollDie($dietype, $whorolled)
{
  $min = 1;
  $max = 0;

  switch ($dietype) {
    case 'D6':
      $max = 6;
      break;
      case 'D4':
        $max = 4;
        break;
        case 'D8':
          $max = 8;
          break;
          case 'D10':
            $max = 10;
            break;
            case 'D12':
              $max = 10;
              break;
            case 'D20':
              $max = 20;
              break;
    default:
      echo "Invalid argument";
      break;
  }

  $roll = rand($min, $max);
  //echoback("hf");
  addDieroll($roll,$dietype,$whorolled);
  
  return $roll;

}

$whorolled = htmlentities($_SESSION['username']);

if(isset($_POST['dietype']) )
{
      $GLOBALS['dietype'] = $_POST["dietype"];
}

if ((!isset($dietype) || trim($dietype)===''))
{
  echo "Invalid Argument";
}
else
{
  if (login_check($mysqli) == true) :
   echo rollDie($GLOBALS['dietype'], $whorolled);
  else :
    echo "Unauthorised";
  endif;
}

?>
