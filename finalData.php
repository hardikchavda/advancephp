   <!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

   <div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
       <?php
        //Final Method example
        class BaseClass
        {
            function test()
            {
                echo "BaseClass::test() called";
            }
            final public function testing()
            {
                echo "BaseClass::testing()";
            }
        }
        class childClass extends BaseClass
        {
            function test()
            {
                echo "childClass::test() called";
            }
            // public function testing(){
            //     echo "childClass::testing() called";
            // }
        }

        //Final Class example
        final class BaseClass2
        {
            function test()
            {
                echo "BaseClass2::test() called";
            }           
        }

        class childClass2 extends BaseClass2
        {
            function test()
            {
                echo "childClass::test() called";
            }            
        }


        ?>

   </div>