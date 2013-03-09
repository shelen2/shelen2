<?php

class User_model extends CI_Model {

function do_upload($id){
			 
			 $gallery_path=realpath(APPPATH.'../images/profile/');
			 $gallery_path_thumb=realpath(APPPATH.'../images/profile/thumb_profile/');
			 $gallery_path_url = base_url().'images/';
				$config=array(
				 'allowed_types'=>'jpg|JPEG|png|gif',
				 'upload_path'=>$gallery_path,
				 'max_size'=>3000
				);
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload()){
					 return $error=array("error"=>$this->upload->display_errors());
					}
				
				
				 
                 $image_data = $this->upload->data();
				 //////////////////////////////////////////////
				
				//////////////////////////////////////////////
				$config2 = array(
				'source_image' => $image_data['full_path'],
				'new_image' => $gallery_path_thumb,
				'maintain_ratio' => TRUE,
				'width' => 300,
				'height' => 200
				
			     );
                 
                $this->load->library('image_lib', $config2);
				
				
				 	if(!$this->image_lib->resize()){
					 return $error=array("error"=>$this->upload->display_errors());
					}
				   
				 $sql_select="select profile_pic from user where id= '{$id}' ";
				 $result=$this->db->query($sql_select);
				 if($result->num_rows()==1){
					 $pic_name=$result->row(0)->profile_pic;
					 if($pic_name !='default_pic.jpg'){
						 
					 $path1=APPPATH .'../images/profile/'.$pic_name;
					 $path2=APPPATH .'../images/profile/thumb_profile/'.$pic_name;
					 unlink($path1);
					 unlink($path2);
					 }
					 }else{
					 return false;
					 }
				 
				 $query_str="update user set profile_pic = ? where id = '{$id}' ";
				 $this->db->query($query_str,$image_data['file_name']);
				 
				
				 
				
				}
			///////////////////////////////////////////
		function update_user($id){
			$data=array(
						'username'=>$this->input->post('username'),
						'email'=>$this->input->post('email'),
						'country'=>$this->input->post('country'),
						'city'=>$this->input->post('city'),
						'address'=>$this->input->post('address'),
						'phone'=>$this->input->post('phone'),
						'zip_code'=>$this->input->post('zip_code'),
						
						);
			
			$query_str="update user set username= ? ,email=?,country=?,city=?,address=?,phone=?,zip_code=? where id = '{$id}' ";
			$result= $this->db->query($query_str,$data);
			if($result){
					return true;
					}else{
						return false;
						}
			}
	         /////////////////////////////////////////////
}

?>
