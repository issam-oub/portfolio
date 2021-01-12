<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="wiewport" content="width=device-width,initial-scale=1.0">
    <title>Page Title</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <header>
            <!------------------oubbali issam---------------------------------->
            <a href="#" class="logo"> OUBBALI Issam <br> Developpeur <br> Full-Stack</a>
            <!--Image logo----------------------------------------------------->
            <img src="assets/img1/img4.png" class="img">

            <div class="toggle" onclick="menuToggle();"></div>
        </header>
        <!--glass----------------------------------------------  --------------->
        <div class="glass"></div>
        <div class="content">
            <!--portfolio------------------------------------------------------->
            <h2>POrtfOliO <br><span></span></h2>

        </div>
        <!--Video--------------------------------------------------------------->
        <video src="video1.mp4" autoplay muted loop> </video>
        <!--Reseaux sociaux----------------------------------------------------->
        <ul class="sci">
            <li style="--i:1"><a href="mailto:oubbali91@gmail.com">Gmail</a> </li>
            <li style="--i:2"><a href="https://www.linkedin.com/in/issam-oubbali-ab386513a/" target="_blank">Linkedin</a> </li>
            <li style="--i:3"><a href="https://twitter.com/Issamou05" target="_blank">Twitter</a> </li>
        </ul>
        <!--navigation---------------------------------------------------------->
        <ul class="navigation">
            <li style="--j:5"><a href="Portfolio.php">Accéder au<br> Portfolio</a></li>
            <!--
            <li style="--i:2"><a href="Portfolio.php">About</a></li>
            <li style="--i:3"><a href="projets.php">Projets</a></li>
            <li style="--i:4"><a href="contact.php">Contact</a></li>
               -->
        </ul>
    </section>
    <!--Card-------------------------------------------------------------------->
    <div class="container">
        <div class="card">
            <div class="content">
                <!--<h2> 01</h2> -->
                <h3> Cordonnées <br></h3>
                <p>
                    <B>Adresse Mail</B>📧: oubbali91@gmail.com<br>
                    <B>Téléphone</B>📱 :<br> 07 60 26 42 97<br>
                    <B>Adresse</B>📍 : <br> Cergy 95800<br>
                    <B>Mobilité</B>✈️ :<br> France <br>
                    <B>Contrat</B>💻: <br> Alternacne <br> CDI <br> Freelance <br>
                </p>

            </div>
        </div>
    </div>
    <!---Script Card------------------------------------------------>
    <script type="text/javascript" src="assets/js/vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelector(".card"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 1,
        })
    </script>

    <!---script img logo------------------------------------------------>
    <script type="text/javascript" src="assets/js/vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelector(".img"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 1,
        })
    </script>
    <!-----script logo--------------------------------------------------->
    <script type="text/javascript" src="assets/js/vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelector(".logo"), {
            max: 5,
            speed: 400,
            glare: false,
            "max-glare": 1,
        })
    </script>

    <!--script secion - menu--------------------------------------------->
    <script type="text/javascript">
        function menuToggle() {
            const toggleMenu = document.querySelector('.toggle');
            const section = document.querySelector('section');
            toggleMenu.classList.toggle('active');
            section.classList.toggle('active');
        }
    </script>
</body>

</html>