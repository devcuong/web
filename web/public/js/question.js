;
(() => {
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
        var kq = 0;
        const contentInput = form.content;
        const titleQuestion = form.qtitle;
        if (contentInput.value.length < 10) {
            contentInput.classList.add('is-invalid');
            kq = 1;
        }
        if (titleQuestion.value.length < 10) {
            titleQuestion.classList.add('is-invalid');
            kq = 1;
        }
        if(kq == 0){
        	form.submit();
        }
    }

    const btnQuestionSubmit = $$('.button-question-submit')
    btnQuestionSubmit.addEventListener('click', validateForm('question-form'))

    function onQuestionCaptchaSuccess() {
        btnQuestionSubmit.removeAttribute('disabled')
    }
    window.onQuestionCaptchaSuccess = onQuestionCaptchaSuccess
})()