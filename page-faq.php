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
				<li class="current"><a href="<?php echo esc_url( home_url() ); ?>/faq"><span class="fra">FAQ</span>よくある質問</a></li>
					
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


<div class="content__area page__area">

	<div class="page__title">
		<h2><span class="fra pc">FAQ</span>よくある質問<span class="fra sp">FAQ</span></h2>
	</div>

	<div class="breadcrumbs yu" typeof="BreadcrumbList" vocab="https://schema.org/">
	    <?php if(function_exists('bcn_display'))
	    {
	        bcn_display();
	    }?>
	</div>


	<div class="faq__area right__space">
		<div class="faq__box">
			<p class="faq-question js-question">アース建築での家づくりはどのように進みますか？</p>
			<div class="faq-answer">
				<p>まず資金計画をきちんと立てることから始めます。<br>ご無理のない計画となるよう専門のスタッフと一緒に予算計画を行います。<br>その後お客様のご希望やご要望をお伺いし、それに基づいてプランニングを進めます。<br>アース建築では設計から施工まで一貫してサポートし、お客様とのコミュニケーションを大切にした家づくりを提供しています。</p>
				<p><a href="<?php echo esc_url( home_url() ); ?>/works#flow">詳しい家づくりの流れはこちら</a></p>
			</div>
		</div>		

		<div class="faq__box">
			<p class="faq-question js-question">まだ土地を購入していないのですが、相談は可能でしょうか？</p>
			<div class="faq-answer">
				<p>もちろんご相談可能です。<br>土地探しのサポートだけでなく、購入を検討されている土地があれば<br>どれくらいのボリュームの建物が建てられるか、日当たりや場所、間取り、<br>建築基準法上での注意点など、一級建築士の観点から現地に出向いて総合的にご説明させていただきます。</p>
				
			</div>
		</div>	

		<div class="faq__box">
			<p class="faq-question js-question">具体的なイメージがないと注文住宅は難しいですか？</p>
			<div class="faq-answer">
				<p>具体的なイメージがなくとも私たちがお客様の想いをカタチにしていきます。<br>
				アース建築では資金計画や土地探し、プランニングからデザイン、<br>
				施工段階など専門のスタッフがそれぞれご対応いたします。<br>
				また女性スタッフがご対応させていただきますので、<br>
				不安なことやふわっとしたイメージでも丁寧にヒヤリングを行い、<br>
				ご相談しやすい環境づくりを心がけております。<br>
				女性ならではのお悩みも、安心してご相談ください。</p>
			</div>
		</div>	

		<div class="faq__box">
			<p class="faq-question js-question">こだわりが強いのですが、設計に反映してもらえますか？</p>
			<div class="faq-answer">
				<p>お客様が大切にしていることや家に対するご希望、想いなど、何でもお話しください。近年では様々な情報媒体があり、ご要望も多様化してきています。<br>
				“ 理想のイメージはあるのに、言葉で伝えることが難しい… ”<br>
				そんなご要望をカタチにするため、一級建築士の経験や知識をもとに<br>
				コストやメンテナンス、デザイン性など様々な観点から<br>
				最良のご提案をさせていただきます。</p>
			</div>
		</div>	

		<div class="faq__box">
			<p class="faq-question js-question">家づくりってどれくらいの期間がかかりますか？</p>
			<div class="faq-answer">
				<p>家づくりの期間は、プロジェクトの規模や仕様により異なりますが、<br>
				一般的にはプランニングからお引き渡しまで約6ヶ月～1年程度を目安にしています。<br>
				ご納得のいただけるよう、資金計画からプランニングまで何度もお打合せを<br>
				行いますので、しっかりとしたスケジュールプランをご提案いたします。</p>
			</div>
		</div>	

		<div class="faq__box">
			<p class="faq-question js-question">一級建築士に設計をお願いすると費用は高くなりますか？</p>
			<div class="faq-answer">
				<p>弊社では“一級建築士だから”というような特別な設計料は頂いておりません。<br>
				一級建築士というプロの資格を持つスタッフがいることで、<br>
				より高度なデザインや構造の提案が可能となります。<br>
				お客様の想いをカタチにするため、また安心して快適な住まいをご提供するために専門的な知識と経験を活かしています。</p>
			</div>
		</div>	

		<div class="faq__box">
			<p class="faq-question js-question">予算はどのくらい必要ですか？</p>
			<div class="faq-answer">
				<p>ご予算はプロジェクトの規模や仕様により異なりますが<br>
				弊社ではご無理のない計画となるよう、資金計画から相談を承っております。<br>
				その後、具体的なご要望や予算についてお聞かせいただき、<br>
				最適なプランをご提案させていただきます。<br>
				専門知識を持ったスタッフに、ご納得のいくまでご相談ください。</p>
			</div>
		</div>	

		<div class="faq__box">
			<p class="faq-question js-question">施工後のアフターサービスはありますか？</p>
			<div class="faq-answer">
				<p>弊社が大切にしているのがアフターメンテナンスでございます。<br>
				お引き渡し後、何十年も住み続けるものですので、建てるときよりも建てた後の
				メンテナンスが大切だと考えています。お客様に安心してお過ごしいただけるよう、<br>
				お引き渡し後、3ヶ月・1年・3年・5年・10年経過した際には<br>
				定期的な点検もしくはお声掛けをさせていただきます。<br>
				急な故障や不具合はもちろん、日常の修理などにも迅速にご対応いたしますのでいつでもお気軽にご相談ください。</p>
			</div>
		</div>	

		<div class="faq__box">
			<p class="faq-question js-question">建設途中の見学は可能でしょうか？</p>
			<div class="faq-answer">
				<p>お客様が見学ご希望時はもちろん、弊社からもお声掛けさせていただいております。<br>
				上棟後、おおよそ部屋の間取りが想像できる骨組みの状態で、<br>
				実際の収納のサイズや仕様、スイッチ、コンセントの細かな位置など、<br>
				実物を目の前にしながら最終確認やご要望のヒヤリングを行っています。<br>
				工事が進む中でも、お客様と共に作り上げる弊社のスタイルは変わることなく、<br>
				コミュニケーションを大切にした住まいづくりを心がけております。</p>
			</div>
		</div>	

		<div class="faq__box">
			<p class="faq-question js-question">ショールーム見学予約はどうすればいいですか？</p>
			<div class="faq-answer">
				<p>「SHIROMI TERRACE」の見学は予約制となっております。<br>
				お問い合わせいただければ、女性スタッフがご案内させていただきます。<br>
				お子様もご一緒に見学可能ですのでお気軽に問い合わせくださいませ。<br>
				また見学日時やその他ご相談がございましたら、お声掛けください。</p>
				<p><a href="<?php echo esc_url( home_url() ); ?>/contact">ご予約はこちら</a></p>
			</div>
		</div>			


		<div class="faq__box">
			<p class="faq-question js-question">子連れでの見学も可能ですか？</p>
			<div class="faq-answer">
				<p>ご安心してご来場くださいませ。<br>
				打合せ室にはキッズルームがあり、授乳室もございます。<br>
				また弊社には女性スタッフが多く在籍し、ご対応も可能です。<br>
				妊娠中・授乳中・子育て中など様々なシーンや女性ならではのお悩みも<br>
				女性スタッフにお気軽にご相談ください。</p>
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