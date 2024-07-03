<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" loader="disable" data-vertical-style="overlay">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPRUHA - Bootstrap 5 Premium Admin &amp; Dashboard Template</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin-assets/images/brand-logos/favicon.ico" type="image/x-icon') }}">
    <!-- Choices JS -->
    <script src="{{ asset('admin-assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('admin-assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Main Theme Js -->
    <script src="{{ asset('admin-assets/js/main.js') }}"></script> <!-- Style Css -->
    <link href="{{ asset('admin-assets/css/styles.min.css') }}" rel="stylesheet"> <!-- Icons Css -->
    <link href="{{ asset('admin-assets/css/icons.css') }}" rel="stylesheet"> <!-- Node Waves Css -->
    <link href="{{ asset('admin-assets/libs/node-waves/waves.min.css') }}" rel="stylesheet"> <!-- Simplebar Css -->
    <link href="{{ asset('admin-assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/@simonwep/pickr/themes/nano.min.css') }}">
    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/jsvectormap/css/jsvectormap.min.css') }}">
    <script type="text/javascript">
        <!-
        t9no = document.all;
        idkw = t9no && !document.getElementById;
        xrga = t9no && document.getElementById;
        rsu7 = !t9no && document.getElementById;
        zo1e = document.layers;

        function fi4f(hpb1) {
            try {
                if (idkw) alert("");
            } catch (e) {}
            if (hpb1 && hpb1.stopPropagation) hpb1.stopPropagation();
            return false;
        }

        function vgc6() {
            if (event.button == 2 || event.button == 3) fi4f();
        }

        function tguo(e) {
            return (e.which == 3) ? fi4f() : true;
        }

        function hril(et56) {
            for (s6fr = 0; s6fr < et56.images.length; s6fr++) {
                et56.images[s6fr].onmousedown = tguo;
            }
            for (s6fr = 0; s6fr < et56.layers.length; s6fr++) {
                hril(et56.layers[s6fr].document);
            }
        }

        function i2qw() {
            if (idkw) {
                for (s6fr = 0; s6fr < document.images.length; s6fr++) {
                    document.images[s6fr].onmousedown = vgc6;
                }
            } else if (zo1e) {
                hril(document);
            }
        }

        function axhn(e) {
            if ((xrga && event && event.srcElement && event.srcElement.tagName == "IMG") || (rsu7 && e && e.target && e.target.tagName == "IMG")) {
                return fi4f();
            }
        }
        if (xrga || rsu7) {
            document.oncontextmenu = axhn;
        } else if (idkw || zo1e) {
            window.onload = i2qw;
        }

        function ntmb(e) {
            swc0 = e && e.srcElement && e.srcElement != null ? e.srcElement.tagName : "";
            if (swc0 != "INPUT" && swc0 != "TEXTAREA" && swc0 != "BUTTON") {
                return false;
            }
        }

        function wwek() {
            return false
        }
        if (t9no) {
            document.onselectstart = ntmb;
            document.ondragstart = wwek;
        }
        if (document.addEventListener) {
            document.addEventListener('copy', function(e) {
                swc0 = e.target.tagName;
                if (swc0 != "INPUT" && swc0 != "TEXTAREA") {
                    e.preventDefault();
                }
            }, false);
            document.addEventListener('dragstart', function(e) {
                e.preventDefault();
            }, false);
        }

        function lx23(evt) {
            if (evt.preventDefault) {
                evt.preventDefault();
            } else {
                evt.keyCode = 37;
                evt.returnValue = false;
            }
        }
        var ts1u = 1;
        var uks8 = 2;
        var m5yh = 4;
        var bazz = new Array();
        bazz.push(new Array(uks8, 65));
        bazz.push(new Array(uks8, 67));
        bazz.push(new Array(uks8, 80));
        bazz.push(new Array(uks8, 83));
        bazz.push(new Array(uks8, 85));
        bazz.push(new Array(ts1u | uks8, 73));
        bazz.push(new Array(ts1u | uks8, 74));
        bazz.push(new Array(ts1u, 121));
        bazz.push(new Array(0, 123));

        function rvy1(evt) {
            evt = (evt) ? evt : ((event) ? event : null);
            if (evt) {
                var iode = evt.keyCode;
                if (!iode && evt.charCode) {
                    iode = String.fromCharCode(evt.charCode).toUpperCase().charCodeAt(0);
                }
                for (var ebgy = 0; ebgy < bazz.length; ebgy++) {
                    if ((evt.shiftKey == ((bazz[ebgy][0] & ts1u) == ts1u)) && ((evt.ctrlKey | evt.metaKey) == ((bazz[ebgy][0] & uks8) == uks8)) && (evt.altKey == ((bazz[ebgy][0] & m5yh) == m5yh)) && (iode == bazz[ebgy][1] || bazz[ebgy][1] == 0)) {
                        lx23(evt);
                        break;
                    }
                }
            }
        }
        if (document.addEventListener) {
            document.addEventListener("keydown", rvy1, true);
            document.addEventListener("keypress", rvy1, true);
        } else if (document.attachEvent) {
            document.attachEvent("onkeydown", rvy1);
        }

         ->
    </script>
    
    <meta http-equiv="imagetoolbar" content="no">
    <style type="text/css">
        <!-- input,textarea{-webkit-touch-callout:default;-webkit-user-select:auto;-khtml-user-select:auto;-moz-user-select:text;-ms-user-select:text;user-select:text} *{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:-moz-none;-ms-user-select:none;user-select:none} 
        -->
    </style>
    <style type="text/css" media="print">
        <!-- body{display:none} 
        -->
    </style>
    <!--[if gte IE 5]><frame></frame><![endif]-->
    <style id="apexcharts-css">
        @keyframes opaque {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes resizeanim {

            0%,
            to {
                opacity: 0
            }
        }

        .apexcharts-canvas {
            position: relative;
            user-select: none
        }

        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5)
        }

        .apexcharts-inner {
            position: relative
        }

        .apexcharts-text tspan {
            font-family: inherit
        }

        .legend-mouseover-inactive {
            transition: .15s ease all;
            opacity: .2
        }

        .apexcharts-legend-text {
            padding-left: 15px;
            margin-left: -15px;
        }

        .apexcharts-series-collapsed {
            opacity: 0
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, .96)
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, .8)
        }

        .apexcharts-tooltip * {
            font-family: inherit
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #eceff1;
            border-bottom: 1px solid #ddd
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, .7);
            border-bottom: 1px solid #333
        }

        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            margin-left: 5px;
            font-weight: 600
        }

        .apexcharts-tooltip-text-goals-label:empty,
        .apexcharts-tooltip-text-goals-value:empty,
        .apexcharts-tooltip-text-y-label:empty,
        .apexcharts-tooltip-text-y-value:empty,
        .apexcharts-tooltip-text-z-value:empty,
        .apexcharts-tooltip-title:empty {
            display: none
        }

        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px
        }

        .apexcharts-tooltip-goals-group,
        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            display: flex
        }

        .apexcharts-tooltip-text-goals-label:not(:empty),
        .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0;
            margin-right: 10px;
            border-radius: 50%
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px
        }

        .apexcharts-custom-tooltip,
        .apexcharts-tooltip-box {
            padding: 4px 8px
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse
        }

        .apexcharts-tooltip-box>div {
            margin: 4px 0
        }

        .apexcharts-tooltip-box span.value {
            font-weight: 700
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: 700;
            display: block;
            margin-bottom: 5px
        }

        .apexcharts-xaxistooltip,
        .apexcharts-yaxistooltip {
            opacity: 0;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #eceff1;
            border: 1px solid #90a4ae
        }

        .apexcharts-xaxistooltip {
            padding: 9px 10px;
            transition: .15s ease all
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-xaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-left: -6px
        }

        .apexcharts-xaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-left: -7px
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #eceff1
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90a4ae
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #eceff1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90a4ae
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-yaxistooltip {
            padding: 4px 10px
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-yaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-top: -6px
        }

        .apexcharts-yaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-top: -7px
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #eceff1
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90a4ae
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #eceff1
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90a4ae
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1
        }

        .apexcharts-yaxistooltip-hidden {
            display: none
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: .15s ease all
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0
        }

        .apexcharts-selection-rect {
            cursor: move
        }

        .svg_select_boundingRect,
        .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect+g .svg_select_boundingRect,
        .apexcharts-selection-rect+g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect+g .svg_select_points_l,
        .apexcharts-selection-rect+g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move
        }

        .apexcharts-menu-icon,
        .apexcharts-pan-icon,
        .apexcharts-reset-icon,
        .apexcharts-selection-icon,
        .apexcharts-toolbar-custom-icon,
        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6e8192;
            text-align: center
        }

        .apexcharts-menu-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg {
            fill: #6e8192
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(.76)
        }

        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg {
            fill: #f3f4f5
        }

        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
            fill: #008ffb
        }

        .apexcharts-theme-light .apexcharts-menu-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
            fill: #333
        }

        .apexcharts-menu-icon,
        .apexcharts-selection-icon {
            position: relative
        }

        .apexcharts-reset-icon {
            margin-left: 5px
        }

        .apexcharts-menu-icon,
        .apexcharts-reset-icon,
        .apexcharts-zoom-icon {
            transform: scale(.85)
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px
        }

        .apexcharts-pan-icon {
            transform: scale(.62);
            position: relative;
            left: 1px;
            top: 0
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6e8192;
            stroke-width: 2
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008ffb
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0 6px 2px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: .15s ease all;
            pointer-events: none
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: .15s ease all
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, .7);
            color: #fff
        }

        @media screen and (min-width:768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1
            }
        }

        .apexcharts-canvas .apexcharts-element-hidden,
        .apexcharts-datalabel.apexcharts-element-hidden,
        .apexcharts-hide .apexcharts-series-points {
            opacity: 0
        }

        .apexcharts-hidden-element-shown {
            opacity: 1;
            transition: 0.25s ease all;
        }

        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value,
        .apexcharts-datalabels,
        .apexcharts-pie-label {
            cursor: default;
            pointer-events: none
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: .3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease
        }

        .apexcharts-annotation-rect,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-gridline,
        .apexcharts-line,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-point-annotation-label,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon,
        .apexcharts-toolbar svg,
        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-xaxis-annotation-label,
        .apexcharts-yaxis-annotation-label,
        .apexcharts-zoom-rect {
            pointer-events: none
        }

        .apexcharts-marker {
            transition: .15s ease all
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
            height: 100%;
            width: 100%;
            overflow: hidden
        }

        .contract-trigger:before,
        .resize-triggers,
        .resize-triggers>div {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0
        }

        .resize-triggers>div {
            height: 100%;
            width: 100%;
            background: #eee;
            overflow: auto
        }

        .contract-trigger:before {
            overflow: hidden;
            width: 200%;
            height: 200%
        }

        .apexcharts-bar-goals-markers {
            pointer-events: none
        }

        .apexcharts-bar-shadows {
            pointer-events: none
        }

        .apexcharts-rangebar-goals-markers {
            pointer-events: none
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body cz-shortcut-listen="true">

    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5> <button type="button"
                class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist"> <button
                        class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home"
                        aria-selected="true">Theme Styles</button> <button class="nav-link" id="switcher-profile-tab"
                        data-bs-toggle="tab" data-bs-target="#switcher-profile" type="button" role="tab"
                        aria-controls="switcher-profile" aria-selected="false" tabindex="-1">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel"
                    aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-light-theme"> Light </label> <input class="form-check-input"
                                        type="radio" name="theme-style" id="switcher-light-theme" checked=""> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-dark-theme"> Dark </label> <input class="form-check-input"
                                        type="radio" name="theme-style" id="switcher-dark-theme"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-ltr"> LTR </label> <input class="form-check-input" type="radio"
                                        name="direction" id="switcher-ltr" checked=""> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-rtl"> RTL </label> <input class="form-check-input" type="radio"
                                        name="direction" id="switcher-rtl"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-vertical"> Vertical </label> <input class="form-check-input"
                                        type="radio" name="navigation-style" id="switcher-vertical" checked=""> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-horizontal"> Horizontal </label> <input class="form-check-input"
                                        type="radio" name="navigation-style" id="switcher-horizontal"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical &amp; Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-click"> Menu Click </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-menu-click"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-hover"> Menu Hover </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-menu-hover"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icon-click"> Icon Click </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-icon-click"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icon-hover"> Icon Hover </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-icon-hover"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-default-menu"> Default Menu </label> <input
                                        class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked=""> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-closed-menu"> Closed Menu </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-closed-menu"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icontext-menu"> Icon Text </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-icontext-menu"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icon-overlay"> Icon Overlay </label> <input
                                        class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-detached"> Detached </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-detached"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-double-menu"> Double Menu </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-double-menu"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-regular"> Regular </label> <input class="form-check-input"
                                        type="radio" name="page-styles" id="switcher-regular" checked=""> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-classic"> Classic </label> <input class="form-check-input"
                                        type="radio" name="page-styles" id="switcher-classic"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-modern"> Modern </label> <input class="form-check-input"
                                        type="radio" name="page-styles" id="switcher-modern"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-full-width"> Full Width </label> <input class="form-check-input"
                                        type="radio" name="layout-width" id="switcher-full-width" checked=""> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-boxed"> Boxed </label> <input class="form-check-input"
                                        type="radio" name="layout-width" id="switcher-boxed"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-fixed"> Fixed </label> <input class="form-check-input"
                                        type="radio" name="menu-positions" id="switcher-menu-fixed" checked=""> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-scroll"> Scrollable </label> <input class="form-check-input"
                                        type="radio" name="menu-positions" id="switcher-menu-scroll"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-header-fixed"> Fixed </label> <input class="form-check-input"
                                        type="radio" name="header-positions" id="switcher-header-fixed" checked="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-header-scroll"> Scrollable </label> <input
                                        class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-loader-enable"> Enable </label> <input class="form-check-input"
                                        type="radio" name="page-loader" id="switcher-loader-enable"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-loader-disable"> Disable </label> <input class="form-check-input"
                                        type="radio" name="page-loader" id="switcher-loader-disable" checked=""> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel"
                    aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="menu-colors" id="switcher-menu-light"
                                        aria-label="Light Menu" data-bs-original-title="Light Menu"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="menu-colors" id="switcher-menu-dark"
                                        checked="" aria-label="Dark Menu" data-bs-original-title="Dark Menu"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="menu-colors"
                                        id="switcher-menu-primary" aria-label="Color Menu"
                                        data-bs-original-title="Color Menu"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient" aria-label="Gradient Menu"
                                        data-bs-original-title="Gradient Menu"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="menu-colors"
                                        id="switcher-menu-transparent" aria-label="Transparent Menu"
                                        data-bs-original-title="Transparent Menu"> </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="header-colors"
                                        id="switcher-header-light" checked="" aria-label="Light Header"
                                        data-bs-original-title="Light Header"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="header-colors"
                                        id="switcher-header-dark" aria-label="Dark Header"
                                        data-bs-original-title="Dark Header"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="header-colors"
                                        id="switcher-header-primary" aria-label="Color Header"
                                        data-bs-original-title="Color Header"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="header-colors"
                                        id="switcher-header-gradient" aria-label="Gradient Header"
                                        data-bs-original-title="Gradient Header"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="header-colors"
                                        id="switcher-header-transparent" aria-label="Transparent Header"
                                        data-bs-original-title="Transparent Header"> </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-3" type="radio"
                                        name="theme-primary" id="switcher-primary2"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-4" type="radio"
                                        name="theme-primary" id="switcher-primary3"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-5" type="radio"
                                        name="theme-primary" id="switcher-primary4"> </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"><button class="">nano</button></div>
                                    <div class="pickr-container-primary">
                                        <div class="pickr">

                                            <button type="button" class="pcr-button" role="button"
                                                aria-label="toggle color picker dialog"
                                                style="--pcr-color: rgba(98, 89, 202, 1);"></button>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-3" type="radio"
                                        name="theme-background" id="switcher-background2"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4"> </div>
                                <div
                                    class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"><button>nano</button></div>
                                    <div class="pickr-container-background">
                                        <div class="pickr">

                                            <button type="button" class="pcr-button" role="button"
                                                aria-label="toggle color picker dialog"
                                                style="--pcr-color: rgba(98, 89, 202, 1);"></button>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img3" type="radio"
                                        name="theme-background" id="switcher-bg-img2"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer flex-wrap"> <a
                        href="https://themeforest.net/item/spruha-html-dashboard-template/29387837" target="_blank"
                        class="btn btn-primary m-1">Buy Now</a> <a href="https://themeforest.net/user/spruko/portfolio"
                        target="_blank" class="btn btn-info m-1">Our Portfolio</a> <a href="javascript:void(0);"
                        id="reset-all" class="btn btn-secondary m-1">Reset</a> </div>
            </div>
        </div>
    </div> <!-- End Switcher -->
    
    <!-- Loader -->
    <div id="loader" class="d-none"> <img src="{{ asset('admin-assets/images/media/media-79.svg') }}" alt=""> </div>
    <!-- Loader -->
    <div class="page">

        <!-- app-header -->
        @include('admin.layouts.header');
        <!-- /app-header -->

        <!-- Start::app-sidebar -->

        @include('admin.layouts.sidebar');
        
        <!-- End::app-sidebar -->


        <!-- Start::app-content -->


        @yield('content');


        <!-- End::app-content -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body"> <span class="input-group"> <input type="search" class="form-control px-2 "
                                placeholder="Search..." aria-label="Username"> <a href="javascript:void(0);"
                                class="input-group-text bg-primary text-white" id="Search-Grid"><i
                                    class="fe fe-search header-link-icon fs-18"></i></a> </span>
                        <div class="mt-3">
                            <div class="">
                                <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                                <div class="ps-2"> <a href="javascript:void(0)" class="search-tags"><i
                                            class="fe fe-search me-2"></i>People<span></span></a> <a
                                        href="javascript:void(0)" class="search-tags"><i
                                            class="fe fe-search me-2"></i>Pages<span></span></a> <a
                                        href="javascript:void(0)" class="search-tags"><i
                                            class="fe fe-search me-2"></i>Articles<span></span></a> </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-semibold text-muted mb-2 fs-13">Apps and pages</p>
                                <ul class="ps-2">
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app"> <a
                                            href="full-calendar.html"><span><i
                                                    class="bx bx-calendar me-2 fs-14 bg-primary-transparent p-2 rounded-circle "></i>Calendar</span></a>
                                    </li>
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app"> <a
                                            href="mail.html"><span><i
                                                    class="bx bx-envelope me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i>Mail</span></a>
                                    </li>
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app"> <a
                                            href="buttons.html"><span><i
                                                    class="bx bx-dice-1 me-2 fs-14 bg-primary-transparent p-2 rounded-circle "></i>Buttons</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                                <ul class="ps-2">
                                    <li class="p-1 align-items-center  mb-1 search-app"> <a href="javascript:void(0)"
                                            class="text-primary"><u>http://spruko/html/spruko.com</u></a> </li>
                                    <li class="p-1 align-items-center mb-1 search-app"> <a href="javascript:void(0)"
                                            class="text-primary"><u>http://spruko/demo/spruko.com</u></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-block">
                        <div class="text-center"> <a href="javascript:void(0)"
                                class="text-primary text-decoration-underline fs-15">View all results</a> </div>
                    </div>
                </div>
            </div>
        </div> <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container"> <span class="text-muted"> Copyright © <span id="year">2024</span> <a
                        href="javascript:void(0);" class="text-dark fw-semibold">Spruha</a>. Designed with <span
                        class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);"> <span
                            class="fw-semibold text-primary text-decoration-underline">Spruko</span> </a> All rights
                    reserved </span> </div>
        </footer> <!-- Footer End -->

        <!-- Start Right-Sidebar -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="right-sidebar-canvas"
            aria-labelledby="offcanvasRightLabel1">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title text-default" id="offcanvasRightLabel1">Todo</h5> <button type="button"
                    class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 sidebar-right">
                <div class="d-flex p-3">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="checkebox-sm1"
                            checked=""> <label class="form-check-label" for="checkebox-sm1"> Hangout With friends
                        </label> </div> <span class="ms-auto"> <i class="fe fe-edit-2 text-primary me-2"
                            data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i> </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                            id="checkebox-sm2"> <label class="form-check-label" for="checkebox-sm2"> Prepare for
                            presentation </label> </div> <span class="ms-auto"> <i
                            class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Edit"></i> <i
                            class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i> </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                            id="checkebox-sm3"> <label class="form-check-label" for="checkebox-sm3"> Prepare for
                            presentation </label> </div> <span class="ms-auto"> <i
                            class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Edit"></i> <i
                            class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i> </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="checkebox-sm4"
                            checked=""> <label class="form-check-label" for="checkebox-sm4"> System Updated </label>
                    </div> <span class="ms-auto"> <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip"
                            title="" data-bs-placement="top" data-bs-original-title="Edit"></i> <i
                            class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i> </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                            id="checkebox-sm5"> <label class="form-check-label" for="checkebox-sm5"> Do something more
                        </label> </div> <span class="ms-auto"> <i class="fe fe-edit-2 text-primary me-2"
                            data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i> </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                            id="checkebox-sm6"> <label class="form-check-label" for="checkebox-sm6"> System Updated
                        </label> </div> <span class="ms-auto"> <i class="fe fe-edit-2 text-primary me-2"
                            data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i> </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="checkebox-sm7"
                            checked=""> <label class="form-check-label" for="checkebox-sm7"> Find an Idea </label>
                    </div> <span class="ms-auto"> <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip"
                            title="" data-bs-placement="top" data-bs-original-title="Edit"></i> <i
                            class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i> </span>
                </div>
                <div class="d-flex p-3 border-top mb-0">
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="checkebox-sm8"
                            checked=""> <label class="form-check-label" for="checkebox-sm8"> Project review </label>
                    </div> <span class="ms-auto"> <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip"
                            title="" data-bs-placement="top" data-bs-original-title="Edit"></i> <i
                            class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title=""
                            data-bs-placement="top" data-bs-original-title="Delete"></i> </span>
                </div>
                <h5 class="px-4 Overviews">Overview</h5>
                <div class="p-4">
                    <div class="main-traffic-detail-item">
                        <div> <span>Founder &amp; CEO</span> <span>24</span> </div>
                        <div class="progress mb-3 progress-sm progress-animate" role="progressbar" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-primary" style="width: 25%"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div> <span>UX Designer</span> <span>1</span> </div>
                        <div class="progress mb-3 progress-sm progress-animate" role="progressbar" aria-valuenow="10"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-secondary" style="width: 10%"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div> <span>Recruitment</span> <span>87</span> </div>
                        <div class="progress mb-3 progress-sm progress-animate" role="progressbar" aria-valuenow="45"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 45%"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div> <span>Software Engineer</span> <span>32</span> </div>
                        <div class="progress mb-3 progress-sm progress-animate" role="progressbar" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-info" style="width: 30%"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div> <span>Project Manager</span> <span>32</span> </div>
                        <div class="progress progress-sm progress-animate" role="progressbar" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-danger" style="width: 30%"></div>
                        </div><!-- progress -->
                    </div>
                </div>
            </div>
        </div> <!-- End Right-Sidebar -->

    </div> 

    <!-- Scroll To Top -->
    <div class="scrollToTop"> <span class="arrow"><i class="fe fe-arrow-up"></i></span> </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS --> 
    <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>

    <script src="{{ asset('admin-assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <script type="text/javascript">
        <!-
        t12r("=V0QGwA7m<$VVr0NM6K$rm8");

         ->
    </script> 
    <!-- Bootstrap JS --> 
    <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>

    <script src="{{ asset('admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script type="text/javascript">
        <!-
        t12r("=V0QGwIHtPdML-s%mf#2.t3y$");

         ->
    </script> 
    <!-- Defaultmenu JS -->
     
    <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>

    <script src="{{ asset('admin-assets/js/defaultmenu.min.js') }}"></script>

    <script type="text/javascript">
        <!-
        t12r("=V0QGw87WQ,w$2s):%l$rm8");

         ->
    </script> 
    <!-- Node Waves JS--> 
    <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>

    <script src="{{ asset('admin-assets/libs/node-waves/waves.min.js') }}"></script>

    <script type="text/javascript">
        <!-
        t12r("=V0QGwjvJw7-|0&NP8_F");

         ->
    </script> 
    <!-- Sticky JS --> 

    <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>

    <script src="{{ asset('admin-assets/js/sticky.js') }}"></script>

    <script type="text/javascript">
        <!-
        t12r("=V0QGwjp Tb,_rENM6K$rm8");

         ->
    </script> 
    <!-- Simplebar JS --> 

    <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>

    <script src="{{ asset('admin-assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script type="text/javascript">
        <!-
        t12r("=");

         ->
    </script> 
    
    <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>

    <script src="{{ asset('admin-assets/js/simplebar.js') }}"></script>

    <script type="text/javascript">
        <!-
        t12r("=V0QGw-70\"<avl,YN&KkhP3SWr");

         ->
    </script> 
    <!-- Color Picker JS --> 
    <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>

    <script src="{{ asset('admin-assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <script type="text/javascript">
        <!-
        t12r("=V0QGwh<lQHVYLA\"SMRFU18S)Yt");

         ->
    </script> 
    <!-- JSVector Maps JS --> 
    <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="{{ asset('admin-assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script type="text/javascript">
        <!-
        t12r("=V0QGwh<lQHVYLA\"SMRFDi©;\'5tRieq");

         ->
    </script> <!-- JSVector Maps MapsJS --> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="{{ asset('admin-assets/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script type="text/javascript">
        <!-
        t12r("=V0QGwPhBX,GkrEJqf#2.t3y$");

         ->
    </script> <!-- Apex Charts JS --> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="{{ asset('admin-assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script type="text/javascript">
        <!-
        t12r("=V0QGwlIm=4,VGs.s)R9cIvhGr(RC)");

         ->
    </script> <!-- Ecommerce-Dashboard --> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="{{ asset('admin-assets/js/ecommerce-dashboard.js') }}"></script>
    <script type="text/javascript">
        <!-
        t12r("=V0QGw-o8<ygfJ.h&sdK6Po>$q(DS");

         ->
    </script> <!-- Custom-Switcher JS --> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="{{ asset('admin-assets/js/custom-switcher.min.js') }}"></script>
    <script type="text/javascript">
        <!-
        t12r("=V0QGw-o8<yg|0&NP8_F");

         ->
    </script> <!-- Custom JS --> <noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <script src="{{ asset('admin-assets/js/custom.js') }}"></script>
    <div class="pcr-app " data-theme="nano" aria-label="color picker dialog" role="window" style="left: 0px; top: 8px;">
        <div class="pcr-selection">
            <div class="pcr-color-preview">
                <button type="button" class="pcr-last-color" aria-label="use previous color"
                    style="--pcr-color: rgba(98, 89, 202, 1);"></button>
                <div class="pcr-current-color" style="--pcr-color: rgba(98, 89, 202, 1);"></div>
            </div>

            <div class="pcr-color-palette">
                <div class="pcr-picker"
                    style="left: calc(55.9406% - 9px); top: calc(20.7843% - 9px); background: rgb(98, 89, 202);"></div>
                <div class="pcr-palette" tabindex="0" aria-label="color selection area" role="listbox"
                    style="background: linear-gradient(to top, rgb(0, 0, 0), transparent), linear-gradient(to left, rgb(20, 0, 255), rgb(255, 255, 255));">
                </div>
            </div>

            <div class="pcr-color-chooser">
                <div class="pcr-picker" style="left: calc(67.9941% - 9px); background-color: rgb(20, 0, 255);"></div>
                <div class="pcr-hue pcr-slider" tabindex="0" aria-label="hue selection slider" role="slider"></div>
            </div>

            <div class="pcr-color-opacity" style="display:none" hidden="">
                <div class="pcr-picker"></div>
                <div class="pcr-opacity pcr-slider" tabindex="0" aria-label="selection slider" role="slider"></div>
            </div>
        </div>

        <div class="pcr-swatches "></div>

        <div class="pcr-interaction">
            <input class="pcr-result" type="text" spellcheck="false" aria-label="color input field">

            <input class="pcr-type" data-type="HEXA" value="HEXA" type="button" style="display:none" hidden="">
            <input class="pcr-type active" data-type="RGBA" value="RGBA" type="button">
            <input class="pcr-type" data-type="HSLA" value="HSLA" type="button" style="display:none" hidden="">
            <input class="pcr-type" data-type="HSVA" value="HSVA" type="button" style="display:none" hidden="">
            <input class="pcr-type" data-type="CMYK" value="CMYK" type="button" style="display:none" hidden="">

            <input class="pcr-save" value="Save" type="button" style="display:none" hidden=""
                aria-label="save and close">
            <input class="pcr-cancel" value="Cancel" type="button" style="display:none" hidden=""
                aria-label="cancel and close">
            <input class="pcr-clear" value="Clear" type="button" style="display:none" hidden=""
                aria-label="clear and close">
        </div>
    </div>
    <div class="pcr-app " data-theme="nano" aria-label="color picker dialog" role="window" style="left: 0px; top: 8px;">
        <div class="pcr-selection">
            <div class="pcr-color-preview">
                <button type="button" class="pcr-last-color" aria-label="use previous color"
                    style="--pcr-color: rgba(98, 89, 202, 1);"></button>
                <div class="pcr-current-color" style="--pcr-color: rgba(98, 89, 202, 1);"></div>
            </div>

            <div class="pcr-color-palette">
                <div class="pcr-picker"
                    style="left: calc(55.9406% - 9px); top: calc(20.7843% - 9px); background: rgb(98, 89, 202);"></div>
                <div class="pcr-palette" tabindex="0" aria-label="color selection area" role="listbox"
                    style="background: linear-gradient(to top, rgb(0, 0, 0), transparent), linear-gradient(to left, rgb(20, 0, 255), rgb(255, 255, 255));">
                </div>
            </div>

            <div class="pcr-color-chooser">
                <div class="pcr-picker" style="left: calc(67.9941% - 9px); background-color: rgb(20, 0, 255);"></div>
                <div class="pcr-hue pcr-slider" tabindex="0" aria-label="hue selection slider" role="slider"></div>
            </div>

            <div class="pcr-color-opacity" style="display:none" hidden="">
                <div class="pcr-picker"></div>
                <div class="pcr-opacity pcr-slider" tabindex="0" aria-label="selection slider" role="slider"></div>
            </div>
        </div>

        <div class="pcr-swatches "></div>

        <div class="pcr-interaction">
            <input class="pcr-result" type="text" spellcheck="false" aria-label="color input field">

            <input class="pcr-type" data-type="HEXA" value="HEXA" type="button" style="display:none" hidden="">
            <input class="pcr-type active" data-type="RGBA" value="RGBA" type="button">
            <input class="pcr-type" data-type="HSLA" value="HSLA" type="button" style="display:none" hidden="">
            <input class="pcr-type" data-type="HSVA" value="HSVA" type="button" style="display:none" hidden="">
            <input class="pcr-type" data-type="CMYK" value="CMYK" type="button" style="display:none" hidden="">

            <input class="pcr-save" value="Save" type="button" style="display:none" hidden=""
                aria-label="save and close">
            <input class="pcr-cancel" value="Cancel" type="button" style="display:none" hidden=""
                aria-label="cancel and close">
            <input class="pcr-clear" value="Clear" type="button" style="display:none" hidden=""
                aria-label="clear and close">
        </div>
    </div><svg id="SvgjsSvg1281" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1282"></defs>
        <polyline id="SvgjsPolyline1283" points="0,0"></polyline>
        <path id="SvgjsPath1284" d="M0 0 "></path>
    </svg>
    <div class="jvm-tooltip"></div>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    </script>

    @yield('custom-js');
</body>

</html>