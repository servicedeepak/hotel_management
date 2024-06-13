// chack user is login or not
let userinfo;
let nevbrand = document.querySelector(".navbar-brand");
let logoutBtn = document.querySelector(".logout-btn");

if (sessionStorage.getItem("__au__") == null) {

    var url = "http://localhost/hotel_management_system/home_controller";
    window.location = url;
}

userinfo = JSON.parse(sessionStorage.getItem("__au__"));
nevbrand.innerHTML = userinfo.hotelname;

//logout coding

logoutBtn.onclick = () => {
    logoutBtn.innerHTML = "Please wait...!";
    setTimeout(() => {
        logoutBtn.innerHTML = "Logout...!;"
        sessionStorage.removeItem("__au__");
        var url = "http://localhost/hotel_management_system/home_controller";
        window.location = url;

    },1500);
}



