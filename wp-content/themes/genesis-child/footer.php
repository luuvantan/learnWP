<footer class="footer"><?php ?>
                <div class="container">
                <?php $itemMenus = menuFooter();?>
                    <!-- top footer statrs -->
                    <div class="row top-footer">
                        <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                            <a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/food-picky-logo.png" alt="Footer logo"> </a> <span>Order Delivery &amp; Take-Out </span> </div>
                        <div class="col-xs-12 col-sm-2 about color-gray">
                           
                        </div>
                        <?php foreach($itemMenus[0] as $itemMenu): ?>
                            <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                                <h5><?php echo $itemMenu->title;?></h5>
                                <a href="<?php echo $itemMenu->url?>"><?php echo $itemMenu->title;?></a>
                                <ul>
                                    <?php if($itemMenus[$itemMenu->ID]): ?>
                                        <?php foreach($itemMenus[$itemMenu->ID] as $itemMenu): ?>
                                        <li style="margin:20px;"><a href="<?php echo $itemMenu->url?>"><?php echo $itemMenu->title;?></a></li>
                                            <?php if($itemMenus[$itemMenu->ID]): ?>
                                                <?php foreach($itemMenus[$itemMenu->ID] as $itemMenu): ?>
                                                <li style="margin-left:40px;"><a href="<?php echo $itemMenu->url?>"><?php echo $itemMenu->title;?></a></li>
                                                <?php endforeach;?>
                                            <?php endif?> 
                                        <?php endforeach;?>
                                    <?php endif?>    
                                </ul>

                            </div>                          
                        <?php endforeach;?>
                        <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                        <?php if ( is_active_sidebar( 'footer-a' ) ) : ?>
			
                            <div class="column column-1 one-third">
                            
                                <div class="widgets">
                        
                                    <?php dynamic_sidebar( 'footer-a' ); ?>
                                                        
                                </div>
                                
                            </div>
                            
                        <?php endif; ?>
                        </div>
                        <div class="col-xs-12 col-sm-2 pages color-gray">
                            
                        </div>
                        <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                            
                        </div>
                    </div>
                    <!-- top footer ends -->
                    <!-- bottom footer statrs -->
                    <div class="row bottom-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 payment-options color-gray">
                                    <h5>Payment Options</h5>
                                    <ul>
                                        <li>
                                            <a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/paypal.png" alt="Paypal"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mastercard.png" alt="Mastercard"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/maestro.png" alt="Maestro"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stripe.png" alt="Stripe"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bitcoin.png" alt="Bitcoin"> </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-4 address color-gray">
                                   
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- bottom footer ends -->
                </div>
            </footer>
            <!-- end:Footer -->
        </div>
        <!-- end:page wrapper -->
    </div>
    <!--/end:Site wrapper -->
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tether.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/animsition.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/headroom.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foodpicky.min.js"></script>
</body>

</html>
