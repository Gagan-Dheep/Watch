
// NEWSLETTER
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

// CONTACT FORM
    var submitbtn = document.getElementById("submitbtn");
    submitbtn.addEventListener("click", function (e) {
        e.preventDefault();
        var form = document.getElementById("form");
        var popmessage = document.getElementById("pop-message");

        var name = document.getElementById("name").value.trim();
        var email = document.getElementById("email").value.trim();
        var phone = document.getElementById("phone").value.trim();
        var comment = document.getElementById("comment").value.trim();

        console.log(name)

        var emailpattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var phonepattern = /^\+{0,2}(\-|\.|\s)?(\(?\d{0,3}\))?(\-|\.|\s)?\d{3}(\-|\.|\s)?\d{4}$/g;

        // if (name === "" || email === "" || phone === "") {
        //     popmessage.textContent = "Please fill out all fields";
        //     return;
        // }

        // if (!emailpattern.test(email)) {
        //     popmessage.textContent = "Please enter a valid email address";
        //     return;
        // }

        // if (!phonepattern.test(phone)) {
        //     popmessage.textContent = "Please enter a valid phone number";
        //     return;
        // }

        form.reset();
        popmessage.textContent = "Submitted successfully!";

        setTimeout(function () {
    
            popmessage.textContent = "";
        }, 3000);
    });
