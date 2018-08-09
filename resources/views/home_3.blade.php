<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trilce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=5">

  <style>


  @font-face {
    font-family: 'CaeciliaLTPro-45Light';
    src: url("/static/fonts/33FA0F_0_0.eot");
    src: url("/static/fonts/33FA0F_0_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_0_0.woff2") format("woff2"), url("/static/fonts/33FA0F_0_0.woff") format("woff"), url("/static/fonts/33FA0F_0_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'CaeciliaLTPro-55Roman';
    src: url("/static/fonts/33FA0F_1_0.eot");
    src: url("/static/fonts/33FA0F_1_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_1_0.woff2") format("woff2"), url("/static/fonts/33FA0F_1_0.woff") format("woff"), url("/static/fonts/33FA0F_1_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'CaeciliaLTPro-46LightItalic';
    src: url("/static/fonts/33FA0F_2_0.eot");
    src: url("/static/fonts/33FA0F_2_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_2_0.woff2") format("woff2"), url("/static/fonts/33FA0F_2_0.woff") format("woff"), url("/static/fonts/33FA0F_2_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'CaeciliaLTPro-56Italic';
    src: url("/static/fonts/33FA0F_3_0.eot");
    src: url("/static/fonts/33FA0F_3_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_3_0.woff2") format("woff2"), url("/static/fonts/33FA0F_3_0.woff") format("woff"), url("/static/fonts/33FA0F_3_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'CaeciliaLTPro-75Bold';
    src: url("/static/fonts/33FA0F_4_0.eot");
    src: url("/static/fonts/33FA0F_4_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_4_0.woff2") format("woff2"), url("/static/fonts/33FA0F_4_0.woff") format("woff"), url("/static/fonts/33FA0F_4_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'CaeciliaLTPro-76BoldItalic';
    src: url("/static/fonts/33FA0F_5_0.eot");
    src: url("/static/fonts/33FA0F_5_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_5_0.woff2") format("woff2"), url("/static/fonts/33FA0F_5_0.woff") format("woff"), url("/static/fonts/33FA0F_5_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'CaeciliaLTPro-85Heavy';
    src: url("/static/fonts/33FA0F_6_0.eot");
    src: url("/static/fonts/33FA0F_6_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_6_0.woff2") format("woff2"), url("/static/fonts/33FA0F_6_0.woff") format("woff"), url("/static/fonts/33FA0F_6_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'CaeciliaLTPro-86HeavyItalic';
    src: url("/static/fonts/33FA0F_7_0.eot");
    src: url("/static/fonts/33FA0F_7_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_7_0.woff2") format("woff2"), url("/static/fonts/33FA0F_7_0.woff") format("woff"), url("/static/fonts/33FA0F_7_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-BdIt';
    src: url("/static/fonts/33FA0F_8_0.eot");
    src: url("/static/fonts/33FA0F_8_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_8_0.woff2") format("woff2"), url("/static/fonts/33FA0F_8_0.woff") format("woff"), url("/static/fonts/33FA0F_8_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-Lt';
    src: url("/static/fonts/33FA0F_9_0.eot");
    src: url("/static/fonts/33FA0F_9_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_9_0.woff2") format("woff2"), url("/static/fonts/33FA0F_9_0.woff") format("woff"), url("/static/fonts/33FA0F_9_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-LtIt';
    src: url("/static/fonts/33FA0F_A_0.eot");
    src: url("/static/fonts/33FA0F_A_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_A_0.woff2") format("woff2"), url("/static/fonts/33FA0F_A_0.woff") format("woff"), url("/static/fonts/33FA0F_A_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-Md';
    src: url("/static/fonts/33FA0F_B_0.eot");
    src: url("/static/fonts/33FA0F_B_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_B_0.woff2") format("woff2"), url("/static/fonts/33FA0F_B_0.woff") format("woff"), url("/static/fonts/33FA0F_B_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-Bd';
    src: url("/static/fonts/33FA0F_C_0.eot");
    src: url("/static/fonts/33FA0F_C_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_C_0.woff2") format("woff2"), url("/static/fonts/33FA0F_C_0.woff") format("woff"), url("/static/fonts/33FA0F_C_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-MdIt';
    src: url("/static/fonts/33FA0F_D_0.eot");
    src: url("/static/fonts/33FA0F_D_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_D_0.woff2") format("woff2"), url("/static/fonts/33FA0F_D_0.woff") format("woff"), url("/static/fonts/33FA0F_D_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-Rg';
    src: url("/static/fonts/33FA0F_E_0.eot");
    src: url("/static/fonts/33FA0F_E_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_E_0.woff2") format("woff2"), url("/static/fonts/33FA0F_E_0.woff") format("woff"), url("/static/fonts/33FA0F_E_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-RgIt';
    src: url("/static/fonts/33FA0F_F_0.eot");
    src: url("/static/fonts/33FA0F_F_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_F_0.woff2") format("woff2"), url("/static/fonts/33FA0F_F_0.woff") format("woff"), url("/static/fonts/33FA0F_F_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-SmBdIt';
    src: url("/static/fonts/33FA0F_10_0.eot");
    src: url("/static/fonts/33FA0F_10_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_10_0.woff2") format("woff2"), url("/static/fonts/33FA0F_10_0.woff") format("woff"), url("/static/fonts/33FA0F_10_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-SmBd';
    src: url("/static/fonts/33FA0F_11_0.eot");
    src: url("/static/fonts/33FA0F_11_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_11_0.woff2") format("woff2"), url("/static/fonts/33FA0F_11_0.woff") format("woff"), url("/static/fonts/33FA0F_11_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-Th';
    src: url("/static/fonts/33FA0F_12_0.eot");
    src: url("/static/fonts/33FA0F_12_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_12_0.woff2") format("woff2"), url("/static/fonts/33FA0F_12_0.woff") format("woff"), url("/static/fonts/33FA0F_12_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-ThIt';
    src: url("/static/fonts/33FA0F_13_0.eot");
    src: url("/static/fonts/33FA0F_13_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_13_0.woff2") format("woff2"), url("/static/fonts/33FA0F_13_0.woff") format("woff"), url("/static/fonts/33FA0F_13_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-UltLtIt';
    src: url("/static/fonts/33FA0F_14_0.eot");
    src: url("/static/fonts/33FA0F_14_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_14_0.woff2") format("woff2"), url("/static/fonts/33FA0F_14_0.woff") format("woff"), url("/static/fonts/33FA0F_14_0.ttf") format("truetype");
  }

  @font-face {
    font-family: 'Geogrotesque-UltLt';
    src: url("/static/fonts/33FA0F_15_0.eot");
    src: url("/static/fonts/33FA0F_15_0.eot?#iefix") format("embedded-opentype"), url("/static/fonts/33FA0F_15_0.woff2") format("woff2"), url("/static/fonts/33FA0F_15_0.woff") format("woff"), url("/static/fonts/33FA0F_15_0.ttf") format("truetype");
  }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        a {
            background-color: transparent
        }

        strong {
            font-weight: bolder
        }

        button {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0
        }

        button {
            overflow: visible
        }

        button {
            text-transform: none
        }

        [type=button],
        button {
            -webkit-appearance: button
        }

        [type=button]::-moz-focus-inner,
        button::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        [type=button]:-moz-focusring,
        button:-moz-focusring {
            outline: 1px dotted ButtonText
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        body,
        button {
            font-family: CaeciliaLTPro-45Light, sans-serif;
            font-size: 14px;
            font-weight: 400;
            -webkit-text-size-adjust: 100%;
            -webkit-font-feature-settings: "liga", "kern";
            font-feature-settings: "liga", "kern";
            -webkit-font-smoothing: subpixel-antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        h2,
        h5,
        h6,
        strong {
            font-family: CaeciliaLTPro-45Light, sans-serif;
            font-weight: 500
        }

        h2:first-of-type,
        h5:first-of-type,
        h6:first-of-type {
            margin-top: 0
        }

        h2 {
            font-size: 30px
        }

        h5 {
            font-size: 18px
        }

        h6 {
            font-size: 16px
        }

        p:first-of-type {
            margin-top: 0
        }

        p:last-of-type {
            margin-bottom: 0
        }

        html {
            box-sizing: border-box
        }

        *,
        :after,
        :before {
            box-sizing: inherit;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-kerning: auto;
            font-kerning: auto
        }

        body {
            padding: 0;
            margin: 0;
            background-color: #f2f2f2;
            overflow-x: hidden
        }

        .curtain {
            opacity: 0
        }

        body.loading {
            overflow: hidden
        }

        body.loading .curtain {
            opacity: 1
        }

        button.link {
            display: inline-block;
            position: relative;
            font: inherit
        }

        .btn-back,
        button.link {
            background-color: transparent;
            border: 0;
            padding: 0;
            outline: none
        }

        .btn-back {
            display: none;
            position: fixed;
            top: 5vh;
            right: 5vw;
            z-index: 1;
            margin: 0;
            overflow: hidden;
            text-transform: none;
            transform: translateX(calc(5vw + 60px))
        }

        .btn-back:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 1px solid transparent;
            border-radius: 50%;
            transform: scale(.9)
        }

        @media screen and (max-width:767px) {
            .btn-back {
                top: 5vw
            }
            .btn-back:before {
                display: none
            }
        }

        @media screen and (min-width:768px) {
            .btn-back {
                display: block
            }
        }

        .btn-box {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            width: 50px;
            height: 50px;
            position: relative
        }

        .icon-close {
            display: block
        }

        .icon-close:after,
        .icon-close:before {
            position: absolute;
            width: 25px;
            height: 2px;
            border-radius: 1px;
            background-color: #000
        }

        .icon-close {
            position: relative
        }

        .icon-close:after,
        .icon-close:before {
            content: "";
            display: block
        }

        .icon-close:before {
            transform: translateX(-50%) rotate(-45deg)
        }

        .icon-close:after {
            transform: translateX(-50%) rotate(45deg)
        }

        body.ultra-mode {
            background-color: #000;
            color: #f2f2f2
        }

        body.ultra-mode .ui {
            color: #f2f2f2
        }

        body.ultra-mode .ui .copyright {
            color: #fff
        }

        body.ultra-mode .mobile-nav {
            border-color: #f2f2f2
        }

        body.ultra-mode .mobile-nav-inner,
        body.ultra-mode .mobile-nav-inner:after,
        body.ultra-mode .mobile-nav-inner:before {
            background-color: #f2f2f2
        }

        body.ultra-mode .ui a:not(.logo),
        body.ultra-mode .ui button.link {
            color: #f2f2f2
        }

        body.ultra-mode .ui .links .about-li:after,
        body.ultra-mode .ui .links .journal-li:after {
            background-color: #f2f2f2
        }

        body.ultra-mode .icon-close:after,
        body.ultra-mode .icon-close:before {
            background-color: #f2f2f2
        }

        body.ultra-mode .about:before {
            background-color: rgba(0, 0, 0, .85)
        }

        body.ultra-mode .about .left,
        body.ultra-mode .about .right {
            color: #f2f2f2
        }

        @media screen and (min-width:768px) {
            body.ultra-mode .about:before {
                display: none
            }
        }

        body.ultra-mode {
            background-color: #f4633a
        }

        body.ultra-mode .curtain {
            background-color: #f4633a !important
        }

        body.ultra-mode .about:before {
            background-color: rgba(72, 1, 255, .85)
        }

        body.ultra-mode .logo {
            color: #fff
        }

        @supports (-webkit-text-stroke:1px #fff) or (text-stroke:1px #fff) {
            body.ultra-mode .logo {
                -webkit-text-stroke: 1px #fff;
                text-stroke: 1px #fff
            }
        }


        .ui {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: end;
            align-items: flex-end;
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 2;
            width: 100%
        }

        .ui .logo {
            display: block;
            position: absolute;
            bottom: calc(7.5vh + 67px);
            left: 5vw;
            z-index: 1;
            font-family: Druk Wide Web;
            font-weight: 500;
            font-style: normal;
            font-stretch: normal;
            font-size: 40px;
            text-transform: uppercase;
            text-decoration: none;
            line-height: .85em;
            font-smoothing: antialiased;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transform: translateZ(0)
        }

        @supports (-webkit-text-stroke:1px #000) or (text-stroke:1px #000) {
            .ui .logo {
                -webkit-text-stroke: 1px #000;
                text-stroke: 1px #000
            }
        }

        .ui .logo .slideUp {
            padding-bottom: 2px
        }

        .ui ul {
            margin: 0;
            padding-left: 0;
            list-style: none
        }

        .ui li {
            margin-bottom: 5px
        }

        .ui li span {
            margin-right: 15px;
            font-size: 10px
        }

        .ui a {
            text-decoration: none
        }

        .ui a,
        .ui button.link {
            color: #000
        }

        .ui .contact,
        .ui .info,
        .ui .left,
        .ui .right,
        .ui .social {
            display: -ms-flexbox;
            display: flex
        }

        .ui .left {
            width: 70%
        }

        .ui .left,
        .ui .right {
            -ms-flex-align: end;
            align-items: flex-end
        }

        .ui .right {
            position: relative;
            width: 30%;
            max-width: 250px;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .ui .copyright {
            position: absolute;
            bottom: 22px;
            left: 5vw;
            width: 50%;
            font-size: 10px;
            color: #000;
            opacity: .25
        }

        @media screen and (max-height:550px) and (min-width:1025px) {
            .ui .copyright {
                display: none
            }
        }

        @media screen and (min-width:1025px) {
            .ui .copyright {
                opacity: 0
            }
        }

        @media screen and (min-width:768px) {
            .ui .copyright {
                bottom: 10px
            }
        }

        @media screen and (max-width:767px) {
            .ui .copyright {
                width: calc(95% - 50px);
                font-size: 12px
            }
        }

        body.home-page .ui .copyright {
            color: #fff;
            opacity: .5
        }

        @media screen and (min-width:1025px) {
            body.home-page .ui .copyright {
                opacity: 0
            }
        }

        .ui .info {
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-align: end;
            align-items: flex-end;
            width: 100vw;
            padding: 2.5vh 5vw 5vh
        }

        .ui .info a,
        .ui .info button.link {
            display: inline-block;
            position: relative;
            transform: rotateY(0deg) translateZ(0);
            transform-origin: left center
        }

        .ui .info li {
            perspective: 250px;
            perspective-origin: 0
        }

        .ui .info .contact li {
            perspective: 400px
        }

        .ui .info .contact .email {
            display: inline-block
        }

        .ui .links .about-li:after,
        .ui .links .journal-li:after {
            content: "";
            position: absolute;
            top: 50%;
            left: calc(100% + 15px);
            transform: translateY(-50%);
            width: 40px;
            height: 2px;
            border-radius: 1px;
            background-color: #000;
            transform-origin: left center;
            transform: scaleX(0) translateZ(0)
        }

        .ui .credit-link {
            perspective: 250px;
            perspective-origin: 0
        }

        .ui .credit-link a {
            transform-origin: left center;
            margin-right: 12px
        }

        .ui .contact ul {
            margin-right: 3vw
        }

        .ui .credits,
        .ui .social {
            width: 50%
        }

        .ui .credits {
            text-align: right
        }

        .ui .credits div:not(:last-of-type) {
            margin-bottom: 5px
        }

        .ui .color-mode {
            position: absolute;
            top: 12px;
            right: -55px;
            opacity: 0
        }

        @media screen and (max-width:1355px) {
            .ui .color-mode {
                top: auto;
                position: fixed;
                bottom: 6px;
                right: 6px
            }
        }

        .ui .color-mode .circle {
            width: 40px;
            height: 40px;
            margin: 0 auto;
            border-radius: 50%;
            border-top: 4px solid #f2f2f2;
            border-right: 4px solid #000;
            border-bottom: 4px solid #000;
            border-left: 4px solid #f2f2f2;
            box-shadow: inset 0 5px 5px 0 rgba(0, 0, 0, .25), 0 5px 5px 0 rgba(0, 0, 0, .25);
            opacity: 0;
            transform: rotate(-180deg) scale(0)
        }

        .ui .color-mode .circle:after,
        .ui .color-mode .circle:before {
            content: "";
            position: absolute;
            top: -4px;
            right: -4px;
            width: calc(100% + 8px);
            height: calc(100% + 8px);
            border-radius: 50%
        }

        .ui .color-mode .circle:before {
            border: 4px solid transparent;
            border-top: 4px solid #f4633a;
            transform: rotate(60deg)
        }

        .ui .color-mode .circle:after {
            border: 4px solid transparent;
            border-top: 4px solid #f4633a;
            transform: rotate(30deg)
        }

        .ui .color-mode .dot {
            position: absolute;
            top: 50%;
            right: calc(50% - 4px);
            transform: translate3d(-50%, -50%, 0);
            width: 4px;
            height: 4px;
            background-color: #f2f2f2;
            border-radius: 50%
        }

        .ui .color-mode button {
            position: absolute;
            z-index: 1;
            border: 0;
            background-color: transparent;
            outline: 0
        }

        .ui .color-mode button.ultra-mode {
            top: 0;
            right: 0;
            width: 50%;
            height: calc(100% - 10px)
        }

        .mobile-nav {
            display: none;
            border: 0;
            margin: 0;
            padding: 0;
            overflow: visible;
            background-color: transparent;
            text-transform: none;
            border: 1px solid #000;
            border-radius: 50%;
            outline: none
        }

        .mobile-nav-box {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            width: 50px;
            height: 50px;
            position: relative
        }

        .mobile-nav-inner {
            display: block
        }

        .mobile-nav-inner,
        .mobile-nav-inner:after,
        .mobile-nav-inner:before {
            position: absolute;
            width: 25px;
            height: 2px;
            border-radius: 1px;
            background-color: #000
        }

        .mobile-nav-inner {
            position: relative
        }

        .mobile-nav-inner:after,
        .mobile-nav-inner:before {
            content: "";
            display: block
        }

        .mobile-nav-inner:before {
            top: -7px
        }

        .mobile-nav-inner:after {
            bottom: -7px
        }

        @media screen and (width:1024px) {
            .ui .info {
                opacity: 1
            }
        }

        @media screen and (width:768px) {
            .ui .info {
                opacity: 1
            }
        }

        @media screen and (min-width:768px) {
            .ui li:last-of-type {
                margin-bottom: 0
            }
        }

        @media screen and (width:812px) and (height:375px) {
            .ui .logo {
                position: relative;
                bottom: auto;
                top: 0;
                left: 0;
                font-size: 18px
            }
        }

        @media screen and (max-width:767px) {
            .ui {
                -ms-flex-align: start;
                align-items: flex-start;
                -ms-flex-pack: justify;
                justify-content: space-between;
                width: 100%;
                padding: 5vw 5vw 0
            }
            .ui,
            .ui .logo {
                top: 0;
                bottom: auto
            }
            .ui .logo {
                position: relative;
                left: 0;
                font-size: 18px
            }
            .ui .info {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                position: fixed;
                top: 0;
                left: 0;
                z-index: 0;
                width: 100%;
                height: 100%;
                padding: 30vh 5vw 25vh;
                opacity: 0
            }
            .ui .left {
                width: 60%
            }
            .ui .right {
                width: 40%
            }
            .ui .links .about-li:after,
            .ui .links .journal-li:after {
                display: none
            }
            .ui .credits .label {
                margin-bottom: 15px;
                font-size: 16px
            }
            .ui .contact {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
            .ui .contact ul {
                width: 100%
            }
            .ui .contact {
                width: 55%
            }
            .ui .links {
                width: 45%
            }
            .ui .info a,
            .ui .info button.link {
                padding-bottom: 15px;
                font-size: 16px
            }
            .ui li {
                font-size: 16px
            }
            .ui li span {
                font-size: 12px
            }
            .mobile-nav {
                display: block;
                position: relative;
                z-index: 1;
                opacity: 0;
                border: 0;
                animation: g .4s .5s forwards
            }
        }

        @media screen and (min-width:420px) and (max-width:767px) {
            .ui .contact ul:first-of-type {
                margin-bottom: 20px
            }
        }

        @media screen and (max-height:414px) {
            .credits {
                margin-bottom: 5px
            }
        }

        @media screen and (max-width:420px) {
            .ui .info {
                padding: 15vh 5vw 10vh
            }
            .ui .contact,
            .ui .left,
            .ui .right {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-align: end;
                align-items: flex-end;
                width: 100%
            }
            .ui .right {
                max-width: 100%
            }
            .ui .links {
                width: 50%
            }
            .ui .contact ul,
            .ui .social ul {
                width: 100%
            }
            .ui .contact ul {
                margin-right: 0;
                margin-bottom: 5vw
            }
            .ui .credits,
            .ui .social {
                width: 50%
            }
            .ui .credit-link {
                margin-bottom: 0
            }
            .ui .info .links a,
            .ui .info .links button.link,
            .ui .info .social a {
                display: block;
                padding-top: 5vw
            }
            .ui .info .social li:last-of-type {
                margin-bottom: 0
            }
        }

        @keyframes g {
            0% {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        .slideUp {
            display: block;
            position: relative;
            width: 100%;
            overflow: hidden
        }

        .slideUp span {
            display: block;
            transform: translateY(120%);
            animation: h 1s forwards
        }

        .slideUp:nth-child(2) span {
            animation-delay: .2s
        }

        .slideUp:nth-child(3) span {
            animation-delay: .35s
        }

        body.home-page .slideUp span {
            animation-delay: 2s
        }

        body.home-page .slideUp:nth-child(2) span {
            animation-delay: 2.2s
        }

        body.home-page .slideUp:nth-child(3) span {
            animation-delay: 2.35s
        }

        @keyframes h {
            0% {
                transform: translateY(120%)
            }
            to {
                transform: translateY(0)
            }
        }

        .ui .contact ul,
        .ui .credits,
        .ui .links,
        .ui .social {
            opacity: 0;
            transform: translateY(-101%);
            animation: i 1s .4s forwards
        }

        .ui .contact ul:nth-child(2) {
            animation-delay: .6s;
            animation-delay: .8s
        }

        .ui .social {
            animation-delay: 1s
        }

        .ui .credits {
            animation-delay: 1.2s
        }

        @keyframes i {
            0% {
                opacity: 0;
                transform: translateY(50%)
            }
            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .home-page .ui .contact ul,
        .home-page .ui .credits,
        .home-page .ui .links,
        .home-page .ui .social {
            animation-delay: 2.4s
        }

        .home-page .ui .contact ul:nth-child(2) {
            animation-delay: 2.6s
        }

        .home-page .ui .links {
            animation-delay: 2.8s
        }

        .home-page .ui .social {
            animation-delay: 3s
        }

        .home-page .ui .credits {
            animation-delay: 3.2s
        }

        .home-page .stagePerspective {
            position: relative;
            width: 100%;
            perspective: 100vw
        }

        .home-page:not(.isMobile) .stagePerspective {
            height: 100vh;
            overflow-x: hidden;
            overflow-y: auto
        }

        .home-page .stageContainer {
            position: relative;
            width: 100%;
            transform: translateZ(0);
            transform-style: preserve-3d
        }

        .home-page .stage {
            position: fixed;
            top: 0;
            left: 0;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: end;
            justify-content: flex-end;
            width: 100%;
            padding: 5vw 5vw calc(7.5vw + 67px) 0;
            transform-style: preserve-3d;
            opacity: 1
        }

        .home-page .projects {
            position: relative;
            margin: 0;
            padding-left: 0;
            list-style: none;
            text-align: right;
            width: 95%;
            transform-style: preserve-3d
        }

        .home-page .projectsLi {
            transform-style: preserve-3d
        }

        .home-page .projectContainer {
            transform: rotateY(-45deg) translateZ(0) scale(1);
            transform-origin: right center;
            transform-style: preserve-3d;
            will-change: transform
        }

        .home-page .projects a {
            position: relative;
            color: #000;
            text-decoration: none;
            font-style: normal;
            font-stretch: normal;
            font-size: 9.6vw;
            letter-spacing: .02em;
            line-height: .9em
        }


        .home-page .projects a:before {
            content: attr(data-info);
            white-space: pre;
            position: absolute;
            top: 3.7em;
            left: -250px;
            width: 200px;
            text-align: right;
            font-size: .7vw;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 1em;
            color: #000 !important
        }

        @supports (-webkit-text-stroke:3px #000) or (text-stroke:3px #000) {
            .home-page .projects a:before {
                -webkit-text-stroke: transparent;
                text-stroke: transparent
            }
        }

        .home-page .projects a:after {
            content: "";
            position: absolute;
            top: .23em;
            left: -.3em;
            width: 2px;
            height: .85em;
            background-color: #000;
            transform: rotate(25deg)
        }

        @media screen and (min-width:768px) and (max-width:1320px) {
            .home-page .projects a {
                font-size: 7.4vw
            }
            @supports (-webkit-text-stroke:2px #000) or (text-stroke:2px #000) {
                .home-page .projects a {
                    -webkit-text-stroke-width: 2px;
                    text-stroke-width: 2px
                }
            }
            .home-page .projects a:after {
                width: 2px
            }
        }

        @media screen and (max-width:767px) {
            .home-page {
                overflow-x: hidden
            }
            .home-page .stagePerspective {
                perspective: 400vw
            }
            .home-page .stage {
                padding-top: 17vw;
                padding-bottom: 17vw
            }
            @supports (-webkit-text-stroke:1px #000) or (text-stroke:1px #000) {
                .home-page .projects a {
                    -webkit-text-stroke-width: 1px;
                    text-stroke-width: 1px
                }
            }
            .home-page .projects a:after {
                width: 1px
            }
        }

        @media screen and (max-width:420px) {
            .home-page .stage {
                padding-top: 25vw
            }
            .home-page .projects a:before {
                top: 10px;
                left: -220px;
                font-size: 7px
            }
            .home-page .projects a:after {
                top: 10px;
                left: -15px
            }
            .home-page .projects {
                width: 100%
            }
            .home-page .projects a {
                font-size: 13vw;
                letter-spacing: normal
            }
        }

        .home-page .parallaxPerspective {
            perspective-origin: 50% var(--perspective-origin-y);
            will-change: perspective-origin
        }

        body:not(.aboutShow) .about {
            opacity: 0
        }

        @media screen and (min-width:768px) {
            body:not(.aboutShow) .about .container {
                transform: translate3d(0, 30px, 0)
            }
        }

        .about {
            z-index: 1;
            opacity: 1
        }

        .about,
        .about:before {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .about:before {
            content: "";
            z-index: -1;
            background-color: hsla(0, 0%, 95%, .95)
        }

        .about .container {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
            max-width: calc(1320px + 10vw);
            height: calc(100vh - (106px + 15vh));
            overflow-x: hidden;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            margin: calc(106px + 15vh) auto calc(107px + 5vh);
            padding-left: 5vw;
            padding-right: 5vw;
            transform: translateZ(0)
        }

        .about .left {
            width: 55%;
            padding-right: 10%;
            font-size: 30px;
            line-height: 1.2em;
            color: #000
        }

        .about .left p {
            font-size: 24px
        }

        .about .left p:last-of-type {
            margin-bottom: 50px
        }

        .about .right {
            -ms-flex-pack: justify;
            width: 45%;
            padding-top: 8px;
            color: #000
        }

        .about .col-1,
        .about .col-2,
        .about .right {
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between
        }

        .about .col-1,
        .about .col-2 {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-line-pack: start;
            align-content: flex-start;
            -ms-flex-pack: justify;
            width: 50%;
            margin-bottom: 30px
        }

        .about .left .heading {
            line-height: 1.2em
        }

        .about .right .heading {
            width: 100%;
            margin-bottom: 20px
        }

        .about .heading:not(:first-of-type) {
            margin-top: 50px
        }

        .about p {
            width: 100%;
            margin-bottom: 5px
        }

        .about .info {
            width: 100%;
            padding-bottom: 30px
        }

        .about .info ul {
            width: 100%;
            padding-left: 0
        }

        .about ul {
            margin-top: 0;
            margin-bottom: 0;
            padding-left: 0;
            list-style: none
        }

        .about .title {
            margin-top: 0;
            margin-bottom: 5px
        }

        .about li {
            line-height: 1.2em;
            margin-bottom: 5px
        }

        .about li:last-of-type {
            margin-bottom: 0
        }

        @media screen and (min-width:768px) {
            .about .right {
                position: relative
            }
        }

        @media screen and (max-width:1070px) {
            .about .left {
                width: 45%
            }
            .about .right {
                width: 55%
            }
        }

        @media screen and (max-width:767px) {
            .about {
                z-index: 2
            }
            .about .container {
                display: block;
                height: 100vh;
                margin-top: 0;
                margin-bottom: 0
            }
            .about .left {
                width: 100%;
                max-width: 414px;
                padding-top: calc(71px + 10vw);
                padding-right: 0
            }
            .about .left .heading {
                font-size: 24px
            }
            .about .left p {
                font-size: 20px;
                line-height: 1.4em
            }
            .about .right {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                width: 100%;
                padding: 0
            }
            .about .col-1,
            .about .col-2 {
                width: 100%
            }
        }


    </style>

  <style media="screen">

    .home--cta {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: nowrap;
          flex-wrap: nowrap;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      bottom: 0;
      z-index: 99;
    }

    .home--cta .h-boton {
      text-align: center;
      min-width: 170px;
    }

    @media (max-width: 768px) {
      .home--cta .h-boton {
        width: 100%;
        padding-left: 0;
        padding-right: 0;
      }
    }

    .home--cta .h-boton a {
      font-family: "Geogrotesque-Rg";
      font-size: 30px;
      display: block;
      width: 100%;
      height: 100%;
      padding: 15px;
      text-decoration: none;
    }

    @media (max-width: 1100px) {
      .home--cta .h-boton a {
        font-size: 2.1rem;
      }
    }

    @media (max-width: 700px) {
      .home--cta .h-boton a {
        font-size: 2em;
        padding: 8px;
        padding-top: 13px;
      }
    }

    .home--cta .colegio {
      background-color: white;
    }

    .home--cta .colegio a {
      color: #53565a !important;
    }

    .home--cta .academia {
      background-color: #53565a;
    }

    .home--cta .academia a {
      color: white;
    }

    .animation-svg-border01 {
      position: relative;
      cursor: pointer;
    }

    .animation-svg-border01 svg {
      pointer-events: none;
      position: absolute;
      top: 0;
      left: 0;
    }

    .animation-svg-border01 svg rect {
      fill: none;
      stroke: transparent;
      stroke-width: 1;
      stroke-dasharray: 400, 0;
      -webkit-transition: all 0.4s ease-in-out;
      transition: all 0.4s ease-in-out;
    }

    .animation-svg-border01:hover svg rect {
      stroke-width: 10;
      stroke-dasharray: 35, 245;
      stroke-dashoffset: 38;
      -webkit-transition: all 0.4s ease-in-out;
      transition: all 0.4s ease-in-out;
      stroke: white;
    }

    .az:hover svg rect {
      stroke-width: 10;
      stroke-dasharray: 35, 245;
      stroke-dashoffset: 38;
      -webkit-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      stroke: #f4633a;
    }



    .logo{
      margin-bottom: 30px;
    }

    .info{
      flex-wrap: wrap;

    }

    .left:not(:last-child){
      margin-bottom: 10px;
    }

    .links-social{
      display: block;
      margin-top: 20px;
    }

    .links-social ul{
      display: flex;
      flex-wrap: nowrap;
      flex-direction: row;
    }

    .links-social ul li {
      position: relative;
      font-family: 'Geogrotesque-Md';
      font-family: 1rem;
    }

    .links-social ul li:before {
      position: absolute;
      content: "";
      width: 10px;
      background: white;
      bottom: -5px;
      height: 1px;
      transition: all .3s ease-in-out;
    }

    .links-social ul li:hover:before {
      width: 90%;
    }

    .links-social ul li:not(:last-child){
      margin-right: 10px;
    }

  </style>

</head>

<body class="home-page ultra-mode loading">

  <div class="mobile-overbackground"></div>
  <header class="ui">
    <div class="info">
      <div class="left mobile-logo">
        <a class="logo" href="/">
          <span class="">
            <span>
              <svg class="logo_trilce" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 116.94 37.45" fill="white">
                <path d="M54.34,11.55a3.73,3.73,0,1,0-3.73-3.73,3.73,3.73,0,0,0,3.73,3.73" transform="translate(-1 -1.06)"/>
                <path d="M69.19,33.39a1,1,0,0,1-1-1V1.06H62.14V33.78a4.74,4.74,0,0,0,4.74,4.73h4.6V33.39Z" transform="translate(-1 -1.06)"/><polygon points="0 2.28 0 10.21 5.12 10.21 5.12 8.15 12.95 8.15 12.95 32.33 10.6 32.33 10.6 37.45 21.68 37.45 21.68 32.33 19.33 32.33 19.33 8.15 27.16 8.15 27.16 10.21 32.24 10.21 32.24 2.28 0 2.28"/><polygon points="56.41 32.33 56.41 14.14 43.4 14.14 43.4 19.29 50.36 19.29 50.36 32.33 43.4 32.33 43.4 37.45 58.86 37.45 58.86 32.33 56.41 32.33"/>
                <polygon points="27.16 14.14 27.16 32.33 24.71 32.33 24.71 37.45 40.37 37.45 40.37 32.33 33.22 32.33 33.22 19.29 40.37 19.29 40.37 14.14 30.84 14.16 27.16 14.14"/>
                <path d="M101.24,24.5a4.78,4.78,0,0,1,.63-2.07,5.38,5.38,0,0,1,1.38-1.54,6.28,6.28,0,0,1,1.88-.95,7.57,7.57,0,0,1,2.21-.32,5,5,0,0,1,3.78,1.31,5,5,0,0,1,1.24,3.57Zm15.62-4.61a8.49,8.49,0,0,0-2.51-3A9.68,9.68,0,0,0,111,15.37a15,15,0,0,0-8.34.3,10.83,10.83,0,0,0-3.86,2.23,10.47,10.47,0,0,0-2.6,3.73,13.32,13.32,0,0,0-1,5.22,17.18,17.18,0,0,0,.11,1.94,13.12,13.12,0,0,0,.73,3.07,10.36,10.36,0,0,0,4.3,5c2,1.19,4.84,1.67,8.7,1.67s5.81-.16,5.81-.16v-5s-2.7,0-6,0c-4.88,0-6.53-3-6.87-3.81a7.3,7.3,0,0,1-.26-.79h16c.46-2.24.26-6.73-.85-8.9" transform="translate(-1 -1.06)"/>
                <path d="M93,24.61V17a.59.59,0,0,0-.35-.54,24.44,24.44,0,0,0-3-1,18.56,18.56,0,0,0-4.75-.59,15.65,15.65,0,0,0-5,.79,11.55,11.55,0,0,0-4,2.33,10.81,10.81,0,0,0-2.65,3.76,12.84,12.84,0,0,0-.95,5.07A13.94,13.94,0,0,0,73,31.76a9.75,9.75,0,0,0,2.22,3.62c1.66,1.74,4.88,3,8.62,3.12h7.48V33.39H85.56a9.36,9.36,0,0,1-5.41-1.72,6.54,6.54,0,0,1-1.41-2.13,7,7,0,0,1-.49-2.67,6.85,6.85,0,0,1,.61-3,6.26,6.26,0,0,1,1.58-2.11,6.18,6.18,0,0,1,2.22-1.22,8.63,8.63,0,0,1,2.51-.38,12.87,12.87,0,0,1,2.81.31v4.17Z" transform="translate(-1 -1.06)"/>
              </svg>
            </span>
          </span>
        </a>

      </div>

      <div class="left mobile-slogan">
        <h1>¡EL LÍMITE LO PONES TÚ!</h1>
      </div>

      <div class="left mobile-cta">
        <div class="home--cta">
          <div id="btnColegio" class="h-boton colegio animation-svg-border01 az">
            <a class="no-barba" href="colegio">Colegio</a>
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
              <rect x="0" y="0" fill="none" width="100%" height="100%"></rect>
            </svg>
          </div>

          <div id="btnAcademia" class="h-boton academia animation-svg-border01">
            <a class="no-barba" href="academia">Academia</a>
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
              <rect x="0" y="0" fill="none" width="100%" height="100%"></rect>
            </svg>
          </div>
        </div>
      </div>

      <div class="left mobile-social">
        <div class="links-social">
          <ul>
            <li><a class="no-barba" target="_blank" href="https://www.facebook.com/ColegioTrilce/?pnref=lhc">Facebook</a></li>
            <li><a class="no-barba" target="_blank" href="https://www.instagram.com/trilcecolegioacademia/">Instagram</a></li>
            <li><a class="no-barba" target="_blank" href="https://twitter.com/TRILCEtweet">Twitter</a></li>
            <li><a class="no-barba" target="_blank" href="https://www.youtube.com/user/ColegiosTRILCEperu?sub_confirmation=1">YouTube</a></li>
            <li><a class="no-barba" target="_blank" href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n">Whatsapp</a></li>
          </ul>
        </div>
      </div>


    </div>
  </header>

    <div id="barba-wrapper">
        <div class="barba-container" data-namespace="home-page">
            <div class="barba-transition-container">
                <div class="stagePerspective parallaxPerspective perspective-origin-tt-bb">
                    <div class="stageContainer" style="opacity: 0">
                        <main class="stage">
                            <ul class="projects">


                              <li class="projectsLi" data-barba="HomeTransition" class="no-barba" onclick="link('/colegio/admision-nuevo')">
                                  <div class="projectContainer" class="no-barba"><a href="/colegio/admision-nuevo" class="no-barba link" data-info="Colegio" rel="">Admisión<br>2019</a></div>
                              </li>

                              <li class="projectsLi" data-barba="HomeTransition" class="no-barba" onclick="link('/academia/preparacion-pucp')">
                                  <div class="projectContainer" class="no-barba"><a href="/academia/preparacion-pucp" class="no-barba link" data-info="Academia" rel="">Nuevos<br>inicios</a></div>
                              </li>

                              <li class="projectsLi" data-barba="HomeTransition" class="no-barba" onclick="link('/colegio/propuesta-educativa')">
                                  <div class="projectContainer" class="no-barba"><a href="/colegio/propuesta-educativa" class="no-barba link" data-info="Colegio" rel="">Propuesta<br>educativa</a></div>
                              </li>

                              <li class="projectsLi" data-barba="HomeTransition" class="no-barba" onclick="link('/academia/matricula-en-linea')">
                                  <div class="projectContainer" class="no-barba"><a href="/academia/matricula-en-linea" class="no-barba link" data-info="Academia" rel="">Matrícula en<br>línea</a></div>
                              </li>

                            </ul>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js"></script>
    <script src="{{ url('js/app_home3.js') }}" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('css/main_home3.css') }}">

    <div class="mobile-nav"></div>
</body>
</html>
