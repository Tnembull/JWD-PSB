<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\BaseController;
use App\Models\SiswaModel;
use App\Models\UserModel;
use Dompdf\Dompdf;
use TCPDF;
class User extends Controller
{



	public function __construct() {
 
		// Mendeklarasikan class ProductModel menggunakan $this->product
		$this->siswa = new SiswaModel();
		$this->user = new UserModel();
		/* Catatan:
		Apa yang ada di dalam function construct ini nantinya bisa digunakan
		pada function di dalam class Product 
		*/
	}


	public function index()
	{
		$who = session();
		$data['user'] = $who->get();
		return view('User/dashboard', $data);
	}

	public function form()
	{
		$who = session();
		$data['user'] = $who->get();
		return view('User/form', $data);
	}

	public function sudah()
	{
		$who = session();
		$data['user'] = $who->get();
		return view('User/sudah', $data);
	}
	public function proses()
	{
		$who = session();
		$data['user'] = $who->get();
		return view('User/proses', $data);
	}

	public function status($id)
	{
		$who = session();
		$data['siswa'] = $this->siswa->getSiswa($id);
		$data['user'] = $who->get();
		return view('User/status', $data);
	}

	// public function printpdf($id)
	// {
	// 	var_dump($id);
		
	// 	$who = session();
	// 	$data['siswa'] = $this->siswa->getSiswa($id);
	// 	$data['user'] = $who->get();

	// 	// $html = view('transaksi/invoice',[
	// 	// 	'transaksi'=> $transaksi,
	// 	// 	'pembeli' => $pembeli,
	// 	// 	'barang' => $barang,
	// 	// ]);
	// 	// return 

	// 	$html = view('User/status', $data);
	// 	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	// 	$pdf->AddPage();
	// 	$pdf->writeHTML($html);
	// 	$pdf->Output('StatusPendaftaran.pdf', 'I');
	// }

	public function testpdf($id)
	{
		$who = session();
		$data['siswa'] = $this->siswa->getSiswa($id);
		$data['user'] = $who->get();
		$html = view('User/status', $data);
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Muhammad Nur Ashiddiqi');
		$pdf->SetTitle('SMK Apa Aja dah');
		$pdf->SetSubject('PSB Online');
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(255,64,255), array(255,64,128));
		$pdf->setFooterData(array(0,64,0), array(0,64,128));

		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
			require_once(dirname(__FILE__).'/lang/eng.php');
			$pdf->setLanguageArray($l);
		}
		// $pdf->setPrintHeader(false);
		// $pdf->setPrintFooter(false);
		$pdf->addPage();
		$pdf->writeHTML($html);
		$this->response->setContentType('application/pdf');
		$pdf->Output('document.pdf', 'I');
	}

	public function daftar()
	{
		$siswa_nama = $this->request->getPost('siswa_nama');
		$siswa_nisn = $this->request->getPost('siswa_nisn');
		$siswa_tempat = $this->request->getPost('siswa_tempat');
		$tanggal_lahir = $this->request->getPost('tanggal_lahir');
		$siswa_jk = $this->request->getPost('siswa_jk');
		$siswa_agama = $this->request->getPost('siswa_agama');
		$siswa_sekolah = $this->request->getPost('siswa_sekolah');
		$nilai_mtk = $this->request->getPost('mtk');
		$nilai_inggris = $this->request->getPost('inggris');
		$user_id = $this->request->getPost('user_id');

		$data = [
			'siswa_nama' => $siswa_nama,
			'siswa_nisn' => $siswa_nisn,
			'siswa_tempat' => $siswa_tempat,
			'tanggal_lahir' => $tanggal_lahir,
			'siswa_jk' => $siswa_jk,
			'siswa_agama' => $siswa_agama,
			'siswa_sekolah' => $siswa_sekolah,
			'nilai_mtk' => $nilai_mtk,
			'nilai_inggris' => $nilai_inggris,
			'user_id' => $user_id
		];

		$simpan = $this->siswa->insert_siswa($data);

		if($simpan)
        {
			$ubah = 'proses';
			$status = [
				'status' => $ubah
			];
			$session = session();
			$id = $session->get('user_id');

			$this->user->update_user($status, $id);
	
			$ses_data = [
				'user_id'       => $id,
				'user_name'     => $session->get('user_name'),
				'nama_lengkap'  => $session->get('nama_lengkap'),
				'status' 		=> $ubah,
				'logged_in'     => TRUE
			];
			$session->set($ses_data);
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Created successfully');
        // Redirect halaman ke product
        return redirect()->to(base_url('/User')); 
        }

	}
}