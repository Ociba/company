<div class="rs-banner-section3">
        <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7">
              	<div class="countdown-part">
              	    {{--
					  <span class="sub-title">GET CONNECTED WITH US FOR IT SOLUTIONS</span>
              	    <h2 class="title">Send Us Message Now </h2>
					--}}
			   <div class="content-slider">
              <div class="slider">
                <div class="mask">
                  <ul>
                    <li class="anim1">
                      <div class="quote">Hello, this is a quote from a person.</div>
                      {{--<div class="source">- Person</div>--}}
                    </li>
                    <li class="anim2">
                      <div class="quote">Hello, this is a quote from another person.</div>
                    </li>
                    <li class="anim3">
                      <div class="quote">Hello, this is a quote from an animal.</div>
                    </li>
                    <li class="anim4">
                      <div class="quote">Hello, this is a quote from a plant.</div>
                    </li>
                    <li class="anim5">
                      <div class="quote">How do ya like that.</div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
              	    <div class="counter-wrap">
              	        <div class="timecounter-inner"> 
              	            <div class="CountDownTimer2" data-date="2020-12-20 23:59:59"></div>
              	        </div>
              	    </div>
              	</div>
              </div>  
              <div class="col-lg-5 md-pt-40">
              	<div class="register-form">
              	    <div class="form-title text-center">
              	         <h4 class="title">Send Us Your Message<br>
              	          And we get in touch. For further<br>
              	           discussion basing on IT.</h4>
					  </div>
					  @include('layouts.message')
              	     <div class="form-group text-center">
              	         <form id="contact-form" class="contact-form" method="get" action="/create-message">
              	             <div class="row">
              	                 <div class="col-lg-12">
              	                      <input class="from-control" name="name" type="text" placeholder="Name" id="name" required="required">
              	                   
              	                 </div>
              	                 <div class="col-lg-12">
              	                         <input class="from-control" name="email" type="email" placeholder="E-Mail" id="email" required="required">
              	                 </div>
              	                 <div class="col-lg-12">
              	                         <input class="from-control" name="number" type="text" placeholder="Phone Number" id="phone_number" required="required">
              	                 </div>
								   <div class="col-lg-12">
								        <textarea cols="" rows="4" id="message" name="message" placeholder="Write text here" class="textarea form-control"></textarea>
              	                 </div>
              	                 <div class="col-lg-12 mt-2">
              	                    <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit">
              	                 </div>
              	             </div>
              	         </form>
              	     </div>
              	 </div>
              </div>
            </div>
        </div>
	</div>