<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'TeamInvento : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the user list
     */

    function doctors()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->doctorListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->doctorListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
          //  $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("doctor", $data, NULL);
       
    }

    function patients()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->patientListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->patientListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("patient", $this->global, $data, NULL);
       
    }

    function assistant()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->assistantListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->assistantListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("assistant", $this->global, $data, NULL);
       
    }
    
    function nurse()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->nurseListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->nurseListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("nurse", $this->global, $data, NULL);
       
    }

    function appointment()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->appointmentListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->appointmentListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("appointment", $this->global, $data, NULL);
       
    }

    function dept()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->deptListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->deptListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("department", $this->global, $data, NULL);
       
    }

    function a_patient()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->a_patientListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->a_patientListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("a_patient", $this->global, $data, NULL);
       
    }

    function d_patient()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->d_patientListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->d_patientListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("d_patient", $this->global, $data, NULL);
       
    }

    function wards()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->wardListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->wardListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("wards", $this->global, $data, NULL);
       
    }

    function wardboy()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->wardboyListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->wardboyListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("wardboy", $this->global, $data, NULL);
       
    }

    function medicine()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->medicineListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->medicineListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("medicine", $this->global, $data, NULL);
       
    }

    function prescription()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->prescriptionListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->prescriptionListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("prescription", $this->global, $data, NULL);
       
    }

    function test()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->testListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->testListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("test", $this->global, $data, NULL);
       
    }

    function p_test()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->p_testListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->p_testListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("patient_test", $this->global, $data, NULL);
       
    }

    function rooms()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->roomsListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->roomsListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("rooms", $this->global, $data, NULL);
       
    }

    function office()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->officeListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->officeListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("office", $this->global, $data, NULL);
       
    }

    function ambulance()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->ambulanceListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->ambulanceListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("ambulance", $this->global, $data, NULL);
       
    }

    function a_driver()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->a_driverListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->a_driverListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("ambulance_driver", $this->global, $data, NULL);
       
    }

    //Insert
    function addDoctor()
    {
    
            $this->load->model('user_model');
            $data['Office'] = $this->user_model->getOffice();
            $data['Dept'] = $this->user_model->getDept();
            #$data['id'] = $this->user_model->getId();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addDoctor", $this->global, $data, NULL);
    }

    
    function addNewDoctor()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Doc_id','Doctor ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Doc_name','Doctor Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Degree','Degree','trim|required|max_length[128]');
            $this->form_validation->set_rules('Designation','Designation','trim|required|max_length[128]');
            $this->form_validation->set_rules('Salary','Salary','trim|required|max_length[128]|numeric');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','required|numeric|max_length[10]');
            $this->form_validation->set_rules('Office_id','Office ID','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addDoctor();
            }
            else
            {
                $Doc_id = $this->security->xss_clean($this->input->post('Doc_id'));
                $Doc_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Doc_name'))));
                $Degree = $this->security->xss_clean($this->input->post('Degree'));
                $Desg = ucwords(strtolower($this->security->xss_clean($this->input->post('Designation'))));
                $Salary = $this->security->xss_clean($this->input->post('Salary'));
                $Dept_id =$this->security->xss_clean($this->input->post('Dept_id'));
                $C_N = $this->security->xss_clean($this->input->post('Contact_no'));
                $Off_id = $this->security->xss_clean($this->input->post('Office_id'));

                 $userInfo = array('Doc_id'=>$Doc_id, 'Doc_name'=>$Doc_name, 'Degree'=>$Degree, 'Designation'=> $Desg,
                                    'Salary'=>$Salary, 'Dept_id'=>$Dept_id, 'Contact_no'=>$C_N,
                                     'Office_id' => $Off_id);
                
                $this->load->model('user_model');
                $result = $this->user_model->checkdoctorexists($userInfo);
                if($result)
                {
                
                     $this->session->set_flashdata('error', "Enter Unique Doctor ID");
                  
                }
                else
                {
                $this->load->model('user_model');
                $result = $this->user_model->addNewDoctor($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Doctors Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Doctor addition failed');
                }
                }
                
                redirect('User/addDoctor');
            }
        
    }

    function addPatient()
    {
    
            $this->load->model('user_model');
            $data['Doc'] = $this->user_model->getDoc();
            #$data['id'] = $this->user_model->getId();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addPatient", $this->global, $data, NULL);
    }

    
    function addNewPatient()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Pat_id','Patient ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Pat_name','Patient Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Age','Age','trim|required|max_length[3]|numeric');
            $this->form_validation->set_rules('B_G','Blood Group','trim|required|max_length[128]');
            $this->form_validation->set_rules('Doc_id','Doctor ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Disease','Disease','trim|required|max_length[128]');
            $this->form_validation->set_rules('City','City','trim|required|max_length[128]');
            $this->form_validation->set_rules('Address','Address','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','required|numeric|max_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addPatient();
            }
            else
            {
                $Pat_id = $this->security->xss_clean($this->input->post('Pat_id'));
                $Pat_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Pat_name'))));
                $Age = $this->security->xss_clean($this->input->post('Age'));
                $B_G = ucwords(strtolower($this->security->xss_clean($this->input->post('B_G'))));
                $Doc_id =$this->security->xss_clean($this->input->post('Doc_id'));
                $Disease = ucwords(strtolower($this->security->xss_clean($this->input->post('Disease'))));
                $City = ucwords(strtolower($this->security->xss_clean($this->input->post('City'))));
                $Address = ucwords(strtolower($this->security->xss_clean($this->input->post('Address'))));
                $Contact_no =$this->security->xss_clean($this->input->post('Contact_no'));


                
                $userInfo = array('Pat_id'=>$Pat_id, 'Pat_name'=>$Pat_name, 'Age'=>$Age, 'Blood_Group'=> $B_G,
                                    'Doc_id'=>$Doc_id, 'Disease'=>$Disease, 'City'=>$City,
                                     'Address' => $Address, 'Contact_no'=> $Contact_no);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewPatient($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Patient Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Patient addition failed');
                }
                
                redirect('User/addPatient');
            }
        
    }

    function addamb()
    {
    
            $this->load->model('user_model');
            
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addamb", $this->global, NULL);
    }

    
    function addNewamb()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Am_no','Ambulance No.','trim|required|max_length[128]');
            $this->form_validation->set_rules('Capacity','Capacity','trim|required|max_length[3]|numeric');        
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addamb();
            }
            else
            {
                $Pat_id = $this->security->xss_clean($this->input->post('Am_no'));
                $Age = $this->security->xss_clean($this->input->post('Capacity'));
                $userInfo = array('Am_no'=>$Pat_id, 'Capacity'=>$Age);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewamb($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Ambulance Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Ambulance Data addition failed');
                }
                
                redirect('User/addamb');
            }
        
    }

    function addOffice()
    {
    
            $this->load->model('user_model');
            $data['Dept'] = $this->user_model->getDept();
            #$data['id'] = $this->user_model->getId();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addoffice", $this->global, $data, NULL);
    }

    function addNewOffice()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Office_id','Office ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');        
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addOffice();
            }
            else
            {
                $Pat_id = $this->security->xss_clean($this->input->post('Office_id'));
                $Age = $this->security->xss_clean($this->input->post('Dept_id'));
                $userInfo = array('Office_id'=>$Pat_id, 'Dept_id'=>$Age);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewOffice($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Office Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Office Data addition failed');
                }
                
                redirect('User/addOffice');
            }
        
    }

    function addass()
    {
    
            $this->load->model('user_model');
            $data['Doc'] = $this->user_model->getDoc();
            $data['Dept'] = $this->user_model->getDept();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addass", $this->global, $data, NULL);
    }

    function addNewass()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Ass_id','Assistant ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Ass_name','Assistant Name','trim|required|max_length[128]');        
            $this->form_validation->set_rules('Doc_id','Doctor ID','trim|required|max_length[128]');        
            $this->form_validation->set_rules('Degree','Degree','trim|required|max_length[128]');        
            $this->form_validation->set_rules('Salary','Salary','trim|required|max_length[128]');        
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');        
            $this->form_validation->set_rules('Contact_no','Conatact No.','trim|required|max_length[128]');        
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addass();
            }
            else
            {
                $AI = $this->security->xss_clean($this->input->post('Ass_id'));
                $AN = ucwords(strtolower($this->security->xss_clean($this->input->post('Ass_name'))));
                $DI = $this->security->xss_clean($this->input->post('Doc_id'));
                $D = ucwords(strtolower($this->security->xss_clean($this->input->post('Degree'))));
                $S = $this->security->xss_clean($this->input->post('Salary'));
                $Dep = $this->security->xss_clean($this->input->post('Dept_id'));
                $CN = $this->security->xss_clean($this->input->post('Contact_no'));
                
                $userInfo = array('Ass_id'=>$AI, 'Ass_name'=>$AN, 'Doc_id'=>$DI, 'Degree'=>$D,'Salary'=>$S,
                                    'Dept_id'=>$Dep, 'Contact_no'=>$CN);
                
                $this->load->model('user_model');
                $result = $this->user_model->checkassexists($userInfo);
                if($result)
                {
                
                     $this->session->set_flashdata('error', "Enter Unique Assistant ID");
                  
                }
                else
                {
                $this->load->model('user_model');
                $result = $this->user_model->addNewass($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Assistant Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Assistant addition failed');
                }
                }
                
             
                
                redirect('User/addass');
            }
        
    }

    function addRoom()
    {
    
            $this->load->model('user_model');
            $data['Dept'] = $this->user_model->getDept();
            $data['Ward'] = $this->user_model->getWard();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addroom", $this->global, $data, NULL);
    }

    function addNewRoom()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Ward_id','Ward ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Room_no','Room No.','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');  
            $this->form_validation->set_rules('Type','Type','trim|required|max_length[128]');
            $this->form_validation->set_rules('Capacity','Capacity','trim|required|max_length[128]|numeric');      
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addRoom();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Ward_id'));
                $RN = $this->security->xss_clean($this->input->post('Room_no'));
                $DI = $this->security->xss_clean($this->input->post('Dept_id'));
                $T = $this->security->xss_clean($this->input->post('Type'));
                $C = $this->security->xss_clean($this->input->post('Capacity'));
                $userInfo = array('Ward_id'=>$WI,'Room_no'=>$RN, 'Dept_id'=>$DI, 'Type'=>$T, 'Capacity'=>$C);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewroom($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Rooms Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Room Data addition failed');
                }
                
                redirect('User/addRoom');
            }
        
    }
    function addmed()
    {
    
            $this->load->model('user_model');
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addmed", $this->global, NULL);
    }

    function addNewmed()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Med_id','Medicine ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Med_name','Medicine Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Med_company','Medicine Company','trim|required|max_length[128]');  
            $this->form_validation->set_rules('Cost','Cost','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addmed();
            }
            else
            {
                $MI = $this->security->xss_clean($this->input->post('Med_id'));
                $MN = $this->security->xss_clean($this->input->post('Med_name'));
                $MC = $this->security->xss_clean($this->input->post('Med_company'));
                $C = $this->security->xss_clean($this->input->post('Cost'));
                $userInfo = array('Med_id'=>$MI,'Med_name'=>$MN, 'Med_company'=>$MC, 'Cost'=>$C);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewmed($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Medicines Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Medicines Data addition failed');
                }
                
                redirect('User/addmed');
            }
        
    }

    function addptest()
    {
    
            $this->load->model('user_model');
            $data['Test'] = $this->user_model->getTest();
            $data['Pat'] = $this->user_model->getPat();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addptest", $this->global, $data, NULL);
    }

    function addNewptest()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Pat_id','Patient ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Test_id','Test ID','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addptest();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Pat_id'));
                $RN = $this->security->xss_clean($this->input->post('Test_id'));
                $userInfo = array('Pat_id'=>$WI,'Test_id'=>$RN);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewptest($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Patient Test Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Patient Test Data addition failed');
                }
                
                redirect('User/addptest');
            }
        
    }

    function addWard()
    {
    
            $this->load->model('user_model');
            $data['Dept'] = $this->user_model->getDept();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addward", $this->global, $data, NULL);
    }

    function addNewWard()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Ward_id','Ward ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Total_room','Total Room','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addWard();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Ward_id'));
                $RN = $this->security->xss_clean($this->input->post('Total_room'));
                $D = $this->security->xss_clean($this->input->post('Dept_id'));
                $userInfo = array('Ward_id'=>$WI,'Total_room'=>$RN, 'Dept_id'=>$D);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewWard($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Ward Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Ward Data addition failed');
                }
                
                redirect('User/addWard');
            }
        
    }
    function addapatient()
    {
    
            $this->load->model('user_model');
            $data['Doc'] = $this->user_model->getDoc();
            $data['ward'] = $this->user_model->getWard();
            $data['Dept'] = $this->user_model->getDept();
            $data['room'] = $this->user_model->getRoom();


            #$data['id'] = $this->user_model->getId();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addapatient", $this->global, $data, NULL);
    }

    
    function addNewapatient()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Pat_id','Patient ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Pat_name','Patient Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Age','Age','trim|required|max_length[3]|numeric');
            $this->form_validation->set_rules('Blood_Group','Blood Group','trim|required|max_length[128]');
            $this->form_validation->set_rules('Doc_id','Doctor ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Admit_date','Admit Date','trim|required|max_length[128]');
            $this->form_validation->set_rules('Ward_id','Ward ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Room_no','Room no.','trim|required|max_length[128]');
            $this->form_validation->set_rules('Disease','Disease','trim|required|max_length[128]');
            $this->form_validation->set_rules('City','City','trim|required|max_length[128]');
            $this->form_validation->set_rules('Address','Address','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','required|numeric|max_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addapatient();
            }
            else
            {
                $Pat_id = $this->security->xss_clean($this->input->post('Pat_id'));
                $Pat_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Pat_name'))));
                $Age = $this->security->xss_clean($this->input->post('Age'));
                $B_G = ucwords(strtolower($this->security->xss_clean($this->input->post('Blood_Group'))));
                $Doc_id =$this->security->xss_clean($this->input->post('Doc_id'));
                $AD = $this->security->xss_clean($this->input->post('Admit_date'));
                $DI =$this->security->xss_clean($this->input->post('Dept_id'));
                $WI =$this->security->xss_clean($this->input->post('Ward_id'));
                $RN =$this->security->xss_clean($this->input->post('Room_no'));
                $Disease = ucwords(strtolower($this->security->xss_clean($this->input->post('Disease'))));
                $City = ucwords(strtolower($this->security->xss_clean($this->input->post('City'))));
                $Address = ucwords(strtolower($this->security->xss_clean($this->input->post('Address'))));
                $Contact_no =$this->security->xss_clean($this->input->post('Contact_no'));


                
                $userInfo = array('Pat_id'=>$Pat_id, 'Pat_name'=>$Pat_name, 'Age'=>$Age, 'Blood_Group'=> $B_G,
                                    'Doc_id'=>$Doc_id,'Admit_date'=>$AD,'Dept_id'=>$DI,'Ward_id'=>$WI, 'Room_no'=>$RN, 'Disease'=>$Disease, 'City'=>$City,
                                     'Address' => $Address, 'Contact_no'=> $Contact_no);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewapatient($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Patient Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Patient addition failed');
                }
                
                redirect('User/addapatient');
            }
        
    }
    function adddpatient()
    {
    
            $this->load->model('user_model');
            $data['Doc'] = $this->user_model->getDoc();
            $data['ward'] = $this->user_model->getWard();
            $data['Dept'] = $this->user_model->getDept();
            $data['room'] = $this->user_model->getRoom();

            $this->loadViews("adddpatient", $this->global, $data, NULL);
    }
    function addNewdpatient()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Pat_id','Patient ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Pat_name','Patient Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Age','Age','trim|required|max_length[3]|numeric');
            $this->form_validation->set_rules('Blood_Group','Blood Group','trim|required|max_length[128]');
            $this->form_validation->set_rules('Doc_id','Doctor ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Ward_id','Ward ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Discharge_date','Discharge Date','trim|required|max_length[128]');
            $this->form_validation->set_rules('Room_no','Room No.','trim|required|max_length[128]');
            $this->form_validation->set_rules('Disease','Disease','trim|required|max_length[128]');
            $this->form_validation->set_rules('Total_bill','Total Bill','trim|required|max_length[128]');
            $this->form_validation->set_rules('City','City','trim|required|max_length[128]');
            $this->form_validation->set_rules('Address','Address','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','required|numeric|max_length[10]');
            $this->form_validation->set_rules('Admitted_Patient','Admitted Patient Date','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->adddpatient();
            }
            else
            {
                $Pat_id = $this->security->xss_clean($this->input->post('Pat_id'));
                $Pat_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Pat_name'))));
                $Age = $this->security->xss_clean($this->input->post('Age'));
                $B_G = ucwords(strtolower($this->security->xss_clean($this->input->post('Blood_Group'))));
                $Doc_id =$this->security->xss_clean($this->input->post('Doc_id'));
                $DI =$this->security->xss_clean($this->input->post('Dept_id'));
                $WI =$this->security->xss_clean($this->input->post('Ward_id'));
                $AD = $this->security->xss_clean($this->input->post('Discharge_date'));
                $RN =$this->security->xss_clean($this->input->post('Room_no'));
                $Disease = ucwords(strtolower($this->security->xss_clean($this->input->post('Disease'))));
                $Total_bill = $this->security->xss_clean($this->input->post('Total_bill'));
                $City = ucwords(strtolower($this->security->xss_clean($this->input->post('City'))));
                $Address = ucwords(strtolower($this->security->xss_clean($this->input->post('Address'))));
                $Contact_no =$this->security->xss_clean($this->input->post('Contact_no'));
                $Ap = $this->security->xss_clean($this->input->post('Admitted_Patient'));

                
                $userInfo = array('Pat_id'=>$Pat_id, 'Pat_name'=>$Pat_name, 'Age'=>$Age, 'Blood_Group'=> $B_G,
                                    'Doc_id'=>$Doc_id,'Discharge_date'=>$AD,'Dept_id'=>$DI,'Ward_id'=>$WI, 'Room_no'=>$RN, 'Disease'=>$Disease, 
                                    'Total_bill'=>$Total_bill,'City'=>$City,
                                     'Address' => $Address, 'Contact_no'=> $Contact_no, 'Admitted_Patient'=>$Ap);
                
                $this->load->model('user_model');
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Patient Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Patient addition failed');
                }
                
                redirect('User/adddpatient');
            }
        
    }
    
    function addappoinment()
    {
    
            $this->load->model('user_model');
            $data['Doc'] = $this->user_model->getDoc();
           
            $this->loadViews("addappointment", $this->global, $data, NULL);
    }
    function addNewappointment()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('App_id','Appointment ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Pat_name','Patient Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Age','Age','trim|required|max_length[3]|numeric');
            $this->form_validation->set_rules('Blood_Group','Blood Group','trim|required|max_length[128]');
            $this->form_validation->set_rules('Doc_id','Doctor ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('App_time','Appointment Time','trim|required|max_length[128]');
            $this->form_validation->set_rules('App_date','Appointment Date','trim|required|max_length[128]');
            $this->form_validation->set_rules('City','City','trim|required|max_length[128]');
            $this->form_validation->set_rules('Address','Address','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','required|numeric|max_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addappoinment();
            }
            else
            {
                $Pat_id = $this->security->xss_clean($this->input->post('App_id'));
                $Pat_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Pat_name'))));
                $Age = $this->security->xss_clean($this->input->post('Age'));
                $B_G = ucwords(strtolower($this->security->xss_clean($this->input->post('Blood_Group'))));
                $Doc_id =$this->security->xss_clean($this->input->post('Doc_id'));
                $DI =$this->security->xss_clean($this->input->post('Dept_id'));
                $WI =$this->security->xss_clean($this->input->post('Ward_id'));
                $AD = $this->security->xss_clean($this->input->post('App_time'));
                $Ap = $this->security->xss_clean($this->input->post('App_date'));
                $City = ucwords(strtolower($this->security->xss_clean($this->input->post('City'))));
                $Address = ucwords(strtolower($this->security->xss_clean($this->input->post('Address'))));
                $Contact_no =$this->security->xss_clean($this->input->post('Contact_no'));

                
                $userInfo = array('App_id'=>$Pat_id, 'Pat_name'=>$Pat_name, 'Age'=>$Age, 'Blood_Group'=> $B_G,
                                    'Doc_id'=>$Doc_id,'App_time'=>$AD,'App_date'=>$Ap,'City'=>$City,
                                     'Address' => $Address, 'Contact_no'=> $Contact_no);
                
               $this->load->model('user_model');
                $result = $this->user_model->checkappexists($userInfo);
                if($result)
                {
                
                     $this->session->set_flashdata('error', "Enter Unique Appointment ID");
                  
                }
                else
                {
                $this->load->model('user_model');
                $result = $this->user_model->addNewapp($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Appointment Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Doctor Appointment failed');
                }
                }
                
                redirect('User/addappoinment');
            }
        
    }
    function addambd()
    {
    
            $this->load->model('user_model');
            $data['amb'] = $this->user_model->getamb();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addambd", $this->global, $data, NULL);
    }

    function addNewambd()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Driver_id','Driver ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Driver_name','Driver Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Salary','Salary','trim|required|max_length[128]');
            $this->form_validation->set_rules('Am_no','Ambulance No','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addambd();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Driver_id'));
                $RN = $this->security->xss_clean($this->input->post('Driver_name'));
                $D = $this->security->xss_clean($this->input->post('Salary'));
                $A = $this->security->xss_clean($this->input->post('Am_no'));

                $userInfo = array('Driver_id'=>$WI,'Driver_name'=>$RN, 'Salary'=>$D, 'Am_no'=>$A);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewambd($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Driver Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Driver Data addition failed');
                }
                
                redirect('User/addambd');
            }
        
    }

    function addDept()
    {
    
            $this->load->model('user_model');
           // $data['amb'] = $this->user_model->getamb();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("adddept", $this->global, NULL);
    }

    function addNewDept()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_name','Department Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Head_name','Head Name','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addDept();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Dept_id'));
                $RN = $this->security->xss_clean($this->input->post('Dept_name'));
                $D = $this->security->xss_clean($this->input->post('Head_name'));

                $userInfo = array('Dept_id'=>$WI,'Dept_name'=>$RN, 'Head_name'=>$D);
                
                $this->load->model('user_model');
                $result = $this->user_model->checkdeptexists($userInfo);
                if($result)
                {
                
                     $this->session->set_flashdata('error', "Enter Unique Department ID");
                  
                }
                else
                {
                $this->load->model('user_model');
                $result = $this->user_model->addNewdept($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Department Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Department Details failed');
                }
                }
                
                
                redirect('User/addDept');
            }
        
    }

    function addNurse()
    {
    
            $this->load->model('user_model');
            $data['ward'] = $this->user_model->getWard();
            $data['Dept'] = $this->user_model->getDept();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addnurse", $this->global, $data, NULL);
    }

    function addNewnurse()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Nurse_id','Nurse ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Nurse_name','Nurse Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Ward_id','Ward ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Salary','Salary','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNurse();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Nurse_id'));
                $RN = $this->security->xss_clean($this->input->post('Nurse_name'));
                $D = $this->security->xss_clean($this->input->post('Ward_id'));
                $DI = $this->security->xss_clean($this->input->post('Dept_id'));
                $S = $this->security->xss_clean($this->input->post('Salary'));
                $CN = $this->security->xss_clean($this->input->post('Contact_no'));

                $userInfo = array('Nurse_id'=>$WI,'Nurse_name'=>$RN, 'Ward_id'=>$D, 'Dept_id'=>$DI,
                                'Salary'=>$S, 'Contact_no'=>$CN);
                
               $this->load->model('user_model');
                $result = $this->user_model->checknurseexists($userInfo);
                if($result)
                {
                
                     $this->session->set_flashdata('error', "Enter Unique Nurse ID");
                  
                }
                else
                {
                $this->load->model('user_model');
                $result = $this->user_model->addNewNurse($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Nurse Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Nurse addition failed');
                }
                }
                
                
                redirect('User/addNurse');
            }
        
    }    

    function addWB()
    {
    
            $this->load->model('user_model');
            $data['ward'] = $this->user_model->getWard();
            $data['Dept'] = $this->user_model->getDept();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addwardboy", $this->global, $data, NULL);
    }

    function addNewWB()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Wardboy_id','Wardboy ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Wardboy_name','Wardboy Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Ward_id','Ward ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Salary','Salary','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addWB();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Wardboy_id'));
                $RN = $this->security->xss_clean($this->input->post('Wardboy_name'));
                $D = $this->security->xss_clean($this->input->post('Ward_id'));
                $DI = $this->security->xss_clean($this->input->post('Dept_id'));
                $S = $this->security->xss_clean($this->input->post('Salary'));
                $CN = $this->security->xss_clean($this->input->post('Contact_no'));

                $userInfo = array('Wardboy_id'=>$WI,'Wardboy_name'=>$RN, 'Ward_id'=>$D, 'Dept_id'=>$DI,
                                'Salary'=>$S, 'Contact_no'=>$CN);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewWB($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Ward Boy Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Ward Boy Data addition failed');
                }
                
                redirect('User/addWB');
            }
        
    }
    
    function addpresc()
    {
    
            $this->load->model('user_model');
            $data['Med'] = $this->user_model->getMed();
            //$data['Dept'] = $this->user_model->getDept();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addpresc", $this->global, $data, NULL);
    }

    function addNewpresc()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Med_id','Medicine ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Give_date','Give Date','trim|required|max_length[128]');
            $this->form_validation->set_rules('Pat_id','Pat ID','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addpresc();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Med_id'));
                $RN = $this->security->xss_clean($this->input->post('Give_date'));
                $D = $this->security->xss_clean($this->input->post('Pat_id'));

                $userInfo = array('Med_id'=>$WI,'Give_date'=>$RN, 'Pat_id'=>$D);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewpresc($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Prescription Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Prescription Data addition failed');
                }
                
                redirect('User/addpresc');
            }
        
    }

    function addtest()
    {
    
            $this->load->model('user_model');
           
            //$data['Dept'] = $this->user_model->getDept();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addtest", $this->global, NULL);
    }

    function addNewtest()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Test_id','Test ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Test_name','Test Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Cost','Cost','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addtest();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Test_id'));
                $RN = $this->security->xss_clean($this->input->post('Test_name'));
                $D = $this->security->xss_clean($this->input->post('Cost'));

                $userInfo = array('Test_id'=>$WI,'Test_name'=>$RN, 'Cost'=>$D);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewtest($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Test Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Test Data addition failed');
                }
                
                redirect('User/addtest');
            }
        
    }

    //Edit
    function editdass($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getassInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editdass", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editOldass()
    {
            
            $userId = $this->input->post('Ass_id');
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Ass_id','Assistant ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Ass_name','Assistant Name','trim|required|max_length[128]');        
            $this->form_validation->set_rules('Doc_id','Doctor ID','trim|required|max_length[128]');        
            $this->form_validation->set_rules('Degree','Degree','trim|required|max_length[128]');        
            $this->form_validation->set_rules('Salary','Salary','trim|required|max_length[128]');        
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');        
            $this->form_validation->set_rules('Contact_no','Conatact No.','trim|required|max_length[128]');        
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addass();
            }
            else
            {
                $AI = $this->security->xss_clean($this->input->post('Ass_id'));
                $AN = ucwords(strtolower($this->security->xss_clean($this->input->post('Ass_name'))));
                $DI = $this->security->xss_clean($this->input->post('Doc_id'));
                $D = ucwords(strtolower($this->security->xss_clean($this->input->post('Degree'))));
                $S = $this->security->xss_clean($this->input->post('Salary'));
                $Dep = $this->security->xss_clean($this->input->post('Dept_id'));
                $CN = $this->security->xss_clean($this->input->post('Contact_no'));
                $userInfo = array('Ass_id'=>$AI, 'Ass_name'=>$AN, 'Doc_id'=>$DI, 'Degree'=>$D,'Salary'=>$S,
                                    'Dept_id'=>$Dep, 'Contact_no'=>$CN);
                
                $this->load->model('user_model');
                $result = $this->user_model->editass($userInfo, $userId);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'Assistant Updation Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Assistant Updation Addition failed');
                }
                
                redirect('User/assistant');
            }
    }

    function editdept($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getdeptInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editdept", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editolddept()
    {
            
            $userId = $this->input->post('Dept_id');
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_name','Department Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Head_name','Head Name','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->dept();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Dept_id'));
                $RN = $this->security->xss_clean($this->input->post('Dept_name'));
                $D = $this->security->xss_clean($this->input->post('Head_name'));
                
                $userInfo = array('Dept_id'=>$WI,'Dept_name'=>$RN, 'Head_name'=>$D);

                $this->load->model('user_model');
                $result = $this->user_model->editdept($userInfo, $userId);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'Department Updation Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Department Updation Addition failed');
                }
                
                redirect('User/dept');
            }
    }
    
    function editdoctor($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getdocInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editdoctor", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editolddoctor()
    {
            
            $userId = $this->input->post('Doc_id');
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Doc_id','Doctor ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Doc_name','Doctor Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Degree','Degree','trim|required|max_length[128]');
            $this->form_validation->set_rules('Designation','Designation','trim|required|max_length[128]');
            $this->form_validation->set_rules('Salary','Salary','trim|required|max_length[128]|numeric');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','required|numeric|max_length[10]');
            $this->form_validation->set_rules('Office_id','Office ID','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->Doctors();
            }
            else
            {
                $Doc_id = $this->security->xss_clean($this->input->post('Doc_id'));
                $Doc_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Doc_name'))));
                $Degree = $this->security->xss_clean($this->input->post('Degree'));
                $Desg = ucwords(strtolower($this->security->xss_clean($this->input->post('Designation'))));
                $Salary = $this->security->xss_clean($this->input->post('Salary'));
                $Dept_id =$this->security->xss_clean($this->input->post('Dept_id'));
                $C_N = $this->security->xss_clean($this->input->post('Contact_no'));
                $Off_id = $this->security->xss_clean($this->input->post('Office_id'));

                
                $userInfo = array('Doc_id'=>$Doc_id, 'Doc_name'=>$Doc_name, 'Degree'=>$Degree, 'Designation'=> $Desg,
                                    'Salary'=>$Salary, 'Dept_id'=>$Dept_id, 'Contact_no'=>$C_N,
                                     'Office_id' => $Off_id);
                
                $this->load->model('user_model');
                $result = $this->user_model->editdoc($userInfo, $userId);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'Doctor Updation Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Doc Updation Addition failed');
                }
                
                redirect('User/Doctors');
            }
    }

    function editdpatient($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getdpatInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editdpatient", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editolddpatient()
    {
            
        $userId = $this->input->post('Pat_id');
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('Pat_id','Patient ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Pat_name','Patient Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Age','Age','trim|required|max_length[3]|numeric');
            $this->form_validation->set_rules('Blood_Group','Blood Group','trim|required|max_length[128]');
            $this->form_validation->set_rules('Doc_id','Doctor ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Ward_id','Ward ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Discharge_date','Discharge Date','trim|required|max_length[128]');
            $this->form_validation->set_rules('Room_no','Room No.','trim|required|max_length[128]');
            $this->form_validation->set_rules('Disease','Disease','trim|required|max_length[128]');
            $this->form_validation->set_rules('Total_bill','Total Bill','trim|required|max_length[128]');
            $this->form_validation->set_rules('City','City','trim|required|max_length[128]');
            $this->form_validation->set_rules('Address','Address','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','required|numeric|max_length[10]');
            $this->form_validation->set_rules('Admitted_Patient','Admitted Patient Date','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->d_patient();
            }
            else
            {
                $Pat_id = $this->security->xss_clean($this->input->post('Pat_id'));
                $Pat_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Pat_name'))));
                $Age = $this->security->xss_clean($this->input->post('Age'));
                $B_G = ucwords(strtolower($this->security->xss_clean($this->input->post('Blood_Group'))));
                $Doc_id =$this->security->xss_clean($this->input->post('Doc_id'));
                $DI =$this->security->xss_clean($this->input->post('Dept_id'));
                $WI =$this->security->xss_clean($this->input->post('Ward_id'));
                $AD = $this->security->xss_clean($this->input->post('Discharge_date'));
                $RN =$this->security->xss_clean($this->input->post('Room_no'));
                $Disease = ucwords(strtolower($this->security->xss_clean($this->input->post('Disease'))));
                $Total_bill = $this->security->xss_clean($this->input->post('Total_bill'));
                $City = ucwords(strtolower($this->security->xss_clean($this->input->post('City'))));
                $Address = ucwords(strtolower($this->security->xss_clean($this->input->post('Address'))));
                $Contact_no =$this->security->xss_clean($this->input->post('Contact_no'));
                $Ap = $this->security->xss_clean($this->input->post('Admitted_Patient'));

                
                $userInfo = array('Pat_id'=>$Pat_id, 'Pat_name'=>$Pat_name, 'Age'=>$Age, 'Blood_Group'=> $B_G,
                                    'Doc_id'=>$Doc_id,'Discharge_date'=>$AD,'Dept_id'=>$DI,'Ward_id'=>$WI, 'Room_no'=>$RN, 'Disease'=>$Disease, 
                                    'Total_bill'=>$Total_bill,'City'=>$City,
                                     'Address' => $Address, 'Contact_no'=> $Contact_no, 'Admitted_Patient'=>$Ap);
                
                $this->load->model('user_model');
                $result = $this->user_model->editdpat($userInfo, $userId);
            
            if($result >= 0)
            {
                $this->session->set_flashdata('success', 'Patient Updation Added successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Patient Updation Addition failed');
            }
            
            redirect('User/d_patient');
        }
    }
   
    function editmedicine($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getmedInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editmedicine", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editoldmedicine()
    {
            
            $userId = $this->input->post('Med_id');
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Med_id','Medicine ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Med_name','Medicine Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Med_company','Medicine Company','trim|required|max_length[128]');  
            $this->form_validation->set_rules('Cost','Cost','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->medicine();
            }
            else
            {
                $MI = $this->security->xss_clean($this->input->post('Med_id'));
                $MN = $this->security->xss_clean($this->input->post('Med_name'));
                $MC = $this->security->xss_clean($this->input->post('Med_company'));
                $C = $this->security->xss_clean($this->input->post('Cost'));
                $userInfo = array('Med_id'=>$MI,'Med_name'=>$MN, 'Med_company'=>$MC, 'Cost'=>$C);
                
                
                $this->load->model('user_model');
                $result = $this->user_model->editmed($userInfo, $userId);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'Medicine Updation Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Medicine Updation Addition failed');
                }
                
                redirect('User/medicine');
            }
    }

    function editnurse($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getnurseInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editnurse", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editoldnurse()
    {
            
            $userId = $this->input->post('Nurse_id');
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Nurse_id','Nurse ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Nurse_name','Nurse Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Ward_id','Ward ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Salary','Salary','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->nurse();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Nurse_id'));
                $RN = $this->security->xss_clean($this->input->post('Nurse_name'));
                $D = $this->security->xss_clean($this->input->post('Ward_id'));
                $DI = $this->security->xss_clean($this->input->post('Dept_id'));
                $S = $this->security->xss_clean($this->input->post('Salary'));
                $CN = $this->security->xss_clean($this->input->post('Contact_no'));

                $userInfo = array('Nurse_id'=>$WI,'Nurse_name'=>$RN, 'Ward_id'=>$D, 'Dept_id'=>$DI,
                                'Salary'=>$S, 'Contact_no'=>$CN);
                
                $this->load->model('user_model');
                $result = $this->user_model->editnurse($userInfo, $userId);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'Nurse Updation Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Nurse Updation Addition failed');
                }
                
                redirect('User/nurse');
            }
    }

    
    function editoffice($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getofficeInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editoffice", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editoldoffice()
    {
            
            $userId = $this->input->post('Office_id');
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Office_id','Office ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');        
            
            if($this->form_validation->run() == FALSE)
            {
                $this->office();
            }
            else
            {
                $Pat_id = $this->security->xss_clean($this->input->post('Office_id'));
                $Age = $this->security->xss_clean($this->input->post('Dept_id'));
                $userInfo = array('Office_id'=>$Pat_id, 'Dept_id'=>$Age);
                
                $this->load->model('user_model');
                $result = $this->user_model->editoffice($userInfo, $userId);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'Office Updation Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Office Updation Addition failed');
                }
                
                redirect('User/office');
            }
    }

    function editpatient($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getpatInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editpatient", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editoldpatient()
    {
            
            $userId = $this->input->post('Pat_id');
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Pat_id','Patient ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Pat_name','Patient Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Age','Age','trim|required|max_length[3]|numeric');
            $this->form_validation->set_rules('Blood_Group','Blood Group','trim|required|max_length[128]');
            $this->form_validation->set_rules('Doc_id','Doctor ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Disease','Disease','trim|required|max_length[128]');
            $this->form_validation->set_rules('City','City','trim|required|max_length[128]');
            $this->form_validation->set_rules('Address','Address','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','required|numeric|max_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addPatient();
            }
            else
            {
                $Pat_id = $this->security->xss_clean($this->input->post('Pat_id'));
                $Pat_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Pat_name'))));
                $Age = $this->security->xss_clean($this->input->post('Age'));
                $B_G = ucwords(strtolower($this->security->xss_clean($this->input->post('Blood_Group'))));
                $Doc_id =$this->security->xss_clean($this->input->post('Doc_id'));
                $Disease = ucwords(strtolower($this->security->xss_clean($this->input->post('Disease'))));
                $City = ucwords(strtolower($this->security->xss_clean($this->input->post('City'))));
                $Address = ucwords(strtolower($this->security->xss_clean($this->input->post('Address'))));
                $Contact_no =$this->security->xss_clean($this->input->post('Contact_no'));


                
                $userInfo = array('Pat_id'=>$Pat_id, 'Pat_name'=>$Pat_name, 'Age'=>$Age, 'Blood_Group'=> $B_G,
                                    'Doc_id'=>$Doc_id, 'Disease'=>$Disease, 'City'=>$City,
                                     'Address' => $Address, 'Contact_no'=> $Contact_no);
                
                $this->load->model('user_model');

                $result = $this->user_model->editpat($userInfo, $userId);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'Patient Updation Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Patient Updation Addition failed');
                }
                
                redirect('User/patients');
            }
    }

    function editWB($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getwbInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editwardboy", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editoldWB()
    {
            
            $userId = $this->input->post('Wardboy_id');
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Wardboy_id','Wardboy ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Wardboy_name','Wardboy Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Ward_id','Ward ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Salary','Salary','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->wardboy();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Wardboy_id'));
                $RN = $this->security->xss_clean($this->input->post('Wardboy_name'));
                $D = $this->security->xss_clean($this->input->post('Ward_id'));
                $DI = $this->security->xss_clean($this->input->post('Dept_id'));
                $S = $this->security->xss_clean($this->input->post('Salary'));
                $CN = $this->security->xss_clean($this->input->post('Contact_no'));

                $userInfo = array('Wardboy_id'=>$WI,'Wardboy_name'=>$RN, 'Ward_id'=>$D, 'Dept_id'=>$DI,
                                'Salary'=>$S, 'Contact_no'=>$CN);
                
                $this->load->model('user_model');

                $result = $this->user_model->editwb($userInfo, $userId);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'WardBoy Updation Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'WardBoy Updation Addition failed');
                }
                
                redirect('User/wardboy');
            }
    }

    function editadriver($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getadInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editadriver", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editoldadriver()
    {
            
            $userId = $this->input->post('Driver_id');
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Driver_id','Driver ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Driver_name','Driver Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Salary','Salary','trim|required|max_length[128]');
            $this->form_validation->set_rules('Am_no','Ambulance No','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->a_driver();
            }
            else
            {
                $WI = $this->security->xss_clean($this->input->post('Driver_id'));
                $RN = $this->security->xss_clean($this->input->post('Driver_name'));
                $D = $this->security->xss_clean($this->input->post('Salary'));
                $A = $this->security->xss_clean($this->input->post('Am_no'));

                $userInfo = array('Driver_id'=>$WI,'Driver_name'=>$RN, 'Salary'=>$D, 'Am_no'=>$A);
                
                $this->load->model('user_model');

                $result = $this->user_model->editad($userInfo, $userId);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'Driver Updation Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Driver Updation Addition failed');
                }
                
                redirect('User/a_driver');
            }
    }

    function editamb($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getambInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editambulance", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editoldamb()
    {
            
            $userId = $this->input->post('Am_no');
            
            $this->load->library('form_validation');
            
             
            $this->form_validation->set_rules('Am_no','Ambulance No.','trim|required|max_length[128]');
            $this->form_validation->set_rules('Capacity','Capacity','trim|required|max_length[3]|numeric');        
            
            if($this->form_validation->run() == FALSE)
            {
                $this->ambulance();
            }
            else
            {
                $Pat_id = $this->security->xss_clean($this->input->post('Am_no'));
                $Age = $this->security->xss_clean($this->input->post('Capacity'));
                $userInfo = array('Am_no'=>$Pat_id, 'Capacity'=>$Age);
                
                $this->load->model('user_model');

                $result = $this->user_model->editamb($userInfo, $userId);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'Ambulance Updation Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Ambulance Updation Addition failed');
                }
                
                redirect('User/ambulance');
            }
    }


    function editapatient($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getapatInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editapatient", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editoldapatient()
    {
            
            $userId = $this->input->post('Pat_id');
            
            $this->load->library('form_validation');
            
             
            $this->form_validation->set_rules('Pat_id','Patient ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Pat_name','Patient Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Age','Age','trim|required|max_length[3]|numeric');
            $this->form_validation->set_rules('Blood_Group','Blood Group','trim|required|max_length[128]');
            $this->form_validation->set_rules('Doc_id','Doctor ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Dept_id','Department ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Admit_date','Admit Date','trim|required|max_length[128]');
            $this->form_validation->set_rules('Ward_id','Ward ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Room_no','Room no.','trim|required|max_length[128]');
            $this->form_validation->set_rules('Disease','Disease','trim|required|max_length[128]');
            $this->form_validation->set_rules('City','City','trim|required|max_length[128]');
            $this->form_validation->set_rules('Address','Address','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','required|numeric|max_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->a_patient();
            }
            else
            {
                $Pat_id = $this->security->xss_clean($this->input->post('Pat_id'));
                $Pat_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Pat_name'))));
                $Age = $this->security->xss_clean($this->input->post('Age'));
                $B_G = ucwords(strtolower($this->security->xss_clean($this->input->post('Blood_Group'))));
                $Doc_id =$this->security->xss_clean($this->input->post('Doc_id'));
                $AD = $this->security->xss_clean($this->input->post('Admit_date'));
                $DI =$this->security->xss_clean($this->input->post('Dept_id'));
                $WI =$this->security->xss_clean($this->input->post('Ward_id'));
                $RN =$this->security->xss_clean($this->input->post('Room_no'));
                $Disease = ucwords(strtolower($this->security->xss_clean($this->input->post('Disease'))));
                $City = ucwords(strtolower($this->security->xss_clean($this->input->post('City'))));
                $Address = ucwords(strtolower($this->security->xss_clean($this->input->post('Address'))));
                $Contact_no =$this->security->xss_clean($this->input->post('Contact_no'));


                
                $userInfo = array('Pat_id'=>$Pat_id, 'Pat_name'=>$Pat_name, 'Age'=>$Age, 'Blood_Group'=> $B_G,
                                    'Doc_id'=>$Doc_id,'Admit_date'=>$AD,'Dept_id'=>$DI,'Ward_id'=>$WI, 'Room_no'=>$RN, 'Disease'=>$Disease, 'City'=>$City,
                                     'Address' => $Address, 'Contact_no'=> $Contact_no);
                
                $this->load->model('user_model');

                $result = $this->user_model->editapat($userInfo, $userId);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'Patient Updation Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Patient Updation Addition failed');
                }
                
                redirect('User/a_patient');
            }
    }

    function editappointment($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getappInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editappointment", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editoldappointment()
    {
            
            $userId = $this->input->post('App_id');
            
            $this->load->library('form_validation');
            
             
            $this->form_validation->set_rules('App_id','Appointment ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Pat_name','Patient Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Age','Age','trim|required|max_length[3]|numeric');
            $this->form_validation->set_rules('Blood_Group','Blood Group','trim|required|max_length[128]');
            $this->form_validation->set_rules('Doc_id','Doctor ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('App_time','Appointment Time','trim|required|max_length[128]');
            $this->form_validation->set_rules('App_date','Appointment Date','trim|required|max_length[128]');
            $this->form_validation->set_rules('City','City','trim|required|max_length[128]');
            $this->form_validation->set_rules('Address','Address','trim|required|max_length[128]');
            $this->form_validation->set_rules('Contact_no','Contact No.','required|numeric|max_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addappoinment();
            }
            else
            {
                $Pat_id = $this->security->xss_clean($this->input->post('App_id'));
                $Pat_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Pat_name'))));
                $Age = $this->security->xss_clean($this->input->post('Age'));
                $B_G = ucwords(strtolower($this->security->xss_clean($this->input->post('Blood_Group'))));
                $Doc_id =$this->security->xss_clean($this->input->post('Doc_id'));
                $DI =$this->security->xss_clean($this->input->post('Dept_id'));
                $WI =$this->security->xss_clean($this->input->post('Ward_id'));
                $AD = $this->security->xss_clean($this->input->post('App_time'));
                $Ap = $this->security->xss_clean($this->input->post('App_date'));
                $City = ucwords(strtolower($this->security->xss_clean($this->input->post('City'))));
                $Address = ucwords(strtolower($this->security->xss_clean($this->input->post('Address'))));
                $Contact_no =$this->security->xss_clean($this->input->post('Contact_no'));

                
                $userInfo = array('App_id'=>$Pat_id, 'Pat_name'=>$Pat_name, 'Age'=>$Age, 'Blood_Group'=> $B_G,
                                    'Doc_id'=>$Doc_id,'App_time'=>$AD,'App_date'=>$Ap,'City'=>$City,
                                     'Address' => $Address, 'Contact_no'=> $Contact_no);
                
                $this->load->model('user_model');

                $result = $this->user_model->editapp($userInfo, $userId);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'Appointment Updation Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Appointment Updation Addition failed');
                }
                
                redirect('User/appointment');
            }
    }
    

    //Delete
  //Delete
    function deleteDoctor($userId = NULL)
    {
            //  $userId = $this->input->post('userId');
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteDoctor($userId);
          
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Doctor Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Doctor Deletion failed');
                }
                redirect('User/Doctors');
       
    }
    function deleteADriver($userId = NULL)
    {
            //  $userId = $this->input->post('userId');
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteADriver($userId);
          
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Ambulance Driver Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Ambulance Driver Deletion failed');
                }
                redirect('User/a_driver');
       
    }
     function deleteAssistant($userId = NULL)
    {
             //$userId = $this->input->post('userId');
             //echo ($userId);
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteAssistant($userId);
        #  echo($result);
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Assistant Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Assistant Deletion failed');
                }
                redirect('User/Assistant');
       
    }
    function deleteDept($userId = NULL)
    {
             //$userId = $this->input->post('userId');
             //echo ($userId);
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteDept($userId);
         # echo($result);
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Department Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Department Deletion failed');
                }
                redirect('User/Dept');
       
    }
        function deleteAppointment($userId = NULL)
    {
             //$userId = $this->input->post('userId');
             //echo ($userId);
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteAppointment($userId);
         # echo($result);
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Appointment Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Appointment Deletion failed');
                }
                redirect('User/appointment');
       
    }
     function deletePatient($userId = NULL)
    {
             //$userId = $this->input->post('userId');
             //echo ($userId);
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deletePatient($userId);
         # echo($result);
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Patient Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Patient Deletion failed');
                }
                redirect('User/patients');
       
    }
     function deleteAPatient($userId = NULL)
    {
             //$userId = $this->input->post('userId');
             //echo ($userId);
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteAPatient($userId);
         # echo($result);
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Admitted Patient Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Admitted Patient Deletion failed');
                }
                redirect('User/a_patient');
       
    }
    
      function deleteDPatient($userId = NULL)
    {
             //$userId = $this->input->post('userId');
             //echo ($userId);
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteDPatient($userId);
         # echo($result);
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Discharge Patient Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Discharge Patient Deletion failed');
                }
                redirect('User/d_patient');
       
    }
    
          function deleteTest($userId = NULL)
    {
             //$userId = $this->input->post('userId');
             //echo ($userId);
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteTest($userId);
         # echo($result);
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Test Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Test Deletion failed');
                }
                redirect('User/test');
       
    }
      function deleteNurse($userId = NULL)
    {
             //$userId = $this->input->post('userId');
             //echo ($userId);
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteNurse($userId);
         # echo($result);
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Nurse Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Nurse Deletion failed');
                }
                redirect('User/nurse');
       
    }
      function deleteWardboy($userId = NULL)
    {
             //$userId = $this->input->post('userId');
             //echo ($userId);
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteWardboy($userId);
         # echo($result);
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Ward Boy Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Ward Boy Deletion failed');
                }
                redirect('User/wardboy');
       
    }
     function deleteOffice($userId = NULL)
    {
             //$userId = $this->input->post('userId');
             //echo ($userId);
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteOffice($userId);
         # echo($result);
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Office Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Office Deletion failed');
                }
                redirect('User/office');
       
    }
     function deleteAmbulance($userId = NULL)
    {
             //$userId = $this->input->post('userId');
             //echo ($userId);
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteAmbulance($userId);
         # echo($result);
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Ambulance Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Ambulance Deletion failed');
                }
                redirect('User/ambulance');
       
    }
     function deleteMedicine($userId = NULL)
    {
             //$userId = $this->input->post('userId');
             //echo ($userId);
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteMedicine($userId);
         # echo($result);
            if($result == true)
                {
                    $this->session->set_flashdata('success',    'Medicine Deleted successfully' );
                }
                else
                {
                    $this->session->set_flashdata('error', 'Medicine Deletion failed');
                }
                redirect('User/medicine');
       
    }
     

    //PREVIOUS 
    function userListing()
    {       
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->userListingCount($searchText);

		//	$returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->userListing($searchText);
            
            $this->global['pageTitle'] = 'TeamInvento : User Listing';
            
            $this->loadViews("users", $this->global, $data, NULL);
        
    }

    function product()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->productListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->productListing($searchText);
            $data['show'] = false;
            $data['buttonName'] = 'Show';

            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("products", $this->global, $data, NULL);
       
    }


    function import()
    {
            
           // $searchText = $this->security->xss_clean($this->input->post('searchText'));
            //$data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
          //  $count = $this->user_model->productListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
           // $data['userRecords'] = $this->user_model->productListing($searchText);
            
            $this->global['pageTitle'] = 'TeamInvento : Import';
            
            $this->loadViews("import", NULL);
       
    }

    function brand()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->brandListingCount($searchText);

			//$returns = $this->paginationCompress ( "productListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->brandListing($searchText);
            
            $this->global['pageTitle'] = 'TeamInvento : Product Listing';
            
            $this->loadViews("brands", $this->global, $data, NULL);
       
    }

    function review()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->reviewListingCount($searchText);

			//$returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->reviewListing($searchText);
            
            $this->global['pageTitle'] = 'TeamInvento : Reviews';
            
            $this->loadViews("review", $this->global, $data, NULL);
       
    }

    function category()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->categoryListingCount($searchText);

			//$returns = $this->paginationCompress ( "category/", $count );
            
            $data['userRecords'] = $this->user_model->categoryListing($searchText);
            
            $this->global['pageTitle'] = 'Team Invento: Category';
            
            $this->loadViews("category", $this->global, $data, NULL);
       
    }

    function offer()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->offerListingCount($searchText);

			//$returns = $this->paginationCompress ( "category/", $count );
            
            $data['userRecords'] = $this->user_model->offerListing($searchText);
            
            $this->global['pageTitle'] = 'Team Invento: Category';
            
            $this->loadViews("offer", $this->global, $data, NULL);
       
    }

    function rating()
    {
            
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->ratingCount($searchText);

			//$returns = $this->paginationCompress ( "category/", $count );
            
            $data['userRecords'] = $this->user_model->rating($searchText);
            
            $this->global['pageTitle'] = 'Team Invento: Category';
            
            $this->loadViews("user_rating", $this->global, $data, NULL);
       
    }

    
    function refresh_rating(){
        $count = $this->user_model->productListingCount();
        $result = $this->user_model->refresh($count);

        $this->review();
    }

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
    
            $this->load->model('user_model');
            $data['category'] = $this->user_model->getUserRoles();
            $data['id'] = $this->user_model->getId();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addNew", $this->global, $data, NULL);
    }

    function addCustomer()
    {
    
            $this->load->model('user_model');
            $data['id'] = $this->user_model->getCustomerId();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addCustomer",$data, NULL);
    }

    function addBrand()
    {
    
            $this->load->model('user_model');
            $data['id'] = $this->user_model->getBrandId();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addBrand",$data, NULL);
    }

    function addOffer()
    {
    
            $this->load->model('user_model');
            $data['id'] = $this->user_model->getOfferId();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addOffer", $data,NULL);
    }

    function addCategory()
    {
    
            $this->load->model('user_model');
            $data['id'] = $this->user_model->getCategoryId();
            
           // $this->global['pageTitle'] = 'TeamInvento : Add New User';

            $this->loadViews("addCategory",$data, NULL);
    }


    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }
    
    /**
     * This function is used to add new user to the system
     */
    function addNewUser()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Product_id','Product ID','trim|max_length[128]');
            $this->form_validation->set_rules('Category_name','Category Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Brand_name','Brand Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Product_name','Product Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Product_website_link','Product Website Link','trim|required|max_length[128]');
            $this->form_validation->set_rules('Product_Image','Product Image','trim|required|max_length[128]');
          //  $this->form_validation->set_rules('password','Password','required|max_length[20]');
           // $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
           // $this->form_validation->set_rules('role','Role','trim|required|numeric');
           // $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $Product_id = ucwords(strtolower($this->security->xss_clean($this->input->post('Product_id'))));
                $Category_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Category_name'))));
                $Brand_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Brand_name'))));
                $Product_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Product_name'))));
                $Product_website_link = ucwords(strtolower($this->security->xss_clean($this->input->post('Product_website_link'))));
                $Product_description = strtolower($this->security->xss_clean($this->input->post('Product_description')));
                $Creation_Timestamp = date("Y-m-d  H:i:s",time());
                $Modification_Timestamp = $this->security->xss_clean($this->input->post('Modification_Timestamp'));
                $Product_Image = $this->security->xss_clean($this->input->post('Product_Image'));

                
                $userInfo = array('Product_id'=>$Product_id, 'Category_name'=>$Category_name, 'Brand_name'=>$Brand_name, 'Product_name'=> $Product_name,
                                    'Product_website_link'=>$Product_website_link, 'Product_description'=>$Product_description, 'Creation_Timestamp'=>date($Creation_Timestamp),
                                    'Modification_Timestamp'=>date($Modification_Timestamp), 'Product_Image' => $Product_Image);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewProduct($userInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Products Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Product addition failed');
                }
                
                redirect('addNew');
            }
        
    }

    function addNewBrand()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Brand_id','Brand ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Brand_Name','Brand Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Brand_Image','Brand Image','trim|max_length[128]');
            $this->form_validation->set_rules('Time_Stamp','TimeStamp','trim|max_length[128]');
            $this->form_validation->set_rules('Brand_info','Brand Info','trim|max_length[128]');
            $this->form_validation->set_rules('Brand_website','Brand Website Link','trim|max_length[128]');
            $this->form_validation->set_rules('Brand_Owner','Brand Owner','trim|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addBrand();
            }
            else
            {
                $Brand_id = ucwords(strtolower($this->security->xss_clean($this->input->post('Brand_id'))));
                $Brand_Name = ucwords(strtolower($this->security->xss_clean($this->input->post('Brand_Name'))));;
                $Time_Stamp = date("Y-m-d  H:i:s",time());
                $Brand_Image = $this->security->xss_clean($this->input->post('Brand_Image'));
                $Brand_info	 = ucwords(strtolower($this->security->xss_clean($this->input->post('Brand_info'))));
                $Brand_website = $this->security->xss_clean($this->input->post('Brand_website'));
                $Brand_Owner = $this->security->xss_clean($this->input->post('Brand_Owner'));
                $Top = $this->security->xss_clean($this->input->post('Top'));

                
                $userInfo = array('Brand_id'=>$Brand_id, 'Brand_Name'=>$Brand_Name,'Time_Stamp'=> date($Time_Stamp),
                                    'Brand_Image'=>$Brand_Image, 'Brand_info'=>$Brand_info,
                                    'Brand_website'=>$Brand_website, 'Brand_Owner' => $Brand_Owner, 'Top' => $Top);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewBrand($userInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Brands Data Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Brand addition failed');
                }
                
                redirect('User/addBrand');
            }
        
    }

    function addNewCategory()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Category_id','Category ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Category_name','Category Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Image_path','Image','trim|required|max_length[128]');
            //$this->form_validation->set_rules('Time_Stamp','TimeStamp','trim|max_length[128]');
           
            if($this->form_validation->run() == FALSE)
            {
                $this->addCategory();
            }
            else
            {
                $Category_id = ucwords(strtolower($this->security->xss_clean($this->input->post('Category_id'))));
                $Category_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Category_name'))));;
                $Time_Stamp = date("Y-m-d  H:i:s",time());
                $Image_path = $this->security->xss_clean($this->input->post('Image_path'));
                
                $userInfo = array('Category_id'=>$Category_id, 'Category_name'=>$Category_name,'Time_Stamp'=> date($Time_Stamp),
                                    'Image_path'=>$Image_path);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewCategory($userInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Category Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Category addition failed');
                }
                
                redirect('User/addCategory');
            }
        
    }

    function addNewOffer()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Offer_id','Offer_id','trim|required|max_length[128]');
            $this->form_validation->set_rules('Brand_Name','Brand_Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('start_date','Start_date','trim|required|max_length[128]');
            $this->form_validation->set_rules('end_date','End_date','trim|required|max_length[128]');
            $this->form_validation->set_rules('Offer_details','Offer_details','trim|required|max_length[128]');
            $this->form_validation->set_rules('Website_link','Website_link','trim|required|max_length[128]');

           
            if($this->form_validation->run() == FALSE)
            {
                $this->addOffer();
            }
            else
            {
                $Offer_id = $this->security->xss_clean($this->input->post('Offer_id'));
                $Brand_Name = ucwords(strtolower($this->security->xss_clean($this->input->post('Brand_Name'))));;
                $start_date = $this->security->xss_clean($this->input->post('start_date'));
                $end_date = $this->security->xss_clean($this->input->post('end_date'));
                $Offer_details = $this->security->xss_clean($this->input->post('Offer_details'));
                $Website_link = $this->security->xss_clean($this->input->post('Website_link'));

                
                $userInfo = array('Offer_id'=>$Offer_id, 'Brand_Name'=>$Brand_Name,'start_date'=> date($start_date),'end_date'=> date($end_date),
                                    'Offer_details'=>$Offer_details, 'Website_link' => $Website_link);
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewOffer($userInfo);
                
                if($result >= 0)
                {
                    $this->session->set_flashdata('success', 'New Offer Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Offer addition failed');
                }
                
                redirect('User/addOffer');
            }
        
    }

    function addNewCustomer()
    {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('Id','Customer Id','trim|required|max_length[128]');
            $this->form_validation->set_rules('Customer_email','Customer Email','trim|required|max_length[128]');
            $this->form_validation->set_rules('Session_count','Session count','trim|required|max_length[128]');
            $this->form_validation->set_rules('Account_status','Account status','trim|required|max_length[128]');

           
            if($this->form_validation->run() == FALSE)
            {
                $this->addCustomer();
            }
            else
            {
                $Id = $this->security->xss_clean($this->input->post('Id'));
                $Customer_email = strtolower($this->security->xss_clean($this->input->post('Customer_email')));;
                $Register_Timestamp = date("Y-m-d  H:i:s",time());
                $Last_login_Timestamp = $this->security->xss_clean($this->input->post('Last_login_Timestamp'));
                $Session_count = $this->security->xss_clean($this->input->post('Session_count'));
                $Account_status = $this->security->xss_clean($this->input->post('Account_status'));

                
                $userInfo = array('Id'=>$Id, 'Customer_email'=>$Customer_email,'Register_Timestamp'=> date($Register_Timestamp),
                                    'Last_login_Timestamp'=>date($Last_login_Timestamp), 'Session_count' => $Session_count, 'Account_status' => $Account_status );
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewCustomer($userInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Customer Added successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Customer addition failed');
                }
                
                redirect('User/addCustomer');
            }
        
    }

    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getUserInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editOld", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
       
            $this->load->library('form_validation');
            
            $userId = $this->input->post('Product_id');
            
            $this->form_validation->set_rules('Product_id','Product ID','trim|max_length[128]');
            $this->form_validation->set_rules('Category_name','Category Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Brand_name','Brand Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Product_name','Product Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Product_website_link','Product Website Link','trim|required|max_length[128]');
            $this->form_validation->set_rules('Product_Image','Product Image','trim|required|max_length[128]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($userId);
            }
            else
            {
                $Product_id = $this->security->xss_clean($this->input->post('Product_id'));
                $Category_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Category_name'))));
                $Brand_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Brand_name'))));
                $Product_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Product_name'))));
                $Product_website_link = ucwords(strtolower($this->security->xss_clean($this->input->post('Product_website_link'))));
                $Product_description = strtolower($this->security->xss_clean($this->input->post('Product_description')));
                $Creation_Timestamp =  $this->security->xss_clean($this->input->post('Creation_Timestamp'));
                $Modification_Timestamp = date('Y-m-d H:i:s');
                $Product_Image = $this->security->xss_clean($this->input->post('Product_Image'));
                $Average_Review	 = $this->security->xss_clean($this->input->post('Average_Review'));
                $No_of_Reviews = $this->security->xss_clean($this->input->post('No_of_Reviews'));
                
                $userInfo = array();
                
                $userInfo = array('Product_id'=>$Product_id, 'Category_name'=>$Category_name, 'Brand_name'=>$Brand_name, 'Product_name'=> $Product_name,
                'Product_website_link'=>$Product_website_link, 'Product_description'=>$Product_description, 'Creation_Timestamp'=>date($Creation_Timestamp),
                'Modification_Timestamp'=>date($Modification_Timestamp), 'Product_Image' => $Product_Image, 'Average_Review' => $Average_Review, 'No_of_Reviews' => $No_of_Reviews);

                
                
                $result = $this->user_model->editUser($userInfo, $Product_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Product updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Product updation failed');
                }
                
                redirect('User/product');
            }
    }

    function editOldBrand($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getBrandInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editOldBrand", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editBrand()
    {
       
            $this->load->library('form_validation');
            
            $userId = $this->input->post('Brand_id');
            $this->form_validation->set_rules('Brand_id','Brand ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Brand_Name','Brand Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Brand_Image','Brand Image','trim|max_length[128]');
            $this->form_validation->set_rules('Time_Stamp','TimeStamp','trim|max_length[128]');
            $this->form_validation->set_rules('Brand_info','Brand Info','trim|max_length[128]');
            $this->form_validation->set_rules('Brand_website','Brand Website Link','trim|required|max_length[128]');
            $this->form_validation->set_rules('Brand_Owner','Brand Owner','trim|max_length[128]');
            
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOldBrand($userId);
            }
            else
            {
                $Brand_id = ucwords(strtolower($this->security->xss_clean($this->input->post('Brand_id'))));
                $Brand_Name = ucwords(strtolower($this->security->xss_clean($this->input->post('Brand_Name'))));;
                $Time_Stamp = $this->security->xss_clean($this->input->post('Time_Stamp'));
                $Brand_Image = $this->security->xss_clean($this->input->post('Brand_Image'));
                $Brand_info	 = ucwords(strtolower($this->security->xss_clean($this->input->post('Brand_info'))));
                $Brand_website = $this->security->xss_clean($this->input->post('Brand_website'));
                $Brand_Owner = $this->security->xss_clean($this->input->post('Brand_Owner'));
                $Top = $this->security->xss_clean($this->input->post('Top'));

                
                $userInfo = array('Brand_id'=>$Brand_id, 'Brand_Name'=>$Brand_Name,'Time_Stamp'=> date($Time_Stamp),
                                    'Brand_Image'=>$Brand_Image, 'Brand_info'=>$Brand_info,
                                    'Brand_website'=>$Brand_website, 'Brand_Owner' => $Brand_Owner, 'Top' => $Top);
                
                
                $result = $this->user_model->editBrand($userInfo, $Brand_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Brand updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Brand updation failed');
                }
                
                redirect('User/brand');
            }
    }

    function editOldCustomer($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getCustomerInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editOldCustomer", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editCustomer()
    {
       
            $this->load->library('form_validation');
            
            $userId = $this->input->post('Id');
            $this->form_validation->set_rules('Id','Customer Id','trim|required|max_length[128]');
            $this->form_validation->set_rules('Customer_email','Customer Email','trim|required|max_length[128]');
            //$this->form_validation->set_rules('Register_Timestamp','Register Timestamp','trim|required|max_length[128]');
           // $this->form_validation->set_rules('Last_login_Timestamp','Last login Timestamp','trim|required|max_length[128]');
            $this->form_validation->set_rules('Session_count','Session count','trim|required|max_length[128]');
            $this->form_validation->set_rules('Account_status','Account status','trim|required|max_length[128]');

           
            if($this->form_validation->run() == FALSE)
            {
                $this->editOldCustomer($userId);
            }
            else
            {
                $Id = $this->security->xss_clean($this->input->post('Id'));
                $Customer_email = strtolower($this->security->xss_clean($this->input->post('Customer_email')));;
                $Register_Timestamp = $this->security->xss_clean($this->input->post('Register_Timestamp'));
                $Last_login_Timestamp = $this->security->xss_clean($this->input->post('Last_login_Timestamp'));
                $Session_count = $this->security->xss_clean($this->input->post('Session_count'));
                $Account_status = $this->security->xss_clean($this->input->post('Account_status'));

                
                $userInfo = array('Id'=>$Id, 'Customer_email'=>$Customer_email,'Register_Timestamp'=> date($Register_Timestamp),
                                    'Last_login_Timestamp'=>date($Last_login_Timestamp), 'Session_count' => $Session_count, 'Account_status' => $Account_status );
                
                $result = $this->user_model->editCustomer($userInfo, $Id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Customer updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Customer updation failed');
                }
                
                redirect('User/userListing');
            }
    } 



    
    function editOldCategory($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getCategoryInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editOldCategory", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editCategory()
    {
       
            $this->load->library('form_validation');
            
            $userId = $this->input->post('Category_id');
            $this->form_validation->set_rules('Category_id','Category ID','trim|required|max_length[128]');
            $this->form_validation->set_rules('Category_name','Category Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Image_path','Image','trim|required|max_length[128]');
            $this->form_validation->set_rules('Time_Stamp','TimeStamp','trim|required|max_length[128]');
           
            if($this->form_validation->run() == FALSE)
            {
                $this->editOldCategory($userId);
            }
            else
            {
                $Category_id = ucwords(strtolower($this->security->xss_clean($this->input->post('Category_id'))));
                $Category_name = ucwords(strtolower($this->security->xss_clean($this->input->post('Category_name'))));;
                $Time_Stamp = $this->security->xss_clean($this->input->post('Time_Stamp'));
                $Image_path = $this->security->xss_clean($this->input->post('Image_path'));
                
                $userInfo = array('Category_id'=>$Category_id, 'Category_name'=>$Category_name,'Time_Stamp'=> date($Time_Stamp),
                                    'Image_path'=>$Image_path);
                
                $result = $this->user_model->editCategory($userInfo, $Category_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Category updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Category updation failed');
                }
                
                redirect('User/category');
            }
    } 

    function editOldOffer($userId = NULL)
    {
            
          //  $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getOfferInfo($userId);
            
            $this->global['pageTitle'] = 'TeamInvento : Edit User';
            
            $this->loadViews("editOldOffer", $this->global, $data, NULL);
        
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editOffer()
    {
       
            $this->load->library('form_validation');
            
            $userID = $this->input->post('Offer_id');
            $this->form_validation->set_rules('Offer_id','Offer_id','trim|required|max_length[128]');
            $this->form_validation->set_rules('Brand_Name','Brand_Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('start_date','Start_date','trim|required|max_length[128]');
            $this->form_validation->set_rules('end_date','End_date','trim|required|max_length[128]');
            $this->form_validation->set_rules('Offer_details','Offer_details','trim|required|max_length[128]');
            $this->form_validation->set_rules('Website_link','Website_link','trim|required|max_length[128]');

           
            if($this->form_validation->run() == FALSE)
            {
                $this->editOldOffer($userID);
            }
            else
            {
                $Offer_id = $this->security->xss_clean($this->input->post('Offer_id'));
                $Brand_Name = ucwords(strtolower($this->security->xss_clean($this->input->post('Brand_Name'))));;
                $start_date = $this->security->xss_clean($this->input->post('start_date'));
                $end_date = $this->security->xss_clean($this->input->post('end_date'));
                $Offer_details = $this->security->xss_clean($this->input->post('Offer_details'));
                $Website_link = $this->security->xss_clean($this->input->post('Website_link'));

                
                $userInfo = array('Offer_id'=>$Offer_id, 'Brand_Name'=>$Brand_Name,'start_date'=> date($start_date),'end_date'=> date($end_date),
                                    'Offer_details'=>$Offer_details, 'Website_link' => $Website_link);
                
                
                $result = $this->user_model->editOffer($userInfo, $Offer_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Offer updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Offer updation failed');
                }
                
                redirect('User/Offer');
            }
    } 

    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser($userId = NULL)
    {
            //  $userId = $this->input->post('userId');
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteUser($userId);
            
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Product Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Product Deletion failed');
                }
                redirect('User/product');
       
    }

    function deleteCustomer($userId = NULL)
    {
            //  $userId = $this->input->post('userId');
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteCustomer($userId);
            
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Customer Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Customer Deletion failed');
                }
                redirect('User/userListing');
       
    }

    function deleteBrand($userId = NULL)
    {
            //  $userId = $this->input->post('userId');
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteBrand($userId);
            
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Brand Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Brand Deletion failed');
                }
                redirect('User/brand');
       
    }
    
    function deleteCategory($userId = NULL)
    {
            //  $userId = $this->input->post('userId');
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteCategory($userId);
            
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Category Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Category Deletion failed');
                }
                redirect('User/category');
       
    }

    function deleteOffer($userId = NULL)
    {
            //  $userId = $this->input->post('userId');
         //   $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteOffer($userId);
            
            if($result == true)
                {
                    $this->session->set_flashdata('success', 'Offer Deleted successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Offer Deletion failed');
                }
                redirect('User/offer');
       
    }
    /**
     * Page not found : error 404
     */
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'TeamInvento : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    /**
     * This function used to show login history
     * @param number $userId : This is user id
     */
    function loginHistoy($userId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $userId = ($userId == NULL ? 0 : $userId);

            $searchText = $this->input->post('searchText');
            $fromDate = $this->input->post('fromDate');
            $toDate = $this->input->post('toDate');

            $data["userInfo"] = $this->user_model->getUserInfoById($userId);

            $data['searchText'] = $searchText;
            $data['fromDate'] = $fromDate;
            $data['toDate'] = $toDate;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->loginHistoryCount($userId, $searchText, $fromDate, $toDate);

            $returns = $this->paginationCompress ( "login-history/".$userId."/", $count, 10, 3);

            $data['userRecords'] = $this->user_model->loginHistory($userId, $searchText, $fromDate, $toDate, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'TeamInvento : User Login History';
            
            $this->loadViews("loginHistory", $this->global, $data, NULL);
        }        
    }

    /**
     * This function is used to show users profile
     */
    function profile($userId = NULL)
    {
       $data['email'] = $this->session->userdata('email');
        $this->global['pageTitle'] = 'TeamInvento : Change Password';
        $this->loadViews("changePassword", $this->global,$data, NULL);
    }

    /**
     * This function is used to update the user details
     * @param text $active : This is flag to set the active tab
     */
    function profileUpdate($active = "details")
    {
        $this->load->library('form_validation');
    
            
        $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
        $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]|callback_emailExists');        
        
        if($this->form_validation->run() == FALSE)
        {
            $this->profile($active);
        }
        else
        {
            $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
            $mobile = $this->security->xss_clean($this->input->post('mobile'));
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            
            $userInfo = array('name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->editUser($userInfo, $this->vendorId);
            
            if($result == true)
            {
                $this->session->set_userdata('name', $name);
                $this->session->set_flashdata('success', 'Profile updated successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Profile updation failed');
            }

            redirect('profile/'.$active);
        }
    }

    /**
     * This function is used to change the password of the user
     * @param text $active : This is flag to set the active tab
     */
    function changePassword()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('Old_password','Old password','required|max_length[20]');
        $this->form_validation->set_rules('New_password1','New password','required|max_length[20]');
        $this->form_validation->set_rules('New_password2','Confirm new password','required|matches[New_password1]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->profile();
        }
        else
        {
            $oldPassword = $this->input->post('Old_password');
            $newPassword = $this->input->post('New_password1');
            $email = $this->session->userdata('email');

            $resultPas = $this->user_model->matchOldPassword($email, $oldPassword);
            
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password is not correct');
                redirect('profile/');
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword));
                
                $result = $this->user_model->changePassword($email, $usersData);
                
                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }
                
                redirect('profile/');
            }
        }
    }

    /**
     * This function is used to check whether email already exist or not
     * @param {string} $email : This is users email
     */
    function emailExists($email)
    {
        $userId = $this->vendorId;
        $return = false;

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ $return = true; }
        else {
            $this->form_validation->set_message('emailExists', 'The {field} already taken');
            $return = false;
        }

        return $return;
    }
}

?>
