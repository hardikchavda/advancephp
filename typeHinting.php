   <!--     
    Geetanjali Group of Colleges. Rajkot (geetanjali_college@yahoo.com)
    Prepared By Prof. Hardik Chavda (hardikkchavda@gmail.com) 
    -->

   <div style="color: red; font-size: 2em; text-align: center; background:rgb(45,53,54); text-shadow: 0px 0px 2px red;">
       <?php

        class Song
        {
            public $title;
            public $lyrics;
        }
        class Data
        {
            function sing(Song $song)
            {
                $this->d_song = $song;
                echo "Best Song of the Year :" . $this->d_song->title . "<br>";
                echo "Lyrics :" . $this->d_song->lyrics . "<br>";
            }
        }

        $data = new Data;
        $hit = new Song;
        $hit->title = "Vande Mataram";
        $hit->lyrics = "Sujalasuphalammaylajasheetalam";
        $data->sing($hit);



        ?>
   </div>