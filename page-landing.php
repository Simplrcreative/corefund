<?php
	/* Template Name: Landing Page */
	//HEAD
	include('includes/templates/common/header.php');
	
	if(have_posts()) {
		while(have_posts()) {
			the_post();
?>	
			<!-- CONTENT -->
			<div class="core-page">
				<section class="container core-landing">
					
					<div class="row core-images core-row">
						<div class="col-8 order-1 col-md-4 core-logo">
                            <picture>
                                <img src="<?php echo $theme_images_url; ?>core-fund-administrators-logo.svg" data-src="<?php echo $theme_images_url; ?>core-fund-administrators-logo.svg" class="lazy" alt="CORE Fund Administrators" />
                            </picture>
						</div>
						<div class="col-8 order-3 order-md-2 col-md-4 core-tagline">
							<picture>
                                <img src="<?php echo $theme_images_url; ?>core-tagline-wht.svg" data-src="<?php echo $theme_images_url; ?>core-tagline-wht.svg" class="lazy" alt="Focused on REAL Preservation and Resolution" />
                            </picture>
						</div>
						<div class="col order-2 order-md-3 core-socials linkedin">
							<a href="https://www.linkedin.com/company/core-fund-administrators/" title="CORE Fund Administrators on Linkedin">
								<picture>
									<img src="<?php echo $theme_images_url; ?>core-linkedin-icon.svg" data-src="<?php echo $theme_images_url; ?>core-linkedin-icon.svg" class="lazy" alt="Focused on REAL Preservation and Resolution" />
								</picture>
							</a>
						</div>
					</div>
					
					<div class="row core-row">
						<div class="col-md-4 col-12">
							<p class="lead core-lead">Core Fund Administrators (formerly TDF Fund Administrators) is an FSCA registered fund administrator. Since 2009 it has exclusively administered unclaimed benefit funds providing unrivalled expertise and experience within this niche sector.</p>
						</div>
						<div class="col-md-4 col-12">
							<p>The Core Unclaimed Benefit Funds are characterised by an investment strategy that prioritizes benefit value preservation after all fees together with an administration and tracing fee structure that does not materially dilute benefits payable, irrespective of value.</p>
						</div>
					</div>
					
					<div class="row core-contact">
						<div class="col-md-4 col-12 core-contact-details">
							<div>Contact us</div>
							<div>
								<p class="core-detail email"><a href="mailto:info@corefund.co.za?subject=CORE Fund Administrators Website Enguiry " title="Email CORE">info@corefund.co.za</a></p>
								<p class="core-detail phone">021 023 4610</p>
							</div>
						</div>
					</div>
					
				</section>
			
			<!-- END CONTENT -->
			
			<!-- GRAPHIC DEVICE -->
			<section class="fixed-bottom container core-graphic-device">
				
					<div class="row core-row">
						<div class="col-md-4 col-12">
						</div>
						<div class="col-md-4 col-12">
							<picture>
								<img src="<?php echo $theme_images_url; ?>core-graphic.svg" data-src="<?php echo $theme_images_url; ?>core-graphic.svg" class="lazy" alt="CORE Graphic Device" />
							</picture>
						</div>
					</div>
			</section>
			<!-- END GRAPHIC DEVICE -->
<?php	
		}
	}

	//FOOTER
	include('includes/templates/common/footer_landing.php');
?>