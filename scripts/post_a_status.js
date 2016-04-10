document.addEventListener("DOMContentLoaded", function () {
    var el = document.getElementById('poststatus');
    el.onclick = function () {
        var form = document.getElementById('postform');
        form.toggle();
    };
}, false);