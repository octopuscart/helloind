<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $product_home_slider_bottom = $this->Product_model->product_home_slider_bottom();
        $categories = $this->Product_model->productListCategories(0);
        $data["categories"] = $categories;
        $data["product_home_slider_bottom"] = $product_home_slider_bottom;
        $customarray = [1, 2];
        $this->db->where_in('id', $customarray);
        $query = $this->db->get('custome_items');
        $customeitem = $query->result();

        $data['shirtcustome'] = $customeitem[0];
        $data['suitcustome'] = $customeitem[1];

        $query = $this->db->get('sliders');
        $data['sliders'] = $query->result();

        $this->load->view('home', $data);
    }

    public function contactus() {
        if (isset($_POST['sendmessage'])) {
            $web_enquiry = array(
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'datetime' => date("Y-m-d H:i:s a"),
            );

            $this->db->insert('web_enquiry', $web_enquiry);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('last_name') . " " . $this->input->post('first_name');
            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from($this->input->post('email'), $sendername);
                $this->email->to(email_bcc);
                $this->email->bcc($this->input->post('email'));
                $subjectt = $this->input->post('subject');
                $orderlog = array(
                    'log_type' => 'Enquiry',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'ENQ',
                    'log_detail' => "Enquiry from website - " . $this->input->post('subject')
                );
                $this->db->insert('system_log', $orderlog);

                $subject = "Enquiry from website - " . $this->input->post('subject');
                $this->email->subject($subject);

                $web_enquiry['web_enquiry'] = $web_enquiry;



                $htmlsmessage = $this->load->view('Email/web_enquiry', $web_enquiry, true);

                if ($this->input->post('email')) {
                    $this->email->message($htmlsmessage);

//                    $this->email->print_debugger();
//                    $send = $this->email->send();
//                    if ($send) {
//                        echo json_encode("send");
//                    } else {
//                        $error = $this->email->print_debugger(array('headers'));
//                        echo json_encode($error);
//                    }
                } else {
                    echo $htmlsmessage;
                }
            }

            redirect('Shop/contactus');
        }
        $this->load->view('pages/contactus');
    }

    public function cake() {
        redirect(site_url("/"));
        if (isset($_POST['booknow'])) {
            $web_enquiry = array(
                'cake_shape' => $this->input->post('cake_shape'),
                'cake_flavour' => $this->input->post('cake_flavour'),
                "cake_color"=>"Single Color",
                "cake_price"=> $this->input->post('cake_price'),
                'contact' => $this->input->post('contact'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'message' => $this->input->post('message'),
                'pickup_date' => $this->input->post('select_date'),
                'booking_datetime' => date("Y-m-d H:i:s a"),
            );

            // $this->db->insert('cake_booking', $web_enquiry);
            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('name');
            if ($this->input->post('email_checkcostco')) {
                $this->email->set_newline("\r\n");
                $this->email->from($emailsender, $sendername);
                $this->email->to(email_bcc);
                $this->email->bcc($this->input->post('email'));
                $subjectt = $this->input->post('subject');
                $orderlog = array(
                    'log_type' => 'Cake Booking',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'ENQ',
                    'log_detail' => "Cake Booking - "
                );
                $this->db->insert('system_log', $orderlog);

                $subject = "Thank you for booking cake.";
                $this->email->subject($subject);

                $web_enquiry['web_enquiry'] = $web_enquiry;



                $htmlsmessage = $this->load->view('Email/cakebooking', $web_enquiry, true);
                if (REPORT_MODE == 1) {
                    if ($this->input->post('email')) {
                        $this->email->message($htmlsmessage);

                        $this->email->print_debugger();
                        // $send = $this->email->send();
                        // if ($send) {
                        //     //echo json_encode("send");
                        // } else {
                        //     $error = $this->email->print_debugger(array('headers'));
                        //   //  echo json_encode($error);
                        // }
                    } else {
                        echo $htmlsmessage;
                    }
                } else {
                    echo $htmlsmessage;
                }
            }

            redirect('Shop/cake');
        }
        $this->load->view('pages/cake');
    }

    public function aboutus() {
        $this->load->view('pages/aboutus');
    }

    public function error404() {
        $this->load->view('pages/error404');
    }

    public function faq() {
        // $this->load->view('pages/faq');
    }

    public function wall() {
        $this->load->view('pages/wall');
    }

    public function annual_charity() {
        $this->load->view('pages/annual_charity');
    }

    public function booknow() {
        redirect("https://book.bistrochat.com/helloindia");
        $cdate = date("Y-m-d");
        $this->db->where('select_date >=', $cdate);
        $this->db->order_by("select_date");
        $query = $this->db->get('booking_date_block');
        $listofdatetemp = $query->result_array();
        $listofdate = array();
        foreach ($listofdatetemp as $key => $value) {
            array_push($listofdate, $value['select_date']);
        }
        
        $data['datelist'] = $listofdate;
        
        if (isset($_POST['booknow'])) {
            $booking_order = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'select_date' => $this->input->post('select_date'),
                'select_time' => $this->input->post('select_time'),
                'people' => $this->input->post('people'),
                'datetime' => date("Y-m-d H:i:s a"),
                'order_source' => 'Website',
                'extra_remark' => '',
                'booking_type' => '',
                'select_table' => '',
            );
            $this->db->insert('booking_order', $booking_order);
            $last_id = $this->db->insert_id();
            $oderid = $last_id;
            $ordertype = "Website";
            $orderlog = array(
                'log_type' => "Reservation Received",
                'log_datetime' => date('Y-m-d H:i:s'),
                'user_id' => "",
                'order_id' => $last_id,
                'log_detail' => "Booking No. #$last_id  $ordertype From Website",
            );
            $this->db->insert('system_log', $orderlog);
            //email sending
            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;

            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = "Thank you for your booking.";
                $subject = $subjectt;
                $this->email->subject($subject);
                $appointment['appointment'] = $booking_order;
                $appointment['orderid'] = $oderid;
                $htmlsmessage = $this->load->view('Email/weborder', $appointment, true);
                if (REPORT_MODE == 1) {

                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        redirect("book-now");
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        redirect("book-now");
                    }
                } else {
                    echo $htmlsmessage;
                }
            }
//            redirect("book-now");
        }
        $this->load->view('pages/booknow', $data );
    }
    
    
       public function booking_edit($booking_id) {


        $cdate = date("Y-m-d");
        $this->db->where('select_date >=', $cdate);
        $this->db->order_by("select_date");
        $query = $this->db->get('booking_date_block');
        $listofdatetemp = $query->result_array();
        $listofdate = array();
        foreach ($listofdatetemp as $key => $value) {
            array_push($listofdate, $value['select_date']);
            $disabledates[$value['select_date']] = $value['select_date'];
        }

        $data['datelist'] = $listofdate;


        $bookingemail = $this->input->get("email");
//        $this->db->select("select_date, select_time, people");
        $this->db->where("email", $bookingemail);
        $this->db->where("id", $booking_id);
        $this->db->where("status!=", "cancelled");
        $bquery = $this->db->get("booking_order");
        $bookingquery = $bquery->row_array();
        if ($bookingquery) {
            
        } else {
               redirect("book-now");
        }



        $data["bookingdata"] = $bookingquery;


        if (isset($_POST['booknow'])) {
            $booking_order = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'select_date' => $this->input->post('select_date'),
                'select_time' => $this->input->post('select_time'),
                'people' => $this->input->post('people'),
                'datetime' => date("Y-m-d H:i:s a"),
                'order_source' => 'Website',
                'extra_remark' => $this->input->post('extra_remark'),
                'booking_type' => '',
                'select_table' => '',
                "status" => "udpate",
            );
            $this->db->where("id", $booking_id);
            $this->db->set($booking_order);
            $this->db->update('booking_order');
            $booking_order["reason"] = "Your booking has been modified by you, here you can see your booking details";
            $last_id = $booking_id;
            $oderid = $last_id;
            $ordertype = "Website";
            $orderlog = array(
                'log_type' => "Reservation modified",
                'log_datetime' => date('Y-m-d H:i:s'),
                'user_id' => "",
                'order_id' => $last_id,
                'log_detail' => "Booking No. #$last_id  $ordertype, has been modified by customer",
            );
            $this->db->insert('system_log', $orderlog);
            //email sending
            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;

            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = "Your booking has been modified";
                $subject = $subjectt;
                $this->email->subject($subject);
                $appointment['appointment'] = $booking_order;
                $appointment['orderid'] = $oderid;
                $htmlsmessage = $this->load->view('Email/weborderupdate', $appointment, true);
                if (REPORT_MODE == 1) {

                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        redirect("book-now");
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        redirect("book-now");
                    }
                } else {
                    echo $htmlsmessage;
                }
            }
          //  redirect("book-now");
        }
        if (isset($_POST['cancel'])) {
            $booking_order = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'select_date' => $this->input->post('select_date'),
                'select_time' => $this->input->post('select_time'),
                'people' => $this->input->post('people'),
                'datetime' => date("Y-m-d H:i:s a"),
                'order_source' => 'Website',
                'extra_remark' => $this->input->post('extra_remark'),
                'booking_type' => '',
                'select_table' => '',
                "status" => "cancelled",
            );
            $this->db->where("id", $booking_id);
            $this->db->set($booking_order);
            $this->db->update('booking_order');
            $booking_order["reason"] = "Your booking has been cancelled by you, here you can see your booking details";

            $oderid = $booking_id;
            $ordertype = "Website";
            $orderlog = array(
                'log_type' => "Reservation Cancelled",
                'log_datetime' => date('Y-m-d H:i:s'),
                'user_id' => "",
                'order_id' => $booking_id,
                'log_detail' => "Booking No. #$booking_id  $ordertype has been Cancelled.",
            );
            $this->db->insert('system_log', $orderlog);
            //email sending
            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;

            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = "Your booking has been cancelled";
                $subject = $subjectt;
                $this->email->subject($subject);
                $appointment['appointment'] = $booking_order;
                $appointment['orderid'] = $oderid;
                $htmlsmessage = $this->load->view('Email/weborderupdate', $appointment, true);
                if (REPORT_MODE == 1) {

                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        redirect("book-now");
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        redirect("book-now");
                    }
                } else {
                    echo $htmlsmessage;
                }
            }
          //  redirect("book-now");
        }
        $this->load->view('pages/bookedit', $data);
    }

    public function blog($pageno = 0) {
        $this->load->view('pages/blog');
    }

    function loyalprogram() {
        $this->load->view('pages/loyalprogram');
    }

    function privacy_policy() {
        $this->load->view('pages/pp');
    }

    function gallery() {
        $this->load->view('pages/gallery');
    }

    function charityIfram() {
        $this->load->view('pages/charityIfram');
    }

    function menu($menuitem = 'starters') {
        $data['activemenu'] = $menuitem;
        $this->load->view('pages/menu', $data);
    }

    function ordernow() {
        
    }

}
