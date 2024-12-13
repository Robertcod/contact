<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header>
        <h1>Robert</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li class="boton"><a href="https://wa.me/573186710331 "><button>Message</button></a></li>
            </ul>
        </nav>

    </header>

    <main>

        <section class="firstSection seccion">
            <section class="infoContainer">

                <div class="info">
                    <div class="linea-con-texto">
                        <span class="linea"></span>
                        <span class="texto">INTRODUCING</span>
                    </div>

                    <h2 class="imname">I'M ROBERT FERNANDEZ</h2>
                    <p class="info">I am a web developer passionate about creating digital solutions that blend
                        functionality and design to provide unique, user-friendly experiences. Always learning, I aim to
                        deliver high-quality websites and applications that help businesses succeed online.</p>
                    <button class="ir">View Portafolio</button>
                </div>

            </section>


            <figure class="imagen">
                <img src="{{ asset('img/yo.png') }}" alt="" srcset="">
            </figure>


            <section class="redesContainer">
                <section class="redes">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-github"></i>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=fernandezhernandezr4@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                </section>
            </section>
        </section>


        <section class="secondSection seccion">
            <div class="DescriptionServices">
                <h2>Services</h2>

                <a href="#">see all services</a>
            </div>
            <section class="services">
                <div class="service">
                    <i class="fa-solid fa-laptop-code"></i>
                    <h3>Frontend Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ducimus odit deserunt aperiam
                        fugit.
                    </p>
                </div>

                <div class="service">
                    <i class="fa-solid fa-mobile-alt"></i>
                    <h3>Backend Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ducimus odit deserunt aperiam
                        fugit.
                    </p>
                </div>

                <div class="service">
                    <i class="fa-solid fa-database"></i>
                    <h3>Databases</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ducimus odit deserunt aperiam
                        fugit.
                    </p>
                </div>

                <div class="service">
                    <i class="fa-solid fa-chart-line"></i>
                    <h3>UX/UI</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ducimus odit deserunt aperiam
                        fugit.
                    </p>
                </div>
            </section>
        </section>

        <form class="threeSection" action="/guardar" method="post" >
            @csrf
            <div class="cajaForm">
                <div class="contactactme">
                    <h2>Contact form</h2>
                </div>
                <p>Fill in the fields with your information</p>
                <div class="boxInput">
                    <div class="cont">
                        <p class="form-p">Enter your name</p>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="cont">
                        <p class="form-p">Enter your email</p>
                        <input type="email"class="form-control" name="email" required>
                    </div>
                    <div class="cont">
                        <p class="form-p">write your message</p>
                        <textarea class="form-control" name="message" id="" cols="30" maxlength="510" rows="6"></textarea>
                    </div>
                </div>
                <button type="submit">Send</button>
            </div>
        </form>

    </main>

</body>

</html>
