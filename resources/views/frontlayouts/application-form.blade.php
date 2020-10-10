<div class="contact-page-section sec-spacer">
<div class="container">
<div class="contact-comment-section">
            <h3>Enter Your Details</h3>
            @include('layouts.message')
            <div id="form-messages"></div>
            <form id="contact-form" method="get" action="/create-application">
                <fieldset>
                    <div class="row">                                      
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>First Name*</label>
                                <input name="first_name" id="fname" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Last Name*</label>
                                <input name="last_name" id="lname" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email*</label>
                                <input name="email" id="email" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Programming Language *</label>
                                <input name="language" id="subject" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Other IT skill*</label>
                                <input name="others" id="email" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Git Link *</label>
                                <input name="git_link" id="subject" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-12 col-sm-12">    
                            <div class="form-group">
                                <label>Brief about you *</label>
                                <textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
                            </div>
                        </div>
                    </div>							        
                    <div class="form-group mb-0 text-center">
                        <input class="btn-send" type="submit" value="Submit Now">
                    </div>
                        
                </fieldset>
            </form>						
        </div>
    </div>
</div>
</div>
<!-- Contact Section End --> 