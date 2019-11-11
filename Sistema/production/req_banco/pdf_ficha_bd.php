<?php
session_start();
try {
    require('conexao.php');
    $stmt = $conn->prepare("SELECT * FROM ficha_anamnese fich 
    INNER JOIN paciente paci ON fich.fian_cod_ficha_anamnese = paci.fian_cod_ficha_anamnese WHERE paci.paci_cod_paciente = ".$_POST['paciente']);
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
foreach($dados as $value){
    $med = $value['fian_in_medicamento'];
    $prob = $value['fian_in_problema'];
    $acomp = $value['fian_in_acompanhamento'];
    $aler = $value['fian_in_alergia'];
    $hemo = $value['fian_in_hemorragia'];
    $fuma = $value['fian_in_fumante'];
    $habi = $value['fian_in_habitos'];
    $higi = $value['fian_in_higiene'];
    $dent = $value['fian_in_dentista'];
    $higi_cri = $value['fian_in_higiene_crianca'];
    $alim_cri = $value['fian_in_alimentacao_crianca'];
    $chup = $value['fian_in_chupeta'];
    $press = $value['fian_in_pressao'];
    $dt_press = $value['fian_dt_pressao'];
    $bpm = $value['fian_in_bpm'];
    $dt_bpm = $value['fian_dt_bpm'];
}
$_SESSION['med'] = $med;
$_SESSION['prob'] = $prob;
$_SESSION['acomp'] = $acomp;
$_SESSION['aler'] = $aler;
$_SESSION['hemo'] = $hemo;
$_SESSION['fuma'] = $fuma;
$_SESSION['habi'] = $habi;
$_SESSION['higi'] = $higi;
$_SESSION['dent'] = $dent;
$_SESSION['higi_cri'] = $higi_cri;
$_SESSION['alim_cri'] = $alim_cri;
$_SESSION['chup'] = $chup;
$_SESSION['press'] = $press;
$_SESSION['dt_press'] = $dt_press;
$_SESSION['bpm'] = $bpm;
$_SESSION['dt_bpm'] = $dt_bpm;
?>