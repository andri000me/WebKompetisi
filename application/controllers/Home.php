<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('ciqrcode');

        $this->load->library('pdf');

        //load the department_model
        $this->load->model('Kompetisi_model');
    }
    public function Index()
    {

        $data['kompetisi'] = $this->db->query("SELECT * FROM kompetisi")->result_array();
        $data['title'] = "UMIKOMPETISI";
        $this->load->view("templates/header", $data);
        $this->load->view("Home/Index", $data);
        $this->load->view("templates/footer");
    }
    public function detailkompetisi()
    {
        $data['title'] = "UMIKOMPETISI";
        $this->load->view("Home/detailkompetisi", $data);
        $this->load->view("templates/footer");
    }
    public function daftarkompetisi()
    {


        $data['kompetisi'] = $this->db->query("SELECT * FROM kompetisi")->result_array();

        $this->form_validation->set_rules('nama_team', 'nama_team', 'required|is_unique[team.nama_team]', [
            'is_unique' => 'Nama Team Sudah dipakai'
        ]);
        $this->form_validation->set_rules('institusi', 'institusi', 'required');
        $this->form_validation->set_rules('nama_leader', 'nama_leader', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('prodi', 'prodi', 'required');
        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('no_wa', 'no_wa', 'required');
        // $this->form_validation->set_rules('namaanggota1', 'namaanggota1', 'required');
        // $this->form_validation->set_rules('email1', 'email1', 'required');
        // $this->form_validation->set_rules('prodi1', 'prodi1', 'required');
        // $this->form_validation->set_rules('nim1', 'nim1', 'required');
        // $this->form_validation->set_rules('no_wa1', 'no_wa1', 'required');
        // $this->form_validation->set_rules('namaanggota2', 'namaanggota2', 'required');
        // $this->form_validation->set_rules('email2', 'email2', 'required');
        // $this->form_validation->set_rules('prodi2', 'prodi2', 'required');
        // $this->form_validation->set_rules('nim2', 'nim2', 'required');
        // $this->form_validation->set_rules('no_wa2', 'no_wa2', 'required');


        if ($this->form_validation->run() ==  true) {

            //qr code

            $config['cacheable']    = true; //boolean, the default is true
            $config['cachedir']     = './assets/'; //string, the default is application/cache/
            $config['errorlog']     = './assets/'; //string, the default is application/logs/
            $config['imagedir']     = './assets/images/qrcodeteam/'; //direktori penyimpanan qr code
            $config['quality']      = true; //boolean, the default is true
            $config['size']         = '1024'; //interger, the default is 1024
            $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
            $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
            $this->ciqrcode->initialize($config);

            $image_name = $this->input->post('nama_team') . '.png'; //buat name dari qr code sesuai dengan nim

            $params['data'] = $this->input->post('nama_team'); //data yang akan di jadikan QR CODE
            $params['level'] = 'H'; //H=High
            $params['size'] = 10;
            $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
            $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

            $data = [
                'id_peserta' => htmlspecialchars($this->input->post('id_peserta')),
                'nama_team' => htmlspecialchars($this->input->post('nama_team')),
                'institusi' => htmlspecialchars($this->input->post('institusi')),
                'id_kompetisi' => htmlspecialchars($this->input->post('id_kompetisi')),
                'nama_leader' => htmlspecialchars($this->input->post('nama_leader')),
                'email' => htmlspecialchars($this->input->post('email')),
                'prodi' => htmlspecialchars($this->input->post('prodi')),
                'nim' => htmlspecialchars($this->input->post('nim')),
                'no_wa' => htmlspecialchars($this->input->post('no_wa')),
                'jenkel' => htmlspecialchars($this->input->post('jenkel')),
                'namaanggota1' => htmlspecialchars($this->input->post('namaanggota1')),
                'email1' => htmlspecialchars($this->input->post('email1')),
                'prodi1' => htmlspecialchars($this->input->post('prodi1')),
                'nim1' => htmlspecialchars($this->input->post('nim1')),
                'no_wa1' => htmlspecialchars($this->input->post('no_wa1')),
                'jenkel1' => htmlspecialchars($this->input->post('jenkel1')),
                'namaanggota2' => htmlspecialchars($this->input->post('namaanggota2')),
                'email2' => htmlspecialchars($this->input->post('email2')),
                'prodi2' => htmlspecialchars($this->input->post('prodi2')),
                'nim2' => htmlspecialchars($this->input->post('nim2')),
                'no_wa2' => htmlspecialchars($this->input->post('no_wa2')),
                'jenkel2' => htmlspecialchars($this->input->post('jenkel2')),
                'namaanggota3' => htmlspecialchars($this->input->post('namaanggota3')),
                'email3' => htmlspecialchars($this->input->post('email3')),
                'prodi3' => htmlspecialchars($this->input->post('prodi3')),
                'nim3' => htmlspecialchars($this->input->post('nim3')),
                'no_wa3' => htmlspecialchars($this->input->post('no_wa3')),
                'jenkel3' => htmlspecialchars($this->input->post('jenkel3')),
                'namaanggota4' => htmlspecialchars($this->input->post('namaanggota4')),
                'email4' => htmlspecialchars($this->input->post('email4')),
                'prodi4' => htmlspecialchars($this->input->post('prodi4')),
                'nim4' => htmlspecialchars($this->input->post('nim4')),
                'no_wa4' => htmlspecialchars($this->input->post('no_wa4')),
                'jenkel4' => htmlspecialchars($this->input->post('jenkel4')),
                'namaanggota5' => htmlspecialchars($this->input->post('namaanggota5')),
                'email5' => htmlspecialchars($this->input->post('email5')),
                'prodi5' => htmlspecialchars($this->input->post('prodi5')),
                'nim5' => htmlspecialchars($this->input->post('nim5')),
                'no_wa5' => htmlspecialchars($this->input->post('no_wa5')),
                'jenkel5' => htmlspecialchars($this->input->post('jenkel5')),
                'validasi' => 'Belum Terkonfirmasi',
                'qr_code'   => $image_name
            ];



            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['berkas']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'zip|rar|';
                $config['upload_path'] = './assets/images/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('berkas')) {
                    $old_image = $data['images']['filezip'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/images/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('filezip', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }



            $this->db->insert('team', $data);
            $this->db->where(array('id_peserta' => $this->input->post('id_peserta')));
            $this->db->update('peserta', array('is_active' => 1));


            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Anda Mendaftar </div>');
            redirect('home/dashboard');
        } else {

            $data['title'] = "UMIKOMPETISI";
            $this->load->view("Home/daftarkompetisi", $data);
            $this->load->view("templates/footer");
        }
    }
    public function dashboard()
    {
        $ci = get_instance();
        if (!$ci->session->userdata('id_peserta')) {
            redirect('authpeserta/');
        } else {
            $data['team'] = $this->db->get_where('team', ['id_peserta' => $this->session->userdata('id_peserta')])->row_array();

            $data['title'] = "UMIKOMPETISI";
            $this->load->view("Home/dashboard", $data);
            $this->load->view("templates/footer");
        }
    }
    public function pengumuman()
    {
        $data['title'] = "UMIKOMPETISI";
        $this->load->view("Home/pengumuman", $data);
        $this->load->view("templates/footer");
    }
    public function pembayaran()
    {
        $ci = get_instance();
        if (!$ci->session->userdata('id_peserta')) {
            redirect('authpeserta/');
        } else {

            $data['team'] = $this->db->get_where('team', ['id_peserta' => $this->session->userdata('id_peserta')])->row_array();

            if ($data['team']['validasi'] == 'Belum Terkonfirmasi') {

                $this->form_validation->set_rules('id_team', 'id_team', 'required');

                if ($this->form_validation->run() ==  false) {
                    $data['title'] = "UMIKOMPETISI";
                    $this->load->view("Home/pembayaran", $data);
                    $this->load->view("templates/formpembayaran");
                    $this->load->view("templates/footer");
                } else {
                    $data = [
                        'id_team' => htmlspecialchars($this->input->post('id_team')),
                        'validasi_pembayaran' => 'Belum Terkonfirmasi',
                        'tgl_pembayaran' => date('Y-m-d')
                    ];
                    // cek jika ada gambar yang akan diupload
                    $upload_image = $_FILES['berkas']['name'];

                    if ($upload_image) {
                        $config['allowed_types'] = 'gif|jpg|png|';
                        $config['max_size']      = '5048';
                        $config['upload_path'] = './assets/images/pembayaran/';

                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('berkas')) {
                            $old_image = $data['images']['gambar'];
                            if ($old_image != 'default.jpg') {
                                unlink(FCPATH . 'assets/images/' . $old_image);
                            }
                            $new_image = $this->upload->data('file_name');
                            $this->db->set('gambar', $new_image);
                        } else {
                            echo $this->upload->display_errors();
                        }
                    }

                    $this->db->insert('pembayaran', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terimakasih Telah Melakukan pembayaran , Admin akan mengecek terlebih dahulu.. </div>');
                    redirect('home/pembayaran');
                }
            } else {
                $data['title'] = "UMIKOMPETISI";
                $this->load->view("Home/pembayaran", $data);
                $this->load->view("templates/footer");
            }
        }
    }

    public function detail($id_kompetisi = '')
    {

        if ($id_kompetisi) {
            $data['kompetisi'] = $this->Kompetisi_model->getKomById($id_kompetisi);
            $data['title'] = "JOENFLORIST";
            $this->load->view("templates/header", $data);
            $this->load->view("home/detailkompetisi", $data);
            $this->load->view("templates/footer");
        } else {
            $this->load->view('error/error');
        }
    }

    public function downloadfile()
    {
        force_download('assets/images/file/tes.pdf', NULL);
    }



    public function cetakkartu()
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $fpdf = new FPDF();
            $fpdf->AddPage();
            $fpdf->setMargins(22, 45, 11.6);
            $fpdf->Image('./assets/images/bg_umi.png', 0, 0,);
            $fpdf->SetFont('Arial', 'B', 20);


            $team = $this->db->get_where('team', ['id_peserta' => $this->session->userdata('id_peserta')])->row_array();


            $fpdf->Cell(0, 240, 'TEAM : ' . $team['nama_team'], 0, 0, 'C');
            $fpdf->SetX(12.6);

            $fpdf->Image('./assets/images/qrcodeteam/' . $team['qr_code'], 70, 145, -100);



            $fpdf->setleftmargin(50);

            $fpdf->Output();
        }
    }
}
