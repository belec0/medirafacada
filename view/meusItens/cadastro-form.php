<?php require_once("../layout/topTheme.php"); 

if (! empty($_SESSION["user_name"])) {
    require_once("../../class/Member.php"); 
}else{
    header("Location: auth/login-form.php");
}
?>
<form>
<div class="row justify-content-around w-75" id="form-estilo">
    <div class="col-6">
    <p class="text-light">Nome da peça:<input class="form-control w-50" type="text" ></p>
    </div>
        <div class="col-6">
            <label for="exampleFormControlSelect1" class="text-light" id="selectss">Tipo da peça:</label>
            <select class="form-control" id="exampleFormControlSelect1" class="text-light">
            <option>Driver de disco</option>
            <option>Fan/ Ventoinha</option>
            <option>Fonte</option>
            <option>Gabinete</option>
            <option>Headset</option>
            <option>Memória RAM</option>
            <option>Monitor</option>
            <option>Mouse</option>
            <option>Placa de vídeo</option>
            <option>Placa mãe</option>
            <option>Processador</option>
            <option>SSD MS</option>
            <option>SSD NVME</option>
            <option>Teclado</option>
            <option>Water Cooler</option>
            </select>
        </div>
        <div class="col-6">
            <p class="text-light">Valor por unidade:<input class="form-control w-50" placeholder="R$" type="number"></p>
        </div>
        <div class="col-6">
            <p class="text-light">Valor do Frete:<input class="form-control w-50" placeholder="R$" type="number"></p>
        </div>
        <div class="col-6">
            <p class="text-light">Link para o site:<input class="form-control w-50" type="text" ></p>
        </div>
        <div class="col-6" id="coluna-promocao">
        <p class="text-light" id="promocao">Promoção</p> 
        <div class="content">
            <label class="switch">
            <input type="checkbox">
            <span class="slider round" id="botao"></span>
            </label>
            </div>
        </div>
        <div class="col-6 w-25">
            <label for="exampleFormControlSelect1" class="text-light" id="selectss">Adquirido</label>
            <select class="form-control" id="exampleFormControlSelect1" class="text-light">
            <option>Sim</option>
            <option>Não</option>

            </select>
        </div>
</div>
</form>
<?php require_once("../layout/bottomTheme.php"); 