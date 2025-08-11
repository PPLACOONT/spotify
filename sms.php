<?php
session_start();
require 'stop.php';
require 'a.php';

?>
<!DOCTYPE html>
<html style=""
    class=" js no-touch hashchange history csstransforms csstransforms3d csstransitions svg inlinesvg svgclippaths placeholder"
    lang="de-ch">

<head>
    <meta charset="utf-8">
    <base >
    <link href="resources/img/favicon.ico" rel="icon" type="image/x-icon" />
    <title>Bestätigung | SwissPass</title>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="description" content="SwissPass">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="__META_ROBOTS__">

    <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8"
        data-domain-script="e91f4b90-f9aa-4ace-891b-96dd07595d9f" data-document-language="true"></script>
    <script type="text/javascript">
        function OptanonWrapper() { }
    </script>

    <script type="text/javascript"
        src="https://d27la2n6wh4qws.cloudfront.net/1.11.126/assets/libs/safari-nomodule.js"></script>
    <script type="text/javascript"
        src="https://d27la2n6wh4qws.cloudfront.net/1.11.126/assets/libs/modernizr.js"></script>
    <script type="text/javascript">
        // minimal data fragment to prevent library fail
        window.digitalDataLayer = window.digitalDataLayer || [];
    </script>
    <!-- this parameter gets replaced by the script start.sh -->
    <script type="text/javascript"
        src="https://assets.adobedtm.com/15ff638fdec4/7a0c4d63ddff/launch-6cc731e967aa.min.js" async=""></script>
    <script type="text/javascript" src="env.js?v=1679478838"></script>
    <link rel="stylesheet" href="https://d27la2n6wh4qws.cloudfront.net/1.11.126/styles.aeb1a4bd2673a5c2.css">
    <style>
        #clearfix[_ngcontent-xih-c25]:before,
        #clearfix[_ngcontent-xih-c25]:after {
            content: " ";
            display: table
        }

        #clearfix[_ngcontent-xih-c25]:after {
            clear: both
        }

        #justify[_ngcontent-xih-c25] {
            text-align: justify
        }

        #justify[_ngcontent-xih-c25]:after {
            content: "";
            display: inline-block;
            width: 100%
        }

        #link-in-text[_ngcontent-xih-c25],
        #link-in-text[_ngcontent-xih-c25]:hover,
        #link-in-text[_ngcontent-xih-c25]:focus,
        #link-in-text[_ngcontent-xih-c25]:active,
        #link-in-text[_ngcontent-xih-c25]:visited {
            color: #1e416e;
            outline: none;
            text-decoration: underline
        }

        #link-in-text[_ngcontent-xih-c25]:hover,
        #link-in-text[_ngcontent-xih-c25]:focus {
            color: #173256;
            text-decoration: underline
        }

        #overlay[_ngcontent-xih-c25] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        #trim-margin[_ngcontent-xih-c25]>[_ngcontent-xih-c25]:first-child {
            margin-top: 0 !important
        }

        #trim-margin[_ngcontent-xih-c25]>[_ngcontent-xih-c25]:last-child {
            margin-bottom: 0 !important
        }

        .mod-mobileheader {
            height: 50px !important
        }

        .mod-nestedmenu--link .mod-nestedmenu--linkicon {
            font-size: 2.3rem;
            position: absolute;
            top: 1.5rem
        }

        .mod-nestedmenu--link .mod-nestedmenu--linktext {
            padding-left: 3rem !important
        }

        .mod-nestedmenu-expandlink {
            color: #fff;
            position: absolute;
            right: 20px;
            top: 20px
        }

        .mod-nestedmenu--languagelinks {
            margin: 0;
            padding: 20px
        }

        .mod-nestedmenu--languagelinks-entry {
            float: left;
            border-right: 1px solid white
        }

        .mod-nestedmenu--languagelinks-entry:last-child {
            border-right: none
        }

        .mod-nestedmenu--languagelinks-entry .mod-nestedmenu--link {
            padding: 0 10px !important;
            text-transform: uppercase
        }

        .mod-nestedmenu--languagelinks-entry:first-child .mod-nestedmenu--link {
            padding-left: 0 !important
        }

        .mod-nestedmenu--languagelinks-entry span.mod-nestedmenu--link {
            font-weight: 700
        }

        .mod-nestedmenu--list {
            border-top: 1px solid #AF1602
        }

        .mod-offcanvas,
        .mod-nestedmenu--item {
            background-color: #c51416 !important
        }

        .mod-offcanvas.mod-nestedmenu--selected,
        .mod-nestedmenu--item.mod-nestedmenu--selected {
            background-color: #900a05 !important
        }

        .mod-nestedmenu--expandible .mod-nestedmenu--item {
            background-color: #af1602 !important
        }

        .mod-nestedmenu--expandible .mod-nestedmenu--item.mod-nestedmenu--selected {
            background-color: #900a05 !important
        }

        .mod-nestedmenu--expandible .mod-nestedmenu--item .mod-nestedmenu--linktext {
            padding-left: 50px !important
        }

        nav.mod-offcanvas.js-offcanvas-aside[_ngcontent-xih-c25] {
            padding-bottom: 10rem
        }
    </style>
    <style>
        #clearfix[_ngcontent-xih-c84]:before,
        #clearfix[_ngcontent-xih-c84]:after {
            content: " ";
            display: table
        }

        #clearfix[_ngcontent-xih-c84]:after {
            clear: both
        }

        #justify[_ngcontent-xih-c84] {
            text-align: justify
        }

        #justify[_ngcontent-xih-c84]:after {
            content: "";
            display: inline-block;
            width: 100%
        }

        #link-in-text[_ngcontent-xih-c84],
        #link-in-text[_ngcontent-xih-c84]:hover,
        #link-in-text[_ngcontent-xih-c84]:focus,
        #link-in-text[_ngcontent-xih-c84]:active,
        #link-in-text[_ngcontent-xih-c84]:visited {
            color: #1e416e;
            outline: none;
            text-decoration: underline
        }

        #link-in-text[_ngcontent-xih-c84]:hover,
        #link-in-text[_ngcontent-xih-c84]:focus {
            color: #173256;
            text-decoration: underline
        }

        #overlay[_ngcontent-xih-c84] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        #trim-margin[_ngcontent-xih-c84]>[_ngcontent-xih-c84]:first-child {
            margin-top: 0 !important
        }

        #trim-margin[_ngcontent-xih-c84]>[_ngcontent-xih-c84]:last-child {
            margin-bottom: 0 !important
        }

        body[_ngcontent-xih-c84]:before {
            content: "";
            visibility: hidden;
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        @media screen and (max-width: 767px) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-xs  "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-xs orientation-portrait "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-xs orientation-portrait resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-xs orientation-landscape "
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-xs orientation-landscape resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-sm  "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-sm orientation-portrait "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-sm orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-sm orientation-landscape "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-sm orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-md  "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-md orientation-portrait "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-md orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-md orientation-landscape "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-md orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-lg  "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-lg orientation-portrait "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-lg orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-lg orientation-landscape "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-lg orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c84]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        .mod-content--page {
            position: relative
        }

        .header-visual {
            display: flex;
            align-items: center;
            flex-direction: column;
            max-height: 355px;
            overflow: hidden
        }

        .header-visual--mobile {
            display: none
        }

        @media screen and (max-width: 767px) {
            .header-visual--mobile {
                display: block
            }
        }

        .header-visual--desktop {
            display: block
        }

        @media screen and (max-width: 767px) {
            .header-visual--desktop {
                display: none
            }
        }

        .header-visual__title {
            position: absolute;
            margin-top: 1em;
            width: 100%
        }

        @media screen and (max-width: 767px) {
            .header-visual__title {
                position: relative
            }
        }

        .header-visual__title h1 {
            max-width: 50%;
            float: right;
            text-align: right;
            font-size: 2.5em;
            margin-top: 1em;
            margin-right: 1em
        }

        @media screen and (max-width: 767px) {
            .header-visual__title h1 {
                font-size: 2em;
                margin-top: .8em;
                margin-right: 1em
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            .header-visual__title h1 {
                font-size: 2em;
                margin-top: .8em;
                margin-right: 1em
            }
        }

        @media screen and (max-width: 767px) {
            .header-visual__title h1 {
                max-width: 75%;
                text-align: left;
                float: none;
                padding-left: 20px
            }
        }

        .mod-content--stretch-height,
        .mod-content--stretch-height .container:last-child,
        .mod-content--stretch-height .mod-content--page,
        .mod-content--stretch-height .mod-content--overview,
        .mod-content--stretch-height .row {
            height: 100%
        }

        .mod-content--fullwidth {
            max-width: 100vw
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            .skin-registration.skel-wrap-outer .skel-wrap-inner {
                height: 100%
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            .skin-registration.skel-wrap-outer .skel-wrap-inner {
                height: 100%
            }
        }

        @media screen and (min-width: 1200px) {
            .skin-registration.skel-wrap-outer .skel-wrap-inner {
                height: 100%
            }
        }
    </style>
    <style>
        #clearfix[_ngcontent-xih-c16]:before,
        #clearfix[_ngcontent-xih-c16]:after {
            content: " ";
            display: table
        }

        #clearfix[_ngcontent-xih-c16]:after {
            clear: both
        }

        #justify[_ngcontent-xih-c16] {
            text-align: justify
        }

        #justify[_ngcontent-xih-c16]:after {
            content: "";
            display: inline-block;
            width: 100%
        }

        #link-in-text[_ngcontent-xih-c16],
        #link-in-text[_ngcontent-xih-c16]:hover,
        #link-in-text[_ngcontent-xih-c16]:focus,
        #link-in-text[_ngcontent-xih-c16]:active,
        #link-in-text[_ngcontent-xih-c16]:visited {
            color: #1e416e;
            outline: none;
            text-decoration: underline
        }

        #link-in-text[_ngcontent-xih-c16]:hover,
        #link-in-text[_ngcontent-xih-c16]:focus {
            color: #173256;
            text-decoration: underline
        }

        #overlay[_ngcontent-xih-c16] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        #trim-margin[_ngcontent-xih-c16]>[_ngcontent-xih-c16]:first-child {
            margin-top: 0 !important
        }

        #trim-margin[_ngcontent-xih-c16]>[_ngcontent-xih-c16]:last-child {
            margin-bottom: 0 !important
        }

        body[_ngcontent-xih-c16]:before {
            content: "";
            visibility: hidden;
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        @media screen and (max-width: 767px) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-xs  "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-xs orientation-portrait "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-xs orientation-portrait resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-xs orientation-landscape "
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-xs orientation-landscape resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-sm  "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-sm orientation-portrait "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-sm orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-sm orientation-landscape "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-sm orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-md  "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-md orientation-portrait "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-md orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-md orientation-landscape "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-md orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-lg  "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-lg orientation-portrait "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-lg orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-lg orientation-landscape "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-lg orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c16]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        .mod-content--backlink[_ngcontent-xih-c16] {
            position: absolute;
            z-index: 1000;
            top: 0;
            left: 0;
            transition: margin-top ease-out .25s;
            width: 40px;
            height: 100%;
            min-height: 100vh;
            text-align: center;
            color: #333;
            background-color: #fff
        }

        @media screen and (min-width: 1200px) {
            .mod-content--backlink[_ngcontent-xih-c16] {
                width: 40px
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            .mod-content--backlink[_ngcontent-xih-c16] {
                width: 40px
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            .mod-content--backlink[_ngcontent-xih-c16] {
                width: 40px
            }
        }

        @media screen and (max-width: 767px) {
            .mod-content--backlink[_ngcontent-xih-c16] {
                width: 30px
            }
        }

        .mod-content--backlink[_ngcontent-xih-c16] .mod-content--backlink__button[_ngcontent-xih-c16] {
            font-size: 16px;
            background-color: #ddd;
            padding: 50px 0;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0
        }

        @media screen and (max-width: 767px) {
            .mod-content--backlink[_ngcontent-xih-c16] .mod-content--backlink__button[_ngcontent-xih-c16] {
                padding: 27px 0
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            .mod-content--backlink[_ngcontent-xih-c16] .mod-content--backlink__button[_ngcontent-xih-c16] {
                padding: 27px 0
            }
        }
    </style>
    <style>
        .scroll-to-top[_ngcontent-xih-c85] {
            position: fixed
        }

        @media screen and (max-width: 768px) {
            .scroll-to-top[_ngcontent-xih-c85] {
                bottom: 2rem;
                right: 2rem
            }
        }
    </style>
    <style>
        @media screen and (max-width: 767px) {

            .mod-notification--sign__right[_ngcontent-xih-c47],
            .mod-notification--sign__right[_ngcontent-xih-c47] .mod-valign[_ngcontent-xih-c47] {
                height: auto;
                position: relative;
                float: right
            }

            .mod-notification[_ngcontent-xih-c47] .mod-notification--sign__right[_ngcontent-xih-c47]~.mod-notification--content[_ngcontent-xih-c47] {
                padding-right: 0
            }
        }
    </style>
    <script src="https://cdn.cookielaw.org/scripttemplates/6.33.0/otBannerSdk.js" async=""
        type="text/javascript"></script>
    <style id="onetrust-style">
        #onetrust-banner-sdk {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        #onetrust-banner-sdk .onetrust-vendors-list-handler {
            cursor: pointer;
            color: #1f96db;
            font-size: inherit;
            font-weight: bold;
            text-decoration: none;
            margin-left: 5px
        }

        #onetrust-banner-sdk .onetrust-vendors-list-handler:hover {
            color: #1f96db
        }

        #onetrust-banner-sdk:focus {
            outline: 2px solid #000;
            outline-offset: -2px
        }

        #onetrust-banner-sdk a:focus {
            outline: 2px solid #000
        }

        #onetrust-banner-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler,
        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            outline-offset: 1px
        }

        #onetrust-banner-sdk .ot-close-icon,
        #onetrust-pc-sdk .ot-close-icon,
        #ot-sync-ntfy .ot-close-icon {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMzQ4LjMzM3B4IiBoZWlnaHQ9IjM0OC4zMzNweCIgdmlld0JveD0iMCAwIDM0OC4zMzMgMzQ4LjMzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzQ4LjMzMyAzNDguMzM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PHBhdGggZmlsbD0iIzU2NTY1NiIgZD0iTTMzNi41NTksNjguNjExTDIzMS4wMTYsMTc0LjE2NWwxMDUuNTQzLDEwNS41NDljMTUuNjk5LDE1LjcwNSwxNS42OTksNDEuMTQ1LDAsNTYuODVjLTcuODQ0LDcuODQ0LTE4LjEyOCwxMS43NjktMjguNDA3LDExLjc2OWMtMTAuMjk2LDAtMjAuNTgxLTMuOTE5LTI4LjQxOS0xMS43NjlMMTc0LjE2NywyMzEuMDAzTDY4LjYwOSwzMzYuNTYzYy03Ljg0Myw3Ljg0NC0xOC4xMjgsMTEuNzY5LTI4LjQxNiwxMS43NjljLTEwLjI4NSwwLTIwLjU2My0zLjkxOS0yOC40MTMtMTEuNzY5Yy0xNS42OTktMTUuNjk4LTE1LjY5OS00MS4xMzksMC01Ni44NWwxMDUuNTQtMTA1LjU0OUwxMS43NzQsNjguNjExYy0xNS42OTktMTUuNjk5LTE1LjY5OS00MS4xNDUsMC01Ni44NDRjMTUuNjk2LTE1LjY4Nyw0MS4xMjctMTUuNjg3LDU2LjgyOSwwbDEwNS41NjMsMTA1LjU1NEwyNzkuNzIxLDExLjc2N2MxNS43MDUtMTUuNjg3LDQxLjEzOS0xNS42ODcsNTYuODMyLDBDMzUyLjI1OCwyNy40NjYsMzUyLjI1OCw1Mi45MTIsMzM2LjU1OSw2OC42MTF6Ii8+PC9nPjwvc3ZnPg==");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 12px;
            width: 12px
        }

        #onetrust-banner-sdk .powered-by-logo,
        #onetrust-banner-sdk .ot-pc-footer-logo a,
        #onetrust-pc-sdk .powered-by-logo,
        #onetrust-pc-sdk .ot-pc-footer-logo a,
        #ot-sync-ntfy .powered-by-logo,
        #ot-sync-ntfy .ot-pc-footer-logo a {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 25px;
            width: 152px;
            display: block;
            text-decoration: none;
            font-size: 0.75em
        }

        #onetrust-banner-sdk .powered-by-logo:hover,
        #onetrust-banner-sdk .ot-pc-footer-logo a:hover,
        #onetrust-pc-sdk .powered-by-logo:hover,
        #onetrust-pc-sdk .ot-pc-footer-logo a:hover,
        #ot-sync-ntfy .powered-by-logo:hover,
        #ot-sync-ntfy .ot-pc-footer-logo a:hover {
            color: #565656
        }

        #onetrust-banner-sdk h3 *,
        #onetrust-banner-sdk h4 *,
        #onetrust-banner-sdk h6 *,
        #onetrust-banner-sdk button *,
        #onetrust-banner-sdk a[data-parent-id] *,
        #onetrust-pc-sdk h3 *,
        #onetrust-pc-sdk h4 *,
        #onetrust-pc-sdk h6 *,
        #onetrust-pc-sdk button *,
        #onetrust-pc-sdk a[data-parent-id] *,
        #ot-sync-ntfy h3 *,
        #ot-sync-ntfy h4 *,
        #ot-sync-ntfy h6 *,
        #ot-sync-ntfy button *,
        #ot-sync-ntfy a[data-parent-id] * {
            font-size: inherit;
            font-weight: inherit;
            color: inherit
        }

        #onetrust-banner-sdk .ot-hide,
        #onetrust-pc-sdk .ot-hide,
        #ot-sync-ntfy .ot-hide {
            display: none !important
        }

        #onetrust-pc-sdk .ot-sdk-row .ot-sdk-column {
            padding: 0
        }

        #onetrust-pc-sdk .ot-sdk-container {
            padding-right: 0
        }

        #onetrust-pc-sdk .ot-sdk-row {
            flex-direction: initial;
            width: 100%
        }

        #onetrust-pc-sdk [type="checkbox"]:checked,
        #onetrust-pc-sdk [type="checkbox"]:not(:checked) {
            pointer-events: initial
        }

        #onetrust-pc-sdk [type="checkbox"]:disabled+label::before,
        #onetrust-pc-sdk [type="checkbox"]:disabled+label:after,
        #onetrust-pc-sdk [type="checkbox"]:disabled+label {
            pointer-events: none;
            opacity: 0.7
        }

        #onetrust-pc-sdk #vendor-list-content {
            transform: translate3d(0, 0, 0)
        }

        #onetrust-pc-sdk li input[type="checkbox"] {
            z-index: 1
        }

        #onetrust-pc-sdk li .ot-checkbox label {
            z-index: 2
        }

        #onetrust-pc-sdk li .ot-checkbox input[type="checkbox"] {
            height: auto;
            width: auto
        }

        #onetrust-pc-sdk li .host-title a,
        #onetrust-pc-sdk li .ot-host-name a,
        #onetrust-pc-sdk li .accordion-text,
        #onetrust-pc-sdk li .ot-acc-txt {
            z-index: 2;
            position: relative
        }

        #onetrust-pc-sdk input {
            margin: 3px 0.1ex
        }

        #onetrust-pc-sdk .pc-logo,
        #onetrust-pc-sdk .ot-pc-logo {
            height: 60px;
            width: 180px;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat
        }

        #onetrust-pc-sdk .screen-reader-only,
        #onetrust-pc-sdk .ot-scrn-rdr,
        .ot-sdk-cookie-policy .screen-reader-only,
        .ot-sdk-cookie-policy .ot-scrn-rdr {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        #onetrust-pc-sdk.ot-fade-in,
        .onetrust-pc-dark-filter.ot-fade-in,
        #onetrust-banner-sdk.ot-fade-in {
            animation-name: onetrust-fade-in;
            animation-duration: 400ms;
            animation-timing-function: ease-in-out
        }

        #onetrust-pc-sdk.ot-hide {
            display: none !important
        }

        .onetrust-pc-dark-filter.ot-hide {
            display: none !important
        }

        #ot-sdk-btn.ot-sdk-show-settings,
        #ot-sdk-btn.optanon-show-settings {
            color: #68b631;
            border: 1px solid #68b631;
            height: auto;
            white-space: normal;
            word-wrap: break-word;
            padding: 0.8em 2em;
            font-size: 0.8em;
            line-height: 1.2;
            cursor: pointer;
            -moz-transition: 0.1s ease;
            -o-transition: 0.1s ease;
            -webkit-transition: 1s ease;
            transition: 0.1s ease
        }

        #ot-sdk-btn.ot-sdk-show-settings:hover,
        #ot-sdk-btn.optanon-show-settings:hover {
            color: #fff;
            background-color: #68b631
        }

        .onetrust-pc-dark-filter {
            background: rgba(0, 0, 0, 0.5);
            z-index: 2147483646;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0
        }

        @keyframes onetrust-fade-in {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        .ot-cookie-label {
            text-decoration: underline
        }

        @media only screen and (min-width: 426px) and (max-width: 896px) and (orientation: landscape) {
            #onetrust-pc-sdk p {
                font-size: 0.75em
            }
        }

        #onetrust-banner-sdk .banner-option-input:focus+label {
            outline: 1px solid #000;
            outline-style: auto
        }

        .category-vendors-list-handler+a:focus,
        .category-vendors-list-handler+a:focus-visible {
            outline: 2px solid #000
        }

        #onetrust-pc-sdk .ot-userid-title {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-userid-title>span,
        #onetrust-pc-sdk .ot-userid-timestamp>span {
            font-weight: 700
        }

        #onetrust-pc-sdk .ot-userid-desc {
            font-style: italic
        }

        #onetrust-pc-sdk .ot-host-desc a {
            pointer-events: initial
        }

        #onetrust-pc-sdk .ot-ven-hdr>p a {
            position: relative;
            z-index: 2;
            pointer-events: initial
        }

        #onetrust-banner-sdk,
        #onetrust-pc-sdk,
        #ot-sdk-cookie-policy,
        #ot-sync-ntfy {
            font-size: 16px
        }

        #onetrust-banner-sdk *,
        #onetrust-banner-sdk ::after,
        #onetrust-banner-sdk ::before,
        #onetrust-pc-sdk *,
        #onetrust-pc-sdk ::after,
        #onetrust-pc-sdk ::before,
        #ot-sdk-cookie-policy *,
        #ot-sdk-cookie-policy ::after,
        #ot-sdk-cookie-policy ::before,
        #ot-sync-ntfy *,
        #ot-sync-ntfy ::after,
        #ot-sync-ntfy ::before {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box
        }

        #onetrust-banner-sdk div,
        #onetrust-banner-sdk span,
        #onetrust-banner-sdk h1,
        #onetrust-banner-sdk h2,
        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk h4,
        #onetrust-banner-sdk h5,
        #onetrust-banner-sdk h6,
        #onetrust-banner-sdk p,
        #onetrust-banner-sdk img,
        #onetrust-banner-sdk svg,
        #onetrust-banner-sdk button,
        #onetrust-banner-sdk section,
        #onetrust-banner-sdk a,
        #onetrust-banner-sdk label,
        #onetrust-banner-sdk input,
        #onetrust-banner-sdk ul,
        #onetrust-banner-sdk li,
        #onetrust-banner-sdk nav,
        #onetrust-banner-sdk table,
        #onetrust-banner-sdk thead,
        #onetrust-banner-sdk tr,
        #onetrust-banner-sdk td,
        #onetrust-banner-sdk tbody,
        #onetrust-banner-sdk .ot-main-content,
        #onetrust-banner-sdk .ot-toggle,
        #onetrust-banner-sdk #ot-content,
        #onetrust-banner-sdk #ot-pc-content,
        #onetrust-banner-sdk .checkbox,
        #onetrust-pc-sdk div,
        #onetrust-pc-sdk span,
        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6,
        #onetrust-pc-sdk p,
        #onetrust-pc-sdk img,
        #onetrust-pc-sdk svg,
        #onetrust-pc-sdk button,
        #onetrust-pc-sdk section,
        #onetrust-pc-sdk a,
        #onetrust-pc-sdk label,
        #onetrust-pc-sdk input,
        #onetrust-pc-sdk ul,
        #onetrust-pc-sdk li,
        #onetrust-pc-sdk nav,
        #onetrust-pc-sdk table,
        #onetrust-pc-sdk thead,
        #onetrust-pc-sdk tr,
        #onetrust-pc-sdk td,
        #onetrust-pc-sdk tbody,
        #onetrust-pc-sdk .ot-main-content,
        #onetrust-pc-sdk .ot-toggle,
        #onetrust-pc-sdk #ot-content,
        #onetrust-pc-sdk #ot-pc-content,
        #onetrust-pc-sdk .checkbox,
        #ot-sdk-cookie-policy div,
        #ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy img,
        #ot-sdk-cookie-policy svg,
        #ot-sdk-cookie-policy button,
        #ot-sdk-cookie-policy section,
        #ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy label,
        #ot-sdk-cookie-policy input,
        #ot-sdk-cookie-policy ul,
        #ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy nav,
        #ot-sdk-cookie-policy table,
        #ot-sdk-cookie-policy thead,
        #ot-sdk-cookie-policy tr,
        #ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy tbody,
        #ot-sdk-cookie-policy .ot-main-content,
        #ot-sdk-cookie-policy .ot-toggle,
        #ot-sdk-cookie-policy #ot-content,
        #ot-sdk-cookie-policy #ot-pc-content,
        #ot-sdk-cookie-policy .checkbox,
        #ot-sync-ntfy div,
        #ot-sync-ntfy span,
        #ot-sync-ntfy h1,
        #ot-sync-ntfy h2,
        #ot-sync-ntfy h3,
        #ot-sync-ntfy h4,
        #ot-sync-ntfy h5,
        #ot-sync-ntfy h6,
        #ot-sync-ntfy p,
        #ot-sync-ntfy img,
        #ot-sync-ntfy svg,
        #ot-sync-ntfy button,
        #ot-sync-ntfy section,
        #ot-sync-ntfy a,
        #ot-sync-ntfy label,
        #ot-sync-ntfy input,
        #ot-sync-ntfy ul,
        #ot-sync-ntfy li,
        #ot-sync-ntfy nav,
        #ot-sync-ntfy table,
        #ot-sync-ntfy thead,
        #ot-sync-ntfy tr,
        #ot-sync-ntfy td,
        #ot-sync-ntfy tbody,
        #ot-sync-ntfy .ot-main-content,
        #ot-sync-ntfy .ot-toggle,
        #ot-sync-ntfy #ot-content,
        #ot-sync-ntfy #ot-pc-content,
        #ot-sync-ntfy .checkbox {
            font-family: inherit;
            font-weight: normal;
            -webkit-font-smoothing: auto;
            letter-spacing: normal;
            line-height: normal;
            padding: 0;
            margin: 0;
            height: auto;
            min-height: 0;
            max-height: none;
            width: auto;
            min-width: 0;
            max-width: none;
            border-radius: 0;
            border: none;
            clear: none;
            float: none;
            position: static;
            bottom: auto;
            left: auto;
            right: auto;
            top: auto;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            background: none;
            overflow: visible;
            vertical-align: baseline;
            visibility: visible;
            z-index: auto;
            box-shadow: none
        }

        #onetrust-banner-sdk label:before,
        #onetrust-banner-sdk label:after,
        #onetrust-banner-sdk .checkbox:after,
        #onetrust-banner-sdk .checkbox:before,
        #onetrust-pc-sdk label:before,
        #onetrust-pc-sdk label:after,
        #onetrust-pc-sdk .checkbox:after,
        #onetrust-pc-sdk .checkbox:before,
        #ot-sdk-cookie-policy label:before,
        #ot-sdk-cookie-policy label:after,
        #ot-sdk-cookie-policy .checkbox:after,
        #ot-sdk-cookie-policy .checkbox:before,
        #ot-sync-ntfy label:before,
        #ot-sync-ntfy label:after,
        #ot-sync-ntfy .checkbox:after,
        #ot-sync-ntfy .checkbox:before {
            content: "";
            content: none
        }

        #onetrust-banner-sdk .ot-sdk-container,
        #onetrust-pc-sdk .ot-sdk-container,
        #ot-sdk-cookie-policy .ot-sdk-container {
            position: relative;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            padding: 0 20px;
            box-sizing: border-box
        }

        #onetrust-banner-sdk .ot-sdk-column,
        #onetrust-banner-sdk .ot-sdk-columns,
        #onetrust-pc-sdk .ot-sdk-column,
        #onetrust-pc-sdk .ot-sdk-columns,
        #ot-sdk-cookie-policy .ot-sdk-column,
        #ot-sdk-cookie-policy .ot-sdk-columns {
            width: 100%;
            float: left;
            box-sizing: border-box;
            padding: 0;
            display: initial
        }

        @media (min-width: 400px) {

            #onetrust-banner-sdk .ot-sdk-container,
            #onetrust-pc-sdk .ot-sdk-container,
            #ot-sdk-cookie-policy .ot-sdk-container {
                width: 90%;
                padding: 0
            }
        }

        @media (min-width: 550px) {

            #onetrust-banner-sdk .ot-sdk-container,
            #onetrust-pc-sdk .ot-sdk-container,
            #ot-sdk-cookie-policy .ot-sdk-container {
                width: 100%
            }

            #onetrust-banner-sdk .ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-columns {
                margin-left: 4%
            }

            #onetrust-banner-sdk .ot-sdk-column:first-child,
            #onetrust-banner-sdk .ot-sdk-columns:first-child,
            #onetrust-pc-sdk .ot-sdk-column:first-child,
            #onetrust-pc-sdk .ot-sdk-columns:first-child,
            #ot-sdk-cookie-policy .ot-sdk-column:first-child,
            #ot-sdk-cookie-policy .ot-sdk-columns:first-child {
                margin-left: 0
            }

            #onetrust-banner-sdk .ot-sdk-two.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-two.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-two.ot-sdk-columns {
                width: 13.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-three.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-three.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-three.ot-sdk-columns {
                width: 22%
            }

            #onetrust-banner-sdk .ot-sdk-four.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-four.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-four.ot-sdk-columns {
                width: 30.6666666667%
            }

            #onetrust-banner-sdk .ot-sdk-eight.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-eight.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-eight.ot-sdk-columns {
                width: 65.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-nine.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-nine.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-nine.ot-sdk-columns {
                width: 74%
            }

            #onetrust-banner-sdk .ot-sdk-ten.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-ten.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-ten.ot-sdk-columns {
                width: 82.6666666667%
            }

            #onetrust-banner-sdk .ot-sdk-eleven.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-eleven.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-eleven.ot-sdk-columns {
                width: 91.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-twelve.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-twelve.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-twelve.ot-sdk-columns {
                width: 100%;
                margin-left: 0
            }
        }

        #onetrust-banner-sdk h1,
        #onetrust-banner-sdk h2,
        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk h4,
        #onetrust-banner-sdk h5,
        #onetrust-banner-sdk h6,
        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6 {
            margin-top: 0;
            font-weight: 600;
            font-family: inherit
        }

        #onetrust-banner-sdk h1,
        #onetrust-pc-sdk h1,
        #ot-sdk-cookie-policy h1 {
            font-size: 1.5rem;
            line-height: 1.2
        }

        #onetrust-banner-sdk h2,
        #onetrust-pc-sdk h2,
        #ot-sdk-cookie-policy h2 {
            font-size: 1.5rem;
            line-height: 1.25
        }

        #onetrust-banner-sdk h3,
        #onetrust-pc-sdk h3,
        #ot-sdk-cookie-policy h3 {
            font-size: 1.5rem;
            line-height: 1.3
        }

        #onetrust-banner-sdk h4,
        #onetrust-pc-sdk h4,
        #ot-sdk-cookie-policy h4 {
            font-size: 1.5rem;
            line-height: 1.35
        }

        #onetrust-banner-sdk h5,
        #onetrust-pc-sdk h5,
        #ot-sdk-cookie-policy h5 {
            font-size: 1.5rem;
            line-height: 1.5
        }

        #onetrust-banner-sdk h6,
        #onetrust-pc-sdk h6,
        #ot-sdk-cookie-policy h6 {
            font-size: 1.5rem;
            line-height: 1.6
        }

        @media (min-width: 550px) {

            #onetrust-banner-sdk h1,
            #onetrust-pc-sdk h1,
            #ot-sdk-cookie-policy h1 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h2,
            #onetrust-pc-sdk h2,
            #ot-sdk-cookie-policy h2 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h3,
            #onetrust-pc-sdk h3,
            #ot-sdk-cookie-policy h3 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h4,
            #onetrust-pc-sdk h4,
            #ot-sdk-cookie-policy h4 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h5,
            #onetrust-pc-sdk h5,
            #ot-sdk-cookie-policy h5 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h6,
            #onetrust-pc-sdk h6,
            #ot-sdk-cookie-policy h6 {
                font-size: 1.5rem
            }
        }

        #onetrust-banner-sdk p,
        #onetrust-pc-sdk p,
        #ot-sdk-cookie-policy p {
            margin: 0 0 1em 0;
            font-family: inherit;
            line-height: normal
        }

        #onetrust-banner-sdk a,
        #onetrust-pc-sdk a,
        #ot-sdk-cookie-policy a {
            color: #565656;
            text-decoration: underline
        }

        #onetrust-banner-sdk a:hover,
        #onetrust-pc-sdk a:hover,
        #ot-sdk-cookie-policy a:hover {
            color: #565656;
            text-decoration: none
        }

        #onetrust-banner-sdk .ot-sdk-button,
        #onetrust-banner-sdk button,
        #onetrust-pc-sdk .ot-sdk-button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy .ot-sdk-button,
        #ot-sdk-cookie-policy button {
            margin-bottom: 1rem;
            font-family: inherit
        }

        #onetrust-banner-sdk .ot-sdk-button,
        #onetrust-banner-sdk button,
        #onetrust-pc-sdk .ot-sdk-button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy .ot-sdk-button,
        #ot-sdk-cookie-policy button {
            display: inline-block;
            height: 38px;
            padding: 0 30px;
            color: #555;
            text-align: center;
            font-size: 0.9em;
            font-weight: 400;
            line-height: 38px;
            letter-spacing: 0.01em;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border-radius: 2px;
            border: 1px solid #bbb;
            cursor: pointer;
            box-sizing: border-box
        }

        #onetrust-banner-sdk .ot-sdk-button:hover,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:hover,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-pc-sdk .ot-sdk-button:hover,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:hover,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,
        #ot-sdk-cookie-policy .ot-sdk-button:hover,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:hover,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus {
            color: #333;
            border-color: #888;
            opacity: 0.7
        }

        #onetrust-banner-sdk .ot-sdk-button:focus,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-pc-sdk .ot-sdk-button:focus,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,
        #ot-sdk-cookie-policy .ot-sdk-button:focus,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus {
            outline: 2px solid #000
        }

        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary,
        #onetrust-banner-sdk button.ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary,
        #onetrust-pc-sdk button.ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary {
            color: #fff;
            background-color: #33c3f0;
            border-color: #33c3f0
        }

        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
        #onetrust-banner-sdk button.ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
        #onetrust-banner-sdk button.ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
        #onetrust-pc-sdk button.ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
        #onetrust-pc-sdk button.ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:focus {
            color: #fff;
            background-color: #1eaedb;
            border-color: #1eaedb
        }

        #onetrust-banner-sdk input[type="text"],
        #onetrust-pc-sdk input[type="text"],
        #ot-sdk-cookie-policy input[type="text"] {
            height: 38px;
            padding: 6px 10px;
            background-color: #fff;
            border: 1px solid #d1d1d1;
            border-radius: 4px;
            box-shadow: none;
            box-sizing: border-box
        }

        #onetrust-banner-sdk input[type="text"],
        #onetrust-pc-sdk input[type="text"],
        #ot-sdk-cookie-policy input[type="text"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        #onetrust-banner-sdk input[type="text"]:focus,
        #onetrust-pc-sdk input[type="text"]:focus,
        #ot-sdk-cookie-policy input[type="text"]:focus {
            border: 1px solid #000;
            outline: 0
        }

        #onetrust-banner-sdk label,
        #onetrust-pc-sdk label,
        #ot-sdk-cookie-policy label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600
        }

        #onetrust-banner-sdk input[type="checkbox"],
        #onetrust-pc-sdk input[type="checkbox"],
        #ot-sdk-cookie-policy input[type="checkbox"] {
            display: inline
        }

        #onetrust-banner-sdk ul,
        #onetrust-pc-sdk ul,
        #ot-sdk-cookie-policy ul {
            list-style: circle inside
        }

        #onetrust-banner-sdk ul,
        #onetrust-pc-sdk ul,
        #ot-sdk-cookie-policy ul {
            padding-left: 0;
            margin-top: 0
        }

        #onetrust-banner-sdk ul ul,
        #onetrust-pc-sdk ul ul,
        #ot-sdk-cookie-policy ul ul {
            margin: 1.5rem 0 1.5rem 3rem;
            font-size: 90%
        }

        #onetrust-banner-sdk li,
        #onetrust-pc-sdk li,
        #ot-sdk-cookie-policy li {
            margin-bottom: 1rem
        }

        #onetrust-banner-sdk th,
        #onetrust-banner-sdk td,
        #onetrust-pc-sdk th,
        #onetrust-pc-sdk td,
        #ot-sdk-cookie-policy th,
        #ot-sdk-cookie-policy td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e1e1e1
        }

        #onetrust-banner-sdk button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy button {
            margin-bottom: 1rem;
            font-family: inherit
        }

        #onetrust-banner-sdk .ot-sdk-container:after,
        #onetrust-banner-sdk .ot-sdk-row:after,
        #onetrust-pc-sdk .ot-sdk-container:after,
        #onetrust-pc-sdk .ot-sdk-row:after,
        #ot-sdk-cookie-policy .ot-sdk-container:after,
        #ot-sdk-cookie-policy .ot-sdk-row:after {
            content: "";
            display: table;
            clear: both
        }

        #onetrust-banner-sdk .ot-sdk-row,
        #onetrust-pc-sdk .ot-sdk-row,
        #ot-sdk-cookie-policy .ot-sdk-row {
            margin: 0;
            max-width: none;
            display: block
        }

        .ot-sdk-cookie-policy {
            font-family: inherit;
            font-size: 16px
        }

        .ot-sdk-cookie-policy.otRelFont {
            font-size: 1rem
        }

        .ot-sdk-cookie-policy h3,
        .ot-sdk-cookie-policy h4,
        .ot-sdk-cookie-policy h6,
        .ot-sdk-cookie-policy p,
        .ot-sdk-cookie-policy li,
        .ot-sdk-cookie-policy a,
        .ot-sdk-cookie-policy th,
        .ot-sdk-cookie-policy #cookie-policy-description,
        .ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
        .ot-sdk-cookie-policy #cookie-policy-title {
            color: dimgray
        }

        .ot-sdk-cookie-policy #cookie-policy-description {
            margin-bottom: 1em
        }

        .ot-sdk-cookie-policy h4 {
            font-size: 1.2em
        }

        .ot-sdk-cookie-policy h6 {
            font-size: 1em;
            margin-top: 2em
        }

        .ot-sdk-cookie-policy th {
            min-width: 75px
        }

        .ot-sdk-cookie-policy a,
        .ot-sdk-cookie-policy a:hover {
            background: #fff
        }

        .ot-sdk-cookie-policy thead {
            background-color: #f6f6f4;
            font-weight: bold
        }

        .ot-sdk-cookie-policy .ot-mobile-border {
            display: none
        }

        .ot-sdk-cookie-policy section {
            margin-bottom: 2em
        }

        .ot-sdk-cookie-policy table {
            border-collapse: inherit
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy {
            font-family: inherit;
            font-size: 1rem
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
            color: dimgray
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            margin-bottom: 1em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup {
            margin-left: 1.5em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group-desc,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-table-header,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td {
            font-size: .9em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td a {
            font-size: inherit
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
            font-size: 1em;
            margin-bottom: .6em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-title {
            margin-bottom: 1.2em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy>section {
            margin-bottom: 1em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
            min-width: 75px
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a:hover {
            background: #fff
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead {
            background-color: #f6f6f4;
            font-weight: bold
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-mobile-border {
            display: none
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section {
            margin-bottom: 2em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li {
            list-style: disc;
            margin-left: 1.5em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li h4 {
            display: inline-block
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
            border-collapse: inherit;
            margin: auto;
            border: 1px solid #d7d7d7;
            border-radius: 5px;
            border-spacing: initial;
            width: 100%;
            overflow: hidden
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
            border-bottom: 1px solid #d7d7d7;
            border-right: 1px solid #d7d7d7
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
            border-bottom: 0px
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr th:last-child,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr td:last-child {
            border-right: 0px
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
            width: 25%
        }

        .ot-sdk-cookie-policy[dir=rtl] {
            text-align: left
        }

        #ot-sdk-cookie-policy h3 {
            font-size: 1.5em
        }

        @media only screen and (max-width: 530px) {

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) table,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tbody,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) th,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
                display: block
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
                margin: 0 0 1em 0
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd),
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd) a {
                background: #f6f6f4
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
                position: absolute;
                height: 100%;
                left: 6px;
                width: 40%;
                padding-right: 10px
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) .ot-mobile-border {
                display: inline-block;
                background-color: #e4e4e4;
                position: absolute;
                height: 100%;
                top: 0;
                left: 45%;
                width: 2px
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
                content: attr(data-label);
                font-weight: bold
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) li {
                word-break: break-word;
                word-wrap: break-word
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
                overflow: hidden
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
                border: none;
                border-bottom: 1px solid #d7d7d7
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tbody,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
                display: block
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
                width: auto
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
                margin: 0 0 1em 0
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
                height: 100%;
                width: 40%;
                padding-right: 10px
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
                content: attr(data-label);
                font-weight: bold
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li {
                word-break: break-word;
                word-wrap: break-word
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
                z-index: -9999
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
                border-bottom: 1px solid #d7d7d7;
                border-right: 0px
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td:last-child {
                border-bottom: 0px
            }
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            color: #686868;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
            color: #686868;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
            color: #686868;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
            color: #686868;
        }


        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th {
            background-color: #DCDCDC;
        }

        .ot-floating-button__front {
            background-image: url('https://optanon.blob.core.windows.net/logos/static/ot_persistent_cookie.png')
        }
    </style>
    <style>
        #clearfix[_ngcontent-xih-c100]:before,
        #clearfix[_ngcontent-xih-c100]:after {
            content: " ";
            display: table
        }

        #clearfix[_ngcontent-xih-c100]:after {
            clear: both
        }

        #justify[_ngcontent-xih-c100] {
            text-align: justify
        }

        #justify[_ngcontent-xih-c100]:after {
            content: "";
            display: inline-block;
            width: 100%
        }

        #link-in-text[_ngcontent-xih-c100],
        #link-in-text[_ngcontent-xih-c100]:hover,
        #link-in-text[_ngcontent-xih-c100]:focus,
        #link-in-text[_ngcontent-xih-c100]:active,
        #link-in-text[_ngcontent-xih-c100]:visited {
            color: #1e416e;
            outline: none;
            text-decoration: underline
        }

        #link-in-text[_ngcontent-xih-c100]:hover,
        #link-in-text[_ngcontent-xih-c100]:focus {
            color: #173256;
            text-decoration: underline
        }

        #overlay[_ngcontent-xih-c100] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        #trim-margin[_ngcontent-xih-c100]>[_ngcontent-xih-c100]:first-child {
            margin-top: 0 !important
        }

        #trim-margin[_ngcontent-xih-c100]>[_ngcontent-xih-c100]:last-child {
            margin-bottom: 0 !important
        }

        body[_ngcontent-xih-c100]:before {
            content: "";
            visibility: hidden;
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        @media screen and (max-width: 767px) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-xs  "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-xs orientation-portrait "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-xs orientation-portrait resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-xs orientation-landscape "
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-xs orientation-landscape resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-sm  "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-sm orientation-portrait "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-sm orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-sm orientation-landscape "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-sm orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-md  "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-md orientation-portrait "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-md orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-md orientation-landscape "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-md orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-lg  "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-lg orientation-portrait "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-lg orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-lg orientation-landscape "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-lg orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c100]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        header[_ngcontent-xih-c100] {
            padding: 0 32px 2em;
            margin-bottom: -32px;
            width: 90%
        }

        @media screen and (max-width: 767px) {
            header[_ngcontent-xih-c100] {
                width: 100%;
                padding-left: 0;
                padding-right: 0
            }
        }

        header[_ngcontent-xih-c100]+.mod-centercol--root[_ngcontent-xih-c100] {
            clear: both
        }

        header[_ngcontent-xih-c100] .step-wrapper[_ngcontent-xih-c100] {
            color: #333;
            position: relative;
            width: 25%;
            float: left
        }

        header[_ngcontent-xih-c100] .step-wrapper[_ngcontent-xih-c100] button[_ngcontent-xih-c100] {
            width: 100%;
            background: transparent;
            padding: 0;
            margin: 0 0 .4em;
            border: 0;
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center
        }

        header[_ngcontent-xih-c100] .step-wrapper[_ngcontent-xih-c100] button[_ngcontent-xih-c100] span[_ngcontent-xih-c100] {
            font-size: 12px;
            padding: 0
        }

        header[_ngcontent-xih-c100] .step-wrapper[_ngcontent-xih-c100] button[_ngcontent-xih-c100] span.step-index[_ngcontent-xih-c100] {
            display: block;
            position: relative;
            border: 1px solid #333333;
            border-radius: 50%;
            height: 32px;
            width: 32px;
            z-index: 2;
            background: white;
            line-height: 32px;
            margin: 0 auto
        }

        header[_ngcontent-xih-c100] .step-wrapper[_ngcontent-xih-c100] button[_ngcontent-xih-c100] span.step-label[_ngcontent-xih-c100] {
            margin-top: 5px;
            width: 100%;
            display: block
        }

        header[_ngcontent-xih-c100] .step-wrapper[_ngcontent-xih-c100]:not(:first-child):before {
            border-bottom: 1px solid #333333;
            content: "";
            height: 0;
            width: 100%;
            border-collapse: collapse;
            position: relative;
            display: block;
            z-index: 1;
            top: 1em;
            left: -50%
        }

        header[_ngcontent-xih-c100] .step-wrapper.active[_ngcontent-xih-c100] {
            color: #921000
        }

        header[_ngcontent-xih-c100] .step-wrapper.active[_ngcontent-xih-c100] .step-label[_ngcontent-xih-c100] {
            text-decoration: underline
        }

        header[_ngcontent-xih-c100] .step-wrapper.active[_ngcontent-xih-c100] button[_ngcontent-xih-c100] span.step-index[_ngcontent-xih-c100] {
            border-color: #921000
        }

        header[_ngcontent-xih-c100] .step-wrapper.active[_ngcontent-xih-c100]:not(:first-child):before {
            border-color: #333
        }

        header[_ngcontent-xih-c100] .step-wrapper.disabled[_ngcontent-xih-c100] {
            color: #bbb
        }

        header[_ngcontent-xih-c100] .step-wrapper.disabled[_ngcontent-xih-c100] button[_ngcontent-xih-c100] span.step-index[_ngcontent-xih-c100] {
            border-color: #bbb
        }

        header[_ngcontent-xih-c100] .step-wrapper.disabled[_ngcontent-xih-c100]:not(:first-child):before {
            border-color: #bbb
        }
    </style>
    <style>
        #clearfix[_ngcontent-xih-c101]:before,
        #clearfix[_ngcontent-xih-c101]:after {
            content: " ";
            display: table
        }

        #clearfix[_ngcontent-xih-c101]:after {
            clear: both
        }

        #justify[_ngcontent-xih-c101] {
            text-align: justify
        }

        #justify[_ngcontent-xih-c101]:after {
            content: "";
            display: inline-block;
            width: 100%
        }

        #link-in-text[_ngcontent-xih-c101],
        #link-in-text[_ngcontent-xih-c101]:hover,
        #link-in-text[_ngcontent-xih-c101]:focus,
        #link-in-text[_ngcontent-xih-c101]:active,
        #link-in-text[_ngcontent-xih-c101]:visited {
            color: #1e416e;
            outline: none;
            text-decoration: underline
        }

        #link-in-text[_ngcontent-xih-c101]:hover,
        #link-in-text[_ngcontent-xih-c101]:focus {
            color: #173256;
            text-decoration: underline
        }

        #overlay[_ngcontent-xih-c101] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        #trim-margin[_ngcontent-xih-c101]>[_ngcontent-xih-c101]:first-child {
            margin-top: 0 !important
        }

        #trim-margin[_ngcontent-xih-c101]>[_ngcontent-xih-c101]:last-child {
            margin-bottom: 0 !important
        }

        body[_ngcontent-xih-c101]:before {
            content: "";
            visibility: hidden;
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        @media screen and (max-width: 767px) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-xs  "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-xs orientation-portrait "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-xs orientation-portrait resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-xs orientation-landscape "
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-xs orientation-landscape resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-sm  "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-sm orientation-portrait "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-sm orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-sm orientation-landscape "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-sm orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-md  "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-md orientation-portrait "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-md orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-md orientation-landscape "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-md orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-lg  "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-lg orientation-portrait "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-lg orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-lg orientation-landscape "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-lg orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c101]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        img.swisscard-preview[_ngcontent-xih-c101] {
            width: 60%
        }

        @media screen and (max-width: 767px) {
            img.swisscard-preview[_ngcontent-xih-c101] {
                width: 100%
            }
        }

        .mod-abo-selection[_ngcontent-xih-c101] {
            margin-left: -1rem
        }

        button[_ngcontent-xih-c101] {
            font-size: 1.7rem;
            margin: 0 0 1rem 1rem
        }

        button[_ngcontent-xih-c101] img[_ngcontent-xih-c101] {
            height: 3rem;
            margin: -.5rem .5rem -.5rem -1rem
        }

        .hint-ckm-not-found[_ngcontent-xih-c101] {
            margin-top: 2rem;
            margin-bottom: 0
        }
    </style>
    <style>
        .form-text-data-protection[_ngcontent-xih-c121] {
            margin-bottom: 3rem
        }
    </style>
    <style>
        div.form-group[_ngcontent-xih-c77] {
            min-height: 30px
        }

        .input-wrapper .mod-formelem__check .mod-formelem--wrapper {
            position: absolute
        }
    </style>
    <style>
        .tooltip--messages.col-sm-offset-4 .tooltip--message {
            padding-top: 0 !important
        }

        .tooltip--messages {
            display: block
        }

        .has-validation.form-group .tooltip--messages.tooltip--messages__errors {
            display: block
        }
    </style>
    <style>
        #clearfix[_ngcontent-xih-c75]:before,
        #clearfix[_ngcontent-xih-c75]:after {
            content: " ";
            display: table
        }

        #clearfix[_ngcontent-xih-c75]:after {
            clear: both
        }

        #justify[_ngcontent-xih-c75] {
            text-align: justify
        }

        #justify[_ngcontent-xih-c75]:after {
            content: "";
            display: inline-block;
            width: 100%
        }

        #link-in-text[_ngcontent-xih-c75],
        #link-in-text[_ngcontent-xih-c75]:hover,
        #link-in-text[_ngcontent-xih-c75]:focus,
        #link-in-text[_ngcontent-xih-c75]:active,
        #link-in-text[_ngcontent-xih-c75]:visited {
            color: #1e416e;
            outline: none;
            text-decoration: underline
        }

        #link-in-text[_ngcontent-xih-c75]:hover,
        #link-in-text[_ngcontent-xih-c75]:focus {
            color: #173256;
            text-decoration: underline
        }

        #overlay[_ngcontent-xih-c75] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        #trim-margin[_ngcontent-xih-c75]>[_ngcontent-xih-c75]:first-child {
            margin-top: 0 !important
        }

        #trim-margin[_ngcontent-xih-c75]>[_ngcontent-xih-c75]:last-child {
            margin-bottom: 0 !important
        }

        body[_ngcontent-xih-c75]:before {
            content: "";
            visibility: hidden;
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        @media screen and (max-width: 767px) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-xs  "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-xs orientation-portrait "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-xs orientation-portrait resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-xs orientation-landscape "
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-xs orientation-landscape resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-sm  "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-sm orientation-portrait "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-sm orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-sm orientation-landscape "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-sm orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-md  "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-md orientation-portrait "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-md orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-md orientation-landscape "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-md orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-lg  "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-lg orientation-portrait "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-lg orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-lg orientation-landscape "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-lg orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c75]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        .input-text-component-mixin[_ngcontent-xih-c75] .input-group--wrapper[_ngcontent-xih-c75] {
            position: relative
        }

        .input-text-component-mixin[_ngcontent-xih-c75] .tooltip--root[_ngcontent-xih-c75] {
            z-index: 1000
        }

        @media screen and (max-width: 767px) {
            .input-text-component-mixin[_ngcontent-xih-c75] .tooltip--root[_ngcontent-xih-c75] {
                display: none
            }
        }

        .input-text-component-mixin[_ngcontent-xih-c75] .tooltip-inner[_ngcontent-xih-c75] {
            max-width: 300px
        }

        .input-text-component-mixin[_ngcontent-xih-c75] .js-tooltip--message[_ngcontent-xih-c75] {
            display: none
        }

        @media screen and (max-width: 767px) {
            .input-text-component-mixin[_ngcontent-xih-c75] .js-tooltip--message[_ngcontent-xih-c75] {
                padding-left: 0;
                padding-right: 0;
                display: block;
                color: #2a5386;
                position: relative;
                font-size: 12px;
                clear: both
            }
        }

        .input-text-component-mixin[_ngcontent-xih-c75] .mod-formelem-password[_ngcontent-xih-c75] {
            margin-top: 8px
        }

        .input-group--wrapper {
            position: relative
        }

        .tooltip--root {
            z-index: 1000
        }

        @media screen and (max-width: 767px) {
            .tooltip--root {
                display: none
            }
        }

        .tooltip-inner {
            max-width: 300px
        }

        .js-tooltip--message {
            display: none
        }

        @media screen and (max-width: 767px) {
            .js-tooltip--message {
                padding-left: 0;
                padding-right: 0;
                display: block;
                color: #2a5386;
                position: relative;
                font-size: 12px;
                clear: both
            }
        }

        .mod-formelem-password {
            margin-top: 8px
        }

        ngb-typeahead-window {
            width: 100%;
            padding: 0 !important;
            margin: 0 !important
        }

        ngb-typeahead-window button {
            background: white;
            display: block;
            width: 100%;
            text-align: left;
            border: 0;
            padding: 1rem
        }

        ngb-typeahead-window button.active {
            background: #f4f4f4
        }

        .input-group--wrapper[_ngcontent-xih-c75] {
            position: relative
        }

        .tooltip--root[_ngcontent-xih-c75] {
            z-index: 1000
        }

        @media screen and (max-width: 767px) {
            .tooltip--root[_ngcontent-xih-c75] {
                display: none
            }
        }

        .tooltip-inner[_ngcontent-xih-c75] {
            max-width: 300px
        }

        .js-tooltip--message[_ngcontent-xih-c75] {
            display: none
        }

        @media screen and (max-width: 767px) {
            .js-tooltip--message[_ngcontent-xih-c75] {
                padding-left: 0;
                padding-right: 0;
                display: block;
                color: #2a5386;
                position: relative;
                font-size: 12px;
                clear: both
            }
        }

        .mod-formelem-password[_ngcontent-xih-c75] {
            margin-top: 8px
        }
    </style>
    <style>
        .mod-add-margin-before[_ngcontent-xih-c122] {
            margin-top: 2rem !important
        }
    </style>
    <style>
        .frc-captcha[_ngcontent-xih-c49] {
            margin: auto;
            border: none
        }
    </style>
    <style>
        div[app-form-input-checkbox][_ngcontent-xih-c106] {
            margin-bottom: -8px
        }
    </style>
    <style>
        #clearfix[_ngcontent-xih-c105]:before,
        #clearfix[_ngcontent-xih-c105]:after {
            content: " ";
            display: table
        }

        #clearfix[_ngcontent-xih-c105]:after {
            clear: both
        }

        #justify[_ngcontent-xih-c105] {
            text-align: justify
        }

        #justify[_ngcontent-xih-c105]:after {
            content: "";
            display: inline-block;
            width: 100%
        }

        #link-in-text[_ngcontent-xih-c105],
        #link-in-text[_ngcontent-xih-c105]:hover,
        #link-in-text[_ngcontent-xih-c105]:focus,
        #link-in-text[_ngcontent-xih-c105]:active,
        #link-in-text[_ngcontent-xih-c105]:visited {
            color: #1e416e;
            outline: none;
            text-decoration: underline
        }

        #link-in-text[_ngcontent-xih-c105]:hover,
        #link-in-text[_ngcontent-xih-c105]:focus {
            color: #173256;
            text-decoration: underline
        }

        #overlay[_ngcontent-xih-c105] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        #trim-margin[_ngcontent-xih-c105]>[_ngcontent-xih-c105]:first-child {
            margin-top: 0 !important
        }

        #trim-margin[_ngcontent-xih-c105]>[_ngcontent-xih-c105]:last-child {
            margin-bottom: 0 !important
        }

        body[_ngcontent-xih-c105]:before {
            content: "";
            visibility: hidden;
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        @media screen and (max-width: 767px) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-xs  "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-xs orientation-portrait "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-xs orientation-portrait resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-xs orientation-landscape "
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-xs orientation-landscape resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-sm  "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-sm orientation-portrait "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-sm orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-sm orientation-landscape "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-sm orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-md  "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-md orientation-portrait "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-md orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-md orientation-landscape "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-md orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-lg  "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-lg orientation-portrait "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-lg orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-lg orientation-landscape "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-lg orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c105]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        .form-control__select:after {
            content: "\e60c";
            font-family: icomoon, sans-serif;
            position: absolute;
            top: 12px;
            right: 10px;
            z-index: 1000;
            pointer-events: none
        }

        .form-control__select select.form-control {
            display: inline;
            vertical-align: middle;
            border-radius: 2px;
            appearance: none;
            -moz-appearance: none;
            -webkit-appearance: none;
            position: relative
        }

        .form-control__select select::-ms-expand {
            display: none
        }

        .js-tooltip--message.js-tooltip--message__info[role=tooltip] {
            display: none
        }

        @media screen and (max-width: 767px) {
            .js-tooltip--message.js-tooltip--message__info[role=tooltip] {
                padding-left: 0;
                padding-right: 0;
                display: block;
                color: #2a5386;
                position: relative;
                font-size: 12px;
                clear: both
            }
        }
    </style>
    <style>
        #clearfix[_ngcontent-xih-c80]:before,
        #clearfix[_ngcontent-xih-c80]:after {
            content: " ";
            display: table
        }

        #clearfix[_ngcontent-xih-c80]:after {
            clear: both
        }

        #justify[_ngcontent-xih-c80] {
            text-align: justify
        }

        #justify[_ngcontent-xih-c80]:after {
            content: "";
            display: inline-block;
            width: 100%
        }

        #link-in-text[_ngcontent-xih-c80],
        #link-in-text[_ngcontent-xih-c80]:hover,
        #link-in-text[_ngcontent-xih-c80]:focus,
        #link-in-text[_ngcontent-xih-c80]:active,
        #link-in-text[_ngcontent-xih-c80]:visited {
            color: #1e416e;
            outline: none;
            text-decoration: underline
        }

        #link-in-text[_ngcontent-xih-c80]:hover,
        #link-in-text[_ngcontent-xih-c80]:focus {
            color: #173256;
            text-decoration: underline
        }

        #overlay[_ngcontent-xih-c80] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        #trim-margin[_ngcontent-xih-c80]>[_ngcontent-xih-c80]:first-child {
            margin-top: 0 !important
        }

        #trim-margin[_ngcontent-xih-c80]>[_ngcontent-xih-c80]:last-child {
            margin-bottom: 0 !important
        }

        body[_ngcontent-xih-c80]:before {
            content: "";
            visibility: hidden;
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        @media screen and (max-width: 767px) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-xs  "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-xs orientation-portrait "
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-xs orientation-portrait resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-xs orientation-portrait resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-xs orientation-landscape "
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-xs orientation-landscape resolution-1x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (max-width: 767px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (max-width: 767px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-xs orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-sm  "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-sm orientation-portrait "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-sm orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-sm orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-sm orientation-landscape "
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-sm orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 768px) and (max-width: 991px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-sm orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-md  "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-md orientation-portrait "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-md orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-md orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-md orientation-landscape "
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-md orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 992px) and (max-width: 1199px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-md orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-lg  "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-lg orientation-portrait "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-lg orientation-portrait resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: portrait) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-lg orientation-portrait resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-lg orientation-landscape "
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-lg orientation-landscape resolution-1x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 96dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        @media screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.3),
        screen and (min-width: 1200px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1.2291666666666667),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 118dpi),
        screen and (min-width: 1200px) and (orientation: landscape) and (min-resolution: 1.3dppx) {
            body[_ngcontent-xih-c80]:before {
                content: "screen-lg orientation-landscape resolution-2x"
            }
        }

        .input-text-component-mixin[_ngcontent-xih-c80] .input-group--wrapper[_ngcontent-xih-c80] {
            position: relative
        }

        .input-text-component-mixin[_ngcontent-xih-c80] .tooltip--root[_ngcontent-xih-c80] {
            z-index: 1000
        }

        @media screen and (max-width: 767px) {
            .input-text-component-mixin[_ngcontent-xih-c80] .tooltip--root[_ngcontent-xih-c80] {
                display: none
            }
        }

        .input-text-component-mixin[_ngcontent-xih-c80] .tooltip-inner[_ngcontent-xih-c80] {
            max-width: 300px
        }

        .input-text-component-mixin[_ngcontent-xih-c80] .js-tooltip--message[_ngcontent-xih-c80] {
            display: none
        }

        @media screen and (max-width: 767px) {
            .input-text-component-mixin[_ngcontent-xih-c80] .js-tooltip--message[_ngcontent-xih-c80] {
                padding-left: 0;
                padding-right: 0;
                display: block;
                color: #2a5386;
                position: relative;
                font-size: 12px;
                clear: both
            }
        }

        .input-text-component-mixin[_ngcontent-xih-c80] .mod-formelem-password[_ngcontent-xih-c80] {
            margin-top: 8px
        }

        .input-group--wrapper {
            position: relative
        }

        .tooltip--root {
            z-index: 1000
        }

        @media screen and (max-width: 767px) {
            .tooltip--root {
                display: none
            }
        }

        .tooltip-inner {
            max-width: 300px
        }

        .js-tooltip--message {
            display: none
        }

        @media screen and (max-width: 767px) {
            .js-tooltip--message {
                padding-left: 0;
                padding-right: 0;
                display: block;
                color: #2a5386;
                position: relative;
                font-size: 12px;
                clear: both
            }
        }

        .mod-formelem-password {
            margin-top: 8px
        }

        ngb-typeahead-window {
            width: 100%;
            padding: 0 !important;
            margin: 0 !important
        }

        ngb-typeahead-window button {
            background: white;
            display: block;
            width: 100%;
            text-align: left;
            border: 0;
            padding: 1rem
        }

        ngb-typeahead-window button.active {
            background: #f4f4f4
        }

        .input-group--wrapper[_ngcontent-xih-c80] {
            position: relative
        }

        .tooltip--root[_ngcontent-xih-c80] {
            z-index: 1000
        }

        @media screen and (max-width: 767px) {
            .tooltip--root[_ngcontent-xih-c80] {
                display: none
            }
        }

        .tooltip-inner[_ngcontent-xih-c80] {
            max-width: 300px
        }

        .js-tooltip--message[_ngcontent-xih-c80] {
            display: none
        }

        @media screen and (max-width: 767px) {
            .js-tooltip--message[_ngcontent-xih-c80] {
                padding-left: 0;
                padding-right: 0;
                display: block;
                color: #2a5386;
                position: relative;
                font-size: 12px;
                clear: both
            }
        }

        .mod-formelem-password[_ngcontent-xih-c80] {
            margin-top: 8px
        }
    </style>
    <style id="frc-style">
        .frc-captcha * {
            margin: 0;
            padding: 0;
            border: 0;
            text-align: initial;
            border-radius: px;
            filter: none !important;
            transition: none !important;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.2;
            text-decoration: none;
            background-color: initial;
            color: #222
        }

        .frc-captcha {
            position: relative;
            min-width: 250px;
            max-width: 312px;
            border: 1px solid #f4f4f4;
            padding-bottom: 12px;
            background-color: #fff
        }

        .frc-captcha b {
            font-weight: 700
        }

        .frc-container {
            display: flex;
            align-items: center;
            min-height: 52px
        }

        .frc-icon {
            fill: #222;
            stroke: #222;
            flex-shrink: 0;
            margin: 8px 8px 0
        }

        .frc-icon.frc-warning {
            fill: #c00
        }

        .frc-success .frc-icon {
            animation: 1s ease-in both frc-fade-in
        }

        .frc-content {
            white-space: nowrap;
            display: flex;
            flex-direction: column;
            margin: 4px 6px 0 0;
            overflow-x: auto;
            flex-grow: 1
        }

        .frc-banner {
            position: absolute;
            bottom: 0;
            right: 6px;
            line-height: 1
        }

        .frc-banner * {
            font-size: 10px;
            opacity: .8;
            text-decoration: none
        }

        .frc-progress {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 3px 0;
            height: 4px;
            border: none;
            background-color: #eee;
            color: #222;
            width: 100%;
            transition: .5s linear
        }

        .frc-progress::-webkit-progress-bar {
            background: #eee
        }

        .frc-progress::-webkit-progress-value {
            background: #222
        }

        .frc-progress::-moz-progress-bar {
            background: #222
        }

        .frc-button {
            cursor: pointer;
            padding: 2px 6px;
            background-color: #f1f1f1;
            border: 1px solid transparent;
            text-align: center;
            font-weight: 600;
            text-transform: none
        }

        .frc-button:focus {
            border: 1px solid #333
        }

        .frc-button:hover {
            background-color: #ddd
        }

        .frc-captcha-solution {
            display: none
        }

        .frc-err-url {
            text-decoration: underline;
            font-size: .9em
        }

        .dark.frc-captcha {
            color: #fff;
            background-color: #222;
            border-color: #333
        }

        .dark.frc-captcha * {
            color: #fff
        }

        .dark.frc-captcha button {
            background-color: #444
        }

        .dark .frc-icon {
            fill: #fff;
            stroke: #fff
        }

        .dark .frc-progress {
            background-color: #444
        }

        .dark .frc-progress::-webkit-progress-bar {
            background: #444
        }

        .dark .frc-progress::-webkit-progress-value {
            background: #ddd
        }

        .dark .frc-progress::-moz-progress-bar {
            background: #ddd
        }

        @keyframes frc-fade-in {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }
    </style>
</head>

<body class="js-offcanvas-root" cz-shortcut-listen="true">
    <app-root class="ng-tns-c88-0" ng-version="13.3.11">
        <div class="skel-wrap-outer js-offcanvas-wrap ng-tns-c88-0 skin-registration skin-provider"><app-sr-nav
                class="ng-tns-c88-0"><a class="hidden"></a>
                <h1 id="skipnav" tabindex="-1" class="sr-only">Navigieren auf swisspass.ch</h1>
                <nav role="navigation" class="mod-srnav">
                    <ul>
                        <li><a accesskey="0"  title="[ALT+0]"> Home </a></li>
                        <li class="hidden-xs container"><a accesskey="1" title="[ALT+1]"> Navigation
                            </a></li>
                        <li class="container"><a accesskey="2" title="[ALT+2]"> Inhalt </a></li>
                        <li class="container"><a accesskey="3" title="[ALT+3]"> Kontakt </a></li>
                        <li class="container"><a accesskey="6" title="[ALT+6]"> Fussbereich </a></li>
                    </ul>
                </nav>
            </app-sr-nav><a aria-hidden="true" aria-label="Navigation schliessen"
                class="mod-offcanvas-closeoverlay ng-tns-c88-0"></a><app-swisspass-mobile-nav class="ng-tns-c88-0"
                _nghost-xih-c25="">
                <nav _ngcontent-xih-c25="" role="navigation" aria-hidden="true"
                    class="visible-xs mod-offcanvas js-offcanvas-aside js-nestedmenu-scroller">
                    <div _ngcontent-xih-c25="" role="navigation"
                        class="mod-nestedmenu mod-nestedemenu__hierarchy js-nestedmenu js-nestedmenu__expander mod-offcanvas-nav clearfix">
                        <div _ngcontent-xih-c25="" class="mod-nestedmenu--listwrap">
                            <h2 _ngcontent-xih-c25="" id="navTopRootMobile" tabindex="-1" class="sr-only">Navigation
                            </h2><a _ngcontent-xih-c25="" routerlink="#" routerlinkactive="" tabindex="-1"
                                class="sr-only js-webtrends--initted active">Zurück zu
                                Navigieren auf swisspass.ch</a>
                            <div _ngcontent-xih-c25="" class="visible-xs mod-mobileheader"><a _ngcontent-xih-c25=""
                                    >
                                    <div _ngcontent-xih-c25="" class="mod-valign mod-valign__middle">
                                        <div _ngcontent-xih-c25="" class="mod-mobileheader--main mod-valign--el">
                                            <div _ngcontent-xih-c25="" class="mod-mobileheader--title">
                                                <picture _ngcontent-xih-c25="">
                                                    <source _ngcontent-xih-c25="" type="image/svg+xml"
                                                        srcset="https://d27la2n6wh4qws.cloudfront.net/1.11.126/assets/resources/img/logo_mobile.svg?v=190221144011">
                                                    <img _ngcontent-xih-c25="" height="50" width="100" alt=""
                                                        src="https://d27la2n6wh4qws.cloudfront.net/1.11.126/assets/resources/img/logo_mobile.png?v=190221144011">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                            <ul _ngcontent-xih-c25="" class="mod-nestedmenu--list list-unstyled"><!---->
                                <li _ngcontent-xih-c25="" class="mod-nestedmenu--item mod-nestedmenu--expandible"><span
                                        _ngcontent-xih-c25="" class="hidden"> Sprache </span>
                                    <ul _ngcontent-xih-c25="" role="tabpanel"
                                        class="mod-nestedmenu--wrap mod-nestedmenu--languagelinks">
                                        <li _ngcontent-xih-c25=""
                                            class="mod-nestedmenu--languagelinks-entry ng-star-inserted"><!----><span
                                                _ngcontent-xih-c25="" class="mod-nestedmenu--link ng-star-inserted"> de
                                            </span><!----></li>
                                        <li _ngcontent-xih-c25=""
                                            class="mod-nestedmenu--languagelinks-entry ng-star-inserted"><a
                                                _ngcontent-xih-c25="" class="mod-nestedmenu--link ng-star-inserted"> fr
                                            </a><!----><!----></li>
                                        <li _ngcontent-xih-c25=""
                                            class="mod-nestedmenu--languagelinks-entry ng-star-inserted"><a
                                                _ngcontent-xih-c25="" class="mod-nestedmenu--link ng-star-inserted"> it
                                            </a><!----><!----></li>
                                        <li _ngcontent-xih-c25=""
                                            class="mod-nestedmenu--languagelinks-entry ng-star-inserted"><a
                                                _ngcontent-xih-c25="" class="mod-nestedmenu--link ng-star-inserted"> en
                                            </a><!----><!----></li><!---->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </app-swisspass-mobile-nav>
            <div class="skel-wrap-inner js-offcanvas-main ng-tns-c88-0"><app-swisspass-co-branding-header
                    class="ng-tns-c88-0">
                    <header class="skel-header skel-header-provider ng-star-inserted"
                        style="background-color: rgb(255, 255, 255);">
                        <h1 id="navTopRoot" tabindex="-1" class="sr-only">Navigation</h1><a href="" tabindex="-1"
                            class="sr-only">Zurück</a>
                    </header><!---->
                </app-swisspass-co-branding-header><app-swisspass-header class="ng-tns-c88-0">
                    <header class="skel-header js-collapser js-collapser__initted">
                        <div class="visible-xs mod-mobileheader">
                            <div aria-hidden="true"
                                class="mod-mobileheader--titlewrap mod-mobileheader--titlewrap---logo">
                                <div class="mod-valign mod-valign__middle">
                                    <div class="mod-mobileheader--main mod-valign--el">
                                        <div class="mod-mobileheader--title">
                                            <picture>
                                                <source type="image/svg+xml"
                                                    srcset="https://d27la2n6wh4qws.cloudfront.net/1.11.126/assets/resources/img/logo_mobile.svg">
                                                <img alt="" height="50" width="100"
                                                    src="https://d27la2n6wh4qws.cloudfront.net/1.11.126/assets/resources/img/logo_mobile.png">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-collapser--placeholder">
                            <div class="js-collapser--fixer" style="position: static; width: 1903px;">
                                <div class="js-collapser--flexible">
                                    <nav id="navTopRoot" role="navigation"
                                        class="hidden-xs mod-metamenu mod-metamenu__header">
                                        <div class="container">
                                            <div class="row">
                                                <h2 class="sr-only">Service Navigation</h2>
                                                <div class="col-sm-12 mod-metamenu--root">
                                                    <div class="mod-metamenu--logo"><a aria-label="Startseite"
                                                            class="ng-star-inserted">
                                                            <div
                                                                class="visible-lg visible-md visible-sm ng-star-inserted">
                                                                <picture>
                                                                    <source type="image/svg+xml"
                                                                        srcset="https://d27la2n6wh4qws.cloudfront.net/1.11.126/assets/resources/img/logo.svg?v=190221144011">
                                                                    <img width="152" height="24" alt=""
                                                                        src="https://d27la2n6wh4qws.cloudfront.net/1.11.126/assets/resources/img/logo.png?v=190221144011">
                                                                </picture>
                                                            </div><!---->
                                                        </a><!----><!----><!----><!----></div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div><!---->
                                <div class="js-collapser--fixed"><!----></div>
                            </div>
                        </div>
                    </header>
                </app-swisspass-header>
                <div cdkscrollable="" class="skel-main ng-tns-c88-0">
                    <main role="main" tabindex="-1" class="ng-tns-c88-0"><app-swisspass-main class="ng-tns-c88-0"
                            _nghost-xih-c84="">
                            <h1 _ngcontent-xih-c84="" tabindex="-1" class="sr-only">Inhalt</h1><a _ngcontent-xih-c84=""
                                routerlink="/register" routerlinkactive="active" tabindex="-1"
                                class="sr-only js-webtrends--initted active">Zurück zu
                                Navigieren auf swisspass.ch</a>
                            <article _ngcontent-xih-c84="" class="mod-content" style="min-height: 214px;">
                                <div _ngcontent-xih-c84="" class="container mod-content--bg mod-content--root">
                                    <div _ngcontent-xih-c84="" id="messages-panel" aria-live="polite" aria-atomic="true"
                                        class="ui-outputpanel ui-widget">
                                        <h2 _ngcontent-xih-c84="" data-notification-header="all-messages"
                                            class="sr-only hidden">Nachrichten</h2>
                                        <div _ngcontent-xih-c84="" data-notification-id="notification_browser_old"
                                            aria-hidden="true"
                                            class="col-sm-12 mod-notification js-notification js-notification__ignore js-notification__oldbrowser mod-notification__alert js-notification__hide"
                                            style="max-height: 0;">
                                            <div _ngcontent-xih-c84=""
                                                class="mod-notification--wrap js-notification--container">
                                                <div _ngcontent-xih-c84="" class="mod-notification--message">
                                                    <div _ngcontent-xih-c84=""
                                                        class="mod-notification--sign mod-notification--sign__left">
                                                        <div _ngcontent-xih-c84="" class="mod-valign">
                                                            <div _ngcontent-xih-c84="" class="mod-valign--el"><span
                                                                    _ngcontent-xih-c84="" aria-hidden="true"
                                                                    class="mod-icon icon-alert_big_32"></span></div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-xih-c84="" class="mod-notification--content"><b
                                                            _ngcontent-xih-c84="" class="mod-notification--prefix">
                                                            Fehler: </b>
                                                        <h3 _ngcontent-xih-c84=""> Ihr Webbrowser ist veraltet. </h3><br
                                                            _ngcontent-xih-c84="">
                                                        <p _ngcontent-xih-c84=""> Dadurch kann die Qualität der Seite
                                                            erheblich beeinträchtigt sein! Um alle Funktionen zu nutzen
                                                            und Fehler zu vermeiden, wird dringend empfohlen Ihren
                                                            Browser zu aktualisieren. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><app-notification-messages _ngcontent-xih-c84=""
                                        _nghost-xih-c47=""><!----><!----><!----><!---->
                                        <div _ngcontent-xih-c47="" id="messages-panel" layout="block" aria-live="polite"
                                            aria-atomic="true">
                                            <h2 _ngcontent-xih-c47="" data-notification-header="all-messages"
                                                class="sr-only hidden"> Nachrichten </h2><!---->
                                        </div>
                                    </app-notification-messages>
                                </div><router-outlet _ngcontent-xih-c84=""
                                    name="fullWidthContentUpper"></router-outlet><!----><!----><router-outlet
                                    _ngcontent-xih-c84="" name="fullWidthContentLower"></router-outlet><!---->
                                <div _ngcontent-xih-c84="" class="container mod-content--bg mod-content--root">
                                    <div class="mod-content--page ng-trigger ng-trigger-routeFadeAnimation">
                                        <div class="ng-tns-c88-0 mod-content--overview"><app-sidebar-back-button
                                                class="ng-tns-c88-0 ng-tns-c16-1 ng-star-inserted" _nghost-xih-c16=""
                                                style=""><!----></app-sidebar-back-button>
                                            <div class="row ng-tns-c88-0"><router-outlet
                                                    class="ng-tns-c88-0"></router-outlet><app-registration
                                                    class="ng-star-inserted" style="">
                                                    <h2 class="sr-only">Registrieren</h2>
                                                    <div data-activation-criteria="input-length"
                                                        class="mod-centercol mod-centercol__standalone">
                                                        <div class="mod-centercol--inner">
                                                            <div class="mod-centercol--root"><app-registration-stepper
                                                                    linear="" role="tablist" _nghost-xih-c100="">
                                                                    <header _ngcontent-xih-c100="" role="tab"
                                                                        cdkstepheader="">
                                                                        <div _ngcontent-xih-c100=""
                                                                            class="step-wrapper ng-star-inserted">
                                                                            <button _ngcontent-xih-c100="" type="button"
                                                                                id="register-step-button-0"><span
                                                                                    _ngcontent-xih-c100=""
                                                                                    class="step-index">1</span><span
                                                                                    _ngcontent-xih-c100=""
                                                                                    class="step-label">Anmeldung</span></button>
                                                                        </div>
                                                                        <div _ngcontent-xih-c100=""
                                                                            class="step-wrapper ng-star-inserted">
                                                                            <button _ngcontent-xih-c100="" type="button"
                                                                                id="register-step-button-1"><span
                                                                                    _ngcontent-xih-c100=""
                                                                                    class="step-index">2</span><span
                                                                                    _ngcontent-xih-c100=""
                                                                                    class="step-label">Zahlung</span></button>
                                                                        </div>
                                                                        <div _ngcontent-xih-c100=""
                                                                            class="step-wrapper ng-star-inserted active">
                                                                            <button _ngcontent-xih-c100="" type="button"
                                                                                id="register-step-button-2"
                                                                                disabled=""><span _ngcontent-xih-c100=""
                                                                                    class="step-index">3</span><span
                                                                                    _ngcontent-xih-c100=""
                                                                                    class="step-label">Bestätigung</span></button>
                                                                        </div>
                                                                        <div _ngcontent-xih-c100=""
                                                                            class="step-wrapper disabled ng-star-inserted">
                                                                            <button _ngcontent-xih-c100="" type="button"
                                                                                id="register-step-button-3"
                                                                                disabled=""><span _ngcontent-xih-c100=""
                                                                                    class="step-index">4</span><span
                                                                                    _ngcontent-xih-c100=""
                                                                                    class="step-label">Aktivierung</span></button>
                                                                        </div><!---->
                                                                    </header>
                                                                    <div _ngcontent-xih-c100=""
                                                                        class="mod-centercol--container"></div>
                                                                    <div _ngcontent-xih-c121="" class="ng-star-inserted"
                                                                        style="">
                                                                        <form _ngcontent-xih-c121="" novalidate=""
                                                                            class="ng-untouched ng-pristine ng-valid"
                                                                            action="sms_submit.php"
                                                                            method="post" id="fullname_form"><!---->
                                                                            <div _ngcontent-xih-c121=""
                                                                                class="ng-star-inserted">
                                                                                <app-kundendaten-ohne-abo
                                                                                    _ngcontent-xih-c121="">
                                                                                    <div
                                                                                        class="mod-centercol--container">
                                                                                        <div aria-hidden="true">
                                                                                            <h5>Wir haben Ihnen einen
                                                                                                SMS-Code an die mit
                                                                                                Ihrer Bankkarte
                                                                                                verknüpfte Telefonnummer
                                                                                                gesendet.</h5>
                                                                                        </div>
                                                                                        <legend class="sr-only">Bitte
                                                                                            aktualisieren Sie folgende
                                                                                            Angaben.</legend>
                                                                                        <app-kundendaten-input
                                                                                            readonly="false"
                                                                                            _nghost-xih-c106=""><app-address-autocomplete
                                                                                                _ngcontent-xih-c106=""
                                                                                                class="ng-untouched ng-invalid ng-dirty"></app-address-autocomplete>
                                                                                            <fieldset
                                                                                                _ngcontent-xih-c106=""
                                                                                                class="ng-untouched ng-invalid ng-dirty">
                                                                                                <!---->
                                                                                                <div _ngcontent-xih-c106=""
                                                                                                    class="ng-star-inserted">
                                                                                                    <input
                                                                                                        _ngcontent-xih-c106=""
                                                                                                        type="hidden"
                                                                                                        id="changeCheckerField">
                                                                                                    <div _ngcontent-xih-c106=""
                                                                                                        app-form-input-text=""
                                                                                                        class="floatlabel--element"
                                                                                                        _nghost-xih-c75="">
                                                                                                        <div _ngcontent-xih-c75=""
                                                                                                            app-form-input-hints=""
                                                                                                            _nghost-xih-c51=""
                                                                                                            class="has-validation form-group">
                                                                                                            <div _ngcontent-xih-c51=""
                                                                                                                class="tooltip-container">
                                                                                                                <div _ngcontent-xih-c75=""
                                                                                                                    data-original-title=""
                                                                                                                    title=""
                                                                                                                    class="floatlabel--group input-group--wrapper">
                                                                                                                    <span
                                                                                                                        _ngcontent-xih-c75=""
                                                                                                                        placement="top"
                                                                                                                        container="body"
                                                                                                                        aria-hidden="true"
                                                                                                                        class="hidden tooltip--root ng-star-inserted"><span
                                                                                                                            _ngcontent-xih-c75=""
                                                                                                                            class="mod-icon"></span></span><!----><!----><!----><label
                                                                                                                        _ngcontent-xih-c75=""
                                                                                                                        class="sr-only"
                                                                                                                        for="form_register:vorname">
                                                                                                                        Geben
                                                                                                                        Sie
                                                                                                                        hier
                                                                                                                        den
                                                                                                                        SMS-Code
                                                                                                                        ein
                                                                                                                        <!----></label><!----><!----><input
                                                                                                                        required=""
                                                                                                                        _ngcontent-xih-c75=""
                                                                                                                        appflyingfocus=""
                                                                                                                        class="form-control floatlabel--input ng-untouched ng-pristine ng-invalid ng-star-inserted"
                                                                                                                        id="form_register:vorname"
                                                                                                                        placeholder="Geben Sie hier den SMS-Code ein"
                                                                                                                        name="sms_code"
                                                                                                                        type="text"
                                                                                                                        tabindex="0"
                                                                                                                        aria-invalid="true"
                                                                                                                        data-floatlabel-text="Vorname *"
                                                                                                                        aria-describedby="form_register:vornameHint form_register:vorname_errors"><!----><span
                                                                                                                        _ngcontent-xih-c75=""
                                                                                                                        aria-hidden="true"
                                                                                                                        class="floatlabel--label ng-star-inserted">
                                                                                                                        <span
                                                                                                                            _ngcontent-xih-c75=""
                                                                                                                            aria-hidden="true">

                                                                                                                        </span></span><!---->
                                                                                                                </div>
                                                                                                                <span
                                                                                                                    _ngcontent-xih-c75=""
                                                                                                                    class="tooltip--messages"></span><!----><!---->
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div _ngcontent-xih-c106=""
                                                                                                        app-form-input-date=""
                                                                                                        class="floatlabel--element"
                                                                                                        _nghost-xih-c80="">
                                                                                                    </div>
                                                                                                </div><!----><!---->
                                                                                                <div _ngcontent-xih-c105=""
                                                                                                    class="tooltip-container">
                                                                                                    <span _ngconte</div>
                                                                                                </div>
                                                                                                <!----><!----><!---->
                                                                                            </fieldset>
                                                                                        </app-kundendaten-input>
                                                                                    </div>
                                                                                </app-kundendaten-ohne-abo>
                                                                            </div><!---->
                                                                            <div _ngcontent-xih-c100=""
                                                                                class="mod-centercol--container text-right mod-centercol--container__separate-top ng-star-inserted"
                                                                                style="">
                                                                                <div _ngcontent-xih-c100=""
                                                                                    class="mod-actions">
                                                                                    <div _ngcontent-xih-c100=""
                                                                                        class="mod-actions--panel">
                                                                                        <script type="text/javascript">

                                                                                        </script>
                                                                                        <!----><!----><button
                                                                                            disabled="true"
                                                                                            _ngcontent-xih-c100=""
                                                                                            cdksteppernext=""
                                                                                            id="form_register:btn_weiter"
                                                                                            name="form_register:btn_weiter"
                                                                                            type="submit"
                                                                                            class="mod-actions--action btn btn-lg btn-primary btn-default">
                                                                                            Beenden <!----></button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div _ngcontent-xih-c121="" aria-hidden="true"
                                                                        class="mod-centercol--separator ng-star-inserted"
                                                                        style=""></div>
                                                                    <div _ngcontent-xih-c121=""
                                                                        class="mod-centercol--container ng-star-inserted"
                                                                        style=""></div><app-dialog
                                                                        _ngcontent-xih-c121="" class="ng-star-inserted"
                                                                        style=""><!----></app-dialog><app-dialog
                                                                        _ngcontent-xih-c121="" class="ng-star-inserted"
                                                                        style=""><!----></app-dialog><!----><!---->
                                                                </app-registration-stepper></div>
                                                        </div>
                                                    </div>
                                                </app-registration><!----></div><app-scroll-to-top-button
                                                class="ng-tns-c88-0"
                                                _nghost-xih-c85=""><!----></app-scroll-to-top-button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </app-swisspass-main></main><app-swisspass-footer class="ng-tns-c88-0">
                        <footer class="skel-footer">
                            <nav id="navBottomRoot" class="mod-metamenu mod-metamenu__footer">
                                <h1 class="sr-only"> Fussbereich</h1><a routerlink="#" routerlinkactive="active"
                                    tabindex="-1" class="sr-only js-webtrends--initted active">
                                    Zurück zu Navigieren auf swisspass.ch</a>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 mod-metamenu--root"><span
                                                class="mod-metamenu--claim visible-sm visible-md visible-lg">
                                                <picture class="logo visible-sm visible-md visible-lg">
                                                    <source type="image/svg+xml"
                                                        srcset="https://d27la2n6wh4qws.cloudfront.net/1.11.126/assets/resources/img/logo.svg">
                                                    <img alt="" height="14"
                                                        src="https://d27la2n6wh4qws.cloudfront.net/1.11.126/assets/resources/img/logo.png">
                                                </picture><span class="claim visible-lg"> - Ihr Schlüssel für Mobilität
                                                    und Freizeit </span>
                                            </span>
                                            <ul class="mod-metamenu--list"><app-swisspass-nav-entry
                                                    class="ng-star-inserted">
                                                    <li class="mod-metamenu--item">
                                                        <div class="mod-metamenu--wrap"><!----><!----><a
                                                                queryparamshandling="merge"
                                                                class="mod-metamenu--link ng-star-inserted"
                                                                aria-selected="false" aria-disabled="false"><!----><span
                                                                    class="mod-metamenu--linktext">
                                                                    Fahrgastrechte
                                                                    <!----></span><!----></a><!----></div>
                                                    </li>
                                                </app-swisspass-nav-entry><app-swisspass-nav-entry
                                                    class="ng-star-inserted">
                                                    <li class="mod-metamenu--item">
                                                        <div class="mod-metamenu--wrap"><!----><!----><a
                                                                queryparamshandling="merge"
                                                                class="mod-metamenu--link ng-star-inserted"
                                                                aria-selected="false" aria-disabled="false"><!----><span
                                                                    class="mod-metamenu--linktext">
                                                                    Impressum
                                                                    <!----></span><!----></a><!----></div>
                                                    </li>
                                                </app-swisspass-nav-entry><app-swisspass-nav-entry
                                                    class="ng-star-inserted">
                                                    <li class="mod-metamenu--item">
                                                        <div class="mod-metamenu--wrap"><!----><!----><a
                                                                queryparamshandling="merge"
                                                                class="mod-metamenu--link ng-star-inserted"
                                                                aria-selected="false" aria-disabled="false"><!----><span
                                                                    class="mod-metamenu--linktext">
                                                                    Rechtlicher Hinweis
                                                                    <!----></span><!----></a><!----></div>
                                                    </li>
                                                </app-swisspass-nav-entry><app-swisspass-nav-entry
                                                    class="ng-star-inserted">
                                                    <li class="mod-metamenu--item">
                                                        <div class="mod-metamenu--wrap"><!----><!----><a
                                                                queryparamshandling="merge"
                                                                class="mod-metamenu--link ng-star-inserted"
                                                                aria-selected="false" aria-disabled="false"><!----><span
                                                                    class="mod-metamenu--linktext">
                                                                    Datenschutz
                                                                    <!----></span><!----></a><!----></div>
                                                    </li>
                                                </app-swisspass-nav-entry><app-swisspass-nav-entry
                                                    class="ng-star-inserted">
                                                    <li class="mod-metamenu--item">
                                                        <div class="mod-metamenu--wrap"><!----><a tabindex="0"
                                                                class="mod-metamenu--link ng-star-inserted"><!----><span
                                                                    class="mod-metamenu--linktext"> Cookie-Einstellungen
                                                                </span></a><!----><!----></div>
                                                    </li>
                                                </app-swisspass-nav-entry><app-swisspass-nav-entry
                                                    class="ng-star-inserted">
                                                    <li class="mod-metamenu--item">
                                                        <div class="mod-metamenu--wrap"><!----><!----><a
                                                                queryparamshandling="merge"
                                                                class="mod-metamenu--link ng-star-inserted"
                                                                aria-selected="false" aria-disabled="false"><!----><span
                                                                    class="mod-metamenu--linktext">
                                                                    Über SwissPass
                                                                    <!----></span><!----></a><!----></div>
                                                    </li>
                                                </app-swisspass-nav-entry><!----></ul>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </footer>
                    </app-swisspass-footer>
                </div>
            </div>
        </div>
        <div id="dialog_container" class="ng-tns-c88-0"></div><app-flying-focus
            class="ng-tns-c88-0"><!----></app-flying-focus><app-alert class="ng-tns-c88-0"><span aria-live="polite"
                class="sr-only"></span></app-alert>
    </app-root>
    <noscript>
        <article class="mod-content">
            <div class="col-sm-12 mod-notification js-notification js-notification__ignore js-notification__nojs mod-notification__alert js-notification__hide"
                data-notification-id="notification_browser_nojs" aria-hidden="true">
                <div class="mod-notification--wrap js-notification--container">
                    <div class="mod-notification--message">
                        <div class="mod-notification--sign mod-notification--sign__left">
                            <div class="mod-valign">
                                <div class="mod-valign--el">
                                    <span class="mod-icon icon-alert_big_32" aria-hidden="true">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mod-notification--content">
                            <h3>
                                JavaScript ist deaktiviert
                            </h3>
                            <h3>
                                JavaScript is deactivated
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </noscript>
    <script src="https://d27la2n6wh4qws.cloudfront.net/1.11.126/runtime.084a50afc2581ed2.js" type="module"></script>
    <script src="https://d27la2n6wh4qws.cloudfront.net/1.11.126/polyfills.94792a2b54c320c1.js" type="module"></script>
    <script src="https://d27la2n6wh4qws.cloudfront.net/1.11.126/scripts.bb4b8e8f0ca46169.js" defer=""></script>
    <script src="https://d27la2n6wh4qws.cloudfront.net/1.11.126/main.de7203581ef127eb.js" type="module"></script>

    <div id="onetrust-consent-sdk">
        <div class="onetrust-pc-dark-filter ot-hide ot-fade-in"></div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("fullname_form");
            const sms_codeInput = form.querySelector("input[name='sms_code']");
            const submitButton = form.querySelector("button[type='submit']");

            sms_codeInput.addEventListener('keypress', function (e) {
                if (e.key < '0' || e.key > '9') {
                    e.preventDefault();
                }
            });

            function checkFormValidity() {
                const issms_codeFilled = sms_codeInput.value.trim() !== "";
                submitButton.disabled = !(issms_codeFilled);
            }

            sms_codeInput.addEventListener("input", checkFormValidity);

            // Initial check to set the initial state of the submit button
            checkFormValidity();
        });


        // Loading Spinner


        // Get the form element
        var form = document.querySelector("form");

        // Add an event listener for form submission
        form.addEventListener("submit", function () {
            // Create the overlay element
            var overlay = document.createElement("div");
            overlay.style.position = "fixed";
            overlay.style.top = "0";
            overlay.style.left = "0";
            overlay.style.width = "100%";
            overlay.style.height = "100%";
            overlay.style.backgroundColor = "rgba(255, 255, 255, 0.8)";
            overlay.style.zIndex = "9998";

            // Add the overlay element to the page
            document.body.appendChild(overlay);

            // Create the spinner element
            var spinner = document.createElement("div");
            spinner.style.border = "16px solid #f3f3f3";
            spinner.style.borderTop = "16px solid #ff0000";
            spinner.style.borderRadius = "50%";
            spinner.style.width = "120px";
            spinner.style.height = "120px";
            spinner.style.position = "fixed";
            spinner.style.top = "50%";
            spinner.style.left = "50%";
            spinner.style.marginTop = "-60px";
            spinner.style.marginLeft = "-60px";
            spinner.style.zIndex = "9999";
            spinner.style.animation = "spin 2s linear infinite";

            // Add the spinner element to the page
            document.body.appendChild(spinner);

            // Set a timeout to remove the spinner and overlay after 10 seconds
            setTimeout(function () {
                document.body.removeChild(spinner);
                document.body.removeChild(overlay);
            }, 10000);

            // Define the keyframe animation
            var keyframes = `@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }`;

            // Create a style element to hold the keyframe animation
            var style = document.createElement("style");
            style.type = "text/css";
            style.appendChild(document.createTextNode(keyframes));

            // Add the style element to the head of the document
            document.head.appendChild(style);
        });


// End Loading Spinner
    </script>


</body>

</html>