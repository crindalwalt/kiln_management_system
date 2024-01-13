@props(["title_text","main_value"])
<div class="col-md-4 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-2">{{ $title_text }}</h6>

            </div>
            <div class="row">
                <div class="col-8 col-md-8 col-xl-8">
                    <h3 class="mb-2" >{{$main_value}}</h3>
                    <div class="d-flex align-items-baseline">
                        <p class="text-success">
                            <span><i data-feather="info" class="icon-sm mb-1"></i> Based on Data</span>

                        </p>
                    </div>
                </div>
                <div class="col-4 col-md-4 col-xl-4">
                    {{$slot}}
                </div>
            </div>
        </div>
    </div>
</div>
