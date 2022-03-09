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
            height: 450px;
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
            font-weight: bold;
            height: 25px;
            width: 179px;
            border: 2px solid black;
        }
        h1{
            margin-bottom: 10px;
        }
        button:hover {
            border: 2px solid black;
            background-color: #00BFFF;
        }
        .validation-class {
            display: block;
            color: red;
        }
        a{
            margin-top: 15px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <form id="my-form">
        <h1>Blog Registation</h1>
        <input type="text" id="fname" placeholder="Enter Name">
        <span id="error_fname"></span>
        <input type="text" id="lname" placeholder="Enter Last Name">
        <span id="error_lname"></span>
        <input type="text" id="email" placeholder="Enter Email">
        <span id="error_email"></span>
        <input type="text" id="phone-num" placeholder="Enter phone Number">
        <span id="error_phone"></span>
        <input type="password" id="password" placeholder="Enter Password">
        <span id="error_password"></span>
        <input type="password" id="password2" placeholder="Re Enter Password"><br>
        <span id="error_password2"></span>
        <button type="submit" id="savebtn">Submit</button>
        <a href="login.php">Already have an Account?</a>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="../Controller/register_auth.js">
</script>
</html>