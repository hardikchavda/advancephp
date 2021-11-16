   <!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

   <div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
       <?php
        interface car{
            function setModel($name);
            function getModel();
            public const data = "CONSTANT DATA";
        }
        interface petrol{
            function setPetrol($avg);
            function getPetrol();
        }
        class minicar implements car, petrol{
            public $model;
            public $average;
            public function setModel($name){
                $this->model = $name;
            }
            function getModel(){
                return $this->model;
            }
            function setPetrol($avg){
                $this->average = $avg;
            }
            function getPetrol(){
                return $this->average*10;
            }
        }
        $test = new minicar;
        echo minicar::data."<br>";
        $test->setModel('Tata Nano');
        $test->setPetrol(15);
        echo $test->getModel();
        echo $test->getPetrol();
        ?>

   </div>