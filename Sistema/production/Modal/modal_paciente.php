<?php include("../req_banco/consulta_perfil_paciente.php"); ?>
<form method="POST" action="./req_banco/update_paciente.php">
    <label for="ID">Código do Paciente:</label>
    <input type="text" readonly value="<?php echo $dados['paci_cod_paciente'] ?>" class="form-control" id="#" name="cod">
    <label for="NomeCompleto">Nome Completo:</label>
    <input type="text" value="<?php echo $dados['paci_nm_paciente'] ?>" class="form-control" id="#" name="nome">
    <label for="">CPF: </label>
    <input type="text" value="<?php echo $dados['paci_ds_cpf'] ?>" class="form-control" id="#" name="cpf">
    <label for="">RG </label>
    <input type="text" value="<?php echo $dados['paci_ds_rg'] ?>" class="form-control" id="#" name="rg">
    <label for="">Data de nascimento</label>
    <input type="text" data-inputmask="'mask': '99/99/9999'" value="<?php echo date("d/m/Y", strtotime($dados['paci_dt_paciente'])); ?>" class="form-control" id="#" name="data">
    <label for="">Sexo</label>
    <input type="text" value="<?php echo $dados['paci_ds_sexo'] ?>" class="form-control" id="#" name="sx">
    <label for="">CEP</label>
    <input type="text" value="<?php echo $dados['paci_ds_cep'] ?>" class="form-control" id="#" name="CEP">
    <label for="">Endereço </label>
    <input type="text" value="<?php echo $dados['paci_ds_endereco'] ?>" class="form-control" id="#" name="end">
    <label for="">Número da Casa</label>
    <input type="text" value="<?php echo $dados['paci_ds_numero'] ?>" class="form-control" id="#" name="num">
    <label for="">Telefone</label>
    <input type="text" value="<?php echo $dados['paci_ds_telefone'] ?>" class="form-control" id="#" name="tel">
    <label for="">Email </label>
    <input type="text" value="<?php echo $dados['paci_ds_email'] ?>" class="form-control" id="#" name="email">
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
        <input type="submit" value="Salvar Mudanças" class="btn btn-primary">
    </div>
</form>