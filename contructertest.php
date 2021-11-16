<!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

<div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
    <?php
    class testConstruct
    { //Base Class  
        function __construct()
        {
            //you can define mixed arguments in a constructer whether 
            // it is a STRING, INT, ARRAY

            // defining class name of function name as constructer has been
            // depricated from php 7.0

            //whenever we use constructer it automatically creates 
            //refrence of a class.
            $a = 5;
            $b = 10;
            echo $a . "\n";
            echo $b;
        }
    }
    class test1 extends testConstruct // test1 derived class 
    {
        function __construct()
        {
            //parent::__construct();
            echo "Test Data";
        }
    }
    $test = new test1;
    ?>
</div>