   <!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->


   <!-- From php 7 support of anonymous has been added. -->
   <div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
       <?php
        /*
       __construct()
       __destruct()
       __call()
       __callStatic()
       __get()
       __set()
       __isset()
       __unset()

       __toString()
       __sleep()
       __wakeup()       
       __invoke()
       __set_state()
       __clone()
       __debuginfo()

        */

        class MagicMethods
        {
            public $val1; //For Set State methods
            public $val2; //For Set State methods
           
            function __invoke(){
                echo "<br> This is completelty out of bounds";
            }

            function __toString(){
                return "<br> Here is nothing";
            }

            function __clone(){
                echo "<br> I m MagicMethod's Copy.";
            }

            function __debugInfo(){
                    echo "<pre>";
                        return ["Hello","This is raw info","from debuginfo"];
                    echo "</pre>";
            }

            function __set_state($arg){
                $test3 = new MagicMethods;
                $test3->val1=$arg['value1'];
                $test3->val2=$arg['value2'];
                return $test3;
            }

          

        }

        $test = new MagicMethods;        
        $test(); //This executes __invoke functions.
        echo $test; // __this executes __toString
        $test123 = clone $test;  //    __this executes __clone
        var_dump($test); //This will execute __debugInfo       
                
        $test->val1 = "sdsd"; 
        $test->val2 = 30;
        echo var_export($test); //This will execute __set_state() function       

        

        ?>
   </div>