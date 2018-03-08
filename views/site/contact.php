<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?> 
<section class="g-brd-bottom g-brd-gray-light-v4 g-py-30">
        <div class="container">
          <ul class="u-list-inline">
            <li class="list-inline-item g-mr-5">
              <a class="u-link-v5 g-color-text" href="#!">Home</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-mr-5">
              <a class="u-link-v5 g-color-text" href="#!">Pages</a>
              <i class="g-color-gray-light-v2 g-ml-5 fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item g-color-primary">
              <span>Contact Us</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- End Breadcrumbs --> 

      <div class="container g-py-100">
        <!-- Contact Info -->
        <div class="row g-mb-100">
          <div class="col-md-6 col-lg-4 mx-auto g-py-15">
            <!-- Media -->
            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-40">
              <div class="d-flex g-mr-30">
                <i class="d-inline-block g-color-primary g-font-size-40 g-pos-rel g-top-3 icon-communication-062 u-line-icon-pro"></i>
              </div>
              <div class="media-body">
                <span class="d-block g-font-weight-500 g-font-size-default text-uppercase mb-2">Phone Numbers</span>
                <ul class="list-unstyled mb-0">
                  <li class="d-block g-color-gray-dark-v4">+(01) 05-682-0355</li>
                  <li class="d-block g-color-gray-dark-v4">+(01) 95-814-8535</li>
                </ul>
              </div>
            </div>
            <!-- End Media -->
          </div>

          <div class="col-md-6 col-lg-4 mx-auto g-py-15">
            <!-- Media -->
            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-40">
              <div class="d-flex g-mr-30">
                <i class="d-inline-block g-color-primary g-font-size-40 g-pos-rel g-top-3 icon-real-estate-027 u-line-icon-pro"></i>
              </div>
              <div class="media-body">
                <span class="d-block g-font-weight-500 g-font-size-default text-uppercase mb-2">Location</span>
                <span class="d-block g-color-gray-dark-v4">972 Sylvan Street South Angelina, NL S0B2V9</span>
              </div>
            </div>
            <!-- End Media -->
          </div>

            <!-- Media -->
          <div class="col-md-6 col-lg-4 mx-auto g-py-15">
            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-40">
              <div class="d-flex g-mr-30">
                <i class="d-inline-block g-color-primary g-font-size-40 g-pos-rel g-top-3 icon-hotel-restaurant-249 u-line-icon-pro"></i>
              </div>
              <div class="media-body text-left">
                <span class="d-block g-font-weight-500 g-font-size-default text-uppercase mb-2">Office Hours</span>
                <ul class="list-unstyled mb-0">
                  <li class="d-block g-color-gray-dark-v4">Mon - Fri: 09AM to 06PM</li>
                  <li class="d-block g-color-gray-dark-v4">Sat - Sun: 10AM to 04PM</li>
                </ul>
              </div>
            </div>
            <!-- End Media -->
          </div>
        </div>
        <!-- End Contact Info -->

        <div class="g-max-width-645 text-center mx-auto g-mb-70">
          <h2 class="h1 mb-3">Contact Us</h2>
          <p class="g-font-size-17 mb-0">Fill up the form and hit the "Send Message". One of our representatives will get back to you as soon as possible.</p>
        </div>

        <!-- Contact Form -->
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <form>
              <div class="row">
                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded g-py-13 g-px-15" type="text" placeholder="Name">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded g-py-13 g-px-15" type="email" placeholder="Email">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded g-py-13 g-px-15" type="text" placeholder="Subject">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded g-py-13 g-px-15" type="tel" placeholder="Phone">
                </div>

                <div class="col-md-12 form-group g-mb-40">
                  <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover g-resize-none rounded g-py-13 g-px-15" rows="7" placeholder="Message"></textarea>
                </div>
              </div>

              <div class="text-center">
                <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
        <!-- End Contact Form -->
      </div> 
      <div id="GMapCustomized-light">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2254.602055999686!2d13.075267015421623!3d55.59153491188637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4653a18bcd3e149b%3A0x5cf4b4eda7d483bd!2sTaxusgatan+2%2C+212+32+Malm%C3%B6%2C+Sweden!5e0!3m2!1sen!2snp!4v1514972600510" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>