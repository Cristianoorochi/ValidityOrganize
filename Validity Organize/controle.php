<?php
	
	$data_venc = $_POST['diaVenc'];
	$arrayDataVenc = explode("-",$data_venc);
			
	$dataHoje = date('d');

	$venc = $arrayDataVenc[2] - $dataHoje;
	
	if($dataHoje > $arrayDataVenc[2]){
		echo 'Produto venceu dia: ' . $arrayDataVenc[2].'/'.$arrayDataVenc[1];
	}
	else {
		alerta($arrayDataVenc[2], $dataHoje);
	}


	function alerta($produto, $hoje){
		if($produto == $hoje + 2){
			echo 'Vence em dois dias';
			include_once("email.php");
		} elseif($produto == $hoje + 1){
			echo 'Vence em um dia';
		} elseif($produto == $hoje){
			echo 'Vence hoje';
		} else{
			echo 'produto ainda no prazo de validade.';
		}

	}
