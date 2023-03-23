document.getElementById('confirm_password').addEventListener('blur', (e) => {

  let PwdValue1 = document.getElementById('password'),
    value,
    PwdValue2 = e.target.value;

  if (PwdValue1 === PwdValue2) {

    document.querySelectort('.confirm_password').classlist.remove('show');

  } else {
    document.querySelectort('.confirm_password').classlist.add('show');
  }
})


showPwd = (e) => {
  let pwdInput = e.previousElementSibling;

  if (pwdInput.type === 'password') {
    pwdInput.type = 'text';
    e.querySelector('ion-icon').setAttribute('name', 'eye-outline');
  } else {
    pwdInput.type = 'password';
    e.querySelector('ion-icon').setAttribute('name', 'eye-off-outline');
  }
}
