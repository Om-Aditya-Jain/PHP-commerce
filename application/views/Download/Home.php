<style>
    .center {
        width: 100%;
        background-color: lightgrey;
        padding-top: 90px;
        padding-bottom: 5rem;
        max-width: 1800px;
    }

    @media screen and (min-width:1800px) {
        body {
            display: flex;
            align-items: center;
            flex-direction: column;
            background-color: lightgrey;
        }
    }

    .heading {
        margin: 5rem;

        @media screen and (max-width:400px) {
            font-size: 45px;
            margin: 5rem 2rem;
        }
    }

    .download_rt {
        margin: 5rem;
        display: flex;
        background-color: #D9D9D9;
        border-radius: 15px;
        box-shadow: 1px 1px darkgray;
        margin-bottom: 15rem;
    }

    .download_left {
        margin-bottom: 15rem;
        margin-inline: 5rem;
        display: flex;
        background-color: #D9D9D9;
        border-radius: 15px;
        box-shadow: 1px 1px 1px 1px darkgray;
        flex-direction: row-reverse;
    }

    .download_file {
        width: 25%;
        border-radius: 15px;
        padding: 1rem;
        background-color: white;
        margin-top: -20;
        margin-bottom: -20;
        cursor: pointer;

        @media screen and (max-width:1300px) {
            width: 30%;
        }

    }

    .download_file_img_left {
        width: 100%;
        height: 300px;
        border-radius: 15px;
    }

    .download_file_img_rt {
        width: 100%;
        height: 300px;
        border-radius: 15px;
    }

    .download_file h3 {
        text-align: center;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    .download_text {
        width: 75%;
        margin: 5rem;

        @media screen and (max-width:1300px) {
            width: 70%;
        }
    }

    .download_text p {
        font-size: 20px;
        text-align: justify;

        @media screen and (max-width:1300px) {
            font-size: 18px;
        }
    }

    @media screen and (max-width:950px) {
        .download_file {
            width: 45%;
        }

        .download_text {
            width: 55%;
        }

        .download_file_img_left {
            height: 400px;
        }
    }

    @media screen and (max-width:900px) {
        .download_rt {
            flex-direction: column;
            align-items: center;
            padding-inline: 2rem;
        }

        .download_file {
            width: 100%;
        }

        .download_text {
            width: 100%;
        }

        .download_file_img_left {
            height: 300px;
        }
    }

    @media screen and (max-width:900px) {
        .download_left {
            flex-direction: column;
            align-items: center;
            padding-inline: 2rem;
        }

        .download_file {
            width: 100%;
        }

        .download_text {
            width: 100%;
        }

        .download_file_img_left {
            height: 300px;
        }
    }

    @media screen and (max-width:600px) {
        .download_left {
            margin: 2rem;
            margin-bottom: 15rem;
        }

        .download_rt {
            margin: 2rem;
            margin-bottom: 15rem;
        }
    }

    @media screen and (max-width:1300px) {
        .download_file {
            height: fit-content;
        }
    }

    @media screen and (min-width: 900px) and (max-width: 1200px) {
        .download_file {
            margin-right: 20px;
        }
    }

    @media screen and (min-width: 1300px) and (max-width: 1600px) {
        .download_file_img_rt {
            height: 350px;
        }
    }
</style>
<div class="center">
    <h1 class="heading">Downloads</h1>
    <div class="download_rt">
        <div class="download_file">
            <a class="certificate" href="<?php echo base_url('/assets/catalogue/catalogue.pdf') ?>"
                download="catalogue">
                <img class="download_file_img_left" src="<?php echo base_url('assets/catalogue/catalogue.png') ?>"
                    alt="catalogue">
                <h3>Catalogue</h3>
            </a>
        </div>
        <div class="download_text">
            <p>Welcome to Ajar's Download Page, where we offer you convenient access to essential resources. Here,
                you'll find two key downloads: our Product Catalog and Ajar Profile. Our Product Catalog is a
                comprehensive collection of our premium door hardware solutions, meticulously curated to cater to your
                specific requirements. It provides detailed product information, specifications, and imagery, enabling
                you to choose the perfect hardware for your projects. Download our catalog to explore the diversity and
                quality of Ajar's offerings.</p>
        </div>
    </div>
    <div class="download_left">
        <div class="download_file">
            <a class="certificate" href="<?php echo base_url('/assets/catalogue/profile.pdf') ?>" download="profile">
                <img class="download_file_img_rt" src="<?php echo base_url('assets/catalogue/profile.png') ?>"
                    alt="catalogue">
                <h3>Profile</h3>
            </a>
        </div>
        <div class="download_text">
            <p>In addition to our Product Catalog, we invite you to delve into the heart of Ajar with our Ajar Profile.
                This download offers insights into our company's history, values, and mission. You'll get to know the
                people behind our commitment to excellence and the principles that drive us to provide top-tier door
                hardware solutions in Dubai.<br /><br />

                We believe that informed customers make the best choices. Our Download Page is designed to empower you
                with the knowledge and resources you need to select the right door hardware and understand the company
                behind it. Should you require any additional information or assistance, please don't hesitate to reach
                out to us. Thank you for choosing Ajar as your trusted source for door hardware solutions and
                information in Dubai.</p>
        </div>
    </div>
</div>