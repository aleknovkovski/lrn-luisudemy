document.addEventListener("DOMContentLoaded", () => {
    const openModalBtn = document.querySelectorAll('.open-modal')
    const modalEl = document.querySelector('.wp-block-udemy-plus-auth-modal')
    const modalCloseEl = document.querySelectorAll('.modal-overlay, .modal-btn-close')

    openModalBtn.forEach((el)=> {
        el.addEventListener('click', (event)=> {
            event.preventDefault()

            modalEl.classList.add('modal-show')
        })
    })
});
