const form=document.querySelector('form');
const fullname=document.getElementById("name");
const email=document.getElementById("email");
const phone=document.getElementById("phone");
const subject=document.getElementById("subject");
const massege=document.getElementById("massege");

function sendEmail(){
    const bodyMassege=`Full Name:${fullname.value}<br>Email:${email.value}<br>Phone Numbere:${phone.value}<br>Messege:${massege.value}`;
    Email.send({
    Host : "smtp.elasticemail.com",
    Username : "shubhamyadav19476@gmail.com",
    Password : "CB0DE2308E4CA54F8E845F8CC0EEAA650136",
    To : 'shubhamyadav19476@gmail.com',
    From : "shubhamyadav19476@gmail.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => {
    if(message=="ok"){
        Swal.fire({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success"
});
    }
  }

);
} 


form.addEventListener("submit",(e)=>{
    e.preventDefault();

    sendEmail();
});
