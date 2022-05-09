
<nav class="navbar navbar-expand-lg  bg-primary">
        <div class="container">
                <a href="index.php" class="navbar-brand text-light"><b>Alka Agency </b></a>
                <form action="index.php" class="d-flex input-group w-25">
                        <input type="search" name="search" class="form-control "> 
                        <a href="" class="btn btn-light" name="find" ><b class="text-info text-bolder"><i class="bi bi-search"></b></i></a>
                </form>
         <ul class="navbar-nav">
             <li  class="nav-item"><a href="index.php" class="nav-link text-warning"><b>Home</b></a></li>
             <li  class="nav-item"><a href="about.php" class="nav-link text-light">About</a></li>

             <?php if(isset($_SESSION['user'])){ ?>
                <li  class="nav-item"><a href=" logout.php" class="nav-link text-light">Logout</a></li>
                <li  class="nav-item"><a href="login.php" class="nav-link text-info"><b>
                        <?php 
                                $log = $_SESSION['user'];
                                $data = callingData("users where email='$log' OR contact='$log'");
                                echo $fullname = $data[0]['fullname'];
                                        
                        ?>
                </b></a></li>
                <li  class="nav-item"><a href="insert.php" class="nav-link text-light">Insert</a></li>


             <?php } else { ?>
                <li  class="nav-item"><a href="login.php" class="nav-link text-light">Login</a></li>
                <li  class="nav-item"><a href="signup.php" class="nav-link text-light">Signup</a></li>

            <?php } ?>
            
             <li  class="nav-item"> <a href='cart.php' class="btn btn-info btn-sm mt-2 position-relative">
                <i class="bi bi-cart"></i> <b>Cart</b>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        7
                        </span>
                                </a>
             </li>

             </ul>
          </div>
</nav>

</nav>