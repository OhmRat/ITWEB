    <?php 
    include 'controls/db.php';

    $sql = "SELECT `id`, `product_name`, `description`, `price`, `created_at` FROM `products`"; 
    $stmt =$pdo->prepare($sql);
    $stmt->execute();
    
    ?>