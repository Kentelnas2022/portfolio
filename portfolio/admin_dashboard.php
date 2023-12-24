<?php
include 'dbcon.php';
session_start();

// Redirect if user is not logged in
if (!isset($_SESSION['user_id'])) {
   header("Location: reglog.php?error=Please Login First."); // Redirect if accessed directly
   exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/portfolio/css/style.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Portfolio</title>
</head>
<body>
    
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">My Portfolio</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    <li class="nav__item"><a href="logout.php" class="nav__link">Logout</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <section class="home"id="home">
            <div class="home-content">
                <h3>Hello, It`s Me</h3>
                <h1>Kent Zorel B. Elnas</h1>
                <h3>Motto : <span class="multiple-text"></span></h3>
                <div class="social-media">
                    <a href="https://www.facebook.com/kentzorel.elnas" style="--i:6"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/kntzrl_21/" style="--i:7"><i class='bx bxl-instagram-alt' ></i></a>
                </div>
            </div>
            <div class="home-img">
                <img src="/portfolio/images/kent.png" alt="">
            </div>
            <div class="background-image"></div>
        </section>
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

        <section class="about section " id="about">
            <h2 class="section-title">About</h2>
            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="/portfolio/images/kent.png" alt="">
                </div>
                <div>
                    <h2 class="about__subtitle">I'm Kent Zorel Elnas</h2>
                    <p class="about__text">"As a web designer, I'm passionate about crafting engaging websites that blend creativity with functionality. I specialize in creating user-friendly designs using HTML, CSS, and JavaScript. My focus is on building visually appealing and adaptable interfaces that cater to diverse audiences. I'm dedicated to transforming ideas into polished, innovative websites that exceed expectations and provide an excellent user experience."</p>
                </div>
            </div>
        </section>

        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>
            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Professional Skills</h2>
                    <p class="skills__text">"I bring a versatile skill set to web design, proficient in HTML, CSS, and JavaScript to create responsive and visually engaging websites. My expertise includes intuitive UI/UX design and using design tools like Adobe Creative Suite for compelling layouts and graphics. With knowledge in SEO optimization and web accessibility, I ensure inclusive and high-performing digital platforms. I stay updated with the latest design trends and technologies, integrating them seamlessly to deliver innovative web solutions."</p>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">HTML5</span>
                        </div>
                        <div class="skills__bar skills__html"></div>
                        <div>
                            <span class="skills__percentage">95%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">CSS3</span>
                        </div>
                        <div class="skills__bar skills__css">
                                
                        </div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon' ></i>
                            <span class="skills__name">JAVASCRIPT</span>
                        </div>
                        <div class="skills__bar skills__js">
                                
                        </div>
                        <div>
                            <span class="skills__percentage">45%</span>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="/portfolio/images/work3.jpg" alt="" class="skills__img">
                </div>
            </div>
        </section>
        <section class="work section" id="work">
            <h2 class="section-title">Work</h2>

            <div class="work__container bd-grid">
                <a href="" class="work__img">
                    <img src="/portfolio/images/work1.jpg" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="/portfolio/images/work2.jpg" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="/portfolio/images/work3.jpg" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="/portfolio/images/work4.jpg" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="/portfolio/images/work5.jpg" alt="">
                </a>
                <a href="" class="work__img">
                    <img src="/portfolio/images/work6.jpg" alt="">
                </a>
            </div>
        </section>

        <section class="contact section" id="contact">
            <h2 class="section-title">Contact</h2>
            <div class="contact__container bd-grid">
                <form action="" class="contact__form">
                    <input type="text" placeholder="Name" class="contact__input">
                    <input type="mail" placeholder="Email" class="contact__input">
                    <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                    <input type="button" value="Send" class="contact__button button">
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p class="footer__title">Kent Zorel Elnas</p>
        <div class="footer__social">
            <a href="https://www.facebook.com/kentzorel.elnas" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
            <a href="https://www.instagram.com/kntzrl_21/" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
</body>
</html>
