

const subsrcibe=document.getElementById("subsribe")

subsrcibe.addEventListener("click",(Event)=>{
    Event.preventDefault();
    var email=document.getElementById("email").value
    var emailmessage=document.getElementById("email-message")

    if(email===""){
        emailmessage.textContent="Please fill out the email field"
        return;
    }
    const emailpattern=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if(!emailpattern.test(email)){
        emailmessage.textContent="Please enter a valid Email Id"
        return
    }
    emailmessage.textContent="Succesfully Submitted"
    form.reset();
   
   


})