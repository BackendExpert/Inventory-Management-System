<?php include("lib/layouts/header.php"); ?>
<link rel="stylesheet" href="css/app.min.css">
<section class="home-first">
    <div class="site-container">
        <div class="home-content">
            <h1 class="jk-display-3" style="color: white;"><b>Welcome to Our Site</b></h1>
            <button class="jkbtn jkbtn-blue-outline" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login As a Member</button>
        
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Login As a Member</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <label>Username : </label>
                            <input type="text" name="username" id="" class="form-control"><br>

                            <label>Password : </label>
                            <input type="password" name="password" id="" class="form-control"><br>

                                                  
                    </div>
                        <div class="modal-footer">
                            <input type="submit" value="Login" class="jkbtn jkbtn-blue" name="login" style="width: 100%;"> 
                        </div>
                    </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="js/script.js"></script>