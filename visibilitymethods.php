<!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

<div style="color: red; font-size: 1.5em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
    <?php
    class MyClass
    {
        //Declared public constructer
        public function __construct()
        {
            echo "Constructer Methods<br>";
        }
        //Declared public method
        public function MyPublic()
        {
            echo "Public Methods<br>";
        }
        //Declared protected methods
        protected function MyProtected()
        {
            echo "Protected Methods<br>";
        }
        //Declared private methods
        private function MyPrivate()
        {
            echo "Private Methods<br>";
        }

        function Simple()
        {
            $this->MyPublic();
            $this->MyProtected();
            $this->MyPrivate();
        }
    }
    $myClass = new MyClass;
    $myClass->MyPublic();
    //$myClass->MyProtected(); //Fatal error: Uncaught Error: Call to protected method
    //$myClass->MyPrivate(); //Fatal error: Uncaught Error: Call to private method
    $myClass->Simple();

    class MyClass2 extends MyClass
    {
        function Simple2()
        {
            echo "<br>--------Class 2------------<br>";
            $this->MyPublic();
            $this->MyProtected();
            //$this->MyPrivate(); //Fatal error: Uncaught Error: Call to private method
        }
    }
    $myClass2 = new MyClass2;
    $myClass2->Simple2();
    ?>
</div>