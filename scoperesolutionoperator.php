<!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

<div style="color: red; font-size: 1.5em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">

    <?php
    class Myclass
    {
        //Scope Resulution Operator :: is also known as PaamayimNekodudotayim
        const Const_Value = 'A Constant Value';
    }
    $obj1 = new MyClass;
    echo $obj1::Const_Value.'<br>';
    echo Myclass::Const_Value;
    ?>
</div>