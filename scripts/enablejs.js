/*
Enable JavaScript
 */
document.addEventListener("DOMContentLoaded", function () {
    var elements = document.querySelectorAll('.postform');

    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        element.style.display = 'none';
    }
    var elements = document.querySelectorAll('.replyform');

    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        element.style.display = 'none';
    }
    var body = document.getElementsByTagName('nav')[0];
    if (body.className == 'nav-show') {
        body.className = 'nav-hide';
    } else if (body.className == 'nav-hide') {
        body.className = 'nav-show';
    }

    var form = document.querySelector('.navButton2');
    form.toggle();
    var elements = document.querySelectorAll('.location');
    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        element.style.display = 'flex';
    }

}, false);