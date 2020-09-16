<?php get_header(); ?>

    <div class="conti">
        <div class="recent-stories">
            <h2>Recent Stories</h1>
                <hr style="color: #000000;">
                <div class="stories">
                    <img src="<?php echo get_theme_file_uri('/image/IMG_5948.JPG')?>" alt="">
                    <button>Culture</button>
                    <h3>The old man is painting in a clay pot in Durbar square near old hindu temples.</h3>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur odit aut fugit, sed quia consequuntur
                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                        ipsum quia dolor sit amet, consectetur, adipisci
                    </p>
                    <p>By John Casper November 1, 2018</p>
                </div>
                <div class="stories">
                    <img src="<?php echo get_theme_file_uri('/image/IMG_5949.JPG')?>" alt="">
                    <button>Animals</button>
                    <h3>Young african elephants racing toward the water.</h3>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur odit aut fugit, sed quia consequuntur
                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                        ipsum quia dolor sit amet, consectetur, adipisci
                    </p>
                    <p>By John Casper November 1, 2018</p>
                </div>
        </div>
        <div class="w-l">
            <h2>Where I went</h2>
            <hr>
            <img src="<?php echo get_theme_file_uri('/image/IMG_5950.JPG')?>" alt="">
        </div>
        <h2>Last Video</h2>
        <hr>
        <div class="l-v" style=" background: url(<?php echo get_theme_file_uri('/image/roman_coliseum_evening.jpg')?>) center center/cover;">
            <div class="inner-l-v">
                <button>Culture</button>
                <div class="v-v"><i class="fa fa-play v-play"></i></div>
                <div class="n-l-v">
                    <a href="#">One of the most popular travel place in world – Roman Coliseum under evening sun light
                        and sunrise sky.</a>
                    <br>
                    <p>by John Casper</p>
                </div>
            </div>

        </div>
        <center style="height: 150px;">
            <h4>INSTAGRAM</h4>
        </center>

        <br>
        <div>
            <h2>Blockquote</h2>
            <hr>
            <br><br>
            <Blockquote>
                <p> The use of traveling is to regulate imagination with reality, and instead of thinking of how things
                    may be, see them as they are.<br>
                    Samuel Johnson</p>
            </Blockquote>
            <br><br>
        </div>
        <div class="recent-stories">
            <h1>Random Stories</h1>
            <hr style="color: #000000;">
            <div class="stories">
                <img src="<?php echo get_theme_file_uri('/image/IMG_5951.JPG')?>" alt="">
                <button>Discover</button>
                <h3>The family life in Harmony with awesome nature.</h3>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur odit aut fugit, sed quia consequuntur magni
                    dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                    dolor sit amet, consectetur, adipisci
                </p>
                <p>By John Casper November 1, 2018</p>
            </div>
            <div class="stories">
                <img src="<?php echo get_theme_file_uri('/image/IMG_5952.JPG')?>" alt="">
                <button>Africa</button>
                <h3>The trail of Genghis Khan: Epic journey through the land of the nomads..</h3>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur odit aut fugit, sed quia consequuntur magni
                    dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                    dolor sit amet, consectetur, adipisci
                </p>
                <p>By John Casper November 1, 2018</p>
            </div>
        </div>
    </div>
    <br>

<?php get_footer(); ?>

<script>
//Jquery 
$(document).ready(function () {
    $(".slide-2-s").click(function () {
        //$("#s1").css("display", "none");
        // $("#s3").css("display", "none");
        $("#s3").slideUp("slow");
        $("#s1").slideUp("slow");
        $("#s2").slideDown("slow");
        $("#s2sh").css("color", "red");
        $("#s1sh").css("color", "rgb(150, 130, 130)");
        $("#s3sh").css("color", "rgb(150, 130, 130)");
        $("#s1sp").css("color", "rgb(150, 130, 130)");
        $("#s2sp").css("color", "#fff");
        $("#s3sp").css("color", "rgb(150, 130, 130)");
    });
    $(".slide-3-s").click(function () {
        //$("#s1").css("display", "none");
        //$("#s2").css("display", "none");
        $("#s2").slideUp("slow");
        $("#s1").slideUp("slow");
        $("#s3").slideDown("slow");
        $("#s3sh").css("color", "red");
        $("#s1sh").css("color", "rgb(150, 130, 130)");
        $("#s2sh").css("color", "rgb(150, 130, 130)");
        $("#s1sp").css("color", "rgb(150, 130, 130)");
        $("#s3sp").css("color", "#fff");
        $("#s2sp").css("color", "rgb(150, 130, 130)");
    });
    $(".slide-1-s").click(function () {
        $("#s2").slideUp("slow");
        $("#s3").slideUp("slow");
        $("#s1").slideDown("slow");
        $("#s1sh").css("color", "red");
        $("#s3sh").css("color", "rgb(150, 130, 130)");
        $("#s2sh").css("color", "rgb(150, 130, 130)");
        $("#s3sp").css("color", "rgb(150, 130, 130)");
        $("#s1sp").css("color", "#fff");
        $("#s2sp").css("color", "rgb(150, 130, 130)");
    });
});
</script>

<script>
$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {

        if (this.hash !== "") {
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                window.location.hash = hash;
            });
        } // End if
    });
});
$(document).ready(function () {
    $(".ul-menu-icon").click(function () {
        $(".m-v-n").toggle();
    });
});
</script>
