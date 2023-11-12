<style>
    .center {
        margin-left: 250px;
        padding: 5rem;
    }

    .form_input {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #images {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        margin-top: 5rem;
        width: 100%;
    }

    #images td,
    #images th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #images tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #images tr:hover {
        background-color: #ddd;
    }

    #images th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: darkgrey;
        color: black;
    }

    .table-image {
        height: 50px;
    }

    .sno {
        width: 80px;
    }

    .action {
        width: 100px
    }

    .mb-3 {
        margin-bottom: 2rem;
    }

    .products-div {
        margin-top: 20rem;

        @media screen and (max-width:500px) {
            margin-top: 10rem;
        }
    }

    .products-text {
        padding: 2rem 2rem 20rem 2rem;
        padding-bottom: 20rem;
        background-color: white;
        text-align: center;
        border-radius: 15px;
    }

    .products-text h1 {
        font-size: 40px;

        @media screen and (max-width:1200px) {
            font-size: 32px;
        }
    }

    .products-text p {
        font-size: 18px;
        margin: auto;

        @media screen and (min-width:756px) {
            width: 600px;
        }
    }

    .products-cards {
        margin: auto;
        margin-top: -10rem;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        place-items: center;
        padding: 5rem;
        grid-row-gap: 15rem;
        max-width: 1200px;

        @media screen and (max-width:300px) {
            padding: 1rem;
        }
    }

    .products-card {
        background: transparent;
        border-radius: 15px;
        padding: 1rem;
        width: 250px;
        height: 400px;
        border: 8px solid #6F6868;
    }

    .products-card-upper {
        @media screen and (min-width:620px) {
            margin-top: -6rem;
        }
    }

    .products-card-img {
        width: 100%;
        border: 3px solid #6F6868;
        border-radius: 50%;
        height: 150px;
        width: 150px;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        margin-top: -9rem;
    }

    .products-card p {
        text-align: center;
        font-size: 22px;
        margin: auto;
        margin-top: 2rem;
        padding: 0;

        overflow: hidden;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        -webkit-line-clamp: 9;
    }

    .submit-button input {
        padding: 2px 0px;
        width: 90px;
        border: 0.5px solid;
        border-radius: 5px;
        background-color: white;
        color: #50AD55;
        font-size: 15px;
    }

    .submit-button-delete input {
        background-color: inherit;
        color: red;
        border: 0
    }
</style>
<div class="center">
    <h1>Featured Products</h1>
    <?php if (!empty($featured_products)) { ?>
        <div class="products-div">
            <div class="products-cards">
                <?php $i = 1;
                foreach ($featured_products as $product) { ?>
                    <?php if ($i % 2 == 1) { ?>
                        <div class="products-card">
                            <div class="products-card-img">
                                <img src="<?php echo base_url($product['product_image_url']); ?>" alt="featured product"
                                    style="height:100px;width:100px;object-fit: contain;">
                            </div>
                            <p>
                                <?php echo $product['description'] ?>
                            </p>
                        </div>
                    <?php } else { ?>
                        <div class="products-card products-card-upper">
                            <div class="products-card-img">
                                <img src="<?php echo base_url($product['product_image_url']); ?>" alt="products product image"
                                    style="height:100px;width:100px;object-fit: contain;">
                            </div>
                            <p>
                                <?php echo $product['description'] ?>
                            </p>
                        </div>
                    <?php } ?>
                    <?php $i++;
                } ?>

            </div>
        </div>
    <?php } ?>



    <form action="<?php echo base_url('/admin/submit_featured_product'); ?>" method="POST"
        enctype="multipart/form-data">
        <div class="mb-3">
            <label for="product-image" class="form-label">Image</label>
            <input type="file" name="product-image" id="image-input" required class="form-control">
        </div>
        <div class="mb-3">
        <label for="product-category" class="form-label">Description</label>
            <select name="product-category" required class="form-control">
                <option disabled value="" selected>Select category</option>
                <?php foreach ($product_category as $pc) { ?>
                    <option value="<?php echo $pc['id'] ?>">
                        <?php echo $pc['name'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" rows="5" cols="50" required class="form-control">Description (note:don't include semicolon(;)</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" value="Add" class="btn btn-primary" name="submit">Add</button>
        </div>
    </form>
    <table id="images">
        <tr>
            <th class="sno">S.No.</th>
            <th>preview</th>
            <th>Description</th>
            <th>Category</th>
            <th class="action">Action</th>
        </tr>
        <?php $i = 1;
        foreach ($featured_products as $fp): ?>
            <tr id="<?php echo $fp['product_image_url']; ?>">
                <td>
                    <?php echo $i ?>
                </td>
                <td><img class="table-image" src="<?php echo base_url($fp['product_image_url']); ?>"></td>
                <td>
                    <?php echo $fp['description'] ?>
                </td>
                <td>
                    <?php echo $fp['product_category'] ?>
                </td>
                <td>
                    <div class="submit-button-delete">
                        <form action="<?php echo base_url('admin/delete_featured_product/'); ?>" method="POST">
                            <input type="hidden" name="imageurl" value="<?php echo $fp['product_image_url'] ?>">
                            <input type="submit" value="Delete" name="submit">
                        </form>
                    </div>
                </td>
            </tr>
            <?php $i++; endforeach; ?>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>