<?php
/*
Template Name: home page only
*/


get_header(); ?>

	<div id="page-wrap">
		<div class="content">
			<!-- START HOME -->
            <div id="home" class="section">
                <a class="vcard" href="<?php echo trailingslashit( get_bloginfo( 'template_directory' ) ); ?>vcard.vcf"><img alt="Download my vCard" title="Download my vCard" src="<?php echo trailingslashit( get_bloginfo( 'template_directory' ) ); ?>images/download_img.png"></a>
                  
                 <div class="avatar"<?php echo get_avatar( $user->user_email, $size = '164' ); ?></div><!--avatar --> 
                <hgroup>
                	<h1><?php echo $user->first_name . ' ' . $user->last_name; ?>Ben Lobaugh</h1>
                	<h4><?php echo $user->title; ?>Chief Code Poet</h4>                        
                </hgroup>
				<ul class="social-links">
                   <a href="<?php echo $user->user_url; ?>blog.php" ><li><span>Blog</span></li></a>
                   <a href="http://linkedin.com/in/<?php echo $user->linkedin; ?>"> <li><span>Linkedin</span></li></a>
                   <a href="https://twitter.com/<?php echo $user->twitter; ?>"><li><span>Twitter</span></li></a>
                </ul>
             </div><!-- home -->
            <!-- END HOME -->
			<!-- need to put the info for the slider -->
			<div class="section red"></div>
			<div class="section blue"></div>
			<div class="section green"></div>
			
			
			
			
			
			
		</div><!-- content -->	
		<div class="main-nav-menu">

		</div><!-- main nav menu -->
	</div><!-- page wrap -->









<?php get_footer(); ?>