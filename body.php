 <?php
include "storescripts/connect_to_mysql.php";
$dynamicList = "";
$sql = mysql_query("SELECT * FROM products ORDER BY date_added DESC LIMIT 5");
$productCount = mysql_num_rows($sql);
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){
             $id = $row["id"];
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
			/* $dynamicList .= '<table width="100%" border="0" cellspacing="0" cellpadding="6">
        <tr>
          <td width="17%" valign="top"><a href="product.php?id=' . $id . '"><img style="border:#666 1px solid;" src="inventory_images/' . $id . '.jpg" alt="' . $product_name . '" width="77" height="102" border="1" /></a></td>
          <td width="83%" valign="top">' . $product_name . '<br />
            $' . $price . '<br />
            <a href="product.php?id=' . $id . '">View Product Details</a></td>
        </tr>
      </table>';*/

         $dynamicList .= '<div class="container-fluid">
                          <div class="col_1_of_3 span_1_of_3">
                            <a  href="product.php?id=' . $id . '">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img width="274" height="250" src="inventory_images/' . $id . '.jpg" alt="' . $product_name . '" alt="" />
                                    </div>
                                    <!--div class="sale-box"><span class="on_sale title_shop">New</span></div-->
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">'. $product_name .'</p>
                                            <div class="price1">
                                                <span class="actual">$'. $price .' </span>
                                            </div>
                                        </div>
                                        <div class="cart-right"> </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div>' ;
    }
} else {
	$dynamicList = "We have no products listed in our store yet";
}
mysql_close();
?>

 <div class="main">
        <div class="wrap">
            <div class="section group">
                <!-- <div class="cont span_2_of_3"> -->
                <div class="">
                    <h2 class="head">Featured Products</h2>
                    <div class="top-box">
                        <!-- <div class="col_1_of_3 span_1_of_3">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="images/pic.jpg" alt="" />
                                    </div>
                                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Lorem Ipsum simply</p>
                                            <div class="price1">
                                                <span class="actual">$12.00</span>
                                            </div>
                                        </div>
                                        <div class="cart-right"> </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                        <?php echo $dynamicList; ?>
                        <div class="clear"></div>
                    </div>

                </div>
                <!-- <div class="rsidebar span_1_of_left">
                    <div class="top-border"> </div>
                    <div class="border">
                        <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
                        <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
                        <script src="js/jquery.nivo.slider.js"></script>
                        <script type="text/javascript">
                            $(window).load(function() {
                                $('#slider').nivoSlider();
                            });
                        </script>
                        <div class="slider-wrapper theme-default">
                            <div id="slider" class="nivoSlider">
                                <img src="images/t-img1.jpg" alt="" />
                                <img src="images/t-img2.jpg" alt="" />
                                <img src="images/t-img3.jpg" alt="" />
                            </div>
                        </div>
                        <div class="btn"><a href="single.html">Check it Out</a></div>
                    </div>
                    <div class="top-border"> </div>
                    <div class="sidebar-bottom">
                        <h2 class="m_1">Newsletters<br> Signup</h2>
                        <p class="m_text">Lorem ipsum dolor sit amet, consectetuer</p>
                        <div class="subscribe">
                            <form>
                                <input name="userName" type="text" class="textbox">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div> -->
                <div class="clear"></div>
            </div>
        </div>
    </div>
