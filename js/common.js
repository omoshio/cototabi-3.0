// 要素が画面に入ったらfade
const fadeTargets = document.querySelectorAll('.js-fadein');

const fadeObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-active');
    }
  });
});

fadeTargets.forEach((el) => {
  fadeObserver.observe(el);
});


// ボーダーアニメーション
const borderTargets = document.querySelectorAll('.c-variable-border');

const borderObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-active');
      borderObserver.unobserve(entry.target);
    }
  });
}, {
  threshold: 0.5
});

borderTargets.forEach((el) => {
  borderObserver.observe(el);
});

//spalash
let ref = document.referrer

ref = 'http://local.cototabi.com'

if (ref) {
  const refUrl = new URL(ref);

  if (refUrl.hostname === 'cototabi.com' || refUrl.hostname === 'www.cototabi.com') {
    jQuery("#splash-logo").css('display','none');
    jQuery(".splashbg").css('display','none');
    jQuery('body').addClass('appear');
  } else {
      jQuery("#splash").delay(1800).fadeOut('slow',function(){//ローディングエリア（splashエリア）を1.5秒でフェードアウトする記述
      jQuery('body').addClass('appear');//フェードアウト後bodyにappearクラス付与
      var h = jQuery(window).height();//ブラウザの高さを取得
      jQuery(".splashbg").css({
        "border-width":h,//ボーダーの太さにブラウザの高さを代入
        "animation-name":"backBoxAnime"//animation-nameを定義
      }); 
    });
    jQuery("#splash-logo").delay(1500).fadeOut('slow');
  }
}

// droptitle
let number = 1

for ( let i = 0; i < 8; i++){
  let random = Math.floor( Math.random() * 8 );
  let className = "delay" + (random + 1);
  //console.log(className);
  if(i < 4){
    jQuery(".delay-top:nth-of-type(" + number + ")").addClass(className);
    ++number;
  }else{
    number = i - 3;
    jQuery(".delay-bottom:nth-of-type(" + number + ")").addClass(className);  
    ++number;     
  }
}

const smoothScrollTrigger = document.querySelectorAll('a[href^="/#"]');
  for (let i = 0; i < smoothScrollTrigger.length; i++){
    smoothScrollTrigger[i].addEventListener('click', (e) => {
      e.preventDefault();
      let href = smoothScrollTrigger[i].getAttribute('href');
      //console.log(href);
      let targetElement = document.getElementById(href.replace('/#', ''));
      //console.log(targetElement);
      const rect = targetElement.getBoundingClientRect().top;
      const offset = window.pageYOffset;
      const gap = 0;
      const target = rect + offset - gap;
      window.scrollTo({
        top: target,
        behavior: 'smooth',
      });
    });
  }


//TOPボタンでページ先頭に戻る
const pageTopBtn = document.getElementById('page-top');

if (pageTopBtn) {
  pageTopBtn.addEventListener("click", function () {

    const me = arguments.callee;
    const nowY = window.pageYOffset;

    window.scrollTo(0, nowY - 100);

    if (nowY > 0) {
      window.setTimeout(me, 10);
    }

  });
}

//　画面スクロールと連動してページトップボタンがフェードイン
jQuery(function($){
  $(window).scroll(function(){
    $('.js-fadein-top').each(function(){
      var scroll = $(window).scrollTop();
      if (scroll > 500){
        $(this).addClass('is-active');
      }
      if (scroll <= 500){
        $(this).removeClass('is-active');
      }
    });
  });
});

// スマホアドレスバーの影響なし100vhの高さを表示する
/*let vh = window.innerHeight;
let mainVisual = document.getElementById('main-visual');
  mainVisual.style.height = vh+'px';*/

// ブログカテゴリーアコーディオン
const categoryMore = document.querySelector('.p-blog__categories-more')
const categoryList = document.querySelector('.p-blog__categories-list')

if (categoryMore && categoryList) {
  categoryMore.addEventListener('click', () => {
    const isOpen = categoryList.classList.contains('is-open')
    if (isOpen) {
      categoryList.style.maxHeight = `${categoryList.scrollHeight}px`
      requestAnimationFrame(() => {
        categoryList.style.maxHeight = '40px'
      })
      categoryList.classList.remove('is-open')
    } else {
      categoryList.classList.add('is-open')
      categoryList.style.maxHeight = `${categoryList.scrollHeight}px`
    }
    categoryMore.classList.toggle('is-open', !isOpen)
    categoryMore.setAttribute('aria-expanded', !isOpen)

  })

}

//画面スクロールと連動してメニューバーが固定されるScript
/*jQuery(function(){
jQuery(window).scroll(function (){
  jQuery('.menubarFix').each(function(){
    var menubarPosition = jQuery(this).offset().top;
    var scroll = jQuery(window).scrollTop();
    if (scroll > menubarPosition){
      jQuery(this).addClass('menubarFixed');
      jQuery('.blog__header--bgsky').addClass('blog__header--bgskyFixed');
    }
    if (scroll <= 122){
      jQuery(this).removeClass('menubarFixed');
      jQuery('.blog__header--bgsky').removeClass('blog__header--bgskyFixed');
    }
  });
  });
});*/