@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.shop.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-0">
                            <div class="card-body">
                                <div class="dashboard-box">
                                    <div class="dashboard-title">
                                        <h4>settings</h4>
                                    </div>
                                    <div class="dashboard-detail">
                                        <div class="account-setting">
                                            <h5>Notifications</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="radio_animated form-check-input"
                                                            type="radio" name="exampleRadios"
                                                            id="exampleRadios1" value="option1" checked>
                                                        <label class="form-check-label"
                                                            for="exampleRadios1">
                                                            Allow Desktop Notifications
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="radio_animated form-check-input"
                                                            type="radio" name="exampleRadios"
                                                            id="exampleRadios2" value="option2">
                                                        <label class="form-check-label"
                                                            for="exampleRadios2">
                                                            Enable Notifications
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="radio_animated form-check-input"
                                                            type="radio" name="exampleRadios"
                                                            id="exampleRadios3" value="option3">
                                                        <label class="form-check-label"
                                                            for="exampleRadios3">
                                                            Get notification for my own activity
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="radio_animated form-check-input"
                                                            type="radio" name="exampleRadios"
                                                            id="exampleRadios4" value="option4">
                                                        <label class="form-check-label"
                                                            for="exampleRadios4">
                                                            DND
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account-setting">
                                            <h5>deactivate account</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="radio_animated form-check-input"
                                                            type="radio" name="exampleRadios1"
                                                            id="exampleRadios4" value="option4" checked>
                                                        <label class="form-check-label"
                                                            for="exampleRadios4">
                                                            I have a privacy concern
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="radio_animated form-check-input"
                                                            type="radio" name="exampleRadios1"
                                                            id="exampleRadios5" value="option5">
                                                        <label class="form-check-label"
                                                            for="exampleRadios5">
                                                            This is temporary
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="radio_animated form-check-input"
                                                            type="radio" name="exampleRadios1"
                                                            id="exampleRadios6" value="option6">
                                                        <label class="form-check-label"
                                                            for="exampleRadios6">
                                                            other
                                                        </label>
                                                    </div>
                                                    <button type="button"
                                                        class="btn btn-solid btn-xs">Deactivate
                                                        Account</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account-setting">
                                            <h5>Delete account</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="radio_animated form-check-input"
                                                            type="radio" name="exampleRadios3"
                                                            id="exampleRadios7" value="option7" checked>
                                                        <label class="form-check-label"
                                                            for="exampleRadios7">
                                                            No longer usable
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="radio_animated form-check-input"
                                                            type="radio" name="exampleRadios3"
                                                            id="exampleRadios8" value="option8">
                                                        <label class="form-check-label"
                                                            for="exampleRadios8">
                                                            Want to switch on other account
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="radio_animated form-check-input"
                                                            type="radio" name="exampleRadios3"
                                                            id="exampleRadios9" value="option9">
                                                        <label class="form-check-label"
                                                            for="exampleRadios9">
                                                            other
                                                        </label>
                                                    </div>
                                                    <button type="button"
                                                        class="btn btn-solid btn-xs">Delete Account</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  dashboard section end -->

@endsection

@push('scripts')
    <!-- dare picker js -->
    <script src="{{asset('assets/js/date-picker.js')}}"></script>
    <!-- chart js -->
    <script src="{{asset('assets/js/chart/apex/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/chart/apex/custom-chart.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
@endpush