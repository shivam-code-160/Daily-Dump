<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        form {
            height: 300px;
            width: 300px;
            margin: auto;
            margin-top: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 2px solid black;
        }

        input {
            height: 25px;
            width: 179px;
            margin: 5px;
            border: 2px solid black;
            text-align: center;
            font-weight: bold;
        }

        input:hover {
            border: 3px solid #00BFFF;
        }

        button {
            margin: 10px;
            font-weight: bold;
            height: 25px;
            width: 179px;
            border: 2px solid black;
        }

        button:hover {
            border: 2px solid black;
            background-color: #00BFFF;
        }

        h1 {
            margin: 10px;
        }

        .validation-class {
            display: block;
            color: red;
        }
        a{
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <form id="my-form" action="../Controller/login.php" method="post">
        <h1>Blog Login</h1>
        <input type="text" id="email" placeholder="Enter Email" name="email">
        <span id="error_email"></span>
        <input type="password" id="password" placeholder="Enter Password" name="password">
        <span id="error_password"></span>
        <button type="submit" onclick="" id="savebtn">Submit</button>
        <a href="">forgot password?</a>
        <a href="register.php">Don't have an Account. Need one?</a>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    // $(document).ready(function() {
    //     $("#savebtn").on("click", function(e) {
    //         e.preventDefault();
    //         $('#myform').children('input').removeAttr('style');
    //         var is_valid = true;
    //         var email = $("#email").val();
    //         var password = $("#password").val();
    //         var valid = true;
    //         if (email == "" || email.match(/^ *$/)) {
    //             $('#error_email').addClass('validation-class');

    //             document.getElementById("error_email").innerHTML = "*Please Enter Valid First Name*";
    //             is_valid = false;

    //         }
    //         if (password == "" || password.match(/^ *$/)) {
    //             $('#password').addClass('error_email');
    //             document.getElementById("error_password").innerHTML = "*Please Enter Valid Password*";

    //             is_valid = false;

    //         }

    //         if (is_valid) {

    //             document.getElementById("myform").reset();

    //         }
    //     })
    // });
</script>

</html>