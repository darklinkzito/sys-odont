<?php  
   $nome = $_SESSION['nome'];
   $profissional = $_SESSION['profissional'];   
   include("./pdf-php/src/Cezpdf.php");
   //Instancia um novo documento com o nome de pdf
   $pdf = new Cezpdf(); 
     
   //Seleciona a fonte que será usada. As fontes estão localizadas na pasta "pdf-php/fonts". 
   $pdf -> selectFont('pdf-php/fonts/Helvetica.afm'); 
     
   //Chama o método "ezText".
   //No 1° parametro passa o texto do documento
   //No 2° parametro define o tamanho da fonte.
   //No 3° parametro é do tipo array. A seguir uma explicação desse 3° parametro:
     
   // justification => seta a posição de um label, pode ser center, right, left, aright, ou aleft
   // leading = > define o tamanho que cada linha usará para se mostrada, deverá  ser um int
   // spacing => define o espaçamento entrelinhas, deverá ser um float
   // você pode usar apenas leading ou apenas spacing, nunca os dois
 
   $pdf -> ezText('Ficha de Tratamento', 20, array('justification' => 'center', 'spacing' => 2.0)); 
   $pdf -> ezText('Paciente: '.$nome.' foi tratado pelo dentista '.$profissional.' e teve o tratamento X', 15, 
   array('justification' => 'left', 'spacing' => 1.0));
   $pdf -> ezText('Teste Funcionando com sucesso!', 10, 
   array('justification' => 'left', 'spacing' => 1.0));
   //Gera o PDF
   $pdf -> ezStream();
?>