<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('HomeM');
        $this->load->model('AdminM');
	}

	public function index()
	{
        $data['products'] = $this->AdminM->get_products();

		$i = 0;
		foreach ($data['products'] as $p) {
			$product_image = $this->AdminM->get_product_image($p['id']);
			if (!empty($product_image)) {
				$data['products'][$i]['product_image_url'] = $product_image[0]['product_image_url'];
			} else {
				$data['products'][$i]['product_image_url'] = "";
			}
			$i++;
		}   
		$data['product_category'] = $this->AdminM->get_category();
		$this->load->view('HeaderMetaTag/Contact');
		$this->load->view('Home/Header',$data);
		$this->load->view('Contact/Home');
		$this->load->view('Home/Footer',$data);
	}
	public function submit_message()
    {
        print_r($_POST);
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $message = $_POST['message'];
            $result = $this->HomeM->insert_message($name, $email, $contact, $message);
        }

        redirect(base_url('/admin/slider'));
    }
}
?>