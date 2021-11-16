<!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

<div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
    <?php

    class collection implements IteratorAggregate
    {
        private $items;
        function __construct(array $items)
        {
            $this->items = $items;
        }
        // Processing Area
        function getIterator()
        {
            return new ArrayIterator($this->items);
        }
    }

    class User
    {
        public $FirstName;
        public $LastName;
        public $Email;
        public $Address;
    }

    $user1 = new User;
    $user2 = new User;

    $user1->FirstName = "ABC";
    $user1->LastName = "CTC";
    $user1->Email = "abc@ctc.com";
    $user1->Address = "Rajkot";

    $user2->FirstName = "DEF";
    $user2->LastName = "DTD";
    $user2->Email = "def@dtd.com";
    $user2->Address = "Ahmedabad";

    $users = new collection([$user1,$user2]);

    foreach($users as $user){
        echo "$user->FirstName <br>";
        echo "$user->LastName <br>";
        echo "$user->Email <br>";
        echo "$user->Address <br>";
    }
    ?>
</div>