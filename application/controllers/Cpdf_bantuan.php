<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cpdf_bantuan extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('CetakPdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    }
    function index()
    {
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm','Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'DAFTAR ANAK PENERIMA BANTUAN DESA WEDOMARTANI',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,7,'No',1,0,'C');
        $pdf->Cell(20,7,'NIK',1,0,'C');
        $pdf->Cell(60,7,'Nama Anak',1,0,'C');
        $pdf->Cell(60,7,'Alamat',1,0,'C');
        $pdf->Cell(10,7,'usia',1,0,'C');
        $pdf->Cell(30,7,'Nama Ibu',1,0,'C');
        $pdf->Cell(30,7,'Nama Ayah',1,0,'C');
        $pdf->Cell(40,7,'Pendapatan Keluarga',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $anak = $this->db->query("SELECT * from tb_anak WHERE jml_pendapatan <= 10000000")->result();
        $no=0;
        foreach ($anak as $data){
            $no++;
            $pdf->Cell(10,7,$no,1,0, 'C');
            $pdf->Cell(20,7,$data->NIK,1,0);
            $pdf->Cell(60,7,$data->nama_anak,1,0);
            $pdf->Cell(60,7,$data->alamat,1,0);
            $pdf->Cell(10,7,$data->usia,1,0);
            $pdf->Cell(30,7,$data->nama_ibu,1,0);
            $pdf->Cell(30,7,$data->nama_ayah,1,0);
            $pdf->Cell(40,7,$data->jml_pendapatan,1,1);


        }
        $pdf->Output();
    }
}