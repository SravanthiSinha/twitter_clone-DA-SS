<html lang="en" xml:lang="en">

<head>
    <title>Dan and Sravanthi's Twitter Clone Adventure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS style sheet -->
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/mediaqueryhigh.css">
    <link rel="stylesheet" href="styles/mediaquerymid.css">
    <link rel="stylesheet" href="styles/mediaquerylow.css">
    <!-- CSS style sheet -->
    <!-- Fav Icon -->
    <link rel="shortcut icon" type="image/png" href="images/leaf_960_720.png">
    <!-- Fav Icon -->
    <script src="scripts/enablejs.js"></script>
    <script src="scripts/post_a_status.js"></script>
    <script src="scripts/reply.js"></script>
    <script src="scripts/toggle.js"></script>
    <script src="scripts/behaviour.js"></script>
    <script src="scripts/sticky_smart_header.js"></script>
    <script src="scripts/ajax.js"></script>
    <script src="scripts/load_more.js"></script>
    <script src="scripts/weather.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.js"></script>

</head>

<body>
    <div class="container">
        <?php include('views/header.php'); ?>


            <main>
                <div class="usersection">
                    <article class="user">
                        <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                        <h2 class="name">Daniel Alzugaray</h2>
                        <div class="bio">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iste eius itaque, cum velit quod deleniti, </p>
                        </div>
                    </article>
                    <article class="user">
                        <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                        <h2 class="name">Gloria Stefan</h2>
                        <div class="bio">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iste eius itaque, cum velit quod deleniti, </p>
                        </div>
                    </article>
                    <article class="user">
                        <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                        <h2 class="name">Sravanthi Sinha</h2>
                        <div class="bio">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iste eius itaque, cum velit quod deleniti, </p>
                        </div>
                    </article>
                </div>
                <div class="bottom-right">
                    <span>Welcome to Twitter clone. BETA</span>
                </div>
            </main>
            <?php include('views/footer.php'); ?>


    </div>
</body>

</html>