<style>
  .home {
    width: 100%;
    background-color: #EAEAEA;
    padding-top: 90px;
    padding-bottom: 5rem;
  }

  .mySlides {
    display: none;
    height: calc(100vh - 100px);
    width: calc(100vw - 50px);
    overflow: hidden;
    margin-top: 20px;
    border-radius: 10px;

    @media screen and (max-width:768px) {
      height: 350px;
      width: calc(100vw - 30px);
    }
  }

  img {
    vertical-align: middle;
  }

  .slider-image {
    height: 100%;
    width: 100%;
    object-fit: cover;
    overflow: hidden;
    animation: enlargeAnimation 7s ease-in-out forwards;
  }

  @keyframes enlargeAnimation {
    0% {
      transform: scale(1);
    }

    100% {
      transform: scale(1.07);
    }
  }

  /* Slideshow container */
  .slideshow-container {
    width: calc(100vw - 50px);
    position: relative;
    margin: auto;
    overflow: hidden;
    border-radius: 10px;

    @media screen and (max-width:768px) {
      height: 350px;
      width: calc(100vw - 30px);
    }
  }

  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    text-decoration: none;
  }

  /* Fading animation */
  .fade {
    opacity: 1;
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {

    .prev,
    .next {
      font-size: 11px
    }
  }


  .featured {
    margin: 15rem 5rem 15rem 5rem;

    @media screen and (max-width:500px) {
      margin: 7rem 3rem 7rem 1rem;
    }
  }

  .featured h1 {
    margin-left: 3rem;
    margin-bottom: 5rem;
    font-size: 40px;

    @media screen and (max-width:1000px) {
      margin-left: 0;
      font-size: 32px;
    }
  }

  .featured-div {
    display: flex;

    @media screen and (max-width:1000px) {
      flex-direction: column;
    }
  }

  .featured-img-div {
    height: 200px;
    width: 100%;
    border: 5px solid #717070;
    border-radius: 10px;
    position: relative;

    @media screen and (min-width:500px) {
      height: 300px;

      @media screen and (min-width:1000px) {
        min-height: 300px;
        max-height: 300px;
        min-width: 600px;
        max-width: 600px;

        @media screen and (min-width:1200px) {
          min-height: 400px;
          max-height: 400px;
          min-width: 800px;
          max-width: 800px;
        }
      }
    }
  }

  .featured-img {
    height: 100%;
    width: 100%;
    object-fit: fill;
    border-radius: 10px;
    position: absolute;
    top: -20;
    left: 20;
  }

  .featured-description {
    margin-left: 5rem;
    font-size: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;

    @media screen and (max-width:1000px) {
      margin-top: 5rem;
      margin-left: 0;

      @media screen and (max-width:500px) {
        margin-top: 2rem;
      }
    }
  }

  @media screen and (min-width: 1000px) {
    .featured-description p {
      overflow: hidden;
      -webkit-box-orient: vertical;
      display: -webkit-box;
      -webkit-line-clamp: 8;
    }
  }

  .featured-buttons {
    margin-bottom: 20px;
    display: flex;
    align-items: center;

    @media screen and (max-width:1000px) {
      margin-top: 2rem;
      justify-content: center;
    }
  }

  .featured-buttons a {
    color: #000505;
    opacity: 0.5;
    display: flex;
    align-items: center;
  }

  .featured-buttons a:hover {
    text-decoration: none;
    cursor: pointer;
  }

  .featured-buttons a img {
    height: 20px;
    opacity: 1;

    @media screen and (max-width:300px) {
      height: 15px;
    }
  }

  .simplify-text {
    padding: 2rem 2rem 20rem 2rem;
    background-color: white;
    text-align: center;
    border-radius: 15px;

    @media screen and (max-width:756px) {
      padding-bottom: 15rem;
    }
  }

  .simplify-text h1 {
    font-size: 40px;

    @media screen and (max-width:1200px) {
      font-size: 32px;
    }
  }

  .simplify-text p {
    font-size: 18px;
    margin: auto;

    @media screen and (min-width:756px) {
      width: 600px;
    }
  }

  .simplify-cards {
    margin-top: -15rem;
    display: flex;
    justify-content: space-around;
    padding: 0rem 2rem;

    @media screen and (max-width:756px) {
      justify-content: space-between;
      margin-top: -8rem;

      @media screen and (max-width:500px) {
        padding: 0rem 1rem;
      }
    }
  }

  .simplify-card {
    background-color: #717070;
    border-radius: 15px;
    padding: 1rem;
    width: 400px;

    @media screen and (max-width:900px) {
      width: 40%;

      @media screen and (max-width:756px) {
        width: 49%;
        padding: 8px;
      }
    }
  }

  .simplify-card-img {
    width: 100%;

    @media screen and (max-width:500px) {
      height: 150px;
    }
  }

  .simplify-card p {
    text-align: center;
    color: white;
    font-size: 22px;
    margin: 0;
    margin-top: 1rem;
    padding: 0;

    @media screen and (max-width:500px) {
      font-size: 15px;
    }
  }

  .find {
    margin-top: 20rem;

    @media screen and (max-width:500px) {
      margin-top: 10rem;
    }
  }

  .find-text {
    padding: 2rem 2rem 20rem 2rem;
    background-color: white;
    text-align: center;
    border-radius: 15px;

    @media screen and (max-width:756px) {
      padding-bottom: 15rem;
    }
  }

  .find-text h1 {
    font-size: 40px;

    @media screen and (max-width:1200px) {
      font-size: 32px;
    }
  }

  .find-text p {
    font-size: 18px;
    margin: auto;

    @media screen and (min-width:756px) {
      width: 600px;
    }
  }

  .find-cards {
    margin: auto;
    margin-top: -15rem;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    place-items: center;
    padding: 5rem;
    grid-row-gap: 5rem;
    max-width: 1300px;

    @media screen and (max-width:500px) {
      /* grid-template-columns: repeat(auto-fill, minmax(160px, 1fr)); */
      padding: 5rem 1rem;
    }
  }

  .find-card {
    background-color: #717070;
    border-radius: 15px;
    padding: 1rem;
    width: 250px;
  }

  .find-card-img {
    width: 100%;
    height: 200px;
    border-radius: 10px;
  }

  .find-card p {
    text-align: center;
    color: white;
    font-size: 22px;
    margin: 0;
    margin-top: 1rem;
    padding: 0;
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
    justify-items:center;
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
    min-height:400px;
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
  }
  .short_text{
    overflow: hidden;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    -webkit-line-clamp: 9;
  }

  .more-products {
    margin-top: 5rem;
    display: flex;
    justify-content: center;

    @media screen and (max-width:620px) {
      margin-top: 0;

      @media screen and (max-width:300px) {
        margin-top: 2rem;
      }
    }
  }

  .more-products-button {
    font-size: 20px;
    font-weight: 600;
    background-color: white;
    padding: 1rem 2rem;
    border-radius: 10px;
    cursor: pointer;
  }

  .partners {
    margin: 15rem 0rem 10rem 0rem;
  }

  .partners-heading {
    margin: 8rem;
    margin-bottom: 12rem;

    @media screen and (max-width:756px) {
      margin-left: 2rem;
      margin-right: 2rem;
    }
  }

  .partners-heading h1 {
    font-size: 40px;

    @media screen and (max-width:1200px) {
      font-size: 32px;
    }
  }

  .partners-div {
    border: 8px dashed #D9D9D9;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    margin: auto;
    position: relative;

    @media screen and (max-width:768px) {
      border: 5px dashed #D9D9D9;
      height: 300px;
      width: 300px;

      @media screen and (max-width:350px) {
        height: 200px;
        width: 200px;
      }
    }
  }

  .partners-logo {
    position: absolute;
    background-color: white;
    border-radius: 10px;
    padding: 10px;

    @media screen and (max-width:350px) {
      padding: 5px;
    }
  }

  .partners-logo img {
    height: 90px;
    width: 110px;
    border-radius: 10px;
    object-fit: contain;

    @media screen and (max-width:768px) {
      height: 50px;
      width: 50px;
    }
  }

  .partners-logo:nth-child(1) {
    top: -70;
    left: 173;

    @media screen and (max-width:768px) {
      top: -40;
      left: 110;

      @media screen and (max-width:350px) {
        top: -30;
        left: 65;
      }
    }
  }

  .partners-logo:nth-child(2) {
    top: 80;
    left: -70;

    @media screen and (max-width:768px) {
      top: 40;
      left: -20;

      @media screen and (max-width:350px) {
        top: 20;
      }
    }
  }

  .partners-logo:nth-child(3) {
    top: 80;
    right: -70;

    @media screen and (max-width:768px) {
      right: -20;
      top: 40;

      @media screen and (max-width:350px) {
        top: 20;
      }
    }
  }

  .partners-logo:nth-child(4) {
    bottom: 80;
    left: -70;

    @media screen and (max-width:768px) {
      left: -20;
      bottom: 40;

      @media screen and (max-width:350px) {
        bottom: 20;
      }
    }
  }

  .partners-logo:nth-child(5) {
    bottom: 80;
    right: -70;

    @media screen and (max-width:768px) {
      right: -20;
      bottom: 40;

      @media screen and (max-width:350px) {
        bottom: 20;
      }
    }
  }

  .partners-logo:nth-child(6) {
    bottom: -50;
    left: 181;

    @media screen and (max-width:768px) {
      bottom: -40;
      left: 110;

      @media screen and (max-width:350px) {
        bottom: -30;
        left: 65;
      }
    }
  }

  .self {
    background: transparent;
    top: 85;
    left: 106;

    @media screen and (max-width:768px) {
      top: 85;
      left: 85;

      @media screen and (max-width:350px) {
        top: 60;
        left: 60;
      }
    }
  }

  .self img {
    height: 250px;
    width: 250px;

    @media screen and (max-width:768px) {
      height: 100px;
      width: 100px;

      @media screen and (max-width:350px) {
        height: 60px;
        width: 60px;
      }
    }
  }
</style>
<div class="home">

  <div class="slideshow-container">

    <!-- <div class="mySlides">
      <img src="<?php echo base_url('/assets/Home.png'); ?>" style="height:100%; width:100%;object-fit:cover;overflow:hidden;">
    </div>

    <div class="mySlides">
      <img src="<?php echo base_url('/assets/Home-img.png'); ?>" style="height:100%;width:100%;object-fit:cover;overflow:hidden;">
    </div> -->
    <?php foreach ($slider_image as $image): ?>
      <div class="mySlides">
        <img src="<?php echo base_url($image['slider_image_url']); ?>" class="slider-image">
      </div>
    <?php endforeach; ?>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

  </div>

  <?php if (!empty($featured_projects)) { ?>
    <div class="featured">
      <h1>Featured Projects</h1>
      <div class="featured-div">
        <div class="featured-img-div">
          <img src="<?php echo base_url($featured_projects[0]['project_image_url']); ?>" alt="featured product"
            class="featured-img">
        </div>
        <div class="featured-description">
          <p>
            <?php echo $featured_projects[0]['description'] ?>
          </p>
          <div class="featured-buttons">
            <a style="margin-right:3rem;"><img onclick="featuredprevious();"
                src="<?php echo base_url('/assets/icons/arrow-left.svg') ?>"
                alt="left arrow icon">&nbsp;&nbsp;Previous</a>
            <!-- <a><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&nbsp;Previous</a> -->
            <a>Next&nbsp;&nbsp;<img onclick="featurednext();"
                src="<?php echo base_url('/assets/icons/arrow-right.svg') ?>" alt="right arrow icon"></a>
            <!-- <a>Next&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

  <div class="simplify">
    <div class="simplify-text">
      <h1>Simplify Opening Solutions</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore deserunt in accusamus excepturi, ad similique.
      </p>
    </div>
    <div class="simplify-cards">
      <div class="simplify-card">
        <img src="<?php echo base_url('/assets/simplify1.png'); ?>" alt="simplify product image"
          class="simplify-card-img">
        <p>Architectural Hardware</p>
      </div>
      <div class="simplify-card">
        <img src="<?php echo base_url('/assets/simplify2.png'); ?>" alt="simplify product image"
          class="simplify-card-img">
        <p>Furniture Fitings</p>
      </div>
    </div>
  </div>
  <div class="find">
    <div class="find-text">
      <h1>Where Can You Find Our Products?</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore deserunt in accusamus excepturi, ad similique.
      </p>
    </div>
    <div class="find-cards">
      <div class="find-card">
        <img src="<?php echo base_url('/assets/projects/Residential.jpg'); ?>" alt="find product image"
          class="find-card-img">
        <p>Residential</p>
      </div>
      <div class="find-card">
        <img src="<?php echo base_url('/assets/projects/commercial.jpg'); ?>" alt="find product image"
          class="find-card-img">
        <p>Commercial</p>
      </div>
      <div class="find-card">
        <img src="<?php echo base_url('/assets/projects/HealthCare.jpg'); ?>" alt="find product image"
          class="find-card-img">
        <p>Health Care</p>
      </div>
      <div class="find-card">
        <img src="<?php echo base_url('/assets/projects/Education.jpg'); ?>" alt="find product image"
          class="find-card-img">
        <p>Education</p>
      </div>
      <div class="find-card">
        <img src="<?php echo base_url('/assets/projects/hotels.jpg'); ?>" alt="find product image"
          class="find-card-img">
        <p>Hotels </p>
      </div>
      <div class="find-card">
        <img src="<?php echo base_url('/assets/projects/Government.jpg'); ?>" alt="find product image"
          class="find-card-img">
        <p>Government</p>
      </div>
    </div>
  </div>

  <?php if ($featured_products) { ?>
    <div class="products-div">
      <div class="products-text">
        <h1>Products</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore deserunt in accusamus excepturi, ad similique.
        </p>
      </div>
      <div class="products-cards">
        <?php $i = 1;
        foreach ($featured_products as $product) { ?>
          <?php if ($i % 2 == 1) { ?>
            <div class="products-card">
              <a href="<?php echo base_url('/product/category') . '/' . $product['product_category'] ?>">
                <div class="products-card-img">
                  <img src="<?php echo base_url($product['product_image_url']); ?>" alt="featured product"
                    style="height:100px;width:100px;object-fit: contain;">
                </div>
              </a>
              <p class="short_text" onclick="this.classList.toggle('short_text');toggle_text('<?php echo $i; ?>');">
                <?php echo $product['description'] ?>
              </p>
            </div>
          <?php } else { ?>
            <div class="products-card products-card-upper">
              <a href="<?php echo base_url('/product/category') . '/' . $product['product_category'] ?>">
                <div class="products-card-img">
                  <img src="<?php echo base_url($product['product_image_url']); ?>" alt="products product image"
                    style="height:100px;width:100px;object-fit: contain;">
                </div>
              </a>
              <p class="short_text" onclick="this.classList.toggle('short_text');toggle_text('<?php echo $i; ?>');">
                <?php echo $product['description'] ?>
              </p>
            </div>
          <?php } ?>
          <?php $i++;
        } ?>

      </div>
      <div class="more-products">
        <a href="<?php echo base_url('/product') ?>" class="href">
          <div class="more-products-button">
            View More
          </div>
        </a>
      </div>
    </div>
  <?php } ?>

  <div class="partners">
    <div class="partners-heading">
      <h1>Meet Our Partners</h1>
    </div>
    <div class="partners-div">
      <div class="partners-circle">
        <div class="partners-logo">
          <a href="https://ebco.in/">
            <img src="<?php echo base_url('/assets/partner1.png'); ?>" alt="partner brand logo">
          </a>
        </div>
        <div class="partners-logo">
          <a href="https://www.norseal.co.uk/">

            <img src="<?php echo base_url('/assets/partner2.png'); ?>" alt="partner brand logo">
          </a>
        </div>
        <div class="partners-logo">
          <a href="https://breuerundschmitz.de/">
            <img src="<?php echo base_url('/assets/partner3.png'); ?>" alt="partner brand logo">
          </a>
        </div>
        <div class="partners-logo">
          <a href="https://www.woelm.de/en/helm-sliding-hardware.html">
            <img src="<?php echo base_url('/assets/partner4.png'); ?>" alt="partner brand logo">
          </a>
        </div>
        <div class="partners-logo">
          <a href="https://www.fsb.de/en/">
            <img src="<?php echo base_url('/assets/partner5.png'); ?>" alt="partner brand logo">
          </a>
        </div>
        <div class="partners-logo">
          <a href="https://www.ces.eu/">

            <img src="<?php echo base_url('/assets/partner6.png'); ?>" alt="partner brand logo">
          </a>
        </div>
        <div class="partners-logo self">
          <img src="<?php echo base_url('/assets/ajar-logo.png'); ?>" alt="brand logo">
        </div>
      </div>
    </div>
  </div>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].style.display = "block";
    }
    setInterval(function () {
      plusSlides(1);
    }, 5000);
  </script>
  <script>
    let featuredIndex = 0;

    let featured_projects = [];
    <?php
    foreach ($featured_projects as $p) {
      ?>
      featured_projects.push({ product_description: "<?php echo $p['description']; ?>", product_image_url: '<?php echo $p['project_image_url']; ?>' });
      console.log(featured_projects)

    <?php } ?>

    function featurednext() {
      featuredIndex++;
      if (featuredIndex >= featured_projects.length) {
        featuredIndex = 0;
      }
      updateFeatured();
    }

    function featuredprevious() {
      featuredIndex--;
      if (featuredIndex < 0) {
        featuredIndex = featured_projects.length - 1;
      }
      updateFeatured();
    }

    function updateFeatured() {
      const featuredImage = document.querySelector(".featured-img");
      const featuredDescription = document.querySelector(".featured-description p");

      featuredImage.src = "<?php echo base_url(); ?>" + featured_projects[featuredIndex]['product_image_url'];
      featuredDescription.textContent = featured_projects[featuredIndex]['product_description'];
    }

    function toggle_text(index){
      let featured = document.getElementsByClassName('products-card');
      if(featured[index-1].style.height == 'auto'){
        featured[index-1].style.height = '400px';
      }else{
        featured[index-1].style.height = 'auto';
      }
    }
  </script>
</div>