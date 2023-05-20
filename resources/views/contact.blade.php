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
                  <input type="text" name="txtName" id="txtName" placeholder="John Smith" value="{{old('txtName')}}"/>
                  <span class="text-danger">
                    @error('txtName')
                      {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="ud-form-group">
                  <label for="email">Email*</label>
                  <input type="email" name="txtEmail" id="txtEmail" placeholder="example@yourmail.com" value="{{old('txtEmail')}}"/>
                  <span class="text-danger">
                    @error('txtEmail')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="ud-form-group">
                  <label for="phone">Phone*</label>
                  <input type="text" name="txtPhone" id="txtPhone" placeholder="0 XXX XXX XXX" value="{{old('txtPhone')}}"/>
                  <span class="text-danger">
                    @error('txtPhone')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="ud-form-group">
                  <label for="message">Message*</label>
                  <textarea name="txtMsg" id="txtMsg" rows="1" placeholder="type your message here">{{old('txtMsg')}}</textarea>
                  <span class="text-danger">
                    @error('txtMsg')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="ud-form-group mb-0">
                 <button type="submit" class="ud-main-btn" name="btnSubmit" id="btn">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- ====== Contact End ====== -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    @endsection
