<!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

<div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
    <?php
    class MyClass
    {
        public $a = "Public";
        protected $b = "Protected";
        private $c = "Private"; // Will not be called outside scope of this class.
        function printProperties()
        {
            echo "Function Inside a class <br>";
            echo $this->a . "<br>";
            echo $this->b . "<br>";
            echo $this->c . "<br>";
        }
    }
    $obj = new MyClass;
    echo $obj->a . "<br>";
    //echo $obj->b."<br>"; // Fatal Errors
    //echo $obj->c."<br>"; // Fatal Errors
    $obj->printProperties();

    echo "-----------------------------------------------<br>";
    class MyClass2 extends MyClass
    {
        public $a = "Public 2";
        protected $b = "Protected 2";

        function printProperties()
        {
            echo "Function Inside a class 2<br>";
            echo $this->a . "<br>";
            echo $this->b . "<br>";
            echo $this->c . "<br>";
        }
    }
    $obj2 = new MyClass2;
    echo $obj2->a . "<br>";
    //echo $obj2->b . "<br>"; // Uncaught Errors
    echo $obj2->c . "<br>"; // Undefined Prooperty Errors
    $obj2->printProperties();
    ?>
</div>