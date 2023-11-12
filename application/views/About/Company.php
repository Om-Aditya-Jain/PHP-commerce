<style>
    .company-container {
        width: 100%;
        background-color: lightgrey;
        padding-top: 90px;
        padding-bottom: 5rem;

        @media screen and (max-width:600px) {
            padding-top: 60px;
        }
    }

    .company-heading {
        margin: 8rem;

        @media screen and (max-width:600px) {
            margin: 5rem 2rem;
        }
    }

    .company-heading h1 {
        font-size: 45px;
        margin-bottom: 5rem;

        @media screen and (max-width:800px) {
            font-size: 35px;
        }
    }


    .story_block {
        display: flex;
        margin-inline: 8rem;
        gap: 6rem;
        flex-direction: row;

        @media screen and (max-width:800px) {
            flex-direction: column-reverse;
            gap: 5rem;
            margin: 0rem 3rem;
        }
    }

    .story_block p {
        width: 40%;

        @media screen and (max-width:800px) {
            width: 100%;
        }
    }

    .story_text {
        font-size: 20px;
        text-align: justify;

        @media screen and (max-width:500px) {
            font-size: 15px;
        }
    }

    .story_block img {
        width: 60%;
        box-shadow: 14px 14px 0 -4px lightgrey, 14px 14px 0 0 #717070;
        border-radius: 15px;
        aspect-ratio: 16/9;

        @media screen and (max-width:800px) {
            width: 100%;
        }
    }

    .company-mission {
        margin-top: 25rem;
        margin-bottom: 20rem;

        @media screen and (max-width:500px) {
            margin-top: 15rem;
        }
    }

    .mission-background {
        width: 100%;
        height: 350px;
        display: flex;
        justify-content: center;
        background-color: white;
        border-radius: 15px;
        position: relative;
        padding: 0rem 10rem;

        @media screen and (max-width:1200px) {
            padding: 0rem 3rem;

            @media screen and (max-width:900px) {
                padding: 0rem 3rem 0rem 1rem;

                @media screen and (max-width:768px) {
                    padding: 0rem 3rem;
                }
            }
        }
    }

    .mission-img-div {
        width: 50%;
        max-width: 670px;
        height: 110%;
        margin-top: -7rem;
        margin-right: -10rem;
        z-index: 5;

        @media screen and (max-width:1000px) {
            width: 60%;

            @media screen and (max-width:806px) {
                margin: auto;
                margin-top: -18rem;
                width: 100%;
                position: absolute;
            }
        }

        @media screen and (max-width:500px) {
            height: 80%;
            margin-top: -10rem;
        }
    }

    .mission-img {
        height: 100%;
        width: 100%;
    }

    .mission-div {
    width: 50%;
    max-width: 670px;
    height: auto;
    margin-top: 7rem;
    padding-left: 10rem;
    padding-right: 3rem;
    background-color: #717070;
    color: white;
    border-radius: 15px;
    font-size: 15px;
    margin-bottom: -5rem;
}

@media screen and (max-width: 1390px) {
    .mission-div {
        margin-bottom: -16rem;
    }
}

@media screen and (max-width: 1330px) {
    .mission-div {
        margin-bottom: -15rem;
    }
}

@media screen and (max-width: 1050px) {
    .mission-div {
        margin-bottom: -27rem;
    }
}
@media screen and (max-width: 1020px) {
    .mission-div {
        margin-bottom: -17rem;
    }
}
@media screen and (max-width: 990px) {
    .mission-div {
        margin-bottom: -20rem;
    }
}
@media screen and (max-width: 923px) {
    .mission-div {
        margin-bottom: -25rem;
    }
}

@media screen and (max-width: 854px) {
    .mission-div {
        padding-right: 2rem;
        margin-bottom: -19rem;
        width: 60%;
    }
}

@media screen and (max-width: 806px) {
    .mission-div {
        width: 90%;
        position: absolute;
        padding: 2rem 3rem;
        margin: 0rem;
        top: 60%;
    }
}


    .mission-div h1 {
        @media screen and (max-width:500px) {
            font-size: 35px;
        }
    }

    .mission-div p {
        text-align: justify;
        text-justify: inter-word;
    }

    .company-foundation {
        margin-top: 5rem;
        padding: 0rem 5rem;

        @media screen and (max-width:400px) {
            padding: 0rem;
        }
    }

    .foundation-heading {
        margin-bottom: 5rem;
    }

    .foundation-heading h1 {
        font-size: 45px;
        text-align: center;
        padding-top: 15rem;

        @media screen and (max-width:500px) {
            padding-top: 25rem;
            font-size: 35px;

            @media screen and (max-width:400px) {
                padding-top: 35rem;

                @media screen and (max-width:350px) {
                    padding-top: 45rem;

                    @media screen and (max-width:300px) {
                        padding-top: 60rem;
                    }
                }
            }
        }
    }

    .foundation-cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        place-items: center;
        gap: 5rem;
        margin-top: 5rem;
        max-width: 1260px;
        margin: auto;

        @media screen and (max-width:1200px) {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        }
    }

    .foundation-card {
        background-color: white;
        border-radius: 1rem;
        width: 280px;
        margin-top: 5rem;
    }

    .foundation-card-heading {
        width: 200px;
        border-radius: 1rem;
        background-color: #717070;
        padding: 1rem 0rem;
        text-align: center;
        color: white;
        margin: auto;
        font-size: 20px;
        margin-top: -2.5rem;
    }

    .foundation-card-body {
        padding: 2rem 1.5rem 2.5rem 1.5rem;
        font-size: 16px;
        text-align: justify;
        text-justify: inter-word;
    }

    .company-founder {
        margin-top: 15rem;
    }

    .founder-heading {
        margin-left: 5rem;
        margin-bottom: 15rem;

        @media screen and (max-width:500px) {
            margin-left: 2rem;
            margin-right: 2rem;
        }
    }

    .founder-heading h1 {
        font-size: 45px;

        @media screen and (max-width:500px) {
            text-align: center;
            font-size: 35px;
        }
    }

    .founder-div {
        width: 60%;
        display: flex;
        background-color: white;
        border-radius: 2rem;
        margin-bottom: 15rem;
        min-height: 300px;

        @media screen and (max-width:1200px) {
            width: 70%;

            @media screen and (max-width:768px) {
                flex-direction: column;
                width: 80%;
            }
        }
    }

    .founder-img-div {
        border: 5px solid #717070;
        border-radius: 2rem;
        height: 320px;

        @media screen and (max-width:768px) {
            width: 100%;
        }
    }

    .founder-img {
        height: 100%;
        object-fit: cover;
        border-radius: 2rem;

        @media screen and (max-width:768px) {
            width: 100%;
        }
    }

    .founder-text {
        padding: 2rem;
        display: flex;
        align-items: center;
        font-size: 18px;

        @media screen and (max-width:1000px) {
            font-size: 15px;
        }
    }

    .founder-text p {
        margin: 0;
    }

    .even-founder {
        margin-left: auto;
    }

    .odd-founder {
        @media screen and (max-width:768px) {
            flex-direction: column-reverse;
        }
    }

    .even-founder .founder-img-div {
        margin-top: -5rem;
        margin-left: -15rem;

        @media screen and (max-width:768px) {
            margin-left: -3rem;
        }
    }

    .even-founder .founder-img {
        margin-top: -1rem;
        margin-left: -3rem;
        margin-right: 1rem;

        @media screen and (max-width:768px) {
            margin-left: -2rem;
        }
    }

    .odd-founder .founder-img-div {
        margin-top: -5rem;
        margin-right: -15rem;

        @media screen and (max-width:768px) {
            margin-left: 3rem;
        }
    }

    .odd-founder .founder-img {
        margin-top: -1rem;
        margin-right: -3rem;
        margin-left: 1rem;

        @media screen and (max-width:768px) {}
    }
</style>
<div class="company-container">
    <div class="company-heading">
        <h1>Discover Our Journey</h1>
        <p class="story_text">AJAR, a name that means "door opening," finds its roots in the heart of the United Arab
            Emirates. Born from a vision to create a world-class ironmongery brand originating from the UAE and
            extending its reach across the globe, our journey is one of passion, perseverance, and excellence.<br />

            Our story began with inspiration drawn from Dubai's visionary leadership, which taught us that "nothing is
            impossible." This inspiration ignited our passion and determination to establish a brand that would not only
            meet but exceed the highest standards of quality and innovation.<br />

            With over 20 years of experience in the ironmongery industry, including 17 years of dedicated service in the
            UAE market, we recognized that the time was ripe to venture into new horizons. Our goal was clear: to offer
            a comprehensive solution under one roof, setting new benchmarks in the industry.</p>
    </div>
    <div class="story_block">
        <p class="story_text">
            <br />
            Our commitment to quality transcends the surface appeal of our products. We understand
            that ironmongery must
            endure the test of time, delivering unwavering performance and reliability. As a result, we meticulously
            curate each item in our catalog, ensuring it meets the most stringent standards of durability,
            functionality, and security.
            <br />
            <br />

            Today, AJAR stands as a testament to our journey—an embodiment of our passion, commitment, and the enduring
            spirit that fuels us. We are proud to be pioneers, and we invite you to join us as we continue to redefine
            the boundaries of the ironmongery industry
        </p>
        <img src="<?php echo base_url('/assets/story_first.png') ?>" alt="certificate">
    </div>
    <div class="company-mission">
        <div class="mission-background">
            <div class="mission-img-div">
                <img src="<?php echo base_url('/assets/company-mission.png') ?>" alt="company mission"
                    class="mission-img">
            </div>
            <div class="mission-div">
                <h1>Our Mission</h1>
                <p>At AJAR, our mission is to lead the ironmongery industry with an unwavering commitment to excellence.
                    We strive to provide the highest quality products and services that seamlessly blend functionality,
                    innovation, and aesthetic appeal. We are dedicated to offering a customer-centric experience, where
                    each client is a partner in our journey. Our goal is to transform spaces, creating environments that
                    inspire, enrich, and elevate the lives of those who experience them. With a global reach and a local
                    touch, we aim to make high-quality ironmongery accessible to architects, contractors, interior
                    designers, and homeowners alike. At AJAR, we believe in the art of elevation, where doors open to
                    quality, innovation, and the creation of beautiful, enduring spaces. </p>
            </div>
        </div>
    </div>
    <div class="company-foundation">
        <div class="foundation-heading">
            <h1>Our Foundation</h1>
        </div>
        <div class="foundation-cards">
            <div class="foundation-card">
                <div class="foundation-card-heading">
                    Passion
                </div>
                <div class="foundation-card-body">
                    At Ajar, our passion fuels our commitment to delivering excellence in the world of door handles and
                    kitchen accessories. We're driven by a relentless dedication to quality and design, ensuring that
                    every product we offer enhances your living spaces with style and functionality.
                </div>
            </div>
            <div class="foundation-card">
                <div class="foundation-card-heading">
                    Customer-Centric
                </div>
                <div class="foundation-card-body">
                    Ajar is all about you, our valued customers. We place your needs at the forefront of our business,
                    striving to create a seamless and enjoyable shopping experience. Your satisfaction is our ultimate
                    priority, and we're here to cater to your specific requirements.
                </div>
            </div>
            <div class="foundation-card">
                <div class="foundation-card-heading">
                    Trust
                </div>
                <div class="foundation-card-body">
                    Trust in Ajar for high-quality, durable, and stylish door handles and kitchen accessories. Our
                    reputation is built on trust, and we work diligently to maintain it by consistently delivering
                    top-tier products that stand the test of time. Your trust is our most valued asset.
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="company-founder">
        <div class="founder-heading">
            <h1>Meet Our Founders</h1>
        </div>
        <div class="founder-div even-founder">
            <div class="founder-img-div">
                <img src="<?php echo base_url('/assets/founder1.png'); ?>" alt="founder image" class="founder-img">
            </div>
            <div class="founder-text">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita ut ducimus doloremque autem
                    soluta asperiores incidunt veritatis nam ab facere est commodi veniam sit dolores consequatur
                    possimus iure recusandae magni quis numquam porro, voluptates vel! Corrupti velit totam delectus
                    nemo molestiae nostrum veritatis, nobis quod blanditiis laborum, autem et sed!
                </p>
            </div>
        </div>
        <div class="founder-div odd-founder">
            <div class="founder-text">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita ut ducimus doloremque autem
                    soluta asperiores incidunt veritatis nam ab facere est commodi veniam sit dolores consequatur
                    possimus iure recusandae magni quis numquam porro, voluptates vel! Corrupti velit totam delectus
                    nemo molestiae nostrum veritatis, nobis quod blanditiis laborum, autem et sed!
                </p>
            </div>
            <div class="founder-img-div">
                <img src="<?php echo base_url('/assets/founder2.png'); ?>" alt="founder image" class="founder-img">
            </div>
        </div>
    </div> -->
</div>