<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza and Pasta Ordering System</title>
    <link rel="stylesheet" href="CSS/PPOS.css">
</head>
<body>
  <div class="box">
        <form action="include/menu.inc.php" action="../customer.php" method="post">
             <div class="banner">
                <h1>Menu</h1>
            </div>       
            <div class="item">
              <br>   
                <h3>Pizza</h3>
                <hr><hr>  
              <div class="menu-box">   
                <table width="90%" style="margin-left: auto; margin-right: auto;">
                  <tr>
                    <td>
                      <img src="img/cheese.gif" title="Cheese Pizza">
                    </td>
                    <td>
                    <h3>Cheese Pizza</h3>
                      <h2>Price</h2>
                      <p> Regular: Php 100<br></p>
                      <p> Medium: Php 200<br></p>
                      <p> Large: Php 300<br></p>
                      <hr>
                      <p><i>...topped with tomato sauce, mozzarella, gorgonzola, Parmigiano Reggiano, and goat cheese...</i></p>
                    </td>
                  </tr>
                </table>
                 <input type="number" name="cheese_quantity" min="0" value="0">
                 <select name="cheese_option">
                     <option value="none" >none</option>
                     <option value="Regular" >Regular</option>
                     <option value="Medium" >Medium</option>
                     <option value="Large" >Large</option>
                 </select>
              </div>

              <div class="menu-box">
                <table width="90%" style="margin-left: auto; margin-right: auto;">
                    <tr>
                      <td>
                        <img src="img/hawaiian.gif" title="Hawaiian Pizza"> 
                      </td>
                      <td>
                      <h3>Hawaiian Pizza</h3>
                        <h2>Price</h2>
                        <p> Regular: Php 100<br></p>
                        <p> Medium: Php 200<br></p>
                        <p> Large: Php 300<br></p>
                        <hr>
                        <p><i>...combines pizza sauce, cheese, cooked ham, and pineapple with a sprinkle of crispy bacon...</i></p>
                      </td>
                    </tr>
                  </table>           
                  <input type="number" name="hawaiian_quantity" min="0" value="0">
                  <select name="hawaiian_option">
                      <option value="none" >none</option>
                      <option value="Regular" >Regular</option>
                      <option value="Medium" >Medium</option>
                      <option value="Large" >Large</option>
                  </select>
              </div>

              <div class="menu-box">
                <table width="90%" style="margin-left: auto; margin-right: auto;">
                    <tr>
                      <td>
                        <img src="img/detroit.gif" title="Detroit Pizza"> 
                      </td>
                      <td>
                      <h3>Detroit Pizza</h3>
                        <h2>Price</h2>
                        <p> Regular: Php 100<br></p>
                        <p> Medium: Php 200<br></p>
                        <p> Large: Php 300<br></p>
                        <hr>
                        <p><i>...rectangular pizza with a crispy and chewy thick crust, tomato sauce, and Wisconsin brick cheese on top...</i></p>
                      </td>
                    </tr>
                  </table>                   
                 <input type="number" name="detriot_quantity" min="0" value="0">
                 <select name="detriot_option">
                     <option value="none" >none</option>
                     <option value="Regular" >Regular</option>
                     <option value="Medium" >Medium</option>
                     <option value="Large" >Large</option>
                 </select>
              </div>

              <div class="menu-box">
                <table width="90%" style="margin-left: auto; margin-right: auto;">
                    <tr>
                      <td>
                        <img src="img/chicago.gif" title="Chicago Pizza"> 
                      </td>
                      <td>
                      <h3>Chicago Pizza</h3>
                        <h2>Price</h2>
                        <p> Regular: Php 100<br></p>
                        <p> Medium: Php 200<br></p>
                        <p> Large: Php 300<br></p>
                        <hr>
                        <p><i>...thick pizza baked in a pan with cheese, meat and vegetable fillings, and sauce–in-a-pan...</i></p>
                      </td>
                    </tr>
                  </table>  
                 <input type="number" name="chicago_quantity" min="0" value="0">
                 <select name="chicago_option">
                     <option value="none" >none</option>
                     <option value="Regular" >Regular</option>
                     <option value="Medium" >Medium</option>
                     <option value="Large" >Large</option>
                 </select>
              </div>
              <br>
              <h3>Pasta</h3>
                <hr><hr>
              <div class="menu-box">
                <table width="90%" style="margin-left: auto; margin-right: auto;">
                    <tr>
                      <td>
                        <img src="img/carbonara.gif" title="Carbonara">
                      </td>
                      <td>
                      <h3>Carbonara Pasta</h3>
                      <h2>Price</h2>
                      <p> Barkada size: Php 200</p>
                      <p> Family size: Php 300</p>
                        <hr>
                        <p><i>...Italian-made pasta with cream, eggs, Parmesan cheese, small pieces of bacon, and vegetables, such as peas....</i></p>
                      </td>
                    </tr>
                  </table>                  
                 <input type="number" name="carbonara_quantity" min="0" value="0">
                 <select name="carbonara_option" >
                      <option value="none" >none</option>
                      <option value="Barkada size" >Barkada size</option>
                      <option value="Family size" >Family size</option>
                  </select>
              </div>

              <div class="menu-box">
                <table width="90%" style="margin-left: auto; margin-right: auto;">
                    <tr>
                      <td>
                        <img src="img/macaroni.gif" title="Macaroni">
                      </td>
                      <td>
                        <h3>Macaroni Pasta</h3>
                        <h2>Price</h2>
                        <p> Barkada size: Php 200</p>
                        <p> Family size: Php 300</p>
                          <hr>
                        <p><i>...tasty and creamy cheese cand flavor macaroni pasta with sweet tomato sauce...</i></p>
                      </td>
                    </tr>
                  </table>          
                 <input type="number" name="macaroni_quantity" min="0" value="0">
                 <select name="macaroni_option" >
                      <option value="none" >none</option>
                      <option value="Barkada size" >Barkada size</option>
                      <option value="Family size" >Family size</option>
                  </select>
              </div>

              <div class="menu-box">
                <table width="90%" style="margin-left: auto; margin-right: auto;">
                    <tr>
                      <td>
                         <img src="img/spaghetti.gif" title="Spaghetti">
                      </td>
                      <td>
                          <h3>Spaghetti Pasta</h3>
                          <h2>Price</h2>
                          <p> Barkada size: Php 200</p>
                          <p> Family size: Php 300</p>
                          <hr>
                        <p><i>...italian cuisine made with milled wheat and water that is vitamin and mineral fortified....</i></p>
                      </td>
                    </tr>
                  </table>          
                 <input type="number" name="spaghetti_quantity" min="0" value="0">
                 <select name="spaghetti_option" >
                      <option value="none" >none</option>
                      <option value="Barkada size" >Barkada size</option>
                      <option value="Family size" >Family size</option>
                  </select>
              </div>

              <div class="menu-box">
                <table width="90%" style="margin-left: auto; margin-right: auto;">
                    <tr>
                      <td>
                        <img src="img/linguine.gif" title="Linguine">
                      </td>
                      <td>
                          <h3>Linguine Pasta</h3>
                          <h2>Price</h2>
                          <p> Barkada size: Php 200</p>
                          <p> Family size: Php 300</p>
                          <hr>
                        <p><i>...savor the traditional soups and hot meals Pesto goes well with linguine....</i></p>
                      </td>
                    </tr>
                  </table> 
                 <input type="number" name="linguine_quantity" min="0" value="0">
                 <select name="linguine_option" >
                      <option value="none" >none</option>
                      <option value="Barkada size" >Barkada size</option>
                      <option value="Family size" >Family size</option>
                  </select>
              </div>
              <h3>Drinks</h3>
                <hr><hr>
              <div class="menu-box">
                <table width="90%" style="margin-left: auto; margin-right: auto;">
                    <tr>
                      <td>
                        <img src="img/drink.gif">
                      </td>
                      <td>
                          <h3>Coca Cola</h3>
                          <h3>LSprite</h3>
                          <h2>Price</h2>
                          <p> 1 liter: Php 75</p>
                    </tr>
                  </table> 
                <select name="drink_option" >
                    <option value="none_drink" >none</option>
                    <option value="cola" >Coca Cola</option>
                    <option value="sprite" >Sprite</option>
                </select>
              </div>
              <div class="btn-block">
                <button type="submit" name="menu_next_btn">Next</button>
                <button type="submit" name="menu_next_cancel">Cancel</button>
              </div>       
        </form>
  </div>
</body>
</html>
