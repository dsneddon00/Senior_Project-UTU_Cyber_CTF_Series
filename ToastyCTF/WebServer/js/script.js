function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

function openNav() {
    document.getElementById("myNav").classList.toggle("menu_width");
    document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
}

/* TODO: delete dev creds before deployment
 * YmV0dHktYnV0dGVyOm1hcmdpbmVJc0ZvclNveUJveXM=
 * /
