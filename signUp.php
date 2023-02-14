
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
            <form action="#">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="First name" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Last name" />
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control" placeholder="Email" />
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="text" class="form-control" placeholder="Password" />
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="text" class="form-control" placeholder="Confirm Password" />
                    </div>
                    <div class="d-grid text-center">
                    <button type="button" class="btn btn-primary">Sign up</button>
                    <p>When you register by clicking signup button, you agree to our <a href="">Terms and condition</a><a href="">Privacy policy</a></p>
                    <p>Already have an account ? <a href="logIn.php">Log in</a>
                    </p>
                </div>

            </form>
        </div>
</div>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
</body>
<!-- FOOTER -->
<?php include 'includes/footer.php' ?>
</html>