<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class InfoController extends Controller {
    
    public function home(){
        $this->call->model('InfoModel');
        $data['lavaact'] = $this->InfoModel->getInfo();
        $this->call->view('home',$data);
    }
    


    public function add(){
        $First = $this->io->post('First');
        $Last = $this->io->post('Last');
        $Section = $this->io->post('Section');
        $Number = $this->io->post('Number');
        $bind = array(
            "First" => $First,
            "Last" => $Last,
            "Section" => $Section,
            "Number" => $Number,
        );
        $this->db->table('lavaact')->insert($bind);
        redirect('/home');
    }


    public function delete($id)
    {
        if(isset($id)){
            $this->db->table('lavaact')->where("id", $id)->delete();
            redirect('/home');
        }
        else{
            $_SESSION['delete'] = "FAILED";
            redirect('/home');
        }
        
    }


    public function edit($id)
    {
        $this->call->model('InfoModel');
        $data['lavaact'] = $this->InfoModel->getInfo();
        $data['edit'] = $this->InfoModel->searchInfo($id);
        $this->call->view('home', $data);
    }

    
    public function submitedit($id)
    {
        if(isset($id))
        {
            $First = $this->io->post('First');
            $Last = $this->io->post('Last');
            $Section = $this->io->post('Section');
            $Number = $this->io->post('Number');
        $data = [
            "First" => $First,
            "Last" => $Last,
            "Section" => $Section,
            "Number" => $Number,
        ];
        $this->db->table('lavaact')->where("id", $id)->update($data);
        redirect('/home');    
        }
        
    }


}
?>
