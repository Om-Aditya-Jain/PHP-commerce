<style>
    .center {
        width: 100%;
        background-color: lightgrey;
        padding-top: 90px;
        padding-bottom: 5rem;
    }

    .heading {
        margin: 5rem;

        @media screen and (max-width:400px) {
            margin: 5rem 2rem;
        }
    }

    .heading h1 {
        font-size: 45px;
    }

    .heading p {
        font-size: 18px;
        text-align: justify;
    }

    .certificates {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        place-items: center;
        padding: 5rem;
        grid-row-gap: 5rem;

        @media screen and (max-width:400px) {
            padding: 2rem;
            grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
        }
    }

    .certificate {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 230px;
        background-color: white;
        border-radius: 7px;
    }

    .certificate img {
        height: 300px;
        margin-top: 1rem;
        border: 0.5px solid black;
        border-radius: 8px;
    }


    .certificate p {
        text-align: center;
        font-weight: bold;
        font-size: 20px;
        color: black;
        text-decoration: none;
    }

    .certificate:hover {
        text-decoration: none;
        color: black;
    }
</style>
<div class="center" id="center">
    <div class="heading">
        <h1>We are Certified</h1>
        <p>Welcome to Ajar, your trusted source for premium door hardware solutions in Dubai. Our certifications signify
            our unwavering commitment to quality and safety. Our Locks Certification ensures the security and durability
            of our products, providing peace of mind for you and your loved ones. Hinges, a crucial component of door
            functionality, meet the strictest quality standards, guaranteeing smooth operation and reliability.<br/><br/>

            We proudly hold the ISO Certification, emphasizing our dedication to sustainability and environmental
            responsibility. This certification showcases the exceptional materials and craftsmanship in our products.<br/><br/>

            These certifications demonstrate our transparency and customer-centric approach. Contact us for any
            questions or additional information. Your satisfaction is our top priority. Thank you for choosing Ajar for
            trusted door hardware solutions in Dubai</p>
    </div>
    <div class="certificates">
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate/License.png') ?>" alt="certificate">
            <p>ISO Certificate</p>
        </div>
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate/BIFMA.png') ?>" alt="certificate">
            <p>BIFMA Certificate</p>
        </div>
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate/HINGES.png') ?>" alt="certificate">
            <p>HINGES Certificate</p>
        </div>
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate/LOCKS.png') ?>" alt="certificate">
            <p>LOCKS Certificate</p>
        </div>
        <div class="certificate">
            <img src="<?php echo base_url('/assets/certificate/Diploma.png') ?>" alt="certificate">
            <p>GAI Certificate</p>
        </div>
    </div>
</div>