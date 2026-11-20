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
		<h2><span class="fra pc">BLOG</span>ブログ<span class="fra sp">BLOG</span></h2>
	</div>

	<div class="breadcrumbs yu" typeof="BreadcrumbList" vocab="https://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	</div>


	<div class="news__page">
		<ul class="news__article right__space">
			
          <?php
           $paged = get_query_var('paged'); //ページ数を取得
           $arg = array(
              'post_type' => 'news',
              'posts_per_page' => 8,
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
		
				<!-- △ ループ終了 △ -->
         <?php endwhile; ?>
          <?php else: // 投稿がない場合?>   
          <p>まだ投稿がありません。</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>    

		</ul>	


			<div class="page__navi right__space fra">
				<?php wp_pagenavi(); ?>
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