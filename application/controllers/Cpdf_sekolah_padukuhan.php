<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cpdf_sekolah_padukuhan extends CI_Controller {
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
        $pdf->Cell(0,7,'DAFTAR SEKOLAH & PADUKUHAN ANAK DESA WEDOMARTANI',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,7,'No',1,0,'C');
        $pdf->Cell(20,7,'NIK',1,0,'C');
        $pdf->Cell(40,7,'Nama Anak',1,0,'C');
        $pdf->Cell(35,7,'Alamat',1,0,'C');
        $pdf->Cell(10,7,'Usia',1,0,'C');
        $pdf->Cell(30,7,'Jenis Kelamin',1,0,'C');
        $pdf->Cell(30,7,'Agama',1,0,'C');
        $pdf->Cell(40,7,'Nama Sekolah',1,0,'C');
        $pdf->Cell(40,7,'Nama Padukuhan',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $anak = $this->db->query("SELECT * from tb_anak JOIN tb_sekolah 
                ON tb_anak.kd_sekolah=tb_sekolah.kd_sekolah JOIN tb_padukuhan ON tb_anak.kd_padukuhan=tb_padukuhan.kd_padukuhan;")->result();
        $no=0;
        foreach ($anak as $data){
            $no++;
            $pdf->Cell(10,7,$no,1,0, 'C');
            $pdf->Cell(20,7,$data->NIK,1,0);
            $pdf->Cell(40,7,$data->nama_anak,1,0);
            $pdf->Cell(35,7,$data->alamat,1,0);
            $pdf->Cell(10,7,$data->usia,1,0);
            $pdf->Cell(30,7,$data->Jenis_kelamin,1,0);
            $pdf->Cell(30,7,$data->agama,1,0);
            $pdf->Cell(40,7,$data->nama_sekolah,1,0);
            $pdf->Cell(40,7,$data->nama_padukuhan,1,1);

        }
        $pdf->Output();
    }
}