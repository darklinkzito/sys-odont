<?php include("../req_banco/modal_marcacao.php")?>
<form method="POST" action="./req_banco/update_consulta.php">
<?php foreach($dados as $value){ ?>
    <label for="ID">Código da Consulta:</label>
    <input type="text" readonly value="<?php echo $value['cons_cod_consulta'] ?>" class="form-control" id="#" name="cod">
    <label for="NomeCompleto">Status da Consulta:</label>
    <input type="text" readonly value="<?php echo $value['stat_nm_status'] ?>" class="form-control" id="#" name="Status">
    <label for="">Paciente: </label>
    <input type="text" readonly value="<?php echo $value['paci_nm_paciente'] ?>" class="form-control" id="#" name="Paciente">
    <label for="">Profissional Responsável: </label>
    <input type="text" readonly value="<?php echo $value['prof_nm_profissional'] ?>" class="form-control" id="#" name="Profissional">
    <label for="">Data da Consulta: </label>

    <input type="text" readonly data-inputmask="'mask': '99/99/9999'" 
    value="<?php echo date("d/m/Y", strtotime($value['cons_dt_consulta'])); ?>" 
    class="form-control" id="#" name="data">

    <label for="">Hora Marcada: </label>
    <input type="text" readonly value="<?php echo $value['cons_hr_consulta'] ?>" class="form-control" id="#" name="Hora">
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
        <input type="submit" value="Finalizar Consulta" class="btn btn-primary">
    </div>
<?php } ?>
</form>