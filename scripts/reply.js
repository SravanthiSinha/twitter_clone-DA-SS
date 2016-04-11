document.addEventListener("DOMContentLoaded", function () {
    var elements = document.querySelectorAll('.replyAll');

    for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        element.onclick = function () {
            var form = document.getElementById(this.dataset.replyindex);
            form.toggle();
        };
    }
}, false);