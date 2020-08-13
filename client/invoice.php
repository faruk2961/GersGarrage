<?php 
include('conn.php');
include_once('fpdf.php');

class PDF extends fpdf
{
	function Header(){
		$this->SetFont('Arial', 'B', 30);
		$this->Cell(185, 15, 'Invoice', 1,0,'C');
		$this->Ln(20);
	}
	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Arial', 'I', 8);
		$this->Cell(0, 10, 'Page' .$this->PageNo().'/{nb}', 0, 0, 'C');
	}
}

$result = mysqli_query($conn, "SELECT * FROM invoice");
$row = mysqli_fetch_assoc($result);

$pdf = new PDF();
$pdf -> AddPage();
// $pdf->AliasNbPages();
// $pdf->SetFont('Arial', 'B', 50);

	


    $pdf->SetFont('Arial', '', 15);
    $pdf->Ln();
   	$pdf->Cell(65, 10, 'Date :-', 2);
   	$pdf->Cell(65, 10,$row['date'] , 2);
    $pdf->Ln();
   	$pdf->Cell(65, 10, 'Customer Name', 2);
   	$pdf->Cell(65, 10, $row['name'], 2);
   	$pdf->Ln();
   	$pdf->Cell(65, 10, 'Mobile Number', 2);
   	$pdf->Cell(65, 10, $row['mobile'], 2);
   	 $pdf->Ln();
   	 $pdf->Cell(65, 10, 'Vehicle', 2);
   	$pdf->Cell(65, 10, $row['vehicle'], 2);
   	$pdf->Ln();
   	$pdf->Cell(65, 10, 'Licence No.', 2);
   	$pdf->Cell(65, 10, $row['licence'], 2);
   	$pdf->Ln();
   	$pdf->Cell(65, 10, 'Annual Service', 2);
   	$pdf->Cell(65, 10, '$'.$row['annual_service'], 2);
   	$pdf->Ln();
   	$pdf->Cell(65, 10, 'Mini Valet', 2);
   	$pdf->Cell(65, 10,'$'.$row['mini_valet'], 2);
   	$pdf->Ln();
   	$pdf->Cell(65, 10, 'Car mat', 2);
   	$pdf->Cell(65, 10, '$'.$row['car_mat'], 2);
   	$pdf->Ln();
   	$pdf->Cell(65, 10, 'Part Name', 2);
   	$pdf->Cell(65, 10, $row['parts'], 2);
   	$pdf->Ln();
   	$pdf->Cell(65, 10, 'Part Price', 2);
   	$pdf->Cell(65, 10, '$'.$row['part_price'], 2);
   	$pdf->Ln();
   	$pdf->SetFont('Arial', 'B', 15);
   	$pdf->Cell(65, 10, 'Total', 2);
   	$pdf->Cell(65, 10, '$'.$row['total'], 2);
    $pdf->Output();

?>