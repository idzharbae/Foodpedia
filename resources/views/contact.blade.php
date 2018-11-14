<div id="contact" class="light-wrapper">
        <section class="ss-style-top"></section>
      <div class="container inner">
        <div class="section-header">
          <h2 class="section-title text-center">Contact Us</h2>
          <p class="lead main text-center">Please don't hestitate to contact us</p>
        </div>

        <div class="container">
          <div class="form">
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
              </div>

              <div class="form-group col-md-12">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-12">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <button type="submit" class="btn btn-danger btn-lg">Send Message</button>
                </div>
              </div>

            </form>
            <br>
          </div>
        </div>
      </div>

        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #story -->
