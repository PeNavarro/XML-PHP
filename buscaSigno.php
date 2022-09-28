<?php

$signos = simplexml_load_file('XMLcomSignos.xml');

$data = $_POST['dataNascimento'];

$data = explode('-', $data);

$dataSemAno = $data[1]."/".$data[2];


foreach($signos->signo as $signo){
      $dataInicioFormatada = explode('/', $signo->dataInicio);
      $dataInicioFormatada = $dataInicioFormatada[1]."/".$dataInicioFormatada[0];

      $dataFinalFormatada = explode('/', $signo->dataFim);
      $dataFinalFormatada = $dataFinalFormatada[1]."/".$dataFinalFormatada[0];

      if(strtotime($dataSemAno) >= strtotime($dataInicioFormatada) && strtotime($dataSemAno) <= strtotime($dataFinalFormatada)){
            echo "Você é do signo: ".$signo->signoNome;
            
            echo "<br/><br/>Descrição: ".$signo->descricao;
      }
}

?>