   <!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

   <div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
       <?php
           class BOX{
               public $name = 'Hello';               
           }

           $box = new BOX;
           $box->name = 'Hello';

           $box_ref = $box;
           //Duplicated
           $box_ref->name = "Hello";
           
           $box_clone = clone $box;
           $box_clone->name = 'Hello';

           $box_change = clone $box;
           $box_change->name = 'Hello';

           $another_box = new BOX;
           $another_box->name = "Hello";

           //Comparison
           echo "Regular Comparison<br>";
           echo $box==$box_ref?"true<br>":"false<br>";      //True
           echo $box==$box_clone?"true<br>":"false<br>";    //True
           echo $box==$box_change?"true<br>":"false<br>";   //True
           echo $box==$another_box?"true<br>":"false<br>";  //True
           
           echo "Identity Comparison<br>";
           //Identity Comparison
           echo $box===$box_ref?"true<br>":"false<br>";     //True
           echo $box===$box_clone?"true<br>":"false<br>";   //False
           echo $box===$box_change?"true<br>":"false<br>";  //False
           echo $box===$another_box?"true<br>":"false<br>"; //False
        ?>
   </div>