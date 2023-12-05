@extends('admin.layouts.master')
@section('title', 'Cập nhật thông tin nhà xe')
@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Thông tin </h4>
                        <p class="sub-header">
                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                        </p>

                        <div class="row">
                            <div class="col-lg-6">
                                <form>

                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Text</label>
                                        <input type="text" id="simpleinput" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-email" class="form-label">Email</label>
                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-password" class="form-label">Password</label>
                                        <input type="password" id="example-password" class="form-control" value="password">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Show/Hide Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-palaceholder" class="form-label">Placeholder</label>
                                        <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Text area</label>
                                        <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-readonly" class="form-label">Readonly</label>
                                        <input type="text" id="example-readonly" class="form-control" readonly="" value="Readonly value">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-disable" class="form-label">Disabled</label>
                                        <input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-static" class="form-label">Static control</label>
                                        <input type="text" readonly class="form-control-plaintext" id="example-static" value="email@example.com">
                                    </div>

                                    <div>
                                        <label for="example-helping" class="form-label">Helping text</label>
                                        <input type="text" id="example-helping" class="form-control" placeholder="Helping text">
                                        <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                    </div>

                                </form>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container -->

</div>
@endsection
