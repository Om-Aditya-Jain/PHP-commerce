<style>
    .footer {

        width: 100%;
        background-color: white;

        @media screen and (min-width:551px) {
            height: 300px;
        }
    }

    .upper {

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 2.5rem;

        @media screen and (min-width:551px) {
            height: 260px;
            flex-direction: row;
        }
    }

    .first {
        height: 100%;
        width: 250px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-right: 2px solid lightgrey;

        @media screen and (max-width:550px) {
            width: 100%;
            align-items: flex-start;
            padding-left: 1.5rem;
            border-right: none;
            border-bottom: 2px solid lightgrey;
            padding-bottom: 1.5rem;
        }
    }

    #first-logo {
        height: 40%;
        margin-bottom: 3rem;

        @media screen and (max-width:550px) {
            height: 100px;
            margin-bottom: 2rem;
        }
    }

    .first-input i {
        position: absolute;
        padding: 5px;
        margin-left: -40px;
        font-size: 22px;
        cursor: pointer;
    }

    .newsletter-input {
        border: 2px solid #717070;
        border-radius: 7px;
        padding: 0.5rem 4rem 0.5rem 1rem;
        margin-right: 5px;

        @media screen and (max-width:768px) {
            font-size: 12px;
            max-width: 130px;
        }
    }

    .second {
        height: 100%;
        width: 250px;
        border-right: 2px solid lightgrey;

        @media screen and (max-width:550px) {
            width: 100%;
            border-right: none;
            border-bottom: 2px solid lightgrey;
            padding-top: 1.5rem;
        }
    }

    .third {
        height: 100%;
        width: 250px;
        border-right: 2px solid lightgrey;

        @media screen and (max-width:550px) {
            width: 100%;
            border-right: none;
            border-bottom: 2px solid lightgrey;
            padding-top: 1.5rem;
        }
    }

    .fourth {
        height: 100%;

        @media screen and (max-width:550px) {
            width: 100%;
            padding-top: 1.5rem;
        }
    }

    .footer ul {
        list-style-type: none;
        padding-left: 1.5rem;
    }

    .footer li {
        font-size: 15px;
        margin: 0.5rem;
        font-weight: bold;
        cursor: pointer;

        @media screen and (max-width:768px) {
            font-size: 12px;
        }
    }

    .footer li a {
        color: rgb(51, 51, 51);
    }

    .footer li a:hover {
        color: rgb(51, 51, 51);
        text-decoration: none;
    }

    .footer li:first-child {
        border-bottom: 2px solid red;
        width: 65px;
        padding-bottom: 5px;
        margin-bottom: 1.5rem;
        white-space: nowrap;
    }

    .icons {
        margin-top: 1rem;
    }

    .icons img {
        height: 25px;

        @media screen and (max-width:768px) {
            height: 20px;
        }
    }

    .lower {
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        
        background-color: #717070;
        font-size: 16px;
        padding-inline: 2rem;
        color: white;
        @media screen and (max-width:450px){
        align-items:start;
        flex-direction:column;
        }
    }

    .uppercase {
        text-transform: uppercase;
    }
    .powered{
        color: red;
    }
</style>
<div class="footer">
    <div class="upper">
        <div class="first">
            <img src="<?php echo base_url('assets/ajar-logo.png') ?>" alt="brand logo" id='first-logo'>
            <div class="first-newsletter">
                <p class="newsletter-heading">NEWSLETTER</p>
                <div class="first-input">
                    <input type="text" name="newsletter" class="newsletter-input" placeholder="EMAIL">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="second">
            <ul>
                <li>INFORMATION</li>
                <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                <li><a href="<?php echo base_url('about/company'); ?>"">ABOUT US</a></li>
                <li><a href=" <?php echo base_url('showroom'); ?>"">SHOWROOM</a></li>
                <li><a href="<?php echo base_url('download'); ?>"">DOWNLOADS</a></li>
            </ul>
        </div>
        <div class=" third">
                        <ul>
                            <li>PRODUCTS</li>
                            <li><a href="<?php echo base_url('/product/category/' . 1 . '/'); ?>">
                                    <span class="uppercase">
                                        Handle
                                    </span>
                                </a></li>
                            <li><a href="<?php echo base_url('/product/category/' . 3 . '/'); ?>">
                                    <span class="uppercase">
                                        Hinges
                                    </span>
                                </a></li>
                            <li><a href="<?php echo base_url('/product/category/' . 7 . '/'); ?>">
                                    <span class="uppercase">
                                        Lock
                                    </span>
                                </a></li>
                            <li><a href="<?php echo base_url('/product/category/' . 11 . '/'); ?>">
                                    <span class="uppercase">
                                        Door closer
                                    </span>
                                </a></li>

                        </ul>
        </div>
        <div class="fourth">
            <ul>
                <li>REACH OUT</li>
                <li><a href="<?php echo base_url('contact') ?>">LOCATION</a></li>
                <li><a href="<?php echo base_url('contact') ?>">CONTACT US</a></li>
                <li><a href="<?php echo base_url('admin') ?>">ADMIN</a></li>
                <li>
                    <div class="icons">
                        <img src="<?php echo base_url('/assets/icons/facebook.svg') ?>" alt="facebook">
                        <img src="<?php echo base_url('/assets/icons/instagram.svg') ?>" alt="instagram">
                        <img src="<?php echo base_url('/assets/icons/youtube.svg') ?>" alt="youtube">
                        <img src="<?php echo base_url('/assets/icons/tiktok.svg') ?>" alt="tiktok">
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="lower"><p>&copy; All Rights Reserved</p><p>Powered By <a href="https://eloquent-kelpie-20dbab.netlify.app/" class="powered">Aashyana Soln</a></p></div>
</div>