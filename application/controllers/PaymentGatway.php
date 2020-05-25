<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentGatway extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->load->model('User_model');
        $this->checklogin = $this->session->userdata('logged_in');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function testApi() {
        $data = array();
        $amt = "10.00";
        $mid = "852202005040001";
        $marchentref = date("YmdHisa");
        $secret_code = "f8ad907d5f24aecb1322b3ac5447c9ee0cf02ede";
        $urlset = "merch_ref_no=$marchentref&mid=$mid&payment_type=ALIPAY&service=SALE&trans_amount=$amt";
        $hsakeystr = $secret_code . $urlset;
        $seckey = hash("sha256", $hsakeystr);
        $ganarateurl = "&return_url=http://www.woodlandshk.com/paymentresult&goods_subject=mobile phone&app_pay=WEB&goods_body=goods_body&api_version=2.8&lang=en&reuse=Y&active_time=300";
        $ganarateurl = $urlset . $ganarateurl . "&signature=$seckey";
        echo $endurl = "http://118.140.3.194:8081/eopg_testing_env/ForexTradeRecetion.jsp?" . $ganarateurl;
//        $this->load->view('pages/paymentpage', $data);
    }
    
    public function paymentResult(){
        print_r($_GET);
        print_r($_POST);
    }

}
