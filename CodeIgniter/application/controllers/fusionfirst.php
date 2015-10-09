
<?php
class Fusionfirst extends CI_Controller {
 
   public function  __construct()
    {
        parent::__construct() ;
       $this->load->helper('url');
        $this->load->helper('FusionCharts_helper') ;
       // $this->load->library('javascript');
        
   }
  public function index() {
        
 
 
        $chart_type      = 'line' ;
        $chart_width        = 450 ;
        $chart_height           = 250 ;
 
        // Store Name of Products
        $arrData[0][1] = "Product A";
        $arrData[1][1] = "Product B";
        $arrData[2][1] = "Product C";

 
        //Store sales data
        $arrData[0][2] = 567500;
        $arrData[1][2] = 615300;
        $arrData[2][2] = 556800;

        //Initialize <chart> element
         $strXML = "<chart caption='Sales by Product' numberPrefix='$' formatNumberScale='0' theme='fint'>";
         //Convert data to XML and append
         foreach ($arrData as $arSubData)
         $strXML .= "<set label='" . $arSubData[1] . "' value='" . $arSubData[2] . "' />";
         //Close <chart> element
         $strXML .= "</chart>";
 
        $data['chart']  = renderChart($chart_type, '', $strXML, 'div' , $chart_width, $chart_height, false, false);
 
        $this->load->view('fusion_firstchart',$data) ;
         
 
       //    $data['chart']  = renderChart("column3d", "", $strXML, "myChart", 600, 300);
 
//        $this->load->view('fusion_v',$data) ;
    }
   
}

?>