<?php
header("Access-Control-Allow-Origin: *");

$query = $_GET['query'];
$query = htmlentities($query);
?>

<?php
if($query=="Home") {
  include 'Home.php'
  ?>

<?php
} elseif ($query=="Add") {
  include 'AddUser.php'
  ?>

<?php
} elseif($query=="NewIssue") {
  include 'NewIssue.php'
  ?>

<?php
} elseif($query=="Logout") {
  include 'Logout.php'
  ?>

<?php
} else { ?>
  <h1> TEST Else</h1>
<?php        
    } ?>
