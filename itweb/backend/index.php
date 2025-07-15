<?php
session_start();
include './controls/fetchUser.php';
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: /itweb/index.php");
    exit;
}
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Console</title>
</head>

<body>
    <div class="d-flex">
        <?php include '../backend/components/header.php'; ?>
        <main class="p-4 flex-grow-1">
            <section id="fecth_user" class="py-5">
                <div class="container">
                    <h2 class="mb-4">say</h2> <?php if ($stmt->rowCount() > 0): ?> <div class="container mt-5">
                            <div class="row">
                                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <div class="col-md-4 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo htmlspecialchars($row['first_name']) . " " . htmlspecialchars($row['last_name']); ?></h5>
                                                <p class="card-text"><strong>awa:</strong><?php echo htmlspecialchars($row['email']); ?></p>
                                                <p class="card-text"><strong>asins:</strong><?php echo htmlspecialchars($row['phone']); ?></p>
                                                <p class="card-text"><strong>mag:</strong><?php echo htmlspecialchars($row['address']); ?></p>
                                                <p class="card-text"><strong>Junas:</strong><?php echo htmlspecialchars($row['created_at']); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </section>
        </main>

    </div>
</body>

<body>
    <h2>Admin Page</h2>
</body>

</html>