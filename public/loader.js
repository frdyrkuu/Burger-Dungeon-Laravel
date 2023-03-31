loader();
function loader() {
    const loaders = document.querySelectorAll(".loader");
    const content = document.querySelectorAll(".content");
    window.addEventListener("load", () => {
        loaders.forEach(loader => {
            loader.classList.add("hidden");
        });

        content.forEach(content => {
            content.classList.remove("hidden")
            content.classList.add("block")
        });
    });
}
