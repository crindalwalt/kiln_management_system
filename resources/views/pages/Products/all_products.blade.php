@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet"/>
@endpush

@section('content')
    <x-utils.page-heading heading="ALL PRODUCTS DATA">
        <button type="button" class="btn btn-secondary btn-icon-text mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="download-cloud"></i>
            Download Report
        </button>
        <a href="{{ route("stakeholder.add") }}" type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0 mx-2">
            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
            Add Member
        </a>
    </x-utils.page-heading>
    <x-utils.hightlight-card-row>
        <x-utils.hightlight-card title_text="Total Members" :main_value="$total_products">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                 class="bi bi-bar-chart-fill" viewBox="0 0 16 16" style="color:saddlebrown">
                <path
                    d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z"/>
            </svg>
        </x-utils.hightlight-card>
        <x-utils.hightlight-card title_text="Total Products Value" :main_value="'PKR'. $total_products_value"
                                 style="color:saddlebrown">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-coin"
                 viewBox="0 0 16 16">
                <path
                    d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
            </svg>
        </x-utils.hightlight-card>
        <x-utils.hightlight-card title_text="Total Products Quantity" :main_value="$total_products_quantity.' Items'"
                                 style="color:saddlebrown">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list-ol" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5"/>
                <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635z"/>
            </svg>
        </x-utils.hightlight-card>
        {{--        <x-utils.hightlight-card></x-utils.hightlight-card>--}}
        {{--        <x-utils.hightlight-card></x-utils.hightlight-card>--}}
    </x-utils.hightlight-card-row>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">All Products</h6>
                    <p class="text-muted mb-3">Here is the list of all the Products .</p>
                    <div class="table-responsive">
                        @if($products)
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>category</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{$item->image}}" alt="Image not found"
                                                 style="width:100px;height:100px;border-radius:.4rem;">
                                        </td>
                                        <td>{{ $item->name}}</td>

                                        <td>
                                            <a href="{{ route("product_category.all") }}">
                                        <span class="badge rounded-pill
                                            @if($item->category->id == 1)bg-warning
                                            @elseif($item->category->id ==2) bg-danger
                                            @elseif($item->category->id ==3) bg-info
                                            @elseif($item->category->id ==4) bg-dark
                                            @elseif($item->category->id ==5) bg-secondary
                                            @else bg-secondary
                                            @endif">
                                            {{$item->category->name}}
                                        </span>
                                            </a>
                                        </td>

                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-icon">
                                                <i data-feather="eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-info btn-icon">
                                                <i data-feather="edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-icon">
                                                <i data-feather="delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        @else
                            <div class="text-center">No data found</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush
