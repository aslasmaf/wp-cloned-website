<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php bloginfo("name");?></title>
    <?php wp_head();?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>

<body>

<!--Header starts-->
<header>
        <div class="row">
            <h2>tons<span>berg</span></h2>

            <div class="ul-menu-icon openbtn">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <img src="<?php echo get_theme_file_uri('/image/adspic.JPG')?>">
            <div class="social-icon">
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-dribbble"></i>
                <i class="fa fa-telegram"></i>
            </div>
        </div>
        <hr>
        <!--mobile view nav-->
        <div class="m-v-n" id="MobNav">
            <ul>
                <p><a>Home</a></p>
                <li><a href="#">Home v1</a></li>
                <li><a href="#">Home v2</a></li>
                <li><a href="#">Home v3</a></li>
                <li><a href="#">Home v4</a></li>
                <li><a href="#">Home v5</a></li>
                <li><a href="#">Home v6</a></li>
                <li><a href="#">Home v7</a></li>
                <li><a href="#">Home v8</a></li>
                <li><a href="#">Home v9</a></li>
                <li><a href="#">Home v10</a></li>
                <li><a href="#">Home v11</a></li>
                <li><a href="#">Home v12</a></li>
                <li><a href="#">Home Slider</a></li>
            </ul>
            <ul>
                <p>Feature</p>
                <li><a href="#">Suggest a Trip</a></li>
                <li><a href="#">Post Formats</a></li>
                <li><a href="#">Gallery </a></li>
                <li><a href="#">Typography</a></li>
            </ul>

            <ul>
                <p><a href="#">Discover</a></p>
            </ul>

            <ul>
                <p>Destinations</p>

                <li><a href="#">Pages</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About me</a></li>
            </ul>

            <ul>
                <p>News</p>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li> 
            </ul>
            <p><a href="#">Contact</a></p>
            
        </div>
        <!--side panel-->
        <div id="mySidepanel" class="sidepanel" onclick="closeNavTouch();">
            <div class="wrap-side-p">
                <a href="javascript:void(0)" class="closebtn" id="closebtn" onclick="closeNav()">&times;</a>
                <h1>tons<span>berg</span></h1>
                <p>Advertising</p>
                <img src="<?php echo get_theme_file_uri('/image/adplace_blog.JPG')?>" style="widows: 100%;;">
                <input type="text" placeholder="Search...">
                <h2>Recent Posts</h2>
                <ul>
                    <li><a href="#">Welcome to the Gutenberg Editor</a></li>
                    <li><a href="#">Italia - Rome</a></li>
                    <li><a href="#">Ireland - Dublin</a></li>
                    <li><a href="#">Netherlands</a></li>
                    <li><a href="#">Serbia - Belgrade</a></li>
                </ul>
                <h2>Recent Comment</h2>
                <li><a href="#">John Casper on The family life in Harmony with awesome nature.</a></li>
                <h2>Archives</h2>
                <ul>
                    <li><a href="#">December 2018</a></li>
                    <li><a href="#">November 2018</a></li>
                    <li><a href="#">October 2018</a></li>
                </ul>
                <h2>Categories</h2>
                <ul>
                    <li><a href="#">Discover</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Nature</a></li>
                    <li><a href="#">Story</a></li>
                    <li><a href="#">Travel</a></li>
                </ul>
                <h2>Meta</h2>
                <ul>
                    <li><a href="#">Log in</a> </li>
                    <li><a href="#">Entries RSS</a></li>
                    <li><a href="#">Comment RSS</a></li>
                    <li><a href="#">WordPress.org</a></li>
                </ul>
                <!--Calender-->
                <p style="color: rgb(105, 102, 102);margin: 10px;">September 2020</p>
                <img src="image/calender.PNG" style="width: 85%;margin-bottom: 100px; margin-left: 30px;">
            </div>
        </div>
        <!--End side panel-->
        <nav data-spy="affix" data-offset-top="197">
            <div class="menu-icon openbtn" onclick="openNav()">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <ul>
                <div class="dropdown">
                    <li><a href="#">Home</a></li>
                    <div class="dropdown-content">
                        <a href="#">Home v1</a>
                        <a href="#">Home v2</a>
                        <a href="#">Home v3</a>
                        <a href="#">Home v4</a>
                        <a href="#">Home v5</a>
                        <a href="#">Home v6</a>
                        <a href="#">Home v7</a>
                        <a href="#">Home v8</a>
                        <a href="#">Home v9</a>
                        <a href="#">Home v10</a>
                        <a href="#">Home v11</a>
                        <a href="#">Home v12</a>
                        <a href="#">Home Slider</a>
                    </div>
                </div>
                <div class="dropdown">
                    <li><a href="#">Features</a></li>
                    <div class="dropdown-content">
                        <a href="#">Suggest a Trip</a>
                        <a href="#">Post Formats</a>
                        <a href="#">Gallery </a>
                        <a href="#">Typography</a>
                    </div>
                </div>
                <div class="dropdown">
                    <li><a href="#">Discover</a></li>
                </div>
                <div class="dropdown">
                    <li><a href="#">Destinations</a></li>
                </div>
                <div class="dropdown">
                    <li><a href="#">Pages</a></li>
                    <div class="dropdown-content">
                        <a href="#">Shop</a>
                        <a href="#">About me</a>
                    </div>
                </div>
                <div class="dropdown">
                    <li><a href="#">News</a></li>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                <div class="dropdown">
                    <li><a href="#">Contact</a></li>
                </div>
            </ul>
        </nav>
    </header>
    <div class="slide-shower">
        <div class="slide-1-s">
            <h4 id="s1sh">LIFESTYLE</h4>
            <p id="s1sp">Journey Through the<br>Sahara</p>
        </div>
        <div class="slide-2-s">
            <h4 id="s2sh">LIFESTYLE</h4>
            <p id="s2sp">Adventure - In Search of<br>Warriors</p>
        </div>
        <div class="slide-3-s">
            <h4 id="s3sh">LIFESTYLE</h4>
            <p id="s3sp">The True Story - Sacred<br>Highlands</p>
        </div>
    </div>
    <div class="showcase slide-1 m-v-Slides" id="s1" style="background: url('<?php echo get_theme_file_uri('/image/showcase3.JPG'); ?>') no-repeat center center/cover;">
        <div class="slide-inner">
            <div class="container">
                <p style="color: red;margin-bottom: 50px;">OCTOBER 31,2018</p>
                <p class="cont-p">Journey Through the Sahara</p>
                <button><a href="#">READ MORE</a></button>
            </div>
        </div>
    </div>
    <div class="showcase slide-2 m-v-Slides" id="s2" style="background: url('<?php echo get_theme_file_uri('/image/showcase2.JPG'); ?>') no-repeat center center/cover;">
        <div class="slide-inner">
            <div class="container">
                <p style="color: red;margin-bottom: 50px;">OCTOBER 31,2018</p>
                <p class="cont-p">Adventure - In Search of Warriors</p>
                <button><a href="#">READ MORE</a></button>
            </div>
        </div>
    </div>
    <div class="showcase slide-3 m-v-Slides" id="s3" style="background: url('<?php echo get_theme_file_uri('/image/showcase1.JPG'); ?>') no-repeat center center/cover;">
        <div class="slide-inner">
            <div class="container">
                <p style="color: red;margin-bottom: 50px;">OCTOBER 31,2018</p>
                <p class="cont-p">The True Story - Sacred Highlands</p>
                <button><a href="#">READ MORE</a></button>
            </div>
        </div>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <br><br>