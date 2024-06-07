<?php /* Template Name: Register */ ?>
<?php get_header(); ?>

<?php
if(is_user_logged_in()){
	echo "<script>location.href='".site_url()."';</script>"; 
}
?>
        <div class="bg-login-section  bg-regisration">

            <div class="container">

                <div class="login-section">

                    <div class="row registration-row">

                        

                        <div class="col-lg-6 inner-row">

                            <div class="login-form-section">

									<h2 class="login-title">

                                        Sign up

                                    </h2>
                            	<?php echo do_shortcode("[user_registration_form id='1586']"); ?>

                            	<div class="accout">

											<p>

												Have an account?<a href="<?php echo site_url().'/login' ?>">Log in</a>

											</p>

										</div>

                                <!-- <form action="" method="post">

                                    <h2 class="login-title">

                                        sign up

                                    </h2>


                                    <div class="row">

                                        <div class="col-lg-6 col-md-6">

                                            <div class="login-input">  

                                                <label>name</label>

                                                <input type="text" value="" placeholder="">

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6">

                                            <div class="login-input">  

                                                <label>surname</label>

                                                <input type="text" value="" placeholder="">

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6">

                                            <div class="login-input">  

                                                <label>number</label>

                                                <input type="number" value="" placeholder="">

                                            </div>

                                        </div>

                                        <div class="col-lg-6 col-md-6">

                                            <div class="login-input">  

                                                <label>email id</label>

                                                <input type="email" value="" placeholder="">

                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-md-12">

                                            <div class="login-input">  

                                                <label>nation</label>

                                                <input type="text" value="" placeholder="">

                                            </div>

                                        </div>

                                     

                                        <div class="col-lg-12 col-md-12">

                                            <div class="login-input">  

                                                <label>password</label>

                                                <input type="password" value="" placeholder="">

                                            </div>

                                        </div>

                                        <div class="col-lg-12 col-md-12">

                                            <div class="login-input">  

                                                <label>confirm password</label>

                                                <input type="password" value="" placeholder="">

                                            </div>

                                        </div>

                                       



                                        <div class="col-lg-12">

                                            <div class="login-btn">

                                                <button type="submit" class="about-one__btn">

                                                     create account

                                                </button>

                                            </div>

                                        </div>

                                        <div class="accout">

											<p>

												Have an account?<a href="<?php echo site_url().'/login' ?>">Log in</a>

											</p>

										</div>

                                    </div>

                                </form> -->

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
<?php get_footer(); ?>