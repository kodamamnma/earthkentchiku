	<footer>
		<div class="footer__flex right__space">
			<div class="footer__left">
				<div class="fi__flex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer__logo.png" alt="アース建築株式会社ロゴ">
					<div>
						<h3>アース建築株式会社</h3>
						<p class="footer__ad">〒855-0851 <br class="tb1">長崎県島原市萩原2丁目5533-1</p>
					</div>
				</div>

				<p class="footer__ad2 sp2">〒855-0851 <br class="tb1">長崎県島原市萩原2丁目5533-1</p>

				<ul class="icon__flex">
					<li><a href="https://www.youtube.com/channel/UCxwQ0GelO057AEGpONhAwkA/featured" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/img/icon1.png" class="icon1" alt="YouTubeアイコン"></a></li>
					<li><a href="https://www.instagram.com/earth_design1979/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/img/icon2.png" class="icon2" alt="インスタグラムアイコン"></a></li>
					<li><a href="https://maps.app.goo.gl/RP3mJYdP3XQ35w866" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/img/icon3.png" class="icon3" alt="GoogleMapアイコン"></a></li>
					<li><a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=822ucwfj" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/img/icon4.png" class="icon4" alt="LINEアイコン"></a></li>
				</ul>
			</div>

			<div class="footer__right">
				<ul class="fr__list">
					<li><a href="<?php echo esc_url( home_url() ); ?>/concept">理念</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/works">施工事例</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/showroom">ショールーム</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/faq">よくある質問</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/news">お知らせ</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/blog">ブログ</a></li>
				</ul>

				<ul class="fr__list">
          <li><a href="<?php echo esc_url( home_url( '/news/zeh/' ) ); ?>">ZEH</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/aboutus#company">会社概要</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/contact">お問い合わせ</a></li>
					<li><a href="<?php echo esc_url( home_url() ); ?>/privacypolicy">プライバシーポリシー</a></li>
				</ul>
			</div>
		</div>

		<p class="copyright">©️2024 アース建築株式会社. All rights reserved.</p>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


<?php wp_footer(); ?>	
</body>
</html>