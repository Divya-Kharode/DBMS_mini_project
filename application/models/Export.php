<?php
/**
* Description of Export Model
*
* @author Web Preparations Team
*
* @email webpreparations@gmail.com
*/
if (!defined('BASEPATH'))
exit('No direct script access allowed');


class Export extends CI_Model {
// get mobiles list
public function mobileList() {
$this->db->select(array('m.Category_id', 'm.Category_name', 'm.Image_path', 'm.Time_Stamp'));
$this->db->from('category as m');
$query = $this->db->get();
return $query->result_array();
}

public function productList() {
    $this->db->select('BaseTbl.Product_id, BaseTbl.Category_name, BaseTbl.Brand_name, BaseTbl.Product_name, BaseTbl.Product_description, BaseTbl.Product_website_link, BaseTbl.Creation_Timestamp, BaseTbl.Modification_Timestamp, BaseTbl.Product_Image, BaseTbl.Average_Review, BaseTbl.No_of_Reviews');
    $this->db->from('product as BaseTbl');
    $query = $this->db->get();
    return $query->result_array();
    }

    public function brandList() {
        $this->db->select('BaseTbl.Brand_id, BaseTbl.Brand_Name, BaseTbl.Brand_Image, BaseTbl.Time_Stamp, BaseTbl.Brand_info, BaseTbl.Brand_website, BaseTbl.Brand_Owner, BaseTbl.Top');
        $this->db->from('brands as BaseTbl');
        $query = $this->db->get();
        return $query->result_array();
        } 
        
    public function offerList() {
        $this->db->select('BaseTbl.Offer_id, BaseTbl.Brand_Name, BaseTbl.start_date, BaseTbl.end_date, BaseTbl.Offer_details, BaseTbl.Website_link');
        $this->db->from('offers as BaseTbl');
            $query = $this->db->get();
            return $query->result_array();
     }    
}



?>