<?php require "pages/login.admin.php"; ?>
<?php require "includes/header/header.php";  ?>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">LOG IN ADMIN</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4 mb-3">
                        <h6 class="text-uppercase font-weight-bold mb-3">Log in </h6>
                        <?php if(!empty($errors)):?>
                            <div class="alert alert-danger">
                                Please fix the errors below!
                            </div>
                        <?php endif;?>
                        <?php if(!empty($errors['failed'])):?>
                            <div class="alert alert-danger">
                                <?= $errors['failed'];?>
                            </div>
                        <?php endif;?>
                        <form method="POST">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control p-4" placeholder="Your Email"  name="email"/>
                                    </div>
                                    <?php if(!empty($errors['email'])):?>
                                        <div class="alert alert-danger">
                                            <?= $errors['email'];?>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control p-4" placeholder="Your Password"  name="password"/>
                                    </div>
                                    <?php if(!empty($errors['password'])):?>
                                        <div class="alert alert-danger">
                                            <?= $errors['password'];?>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>

                            <div style="margin-bottom:10px">
                                <span>Not having an account yet? <a href="<?=ROOT?>/signup_admin">Register</a> </span>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                                >Log in 
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
<?php require "includes/footer/footer.php";  ?>