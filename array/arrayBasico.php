<div class="titulo">Array</div>

<?php 
        $lista= array(1,2,3,4,"texto");
        var_dump($lista);
        echo "<br>";
        print_r($lista);
        

        for($i=0; $i<sizeof($lista);$i++){
            print("$lista[$i] <br>") ;
        }
?>
