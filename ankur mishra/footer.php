<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>



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
}


    </style>
</head>
<body>
    


    
    
    
    
    
    
        <script src="index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>

