<?php
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $passward = "";

    $con = mysqli_connect($server,$username,$passward);
    if (!$con) {
        die("connection to this database is failed due to ".mysqli_connect_error());
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $text = $_POST['text'];
    $sql = "INSERT INTO `watch`.`watchcontact` (`name`, `email`, `phone`, `text`, `date`) VALUES ('$name', '$email', '$phone', '$text', current_timestamp());";    

    echo $sql;
    if($con->query($sql) == true){
        echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="demo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>PEACE</title>
</head>

<body>

    <header>
        <a href="#home">
            <img src="./images/peace.png" alt="logo" width="140px">
        </a>
        <nav class="navbar">
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#features">features</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#newsletter-container">newsletter</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="content">
            <h3>best smartwatch brand</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, quos, error ea deserunt ullam autem
                corrupti impedit, eveniet nam dolores dolorem possimus ratione ipsum iure unde recusandae sunt
                distinctio quasi!</p>
            <a href="#" class="btn">SHOP NOW</a>
            <a href="#about" class="btn">FIND MORE</a>
        </div>

        <div class="image">
            <img src="./images/photo_2023-05-09_21-36-30-removebg-preview.png" alt="mobile">
        </div>
    </section>

    <section class="features " id="features">
        <h3 class="heading">FEATURES </h3>
        <div class="box-container">
            <div class="box">
                <img src="./images/th__2_-removebg-preview.png">
                <h3>best quality</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti fugiat sed quod tenetur cumque
                    nesciunt quis at ad.</p>
            </div>

            <div class="box">
                <img src="./images/tag-free-img.png">
                <h3>best offers</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti fugiat sed quod tenetur cumque
                    nesciunt quis at ad.</p>
            </div>

            <div class="box">
                <img src="./images/lock-free-img.png">
                <h3>secure payments</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti fugiat sed quod tenetur cumque
                    nesciunt quis at ad.</p>
            </div>
        </div>
    </section>


    <section class="about" id="about">
        <h1 class="heading">about the website </h1>

        <div class="about-container">
            <div class="image">
                <img src="./images/istockphoto-1333053202-612x612-removebg-preview.png" alt="about-image">
            </div>
            <div class="content">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Quasi exercitationem sunt quibusdam nisi illo veritatis temporibus iste.
                    Laborum alias perspiciatis soluta blanditiis eum iure temporibus ipsam corrupti.
                    Iure, assumenda veritatis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus
                    perspiciatis voluptates unde incidunt odio nihil, totam laborum quos atque vel omnis rerum quis
                    aspernatur ullam ipsam officia quibusdam provident sequi.</p>

                <div class="button">
                    <a href="#" class="btn">
                        <i class="fab fa-google-play"></i>
                        Google playstore
                    </a>
                    <a href="#" class="btn">
                        <i class="fa-brands fa-apple"></i>
                        App Store
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter-container" id="newsletter-container">
        <div class="newsletter">
            <h1 class="heading">subsribe for new features</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eaque aperiam adipisci nesciunt
                voluptate dicta autem quibusdam iure sunt. Totam.</p>

            <form action="">
                <input type="email" name="email" id="email" placeholder="enter email">
                <input type="submit" value="subsbribe" class="btn">
            </form>
        </div>
    </section>

    <section class="contact" id="contact">
        <h3 class="heading">FEEL FREE TO KNOW MORE ABOUT US</h3>
        <div class="contact-container">
            <div class="image">
                <img src="./images/contact-us-illustration-scaled.png" alt="src">
            </div>
            <form action="index.php" method="POST">
                <H1>contact us</H1>
                <div class="inputbox">
                    <input type="text" name="name" id="name" required placeholder="name">
                </div>
                <div class="inputbox">
                    <input type="email" name="email" id="email" required placeholder="Email">
                </div>
                <div class="inputbox">
                    <input type="tel" name="phone" id="phone" required placeholder="Phone no.">
                </div>
                <div class="inputbox">
                    <textarea name="text" id="text" placeholder="enter text"></textarea>
                </div>
                <button class="sub-btn" type="submit">SUBMIT</button>
            </form>
        </div>
    </section>

    <div class="footer">
        <div class="box-container">
            <div class="box">
                <h3>
                    about us
                </h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat nihil numquam fuga quae quasi
                    obcaecati, facilis natus iste itaque repudiandae!
                </p>
            </div>

            <div class="box">
                <h3> QUICK LINKS </h3>
                <a href="#home">HOME</a>
                <a href="#features">FEATURES</a>
                <a href="#about">ABOUT</a>
                <a href="#newsletter">NEWSLETTER</a>
                <a href="#contact">CONTACT </a>
            </div>

            <div class="box">
                <h3>FOLLOW US</h3>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
                <a href="#">LinkedIn</a>
            </div>

            <div class="box">
                <h3>Contact Info </h3>

                <div class="info">
                    <i class="fas fa-phone"></i>
                    <p>503-728-675 <br>
                        678-876-456
                    </p>
                </div>

                <div class="info">
                    <i class="fas fa-envelope"></i>
                    <p> test1@gamail.com <br>
                        test2@gamail.com
                    </p>
                </div>

                <div class="info">
                    <i class="fas fa-location-dot"></i>
                    <p>
                        Mangalore,India
                    </p>
                </div>
            </div>
        </div>

        <h1 class="credit">
            &copy; copyright @ 2023 by JOYSTON
        </h1>
    </div>
</body>

</html>
