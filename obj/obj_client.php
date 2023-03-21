<?php 

  class client {
    public $client_name;
    public $client_info;

    public function __construct(){
      $param = $_GET['name'];
      if ($param == 'field') {
        $ret['member'] = '15';
        $ret['outsource'] = '10';
        $ret['address'] = 'tokyo shinjyuku kamiochiai';
        $ret['sales'] = '500,000,000';
        $ret['industry'] = 'IT';

      } elseif ($param == 'sevengarden') {
        $ret['member'] = '8';
        $ret['outsource'] = '15';
        $ret['address'] = 'tokyo kyobashi';
        $ret['sales'] = '400,000,000';
        $ret['industry'] = 'realestate';
    
      } elseif ($param == 'fairyjump') {
        $ret['member'] = '1';
        $ret['outsource'] = '8';
        $ret['address'] = 'tokyo nakano';
        $ret['sales'] = '3,000,000';
        $ret['industry'] = 'marketing';
    
      } else {
        $ret['member'] = 'nodata';
        $ret['outsource'] = 'nodata';
        $ret['address'] = 'nodata';
        $ret['sales'] = 'nodata';
        $ret['industry'] = 'nodata';
    
      }   
      $this->client_name = $param;
      $this->client_info = $ret;
    
    }
    public function get_client_name() {
      return $this->client_name;
    }
    public function get_client_member() {
      return $this->client_info['member'];
    } 
    public function get_client_outsource(){
      return $this->client_info['outsource'];
    }
    public function get_client_address(){
      return $this->client_info['address'];
    }
    public function get_client_sales(){
      return $this->client_info['sales'];
    }
    public function get_client_industry(){
      return $this->client_info['industry'];
    }

    public function get_client_information() {
      return $this->get_client_name().'は、従業員が'.
        $this->get_client_member().'で、外注が'.
        $this->get_client_outsource().'で、住所が'.
        $this->get_client_address().'で、売り上げが'.
        $this->get_client_sales().'で、業界が'.
        $this->get_client_industry().'です'; 
    }

}


?>
