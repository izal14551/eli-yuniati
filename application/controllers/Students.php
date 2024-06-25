<?php
class Students extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->library('session');
        $this->load->helper('url'); // Tambahkan ini


    }

    public function index()
    {
        $data['tb_mahasiswa'] = $this->Student_model->get_all_students();
        $this->load->view('student_list', $data);
    }

    public function create()
    {
        $this->load->view('student_form');
    }

    public function store()
    {
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'agama' => $this->input->post('agama'),
            'status' => $this->input->post('status'),
            'foto' => $this->input->post('foto')
        );

        $this->Student_model->insert_student($data);
        redirect('students');
    }

    public function edit($id)
    {
        $data['tb_mahasiswa'] = $this->Student_model->get_student($id);
        $this->load->view('student_edit', $data);
    }

    public function update($id)
    {
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'agama' => $this->input->post('agama'),
            'status' => $this->input->post('status'),
            'foto' => $this->input->post('foto')
        );

        $this->Student_model->update_student($id, $data);
        redirect('students');
    }

    public function delete($id)
    {
        $this->Student_model->delete_student($id);
        redirect('students');
    }
}
