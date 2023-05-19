@extends('index')
@section('content')
 
<!-- ====== Contact Start ====== -->
    <section id="contact" class="ud-contact">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-8 col-lg-7">
            <div class="ud-contact-content-wrapper">
              <div class="ud-contact-title">
                <span>CONTACT US</span>
                <h2>
                  Let’s talk about <br />
                  Love to hear from you!
                </h2>
              </div>
              <div class="ud-contact-info-wrapper">
                <div class="ud-single-info">
                  <div class="ud-info-icon">
                    <i class="lni lni-map-marker"></i>
                  </div>
                  <div class="ud-info-meta">
                    <h5>Our Location</h5>
                    <p>Royal Oak, Auckland</p>
                  </div>
                </div>
                <div class="ud-single-info">
                  <div class="ud-info-icon">
                    <i class="lni lni-envelope"></i>
                  </div>
                  <div class="ud-info-meta">
                    <h5>How Can We Help?</h5>
                    <p>info@security.com</p>
                    <p>contact@security.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div
              class="ud-contact-form-wrapper wow fadeInUp"
              data-wow-delay=".2s">
              <h3 class="ud-contact-form-title">Send us a Message</h3>
              <form action="{{url('/')}}/email" method="POST" class="ud-contact-form">
                @csrf
                <div class="ud-form-group">
                  <label for="fullName">Full Name*</label>
                  <input type="text" name="txtName" id="txtName" placeholder="John Smith"/>
                </div>
                <div class="ud-form-group">
                  <label for="email">Email*</label>
                  <input type="email" name="txtEmail" id="txtEmail" placeholder="example@yourmail.com"/>
                </div>
                <div class="ud-form-group">
                  <label for="phone">Phone*</label>
                  <input type="text" name="txtPhone" id="txtPhone" placeholder="+64 XXX XXX XXX"/>
                </div>
                <div class="ud-form-group">
                  <label for="message">Message*</label>
                  <textarea name="txtMsg" id="txtMsg" rows="1" placeholder="type your message here"></textarea>
                </div>
                <div class="ud-form-group mb-0">
                 <button type="submit" class="ud-main-btn" id="btn">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#btn').on("click",function(){
          var name= $("#txtName").val();
          var mail= $("#txtEmail").val();
          var phone= $("#txtPhone").val();
          var qry= $("#txtMsg").val();
          var data = {name:name,mail:mail,phone:phone,qry:qry};
          alert(qry);
          $.ajax({
            type: "GET",
            url: "/email",
            data: JSON.stringify(data),
            dataType: "json",
            success: function (res) {
              response.JSON.
            },
          });
        });
      });
     </script>
    <!-- ====== Contact End ====== -->
    @endsection
