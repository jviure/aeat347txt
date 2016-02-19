<h2>AEAT 347 txt PHP</h2>

Utilidad para generar la Declaración Anual de Operaciones con Terceros. Realizada en PHP, código obtenido a partir de la traducción del XLSM de NetSistemas.

Ejemplo:

<code>
$declarados = array(
	array(
		"nif_perceptor" => "A09029414",
		"nombre_perceptor" => "EMPRESA IMAGINARIA 1",
		"provincia" => "8",
		"pais" => "",
		"clave" => "A",
		"imp_op_anual" => "1161003.37",
		"imp_op_pri_tri" => "221916.10",
		"imp_op_seg_tri" => "368163.95",
		"imp_op_ter_tri" => "326698.10",
		"imp_op_cua_tri" => "244225.22",
		"imp_cr_caja" => "0",
		"nif_op_comunitario" => "",
		"op_criterio_caja" => "",
		"op_inv_sujeto_pasivo" => "",
		"op_biene_vinculados" => "",
		"op_inv_sujeto_pasivo" => ""
	),
	array(
		"nif_perceptor" => "13133234G",
		"nombre_perceptor" => "PARTICULAR EJEMPLO 1",
		"provincia" => "2",
		"pais" => "",
		"clave" => "A",
		"imp_op_anual" => "10732.66",
		"imp_op_pri_tri" => "2754.33",
		"imp_op_seg_tri" => "2690.04",
		"imp_op_ter_tri" => "3697.34",
		"imp_op_cua_tri" => "1590.95",
		"imp_cr_caja" => "0",
		"nif_op_comunitario" => "",
		"op_criterio_caja" => "",
		"op_inv_sujeto_pasivo" => "",
		"op_biene_vinculados" => "",
		"op_inv_sujeto_pasivo" => ""
	)
);
$aeat357 = new AEAT347($declarados, $ejercicio, "B99999999", "Nombre empresa", "938794555", "JORDI VIURE FONT");
$aeat357->GenDeclaranteLine();
$aeat357->GenDeclaradosLines();
$aeat357->saveFile();
</code>
