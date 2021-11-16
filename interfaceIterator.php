<!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

<div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
    <?php

    class iIterator implements Iterator
    {
        private $myArray;
        function __construct($givenArray)
        {
            $this->myArray = $givenArray;
        }

        function rewind()
        {
            //Starting Method
            var_dump(__METHOD__);
            return reset($this->myArray);
        }

        function current()
        {
            //For Continuing if there is an argument
            var_dump(__METHOD__);
            return current($this->myArray);
        }
        function key()
        {
            //If current is available than a key will be used.
            var_dump(__METHOD__);
            return key($this->myArray);
        }
        function next()
        {
            //Until Iteration it will execute
            var_dump(__METHOD__);
            return next($this->myArray);
        }
        function valid()
        {
            //For vaidation of keys.
            var_dump(__METHOD__);
            return key($this->myArray)!==null;
        }
    }

    $it = new iIterator(['Hello','I','Am','Student']);
    
    echo "<pre>";
    foreach ($it as $key=>$value){
        echo "$key=>$value";
        echo "<br>";
    }
    ?>
</div>