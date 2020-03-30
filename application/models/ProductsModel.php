<?php
class ProductsModel extends CI_Model{
    
    public function get_products(){
        if(!empty($this->input->get("search"))){
          $this->db->like('productname', $this->input->get("search"));
          $this->db->or_like('product_info', $this->input->get("search"));
		  $this->db->like('Price', $this->input->get("search"));
          
        }

        $query = $this->db->get("interview2");
        return $query->result();
    }
    public function insert_product()
    {    
        $data = array(
            'productname' => $this->input->post('productname'),
            'product_info' => $this->input->post('product_info'),
			'Price' => $this->input->post('Price'),
            
        );
        return $this->db->insert('interview2', $data);
    }
    public function update_product($id) 
    {
        $data=array(
            'productname' => $this->input->post('productname'),
            'product_info'=> $this->input->post('product_info'),
			'Price' => $this->input->post('Price'),
            
        );
        if($id==0){
            return $this->db->insert('interview2',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('interview2',$data);
        }        
    }
}
?>