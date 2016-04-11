/**
 * Attaches the table drag behavior to tables.
 *
 * @type {Drupal~behavior}
 * 
 * @prop {Drupal~behaviorAttach} attach
 *   Specific description of this attach function goes here.
 * @prop {Drupal~behaviorDetach} detach
 *   Specific description of this detach function goes here.
 */
function ajaxGet(url, onSuccess) {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for older browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            onSuccess(xmlhttp.responseText);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}