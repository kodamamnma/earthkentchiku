<?php get_header(); ?>

<body <?php body_class(); ?>>
	
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
				<li><a href="<?php echo esc_url( home_url() ); ?>/works/#flow"><span class="fra">FLOW</span>ご相談の流れ</a></li>	
				
				<li><a href="<?php echo esc_url( home_url() ); ?>/showroom"><span class="fra">SHOWROOM</span>ショールーム</a></li>
				<li><a href="<?php echo esc_url( home_url() ); ?>/faq"><span class="fra">FAQ</span>よくある質問</a></li>
					
				</li>
				<li><a href="<?php echo esc_url( home_url() ); ?>/news"><span class="fra">NEWS</span>お知らせ</a></li>
				<li><a href="<?php echo esc_url( home_url() ); ?>/contact"><span class="fra">CONTACT</span>お問い合わせ</a></li>
			</ul>

			<div class="movie__volume pc">
				<p class="fra mv__title">MOVIE SOUND</p>
				<div class="mv__flex">
					<a id="on" class="sleep">
						<img src="<?php echo get_template_directory_uri(); ?>/img/on.png" class="on__img">
						ON
					</a>

					<a id="off">
						<img src="<?php echo get_template_directory_uri(); ?>/img/off.png" class="off__img">
						OFF
					</a>
				</div>
			</div>

		    <a class="menu_button navmenu block1000">
		      <div class="menu_icon01">
		       <span class="bar1"></span>
		       <span class="bar2"></span>
		       <span class="bar3"></span>
		      </div>
		    </a>
		</header>
	</div>

	<div class="content__area">

			<video src="<?php echo get_template_directory_uri(); ?>/mp4/mainV-pc.mp4" class="video" autoplay muted playsinline loop></video>

			<div class="movie__volume sp">
				<div class="mv__flex">
					<p class="fra mv__title">MOVIE SOUND</p>
					
					<a id="on2" class="sleep">
						<img src="<?php echo get_template_directory_uri(); ?>/img/on.png" class="on__img">
						ON
					</a>

					<a id="off2">
						<img src="<?php echo get_template_directory_uri(); ?>/img/off.png" class="off__img">
						OFF
					</a>
				</div>
			</div>


			<div class="top__section1" id="concept">
				<div class="ts1__left height">
					<h2 class="ts__title"><span class="fra pc">CONCEPT</span>コンセプト<span class="fra sp">CONCEPT</span></h2>

					<div class="sp ts1__right inview__fade">
						<img src="<?php echo get_template_directory_uri(); ?>/img/concept.png" alt="コンセプトイメージ">
					</div>
					
					<h3 class="fra sec_titleimg">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sec_title2.png" alt="One Team,One Home" class="">
					</h3>
					<!-- <p class="ts1__text1">〜日常を豊かにする〜</p> -->
					<p class="ts1__text2">アース建築は、<br>
					美しい住まいをご提供することはもちろん<br>
					お客様の日常をより豊かにするために<br>
					まず「お客様の”好き”を見つける」ことから始め<br>
					それぞれのライフスタイルに合わせた<br>
					理想の空間を実現いたします</p>
					<!-- <p class="ts1__text2">アース建築株式会社は、<br>
					お客様の家族ごとに異なる、<br>
					ライフスタイルに則した住まいを<br>
					実現するための空間を創造します。<br>
					一歩先を見据えたデザインと高品質な建築で<br>
					理想の暮らしを実現しませんか？<br>
					暮らしやすく、デザイン性の高い、高性能な住まいを、<br>
					一級建築士事務所がオーダーメイドで考えます。</p> -->
				</div>

				<div class="pc ts1__right inview__fade">
					<img src="<?php echo get_template_directory_uri(); ?>/img/concept.png" alt="コンセプトイメージ">
				</div>

			</div>
			<div class="right__space">
				<p class="right">
					<a href="<?php echo esc_url( home_url() ); ?>/concept" class="arrow__link fra">VIEW MORE<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="リンク矢印イメージ"></a>
				</p>			
			</div>

			<div class="top__section6 top__section7">
				<h2 class="ts__title"><span class="fra pc">TOUR</span>見学会について<span class="fra sp">TOUR</span></h2>
				
				<div class="about__section">
					<div class="about__flex right__space">
						<div class="about__left">
							<a href="https://lp.55e-design.com/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/tour/tour__image2.png" alt="openhouse_tour">
							</a>
						</div>

						<div class="about__right">
							<h3>開催期間</h3>
							<p class="ab__text">4月18日(土)〜4月26日(日)</p>

							<p class="right">
							<a href="https://lp.55e-design.com/" class="arrow__link fra">VIEW MORE<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></a>
							</p>
						</div>				
					</div>
				</div>
			</div>

			<div class="relative__area">
				<ul class="slide">
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/concept_25/concept-1.jpg" class="concept__img" alt="コンセプトイメージ2"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/concept_25/concept-2.jpg" class="concept__img" alt="コンセプトイメージ3"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/concept_25/concept-3.jpg" class="concept__img" alt="コンセプトイメージ4"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/concept_25/concept-4.jpg" class="concept__img" alt="コンセプトイメージ5"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/concept_25/concept-5.jpg" class="concept__img" alt="コンセプトイメージ6"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/concept_25/concept-6.jpg" class="concept__img" alt="コンセプトイメージ7"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/concept_25/concept-7.jpg" class="concept__img" alt="コンセプトイメージ8"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/concept_25/concept-8.jpg" class="concept__img" alt="コンセプトイメージ9"></li>
				</ul>	

				<p class="fra os__text">owner’s smile</p>


			</div>
			
			<div class="top__section4" id="flow">
				<div class="ts4__flex">
					<div class="ts1__left">
						<h2 class="ts__title"><span class="fra pc">FLOW</span>ご相談の流れ<span class="fra sp">FLOW</span></h2>

						<div class="ts1__right sp inview__fade">
							<img src="<?php echo get_template_directory_uri(); ?>/img/flow.png" alt="ご相談の流れイメージ1">
						</div>

						<div class="flow__num1 flow__area flow__current inview1">
							<div class="rel__area">
								<p class="abo__num fra">01</p>
								<h3 class="flow__titlesub"><span class="fra">CONTACT</span>お問い合わせ</h3>
								
								<p class="ts4__text">ホームページまたはお電話でお気軽にご相談くださいませ。<br>人生最大のプロジェクトであるマイホーム。<br>ご心配やご質問に各専門スタッフが丁寧にご対応致します。<br>土地探しや住宅ローンなど、具体的に決まっていなくても<br class="pc2">充実したサポートによって安心してご相談いただけます。</p>
							</div>
							
							<div class="flow__aboarea">
								<a id="link1" class="flow__link">
									<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">
								</a>

							<div class="flow__bar">
								<p class="num1 fra">01</p>
								<div class="flow__col flow__first"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col flow__last"></div>
								<p class="num2 fra">07</p>
							</div>
							</div>
													
						</div>

						<div class="flow__num2 flow__area inview1">
							<div class="rel__area">
								<p class="abo__num fra">02</p>
								<h3 class="flow__titlesub"><span class="fra">VIEW</span>ご見学</h3>
								
								<p class="ts4__text">ショールームや完成見学会にて実際の施工・デザインをご観覧いただきます。<br>内観のデザインや断熱性能などのご説明に加え、建築までの流れをスタッフよりご説明いたします。<br>まずは弊社のデザインを知っていただくことが目的となりますので無理なお打ち合わせは行いません。<br>お客様の大切なお家となりますので完全予約制とさせていただきます。</p>
							</div>
							
							<div class="flow__aboarea">
								<a id="link2" class="flow__link">
									<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">
								</a>

								<div class="flow__bar">
									<p class="num1 fra">01</p>
									<div class="flow__col num1__after"></div>
									<div class="flow__col flow__first"></div>
									<div class="flow__col"></div>
									<div class="flow__col"></div>
									<div class="flow__col"></div>
									<div class="flow__col flow__last"></div>
									<p class="num2 fra">07</p>
								</div>	
								</div>					
						</div>

						<div class="flow__num3 flow__area inview1">
							<div class="rel__area">
								<p class="abo__num fra">03</p>
								<h3 class="flow__titlesub"><span class="fra">FINANCIAL PLAN</span>資金計画</h3>
								
								<!-- <p class="ts4__text">マイホームをご計画する中で一番の不安は「ご予算」ではないでしょうか。<br>建築に必要な資金にはさまざまな目に見えないお金が必要となってきます。<br>ご無理のないご計画となるよう、弊社には資金計画を行う専門スタッフがいます。<br>まずはご相談無料のファイナンシャルプランニングをお受けして頂くことをお勧めしております。</p> -->
								<p class="ts4__text">マイホームをご計画する中で一番の不安は「ご予算」ではないでしょうか。<br>建築に必要な資金にはさまざまな目に見えないお金が必要となってきます。<br>ご無理のないご計画になる様に弊社には、資金計画を行う専門スタッフが在籍しております。<br>まずは、ご相談無料のファイナンシャルプランニングをお受けして頂くことをお勧めしております。</p>
							</div>
							
							<div class="flow__aboarea">
							<a id="link3" class="flow__link">
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">
							</a>

							<div class="flow__bar">
								<p class="num1 fra">01</p>
								<div class="flow__col num1__after"></div>
								<div class="flow__col"></div>
								<div class="flow__col flow__first"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col flow__last"></div>
								<p class="num2 fra">07</p>
							</div>	
							</div>					
						</div>


						<div class="flow__num4 flow__area inview1">
							<div class="rel__area">
								<p class="abo__num fra">04</p>
								<h3 class="flow__titlesub"><span class="fra">PLANNING</span>プランニング</h3>
								
								<!-- <p class="ts4__text">高度な技術と知識で、確かな品質の住まいづくりを実現します。<br>全ての理想を叶えるには、フルオーダーメイドの家づくりがおすすめです。<br>おしゃれで暮らしやすいデザイン・間取りにこだわり、ご満足いただけるまでお打合せを行います。<br>豊富な知識と施工経験を活かしながら敷地条件やライフスタイルに合わせてお客様の理想のイメージを“カタチ”にいたします。</p> -->
								<p class="ts4__text">私たちは、ご家族のこれからのライフスタイルに深く関わるパートナーと考えております。<br>そして「日々の日常をより豊かにする」ような設計を心掛け「機能性・デザイン・間取り」にご満足頂くお打合せを行います。<br>これまでの設計実績と知識を活かしながら「敷地条件やライフスタイル」に合った理想のイメージを“カタチ”にいたします。</p>
							</div>
							<div class="flow__aboarea">
							<a id="link4" class="flow__link">
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">
							</a>

							<div class="flow__bar">
								<p class="num1 fra">01</p>
								<div class="flow__col num1__after"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col flow__first"></div>
								<div class="flow__col"></div>
								<div class="flow__col flow__last"></div>
								<p class="num2 fra">07</p>
							</div>	
							</div>					
						</div>


						<div class="flow__num5 flow__area inview1">
							<div class="rel__area">
								<p class="abo__num fra">05</p>
								<h3 class="flow__titlesub"><span class="fra">BUILDING</span>工事着工</h3>
								
								<p class="ts4__text">“妥協しない家づくり”を実現するため、細部にこだわり造り上げてまいります。<br>そのため上棟を行った後、実際に建設中の建物へ足を運んでいただき、<br>コンセント位置やカウンター高さなど、細かな仕上げをお打合せさせていただきます。<br>実際の現場でお打合せをすることでご希望のイメージがカタチとしてわかりやすく、<br>ご満足いただける住まいづくりとなります。</p>
							</div>
							
							<div class="flow__aboarea">
							<a id="link5" class="flow__link">
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">
							</a>

							<div class="flow__bar">
								<p class="num1 fra">01</p>
								<div class="flow__col num1__after"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col flow__first"></div>
								<div class="flow__col flow__last"></div>
								<p class="num2 fra">07</p>
							</div>	
							</div>					
						</div>


						<div class="flow__num6 flow__area inview1">
							<div class="rel__area">
								<p class="abo__num fra">06</p>
								<h3 class="flow__titlesub"><span class="fra">FOR YOU</span>お引き渡し</h3>
								
								<p class="ts4__text">アース建築では、お引き渡し前にお打ち合わせ内容を基に社内検査を厳しく行います。<br>その後お引き渡し時、水廻り器具の説明、カギ・インターフォンなど<br class="pc2">細かな機器のお取扱いを丁寧にご説明いたします。<br>また、お引き渡し後も定期にアフターメンテナンスを行います。<br>いつでも相談いただける環境を整備しておりますのでご安心してお過ごしください。</p>
							</div>
							<div class="flow__aboarea">
							<a id="link6" class="flow__link">
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">
							</a>

							<div class="flow__bar">
								<p class="num1 fra">01</p>
								<div class="flow__col num1__after"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col flow__last flow__first"></div>
								<p class="num2 fra">07</p>
							</div>	
							</div>					
						</div>


						<div class="flow__num7 flow__area inview1">
							<div class="rel__area">
								<p class="abo__num fra">07</p>
								<h3 class="flow__titlesub"><span class="fra">AFTER FOLLOW</span>ご訪問・メンテナンス</h3>
								
								<p class="ts4__text">お客様の新しいお住まいが完成し、お引き渡しを迎えた後も、アフターメンテナンスを行います。<br>3ヶ月、1年、3年、5年、10年が経過するごとに、弊社のスタッフがお訪ねし、メンテナンスを行います。<br>定期点検以外にも、何か不具合やお困り事が生じた場合、迅速にご対応いたします。<br>お客様の快適で安心できる暮らしをサポートするため、お気軽にお問い合わせいただける環境が整っています。</p>
							</div>
							
							<div class="flow__aboarea">
							<a id="link7" class="flow__link">
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">
							</a>

							<div class="flow__bar">
								<p class="num1 fra">01</p>
								<div class="flow__col num1__after"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col"></div>
								<div class="flow__col flow__last num7"></div>
								<p class="num2 fra">07</p>
							</div>	
							</div>					
						</div>

					</div>

					<div class="ts1__right pc inview__fade">
						<img src="<?php echo get_template_directory_uri(); ?>/img/flow.png" alt="ご相談の流れイメージ1">
					</div>				
				</div>

				<p class="right right__space">
					<a href="<?php echo esc_url( home_url() ); ?>/works#flow" class="arrow__link fra">VIEW MORE<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="リンク矢印イメージ"></a>
				</p>
			</div>

			<div class="top__section3">
				<h2 class="ts__title"><span class="fra pc">WORKS</span>施工事例<span class="fra sp">WORKS</span></h2>

				<div class="works__area" data-simplebar data-simplebar-auto-hide="false">

					<div class="w__flex">

			<?php
			$paged = get_query_var('paged'); //ページ数を取得
			$arg = array(
				'post_type' => 'works',
				'posts_per_page' => 6,
				'paged' => $paged //ページ数を取得
				);
			$my_query = new WP_Query($arg);
				if($my_query->have_posts()): 
			?>
			<?php while($my_query->have_posts()) : $my_query->the_post(); ?>	

						<a id="button<?php echo $my_query->current_post + 1; ?>">
							<div class="inview__fade w__thm">
								<img src="<?php the_post_thumbnail_url('full'); ?>">
							</div>
							

							<div class="w__info">
								<p class="w__date"><?php echo get_the_date( 'Y.m.d' ); ?></p>
							</div>
							<h3 class="w__title"><?php the_title(); ?></h3>
							<p class="w__excerpt"><?php the_field('text1'); ?></p>
						</a>

					<!-- △ ループ終了 △ -->
			<?php endwhile; ?>
			<?php else: // 投稿がない場合?>   
			<p>まだ投稿がありません。</p>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>    

					</div>
				</div>


				<p class="right right__space">
					<a href="<?php echo esc_url( home_url() ); ?>/works" class="arrow__link fra">VIEW MORE<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></a>
				</p>
				
			</div>

			<div class="top__section2">
				<div class="ts2__flex right__space">
					<div class="ts2__left">
						<h2 class="ts__title"><span class="fra pc">SHOWROOM</span>ショールーム<span class="fra sp">SHOWROOM</span></h2>
						<p class="ts1__text2">暮らしの新たな可能性がここに広がる。<br>
						最新のデザインと機能が融合した<br>
						「SHIROMI TERRACE」で、<br class="sp2">理想の空間を探しませんか？</p>
					</div>

					<div class="ts2__right">
						<p class="right">
							<a href="<?php echo esc_url( home_url() ); ?>/showroom" class="arrow__link fra">VIEW MORE<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="リンク矢印イメージ"></a>
						</p>
						
					</div>				
				</div>

				<ul class="slider">
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/showroom1.png" class="showroom__img" alt="ショールームイメージ"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/showroom2.png" class="showroom__img" alt="ショールームイメージ"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/showroom3.png" class="showroom__img" alt="ショールームイメージ"></li>
				</ul>

			</div>


		<!-- モーダルエリア -->

		<?php
		$paged = get_query_var('paged'); //ページ数を取得
		$arg = array(
			'post_type' => 'works',
			'posts_per_page' => 6,
			'paged' => $paged //ページ数を取得
			);
		$my_query = new WP_Query($arg);
			if($my_query->have_posts()): 
		?>
			<?php while($my_query->have_posts()) : $my_query->the_post(); ?>			

			<div class="popup popup<?php echo $my_query->current_post + 1; ?> hidden">
				<div class="outside"></div>


				<div class="content">
					<p class="pop__text1"><?php echo get_the_date( 'Y.m.d' ); ?></p>
					<h3 class="pop__text2"><?php the_title(); ?></h3>
					<p class="pop__text3"><?php the_field('text1'); ?></p>

					<?php if(have_rows('repeat')): ?>
					<ul class="slider2">
						<?php while(have_rows('repeat')): the_row(); ?>
						<li><img src="<?php the_sub_field('img'); ?>"></li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
		<!-- △ ループ終了 △ -->
		<?php endwhile; ?>
		<?php else: // 投稿がない場合?>   
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>      

		<!-- モーダルエリア -->	

		<div class="relative__area ">
			<ul class="slide inview4">
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/flow-1.jpg" class="flow__img concept__img" alt="施工イメージ1"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/flow-2.jpg" class="flow__img concept__img"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/flow-3.jpg" class="flow__img concept__img"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/flow-4.jpg" class="flow__img concept__img"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/flow-5.jpg" class="flow__img concept__img"></li>
			</ul>	

		</div>



		<div class="top__section5 top__section3">
			<h2 class="ts__title"><span class="fra pc">BLOG</span>ブログ<span class="fra sp">BLOG</span></h2>

			<ul class="news__article right__space">
					
				<?php
			$paged = get_query_var('paged'); //ページ数を取得
			$arg = array(
				'post_type' => 'news',
				'posts_per_page' => 3,
				'paged' => $paged //ページ数を取得
				);
			$my_query = new WP_Query($arg);
				if($my_query->have_posts()): 
			?>
			<?php while($my_query->have_posts()) : $my_query->the_post(); ?>	

				<li>
					<a href="<?php the_permalink(); ?>">
						<span class="date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
						<?php the_title(); ?>
					</a>
				</li>
				
				<?php endwhile; ?>
				<?php else: // 投稿がない場合?>   
				<p>まだ投稿がありません。</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>    
			</ul>


			<p class="right right__space">
				<a href="<?php echo esc_url( home_url() ); ?>/blog" class="arrow__link fra">VIEW MORE<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></a>
			</p>			
			
		</div>

		<div class="top__section6">
			<h2 class="ts__title"><span class="fra pc">NEWS</span>お知らせ<span class="fra sp">NEWS</span></h2>
			<div class="works__area" data-simplebar data-simplebar-auto-hide="false">
				<div class="w__flex">

				<?php
				$paged = get_query_var('paged'); //ページ数を取得
				$arg = array(
					'post_type' => 'blog',
					'posts_per_page' => 6,
					'paged' => $paged //ページ数を取得
					);
				$my_query = new WP_Query($arg);
					if($my_query->have_posts()): 
				?>
				<?php while($my_query->have_posts()) : $my_query->the_post(); ?>	

					<a href="<?php the_permalink(); ?>">
						<div class="inview__fade w__thm">
							<?php 
							if ( has_post_thumbnail() ) {
							the_post_thumbnail();
							}else{ ?>
									<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/noimage.jpg"> -->
							<?php } ?>	
						</div>
						

						<div class="blog__info">
							<div class="blog__category">
								<?php
								$terms = get_the_terms($post->ID, 'blog_category');
								if ( $terms ) {
									echo '<ul>';
									foreach ( $terms as $term ) {
										echo '<li>'.$term->name.'</li>';
									}
									echo '</ul>';
								}
								?>					
							</div>

							<span class="blog__date"><?php echo get_the_date( 'Y.m.d' ); ?></span>					
						</div>

						<h3 class="w__title"><?php the_title(); ?></h3>
					</a>

					<!-- △ ループ終了 △ -->
			<?php endwhile; ?>
			<?php else: // 投稿がない場合?>   
			<p>まだ投稿がありません。</p>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>   

				</div>
			</div>

			<p class="right right__space">
				<a href="<?php echo esc_url( home_url() ); ?>/news" class="arrow__link fra">VIEW MORE<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></a>
			</p>
		</div>

		<div class="inview__fade about__img ">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about.png" class="concept__img" alt="アース建築株式会社イメージ">
		</div>
			
		<div class="about__section">
			<div class="about__flex right__space">
				<div class="about__left">
					<a href="https://maps.app.goo.gl/RP3mJYdP3XQ35w866" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="アース建築株式会社アクセスマップ">
					</a>
				</div>

				<div class="about__right">
					<h3>アース建築株式会社</h3>
					<p class="ab__text">〒855-0851 長崎県島原市萩原2丁目5533-1</p>

					<p class="right">
					<a href="<?php echo esc_url( home_url() ); ?>/aboutus#company" class="arrow__link fra">VIEW MORE<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></a>
					</p>
				</div>				
			</div>

		</div>

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

	

</div>

<?php get_footer(); ?>