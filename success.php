<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width">
    <title>Thanks</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="images/icon.svg">
    <script data-search-pseudo-elements defer src="https://kit.fontawesome.com/52eb7513f8.js" crossorigin="anonymous"></script>
</head>
<br>
<header>
    <a href="https://shimengpan.website/">
        <img src="images/logo.svg" width="170" alt="logo of Shimeng Pan" class="logo">
    </a>
    <div class="container-m">
        <h2>
            <a href="#menu">Menu</a>
        </h2>
        <div class="popover" id="menu">
            <div class = 'content'>
                <a href="#" class="close"></a>
                <div class = 'nav'>
                    <ul class = 'nav_list'>
                        <div class = 'nav_list_item'>
                            <li><a href="index.html">Home</a></li>
                        </div>
                        <div class = 'nav_list_item'>
                            <li><a href="#about">About</a></li>
                        </div>
                        <div class = 'nav_list_item'>
                            <li><a href="project.html">Project</a></li>
                        </div>
                        <div class = 'nav_list_item'>
                            <li><a href="contact.php">Contact</a></li>
                        </div>
                        <div class = 'nav_list_item'>
                            <li><a href="case.html">Case Study</a></li>
                        </div>
                        <footer class="menu-footer">
                            <nav class="footer-nav">
                                <ul>
                                    <li>
                                        <a href="https://twitter.com/shimeng_pan">
                                            <i class="fa fa-twitter fa-fw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/panshimengmeng/">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/AprilPan10">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.linkedin.com/in/shimeng-pan">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:panshimengmeng@gmail.com">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </footer>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="thank">
        <h5>Thank you <?php
            session_start();
            echo $_SESSION['name'] ?> <span>.</span></h5>
</div>
<footer>
    <div class="copyright">
        <p>All rights reserved | 2021</p>
    </div>
    <div class="socialmedia">
        <nav class="footer-navigation">
            <ul>
                <li>
                    <a href="https://twitter.com/shimeng_pan">
                        <i class="fa fa-twitter fa-fw"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/panshimengmeng/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/AprilPan10">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
                <li>
                    <a href="www.linkedin.com/in/shimeng-pan">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
                <li>
                    <a href="mailto:panshimengmeng@gmail.com">
                        <i class="fas fa-envelope"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 400,
        duration: 1000
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>
