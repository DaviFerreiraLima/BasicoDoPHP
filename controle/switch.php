<div class="titulo">Switch</div>
<link rel="stylesheet" href="davi.css">

<form action="#" method="post">
    <div>
        <label for="carro" >Categorias</label>
        <select name="carro" id="carro" >
            <option  class ="invalido"disabled selected>Selecione a categoria </option>
            <option class="normal" value="luxo">Luxo</option>
            <option class="normal" value="Sedan">Sedan</option>
            <option class="normal" value="SUV">SUV</option>
        </select>
    </div>
    <button type="submit">Escolher</button>
</form>

<?php   
$categoria='';

if(isset($_POST['carro'])){
    $categoria = $_POST['carro'];

    switch($categoria){


        case 'luxo':
            $carro= 'Mercedes';
            $preco=250000;
            break;
    
        case 'Sedan':
            $carro= 'Etios';
            $preco=55000;
            break;
        case 'SUV':
            $carro= 'Renegade';
            $preco=80000;
            break;
    
    }
    echo "<br> O carro $carro custa R$ $preco";
}
else{
    echo "<br>Selecione a categoria";
}


?>

<style>
    .option.invalido{
    color: gray;
}
.normal{
    color:red;
}
button{
    color:red;
    border-radius: 10px;
    border-color: white;

}
button:hover{
    color:blue;
    background-color:cyan;
}
</style>