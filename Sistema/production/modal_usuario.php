<?php include("./req_banco/consulta_dados_usuario.php"); ?>
<label for="NomeCompleto">Nome Completo:</label>
<input type="text" value="<?php echo $dados['usua_nm_usuario'] ?>" class="form-control" id="#" name="#">
<label for="">CPF: </label>
<input type="text" value="<?php echo $dados['usua_ds_cpf'] ?>" class="form-control" id="#" name="#">
<label for="">RG </label>
<input type="text" value="<?php echo $dados['usua_ds_rg'] ?>" class="form-control" id="#" name="#">
<label for="">Data de nascimento</label>
<input type="text" value="<?php echo $dados['usua_dt_usuario'] ?>" class="form-control" id="#" name="#">
<label for="">Sexo</label>
<input type="text" value="<?php echo $dados['usua_in_sexo'] ?>" class="form-control" id="#" name="#">
<label for="">CEP</label>
<input type="text" value="<?php echo $dados['usua_ds_cep'] ?>" class="form-control" id="#" name="#">
<label for="">Endereço </label>
<input type="text" value="<?php echo $dados['usua_ds_endereco'] ?>" class="form-control" id="#" name="#">
<label for="">Complemento</label>
<input type="text" value="<?php echo $dados['usua_ds_complemento'] ?>" class="form-control" id="#" name="#">
<label for="">Número </label>
<input type="text" value="<?php echo $dados['usua_num_Casa'] ?>" class="form-control" id="#" name="#">
<label for="">Telefone</label>
<input type="text" value="<?php echo $dados['usua_ds_telefone'] ?>" class="form-control" id="#" name="#">
<label for="">Email </label>
<input type="text" value="<?php echo $dados['usua_ds_email'] ?>" class="form-control" id="#" name="#">
<label for="">Perfil </label>
<input type="text" disabled value="<?php echo $dados['perf_nm_perfil'] ?>" class="form-control" id="#" name="#">