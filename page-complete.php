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
				</li>
				<!-- 施工事例・ご相談の流れは #parent2 の子にすると pointer-events:none でクリック不可になるため、他ページと同じ独立した li にする -->
				<li><a href="<?php echo esc_url( home_url() ); ?>/works"><span class="fra">WORKS</span>施工事例</a></li>
				<li><a href="<?php echo esc_url( home_url() ); ?>/works#flow"><span class="fra">FLOW</span>ご相談の流れ</a></li>
				<li><a href="<?php echo esc_url( home_url() ); ?>/showroom"><span class="fra">SHOWROOM</span>ショールーム</a></li>
				<li><a href="<?php echo esc_url( home_url() ); ?>/faq"><span class="fra">FAQ</span>よくある質問</a></li>
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



<div class="content__area page__area complete__page">

	<div class="page__title">
		<h2><span class="fra">CONTACT</span>お問い合わせ</h2>
	</div>

	<div class="breadcrumbs yu" typeof="BreadcrumbList" vocab="https://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	</div>

	<div class="complete__text right__space">
		<p class="ct__1">お問い合わせフォームの送信を完了致しました。<br><br>

		この度はお問い合わせいただきまして誠にありがとうございます。<br class="pc">
		ご入力頂いたメールアドレス宛へ、ご確認メールをお送りしておりますのでご確認ください。<br class="pc">
		内容を確認次第、担当者より折返しご連絡させていただきます。今しばらくお待ちくださいませ。<br><br>

		※ご送信後、ご確認メールが届かない場合は、フォームご入力のメールアドレスの誤り、<br class="pc">
		もしくはシステム等の不具合が考えられます。その際にはお手数ですが<br class="pc">
		もう一度ご送信下さいますか、お電話にてお問い合わせくださいますようお願い申し上げます。<br class="pc">
		また、まれに迷惑メールフォルダへ入っている場合がございますので、合わせてご確認ください。</p>

		<div class="tel__flex">
			<div class="tf__left">
				<img src="<?php echo get_template_directory_uri(); ?>/img/contact/tel.png">
			</div>

			<div class="tf__right">
				<a href="tel:0957-61-0047" class="fra">0957-61-0047</a>
				<p>09:00 - 17:00<br>土日祝日もご連絡可能です。</p>
			</div>
		</div>

		<p class="back__center"><a href="<?php echo esc_url( home_url('/') ); ?>" class="back__link">TOPへ戻る</a></p>
	</div>



</div>

<?php get_footer(); ?>		