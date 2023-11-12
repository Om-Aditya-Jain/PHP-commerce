<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('AdminM');
        $this->load->model('HomeM');
    }

    public function index()
    {
        $data['products'] = array();
        $filter = "";
        $sort = "";
        if (!empty($_GET)) {

            if (!empty($_GET['sort'])) {
                $data['sort'] = $_GET['sort'];
                $temp = explode('-', $_GET['sort']);
                if ($temp[0] == "name") {
                    $sort = "product_name " . $temp[1] . ", ";
                } else {
                    $sort = "timestamp " . $temp[1] . ", ";
                }
            }

            if (!empty($_GET['filter'])) {
                $data['filter_string'] = $_GET['filter'];
                $data['filter'] = explode(',', $_GET['filter']);
                $filter = "where product_category in (" . $_GET['filter'] . ")";
            }

            $data['products'] = $this->AdminM->get_filtered_sorted_products($filter, $sort);
        } else {
            $data['products'] = $this->AdminM->get_products();
        }

        for ($j = 0; $j < count($data['products']); $j++) {
            $desc = "";
            $data['products'][$j]['product_description'] = json_decode($data['products'][$j]['product_description'], true);

            $data['products'][$j]['header'] = json_decode($data['products'][$j]['table_header'], true);
            $data['products'][$j]['row'] = json_decode($data['products'][$j]['table_row'], true);
            $data['products'][$j]['product_description_brochre'] = $data['products'][$j]['product_description'];
            foreach ($data['products'][$j]['product_description'] as $pd) {
                $pd = str_replace('1005', '$', $pd);
                if ($pd[0] == "$") {
                    $desc = $desc . " " . substr($pd, 1);
                } else {
                    $desc = $desc . " " . $pd;
                }
                $desc = str_replace(';', ',', $desc);
                $desc = str_replace('|', '"', $desc);
                $desc = str_replace('^', "'", $desc);
                $desc = str_replace('1001', '+', $desc);
                $desc = str_replace('1002', '-', $desc);
                $desc = str_replace('1003', '*', $desc);
                $desc = str_replace('1004', '/', $desc);
                $desc = str_replace('1005', '$', $desc);
            }
            $pattern = '/#[a-fA-F0-9]{6}/';
            $cleanedString = preg_replace($pattern, '', $desc);
            $data['products'][$j]['product_description'] = $cleanedString;
        }
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
		$this->load->view('HeaderMetaTag/Product');
        $this->load->view('Home/Header', $data);
        $this->load->view('Product/Home', $data);
        $this->load->view('Home/Footer');
    }

    public function update_search()
    {
        
        if (isset($_POST['searched-product'])) {
            $_SESSION['searched-product'] = $_POST['searched-product'];
        }

        if (isset($_POST['product-id'])) {
            redirect('/product/product/' . $_POST['product-id']);
        }

        redirect('/product/search');
    }

    public function search()
    {
        $searched_value = "";
        if (isset($_SESSION['searched-product'])) {
            $searched_value = $_SESSION['searched-product'];
        }

        $data['products'] = array();
        $filter = "";
        $sort = "";
        if (!empty($_GET)) {

            if (!empty($_GET['sort'])) {
                $data['sort'] = $_GET['sort'];
                $temp = explode('-', $_GET['sort']);
                if ($temp[0] == "name") {
                    $sort = "product_name " . $temp[1] . ", ";
                } else {
                    $sort = "timestamp " . $temp[1] . ", ";
                }
            }

            if (!empty($_GET['filter'])) {
                $data['filter_string'] = $_GET['filter'];
                $data['filter'] = explode(',', $_GET['filter']);
                $filter = "AND product_category in (" . $_GET['filter'] . ")";
            }

            $data['products'] = $this->AdminM->get_searched_filtered_sorted_products($filter, $sort, $searched_value);
        } else {
            $data['products'] = $this->AdminM->get_searched_products($searched_value);
        }
        $k = 1;
        for ($j = 0; $j < count($data['products']); $j++) {
            $desc = "";
            $data['products'][$j]['product_description'] = json_decode($data['products'][$j]['product_description'], true);
            $data['products'][$j]['header'] = json_decode($data['products'][$j]['table_header'], true);
            $data['products'][$j]['row'] = json_decode($data['products'][$j]['table_row'], true);
            $data['products'][$j]['product_description_brochre'] = $data['products'][$j]['product_description'];
            foreach ($data['products'][$j]['product_description'] as $pd) {
                $pd = str_replace('1005', '$', $pd);
                if ($pd[0] == "$") {
                    $desc = $desc . " " . substr($pd, 1);
                } else {
                    $desc = $desc . " " . $pd;
                }

                $desc = str_replace(';', ',', $desc);
                $desc = str_replace('|', '"', $desc);
                $desc = str_replace('^', "'", $desc);
                $desc = str_replace('1001', '+', $desc);
                $desc = str_replace('1002', '-', $desc);
                $desc = str_replace('1003', '*', $desc);
                $desc = str_replace('1004', '/', $desc);
                $desc = str_replace('1005', '$', $desc);
            }
            $pattern = '/#[a-fA-F0-9]{6}/';
            $cleanedString = preg_replace($pattern, '', $desc);
            $data['products'][$j]['product_description'] = $cleanedString;
        }
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
		$this->load->view('HeaderMetaTag/Product');
        $this->load->view('Home/Header', $data);
        $this->load->view('Product/Home', $data);
        $this->load->view('Home/Footer');
    }
    public function search_query($searched_value)
    {

        $data['products'] = array();
        $filter = "";
        $sort = "";
        if (!empty($_GET)) {

            if (!empty($_GET['sort'])) {
                $data['sort'] = $_GET['sort'];
                $temp = explode('-', $_GET['sort']);
                if ($temp[0] == "name") {
                    $sort = "product_name " . $temp[1] . ", ";
                } else {
                    $sort = "timestamp " . $temp[1] . ", ";
                }
            }

            if (!empty($_GET['filter'])) {
                $data['filter_string'] = $_GET['filter'];
                $data['filter'] = explode(',', $_GET['filter']);
                $filter = "AND product_category in (" . $_GET['filter'] . ")";
            }

            $data['products'] = $this->AdminM->get_searched_filtered_sorted_products($filter, $sort, $searched_value);
        } else {
            $data['products'] = $this->AdminM->get_searched_products($searched_value);
        }
        $k = 1;
        for ($j = 0; $j < count($data['products']); $j++) {
            $desc = "";
            $data['products'][$j]['product_description'] = json_decode($data['products'][$j]['product_description'], true);
            $data['products'][$j]['header'] = json_decode($data['products'][$j]['table_header'], true);
            $data['products'][$j]['row'] = json_decode($data['products'][$j]['table_row'], true);
            $data['products'][$j]['product_description_brochre'] = $data['products'][$j]['product_description'];
            foreach ($data['products'][$j]['product_description'] as $pd) {
                $pd = str_replace('1005', '$', $pd);
                if ($pd[0] == "$") {
                    $desc = $desc . " " . substr($pd, 1);
                } else {
                    $desc = $desc . " " . $pd;
                }

                $desc = str_replace(';', ',', $desc);
                $desc = str_replace('|', '"', $desc);
                $desc = str_replace('^', "'", $desc);
                $desc = str_replace('1001', '+', $desc);
                $desc = str_replace('1002', '-', $desc);
                $desc = str_replace('1003', '*', $desc);
                $desc = str_replace('1004', '/', $desc);
                $desc = str_replace('1005', '$', $desc);
            }
            $pattern = '/#[a-fA-F0-9]{6}/';
            $cleanedString = preg_replace($pattern, '', $desc);
            $data['products'][$j]['product_description'] = $cleanedString;
        }
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
		$this->load->view('HeaderMetaTag/Product');
        $this->load->view('Home/Header', $data);
        $this->load->view('Product/Home', $data);
        $this->load->view('Home/Footer');
    }

    public function category($id)
    {
        redirect('/product?filter=' . $id);
        // $data['products'] = array();
        // $filter = "";
        // $sort = "";
        // if (!empty($_GET)) {

        //     if (!empty($_GET['sort'])) {
        //         $data['sort'] = $_GET['sort'];
        //         $temp = explode('-', $_GET['sort']);
        //         if ($temp[0] == "name") {
        //             $sort = "product_name " . $temp[1] . ", ";
        //         } else {
        //             $sort = "timestamp " . $temp[1] . ", ";
        //         }
        //     }

        //     if (!empty($_GET['filter'])) {
        //         $data['filter_string'] = $_GET['filter'];
        //         $data['filter'] = explode(',', $_GET['filter']);
        //         $filter = "AND product_category in (" . $_GET['filter'] . ")";
        //     }

        //     $data['products'] = $this->AdminM->get_filtered_sorted_products_by_category($filter, $sort, $id);
        // } else {
        //     $data['products'] = $this->AdminM->get_products_by_category($id);
        // }
        // for ($j = 0; $j < count($data['products']); $j++) {
        //     $desc = "";
        //     $data['products'][$j]['product_description'] = json_decode($data['products'][$j]['product_description'], true);
        //     $data['products'][$j]['header'] = json_decode($data['products'][$j]['table_header'], true);
        //     $data['products'][$j]['row'] = json_decode($data['products'][$j]['table_row'], true);
        //     $data['products'][$j]['product_description_brochre'] = $data['products'][$j]['product_description'];
        //     foreach ($data['products'][$j]['product_description'] as $pd) {
        //         $pd = str_replace('1005', '$', $pd);
        //         if ($pd[0] == "$") {
        //             $desc = $desc . " " . substr($pd, 1);
        //         } else {
        //             $desc = $desc . " " . $pd;
        //         }
        //         $desc = str_replace(';', ',', $desc);
        //         $desc = str_replace('|', '"', $desc);
        //         $desc = str_replace('^', "'", $desc);
        //         $desc = str_replace('1001', '+', $desc);
        //         $desc = str_replace('1002', '-', $desc);
        //         $desc = str_replace('1003', '*', $desc);
        //         $desc = str_replace('1004', '/', $desc);
        //         $desc = str_replace('1005', '$', $desc);
        //     }
        //     $pattern = '/#[a-fA-F0-9]{6}/';
        //     $cleanedString = preg_replace($pattern, '', $desc);
        //     $data['products'][$j]['product_description'] = $cleanedString;
        // }
        // $i = 0;
        // foreach ($data['products'] as $p) {
        //     $product_image = $this->AdminM->get_product_image($p['id']);
        //     if (!empty($product_image)) {
        //         $data['products'][$i]['product_image_url'] = $product_image[0]['product_image_url'];
        //     } else {
        //         $data['products'][$i]['product_image_url'] = "";
        //     }
        //     $i++;
        // }
        // $data['product_category'] = $this->AdminM->get_category();
        // $name = "";
        // foreach ($data['product_category'] as $pc) {
        //     if ($pc['id'] == $id) {
        //         $name = $pc['name'];
        //     }
        // }
        // $data['product_category_name'] = $name;
        // $this->load->view('Home/Header', $data);
        // $this->load->view('Product/Home', $data);
        // $this->load->view('Home/Footer');
    }

    public function product($product_id)
    {
        $data['product'] = $this->AdminM->get_product_details($product_id)[0];
        $product_images = $this->AdminM->get_product_images($product_id);
        $i = 0;
        foreach ($product_images as $p) {
            $data['product']['product_image_url'][$i] = $p['product_image_url'];
            $i++;
        }

        $data['header'] = json_decode($data['product']['table_header'], true);
        $data['row'] = json_decode($data['product']['table_row'], true);
        $data['product']['product_description'] = json_decode($data['product']['product_description'], true);
        $data2['product_category'] = $this->AdminM->get_category();
        $this->load->view('Home/Header', $data2);
        $this->load->view('Product/Product', $data);
        $this->load->view('Home/Footer');
    }
    public function send_enquiry()
    {
        $user = $_POST['user'];
        $name = $_POST['name'];
        $email = $_POST['Email'];
        $contact = $_POST['contact'];
        $requirments = $_POST['requirments'];
        $company = $_POST['company'];
        $address = $_POST['address'];
        $product_id = $_POST['product_id'];
        $result = $this->HomeM->insert_query(
            $name,
            $email,
            $contact,
            $requirments,
            $company,
            $address,
            $product_id,
            $user
        );

        // Return a response (success or error) to the client
        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Failed to send query']);
        }
    }

    public function download()
    {
        $this->load->view('Download/Download');
    }
}
?>