   <!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

   <div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
       <?php

        class objRef
        {
            public $hi = 5;
        }

        $a = new objRef;
        //$b = $a;   //a = 0x456  //b = 0x789
        $b = &$a;    //a = 0x456   //b = 0x456

        echo "a=" . $a->hi . "<br>";
        echo "b=" . $b->hi . "<br>";

        echo "a=" . $a->hi=3 . "<br>";
        echo "b=" . $b->hi=10 . "<br>";

        $a = null;

        echo "a=" . $a->hi . "<br>";
        echo "b=" . $b->hi . "<br>";

        ?>

   </div>