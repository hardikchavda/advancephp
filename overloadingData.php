   <!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

   <!-- 
   Property Overloading
   ----------------------------------
    public __set(string,$mixed)
    public __get(string)
    public __isset(string)
    public __unset(string)

   Method Overloading
   -----------------------------------
   public __call(string,arrayarguments)
   public __callStatic(string,arrayarguments)

    -->
   <div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
       <?php

        class PropertyTest
        {
            private $data  = array();
            public function __set($name, $value)
            {
                echo "Setting $name to $value <br>";
                $this->data[$name] = $value;
                echo "Sorry $value this is not yout place.";
            }

            public function __get($name)
            {
                echo "Getting $name <br>";
                return $this->data[$name];
            }

            public  function __isset($name)
            {
                echo "is $name set? <br>";
                return isset($this->data[$name]);
            }

            public function __unset($name)
            {
                echo "unsetting data $name <br>";
                unset($this->data[$name]);
            }

            public function __call($name, $arguments)
            {                
                echo "<pre>";
                    print_r($arguments);
                echo "</pre>";
            }
            public function __callStatic($name, $arguments)
            {                
                echo "<pre>";
                    print_r($arguments);
                echo "</pre>";
            }
        }


        $obj = new PropertyTest();  //Iinitializing Class
        $obj->a = 'sdsd';           //Passing  Anonymous Data with argument __set()

        echo $obj->c;               //Passing  Anonymous Data without argument __get()

        var_dump(isset($obj->a));   //Checking whether data is set or not __isset()
        unset($obj->a);             //Unsetting data checked by isset __unset()
        var_dump(isset($obj->a));   //Checking data after unset __isset()

        $obj->anything();           //Testing Method Overloading without argument  __call()
        $obj->anything('123',123);  //Testing Method Overloading with argument      __call(sd,sd)
        $obj::anything('123',123);  //Testing StaticMethod Overloading with argument __callStatic(sd,sd)

        ?>
   </div>