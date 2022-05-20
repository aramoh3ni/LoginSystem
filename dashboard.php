<?php
include "./components/header.php";
include "./Includes/sesstion.inc.php";
?>

<div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-between">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="./dashboard.php">Login System</a>

        <h5 class="text-light text-uppercase">
            😃 Wellcome back dear 👉
            <?php echo $_SESSION['username']; ?>
        </h5>

        <!-- Toggler/collapsibe Button -->
        <a href="./Includes/logout.inc.php" class="btn btn-sm btn-danger">
         Logout 
        </a>
    </nav>
</div>
<?php include "./components/footer.php" ?>