<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oyola</title>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&family=Varela&display=swap" rel="stylesheet">
    <!-- Links -->

    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        :root {
            --mainBackgroundColor: #ffffff;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 5rem;
        }

        *,
        html,
        body {
            margin: 0;
            padding: 0;
            background-color: var(--mainBackgroundColor);
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>

    <div class="header" id="menu">
        <a href="#home" class="logo">Oyola</a>
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="navicon"></span>
        </label>
        <ul class="menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>

    <!-- Home -->
    <section id="home">
        <div class="container">
            <div class="info">
                <h1>Lorem, ipsum dolor.</h1>
                <div></div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo vel
                    sequi qui, nisi dolorem cupiditate necessitatibus. Neque debitis, ullam impedit possimus numquam
                    fugit, minima, liber o eveniet tempore autem eius fugiat et in soluta tenet
                    ur. Maiores deserunt mollitia rem aut vel cupiditate necessitatibus. Neque debitis, ullam impedit
                    possimus numquam
                    fugit, minima, liber o eveniet tempore autem eius fugiat et in soluta tenet
                    ur. Maiores deserunt mollitia rem aut vel!</p>
                <div class="button">
                    <a href="#contact">contact</a>
                </div>
            </div>
            <div class="img">
                <img src="images/hills.svg" alt="hills">
                <div class="button">
                    <a href="#contact">contact</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services">

        <h1>Our Services</h1>
        <div id="line"></div>

        <div class="gridContainer">

            <!-- 1st service -->

            <div class="box box1">
                <div class="image">
                    <img src="images/taxi-booking.jpg" alt="cab booking">
                    <div class="serial">1</div>
                </div>
                <div class="service-info">
                    <h2>Cab Booking</h2>
                    <div></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                    </p>
                    <h5 id="service-1-link">read more &#8594; </h5>
                </div>
            </div>

            <!-- 1st service modal  -->

            <div class="modal" id="modal1">
                <div class="modal-content">
                    <span class="close" id="close1">&times;</span>
                    <img src="images/taxi-booking.jpg" alt="cab booking">
                    <h2>Cab Booking</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                    </p>
                </div>
            </div>

            <!-- 2nd service -->

            <div class="box box2">
                <div class="image">
                    <img src="images/hotel-booking.svg" alt="hotel booking">
                    <div class="serial">2</div>
                </div>
                <div class="service-info">
                    <h2>Hotel Booking</h2>
                    <div></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!</p>
                    <h5 id="service-2-link">read more &#8594; </h5>
                </div>
            </div>

            <!-- 2nd service modal  -->

            <div class="modal" id="modal2">
                <div class="modal-content">
                    <span class="close" id="close2">&times;</span>
                    <img src="images/hotel-booking.svg" alt="hotel booking">
                    <h2>Hotel Booking</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem volupt rerum unde aliquid soluta aspernatur ut molestiae!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                    </p>
                </div>
            </div>
            <!-- 3rd service -->

            <div class="box box3">
                <div class="image">
                    <img src="images/fire-camp.jpg" alt="fire camp">
                    <div class="serial">3</div>
                </div>
                <div class="service-info">
                    <h2>Fire Camp</h2>
                    <div></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                    </p>
                    <h5 id="service-3-link">read more &#8594; </h5>
                </div>
            </div>

            <!-- 3rd service modal  -->

            <div class="modal" id="modal3">
                <div class="modal-content">
                    <span class="close" id="close3">&times;</span>
                    <img src="images/fire-camp.jpg" alt="fire camp">
                    <h2>Fire Camp</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem volupt rerum unde aliquid soluta aspernatur ut molestiae!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                    </p>
                </div>
            </div>

            <!-- 4th service -->

            <div class="box box4">
                <div class="image">
                    <img src="images/home-stay.jpg" alt="home stay">
                    <div class="serial">4</div>
                </div>
                <div class="service-info">
                    <h2>Home Stay</h2>
                    <div></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                    </p>
                    <h5 id="service-4-link">read more &#8594; </h5>
                </div>
            </div>

            <!-- 4th service modal  -->

            <div class="modal" id="modal4">
                <div class="modal-content">
                    <span class="close" id="close4">&times;</span>
                    <img src="images/home-stay.jpg" alt="home stay">
                    <h2>Home Stay</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem volupt rerum unde aliquid soluta aspernatur ut molestiae!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                    </p>
                </div>
            </div>

            <!-- 5th service -->

            <div class="box box5">
                <div class="image">
                    <img src="images/full-trip.jpg" alt="full trip">
                    <div class="serial">5</div>
                </div>
                <div class="service-info">
                    <h2>Full Trip</h2>
                    <div></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                    </p>
                    <h5 id="service-5-link">read more &#8594; </h5>
                </div>
            </div>

            <!-- 5th service modal  -->

            <div class="modal" id="modal5">
                <div class="modal-content">
                    <span class="close" id="close5">&times;</span>
                    <img src="images/full-trip.jpg" alt="full trip">
                    <h2>Full Trip</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem volupt rerum unde aliquid soluta aspernatur ut molestiae!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                        Explicabo mollitia quae rem voluptas rerum unde aliquid soluta aspernatur ut molestiae!
                    </p>
                </div>
            </div>

        </div>

    </section>

    <!-- Gallery -->
    <section id="gallery">
        <h1>Gallery</h1>
        <div id="underline"></div>
        <div class="photos-container">
            <a href="./waterfalls.html">
                <div class="category category1">
                    <img src="images/waterfalls.jpg" alt="waterfalls">
                    <h3>Waterfalls</h3>
                </div>
            </a>
            <a href="./caves.html">
                <div class="category category2">
                    <img src="images/caves.jpg" alt="waterfalls">
                    <h3>Caves</h3>
                </div>
            </a>
            <a href="./museum.html">
                <div class="category category3">
                    <img src="images/museum.jpg" alt="waterfalls">
                    <h3>Museum</h3>
                </div>
            </a>
            <a href="./mountains.html">
                <div class="category category4">
                    <img src="images/mountains.jpg" alt="mountains">
                    <h3>Mountains</h3>
                </div>
            </a>

        </div>

    </section>

    <!-- About -->
    <section id="about">
        <h1>About</h1>
        <div id="underline"></div>
        <div class="profiles-container">
            <!-- 1st profile -->
            <div class="profile-card pc1">
                <div class="image">
                    <img src="images/mountains.jpg" alt="profile1">
                </div>
                <div class="title">
                    <h2>
                        Lorem, ipsum dolor.<br>
                        <span>Web developer</span>
                    </h2>
                </div>
                <div class="line"></div>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, sit?
                    </p>
                </div>
            </div>
            <!-- 2nd profile -->
            <div class="profile-card pc2">
                <div class="image">
                    <img src="images/mountains.jpg" alt="profile1">
                </div>
                <div class="title">
                    <h2>
                        Lorem, ipsum dolor.<br>
                        <span>Oyola founder</span>
                    </h2>
                </div>
                <div class="line"></div>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, sit?
                    </p>
                </div>
            </div>
            <!-- 3rd profile -->
            <div class="profile-card pc3">
                <div class="image">
                    <img src="images/mountains.jpg" alt="profile1">
                </div>
                <div class="title">
                    <h2>
                        Lorem, ipsum dolor.<br>
                        <span>Web developer</span>
                    </h2>
                </div>
                <div class="line"></div>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, sit?
                    </p>
                </div>
            </div>
        </div>

    </section>

    <!-- Contact -->



    <?php
    $msg = '';
    if (filter_has_var(INPUT_POST, 'submit')) {

        $name = htmlspecialchars($_POST['name']);
        $phone_number = htmlspecialchars($_POST['phone-number']);
        $message = htmlspecialchars($_POST['message']);


        $pattern = '^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$^';

        if (!empty($name) && !empty($phone_number) && !empty($message)) {
            if(preg_match($pattern , $phone_number)){
                
                $toEmail = 'sp.chandu3333@outlook.com';
                $subject = 'Message from your Oyola website';
                $body = '<h3>Name</h3><p>'.$name.'</p>
                        <h3>Phone number</h3><p>'.$phone_number.'</p>
                        <h3>Message</h3><p>'.$message.'</p>';

                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

                $headers .= "From: ".$name."<".$phone_number.">"."\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    $msg = "Message sent successfully";
                    echo '<script>alert("Message sent successfully")</script>';
                }else{
                    $msg = "Your message was not sent";
                    echo '<script>alert("Your message was not sent")</script>';
                }
            }else{
                $msg = " Please enter a valid mobile number";
            }
        } else {
            $msg = 'Please fill in all fields';
        }
    }
    ?>
    <section id="contact">
        <div class="contact-form">
            <h1>Contact</h1>
            <div id="underline"></div>
            <br>
            <?php if ($msg != '') : ?>
                <div class="status">
                    <h3 
                    style="
                    font-size: 1rem;
                    font-weight: 400;
                    letter-spacing: 0.05rem;
                    color: #5C0A24;
                    background-color: #F5F4F5;"><?php echo $msg; ?></h3>
                </div>
            <?php endif; ?>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="text" name="name" placeholder="Name" id="name" maxlength="50" required value="<?php echo isset($_POST['name'])? $name : '' ?>">
                <input type="tel" name="phone-number" placeholder="Phone number" id="phNo" required value="<?php echo isset($_POST['phone-number'])? $phone_number : '' ?>">
                <textarea name="message" cols="40" rows="6" placeholder="Type a message...." id="msg" maxlength="1000" required value="<?php echo isset($_POST['message'])? $message : '' ?>"></textarea>
                <input type="submit" value="submit" name="submit" id="submit">
            </form>
        </div>
    </section>

    <!-- footer -->
    <section id="footer">
        <div class="footer-container">
            <div id="first">
                <h2>Follow us on</h2>
                <div class="icons-container">
                    <div><a href="#"><img src="images/footer/facebook.svg" alt="facebook"></a></div>
                    <div><a href="#"><img src="images/footer/twitter.svg" alt="facebook"></a></div>
                    <div><a href="#"><img src="images/footer/instagram.svg" alt="facebook"></a></div>
                    <div><a href="#"><img src="images/footer/telegram.svg" alt="facebook"></a></div>
                </div>
            </div>
            <div id="middle">
                <div>
                    <a href="mailto:sp.chandu3333@gmail.com"><img src="images/footer/email.svg" alt="facebook"></a>
                    <h3>abcd@gmail</h3>
                </div>
                <div>
                    <a href="#"><img src="images/footer/contact.svg" alt="facebook"></a>
                    <h3>9999888877</h3>
                </div>
            </div>
            <div id="last">
                <h3>OYOLA cabs & hotel booking</h3>
                <h3>2nd street,beside watertank</h3>
                <h3>Araku - 531151 </h3>
            </div>
        </div>
    </section>

    <script src="js/modal.js"></script>
</body>

</html>