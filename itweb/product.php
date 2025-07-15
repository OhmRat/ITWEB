<?php
    include './controls/fetchProduct.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Website</title>
        <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <section id="fetch_product" class="py-5">
        <div class="container">
            <h2 class="mb-4">แสดงข้อมูลสินค้า</h2>

            <?php if ($stmt && $stmt->rowCount() > 0) : ?>
                <div class="container mt-5">
                    <div class="row">
                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo htmlspecialchars($row['product_name']); ?></h5>
                                        <p class="card-text"><strong>รายละเอียด:</strong> <?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                                        <p class="card-text"><strong>ราคา:</strong> ฿<?php echo number_format($row['price'], 2); ?></p>
                                        <p class="card-text"><strong>วันที่เพิ่มสินค้า:</strong> <?php echo htmlspecialchars($row['created_at']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php else : ?>
                <div class="alert alert-warning">ไม่มีข้อมูลสินค้าในระบบ</div>
            <?php endif; ?>

        </div>
    </section>
</body>

</html>