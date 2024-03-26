@php
    $on='active'
@endphp
<div class="row pt-3">
    <div class="row m-2">
        <div class="col-2 rounded-1 bg-body-secondary p-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link @if($menu1=='on'){{ $on }}@else @endif" id="v-pills-home-tab" data-toggle="pill" href="/dashboard" role="tab"
                    aria-controls="v-pills-home" aria-selected="true">Dashboard</a>
                <a class="nav-link @if($menu2=='on'){{ $on }}@else @endif" id="v-pills-profile-tab" data-toggle="pill" href="/item" role="tab"
                    aria-controls="v-pills-profile" aria-selected="false">Items</a>
                <a class="nav-link @if($menu3=='on'){{ $on }}@else @endif" id="v-pills-messages-tab" data-toggle="pill" href="/posts" role="tab"
                    aria-controls="v-pills-messages" aria-selected="true">Post</a>
            </div>
        </div>
        <div class="col-9">
{{ $slot }}
        </div>
    </div>
</div>