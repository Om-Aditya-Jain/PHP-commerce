<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class About extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('AdminM');
		$this->load->model('HomeM');
	}

	public function Certifications()
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
		$this->load->view('HeaderMetaTag/About');
		$this->load->view('Home/Header', $data);
		$this->load->view('About/Certificate');
		$this->load->view('Home/Footer',$data);
	}
	public function Company()
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
		$this->load->view('HeaderMetaTag/About');
		$this->load->view('Home/Header', $data);
		$this->load->view('About/Company');
		$this->load->view('Home/Footer',$data);
	}

}
?>