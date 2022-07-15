<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/6c36406174.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="whoIsWatching">
        <div class="logo-section">
            <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">
            <a class="navbar-brand text-light" href=""><b>Getflix</b></a>

        </div>

        <div class="main-div">
            <h1>Who's watching?</h1>
            <div class="memberDiv">
                <button class="btn"><span>Arianna</span></button>
                <button class="btn"><span>Sophie</span></button>
                <button class="btn"><span>Bhama</span></button>
                <button class="btn"><span>Jilani</span></button>
                <button class="addIcon"><i class="fas fa-plus-circle"></i> <span>Add Profile</span></button>
            </div>
            <button class="manageProfile">manage Profile</button>
        </div>
    </div>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
}

html {
  font-size: 62.5%;
}

.whoIsWatching {
  width: 100vw;
  min-height: 100vh;
  background-color: #141414;
}

.logo-section {
  width: 95vw;
  margin: auto;
  height: 7rem;
  background-color: rgb(20, 20, 20);
  /* background-color: red; */
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.logo-section a img {
  width: 10rem;
  height: 4rem;
  cursor: pointer;
}

.main-div {
  width: 100vw;
  height: 80vh;
  /* background-color: rosybrown; */
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  color: #fff;
}

.main-div h1 {
  font-size: 6.5rem;
  letter-spacing: 0.2rem;
  font-size: 600;
}

.memberDiv {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

.memberDiv .btn,
.addIcon {
  height: 10vw;
  min-height: 8.4rem;
  max-height: 20rem;
  width: 10vw;
  min-width: 8.4px;
  max-width: 20rem;
  border-radius: 0.4rem;
  border: none;
  outline: none;
  margin-top: 4rem;
  margin-right: 3.5rem;
  position: relative;
  cursor: pointer;
  background-repeat: no-repeat;
  background-size: cover;
}

.memberDiv .btn:nth-child(1) {
  background-image: url("./image//user1.png");
}

.memberDiv .btn:nth-child(2) {
  background-image: url("./image//user2.png");
}

.memberDiv .btn:nth-child(3) {
  background-image: url("./image//user3.png");
}
.memberDiv .btn:nth-child(4) {
  background-image: url("./image/user4.jpg");
}

.memberDiv .btn:hover {
  box-shadow: inset 0 0 0 5px rgba(255, 255, 255, 0.9);
}

.memberDiv .btn span,
.addIcon span {
  width: inherit;
  /* background-color: red; */
  position: absolute;
  bottom: -3.5rem;
  left: 0;
  text-transform: capitalize;
  color: rgb(153, 153, 153);
  font-size: 2rem;
}

.fa-plus-circle {
  font-size: 7vw;
  color: grey;
  opacity: 0.8;
}

.addIcon {
  background-color: transparent;
}

.addIcon:hover {
  background-color: #fff;
}

.addicon:hover > .fa-plus-circle {
  opacity: 1;
}

.manageProfile {
  border: 1px solid grey;
  color: grey;
  text-transform: uppercase;
  padding: 0.8rem 2.6rem;
  letter-spacing: 0.5rem;
  font-size: 2.5rem;
  margin-top: 12rem;
  background-color: transparent;
  cursor: pointer;
}
.manageProfile:hover {
  border: 1px solid #fff;
  color: #fff;
}
    </style>
    <script src="myscripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>