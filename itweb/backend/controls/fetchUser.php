<?php 
    include 'db.php';
    
    $sql = "SELECT `id`, `first_name`, `last_name`, `address`, `phone`, `email`, `password`, `created_at` , `role`  FROM `users`"; 
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
?>