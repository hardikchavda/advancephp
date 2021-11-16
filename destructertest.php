<!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

<div style="color: red; font-size: 1.5em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
    <?php
    class newAccount
    {
        function newAcc()
        {
            echo "We are going to start your new Account.<br>";
        }
        function __destruct()
        {
            echo "Auto Generating Complete <br> Removing Traces for $this->name";
        }
        function __construct()
        {
            echo "Creating new saving account.<br>";
            echo "Adding Min Balance. 5000 Rs.<br>";
            echo "----------------------------<br>";
            echo "----------------------------<br>";
            $this->name = "Mr. Hardik Chavda";
        }
    }
    $obj = new newAccount();
    $obj->newAcc();
    ?>
</div>