<?php require "pages/signup.users.php";  ?>
<?php require "includes/header/header.php";  ?>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">SIGN UP ADMIN</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4 mb-3">
                        <h6 class="text-uppercase font-weight-bold mb-3">Sign up </h6>
                        <?php if(!empty($errors)):?>
                            <div class="alert alert-danger">
                                Please fix the errors below!
                            </div>
                        <?php endif;?>
                        <form method="POST">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control p-4" placeholder="User Name"  name="user_name" value="<?= OLD_VALUES('user_name');?>"/>
                                    </div>
                                    <?php if(!empty($errors['userName'])):?>
                                        <div class="alert alert-danger">
                                            <?= $errors['userName'];?>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control p-4" placeholder="Your First Name" name="first_name" value="<?= OLD_VALUES('first_name');?>" />
                                    </div>
                                    <?php if(!empty($errors['first_name'])):?>
                                        <div class="alert alert-danger">
                                            <?= $errors['first_name'];?>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control p-4" placeholder="Your Last Name"  name="last_name" value="<?= OLD_VALUES('last_name');?>"/>
                                    </div>
                                    <?php if(!empty($errors['last_name'])):?>
                                        <div class="alert alert-danger">
                                            <?= $errors['last_name'];?>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control p-4" placeholder="Your Email"  name="email" value="<?= OLD_VALUES('email');?>"/>
                                    </div>
                                    <?php if(!empty($errors['email'])):?>
                                        <div class="alert alert-danger">
                                            <?= $errors['email'];?>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control p-4" placeholder="Your Password"  name="password" value="<?= OLD_VALUES('password');?>"/>
                                    </div>
                                    <?php if(!empty($errors['password'])):?>
                                        <div class="alert alert-danger">
                                            <?= $errors['password'];?>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control p-4" placeholder="Confirm Your Password"  name="confirm_password" value="<?= OLD_VALUES('confirm_password');?>"/>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom:10px">
                                <span>Do you have already an account? <a href="<?=ROOT?>/login_admin">Log in </a> </span>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;">
                                    Sign up
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