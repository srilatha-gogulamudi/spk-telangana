<?php
 $activePage = basename($_SERVER['PHP_SELF'], ".php");

    include_once 'components/header.php';
?>


<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0 position-relative">
                <div class="d-flex flex-column align-items-center justify-content-center">
                  <img src="assets/img/banner.png" class="w-100" alt="logo">
                </div>
                <div class="position-absolute text-white col-md-12 d-md-flex banner-mobile-text custom-mt-n5">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                    <h5 class="custom-ls-1 mb-4 fw-normal text-white mobile-none">with the divine blessings of The Scientific Saint his Holiness</h5>
                    <h1 class="fw-bold mb-0 mt-2 fs-48 text-white">SRI SRI SRI GURU</h1>
                    <h1 class="fw-bold mt-0 fs-48 text-white">VISWASPHOORTHI </h1>
                    <h5 class="mt-4 text-white sub-title-m">– The Sphoorthi Kutumbam</h5>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-9 mx-auto my-4 mt-5">
              <div class="about px-md-5 mx-md-5 text-center py-4">
                <h1 class="fw-bold mb-4">Sphoorthi Kutumbam</h1>
                <p class="custm-lh-1 fw-500">Sphoorthi Kutumbam strives to bring together all disciples and followers of The Scientific Saint His
                  Holiness Sri Sri Sri Guru ViswaSphoorthi and be united as One Family</p>
              </div>
          </div>
      </div>
      <div class="row mb-5 mt-4">
        <div class="col-md-11 mx-auto text-center">
          <div class="row mb-md-5">
            <div class="col col-md-4 px-md-4 m-mb-2 mt-md-5">
              <div class="card p-0 border-0 cards-bg border-radius-sm shadow br-23 card-out-border">
                <img src="assets/img/activities.png" alt="activities">
                <h5 class="fw-bold text-center my-0 py-3 text-uppercase">ACTIVITIES</h5>
              </div>
            </div>
            <div class="col col-md-4 px-md-4 m-mb-2">
              <div class="card p-0 border-0 cards-bg border-radius-sm shadow br-23">
                <img src="assets/img/viswa_sph.png" alt="activities">
                <h5 class="fw-bold text-center my-0 py-3 text-uppercase">THE SCIENTIFIC SAINT</h5>
              </div>
            </div>
            <div class="col col-md-4 px-md-4 m-mb-2 mt-md-5">
              <div class="card p-0 border-0 cards-bg border-radius-sm shadow br-23 card-out-border">
                <img src="assets/img/live-events.png" alt="activities">
                <h5 class="fw-bold text-center my-0 py-3 text-uppercase">Prastana Sadhana</h5>
              </div>
            </div>
          </div>
          <div class="row mt-md-5 pt-md-5">
            <div class="col-md-12 mt-5">
              <a class="btn btn-outline-danger border-danger color-danger rounded-pill px-5 py-3 fw-bold fs-6" href="allevents" role="button">VIEW ALL ACTIVITIES</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center my-5">
        <div class="col-md-12 px-0">
          <div class="register_bg px-md-5 py-md-5 def_p-1">
            <div class="col-md-8 col-12 text-center m-auto py-5">
            <h1 class="fw-bold mb-4">Sphoorthi Kutumbam Membership</h1>
            <p class="custom-lh-2 py-4">Sphoorthi Kutumbam is offering membership of various choices to the disciples, followers and for those who wish to know more and follow the teachings of His Holiness and thus be part of the Sphoorthi Kutumbam.
            </p>
            <a class="btn bg-danger-1 fs-14 rounded-pill text-white py-2 px-4 fs-6 fw-500" href="membership" role="button">REGISTER NOW</a>
            </div>

          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-7 mx-auto text-center">
          <h1 class="fw-bold mb-4">Our Testimonials</h1> 
            <div class="card bg-white border-0 mx-auto shadow mx-5 py-5 br-16">
              <p><img src="assets/img/femaleuser.png" alt="user" width="120px"></p>
              <h6 class="ls-1 fw-bold text-uppercase mb-2">KUSUM RASALA</h6>
              <p class="custom-lh-2 px-5 def_p-1">
                <span class="d-block text-center">A NEW MEANING TO MY LIFE</span>
It has taken away lot of negativity and added peace, joy and happiness in life’s existence.
We have felt less restless, more energetic, positive and peaceful. There is a beautiful feeling of inner joy. The perspective of seeing things has changed, social relations have improved a lot and last but not the least, we feel so blessed and the joy is indescribable. 
With all our heart-felt gratitude we bow down to the Lotus Feet of our Divine Mother. 


              </p>
            </div>  
        </div>
      </div>
      
<?php
    include_once 'components/footer.php';
?>