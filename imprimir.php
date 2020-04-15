<?php
	require("pdf/fpdf.php");
	require("clases/db_abstract_model.php");
	require("clases/catalogo_model.php");
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	// Logo
	$this->Image('assets/img/logo.png',10,8,63); 
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Movernos a la derecha
	$this->Cell(80);
	// Título
	$this->Cell(50,10,'',0,0,'C');
	// Salto de línea
	$this->Ln(20);
}

// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Número de página
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'R');
}
}

// Creación del objeto de la clase heredada
    $año=date("Y");
	$mes=date("m");
	$dia=date("d");
	$id = $_GET['id'];
	$producto = new Producto();
	$producto->get($id);
	$productos = $producto->get_rows();
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',10);
	
	foreach ($productos as $key => $value) {
        $pdf->Image('assets/img/'.$value['imagen'],10,60,180,80);
        $pdf->cell(30,240,"Titulo",0,0,'L');
        $pdf->cell(30,240,"Tipo",0,0,'L');
        $pdf->cell(30,240,"Dibujo",0,0,'L');
        $pdf->cell(30,240,"Color",0,0,'L');
        $pdf->cell(30,240,"Tipo de lana",0,1,'L');
         $pdf->cell(30,-200,$value['titulo'],0,0,'L');
		$pdf->cell(30,-200,$value['tipo'],0,0,'L');
		$pdf->cell(30,-200,$value['dibujo'],0,0,'L');
        $pdf->cell(30,-200,$value['colores'],0,0,'L');
        $pdf->cell(30,-200,$value['tipo_lana'],0,1,'L'); 
	}
    
	$pdf->cell(40,-50,"En Crevillent a $dia de $mes de $año",0,0);
	$pdf->SetFont('Arial','B',14);
	$pdf->Output();


?>