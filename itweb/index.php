<?php
    session_start();
    if(!isset($_SESSION['user_id'])) {
        header("Location: signin.php");
        exit();
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
</head>
<body>
    <?php include './components/header.php';?>
    <!-- <h1>Hello</h1>
    <p><?php echo htmlspecialchars($_SESSION['name']); ?></p>
    <p><?php echo htmlspecialchars($_SESSION    ['email']); ?></p>
    <a href="controls/signout.php">sign out</a> -->

    <!-- Hero Section -->
    <section class="hero text-white text-center py-5" style=" background:linear-gradient(to right,#290054,#00b2ff); height: 100vh;">
            <div class="container h-100 d-flex flex-column justify-content-center">
                <h1 class="display-4">welcome</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#content" class="btn btn-light btn-1g mx-auto">get start</a>
        </div>
    </section>

    <section id="content" class="py-5">
        <div    class="container">
            <h2 class="text-center mb-4"></h2>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nisi ut inventore a temporibus corrupti minima qui, laborum voluptates voluptatibus, quos unde id. Error optio explicabo, autem veniam officia magni! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti nemo aut veritatis iste, fugit consectetur! Delectus natus omnis, sed obcaecati eum quod voluptas! Minima velit sint corrupti asperiores maxime voluptas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quasi reprehenderit velit vel repellendus vero ipsum cupiditate ea illum tempore eius doloribus quos maxime, debitis laboriosam error repellat vitae at.</p>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis molestias earum minima repellat deserunt iure ipsum non reprehenderit rem quaerat? Atque molestias iure dolorem labore repudiandae omnis illum error ut.</p>
        </div>


    </section>
    <?php include './components/footer.php';?>
    <script>
        <?php if(isset($_GET['error']) && $_GET ['error'] == 'invalid') : ?>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Invalid email or password',
            footer: 'Please ry again.'
        });
        <?php endif; ?>

                <?php if(isset($_GET['success']) && $_GET ['success'] == 'true') : ?>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'You have signed in successfully!',
            footer: 'Go Away Teen.'
        });
        <?php endif; ?>
    </script>
</body>
</html>