<style>
    .center {
        width: 100%;
        background-color: lightgrey;
        padding-top: 90px;
        padding-bottom: 5rem;
        padding-inline: 5rem;

        @media screen and (max-width:600px) {
            padding-top: 70px;
            padding-inline: 3rem;
        }
    }

    .heading {
        font-size: 35px;
        text-decoration: underline;
        margin-top: 3rem;
        margin-bottom: 4rem;

        @media screen and (max-width:600px) {
            font-size: 25px;
            text-decoration: none;
            text-align: center;
        }
    }

    .showroom_video {
        width: 100%;
        display: flex;
        justify-content: center;
        overflow: hidden;
        border-radius: 15px;
        height: 70vh;
    }

    .video_container {
        margin-inline: 15rem;

        @media screen and (max-width:800px) {
            margin-inline: 0;
        }
    }

    .rounded {
        width: 100%;
        padding-inline: 0;

        @media screen and (max-width:800px) {
            width: 100%;
            padding-inline: 0;

            @media screen and (max-width:600px) {
                aspect-ratio: 16/9;
                width: 100%;
                padding-inline: 0;
            }
        }
    }

    video {
        object-fit: fill;
    }


    .images {
        margin-top: 15rem;

        @media screen and (max-width:576px) {
            margin-top: 5rem;
        }
    }

    .showroom_images {
        margin-top: 3rem;
        display: flex;
        justify-content: center;
        width: 100%;
        height: 300px;
        gap: 3rem;

        @media screen and (max-width:768px) {
            height: 200px;

            @media screen and (max-width:576px) {
                flex-direction: column;
                height: auto;
                justify-content: center;
            }
        }
    }

    .showroom_image1 {
        width: 50%;
        height: 100%;
        object-fit: contain;

        @media screen and (max-width:576px) {
            width: 100%;
            height: 200px;
            text-align: center;
        }
    }

    .showroom_image2,
    .showroom_image3 {
        width: 25%;
        height: 100%;

        @media screen and (max-width:576px) {
            width: 100%;
            height: 200px;
            text-align: center;
        }
    }

    .showroom_image1 img,
    .showroom_image2 img,
    .showroom_image3 img {
        width: 100%; 
        height: 100%;
        border-radius: 15px;
        filter: drop-shadow(2px 2px 2px black);
        
        @media screen and (max-width:576px) {
            width: 200px;
        }
    }

    .modal {
        padding: 5rem;
        display: none;
        background-color: rgba(0, 0, 0, 0.3);
    }

    .modal_image {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
        position: relative;
    }

    .close_icon {
        position: absolute;
        right: -20;
        top: -20;
        z-index: 1000;
        color: white;
    }

    .modal_image img {
        width: 100%;
        height: 100%;

        @media screen and (max-width:576px) {
            height: 50%;
        }
    }

    .close_icon img {
        width: 30px;
    }
</style>

<div class="center">
    <h1 class="heading">Explore Our Showroom in Virtual Splendor</h1>
    <div class="video_container">
        <div class="showroom_video">
            <video class="rounded" controls autoplay>
                <source src="<?php echo base_url('/assets/video/Ajar_Video.mp4'); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="images">
        <div class="showroom_images">
            <div class="showroom_image1">
                <img id="image1" onclick="openModal(id)" src="<?php echo base_url('/assets/showroom/1.jpg'); ?>"
                    alt="featured product">
            </div>
            <div class="showroom_image2">
                <img id="image2" onclick="openModal(id)" src="<?php echo base_url('/assets/showroom/2.jpg'); ?>"
                    alt="featured product">
            </div>
            <div class="showroom_image3">
                <img id="image3" onclick="openModal(id)" src="<?php echo base_url('/assets/showroom/3.jpg'); ?>"
                    alt="featured product">
            </div>
        </div>
        <div class="showroom_images">
            <div class="showroom_image2">
                <img id="image4" onclick="openModal(id)" src="<?php echo base_url('/assets/showroom/4.jpg'); ?>"
                    alt="featured product">
            </div>
            <div class="showroom_image3">
                <img id="image5" onclick="openModal(id)" src="<?php echo base_url('/assets/showroom/5.jpg'); ?>"
                    alt="featured product">
            </div>
            <div class="showroom_image1">
                <img id="image6" onclick="openModal(id)" src="<?php echo base_url('/assets/showroom/6.jpg'); ?>"
                    alt="featured product">
            </div>
        </div>
        <div class="showroom_images">
            <div class="showroom_image1">
                <img id="image7" onclick="openModal(id)" src="<?php echo base_url('/assets/showroom/7.jpg'); ?>"
                    alt="featured product">
            </div>
            <div class="showroom_image2">
                <img id="image8" onclick="openModal(id)" src="<?php echo base_url('/assets/showroom/8.jpg'); ?>"
                    alt="featured product">
            </div>
            <div class="showroom_image3">
                <img id="image9" onclick="openModal(id)" src="<?php echo base_url('/assets/showroom/9.jpg'); ?>"
                    alt="featured product">
            </div>
        </div>
    </div>
</div>
<div id="imageModal" class="modal">
    <div class="modal_image">
        <div class="close_icon"><img class="close" onclick="closeModal()"
                src="<?php echo base_url('assets/icons/cancel.svg'); ?>" alt="close"></div>
        <img id="modalImage" class="modal-content" src="">
    </div>
</div>
<script>
    // JavaScript function to open the modal and display the clicked image
    function openModal(imageId) {
        var modal = document.getElementById("imageModal");
        var modalImage = document.getElementById("modalImage");
        var image = document.getElementById(imageId);
        modal.style.display = "block";
        modalImage.src = image.src;
    }

    // JavaScript function to close the modal
    function closeModal() {
        var modal = document.getElementById("imageModal");
        modal.style.display = "none";
    }
</script>