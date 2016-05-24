function goLogin() {
  var connect, form, response, result,user, pass, sesion;
  user = __('user_login').value;
  pass = __('pass_login').value;
  sesion = __('sesion_login').checked ? true : false;
  form = 'user=' + user + '&pass=' + pass + '&sesion=' + sesion;
  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function () {
    if (connect.readyState == 4 && connect.status == 200) {
      if (connect.responseText == 1) {
        result = '<h4><strong><span class="icon-check">Conectado</span></strong></h4>';
        result += '<p><strong>Te estamos redirreccionando...</strong></p>';
        __('_AJAX_LOGIN_').innerHTML = result;
        location.reload();
      }else {
        __('_AJAX_LOGIN_').innerHTML = connect.responseText;
      }
    }else if (connect.readyState != 4) {
      result = '<h4><strong><span class="icon-retweet">Cargando</span></strong></h4>';
      result += '<p><strong>Te estamos logeando...</strong></p>';
      __('_AJAX_LOGIN_').innerHTML = result;
    }
  }
  connect.open('POST','ajax.php?mode=login',true);
  connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  connect.send(form);
}
function runScriptLogin(e) {
  if (e.keyCode == 13) {
    goLogin();
  }
}
