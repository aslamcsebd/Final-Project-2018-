<?php include('../include/connection.php'); ?>
<?php include('../include/header.php'); ?>

   <div id="userChose" class="container">         
         <div class="row" >
            <div class="col-sm-offset-4 col-sm-4">
               <div style="background-color: #778899";>
                  
                  <form action=" " method="POST" >                     
                        <div class="custom-select" style="width:250px;">                     
                           <select name='item' required>
                              <option value="">Select Item</option>
                              <option value="fruit">Fruit</option>                        
                              <option value="vegetable">Vegetable</option>
                              <option value="spices">Spices</option>
                           </select>
                           <button type="submit" tyle="padding:10px 50px;" class="btn btn-filled btn-success">Search</button>
                        </div>
                  </form>  
       <form action="wishList.php" method="POST" style="padding-top: 10px;">  
                   <a href="userAccount.php" style="padding: 10px 30px;" class="btn btn-filled btn-info pull-left">Back</a>        
                 
                  <button type="submit" name="chooseItem" value="submit"  class="btn btn-filled btn-success pull-right">Select now</button>                  
                 <h3 class="text-center">Choice item</h3>  <hr>
                  
               </div>
            </div>             
         </div> 

      <!-- For fruit item    -->    
      <?php if (isset($_POST['item']) && $_POST['item']=='fruit') { ?>

         <div class="row">
            <div class="col-sm-offset-4 col-sm-2">
               <table class="table" id="search">
                  <thead>
                     <th>Select</th>
                     <th>Image</th>
                     <th>Name</th>
                  </thead>

                  <tbody align="center" id="search">
                     <tr>
                        <td><input type="checkbox" name="product[]" value="apple" ></td>
                        <td><img src="../img/fruit/apple.png" class="responsive"> </td>
                        <td> <label >Apple</label></td>                 
                     </tr>
                     <tr>
                        <td><input type="checkbox" name="product[]" value="apricot"  ></td>
                        <td><img src="../img/fruit/apricot.png" class="responsive"> </td>
                        <td> <label >Apricot</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox" name="product[]" value="banana" ></td>
                        <td><img src="../img/fruit/banana.png" class="responsive"> </td>
                        <td> <label >Banana</label></td>
                     </tr>    
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="cherries"></td>
                        <td><img src="../img/fruit/cherries.png" class="responsive"> </td>
                        <td> <label >Cherries</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="coconut"></td>
                        <td><img src="../img/fruit/coconut.png" class="responsive"> </td>
                        <td> <label >Coconut</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="grape"></td>
                        <td><img src="../img/fruit/grape.png" class="responsive"> </td>
                        <td> <label >Grape</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="icon"></td>
                        <td><img src="../img/fruit/icon.png" class="responsive"> </td>
                        <td> <label >Icon</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="lemon"></td>
                        <td><img src="../img/fruit/lemon.png" class="responsive"> </td>
                        <td> <label >Lemon</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="lychee"></td>
                        <td><img src="../img/fruit/lychee.png" class="responsive"> </td>
                        <td> <label >Lychee</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox" name="product[]" value="mango" ></td>
                        <td><img src="../img/fruit/mango.png" class="responsive"> </td>
                        <td> <label >Mango</label></td>
                     </tr>   
                               
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="melon"></td>
                        <td><img src="../img/fruit/melon.png" class="responsive"> </td>
                        <td> <label >Melon</label></td>
                     </tr>                    
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="orange"></td>
                        <td><img src="../img/fruit/orange.png" class="responsive"> </td>
                        <td> <label >Orange</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="peach"></td>
                        <td><img src="../img/fruit/peach.png" class="responsive"> </td>
                        <td> <label >Peach</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="pear"></td>
                        <td><img src="../img/fruit/pear.png" class="responsive"> </td>
                        <td> <label >Pear</label></td>
                     </tr>                  
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="pineapple"></td>
                        <td><img src="../img/fruit/pineapple.png" class="responsive"> </td>
                        <td> <label >Pineapple</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="plum"></td>
                        <td><img src="../img/fruit/plum.png" class="responsive"> </td>
                        <td> <label >Plum</label></td>
                     </tr>                  
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="raspberry"></td>
                        <td><img src="../img/fruit/raspberry.png" class="responsive"> </td>
                        <td> <label >Raspberry</label></td>
                     </tr>                    
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="strawberry"></td>
                        <td><img src="../img/fruit/strawberry.png" class="responsive"> </td>
                        <td> <label >Strawberry</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="tangerine"></td>
                        <td><img src="../img/fruit/tangerine.png" class="responsive"> </td>
                        <td> <label >Tangerine</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="watermelon"></td>
                        <td><img src="../img/fruit/watermelon.png" class="responsive"> </td>
                        <td> <label>Watermelon</label></td>
                     </tr>                                 
                  </tbody>  
               </table>                  
            </div>  
         </div>  

         <div align="center">
            <button type="submit" name="chooseItem" value="submit" class="btn btn-filled btn-success">Select now</button>
         </div>

      <!-- For fruit vegetable --> 

      <?php } if (isset($_POST['item']) && $_POST['item']=='vegetable') { ?>

         <div class="row" >
            <div class="col-sm-offset-4 col-sm-2">
               <table class="table" id="search">
                  <thead>
                     <th>Select</th>
                     <th>Image</th>
                     <th>Name</th>
                  </thead>

                  <tbody align="center">
                     <tr>
                        <td><input type="checkbox" name="product[]" value="artichoke" ></td>
                        <td><img src="../img/vegetable/artichoke.png" class="responsive"> </td>
                        <td> <label >Artichoke</label></td>                 
                     </tr>
                     <tr>
                        <td><input type="checkbox" name="product[]" value="avocado"  ></td>
                        <td><img src="../img/vegetable/avocado.png" class="responsive"> </td>
                        <td> <label >Avocado</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox" name="product[]" value="broccoli" ></td>
                        <td><img src="../img/vegetable/broccoli.png" class="responsive"> </td>
                        <td> <label>Broccoli</label></td>
                     </tr>    
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="cabbage"></td>
                        <td><img src="../img/vegetable/cabbage.png" class="responsive"> </td>
                        <td> <label>Cabbage</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="carrot"></td>
                        <td><img src="../img/vegetable/carrot.png" class="responsive"> </td>
                        <td> <label >Carrot</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="cauliflower"></td>
                        <td><img src="../img/vegetable/cauliflower.png" class="responsive"> </td>
                        <td> <label >Cauliflower</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="cucumber"></td>
                        <td><img src="../img/vegetable/cucumber.png" class="responsive"> </td>
                        <td> <label >Cucumber</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="eggplant"></td>
                        <td><img src="../img/vegetable/eggplant.png" class="responsive"> </td>
                        <td> <label >Eggplant</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="kiwi"></td>
                        <td><img src="../img/vegetable/kiwi.png" class="responsive"> </td>
                        <td> <label >kiwi</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox" name="product[]" value="lettuce" ></td>
                        <td><img src="../img/vegetable/lettuce.png" class="responsive"> </td>
                        <td> <label >Lettuce</label></td>
                     </tr>   
                               
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="mushroom"></td>
                        <td><img src="../img/vegetable/mushroom.png" class="responsive"> </td>
                        <td> <label >Mushroom</label></td>
                     </tr>                    
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="mushrooms"></td>
                        <td><img src="../img/vegetable/mushrooms.png" class="responsive"> </td>
                        <td> <label >Mushroom2</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="pepper"></td>
                        <td><img src="../img/vegetable/pepper.png" class="responsive"> </td>
                        <td> <label >Pepper</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="peppermint"></td>
                        <td><img src="../img/vegetable/peppermint.png" class="responsive"> </td>
                        <td> <label >Peppermint</label></td>
                     </tr>                  
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="potatoes"></td>
                        <td><img src="../img/vegetable/potatoes.png" class="responsive"> </td>
                        <td> <label>Potatoes</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="radish"></td>
                        <td><img src="../img/vegetable/radish.png" class="responsive"> </td>
                        <td> <label >Radish</label></td>
                     </tr>                  
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="salad"></td>
                        <td><img src="../img/vegetable/salad.png" class="responsive"> </td>
                        <td> <label >Salad</label></td>
                     </tr>                    
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="spinach"></td>
                        <td><img src="../img/vegetable/spinach.png" class="responsive"> </td>
                        <td> <label>Spinach</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="sweet-potato"></td>
                        <td><img src="../img/vegetable/sweet-potato.png" class="responsive"> </td>
                        <td> <label >Sweet-potato</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="tomato"></td>
                        <td><img src="../img/vegetable/tomato.png" class="responsive"> </td>
                        <td> <label>Tomato</label></td>
                     </tr>                                 
                  </tbody>  
               </table>                  
            </div>  
         </div>  

         <div align="center">
            <button type="submit" name="chooseItem" value="submit" onclick="return confirm('Sorry this item not active now. You can choose only fruit.')" class="btn btn-filled btn-success">Select now</button>
         </div>

      <!-- For fruit spices -->

      <?php } if (isset($_POST['item']) && $_POST['item']=='spices') { ?>

         <div class="row" >
            <div class="col-sm-offset-4 col-sm-2">
               <table class="table" id="search">
                  <thead>
                     <th>Select</th>
                     <th>Image</th>
                     <th>Name</th>
                  </thead>

                  <tbody align="center">
                     <tr>
                        <td><input type="checkbox" name="product[]" value="anise" ></td>
                        <td><img src="../img/spices/anise.png" class="responsive"> </td>
                        <td> <label >Anise</label></td>                 
                     </tr>
                     <tr>
                        <td><input type="checkbox" name="product[]" value="artichoke"  ></td>
                        <td><img src="../img/spices/artichoke.png" class="responsive"> </td>
                        <td> <label >Artichoke</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox" name="product[]" value="carrot" ></td>
                        <td><img src="../img/spices/carrot.png" class="responsive"> </td>
                        <td> <label>Carrot</label></td>
                     </tr> 
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="chilli"></td>
                        <td><img src="../img/spices/chilli.png" class="responsive"> </td>
                        <td> <label>Chilli</label></td>
                     </tr>   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="cinnamon"></td>
                        <td><img src="../img/spices/cinnamon.png" class="responsive"> </td>
                        <td> <label >Cinnamon</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="clove"></td>
                        <td><img src="../img/spices/clove.png" class="responsive"> </td>
                        <td> <label >Clove</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="dill"></td>
                        <td><img src="../img/spices/dill.png" class="responsive"> </td>
                        <td> <label>Dill</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="ear-of-corn"></td>
                        <td><img src="../img/spices/ear-of-corn.png" class="responsive"> </td>
                        <td> <label >Ear-of-corn</label></td>
                     </tr>
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="fennel"></td>
                        <td><img src="../img/spices/fennel.png" class="responsive"> </td>
                        <td> <label >Fennel</label></td>
                     </tr>                    
                     <tr>
                        <td><input type="checkbox" name="product[]" value="garlic" ></td>
                        <td><img src="../img/spices/garlic.png" class="responsive"> </td>
                        <td> <label>Garlic</label></td>
                     </tr>   
                     
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="ginger"></td>
                        <td><img src="../img/spices/ginger.png" class="responsive"> </td>
                        <td> <label>Ginger</label></td>
                     </tr>                    
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="gluten"></td>
                        <td><img src="../img/spices/gluten.png" class="responsive"> </td>
                        <td> <label >Gluten</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="horseradish"></td>
                        <td><img src="../img/spices/horseradish.png" class="responsive"> </td>
                        <td> <label>Horseradish</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="jalapeno"></td>
                        <td><img src="../img/spices/jalapeno.png" class="responsive"> </td>
                        <td> <label>Jalapeno</label></td>
                     </tr>                  
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="mint"></td>
                        <td><img src="../img/spices/mint.png" class="responsive"> </td>
                        <td> <label>Mint</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="onion"></td>
                        <td><img src="../img/spices/onion.png" class="responsive"> </td>
                        <td> <label>Onion</label></td>
                     </tr>                  
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="parsley"></td>
                        <td><img src="../img/spices/parsley.png" class="responsive"> </td>
                        <td> <label>Parsley</label></td>
                     </tr>                    
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="seeds"></td>
                        <td><img src="../img/spices/seeds.png" class="responsive"> </td>
                        <td> <label>Seeds</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="spinach"></td>
                        <td><img src="../img/spices/spinach.png" class="responsive"> </td>
                        <td> <label>Spinach</label></td>
                     </tr>                   
                     <tr>
                        <td><input type="checkbox"  name="product[]" value="tree-leaves"></td>
                        <td><img src="../img/spices/tree-leaves.png" class="responsive"> </td>
                        <td> <label>Tree-leaves</label></td>
                     </tr>                                 
                  </tbody>  
               </table>                  
            </div>  
         </div>  

         <div align="center">
            <button type="submit" name="chooseItem" onclick="return confirm('Sorry this item not active now. You can choose only fruit.')" value="submit" class="btn btn-filled btn-success">Select now</button>
         </div>     

      <?php } ?>  

      </form> 
   </div>

<?php include('../include/footer.php'); ?>