<?php 
//Testing session - to use sql lookup

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$uid = $_SESSION['userid'];
$email = $_SESSION['email'];

//echo $email;
//echo $uid;

$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'bugmeissue';


$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM Issues WHERE assigned_to = $uid");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($results);

?>

  <table id = "hometab">
    <tr>
      <th>Title</th>
      <th>Type</th>
      <th>Status</th>
      <th>Assigned To</th>
      <th>Created</th>
    </tr>

    <?php foreach ($results as $row): ?>
      <tr>
        <td><?= $row['title']; ?></td>
        <td><?= $row['type']; ?></td>
        <td><?= $row['status']; ?></td>
        <td><?= $row['assigned_to']; ?></td>
        <td><?= $row['created']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>