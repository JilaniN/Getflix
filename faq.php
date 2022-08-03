<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!-- link icon in head -->
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="../assets/ventilateur.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/ventilateur.png">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="sign.css">
  
</head>

<body>
    <!-- navbar -->
    <div class="topnav">
        <a href="index.php"><img src="./assets/ventilateur.png" width="30" alt="logo"> <b>BesToBe</b></a>
        <a href="index.php">Home</a>
        <a href="./shows/movies.php">Movies</a>
        <a href="./shows/tvshows.php">Music</a>
        <div class="dropdown">
            <button class="dropbtn">Categories</button>
            <div class="dropdown-content">
                <a href="./shows/sport.php">Sport</a>
                <a href="./shows/cooking.php">Cooking</a>
                <a href="./shows/gaming.php">Gaming</a>

            </div>
        </div>

        <div class="container my-5">
            <div class="wrapper bg-white rounded shadow">
                <div class="card">

                    <h3 class="font-weight-bold text-center">Frequently Asked Questions</h3>

                    <span class="d-block text-center px-3">If you are new to BesToBe or looking for answer to your
                        questions. this guide will <br> help you to learn more about our service and their
                        features.</span>


                </div>
                <div class="h3 text-primary text-center">How can we help you?</div>
                <div class="d-flex justify-content-center">
                    <div class="search w-75 d-flex align-items-center"> <span class="fas fa-search text-dark"></span>
                        <input type="text" class="form-control" placeholder="Describe your issue">
                    </div>
                </div>
                <div class="accordion accordion-flush border-top border-start border-end" id="myAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne"> <button
                                class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                What is BesToBe </button> </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse border-0"
                            aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                            <div class="accordion-body p-0">
                                <ul class="list-unstyled m-0">
                                    <p>BesToBe is a subscription-based streaming service that allows our members to
                                        watch TV shows,Best of youtube video and movies without commercials on an
                                        internet-connected device.

                                    </p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne"> <button
                                class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                How to sign up for BesToBe </button> </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse border-0"
                            aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                            <div class="accordion-body p-0">
                                <p>Join the millions of subscribers around the world who enjoy unlimited award-winning
                                    TV shows, movies, documentaries, and more without a single advertisement.

                                    As a BesToBe member, you are charged once a month on the date you signed up. There
                                    are no contracts, no cancellation fees, and no commitments. You have the freedom to
                                    change your plan or cancel online at any time if you decide BesToBe isn’t for you.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne"> <button
                                class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree"> How to keep your account secure </button> </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse border-0"
                            aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                            <div class="accordion-body p-0">
                                Use a password unique to BesToBe
                                Do not use the same password on Netflix that you use for other websites or apps.

                                Your password should be:
                                Unique to BesToBe and not used for other websites or apps

                                At least 8 characters long

                                A combination of letters (upper and lower-case), numbers, and symbols

                                Not easily guessed - such as “password,” “12345678,” or use any personal information
                                (name, birthday, address)

                                A password manager can make it easier to keep track of unique passwords.

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne"> <button
                                class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive"> How to change your BesToBe password
                            </button> </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse border-0"
                            aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                            <div class="accordion-body p-0">
                                <p>If you can't sign in to BesToBe, you can reset your password by email if you've added
                                    your phone number to your account. If you forget the email address or phone number
                                    you registered with, you may be able to provide more information online to recover
                                    your account.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne"> <button
                                class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">
                                What devices can I use to stream BesToBe? </button> </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse border-0"
                            aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                            <div class="accordion-body p-0">
                                <p>You can stream BesToBe from any Internet-connected device that offers the BesToBe
                                    app. BesToBe-ready devices include streaming media players, smart TVs, game
                                    consoles, set-top boxes, Blu-ray players, smartphones, tablets, PCs, and laptops.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer p-2">
                <div class="footer-cols">
                    <ul>
                        <li><a href="/faq.php">FAQ</a></li>
                    </ul>
                    <ul>
                        <li><a href="./contact.php">Contact Us</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">BesToBe Originals</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Copyright 2022 BesTOBe</a></li>
                    </ul>
                </div>
            </footer>

        </div>
        <script src="myscripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
</body>

</html>