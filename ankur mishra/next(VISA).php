<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Card Payment</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #f3f3f3;
            padding: 10px;
        }
        .card-container {
            position: relative;
            width: 600px;
            height: 350px;
            perspective: 1000px;
            margin-bottom: 20px;
        }
        .card {
            width: 100%;
            height: 100%;
            position: absolute;
            transform-style: preserve-3d;
            transition: transform 0.6s;
        }
        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            color: white;
            padding: 20px;
            backface-visibility: hidden;
        }
        .card-front {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-back {
            transform: rotateY(180deg);
            background: linear-gradient(45deg, #333, #000);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .black-strip {
            background: black;
            height: 40px;
            width: 100%;
            margin-top: 10px;
        }
        .input-field {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            padding: 10px;
            font-size: 16px;
            color: white;
            width: 100%;
            border-radius: 5px;
            margin-top: 10px;
        }
        .cvv-box {
            width: 50%;
            align-self: flex-end;
        }
        .next-btn, .pay-btn, .home-btn {
            margin-top: 10px;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .next-btn {
            background: #0072ff;
            color: white;
        }
        .pay-btn {
            background: #00c600;
            color: white;
            display: none;
            text-align: center;
        }
        .home-btn {
            background: #ff5722;
            color: white;
            font-size: 20px;
            margin-top: 20px;
            text-align: center;
            display: block;
            width: auto;
            padding: 10px 20px;
            margin: 10px auto;
            text-decoration: none;
            border-radius: 5px;
           
        }
        
        @media (max-width: 480px) {
            .card-container {
                width: 100%;
                max-width: 350px;
                height: 220px;
            }
            .home-btn {
                width: 90%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="home-btn">Go Home</a>
    <div class="card-container">
        <div class="card" id="atmCard">
            <div class="card-front">
                <h3>ATM Card</h3>
                <input class="input-field" type="text" id="cardNumber" placeholder="Card Number" maxlength="16">
                <input class="input-field" type="text" id="expiryDate" placeholder="MM / YY" maxlength="5">
                <input class="input-field" type="text" id="holderName" placeholder="Card Holder Name (Optional)">
                <button class="next-btn" id="nextBtn">Next</button>
            </div>
            <div class="card-back">
                <div class="black-strip"></div>
                <input class="input-field cvv-box" type="text" id="cvv" placeholder="CVV" maxlength="3">
                <a href="payment_success.php" class="pay-btn" id="payBtn">Pay Now</a>
            </div>
        </div>
    </div>
   

    <script>
        document.getElementById("nextBtn").addEventListener("click", function() {
            let cardNumber = document.getElementById("cardNumber").value;
            let expiryDate = document.getElementById("expiryDate").value;
            
            if (cardNumber.length === 16 && expiryDate.length === 5) {
                document.getElementById("atmCard").style.transform = "rotateY(180deg)";
            } else {
                alert("Please enter a valid Card Number and Expiry Date.");
            }
        });
        
        document.getElementById("cvv").addEventListener("input", function() {
            let cvv = document.getElementById("cvv").value;
            if (cvv.length === 3) {
                document.getElementById("payBtn").style.display = "block";
            } else {
                document.getElementById("payBtn").style.display = "none";
            }
        });
    </script>
</body>
</html>

