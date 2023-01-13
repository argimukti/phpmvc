<?php 
class About extends Controller{
  public function index($nama = 'argi', $pekerjaan = 'Gamers', $umur = 27){
    $data['nama']=$nama;
    $data['pekerjaan']=$pekerjaan;
    $data['umur']=$umur;
    $data['judul']= 'About Me';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footers');
  }
  public function page(){
    $data['judul'] = 'Pages';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footers');
  }
}


?>