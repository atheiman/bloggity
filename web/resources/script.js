function randString(length) {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  for( var i=0; i < length; i++ )
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  return text;
}

function removeUserColors() {
  var elements = document.getElementsByClassName('user_div');
  for (var i=0; i<elements.length; i++) {
    elements[i].style.backgroundColor="inherit";
  }
}
