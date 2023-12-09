<?php 
    session_start();

    include("config.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        if(!empty($email) && !empty($pass) && !is_numeric($email)) {

            $query = "INSERT INTO users (username, email, password) value ('$username', '$email', '$pass')";

            mysqli_query($conn, $query);

            echo "<script type='text/javascript'> alert('Successfully created')</script>";
        }
        else {
            echo "<script type='text/javascript'> alert('Please fill up the following !')</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200&family=Pixelify+Sans&display=swap" rel="stylesheet">
    <script defer src="login.js"></script>
    <title>QuizTime Register</title>
</head>
<body>
    <div class="container">
        <div id="form">
            <form action="" method="post">
            <div class="singup-form">
                <h1>Register</h1>
                <div id="input-box1">
                    <label for="signup-username" style="font-weight: bold;">Username:</label>
                    <input type="text" name="username" id="signup-username" placeholder="Enter Username" required autocomplete="off" style="font-weight: bold;">
                </div>
                <div class="error" id="usernameError"></div>
                
                <div id="input-box2">
                    <label for="signup-email" style="font-weight: bold;">Email:</label>
                    <input type="text" name="email" id="signup-email" placeholder="Enter Email" required autocomplete="off" style="font-weight: bold;">
                </div>

                <div id="input-box3">
                    <label for="signup-password" style="font-weight: bold;">Password:</label>
                    <input type="password" name="password" id="signup-password" placeholder="Enter Password" required autocomplete="off" style="font-weight: bold;">
                </div>
                
                <div class="error" id="passwordError"></div>

                <button style="font-family: oswald;">Sign Up</button>

                <p>Already have an account? <a href="login.php">Log In.</a></p>
            </div>
            </form>

            <!-- <div class="singup-form">
                <h1>Register</h1>
                <div id="input-box1">
                    <label for="signup-username" style="font-weight: bold;">Username:</label>
                    <input type="text" name="username" id="signup-username" placeholder="Enter Username" required autocomplete="off" style="font-weight: bold;">
                </div>
                <div class="error" id="usernameError"></div>
                
                <div id="input-box2">
                    <label for="signup-email" style="font-weight: bold;">Email:</label>
                    <input type="password" name="email" id="signup-email" placeholder="Enter Email" required autocomplete="off" style="font-weight: bold;">
                </div>

                <div id="input-box3">
                    <label for="signup-password" style="font-weight: bold;">Password:</label>
                    <input type="password" name="password" id="signup-password" placeholder="Enter Password" required autocomplete="off" style="font-weight: bold;">
                </div>
                
                <div class="error" id="passwordError"></div>

                <div id="input-box4">
                    <label for="signup-re-password" style="font-weight: bold;">Re-Enter Password:</label>
                    <input type="password" name="password" id="signup-re-password" placeholder="Re-Enter Password" required autocomplete="off" style="font-weight: bold;">
                </div>

                
                <button onclick="signup()" style="font-family: oswald;">Sign Up</button>

                <p>Already have an account? <a href="login.html">Log In.</a></p>
            </div> -->
        </div>
        <!-- <div id="sideform">
            <div class="box-design">
                <h1>QUIZ TIME</h1>

                <h3>Welcome to <span>QuizTime</span></h3>

                <p>Welcome to QuizTime, your ultimate destination for interactive learning! Dive into a world of knowledge with our dynamic platform that functions much like Quizlet but with a unique twist. Here, learning becomes an engaging adventure.</p>


            </div>
        </div> -->
    </div>
</body>
</html>