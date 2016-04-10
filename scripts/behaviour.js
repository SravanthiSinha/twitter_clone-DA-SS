document.addEventListener("DOMContentLoaded", function() {
  document.getElementById('nav-button').addEventListener('click', function(){
    var body = document.getElementsByTagName('nav')[0];
    if (body.className == 'nav-show') {
      body.className = 'nav-hide';
    }
    else if (body.className == 'nav-hide') {
      body.className = 'nav-show';
    }
  })
});
