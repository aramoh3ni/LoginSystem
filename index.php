<?php include "./components/header.php"; ?>
<div class="container" id="main">
    <div class="card">
        <div class="card-header text-center">
            <img src="assets/image/aradev-logo-2.png" width="150" alt="aradev11_logo" />
        </div>
        <div class="row card-body">
            <form action="./Includes/login.inc.php" class="needs-validation" novalidate method="POST">
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="username" placeholder="Email or Username" name="username" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                </div>
                <div class="form-group form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" required> Remamber Me.
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="login-submit">
                    <i class="bi bi-person-fill"></i>
                    Login
                </button>
            </form>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <a href="#">Forgat Password</a>
            <a href="./sign-up.php">Create an Account!</a>
        </div>
    </div>
</div>
<?php include "./components/footer.php"; ?>