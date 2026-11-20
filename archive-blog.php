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
				<li class="current"><a href="<?php echo esc_url( home_url() ); ?>/news"><span class="fra">NEWS</span>お知らせ</a></li>
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
		<h2><span class="fra pc">NEWS</span>お知らせ<span class="fra sp">NEWS</span></h2>
	</div>

	<div class="breadcrumbs yu" typeof="BreadcrumbList" vocab="https://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	</div>

	<div class="blog__categorylink">
		<ul>
			<li><a href="blog" class="current">ALL</a></li>
		</ul>
		
		<?php // get_terms を使ったターム一覧の表示
		  $taxonomy_terms = get_terms('blog_category'); // タクソノミースラッグを指定
		  if(!empty($taxonomy_terms)&&!is_wp_error($taxonomy_terms)){
		    echo '<ul>';
		    foreach($taxonomy_terms as $taxonomy_term): // foreach ループの開始
		?>
		<li><a href="<?php echo get_term_link($taxonomy_term); ?>" class="<?php if($taxonomy_term->slug === $term){ echo 'current'; } ?>"><?php echo $taxonomy_term->name; ?></a></li>
		<?php
		    endforeach; // foreach ループの終了
		    echo '</ul>';
		  }
		?>		
	</div>


	<div class="blog__page">
		<ul class="blog__article right__space">
			
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

		<li>
			<a href="<?php the_permalink(); ?>">

				<div class="inview__fade art__thm">
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

				<h3 class="blog__title"><?php the_title(); ?></h3>
				<p class="blog__excerpt"><?php echo wp_trim_words( get_the_content(), 90, '…' ); ?></p>
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


</div>


<div class="pbcontact__area">
	<div class="page__title mt__0">
		<h2><span class="fra">CONTACT</span>お問い合わせ</h2>
	</div>

	<div class="pca__flex">
		<p>アース建築であなたらしい家をつくりませんか？<br>こちらからお気軽にご相談ください。</p>

		<a href="" class="fra">
			VIEW MORE
			<img src="<?php echo get_template_directory_uri(); ?>/img/about/arrow2.png">
		</a>
	</div>
</div>


<?php get_footer(); ?>		