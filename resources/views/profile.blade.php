@extends('layout')

@section('content')
        <section class="banner_area profile_banner">
            <div class="profiles_inners">
                <div class="container">
                    <div class="profile_content">
                        <div class="user_img">
                            <img class="img-circle" src="/assets/img/members/single_members.png" alt="">
                        </div>
                        <div class="user_name">
                            <h3>Lena Adms</h3>
                            <h4>26 years old</h4>
                            <ul>
                                <li><a href="#">Frace, Paris</a></li>
                                <li class="dropdown extara">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">80% Match</a>
                                    <ul class="dropdown-menu">
                                       <li>Match</li>
                                        <li>
                                            <div class="circle1">
                                                <strong></strong>
                                            </div>
                                            <h4>Match</h4>
                                        </li>
                                        <li>
                                            <div class="circle2">
                                                <strong></strong>
                                            </div>
                                            <h4>Enemy</h4>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="right_side_content">
                             <ul class="nav navbar-nav">
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Another action</a></li>
                                  </ul>
                                </li>
                              </ul>
                            <button type="submit" value="LogIn" class="btn form-control login_btn">Add Friend <img src="/assets/img/user.png" alt=""></button>
                            <button type="submit" value="LogIn" class="btn form-control login_btn">Chat Now <img src="/assets/img/comment.png" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Blog grid Area =================-->
        <section class="blog_grid_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="members_profile_inners">
                            <ul class="nav nav-tabs profile_menu" role="tablist">
                                <li role="presentation"><a href="#activity" aria-controls="activity" role="tab" data-toggle="tab">Activity</a></li>
                                <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                                <li role="presentation"><a href="#sites" aria-controls="sites" role="tab" data-toggle="tab">Sites</a></li>
                                <li role="presentation"><a href="#friend" aria-controls="friend" role="tab" data-toggle="tab">Friend (260)</a></li>
                                <li role="presentation"><a href="#group" aria-controls="group" role="tab" data-toggle="tab">Groups (3)</a></li>
                                <li role="presentation"><a href="#forums" aria-controls="forums" role="tab" data-toggle="tab">Forums</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade" id="activity">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Female</a></li>
                                            <li><a href="#">26 years old</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Paris</a></li>
                                            <li><a href="#">16 December 1990</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Know</a></li>
                                            <li><a href="#">Interests</a></li>
                                            <li><a href="#">Smoking</a></li>
                                            <li><a href="#">Eye Color</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Graduate Degree</a></li>
                                            <li><a href="#">French, Russian</a></li>
                                            <li><a href="#">Billiards</a></li>
                                            <li><a href="#">No</a></li>
                                            <li><a href="#">Brown</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane active fade in" id="profile">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Female</a></li>
                                            <li><a href="#">26 years old</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Paris</a></li>
                                            <li><a href="#">16 December 1990</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Know</a></li>
                                            <li><a href="#">Interests</a></li>
                                            <li><a href="#">Smoking</a></li>
                                            <li><a href="#">Eye Color</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Graduate Degree</a></li>
                                            <li><a href="#">French, Russian</a></li>
                                            <li><a href="#">Billiards</a></li>
                                            <li><a href="#">No</a></li>
                                            <li><a href="#">Brown</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="sites">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Female</a></li>
                                            <li><a href="#">26 years old</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Paris</a></li>
                                            <li><a href="#">16 December 1990</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Know</a></li>
                                            <li><a href="#">Interests</a></li>
                                            <li><a href="#">Smoking</a></li>
                                            <li><a href="#">Eye Color</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Graduate Degree</a></li>
                                            <li><a href="#">French, Russian</a></li>
                                            <li><a href="#">Billiards</a></li>
                                            <li><a href="#">No</a></li>
                                            <li><a href="#">Brown</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="friend">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Female</a></li>
                                            <li><a href="#">26 years old</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Paris</a></li>
                                            <li><a href="#">16 December 1990</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Know</a></li>
                                            <li><a href="#">Interests</a></li>
                                            <li><a href="#">Smoking</a></li>
                                            <li><a href="#">Eye Color</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Graduate Degree</a></li>
                                            <li><a href="#">French, Russian</a></li>
                                            <li><a href="#">Billiards</a></li>
                                            <li><a href="#">No</a></li>
                                            <li><a href="#">Brown</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="group">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Female</a></li>
                                            <li><a href="#">26 years old</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Paris</a></li>
                                            <li><a href="#">16 December 1990</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Know</a></li>
                                            <li><a href="#">Interests</a></li>
                                            <li><a href="#">Smoking</a></li>
                                            <li><a href="#">Eye Color</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Graduate Degree</a></li>
                                            <li><a href="#">French, Russian</a></li>
                                            <li><a href="#">Billiards</a></li>
                                            <li><a href="#">No</a></li>
                                            <li><a href="#">Brown</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="forums">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Female</a></li>
                                            <li><a href="#">26 years old</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Paris</a></li>
                                            <li><a href="#">16 December 1990</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Know</a></li>
                                            <li><a href="#">Interests</a></li>
                                            <li><a href="#">Smoking</a></li>
                                            <li><a href="#">Eye Color</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Graduate Degree</a></li>
                                            <li><a href="#">French, Russian</a></li>
                                            <li><a href="#">Billiards</a></li>
                                            <li><a href="#">No</a></li>
                                            <li><a href="#">Brown</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="members_about_box">
                                <h4>About me</h4>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.</p>
                            </div>
                            <div class="members_about_box">
                                <h4>Looking For</h4>
                                <h5>Man, 27 years and older</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget photo_widget">
                                <div class="s_title">
                                    <h4>Photo</h4>
                                    <img src="/assets/img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#"><img src="/assets/img/photo/photo-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/assets/img/photo/photo-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/assets/img/photo/photo-3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/assets/img/photo/photo-4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/assets/img/photo/photo-5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/assets/img/photo/photo-6.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/assets/img/photo/photo-7.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/assets/img/photo/photo-8.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/assets/img/photo/photo-9.jpg" alt=""></a></li>
                                </ul>
                            </aside>
                            <aside class="s_widget recent_post_widget">
                                <div class="s_title">
                                    <h4>Recent Post</h4>
                                    <img src="/assets/img/widget-title-border.png" alt="">
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="/assets/img/blog/recent-post/recent-post-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Blog Image Post</h4>
                                        <a href="#">14 Sep, 2016 at 08:00 Pm</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="/assets/img/blog/recent-post/recent-post-2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Blog Standard Post</h4>
                                        <a href="#">14 Sep, 2016 at 08:00 Pm</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="/assets/img/blog/recent-post/recent-post-3.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Blog Image Post</h4>
                                        <a href="#">14 Sep, 2016 at 08:00 Pm</a>
                                    </div>
                                </div>
                            </aside>
                            <aside class="s_widget social_widget">
                                <div class="s_title">
                                    <h4>Tags</h4>
                                    <img src="/assets/img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
