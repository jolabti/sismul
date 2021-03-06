<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
    if($this->session->userdata('validamin'))
    {
         $this->home();
    }
    else
		{
        $this->loginAdmin();
	  }
	}

	function home()
	{
		$this->load->model('webmodel');
		$username = $this->session->userdata('uname');
 	 	$data['tampilHome'] = $this->webmodel->get_karya();



		$data['unameku']= $username;
		$this->load->view('welcome_message.php',$data);

	}


	function signup(){

			$this->load->view('signup');
	}

	function about(){
				$this->load->view('about');
	}

	function loginAdmin()
 	{

 	$this->load->model('webmodel');
    if($this->session->userdata('validamin'))
    {
         $this->home();

    }

    else
    {

         $this->load->library('form_validation');

         $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
         $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');


		   if($this->form_validation->run() == FALSE)
		   {
		     //Jika validasi gagal user akan diarahkan kembali ke halaman login
		     $this->load->view('login');
		   }

		   else
		   {

		      $this->load->model('webmodel');
		      $cekmin = $this->webmodel->validasiAdmin();
		        if($cekmin)
		        {
		            $this->home();
		        }
		        else
		        {
		           $this->load->view('login');
		         }

     }

   }

 }

 function upload() {
			 $config['upload_path'] = './videos/';
		 	 $config['allowed_types'] = '*';
			 //$config['max_size'] = '5000';
			 $this->load->library('upload', $config);
			 if ( ! $this->upload->do_upload('userfile')) {
					 echo $this->upload->display_errors();
			 } else {
			 //here $file_data receives an array that has all the info
		 //pertaining to the upload, including 'file_name'
			   $file_data = $this->upload->data();
				 $username = $this->session->userdata('uname');
				 $uid = $this->session->userdata('userid');
				 //	$data['unameku']= $username;

				 $this->load->model('webmodel');
				 $idkarya = "";
				 $iduploader = $uid ;
				 $judulvideo = $this->input->post('judulvideo');
				 $keterangan = $this->input->post('keterangan');
				 $kategori = $this->input->post('kategori');
				 $filename=$file_data['file_name'];
				 $this->webmodel->insert_karya($idkarya,$iduploader,$judulvideo,$keterangan,$kategori,$filename);

				 $this->Yourchannel();

			 }
	 }

	 public function Yourchannel(){
		  $this->load->model('webmodel');
			$data['tampilData'] = $this->webmodel->get_karya();
		  $username = $this->session->userdata('uname');
		 	$data['unameku']= $username;

		 if($this->session->userdata('validamin'))
		 {
					$this->load->view('yourchannel',$data);

		 }

		 else{

					$this->loginAdmin();

		 }
	 }

	 public function UpdateVideo($idkarya){
				//  $username = $this->session->userdata('uname');
				//  $uid = $this->session->userdata('userid');
				//  	//	$data['unameku']= $username;
				 //
		 	$this->load->model('webmodel');
				// 	$idkarya = null;
				// 	$iduploader = $uid ;
		 		$judulvideo = $this->input->post('judulvideo');
		  	$keterangan = $this->input->post('keterangan');
		 		$kategori = $this->input->post('kategori');
				$this->webmodel->update_karya($idkarya,$judulvideo,$keterangan,$kategori);

				 $this->Yourchannel();
	 }

	 function hapusVideo($idkarya)
   {

     $this->load->model("webmodel");
     $this->webmodel->m_hapus($idkarya);

     $this->Yourchannel();

   }
	 function insertUser()
   {

     $this->load->model("webmodel");
		 $username= $this->input->post('username');
		 $password= $this->input->post('password');
		 $email= $this->input->post('email');

		 $this->webmodel->insert_pengguna($username,$password,$email);

     redirect('welcome');

   }

	 function edit($id){

     $this->load->model('webmodel');

		 $data['tampilData'] = $this->webmodel->get_karya();
		 $username = $this->session->userdata('uname');
		 $data['unameku']= $username;

		   $thek=array(
      'id_karya'=>$id
     );
     $data['data_edit']=$this->webmodel->m_edit($thek);

     $this->load->view('edityourchannel',$data);

   }

	 function get_video(){

		 		$this->load->model('webmodel');
				$this->webmodel->get_karya();


	 }




	  public function logout(){

	        $this->session->sess_destroy();
	        redirect('welcome');
	 }





}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
