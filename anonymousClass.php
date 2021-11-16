   <!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

   <!-- From php 7 support of anonymous has been added. -->
   <div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
       <?php

            $anonymous = new class{
                private $readOnly = "Anonymous Data";

                public function printData(){
                            return $this->readOnly;
                }
            };

            echo $anonymous->printData(); 

        ?>

   </div>