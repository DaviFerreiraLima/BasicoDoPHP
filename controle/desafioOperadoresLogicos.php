<div class="titulo">Operadores logicos</div>




<form action="#" method="post">
    <div>
            <label for="t1">Trabalho 1 (terça):</label>
                <select name="t1" id="t1">
                    <option value="1">Executado</option>
                    <option value="0">Não Executado</option>
            </select>
        </div>

        <div>
            <label for="t2">Trabalho 2 (quinta)</label>
            <select name="t2" id="t2">
                <option value="1">Executado</option>
                <option value="0">Não Executado</option>
            </select>
        </div>
        
    
        <button>executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }

</style>
<?php
$idade=18;

    $statusIdade= $idade >= 18 ? "<br>Maior de idade" : "<br>Menor de idade" ;
    echo "$statusIdade";
if(isset($_POST['t1']) and isset($_POST['t2'])){
        
    if(($_POST['t1'])==1 and  $_POST['t2']==1){
        echo "<br><br>tv 50 e sorvete";
    }
    else if ( $_POST['t1']==1 xor $_POST['t2']==1){
        echo "<br><br>tv 32 e sorvete";
    }
    else{
        echo "<br><br>DANI GOSTOSA!";
    }
}







?>
<!-- 
    Dois trabalhos : terça e quinta!
    -Se os dois fore executados -> tv 50 e sorvete
    - se apenas um for -> tv 32 e sorvete
    -se nenhum for -> fica em casa mais saúdavel!
-->