    <?php
        include 'nav.php';
    ?>
    <?php 
        include 'config.php';
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $balance = $_POST['balance'];
            $sql = "insert into `users`(name,email,balance) values('{$name}','{$email}','{$balance}')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your entry has been submitted successfully!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                    "<script> alert('Hurray! User Created');
                            window.location='transfermoney.php';
                    </script>";
              }
              else{
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Error!</strong> We are facing some technical issues and your entry was not submitted successfully! Sorry for the inconvinience cause!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
              }
        }
    ?>
 

    <h2 class="text-center pt-4">Create a User</h2>
    <br>

    <div class="background">
    <div class="container">
        <div class="screen">
            <div class="screen-header">
                <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                </div>
            </div>
            <div class="screen-body">
                <div class="screen-body-item left">
                    <img class="img-fluid" src="img/icon.png" style="border:none; border-radius: 50%;">
                </div>
                <div class="screen-body-item">
                    <form class="app-form" method="post">
                        <div class="app-form-group">
                            <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                        </div>
                        <div class="app-form-group">
                            <input class="app-form-control" placeholder="EMAIl" type="email" name="email" required>
                        </div>
                        <div class="app-form-group">
                            <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                        </div>
                        <div class="app-form-group button">
                            <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                            <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                            <a href="index.php"><input class="app-form-button" type="button" value="BACK" name="back"></input></a>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include('footer.php') ?>
  
  </body>
  </html>