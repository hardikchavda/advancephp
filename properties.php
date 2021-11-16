<!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

<div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
  <?php

  class data
  {
    //Now it is a property of data class
    //PHP 5.6.0
    public $var1 = "Hello" . "Geetanjali";
    //php 5.3.0
    //public $var2 = <<<dfdfsdsdssdsdsdsdsdsdsdsd;
    //PHP 5.6.0
    public $var3 = 1 + 6;
    public $var4 = array(true, false);
  }
  $class1  = new data;
  $data1 =  $class1->var1 . "<br>" . $class1->var3 . "<br>" . $class1->var4[0];
  echo "<br>" . $data1 . "<br>";
  echo "<pre>";
  var_dump($class1->var4);
  echo "<pre>";
  ?>
</div>