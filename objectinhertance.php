<!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

<div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
    <?php
    class MyClass{
        private $data = "protected";
        protected function MyFun(){
            echo $this->data; //private data
        }
    }
    //$obj1 = new MyClass;
    //$obj1->MyFun();// cannot be accessed
    class MyClass2 extends MyClass{
        public function MyFun2(){
            $this->MyFun();
        }
    }
    $obj2 = new MyClass2;
    $obj2->MyFun2();
    ?>
</div>