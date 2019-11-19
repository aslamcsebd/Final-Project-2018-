<?php 
   include('../include/connection.php');
   include('../include/header.php');
   
   session_start();
      if(!isset($_SESSION['adminLogin'])){
        header("Location: ../index.php");
      }
?>
   <?php if(isset($_SESSION['addPrice'])) { ?>
      <?php echo $_SESSION['addPrice']; ?>             
   <?php } ?>



   <div id="addItem" class="container">

         <div class="row text-center" style="margin-left: 100px;" >
            
            <div class=" addItem col-sm-offset-4 col-sm-3">   
               
               <div style="background-color: #778899;">
                  <h2 style="padding:0px;">List of product</h2>
                  <div class="two_button">
                     <a href="../admin/adminAccount.php" style="padding: 10px 20px;" class="btn btn-filled btn-success ">Back</a>
                     <a class="btn btn-filled btn-info" href="todayUpdate.php">Today's Price List</a>
                  </div>                  
               </div>


               <form action=" " method="POST">
                  <div class="custom-select first">
                     <select name='item' required>
                        <option value="">Select Item</option>
                        <option value="fruit">Fruit</option>                        
                        <option value="vegetable">Vegetable</option>
                        <option value="spices">Spices</option>
                     </select>
                     <button type="submit" tyle="padding:10px 50px;" class="btn btn-filled btn-success">Search</button>
                  </div>
               </form>              

            <form action="confirmItem.php" method="POST">
               <div style="background-color: #B0C4DE; padding: 0px 0px;">
                  <h3 class="text-center" style="margin-top: 10px;">Add today's price</h3>
                  <div class="custom-select">
                     <select name='market' required>
                        <option value="">Select market</option>
                        <option value="agrabad">Agrabad</option>
                        <option value="gec">Gec</option>
                        <option value="new_market">New_Market</option>
                     </select>
                  </div>                 

                  <div class="choseDate">
                     <label>Choose date:</label> 
                     <input type="date" name="date" placeholder="Date" required>
                  </div> 
               </div> 
            </div>
            
         </div>  


      <!-- For fruit item    -->    
     
     <?php if (isset($_POST['item']) && $_POST['item']=='fruit') { ?>

         <div class="row" style="margin-top: 25px;">
             <h2 class="text-center" style="color: #fff;">Fruit item</h2>
            <div class="col-sm-offset-3 col-sm-3">
              
               <table class="table" id="search">
                  <thead>
                     <th>Image</th>
                     <th>Name</th>
                     <th>Enter Price</th>
                  </thead>

                  <tbody align="center">
                     <tr>
                        <td><img src="../img/fruit/apple.png" class="responsive"> </td>
                        <td> <label>Apple</label></td>
                        <td><input type="text" class="form-control" name="apple" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/apricot.png" class="responsive"> </td>
                        <td> <label >Apricot</label></td>
                        <td><input type="text" class="form-control" name="apricot" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/banana.png" class="responsive"> </td>
                        <td> <label >Banana</label></td>
                        <td><input type="text" class="form-control" name="banana" placeholder="12 piece"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/cherries.png" class="responsive"> </td>
                        <td> <label >Cherries</label></td>
                        <td><input type="text" class="form-control" name="cherries" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/coconut.png" class="responsive"> </td>
                        <td> <label >Coconut</label></td>
                        <td><input type="text" class="form-control" name="coconut" placeholder="2 piece"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/grape.png" class="responsive"> </td>
                        <td> <label >Grape</label></td>
                        <td><input type="text" class="form-control" name="grape" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/icon.png" class="responsive"> </td>
                        <td> <label >Icon</label></td>
                        <td><input type="text" class="form-control" name="icon" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/lemon.png" class="responsive"> </td>
                        <td> <label >Lemon</label></td>
                        <td><input type="text" class="form-control" name="lemon" placeholder="4 piece"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/lychee.png" class="responsive"> </td>
                        <td> <label >Lychee</label></td>
                        <td><input type="text" class="form-control" name="lychee" placeholder="100 piece"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/mango.png" class="responsive"> </td>
                        <td> <label >Mango</label></td>
                        <td><input type="text" class="form-control" name="mango" placeholder="tk/kg"> </td>
                     </tr>
                
                     <tr>
                        <td><img src="../img/fruit/melon.png" class="responsive"> </td>
                        <td> <label>Melon</label></td>
                        <td><input type="text" class="form-control" name="melon" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/orange.png" class="responsive"> </td>
                        <td> <label >Orange</label></td>
                        <td><input type="text" class="form-control" name="orange" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/peach.png" class="responsive"> </td>
                        <td> <label >Peach</label></td>
                        <td><input type="text" class="form-control" name="peach" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/pear.png" class="responsive"> </td>
                        <td> <label >Pear</label></td>
                        <td><input type="text" class="form-control" name="pear" placeholder="tk/kg"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/fruit/pineapple.png" class="responsive"> </td>
                        <td> <label >Pineapple</label></td>
                        <td><input type="text" class="form-control" name="pineapple" placeholder="4 piece"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/fruit/plum.png" class="responsive"> </td>
                        <td> <label >Plum</label></td>
                        <td><input type="text" class="form-control" name="plum" placeholder="2 piece"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/fruit/raspberry.png" class="responsive"> </td>
                        <td> <label >Raspberry</label></td>
                        <td><input type="text" class="form-control" name="raspberry" placeholder="tk/kg"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/fruit/strawberry.png" class="responsive"> </td>
                        <td> <label >Strawberry</label></td>
                        <td><input type="text" class="form-control" name="strawberry" placeholder="tk/kg"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/fruit/tangerine.png" class="responsive"> </td>
                        <td> <label >Tangerine</label></td>
                        <td><input type="text" class="form-control" name="tangerine" placeholder="tk/kg"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/fruit/watermelon.png" class="responsive"> </td>
                        <td> <label >Watermelon</label></td>
                        <td><input type="text" class="form-control" name="watermelon" placeholder="1 piece"> </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>

         <div class="col-sm-offset-5 col-sm-2">
            <button type="submit" style="padding:10px 50px;" class="btn btn-filled btn-success">Add price</button>  
         </div> 
      
      <?php } if (isset($_POST['item']) && $_POST['item']=='vegetable') { ?>

         <!-- For fruit vegetable    --> 

         <div class="row" style="margin-top: 25px;">
            <h2 class="text-center" style="color: #fff;">Vegetable item</h2>
            <div class="col-sm-offset-3 col-sm-3">
               <table class="table">                  
                  <thead>
                     <th>Image</th>
                     <th>Name</th>
                     <th>Enter Price</th>
                  </thead>

                  <tbody align="center">
                     <tr>
                        <td><img src="../img/vegetable/artichoke.png" class="responsive"> </td>
                        <td> <label>Artichoke</label></td>
                        <td><input type="text" class="form-control" name="artichoke" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/avocado.png" class="responsive"> </td>
                        <td> <label >avocado</label></td>
                        <td><input type="text" class="form-control" name="avocado" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/broccoli.png" class="responsive"> </td>
                        <td> <label>Broccoli</label></td>
                        <td><input type="text" class="form-control" name="broccoli" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/cabbage.png" class="responsive"> </td>
                        <td> <label >Cabbage</label></td>
                        <td><input type="text" class="form-control" name="cabbage" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/carrot.png" class="responsive"> </td>
                        <td> <label >Carrot</label></td>
                        <td><input type="text" class="form-control" name="carrot" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/cauliflower.png" class="responsive"> </td>
                        <td> <label >Cauliflower</label></td>
                        <td><input type="text" class="form-control" name="cauliflower" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/cucumber.png" class="responsive"> </td>
                        <td> <label >Cucumber</label></td>
                        <td><input type="text" class="form-control" name="cucumber" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/eggplant.png" class="responsive"> </td>
                        <td> <label >Eggplant</label></td>
                        <td><input type="text" class="form-control" name="eggplant" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/kiwi.png" class="responsive"> </td>
                        <td> <label>Kiwi</label></td>
                        <td><input type="text" class="form-control" name="kiwi" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/lettuce.png" class="responsive"> </td>
                        <td> <label>Lettuce</label></td>
                        <td><input type="text" class="form-control" name="lettuce" placeholder="tk/kg"> </td>
                     </tr>
                  </tbody>                  
               </table>
            </div>

            <div class="col-sm-3">
               <table class="table secondHead">                   
                  <thead>
                     <th>Image</th>
                     <th>Name</th>
                     <th>Enter Price</th>
                  </thead>   
                  <tbody align="center">
                     <tr>
                        <td><img src="../img/vegetable/mushroom.png" class="responsive"> </td>
                        <td> <label>Mushroom</label></td>
                        <td><input type="text" class="form-control" name="mushroom" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/mushrooms.png" class="responsive"> </td>
                        <td> <label >Mushrooms</label></td>
                        <td><input type="text" class="form-control" name="mushrooms" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/pepper.png" class="responsive"> </td>
                        <td> <label>Pepper</label></td>
                        <td><input type="text" class="form-control" name="pepper" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/peppermint.png" class="responsive"> </td>
                        <td> <label >peppermint</label></td>
                        <td><input type="text" class="form-control" name="peppermint" placeholder="tk/kg"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/vegetable/potatoes.png" class="responsive"> </td>
                        <td> <label >Potatoes</label></td>
                        <td><input type="text" class="form-control" name="potatoes" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/vegetable/radish.png" class="responsive"> </td>
                        <td> <label >Radish</label></td>
                        <td><input type="text" class="form-control" name="radish" placeholder="tk/kg"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/vegetable/salad.png" class="responsive"> </td>
                        <td> <label >Salad</label></td>
                        <td><input type="text" class="form-control" name="salad" placeholder="tk/kg"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/vegetable/spinach.png" class="responsive"> </td>
                        <td> <label >Spinach</label></td>
                        <td><input type="text" class="form-control" name="spinach" placeholder="tk/kg"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/vegetable/sweet-potato.png" class="responsive"> </td>
                        <td> <label >Sweet-potato</label></td>
                        <td><input type="text" class="form-control" name="sweet-potato" placeholder="tk/kg"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/vegetable/tomato.png" class="responsive"> </td>
                        <td> <label >Tomato</label></td>
                        <td><input type="text" class="form-control" name="tomato" placeholder="tk/kg"> </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>

         <div class="col-sm-offset-5 col-sm-2">
            <button type="submit" style="padding:10px 50px;" onclick="return confirm('Sorry this item not active now. You can choose only fruit.')" class="btn btn-filled btn-success">Add price</button>  
         </div> 

      <?php } if (isset($_POST['item']) && $_POST['item']=='spices') { ?>

         <!-- For fruit spices  -->

         <div class="row" style="margin-top: 25px;">
            <h2 class="text-center" style="color: #fff;">Spices item</h2>            
            <div class="col-sm-offset-3 col-sm-3">
               <table class="table">                  
                  <thead>
                     <th>Image</th>
                     <th>Name</th>
                     <th>Enter Price</th>
                  </thead>

                  <tbody align="center">
                     <tr>
                        <td><img src="../img/spices/anise.png" class="responsive"> </td>
                        <td> <label>Anise</label></td>
                        <td><input type="text" class="form-control" name="anise" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/spices/artichoke.png" class="responsive"> </td>
                        <td> <label >Artichoke</label></td>
                        <td><input type="text" class="form-control" name="artichoke" placeholder="tk/kg"> </td>
                     </tr>        
                     <tr>
                        <td><img src="../img/spices/carrot.png" class="responsive"> </td>
                        <td> <label >Carrot</label></td>
                        <td><input type="text" class="form-control" name="carrot" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/spices/chilli.png" class="responsive"> </td>
                        <td> <label >Chilli</label></td>
                        <td><input type="text" class="form-control" name="chilli" placeholder="tk/kg"> </td>
                     </tr>

                     <tr>
                        <td><img src="../img/spices/cinnamon.png" class="responsive"> </td>
                        <td> <label >Cinnamon</label></td>
                        <td><input type="text" class="form-control" name="cinnamon" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/spices/clove.png" class="responsive"> </td>
                        <td> <label >Clove</label></td>
                        <td><input type="text" class="form-control" name="clove" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/spices/dill.png" class="responsive"> </td>
                        <td> <label >Dill</label></td>
                        <td><input type="text" class="form-control" name="dill" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/spices/ear-of-corn.png" class="responsive"> </td>
                        <td> <label >Ear-of-corn</label></td>
                        <td><input type="text" class="form-control" name="ear-of-corn" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/spices/fennel.png" class="responsive"> </td>
                        <td> <label >Fennel</label></td>
                        <td><input type="text" class="form-control" name="fennel" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/spices/garlic.png" class="responsive"> </td>
                        <td> <label >Garlic</label></td>
                        <td><input type="text" class="form-control" name="garlic" placeholder="tk/kg"> </td>
                     </tr>                    
                  </tbody>                  
               </table>
            </div>

            <div class="col-sm-3">
               <table class="table secondHead">                   
                  <thead>
                     <th>Image</th>
                     <th>Name</th>
                     <th>Enter Price</th>
                  </thead>   
                  <tbody align="center">
                      <tr>
                        <td><img src="../img/spices/ginger.png" class="responsive"> </td>
                        <td> <label >Ginger</label></td>
                        <td><input type="text" class="form-control" name="ginger" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/spices/gluten.png" class="responsive"> </td>
                        <td> <label>Gluten</label></td>
                        <td><input type="text" class="form-control" name="gluten" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/spices/horseradish.png" class="responsive"> </td>
                        <td> <label >Horseradish</label></td>
                        <td><input type="text" class="form-control" name="horseradish" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/spices/jalapeno.png" class="responsive"> </td>
                        <td> <label>Jalapeno</label></td>
                        <td><input type="text" class="form-control" name="jalapeno" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/spices/mint.png" class="responsive"> </td>
                        <td> <label >Mint</label></td>
                        <td><input type="text" class="form-control" name="mint" placeholder="tk/kg"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/spices/onion.png" class="responsive"> </td>
                        <td> <label >Onion</label></td>
                        <td><input type="text" class="form-control" name="onion" placeholder="tk/kg"> </td>
                     </tr>
                     <tr>
                        <td><img src="../img/spices/parsley.png" class="responsive"> </td>
                        <td> <label >Parsley</label></td>
                        <td><input type="text" class="form-control" name="parsley" placeholder="tk/kg"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/spices/seeds.png" class="responsive"> </td>
                        <td> <label >Seeds</label></td>
                        <td><input type="text" class="form-control" name="seeds" placeholder="tk/kg"> </td>
                     </tr>
                     <tr class="smallFont">
                        <td><img src="../img/spices/spinach.png" class="responsive"> </td>
                        <td> <label >Spinach</label></td>
                        <td><input type="text" class="form-control" name="spinach" placeholder="tk/kg"> </td>
                     </tr>                     
                     <tr class="smallFont">
                        <td><img src="../img/spices/tree-leaves.png" class="responsive"> </td>
                        <td> <label >Tree-leaves</label></td>
                        <td><input type="text" class="form-control" name="tree-leaves" placeholder="tk/kg"> </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>

         <div class="col-sm-offset-5 col-sm-2">
            <button type="submit" style="padding:10px 50px;" onclick="return confirm('Sorry this item not active now. You can choose only fruit.')" class="btn btn-filled btn-success">Add price</button>  
         </div> 

      <?php } ?>  

      </form>          
   </div>

<?php unset($_SESSION['addPrice']); ?>

<?php include('../include/footer.php'); ?>