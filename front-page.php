<?php get_header(); ?>


<div class="l-wrraper">
  <div class="l-main--bg">
    <div class="l-main--bg__contwrap">
      <p class="l-main--bg__logo">ロゴ</p>
    </div>
  </div>
  <div class="l-main">
    <section>
    <h1>WordPress × Vue テストページ Today</h1>
    <!--<div id="App"></div>　Vueコンポーネントをまとめて使う場合　-->
	<div id="Hello"></div>
	<div id="Slider"></div>
	<div id="Tabs"></div>
  </section>
    
    <section class="p-fv">
      <div id="fv" class="p-fv__image"></div>
    </section>
    <!-- ABOUT -->
    <section class="p-about u-pl30 u-pr30">
      <h2 class="c-head2">about</h2>
      <p class="c-head2--ja">自己紹介</p>
      <div class="p-about__cont">
        <div class="p-about__top-cont">
          <h3>聴く、知る、共感する</h3>
          <p>ことたびデザインがWEB制作において大切にしている3つの姿勢です。<br>
          WEB制作で最も大事なことは「愛を持ってWEBサイトに向き合うこと」だと考えています。<br>
          お客様の思いをお聞かせください。そして、その思いを形にするお手伝いをさせていただくのがことたびデザインの役目だと考えています。</p>
        </div>
        <div class="p-about__bottom-cont">
          <div class="p-about__img" style="width: 250px; height:250px;background: green">
            <img src="<?php tempurl(); ?>/images/plofile_image.jpg" width="250" height="250" loading="lazy" alt="藻塩 修">
          </div>
          <div class="p-about__cont-plofile">
              <p class="p-about__name">藻塩 修</p>
              <p class="p-about__name--en">Moshio Osamu</p>
              <p class="p-about__cont-txt">
                1979年千葉県生まれ、東京在住。法政大学文学部英文学科卒業。<br>
                大学在学中より音楽活動に没頭し、卒業後も楽器店に勤務しながら音楽活動を継続する。<br>
                2006年よりネットワークエンジニアとして運用からコンサルまで幅広い業務に従事する。<br>
                2018年、侍エンジニア塾在学中に作成したWEBサイトをきっかけとし、いくつかのクライアントワークを経験する。その後、2021年1月〜7月にてデジタルハリウッドSTUDIO上野 by LIGにてWEBデザイン＆プログラミングコースを修了。<br>
                2021年〜、SIerでのWEB制作やインハウスフロントエンドエンジニアとして現役で活動中。
              </p>
          </div>
        </div>
      </div>
        
     </section>
    <!-- WORK -->
    <section class="p-work u-pl30 u-pr30">
      <h2 class="c-head--2">WORK</h2>
      <div class="p-work__cont-wrap">
        <ul class="p-work__cont-list">
          <li class="p-work__cont-item">
            <h3 class="c-head--3">見出し１</h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </li>
          <li class="p-work__cont-item">
            <h3 class="c-head--3">見出し2</h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </li>
        </ul>
      </div>
    </section>
    <!-- SERVICE -->
    <section class="p-service u-pl30 u-pr30">
      <h2 class="c-head--2">service</h2>
      <div class="p-service__cont-wrap">
        <ul class="p-service__cont-list">
          <li class="p-service__cont-item">
            <h3 class="c-head--3">見出し１</h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </li>
          <li class="p-service__cont-item">
            <h3 class="c-head--3">見出し2</h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </li>
          <li class="p-service__cont-item">
            <h3 class="c-head--3">見出し2</h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </li>
        </ul>
      </div>
    </section>
    <!-- BLOG -->
    <section class="p-blog u-pl30 u-pr30">
       <h2 class="c-head--2">blog</h2>
      <div class="p-blog__cont-wrap">
        <ul class="p-blog__cont-list">
          <li class="p-blog__cont-item">
            <h3 class="c-head--3">見出し１</h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </li>
          <li class="p-blog__cont-item">
            <h3 class="c-head--3">見出し2</h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </li>
          <li class="p-blog__cont-item">
            <h3 class="c-head--3">見出し2</h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </li>
          <li class="p-blog__cont-item">
            <h3 class="c-head--3">見出し2</h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </li>
        </ul>
      </div>
    </section>
    <!-- Contact -->
    <section class="p-contact">
      <h2 class="c-head--2">contact</h2>
      <div class="p-contact__wrap">
        <a href="" class="c-btn">お問合わせ</a>
      </div>
    </section>
    <!-- Footer -->
    <footer class="p-footer">
      <small>@テストテスト</small>
    </footer>
  </div>  
</div>
 

<?php get_footer(); ?>