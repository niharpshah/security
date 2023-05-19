@extends('index')
@section('content')
    <!-- ====== Hero Start ====== -->
    <section class="ud-hero" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
              <h1 class="ud-hero-title">
                Want Security Services?
              </h1>
              <p class="ud-hero-desc">
                Welcome to XYZ Securities. All solutions for your security requirments.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Hero End ====== -->
    <!-- ====== FAQ Start ====== -->
    <section id="faq" class="ud-faq">
      <div class="shape">
        <img src="assets/images/faq/shape.svg" alt="shape" />
      </div>
      <div class="container">
      <div class="row">
          <div class="col">
            <div class="ud-section-title" style="width: auto;">
              <h2>Who are the people keeping you safe?</h2>
              <p>
              Our security personnel are recruited and trained against a carefully designed range of core competencies. Each person undergoes a comprehensive selection process, which may include police checks, literacy and numeracy testing, reference checking and probity clearance.
              </p>
              <br/>
              <p>
              We pride ourselves on selecting elite individuals who display flair and a high level of perception.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
              <div class="accordion">
                <button
                  class="ud-faq-btn collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne">
                  <span class="icon flex-shrink-0">
                    <i class="lni lni-key"></i>
                  </span>
                  <span><strong>Access Control</strong></span>
                </button>
                <div id="collapseOne" class="accordion-collapse collapse">
                  <div class="ud-faq-body">
                  We monitor and despatch resources in response to alarm activity nationally interacting with government first responders.
                  </div>
                </div>
              </div>
            </div>
            <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
              <div class="accordion">
                <button
                  class="ud-faq-btn collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo">
                  <span class="icon flex-shrink-0">
                    <i class="lni lni-alarm"></i>
                  </span>
                  <span><strong>Alarm Monitoring</strong></span>
                </button>
                <div id="collapseTwo" class="accordion-collapse collapse">
                  <div class="ud-faq-body">
                  We monitor and despatch resources in response to alarm activity nationally interacting with government first responders.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
              <div class="accordion">
                <button
                  class="ud-faq-btn collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFive">
                  <span class="icon flex-shrink-0">
                  <i class="lni lni-car-alt"></i>
                  </span>
                  <span><strong>Mobile Patrols</strong></span>
                </button>
                <div id="collapseFive" class="accordion-collapse collapse">
                  <div class="ud-faq-body">
                  We provide timely responses to emergency situations both through Mobile Patrols and rapid guarding deployment.
                  </div>
                </div>
              </div>
            </div>
            <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
              <div class="accordion">
                <button
                  class="ud-faq-btn collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseSix">
                  <span class="icon flex-shrink-0">
                  <i class="lni lni-protection"></i>
                  </span>
                  <span><strong>Security Personnel</strong></span>
                </button>
                <div id="collapseSix" class="accordion-collapse collapse">
                  <div class="ud-faq-body">
                  We provide specialised security personnel to ensure your staff and guests are protected from all threats.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== FAQ End ====== -->
    @endsection
