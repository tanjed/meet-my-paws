<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from friendkit.cssninja.io/login-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 05:12:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
@include('includes.head')

<body>

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="signup-wrapper">

        <!--Fake navigation-->
        <div class="fake-nav">
            <a href="index.html" class="logo">
                <img class="light-image" src="/assets/img/logo/friendkit-bold.svg" width="112" height="28" alt="">
                <img class="dark-image" src="/assets/img/logo/friendkit-white.svg" width="112" height="28" alt="">
            </a>
        </div>

        <div class="container">
            <!--Container-->
            <div class="login-container is-centered">
                <div class="columns is-vcentered">
                    <div class="column">

                        <h2 class="form-title has-text-centered">Welcome Back</h2>
                        <h3 class="form-subtitle has-text-centered">Enter your credentials to sign in.</h3>

                        <!--Form-->
                        <form method="POST" action="/login-action">
                            @csrf
                            <div class="login-form">
                                <div class="form-panel">
                                    <div class="field">
                                        <label>Email</label>
                                        <div class="control">
                                            <input type="text" class="input" placeholder="Enter your email address" name="email" required>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Password</label>
                                        <div class="control">
                                            <input type="password" class="input" placeholder="Enter your password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <select class="control" name="login_as" required>
                                            <option>Login As</option>
                                            <option value="pet_owner">Pet Owner</option>
                                            <option value="funder">Funder</option>

                                          </select>
                                    </div>
                                    <div class="field is-flex">
                                        <div class="switch-block">
                                            <label class="f-switch">
                                                <input type="checkbox" class="is-switch">
                                                <i></i>
                                            </label>
                                            <div class="meta">
                                                <p>Remember me?</p>
                                            </div>
                                        </div>
                                        {{-- <a>Forgot Password?</a> --}}
                                    </div>
                                </div>

                                <div class="buttons">
                                    <button type="submit" class="button is-solid primary-button is-fullwidth raised">Login</button>
                                </div>

                                <div class="account-link has-text-centered">
                                    <a href="/register">Don't have an account? Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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


<!-- Mirrored from friendkit.cssninja.io/login-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 05:12:44 GMT -->
</html>
