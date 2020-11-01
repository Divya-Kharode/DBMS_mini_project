<?php
/**
 * Description of Export Controller
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Exports extends CI_Controller {
	// construct
    public function __construct() {
        parent::__construct();
		// load model
        $this->load->model('Export', 'export');
    }    
	 // export xlsx|xls file
    public function index() {
        $data['page'] = 'export-excel';
        $data['title'] = 'Export Excel data | TechArise';
        $data['mobiledata'] = $this->export->mobileList();
		// load view file for output
        $this->load->view('header');
        $this->load->view('exports/exports', $data);
        $this->load->view('footer');
    }
	// create xlsx
    public function createXLS() {
		// create file name
        $fileName = 'Category-'.time().'.xlsx';  
		// load excel library
        $this->load->library('excel');
        $mobiledata = $this->export->mobileList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Category_id');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Category_name');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Image_path');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Time_Stamp');
        // set Row
        $rowCount = 2;
        foreach ($mobiledata as $val) 
        {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $val['Category_id']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $val['Category_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $val['Image_path']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $val['Time_Stamp']);
            $rowCount++;
        }

        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save($fileName);
		// download file
        header("Content-Type: application/vnd.ms-excel");
         redirect(site_url().$fileName);         
         redirect("User/category");       
    }

    
    
    public function product_createXLS() {
		// create file name
        $fileName = 'Product-'.time().'.xlsx';  
		// load excel library
        $this->load->library('excel');
        $mobiledata = $this->export->productList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Product_id');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Category_name');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Brand_name');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Product_name');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Product_description');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Product_website_link');
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Creation_Timestamp');
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Modification_Timestamp');
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Product_Image');
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'Average_Review');
        $objPHPExcel->getActiveSheet()->SetCellValue('K1', 'No_of_Reviews');



        // set Row
        $rowCount = 2;
        foreach ($mobiledata as $val) 
        {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $val['Product_id']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $val['Category_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $val['Brand_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $val['Product_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $val['Product_description']);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $val['Product_website_link']);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $val['Creation_Timestamp']);
            $objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $val['Modification_Timestamp']);
            $objPHPExcel->getActiveSheet()->SetCellValue('I' . $rowCount, $val['Product_Image']);
            $objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $val['Average_Review']);
            $objPHPExcel->getActiveSheet()->SetCellValue('K' . $rowCount, $val['No_of_Reviews']);
            $rowCount++;
        }

        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save($fileName);
		// download file
        header("Content-Type: application/vnd.ms-excel");
         redirect(site_url().$fileName);         
         redirect("User/product");       
    }

    public function brand_createXLS() {
		// create file name
        $fileName = 'Brands-'.time().'.xlsx';  
		// load excel library
        $this->load->library('excel');
        $mobiledata = $this->export->brandList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Brand_id');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Brand_Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Brand_Image');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Time_Stamp');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Brand_info');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Brand_website');
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Brand_Owner');
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Top');
    
        // set Row
        $rowCount = 2;
        foreach ($mobiledata as $val) 
        {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $val['Brand_id']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $val['Brand_Name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $val['Brand_Image']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $val['Time_Stamp']);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $val['Brand_info']);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $val['Brand_website']);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $val['Brand_Owner']);
            $objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $val['Top']);
            $rowCount++;
        }

        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save($fileName);
		// download file
        header("Content-Type: application/vnd.ms-excel");
         redirect(site_url().$fileName);         
         redirect("User/brand");       
    }

    public function offer_createXLS() {
		// create file name
        $fileName = 'Offers-'.time().'.xlsx';  
		// load excel library
        $this->load->library('excel');
        $mobiledata = $this->export->offerList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Offer_id');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Brand_Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'start_date');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'end_date');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Offer_details');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Website_link');
        // set Row
        $rowCount = 2;
        foreach ($mobiledata as $val) 
        {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $val['Offer_id']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $val['Brand_Name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $val['start_date']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $val['end_date']);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $val['Offer_details']);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $val['Website_link']);
            $rowCount++;
        }

        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save($fileName);
		// download file
        header("Content-Type: application/vnd.ms-excel");
         redirect(site_url().$fileName);         
         redirect("User/brand");       
    }
}
?>