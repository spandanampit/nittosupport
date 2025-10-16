<?php

/** 
 * Template Name: Login Page 
 * Template Post Type: page 
 */
get_template_part('templates/parts/header');
?>

<section id="myCarousel" class="carousel">
    <?php echo do_shortcode('[metaslider id="80"]'); ?>
</section>


<section class="container">
    <div class="content loginContent">
        <!--Paragraph text start-->
        <div class="topody">
            <div class="row">
                <div class="col-sm-6 paddLFT60">
                    <h2>Login</h2>
                    <div class="error loginerror"></div>
                    <form id="Loginfrm" name="Loginfrm" class="Loginfrm mailIcon" role="form" autocomplete="off" action="#" method="post" novalidate="novalidate">
                        <div class="input-group">
                            <input type="text" name="EmailAddress" id="EmailAddress" tabindex="1" class="form-control" placeholder="Email" value="">
                            <span class="input-group-btn">
                                <button class="btniptsty btn btn-secondary" type="button">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                        <div class="input-group">
                            <input id="Password" name="Password" tabindex="2" type="password" class="form-control" placeholder="Password">
                            <span class="input-group-btn">
                                <button id="show_password" class="btniptsty btn btn-secondary" type="button">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>

                        <div class="form-group">
                            <p class="forgot-passwordTxt">Forgot your password? <a href="#">Click here</a></p>
                        </div>

                        <!-- <div class="form-group">
                            <div class="input-group">
                                <div class="g-recaptcha" tabindex="3" data-sitekey="6Ld0hcEUAAAAALLNb46lS9R69luBo4hzBPXEZqdq">
                                    <div style="width: 304px; height: 78px;">
                                        <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-u96eqrnl5mwz" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ld0hcEUAAAAALLNb46lS9R69luBo4hzBPXEZqdq&amp;co=aHR0cHM6Ly93d3cubml0dG9zdXBwb3J0LmNhOjQ0Mw..&amp;hl=en&amp;v=KmpMK968ITgSdSG_2lbUmd1o&amp;size=normal&amp;anchor-ms=20000&amp;execute-ms=15000&amp;cb=8c0py9char2d"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                    </div><iframe style="display: none;"></iframe>
                                </div>
                                <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="submit" tabindex="4" class="btn btn-login">Login</button>
                                </div>
                                <div class="col-xs-6">

                                    <div class="btn-lnkbx btn-lnk-lgn">
                                        <a class="btn-link-a" href="<?php echo site_url() . '/register' ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-sm-6 paddLFT60 borleft">
                    <h2>Tweets</h2>
                    <!-- tweets -->
                </div>
            </div>
        </div>
        <div class="bottombody">
            <h2><?php echo BOTTOM_BODY_HEADING; ?></h2>
            <p><?php echo BOTTOM_BODY_TEXT; ?></p>
        </div>

        <!--Paragraph text end-->
    </div>
</section>
<?php
get_template_part('templates/parts/footer');
