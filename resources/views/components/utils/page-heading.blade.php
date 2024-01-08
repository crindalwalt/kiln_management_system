@props(["heading"])
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">{{ $heading }}</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">

        {{ $slot }}
    </div>
</div>
