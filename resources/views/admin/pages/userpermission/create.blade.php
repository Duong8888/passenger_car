@extends('admin.layouts.master')
@section('content')

<div class="content">
    <div class="row" >
        <div class="col-12" >
            <div class="card" style="min-height: 550px">

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <label class="form-label">Remove Button</label>
                                <input type="text" class="selectize-close-btn" value="awesome,neat">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                            <h4 class="header-title col-md-12" style="align-content: center">Vai trò</h4>
                            <div class="form-check mb-2 form-check-primary col-md-2" >
                                <input class="form-check-input" type="checkbox" value="" id="customckeck1" checked>
                                <label class="form-check-label" for="customckeck1">Primary</label>
                            </div>

                            <div class="form-check mb-2 form-check-success col-md-2">
                                <input class="form-check-input" type="checkbox" value="" id="customckeck2">
                                <label class="form-check-label" for="customckeck2">Success</label>
                            </div>

                            <div class="form-check mb-2 form-check-danger col-md-2">
                                <input class="form-check-input" type="checkbox" value="" id="customckeck3" checked>
                                <label class="form-check-label" for="customckeck3">Danger</label>
                            </div>

                            <div class="form-check mb-2 form-check-warning col-md-2">
                                <input class="form-check-input" type="checkbox" value="" id="customckeck4" checked>
                                <label class="form-check-label" for="customckeck4">Warning</label>
                            </div>

                            <div class="form-check mb-2 form-check-pink col-md-2">
                                <input class="form-check-input" type="checkbox" value="" id="customckeck5">
                                <label class="form-check-label" for="customckeck5">Pink</label>
                            </div>

                            <div class="form-check mb-2 form-check-info col-md-2" >
                                <input class="form-check-input" type="checkbox" value="" id="customckeck8">
                                <label class="form-check-label" for="customckeck8">Info</label>
                            </div>

                            <div class="form-check mb-2 form-check-dark col-md-2">
                                <input class="form-check-input" type="checkbox" value="" id="customckeck9" checked>
                                <label class="form-check-label" for="customckeck9">Dark</label>
                            </div>

                    </div> <!-- end row-->
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
</div>

@endsection
