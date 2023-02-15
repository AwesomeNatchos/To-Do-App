<?php

if(isset($_POST['signUp'])){
    $validation=[];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];

    // FIRST NAME EMPTY FIELD VALIDATION
    if(!isset($_POST['firstName']) || $_POST['firstName'] === ''){
        $validation['firstName'] = 'Please fill in the first name';
        echo 'Please fill in the first name';
    } else{
        $firstName = $_POST['firstName'];

        // LAST NAME EMPTY FIELD VALIDATION
        if(!isset($_POST['lastName']) || $_POST['lastName'] === ''){
            $validation['lastName'] = 'Please fill in the last name';
            echo 'Please fill in the last name';
        } else{
            $lastName = $_POST['lastName'];

            // EMAIL EMPTY FIELD VALIDATION
            if(!isset($_POST['email']) || $_POST['email'] === ''){
                $validation['email'] = 'Please fill in the email';
                echo "Please fill in email";
            }else{
                $email = $_POST['email'];

                // PASSWORD EMPTY FIELD VALIDATION
                if(!isset($_POST['password']) || $_POST['password'] === ''){
                    $validation['password'] = 'Please fill in the password';
                    echo 'Please fill in the password';
                } else{
                    $password = $_POST['password'];

                    // PASSWORD CONFIRM EMPTY FIELD VALIDATION
                    if(!isset($_POST['passwordConfirm']) || $_POST['passwordConfirm'] === ''){
                        $validation['passwordConfirm'] = 'Please fill in the password confirm field';
                        echo 'Please fill in the password confirm field';
                    } else{
                        $passwordConfirm = $_POST['passwordConfirm'];
                        
                        // PASSWORD === CONFIRM VALIDATION
        
                        if($password === $passwordConfirm){
                            $passwordHash;
                            echo ('Password confirmed!');
                            //  ALL VARIABLE VALIDATION ARE OK






                            
                            // ---------- START SQL INJECTION/USER IN BD VALIDATION FROM HERE ----------
                            








                        } else {
                            echo "The two given passwords do not match!";

                        }    
                    }  
                }
            }
        }
    }
} else {
    echo 'Something went wrong';
    echo "change";
}
?>

<!-- HEAD -->
<?php include 'includes/head.php'; ?>



<!-- NAV BAR   -->
<?php include 'includes/nav.php'; ?>

<body class="bg-warning">
<div class="container-lg  ">
    <div class="row mt-5   ">
        <div class="col-lg-4 w-100 bg-light rounded-top  ">
            <h1 class="text-center pt-3 ">Sign up now</h1>
            <p class="text-center text-muted lead">Its a free process</p>
            <form action="signUp.php" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input name="firstName" type="text" class="form-control" placeholder="First name" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input name="lastName" type="text" class="form-control" placeholder="Last name" />
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input name="email" type="text" class="form-control" placeholder="Email" />
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input name="password" type="password" class="form-control" placeholder="Password" />
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input name="passwordConfirm" type="password" class="form-control" placeholder="Confirm Password" />
                    </div>
                    <div class="d-grid text-center">
                    <button name="signUp" id="signUp" type="submit" class="btn btn-primary">Sign up</button>
                    <p>When you register by clicking signup button, you agree to our <a href="">Terms and condition</a><a href="">Privacy policy</a></p>
                    <p>Already have an account ? <a href="logIn.php">Log in</a>
                    </p>
                </div>

            </form>
        </div>
</div>


    

<!-- FOOTER -->
<?php include 'includes/footer.php' ?>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>