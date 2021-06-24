<div class="login_form_inner zoom-anim-dialog mfp-hide" id="small-dialog">
    <h4>User Login</h4>
    <form method="POST" action="/login-action">
        @csrf
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <div class="form-group">
            <div class="btn-group">
                {{-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span data-bind="label">Register As</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                </button> --}}
                {{-- <ul class="dropdown-menu" role="register_as">
                    <li><a href="#">Male</a></li>
                    <li><a href="#">Female</a></li>

                </ul> --}}
                <select class="form-control" name="login_as" required>
                  <option>Login As</option>
                  <option value="pet_owner">Pet Owner</option>
                  <option value="funder">Funder</option>

                </select>
            </div>
        </div>
        <div class="login_btn_area">
            <button type="submit" value="LogIn" class="btn form-control login_btn">LogIn</button>
            <div class="login_social">
                <h5>Login With</h5>
                {{-- <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul> --}}
            </div>
        </div>
    </form>
    <img class="mfp-close" src="/assets/img/close-btn.png" alt="">
 </div>
