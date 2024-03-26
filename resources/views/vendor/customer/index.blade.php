@extends('vendor.layouts.app')
@section('page_title', __('Customers'))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/dist/css/vendor-responsiveness.min.css') }}">
@endsection
@section('content')

    <!-- Main content -->
    <div class="list-container" id="vendor-customer-list-container">
        <div class="card">
            <div class="card-header d-md-flex justify-content-between align-items-center">
                <h5>{{ __('Customers') }}</h5>
            </div>
            <div class="card-body p-0 table-field order-table-button">
                <div class="card-block pt-2 px-4">
                    <div class="col-sm-12">
                        @include('vendor.layouts.includes.yajra-data-table')
                    </div>
                </div>
            </div>
            @include('vendor.layouts.includes.delete-modal')
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('public/dist/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/permission.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/yajra-export.min.js') }}"></script>
@endsection
