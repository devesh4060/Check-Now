<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Selection</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            background-color: #f9f9f9;
            flex-direction: column;
        }

        .home-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .home-btn {
            background-color: #6064b6;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 50px;
        }
        .home-btn:hover {
            opacity: 0.8;
        }

        .container {
            width: 600px;
            border-radius: 8px;
            padding: 40px;
            background: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .title {
            font-size: 24px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .category {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
            margin-top: 20px;
        }
        .category label {
            height: 160px;
            padding: 20px;
            box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            border-radius: 8px;
            position: relative;
            background: #fff;
            transition: 0.3s ease-in-out;
        }
        .category label:hover {
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        }
        .category input {
            display: none;
        }
        label .imgName {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }
        .imgName span {
            font-size: 18px;
            font-weight: bold;
        }
        .check {
            display: none;
            position: absolute;
            top: 5px;
            right: 5px;
            font-size: 22px;
            color: #6064b6;
        }
        input:checked + label {
            box-shadow: 0px 0px 5px #6064b6;
            transform: scale(1.05);
        }
        input:checked + label .check {
            display: block;
        }
        .next-btn {
            display: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            border: none;
            text-decoration: none;
        }
        #visa-next {
            background-color: #0063B1;
            color: white;
        }
        #mastercard-next {
            background-color: #FF5F00;
            color: white;
        }
        #paypal-next {
            background-color: #00457C;
            color: white;
        }
        #amex-next {
            background-color: #3E8E41;
            color: white;
        }
        .next-btn:hover {
            opacity: 0.9;
        }
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 30px;
            }
            .category {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<div class="home-container">
    <a href="index.php" class="home-btn">Go Home</a>
</div>

<div class="container">
    <div class="title">Select a <span style="color: #6064b6">Payment</span> method</div>
    <form id="payment-form">
        <div class="category">
            <input type="radio" name="payment" id="visa">
            <label for="visa">
                <div class="imgName">
                    <img src="https://i.ibb.co/vjQCN4y/Visa-Card.png" width="100">
                    <span>VISA</span>
                </div>
                <i class="fa-solid fa-circle-check check"></i>
            </label>

            <input type="radio" name="payment" id="mastercard">
            <label for="mastercard">
                <div class="imgName">
                    <img src="https://i.ibb.co/vdbBkgT/mastercard.jpg" width="90">
                    <span>Mastercard</span>
                </div>
                <i class="fa-solid fa-circle-check check"></i>
            </label>

            <input type="radio" name="payment" id="paypal">
            <label for="paypal">
                <div class="imgName">
                    <img src="https://i.ibb.co/KVF3mr1/paypal.png" width="100">
                    <span>Paypal</span>
                </div>
                <i class="fa-solid fa-circle-check check"></i>
            </label>

            <input type="radio" name="payment" id="amex">
            <label for="amex">
                <div class="imgName">
                    <img src="https://i.ibb.co/wQnrX86/American-Express.jpg" width="80">
                    <span>AMEX</span>
                </div>
                <i class="fa-solid fa-circle-check check"></i>
            </label>
        </div>

        <a type="button" href="next(VISA).php" class="next-btn" id="visa-next">Next (VISA)</a>
        <a type="button" href="next(VISA).php" class="next-btn" id="mastercard-next">Next (Mastercard)</a>
        <a type="button" href="next(VISA).php" class="next-btn" id="paypal-next">Next (Paypal)</a>
        <a type="button" href="next(VISA).php" class="next-btn" id="amex-next">Next (AMEX)</a>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const paymentOptions = document.querySelectorAll("input[name='payment']");
        const nextButtons = document.querySelectorAll(".next-btn");

        
        nextButtons.forEach(button => {
            button.style.display = "none";
        });

        paymentOptions.forEach(option => {
            option.addEventListener("change", function () {

                nextButtons.forEach(button => {
                    button.style.display = "none";
                });


                if (document.getElementById("visa").checked) {
                    document.getElementById("visa-next").style.display = "block";
                } else if (document.getElementById("mastercard").checked) {
                    document.getElementById("mastercard-next").style.display = "block";
                } else if (document.getElementById("paypal").checked) {
                    document.getElementById("paypal-next").style.display = "block";
                } else if (document.getElementById("amex").checked) {
                    document.getElementById("amex-next").style.display = "block";
                }
            });
        });
    });
</script>

</body>
</html>

