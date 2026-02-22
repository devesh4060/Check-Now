<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Test Chatbot</title>
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






















.page-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://via.placeholder.com/1920x1080'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        /* Chatbot Button Styles */
        .chatbot-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #0078d7;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 15px 25px;
            font-size: 16px;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .chatbot-button:hover {
            background-color: #005bb5;
            transform: scale(1.05);
        }

        /* Chatbot Container */
        .chat-container {
            position: fixed;
            bottom: 80px;
            right: 20px;
            max-width: 400px;
            background-image: url('https://via.placeholder.com/400x500'); /* Replace with your chatbot background image URL */
            background-size: cover;
            background-position: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            display: none;
            flex-direction: column;
            height: 500px;
            overflow: hidden;
            z-index: 999;
        }

        .chat-header {
            background: rgba(0, 120, 215, 0.8);
            color: white;
            padding: 15px;
            font-size: 18px;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
        }

        .chat-messages {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
            background: rgba(255, 255, 255, 0.8);
        }

        .message {
            margin: 10px 0;
            display: flex;
            align-items: flex-start;
        }

        .bot-message, .user-message {
            padding: 10px;
            border-radius: 10px;
            max-width: 80%;
        }

        .bot-message {
            background: #d6e4ff;
            color: #333;
        }

        .user-message {
            background: #0078d7;
            color: white;
            align-self: flex-end;
        }

        .chat-input {
            display: flex;
            border-top: 1px solid #ddd;
            background: rgba(255, 255, 255, 0.8);
        }

        .chat-input input {
            flex: 1;
            padding: 15px;
            border: none;
            font-size: 16px;
        }

        .chat-input button {
            padding: 15px 20px;
            background: #0078d7;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        .chat-input button:hover {
            background: #005bb5;
        }

        /* Responsive Design */
        @media screen and (max-width: 480px) {
            .chat-container {
                width: 90%;
                bottom: 70px;
                right: 5%;
            }
        }



























        
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










    <div class="page-background"></div>

    <!-- Chatbot Button -->
    <button class="chatbot-button" onclick="toggleChatbot()">Chatbot</button>

    <!-- Chatbot Interface -->
    <div class="chat-container" id="chatContainer">
        <div class="chat-header" onclick="toggleChatbot()">Blood Test Bot</div>
        <div class="chat-messages" id="chatMessages">
            <!-- Chat messages will appear here -->
        </div>
        <div class="chat-input">
            <input type="text" id="userInput" placeholder="Ask a question..." />
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>




    


    
    
    
    
    
    

        <script>
            // Toggle chatbot visibility
            function toggleChatbot() {
                const chatContainer = document.getElementById("chatContainer");
                chatContainer.style.display = chatContainer.style.display === "flex" ? "none" : "flex";
            }
    
            // Predefined responses for the bot
            const botResponses = {
                "hello": "Hello! How can I assist you with your blood test today?",
                "cost": "The cost of a blood test depends on the type of test. Please provide the specific test name.",
                "time": "Blood test results are usually available within 24-48 hours.",
                "procedure": "For most blood tests, a small amount of blood is drawn from a vein in your arm.",
                "types": "We offer various blood tests, including CBC, lipid profile, thyroid tests, and more. Which one do you need information about?",
                "contact": "You can contact us at +91-123-456-7890 or visit our website.",
                "thanks": "You're welcome! Let me know if you need further assistance."
            };
    
            // Handle sending messages
            function sendMessage() {
                const userInput = document.getElementById("userInput").value.trim();
                if (userInput === "") return;
    
                // Display the user's message
                appendMessage(userInput, "user");
    
                // Generate a response from the bot
                const botReply = getBotResponse(userInput.toLowerCase());
                setTimeout(() => {
                    appendMessage(botReply, "bot");
                }, 1000); // Simulate typing delay
    
                // Clear the input field
                document.getElementById("userInput").value = "";
            }
    
            // Get bot response based on user input
            function getBotResponse(input) {
                for (let key in botResponses) {
                    if (input.includes(key)) {
                        return botResponses[key];
                    }
                }
                return "I'm sorry, I didn't understand that. Can you please rephrase your question?";
            }
    
            // Append message to chat
            function appendMessage(message, sender) {
                const chatMessages = document.getElementById("chatMessages");
    
                // Create message element
                const messageDiv = document.createElement("div");
                messageDiv.classList.add("message");
                if (sender === "bot") {
                    messageDiv.innerHTML = `<div class="bot-message">${message}</div>`;
                } else {
                    messageDiv.innerHTML = `<div class="user-message">${message}</div>`;
                }
    
                // Append to chat
                chatMessages.appendChild(messageDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        </script>




<script src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</body>
</html>

