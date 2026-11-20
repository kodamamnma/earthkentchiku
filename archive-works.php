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

				<li class="current"><a href="<?php echo esc_url( home_url() ); ?>/works"><span class="fra">WORKS</span>施工事例</a></li>	
				<li class="current"><a href="<?php echo esc_url( home_url() ); ?>/works#flow"><span class="fra">FLOW</span>ご相談の流れ</a></li>	
				
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

<div class="content__area page__area blog__bottom">

	<div class="page__title">
		<h2><span class="fra pc">WORKS</span>施工事例<span class="fra sp">WORKS</span></h2>
	</div>

	<div class="breadcrumbs yu" typeof="BreadcrumbList" vocab="https://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	</div>

	<div class="blog__page works__page">
		<ul class="blog__article right__space">
			
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

		<li>
			<a id="button<?php echo $my_query->current_post + 1; ?>">

				<div class="inview__fade art__thm">
					<?php 
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    }else{ ?>
                            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/noimage.jpg"> -->
                    <?php } ?>					
				</div>

				<div class="blog__info">

					<span class="blog__date"><?php echo get_the_date( 'Y.m.d' ); ?></span>					
				</div>

				<h3 class="blog__title"><?php the_title(); ?></h3>
				<p class="blog__excerpt"><?php the_field('text1'); ?></p>
			</a>
		</li>
		
				<!-- △ ループ終了 △ -->
         <?php endwhile; ?>
          <?php else: // 投稿がない場合?>   
          <p>まだ投稿がありません。</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>    

		</ul>	


			<div class="blog__navi page__navi right__space fra">
				<?php wp_pagenavi(); ?>
			</div>
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


	<div class="works__bottom right__space">
		<div class="inview__fade wb__pageV">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/works/pageV.png" alt="アース相談イメージ">
		</div>

		<div class="page__title flow__title" id="flow">
			<h2><span class="fra pc">FLOW</span>ご相談の流れ<span class="fra sp">FLOW</span></h2>
		</div>

		<div class="flow__faq faq__area">
			<div class="rel__faq">
				<div class="faq__box flow__box fb1">
					<p class="num fra">01</p>

					<div class="faq-question js-question f1">
						<p class="fra fb__text1">CONTACT</p>
						<p class="fb__text2">お問い合わせ</p>
					</div>
					<div class="faq-answer">
						<p>ホームページまたはお電話でお気軽にご相談くださいませ。人生最大のプロジェクトであるマイホーム。ご心配やご質問に各専門スタッフが丁寧にご対応致します。土地探しや住宅ローンなど、具体的に決まっていなくても充実したサポートによって安心してご相談いただけます。<a href="<?php echo esc_url( home_url() ); ?>/contact">お問い合わせはこちら</a></p>
					</div>
				</div>					
			</div>


			<div class="rel__faq">
				<div class="faq__box flow__box fb2">
					<p class="num fra">02</p>

					<div class="faq-question js-question f2">
						<p class="fra fb__text1">VIEW</p>
						<p class="fb__text2">ご見学</p>
					</div>
					<div class="faq-answer">
						<p>ショールームや完成見学会にて実際の施工・デザインをご観覧いただきます。内観のデザインや断熱性能などのご説明に加え、建築までの流れをスタッフよりご説明いたします。まずは弊社のデザインを知っていただくことが目的となりますので無理なお打ち合わせは行いません。お客様の大切なお家となりますので完全予約制とさせていただきます。</p>
					</div>
				</div>
			</div>

			<div class="rel__faq">
				<div class="faq__box flow__box fb3">
					<p class="num fra">03</p>

					<div class="faq-question js-question f3">
						<p class="fra fb__text1">FINANCIAL PLAN</p>
						<p class="fb__text2">資金計画</p>
					</div>
					<div class="faq-answer">
						<!-- <p>マイホームをご計画する中で一番の不安は「ご予算」ではないでしょうか。建築に必要な資金にはさまざまな目に見えないお金が必要となってきます。ご無理のないご計画となるよう、弊社には資金計画を行う専門スタッフがいます。まずはご相談無料のファイナンシャルプランニングをお受けして頂くことをお勧めしております。</p> -->
						<p>マイホームをご計画する中で一番の不安は「ご予算」ではないでしょうか。建築に必要な資金にはさまざまな目に見えないお金が必要となってきます。ご無理のないご計画になる様に弊社には、資金計画を行う専門スタッフが在籍しております。まずは、ご相談無料のファイナンシャルプランニングをお受けして頂くことをお勧めしております。</p>
					</div>
				</div>
			</div>

			<div class="rel__faq">
				<div class="faq__box flow__box fb4">
					<p class="num fra">04</p>

					<div class="faq-question js-question f4">
						<p class="fra fb__text1">PLANNING</p>
						<p class="fb__text2">プランニング</p>
					</div>
					<div class="faq-answer">
						<!-- <p>高度な技術と知識で、確かな品質の住まいづくりを実現します。私たちはご家族の生活スタイルに深く関わるパートナーと考え、暮らしをサポートし、豊かにするような設計を心掛けています。全ての理想を叶えるには、フルオーダーメイドの家づくりがおすすめです。おしゃれで暮らしやすいデザイン・間取りにこだわり、ご満足いただけるまでお打合せを行います。豊富な知識と施工経験を活かしながら敷地条件やライフスタイルに合わせてお客様の理想のイメージを“カタチ”にいたします。</p> -->
						<p>私たちは、ご家族のこれからのライフスタイルに深く関わるパートナーと考えております。そして「日々の日常をより豊かにする」ような設計を心掛け「機能性・デザイン・間取り」にご満足頂くお打合せを行います。これまでの設計実績と知識を活かしながら「敷地条件やライフスタイル」に合った理想のイメージを“カタチ”にいたします。</p>
					</div>
				</div>
			</div>

			<div class="rel__faq">
				<div class="faq__box flow__box fb5">
					<p class="num fra">05</p>

					<div class="faq-question js-question f5">
						<p class="fra fb__text1">BUILDING</p>
						<p class="fb__text2">工事着工</p>
					</div>
					<div class="faq-answer">
						<p>“妥協しない家づくり”を実現するため、細部にこだわり造り上げてまいります。そのため上棟を行った後、実際に建設中の建物へ足を運んでいただき、コンセント位置やカウンター高さなど、細かな仕上げをお打合せさせていただきます。実際の現場でお打合せをすることでご希望のイメージがカタチとしてわかりやすく、ご満足いただける住まいづくりとなります。</p>
					</div>
				</div>
			</div>

			<div class="rel__faq">
				<div class="faq__box flow__box fb6">
					<p class="num fra">06</p>

					<div class="faq-question js-question f6">
						<p class="fra fb__text1">FOR YOU</p>
						<p class="fb__text2">お引き渡し</p>
					</div>
					<div class="faq-answer">
						<p>アース建築では、お引き渡し前にお打ち合わせ内容を基に社内検査を厳しく行います。その後お引き渡し時、水廻り器具の説明、カギ・インターフォンなど細かな機器のお取扱いを丁寧にご説明いたします。また、お引き渡し後も定期にアフターメンテナンスを行います。いつでも相談いただける環境を整備しておりますのでご安心してお過ごしください。</p>
					</div>
				</div>
			</div>

			<div class="rel__faq last">
				<div class="faq__box flow__box fb7">
					<p class="num fra">07</p>

					<div class="faq-question js-question f7">
						<p class="fra fb__text1">AFTER FOLLOW</p>
						<p class="fb__text2">ご訪問・メンテナンス</p>
					</div>
					<div class="faq-answer">
						<p>お客様の新しいお住まいが完成し、お引き渡しを迎えた後も、アフターメンテナンスを行います。3ヶ月、1年、3年、5年、そして10年が経過するごとに、弊社のスタッフがお訪ねし、メンテナンスを行います。定期点検以外にも、何か不具合やお困り事が生じた場合、迅速にご対応いたします。お客様の快適で安心できる暮らしをサポートするため、お気軽にお問い合わせいただける環境が整っています。</p>
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
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/arrow2.png">
		</a>
	</div>
</div>


<?php get_footer(); ?>		