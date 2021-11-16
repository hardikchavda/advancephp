   <!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

   <div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
       <?php

    //    laptop   Abstract Class
    //    - display() Abstract class methods
    //    - keyboard()
    //    - ram()
    //    - hddd()
    //    - cpu($cpu)
    //    - motherboard()

        abstract class absClass{
            abstract function getValue();
            abstract function predefineValue($defined);
            
        }
        class ConcreteClass extends absClass{
            public function printData(){
                echo $this->getValue() . "<br>";
            }
            public function getValue(){
                return "ConcreteClass";
            }
            public function predefineValue($defined){
                return "$defined ConcreteClass";
            }
        }
        class ConcreteClass2 extends absClass
        {
            public function getValue(){
                return "ConcreteClass2";
            }
            public function predefineValue($defined){
                return "$defined ConcreteClass2";
            }
        }
        $class1 = new ConcreteClass;
        $class1->printData();
        echo $class1->predefineValue('AbsData_') . "<br>";

        $class2 = new ConcreteClass2;
        echo $class2->getValue()."<br>";
        echo $class2->predefineValue('AbsData_');

        ?>
   </div>