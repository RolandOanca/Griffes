<footer>
<div class="container">
    <div class="row footer">
        <div class="col-3">
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
        
        <div class="col-4">
        <div class="footer-menu">
            <nav class="menu-footer-container">
                <ul id="menu-footer" class="wp_menu">
                    <li class=""><a href="#">About Us</a></li>
                    <li class=""><a href="#">Real Estate Advisory</a></li>
                    <li class=""><a href="#">News</a></li>
                    <li class=""><a href="#">Set-up</a></li>
                    <li class=""><a href="#">Properties</a></li>
                    <li class=""><a href="#">Marketing</a></li>
                    <li class=""><a href="#">Clients</a></li>
                </ul>
            </nav>          
        </div>
        </div>
        
        <div class="col-2">
        <div class="footer-contact">
                <h4>Contact</h4>
                <ul>
                    <li class="address"><i class="icon-location"></i>Unirii View | Bv. Coposu 6-8, sector 3, Bucharest</li>
                    <li class="phone"><i class="icon-phone"></i><a href="tel:00 40 721 711 634">00 40 721 711 634</a></li>
                    <li class="e-mail"><i class="icon-mail"></i><a href="mailto: andreea.paun@griffes.ro"> andreea.paun@griffes.ro</a></li>
                </ul>
            </div>
        </div>

        <div class="col-3">
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
                <div class="columns small-12 text-center">
                    <p>© 2019 Griffes. All rights reserved. Web famous by<span><a href="http://www.ejump.ro/" target="_blank"> eJump </a></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>

<?php wp_footer();?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.js"></script>
<script src=" <?php echo get_template_directory_uri() . '/js/scripts.js?ver='.microtime() ?>"></script>
</body>
</html>