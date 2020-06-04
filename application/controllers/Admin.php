<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('ciqrcode');

        $this->load->library('pdf');
    }


    public function Index()
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $data['team'] = $this->db->count_all('team');
            $data['kompetisi'] = $this->db->count_all('kompetisi');
            $data['user'] = $this->db->count_all('user');
            $data['title'] = "UMIKOMPETISI";
            $this->load->view('templates/nav', $data);
            $this->load->view('templates/aside');
            $this->load->view("admin/Index", $data);
            $this->load->view('templates/foot');
        }
    }
    public function pembayaran()
    {

        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $data['pembayaran'] = $this->db->query("select *from pembayaran,team where pembayaran.id_team=team.id_team")->result_array();
            $data['title'] = "UMIKOMPETISI";
            $this->load->view('templates/nav', $data);
            $this->load->view('templates/aside');
            $this->load->view("admin/pembayaran");
            $this->load->view('templates/foot');
        }
    }






    public function peserta()
    {

        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $data['team'] = $this->db->query("SELECT * FROM team")->result_array();
            $data['title'] = "UMIKOMPETISI";
            $this->load->view('templates/nav', $data);
            $this->load->view('templates/aside');
            $this->load->view("admin/peserta", $data);
            $this->load->view('templates/foot');
        }
    }

    public function kompetisi()
    {

        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $data['kompetisi'] = $this->db->query("SELECT * FROM kompetisi")->result_array();
            $this->form_validation->set_rules('nama_kompetisi', 'nama_kompetisi', 'required');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
            if ($this->form_validation->run() ==  false) {
                $data['title'] = "UMIKOMPETISI";
                $this->load->view('templates/nav', $data);
                $this->load->view('templates/aside');
                $this->load->view("admin/kompetisi");
                $this->load->view('templates/foot');
            } else {

                $data = [
                    'nama_kompetisi' => htmlspecialchars($this->input->post('nama_kompetisi')),
                    'deskripsi' => htmlspecialchars($this->input->post('deskripsi'))
                ];

                // cek jika ada gambar yang akan diupload
                $upload_image = $_FILES['berkas']['name'];

                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|';
                    $config['max_size']      = '2048';
                    $config['upload_path'] = './assets/images/';

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

                $this->db->insert('kompetisi', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kompetisi Telah Berhasil DiTambahkan</div>');
                redirect('admin/kompetisi');
            }
        }
    }

    public function hapuskompetisi($id_kompetisi)
    {
        $this->db->where('id_kompetisi', $id_kompetisi);
        $query = $this->db->get('kompetisi');
        $row = $query->row();

        unlink("./assets/images/$row->gambar");

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kompetisi Telah Berhasil Di Hapus</div>');
        $this->db->delete('kompetisi', array('id_kompetisi' => $id_kompetisi));
        redirect('admin/kompetisi');
    }














    public function user()
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $data['user'] = $this->db->query("SELECT * FROM user ")->result_array();
            $data['title'] = "UMIKOMPETISI";

            $this->load->view('templates/nav', $data);
            $this->load->view('templates/aside');
            $this->load->view("admin/user");
            $this->load->view('templates/foot');
        }
    }


    public function hapususer($id_user)
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            // $this->db->where('id', $id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User Telah Berhasil Di Hapus</div>');

            $this->db->delete('user', ['id_user' => $id_user]);
            redirect('admin/user');
        }
    }

    public function pesertabayar($id_team)
    {

        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $data = array(
                'Validasi_pembayaran'   => 'Terkonfirmasi'
            );

            $kosong = $this->db->get_where('team', ['id_team' => $id_team])->result();
            $id_peserta = $kosong[0]->id_peserta;

            $this->db->where(array('id_team' => $id_team));
            $this->db->update('pembayaran', $data);

            $this->db->where(array('id_team' => $id_team));
            $this->db->update('team', array('validasi' => 'Terkonfirmasi'));

            $this->db->where(array('id_peserta' => $id_peserta));
            $this->db->update('peserta', array('is_active' => 1));


            redirect('admin/pembayaran');
        }
    }




    public function panitia()
    {

        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $data['panitia'] = $this->db->query("SELECT * FROM panitia")->result_array();

            $this->form_validation->set_rules('nama_panitia', 'nama_panitia', 'required');
            $this->form_validation->set_rules('jabatan', 'jabatan', 'required');

            if ($this->form_validation->run() ==  false) {
                $data['title'] = "UMIKOMPETISI";
                $this->load->view('templates/nav', $data);
                $this->load->view('templates/aside');
                $this->load->view("admin/panitia", $data);
                $this->load->view('templates/foot');
            } else {
                //qr code

                $config['cacheable']    = true; //boolean, the default is true
                $config['cachedir']     = './assets/'; //string, the default is application/cache/
                $config['errorlog']     = './assets/'; //string, the default is application/logs/
                $config['imagedir']     = './assets/images/qrcodepanitia/'; //direktori penyimpanan qr code
                $config['quality']      = true; //boolean, the default is true
                $config['size']         = '1024'; //interger, the default is 1024
                $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
                $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
                $this->ciqrcode->initialize($config);

                $image_name = $this->input->post('nama_panitia') . '.png'; //buat name dari qr code sesuai dengan nim

                $params['data'] = $this->input->post('nama_panitia'); //data yang akan di jadikan QR CODE
                $params['level'] = 'H'; //H=High
                $params['size'] = 10;
                $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
                $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE


                $data = [
                    'nama_panitia' => htmlspecialchars($this->input->post('nama_panitia')),
                    'jabatan' => htmlspecialchars($this->input->post('jabatan')),

                    'qr_code'   => $image_name
                ];
                $this->db->insert('panitia', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">panitia Telah Berhasil DiTambahkan</div>');
                redirect('admin/panitia');
            }
        }
    }


    public function hapuspanitia($id_panitia)
    {
        $this->db->where('id_panitia', $id_panitia);
        $query = $this->db->get('panitia');
        $row = $query->row();

        unlink("./assets/images/qrcodepanitia/$row->qr_code");

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Panitia Telah Berhasil Di Hapus</div>');
        $this->db->delete('panitia', array('id_panitia' => $id_panitia));
        redirect('admin/panitia');
    }



    public function cetakteam()
    {
        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(190, 7, 'Daftar Nama Team Yang Ikut Berlomba', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'Daftar Team', 0, 1, 'C');

        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(30, 6, 'Nama Team', 1, 0);
        $pdf->Cell(35, 6, 'Nama Leader', 1, 0);
        $pdf->Cell(85, 6, 'Institusi', 1, 0);
        $pdf->Cell(40, 6, 'Validasi Pembayaran', 1, 1);
        $pdf->SetFont('Arial', '', 10);

        $team = $this->db->query("SELECT nama_team, nama_leader,institusi,validasi_pembayaran FROM pembayaran INNER JOIN team ON
pembayaran.id_team=team.id_team where pembayaran.validasi_pembayaran ='Terkonfirmasi'
")->result();
        foreach ($team as $row) {
            $pdf->Cell(30, 6, $row->nama_team, 1, 0);
            $pdf->Cell(35, 6, $row->nama_leader, 1, 0);
            $pdf->Cell(85, 6, $row->institusi, 1, 0);
            $pdf->Cell(40, 6, $row->validasi_pembayaran, 1, 1);
        }
        $pdf->Output();
    }







    public function cetakkartu($id_panitia)
    {
        if ($this->session->userdata('status') != "login") {
            redirect("auth");
        } else {
            $fpdf = new FPDF();
            $fpdf->AddPage();
            $fpdf->setMargins(22, 45, 11.6);
            $fpdf->Image('./assets/images/bg_umipanitia.png', 0, 0,);
            $fpdf->SetFont('Arial', 'B', 20);


            $panitia = $this->db->get_where('panitia', ['id_panitia' => $id_panitia])->row_array();


            $fpdf->Cell(0, 230, $panitia['nama_panitia'], 0, 0, 'C');
            $fpdf->SetX(12.6);

            $fpdf->Cell(0, 265,  $panitia['jabatan'], 0, 0, 'C');
            $fpdf->SetX(12.6);

            $fpdf->Image('./assets/images/qrcodepanitia/' . $panitia['qr_code'], 70, 150, -100);



            $fpdf->setleftmargin(50);

            $fpdf->Output();
        }
    }
}
