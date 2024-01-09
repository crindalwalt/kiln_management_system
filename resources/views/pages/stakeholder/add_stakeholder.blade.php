@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/pickr/themes/classic.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <x-utils.page-heading heading="ADD NEW STAKEHOLDER">

        <a  href="{{ route("stakeholder.all") }}" type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0 mx-2">
            <i class="btn-icon-prepend" data-feather="list"></i>
            All Member
        </a>
    </x-utils.page-heading>

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">New Stakeholder</h6>
                    <p class="text-muted mb-3">Add new Stakeholders from the form given below</p>
                    <form class="forms-sample" method="POST" action="{{ route("stakeholder.add") }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">First Name</label>
                                <input class="form-control mb-4 mb-md-0" name="first_name" placeholder="Enter First Name"/>
                                @error("first_name") <div class="badge rounded-pill bg-danger mt-2">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input class="form-control" name="last_name" placeholder="Enter Last Name" />
                                @error("last_name") <div class="badge rounded-pill bg-danger mt-2">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="mb-0">
                                    <label class="form-label">Member Type</label>
                                    <select class="js-example-basic-single form-select" data-width="100%" name="member_type">
                                        <option value="TX">Select Member Type</option>
                                        @foreach($member_types as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @error("member_type") <div class="badge rounded-pill bg-danger mt-2">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">CNIC</label>
                                <input class="form-control" type="text" data-inputmask-alias="*****-*******-*" name="cnic" />
                                @error("cnic") <div class="badge rounded-pill bg-danger mt-2">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Phone:</label>
                                <input class="form-control mb-4 mb-md-0" type="tel" name="phone" placeholder="03090000000"/>
                                @error("phone") <div class="badge rounded-pill bg-danger mt-2">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">City</label>
                                <input class="form-control" type="text" name="city" placeholder="Lahore"/>
                                @error("city") <div class="badge rounded-pill bg-danger mt-2">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Opening Balance</label>
                                <input class="form-control mb-4 mb-md-0" placeholder="PKR 0.0" disabled/>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Balance</label>
                                <input class="form-control"  placeholder="PKR 0.0" disabled/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-icon-text">
                                    <i class="btn-icon-prepend" data-feather="check-square"></i>
                                    Add Stakeholder
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/typeahead-js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pickr/pickr.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/js/inputmask.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/js/tags-input.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/pickr.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
@endpush
