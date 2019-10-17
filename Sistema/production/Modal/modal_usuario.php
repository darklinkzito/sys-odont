<?php include("../req_banco/consulta_dados_usuario.php"); ?>
<form method="POST" action="./req_banco/update_usuario.php">
    <label for="ID">Código do Usuário:</label>
    <input type="text" readonly value="<?php echo $dados['usua_cod_usuario'] ?>" class="form-control" id="#" name="cod">
    <label for="NomeCompleto">Nome Completo:</label>
    <input type="text" value="<?php echo $dados['usua_nm_usuario'] ?>" class="form-control" id="#" name="nome">
    <label for="">CPF: </label>
    <input type="text" value="<?php echo $dados['usua_ds_cpf'] ?>" class="form-control" id="#" name="cpf">
    <label for="">RG </label>
    <input type="text" value="<?php echo $dados['usua_ds_rg'] ?>" class="form-control" id="#" name="rg">
    <label for="">Data de nascimento</label>
    <input type="text" data-inputmask="'mask': '99/99/9999'" value="<?php echo date("d/m/Y", strtotime($dados['usua_dt_usuario'])); ?>" class="form-control" id="#" name="data">
    <label for="">Sexo</label>
    <input type="text" value="<?php echo $dados['usua_in_sexo'] ?>" class="form-control" id="#" name="sx">
    <label for="">CEP</label>
    <input type="text" value="<?php echo $dados['usua_ds_cep'] ?>" class="form-control" id="#" name="CEP">
    <label for="">Endereço </label>
    <input type="text" value="<?php echo $dados['usua_ds_endereco'] ?>" class="form-control" id="#" name="end">
    <label for="">Complemento</label>
    <input type="text" value="<?php echo $dados['usua_ds_complemento'] ?>" class="form-control" id="#" name="comp">
    <label for="">Número </label>
    <input type="text" value="<?php echo $dados['usua_num_Casa'] ?>" class="form-control" id="#" name="num">
    <label for="">Telefone</label>
    <input type="text" value="<?php echo $dados['usua_ds_telefone'] ?>" class="form-control" id="#" name="tel">
    <label for="">Email </label>
    <input type="text" value="<?php echo $dados['usua_ds_email'] ?>" class="form-control" id="#" name="email">
    <label for="">Perfil </label>
    <input type="text" readonly value="<?php echo $dados['perf_nm_perfil'] ?>" class="form-control" id="#" name="#">
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
        <input type="submit" value="Editar" class="btn btn-primary">
    </div>
</form>