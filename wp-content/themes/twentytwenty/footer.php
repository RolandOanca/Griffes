<footer>

    <div id="contact" class="row footer">
        <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="footer-logo">
                <div class="logo-footer-img">
                    <a href=""><img src="http://griffes.ro/wp-content/uploads/2016/10/logogf.png" alt=""></a>
                </div>
                <div class="social-menu">
                    <ul>
                        <li><a href=""><i class="icon-facebook"></i></a></li>
                        <li><a href=""><i class="icon-twitter"></i></a></li>
                        <li><a href=""><i class="icon-pinterest"></i></a></li>
                        <li><a href=""><i class="icon-gplus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="footer-menu">
            <?php 
            wp_nav_menu( array(
                'menu'   => 'footer-menu'
            ) );
        ?>        
        </div>
        </div>
        
        <div class="col-lg-2 col-sm-12 col-md-6">
        <div class="footer-contact">
                <h4>Contact</h4>
                <ul>
                    <li class="address"><i class="icon-location"></i><?php echo CFS()->get("street_field");?></li>
                    <li class="phone"><i class="icon-phone"></i><a href="tel:00 40 721 711 634"><?php echo CFS()->get("phone_field");?></a></li>
                    <li class="e-mail"><i class="icon-mail"></i><a href="mailto: andreea.paun@griffes.ro"> <?php echo CFS()->get("email_field");?></a></li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="footer-form">
                <h4>Write to us</h4>
                <form>
                    <input type="email" placeholder="Your Email">
                    <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Message..."></textarea>
                    <button id="send-form" type="submit" class="btn-send">Send </button>
                </form> 
            </div>
        </div>
        
    </div>
    <div class="panefooter2">
        <div class="row">
            <div class="copyright">
                <div class="columns col-sm-12 text-center">
                    <p>© 2019 Griffes. All rights reserved. Web famous by<span><a href="http://www.ejump.ro/" target="_blank"> eJump </a></span></p>
                </div>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer();?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.js"></script> -->
<!-- <script src=" <?php echo get_template_directory_uri() . '/js/scripts.js?ver='.microtime() ?>"></script> -->
</body>
</html>