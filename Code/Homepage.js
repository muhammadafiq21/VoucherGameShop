// $(document).ready(function () {

//     function openNav() {
//         document.getElementById("mySidenav").style.width = "70%";

//         document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
//     }

//     function closeNav() {
//         document.getElementById("mySidenav").style.width = "0";
//         document.body.style.backgroundColor = "rgba(0,0,0,0)";
//     }


// });

function valueSender(setup) {
    var gim = setup;
    localStorage.setItem("myValue", gim);
    window.location.href = "../Halaman Pembelian/stuff.js";
}