
<!-- Start footer -->
<footer>
   
    <!-- Start Social Nav Menu -->
<?php// wp_nav_menu( array('theme_location' => 'social-menu','container' => 'div','container_class' => 'social-icons')); ?>
<!-- End Social Nav Menu -->             
    
    <div class="social-icons">    
        <ul class="social-icons-ul">
            <li class="icon"><a class="flaticon-facebook3" href="#"></a></li>
            <li class="icon"><a class="flaticon-twitter" href="#"></a></li>
            <li class="icon"><a class="flaticon-socialnetwork348" href="#"></a></li>
            <li class="icon"><a class="flaticon-tumblr1" href="#"></a></li>
        </ul>  
    </div>
<div class="donate-button footer">
    <button type="submit" class="btn-success">Donate</button>
</div>  
<div class="clear"></div>  
    
<!-- Start wp Footer Menu -->

<?php wp_nav_menu( array('theme_location' => 'footer-menu','container' => 'nav','container_id' => 'nav-footer')); ?>
<!-- End wp Footer Menu -->

    <p>&copy; The Wishing Well 2015 - <?php print("" . date('Y') . ""); ?></p>
</footer>
<!-- close footer -->

<!-- Start WP Footer - contains js scripts, etc. -->
<?php wp_footer(); ?>

<!-- End WP Footer -->

</div><!--  close wrapper  -->

</body>
</html>