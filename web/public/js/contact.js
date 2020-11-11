;(() => {
  const $ = document.querySelectorAll.bind(document)
  const $$ = document.querySelector.bind(document)

  $('.button-contact').forEach((element) => {
    element.addEventListener('click', () => {
      const data = element.dataset;
      const phoneReviewer = data.phone;
      jQuery('#contact-id').html(phoneReviewer);
      const commentModal = $$('#contact-modal');
      commentModal.classList.add('is-active');
//      const prefillContent = data.prefill
//      const reaction = data.reaction
//
//      const idInput = $$('#review-id')
//      const reviewContent = $$('#review-content')
//      const reviewReaction = $$('#review-reaction')
//
//      idInput.value = reviewId
//      reviewContent.value = prefillContent
//      reviewReaction.value = reaction
    })
  })

  $('.modal-background, .button-close').forEach((element) => {
    element.addEventListener('click', () => {
      $('.modal.is-active').forEach((e) => e.classList.remove('is-active'))
    })
  })

  window.onCommentCaptchaSuccess = onCommentCaptchaSuccess
})()
