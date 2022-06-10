<?php
    include_once "header.php";
?>

        <form action="include/about.inc.php" method="post">
            <div class="banner">
                <h1>Receipt</h1>
            </div>
            <br>
            <table width="90%" style="border: solid;  margin-left: auto; margin-right: auto;">
                <tr>
                    <td>
                        <h2>Receipt number:</h2>
                        <hr>
                    </td>
                    <td colspan="2">
                        <h2><?php session_start(); echo $_SESSION['last_reciept_id'];?></h2>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>
                        <h2>Product</h2>
                    </th>
                    <th>
                        <h2>Quantity</h2>
                    </th>
                    <th>
                        <h2>Price/Quantity</h2>
                    </th>
                </tr>
                </tr>
                <tr>
                    <td>
                        <!--code of all order here-->
                        <?php
                               if($_SESSION['cheese_qty'] != 0){
                                        echo('Cheese Pizza');
                                    if($_SESSION['cheese'] == 'Regular'){
                                        echo('  (Regular)');
                                        echo '<br>';
                                    }
                                    if($_SESSION['cheese'] == 'Medium'){
                                        echo('  (Medium)');
                                        echo '<br>';
                                    }
                                    if($_SESSION['cheese'] == 'Large'){
                                        echo('  (Large)');
                                        echo '<br>';
                                    }

                                }
                                if($_SESSION['hawaiian_qty'] != 0){
                                        echo('Hawaiian Pizza');
                                    if($_SESSION['hawaiian'] == 'Regular'){
                                        echo('  (Regular)');
                                        echo '<br>';
                                    }
                                    if($_SESSION['hawaiian'] == 'Medium'){
                                        echo('  (Medium)');
                                        echo '<br>';
                                    }
                                    if($_SESSION['hawaiian'] == 'Large'){
                                        echo('  (Large)');
                                        echo '<br>';
                                    }
                                }
                                if($_SESSION['detriot_qty']!= 0){
                                        echo('Detriot Pizza');
                                    if($_SESSION['detriot'] == 'Regular'){
                                        echo('  (Regular)');
                                        echo '<br>';
                                    }
                                    if($_SESSION['detriot'] == 'Medium'){
                                        echo('  (Medium)');
                                        echo '<br>';
                                    }
                                    if($_SESSION['detriot'] == 'Large'){
                                        echo('  (Large)');
                                        echo '<br>';
                                    }
                                }
                               if($_SESSION['chicago_qty'] != 0){
                                         echo('Chicago Pizza');
                                    if($_SESSION['chicago'] == 'Regular'){
                                        echo('  (Regular)');
                                        echo '<br>';
                                    }
                                    if($_SESSION['chicago'] == 'Medium'){
                                        echo('  (Medium)');
                                        echo '<br>';
                                    }
                                    if($_SESSION['chicago'] == 'Large'){
                                        echo('  (Large)');
                                        echo '<br>';
                                    }
                                }
                               if($_SESSION['carbonara_qty'] != 0){
                                        echo('Carbonara');
                                    if($_SESSION['carbonara'] == 'Barkada size'){
                                        echo('  (Barkada size)');
                                        echo '<br>';
                                    }
                                    if($_SESSION['carbonara'] == 'Family size'){
                                        echo('  (Family size)');
                                        echo '<br>';
                                    }
                                }
                               if($_SESSION['macaroni_qty'] != 0){
                                        echo('Macaroni');
                                    if($_SESSION['macaroni'] == 'Barkada size'){
                                        echo('  (Barkada size)');
                                        echo '<br>';
                                    }
                                    if($_SESSION['macaroni'] == 'Family size'){
                                        echo('  (Family size)');
                                        echo '<br>';
                                    }

                               }
                               if($_SESSION['spaghetti_qty'] != 0){
                                        echo('Spaghetti');
                                    if($_SESSION['spaghetti'] == 'Barkada size'){
                                        echo('  (Barkada size)');
                                        echo '<br>';
                                    }
                                    if($_SESSION['spaghetti'] == 'Family size'){
                                        echo('  (Family size)');
                                        echo '<br>';
                                    }
                               }
                               if($_SESSION['linguine_qty'] != 0){
                                        echo('Linguine');
                                    if($_SESSION['linguine'] == 'Barkada size'){
                                        echo('  (Barkada size)');
                                        echo '<br>';
                                    }
                                    if($_SESSION['linguine'] == 'Family size'){
                                        echo('  (Family size)');
                                        echo '<br>';
                                    }
                               }
                               if($_SESSION['drink'] != 'none'){
                                    if($_SESSION['drink'] == 'cola'){
                                        echo ('Coca cola');
                                        echo "<br>";
                                    }
                                    if($_SESSION['drink'] == 'sprite'){
                                        echo ('Sprite');
                                        echo "<br>";
                                    }
                               }

                        ?>
                    </td>
                    <td style="text-align: center;">
                        <!--code of all item here-->
                        <?php 
                                if($_SESSION['cheese_qty'] != 0){
                                        echo $_SESSION['cheese_qty'];
                                        echo '<br>';
                                }
                                if($_SESSION['hawaiian_qty'] != 0){
                                        echo $_SESSION['hawaiian_qty'];
                                        echo '<br>';
                                }
                                if($_SESSION['detriot_qty']!= 0){
                                        echo $_SESSION['detriot_qty'];
                                        echo '<br>';
                                }
                               if($_SESSION['chicago_qty'] != 0){
                                         echo $_SESSION['chicago_qty'];
                                         echo '<br>';
                                }
                               if($_SESSION['carbonara_qty'] != 0){
                                        echo $_SESSION['carbonara_qty'];
                                        echo '<br>';
                                }
                               if($_SESSION['macaroni_qty'] != 0){
                                        echo $_SESSION['macaroni_qty'];
                                        echo '<br>';
                               }
                               if($_SESSION['spaghetti_qty'] != 0){
                                        echo $_SESSION['spaghetti_qty'];
                                        echo '<br>';
                               }
                               if($_SESSION['linguine_qty'] != 0){
                                        echo $_SESSION['linguine_qty'];
                                        echo '<br>';
                               }
                               if($_SESSION['drink'] != 'none_drink' ){
                                    if(($_SESSION['drink'] == 'cola')||($_SESSION['drink'] == 'sprite')){
                                        $_SESSION['drink_qty'] = 1;
                                        echo $_SESSION['drink_qty'];
                                    }
                               }
                        ?>
                    </td>

                    <td style="text-align: center;">
                         <!--code of all price/order here-->
                         <?php

                                $_SESSION['total_fam_linguine'] = 0;
                                $_SESSION['total_bar_linguine'] = 0;
                                $_SESSION['total_fam_spaghetti']= 0;
                                $_SESSION['total_bar_spaghetti']= 0;
                                $_SESSION['total_fam_macaroni']= 0;
                                $_SESSION['total_bar_macaroni']= 0;
                                $_SESSION['total_bar_carbonara']= 0;
                                $_SESSION['total_fam_carbonara']= 0;
                                $_SESSION['total_lar_chicago']= 0;
                                $_SESSION['total_med_chicago']= 0;
                                $_SESSION['total_reg_chicago']= 0;
                                $_SESSION['total_lar_detriot']= 0;
                                $_SESSION['total_med_detriot']= 0;
                                $_SESSION['total_reg_detriot']= 0;
                                $_SESSION['total_lar_hawaiian']= 0;
                                $_SESSION['total_med_hawaiian']= 0;
                                $_SESSION['total_reg_hawaiian']= 0;
                                $_SESSION['total_lar_cheese']= 0;
                                $_SESSION['total_reg_cheese']= 0;
                                $_SESSION['total_med_cheese']= 0;
                                $_SESSION['total_drk_price'] = 0;

                                if($_SESSION['cheese_qty'] != 0){
                                    if($_SESSION['cheese'] == 'Regular'){
                                        echo 'Php '. $_SESSION['total_reg_cheese'] = 100 * $_SESSION['cheese_qty'];
                                        echo '<br>';
                                    }
                                    if($_SESSION['cheese'] == 'Medium'){
                                        echo 'Php '. $_SESSION['total_med_cheese'] = 200  * $_SESSION['cheese_qty'];
                                        echo '<br>';
                                    }
                                    if($_SESSION['cheese'] == 'Large'){
                                        echo 'Php '. $_SESSION['total_lar_cheese'] = 300  * $_SESSION['cheese_qty'];
                                        echo '<br>';
                                    }
                                }
                                if($_SESSION['hawaiian_qty'] != 0){
                                    if($_SESSION['hawaiian'] == 'Regular'){
                                        echo 'Php '. $_SESSION['total_reg_hawaiian'] = 100 * $_SESSION['hawaiian_qty'];
                                        echo '<br>';
                                    }
                                    if($_SESSION['hawaiian'] == 'Medium'){
                                        echo 'Php '. $_SESSION['total_med_hawaiian'] = 200  * $_SESSION['hawaiian_qty'];
                                        echo '<br>';
                                    }
                                    if($_SESSION['hawaiian'] == 'Large'){
                                        echo 'Php '. $_SESSION['total_lar_hawaiian'] = 300  * $_SESSION['hawaiian_qty'];
                                        echo '<br>';
                                    }
                                }
                                if($_SESSION['detriot_qty']!= 0){
                                    if($_SESSION['detriot'] == 'Regular'){
                                        echo 'Php '. $_SESSION['total_reg_detriot'] = 100 * $_SESSION['detriot_qty'];
                                        echo '<br>';
                                    }
                                    if($_SESSION['detriot'] == 'Medium'){
                                        echo 'Php '. $_SESSION['total_med_detriot'] = 200  * $_SESSION['detriot_qty'];
                                        echo '<br>';
                                    }
                                    if($_SESSION['detriot'] == 'Large'){
                                        echo 'Php '. $_SESSION['total_lar_detriot'] = 300 * $_SESSION['detriot_qty'];
                                        echo '<br>';
                                    }
                                }
                               if($_SESSION['chicago_qty'] != 0){
                                    if($_SESSION['chicago'] == 'Regular'){
                                        echo 'Php '. $_SESSION['total_reg_chicago'] = 100  * $_SESSION['chicago_qty'];
                                        echo '<br>';
                                    }
                                    if($_SESSION['chicago'] == 'Medium'){
                                        echo 'Php '. $_SESSION['total_med_chicago'] = 200  * $_SESSION['chicago_qty'];
                                        echo '<br>';
                                    }
                                    if($_SESSION['chicago'] == 'Large'){
                                        echo 'Php '. $_SESSION['total_lar_chicago'] = 300 * $_SESSION['chicago_qty'];
                                        echo '<br>';
                                    }
                                }
                               if($_SESSION['carbonara_qty'] != 0){
                                    if($_SESSION['carbonara'] == 'Barkada size'){
                                        echo 'Php '. $_SESSION['total_bar_carbonara'] = 200  * $_SESSION['carbonara_qty'];
                                        echo '<br>';
                                    }
                                    if($_SESSION['carbonara'] == 'Family size'){
                                        echo 'Php '. $_SESSION['total_fam_carbonara'] = 300  * $_SESSION['carbonara_qty'];
                                        echo '<br>';
                                    }
                                }
                               if($_SESSION['macaroni_qty'] != 0){
                                    if($_SESSION['macaroni'] == 'Barkada size'){
                                        echo 'Php '. $_SESSION['total_bar_macaroni'] = 200  * $_SESSION['macaroni_qty'];
                                        echo '<br>';
                                    }
                                    if($_SESSION['macaroni'] == 'Family size'){
                                        echo 'Php '. $_SESSION['total_fam_macaroni'] = 300  * $_SESSION['macaroni_qty'];
                                        echo '<br>';
                                    }

                               }
                               if($_SESSION['spaghetti_qty'] != 0){
                                    if($_SESSION['spaghetti'] == 'Barkada size'){
                                        echo 'Php '. $_SESSION['total_bar_spaghetti'] = 200  * $_SESSION['spaghetti_qty'];
                                        echo '<br>';
                                    }
                                    if($_SESSION['spaghetti'] == 'Family size'){
                                        echo 'Php '. $_SESSION['total_fam_spaghetti'] = 300  * $_SESSION['spaghetti_qty'];
                                        echo '<br>';
                                    }
                               }
                               if($_SESSION['linguine_qty'] != 0){
                                    if($_SESSION['linguine'] == 'Barkada size'){
                                        echo 'Php '. $_SESSION['total_bar_linguine'] = 200  * $_SESSION['linguine_qty'];
                                        echo '<br>';
                                    }
                                    if($_SESSION['linguine'] == 'Family size'){
                                        echo 'Php '. $_SESSION['total_fam_linguine'] = 300  * $_SESSION['linguine_qty'];
                                        echo '<br>';
                                    }
                               }
                                if($_SESSION['drink'] != 'none_drink'){
                                     echo 'Php '. $_SESSION['total_drk_price'] = 75 * $_SESSION['drink_qty'];
                                     echo '<br>';
                                }
                               
                         ?>
                         
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                        <h2>Total Price = Php
                            <?php echo $_SESSION['total_payment'] =$_SESSION['total_drk_price']+$_SESSION['total_fam_linguine']+$_SESSION['total_bar_linguine']+$_SESSION['total_fam_spaghetti']+$_SESSION['total_bar_spaghetti']+$_SESSION['total_fam_macaroni']+$_SESSION['total_bar_macaroni']+$_SESSION['total_bar_carbonara']+$_SESSION['total_fam_carbonara']+$_SESSION['total_lar_chicago']+$_SESSION['total_med_chicago']+$_SESSION['total_reg_chicago']+$_SESSION['total_lar_detriot']+$_SESSION['total_med_detriot']+$_SESSION['total_reg_detriot']+$_SESSION['total_lar_hawaiian']+$_SESSION['total_med_hawaiian']+$_SESSION['total_reg_hawaiian']+$_SESSION['total_lar_cheese']+$_SESSION['total_reg_cheese']+$_SESSION['total_med_cheese'];
                                  echo "<br>";                   
                            ?>
                            Total Quantity: 
                            <?php
                                  echo $_SESSION['quantity_total']; 
                            ?>
                        </h2>
                    </td>
                </tr>
            </table>
            <div class="btn-block">
              <button class="btn" type="submit" name="back">Back↩</button>
            </div>
        </form>
   </div>

</body>
</html>
