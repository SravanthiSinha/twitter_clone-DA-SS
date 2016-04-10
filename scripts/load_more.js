/**
 *when a user clicks on your button, an Ajax call is made to the file /statuses-1.html
 */
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('showmoreButton').addEventListener('click', function loadDoc() {
        ajaxGet('/statuses-1.html', function showMoreResponses(response) {
            var a = document.getElementById("showmore");
            a.disabled = true;
            a.style.backgroundColor = "#222252";
            a.style.cursor = "progress";
            setTimeout(function () {

                document.getElementById("morestatuses").innerHTML = response;
                var elements = document.querySelectorAll('.replyAll');

                for (var i = 0; i < elements.length; i++) {
                    var element = elements[i];
                    element.onclick = function () {
                        var form = document.getElementById(this.dataset.replyindex);
                        form.toggle();
                    };
                }

                ajaxGet('/scripts/statuses-1.json', function eResponses(data) {
                    var source = document.getElementById("result-template").innerHTML;
                    var template = Handlebars.compile(source);
                    document.getElementById("resultDiv").innerHTML = template(JSON.parse(data));
                });
                a.disabled = false;
                a.style.backgroundColor = "#F2F5ED";
                a.style.cursor = "pointer";
            }, 2000);

        });
    });

});