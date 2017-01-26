<?php
class Customer_model extends CI_model{
  public function getCustomers() {
    $this->db->select('*');
    $this->db->from('Customers');
    return $this->db->get()->result_array();
  }

  public function insertCustomers($insert_data) {
    $this->db->insert('Customers',$insert_data);
    return $this->db->affected_rows();
  }

  public function deleteCustomers($selected_id) {
    $this->db->where('id_customers',$selected_id);
    $this->db->delete('Customers');
  }

  public function updateCustomers($update_data,$id_customers) {
    $this->db->where('id_customers',$id_customers);
    $this->db->update('Customers',$update_data);
  }
}
