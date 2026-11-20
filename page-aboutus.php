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

				<li ><a href="<?php echo esc_url( home_url() ); ?>/works"><span class="fra">WORKS</span>施工事例</a></li>	
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


<div class="content__area page__area tbpb0">

	<div class="page__title">
		<h2><span class="fra pc">ABOUT US</span>私たちについて<span class="fra sp">ABOUT US</span></h2>
	</div>

	<div class="breadcrumbs yu" typeof="BreadcrumbList" vocab="https://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	</div>

	<div class="page__title type2">
		<h2><span class="fra pc">MEMBER</span>チームメンバー<span class="fra sp">MEMBER</span></h2>
	</div>

	<div class="member__flex">
		<div class="member__col2 inview__fade type1 sp">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member1.png" alt="横田 健">
		</div>

		<div class="member__col1">
			<h3>横田 健<span class="fra">Ken Yokota</span></h3>
			<p>代表取締役 / 一級建築士</p>
		</div>
		<div class="member__col2 inview__fade type1 pc">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member1.png" alt="横田 健">
		</div>
	</div>

	<div class="member__flex">
		<div class="member__col2 inview__fade">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member2.png" alt="横田 真美子">
		</div>
		<div class="member__col1 type2">
			<h3>横田 真美子<span class="fra">Mamiko Yokota</span></h3>
			<p>営業 / 経理</p>
		</div>
	</div>

	<div class="member__flex">
		<div class="member__col2 inview__fade type1 sp">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member3.png" alt="山奥 政幸">
		</div>		
		<div class="member__col1">
			<h3>山奥 政幸<span class="fra">Masayuki Yamaoku</span></h3>
			<p>統括管理/一級建築施工管理技士</p>
		</div>
		<div class="member__col2 inview__fade type1 pc">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member3.png" alt="山奥 政幸">
		</div>
	</div>

	<div class="member__flex">
		<div class="member__col2 inview__fade">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member4.png" alt="Runa">
		</div>
		<div class="member__col1 type2">
			<h3><span class="fra">Runa</span></h3>
			<p>インテリアコーディネーター</p>
		</div>
	</div>

	<div class="member__flex">
		<div class="member__col2 inview__fade type1 sp">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member5.png" alt="Chika">
		</div>		
		<div class="member__col1">
			<h3><span class="fra">Chika</span></h3>
			<p>設計アシスタント / コーディネーター</p>
		</div>
		<div class="member__col2 inview__fade type1 pc">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member5.png" alt="Chika">
		</div>
	</div>

	<div class="member__flex">
		<div class="member__col2 inview__fade">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member6.png" alt="Haruka">
		</div>
		<div class="member__col1 type2">
			<h3><span class="fra">Haruka</span></h3>
			<p>ブランディングプランナー</p>
		</div>
	</div>

	<div class="member__flex">
		<div class="member__col2 inview__fade type1 sp">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member7.png" alt="小関 弘真">
		</div>		
		<div class="member__col1">
			<h3>小関 弘真<span class="fra">Hiromasa Koseki</span></h3>
			<p>棟梁</p>
		</div>
		<div class="member__col2 inview__fade type1 pc">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member7.png" alt="小関 弘真">
		</div>
	</div>

	<div class="member__flex">
		<div class="member__col2 inview__fade">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member8.png" alt="城川 和明">
		</div>
		<div class="member__col1 type2">
			<h3>城川 和明<span class="fra">Kazuaki Shirokawa</span></h3>
			<p>棟梁</p>
		</div>
	</div>

	<div class="member__flex">
		<div class="member__col2 inview__fade type1 sp">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member9.png" alt="相良 充洋">
		</div>		
		<div class="member__col1">
			<h3>相良 充洋<span class="fra">Mitsuhiro Sagara</span></h3>
			<p>棟梁</p>
		</div>
		<div class="member__col2 inview__fade type1 pc">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member9.png" alt="相良 充洋">
		</div>
	</div>

	<div class="member__flex">
		<div class="member__col2 inview__fade">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/member10.png">
		</div>
		<div class="member__col1 type2">
			<h3>草野 世靖<span class="fra">Tsuguyasu Kusano</span></h3>
			<p>棟梁</p>
		</div>
	</div>

	<div class="policy__area right__space">
		<a>
			<h3><span class="fra pc">POLICY</span>理念<span class="fra sp">POLICY</span></h3>
			<p>『社員・取引先 その家族が幸せになり<br>お客様に満足と感動を与える』</p>
		</a>
	</div>

	<div class="page__title type3" id="company">
		<h2><span class="fra pc">COMPANY</span>会社概要<span class="fra sp">COMPANY</span></h2>
	</div>

		<div class="ca__flex right__space">
			<div class="caf__left">
				<p>会社名</p>
			</div>
			<div class="caf__right">
				<p>アース建設株式会社</p>
			</div>

			<div class="caf__left">
				<p>代表取締役</p>
			</div>
			<div class="caf__right">
				<p>横田　健</p>
			</div>

			<div class="caf__left">
				<p>事業内容</p>
			</div>
			<div class="caf__right">
				<p>住宅・店舗　設計デザイン / 工事</p>
			</div>

			<div class="caf__left">
				<p>設立</p>
			</div>
			<div class="caf__right">
				<p>2017年1月13日</p>
			</div>

			<div class="caf__left">
				<p>資本金</p>
			</div>
			<div class="caf__right">
				<p>5,000,000円</p>
			</div>

			<div class="caf__left">
				<p>所在地</p>
			</div>
			<div class="caf__right">
				<p>〒855-0851 <br class="sp">長崎県島原市萩原2丁目5533-1</p>
			</div>

			<div class="caf__left">
				<p>Tel</p>
			</div>
			<div class="caf__right">
				<p>0957-61-0047</p>
			</div>

			<div class="caf__left">
				<p>Fax</p>
			</div>
			<div class="caf__right">
				<p>0957-61-0046</p>
			</div>

			<div class="caf__left">
				<p>アクセス</p>
			</div>
			<div class="caf__right">
				<p>最寄駅「島原駅」から車で約5分</p>
			</div>

		</div>

	<div class="page__title type3 mb__0">
		<h2><span class="fra pc">ACCESS</span>アクセス<span class="fra sp">ACCESS</span></h2>
	</div>

	<div class="right__space">
		<p class="ac__address">〒855-0851　長崎県島原市萩原2丁目5533-1</p>
		<a href="https://www.google.com/maps?ll=32.785446,130.360266&z=17&t=m&hl=ja&gl=JP&mapclient=embed&cid=5496349111029058712" class="ac__address--link pc" target="_blank"><span>GoogleMapを見る</span><img src="<?php echo get_template_directory_uri(); ?>/img/about/blank.png"></a>	

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1410.2924966648836!2d130.35923518084886!3d32.78537150105986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35406db4f9efdba3%3A0x4c46f465446bcc98!2z44Ki44O844K55bu656-JIOagquW8j-S8muekviDln47opovjg4bjg6njgrk!5e0!3m2!1sja!2sjp!4v1708583220455!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="ac__map"></iframe>

		<a href="https://www.google.com/maps?ll=32.785446,130.360266&z=17&t=m&hl=ja&gl=JP&mapclient=embed&cid=5496349111029058712" class="ac__address--link sp" target="_blank"><span>GoogleMapを見る</span><img src="<?php echo get_template_directory_uri(); ?>/img/about/blank.png"></a>	

		
		<div class="top__section2">
			<div class="inview__fade wb__pageV">
				<img src="https://55e-design.com/wp-content/themes/earth-theme/img/works/pageV.png" alt="アース相談イメージ">
			</div>
			
			<div class="right__space" style="margin: 40px 0 20px 0;">
				<div class="ts2__left">
					<h2 class="ts__title"><span class="fra pc">RESERVATION</span>ご予約<span class="fra sp">RESERVATION</span></h2>
					<p class="ts1__text2">「 SHIROMI TERRACE 」 は<br class="sp">ご予約制となっております。<br>以下のお問い合わせフォームより、<br class="sp">お気軽にご連絡ください。<br>女性スタッフが丁寧に<br class="sp">ご案内させていただきます。<br>アース建築の住まいづくりの世界を、<br class="sp">ぜひご自身の感覚でご体感ください。</p>
					
					<div style="margin-top: 40px;"><a href="<?php echo esc_url( home_url() ); ?>/contact" class="arrow__link fra">VIEW MORE<img src="https://55e-design.com/wp-content/themes/earth-theme/img/arrow.png" alt="リンク矢印イメージ"></a>
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

		<a href="<?php echo esc_url( home_url() ); ?>/contact" class="fra">
			VIEW MORE
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/arrow2.png" alt="矢印">
		</a>
	</div>
</div>




<?php get_footer(); ?>		