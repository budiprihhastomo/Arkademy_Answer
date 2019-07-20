<?php 
defined('BASEPATH') OR exit('Maaf, Anda Dilarang Mengakses Area Ini');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Helper');
    }
    
    public function index() {
        $this->var = [
            'table'      => $this->Helper->FetchAllData(),
            'work'      => $this->Helper->FetchDataComboBox('work'),
            'salary'      => $this->Helper->FetchDataComboBox('kategori'),
        ];
        $this->load->view('v_home',$this->var);
    }

    public function save_data() {
        if($this->input->is_ajax_request())
        {
            $id = $this->input->post('id');
            if(!$id) {
                $data = $this->collect_data_add();
                $this->var =[
                    'result' => $res = ($this->Helper->insertData('nama',$data) > 0 ? 'success' : 'error'),
                    'msg' => ($res == 'success' ? 'Berhasil Menyimpan Data' : 'Gagal Menyimpan Data'),
                ];
            }
            else {
                $data = $this->collect_data_update();
                $this->var =[
                    'result' => $res = ($this->Helper->updateData('nama',$data,['id'=>$id]) > 0 ? 'success' : 'error'),
                    'msg' => ($res == 'success' ? 'Berhasil Menyimpan Data' : 'Gagal Menyimpan Data'),
                ];
            }
            $this->output
            ->set_content_type('application/json','utf-8')
            ->set_output(json_encode($this->var,JSON_PRETTY_PRINT))
            ->_display();
            exit;
        }
    }

    public function delete_data() {
        if($this->input->is_ajax_request())
        {
            $id = $this->input->post('id');
            if($id) {
                $this->var =[
                    'result' => $res = ($this->Helper->deleteData('nama',['id'=>$id]) > 0 ? 'success' : 'error'),
                    'msg' => ($res == 'success' ? 'Berhasil Menghapus Data' : 'Gagal Menghapus Data'),
                ];
            }
            $this->output
            ->set_content_type('application/json','utf-8')
            ->set_output(json_encode($this->var,JSON_PRETTY_PRINT))
            ->_display();
            exit;
        }
    }

    protected function collect_data_add() {
        return [
            'name' => $this->input->post('nama'),
            'id_work' => $this->input->post('work'),
            'id_salary' => $this->input->post('salary'),
        ];
    }

    protected function collect_data_update() {
        return [
            'id' => $this->input->post('id'),
            'name' => $this->input->post('e_nama'),
            'id_work' => $this->input->post('e_work'),
            'id_salary' => $this->input->post('e_salary'),
        ];
    }
}