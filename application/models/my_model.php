<?php 
class My_model extends CI_model{


	public function get_table_data($limit=0,$offset=0){

		$data=$this->db->select()
					->from('muls')
					->order_by("id", "DESC")
					->limit($limit,$offset)
					->get();

					return $data->result();

	}

	public function count_Record(){
		$data=$this->db->select()
					->from('muls')
					->order_by("id", "DESC")
					->get();

					return $data->num_rows();

	}
	
	public function AddRecord($country,$code,$phone,$no,$im){

      $data = array
			(
				'country' => $country,
				'country_code' => $code,
				'phone'=>$phone,
				'country_no'=>$no,
				'image' => $im
			);



	      $this->db->insert('muls',$data);


	}


	public function delet($id){


			$this->db->delete('muls',['id'=>$id]);
	}




	public function mored($id){

		$q =$this->db->select()
       ->from('muls')
       ->where('id',$id)
       	->get();
       return $q->row();
	}


	public function Edit($id){

		$q =$this->db->select()
       ->from('muls')
       ->where('id',$id)
       	->get();
       return $q->row();


	}


	public function update_country($id,$counttry,$country_code,$phone,$no){

		$data = array
			(
				'country' => $counttry,
				'country_code' => $country_code,
				'phone'=>$phone,
				'country_no'=>$no
			);

			$this->db->where('id', $id);
			$this->db->update('muls', $data);

	}
	public function search_country($keyword)
    {

    	$this->db->like('country', $keyword , 'both');
        $this->db->order_by('country', 'ASC');
        $this->db->limit(10);
         $Q = $this->db->get('muls');

        if($Q->num_rows() > 0){
        	
    	return $Q->result();
	     }
       

    }





}



 ?>