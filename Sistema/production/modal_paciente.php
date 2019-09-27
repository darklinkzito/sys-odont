<table id="datatable-buttons" class="table table-striped table-bordered">
    <?php include("req_banco/consulta_perfil_paciente.php"); ?>
        <tr>
            <th>ID</th>
            <td><?php echo $dados['paci_cod_paciente'] ?></td>
        </tr>
        <tr>
            <th>Nome</th>
            <td><?php echo $dados['paci_nm_paciente'] ?></td>
        </tr>
        <tr>
            <th>Data de Nascimento</th>
            <td><?php echo $dados['paci_dt_paciente'] ?></td>
        </tr>
        <tr>
            <th>CPF</th>
            <td><?php echo $dados['paci_ds_cpf'] ?></td>
        </tr>
        <tr>
            <th>RG</th>
            <td><?php echo $dados['paci_ds_rg'] ?></td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td><?php echo $dados['paci_ds_sexo'] ?></td>
        </tr>
        <tr>
            <th>endereço</th>
            <td><?php echo $dados['paci_ds_endereco'] ?></td>
        </tr>
        <tr>
            <th>CEP</th>
            <td><?php echo $dados['paci_ds_cep'] ?></td>
        </tr>
        <tr>
            <th>Número da Casa</th>
            <td><?php echo $dados['paci_ds_numero'] ?></td>
        </tr>
        <tr>
            <th>Telefone</th>
            <td><?php echo $dados['paci_ds_telefone'] ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $dados['paci_ds_email'] ?></td>
        </tr>
        <tr>
            <th>Convenio</th>
            <td><?php echo $dados['paci_ds_convenio'] ?></td>
        </tr>
</table>