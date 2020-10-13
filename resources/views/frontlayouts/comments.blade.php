<!-- Blog Single Start Here -->
<div class="single-blog-details sec-spacer pt-0 mb-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="author-comment">
                    <h3 class="title-bg text-center">Recent Comments</h3>
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="image-comments"><img src="images/blog-details/comment.png" alt="Blog Details photo"></div>
                                </div>
                                @foreach($comment_to_be_approved as $comment)
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <span class="reply"><span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> {{ date('F d, Y', strtotime($comment->created_at))}}</span></span>
                                    <div class="dsc-comments">
                                        <h4>{{$comment->last_name}} {{$comment->first_name}}</h4>                                            
                                        <p>{{$comment->comment}}</p>
                                        <a href="#"> Reply</a>
                                        <p class="text-muted font-weight-bold">{{$comment->reply}}</p>
                                        <p class="text-muted font-weight-bold"><i class="fa fa-user"></i> Admin JaaJa</p>
                                    </div>    
                                </div>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div><!-- .author-comment End --> 
                <div class="leave-comments-area">
                    <form action="/create-comment" method="get">
                        <fieldset>
                            <h4 class="title-bg">Leave Comments</h4>   
                            <div class="row">                       
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Fast Name*</label>
                                        <input type="text" class="form-control" name="first_name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                        <input type="text" class="form-control" name="last_name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Contact</label>
                                        <input type="text" class="form-control" name="contact" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-12 col-sm-12">    
                                    <div class="form-group">
                                        <label>Your comment here...</label>
                                        <textarea cols="40" rows="10" class="textarea form-control" name="comment" required></textarea>
                                    </div>
                                </div>
                            </div>     
                                <div class="form-group text-center">
                                    <button class="btn-send" type="submit">Post Comment</button>
                                </div>   
                        </fieldset>
                        </form>
                </div><!-- .leave-comments-area end -->                                 
            </div>             
        </div>
    </div>
</div>
<!-- Blog Single End  --> 