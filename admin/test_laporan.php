<?php
require('fpdf/fpdf.php');

class PDF extends FPDF {

    function Header() {
        //$this->Image('gfg1.png',10,8,33);
        // Set font untuk teks pertama dan kedua
        $this->SetFont('Times','B',20);
        // Mengatur posisi horizontal agar teks berada di tengah
        $this->Cell(0, 5, 'PEMERINTAH KABUPATEN KEPULAUAN SANGIHE', 0, 1, 'C');
        
        $this->SetFont('Times','BI',20);
        $this->Cell(0, 10, 'KECAMATAN TABUKAN UTARA KAMPUNG UTAURANO', 0, 1, 'C');
        
        // Simpan posisi saat ini
        $x = $this->GetX();
        $y = $this->GetY();
        
        // Hitung lebar teks "KAMPUNG UTAURANO"
        $textWidth = $this->GetStringWidth('KAMPUNG UTAURANO');
        
        // Hitung posisi X awal dan akhir garis
        $lineStartX = $x - $textWidth / 2; // Menggeser ke kiri sejauh setengah lebar teks
        $lineEndX = $x + $textWidth / 2; // Menggeser ke kanan sejauh setengah lebar teks
        
        // Tambahkan garis bawah di bawah teks "KAMPUNG UTAURANO"
        $this->Line($lineStartX, $y + 8, $lineEndX, $y + 8);
        
        $this->Cell(0, 5, 'KAMPUNG UTAURANO', 0, 1, 'C');
        $this->Ln(20);
    }
    
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Times','I',8);
        $this->Cell(0,10,'Page ' . $this->PageNo() .'/{nb}',0,0,'C');
    }
}

$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->Output();
?>
