var loadFile = function (event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('output');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};

function showUpload() {
    const div = document.getElementById("showUpload");
    const table = document.getElementById("showTable");
    const btnShow = document.getElementById("btnShow");

    if (div.classList.contains("hidden")) {
        div.classList.remove("hidden");
        div.classList.add("grid");

        btnShow.textContent = "Show Table";

        table.classList.add("hidden");
    } else {
        div.classList.remove("grid");
        div.classList.add("hidden");

        btnShow.textContent = "+ Add Product";
        table.classList.remove("hidden");
    }

}
