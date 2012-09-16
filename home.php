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
			        <div id="networks" class="section">
		                <div class="innerpage">
		                    <h2>Contact Me</h2>
		                    <form action="" method="post" >
		                        <p>
		                            <input type="text" default="Subject" name="name" value="Your Name..." onblur="if (this.value == '') {this.value = 'Your Name...';}"
		 onfocus="if (this.value == 'Your Name...') {this.value = '';}" />
		                            <input type="text" default="Subject" name="email" value="Your Email..." onblur="if (this.value == '') {this.value = 'Your Email...';}"
		 onfocus="if (this.value == 'Your Email...') {this.value = '';}"/></p>
		                        <p><input type="text" default="Subject" name="subject" value="Subject..." onblur="if (this.value == '') {this.value = 'Subject...';}"
		 onfocus="if (this.value == 'Subject...') {this.value = '';}" /></p>
		                        <p><textarea name="body" rows="3" cols="60" onblur="if (this.value == '') {this.value = 'Message...';}"
		 onfocus="if (this.value == 'Message...') {this.value = '';}">Message...</textarea></p>
		                        <p><input type="submit" name="blobaugh_card_contact"/></p>
		                        <input type="hidden" name="h1" value="" />
		                        <input ytpe="hidden" name="h2" value="42" />
		                    </form>
		                </div>
		            </div>
			<div class="section green"></div>
			
			
			
			
			
			
		</div><!-- content -->	
		<div class="main-nav-menu">

		</div><!-- main nav menu -->
	</div><!-- page wrap -->









<?php get_footer(); ?>