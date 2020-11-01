<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */

    function getDoc()
    {
        $this->db->select('Doc_id');
        $this->db->from('Doctor');
        $query = $this->db->get();
        
        return $query->result();
    }

    function getdocInfo($userId)
    {
        $this->db->select('BaseTbl.Doc_id, BaseTbl.Doc_name, BaseTbl.Degree, BaseTbl.Designation, BaseTbl.Salary, BaseTbl.Dept_id, BaseTbl.Office_id, BaseTbl.Contact_no');
        $this->db->from('Doctor as BaseTbl');
        $this->db->where('Doc_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editdoc($userInfo, $userId)
    {
        $this->db->where('Doc_id', $userId);
        $this->db->update('Doctor', $userInfo);
        
        return TRUE;
    }

    function doctorListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Doc_id, BaseTbl.Doc_name, BaseTbl.Degree, BaseTbl.Designation, BaseTbl.Salary, BaseTbl.Dept_id, BaseTbl.Office_id, BaseTbl.Contact_no');
        $this->db->from('Doctor as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Doc_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Doc_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function doctorListing($searchText = '')
    {
        $this->db->select('BaseTbl.Doc_id, BaseTbl.Doc_name, BaseTbl.Degree, BaseTbl.Designation, BaseTbl.Salary, BaseTbl.Dept_id, BaseTbl.Office_id, BaseTbl.Contact_no');
        $this->db->from('Doctor as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Doc_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Doc_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Doc_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $query->result();
    }

    function getapatInfo($userId)
    {
        $this->db->select('BaseTbl.Pat_id, BaseTbl.Pat_name, BaseTbl.Age, BaseTbl.Blood_Group, BaseTbl.Doc_id, BaseTbl.Admit_date, BaseTbl.Ward_id, BaseTbl.Dept_id, BaseTbl.Room_no,BaseTbl.Disease, BaseTbl.Address,BaseTbl.City,BaseTbl.Contact_no');
        $this->db->from('Admitted_Patient as BaseTbl');
        $this->db->where('Pat_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editapat($userInfo, $userId)
    {
        $this->db->where('Pat_id', $userId);
        $this->db->update('Admitted_Patient', $userInfo);
        
        return TRUE;
    }

    function a_patientListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Pat_id, BaseTbl.Pat_name, BaseTbl.Age, BaseTbl.Blood_Group, BaseTbl.Doc_id, BaseTbl.Admit_date, BaseTbl.Ward_id, BaseTbl.Dept_id, BaseTbl.Room_no,BaseTbl.Disease, BaseTbl.Address,BaseTbl.City,BaseTbl.Contact_no');
        $this->db->from('Admitted_Patient as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Pat_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Pat_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function a_patientListing($searchText = '')
    {
        $this->db->select('BaseTbl.Pat_id, BaseTbl.Pat_name, BaseTbl.Age, BaseTbl.Blood_Group, BaseTbl.Doc_id, BaseTbl.Admit_date, BaseTbl.Ward_id, BaseTbl.Dept_id,BaseTbl.Room_no,BaseTbl.Disease,BaseTbl.Address,BaseTbl.City,BaseTbl.Contact_no');
        $this->db->from('Admitted_Patient as BaseTbl');
        
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Pat_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Pat_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Pat_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function getamb()
    {
        $this->db->select('Am_no');
        $this->db->from('Ambulance');
        $this->db->distinct();
        $query = $this->db->get();
        
        return $query->result();
    }

    function getambInfo($userId)
    {
        $this->db->select('BaseTbl.Am_no, BaseTbl.Capacity');
        $this->db->from('Ambulance as BaseTbl');
        $this->db->where('Am_no', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editamb($userInfo, $userId)
    {
        $this->db->where('Am_no', $userId);
        $this->db->update('Ambulance', $userInfo);
        
        return TRUE;
    }
    function ambulanceListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Am_no, BaseTbl.Capacity');
        $this->db->from('Ambulance as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Am_no  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function ambulanceListing($searchText = '')
    {
        $this->db->select('BaseTbl.Am_no, BaseTbl.Capacity');
        $this->db->from('Ambulance as BaseTbl');
        
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Am_no  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Am_no', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function ambulancedetailsListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Driver_id, BaseTbl.Pat_id');
        $this->db->from('Ambulance_Details as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Pat_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Driver_id  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function ambulancedetailsListing($searchText = '')
    {
        $this->db->select('BaseTbl.Driver_id, BaseTbl.Pat_id');
        $this->db->from('Ambulance_Details as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Driver_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Pat_id  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        //$this->db->order_by('BaseTbl.Driver_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function getadInfo($userId)
    {
        $this->db->select('BaseTbl.Driver_id, BaseTbl.Driver_name, BaseTbl.Salary, BaseTbl.Am_no');
        $this->db->from('Ambulance_Driver as BaseTbl');
        $this->db->where('Driver_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editad($userInfo, $userId)
    {
        $this->db->where('Driver_id', $userId);
        $this->db->update('Ambulance_Driver', $userInfo);
        
        return TRUE;
    }


    function a_driverListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Driver_id, BaseTbl.Driver_name, BaseTbl.Salary, BaseTbl.Am_no');
        $this->db->from('Ambulance_Driver as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Driver_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Driver_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function a_driverListing($searchText = '')
    {
        $this->db->select('BaseTbl.Driver_id, BaseTbl.Driver_name, BaseTbl.Salary, BaseTbl.Am_no');
        $this->db->from('Ambulance_Driver as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
             $likeCriteria = "(BaseTbl.Driver_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Driver_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Driver_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function getappInfo($userId)
    {
        $this->db->select('BaseTbl.App_id, BaseTbl.Pat_name, BaseTbl.Age, BaseTbl.Blood_Group, BaseTbl.Doc_id, BaseTbl.App_time, BaseTbl.App_date, BaseTbl.Address,BaseTbl.City,BaseTbl.Contact_no');
        $this->db->from('Appointment as BaseTbl');
        $this->db->where('App_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editapp($userInfo, $userId)
    {
        $this->db->where('App_id', $userId);
        $this->db->update('Appointment', $userInfo);
        
        return TRUE;
    }

    function appointmentListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.App_id, BaseTbl.Pat_name, BaseTbl.Age, BaseTbl.Blood_Group, BaseTbl.Doc_id, BaseTbl.App_time, BaseTbl.App_date, BaseTbl.Address,BaseTbl.City,BaseTbl.Contact_no');
        $this->db->from('Appointment as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.App_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Pat_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function appointmentListing($searchText = '')
    {
         $this->db->select('BaseTbl.App_id, BaseTbl.Pat_name, BaseTbl.Age, BaseTbl.Blood_Group, BaseTbl.Doc_id, BaseTbl.App_time, BaseTbl.App_date, BaseTbl.Address,BaseTbl.City,BaseTbl.Contact_no');
        $this->db->from('Appointment as BaseTbl');
         //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.App_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Pat_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.App_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function getdpatInfo($userId)
    {
        $this->db->select('BaseTbl.Pat_id, BaseTbl.Pat_name, BaseTbl.Age,BaseTbl.Blood_Group,BaseTbl.Doc_id,BaseTbl.Discharge_date,BaseTbl.Ward_id,BaseTbl.Dept_id, BaseTbl.Room_no,BaseTbl.Disease,BaseTbl.Total_bill,BaseTbl.Address,BaseTbl.City,BaseTbl.Contact_no,BaseTbl.Admitted_Patient');
        $this->db->from('Discharge_Patient as BaseTbl');
        $this->db->where('Pat_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editdpat($userInfo, $userId)
    {
        $this->db->where('Pat_id', $userId);
        $this->db->update('Discharge_Patient', $userInfo);
        
        return TRUE;
    }
    function d_patientListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Pat_id, BaseTbl.Pat_name, BaseTbl.Age,BaseTbl.Blood_Group,BaseTbl.Doc_id,BaseTbl.Discharge_date,BaseTbl.Ward_id,BaseTbl.Dept_id, BaseTbl.Room_no,BaseTbl.Disease,BaseTbl.Total_bill,BaseTbl.Address,BaseTbl.City,BaseTbl.Contact_no,BaseTbl.Admitted_Patient');
        $this->db->from('Discharge_Patient as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Pat_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Pat_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function d_patientListing($searchText = '')
    {
        $this->db->select('BaseTbl.Pat_id, BaseTbl.Pat_name, BaseTbl.Age,BaseTbl.Blood_Group,BaseTbl.Doc_id,BaseTbl.Discharge_date,BaseTbl.Ward_id,BaseTbl.Dept_id, BaseTbl.Room_no,BaseTbl.Disease, BaseTbl.Total_bill,BaseTbl.Address,BaseTbl.City,BaseTbl.Contact_no,BaseTbl.Admitted_Patient');
        $this->db->from('Discharge_Patient as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Pat_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Pat_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Pat_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function getassInfo($userId)
    {
        $this->db->select('BaseTbl.Ass_id, BaseTbl.Ass_name, BaseTbl.Doc_id, BaseTbl.Degree, BaseTbl.Salary, BaseTbl.Dept_id, BaseTbl.Contact_no');
        $this->db->from('Doctor_Assistant as BaseTbl');
        $this->db->where('Ass_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editass($userInfo, $userId)
    {
        $this->db->where('Ass_id', $userId);
        $this->db->update('Doctor_Assistant', $userInfo);
        
        return TRUE;
    }

    function assistantListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Ass_id, BaseTbl.Ass_name, BaseTbl.Doc_id, BaseTbl.Degree, BaseTbl.Salary, BaseTbl.Dept_id, BaseTbl.Contact_no');
        $this->db->from('Doctor_Assistant as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Ass_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Ass_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function assistantListing($searchText = '')
    {
        $this->db->select('BaseTbl.Ass_id, BaseTbl.Ass_name, BaseTbl.Doc_id, BaseTbl.Degree, BaseTbl.Salary, BaseTbl.Dept_id, BaseTbl.Contact_no');
        $this->db->from('Doctor_Assistant as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Ass_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Ass_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Ass_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function getMed()
    {
        $this->db->select('Med_id');
        $this->db->from('Medicine');
        $this->db->distinct();
        $query = $this->db->get();
        
        return $query->result();
    }

    function getmedInfo($userId)
    {
        $this->db->select('BaseTbl.Med_id, BaseTbl.Med_name, BaseTbl.Med_company, BaseTbl.Cost');
        $this->db->from('Medicine as BaseTbl');
        $this->db->where('Med_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editmed($userInfo, $userId)
    {
        $this->db->where('Med_id', $userId);
        $this->db->update('Medicine', $userInfo);
        
        return TRUE;
    }

    function medicineListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Med_id, BaseTbl.Med_name, BaseTbl.Med_company, BaseTbl.Cost');
        $this->db->from('Medicine as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Med_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Med_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function medicineListing($searchText = '')
    {
        $this->db->select('BaseTbl.Med_id, BaseTbl.Med_name, BaseTbl.Med_company, BaseTbl.Cost');
        $this->db->from('Medicine as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Med_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Med_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Med_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function getnurseInfo($userId)
    {
        $this->db->select('BaseTbl.Nurse_id, BaseTbl.Nurse_name, BaseTbl.Ward_id, BaseTbl.Dept_id, BaseTbl.Salary, BaseTbl.Contact_no');
        $this->db->from('Nurse as BaseTbl');
        $this->db->where('Nurse_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editnurse($userInfo, $userId)
    {
        $this->db->where('Nurse_id', $userId);
        $this->db->update('Nurse', $userInfo);
        
        return TRUE;
    }
    function nurseListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Nurse_id, BaseTbl.Nurse_name, BaseTbl.Ward_id, BaseTbl.Dept_id, BaseTbl.Salary, BaseTbl.Contact_no');
        $this->db->from('Nurse as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Nurse_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Nurse_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function nurseListing($searchText = '')
    {
         $this->db->select('BaseTbl.Nurse_id, BaseTbl.Nurse_name, BaseTbl.Ward_id, BaseTbl.Dept_id, BaseTbl.Salary, BaseTbl.Contact_no');
        $this->db->from('Nurse as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Nurse_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Nurse_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Nurse_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function getOffice()
    {
        $this->db->select('Office_id');
        $this->db->from('Office');
        $query = $this->db->get();
        
        return $query->result();
    }

    function getofficeInfo($userId)
    {
        $this->db->select('BaseTbl.Office_id, BaseTbl.Dept_id');
        $this->db->from('Office as BaseTbl');
        $this->db->where('Office_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editoffice($userInfo, $userId)
    {
        $this->db->where('Office_id', $userId);
        $this->db->update('Office', $userInfo);
        
        return TRUE;
    }

    function officeListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Office_id, BaseTbl.Dept_id');
        $this->db->from('Office as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Office_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Dept_id  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function officeListing($searchText = '')
    {
        $this->db->select('BaseTbl.Office_id, BaseTbl.Dept_id');
        $this->db->from('Office as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Office_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Dept_id  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
       // $this->db->order_by('BaseTbl.Office_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    function getDept()
    {
        $this->db->select('Dept_id');
        $this->db->from('Department');
        $query = $this->db->get();
        
        return $query->result();
    }

    function getdeptInfo($userId)
    {
        $this->db->select('BaseTbl.Dept_id, BaseTbl.Dept_name, BaseTbl.Head_name');
        $this->db->from('Department as BaseTbl');
        $this->db->where('Dept_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editdept($userInfo, $userId)
    {
        $this->db->where('Dept_id', $userId);
        $this->db->update('Department', $userInfo);
        
        return TRUE;
    }
    function deptListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Dept_id, BaseTbl.Dept_name, BaseTbl.Head_name');
        $this->db->from('Department as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Dept_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Dept_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function deptListing($searchText = '')
    {
        $this->db->select('BaseTbl.Dept_id, BaseTbl.Dept_name, BaseTbl.Head_name');
        $this->db->from('Department as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Dept_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Dept_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
       // $this->db->order_by('BaseTbl.Office_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function getPat()
    {
        $this->db->select('Pat_id');
        $this->db->from('Patient');
        $this->db->distinct();
        $query = $this->db->get();
        
        return $query->result();
    }
    function getpatInfo($userId)
    {
        $this->db->select('BaseTbl.Pat_id, BaseTbl.Pat_name, BaseTbl.Age, BaseTbl.Blood_Group, BaseTbl.Doc_id, BaseTbl.Disease, BaseTbl.Address, BaseTbl.City,BaseTbl.Contact_no');
        $this->db->from('Patient as BaseTbl');
        $this->db->where('Pat_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editpat($userInfo, $userId)
    {
        $this->db->where('Pat_id', $userId);
        $this->db->update('Patient', $userInfo);
        
        return TRUE;
    }


     function patientListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Pat_id, BaseTbl.Pat_name, BaseTbl.Age, BaseTbl.Blood_Group, BaseTbl.Doc_id, BaseTbl.Disease, BaseTbl.Address, BaseTbl.City,BaseTbl.Contact_no');
        $this->db->from('Patient as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Pat_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Pat_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function patientListing($searchText = '')
    {
        $this->db->select('BaseTbl.Pat_id, BaseTbl.Pat_name, BaseTbl.Age, BaseTbl.Blood_Group, BaseTbl.Doc_id, BaseTbl.Disease, BaseTbl.Address, BaseTbl.City,BaseTbl.Contact_no');
        $this->db->from('Patient as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Pat_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Pat_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Pat_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    function p_testListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Pat_id, BaseTbl.Test_id');
        $this->db->from('Patient_Test as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Pat_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Test_id  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function p_testListing($searchText = '')
    {
        $this->db->select('BaseTbl.Pat_id, BaseTbl.Test_id');
        $this->db->from('Patient_Test as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Pat_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Test_id  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        //$this->db->order_by('BaseTbl.Doc_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    function prescriptionListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Med_id, BaseTbl.Give_date, BaseTbl.Pat_id');
        $this->db->from('Prescription as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Med_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Pat_id  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function prescriptionListing($searchText = '')
    {
        $this->db->select('BaseTbl.Med_id, BaseTbl.Give_date, BaseTbl.Pat_id');
        $this->db->from('Prescription as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Med_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Pat_id  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Med_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function getRoom()
    {
        $this->db->select('Room_no');
        $this->db->from('Room');
        $this->db->distinct();
        $query = $this->db->get();
        
        return $query->result();
    }
    function roomsListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Ward_id, BaseTbl.Room_no, BaseTbl.Dept_id, BaseTbl.Type, BaseTbl.Capacity');
        $this->db->from('Room as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Ward_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Room_no  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function roomsListing($searchText = '')
    {
        $this->db->select('BaseTbl.Ward_id, BaseTbl.Room_no, BaseTbl.Dept_id, BaseTbl.Type, BaseTbl.Capacity');
        $this->db->from('Room as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Ward_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Room_no  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Ward_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    function getTest()
    {
        $this->db->select('Test_id');
        $this->db->from('Test');
        $this->db->distinct();
        $query = $this->db->get();
        
        return $query->result();
    }
    

    function testListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Test_id, BaseTbl.Test_name, BaseTbl.cost');
        $this->db->from('Test as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Test_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Test_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function testListing($searchText = '')
    {
         $this->db->select('BaseTbl.Test_id, BaseTbl.Test_name, BaseTbl.cost');
        $this->db->from('Test as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Test_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Test_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Test_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function getWard()
    {
        $this->db->select('Ward_id');
        $this->db->from('Wards');
        $this->db->distinct();
        $query = $this->db->get();
        
        return $query->result();
    }
    function wardListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Ward_id, BaseTbl.Total_room, BaseTbl.Dept_id');
        $this->db->from('Wards as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Ward_id  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function wardListing($searchText = '')
    {
         $this->db->select('BaseTbl.Ward_id, BaseTbl.Total_room, BaseTbl.Dept_id');
        $this->db->from('Wards as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Ward_id  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Ward_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    function getwbInfo($userId)
    {
        $this->db->select('BaseTbl.Wardboy_id, BaseTbl.Wardboy_name, BaseTbl.Ward_id, BaseTbl.Dept_id, BaseTbl.Salary, BaseTbl.Contact_no');
        $this->db->from('Ward_Boy as BaseTbl');
        $this->db->where('Wardboy_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    function editwb($userInfo, $userId)
    {
        $this->db->where('Wardboy_id', $userId);
        $this->db->update('Ward_Boy', $userInfo);
        
        return TRUE;
    }


    function wardboyListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Wardboy_id, BaseTbl.Wardboy_name, BaseTbl.Ward_id, BaseTbl.Dept_id, BaseTbl.Salary, BaseTbl.Contact_no');
        $this->db->from('Ward_Boy as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Wardboy_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Wardboy_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function wardboyListing($searchText = '')
    {
        $this->db->select('BaseTbl.Wardboy_id, BaseTbl.Wardboy_name, BaseTbl.Ward_id, BaseTbl.Dept_id, BaseTbl.Salary, BaseTbl.Contact_no');
        $this->db->from('Ward_Boy as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Wardboy_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Wardboy_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Wardboy_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function addNewDoctor($userInfo)
    
    {	 /*$this->db->select('BaseTbl.Doc_id, BaseTbl.Doc_name, BaseTbl.Degree, BaseTbl.Designation, BaseTbl.Salary, BaseTbl.Dept_id, BaseTbl.Office_id, BaseTbl.Contact_no');
        $this->db->from('Doctor as BaseTbl');
        $doc =  $userInfo['Doc_id'];
        $this->db->where("BaseTbl.Doc_id",$doc);
        
         $query = $this->db->get('Doctor');*/
      
        $this->db->trans_start();
        $this->db->insert('Doctor', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
            
      
        
        
    }

    function checkdoctorexists($userInfo)
    {
    	$this->db->select('BaseTbl.Doc_id, BaseTbl.Doc_name, BaseTbl.Degree, BaseTbl.Designation, BaseTbl.Salary, BaseTbl.Dept_id, BaseTbl.Office_id, BaseTbl.Contact_no');
        $this->db->from('Doctor as BaseTbl');
        $doc =  $userInfo['Doc_id'];
        $this->db->where("BaseTbl.Doc_id",$doc);
        $query = $this->db->get('Doctor');
        if($query->num_rows() > 0)
        {
           return TRUE;
                  
        }
        else{
        	return FALSE;
        }
    }
    function addNewPatient($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Patient', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    function addNewapatient($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Admitted_Patient', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addNewapp($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Appointment', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

        function checkappexists($userInfo)
    {
    	$this->db->select('BaseTbl.App_id, BaseTbl.Pat_name, BaseTbl.Age, BaseTbl.Blood_Group, BaseTbl.Doc_id, BaseTbl.App_time, BaseTbl.App_date, BaseTbl.Address,BaseTbl.City,BaseTbl.Contact_no');
        $this->db->from('Appointment as BaseTbl');
        $ass =  $userInfo['App_id'];
        $this->db->where("BaseTbl.App_id",$ass);
        $query = $this->db->get('Appointment');
        if($query->num_rows() > 0)
        {
           return TRUE;
                  
        }
        else{
        	return FALSE;
        }
    }
    function addNewdpatient($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Discharge_Patient', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addNewWard($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Wards', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addNewamb($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Ambulance', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addNewtest($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Test', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addNewpresc($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Prescription', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }


    function addNewOffice($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Office', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addNewambd($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Ambulance_Driver', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addNewDept($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Department', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
     function checkdeptexists($userInfo)
    {
    	$this->db->select('BaseTbl.Dept_id, BaseTbl.Dept_name, BaseTbl.Head_name');
        $this->db->from('Department as BaseTbl');
        $ass =  $userInfo['Dept_id'];
        $this->db->where("BaseTbl.Dept_id",$ass);
        $query = $this->db->get('Department');
        if($query->num_rows() > 0)
        {
           return TRUE;
                  
        }
        else{
        	return FALSE;
        }
    }

    function addNewWB($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Ward_Boy', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addNewNurse($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Nurse', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
      function checknurseexists($userInfo)
    {
    	 $this->db->select('BaseTbl.Nurse_id, BaseTbl.Nurse_name, BaseTbl.Ward_id, BaseTbl.Dept_id, BaseTbl.Salary, BaseTbl.Contact_no');
        $this->db->from('Nurse as BaseTbl');
        $ass =  $userInfo['Nurse_id'];
        $this->db->where("BaseTbl.Nurse_id",$ass);
        $query = $this->db->get('Nurse');
        if($query->num_rows() > 0)
        {
           return TRUE;
                  
        }
        else{
        	return FALSE;
        }
    }

    function addNewass($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Doctor_Assistant', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

      function checkassexists($userInfo)
    {
    	$this->db->select('BaseTbl.Ass_id, BaseTbl.Ass_name, BaseTbl.Doc_id, BaseTbl.Degree, BaseTbl.Salary, BaseTbl.Dept_id, BaseTbl.Contact_no');
        $this->db->from('Doctor_Assistant as BaseTbl');
        $ass =  $userInfo['Ass_id'];
        $this->db->where("BaseTbl.Ass_id",$ass);
        $query = $this->db->get('Doctor_Assistant');
        if($query->num_rows() > 0)
        {
           return TRUE;
                  
        }
        else{
        	return FALSE;
        }
    }
    function addNewroom($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Room', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addNewptest($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Patient_Test', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addNewmed($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('Medicine', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    //Delete
    function deleteDoctor($userId)
    {
        $this->db->where('Doc_id', $userId);
        $this->db->delete('Doctor');
        
        return $this->db->affected_rows();
    }
    function deleteADriver($userId)
    {
        $this->db->where('Driver_id', $userId);
        $this->db->delete('Ambulance_Driver');
        
        return $this->db->affected_rows();
    }
     function deleteAssistant($userId)
    {
        $this->db->where('Ass_id', $userId);
        $this->db->delete('Doctor_Assistant');
        
        return $this->db->affected_rows();
    }
      function deleteDept($userId)
    {
        $this->db->where('Dept_id', $userId);
        $this->db->delete('Department');
        
        return $this->db->affected_rows();
    }
       function deleteAppointment($userId)
    {
        $this->db->where('App_id', $userId);
        $this->db->delete('Appointment');
        
        return $this->db->affected_rows();
    }
      function deletePatient($userId)
    {
        $this->db->where('Pat_id', $userId);
        $this->db->delete('Patient');
        
        return $this->db->affected_rows();
    }
 function deleteAPatient($userId)
    {
        $this->db->where('Pat_id', $userId);
        $this->db->delete('Admitted_Patient');
        
        return $this->db->affected_rows();
    }
    
    function deleteDPatient($userId)
    {
        $this->db->where('Pat_id', $userId);
        $this->db->delete('Discharge_Patient');
        
        return $this->db->affected_rows();
    }
   function deleteTest($userId)
    {
        $this->db->where('Test_id', $userId);
        $this->db->delete('Test');
        
        return $this->db->affected_rows();
    }
      function deleteNurse($userId)
    {
        $this->db->where('Nurse_id', $userId);
        $this->db->delete('Nurse');
        
        return $this->db->affected_rows();
    }
          function deleteWardboy($userId)
    {
        $this->db->where('Wardboy_id', $userId);
        $this->db->delete('Ward_Boy');
        
        return $this->db->affected_rows();
    }
     function deleteOffice($userId)
    {
        $this->db->where('Office_id', $userId);
        $this->db->delete('Office');
        
        return $this->db->affected_rows();
    }
    function deleteAmbulance($userId)
    {
        $this->db->where('Am_no', $userId);
        $this->db->delete('Ambulance');
        
        return $this->db->affected_rows();
    }
    function deleteMedicine($userId)
    {
    	echo($userId);
        $this->db->where('Med_id', $userId);
        $this->db->delete('Medicine');
        
        return $this->db->affected_rows();
    }
     
     //PREVIOUS
    function userListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Id, BaseTbl.Customer_email, BaseTbl.Register_Timestamp, BaseTbl.Last_login_Timestamp, BaseTbl.Session_count, BaseTbl.Account_status');
        $this->db->from('customer as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Customer_email  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    function getCustomerInfo($userId)
    {
        $this->db->select('BaseTbl.Id, BaseTbl.Customer_email, BaseTbl.Register_Timestamp, BaseTbl.Last_login_Timestamp, BaseTbl.Session_count, BaseTbl.Account_status');
        $this->db->from('customer as BaseTbl');
        $this->db->where('Id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function userListing($searchText = '')
    {
        $this->db->select('BaseTbl.Id, BaseTbl.Customer_email, BaseTbl.Register_Timestamp, BaseTbl.Last_login_Timestamp, BaseTbl.Session_count, BaseTbl.Account_status');
        $this->db->from('customer as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Customer_email  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.isDeleted', 0);
        //$this->db->where('BaseTbl.roleId !=', 1);
        $this->db->order_by('BaseTbl.Id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function reviewListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Product_id, BaseTbl.average_rating');
        $this->db->from('review as BaseTbl');
      //  $this->db->join('product', 'product.Product_id = BaseTbl.Product_id');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Product_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.average_rating  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
       
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function reviewListing($searchText = '')
    {
        $this->db->select('BaseTbl.Product_id, BaseTbl.average_rating');
        $this->db->from('review as BaseTbl');
      //  $this->db->join('product', 'product.Product_id = BaseTbl.Product_id');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Product_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.average_rating  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
    
        $this->db->order_by('BaseTbl.Product_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


    function refresh($count){
        for($i = 1; $i <= $count; $i++){
            
            $this->db->select('ROUND(AVG(Rating), 1) as averageRating');
            $this->db->from('user_product_rating');
            $this->db->where("Product_id", $i);
            $ratingquery = $this->db->get();
            $postResult = $ratingquery->result_array();
      
            $this->db->select( 'COUNT(Product_id) as c');
            $this->db->from('user_product_rating');
            $this->db->where("Product_id", $i);
            $ratingq = $this->db->get();
            $postR = $ratingq->result_array();

            $rating = $postResult[0]['averageRating'];
            $c = $postR[0]['c'];

      
            if($rating == ''){
               $rating = 0;
            }
      
            $posts_arr = array("Product_id"=>$i, "average_rating"=>$rating);
            $posts_1 = array( "Average_Review"=>$rating, "No_of_Reviews" => $c);
         
            $this->db->select('Product_id');
            $this->db->where('Product_id', $i);
            $q = $this->db->get('review');
            $p = $q->result();

            if(empty($p))
            {
                $this->db->trans_start();
            $this->db->insert('review', $posts_arr);
                    
            $insert_id = $this->db->insert_id();
        
            $this->db->trans_complete();

            $this->db->where('Product_id', $i);
            
            $this->db->update('product', $posts_1); 
                
            }
            else 
            {
                $this->db->where('Product_id', $i);
                $this->db->update('review', $posts_arr);
                $this->db->where('Product_id', $i);
                $this->db->update('product', $posts_1);
            
            }
        }
        return true;
    }

    function ratingCount($searchText = '')
    { 
        $this->db->select('BaseTbl.User_id, BaseTbl.Product_id, BaseTbl.Rating, BaseTbl.Customer_email');
        $this->db->from('user_product_rating as BaseTbl');
       // $this->db->join('User', 'product.Product_id = BaseTbl.Product_id');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.User_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Product_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Customer_email  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
       
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function rating($searchText = '')
    {
        $this->db->select('BaseTbl.User_id, BaseTbl.Product_id, BaseTbl.Rating, BaseTbl.Customer_email');
        $this->db->from('user_product_rating as BaseTbl');
       // $this->db->join('User', 'product.Product_id = BaseTbl.Product_id');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.User_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Product_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Customer_email  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
    
        $this->db->order_by('BaseTbl.Product_id', 'ASC');
       // $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    function productListingCount($searchText = '')
    { 
        $this->db->select('BaseTbl.Product_id, BaseTbl.Category_name, BaseTbl.Brand_name, BaseTbl.Product_name, BaseTbl.Product_description, BaseTbl.Product_website_link, BaseTbl.Creation_Timestamp, BaseTbl.Modification_Timestamp, BaseTbl.Product_Image, BaseTbl.Average_Review, BaseTbl.No_of_Reviews');
        $this->db->from('product as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Product_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Category_name  LIKE '%".$searchText."%'
                            OR  BaseTbl.Brand_name  LIKE '%".$searchText."%'
                            OR  BaseTbl.Product_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
       
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function productListing($searchText = '')
    {
        $this->db->select('BaseTbl.Product_id, BaseTbl.Category_name, BaseTbl.Brand_name, BaseTbl.Product_name, BaseTbl.Product_description, BaseTbl.Product_website_link, BaseTbl.Creation_Timestamp, BaseTbl.Modification_Timestamp, BaseTbl.Product_Image, BaseTbl.Average_Review, BaseTbl.No_of_Reviews');
        $this->db->from('product as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Product_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Category_name  LIKE '%".$searchText."%'
                            OR  BaseTbl.Brand_name  LIKE '%".$searchText."%'
                            OR  BaseTbl.Product_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('BaseTbl.Product_id', 'ASC');
        //$this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function brandListingCount($searchText = '')
    { 
        $this->db->select('BaseTbl.Brand_id, BaseTbl.Brand_Name, BaseTbl.Brand_Image, BaseTbl.Time_Stamp, BaseTbl.Brand_info, BaseTbl.Brand_website, BaseTbl.Brand_Owner, BaseTbl.Top');
        $this->db->from('brands as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Brand_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Brand_Name  LIKE '%".$searchText."%'
                            OR  BaseTbl.Brand_Owner  LIKE '%".$searchText."%'
                            )";
            $this->db->where($likeCriteria);
        }
       
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function brandListing($searchText = '')
    {
        $this->db->select('BaseTbl.Brand_id, BaseTbl.Brand_Name, BaseTbl.Brand_Image, BaseTbl.Time_Stamp, BaseTbl.Brand_info, BaseTbl.Brand_website, BaseTbl.Brand_Owner, BaseTbl.Top');
        $this->db->from('brands as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Brand_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Brand_Name  LIKE '%".$searchText."%'
                            OR  BaseTbl.Brand_Owner  LIKE '%".$searchText."%'
                            )";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('BaseTbl.Brand_id', 'ASC');
        //$this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    
    function offerListing($searchText = '')
    {
        $this->db->select('BaseTbl.Offer_id, BaseTbl.Brand_Name, BaseTbl.start_date, BaseTbl.end_date, BaseTbl.Offer_details, BaseTbl.Website_link');
        $this->db->from('offers as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Offer_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Brand_Name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('BaseTbl.Offer_id', 'ASC');
        //$this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function getOfferInfo($userId)
    {
        $this->db->select('BaseTbl.Offer_id, BaseTbl.Brand_Name, BaseTbl.start_date, BaseTbl.end_date, BaseTbl.Offer_details, BaseTbl.Website_link');
        $this->db->from('offers as BaseTbl');
        $this->db->where('Offer_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }

    function offerListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Offer_id, BaseTbl.Brand_Name, BaseTbl.start_date, BaseTbl.end_date, BaseTbl.Offer_details, BaseTbl.Website_link');
        $this->db->from('offers as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Offer_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Brand_Name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function categoryListing($searchText = '')
    {
        $this->db->select('BaseTbl.Category_id, BaseTbl.Category_name, BaseTbl.Image_path, BaseTbl.Time_Stamp');
        $this->db->from('category as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Category_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Category_name  LIKE '%".$searchText."%'
                            OR  BaseTbl.Image_path  LIKE '%".$searchText."%'
                            OR  BaseTbl.Time_Stamp  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('BaseTbl.Category_id', 'ASC');
        //$this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function getCategoryInfo($userId)
    {
        $this->db->select('BaseTbl.Category_id, BaseTbl.Category_name, BaseTbl.Image_path, BaseTbl.Time_Stamp');
        $this->db->from('category as BaseTbl');
        $this->db->where('Category_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }

    function categoryListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.Category_id, BaseTbl.Category_name, BaseTbl.Image_path, BaseTbl.Time_Stamp');
        $this->db->from('category as BaseTbl');
        //$this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Category_id  LIKE '%".$searchText."%'
                            OR  BaseTbl.Category_name  LIKE '%".$searchText."%'
                            OR  BaseTbl.Image_path  LIKE '%".$searchText."%'
                            OR  BaseTbl.Time_Stamp  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    function editCategory($userInfo, $userId)
    {
        $this->db->where('Category_id', $userId);
        $this->db->update('category', $userInfo);
        
        return TRUE;
    }

    function editCustomer($userInfo, $userId)
    {
        $this->db->where('Id', $userId);
        $this->db->update('customer', $userInfo);
        
        return TRUE;
    }

    function editOffer($userInfo, $userId)
    {
        $this->db->where('Offer_id', $userId);
        $this->db->update('offers', $userInfo);
        
        return TRUE;
    }

    function deleteCustomer($userId)
    {
        $this->db->where('Id', $userId);
        $this->db->delete('customer');
        
        return $this->db->affected_rows();
    }

    function deleteCategory($userId)
    {
        $this->db->where('Category_id', $userId);
        $this->db->delete('category');
        
        return $this->db->affected_rows();
    }

    function deleteOffer($userId)
    {
        $this->db->where('Offer_id', $userId);
        $this->db->delete('offers');
        
        return $this->db->affected_rows();
    }
    /**
     * This function is used to get the user roles information
     * @return array $result : This is result of the query
     */
    function getUserRoles()
    {
        $this->db->select('Category_name');
        $this->db->from('category');
        $query = $this->db->get();
        
        return $query->result();
    }

    function getId()
    {
        $this->db->select_max('Product_id');
        $this->db->from('product');
       // $this->db->where(max(select 'Product_id' from product));
        $query = $this->db->get();
        
        return $query->row();
    }

    function getBrandId()
    {
        $this->db->select_max('Brand_id');
        $this->db->from('brands');
       // $this->db->where(max(select 'Product_id' from product));
        $query = $this->db->get();
        
        return $query->row();
    }

    function getCustomerId()
    {
        $this->db->select_max('Id');
        $this->db->from('customer');
       // $this->db->where(max(select 'Product_id' from product));
        $query = $this->db->get();
        
        return $query->row();
    }

    function getCategoryId()
    {
        $this->db->select_max('Category_id');
        $this->db->from('category');
       // $this->db->where(max(select 'Product_id' from product));
        $query = $this->db->get();
        
        return $query->row();
    }

    function getOfferId()
    {
        $this->db->select_max('Offer_id');
        $this->db->from('offers');
       // $this->db->where(max(select 'Product_id' from product));
        $query = $this->db->get();
        
        return $query->row();
    }

    /**
     * This function is used to check whether email id is already exist or not
     * @param {string} $email : This is email id
     * @param {number} $userId : This is user id
     * @return {mixed} $result : This is searched result
     */
    function checkEmailExists($email, $userId = 0)
    {
        $this->db->select("email");
        $this->db->from("tbl_users");
        $this->db->where("email", $email);   
        $this->db->where("isDeleted", 0);
        if($userId != 0){
            $this->db->where("userId !=", $userId);
        }
        $query = $this->db->get();

        return $query->result();
    }
    
    
    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewProduct($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('product', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addNewBrand($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('brands', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    function addNewOffer($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('offers', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    

    function addNewCategory($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('category', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    

    function addNewCustomer($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('customer', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getUserInfo($userId)
    {
        $this->db->select('BaseTbl.Product_id, BaseTbl.Category_name, BaseTbl.Brand_name, BaseTbl.Product_name, BaseTbl.Product_description, BaseTbl.Product_website_link, BaseTbl.Creation_Timestamp, BaseTbl.Modification_Timestamp, BaseTbl.Product_Image, BaseTbl.Average_Review, BaseTbl.No_of_Reviews');
        $this->db->from('product as BaseTbl');
        $this->db->where('Product_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    function getBrandInfo($userId)
    {
        $this->db->select('BaseTbl.Brand_id, BaseTbl.Brand_Name, BaseTbl.Brand_Image, BaseTbl.Time_Stamp, BaseTbl.Brand_info, BaseTbl.Brand_website, BaseTbl.Brand_Owner, BaseTbl.Top');
        $this->db->from('brands as BaseTbl');
        $this->db->where('Brand_id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }
    /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editUser($userInfo, $userId)
    {
        $this->db->where('Product_id', $userId);
        $this->db->update('product', $userInfo);
        
        return TRUE;
    }
    
    function editBrand($userInfo, $userId)
    {
        $this->db->where('Brand_id', $userId);
        $this->db->update('brands', $userInfo);
        
        return TRUE;
    }
    
    
    /**
     * This function is used to delete the user information
     * @param number $userId : This is user id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser($userId)
    {
        $this->db->where('Product_id', $userId);
        $this->db->delete('product');
        
        return $this->db->affected_rows();
    }

    function deleteBrand($userId)
    {
        $this->db->where('Brand_id', $userId);
        $this->db->delete('brands');
        
        return $this->db->affected_rows();
    }

    /**
     * This function is used to match users password for change password
     * @param number $userId : This is user id
     */
    function matchOldPassword($email, $password)
    {
        /*$this->db->select('Email, Password');
        $this->db->where('Email', $userId);        
       // $this->db->where('isDeleted', 0);
        $query = $this->db->get('admin_users');
        
        $user = $query->result();

        if(!empty($user)){
            if(verifyHashedPassword($oldPassword, $user->Password)){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }*/
        $this->db->select('BaseTbl.Name, BaseTbl.Email, BaseTbl.Password, BaseTbl.Mobile_No, BaseTbl.Role');
        $this->db->from('admin_users as BaseTbl');
       // $this->db->join('tbl_roles as Roles','Roles.roleId = BaseTbl.roleId');
        $this->db->where('BaseTbl.Email', $email);
    //    $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        $user = $query->row();
        
        if(!empty($user)){
            if(verifyHashedPassword($password, $user->Password)){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
    
    

    /**
     * This function is used to change users password
     * @param number $userId : This is user id
     * @param array $userInfo : This is user updation info
     */
    function changePassword($userId, $userInfo)
    {
        $this->db->where('Email', $userId);
        //$this->db->where('isDeleted', 0);
        $this->db->update('admin_users', $userInfo);
        
        return $this->db->affected_rows();
    }


    /**
     * This function is used to get user login history
     * @param number $userId : This is user id
     */
    function loginHistoryCount($userId, $searchText, $fromDate, $toDate)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.sessionData, BaseTbl.machineIp, BaseTbl.userAgent, BaseTbl.agentString, BaseTbl.platform, BaseTbl.createdDtm');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.sessionData LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($fromDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) >= '".date('Y-m-d', strtotime($fromDate))."'";
            $this->db->where($likeCriteria);
        }
        if(!empty($toDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) <= '".date('Y-m-d', strtotime($toDate))."'";
            $this->db->where($likeCriteria);
        }
        if($userId >= 1){
            $this->db->where('BaseTbl.userId', $userId);
        }
        $this->db->from('tbl_last_login as BaseTbl');
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    /**
     * This function is used to get user login history
     * @param number $userId : This is user id
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function loginHistory($userId, $searchText, $fromDate, $toDate, $page, $segment)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.sessionData, BaseTbl.machineIp, BaseTbl.userAgent, BaseTbl.agentString, BaseTbl.platform, BaseTbl.createdDtm');
        $this->db->from('tbl_last_login as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.sessionData  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($fromDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) >= '".date('Y-m-d', strtotime($fromDate))."'";
            $this->db->where($likeCriteria);
        }
        if(!empty($toDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) <= '".date('Y-m-d', strtotime($toDate))."'";
            $this->db->where($likeCriteria);
        }
        if($userId >= 1){
            $this->db->where('BaseTbl.userId', $userId);
        }
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getUserInfoById($userId)
    {
        $this->db->select('userId, name, email, mobile, roleId');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
        $this->db->where('userId', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }

    /**
     * This function used to get user information by id with role
     * @param number $userId : This is user id
     * @return aray $result : This is user information
     */
    function getUserInfoWithRole($userId)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.roleId, Roles.role');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Roles','Roles.roleId = BaseTbl.roleId');
        $this->db->where('BaseTbl.userId', $userId);
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        return $query->row();
    }

}

  
