<!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

<div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
    <?php

    class iterat
    {
        public $a = "Hello";
        public $b = "Hello";
        public $c = "Hello";
        private $d = "Hello";
        protected $e = "Hello";
        public $f;

        function iterate()
        {
            echo "From inside Class <br>";
            foreach ($this as $key => $value) {
                print "$key => $value <br>";
            }
            // Another Way
            // echo " From inside get_object_vars method <br>";
            // var_export(get_object_vars($this));
        }
    }
    $test = new iterat;
    $test->iterate();
    echo "<br>-------------------------------------------------------";
    echo "<br>From outside Class <br>";
    foreach ($test as $key => $value) {
        echo "$key => $value <br>";
    }
    // Another Way
    // echo " From outside get_object_vars method <br>";
    // var_export(get_object_vars($test));
    ?>


</div>