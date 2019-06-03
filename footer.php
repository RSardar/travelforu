			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container">
					<div class="footer-top">
						<div class="row align-items-center">
							<div class="col-lg-4 col-md-12 text-left text-sm-center">
								<div class="logo">
									<a href="<?php echo home_url(); ?>">
										<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
										<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="Logo" class="logo-img">
									</a>
								</div>
							</div>
							<div class="col-lg-8 col-md-12  text-right text-sm-center">
								<div class="footer_nav float-right">
								<?php footer_nav(); ?>
								</div>
							</div>
						</div>
				</div>
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//www.travelforu.info/" title="WordPress">Travelforu</a>
				</p>
				<!-- /copyright -->
			</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<script type="text/javascript">
		var s,read_time,numberOfCharecters;
		s = document.getElementById("article_content").innerText;
		s = s.replace(/(^\s*)|(\s*$)/gi,"");
		s = s.replace(/[ ]{2,}/gi," ");
		s = s.replace(/\n /,"\n");
		numberOfCharecters = document.getElementById("article_content").value;
		numberOfCharecters = s.split(' ').length;
		read_time = numberOfCharecters;
		read_time = Math.floor(read_time/275);
		document.getElementById("time_to_read").innerText = read_time + '  mins to read';</script>

	</body>
</html>
