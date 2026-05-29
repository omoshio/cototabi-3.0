const targets = document.querySelectorAll('.js-fade')

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-active')
    }
  })
})

targets.forEach((el) => {
  observer.observe(el)
})