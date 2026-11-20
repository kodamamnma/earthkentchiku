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