<?php 
class Mahasiswa extends Controller {
  public function index()
  {
    $data['judul'] = 'Daftar Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footers');
  }
  public function detail($id)
  {
    $data['judul'] = 'Detail Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view('templates/header', $data);
    $this->view('mahasiswa/detail', $data);
    $this->view('templates/footers');
  }
// Tambajh
  public function tambah()
  {
    if ( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) >0){
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location:' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location:' . BASEURL . '/mahasiswa');
      exit;
    }
  }
// hapus
public function hapus($id)
  {
    if ( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) >0){
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location:' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'gagal', 'danger');
      header('Location:' . BASEURL . '/mahasiswa');
      exit;
    }
  }

  // ubah get
  public function getubah()
  {
    echo 'OK';
    // echo json_encode ($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
  }






}


?>