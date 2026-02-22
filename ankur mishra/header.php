<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<style>

@import url('https://googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

/* for nav bar */



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
background-color: #3374ff;
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
 
    /* border-radius: 2px;
    padding: 5px 5px; */
}

.header-3 .icon a{
    color:white;
    font-size: 2.5rem;
    margin-left: 2rem;
    /* background-color: #0056b3; */
}
.header-3 a:hover{
color: #ec1616;
}

#menu-bar{
    font-size: 3rem;
    color: #0a0808;
    border: .1rem solid #666;
    border-radius: .5rem;
    padding:.5rem 1.5rem ;
    display: none;
    cursor: pointer;
    background-color:white;
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
                <a href="login-sign.php">Login</a>
                <a href="#contect">Contect</a>
                <a href="#report">Report</a>
                <a href="#service">Service</a>
                <a href="chatbot.php" class="chatbot">Chatbot</a>
            </nav>
            <div class="icon">
               <button type="submit" class="btnbook"><a href="home-book.php">Book Home</a> </button>
                <a href="login-sign.php" class="fas fa-user-circle"></a>
            </div>
        </div> 
    
    </header>
    

</body>
</html>

