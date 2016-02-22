<?php echo doctype('html5'); ?>
<html lang="en-US">
    <head>
        <title>Login Page</title>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/AdminLTE.min.css">
        <?php echo meta('description', 'this is content'); ?>
        <?php
        $attr = array(
            array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0',));
        echo meta($attr);
        ?>

        <?php
        $link_attr = array(
            'href' => '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css',
            'rel' => 'stylesheet',
        );
        echo link_tag($link_attr);
        ?>
        <?php
        $link_attr1 = array(
            'href' => base_url() . 'asset/bootstrap/css/bootstrap.min.css',
            'rel' => 'stylesheet',
        );
        echo link_tag($link_attr1);
        ?>
        <?php
        $link_attr2 = array(
            'href' => base_url() . 'asset/css/dalim.css',
            'rel' => 'stylesheet',
        );
        echo link_tag($link_attr2);
        ?>


    </head>
    <body>
        <?php
        if (isset($all_user)) {
            $this->load->view($all_user);
        }
        ?>


        <div class="container">
            <div class="omb_login">
                <h3 class="omb_authTitle">Login / <a href="<?php echo base_url(); ?>signup_control/">Sign up</a></h3>


                <div class="row omb_row-sm-offset-3 omb_loginOr">
                    <div class="col-xs-12 col-sm-6">
                        <hr class="omb_hrOr">
                        <span class="omb_spanOr">or </span>

                    </div>
                </div>

                <div class="row omb_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-6">	

                        <?php echo form_open('admin_control/user_login_data_check/'); ?>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <?php
                            $username = array(
                                'id' => 'username-input',
                                'name' => 'username',
                                'class' => 'form-control',
                                'required' => 'required',
                                'placeholder' => 'email address',
                            );
                            echo form_input($username);
                            ?>

                        </div>
                        <span class="help-block"></span>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                            <?php
                            $password = array(
                                'id' => 'password-input',
                                'class' => 'form-control',
                                'name' => 'password',
                                'placeholder' => 'Password',
                                'required' => 'required',
                            );

                            echo form_password($password);
                            ?>
                        </div>
                        <span class="help-block"> <br /></span>
                        <?php
                        if (validation_errors()) {
                            ?>
                            <div class="error_color">
                                <?php echo validation_errors(); ?>
                            </div>
                        <?php } ?>

                        <?php
                        $message=$this->session->userdata('user_data');
                        if ($message) {
                            ?>
                            <div class="error_color">
                                <?php echo $message;
                                $this->session->unset_userdata('user_data');
                                ?>
                            </div>
                        <?php } ?> 
                         <?php
                        $message1=$this->session->userdata('user_data1');
                        if ($message1) {
                            ?>
                            <div class="error_color">
                                <?php echo $message1;
                                $this->session->unset_userdata('user_data1');
                                ?>
                            </div>
                        <?php } ?> 

                        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="row omb_row-sm-offset-3 login_with_social_icon">
                    <div class="col-xs-12 col-sm-3">
                        <a class="btn btn-block btn-social btn-facebook">
                            <i class="fa fa-facebook"></i> Sign in with Facebook
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <a class="btn btn-block btn-social btn-google">
                            <i class="fa fa-google-plus"></i> Sign in with Google
                        </a>
                    </div>
                </div>	
                <div class="row omb_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-3">
                        <label class="checkbox" style="margin-left: 20px">
                            <input type="checkbox" value="remember-me">Remember Me
                        </label>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <p class="omb_forgotPwd">
                            <a href="#">Forgot password?</a>
                        </p>
                    </div>
                </div>	    	
            </div>
        </div>
    </body>
</html>







