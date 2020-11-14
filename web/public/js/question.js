;(() => {
  const $ = document.querySelectorAll.bind(document)
  const $$ = document.querySelector.bind(document)

  /*$$('.button-review').addEventListener('click', () => {
    $$('#review-modal').classList.add('is-active')
  })

  $('.modal-background, .button-close').forEach((element) => {
    element.addEventListener('click', () => {
      $('.modal.is-active').forEach((e) => e.classList.remove('is-active'))
    })
  })*/

  const validateForm = (formId) => (event) => {
    event.preventDefault()
    const form = $$('#' + formId);
    const contentInput = form.content;
    const titleQuestion = form.title;
    if (contentInput.value.length < 10) {
      contentInput.classList.add('is-invalid')
      form.querySelector('.help').classList.remove('is-hidden')
    } else if(titleQuestion.value.length < 10) {
    	titleQuestion.classList.add('is-invalid')
    	form.querySelector('.help').classList.remove('is-hidden')
    } else{
      form.submit()
    }
  }

  const btnQuestionSubmit = $$('.button-question-submit')
  btnQuestionSubmit.addEventListener('click', validateForm('review-form'))

  function onQuestionCaptchaSuccess() {
	  btnQuestionSubmit.removeAttribute('disabled')
  }
  window.onQuestionCaptchaSuccess = onQuestionCaptchaSuccess
})()
