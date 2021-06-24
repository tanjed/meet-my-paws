<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from friendkit.cssninja.io/sidebar-v1-feed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 05:12:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
@include('includes.head')

<body>

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="app-overlay is-sidebar-v1"></div>

    @include('includes.sidebar')
    <div class="view-wrapper is-sidebar-v1 is-fold">



        <!-- Container -->
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
                @yield('content')
            </div>


        <div id="albums-help-modal" class="modal albums-help-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">

                <div class="card">
                    <div class="card-heading">
                        <h3>Add Photos</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                    <i data-feather="x"></i>
                                </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="content-block is-active">
                            <img src="/assets/img/illustrations/cards/albums.svg" alt="">
                            <div class="help-text">
                                <h3>Manage your photos</h3>
                                <p>Lorem ipsum sit dolor amet is a dummy text used by the typography industry and the web industry.</p>
                            </div>
                        </div>

                        <div class="content-block">
                            <img src="/assets/img/illustrations/cards/upload.svg" alt="">
                            <div class="help-text">
                                <h3>Upload your photos</h3>
                                <p>Lorem ipsum sit dolor amet is a dummy text used by the typography industry and the web industry.</p>
                            </div>
                        </div>

                        <div class="slide-dots">
                            <div class="dot is-active"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="action">
                            <button type="button" class="button is-solid accent-button next-modal raised" data-modal="albums-modal">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Album upload modal -->
        <!-- /partials/pages/feed/modals/albums-modal.html -->
        <div id="albums-modal" class="modal albums-modal is-xxl has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">

                <div class="card">
                    <div class="card-heading">
                        <h3>New album</h3>
                        <div class="button is-solid accent-button fileinput-button">
                            <i class="mdi mdi-plus"></i>
                            Add pictures/videos
                        </div>

                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                    <i data-feather="x"></i>
                                </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="left-section">
                            <div class="album-form">
                                <div class="control">
                                    <input type="text" class="input is-sm no-radius is-fade" placeholder="Album name">
                                    <div class="icon">
                                        <i data-feather="camera"></i>
                                    </div>
                                </div>
                                <div class="control">
                                    <textarea class="textarea is-fade no-radius is-sm" rows="3" placeholder="describe your album ..."></textarea>
                                </div>
                                <div class="control">
                                    <input type="text" class="input is-sm no-radius is-fade" placeholder="Place">
                                    <div class="icon">
                                        <i data-feather="map-pin"></i>
                                    </div>
                                </div>
                            </div>

                            <div id="album-date" class="album-date">
                                <div class="head">
                                    <h4>Change the date</h4>
                                    <button type="button" class="button is-solid dark-grey-button icon-button">
                                        <i data-feather="plus"></i>
                                    </button>
                                </div>

                                <p>Set a date for your album. You can always change it later.</p>
                                <div class="control is-hidden">
                                    <input id="album-datepicker" type="text" class="input is-sm is-fade" placeholder="Select a date">
                                    <div class="icon">
                                        <i data-feather="calendar"></i>
                                    </div>
                                </div>
                            </div>

                            <div id="tagged-in-album" class="tagged-in-album">
                                <div class="head">
                                    <h4>Tag friends in this album</h4>
                                    <button type="button" class="button is-solid dark-grey-button icon-button">
                                        <i data-feather="plus"></i>
                                    </button>
                                </div>

                                <p>Tag friends in this album. Tagged friends can see photos they are tagged in.</p>
                                <div class="field is-autocomplete is-hidden">
                                    <div class="control">
                                        <input id="create-album-friends-autocpl" type="text" class="input is-sm is-fade" placeholder="Search for friends">
                                        <div class="icon">
                                            <i data-feather="search"></i>
                                        </div>
                                    </div>
                                </div>

                                <div id="album-tag-list" class="album-tag-list"></div>

                            </div>

                            <div class="shared-album">
                                <div class="head">
                                    <h4>Allow friends to add photos</h4>
                                    <div class="basic-checkbox">
                                        <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                                        <label for="styled-checkbox-1"></label>
                                    </div>
                                </div>

                                <p>Tagged friends will be able to share content inside this album.</p>
                            </div>

                        </div>
                        <div class="right-section has-slimscroll">

                            <div class="modal-uploader">
                                <div id="actions" class="columns is-multiline no-mb">
                                    <div class="column is-12">
                                        <span class="button has-icon is-solid grey-button fileinput-button">
                                                <i data-feather="plus"></i>
                                            </span>
                                        <button type="submit" class="button start is-hidden">
                                            <span>Upload</span>
                                        </button>
                                        <button type="reset" class="button is-solid grey-button cancel">
                                            <span>Clear all</span>
                                        </button>
                                        <span class="file-count">
                                                <span id="modal-uploader-file-count">0</span> file(s) selected
                                        </span>
                                    </div>

                                    <div class="column is-12 is-hidden">
                                        <!-- The global file processing state -->
                                        <div class="fileupload-process">
                                            <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="columns is-multiline" id="previews">

                                    <div id="template" class="column is-4 is-template">
                                        <div class="preview-box">
                                            <!-- This is used as the file preview template -->
                                            <div class="remove-button" data-dz-remove>
                                                <i class="mdi mdi-close"></i>
                                            </div>
                                            <div>
                                                <span class="preview"><img src="https://via.placeholder.com/120x120" data-dz-thumbnail alt=""/></span>
                                            </div>
                                            <div class="preview-body">
                                                <div class="item-meta">
                                                    <div>
                                                        <p class="name" data-dz-name></p>
                                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                                    </div>
                                                    <small class="size" data-dz-size></small>
                                                </div>
                                                <div class="upload-item-progress">
                                                    <div class="progress active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                        <div class="progress-bar progress-bar-success" data-dz-uploadprogress></div>
                                                    </div>
                                                </div>
                                                <div class="upload-item-description">
                                                    <div class="control">
                                                        <textarea class="textarea is-small is-fade no-radius" rows="4" placeholder="Describe this photo ..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="upload-item-actions is-hidden">
                                                    <button class="button start is-hidden">
                                                        <span>Start</span>
                                                    </button>
                                                    <button data-dz-remove class="button cancel is-hidden">
                                                        <span>Cancel</span>
                                                    </button>
                                                    <button data-dz-remove class="button delete is-hidden">
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!-- Dropdown menu -->
                        <div class="dropdown is-up is-spaced is-modern is-neutral is-right dropdown-trigger">
                            <div>
                                <button class="button" aria-haspopup="true">
                                    <i class="main-icon" data-feather="smile"></i>
                                    <span>Friends</span>
                                    <i class="caret" data-feather="chevron-down"></i>
                                </button>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="#" class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="globe"></i>
                                            <div class="media-content">
                                                <h3>Public</h3>
                                                <small>Anyone can see this publication.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="users"></i>
                                            <div class="media-content">
                                                <h3>Friends</h3>
                                                <small>only friends can see this publication.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="user"></i>
                                            <div class="media-content">
                                                <h3>Specific friends</h3>
                                                <small>Don't show it to some friends.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="lock"></i>
                                            <div class="media-content">
                                                <h3>Only me</h3>
                                                <small>Only me can see this publication.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="button is-solid accent-button close-modal">Create album</button>
                    </div>
                </div>
            </div>
        </div>




        <!-- Share from feed modal -->
        <!-- /partials/pages/feed/modals/share-modal.html -->

        <!-- No Stream modal -->
        <!-- /partials/pages/feed/modals/no-stream-modal.html -->
        <div id="no-stream-modal" class="modal no-stream-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">

                <div class="card">
                    <div class="card-heading">
                        <h3></h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                    <i data-feather="x"></i>
                                </span>
                        </div>
                    </div>
                    <div class="card-body has-text-centered">

                        <div class="image-wrap">
                            <img src="/assets/img/illustrations/characters/no-stream.svg" alt="">
                        </div>

                        <h3>Streaming Disabled</h3>
                        <p>Streaming is not allowed from mobile web. Please use our mobile apps for mobile streaming.</p>

                        <div class="action">
                            <a href="index.html#demos-section" class="button is-solid accent-button raised is-fullwidth">Got It</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google places Lib -->
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyAGLO_M5VT7BsVdjMjciKoH1fFJWWdhDPU&amp;libraries=places"></script>
    </div>


    <!--Load Mapbox-->

    <!-- Concatenated js plugins and jQuery -->
    <script src="/assets/js/app.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="/assets/data/tipuedrop_content.js"></script>

    <!-- Core js -->
    <script src="/assets/js/global.js"></script>

    <!-- Navigation options js -->
    <script src="/assets/js/navbar-v1.js"></script>
    <script src="/assets/js/navbar-v2.js"></script>
    <script src="/assets/js/navbar-mobile.js"></script>
    <script src="/assets/js/navbar-options.js"></script>
    <script src="/assets/js/sidebar-v1.js"></script>

    <!-- Core instance js -->
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/chat.js"></script>
    <script src="/assets/js/touch.js"></script>
    <script src="/assets/js/tour.js"></script>

    <!-- Components js -->
    <script src="/assets/js/explorer.js"></script>
    <script src="/assets/js/widgets.js"></script>
    <script src="/assets/js/modal-uploader.js"></script>
    <script src="/assets/js/popovers-users.js"></script>
    <script src="/assets/js/popovers-pages.js"></script>
    <script src="/assets/js/lightbox.js"></script>

    <!-- Landing page js -->

    <!-- Signup page js -->

    <!-- Feed pages js -->
    <script src="/assets/js/feed.js"></script>

    <script src="/assets/js/webcam.js"></script>
    <script src="/assets/js/compose.js"></script>
    <script src="/assets/js/autocompletes.js"></script>

    <!-- profile js -->

    <!-- stories js -->

    <!-- friends js -->

    <!-- questions js -->

    <!-- video js -->

    <!-- events js -->

    <!-- news js -->

    <!-- shop js -->

    <!-- inbox js -->

    <!-- settings js -->

    <!-- map page js -->

    <!-- elements page js -->
</body>


<!-- Mirrored from friendkit.cssninja.io/sidebar-v1-feed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 05:12:35 GMT -->
</html>
