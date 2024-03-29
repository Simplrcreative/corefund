<?php
	//HEAD
	include('includes/templates/common/header.php');
?>	
	<!-- NAVIGATION -->	
	<nav class="main-nav py-5">
		
		<div class="container p-lg-0">
			
			<div class="row mx-0">
				
				<div class="mobile-logo"><a href="#landing">
					<picture class="scoot-hide" style="display:none">
						
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="auto" viewBox="0 0 157 66" style="enable-background:new 0 0 157 66;" xml:space="preserve">
							<style type="text/css">
								.st0{fill:#FFFFFF;}
								.st1{fill:#2F5A81;}
							</style>
							<path class="st0" d="M48.4,57.2v1h-4.7V61h4.4V62h-4.4v3.4h-1v-8.2L48.4,57.2L48.4,57.2z"/>
							<path class="st0" d="M53.8,65.4l0-0.9c-0.5,0.7-1.2,1.1-2,1.1c-1.5,0-2.4-1-2.4-2.7v-3.2h1v3.2c0,1.1,0.5,1.8,1.6,1.8
								c1.1,0,1.7-0.9,1.7-1.9v-3.1h1v5.8H53.8L53.8,65.4z"/>
							<path class="st0" d="M56.5,59.6h0.9l0,0.9c0.5-0.7,1.2-1,1.9-1c1.4,0,2.5,1,2.5,2.7v3.2h-1v-3.2c0-1.2-0.6-1.8-1.7-1.8
								c-1.1,0-1.7,0.9-1.7,1.9v3.1h-0.9L56.5,59.6L56.5,59.6z"/>
							<path class="st0" d="M69.1,57.2v8.2h-0.9l0-1.1c-0.5,0.8-1.3,1.2-2.2,1.2c-1.6,0-2.9-1.1-2.9-3s1.3-3,2.9-3c0.8,0,1.7,0.4,2.1,1.2
								v-3.5L69.1,57.2L69.1,57.2L69.1,57.2z M64,62.5c0,1.4,0.9,2.1,2,2.1s2-0.9,2-2.1c0-1.3-0.9-2.1-2.1-2.1C64.9,60.4,64,61.1,64,62.5z"
								/>
							<path class="st0" d="M77.4,57.2l3.7,8.2H80l-0.8-1.8h-4.7l-0.8,1.8h-1.1l3.7-8.2H77.4L77.4,57.2z M76.9,58.2L75,62.6h3.9L76.9,58.2z
								"/>
							<path class="st0" d="M87.6,57.2v8.2h-0.9l0-1.1c-0.5,0.8-1.3,1.2-2.2,1.2c-1.6,0-2.9-1.1-2.9-3s1.3-3,2.9-3c0.8,0,1.7,0.4,2.1,1.2
								v-3.5L87.6,57.2L87.6,57.2L87.6,57.2z M82.5,62.5c0,1.4,0.9,2.1,2,2.1c1.1,0,2-0.9,2-2.1c0-1.3-0.9-2.1-2.1-2.1
								C83.4,60.4,82.5,61.1,82.5,62.5z"/>
							<path class="st0" d="M90.2,59.6l0.1,0.8c0.4-0.7,1.1-1,1.7-1c0.8,0,1.6,0.3,1.9,1.3c0.4-0.9,1.2-1.3,2-1.3c1.5,0,2.4,1,2.4,2.6v3.3
								h-1v-3.3c0-0.9-0.5-1.7-1.5-1.7c-0.9,0-1.6,0.8-1.6,1.7v3.3h-1v-3.3c0-0.9-0.6-1.7-1.5-1.7c-0.9,0-1.6,0.8-1.6,1.7v3.3h-1v-5.8H90.2
								z"/>
							<path class="st0" d="M100.4,57.2c0.3,0,0.6,0.2,0.6,0.6s-0.3,0.6-0.6,0.6c-0.3,0-0.6-0.2-0.6-0.6C99.8,57.4,100.1,57.2,100.4,57.2z
								 M100,59.6h1v5.8h-1V59.6z"/>
							<path class="st0" d="M102.7,59.6h0.9l0,0.9c0.5-0.7,1.2-1,1.9-1c1.4,0,2.4,1,2.4,2.7v3.2h-1v-3.2c0-1.2-0.6-1.8-1.7-1.8
								c-1.1,0-1.7,0.9-1.7,1.9v3.1h-0.9L102.7,59.6L102.7,59.6z"/>
							<path class="st0" d="M110.1,57.2c0.3,0,0.6,0.2,0.6,0.6s-0.3,0.6-0.6,0.6c-0.3,0-0.6-0.2-0.6-0.6C109.5,57.4,109.8,57.2,110.1,57.2z
								 M109.6,59.6h1v5.8h-1V59.6z"/>
							<path class="st0" d="M116,60.9c-0.5-0.5-1-0.6-1.6-0.6c-0.8,0-1.4,0.3-1.4,0.8c0,0.6,0.7,0.8,1.4,0.8c1,0.1,2.5,0.3,2.4,1.8
								c0,1.2-1.1,1.7-2.4,1.7c-1,0-2-0.2-2.6-1.1l0.6-0.6c0.5,0.6,1.3,0.8,2,0.8c0.6,0,1.4-0.2,1.5-0.9c0-0.6-0.7-0.8-1.6-0.9
								c-1.1-0.1-2.3-0.4-2.3-1.6c0-1.2,1.2-1.7,2.3-1.7c0.9,0,1.6,0.2,2.2,0.8L116,60.9L116,60.9z"/>
							<path class="st0" d="M119.7,59.6h1.8v0.8h-1.8v3.1c0,0.7,0.2,1.1,0.9,1.1c0.3,0,0.5-0.1,0.8-0.2l0.3,0.8c-0.4,0.2-0.7,0.3-1.1,0.3
								c-1.2,0-1.8-0.7-1.8-2v-3.1h-1.2v-0.8h1.2V58l1-0.1V59.6z"/>
							<path class="st0" d="M123.6,60.5c0.4-0.7,1.1-1,1.8-1c0.5,0,1,0.2,1.3,0.5l-0.4,0.8c-0.3-0.2-0.6-0.3-1-0.3c-0.9,0-1.7,0.7-1.7,1.7
								v3.2h-1v-5.8h0.9L123.6,60.5z"/>
							<path class="st0" d="M132,65.4l0-1c-0.5,0.8-1.3,1.2-2.1,1.2c-1.7,0-3-1.1-3-3c0-1.9,1.3-3,3-3c0.9,0,1.7,0.4,2.1,1.2l0-1.1h0.9v5.8
								L132,65.4L132,65.4z M127.9,62.5c0,1.3,0.9,2.1,2.1,2.1c2.8,0,2.8-4.3,0-4.2C128.8,60.4,127.9,61.2,127.9,62.5z"/>
							<path class="st0" d="M136.3,59.6h1.8v0.8h-1.8v3.1c0,0.7,0.2,1.1,0.9,1.1c0.3,0,0.5-0.1,0.8-0.2l0.3,0.8c-0.4,0.2-0.7,0.3-1.1,0.3
								c-1.2,0-1.8-0.7-1.8-2v-3.1h-1.2v-0.8h1.2V58l1-0.1V59.6z"/>
							<path class="st0" d="M141.9,59.5c1.7,0,3,1.2,3,3c0,1.8-1.3,3-3,3c-1.7,0-3-1.2-3-3C138.9,60.7,140.1,59.5,141.9,59.5z M141.9,60.4
								c-1.2,0-2.1,0.9-2.1,2.1c0,1.3,0.9,2.1,2,2.1c1.2,0,2.1-0.9,2.1-2.1C143.9,61.3,143,60.4,141.9,60.4z"/>
							<path class="st0" d="M147.1,60.5c0.4-0.7,1.1-1,1.8-1c0.5,0,1,0.2,1.3,0.5l-0.4,0.8c-0.3-0.2-0.6-0.3-1-0.3c-0.9,0-1.7,0.7-1.7,1.7
								v3.2h-1v-5.8h0.9L147.1,60.5z"/>
							<path class="st0" d="M154.8,60.9c-0.5-0.5-1-0.6-1.6-0.6c-0.8,0-1.4,0.3-1.4,0.8c0,0.6,0.7,0.8,1.4,0.8c1,0.1,2.5,0.3,2.4,1.8
								c0,1.2-1.1,1.7-2.4,1.7c-1,0-2-0.2-2.6-1.1l0.6-0.6c0.5,0.6,1.3,0.8,2,0.8c0.6,0,1.4-0.2,1.5-0.9c0-0.6-0.7-0.8-1.6-0.9
								c-1.1-0.1-2.3-0.4-2.3-1.6c0-1.2,1.2-1.7,2.3-1.7c0.9,0,1.6,0.2,2.2,0.8L154.8,60.9L154.8,60.9z"/>
							<path class="st1" d="M63.9,0C52.1,0,42.6,9.5,42.6,21.3h9C51.6,14.5,57.1,9,63.8,9s12.3,5.5,12.3,12.3s-5.5,12.3-12.3,12.3
								c-3,0-5.8-1.1-7.9-2.9l-5.8,6.8c3.7,3.2,8.5,5.1,13.8,5.1c11.8,0,21.3-9.5,21.3-21.3C85.2,9.5,75.7,0,63.9,0z"/>
							<path class="st0" d="M33.5,21.3c0,6.8-5.5,12.2-12.3,12.2S9,28.1,9,21.3S14.5,9,21.3,9c3,0,5.8,1.1,7.9,2.9L35.1,5
								c-3.7-3.1-8.5-5-13.8-5C9.5,0,0,9.5,0,21.3c0,11.8,9.5,21.3,21.3,21.3c11.8,0,21.3-9.5,21.3-21.3L33.5,21.3L33.5,21.3z"/>
							<path class="st0" d="M110.4,0.2c-5.6-0.7-10.6,0.7-14.2,3.9c-3.6,3.2-5.5,7.9-5.5,13.6v24.9h8.9V17.5c0-3,0.8-5.3,2.5-6.8
								c1.8-1.6,4.5-2.3,8-2l1.5,0.1V0.3L110.4,0.2z"/>
							<path class="st0" d="M145,29.9c-2.1,2.8-5.2,4.3-9.3,4.3c-6.6,0-10.8-4.7-12-9.8h32.9l0-1.4c0-6.8-2.4-12.8-6.7-17.1
								C146,2.1,140.9,0,135.4,0c-11.7,0-21.3,9.6-21.3,21.4c0,11.8,9.5,21.2,21.6,21.2c9.4,0,16.5-4.6,19.6-12.7L145,29.9L145,29.9z
								 M135.4,8.4c4.7,0,8.9,3,10.8,7.6h-21.7C126.5,11,131.3,8.4,135.4,8.4L135.4,8.4z"/>
						</svg>
					</picture></a>
				</div>
				
				<div id=""  class="col-12 col-lg-8 col-xxl-7 d-flex justify-content-end flex-wrap px-0">	
					<ul class="nav">
						<li class="nav-item w-100 my-3 my-lg-2">
							<a href="https://corefund.co.za/#about-us" id="about-link" class="nav-link">About us</a>
						</li>
						<li class="nav-item w-100 my-3 my-lg-2">
							<a href="https://corefund.co.za/#statistics" id="stats-link" class="nav-link">Statistics</a>
						</li>
						<li class="nav-item w-100 my-3 my-lg-2">
							<a href="https://corefund.co.za/#difference" id="diffs-link" class="nav-link">The Core Fund difference</a>
						</li>
						<li class="nav-item w-100 my-3 my-lg-2">
							<a href="https://corefund.co.za/#trustees" id="trustees-link" class="nav-link">Meet our trustees</a>
						</li>
						<li class="nav-item w-100 my-3 my-lg-2">
							<a href="https://corefund.co.za/#contact" id="contact-link" class="nav-link">Contact</a>
						</li>
					</ul>

				</div>
				
			</div>
			
		</div>

	</nav>
	<!-- END NAVIGATION -->
	
	<!-- MOBILE NAV -->
	<nav class="mobile-nav d-lg-none">
		<div class="mobile-nav-icon">
			<div class="mobile-nav-icon-hamburger top"></div>
			<div class="mobile-nav-icon-hamburger middle"></div>
			<div class="mobile-nav-icon-hamburger bottom"></div>
		</div>
	</nav>
	<!-- END MOBILE NAV -->	

	<div id="smooth-wrapper">
			
			<div id="smooth-content" style="border-top: 1px solid transparent; border-bottom: 1px solid transparent">

				<!-- 404 -->
				<section id="404" class="landing vw-100 min-vh-100 overflow-hidden position-relative">
					
					<div class="container">
						
						<!-- LOGO -->
                        <div id="core-logo" class="core-logo scoot-up pb-lg-5">
                            <picture class="scoot-hide" style="display:none">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="auto" viewBox="0 0 157 66" style="enable-background:new 0 0 157 66;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:#FFFFFF;}
                                        .st1{fill:#2F5A81;}
                                    </style>
                                    <path class="st0" d="M48.4,57.2v1h-4.7V61h4.4V62h-4.4v3.4h-1v-8.2L48.4,57.2L48.4,57.2z"/>
                                    <path class="st0" d="M53.8,65.4l0-0.9c-0.5,0.7-1.2,1.1-2,1.1c-1.5,0-2.4-1-2.4-2.7v-3.2h1v3.2c0,1.1,0.5,1.8,1.6,1.8
                                        c1.1,0,1.7-0.9,1.7-1.9v-3.1h1v5.8H53.8L53.8,65.4z"/>
                                    <path class="st0" d="M56.5,59.6h0.9l0,0.9c0.5-0.7,1.2-1,1.9-1c1.4,0,2.5,1,2.5,2.7v3.2h-1v-3.2c0-1.2-0.6-1.8-1.7-1.8
                                        c-1.1,0-1.7,0.9-1.7,1.9v3.1h-0.9L56.5,59.6L56.5,59.6z"/>
                                    <path class="st0" d="M69.1,57.2v8.2h-0.9l0-1.1c-0.5,0.8-1.3,1.2-2.2,1.2c-1.6,0-2.9-1.1-2.9-3s1.3-3,2.9-3c0.8,0,1.7,0.4,2.1,1.2
                                        v-3.5L69.1,57.2L69.1,57.2L69.1,57.2z M64,62.5c0,1.4,0.9,2.1,2,2.1s2-0.9,2-2.1c0-1.3-0.9-2.1-2.1-2.1C64.9,60.4,64,61.1,64,62.5z"
                                        />
                                    <path class="st0" d="M77.4,57.2l3.7,8.2H80l-0.8-1.8h-4.7l-0.8,1.8h-1.1l3.7-8.2H77.4L77.4,57.2z M76.9,58.2L75,62.6h3.9L76.9,58.2z
                                        "/>
                                    <path class="st0" d="M87.6,57.2v8.2h-0.9l0-1.1c-0.5,0.8-1.3,1.2-2.2,1.2c-1.6,0-2.9-1.1-2.9-3s1.3-3,2.9-3c0.8,0,1.7,0.4,2.1,1.2
                                        v-3.5L87.6,57.2L87.6,57.2L87.6,57.2z M82.5,62.5c0,1.4,0.9,2.1,2,2.1c1.1,0,2-0.9,2-2.1c0-1.3-0.9-2.1-2.1-2.1
                                        C83.4,60.4,82.5,61.1,82.5,62.5z"/>
                                    <path class="st0" d="M90.2,59.6l0.1,0.8c0.4-0.7,1.1-1,1.7-1c0.8,0,1.6,0.3,1.9,1.3c0.4-0.9,1.2-1.3,2-1.3c1.5,0,2.4,1,2.4,2.6v3.3
                                        h-1v-3.3c0-0.9-0.5-1.7-1.5-1.7c-0.9,0-1.6,0.8-1.6,1.7v3.3h-1v-3.3c0-0.9-0.6-1.7-1.5-1.7c-0.9,0-1.6,0.8-1.6,1.7v3.3h-1v-5.8H90.2
                                        z"/>
                                    <path class="st0" d="M100.4,57.2c0.3,0,0.6,0.2,0.6,0.6s-0.3,0.6-0.6,0.6c-0.3,0-0.6-0.2-0.6-0.6C99.8,57.4,100.1,57.2,100.4,57.2z
                                            M100,59.6h1v5.8h-1V59.6z"/>
                                    <path class="st0" d="M102.7,59.6h0.9l0,0.9c0.5-0.7,1.2-1,1.9-1c1.4,0,2.4,1,2.4,2.7v3.2h-1v-3.2c0-1.2-0.6-1.8-1.7-1.8
                                        c-1.1,0-1.7,0.9-1.7,1.9v3.1h-0.9L102.7,59.6L102.7,59.6z"/>
                                    <path class="st0" d="M110.1,57.2c0.3,0,0.6,0.2,0.6,0.6s-0.3,0.6-0.6,0.6c-0.3,0-0.6-0.2-0.6-0.6C109.5,57.4,109.8,57.2,110.1,57.2z
                                            M109.6,59.6h1v5.8h-1V59.6z"/>
                                    <path class="st0" d="M116,60.9c-0.5-0.5-1-0.6-1.6-0.6c-0.8,0-1.4,0.3-1.4,0.8c0,0.6,0.7,0.8,1.4,0.8c1,0.1,2.5,0.3,2.4,1.8
                                        c0,1.2-1.1,1.7-2.4,1.7c-1,0-2-0.2-2.6-1.1l0.6-0.6c0.5,0.6,1.3,0.8,2,0.8c0.6,0,1.4-0.2,1.5-0.9c0-0.6-0.7-0.8-1.6-0.9
                                        c-1.1-0.1-2.3-0.4-2.3-1.6c0-1.2,1.2-1.7,2.3-1.7c0.9,0,1.6,0.2,2.2,0.8L116,60.9L116,60.9z"/>
                                    <path class="st0" d="M119.7,59.6h1.8v0.8h-1.8v3.1c0,0.7,0.2,1.1,0.9,1.1c0.3,0,0.5-0.1,0.8-0.2l0.3,0.8c-0.4,0.2-0.7,0.3-1.1,0.3
                                        c-1.2,0-1.8-0.7-1.8-2v-3.1h-1.2v-0.8h1.2V58l1-0.1V59.6z"/>
                                    <path class="st0" d="M123.6,60.5c0.4-0.7,1.1-1,1.8-1c0.5,0,1,0.2,1.3,0.5l-0.4,0.8c-0.3-0.2-0.6-0.3-1-0.3c-0.9,0-1.7,0.7-1.7,1.7
                                        v3.2h-1v-5.8h0.9L123.6,60.5z"/>
                                    <path class="st0" d="M132,65.4l0-1c-0.5,0.8-1.3,1.2-2.1,1.2c-1.7,0-3-1.1-3-3c0-1.9,1.3-3,3-3c0.9,0,1.7,0.4,2.1,1.2l0-1.1h0.9v5.8
                                        L132,65.4L132,65.4z M127.9,62.5c0,1.3,0.9,2.1,2.1,2.1c2.8,0,2.8-4.3,0-4.2C128.8,60.4,127.9,61.2,127.9,62.5z"/>
                                    <path class="st0" d="M136.3,59.6h1.8v0.8h-1.8v3.1c0,0.7,0.2,1.1,0.9,1.1c0.3,0,0.5-0.1,0.8-0.2l0.3,0.8c-0.4,0.2-0.7,0.3-1.1,0.3
                                        c-1.2,0-1.8-0.7-1.8-2v-3.1h-1.2v-0.8h1.2V58l1-0.1V59.6z"/>
                                    <path class="st0" d="M141.9,59.5c1.7,0,3,1.2,3,3c0,1.8-1.3,3-3,3c-1.7,0-3-1.2-3-3C138.9,60.7,140.1,59.5,141.9,59.5z M141.9,60.4
                                        c-1.2,0-2.1,0.9-2.1,2.1c0,1.3,0.9,2.1,2,2.1c1.2,0,2.1-0.9,2.1-2.1C143.9,61.3,143,60.4,141.9,60.4z"/>
                                    <path class="st0" d="M147.1,60.5c0.4-0.7,1.1-1,1.8-1c0.5,0,1,0.2,1.3,0.5l-0.4,0.8c-0.3-0.2-0.6-0.3-1-0.3c-0.9,0-1.7,0.7-1.7,1.7
                                        v3.2h-1v-5.8h0.9L147.1,60.5z"/>
                                    <path class="st0" d="M154.8,60.9c-0.5-0.5-1-0.6-1.6-0.6c-0.8,0-1.4,0.3-1.4,0.8c0,0.6,0.7,0.8,1.4,0.8c1,0.1,2.5,0.3,2.4,1.8
                                        c0,1.2-1.1,1.7-2.4,1.7c-1,0-2-0.2-2.6-1.1l0.6-0.6c0.5,0.6,1.3,0.8,2,0.8c0.6,0,1.4-0.2,1.5-0.9c0-0.6-0.7-0.8-1.6-0.9
                                        c-1.1-0.1-2.3-0.4-2.3-1.6c0-1.2,1.2-1.7,2.3-1.7c0.9,0,1.6,0.2,2.2,0.8L154.8,60.9L154.8,60.9z"/>
                                    <path class="st1" d="M63.9,0C52.1,0,42.6,9.5,42.6,21.3h9C51.6,14.5,57.1,9,63.8,9s12.3,5.5,12.3,12.3s-5.5,12.3-12.3,12.3
                                        c-3,0-5.8-1.1-7.9-2.9l-5.8,6.8c3.7,3.2,8.5,5.1,13.8,5.1c11.8,0,21.3-9.5,21.3-21.3C85.2,9.5,75.7,0,63.9,0z"/>
                                    <path class="st0" d="M33.5,21.3c0,6.8-5.5,12.2-12.3,12.2S9,28.1,9,21.3S14.5,9,21.3,9c3,0,5.8,1.1,7.9,2.9L35.1,5
                                        c-3.7-3.1-8.5-5-13.8-5C9.5,0,0,9.5,0,21.3c0,11.8,9.5,21.3,21.3,21.3c11.8,0,21.3-9.5,21.3-21.3L33.5,21.3L33.5,21.3z"/>
                                    <path class="st0" d="M110.4,0.2c-5.6-0.7-10.6,0.7-14.2,3.9c-3.6,3.2-5.5,7.9-5.5,13.6v24.9h8.9V17.5c0-3,0.8-5.3,2.5-6.8
                                        c1.8-1.6,4.5-2.3,8-2l1.5,0.1V0.3L110.4,0.2z"/>
                                    <path class="st0" d="M145,29.9c-2.1,2.8-5.2,4.3-9.3,4.3c-6.6,0-10.8-4.7-12-9.8h32.9l0-1.4c0-6.8-2.4-12.8-6.7-17.1
                                        C146,2.1,140.9,0,135.4,0c-11.7,0-21.3,9.6-21.3,21.4c0,11.8,9.5,21.2,21.6,21.2c9.4,0,16.5-4.6,19.6-12.7L145,29.9L145,29.9z
                                            M135.4,8.4c4.7,0,8.9,3,10.8,7.6h-21.7C126.5,11,131.3,8.4,135.4,8.4L135.4,8.4z"/>
                                </svg>
                            </picture>
                        </div>
						<!-- END LOGO -->

						<!-- TAG LINES -->
						<div class="row py-6 py-md-10 py-lg-6">

							<div id="core-tag-line" class="col-12 col-md-7 scoot-up">
								<h1 class="scoot-hide mb-3 pb-1 text-white" style="display:none">404</h1>
								<p class="scoot-hide lead-lrg text-light my-0" style="display:none">Sorry, the page/content you are looking for cannot be found.</p>
							</div>

						</div>
						<!-- END TAG LINES -->

                        <!-- DESKTOP HERO IMAGE -->
                        <?php if(get_field('hero_image', 17)) { ?>
                            <div class="section-image position-absolute top-0 start-0 image-fill w-100 bg-primary d-none d-lg-block">
                                <?php simplr_picture(17, array('size50', 'size1200', 'size2200'), 'hero_image', '', '', '') ?>
                            </div>
                        <?php } ?>
                        <!-- END DESKTOP HERO IMAGE -->
                        

                        <!-- MOBILE HERO IMAGE -->
                        <?php if(get_field('hero_image_mobile', 17)) { ?>
                            <div class="section-image position-absolute top-0 start-0 image-fill w-100 bg-primary d-block d-lg-none">
                                <?php simplr_picture(17, array('size50', 'size600', 'size900'), 'hero_image_mobile', '', '', '') ?>
                            </div>
                        <?php } ?>
                        <!-- END MOBILE HERO IMAGE -->

					</div>

				<!-- END 404-->
<?php
    //FOOTER
	include('includes/templates/common/footer-404.php');
?>