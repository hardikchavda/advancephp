   <!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->


   <!-- From php 7 support of anonymous has been added. -->
   <div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
       <?php
        class sleepwakedemo
        {
            public $arrayM = array("name", "hardik", "addresss", "rajkot"); //For Sleep Methods
            function __sleep()
            {
                //db->close();
                return array('arrayM');
            }

            function __wakeup()
            {
                //do->connect();
                echo "array restarted";
            }
        }
        $test = new sleepwakedemo;
        $serializeStr = serialize($test);
        echo '<pre>';
        var_dump($serializeStr);
        var_dump(unserialize($serializeStr));
        echo '</pre>';
        ?>
   </div>