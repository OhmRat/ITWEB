    <?php 
    include 'controls/db.php';
    session_start();

    $sql = "SELECT `id`, `first_name`, `last_name`, `address`, `phone`, `email`, `password`, `created_at`, `role` FROM `users`"; 
    $stmt =$pdo->prepare($sql);
    $stmt->execute();
    
    ?>