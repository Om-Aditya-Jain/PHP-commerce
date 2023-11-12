<?php
$this->load->model('HomeM');
$products = $this->HomeM->get_products();
$i = 0;
foreach ($products as $p) {
    $product_image = $this->HomeM->get_product_image($p['id']);
    if (!empty($product_image)) {
        $products[$i]['product_image_url'] = $product_image[0]['product_image_url'];
    } else {
        $products[$i]['product_image_url'] = "assets/no-image.png";
    }
    $i++;
}
?>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="icon" href="<?= base_url() ?>assets/fav-ajar-logo.png" type="image/gif">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Admin</title>

<style>
    .admin-sidebar {
        position: fixed;
        min-height: 100vh;
        max-width: 270px;
        top: 0;
        left: 0;
        border-right: 2px solid rgba(0, 0, 0, 0.2);
        z-index: 10;
        background-color: #EAEAEA;
    }

    .admin-sidebar-logo {
        display: flex;
        justify-content: center;
        margin: auto;
        margin: 2rem 0rem 5rem 0rem;
    }

    .admin-sidebar-logo img {
        width: 60%;
        object-fit: contain;
    }

    .admin-sidebar-menu {
        display: flex;
        flex-direction: column;
        padding: 0rem 4rem;
        gap: 2rem;
    }

    .admin-sidebar-menu a {
        font-size: 18px;
        color: rgba(0, 0, 0, 0.6);
        font-weight: 500;
        text-decoration: none;
    }

    .admin-sidebar-menu a:hover {
        text-decoration: none;
    }

    .admin-sidebar-menu i {
        margin-right: 10px;
    }

    .fa-gift {
        font-size: 22px;
    }
</style>

<div class="admin-header">
    <div class="admin-sidebar">
        <div class="admin-sidebar-logo">
            <img src="<?php echo base_url('/assets/ajar-logo.png'); ?>" alt="brand logo">
        </div>
        <div class="admin-sidebar-menu">
            <a href=<?php echo base_url('admin/slider') ?>><i class="fa fa-image"></i> Slider</a>
            <a href=<?php echo base_url('admin/home') ?>><i class="fa fa-gift"></i> Products</a>
            <a href=<?php echo base_url('admin/enquiry') ?>><i class="fa fa-envelope"></i> Enquiries</a>
            <a href=<?php echo base_url('admin/messages') ?>><i class="fa fa-comments"></i> Messages</a>
            <a href=<?php echo base_url('admin/featuredProject') ?>><i class="fa fa-tags"></i>Featured Project</a>
            <a href=<?php echo base_url('admin/featuredProduct') ?>><i class="fa fa-gift"></i>Featured Products</a>
            <a href=<?php echo base_url('admin/logout') ?>><i class="fa fa-sign-out"></i>Logout</a>
        </div>
    </div>
</div>