// 要素が画面に入ったらfade
const fadeTargets = document.querySelectorAll('.js-fade');

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


// service text のボーダーアニメーション
const serviceTargets = document.querySelectorAll('.c-variable-border');

const serviceObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-active');
      serviceObserver.unobserve(entry.target);
    }
  });
}, {
  threshold: 0.5
});

serviceTargets.forEach((el) => {
  serviceObserver.observe(el);
});