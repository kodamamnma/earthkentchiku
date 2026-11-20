<?php get_header(); ?>

	<div class="left__fix">
		<header>
			<h1><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="アース建築株式会社ロゴ"></a></h1>
			<ul class="left__list">
				<li id="parent2" class="current">
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
				<li><a href="<?php echo esc_url( home_url() ); ?>/contact"><span class="fra">CONTACT</span>お問い合わせ</a></li>
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


<div class="content__area page__area pt__0 concept__page">

	<div class="shr__flex">
		<div class="shr__left">
			<div class="page__title first">
				<h2><span class="fra pc">CONCEPT</span>理念<span class="fra sp">CONCEPT</span></h2>
			</div>	

			<img src="<?php echo get_template_directory_uri(); ?>/img/concept/pageV-sp.png" alt="コンセプトイメージ" class="sp pageV-sp">


				<div class="breadcrumbs yu" typeof="BreadcrumbList" vocab="https://schema.org/">
				    <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
				</div>	

				<h3 class="sh__sub">
					<img src="<?php echo get_template_directory_uri(); ?>/img/sec_title_nichijo.png" alt="日常を豊かにする" class="ct__img">〜あなたの”好き”を見つける〜</h3>

				<p class="sh__text1">私たちは、マイホームのご計画を<br>
				人生最大のプロジェクトのひとつと考えています。<br>
				お客様と、ひとつのチームとして夢や感動を分かち合い、<br>
				その想いをカタチにするため、<br>
				アース建築にしかできないプロデュースを実践します。</p>


		
		</div>

		<div class="shr__right pc">
			<img src="<?php echo get_template_directory_uri(); ?>/img/concept/pageV.png" alt="ジョールームイメージ">
		</div>
	</div>


	<div class="features__area right__space">

		<div class="fea__flex">

			<div class="fea__right inview__fade sp">
				<img src="<?php echo get_template_directory_uri(); ?>/img/concept/concept1.png" alt="未来を感動で満たす">
			</div>

			<div class="fea__left">
				<h3>未来を感動で満たす</h3>
				<p>アース建築では、One Team, One Homeの理念のもと、お客様と共に歩み、共に喜び、夢や感動を共有する存在でありたいと願っています。コミュニケーションを大切にし、ご家族の願いや想いを取り入れ、スタッフひとりひとりが住まいへの想いをカタチにしていくプロセスにこだわっています。</p>
			</div>

			<div class="fea__right inview__fade pc">
				<img src="<?php echo get_template_directory_uri(); ?>/img/concept/concept1.png" alt="未来を感動で満たす">
			</div>
		</div>

		<div class="fea__flex">
			<div class="fea__right inview__fade sp">
				<img src="<?php echo get_template_directory_uri(); ?>/img/concept/concept2.png" alt="想いを叶えるフルオーダーメイド">
			</div>

			<div class="fea__left">
				<h3>想いを叶えるフルオーダーメイド</h3>
				<p>アース建築では、お客様の夢や希望に寄り添い、世界にひとつだけの住まいを創り上げます。どんなに細かな要望も、丁寧にヒアリングを行い、「 想いをカタチに変える 」 ことがアース建築の信念です。世界にひとつだけの理想の住まいが実現される瞬間、それこそが私たちの最大の喜びです。</p>
			</div>

			<div class="fea__right inview__fade pc">
				<img src="<?php echo get_template_directory_uri(); ?>/img/concept/concept2.png" alt="想いを叶えるフルオーダーメイド">
			</div>
		</div>

		<div class="fea__flex">
			<div class="fea__right inview__fade sp">
				<img src="<?php echo get_template_directory_uri(); ?>/img/concept/concept3.png" alt="設計のプロとして">
			</div>

			<div class="fea__left">
				<h3>設計のプロとして</h3>
				<p>アース建築は、一級建築士事務所として各スタッフが資格を持つプロフェッショナル集団です。高度な技術と知識で、確かな品質の住まいづくりを実現します。私たちはご家族の生活スタイルに深く関わるパートナーと考え、暮らしをサポートし、豊かにするような設計を心掛けています。安心してお任せいただけるのは、そのプロフェッショナリズムゆえです。</p>
			</div>

			<div class="fea__right inview__fade pc">
				<img src="<?php echo get_template_directory_uri(); ?>/img/concept/concept3.png" alt="設計のプロとして">
			</div>
		</div>

		<div class="fea__flex type2">
			<div class="fea__right inview__fade sp">
				<img src="<?php echo get_template_directory_uri(); ?>/img/concept/concept4.png" alt="デザインという彩りを">
			</div>

			<div class="fea__left">
				<h3>デザインという彩りを</h3>
				<p>住まいは大切な人とかけがえのない時間を過ごす場所です。だからこそ、他にはないあなただけのデザインをご提案いたします。<br>10年後、20年後も色褪せない、自分にぴったりの空間。人生に豊かさと彩りをもたらします。</p>
			</div>

			<div class="fea__right inview__fade pc">
				<img src="<?php echo get_template_directory_uri(); ?>/img/concept/concept4.png" alt="デザインという彩りを">
			</div>
		</div>

	</div>

	<div class="feature__bottom concept__bottom inview__fade">
		<img src="<?php echo get_template_directory_uri(); ?>/img/concept/concept5.png" alt="施工イメージ">
	</div>

	<div class="cb__area">
		<p>アース建築は、<br>
		One Team, One Homeの理念のもと、<br>
		お客様と共に歩み、共に喜び、夢を共有する存在でありたいと願っています。</p>
	</div>

</div>

<div class="pbcontact__area">
	<div class="page__title mt__0">
		<h2><span class="fra pc">CONTACT</span>お問い合わせ<span class="fra sp">CONTACT</span></h2>
	</div>

	<div class="pca__flex">
		<p>アース建築であなたらしい家をつくりませんか？<br>こちらからお気軽にご相談ください。</p>

		<a href="<?php echo esc_url( home_url() ); ?>/contact" class="fra">
			VIEW MORE
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/arrow2.png" alt="矢印">
		</a>
	</div>
</div>



<?php get_footer(); ?>		