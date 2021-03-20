@include('layouts.header_3d')

<div class="iframe-container" id="mainFrame">
    <iframe src="{{ \Config::get('constants.options.3d_url') }}"
            style="position:absolute; left: 0; right: 0; bottom: 0; top:0px;  width:100%; height:100%; border:none;  overflow:hidden; z-index:9;">
    </iframe>
</div>

<div class="iframe-container agenda" id="networking" style="display: none">
    <div class="close-" id="close-" onclick="closeIframe('networking');">
        <img src="public/img/close_New.png" alt="">
    </div>
    <iframe src="{{ route('networking') }}" data-origin="{{ route('networking') }}"
            allowfullscreen="allowfullscreen"
            mozallowfullscreen="mozallowfullscreen"
            msallowfullscreen="msallowfullscreen"
            oallowfullscreen="oallowfullscreen"
            webkitallowfullscreen="webkitallowfullscreen"
            style="position:absolute; left: 0; right: 0; bottom: 0; top:0px;  width:100%; height:100%; border:none;  overflow:hidden; z-index:9;">
    </iframe>
</div>

<div class="iframe-container agenda" id="sales" style="display: none">
    <div class="close-" id="close-" onclick="closeIframe('sales');">
        <img src="public/img/close_New.png" alt="">
    </div>
    <iframe src="{{ route('sales') }}" data-origin="{{ route('sales') }}"
            allowfullscreen="allowfullscreen"
            mozallowfullscreen="mozallowfullscreen"
            msallowfullscreen="msallowfullscreen"
            oallowfullscreen="oallowfullscreen"
            webkitallowfullscreen="webkitallowfullscreen"
            style="position:absolute; left: 0; right: 0; bottom: 0; top:0px;  width:100%; height:100%; border:none;  overflow:hidden; z-index:9;">
    </iframe>
</div>

@include('layouts.footer_3d')
