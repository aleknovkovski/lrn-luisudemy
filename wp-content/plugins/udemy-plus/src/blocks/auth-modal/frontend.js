document.addEventListener("DOMContentLoaded", () => {
    const openModalBtn = document.querySelectorAll('.open-modal')
    const modalEl = document.querySelector('.wp-block-udemy-plus-auth-modal')

    openModalBtn.forEach((el)=> {
        el.addEventListener('click', (event)=> {
            modalEl.classList.add('modal-show')
        })
    })
});
