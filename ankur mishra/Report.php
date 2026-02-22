<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User & Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>

/* manu style */

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




/* manu style end */


/* start report */

.book-an-appointment {
    display: flex;
    flex-wrap: wrap;
    padding: 20px;
    box-sizing: border-box;
    background-color: #069A8E;
}

.book-an-appointment-image {
    flex: 1;
    min-width: 300px;
    padding: 10px;
}

.book-an-appointment-image img {
    max-width: 100%;
    height: auto;
    display: block;
}

.book-an-appointment-form {
    flex: 1;
    min-width: 300px;
    padding: 10px;
}

.book-an-appointment-class-form {
    display: flex;
    flex-direction: column;
}

.book-an-appointment-label {
    margin: 5px 0;
}

.book-an-appointment-input, .book-an-appointment-textarea {
    padding: 10px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
}

.book-an-appointment-textarea {
    resize: none;
}

.book-an-appointment-button {
    padding: 10px;
    background-color: blueviolet;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 3px;
}

.book-an-appointment-button:hover {
    background-color: #0056b3;
}

@media (max-width: 768px) {
    .book-an-appointment {
        flex-direction: column;
    }

    .book-an-appointment-image, .book-an-appointment-form {
        min-width: 100%;
    }
}

.book-an-appointment-header {
    text-align: center;
    padding: 20px;
    background-color: #f8f9fa;
}

.book-an-appointment-header h1 {
    margin: 0;
    font-size: 24px;
    color: #343a40;
}


/* end report */

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
    .Liver-related-box {
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


/* end footer style */



</style>
</head>
<body>

    <!-- start manu body -->



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
                <a href="#category">About</a>
                <a href="#footer-contect-center">Contect</a>
                <a href="Report.php">Report</a>
                <a href="Service.php">Service</a>
            </nav>
            <div class="icon">
               <button type="submit" class="btnbook"><a href="home-book.php">Book Home </a></button>
                <a href="login-sign.php" class="fas fa-user-circle"></a>
            </div>
        </div> 
    
    </header>


<!-- end body manu     -->

    


<!-- strat report form  -->

<div class="book-an-appointment-header" id="report">
    <h1>Report Form</h1>
</div>
<div class="book-an-appointment">
    <div class="book-an-appointment-image">
        <img src="rabbit-4.jpg" >
    </div>
    <div class="book-an-appointment-form">
        <form class="book-an-appointment-class-form" id="book-an-appointment-myForm"action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="3d64d019-1d9a-494d-9335-04c2d0707d9b">

            <label class="book-an-appointment-label" for="name">Name:</label>
            <input class="book-an-appointment-input" type="text" id="book-an-appointment-name" name="name" required>

            <label class="book-an-appointment-label" for="mobile">Mobile Number:</label>
            <input class="book-an-appointment-input" type="tel" id="book-an-appointment-mobil" name="mobile" required>

            <label class="book-an-appointment-label" for="age">Age:</label>
            <input class="book-an-appointment-input" type="number" id="book-an-appointment-age" name="age" required>

            <label class="book-an-appointment-label" for="address">Massege :</label>
            <textarea id="book-an-appointment-address" name="address" rows="5" maxlength="120" required class="book-an-appointment-textarea"></textarea>

            <button class="book-an-appointment-button" type="submit">Submit</button>
        </form>
    </div>
</div>





<!-- end the report form -->


<!-- start footer -->




<!-- end footer  -->

<script>

    // manu js


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


// end manu js




</script>

</body>
</html>

