<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mystyle.css">

</head>

<body>
    <div class="background">
        <header>
            <div class="container">
                <div class="title">
                    <p>BLU<span style="color: #4bcaff;">E</span>ASY</p>
                </div>
                <div class="navbar">
                    <nav>
                        <a href="" class="active">HOME</a>
                        <a href="">SERVICES</a>
                        <a href="">TESTIMONIALS</a>
                        <a href="">CONTACT</a>
                    </nav>
                </div>
            </div>
        </header>
        <div class="quotes">
            <p>“I’M LOOKING FOR THE UNEXPECTED.</p>
            <br>
            <p>I’M LOOKING FOR THINGS I’VE NEVER SEEN BEFORE.”</p>
        </div>
    </div>
    <div class="services">
        <div class="totalCont">
            <p class="titel"><span>SER</span>VICES</p>
            <div class="serviceCont">
                <div class="service">
                    <img src="img/Icon_coffee.png" alt="no img available">
                    <p class="serviceTitle">COFFEE</p>
                    <p class="serviceText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                        accusantium molestiae
                        tempore nulla ipsa, vitae atque reprehenderit. Veritatis odit eius, iure, totam animi atque, vel
                        illo deserunt odio maxime inventore.</p>
                </div>
                <div class="service">
                    <img src="img/Icon_instant.png" alt="no img available">
                    <p class="serviceTitle">INSTANT</p>
                    <p class="serviceText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                        accusantium molestiae
                        tempore nulla ipsa, vitae atque reprehenderit. Veritatis odit eius, iure, totam animi atque, vel
                        illo deserunt odio maxime inventore.</p>
                </div>
                <div class="service">
                    <img src="img/Icon_serious.png" alt="no img available">
                    <p class="serviceTitle">SERIOUS</p>
                    <p class="serviceText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                        accusantium molestiae
                        tempore nulla ipsa, vitae atque reprehenderit. Veritatis odit eius, iure, totam animi atque, vel
                        illo deserunt odio maxime inventore.</p>
                </div>
                <div class="service">
                    <img src="img/Icon_frame.png" alt="no img available">
                    <p class="serviceTitle">FRAME</p>
                    <p class="serviceText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                        accusantium molestiae
                        tempore nulla ipsa, vitae atque reprehenderit. Veritatis odit eius, iure, totam animi atque, vel
                        illo deserunt odio maxime inventore.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="totalCont">
        <div class="testimonials">
            <div class="container">
                <div class="testimonials-header">
                    <h2 class="titel"><span>TES</span>TIMONIALS</h2>
                    <p class="quote">”</p>
                </div>
            </div>
            <div class="phpcontent">
                <?php
                echo file_get_contents("testimonial_citaat.txt");
                ?>
            </div>
            <div class="signoff">
                -Waler White
            </div>
        </div>
    </div>
    <div class="ccbackground">
        <div class="totalCont">
            <div class="Contact">
                <div class="titel">
                    <p><span>CO</span>NTACT</p>
                </div>
                <form action="backend/contactform.php" method="post">
                    <div class="contactform">
                        <div class="contactinputs">
                            <label for="fullname">FULL NAME</label>
                            <input type="text" name="fullname">
                            <label for="email">EMAIL</label>
                            <input type="email" name="email">
                        </div>
                        <div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum architecto nisi
                            repudiandae, numquam excepturi eos id nobis quia ex facere voluptates natus dolorem labore
                            esse cupiditate. Est ipsam illo facilis.</p>
                        </div>  
                    </div>
                    <div class="textarea">
                        <label for="message">MESSAGE</label>
                        <textarea name="message" rows="10"></textarea>
                        <input type="submit" class="sendbutton" value="MESSAGE">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>