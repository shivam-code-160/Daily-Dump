$(document).ready(function() {
    $("#savebtn").on("click", function (e) {
    e.preventDefault();
    $('#myform').children('input').removeAttr('style');
    var is_valid = true;
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var email = $("#email").val();
    var phone = $("#phone-num").val();
    var password = $("#password").val();
    var password2 = $("#password2").val();
    if (fname == "" || fname.match(/^ *$/)) {
        $('#error_fname').addClass('validation-class');
        
        document.getElementById("error_fname").innerHTML = "*Please Enter Valid First Name*";
        is_valid = false;
    }
    if (lname == "" || lname.match(/^ *$/)) {
        $('#error_lname').addClass('validation-class');
        
        document.getElementById("error_lname").innerHTML = "*Please Enter Valid Last Name*";
    
        is_valid = false;
       
    }
    if (email == "" || email.match(/^ *$/)) {
        $('#error_email').addClass('validation-class');
        
        document.getElementById("error_email").innerHTML = "*Please Enter Valid Email*";
    
        is_valid = false;
       
    }
    if (phone == "" || phone.match(/^ *$/)) {
        $('#error_phone').addClass('validation-class');
        
        document.getElementById("error_phone").innerHTML = "*Please Enter Valid Phone*";
    
        is_valid = false;
       
    }
    if (password == "" || password.match(/^ *$/)) {
        $('#password').addClass('validation-class')
        document.getElementById("error_password").innerHTML = "*Please Enter Valid Password*";
        
        is_valid = false;
        
    }
    if (password != password2) {
        $('#password2').addClass('validation-class')
        document.getElementById("error_password2").innerHTML = "*Password not match*";
    }
    
    if (is_valid) {
        $.ajax({
            url: "/basic/Daily_Dump/Blog/Controller/registration.php",
            type: "POST",
            data: {
                fname:fname,
                lname:lname,
                phone:phone,
                email: email,
                password: password
            },
            success: function (data) {
                alert("data");
                document.getElementById("myform").reset();
            }
            
        })
    
    }
})
});