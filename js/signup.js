let submit = document.getElementById('submitForm');
let errorMessageUserName = document.querySelector('.error-username');
let errorMessagePassword = document.querySelector('.error-password');
let password = document.getElementById('ps');
let confirmPassword = document.getElementById('cps');
let username = document.getElementById('user');


submit.onclick = function () {
  if(errorMessageUserName.classList[1] === "true") {
    errorMessageUserName.style.display = 'block';
    errorMessageUserName.classList.remove('true');
    password.value = '';
    confirmPassword.value  = '';
    username.value = '';
    username.focus();
  } else {
    if(password.value != confirmPassword.value) {
      errorMessagePassword.style.display = 'block';
    } else {
      document.forms[0].submit();
    }
  }
}