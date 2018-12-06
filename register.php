<?php include('./util/database.php'); ?>
<?php include('./includes/header.php'); ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card rounded-0">
                            <div class="card-header">
                                <h3 class="mb-0 my-2">Sign Up</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" action="register.php" method="POST">
                                    <?php include('errors.php'); ?>
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" class="form-control" name="username" placeholder="full name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="email@gmail.com" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3">Password</label>
                                        <input type="password" class="form-control" name="password_1" placeholder="password" title="At least 6 characters with letters and numbers" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputVerify3">Verify</label>
                                        <input type="password" class="form-control" name="password_2" placeholder="password (again)" required="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg float-right" name="reg_user">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- <main>
        <div class="header">
            <h2>Register</h2>
        </div>
        <form action="output.php" method="post">
            <?php include('errors.php');?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label>Confirm password</label>
                <input type="password" name="password_2">
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Register</button>
            </div>
        </form>
        </main> -->
    <?php include('./includes/footer.php'); ?>