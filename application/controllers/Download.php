<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Download extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('AdminM');
		$this->load->model('HomeM');
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
		$this->load->view('HeaderMetaTag/Download');
		$this->load->view('Home/Header',$data);
		$this->load->view('Download/Home');
		$this->load->view('Home/Footer');
	}

}
?>