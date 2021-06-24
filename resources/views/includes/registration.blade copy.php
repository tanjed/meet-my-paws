<div class="register_form_inner zoom-anim-dialog mfp-hide" id="register_form">
    <div class="row">
        <div class="col-md-6">
            <div class="registration_man">
                <img src="/assets/img/Registration_man.png" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="registration_form_s">
                <h4>Registration</h4>
                <form method="POST" action="/register" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" id="reg_email" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="reg_first" placeholder="Full Name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="reg_pass" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                        <div class="btn-group">
                            {{-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span data-bind="label">Register As</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                            </button> --}}
                            {{-- <ul class="dropdown-menu" role="register_as">
                                <li><a href="#">Male</a></li>
                                <li><a href="#">Female</a></li>

                            </ul> --}}
                            <select class="form-control" name="register_as" required>
                              <option>Register As</option>
                              <option value="pet_owner">Pet Owner</option>
                              <option value="funder">Funder</option>

                            </select>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <div class="datepicker">
                            <input type='text' class="form-control datetimepicker4" placeholder="Birthday" />
                            <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        </div>
                    </div> --}}
                    <div class="reg_chose form-group">
                        {{-- <div class="reg_check_box">
                            <input type="radio" id="s-option" name="selector">
                            <label for="s-option">I`m Not Robot</label>
                            <div class="check"><div class="inside"></div></div>
                        </div> --}}
                        <button type="submit" value="LogIn" class="btn form-control login_btn">Register</button>
                    </div>
                </form>
                <img class="mfp-close" src="/assets/img/close-btn.png" alt="">
            </div>
        </div>
    </div>
</div>
