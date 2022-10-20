<!DOCTYPE html>
<html>
        <head>
                <link rel="stylesheet" type="text/css" href="CSS/login.css">
                <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
                <style>
                body  {
                  background-image: url("images/img5.jpg");
                }
                </style>
         </head>
    <body>
    <?php
    session_start();
            if (isset($_SESSION['ss'])) { ?>
            <div>
                <?php 
                    $mymessage = $_SESSION['ss'];
                    echo "<script type='text/javascript'>alert('$mymessage');</script>";
                    unset($_SESSION['ss']);
                ?>
            </div>
        <?php } ?>
        <div class="bgimg">
            <div class="centerdiv">
                <img src="images/img2.jpg" id="profilepic" height="120px" width="120px">
                <h2>Update Password</h2>
                <form method="post" action="update.php">
                    <div>
                        <input type="text" name="email" class="inputbox" placeholder="Email" required>
                    </div>
                    <br>
                    <div>
                        <input type="password" name="password" class="inputbox" placeholder="password" required>
                    </div>
                    <br>
                    <div>
                        <input type="password" name="new_password" class="inputbox" placeholder="Conform Password" required>
                    </div>
                    <br>
                    <div>
                        <button type="Submit" name="pupdate">Update</button>
                    </div>
                </form>
               
            </div>

        </div>
        
    </body>
</html>
