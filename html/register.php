<?php
include "koneksidatabase.php"
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UI Portfolio - Personal Category Bootstrap Responsive Website Template - Contact : W3Layouts</title>

    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- //google-fonts -->

    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">

</head>

<body>


    <!-- contact -->
    <section class="w3l-contacts-12">
        <div class="contact-top pt-5">
            <div class="container py-lg-5 py-2">
                <div class="title-heading-w3 mx-auto text-center mb-sm-5 mb-4">
                    <h3 class="w3l-title-main">Halaman Register</h3>
                </div>
                <div class="d-grid cont-main-top">
                    <!-- contact form -->
                    <div class="contacts12-main">
                        <form action="prosesregister.php" method="post" class="main-input">
                            <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" required="">
                            <input type="text" placeholder="No Telepon" name="no_telepon" required="">
                            <input type="text" placeholder="Alamat" name="alamat" required="">
                            <input type="text" placeholder="Username" name="username" required="">
                            <input type="password" placeholder="Password" name="password" required="">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-style">Register Now</button>
                            </div>
                        </form>
                    </div>
                    <!-- //contact form -->
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->

    <div class="text-end-center mx-auto text-center mb-sm-5 mb-4">
        <p>Sudah mempunyai akun?<a href="login.php">Login </a>
            <h>Sekarang</h>
        </p>
    </div>


    <!-- Js scripts -->
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!--search-bar-->
    <script src="assets/js/search.js"></script>
    <!--//search-bar-->

    <!--/stats-number-counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!--//stats-number-counter-->

    <!--/owlcarousel-->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- //tesimonials-->
    <script>
        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 2,
                        nav: false
                    },
                    1024: {
                        items: 3,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //tesimonials-->

    <!-- /typig-text-->
    <script>
        const typedTextSpan = document.querySelector(".typed-text");
        const cursorSpan = document.querySelector(".cursor");

        const textArray = ["Web Designer", "Web Developer", "Photographer", "Freelancer"];
        const typingDelay = 200;
        const erasingDelay = 10;
        const newTextDelay = 100; // Delay between current and next text
        let textArrayIndex = 0;
        let charIndex = 0;

        function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                setTimeout(erase, newTextDelay);
            }
        }

        function erase() {
            if (charIndex > 0) {
                // add class 'typing' if there's none
                if (!cursorSpan.classList.contains("typing")) {
                    cursorSpan.classList.add("typing");
                }
                typedTextSpan.textContent = textArray[textArrayIndex].substring(0, 0);
                charIndex--;
                setTimeout(erase, erasingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                textArrayIndex++;
                if (textArrayIndex >= textArray.length) textArrayIndex = 0;
                setTimeout(type, typingDelay);
            }
        }

        document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
            if (textArray.length) setTimeout(type, newTextDelay + 250);
        });
    </script>
    <!-- //typig-text-->


    <!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
    <script src="assets/js/jquery-1.7.2.js"></script>
    <script src="assets/js/jquery.quicksand.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->

</body>

</html>