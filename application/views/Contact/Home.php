<style>
    .center {
        width: 100%;
        background-color: lightgrey;
        padding-top: 90px;
        padding-bottom: 5rem;

        @media screen and (max-width:600px) {
            padding-top: 20px;
        }
    }

    .heading {
        margin-inline: 15rem;
        display: flex;
        justify-content: space-between;
        margin-top: 5rem;
        padding-inline: 5rem;

        @media screen and (max-width:1200px) {
            margin-inline: 5rem;


            @media screen and (max-width:600px) {
                flex-direction: column;
                gap: 2rem;
                align-items: center;
                margin-bottom: 5rem;
            }
        }
    }

    .wrap-map {
        background: linear-gradient(to bottom, darkgrey 50%, lightgrey 50%);
        padding-top: 2rem;

        @media screen and (max-width:600px) {
            background: darkgrey
        }
    }


    .heading h1 {
        font-family: Kumbh Sans;
        font-size: 70px;
        margin-bottom: -10px;


        @media screen and (max-width:900px) {
            font-size: 28px;

            @media screen and (max-width:600px) {
                font-size: 28px;
            }
        }
    }

    .map {
        margin-inline: 15rem;

        margin-bottom: 5rem;
        background-color: white;
        padding: 2rem;
        border-radius: 5px;
        z-index: 2;
        box-shadow: 15px 15px 6px rgba(0, 0, 0, 0.1);

        @media screen and (max-width:1200px) {
            margin-inline: 5rem;


            @media screen and (max-width:600px) {
                margin-inline: 0;
                padding: 1rem;
            }
        }
    }

    .map iframe {
        aspect-ratio: 16/5;
        border-radius: 5px;

        @media screen and (max-width:600px) {
            aspect-ratio: 16/8;
        }
    }

    .qrcode {
        background-color: white;
        border-radius: 5px 5px 0 0px;
        height: 100%;
        padding: 1rem;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        width: 140px;

        @media screen and (max-width:700px) {
            width: 100px;

            @media screen and (max-width:600px) {

                width: 100%;
                border-radius: 5px 5px 5px 5px;
            }
        }

    }

    .qrcode img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .line {
        padding-bottom: 5px;
        border-bottom-style: solid;
        border-bottom-width: 3.1px;
        width: 100%;
        margin-inline: 5px;
    }

    .wrap-text {
        display: flex;
        align-items: center;
        flex-direction: column;

        @media screen and (max-width:600px) {
            flex-direction: column;
        }
    }

    .empty {
        width: 130px;

        @media screen and (max-width:600px) {
            display: none;
        }
    }

    .wrap-form-address {
        padding-inline: 15rem;

        display: flex;
        justify-content: center;
        gap: 5rem;

        @media screen and (max-width:1200px) {
            padding-inline: 5rem;


            @media screen and (max-width:600px) {
                flex-direction: column;
                padding-inline: 2rem;
            }
        }
    }

    .address {
        width: 100%;
        background-color: white;
        border-radius: 15px;
        object-fit: contain;
    }

    .wrap-addres {
        width: 30%;

        @media screen and (max-width:1200px) {

            width: 40%;

            @media screen and (max-width:600px) {
                width: 100%;
            }
        }
    }

    .details {
        padding-inline: 2rem;
        border-bottom: 2px solid black;
        display: flex;
        flex-direction: row;
        padding-top: 5%;
        gap: 2rem
    }

    .details-no-border {
        padding-inline: 2rem;
        display: flex;
        flex-direction: row;
        padding-top: 5%;
        gap: 2rem
    }

    .icon svg {
        margin-top: 18%;
        width: 30px;
    }

    .form-div {
        width: 40%;
        background-color: white;
        border-radius: 15px;

        @media screen and (max-width:1200px) {
            width: 60%;


            @media screen and (max-width:600px) {
                width: 100%;
            }
        }
    }

    .detail-heading {
        font-size: 30px;
        margin: 0;
    }

    .socialicons {
        display: flex;
        justify-content: center;
        padding-top: 5%;
        padding-bottom: 5%;
        gap: 3rem;
    }

    .socialicons img {
        width: 35px;
        height: 57px;
    }

    .form {
        padding: 5rem;
        padding-top: 2rem;
        padding-bottom: 2rem;

        @media screen and (max-width:600px) {
            padding: 2rem;
        }
    }

    .form-heading {
        display: flex;
        justify-content: center;
        border-radius: 15px 15px 10px 10px;
        background-color: darkgrey;
        padding-top: 1rem;
        padding-bottom: 2rem
    }

    .submit {
        display: flex;
        justify-content: flex-end;

        @media screen and (max-width:600px) {
            justify-content: center;
        }
    }

    .form-control {
        background-color: #D9D9D9;
        border-radius: 10px;
        font-size: 15px;
    }


    /* Add this to your existing CSS or create a new section for toast messages */
    .toast-message {
        position: fixed;
        top: 10;
        right: 0;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border-radius: 4px;
        z-index: 9999;
        display: none;
        font-size: 15px;
        animation: slideIn 0.5s, slideOut 0.5s 2s;

        @media screen and (max-width:400px) {
            width: 100%;
            text-align: center;
        }
    }

    @keyframes slideIn {
        from {
            right: -100%;
        }

        to {
            right: 0;
        }
    }

    @keyframes slideOut {
        from {
            right: 0;
        }

        to {
            right: -100%;
        }
    }
</style>
<div class="center">
    <div class="wrap-map">
        <div class="heading">
            <div class="empty">&nbsp;</div>
            <div class="wrap-text">
                <h1>Reach us at</h1>
                <div class="line"></div>
            </div>
            <div class="qrcode">
                <img src="<?php echo base_url('/assets/qrcode.png') ?>" alt="qrcode">
            </div>
        </div>
        <div class="map">
            <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14723.810715326064!2d75.86225!3d22.69280545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcfb09a33bc9%3A0x5433542158562a00!2sIndore%2C%20Madhya%20Pradesh%20452014!5e0!3m2!1sen!2sin!4v1696521109522!5m2!1sen!2sin"
                width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.422240962693!2d55.404408!3d25.290014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5f753dbaa40d%3A0x204bc12c059a20a5!2sJadeed%20Ajar!5e0!3m2!1sen!2sin!4v1699541439874!5m2!1sen!2sin"
                width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="wrap-form-address">
        <div class="wrap-addres">
            <div class="address">
                <div class="details">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-geo" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                        </svg></div>
                    <div class="text">
                        <p class="detail-heading">Head Office</p>
                        <p style="font-size:20px;">Jadeed AJAR General Trading, Industrial Area 5, Al Qusais.
                            Dubai U.A.E </p>
                    </div>
                </div>
                <div class="details">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg></div>
                    <div class="text">
                        <p class="detail-heading">E-mail</p>
                        <p style="font-size:20px;">sales@ajar-me.com</p>
                    </div>
                </div>
                <div class="details">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg></div>
                    <div class="text">
                        <p class="detail-heading">Call-us</p>
                        <p style="font-size:20px;">
                            +971 4 229 4540</p>
                    </div>
                </div>
                <div class="socialicons">
                    <img src="<?php echo base_url('/assets/icons/facebook.svg') ?>" alt="facebook">
                    <img src="<?php echo base_url('/assets/icons/instagram.svg') ?>" alt="instagram">
                    <img src="<?php echo base_url('/assets/icons/youtube.svg') ?>" alt="youtube">
                    <img src="<?php echo base_url('/assets/icons/tiktok.svg') ?>" alt="tiktok">
                </div>
            </div>
        </div>
        <div class="form-div">
            <div class="form-heading">
                <h1>Leava a Message</h1>
            </div>
            <form id="myForm" class="form">
                <div class="form-group">
                    <input type="name" class="form-control" id="exampleInputEmail1" name="name"
                        aria-describedby="emailHelp" Required=true placeholder="Enter your name (Required)">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                        aria-describedby="emailHelp" Required=true placeholder="Enter your Email (Required)">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputEmail1" name="contact"
                        aria-describedby="emailHelp" Required=true placeholder="Enter your Phone no (Required)">
                </div>
                <div class="form-group">
                    <textarea placeholder="Type your message here and click submit" class="form-control" name="message"
                        id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
                <div class="submit">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="toast-message" class="toast-message">
    Message Sent successfully!<br />
    We will contact you Shortly
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#myForm').submit(function (event) {
            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: "<?php echo base_url('contact/submit_message'); ?>",
                data: formData,
                success: function (response) {
                    console.log('Form submitted successfully');
                    showSuccessMessage();
                    clearForm();
                },
                error: function (error) {
                    console.error('Form submission failed');
                }
            });
        });

        function showSuccessMessage() {
            var toastMessage = $('#toast-message');
            toastMessage.show();
            setTimeout(function () {
                toastMessage.hide();
            }, 2000);
        }
        function clearForm() {
            $('#myForm')[0].reset();
        }
    });

</script>