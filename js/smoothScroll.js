let buttonContact = document.getElementById("scroll-smooth");
buttonContact.addEventListener("click", smoothScroll);

function smoothScroll() {
    document.getElementById("contact-section").scrollIntoView({
        behavior: 'smooth'
    });
    history.pushState(null, null, "#contact-section");
}
