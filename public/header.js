hideScroll();
function hideScroll() {
    // Get the header element
    const header = document.getElementById("head");
    const headX = document.getElementById("headX");

    let prevScrollPos = window.pageYOffset;

    window.onscroll = function () {
        let currentScrollPos = window.pageYOffset;
        if (prevScrollPos > currentScrollPos) {
            header.style.top = '0';
            headX.style.top = '70px';
        } else {
            header.style.top = '-100px';
            headX.style.top = '0px';

        }
        prevScrollPos = currentScrollPos;
    }
}
