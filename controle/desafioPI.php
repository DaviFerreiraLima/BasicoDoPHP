<div class="titulo">Desafio PI</div>

<?php

echo pi();

$pi=3.14;

if($pi-pi() <=0.01)
{
    echo "<br> valores iguais";
}else{
    echo "valores distintos";
}
?>