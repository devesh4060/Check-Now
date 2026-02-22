<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form with Image</title>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
        /* * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #e0f7fa;
            padding: 20px; 
        } */

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


        /* about form style  */

        .for-all-div-box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #e0f7fa;
        }

        .form-main-div {
            /* display: flex; */
            /* justify-content: center; */

            display: flex;
            flex-direction: column;
            max-width: 1200px;
            width: 100%;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        @media (min-width: 768px) {
            .form-main-div {
                flex-direction: row;
            }
        }
        .form-container-div, .image-container {
            width: 100%;
        }
        .form-container-div {
            padding: 40px;
            background-color: #fafafa;
        }
        .form-container-div form {
            display: flex;
            flex-direction: column;
        }
        .form-container-div form label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #00796b;
        }
        .form-container-div form input,
        .form-container-div form select,
        .form-container-div form textarea {
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #00796b;
            border-radius: 8px;
            font-size: 16px;
        }
        .form-container-div form button {
            padding: 12px;
            background-color: #00796b;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s;
        }
        .form-container-div form button:hover {
            background-color: #004d40;
        }
        .form-container-div form button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
        .image-container img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .message {
            color: red;
            margin-top: 10px;
            display: none;
        }




        /* footer css file */


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
<!-- menu header html -->

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
            <a href="#">+91 9137161227</a>
        </div>
    </div>

    <div class="header-2">
        <a href="#" class="logo"><i class="fas fa-seedling"></i>Dr.------ Yadav</a>

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
            <a href="#footer-contect-center">Contect</a>
            <a href="Report.php">Report</a>
            <a href="Service.php">Service</a>
        </nav>
        <div class="icon">
            <a href="login-sign.php" class="fas fa-user-circle"></a>
        </div>
    </div> 

</header>








    <!-- about form for booking -->
    <div class="for-all-div-box">
    <div class="form-main-div">
        <div class="form-container-div">
            <form id="testForm" action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="3d64d019-1d9a-494d-9335-04c2d0707d9b">

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>


                <label for="collectionTime">Home Blood Collection Time:</label>
                <select id="collectionTime" name="collectionTime" required>
                    <option value="">Select Time</option>
                    <option value="7:00 AM to 9:00 AM">7:00 AM to 9:00 AM</option>
                    <option value="9:00 AM to 11:00 AM">9:00 AM to 11:00 AM</option>
                    <option value="11:00 AM to 12:30 PM">11:00 AM to 12:30 PM</option>
                    <option value="1:00 PM to 3:00 PM">1:00 PM to 3:00 PM</option>
                    <option value="3:00 PM to 5:00 PM">3:00 PM to 5:00 PM</option>
                    <option value="5:30 PM to 7:00 PM">5:30 PM to 7:00 PM</option>
                    <option value="7:00 PM to 9:00 PM">7:00 PM to 9:00 PM</option>
                    <option value="9:00 PM to 10:30 PM">9:00 PM to 10:30 PM</option>
                </select>


                <label for="bloodTestType">Blood Test Type:</label>
                <select id="bloodTestType" name="bloodTestType" required>
                    <option value="">Select Type</option>
                    <option value="CBC">CBC</option>
                    <option value="Lipid Profile">Lipid Profile</option>
                    <option value="Blood Sugar">Blood Sugar</option>
                </select>

                <label for="fullAddress">Full Address (max 500 characters):</label>
                <textarea id="fullAddress" name="fullAddress" maxlength="500" rows="4" required></textarea>



                <button type="submit">Submit</button>
                <div class="message" id="message">Please fill out all fields.</div>
            </form>
        </div>
        <div class="image-container">
            <img src="hand-doctor-holding-blood-test-tubes-during-covid-19-outbreak.jpg" alt="Blood Test Image">
        </div>
    </div>
    </div>



<!-- footer section for this page  -->




    <script>
// about menu js



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








// form js file 
        document.getElementById('testForm').addEventListener('submit', function(event) {
            const name = document.getElementById('name').value;
            const age = document.getElementById('age').value;
            const bloodTestType = document.getElementById('bloodTestType').value;
            const fullAddress = document.getElementById('fullAddress').value;
            const collectionTime = document.getElementById('collectionTime').value;
            const message = document.getElementById('message');

            if (!name || !age || !bloodTestType || !fullAddress || !collectionTime) {
                event.preventDefault();
                message.style.display = 'block';
            } else {
                message.style.display = 'none';
            }
        });
    </script>
</body>
</html>

