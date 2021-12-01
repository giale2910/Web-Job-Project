function checkPassword(str)
{
    var re = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    return re.test(str);
}
function validateChangePassword(form) {
  var newPwd = document.getElementById("newPwd").value;
  var confirmPwd = document.getElementById("confirmPwd").value;
  var newPwdError = document.getElementById("newPwdError");
  var confirmPwdError = document.getElementById("confirmPwdError");
 
  newPwdError.innerHTML = confirmPwdError.innerHTML='';

  if(!checkPassword(newPwd)){
    newPwdError.innerHTML = 'Minimum eight characters, at least one letter, one number and one special character';
    return false;
  }
  else if(newPwd != confirmPwd){
    confirmPwdError.innerHTML = 'New password and confirmed password must match!';
    return false;
  }
}
function validateRegsiter(form) {
  var pwd = document.getElementById("password").value;
  var rePwd = document.getElementById("re-password").value;
  var pwdError = document.getElementById("pwdError");
  var rePwdError = document.getElementById("rePwdError");

  pwdError.innerHTML = rePwdError.innerHTML='';
  
  if(!checkPassword(pwd)){
    pwdError.innerHTML = 'Minimum eight characters, at least one letter, one number and one special character';
    return false;
  }
  else if(pwd != rePwd){
    rePwdError.innerHTML = 'Password and confirmed password must match!';
    return false;
  }
}