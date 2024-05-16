// all global variable declirations
let alluserinfo = [];
let regForm = document.querySelector('.reg-form');
let allinput = regForm.querySelectorAll('input');
let regBtn = regForm.querySelector("button");


// getting data from localstorage

if (localStorage.getItem("alluserinfo") != null) {
  alluserinfo = JSON.parse(localStorage.getItem("alluserinfo"));
}
console.log(alluserinfo);

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
    }, 2000);


  } else {
    swal('Failed !', "Email already register !", 'warning');
  }
}


// Login coding




