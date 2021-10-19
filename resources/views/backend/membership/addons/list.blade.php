@extends('layouts.backend.app')
@push('styles')
    <!-- datepicker css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jsgrid.css')}}">
@endpush
@section('main')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Roles
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Sales</li>
                    <li class="breadcrumb-item active">Transactions</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Transaction Details</h5>
                </div>
                <div class="card-body">
                    <div id="batchDelete" class="transactions"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@push('scripts')
    <!-- Datepicker jquery-->
<script src="{{asset('assets/js/jsgrid/jsgrid.min.js')}}"></script>
<script src="{{asset('assets/js/jsgrid/griddata-transactions.js')}}"></script>
<script src="{{asset('assets/js/jsgrid/jsgrid-transactions.js')}}"></script>
@endpush
