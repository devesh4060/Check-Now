//navbar js

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


// new image slider 


let slideIndex = 0;
        const slides = document.querySelectorAll('.main-box-slide');
        const dots = document.querySelectorAll('.dot-button');
        const prevButton = document.querySelector('.prev-button');
        const nextButton = document.querySelector('.next-button');

        function showSlides() {
            slides.forEach((slide, index) => {
                slide.style.transform = `translateX(-${slideIndex * 100}%)`;
            });
            dots.forEach((dot, index) => {
                dot.className = dot.className.replace(' active', '');
                if (index === slideIndex) {
                    dot.className += ' active';
                }
            });
        }

        function plusSlides(n) {
            slideIndex = (slideIndex + n + slides.length) % slides.length;
            showSlides();
        }

        function autoSlide() {
            slideIndex = (slideIndex + 1) % slides.length;
            showSlides();
        }

        prevButton.addEventListener('click', () => plusSlides(-1));
        nextButton.addEventListener('click', () => plusSlides(1));

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                slideIndex = index;
                showSlides();
            });
        });

        let slideInterval = setInterval(autoSlide, 5000);

        document.querySelector('.slider-image').addEventListener('mouseover', () => {
            clearInterval(slideInterval);
        });

        document.querySelector('.slider-image').addEventListener('mouseout', () => {
            slideInterval = setInterval(autoSlide, 5000);
        });

        showSlides();

//BOOK AN APPOINTMENT

document.getElementById('book-an-appointment-myForm').addEventListener('submit', function(event) {
    const name = document.getElementById('book-an-appointment-name').value;
    const mobile = document.getElementById('book-an-appointment-mobil').value;
    const age = document.getElementById('book-an-appointment-age').value;
    const address = document.getElementById('book-an-appointment-address').value;

    if (!name || !mobile || !age || !address) {
        event.preventDefault(); // Prevent form from submitting
        alert('Please fill out all fields before submitting.');
    }
});



// chatbot js file

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
