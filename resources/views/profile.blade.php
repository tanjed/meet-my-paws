@extends('layout')

@section('content')

    <div id="general-settings" class="settings-section is-active">
        <div class="settings-panel">
            <div class="settings-form-wrapper">
                <div class="settings-form">
                    <div class="columns is-multiline">

                        <div class="column is-6">
                            <!--Field-->
                            <div class="field field-group">
                                <label>Full Name</label>
                                <div class="control has-icon">
                                    <input type="text" class="input is-fade" value="Jenna">
                                    <div class="form-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                            <!--Field-->
                            <div class="field field-group">
                                <label>Email</label>
                                <div class="control has-icon">
                                    <input type="text" class="input is-fade" value="jennadavis@gmail.com">
                                    <div class="form-icon">
                                        <i data-feather="mail"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column is-6">
                            <!--Field-->
                            <div class="field field-group">
                                <label>Profile Pic</label>
                                <div class="control has-icon">
                                    <input type="file" class="input is-fade" value="Davis">
                                    <div class="form-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                            <!--Field-->
                            <div class="field field-group">
                                <label>Phone</label>
                                <div class="control has-icon">
                                    <input type="telephone" class="input is-fade" value="">
                                    <div class="form-icon">
                                        <i data-feather="phone"></i>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="column is-12">
                            <!--Field-->
                            <div class="field field-group">
                                <label>Address</label>
                                <div class="control">
                                    <textarea type="text" class="textarea is-fade" rows="1"
                                        placeholder="Fill in your address..."></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="column is-6">
                            <!--Field-->
                            <div class="field field-group">
                                <label>City</label>
                                <div class="control has-icon">
                                    <input type="text" class="input is-fade" value="Melbourne">
                                    <div class="form-icon">
                                        <i data-feather="map-pin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column is-6">
                            <!--Field-->
                            <div class="field field-group is-autocomplete">
                                <label>Country</label>
                                <div class="control has-icon">
                                    <input id="country-autocpl" type="text" class="input is-fade" value="Australia">
                                    <div class="form-icon">
                                        <i data-feather="globe"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column is-12">
                            <div class="buttons">
                                <button class="button is-solid accent-button form-button">Save Changes</button>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
