;(() => {
  const $ = document.querySelectorAll.bind(document)
  const $$ = document.querySelector.bind(document)

  $('.link-comment').forEach((element) => {
    element.addEventListener('click', () => {
      //alert("ok");
      /*const contactModal = $$('#reply-modal')
      contactModal.classList.add('is-active')*/

      const data = element.dataset
      const reviewId = data.id
      const prefillContent = data.prefill
      const reaction = data.reaction

      const idInput = $$('#review-id')
      const reviewContent = $$('#review-content')
      const reviewReaction = $$('#review-reaction')

      idInput.value = reviewId
      reviewContent.value = prefillContent
      reviewReaction.value = reaction
    })
  })

  /*$('.modal-background, .button-close').forEach((element) => {
    element.addEventListener('click', () => {
      $('.modal.is-active').forEach((e) => e.classList.remove('is-active'))
    })
  })*/

  const validateForm = (formId) => (event) => {
    event.preventDefault()
    const form = $$('#' + formId)
    const contentInput = form.content
    if (contentInput.value.length < 10) {
      contentInput.classList.add('is-invalid')
      form.querySelector('.help').classList.remove('is-hidden')
    } else {
      form.submit()
    }
  }

  const btnCommentSubmit = $$('.button-comment-submit')
  btnCommentSubmit.addEventListener('click', validateForm('comment-form'))

  function onCommentCaptchaSuccess() {
    btnCommentSubmit.removeAttribute('disabled')
  }

  window.onCommentCaptchaSuccess = onCommentCaptchaSuccess
})()
