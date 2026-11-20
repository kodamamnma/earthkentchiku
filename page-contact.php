<?php get_header(); ?>

	<div class="left__fix">
		<header>
			<h1><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="アース建築株式会社ロゴ"></a></h1>
			<ul class="left__list">
				<li id="parent2">
					<a href="<?php echo esc_url( home_url() ); ?>/works"><span class="fra">ABOUT US<img src="<?php echo get_template_directory_uri(); ?>/img/arrow3.png" class="ar1"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-w.png" class="ar2"></span>私たちについて</a>
				<div class="child">
					<a href="<?php echo esc_url( home_url() ); ?>/aboutus"><span class="fra">STAFF</span>スタッフ紹介</a>
					<a href="<?php echo esc_url( home_url() ); ?>/concept" class="child__link2"><span class="fra">CONCEPT</span>コンセプト</a>
				</div>	

				<li><a href="<?php echo esc_url( home_url() ); ?>/works"><span class="fra">WORKS</span>施工事例</a></li>	
				<li><a href="<?php echo esc_url( home_url() ); ?>/works#flow"><span class="fra">FLOW</span>ご相談の流れ</a></li>	
				
				<li><a href="<?php echo esc_url( home_url() ); ?>/showroom"><span class="fra">SHOWROOM</span>ショールーム</a></li>
				<li><a href="<?php echo esc_url( home_url() ); ?>/faq"><span class="fra">FAQ</span>よくある質問</a></li>
					
				</li>
				<li><a href="<?php echo esc_url( home_url() ); ?>/news"><span class="fra">NEWS</span>お知らせ</a></li>
				<li class="current"><a href="<?php echo esc_url( home_url() ); ?>/contact"><span class="fra">CONTACT</span>お問い合わせ</a></li>
			</ul>

		    <a class="menu_button navmenu block1000">
		      <div class="menu_icon01">
		       <span class="bar1"></span>
		       <span class="bar2"></span>
		       <span class="bar3"></span>
		      </div>
		    </a>
		</header>
	</div>


<div class="content__area page__area">

	<div class="page__title">
		<h2><span class="fra pc">CONTACT</span>お問い合わせ<span class="fra sp">CONTACT</span></h2>
	</div>

	<img src="<?php echo get_template_directory_uri(); ?>/img/contact/pageV-sp.png" class="contactV sp">

	<div class="breadcrumbs yu" typeof="BreadcrumbList" vocab="https://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	</div>

	<div class="contact__page right__space">
		<img src="<?php echo get_template_directory_uri(); ?>/img/contact/pageV.png" class="contactV pc">

		<iframe src="https://calendar.google.com/calendar/embed?src=earth.hp1979%40gmail.com&ctz=Asia%2FTokyo&mode=AGENDA" style="border: 0" width="100%" height="auto" frameborder="0" scrolling="no" class="calender"></iframe>

		<div class="form__area">
			<?php echo do_shortcode('[contact-form-7 id="aaca9c6" title="コンタクトフォーム 1" html_class=”h-adr”]'); ?>
		</div>

		<div class="cr__space">

			<p class="crs__text">モデルハウスのご予約やお問い合わせは<br class="hidden-pc">
			お電話からのご相談も承っております。<br class="hidden-pc">
			お気軽にご連絡ください。
			</p>

			<div class="tel__flex">
				<div class="tf__left">
					<img src="<?php echo get_template_directory_uri(); ?>/img/contact/tel.png">
				</div>

				<div class="tf__right">
					<a href="tel:0957-61-0047" class="fra">0957-61-0047</a>
					<p>09:00 - 17:00<br>土日祝日もご連絡可能です。</p>
				</div>
			</div>

		</div>	
		
	</div>

</div>

<?php get_footer(); ?>