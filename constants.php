    <!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

    <div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
        <?php
        class abc
        {
            public $var = 123645;
            #You have to use "const" keyword for using constancts
            #$symbol is not required
            #To get contant attributes self::
            const var1 = 456789789;
            function abc1()
            {
                echo "Start Function <br>";
                echo $this->var;
                echo "<br>";
                echo self::var1;
                echo "<br>End of Function <br>";
            }
        }
        $Class = new abc;
        echo "This is a simple property = " . $Class->var . "<br>";
        $Class->abc1() . "<br>";
        echo "This is a contant = " . $Class::var1;
        ?>

    </div>