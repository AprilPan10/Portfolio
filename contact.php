<?php
use Portfolio\model\{Database, Contact};
require_once 'vendor/autoload.php';
session_start();
if(isset($_POST['submit-btn'])){
    $name = $_POST['name'];
    $_SESSION['name'] = $name;
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    $pattern = '/^\d{10}$/';
    if($name == "" || $email == "" || $phone == "" || $msg == ""){
        $makeError = "please put valid information";
    }else if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $email_error = " please enter valid email";
    }else if (!preg_match($pattern, $phone)) {
        $phone_error = "Please enter correct phone number!";
    }else{
        $dbcon =Database::getDb();
        $p = new Contact();
        $s = $p->addPerson($name,$email,$phone, $msg, $dbcon);
        $makeSuccess="Thank you!";
        if($s){
            header("Location: success.php");
            $send_success = "Message has been sent";
        }else{
            echo "Problem";

        }



    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width">
    <title>Contact me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="images/icon.svg">
    <script data-search-pseudo-elements defer src="https://kit.fontawesome.com/52eb7513f8.js" crossorigin="anonymous"></script>
</head>
<body>
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
                <div class = 'nav_m'>
                    <ul class = 'nav_list'>

                        <div class = 'nav_list_item'>
                            <li><a href="index.html">Home</a></li>
                        </div>
                        <div class = 'nav_list_item'>
                            <li><a href="project.html">Project</a></li>
                        </div>
                        <div class = 'nav_list_item'>
                            <li><a href="case.html">Case Study</a></li>
                        </div>
                        <div class = 'nav_list_item'>
                            <li><a href="diary.html">Coding Diaries</a></li>
                        </div>
                        <div class = 'nav_list_item'>
                            <li><a href="contact.php">Contact</a></li>
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
<section class="columns centered" id="contact">
    <div class="contact-block" data-aos="fade-right">
        <div class="col-50-1">
            <h3>Contact<span>.</span></h3>
            <form class="needs-validation" id="contact-form" method="post" action="" novalidate>
                <div class="title-wrapper">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" id="name" class="form-control" name="name" value="<?=isset($name) ? $name : '';?>" placeholder="John Smith" required />
                    <span><?= isset($makeError)? htmlspecialchars($makeError): '' ?></span>
                    <div class="invalid-feedback">
                        Please enter a valid name.
                    </div>
                </div>
                <div class="title-wrapper">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" name="email" value="<?=isset($email) ? $email : '';?>" placeholder="E.g. myemail@email.com" required />
                    <span><?= isset($email_error)? htmlspecialchars($email_error): ''; ?></span>
                    <div class="invalid-feedback">
                        Please enter a valid email.
                    </div>
                </div>
                <div class="title-wrapper">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" class="form-control" name="phone" value="<?=isset($phone) ? $phone : '';?>" placeholder="E.g. 647-836-9411" required />
                    <span><?= isset($phone_error)? htmlspecialchars($phone_error): '' ?></span>
                    <div class="invalid-feedback">
                        Please enter a valid phone number.
                    </div>
                </div>
                <div class="title-wrapper">
                    <label for="comments">Leave a message</label>
                    <textarea id="comments" name="msg" class="form-control" required></textarea>
                    <span><?= isset($makeError)? htmlspecialchars($makeError): '' ?></span>
                    <div class="invalid-feedback">
                        Please enter a valid message.
                    </div>
                </div>
                <div class="submit-button">
                    <button type="submit" id="submit-btn" name="submit-btn">Submit</button>
                </div>
                <div>
                    <span><?= isset($makeSuccess)? $makeSuccess: '' ?></span>
                    <span><?= isset($send_success)? $send_success: '' ?></span>
                </div>
            </form>
        </div>
    </div>
    <div class="ghost-block">
        <div class="col-50">
            <h3>What they say about me<span>.</span></h3>
            <p class="quote"><em>FROM  PROFESSOR</em></p>
            <p>Shimeng Pan is a hard-working, talented student in my class. She is good at web design and web development. She is creative and can solve questions by herself. She will be a good employer in your company</p>
        </div>
    </div>
</section>
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