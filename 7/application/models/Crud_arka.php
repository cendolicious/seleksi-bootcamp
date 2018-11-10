<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * summary
 */

class crud_arka extends CI_model
{
    public function getData()
    {
    	$data = array();
      $this->db->group_by("products.category_id");
      $this->db->select("product_categories.id, product_categories.name, COUNT(products.category_id) as Jumlah_product");
      $this->db->from('products');
      $this->db->join('product_categories', 'products.category_id = product_categories.id', 'inner');
      $q = $this->db->get();
      if($q->num_rows() > 0)
      {
        foreach($q->result_array() as $row)
        {
          $data[]=$row;
        }
      }
      $q->free_result();
      return $data;
    }

}
?>
