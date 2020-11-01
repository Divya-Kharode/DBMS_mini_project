<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Import extends CI_Controller
{

public function __construct() {
        parent::__construct();
                $this->load->library('excel');//load PHPExcel library 
		//$this->load->model('upload_model');//To Upload file in a directory
                $this->load->model('Import_model', 'import');
}	
	
public	function ExcelDataAdd()	{  
//Path of files were you want to upload on localhost (C:/xampp/htdocs/ProjectName/uploads/excel/)	 
         $configUpload['upload_path'] = FCPATH;
         $configUpload['allowed_types'] = 'xls|xlsx|csv';
         $configUpload['max_size'] = '5000';
         $this->load->library('upload', $configUpload);
         $this->upload->do_upload('userfile');	
         $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
         $file_name = $upload_data['file_name']; //uploded file name
		 $extension=$upload_data['file_ext'];    // uploded file extension
		
//$objReader =PHPExcel_IOFactory::createReader('Excel5');     //For excel 2003 
    $objReader= PHPExcel_IOFactory::createReader('Excel2007');	// For excel 2007 	  
          //Set to read only
          $objReader->setReadDataOnly(true); 		  
        //Load excel file
		 $objPHPExcel=$objReader->load(FCPATH.$file_name);		 
         $totalrows=$objPHPExcel->setActiveSheetIndex(0)->getHighestRow();   //Count Numbe of rows avalable in excel      	 
         $objWorksheet=$objPHPExcel->setActiveSheetIndex(0);   
         
        $CN = $objWorksheet -> getCellByColumnAndRow(0, 1) -> getValue();
        $BN = $objWorksheet -> getCellByColumnAndRow(1, 1) -> getValue();
        $PN = $objWorksheet -> getCellByColumnAndRow(2, 1) -> getValue();
        $PD = $objWorksheet -> getCellByColumnAndRow(3, 1) -> getValue();
        $WL = $objWorksheet -> getCellByColumnAndRow(4, 1) -> getValue();
        $PI= $objWorksheet -> getCellByColumnAndRow(5, 1) -> getValue();

        if($CN == "Category_name" && $BN == "Brand_name" && $PN == "Product_name" && $PD == "Product_description" && $WL == "Product_website_link" && $PI == "Product_Image" ) {
         
          //loop from first data untill last data
          for($i=2;$i<=$totalrows;$i++)
          {
            //  $FirstName= $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();			
                   // $Product_id = $objWorksheet -> getCellByColumnAndRow(0, $i) -> getValue();
                    $Category_name = $objWorksheet -> getCellByColumnAndRow(0, $i) -> getValue();
                    $Brand_name = $objWorksheet -> getCellByColumnAndRow(1, $i) -> getValue();
                    $Product_name = $objWorksheet -> getCellByColumnAndRow(2, $i) -> getValue();
                    $Product_description = $objWorksheet -> getCellByColumnAndRow(3, $i) -> getValue();
                    $Product_website_link = $objWorksheet -> getCellByColumnAndRow(4, $i) -> getValue();
                    $Product_Image = $objWorksheet -> getCellByColumnAndRow(5, $i) -> getValue();
                   // $Average_Review = $objWorksheet -> getCellByColumnAndRow(8, $i) -> getValue();
                    //$No_of_Reviews = $objWorksheet -> getCellByColumnAndRow(9, $i) -> getValue();
			  $data_user=array(
                
                'Category_name' => $Category_name,
                'Brand_name' => $Brand_name,
                'Product_name' => $Product_name,
                'Product_description' => $Product_description,
                'Product_website_link' => $Product_website_link,
                'Creation_Timestamp' => date("Y-m-d  H:i:s",time()),
				'Modification_Timestamp' => NULL,
                'Product_Image' => $Product_Image,
                
            );
			  $this->import->importData($data_user);
              
						  
          }
             unlink('./'.$file_name); //File Deleted After uploading in database .
             $this->session->set_flashdata('success', 'Imported Successfully');

             redirect('User/product');
        }
        else {
                $this->session->set_flashdata('error', 'Format Mismatched. See Example Format');
                redirect('User/product');
        }        
       
     }
        
                
}
?>