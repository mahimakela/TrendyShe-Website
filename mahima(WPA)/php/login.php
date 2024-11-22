<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>


    <!-- Sign In Form -->
    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="login.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">----------or--------</p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have an account yet?</p>
            <a href="regtry.php">Signup</a>
        </div>
    </div>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    body {
        background-color: #ff4081;
        background: linear-gradient(to right, #e2e2e2, #ff4081);
    }
    .container {
        background: #fff;
        width: 450px;
        padding: 1.5rem;
        margin: 50px auto;
        border-radius: 10px;
        box-shadow: 0 20px 35px rgba(0, 0, 1, 0.9);
    }
    form {
        margin: 0 2rem;
    }
    .form-title {
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center;
        padding: 1.3rem;
        margin-bottom: 0.4rem;
    }
    input {
        color: inherit;
        width: 100%;
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #757575;
        padding-left: 1.5rem;
        font-size: 15px;
    }
    .input-group {
        padding: 1% 0;
        position: relative;
    }
    .input-group i {
        position: absolute;
        color: black;
    }
    input:focus {
        background-color: transparent;
        outline: transparent;
        border-bottom: 2px solid hsl(327, 90%, 28%);
    }
    input::placeholder {
        color: transparent;
    }
    label {
        color: #757575;
        position: relative;
        left: 1.2em;
        top: -1.3em;
        cursor: auto;
        transition: 0.3s ease all;
    }
    input:focus~label, input:not(:placeholder-shown)~label {
        top: -3em;
        color: hsl(327, 90%, 28%);
        font-size: 15px;
    }
    .recover {
        text-align: right;
        font-size: 1rem;
        margin-bottom: 1rem;
    }
    .recover a {
        text-decoration: none;
        color: rgb(125, 125, 235);
    }
    .recover a:hover {
        color: rgb(132, 72, 119);
        text-decoration: underline;
    }
    .btn {
        font-size: 1.1rem;
        padding: 8px 0;
        border-radius: 5px;
        outline: none;
        border: none;
        width: 100%;
        background: rgb(235, 125, 230);
        color: white;
        cursor: pointer;
        transition: 0.9s;
    }
    .btn:hover {
        background: #07001f;
    }
    .or {
        font-size: 1.1rem;
        margin-top: 0.5rem;
        text-align: center;
    }
    .icons {
        text-align: center;
    }
    .icons i {
        color: rgb(125, 125, 235);
        padding: 0.8rem 1.5rem;
        border-radius: 10px;
        font-size: 1.5rem;
        cursor: pointer;
        border: 2px solid #dfe9f5;
        margin: 0 15px;
        transition: 1s;
    }
    .icons i:hover {
        background: #07001f;
        font-size: 1.6rem;
        border: 2px solid rgb(125, 125, 235);
    }
    .links {
        display: flex;
        justify-content: space-around;
        padding: 0 4rem;
        margin-top: 0.9rem;
        font-weight: bold;
    }
    button {
        color: rgb(125, 125, 235);
        border: none;
        background-color: transparent;
        font-size: 1rem;
        font-weight: bold;
    }
    button:hover {
        text-decoration: underline;
        color: rgb(174, 90, 167);
    }
</style>

<script>
    const signUpButton = document.getElementById('signUpButton');
    const signInButton = document.getElementById('signInButton');
    const signInForm = document.getElementById('signIn');
    const signUpForm = document.getElementById('signup');

    signUpButton.addEventListener('click', function (event) {
        event.preventDefault();  // Prevent form submission
        signInForm.style.display = "none";
    });

    signInButton.addEventListener('click', function (event) {
        event.preventDefault();  // Prevent form submission
        signInForm.style.display = "block";
    });
</script>
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = isset($_POST['FirstName']) ? $_POST['FirstName'] : null;
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    // Validate inputs
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Database connection details
    $host = "localhost";
    $user = "mahimakela";
    $pass = "ma@2815@2815";
    $db = "login";

    // Create a database connection
    $conn = new mysqli($host, $user, $pass, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statement to insert data
    $stmt = $conn->prepare("INSERT INTO users (FirstName, lastName, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
        echo "<script>alert('All fields are required.'); window.location.href = 'index.php';</script>";
        exit();
    }
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
</body>
</html>
