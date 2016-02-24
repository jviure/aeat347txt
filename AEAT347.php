<?php
class C_Importe
{
	var $ImporteEntero = ""; //13
	var $ImporteDecimal = ""; //2
}

class C_Comun
{
	var $Modelo = ""; //3
	var $Ejercicio = ""; //4
	var $NIFDeclarante = ""; //9
}

class C1
{
	var $TipoRegistro = ""; //1
	var $Comun; //2-4 5-8 9-17 = tamaño 16
	var $ApellidosYNombre = ""; //40 //18-57
	var $TipoSoporte = ""; //1 //58
	var $PersonaContactoFono = ""; //9 //59-67
	var $PersonaContactoNombre = ""; //40 //68-107
	var $V_NDeclara = ""; //13 // 108-120
	var $V_CompleoSusti = ""; //2 // 121-122
	var $V_NumDecAnter = ""; //13 // 123-135
	var $NumeroDeclarados = ""; //9 //136-144
	var $SignoITotal = ""; //1 // 145
	var $ImporteTotal; //146-160   //tamaño 15
	var $V_NInmuebles = ""; //9 //161-169
	var $SignoIArrenga = ""; //1 // 145
	var $V_ImpArrenda;//170-185 //tamaño 15
	var $V_Vacio = ""; //205 //186-390
	var $V_NifRepresenta = ""; //9 //39-399
	var $V_Vacio2 = ""; //* 88 //400-487
	var $V_SelloElectro = ""; //* 13 //488-500
	//total 499

	function C1()
	{
		$this->Comun = new C_Comun();
		$this->ImporteTotal = new C_Importe();
		$this->V_ImpArrenda = new C_Importe();
	}
}

class C2
{
	var $TipoRegistro = ""; //* 1
	var $Comun; //2-4 5-8 9-17 = tamaño 16
	var $NifDeclarado = ""; //* 9
	var $V_NifRepresenta = ""; //* 9
	var $ApellidosYNombre = ""; //* 40
	var $TipoHoja = ""; //* 1
	var $CodProvincia = ""; //* 2
	var $Pais = ""; //* 2
	var $V_Blanco2 = ""; //* 1
	var $ClaveOperacion = ""; //* 1
	var $SignoIA = ""; //* 1
	var $ImporteANUAL;//15
	var $V_OPSeguro = ""; //* 1
	var $V_ArrendaLocal = ""; //* 1
	var $V_Metalico; //15
	var $V_SignoInm = ""; //* 1
	var $V_Inmuebles; //15
	var $V_EjercicioImp = ""; //* 4
	var $Importe1TSigno = ""; //* 1
	var $Importe1T; //15
	var $V_T1_1TSigno = ""; //* 1
	var $V_TI_1T; //15
	var $Importe2TSigno = ""; //* 1
	var $Importe2T; //15
	var $V_T1_2TSigno = ""; //* 1
	var $V_TI_2T; //15
	var $Importe3TSigno = ""; //* 1
	var $Importe3T; // 15
	var $V_T1_3TSigno = ""; //* 1
	var $V_TI_3T; //15
	var $Importe4TSigno = ""; //* 1
	var $Importe4T; // 15
	var $V_T1_4TSigno = ""; //* 1
	var $V_TI_4T;
	var $NIF_OPERADOR_COMUNITARIO = ""; //* 17
	var $OperacionCriterioCaja = ""; //* 1
	var $OperacionInversionSujetoPasivo = ""; //* 1
	var $OperacionBieneVinculados = ""; //* 1
	var $ImporteCriterioCajaSigno = ""; //* 1
	var $ImporteCriterioCaja;
	var $V_Blancos = ""; //201 //* 237
	//499 ultima posicion

	function C2()
	{
		$this->Comun = new C_Comun();
		$this->ImporteANUAL = new C_Importe();
		$this->V_Metalico = new C_Importe();
		$this->V_Inmuebles = new C_Importe();
		$this->Importe1T = new C_Importe();
		$this->V_TI_1T = new C_Importe();
		$this->Importe2T = new C_Importe();
		$this->V_TI_2T = new C_Importe();
		$this->Importe3T = new C_Importe();
		$this->V_TI_3T = new C_Importe();
		$this->Importe4T = new C_Importe();
		$this->V_TI_4T = new C_Importe();
		$this->ImporteCriterioCaja = new C_Importe();
	}
}

class AEAT347
{
	var $input;
	var $output;

	var $declarante;
	var $declarados;

	var $longitudes;
	var $ejercicio, $NIF_Declarante, $razonSocial, $telf, $personaContacto;

	function AEAT347 ($input, $ejercicio, $NIF_Declarante, $razonSocial, $telf, $personaContacto)
	{
		$this->output = array();

		$this->input = $input;
		$this->ejercicio = $ejercicio;
		$this->NIF_Declarante = $NIF_Declarante;
		$this->razonSocial = $razonSocial;
		$this->telf = $telf;
		$this->personaContacto = $personaContacto;

		$this->declarante = new C1();

		$this->longitudes = array();
		$this->longitudes['C1'] = array(
			"TipoRegistro" =>  1,
			"Comun" => 0,
			"ApellidosYNombre" => 40,
			"TipoSoporte" => 1,
			"PersonaContactoFono" => 9,
			"PersonaContactoNombre" => 40,
			"V_NDeclara" => 13,
			"V_CompleoSusti" => 2,
			"V_NumDecAnter" => 13,
			"NumeroDeclarados" => 9,
			"SignoITotal" => 1,
			"ImporteTotal" => 0,
			"V_NInmuebles" => 9,
			"SignoIArrenga" => 1,
			"V_ImpArrenda" => 0,
			"V_Vacio" => 205,
			"V_NifRepresenta" => 9,
			"V_Vacio2" => 88,
			"V_SelloElectro" => 13
		);
		$this->longitudes['C2'] = array(
			"TipoRegistro" => 1,
			"Comun" => 0,
			"NifDeclarado" => 9,
			"V_NifRepresenta" => 9,
			"ApellidosYNombre" => 40,
			"TipoHoja" => 1,
			"CodProvincia" => 2,
			"Pais" => 2,
			"V_Blanco2" => 1,
			"ClaveOperacion" => 1,
			"SignoIA" => 1,
			"ImporteANUAL" => 0,
			"V_OPSeguro" => 1,
			"V_ArrendaLocal" => 1,
			"V_Metalico" => 0,
			"V_SignoInm" => 1,
			"V_Inmuebles" => 0,
			"V_EjercicioImp" => 4,
			"Importe1TSigno" => 1,
			"Importe1T" => 0,
			"V_T1_1TSigno" => 1,
			"V_TI_1T" => 0,
			"Importe2TSigno" => 1,
			"Importe2T" => 0,
			"V_T1_2TSigno" => 1,
			"V_TI_2T" => 0,
			"Importe3TSigno" => 1,
			"Importe3T" => 0,
			"V_T1_3TSigno" => 1,
			"V_TI_3T" => 0,
			"Importe4TSigno" => 1,
			"Importe4T" => 0,
			"V_T1_4TSigno" => 1,
			"V_TI_4T" => 0,
			"NIF_OPERADOR_COMUNITARIO" => 17,
			"OperacionCriterioCaja" => 1,
			"OperacionInversionSujetoPasivo" => 1,
			"OperacionBieneVinculados" => 1,
			"ImporteCriterioCajaSigno" => 1,
			"ImporteCriterioCaja" => 1,
			"V_Blancos" => 200
		);
		$this->longitudes['C_Comun'] = array(
			"Modelo" => 3,
			"Ejercicio" => 4,
			"NIFDeclarante" => 9
		);
		$this->longitudes['C_Importe'] = array(
			"ImporteEntero" => 13,
			"ImporteDecimal" => 2
		);
	}

	private function AsignarImporte(&$Importe=0, C_Importe &$CampoImporte, &$Signo = "")
	{
		if ($Importe < 0) {
			$Signo = "N";
			$Importe = $Importe * -1;
		}
		else
			$Signo = "";


		$PEntera = intval($Importe);
		$CampoImporte->ImporteEntero = str_pad($PEntera, 13, '0', STR_PAD_LEFT);
		$CampoImporte->ImporteDecimal = str_pad(number_format($Importe - $PEntera, 2) * 100, 2, '0', STR_PAD_LEFT);
	}

	public function GenDeclaranteLine()
	{
		$Registros = 0;
		$Total = 0;
		$dummyZero = 0;

		//'EJERCICIO
		$this->declarante->Comun->Ejercicio = $this->ejercicio;
		$this->declarante->ApellidosYNombre = $this->sanear_string($this->razonSocial);
		$this->declarante->Comun->Modelo = "347"; //Constante
		$this->declarante->Comun->NIFDeclarante = $this->NIF_Declarante;
		$this->declarante->PersonaContactoNombre = $this->sanear_string($this->personaContacto);
		$this->declarante->PersonaContactoFono = $this->telf;
		$this->declarante->TipoRegistro = "1"; //Constante
		$this->declarante->TipoSoporte = "T"; //T: telematico

		$this->GetValoresNumericos($Registros, $Total);
		$this->AsignarImporte($Total, $this->declarante->ImporteTotal, $this->declarante->SignoITotal);

		$this->declarante->NumeroDeclarados = str_pad($Registros, 9, '0', STR_PAD_LEFT);
		$this->declarante->V_CompleoSusti = "";

		$this->AsignarImporte($dummyZero, $this->declarante->V_ImpArrenda, $this->declarante->SignoIArrenga);

		$this->declarante->V_NDeclara = "3470000000000";
		$this->declarante->V_NifRepresenta = "";
		$this->declarante->V_NInmuebles = "000000000";
		$this->declarante->V_NumDecAnter = "0000000000000";
		$this->declarante->V_SelloElectro = "";
		$this->declarante->V_Vacio = "";
		$this->declarante->V_Vacio2 = "";

		$this->output []= $this->GetLinea($this->declarante);
	}

	public function GenDeclaradosLines()
	{
		$dummyZero = 0;
		$D  = new C2();

		foreach($this->input as $declarado)
		{
			$D->NifDeclarado = $declarado['nif_perceptor'];
			$D->ApellidosYNombre = $this->sanear_string($declarado['nombre_perceptor']);
			$D->TipoHoja = "D"; //Constante
			$D->CodProvincia = str_pad($declarado['provincia'],2,'0',STR_PAD_LEFT);
			$D->Pais = $declarado['pais'];
			$D->ClaveOperacion = $declarado['clave'];

			$this->AsignarImporte($declarado['imp_op_anual'],  $D->ImporteANUAL, $D->SignoIA);
			$this->AsignarImporte($declarado['imp_op_pri_tri'], $D->Importe1T, $D->Importe1TSigno);
			$this->AsignarImporte($declarado['imp_op_seg_tri'], $D->Importe2T, $D->Importe2TSigno);
			$this->AsignarImporte($declarado['imp_op_ter_tri'], $D->Importe3T, $D->Importe3TSigno);
			$this->AsignarImporte($declarado['imp_op_cua_tri'], $D->Importe4T, $D->Importe4TSigno);

			//feb 2015:
			$this->AsignarImporte($declarado['imp_cr_caja'], $D->ImporteCriterioCaja, $D->ImporteCriterioCajaSigno);

			$D->NIF_OPERADOR_COMUNITARIO = @$declarado['nif_op_comunitario'];
			$D->OperacionCriterioCaja = @$declarado['op_criterio_caja'];
			$D->OperacionInversionSujetoPasivo = @$declarado['op_inv_sujeto_pasivo'];
			$D->OperacionBieneVinculados = @$declarado['op_biene_vinculados'];
			//---------------

			$D->Comun = $this->declarante->Comun;

			$D->TipoRegistro = "2"; //Constante
			$D->V_ArrendaLocal = "";
			$D->V_Blanco2 = "";
			$D->V_Blancos = "";
			$D->V_EjercicioImp = "0000";

			$this->AsignarImporte($dummyZero, $D->V_Inmuebles, $D->V_SignoInm);
			$this->AsignarImporte($dummyZero, $D->V_Metalico);

			$D->V_NifRepresenta = "";
			$D->V_OPSeguro = "";

			$this->AsignarImporte($dummyZero, $D->V_TI_1T, $D->V_T1_1TSigno);
			$this->AsignarImporte($dummyZero, $D->V_TI_2T, $D->V_T1_2TSigno);
			$this->AsignarImporte($dummyZero, $D->V_TI_3T, $D->V_T1_3TSigno);
			$this->AsignarImporte($dummyZero, $D->V_TI_4T, $D->V_T1_4TSigno);

			$this->output []= $this->GetLinea($D);
		}
	}

	private function GetLinea($mi_clase)
	{
		$output = "";
		$className  = get_class($mi_clase);
		$vars_clase = get_class_vars(get_class($mi_clase));

		foreach ($vars_clase as $nombre => $valor)
		{
			if(!isset($this->longitudes[$className][$nombre]))
				die("Length missing: Class: ". $className . " Field: ".$nombre);

			$length = $this->longitudes[$className][$nombre];
			if(is_object($mi_clase->$nombre))
				$output .= $this->GetLinea($mi_clase->$nombre);
			else
				$valor = $mi_clase->$nombre;

			//Check length!
			if(strlen($valor)>$length && (int)$length != 0) {
				$valor = substr($valor, 0, $length);
			}

			$output .= str_pad($valor, $length, ' ', STR_PAD_RIGHT);
		}
		return $output;
	}

	//Thanks to Capynet
	private function sanear_string($string)
	{
		$string = trim($string);

		$string = str_replace(
			array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
			array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
			$string
		);

		$string = str_replace(
			array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
			array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
			$string
		);

		$string = str_replace(
			array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
			array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
			$string
		);

		$string = str_replace(
			array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
			array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
			$string
		);

		$string = str_replace(
			array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
			array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
			$string
		);

		$string = str_replace(
			array('ñ', 'Ñ', 'ç', 'Ç'),
			array('n', 'N', 'c', 'C',),
			$string
		);

		//Esta parte se encarga de eliminar cualquier caracter extraño
		$string = str_replace(
			array('\\', '¨', 'º', "-", "~", "#", "@", "|", "!", '"',"·", "$", "%", "&", "/",
             "(", ")", "?", "'", "¡",
             "¿", "[", "^", "<code>", "]",
             "+", "}", "{", "¨", "´",
             ">", "< ", ";", ",", ":",
             "."),'',$string);

		return $string;
	}

	private function GetValoresNumericos(&$Registros = 0, &$Importe = 0)
	{
		$Registros = 0;
		foreach($this->input as $declarado) {
			$Importe += $declarado['imp_op_anual'];
			$Registros ++;
		}
	}

	public function saveFile()
	{
		$output = strip_tags(implode(PHP_EOL, $this->output));
		header("Cache-Control: no-cache, must-revalidate");
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header('Pragma: private');
		header("Content-Disposition: attachment; filename=".date('YmdHis')."_347.txt");
		header("Content-Length: " . strlen($output));
		header("Content-Type: application/octet-stream;");
		echo $output;
	}
}
?>