<?php
  require_once('config.php');
 
  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = 'SELECT firstname FROM details WHERE firstname LIKE :firstname';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['firstname' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();
 
    if ($result) {
      foreach ($result as $row) {
        echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['firstname'] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }
  }
?>