@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.user.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card dashboard-table mt-0">
                            <div class="card-body">
                                <div class="top-sec">
                                    <h3>payments</h3>
                                    <a href="#" class="btn btn-sm btn-solid">add product</a>
                                </div>
                                <table class="table table-responsive-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">date</th>
                                            <th scope="col">description</th>
                                            <th scope="col">amount</th>
                                            <th scope="col">method</th>
                                            <th scope="col">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($payments->where('status','success') as $payment)
                                        <tr>
                                            
                                            <td>{{$payment->created_at->format('d M')}}</td>
                                            <td>{{$payment->description}}</td>
                                            <td>{{$payment->amount}}</td>
                                            <td>{{$payment->method}}</td>
                                            <td>{{$payment->status}}</td>
                                           
                                            
                                        </tr>
                                        @empty
                                        <tr><td colspan="5">No Payments</td></tr>
                                        @endforelse
                                    </tbody>
                                </table>
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
    
@endpush