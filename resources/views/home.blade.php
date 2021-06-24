@extends('layout')

@section('content')
    <div id="main-feed" class="container sidebar-boxed" data-open-sidebar data-page-title="Timeline">

        <div class="toolbar-v1 is-narrow">
            <!-- Sidebar Trigger -->
            <div class="friendkit-hamburger sidebar-v1-trigger">
                <span class="menu-toggle has-chevron">
                    <span class="icon-box-toggle">
                        <span class="rotate">
                            <i class="icon-line-top"></i>
                            <i class="icon-line-center"></i>
                            <i class="icon-line-bottom"></i>
                        </span>
                    </span>
                </span>
            </div>
            <h1>Timeline</h1>
            <div class="controls">
                <div class="navbar-item is-icon drop-trigger">
                    <a class="icon-link is-friends" href="javascript:void(0);">
                        <i data-feather="heart"></i>
                        <span class="indicator"></span>
                    </a>
                </div>


                <div id="account-dropdown" class="navbar-item is-account drop-trigger has-caret">
                    <div class="user-image">
                        <img src="/assets/img/" data-demo-src="/assets/img/demo/groups/1.jpg" alt="">
                        <span class="indicator"></span>
                    </div>

                    <div class="nav-drop is-account-dropdown">
                        <div class="inner">
                            <div class="nav-drop-header">
                                <span class="username">Jenna Davis</span>
                                <label class="theme-toggle">
                                    <input type="checkbox">
                                    <span class="toggler">
                                        <span class="dark">
                                            <i data-feather="moon"></i>
                                        </span>
                                        <span class="light">
                                            <i data-feather="sun"></i>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            @if (Auth::guard('pet_owner')->check())
                                <div class="nav-drop-body account-items">
                                    <a id="profile-link" href="/profile" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/400x400"
                                                        data-demo-src="/assets/img/demo/groups/1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">

                                                <h3>{{ Auth::guard('pet_owner')->user()->name }}</h3>
                                                <small>Main account</small>
                                            </div>
                                            <div class="media-right">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    {{-- <a href="pages-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="/assets/img/avatars/hanzo.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Css Ninja</h3>
                                                <small>Company page</small>
                                            </div>
                                            <div class="media-right is-hidden">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="pages-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="/assets/img/icons/logos/fastpizza.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Fast Pizza</h3>
                                                <small>Company page</small>
                                            </div>
                                            <div class="media-right is-hidden">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="pages-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="/assets/img/icons/logos/slicer.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Slicer</h3>
                                                <small>Company page</small>
                                            </div>
                                            <div class="media-right is-hidden">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    <a href="options-settings.html" class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="settings"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Settings</h3>
                                                <small>Access widget settings.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="life-buoy"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Help</h3>
                                                <small>Contact our support.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="power"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Log out</h3>
                                                <small>Log out from your account.</small>
                                            </div>
                                        </div>
                                    </a> --}}
                                </div>
                            @elseif (Auth::guard('pet_owner')->check())
                                <div class="nav-drop-body account-items">
                                    <a id="profile-link" href="/profile" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/400x400"
                                                        data-demo-src="/assets/img/demo/groups/1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">

                                                <h3>{{ Auth::guard('funder')->user()->name }}</h3>
                                                <small>Main account</small>
                                            </div>
                                            <div class="media-right">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    {{-- <a href="pages-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="/assets/img/avatars/hanzo.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Css Ninja</h3>
                                                <small>Company page</small>
                                            </div>
                                            <div class="media-right is-hidden">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="pages-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="/assets/img/icons/logos/fastpizza.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Fast Pizza</h3>
                                                <small>Company page</small>
                                            </div>
                                            <div class="media-right is-hidden">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="pages-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="/assets/img/icons/logos/slicer.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>Slicer</h3>
                                                <small>Company page</small>
                                            </div>
                                            <div class="media-right is-hidden">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    <a href="options-settings.html" class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="settings"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Settings</h3>
                                                <small>Access widget settings.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="life-buoy"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Help</h3>
                                                <small>Contact our support.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="power"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Log out</h3>
                                                <small>Log out from your account.</small>
                                            </div>
                                        </div>
                                    </a> --}}
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content placeholders at page load -->
        <!-- /html/partials/global/placeload/feed-page/feed-menu-shadow-dom.html -->
        <!-- this holds the animated content placeholders that show up before content -->
        <div id="shadow-dom" class="view-wrap">
            <div class="columns">

                <div class="column is-8">

                    <!-- Placeload element -->
                    <div class="placeload compose-placeload">
                        <div class="header">
                            <div class="content-shape is-lg loads"></div>
                            <div class="content-shape is-lg loads"></div>
                            <div class="content-shape is-lg loads"></div>
                        </div>
                        <div class="body">
                            <div class="img loads"></div>
                            <div class="inner-wrap">
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Placeload element -->
                    <div class="placeload post-placeload">
                        <div class="header">
                            <div class="img loads"></div>
                            <div class="header-content">
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                        <div class="image-placeholder loads"></div>
                        <div class="placeholder-footer">
                            <div class="footer-block">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Placeload element -->
                    <div class="placeload post-placeload">
                        <div class="header">
                            <div class="img loads"></div>
                            <div class="header-content">
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                        <div class="image-placeholder loads"></div>
                        <div class="placeholder-footer">
                            <div class="footer-block">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Placeload element -->
                    <div class="placeload post-placeload">
                        <div class="header">
                            <div class="img loads"></div>
                            <div class="header-content">
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                        <div class="image-placeholder loads"></div>
                        <div class="placeholder-footer">
                            <div class="footer-block">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Placeload element -->
                    <div class="placeload post-placeload">
                        <div class="header">
                            <div class="img loads"></div>
                            <div class="header-content">
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                        <div class="image-placeholder loads"></div>
                        <div class="placeholder-footer">
                            <div class="footer-block">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column is-4">

                    <!-- Placeload element -->
                    <div class="placeload stories-placeload">
                        <div class="header">
                            <div class="content-shape loads"></div>
                        </div>
                        <div class="body">
                            <div class="flex-block">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="flex-block">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="flex-block">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="flex-block">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Placeload element -->
                    <div class="placeload mini-widget-placeload">
                        <div class="body">
                            <div class="inner-wrap">
                                <div class="img loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="button-shape loads"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Placeload element -->
                    <div class="placeload list-placeload">
                        <div class="header">
                            <div class="content-shape loads"></div>
                        </div>
                        <div class="body">
                            <div class="flex-block">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="flex-block">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="flex-block">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="flex-block">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Feed page main wrapper -->
        <div id="activity-feed" class="view-wrap true-dom is-hidden">
            <div class="columns">

                <!-- Middle column -->
                <div class="column is-8">

                    <!-- Publishing Area -->
                    <!-- /partials/pages/feed/compose-card.html -->
                    <div id="compose-card" class="card is-new-content">
                        <!-- Top tabs -->
                        <div class="tabs-wrapper">
                            <div class="tabs is-boxed is-fullwidth">
                                <ul>
                                    <li class="is-active">
                                        <a>
                                            <span class="icon is-small"><i data-feather="edit-3"></i></span>
                                            <span>Publish</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="modal-trigger" data-modal="albums-help-modal">
                                            <span class="icon is-small"><i data-feather="image"></i></span>
                                            <span>Albums</span>
                                        </a>
                                    </li>

                                    <!-- Close X button -->
                                    <li class="close-wrap">
                                        <span class="close-publish">
                                            <i data-feather="x"></i>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Tab content -->
                            <div class="tab-content">
                                <!-- Compose form -->
                                <div class="compose">
                                    <div class="compose-form">
                                        <img src="https://via.placeholder.com/300x300"
                                            data-demo-src="/assets/img/demo/groups/1.jpg" alt="">
                                        <div class="control">
                                            <textarea id="publish" class="textarea" rows="3"
                                                placeholder="Write something about you..."></textarea>
                                        </div>
                                    </div>

                                    <div id="feed-upload" class="feed-upload">

                                    </div>

                                    <div id="options-summary" class="options-summary"></div>


                                    <!-- /Tag friends suboption -->

                                    <!-- Activities suboption -->
                                    <div id="activities-suboption" class="is-autocomplete is-suboption is-hidden">
                                        <div id="activities-autocpl-wrapper" class="control has-margin">
                                            <input id="activities-autocpl" type="text" class="input"
                                                placeholder="What are you doing right now?">
                                            <div class="icon">
                                                <i data-feather="search"></i>
                                            </div>
                                            <div class="close-icon is-main">
                                                <i data-feather="x"></i>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /Activities suboption -->

                                    <!-- Location suboption -->
                                    <div id="location-suboption" class="is-autocomplete is-suboption is-hidden">
                                        <div id="location-autocpl-wrapper" class="control is-location-wrapper has-margin">
                                            <input id="location-autocpl" type="text" class="input"
                                                placeholder="Where are you now?">
                                            <div class="icon">
                                                <i data-feather="map-pin"></i>
                                            </div>
                                            <div class="close-icon is-main">
                                                <i data-feather="x"></i>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                                <!-- /Compose form -->

                                <!-- General extended options -->
                                <div id="extended-options" class="compose-options is-hidden">
                                    <div class="columns is-multiline is-full">
                                        <!-- Upload action -->
                                        <div class="column is-6 is-narrower">
                                            <div class="compose-option is-centered">
                                                <i data-feather="camera"></i>
                                                <span>Photo/Video</span>
                                                <input id="feed-upload-input-1" type="file" accept=".png, .jpg, .jpeg"
                                                    onchange="readURL(this)">
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <!-- /General extended options -->

                                <!-- General basic options -->
                                <div id="basic-options" class="compose-options">
                                    <!-- Upload action -->
                                    <div class="compose-option">
                                        <i data-feather="camera"></i>
                                        <span>Media</span>
                                        <input id="feed-upload-input-2" type="file" type="file" accept=".png, .jpg, .jpeg"
                                            onchange="readURL(this)">
                                    </div>
                                    <!-- Mood action -->

                                </div>
                                <!-- /General basic options -->

                                <!-- Hidden Options -->

                            </div>
                        </div>
                    </div>

                    <!-- POST #1 -->
                    <div id="feed-post-1" class="card is-post">
                        <!-- Main wrap -->
                        <div class="content-wrap">
                            <!-- Post header -->
                            <div class="card-heading">
                                <!-- User meta -->
                                <div class="user-block">
                                    <div class="image">
                                        <img src="https://via.placeholder.com/300x300"
                                            data-demo-src="/assets/img/demo/groups/1.jpg" data-user-popover="1" alt="">
                                    </div>
                                    <div class="user-info">
                                        <a href="#">Dan Walker</a>
                                        <span class="time">July 26 2018, 01:03pm</span>
                                    </div>
                                </div>
                                <!-- Right side dropdown -->
                                <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->

                            </div>
                            <!-- /Post header -->

                            <!-- Post body -->
                            <div class="card-body">
                                <!-- Post body text -->
                                <div class="post-text">
                                    <p>Yesterday with
                                        <a href="#">@Karen Miller</a> and
                                        <a href="#">@Marvin Stemperd</a> at the
                                        <a href="#">#Rock'n'Rolla</a> concert in LA. Was totally fantastic! People were
                                        really excited about this one!
                                    </p>
                                </div>
                                <!-- Featured image -->
                                <div class="post-image">
                                    <a data-fancybox="post1" data-lightbox-type="comments"
                                        data-thumb="/assets/img/demo/unsplash/1.jpg"
                                        href="https://via.placeholder.com/1600x900"
                                        data-demo-href="/assets/img/demo/unsplash/1.jpg">
                                        <img src="https://via.placeholder.com/1600x900"
                                            data-demo-src="/assets/img/demo/unsplash/1.jpg" alt="">
                                    </a>
                                    <!-- Action buttons -->
                                    <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                    <div class="like-wrapper">
                                        <a href="javascript:void(0);" class="like-button">
                                            <i class="mdi mdi-heart not-liked bouncy"></i>
                                            <i class="mdi mdi-heart is-liked bouncy"></i>
                                            <span class="like-overlay"></span>
                                        </a>
                                    </div>




                                </div>
                            </div>
                            <!-- /Post body -->

                            <!-- Post footer -->
                            <div class="card-footer">
                                <!-- Followers avatars -->
                                {{-- <div class="likers-group">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="/assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="/assets/img/avatars/david.jpg" data-user-popover="4" alt="">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="/assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="/assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
                                    </div> --}}
                                <!-- Followers text -->
                                {{-- <div class="likers-text">
                                        <p>
                                            <a href="#">Milly</a>,
                                            <a href="#">David</a>
                                        </p>
                                        <p>and 23 more liked this</p>
                                    </div> --}}
                                <!-- Post statistics -->
                                <div class="social-count">
                                    <div class="likes-count">
                                        <i data-feather="heart"></i>
                                        <span>27</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /Post footer -->
                        </div>
                        <!-- /Main wrap -->

                        <!-- Post #1 Comments -->

                        <!-- /Post #1 Comments -->
                    </div>
                    <!-- POST #1 -->


                </div>
                <!-- /Middle column -->

                <!-- Right side column -->
                <div class="column is-4">

                    <!-- Stories widget -->
                    <!-- /partials/widgets/stories-widget.html -->

                    <!-- Birthday widget -->
                    <!-- /partials/widgets/birthday-widget.html -->
                    <div class="card is-birthday-card has-background-image"
                        data-background="/assets/img/illustrations/cards/birthday-bg.svg">
                        <div class="card-heading">
                            <i data-feather="gift"></i>
                            <div class="dropdown is-spaced is-right dropdown-trigger is-light">
                                <div>
                                    <div class="button">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="clock"></i>
                                                <div class="media-content">
                                                    <h3>Remind me</h3>
                                                    <small>Remind me of this later today.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="message-circle"></i>
                                                <div class="media-content">
                                                    <h3>Message</h3>
                                                    <small>Send an automatic greeting message.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="trash-2"></i>
                                                <div class="media-content">
                                                    <h3>Remove</h3>
                                                    <small>Removes this widget from your feed.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                    <!-- Suggested friends widget -->
                    <!-- /partials/widgets/suggested-friends-1-widget.html -->

                    <!-- New job widget -->
                    <!-- /partials/widgets/new-job-widget.html -->
                    <div class="card is-new-job-card has-background-image"
                        data-background="/assets/img/illustrations/cards/job-bg.svg">
                        <div class="card-heading">
                            <i data-feather="briefcase"></i>
                            <div class="dropdown is-spaced is-right dropdown-trigger is-light">
                                <div>
                                    <div class="button">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="clock"></i>
                                                <div class="media-content">
                                                    <h3>Remind me</h3>
                                                    <small>Remind me of this later today.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="message-circle"></i>
                                                <div class="media-content">
                                                    <h3>Message</h3>
                                                    <small>Send an automatic congratz message.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="trash-2"></i>
                                                <div class="media-content">
                                                    <h3>Remove</h3>
                                                    <small>Removes this widget from your feed.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <!-- /Right side column -->
            </div>
        </div>

    </div>
@endsection
