<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link type="text/css" href="/css/jplayer.pink.flag.css" rel="stylesheet"/>
    <script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.jplayer.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#jquery_jplayer_1").jPlayer({
                ready: function () {
                    $(this).jPlayer("setMedia", { // Set the media
                        m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a"
                    }).jPlayer("play"); // Attempt to auto play the media
                },
                cssSelectorAncestor: "#jp_container_1",
                swfPath: "/js",
                supplied: "m4a, oga",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true,
                remainingDuration: true,
                toggleDuration: true
            }).jPlayer("play");

            $('.jp-play').click( function () {
                if ($('#jp_container_1').hasClass('jp-state-playing')) {
                    $(this).find('span.glyphicon').addClass('glyphicon-play').removeClass('glyphicon-pause');
                }
                else {
                    $(this).find('span.glyphicon').addClass('glyphicon-pause').removeClass('glyphicon-play');
                }
            });

        });
    </script>
    <style>
        .jp-controls {
            width: 50%;
            background: transparent !important;
        }
        .jp-interface, .jp-audio {
            padding: 0 !important;
            border: none !important;
            background-color: transparent !important;
        }
        .jp-type-single .jp-play {
            background: transparent !important;
            text-indent: 0;
            border-radius: 50px;
            width: 45px !important;
            border: 3px solid #EEEEEE;
        }
        *:focus {
            outline: none !important;
        }
        /*.jp-state-playing .glyphicon-play{*/
            /*display: none;*/
        /*}*/
    </style>
</head>
<body>
<div id="jquery_jplayer_1"></div>
<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
    <div class="jp-type-single">
        <div class="jp-gui jp-interface">
            {{--<div class="jp-volume-controls">--}}
                {{--<button class="jp-mute" role="button" tabindex="0">mute</button>--}}
                {{--<button class="jp-volume-max" role="button" tabindex="0">max volume</button>--}}
                {{--<div class="jp-volume-bar">--}}
                    {{--<div class="jp-volume-bar-value"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="jp-controls-holder">--}}
                <div class="jp-controls">
                    <button type="button" class="btn btn-default jp-play">
                        <span class="glyphicon glyphicon-pause"></span>
                    </button>
                    {{--<button class="jp-play" role="button" tabindex="0"></button>--}}
                    {{--<button class="jp-stop" role="button" tabindex="0">stop</button>--}}
                {{--</div>--}}
                {{--<div class="jp-progress">--}}
                    {{--<div class="jp-seek-bar">--}}
                        {{--<div class="jp-play-bar"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>--}}
                {{--<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>--}}
                {{--<div class="jp-toggles">--}}
                    {{--<button class="jp-repeat" role="button" tabindex="0">repeat</button>--}}
                {{--</div>--}}
            </div>
        </div>
        {{--<div class="jp-details">--}}
            {{--<div class="jp-title" aria-label="title">&nbsp;</div>--}}
        {{--</div>--}}
        {{--<div class="jp-no-solution">--}}
            {{--<span>Update Required</span>--}}
            {{--To play the media you will need to either update your browser to a recent version or update your <a--}}
                    {{--href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.--}}
        {{--</div>--}}
    </div>
</div>
<button type="button" class="btn btn-default">
    <span class="glyphicon glyphicon-play"> </span>
</button>
</body>
</html>

{{--<!DOCTYPE>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<title>HTML 5 audio</title>--}}
    {{--<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>--}}
    {{--<script type="text/javascript" src="/js/jquery.jplayer.min.js"></script>--}}
    {{--<script type="text/javascript">--}}
        {{--$("document").ready(function () {--}}
            {{--$("#jpId").jPlayer({--}}
                {{--ready: function () { // The $.jPlayer.event.ready event--}}
                    {{--$(this).jPlayer("setMedia", { // Set the media--}}
                        {{--m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a"--}}
                    {{--}).jPlayer("play"); // Attempt to auto play the media--}}
                {{--},--}}
                {{--ended: function () { // The $.jPlayer.event.ended event--}}
                    {{--$(this).jPlayer("play"); // Repeat the media--}}
                {{--},--}}
                {{--supplied: "m4a"--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="jpId"></div>--}}
{{--</body>--}}
{{--</html>--}}