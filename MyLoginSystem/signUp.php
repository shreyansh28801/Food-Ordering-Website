<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }

}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="../images/awesome.webp" type="image/jpeg">   

    <title>SignUp</title>
</head>

<body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4">
        <h1 class="text-center">Signup to our website</h1>
        <form action="/project-ITW2/MyFoodWebsite/MyLoginSystem/signUp.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="bt20@gmail.com">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="email">Confirm Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="bt20@gmail.com">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="password1" value="#421@43">
            </div>
            <div class="form-group">
                <label for="pass"> Confirm Password</label>
                <input type="password" class="form-control" id="pass" name="password1" value="#421@43">
            </div>
            <br>
            <br>
            <h2>Educational Details</h2>
            <label for="abz">Enter Class</label>
            <input type="text" id="abz"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

            <label for="abc">Choose Target Exam</label>
            <select name="education">
                <option value="JEE">JEE</option>
                <option value="10-board">Class-10 Board Exam</option>
                <option value="12-board">Class-12 Board Exam</option>
                <option value="SSC">SSC</option>
                <option value="UPSC">UPSC</option>
                <option value="jeem">JEE main</option>
                <option value="jeeadv">JEE Advanced</option>
                <option value="other">other</option>
            </select>
            <br />
            <br />
            <label for="abz">Enter Institution</label>
            <input type="text" id="abz"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

            <label for="abz">Enter Percentage</label>
            <input type="number" id="abz" max="100"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br>
            <br>
            <br>

            <h2>Feedback/Suggestions</h2>
            <b> How did you come to know about our website/courses?</b> <br /> <br />&emsp; &emsp;
            <input type="checkbox" name="newspaper" value="newspaper">Newspaper &emsp;
            <input type="checkbox" name="radio" value="newspaper">Radio &emsp;
            <input type="checkbox" name="TV" value="TV">Television &emsp;
            <input type="checkbox" name="other" value="other">other <br />
            <br />
            <b>Any Suggestions/ Queries</b> <br />
            <img src="suggestion.jpg" width="200px" height="100px">
            <textarea name="sugg" rows="10" cols="40"></textarea>
            <hr />
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>

            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>