
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Import_model extends CI_Model {

    public function importData($data_user) {

        $res = $this->db->insert('product', $data_user);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }

    }
 
}
 
?>
