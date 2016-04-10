<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.js">
</script>
<script src="scripts/embedjson.js" type="application/javascript"></script>
<script id="result-template" type="text/x-handlebars-template">
    {{#statuses}}
    <article class="status">
        <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
        <h2 class="name">{{name}}</h2>
        <time class="date">{{time}}</time>
        <div class="description">
            {{status}}
        </div>
        <div class="reply">
            <a class="replyAll" data-replyindex="11"> Reply</a>
            <form class="replyform" id="11">
                <textarea class="replyarea" rows="4"></textarea>
                <br>
                <div class="replycontrols">
                    <input type="checkbox">
                    <p class="replyocation">Include Location</p><span class="_space"></span>
                    <input type="submit" value="Reply" class="replybutton" />
                </div>
            </form>
        </div>
    </article>
    {{/statuses}}

</script>
<div id="resultDiv"></div>