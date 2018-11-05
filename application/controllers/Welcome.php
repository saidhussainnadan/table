<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{


		$this->load->model('my_model');

		$config=[
			'full_tag_open' => "<div class='pagi'>",
			'full_tag_close' => '</div>',
			'base_url' => base_url('Welcome/index'),
				'per_page' => 4,
				'total_rows' => $this->my_model->count_Record(),
				
				];
				$this->pagination->initialize($config);

		$data = $this->my_model->get_table_data($config['per_page'],$this->uri->segment(3));
		
		$this->load->view('welcome_message',['data'=>$data]);
	}


		public function get(){
		
		
         $this->load->model('my_model');
		//if(isset($_GET['term'])){

		$result = $this->my_model->search_country($_GET['term']);

		if(count($result) > 0){
			foreach($result as $k)
					$arr[] =  $k->country;

				echo json_encode($arr);
			
		}
			
		
		
			
	}


	

	public function addRecord(){
		$this->load->view('addRecord');
		

	}
	public function addRecord1(){


		
		
		$this->load->model('my_model');
		$counrty = $this->input->post('country');
		$code = $this->input->post('code');
		$phone =  $this->input->post('phone');
		$no = $this->input->post('no');
		$config['upload_path'] ='./upload';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1024';
		$config['max_width'] = '1500';
		$config['max_height'] = '1500';
		$this->load->library('upload',$config);
		$this->upload->do_upload();
		
		$data = array('upload_data' => $this->upload->data());
		$im = $_FILES['userfile']['name'];

		
		$this->my_model->AddRecord($counrty,$code,$phone,$no,$im);

		$data = $this->my_model->get_table_data();
		
		return redirect('Welcome');


	}
	public function delet($id){


		$this->load->model('my_model');
		$this->my_model->delet($id);
		return redirect('Welcome');	
		
		
	}
	public function more($id){
		$this->load->model('my_model');
		$data = $this->my_model->mored($id);
		$this->load->view('more',['up'=>$data]);



	}
	



	public function Edit($id){

		$this->load->model('my_model');
		$d = $this->my_model->Edit($id);
		$this->load->view('Edit',['up'=>$d]);

	}

	public function update($id){


		

		$counrty = $this->input->post('country');
		$code = $this->input->post('code');
		$phone =  $this->input->post('phone');
		$no = $this->input->post('no');

		$this->load->model('my_model');
		$this->my_model->update_country($id,$counrty,$code,$phone,$no);

		return redirect('Welcome');

	}





}
