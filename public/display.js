// const { data } = require("autoprefixer");

var loadFile = function (event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('output');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};



function showDashboard() {

    const uploadPhoto = document.getElementById("showUpload");
    const dashBoard = document.getElementById("showTable");
    const dataTable = document.getElementById("dataTable");

    if (dashBoard.classList.contains("flex")) {

        uploadPhoto.classList.remove("flex");
        dataTable.classList.remove("flex");

        uploadPhoto.classList.add("hidden");
        dataTable.classList.add("hidden");
    } else {
        dashBoard.classList.remove("hidden");
        dashBoard.classList.add("flex");

        uploadPhoto.classList.remove("flex");
        uploadPhoto.classList.add("hidden");


        dataTable.classList.remove("flex");
        dataTable.classList.add("hidden");
    }
}

function showUpload() {

    const uploadPhoto = document.getElementById("showUpload");
    const dashBoard = document.getElementById("showTable");
    const dataTable = document.getElementById("dataTable");

    if (uploadPhoto.classList.contains("hidden")) {

        uploadPhoto.classList.remove("hidden");
        uploadPhoto.classList.add("grid");

        dashBoard.classList.remove("flex");
        dashBoard.classList.add("hidden");

        dataTable.classList.remove("flex");
        dataTable.classList.add("hidden");
    }
}

function showDataTable() {

    const uploadPhoto = document.getElementById("showUpload");
    const dashBoard = document.getElementById("showTable");
    const dataTable = document.getElementById("dataTable");

    if (dataTable.classList.contains("hidden")) {

        dataTable.classList.remove("hidden");
        dataTable.classList.add("grid");

        dashBoard.classList.remove("flex");
        dashBoard.classList.add("hidden");

        uploadPhoto.classList.remove("flex");
        uploadPhoto.classList.add("hidden");
    }
}


function hamburger() {
    const ham = document.getElementById("mobile-menu");

    if (ham.classList.contains("hidden")) {

        ham.classList.remove("hidden");
        ham.classList.add("flex");
    }

    else {

        ham.classList.remove("flex");
        ham.classList.add("hidden");
    }


}

function scrollToBottom() {
    window.scrollTo({
        top: document.body.scrollHeight,
        behavior: "smooth"
    });
}

function hideCard() {
    const dashboardCard = document.getElementById("dashboardCard");

    if (dashboardCard.classList.contains("flex")) {
        dashboardCard.classList.remove("flex");
        dashboardCard.classList.add("hidden");
    }
}

function revealSHeader() {
    const SHeader = document.getElementById("SHeader");

    if (SHeader.classList.contains("hidden")) {
        SHeader.classList.remove("hidden");
        SHeader.classList.add("flex");
    } else {
        SHeader.classList.remove("flex");
        SHeader.classList.add("hidden");
    }
}

function expandHeader() {
    const SHeader = document.getElementById("SHeader");
    const dd = document.getElementById("dd");
    const uu = document.getElementById("uu");
    const tt = document.getElementById("tt");

    const arrow = document.getElementById("arrow");

    if (SHeader.classList.contains("w-20")) {
        SHeader.classList.remove("w-20");
        SHeader.classList.add("w-64");

        dd.classList.remove("hidden");
        uu.classList.remove("hidden");
        tt.classList.remove("hidden");

        arrow.classList.remove("fa-arrow-right");
        arrow.classList.add("fa-arrow-left");
    } else {
        SHeader.classList.add("w-20");
        SHeader.classList.remove("w-64");

        dd.classList.add("hidden");
        uu.classList.add("hidden");
        tt.classList.add("hidden");


        arrow.classList.add("fa-arrow-right");
        arrow.classList.remove("fa-arrow-left");
    }
}
