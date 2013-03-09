<?php

class Site_model extends CI_Model {
public function add_temp_user($key){
					
					 
						$data=array(
						'username'=>$this->input->post('username'),
						'email'=>$this->input->post('email'),
						'country'=>$this->input->post('country'),
						'city'=>$this->input->post('city'),
						'address'=>$this->input->post('address'),
						'phone'=>$this->input->post('phone'),
						
						'pass'=>$this->input->post('password'),
						'parent_link'=>$this->input->post('parent_link'),
						'zip_code'=>$this->input->post('zip_code'),
						
						'key'=>$key
						);
					
					$query=$this->db->insert('user_temp',$data);
					if($query){
						return true;
						}else {
							return false;
							}
					}
  
/////////////////////////////////////add the user to it's orgin table //////////////////////////////////////////
 
		 public function is_key_valid_user($key){
				$this->db->where('key',$key);
				$query=$this->db->get('user_temp');
				if($query->num_rows()==1){
					return true;
					}else{
						return false;
						}
				}
         //////////////////////////////////////////
		 	public function add_user($key){
					$this->db->where('key',$key);
					$temp_user=$this->db->get('user_temp');
					
					if($temp_user){
						$row=$temp_user->row();
						$data=array(
						
						'username'=>$row->username,
						'email'=>$row->email,
						'country'=>$row->country,
						'city'=>$row->city,
						'address'=>$row->address,
						'phone'=>$row->phone,
						'pass'=>$row->pass,
						'parent_link'=>$row->parent_link,
						'zip_code'=>$row->zip_code,
						'profile_pic'=>'default_pic.jpg',
						
						);
						
						
						$did_add_user=$this->db->insert('user',$data);
						
						if($did_add_user){
							$this->db->where('key',$key);
							$this->db->delete('user_temp');
							return $data['email'];
							}else{
								return false;
								}
						
						
						}
						
				}
	///////////////////////////////////////////login method////////////////////////////////////////////
	  public function check_can_log_in($username, $password){
       
        $query = "select id ,email from user where username=? and pass=?";
      $result=$this->db->query($query,array($username,$password));
       if ( $result) {
          $result=array('id'=>$result->row(0)->id, 'email'=>$result->row(0)->email);
	   return  $result; 
        } else {
            return false;
        }
        }
		///////////////////////////////////////////////////////////////
		    public function can_log_in(){
        $username=  $this->input->post('username');
        $password= md5($this->input->post('password'));
        
      // $emaiil= $this->db->where('email', $this->input->post('email'));
      // $password= $this->db->where('password', md5($this->input->post('password')));
        
        $query = "select id from user where username=? and pass=?";
        $result=$this->db->query($query,array($username,$password));
        
        if($result->num_rows() == 1){
            return true;
        } else {
            return false;
        }
        
    }
	////////////////////////////////////////////////////////////
	function select_user($id){
		$query="select id,email,username,phone,country,city,address,profile_pic,zip_code from user where id=?";
		 $result=$this->db->query($query,$id);
		 if($result->num_rows() == 1){
			 $data_result=array('id'=>$result->row(0)->id,'username'=>$result->row(0)->username, 'address'=>$result->row(0)->address ,
				                   'city'=>$result->row(0)->city,'country'=>$result->row(0)->country,'email'=>$result->row(0)->email,'pic'=>$result->row(0)->profile_pic,
								   'phone'=>$result->row(0)->phone,'zip_code'=>$result->row(0)->zip_code
								     );
				return  $data_result; 
			 
			 }else{
				 return false;
				 }
		}
	
	
	
}

?>
