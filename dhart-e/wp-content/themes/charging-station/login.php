<?php /* Template Name: Login */ ?>
<?php get_header(); ?>

<?php
if(is_user_logged_in()){
	echo "<script>location.href='".site_url()."';</script>"; 
}
?>
<div class="bg-login-section">

            <div class="container">

                <div class="login-section">

                    <div class="row">

                        <div class="col-lg-6 inner-row">

                            <div class="login-form-section">

                                <form name="loginform" id="loginform" action="<?php echo site_url( '/' ); ?>" method="post">

                                    <h2 class="login-title">

                                        Log in

                                    </h2>

									<?php
									$redirect_to = '';
									?>


                                    <div class="row">

                                        <div class="col-lg-12">

                                            <div class="login-input">  

                                                <label>email</label>

                                                <input type="text" name="log" value="" placeholder="">

                                            </div>

                                        </div>

                                        <div class="col-lg-12">

                                            <div class="login-input">  

                                                <label>password</label>

                                                <input type="password" name="pwd" value="" placeholder="">

                                            </div>

                                        </div>

                                        <div class="forget">

                                            <a href="<?php echo site_url().'/forgot-password' ?>">forgot password?</a>

                                        </div>



                                        <div class="col-lg-12">

                                            <div class="login-btn">
												<input type="hidden" value="<?php echo esc_attr( $redirect_to ); ?>" name="redirect_to">
												<input type="hidden" value="1" name="testcookie">
                                                <button type="submit" name="wp-submit" id="wp-submit" class="about-one__btn">

                                                     log in

                                                </button>

                                            </div>

                                        </div>



										<div class="accout">

											<p>

												Don't have an account?<a href="<?php echo site_url().'/register' ?>">create an account</a>

											</p>

										</div>



                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
<?php get_footer(); ?>