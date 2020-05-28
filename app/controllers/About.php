<?php
class About extends Controller{
    public function index($nama){
        $data['nama']= $nama;
        $data['judul'] = 'about';
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }
    
    public function page(){

        //mengisi data 
        //$data['data1'] = $data1;
        //$data['data2'] = $data2;
        //$data['data3'] = $data3;
        $data['judul'] = 'page';
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
        
    }
    
}