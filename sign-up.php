<?php include "./components/header.php"; ?>
<div class="container" id="main">
    <div class="card">
        <div class="card-header text-center">
            <img src="assets/image/aradev-logo-2.png" width="150" alt="aradev11_logo" />
        </div>
        <div class="row card-body">
            <form action="./Includes/signup.inc.php" class="needs-validation" novalidate method="POST">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control" id="firstname" placeholder="Firstname" name="firstname" required>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="lastname" required>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" required>
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control" id="repwd" placeholder="Repeat your password" name="repwd" required>
                </div>
                <div class="form-group form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" required> Remamber Me.
                    </label>
                </div>
                <button type="submit" class="btn btn-primary" name="signup-submit">
                    <i class="bi bi-plus"></i>
                    Create Account
                </button>
            </form>
        </div>
        <div class="card-footer">
            <a href="index.php" class="text-right">I have Already an account.</a>
        </div>
    </div>
</div>
<?php include "./components/footer.php"; ?>