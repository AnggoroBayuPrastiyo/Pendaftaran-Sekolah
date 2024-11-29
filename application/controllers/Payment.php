<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . '../vendor/midtrans-php-master/Midtrans.php';


class Payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Set up Midtrans configuration
        \Midtrans\Config::$serverKey = 'SB-Mid-server-843K5bTn9r_4PpcgDIQmu5XQ';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
    }

    public function index()
    {
        $data['title'] = 'Biaya Pendaftaran';
        $this->load->view('templates/header', $data);
        $this->load->view('user/payment', $data);
        $this->load->view('templates/footer');
    }

    public function token()
    {

        $email = $this->session->userdata('email');
        $name = $this->session->userdata('name');
        // Set up transaction details
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 2725000, // Total biaya pendaftaran
            ),
            'customer_details' => array(
                'first_name' => $name,
                'email' => $email,
            ),
        );

        // Generate Snap Token
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // Return the Snap Token as JSON
        echo json_encode($snapToken);
    }
}