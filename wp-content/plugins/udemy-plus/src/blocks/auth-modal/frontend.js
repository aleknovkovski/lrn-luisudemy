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

    modalCloseEl.forEach((el) => {
        el.addEventListener('click', (event)=> {
            event.preventDefault()

            modalEl.classList.remove('modal-show')
        })
    })

    document.addEventListener("keydown", (e)=>{
        if(e.key === "Escape") {
            modalEl.classList.remove('modal-show')
        }
    })

    const tabs = document.querySelectorAll(".tabs a");
    const signinForm = document.querySelector("#signin-tab");
    const signupForm = document.querySelector("#signup-tab");

    tabs.forEach((tab) => {
        tab.addEventListener("click", (event) => {
            event.preventDefault();

            tabs.forEach((currentTab) => currentTab.classList.remove("active-tab"))
            event.currentTarget.classList.add("active-tab");
        });
    });
});
