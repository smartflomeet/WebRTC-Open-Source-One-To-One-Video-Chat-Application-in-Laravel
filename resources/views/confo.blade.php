<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample App: 1-To-1 Conference using Laravel</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-black.svg') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.toast.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/confo.css') }}">
    <script>
        window.site_url = '{{ url("/") }}';
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-2"></div>
        <div class="col-md-4" style="width: 100%;height:100%;">
            <div class="vedio_container_div">
                <div class="row">
                    <div class="col-md-6">
                        <div id="local_video_div"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="multi_video_container_div" style=""></div>
                    </div>
                </div>
                <div class="row">
                   <div class="controls" id="controls" style="background-color:grey;position: fixed;bottom: 0;width:100%;text-align: center">
                       <img src="{{ asset('img/mike.png') }}" style="margin-right: 20px;cursor: pointer;" class="cus_img_icon icon-confo-mute"  onclick="audioMute()" title="mute audio" />
                       <img src="{{ asset('img/video.png') }}" style="margin-right: 20px;cursor: pointer;" class="cus_img_icon icon-confo-video-mute" title="mute video" onclick="videoMute()" />
                       <img src="{{ asset('img/end-call.png') }}" style="margin-right: 20px;cursor: pointer;" class="cus_img_icon end_call" title="End_call" onclick="endCall()" />
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var urlData = {
        user_ref: '{{ $user_ref}}',
        usertype: '{{ $usertype}}',
        roomId: '{{ $roomId}}'
    }
</script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.toast.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/EnxRtc.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/confo.js') }}"></script>
</body>
</html>
