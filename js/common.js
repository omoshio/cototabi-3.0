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