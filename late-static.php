   <!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

   <div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
       <?php

        class Department
        {
            protected static $x = 10;
            public $y = 5;
            public function myFun()
            {
                echo static::$x + self::$x;  //Calling Static Property 
            }
        }
        class HR extends Department
        {
            protected static $x = 30;
        }
        $test = new HR;
        $test->myFun();
        
        ?>
   </div>