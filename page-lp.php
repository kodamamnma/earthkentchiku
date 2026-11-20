<?php
/*
Template Name: お家見学会LP
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お家見学会 | アース建築</title>
  
<!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

  <?php wp_head(); ?>

</head>

<body <?php body_class('lp-page'); ?>>
  <!-- <h1 class="heading-l-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/logo.png" alt="">
    アース建築株式会社
  </h1> -->

<div class="mv-l pc-hidden">
  <video autoplay muted loop playsinline>
    <source src="<?php echo get_template_directory_uri(); ?>/img/lp-img/demo-mv.mp4" type="video/mp4">
    お使いのブラウザでは動画を再生できません。
  </video>
</div>


<div class="mv-l-pc sp-hidden">
  <div class="mv-l-pc_inner">
    <div class="mv-i-pc_img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/mv-pc.png" alt="メインビジュアル">
    </div>

    <div class="mv-l-pc_movie">
      <video
        autoplay
        muted
        loop
        playsinline
      >
        <source src="<?php echo get_template_directory_uri(); ?>/img/lp-img/demo-mv.mp4" type="video/mp4">
        お使いのブラウザでは動画を再生できません。
      </video>
    </div>
  </div>
</div>



  <section class="section-l section-problem-l">
    <h2 class="heading-l">
      <span class="subheading-l">お家見学をお考えのみなさま</span><br>
      こんな<span class="text-deco">お悩み</span>ありませんか？
    </h2>

    <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/img_problem.png" alt="お悩みイメージ" class="problem-img">

    <div class="problem-wrapper">
      <ul class="problem-list">

        <!-- お悩み 01 -->
        <li class="problem-item">
          <div class="problem-card">
            <p class="problem-num">お悩み1</p>
            <p class="problem-main">
              お家づくりについて<br>
              なにから考えていいかわからない
            </p>
            <p class="problem-sub">
              何を見て何を調べれば良いの？
            </p>
            <div class="problem-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/problem-icon.png" alt="悩みアイコン1">
            </div>
          </div>
        </li>

        <!-- お悩み 02 -->
        <li class="problem-item">
          <div class="problem-card">
            <p class="problem-num">お悩み2</p>
            <p class="problem-main">
              どのくらいのお金がかかるの？
            </p>
            <p class="problem-sub">
              月額の支払いがいくらか聞きたい。<br>
              ローンは組めるのだろうか？
            </p>
            <div class="problem-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/problem-icon.png" alt="悩みアイコン2">
            </div>
          </div>
        </li>

        <!-- お悩み 03 -->
        <li class="problem-item">
          <div class="problem-card">
            <p class="problem-num">お悩み3</p>
            <p class="problem-main">
              見学会に行ってみたいけど、<br>
              営業されるのは嫌...
            </p>
            <p class="problem-sub">
              自分のペースで邪魔されずに<br>
              じっくり見たい。
            </p>
            <div class="problem-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/problem-icon.png" alt="悩みアイコン3">
            </div>
          </div>
        </li>

      </ul>
    </div>
  </section>


  <section class="section-l section-solution-l section-gray">
    <h2 class="heading-l">
      <span class="subheading-l">そんなお悩みの方</span><br>
      <span class="under-line">ご安心ください!!</span>
    </h2>

    <div class="solution-wrapper">
      <ul class="solution-list">

        <!-- 解決策 01 -->
        <li class="solution-item">
          <div class="solution-inner">
            <div class="solution-text">
              <div class="solution-num">
                <span>Check!</span>
                <span class="solution-count">01</span>
              </div>
              <p class="solution-title">
                お悩みの解決策が
                ここに入ります
              </p>
            </div>
            <div class="solution-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/solution01.png" alt="解決策01のイメージ">
            </div>
          </div>
        </li>

        <!-- 解決策 02 -->
        <li class="solution-item">
          <div class="solution-inner">
            <div class="solution-text">
              <div class="solution-num">
                <span>Check!</span>
                <span class="solution-count">02</span>
              </div>
              <p class="solution-title">
                お悩みの解決策がここに入ります
              </p>
            </div>
            <div class="solution-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/solution01.png" alt="解決策02のイメージ">
            </div>
          </div>
        </li>

        <!-- 解決策 03 -->
        <li class="solution-item">
          <div class="solution-inner">
            <div class="solution-text">
              <div class="solution-num">
                <span>Check!</span>
                <span class="solution-count">03</span>
              </div>
              <p class="solution-title">
                お悩みの解決策が
                ここに入ります
              </p>
            </div>
            <div class="solution-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/solution01.png" alt="解決策03のイメージ">
            </div>
          </div>
        </li>

      </ul>
    </div>

    <p class="solution-message">
      新築住宅のことなら<br>
      <span>「アース建築株式会社」</span><br>
      にお任せください
    </p>
  </section>



  <section class="section-l section-feature-l">
    <h2 class="heading-l">
      <span class="subheading-l">アース建築株式会社の見学会には</span><br>
      こんな<span class="under-line text-green">特徴</span>があります!!
    </h2>

    <div class="feature-wrapper">
      <ul class="feature-list">

        <!-- 特徴01 -->
        <li class="feature-item">
          <div class="feature-content">
            <div class="feature-heading">
              <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/feature-heading01.png" alt="特徴01見出し" class="feature-heading-img">
            </div>
            <h3 class="feature-title">特徴01のタイトルがここに入ります</h3>
            <p class="feature-text">
              特徴01の説明文がここに入ります。<br>
              文字サイズや行間の確認用ダミーテキストです。（50文字程度）
            </p>
          </div>
          <div class="feature-image sp-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/feature-img01.png" alt="特徴01の画像">
          </div>
        </li>

        <!-- 特徴02 -->
        <li class="feature-item">
          <div class="feature-content">
            <div class="feature-heading">
              <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/feature-heading02.png" alt="特徴02見出し" class="feature-heading-img">
            </div>
            <h3 class="feature-title">特徴02のタイトルがここに入ります</h3>
            <p class="feature-text">
              特徴02の説明文がここに入ります。<br>
              文字サイズや行間の確認用ダミーテキストです。（50文字程度）
            </p>
          </div>
          <div class="feature-image sp-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/feature-img01.png" alt="特徴02の画像">
          </div>
        </li>

        <!-- 特徴03 -->
        <li class="feature-item">
          <div class="feature-content">
            <div class="feature-heading">
              <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/feature-heading03.png" alt="特徴03見出し" class="feature-heading-img">
            </div>
            <h3 class="feature-title">特徴03のタイトルがここに入ります</h3>
            <p class="feature-text">
              特徴03の説明文がここに入ります。<br>
              文字サイズや行間の確認用ダミーテキストです。（50文字程度）
            </p>
          </div>
          <div class="feature-image sp-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/feature-img01.png" alt="特徴03の画像">
          </div>
        </li>

      </ul>
    </div>
  </section>


  <section class="section-l section-info-l section-gray pc-hidden">
    <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info-icon.png" alt="アイコン" class="info-icon">
    <h2 class="heading-l">
      <span class="subheading-l">見て、ふれて、感じる</span><br>
      <span class="under-line">おうち見学会情報</span>
    </h2>

    <div class="info-wrapper">

      <!-- メインビジュアル -->
      <div class="info-main">
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info-thumbnail.png" alt="おうち見学会のメイン画像" class="info-thumbnail">
      </div>

      <!-- 概要部分 -->
      <div class="info-summary">
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info-heading.png" alt="見学会の見出し画像" class="info-heading">

        <h3 class="info-title">遊び心あふれるモダンなお家 完成見学会</h3>

        <p class="info-lead">
          今回ご協力いただきますお家の特徴は<br>
          【遊び心あふれるモダンなお家】<br>
          グレーの吹付×木目調の外壁がアクセントのお家です。
        </p>

        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info01.png" alt="お家の外観写真" class="info-img info-img1">
      </div>

      <!-- 開催情報 -->
      <div class="info-detail">
        <dl class="info-data">
          <div>
            <dt>【開催期間】</dt>
            <dd>2025年7月19日(土) ～ 8月3日(日)</dd>
          </div>
          <div>
            <dt>【見学時間】</dt>
            <dd>10：00 ～ 17：00</dd>
          </div>
          <div>
            <dt>【開催場所】</dt>
            <dd>島原市〇〇〇〇</dd>
          </div>
        </dl>

        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info02.png" alt="ご来場特典のイメージ" class="info-img info-img2">

        <p class="info-present-text">
          ご来場特典として<br>
          「エコカラットの洗面トレー」をプレゼント！
        </p>
      </div>

      <a href="#form-l" class="btn-cta">
        <span>今すぐに見学会の</span><br>
        予約をする
      </a>

    </div>
  </section>

<!-- PC専用セクション -->
<section class="section-l section-info-l section-gray pc-only sp-hidden">

  <!-- アイコンと見出し -->
  <div class="info-header">
    <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info-icon.png" alt="アイコン" class="info-icon">
    <h2 class="heading-l">
      <span class="subheading-l">見て、ふれて、感じる</span><br>
      <span class="under-line">おうち見学会情報</span>
    </h2>
  </div>

  <div class="info-wrapper">

    <!-- 左側ビジュアル -->
    <div class="info-visual">
      <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info-thumbnail.png" alt="おうち見学会のメイン画像" class="info-thumbnail">

      <div class="info-gallery">
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info01.png" alt="お家の外観写真" class="info-img info-img1">
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info02.png" alt="ご来場特典のイメージ" class="info-img info-img2">
      </div>
    </div>

    <!-- 右側：概要部分 -->
    <div class="info-summary">
      <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info-heading.png" alt="見学会の見出し画像" class="info-heading">

      <h3 class="info-title">遊び心あふれるモダンなお家 完成見学会</h3>

      <p class="info-lead">
        今回ご協力いただきますお家の特徴は<br>
        【遊び心あふれるモダンなお家】<br>
        グレーの吹付×木目調の外壁がアクセントのお家です。
      </p>

      <!-- 開催情報 -->
      <div class="info-detail">
        <dl class="info-data">
          <dt>【開催期間】</dt>
          <dd>2025年7月19日(土) ～ 8月3日(日)</dd>

          <dt>【見学時間】</dt>
          <dd>10：00 ～ 17：00</dd>

          <dt>【開催場所】</dt>
          <dd>島原市〇〇〇〇</dd>
        </dl>

        <p class="info-present-text">
          ご来場特典として<br>
          「エコカラットの洗面トレー」をプレゼント！
        </p>
      </div>

      <!-- CTAボタン -->
      <a href="#form-l" class="btn-cta">
        <span>今すぐに見学会の</span><br>
        予約をする
      </a>
    </div>

  </div>
</section>



  <section class="section-l section-review-l">
    <h2 class="heading-l">
      <span class="subheading-l">お客様の<span class="text-green">”リアルな声”</span>をご紹介</span><br>
      <span class="under-line">お客様の声</span>
    </h2>

    <div class="review-wrapper">
      <ul class="review-list">
        <li class="review-item">
          <div class="review-card">
            <!-- 背景画像 -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/review-card.png" alt="お客様の声カード背景" class="review-bg">

            <!-- コンテンツ（重ねる部分） -->
            <div class="review-content">
              <div class="review-header">
                <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/review-img.png" alt="お客様写真" class="review-img">
                <div class="review-header-text">
                  <p class="review-subtitle">〇〇見学会に参加</p>
                  <p class="review-title">N様ご家族</p>
                </div>
              </div>

              <div class="review-body">
                <p>
                  この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                  この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                  この文章はダミーです。文字の大きさ、100文字です。
                </p>
              </div>
            </div>
          </div>
        </li>
        <li class="review-item">
          <div class="review-card">
            <!-- 背景画像 -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/review-card.png" alt="お客様の声カード背景" class="review-bg">

            <!-- コンテンツ（重ねる部分） -->
            <div class="review-content">
              <div class="review-header">
                <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/review-img.png" alt="お客様写真" class="review-img">
                <div class="review-header-text">
                  <p class="review-subtitle">〇〇見学会に参加</p>
                  <p class="review-title">N様ご家族</p>
                </div>
              </div>

              <div class="review-body">
                <p>
                  この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                  この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                  この文章はダミーです。文字の大きさ、100文字です。
                </p>
              </div>
            </div>
          </div>
        </li>
        <li class="review-item">
          <div class="review-card">
            <!-- 背景画像 -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/review-card.png" alt="お客様の声カード背景" class="review-bg">

            <!-- コンテンツ（重ねる部分） -->
            <div class="review-content">
              <div class="review-header">
                <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/review-img.png" alt="お客様写真" class="review-img">
                <div class="review-header-text">
                  <p class="review-subtitle">〇〇見学会に参加</p>
                  <p class="review-title">N様ご家族</p>
                </div>
              </div>

              <div class="review-body">
                <p>
                  この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                  この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                  この文章はダミーです。文字の大きさ、100文字です。
                </p>
              </div>
            </div>
          </div>
        </li>
        <li class="review-item">
          <div class="review-card">
            <!-- 背景画像 -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/review-card.png" alt="お客様の声カード背景" class="review-bg">

            <!-- コンテンツ（重ねる部分） -->
            <div class="review-content">
              <div class="review-header">
                <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/review-img.png" alt="お客様写真" class="review-img">
                <div class="review-header-text">
                  <p class="review-subtitle">〇〇見学会に参加</p>
                  <p class="review-title">N様ご家族</p>
                </div>
              </div>

              <div class="review-body">
                <p>
                  この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                  この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                  この文章はダミーです。文字の大きさ、100文字です。
                </p>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="section-l section-construction-l section-gray">
    <h2 class="heading-l">
      <span class="subheading-l">アース建築株式会社の</span><br>
      これまでの<span class="under-line text-green">施工事例</span>
    </h2>

  <div class="construction-wrapper">
    <!-- 1件目 -->
    <div class="construction-item">
      <div class="construction-image">
        <div class="construction-main">
          <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/construction1.png" alt="外観1">
        </div>
        <div class="construction-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/construction2.png" alt="内観1-1">
          <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/construction3.png" alt="内観1-2">
          <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/construction4.png" alt="内観1-3">
      </div>
      </div>
      <div class="construction-content">
        <h2 class="construction-title">遊び心あふれるモダンな空間</h2>
        <p>
          グレーを基調とした外壁に、木目調のアクセントを取り入れることで、モダンな佇まいを演出しています。たっぷりと光が差し込む大きな窓が特徴の空間に、白いタイル壁のキッチンが美しく映え、まるでカフェのような開放感あふれる空間を演出します。また、トイレのアクセントクロスや水廻りのタイルが遊び心をプラスします。
        </p>
      </div>
    </div>

    <!-- 2件目 -->
    <div class="construction-item">
      <div class="construction-image">
        <div class="construction-main">
          <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/construction1.png" alt="外観1">
        </div>
        <div class="construction-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/construction2.png" alt="内観1-1">
          <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/construction3.png" alt="内観1-2">
          <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/construction4.png" alt="内観1-3">
      </div>
      </div>
      <div class="construction-content">
        <h2 class="construction-title">遊び心あふれるモダンな空間</h2>
        <p>
          グレーを基調とした外壁に、木目調のアクセントを取り入れることで、モダンな佇まいを演出しています。たっぷりと光が差し込む大きな窓が特徴の空間に、白いタイル壁のキッチンが美しく映え、まるでカフェのような開放感あふれる空間を演出します。また、トイレのアクセントクロスや水廻りのタイルが遊び心をプラスします。
        </p>
      </div>
    </div>
  </section>

<section class="section-l section-qa-l">
  <h2 class="heading-l">
    <span class="subheading-l"><span class="text-green">Q&amp;A</span></span><br>
    <span class="under-line">よくあるご質問</span>
  </h2>

  <div class="faq-l-list">
    <div class="faq-l-item">
      <div class="faq-l-question">
        <p class="faq-l-q">
          <span class="faq-l-q-icon">Q</span>参加費はかかりますか？
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/faq-l-icon.png" alt="開く" class="faq-l-icon">
      </div>

      <div class="faq-l-answer">
        <p class="faq-l-a">
          <span class="faq-l-a-icon">A</span>見学会は無料でご参加いただけます。お気軽にお申し込みください。
        </p>
      </div>
    </div>

    <!-- 追加例 -->
    <div class="faq-l-item">
      <div class="faq-l-question">
        <p class="faq-l-q">
          <span class="faq-l-q-icon">Q</span>小さな子どもを連れて行っても大丈夫ですか？
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/faq-l-icon.png" alt="開く" class="faq-l-icon">
      </div>
      <div class="faq-l-answer">
        <p class="faq-l-a">
          <span class="faq-l-a-icon">A</span>はい、大丈夫です。お子さま連れでも安心してご参加いただけます。
        </p>
      </div>
    </div>

    <!-- 追加例 -->
    <div class="faq-l-item">
      <div class="faq-l-question">
        <p class="faq-l-q">
          <span class="faq-l-q-icon">Q</span>当日はどれくらい時間がかかりますか？
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/faq-l-icon.png" alt="開く" class="faq-l-icon">
      </div>
      <div class="faq-l-answer">
        <p class="faq-l-a">
          <span class="faq-l-a-icon">A</span>ご見学は30分〜1時間程度が目安です。ご都合に合わせて短時間でのご案内も可能です。
        </p>
      </div>
    </div>

    <!-- 追加例 -->
    <div class="faq-l-item">
      <div class="faq-l-question">
        <p class="faq-l-q">
          <span class="faq-l-q-icon">Q</span>予約なしでも参加できますか？
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/faq-l-icon.png" alt="開く" class="faq-l-icon">
      </div>
      <div class="faq-l-answer">
        <p class="faq-l-a">
          <span class="faq-l-a-icon">A</span>当日のご参加も可能ですが、混雑を避けてゆっくりご覧いただくために 事前予約をおすすめ しております。
        </p>
      </div>
    </div>

    <!-- 追加例 -->
    <div class="faq-l-item">
      <div class="faq-l-question">
        <p class="faq-l-q">
          <span class="faq-l-q-icon">Q</span>駐車場はありますか？
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/faq-l-icon.png" alt="開く" class="faq-l-icon">
      </div>
      <div class="faq-l-answer">
        <p class="faq-l-a">
          <span class="faq-l-a-icon">A</span>会場には専用駐車スペースをご用意しております。満車の場合はスタッフがご案内いたします。
      </div>
    </div>
  </div>
</section>

<section class="section-l section-contact-l section-gray" id="form-l">
  <h2 class="heading-l">
    <span class="subheading-l"><span class="text-green">Contact</span></span><br>
    <span class="under-line">ご来場予約フォーム</span>
  </h2>
  <p class="contact-l-lead">
    以下の見学会予約フォームに必要事項をご入力の上、<br>
    送信ボタンを押してください<br>
    <span class="required">*</span>は必須項目です
  </p>

  <div class="contact-l-wrapper">
    <?php echo do_shortcode('[contact-form-7 id="31feeb2" title="LP用お問い合わせ"]'); ?>
  </div>
</section>


<section class="section-l section-info-l section-gray pc-hidden">
    <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info-icon.png" alt="アイコン" class="info-icon">
    <h2 class="heading-l">
      <span class="subheading-l">見て、ふれて、感じる</span><br>
      <span class="under-line">おうち見学会情報</span>
    </h2>

    <div class="info-wrapper">

      <!-- メインビジュアル -->
      <div class="info-main">
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info-thumbnail.png" alt="おうち見学会のメイン画像" class="info-thumbnail">
      </div>

      <!-- 概要部分 -->
      <div class="info-summary">
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info-heading.png" alt="見学会の見出し画像" class="info-heading">

        <h3 class="info-title">遊び心あふれるモダンなお家 完成見学会</h3>

        <p class="info-lead">
          今回ご協力いただきますお家の特徴は<br>
          【遊び心あふれるモダンなお家】<br>
          グレーの吹付×木目調の外壁がアクセントのお家です。
        </p>

        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info01.png" alt="お家の外観写真" class="info-img info-img1">
      </div>

      <!-- 開催情報 -->
      <div class="info-detail">
        <dl class="info-data">
          <div>
            <dt>【開催期間】</dt>
            <dd>2025年7月19日(土) ～ 8月3日(日)</dd>
          </div>
          <div>
            <dt>【見学時間】</dt>
            <dd>10：00 ～ 17：00</dd>
          </div>
          <div>
            <dt>【開催場所】</dt>
            <dd>島原市〇〇〇〇</dd>
          </div>
        </dl>

        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info02.png" alt="ご来場特典のイメージ" class="info-img info-img2">

        <p class="info-present-text">
          ご来場特典として<br>
          「エコカラットの洗面トレー」をプレゼント！
        </p>
      </div>

      <a href="#form-l" class="btn-cta">
        <span>今すぐに見学会の</span><br>
        予約をする
      </a>

    </div>
  </section>

<!-- PC専用セクション -->
<section class="section-l section-info-l section-gray pc-only sp-hidden">

  <!-- アイコンと見出し -->
  <div class="info-header">
    <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info-icon.png" alt="アイコン" class="info-icon">
    <h2 class="heading-l">
      <span class="subheading-l">見て、ふれて、感じる</span><br>
      <span class="under-line">おうち見学会情報</span>
    </h2>
  </div>

  <div class="info-wrapper">

    <!-- 左側ビジュアル -->
    <div class="info-visual">
      <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info-thumbnail.png" alt="おうち見学会のメイン画像" class="info-thumbnail">

      <div class="info-gallery">
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info01.png" alt="お家の外観写真" class="info-img info-img1">
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info02.png" alt="ご来場特典のイメージ" class="info-img info-img2">
      </div>
    </div>

    <!-- 右側：概要部分 -->
    <div class="info-summary">
      <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/info-heading.png" alt="見学会の見出し画像" class="info-heading">

      <h3 class="info-title">遊び心あふれるモダンなお家 完成見学会</h3>

      <p class="info-lead">
        今回ご協力いただきますお家の特徴は<br>
        【遊び心あふれるモダンなお家】<br>
        グレーの吹付×木目調の外壁がアクセントのお家です。
      </p>

      <!-- 開催情報 -->
      <div class="info-detail">
        <dl class="info-data">
          <dt>【開催期間】</dt>
          <dd>2025年7月19日(土) ～ 8月3日(日)</dd>

          <dt>【見学時間】</dt>
          <dd>10：00 ～ 17：00</dd>

          <dt>【開催場所】</dt>
          <dd>島原市〇〇〇〇</dd>
        </dl>

        <p class="info-present-text">
          ご来場特典として<br>
          「エコカラットの洗面トレー」をプレゼント！
        </p>
      </div>

      <!-- CTAボタン -->
      <a href="#form-l" class="btn-cta">
        <span>今すぐに見学会の</span><br>
        予約をする
      </a>
    </div>

  </div>
</section>


  <!-- ページトップに戻るボタン -->
<a href="#" class="back-to-top">
  <img src="<?php echo get_template_directory_uri(); ?>/img/lp-img/top-icon.png" alt="トップへ戻るアイコン">
  <span>TOP</span>
</a>



  <footer class="footer-l">
    © 2025 アース建築株式会社. All rights reserved
  </footer>
  
  <!-- JS -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/lp.js"></script>
  <?php wp_footer(); ?>


</body>
</html>
