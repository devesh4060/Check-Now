<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancer-html-css</title>


<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>

/* about header style */

@import url('https://googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');


:root{
    --green:#3A9943;
}
*{
    font-family: 'Roboto',sans-serif;
    margin: 0;
    padding: 0; 
    box-sizing: border-box;
    text-transform:capitalize;
    outline: none;
    border: none;
    text-decoration: none;
    transition: all .2s linear;
}
*::selection{
background-color: #d36817;
color: #fff;
}
html{
    font-size: 62.5%;
    overflow-x:hidden ;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

.header-1,.header-2,.header-3{
display: flex;
align-items: center;
justify-content: space-between;
padding: 1rem 9%;
background-color: #41B3A2;
}

.header-1{

    border-bottom: 1rem solid rgba(197, 30, 30, 0.2);
}
.header-3{
    background: #41B3A2;
    box-shadow: 0.5rem 1rem rgba(0, 0, 0,.1);
    position: relative;
    z-index: 10000;
}
.header-1 span{
    font-weight: lighter;
    color: #fff;
    font-size: 1.7rem;
}
.header-1 a{
    padding: 0 .7rem;
    color: #fff;
    font-size: 2rem
}
.header-1 a:hover{
    color: red;
}

.header-2 .logo{
    font-weight: bolder;
    font-size: 3rem;
    color: #fff;
}
.header-2 .logo i{
    color: yellow;
}

.header-2 .search-bar-container{
    display: flex;
    align-items: center;
    width: 50rem;
    padding: 1.5rem;
    background: rgba(255, 255, 255, .2);
    border-radius: .5rem;
}
.header-2 .search-bar-container #search-bar{
width: 100%;
background: none;
text-transform: none;
color: #fff;
font-size: 1.7rem;
}

.header-2 .search-bar-container #search-bar::placeholder{
    text-transform: capitalize;
    color: #ddd;
}

.header-2 .search-bar-container label{
    color: #fff;
    cursor: pointer;
    font-size: 2rem;
    padding: 0.5rem;
}

.header-2 .search-bar-container label:hover{
    color: yellow;
}

.header-3 .navbar a{ 
    color: white;
    font-size: 2rem;
    margin-right: 2rem;
}

.header-3 .icon a{
    color: white;
    font-size: 2.5rem;
    margin-left: 2rem;
}
.header-3 a:hover{
color: #c05d0c;
}

#menu-bar{
    font-size: 3rem;
    color: #666;
    border: .1rem solid #666;
    border-radius: .5rem;
    padding:.5rem 1.5rem ;
    display: none;
    cursor: pointer;
    background-color: white;
}

.header-3.active{
    position: fixed;
    top: 0;
    left: 0;
    right:0;
}
.btnbook{
    background-color: rgb(226, 43, 189);
    color: white;
    width: 240px;
    height: 30px;
    cursor: pointer;
    border-radius: 8px;
    text-transform: uppercase
 
}
.btnbook:hover{
    background: rgb(77, 49, 49);
}

/* about us style */



.main-Cancer-box {
            display: flex;
            justify-content: center;
            
        }
        .Cancer-box {
            max-width: 1200px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
        }
        .Cancer-box-column {
            flex: 1;
            min-width: 300px;
            padding: 20px;
        }
        .Cancer-box-column img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .Cancer-box-text-column {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .Cancer-box-text-column p {
            font-size: 18px;
            line-height: 1.5;
            text-align: justify;
        }
        .Cancer-box-text-column h1{
          color: red;
          margin-left: 25%;
          font-size: 40px;
        }

/* about footer style */

.footer-style {
    background-color: #135D66;
    color: white;
    padding: 40px 20px;
    text-align: left;
}
.footer-div-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.footer-style-column {
    flex: 1;
    min-width: 250px;
    margin-bottom: 20px;
    padding: 0px 25px;
}
.footer-style-column h3 {
    margin-bottom: 15px;
    font-size: 20px;
    border-bottom: 2px solid white;
    padding-bottom: 10px;
}
.footer-style-column p, .footer-style-column a {
    color: white;
    text-decoration: none;
    display: block;
    margin: 5px 0;
    font-size: 16px;
}
.footer-style-column a:hover {
    text-decoration: underline;
    color: red;
}
.footer-style-column i {
    margin-right: 10px;
}
.footer-social-icons {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.footer-social-icons a {
    color: white;
    font-size: 20px;
    margin: 5px;
    display: inline-block;
}
.footer-social-icons a:hover {
    color: red;
}
.footer-bottom-for-mee {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}
.footer-bottom-for-mee i {
    color: red;
}

/* Responsive styling */
@media screen and (max-width: 768px) {
    .footer-style-column {
        min-width: 100%;
    }
    .footer-div-container {
        flex-direction: column;
    }
    .footer-style-column h3 {
        text-align: center;
    }
    .footer-style-column p, .footer-style-column a {
        text-align: center;
    }
    .footer-social-icons {
        justify-content: center;
        text-align: center;
    }
    /* image .Diabetes-box */
    .Cancer-box {
         flex-direction: column;
    }


/* for menu-bar media */



    #menu-bar{
        display: initial;
    }
    .header-3 .navbar{
        position:absolute;
        top: 100%;left: 0;right: 0;
        background: #eee;
        padding: 1rem 2rem;
        border-top: 1rem solid rgba(0, 0, 0,.3);
        clip-path: polygon(0 0,100% 0,100% 0,0 0);
    }
    .header-3 .navbar.active{
        clip-path: polygon(0 0,100% 0,100% 100%,0% 100%);
    }
    .header-3 .navbar a{
        display: block;
        margin: 1.5rem 0;
        padding: 1.5rem;
        border-radius: .5rem;
        border: .1rem solid rgba(0, 0, 0,.3);
        background: #fff;
        text-align: center;
        color: black;
    }
    .header-2{
        flex-flow: column;
    }
    .header-2 .search-bar-container{
        width: 100%;
        margin-top: 2rem;
    }
}



/* for all media section */


@media(max-width:1200px){
    html{
        font-size: 55%;
    } 
}

@media(max-width:991px){
    .header-1,.header-2,.header-3{
        padding: 2rem;
    }
}

@media(max-width:450px){
    html{
        font-size: 50%;
    }
    .header-1{
        display: none;
    }

}


    </style>
     
</head>
<body>
    

<header>
    <div class="header-1">
        <div class="share">
            <span>Follow us:</span>
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>

        <div class="call">
            <span>7:30 AM  To  10:30 PM                 </span>
            <span> call us: </span>
            <a href="#">+91 9988776655</a>
        </div>
    </div>

    <div class="header-2">
        <a href="#" class="logo"><i class="fas fa-seedling"></i>CheckNow</a>

        <form action="" class="search-bar-container"> 
            <input type="search"  id="search-bar" placeholder="search here....">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </div>

    <div class="header-3">
        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#About">About</a>
            <a href="#contect">Contect</a>
            <a href="Report.php">Report</a>
            <a href="Service.php">Service</a>
        </nav>
        <div class="icon">
           <button type="submit" class="btnbook"><a href="home-book.php">Book Home </a></button>
            <a href="login-sign.php" class="fas fa-user-circle"></a>
        </div>
    </div> 

</header>


<!-- about Diadetes -->


<div class="main-Cancer-box">
    <div class="Cancer-box">
        <div class="Cancer-box-column">
            <img src="Read-Cancer.jpg" alt="Image">
        </div>
        <div class="Cancer-box-column Cancer-box-text-column">
          <h1 class="Cancer-box-h1">About Cancer..</h1>
            <p>
            " Cancer is a disease where cells in the body grow uncontrollably. Normally, cells grow and die in an orderly way, but in cancer, this process breaks down. Instead of dying, cancer cells keep multiplying, forming lumps called tumors. These tumors can invade and damage nearby tissues and spread to other parts of the body. Cancer can start in any part of the body and can be caused by various factors, including genetics, lifestyle, and environmental exposures. Early detection and treatment are crucial for managing cancer. "
             </p>
        </div>
    </div>
</div>


<!-- footer section for this page  -->




<script>
let menu=document.querySelector('#menu-bar');
let  navbar=document.querySelector('.navbar');
let  header=document.querySelector('.header-3');

menu.addEventListener('click',()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

window.onscroll =()=>{

    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if(window.scrollY >250){
        header.classList.add('active');
    }
    else{
        header.classList.remove('active');
    }

}


</script>
</body>
</html>

