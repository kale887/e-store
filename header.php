<div class="header-top">
        <div class="wrap">
            <div class="cssmenu">
                <ul>
                   
                    <?php 
                    session_start();
                    if(isset($_SESSION['user']))
                    {
                    ?>
                         <li class="active"><a href="#">Hello <?php echo  ucwords($_SESSION["user"]);  ?></a></li>  
                          <li><a href="cart.php">Checkout</a></li> |
                         <li><a href="logout.php">Log Out</a></li>    
                    <?php  } else { ?>
                       <li><a href="login.php">Log In</a></li> |
                       <li><a href="register.html">Sign Up</a></li>
                   <?php } ?>

              

                                   
                    
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="wrap">
            <div class="header-bottom-left">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt="" /></a>
                </div>
                <div class="menu">
                    <ul class="megamenu skyblue">
                        <li class="active grid"><a href="index.php">Home</a></li>
                        <li><a class="color6" href="other.html">Products</a></li>                        
                    </ul>
                </div>
            </div>
            <div class="header-bottom-right">
                <div class="tag-list">
                    <ul class="icon1 sub-icon1 profile_img">
                        <li>
                            <a class="active-icon c2" href="#"> </a>
                            <ul class="sub-icon1 list">
                                <li>
                                    <h3>No Products</h3>
                                    <a href=""></a>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetuer <a href="">adipiscing elit, sed diam</a></p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="last">
                        <li><a href="#">Cart(<?php $cartTotal=0;  echo $cartTotal  ?>)</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>