<?php get_header(); ?>

<div class="left__fix">
	<header>
		<h1><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="アース建築株式会社ロゴ"></a></h1>
		<ul class="left__list">
			<li id="parent2">
				<a href="<?php echo esc_url(home_url()); ?>/works"><span class="fra">ABOUT US<img src="<?php echo get_template_directory_uri(); ?>/img/arrow3.png" class="ar1"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-w.png" class="ar2"></span>私たちについて</a>
				<div class="child">
					<a href="<?php echo esc_url(home_url()); ?>/aboutus"><span class="fra">STAFF</span>スタッフ紹介</a>
					<a href="<?php echo esc_url(home_url()); ?>/concept" class="child__link2"><span class="fra">CONCEPT</span>コンセプト</a>
				</div>

			<li><a href="<?php echo esc_url(home_url()); ?>/works"><span class="fra">WORKS</span>施工事例</a></li>
			<li><a href="<?php echo esc_url(home_url()); ?>/works#flow"><span class="fra">FLOW</span>ご相談の流れ</a></li>

			<li><a href="<?php echo esc_url(home_url()); ?>/showroom"><span class="fra">SHOWROOM</span>ショールーム</a></li>
			<li><a href="<?php echo esc_url(home_url()); ?>/faq"><span class="fra">FAQ</span>よくある質問</a></li>

			</li>
			<li class="current"><a href="<?php echo esc_url(home_url()); ?>/news"><span class="fra">NEWS</span>お知らせ</a></li>
			<li><a href="<?php echo esc_url(home_url()); ?>/contact"><span class="fra">CONTACT</span>お問い合わせ</a></li>
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


<div class="content__area page__area blog__bottom">

	<div class="page__title right__space">
		<h2><span class="fra pc">NEWS</span>お知らせ<span class="fra sp">BLOG</span></h2>
	</div>

	<div class="breadcrumbs yu right__space" typeof="BreadcrumbList" vocab="https://schema.org/">
		<?php if (function_exists('bcn_display')) {
			bcn_display();
		} ?>
	</div>


	<div class="single__page right__space">
		<p class="single__date"><?php echo get_the_date('Y.m.d'); ?></p>
		<h2 class="single__title"><?php the_title(); ?></h2>

		<div class="single__content">
			<?php the_content(); ?>
		</div>

		<div class="link__flex">

			<?php if (get_previous_post()): ?>
				<?php previous_post_link('%link', '前の記事へ'); ?>

			<?php else: ?>
				<p class="th__event">前の記事へ</p>
			<?php endif; ?>

			<a href="<?php echo esc_url(home_url()); ?>/blog" class="fra list__all">LIST</a>

			<?php if (get_next_post()): ?>
				<?php next_post_link('%link', '次の記事へ'); ?>
			<?php else: ?>
				<p class="th__event">前の記事へ</p>
			<?php endif; ?>

		</div>




		<div class="top__section2" style="margin: 120px 0 0px 0">
			<div class="inview__fade wb__pageV">
				<a href="https://www.earth-kenchiku-lp.com/lp2"><img src="<?php echo get_template_directory_uri(); ?>/img/LP画像_261120_pc1.webp" alt="11月28日開催 完成見学会のメイン画像" width="1536" height="864" loading="lazy"></a>
			</div>

			<div class="right__space" style="margin: 40px 0 20px 0;">
				<div class="ts2__left">
					<h2 class="ts__title"><span class="fra pc">RESERVATION</span>ご予約<span class="fra sp">RESERVATION</span></h2>
					<p class="ts1__text2">「 SHIROMI TERRACE 」 は<br class="sp">ご予約制となっております。<br>以下のお問い合わせフォームより、<br class="sp">お気軽にご連絡ください。<br>女性スタッフが丁寧に<br class="sp">ご案内させていただきます。<br>アース建築の住まいづくりの世界を、<br class="sp">ぜひご自身の感覚でご体感ください。</p>

					<div style="margin-top: 40px;"><a href="https://www.earth-kenchiku-lp.com/lp2" class="arrow__link fra">詳細はこちら<img src="https://55e-design.com/wp-content/themes/earth-theme/img/arrow.png" alt="リンク矢印イメージ"></a>
					</div>
				</div>

			</div>
		</div>


	</div>


</div>

<div class="pbcontact__area">
	<div class="page__title mt__0">
		<h2><span class="fra">CONTACT</span>お問い合わせ</h2>
	</div>

	<div class="pca__flex">
		<p>アース建築であなたらしい家をつくりませんか？<br>こちらからお気軽にご相談ください。</p>

		<a href="<?php echo esc_url(home_url()); ?>/contact" class="fra">
			VIEW MORE
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/arrow2.png" alt="矢印">
		</a>
	</div>
</div>


<?php get_footer(); ?>