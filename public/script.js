

const subsrcibe=document.getElementById("subsribe")

subsrcibe.addEventListener("click",(e)=>{
    e.preventDefault();
    var email=document.getElementById("email").value
    var emailmessage=document.getElementById("email-message")
    var form=document.getElementById("form")

    if(email===""){
        emailmessage.textContent="Please fill out the email field"
        return;
    }
    const emailpattern=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if(!emailpattern.test(email)){
        emailmessage.textContent="Please enter a valid Email Id"
        return
    }
    form.reset();
    emailmessage.textContent="Succesfully Submitted"
    
   setTimeout(()=>{
    emailmessage.textContent=""
   },2000)
})