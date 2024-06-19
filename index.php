<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Danial Portfolio</title>
</head>
<body>
    <header>
        <nav id="headernav">
            <!-- <p>Danial Zainal</p> -->
            <span id="toggleButton">&#9776;</span>
            <ul>
                <li><a href="#headernav" class="btn btn6">Home</a></li>
                <li><a href="#aboutMe" class="btn btn6">About</a></li>
                <li><a href="#projects" class="btn btn6">Projects</a></li>
                <!-- <li><a href="#contacts" class="btn btn6">Contact</a></li> -->
            </ul>
            <!-- <p>|&nbsp&nbsp<span>&#9993;</span> <a href="mailto:danial7101@gmail.com" style="text-decoration: none; color:white;">&nbspdanial7101@gmail.com</a></p> -->
        </nav>
    </header>
<div class="container">
    <div id="titleName">
        <h1>
            Hi, I am <span style="color: #b28dc9;">Danial Zainal</span>
        </h1>
        <p>A software engineering student and posesses a strong passion for web development<br>particularly in front-end and UI/UX design. 
        <!-- <br> I also proficient in multiple programming languages, software development methodologies and database management systems.</p> -->
    </div>
</div>

<div class="container">
    <div id="aboutMe" >
        <h1 class="layer1"> ABOUT ME </h1>
        <h3 class="layer2"> ABOUT ME </h3>
        <hr class="aboutMeHr">
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-6 col-xl-6">
            <div class="aboutPicture">
                <img src="img/danialphoto1.jpg" alt="" width="100%" height="600">
            </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-6">
            <div class="aboutMeInfo">
                <nav>
                    <ul>
                        <li style="visibility:hidden">
                            skip
                        </li>
                        <li id="intro" style="color: #e7dded">
                            <h2>Hi There! I'm Danial Zainal</h2>
                        </li>
                        <li id="title" style="text-align: left;">
                            <h3>Software Engineering (Multimedia <br>Development Sytems) Student</h3>
                        </li>
                        <li style="color: white">
                            <h4>
                            Currently a third-year Software Engineering student at Universiti Kebangsaan Malaysia (UKM), specializing in Multimedia
                            System Development. Passionate about software development with a focus on front-end and UI/UX design. Proficient in
                            various programming languages, development methodologies, and database management systems. Strong problem
                            solving skills and a team player
                            </h4>
                        </li>
                        <li>
                            <table style="color: white; width:100%; height:100%;">
                                <tr>
                                    <td><h4>Birthday</h4></td>
                                    <td><h4>: January 07, 2001</h4></td>
                                </tr>
                                <tr>
                                    <td><h4>Phone</h4></td>
                                    <td><h4>: +601156590701</h4></td>
                                </tr>
                                <tr>
                                    <td><h4>Email</h4></td>
                                    <td><h4>: danial7101@gmail.com</h4></td>
                                </tr>
                                <tr>
                                    <td><h4>From</h4></td>
                                    <td><h4>: Bandar Baru Bangi, Selangor</h4></td>
                                </tr>
                                <tr>
                                    <td><h4>Language</h4></td>
                                    <td><h4>: Malay (Native), English (Intermediate)</h4></td>
                                </tr>
                            </table>
                        </li>
                        <li style="color: white; text-align: center;">
                        <h4>
                        <a href="Muhammad Danial Bin Zainal Azlan CV.pdf" style="display:flex;" class="btn btn1" download>DOWNLOAD FULL CV</a>
                            </h4>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div id="projects">
        <h1 class="layer1"> PROJECTS </h1>
        <h3 class="layer2"> PROJECTS </h3>
        <hr class="projectsHr">
    </div>
    <div class="row1">
        <span>
            <div class="col-sm-12 col-lg-4 col-xl-4">
                <a href="#" class="project-border btn1" >
                    <img src="img/ukmoutlet.png" alt="" usemap="ukmoutlet">
                </a>
            </div>
            <div class="col-sm-12 col-lg-4 col-xl-4">
                <a href="#" class="project-border btn1" >
                    <img src="img/exploreftsm1.png" alt="">
                </a>
            </div>
            <div class="col-sm-12 col-lg-4 col-xl-4">
                <a href="#" class="project-border btn1" >
                    <img src="img/bst1.png" alt="">
                </a>
            </div>
        </span>
    </div>
    <div style="color: white; text-align: center; margin-top: 30px; margin-bottom: 50px;">
        <a href="#" width="100"class="btn btn1"><h4>SEE ALL PROJECTS</h4></a>
    </div>
</div>

<!-- <div class="container">
    <div id="contacts" >
        <h1 class="layer1"> CONTACTS </h1>
        <h3 class="layer2"> CONTACTS </h3>
        <hr class="aboutMeHr">
    </div>
</div> -->

<footer class="pc">
    <a href="https://www.linkedin.com/in/danial-zainal-84776a12a/" class="link"><ion-icon class="fa fa-github fa-3x" aria-hidden="true" name="logo-linkedin"></ion-icon></a>
    <a href="https://www.instagram.com/_daniall_/" class="link"><ion-icon class="fa fa-github fa-3x" aria-hidden="true" name="logo-instagram"></ion-icon></a>
    <a href="https://wa.link/kmc78t" class="link"><ion-icon class="fa fa-github fa-3x" aria-hidden="true" name="logo-whatsapp"></ion-icon></a>
    <a href="mailto:danial7101@gmail.com" class="link"><ion-icon class="fa fa-github fa-3x" aria-hidden="true" name="mail"></ion-icon></a>
    <div class="copyright">
        <p><span style="color: plum;"> Made by </span><span>&nbsp;Danial Zainal&nbsp;</span></p>
    </div>
</footer>

<footer class="mobile">
    <a href="https://www.linkedin.com/in/danial-zainal-84776a12a/" class="link"><ion-icon class="fa fa-github fa-3x" aria-hidden="true" name="logo-github"></ion-icon></a>
    <a href="https://www.instagram.com/_daniall_/" class="link"><ion-icon class="fa fa-github fa-3x" aria-hidden="true" name="logo-codepen"></ion-icon></a>
    <a href="https://wa.link/kmc78t" class="link"><ion-icon class="fa fa-github fa-3x" aria-hidden="true" name="logo-whatsapp"></ion-icon></a>
    <a href="mailto:danial7101@gmail.com" class="link"><ion-icon class="fa fa-github fa-3x" aria-hidden="true" name="mail"></ion-icon></a>
    <div class="copyright">
        <p><span style="color: plum;"> Made by </span><span>&nbsp;Danial Zainal&nbsp;</span></p>
    </div>
</footer>
<script src="homepage.js"></script>
</body>
</html>
