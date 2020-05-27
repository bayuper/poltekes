<?php 

class Home extends Controller{
    public function index(){
        $data['title'] = 'Sampai Jumpa';
        $this->view('home/index');
    }
}

?>