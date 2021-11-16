<!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

<div style="color: red; font-size: 1.5em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">

    <?php

    //outside of a classs
    $simlpe = 'simple';
    echo $simlpe . ' Outside <br>';
    echo "------------------<br>";
    class MyClass
    {
        public $simlpe = "simple";
        const MYPUBLIC = 'public'; // as of PHP 7.1.0 public is not required to define contsants.
        private const MYPRIVATE = 'private';
        protected const MYPROTECTED = 'protected';

        public function myFun()
        {
            echo "<br>------------------<br>";
            echo $this->simlpe . '<br>';
            echo self::MYPUBLIC . '<br>';
            echo self::MYPRIVATE . '<br>';
            echo self::MYPROTECTED . '<br>';
        }
    }
    $obj1 = new MyClass();
    echo $obj1::MYPUBLIC;
    //echo $obj1::MYPRIVATE;
    //echo $obj1::MYPROTECTED;
    $obj1->myFun();

    class MyClass2 extends MyClass
    {
        function MyFun2()
        {
            echo "------------------<br>";
            echo self::MYPUBLIC . '<br>';
            //echo self::MYPRIVATE . '<br>';
            echo self::MYPROTECTED . '<br>';
        }
    }
    $obj2 = new MyClass2;
    $obj2->MyFun2();

    ?>




</div>