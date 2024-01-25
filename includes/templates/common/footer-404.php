
                <section class="footer">
                    <div class="container">

                        <!-- PHONE / EMAIL -->
                        <div class="row py-3 py-md-0 pb-lg-4 d-flex align-items-end">

                            <div class="footer-links col-12 col-md-10 d-flex flex-wrap flex-xl-nowrap align-items-end w-100 pe-0">
                                <a href="tel:<?php echo get_field('phone_number') ?>" title="Call us" class="btn phone-btn my-2 my-lg-0"><?php echo get_field('phone_number') ?></a>
                                <a href="mailto:<?php echo get_field('phone_number') ?>" title="Email us" class="btn email-btn my-2 my-lg-0"><?php echo get_field('email_address') ?></a>
                                <a href="https://www.linkedin.com/company/core-fund-administrators/" target="_blank" title="Core Fund Administrators on LinkedIn" class="btn linkedin-btn  my-2 my-lg-0">Core Fund Administrators</a>
                            </div>

                        </div>
                        <!-- END PHONE / EMAIL -->

                        <!-- ADDRESS -->
                        <div class="row">
							
							<div class="address col-12 col-md-10 col-lg-6">
                                <?php echo get_field('address') ?>
                            </div>

                        </div>
                        <!-- END ADDRESS -->

                        <!-- DISCLAIMER -->
                        <div class="row">
							
                            <div class="disclaimer col-12 col-md-10 col-lg-7 pt-4" style="max-width:640px">
                                <?php echo get_field('disclaimer') ?>
                            </div>

                        </div>
                        <!-- END DISCLAIMER -->

                    </div>
                </section>

			</div>
			<!-- END SMOOTH CONTENT -->
		</div>
		<!-- END SMOOTH WRAPPER -->

		<?php wp_footer(); ?>

		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-LPPCKZX4LF"></script>
		<script>
			window.dataLayer = window.dataLayer || [];   
			function gtag(){dataLayer.push(arguments);}   
			gtag('js', new Date());   
			gtag('config', 'G-LPPCKZX4LF'); 
		</script>
	</body>
</html>