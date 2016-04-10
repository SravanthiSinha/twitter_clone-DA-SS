<?php

   include_once('model/user.php');
    function userExists($login, $password, $users){
        foreach($users as $user) {
            if($user["login"]==$login && $user["password"]==$password)
                return $user; 
            } return false; 
    } 
$error='';
$loginname='';
$fname=''; 
$current_user='';
if(isset($_POST['login'] )) 
{ 
    $user=userExists($_POST['login'],$_POST['password'],$users);
    if($user!=false) {
        $current_user=$user;
           $GLOBALS['current_user']=$user;
         setcookie("login",$_POST['login'],time() + 3600, "/","",0);
         $_COOKIE["login"]=$_POST['login'];
         }
}


?>
    <!DOCTYPE html>


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
                    <div class="statuses">
                        <div class="post">
                            <div id="poststatus"> Post a status</div>
                            <form class="postform" id="postform">
                                <textarea class="replyarea" rows="4" title="Type your Post"></textarea>
                                <br>
                                <div class="postcontrols">
                                    <div class="location">
                                        <input type="checkbox" id="includelocation">
                                        <label for="includelocation" class="postlocation">Include Location</label>
                                    </div>
                                    <span class="_space"></span>
                                    <input type="submit" value="Post" class="postbutton" name="post" />
                                </div>
                            </form>
                        </div>
                        <article class="status">
                            <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                            <h1 class="name">Daniel Alzugaray</h1>
                            <time class="date">2015-01-31</time>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae.
                            </div>
                            <div class="reply">
                                <div class="replyAll" data-replyindex="1"> Reply</div>
                                <form class="replyform" id="1">
                                    <textarea class="replyarea" rows="4" title="Type your Reply"></textarea>
                                    <br>
                                    <div class="replycontrols">
                                        <div class="location">
                                            <input type="checkbox" id="includelocation1">
                                            <label for="includelocation1" class="postlocation">Include Location</label>
                                        </div>
                                        <span class="_space"></span>
                                        <input type="submit" value="Reply" class="replybutton" />
                                    </div>
                                </form>
                            </div>
                        </article>
                        <article class="status">
                            <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                            <h1 class="name">Sravanthi Sinha</h1>
                            <time class="date">2015-01-31</time>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae.
                            </div>
                            <div class="reply">
                                <div class="replyAll" data-replyindex="2"> Reply</div>
                                <form class="replyform" id="2">
                                    <textarea class="replyarea" rows="4" title="Type your Reply"></textarea>
                                    <br>
                                    <div class="replycontrols">
                                        <div class="location">
                                            <input type="checkbox" id="includelocation2">
                                            <label for="includelocation2" class="postlocation">Include Location</label>
                                        </div>
                                        <span class="_space"></span>
                                        <input type="submit" value="Reply" class="replybutton" />
                                    </div>
                                </form>
                            </div>
                        </article>
                        <article class="status">
                            <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                            <h1 class="name">Daniel Alzugaray</h1>
                            <time class="date">2015-01-31</time>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae.
                            </div>
                            <div class="reply">
                                <div class="replyAll" data-replyindex="3"> Reply</div>
                                <form class="replyform" id="3">
                                    <textarea class="replyarea" rows="4" title="Type your Reply"></textarea>
                                    <br>
                                    <div class="replycontrols">
                                        <div class="location">
                                            <input type="checkbox" id="includelocation3">
                                            <label for="includelocation3" class="postlocation">Include Location</label>
                                        </div>
                                        <span class="_space"></span>
                                        <input type="submit" value="Reply" class="replybutton" />
                                    </div>
                                </form>
                            </div>
                        </article>
                        <article class="status">
                            <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                            <h1 class="name">Gloria Stefan</h1>
                            <time class="date">2015-01-31</time>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae.
                            </div>
                            <div class="reply">
                                <div class="replyAll" data-replyindex="4"> Reply</div>
                                <form class="replyform" id="4">
                                    <textarea class="replyarea" rows="4" title="Type your Reply"></textarea>
                                    <br>
                                    <div class="replycontrols">
                                        <div class="location">
                                            <input type="checkbox" id="includelocation4">
                                            <label for="includelocation4" class="postlocation">Include Location</label>
                                        </div>
                                        <span class="_space"></span>
                                        <input type="submit" value="Reply" class="replybutton" />
                                    </div>
                                </form>
                            </div>
                        </article>
                        <article class="status">
                            <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                            <h1 class="name">Gloria Stefan</h1>
                            <time class="date">2015-01-31</time>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. orem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae.
                            </div>
                            <div class="reply">
                                <div id="replyAll" class="replyAll" data-replyindex="5"> Reply</div>
                                <form class="replyform" id="5">
                                    <textarea class="replyarea" rows="4" title="Type your Reply"></textarea>
                                    <br>
                                    <div class="replycontrols">
                                        <div class="location">
                                            <input type="checkbox" id="includelocation5">
                                            <label for="includelocation5" class="postlocation">Include Location</label>
                                        </div>
                                        <span class="_space"></span>
                                        <input type="submit" value="Reply" class="replybutton" />
                                    </div>
                                </form>
                            </div>
                        </article>
                        <article class="status">
                            <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                            <h1 class="name">Gloria Stefan</h1>
                            <time class="date">2015-01-31</time>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae.
                            </div>
                            <div class="reply">
                                <div class="replyAll" data-replyindex="6"> Reply</div>
                                <form class="replyform" id="6">
                                    <textarea class="replyarea" rows="4" title="Type your Reply"></textarea>
                                    <br>
                                    <div class="replycontrols">
                                        <div class="location">
                                            <input type="checkbox" id="includelocation6">
                                            <label for="includelocation6" class="postlocation">Include Location</label>
                                        </div>
                                        <span class="_space"></span>
                                        <input type="submit" value="Reply" class="replybutton" />
                                    </div>
                                </form>
                            </div>
                        </article>

                        <article class="status">
                            <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                            <h1 class="name">Gloria Stefan</h1>
                            <time class="date">2015-01-31</time>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae.
                            </div>
                            <div class="reply">
                                <div class="replyAll" data-replyindex="7"> Reply</div>
                                <form class="replyform" id="7">
                                    <textarea class="replyarea" rows="4" title="Type your Reply"></textarea>
                                    <br>
                                    <div class="replycontrols">
                                        <div class="location">
                                            <input type="checkbox" id="includelocation7">
                                            <label for="includelocation7" class="postlocation">Include Location</label>
                                        </div>
                                        <span class="_space"></span>
                                        <input type="submit" value="Reply" class="replybutton" />
                                    </div>
                                </form>
                            </div>
                        </article>
                        <article class="status">
                            <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                            <h1 class="name">Gloria Stefan</h1>
                            <time class="date">2015-01-31</time>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. orem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae.
                            </div>
                            <div class="reply">
                                <div class="replyAll" data-replyindex="8"> Reply</div>
                                <form class="replyform" id="8">
                                    <textarea class="replyarea" rows="4" title="Type your Reply"></textarea>
                                    <br>
                                    <div class="replycontrols">
                                        <div class="location">
                                            <input type="checkbox" id="includelocation8">
                                            <label for="includelocation8" class="postlocation">Include Location</label>
                                        </div>
                                        <span class="_space"></span>
                                        <input type="submit" value="Reply" class="replybutton" />
                                    </div>
                                </form>
                            </div>
                        </article>
                        <article class="status">
                            <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                            <h1 class="name">Gloria Stefan</h1>
                            <time class="date">2015-01-31</time>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. orem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae.
                            </div>
                            <div class="reply">
                                <div class="replyAll" data-replyindex="9"> Reply</div>
                                <form class="replyform" id="9">
                                    <textarea class="replyarea" rows="4" title="Type your Reply"></textarea>
                                    <br>
                                    <div class="replycontrols">
                                        <div class="location">
                                            <input type="checkbox" id="includelocation9">
                                            <label for="includelocation9" class="postlocation">Include Location</label>
                                        </div>
                                        <span class="_space"></span>
                                        <input type="submit" value="Reply" class="replybutton" />
                                    </div>
                                </form>
                            </div>
                        </article>
                        <article class="status">
                            <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                            <h1 class="name">Gloria Stefan</h1>
                            <time class="date">2015-01-31</time>
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. orem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, officiis, omnis. Non autem maxime accusantium, dignissimos quam atque eaque veritatis, quod obcaecati cumque earum consequuntur tenetur esse repellendus itaque quae.
                            </div>
                            <div class="reply">
                                <div class="replyAll" data-replyindex="10"> Reply</div>
                                <form class="replyform" id="10">
                                    <textarea class="replyarea" rows="4" title="Type your Reply"></textarea>
                                    <br>
                                    <div class="replycontrols">
                                        <div class="location">
                                            <input type="checkbox" id="includelocation10">
                                            <label for="includelocation10" class="postlocation">Include Location</label>
                                        </div>
                                        <span class="_space"></span>
                                        <input type="submit" value="Reply" class="replybutton" />
                                    </div>
                                </form>
                            </div>
                        </article>
                        <div id="morestatuses"></div>
                        <div class="showmore" id="showmore">
                            <div id="showmoreButton">See More</div>
                        </div>

                    </div>
                    <aside>

                        <?php 
                       
                        if(isset($_COOKIE["login"])) {
                        
                            if ($current_user!='')
                            {
                            ?>
                            <div class="weather">
                                <p class="weatherinfo">
                                    <?php  
    
                                    echo "Your rot13'd login is:".str_rot13( $current_user['login'])."\n";
                                    echo "The length of your login is: ".strlen( $current_user['login']);
                                ?>
                                </p>
                            </div>
                            <?php
                        }}?>
                                <div class="users">
                                    <div class="user">
                                        <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                                        <div class="name">
                                            <p>Daniel Alzugaray</p>
                                        </div>
                                        <div class="bio">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iste eius itaque, cum velit quod deleniti, </p>
                                        </div>
                                    </div>
                                    <div class="user">
                                        <figure class="photo"><img src="images/icon-user.png" alt="User Photo"></figure>
                                        <div class="name">
                                            <p>Gloria Stefan</p>
                                        </div>
                                        <div class="bio">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iste eius itaque, cum velit quod deleniti, </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ads">
                                    <div class="ad">
                                        <figure class="photo"><img src="images/icon-user.png" alt="Product Photo"></figure>
                                        <div class="name">
                                            <p>Product</p>
                                        </div>
                                        <div class="bio">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iste eius itaque, cum velit quod deleniti, </p>
                                        </div>
                                    </div>
                                    <div class="ad">
                                        <figure class="photo"><img src="images/icon-user.png" alt="Product Photo"></figure>
                                        <div class="name">
                                            <p>Product</p>
                                        </div>
                                        <div class="bio">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iste eius itaque, cum velit quod deleniti, </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="weather">
                                    <p class="weatherinfo">It's <span id="weather">an unknown weather</span> today!</p>
                                    <button class="navButton" id="weatherButton">Update the weather</button>
                                </div>
                                <div class="bottom-right">
                                    <span>Welcome to Twitter clone. BETA</span>
                                </div>
                    </aside>

                </main>

                <?php include('views/footer.php'); ?>

        </div>
    </body>

    </html>