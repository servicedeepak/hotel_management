// all global variable declirations
let alluserinfo = [];
let regForm = document.querySelector('.reg-form');
let allinput = regForm.querySelectorAll('input');

let loginForm = document.querySelector('.login-form');
let allLoginInoput = loginForm.querySelectorAll('input');

let regBtn = regForm.querySelector("button");
let loginBtn = loginForm.querySelector("button");

// getting data from localstorage

if (localStorage.getItem("alluserinfo") != null) {
  alluserinfo = JSON.parse(localStorage.getItem("alluserinfo"));
}
// console.log(alluserinfo);


// Registration coding
regForm.onsubmit = (e) => {
  e.preventDefault();

  let checkEmail = alluserinfo.find((data) => {
    return data.email == allinput[4].value
  });
  if (checkEmail == undefined) {
    let data = {};
    for (let el of allinput) {

      let key = el.name;
      data[key] = el.value
    }
    regBtn.innerText = "Procecessing..."
    setTimeout(() => {
      regBtn.innerText = "Registration"
      alluserinfo.push(data);
      localStorage.setItem("alluserinfo", JSON.stringify(alluserinfo));
      swal("Good Job !", "Registration Success !", "success");
    }, 1500);


  } else {
    swal('Failed !', "Email already register !", 'warning');
  }
}


// Login coding
loginForm.onsubmit = (e) => {
  e.preventDefault();
  if (allLoginInoput[0].value != "") {
    if (allLoginInoput[1].value != "") {
      let checkEmail = alluserinfo.find((data) => {
        return data.email == allLoginInoput[0].value
      });
      if (checkEmail != undefined) {
        if (checkEmail.password == allLoginInoput[1].value) {
          loginBtn.innerText = "Please wait...";
          setTimeout(() => {
            var url = window.location.href + "/user_profile";;
            window.location = url;
            checkEmail.password = null;
            sessionStorage.setItem("__au__", JSON.stringify(checkEmail));
          },1500);
            Swal.fire({
              position: "top-end",
              icon: "success",
              title: "Login Successfully....",
              showConfirmButton: false,
              timer: 1000
            });
          
        } else {
          swal("Warning", "Worng Password is  empty.!", "warning");
        }
      }
    }
    else {
      swal("Warning", "Password is  empty.!", "warning");
    }
  } else {
    swal("Warning", "Email is empty!", "warning");
  }
}







