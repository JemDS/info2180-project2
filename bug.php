<?php

header("Access-Control-Allow-Origin: *");

$query = $_GET['query'];
$query = htmlentities($query);

?>

<?php
if($query=="Home") {?>
  <h1> Home</h1>

<?php
} elseif ($query=="Add") {?>
  <h1> Add</h1>

<?php
} elseif($query=="NewIssue") {?>
  <h1> New Lssue</h1>

<?php
} elseif($query=="Logout") {?>
  <h1> Logout</h1>

<?php
} else { ?>
  <h1> Home</h1>
<?php        
    } ?>
