<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	
	@import url("https://fonts.googleapis.com/css?family=Roboto+Condensed");
@font-face {
  font-family: "Retrocycles";
  src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/RetrocyclesRegular.woff2") format("woff2"), url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/RetrocyclesRegular.woff") format("woff");
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: "Pasta";
  src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/PastaPalazzo.woff2") format("woff2"), url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/PastaPalazzo.woff") format("woff");
  font-weight: normal;
  font-style: normal;
}
* {
  box-sizing: border-box;
}

body .overlay, body .main_inner__loading .loader, body .main_inner__title, body .main_inner__circle, body .main_inner__circle .circle, body .main_inner__circle .circles, body .main_inner__scenes, body .main_inner__scenes .scene, body .main_inner__info, body .main_inner__feedback, body .main_inner__answers, body .main_inner__breadcrumbs {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

body .main_inner__breadcrumbs .breadcrumb.correct:before, body .main_inner__breadcrumbs .breadcrumb.wrong:before {
  display: block;
  position: absolute;
  font-family: "fontawesome";
  font-size: 18px;
}

body .main_inner__circle {
  background: #68859b;
  width: 300px;
  height: 300px;
  border-radius: 150px;
  transition: all 500ms;
  transition-timing-function: cubic-bezier(1, 0, 0.2, 0.99);
  z-index: -1;
  -webkit-animation: squiggly-anim 0.3s linear infinite;
          animation: squiggly-anim 0.3s linear infinite;
}

body {
  background: #7a94a7;
  overflow: hidden;
  font-family: "Roboto Condensed", sans-serif;
  padding: 40px;
  height: 100vh;
}
@media only screen and (max-width: 1000px) {
  body {
    padding: 34px;
    height: 400px;
  }
}
body svg {
  position: absolute;
}
body .options {
  position: absolute;
  right: 34px;
  top: 40px;
  z-index: 2;
}
body .options_bg img {
  width: 21px;
  -ms-interpolation-mode: nearest-neighbor;
      image-rendering: -moz-crisp-edges;
      image-rendering: pixelated;
}
body .options_sf img {
  width: 18px;
  margin-right: 10px;
  -ms-interpolation-mode: nearest-neighbor;
      image-rendering: -moz-crisp-edges;
      image-rendering: pixelated;
}
body .options div {
  float: left;
  transition: all 1s;
  cursor: pointer;
}
body .overlay {
  width: 100%;
  height: 100vh;
  pointer-events: none;
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/ptp_grain.png"), -webkit-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.25) 100%);
}
@media only screen and (max-width: 1000px) {
  body .overlay {
    height: 100vh;
  }
}
@media only screen and (max-width: 1000px) {
  body .main {
    height: 600px;
  }
}
@media only screen and (max-width: 1000px) {
  body .main_inner {
    height: 600px;
  }
}
body .main_inner__loading {
  position: fixed;
  height: 100%;
  width: 100%;
  background: #cf3a39;
  left: 0;
  top: 0;
  z-index: 4;
}
body .main_inner__loading .joy {
  -webkit-transform: scale(0);
          transform: scale(0);
  width: 200px;
  -webkit-animation: scale_bounce_expo 1s 0s forwards;
          animation: scale_bounce_expo 1s 0s forwards;
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  opacity: 0.2;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
body .main_inner__loading .joy img {
  width: 100%;
}
body .main_inner__loading .text {
  font-family: "Pasta";
  position: absolute;
  text-align: center;
  left: 0;
  right: 0;
  margin: auto;
  top: -70px;
  width: 100px;
  font-size: 120px;
}
body .main_inner__loading .text .s,
body .main_inner__loading .text .b {
  font-size: 70px;
  float: left;
  font-family: "Pasta";
  font-size: 62px;
  clear: left;
  color: #ffb6a9;
  top: -26px;
  position: relative;
}
body .main_inner__loading .text span {
  float: left;
}
body .main_inner__loading .text span:nth-of-type(1) {
  -webkit-animation: scale_bounce_expo 1s 0.06s forwards;
          animation: scale_bounce_expo 1s 0.06s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(2) {
  -webkit-animation: scale_bounce_expo 1s 0.12s forwards;
          animation: scale_bounce_expo 1s 0.12s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(3) {
  -webkit-animation: scale_bounce_expo 1s 0.18s forwards;
          animation: scale_bounce_expo 1s 0.18s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(4) {
  -webkit-animation: scale_bounce_expo 1s 0.24s forwards;
          animation: scale_bounce_expo 1s 0.24s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(5) {
  -webkit-animation: scale_bounce_expo 1s 0.3s forwards;
          animation: scale_bounce_expo 1s 0.3s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(6) {
  -webkit-animation: scale_bounce_expo 1s 0.36s forwards;
          animation: scale_bounce_expo 1s 0.36s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(7) {
  -webkit-animation: scale_bounce_expo 1s 0.42s forwards;
          animation: scale_bounce_expo 1s 0.42s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(8) {
  -webkit-animation: scale_bounce_expo 1s 0.48s forwards;
          animation: scale_bounce_expo 1s 0.48s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(9) {
  -webkit-animation: scale_bounce_expo 1s 0.54s forwards;
          animation: scale_bounce_expo 1s 0.54s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(10) {
  -webkit-animation: scale_bounce_expo 1s 0.6s forwards;
          animation: scale_bounce_expo 1s 0.6s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(11) {
  -webkit-animation: scale_bounce_expo 1s 0.66s forwards;
          animation: scale_bounce_expo 1s 0.66s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(12) {
  -webkit-animation: scale_bounce_expo 1s 0.72s forwards;
          animation: scale_bounce_expo 1s 0.72s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(13) {
  -webkit-animation: scale_bounce_expo 1s 0.78s forwards;
          animation: scale_bounce_expo 1s 0.78s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(14) {
  -webkit-animation: scale_bounce_expo 1s 0.84s forwards;
          animation: scale_bounce_expo 1s 0.84s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .text span:nth-of-type(15) {
  -webkit-animation: scale_bounce_expo 1s 0.9s forwards;
          animation: scale_bounce_expo 1s 0.9s forwards;
  -webkit-transform: scale(0);
          transform: scale(0);
}
body .main_inner__loading .bg {
  height: 100vh;
  width: 600px;
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  -webkit-animation: spin 10s linear infinite;
          animation: spin 10s linear infinite;
}
@media only screen and (max-width: 650px) {
  body .main_inner__loading .bg {
    width: 100%;
  }
}
body .main_inner__loading .bg img {
  width: 600px;
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 50%;
  -webkit-transform: translateY(-50%) rotate(0deg);
          transform: translateY(-50%) rotate(0deg);
}
@media only screen and (max-width: 650px) {
  body .main_inner__loading .bg img {
    width: 100%;
  }
}
body .main_inner__loading.loaded {
  -webkit-animation: loadOut 1s 0s forwards;
          animation: loadOut 1s 0s forwards;
}
body .main_inner__loading button {
  opacity: 0;
  font-family: "Roboto Condensed", sans-serif;
  cursor: pointer;
  outline: none;
  -webkit-animation: pulse 1s 2s infinite;
          animation: pulse 1s 2s infinite;
}
body .main_inner__loading .loader {
  cursor: pointer;
  z-index: 5;
  color: white;
  text-align: center;
}
body .main_inner__loading .loader img {
  width: 200px;
  pointer-events: none;
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-animation: scale_bounce_expo 1s 0.7s forwards;
          animation: scale_bounce_expo 1s 0.7s forwards;
}
body .main_inner__loading .loader button {
  clear: both;
  outline: none;
  width: 240px;
  padding: 12px;
  background: transparent;
  margin-top: 30px;
  color: #ffcc00;
  border: 0;
  font-size: 44px;
  top: 50px;
  position: relative;
  left: -5px;
  display: inline-block;
  font-family: "pasta";
}
body .main_inner__modal, body .main_inner__modalContent {
  display: none;
  position: fixed;
  -webkit-animation: squiggly-anim 0.3s linear infinite, scale_bounce_expo 1s 0s forwards;
  animation: squiggly-anim 0.3s linear infinite;
  width: 500px;
  background: white;
  padding: 50px;
  border-radius: 20px;
  left: 0;
  right: 0;
  margin: auto;
  z-index: 3;
  height: 450px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}
body .main_inner__modal button, body .main_inner__modalContent button {
  opacity: 1;
  border: none;
  background: #00b3ff;
  padding: 20px 30px 17px 30px;
  color: white;
  border-radius: 7px;
  font-size: 17px;
  margin-top: 30px;
  font-family: "Retrocycles";
}
body .main_inner__modal h1, body .main_inner__modalContent h1 {
  font-family: "Retrocycles";
  font-size: 50px;
  margin: 0;
  color: #3a2132;
}
body .main_inner__modal .score, body .main_inner__modalContent .score {
  font-size: 30px;
  color: #bd2b2b;
}
body .main_inner__modal a, body .main_inner__modalContent a {
  display: block;
  margin: 10px 0;
  font-weight: 700;
  color: #3a2031;
  text-decoration: underline;
}
@media only screen and (max-width: 650px) {
  body .main_inner__modal, body .main_inner__modalContent {
    width: calc(100% - 50px);
  }
}
body .main_inner__modalContent {
  -webkit-animation: none;
          animation: none;
  background: transparent !important;
}
body .main_inner__modalOverlay {
  position: fixed;
  height: 100%;
  width: 100%;
  background: rgba(39, 33, 86, 0.768627451);
  left: 0;
  top: 0;
  display: none;
  z-index: 2;
}
body .main_inner__logo {
  position: relative;
  z-index: 1;
}
@media only screen and (max-width: 1000px) {
  body .main_inner__logo {
    text-align: center;
  }
}
@media only screen and (max-width: 600px) {
  body .main_inner__logo img {
    width: 60px !important;
  }
}
body .main_inner__logo img {
  width: 100px;
}
body .main_inner__title {
  width: 33.33%;
  right: auto;
  left: 40px;
  padding-right: 80px;
}
@media only screen and (max-width: 1000px) {
  body .main_inner__title {
    width: 100%;
    text-align: center;
    padding: 0;
    left: 0;
    top: 150px;
  }
  body .main_inner__title p {
    margin-top: 6px !important;
  }
}
@media only screen and (max-width: 1000px) {
  body .main_inner__title p,
  body .main_inner__title h1,
  body .main_inner__title a,
  body .main_inner__title div {
    float: none !important;
    border: 0 !important;
    width: 80% !important;
    margin: 0 auto !important;
    text-align: center !important;
    margin-top: 6px !important;
  }
}
body .main_inner__title h1 {
  border-top: 2px solid white;
  width: 240px;
  float: right;
  font-weight: normal;
  color: white;
  font-size: 20px;
  text-align: left;
  padding-top: 10px;
}
@media only screen and (max-width: 1000px) {
  body .main_inner__title h1 {
    font-size: 16px;
  }
}
body .main_inner__title p {
  color: white;
  margin: 0;
  font-size: 12px;
  margin-top: -4px;
  width: 240px;
  float: right;
  clear: both;
  opacity: 0.3;
}
body .main_inner__title a {
  color: #ff8874;
  margin: 0;
  font-size: 12px;
  transition: all 0.2s;
  margin-top: 12px;
  text-decoration: underline;
  width: 240px;
  float: right;
  clear: both;
  cursor: pointer;
}
body .main_inner__title .hint {
  color: white;
  width: 240px;
  display: none;
  float: right;
  clear: both;
  margin-top: 14px;
  font-size: 14px;
}
@media only screen and (max-width: 1000px) {
  body .main_inner__circle {
    -webkit-transform: translateY(calc(-50% - 110px)) scale(0.6);
            transform: translateY(calc(-50% - 110px)) scale(0.6);
    position: relative;
    top: 360px;
  }
}
body .main_inner__circle .circle:nth-of-type(1) {
  -webkit-transform: rotate(36deg);
          transform: rotate(36deg);
}
body .main_inner__circle .circle:nth-of-type(2) {
  -webkit-transform: rotate(72deg);
          transform: rotate(72deg);
}
body .main_inner__circle .circle:nth-of-type(3) {
  -webkit-transform: rotate(108deg);
          transform: rotate(108deg);
}
body .main_inner__circle .circle:nth-of-type(4) {
  -webkit-transform: rotate(144deg);
          transform: rotate(144deg);
}
body .main_inner__circle .circle:nth-of-type(5) {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
body .main_inner__circle .circle:nth-of-type(6) {
  -webkit-transform: rotate(216deg);
          transform: rotate(216deg);
}
body .main_inner__circle .circle:nth-of-type(7) {
  -webkit-transform: rotate(252deg);
          transform: rotate(252deg);
}
body .main_inner__circle .circle:nth-of-type(8) {
  -webkit-transform: rotate(288deg);
          transform: rotate(288deg);
}
body .main_inner__circle .circle:nth-of-type(9) {
  -webkit-transform: rotate(324deg);
          transform: rotate(324deg);
}
body .main_inner__circle .circle:nth-of-type(10) {
  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
}
body .main_inner__circle .circles {
  width: 30px;
  height: 30px;
  border-radius: 20px;
  background: white;
  -webkit-animation: circle 3s infinite linear;
          animation: circle 3s infinite linear;
}
body .main_inner__circle .circles:nth-of-type(1) {
  -webkit-transform-origin: 0px 2px;
          transform-origin: 0px 2px;
}
body .main_inner__circle .circles:nth-of-type(2) {
  -webkit-transform-origin: 0px 4px;
          transform-origin: 0px 4px;
}
body .main_inner__circle .circles:nth-of-type(3) {
  -webkit-transform-origin: 0px 6px;
          transform-origin: 0px 6px;
}
body .main_inner__circle .circles:nth-of-type(4) {
  -webkit-transform-origin: 0px 8px;
          transform-origin: 0px 8px;
}
body .main_inner__circle .circles:nth-of-type(5) {
  -webkit-transform-origin: 0px 10px;
          transform-origin: 0px 10px;
}
body .main_inner__circle .circles:nth-of-type(6) {
  -webkit-transform-origin: 0px 12px;
          transform-origin: 0px 12px;
}
body .main_inner__circle .circles:nth-of-type(7) {
  -webkit-transform-origin: 0px 14px;
          transform-origin: 0px 14px;
}
body .main_inner__circle .circles:nth-of-type(8) {
  -webkit-transform-origin: 0px 16px;
          transform-origin: 0px 16px;
}
body .main_inner__circle .circles:nth-of-type(9) {
  -webkit-transform-origin: 0px 18px;
          transform-origin: 0px 18px;
}
body .main_inner__circle .circles:nth-of-type(10) {
  -webkit-transform-origin: 0px 20px;
          transform-origin: 0px 20px;
}
body .main_inner__scenes {
                /* =====================================================================

                Individual scene markup.
                Paste your SCSS in here, again us http://css2sass.herokuapp.com/ if 
                you are writing in plain CSS.
                Make sure the class matches the class in the HAML.

                ======================================================================== */
  /* ==============================================================================
  ================================================================================= */
  /* ==============================================================================
  ================================================================================= */
  /* ==============================================================================
  ================================================================================= */
                /* =====================================================================

                End of scenes markup

                ======================================================================== */
}
@media only screen and (max-width: 1000px) {
  body .main_inner__scenes {
    -webkit-transform: translateY(calc(-50% - 120px)) scale(0.6);
            transform: translateY(calc(-50% - 120px)) scale(0.6);
    position: relative;
    top: 60px;
  }
}
body .main_inner__scenes .scene {
  text-align: center;
  -webkit-animation: float 2s 0.4s infinite;
          animation: float 2s 0.4s infinite;
  bottom: -500px;
  width: 200px;
  height: 275px;
  display: none;
  transition: all 0.3s;
}
body .main_inner__scenes .scene img {
  max-height: 275px;
  max-width: 200px;
}
body .main_inner__scenes .mario {
  --main-black: #271c1c;
  --main-grey: transparent;
  --main-red: #fc5946;
  --main-hair: #4e342e;
  --main-skin: #edbeb6;
}
body .main_inner__scenes .mario .container {
  position: relative;
  justify-items: center;
  display: grid;
  justify-content: center;
  align-content: center;
}
body .main_inner__scenes .mario .hat {
  position: relative;
  display: grid;
  justify-items: center;
  z-index: -1;
  opacity: 1;
}
body .main_inner__scenes .mario .hat .main {
  width: 166px;
  height: 166px;
  background: var(--main-red);
  border-radius: 50% 45% 60%;
  -webkit-transform: rotateZ(45deg);
          transform: rotateZ(45deg);
  border: 4px solid var(--main-black);
  box-sizing: border-box;
}
body .main_inner__scenes .mario .hat .label {
  position: absolute;
  background: #fff;
  width: 55px;
  height: 55px;
  border-radius: 50%;
  border: 4px solid var(--main-black);
  box-sizing: border-box;
  top: 6%;
  display: grid;
  justify-content: center;
}
body .main_inner__scenes .mario .hat .label p {
  color: var(--main-red);
  font-family: "Nunito", sans-serif;
  font-size: 30px;
  font-weight: 900;
  margin: 0;
}
body .main_inner__scenes .mario .hat .screen {
  width: 130px;
  height: 60px;
  background: var(--main-red);
  position: absolute;
  top: 30%;
  border-radius: 50%;
  border: 4px solid var(--main-black);
}
body .main_inner__scenes .mario .hat::before {
  content: "";
  display: block;
  width: 180px;
  height: 100px;
  background: var(--main-grey);
  position: absolute;
  bottom: 0;
  border-radius: 50%;
  border-top: 5px solid var(--main-black);
  box-sizing: border-box;
  z-index: 1;
}
body .main_inner__scenes .mario .hat::after {
  content: "";
  width: 200px;
  height: 20px;
  background: var(--main-grey);
  z-index: 1;
  position: absolute;
  top: 61%;
}
body .main_inner__scenes .mario .ears {
  width: 190px;
  height: 50px;
  position: absolute;
  top: 53%;
}
body .main_inner__scenes .mario .ears .ear {
  position: absolute;
  width: 25px;
  height: 48px;
  border-radius: 35px 45px 15px;
  background: var(--main-skin);
  box-sizing: border-box;
  border: 4px solid var(--main-black);
}
body .main_inner__scenes .mario .ears .ear.left {
  left: 10px;
  -webkit-transform: rotate(-10deg);
          transform: rotate(-10deg);
}
body .main_inner__scenes .mario .ears .ear.right {
  -webkit-transform: scaleX(-1) rotate(-10deg);
          transform: scaleX(-1) rotate(-10deg);
  right: 10px;
}
body .main_inner__scenes .mario .head {
  width: 210px;
  height: 220px;
  position: absolute;
  -webkit-clip-path: ellipse(120px 95px at center 74.5%);
          clip-path: ellipse(120px 95px at center 74.5%);
  z-index: 2;
  display: grid;
  justify-items: center;
  overflow: hidden;
}
body .main_inner__scenes .mario .head .face {
  width: 120px;
  height: 85px;
  position: absolute;
  background: var(--main-skin);
  border-radius: 50%;
  border: 4px solid var(--main-black);
  top: 38%;
  display: grid;
  justify-items: center;
}
body .main_inner__scenes .mario .head .face::after {
  content: "";
  display: block;
  width: 104px;
  height: 110px;
  background: var(--main-skin);
  position: absolute;
  bottom: 67%;
  border-color: var(--main-black);
  border-style: solid;
  border-width: 0px 5px;
  border-bottom: 5px solid transparent;
}
body .main_inner__scenes .mario .head .eyes {
  width: 70px;
  height: 40px;
  position: absolute;
  bottom: 41%;
}
body .main_inner__scenes .mario .head .eyes .eye {
  z-index: 20;
  position: absolute;
  width: 20px;
  height: 30px;
  background: white;
  border: 3px solid var(--main-black);
  border-radius: 30px;
  display: grid;
  justify-items: end;
  align-items: center;
}
body .main_inner__scenes .mario .head .eyes .eye::before {
  content: "";
  display: block;
  position: absolute;
  width: 18px;
  height: 25px;
  right: -3px;
  background: skyblue;
  box-sizing: border-box;
  border: 3px solid var(--main-black);
  border-radius: 25px;
}
body .main_inner__scenes .mario .head .eyes .eye::after {
  content: "";
  display: block;
  position: absolute;
  width: 12px;
  height: 15px;
  right: -3px;
  background: var(--main-black);
  box-sizing: border-box;
  border: 3px solid var(--main-black);
  border-radius: 25px;
}
body .main_inner__scenes .mario .head .eyes .eye.left {
  left: 0%;
}
body .main_inner__scenes .mario .head .eyes .eye.right {
  right: 0%;
  -webkit-transform: scaleX(-1);
          transform: scaleX(-1);
}
body .main_inner__scenes .mario .head .mustache {
  position: absolute;
  display: grid;
  justify-items: center;
  bottom: 43%;
}
body .main_inner__scenes .mario .head .mustache .main {
  width: 82.5px;
  height: 30px;
  position: absolute;
  background: var(--main-hair);
  display: grid;
  border-radius: 0 0 270px 270px;
  border: 3px solid var(--main-black);
  border-top: 0px;
}
body .main_inner__scenes .mario .head .mustache .main::before {
  content: "";
  display: block;
  width: 90px;
  height: 22px;
  position: absolute;
  background: var(--main-skin);
  top: -50%;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  border-radius: 50%;
  border: 2px solid transparent;
  border-bottom: 5px solid var(--main-black);
}
body .main_inner__scenes .mario .head .mustache .detail {
  background: linear-gradient(rgba(255, 0, 255, 0), var(--main-hair), var(--main-hair));
  background-clip: padding-box;
  position: absolute;
  border-radius: 50%;
  border: 1px solid transparent;
  border-bottom: 4px solid var(--main-black);
  z-index: 3;
}
body .main_inner__scenes .mario .head .mustache .detail.farleft {
  width: 20px;
  height: 17px;
  top: 10px;
  -webkit-transform: translateX(-120%) rotate(40deg);
          transform: translateX(-120%) rotate(40deg);
}
body .main_inner__scenes .mario .head .mustache .detail.left {
  width: 20px;
  height: 12px;
  top: 20px;
  -webkit-transform: translateX(-49%) rotate(5deg);
          transform: translateX(-49%) rotate(5deg);
}
body .main_inner__scenes .mario .head .mustache .detail.right {
  width: 20px;
  height: 12px;
  top: 20px;
  -webkit-transform: translateX(49%) rotate(-5deg);
          transform: translateX(49%) rotate(-5deg);
}
body .main_inner__scenes .mario .head .mustache .detail.farright {
  width: 20px;
  height: 17px;
  top: 9px;
  -webkit-transform: translateX(120%) rotate(-40deg);
          transform: translateX(120%) rotate(-40deg);
}
body .main_inner__scenes .mario .head .nose {
  width: 45px;
  height: 40px;
  background: var(--main-skin);
  position: absolute;
  bottom: 31%;
  border-radius: 48% 48% 50% 50%;
  border: 4px solid var(--main-black);
  box-sizing: border-box;
  z-index: 30;
}
body .main_inner__scenes .mario .hair {
  width: 144px;
  height: 60px;
  position: absolute;
  top: 32%;
}
body .main_inner__scenes .mario .hair .hair-back {
  width: 18px;
  height: 60px;
  position: absolute;
  box-sizing: border-box;
  border: 4px solid var(--main-black);
  border-radius: 10px;
  background: var(--main-hair);
}
body .main_inner__scenes .mario .hair .hair-back::after {
  content: "";
  display: block;
  position: absolute;
  width: 15px;
  height: 90%;
  box-sizing: border-box;
  border: 4px solid var(--main-black);
  border-left: 0px;
  border-radius: 10px;
  background: var(--main-hair);
  z-index: 20;
  top: -9%;
}
body .main_inner__scenes .mario .hair .hair-back.left {
  left: 0;
}
body .main_inner__scenes .mario .hair .hair-back.left::after {
  left: 3.75px;
}
body .main_inner__scenes .mario .hair .hair-back.right {
  right: 0;
}
body .main_inner__scenes .mario .hair .hair-back.right::after {
  right: 3.75px;
  -webkit-transform: scale(-1);
          transform: scale(-1);
}
body .main_inner__scenes .mario .brows {
  width: 86px;
  height: 22px;
  position: absolute;
  z-index: 40;
  top: 40%;
  padding-top: 2px;
  overflow: hidden;
}
body .main_inner__scenes .mario .brows .brow {
  width: 30px;
  height: 15px;
  background: var(--main-hair);
  position: absolute;
  border: 4px solid var(--main-black);
  border-radius: 45px 60px 0% 0%;
  -webkit-transform: rotate(5deg);
          transform: rotate(5deg);
}
body .main_inner__scenes .mario .brows .brow::after {
  content: "";
  display: block;
  position: absolute;
  width: 38px;
  height: 10px;
  top: 50%;
  left: -15%;
  background: var(--main-skin);
  border-radius: 40% 60% 0 0;
  border-width: 3px solid transparent;
  border-top: 3px solid var(--main-black);
}
body .main_inner__scenes .mario .brows .brow.right {
  -webkit-transform: scaleX(-1) rotate(5deg);
          transform: scaleX(-1) rotate(5deg);
  right: 0;
}
body .main_inner__scenes .moogle html {
  height: 100%;
}
body .main_inner__scenes .moogle body {
  background-color: #d8d8d8;
}
body .main_inner__scenes .moogle .container {
  -webkit-transform: scale(0.7);
          transform: scale(0.7);
  margin: auto;
  right: 0;
  left: 0;
  top: 0;
  bottom: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 110px;
  height: 330px;
}
body .main_inner__scenes .moogle .container,
body .main_inner__scenes .moogle .head,
body .main_inner__scenes .moogle .nose,
body .main_inner__scenes .moogle .cheeks,
body .main_inner__scenes .moogle .eyes,
body .main_inner__scenes .moogle .body,
body .main_inner__scenes .moogle .ball,
body .main_inner__scenes .moogle .feet,
body .main_inner__scenes .moogle .ears,
body .main_inner__scenes .moogle .inside,
body .main_inner__scenes .moogle .wings,
body .main_inner__scenes .moogle .wings2 {
  position: absolute;
}
body .main_inner__scenes .moogle .head {
  background: #ffecce;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  top: 115px;
  left: 0px;
  z-index: -2;
}
body .main_inner__scenes .moogle .head:before {
  content: "";
  position: absolute;
  width: 110px;
  height: 50px;
  border-radius: 100%;
  background: #ffecce;
  top: 60px;
  left: -5px;
  overflow: hidden;
  z-index: -2;
}
body .main_inner__scenes .moogle .nose {
  width: 40px;
  height: 40px;
  background: #ff735a;
  border-radius: 100%;
  top: 50px;
  left: 30px;
}
body .main_inner__scenes .moogle .cheeks {
  background: #ffceae;
  height: 32px;
  width: 30px;
  border-radius: 100%;
  top: 70px;
  left: -5px;
}
body .main_inner__scenes .moogle .cheeks:after {
  content: "";
  left: 80px;
  background: #ffceae;
  width: 30px;
  height: 32px;
  position: absolute;
  border-radius: 100%;
}
body .main_inner__scenes .moogle .eyes {
  width: 20px;
  height: 10px;
  border: 2px solid #000;
  border-top-right-radius: 30px;
  border-top-left-radius: 30px;
  border-bottom: none;
  top: 58px;
  left: 15px;
  z-index: -1;
  -webkit-transform: rotate(20deg);
          transform: rotate(20deg);
}
body .main_inner__scenes .moogle .eyes:after {
  content: "";
  position: absolute;
  width: 20px;
  height: 10px;
  border: 2px solid #000;
  border-top-right-radius: 30px;
  border-top-left-radius: 30px;
  border-bottom: none;
  left: 40px;
  top: -17px;
  -webkit-transform: rotate(-40deg);
          transform: rotate(-40deg);
}
body .main_inner__scenes .moogle .ball {
  background: #f00144;
  width: 80px;
  height: 80px;
  border-radius: 100%;
  top: 0px;
}
body .main_inner__scenes .moogle .ball:after {
  content: "";
  background: #000;
  width: 5px;
  height: 35px;
  position: absolute;
  top: 80px;
  left: 35px;
  z-index: -3;
}
body .main_inner__scenes .moogle .body {
  width: 90px;
  background: #ffecce;
  height: 100px;
  top: 210px;
  border-radius: 50% / 60% 60% 40% 40%;
  left: 5px;
  z-index: 1;
}
body .main_inner__scenes .moogle .body:before {
  content: "";
  position: absolute;
  background: #ffecce;
  width: 10px;
  height: 20px;
  border: 2px solid #ffceae;
  border-radius: 40%;
  border-top: none;
  left: 20px;
  top: 45px;
  -webkit-transform: rotate(-20deg);
          transform: rotate(-20deg);
}
body .main_inner__scenes .moogle .body:after {
  content: "";
  position: absolute;
  background: #ffecce;
  width: 10px;
  height: 20px;
  border: 2px solid #ffceae;
  border-radius: 40%;
  border-top: none;
  left: 55px;
  top: 45px;
  -webkit-transform: rotate(20deg);
          transform: rotate(20deg);
}
body .main_inner__scenes .moogle .feet {
  background: #ffecce;
  width: 15px;
  height: 30px;
  border-radius: 40%;
  top: 300px;
  left: 25px;
}
body .main_inner__scenes .moogle .feet:before {
  content: "";
  position: absolute;
  background: #ffecce;
  width: 15px;
  height: 30px;
  border-radius: 40%;
  left: 35px;
}
body .main_inner__scenes .moogle .ears {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 25px 25px 25px;
  border-color: transparent transparent #ffecce transparent;
  left: -13px;
  top: 118px;
  -webkit-transform: rotate(-40deg);
          transform: rotate(-40deg);
}
body .main_inner__scenes .moogle .ears:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 25px 25px 25px;
  border-color: transparent transparent #ffecce transparent;
  left: 33px;
  -webkit-transform: rotate(80deg);
          transform: rotate(80deg);
  top: 50px;
}
body .main_inner__scenes .moogle .inside {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 10px 10px 10px;
  border-color: transparent transparent #ffceae transparent;
  left: 0px;
  top: 125px;
  -webkit-transform: rotate(-40deg);
          transform: rotate(-40deg);
}
body .main_inner__scenes .moogle .inside:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 10px 10px 10px;
  border-color: transparent transparent #ffceae transparent;
  left: 52px;
  -webkit-transform: rotate(80deg);
          transform: rotate(80deg);
  top: 51px;
}
body .main_inner__scenes .moogle .wings {
  background: purple;
  width: 60px;
  top: 230px;
  height: 40px;
  z-index: 0;
  left: -40px;
  -webkit-clip-path: polygon(1% 98%, 24% 0%, 51% 56%, 70% 15%, 86% 46%, 100% 23%, 88% 87%, 60% 70%, 32% 100%, 22% 83%);
  clip-path: polygon(1% 98%, 24% 0%, 51% 56%, 70% 15%, 86% 46%, 100% 23%, 88% 87%, 60% 70%, 32% 100%, 22% 83%);
}
body .main_inner__scenes .moogle .wings2 {
  background: purple;
  width: 60px;
  height: 40px;
  z-index: 0;
  left: 80px;
  top: 230px;
  -webkit-transform: scale(-1, 1);
          transform: scale(-1, 1);
  -webkit-clip-path: polygon(1% 98%, 24% 0%, 51% 56%, 70% 15%, 86% 46%, 100% 23%, 88% 87%, 60% 70%, 32% 100%, 22% 83%);
  clip-path: polygon(1% 98%, 24% 0%, 51% 56%, 70% 15%, 86% 46%, 100% 23%, 88% 87%, 60% 70%, 32% 100%, 22% 83%);
}
body .main_inner__scenes .kirby * {
  box-sizing: border-box;
}
body .main_inner__scenes .kirby *::before, body .main_inner__scenes .kirby *::after {
  box-sizing: border-box;
}
body .main_inner__scenes .kirby body {
  min-height: 100vh;
  background: #fff;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 0.625rem;
  grid-template-areas: ". main main ." ". main main .";
}
body .main_inner__scenes .kirby #container {
  width: 190px;
  height: 216px;
  margin: 0;
  grid-area: main;
  align-self: center;
  justify-self: center;
}
body .main_inner__scenes .kirby .kirby,
body .main_inner__scenes .kirby .kirby *,
body .main_inner__scenes .kirby .kirby *::before,
body .main_inner__scenes .kirby .kirby *::after {
  position: absolute;
}
body .main_inner__scenes .kirby .face {
  top: 1.75rem;
  left: -0.25rem;
  -webkit-transform: rotate(-10deg);
          transform: rotate(-10deg);
}
body .main_inner__scenes .kirby .eye {
  z-index: 1;
  top: 1.25rem;
  width: 1.125rem;
  height: 2.25rem;
  background: #782838;
  border-radius: 50%;
}
body .main_inner__scenes .kirby .eye:nth-child(1) {
  left: 2.75rem;
}
body .main_inner__scenes .kirby .eye:nth-child(1)::before {
  content: "";
  top: 0.25rem;
  left: 0.35rem;
  width: 0.475rem;
  height: 0.75rem;
  background: #fff;
  border-radius: 50%;
}
body .main_inner__scenes .kirby .eye:nth-child(1)::after {
  content: "";
  top: 1rem;
  left: 0.25rem;
  width: 0.625rem;
  height: 0.75rem;
  border-radius: 50%;
  box-shadow: 0 5px 0 0 #6e9dea;
}
body .main_inner__scenes .kirby .eye:nth-child(2) {
  left: 5rem;
}
body .main_inner__scenes .kirby .eye:nth-child(2)::before {
  content: "";
  top: 0.25rem;
  left: 0.35rem;
  width: 0.475rem;
  height: 0.75rem;
  background: #fff;
  border-radius: 50%;
}
body .main_inner__scenes .kirby .eye:nth-child(2)::after {
  content: "";
  top: 1rem;
  left: 0.25rem;
  width: 0.625rem;
  height: 0.75rem;
  border-radius: 50%;
  box-shadow: 0 5px 0 0 #6e9dea;
}
body .main_inner__scenes .kirby .cheek {
  top: 3.25rem;
  width: 1.25rem;
  height: 0.75rem;
  background: #ea6e7e;
  border-radius: 50%;
}
body .main_inner__scenes .kirby .cheek:nth-child(1) {
  left: 1.5rem;
}
body .main_inner__scenes .kirby .cheek:nth-child(2) {
  left: 6rem;
}
body .main_inner__scenes .kirby .mouth {
  top: 4rem;
  left: 3.85rem;
  height: 1rem;
  width: 1.25rem;
  border-radius: 50% / 30% 30% 70% 70%;
  background: #782838;
}
body .main_inner__scenes .kirby .mouth::before {
  content: "";
  top: 0.4rem;
  left: 0.25rem;
  width: 0.75rem;
  height: 0.45rem;
  border-radius: 50%;
  background: #dd4545;
}
body .main_inner__scenes .kirby .arm {
  border: 0.1875rem solid #782838;
  z-index: -1;
  background: #eda8b6;
  border-radius: 50%;
  overflow: hidden;
}
body .main_inner__scenes .kirby .arm:nth-child(1) {
  top: 4rem;
  left: -2rem;
  width: 5rem;
  height: 4rem;
}
body .main_inner__scenes .kirby .arm:nth-child(2) {
  top: -2rem;
  left: 5.5rem;
  width: 4rem;
  height: 5rem;
}
body .main_inner__scenes .kirby .body {
  border: 0.1875rem solid #782838;
  top: 1.75rem;
  left: 1.75rem;
  width: 10rem;
  height: 10rem;
  background: #eda8b6;
  border-radius: 50%;
}
body .main_inner__scenes .kirby .body::before {
  content: "";
  z-index: 1;
  top: 4.75rem;
  left: -0.4rem;
  width: 0.75rem;
  height: 3rem;
  background: inherit;
  border-radius: 1rem;
}
body .main_inner__scenes .kirby .body::after {
  content: "";
  z-index: 1;
  left: 5.5rem;
  width: 3.25rem;
  height: 1.5rem;
  background: inherit;
  border-radius: 0 1rem;
  -webkit-transform: rotate(25deg);
          transform: rotate(25deg);
}
body .main_inner__scenes .kirby .foot {
  border: 0.1875rem solid #782838;
  z-index: 2;
  top: 5.5rem;
  width: 4rem;
  height: 5.5rem;
  background: #dd4545;
  border-radius: 50%;
}
body .main_inner__scenes .kirby .foot:nth-child(1) {
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
body .main_inner__scenes .kirby .foot:nth-child(2) {
  z-index: -1;
  top: 6.125rem;
  left: 5.25rem;
  -webkit-transform: rotate(-25deg);
          transform: rotate(-25deg);
}
body .main_inner__scenes .akuaku .container {
  position: absolute;
  left: 0;
  top: 40%;
  right: 0;
  margin: auto;
  width: 35px;
}
body .main_inner__scenes .akuaku .feather {
  position: absolute;
}
body .main_inner__scenes .akuaku .feather {
  opacity: 0;
}
body .main_inner__scenes .akuaku .feather:nth-child(1) {
  -webkit-transform: translateX(-6em) translateY(-6em) rotate(-20deg);
          transform: translateX(-6em) translateY(-6em) rotate(-20deg);
  left: -3em;
  top: -4em;
  width: 3em;
  height: 4em;
  background: #008dbb;
  -webkit-clip-path: polygon(100% 40%, 0 0, 100% 100%);
          clip-path: polygon(100% 40%, 0 0, 100% 100%);
}
body .main_inner__scenes .akuaku .feather:nth-child(2) {
  -webkit-transform: translateX(-3em) translateY(-6em) rotate(-10deg);
          transform: translateX(-3em) translateY(-6em) rotate(-10deg);
  left: 0;
  top: -6em;
  width: 2em;
  height: 6em;
  background: #ffbe58;
  -webkit-clip-path: polygon(50% 100%, 80% 0, 0 40%);
          clip-path: polygon(50% 100%, 80% 0, 0 40%);
}
body .main_inner__scenes .akuaku .feather:nth-child(3) {
  -webkit-transform: translateX(2em) translateY(-3em) rotate(20deg);
          transform: translateX(2em) translateY(-3em) rotate(20deg);
  left: 1.5em;
  top: -5em;
  width: 1.5em;
  height: 5em;
  background: #fe8101;
  -webkit-clip-path: polygon(30% 100%, 100% 0, 0 40%);
          clip-path: polygon(30% 100%, 100% 0, 0 40%);
}
body .main_inner__scenes .akuaku .feather:nth-child(4) {
  -webkit-transform: translateX(6em) translateY(-6em) rotate(20deg);
          transform: translateX(6em) translateY(-6em) rotate(20deg);
  left: 2.5em;
  top: -3em;
  width: 1em;
  height: 3em;
  background: #ff5d7a;
  -webkit-clip-path: polygon(10% 44%, 100% 0, 60% 70%, 0 100%);
          clip-path: polygon(10% 44%, 100% 0, 60% 70%, 0 100%);
}
body .main_inner__scenes .akuaku .body {
  opacity: 0;
  -webkit-transform: translateY(1em);
          transform: translateY(1em);
  position: relative;
  left: -1em;
  margin-top: -0.5em;
  top: 0.8em;
  width: 4em;
  height: 7em;
  background: #422202;
  -webkit-clip-path: polygon(0 0, 100% 0, 80% 100%, 20% 100%);
          clip-path: polygon(0 0, 100% 0, 80% 100%, 20% 100%);
}
body .main_inner__scenes .akuaku .eyebrows {
  opacity: 0;
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
  position: absolute;
  top: 50%;
  left: -1em;
  width: 2em;
  height: 1em;
  background: #fe5f4c;
  z-index: 1;
}
body .main_inner__scenes .akuaku .eyebrows + .eyebrows {
  top: 40%;
  left: 1em;
  width: 2.25em;
}
body .main_inner__scenes .akuaku .eye {
  opacity: 0;
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
  box-sizing: border-box;
  position: absolute;
  top: 50%;
  left: -0.9em;
  width: 1.8em;
  height: 1.6em;
  background: #fdbe57;
  border-radius: 50%;
  border: 0.2em solid #67a858;
}
body .main_inner__scenes .akuaku .eye + .eye {
  top: 40%;
  left: 1em;
  width: 2.2em;
  height: 2.2em;
  border: 0.4em solid #67a858;
}
body .main_inner__scenes .akuaku .nose {
  opacity: 0;
  position: absolute;
  bottom: 0.8em;
  left: 0.5em;
  width: 1em;
  height: 1.5em;
  background: #fdbe57;
  -webkit-clip-path: polygon(60% 0, 0 75%, 50% 100%);
          clip-path: polygon(60% 0, 0 75%, 50% 100%);
}
body .main_inner__scenes .akuaku .lip {
  opacity: 0;
  position: absolute;
  bottom: -0.5em;
  left: -1em;
  width: 4em;
  height: 2.5em;
  background: #fe5f4c;
  -webkit-clip-path: polygon(49% 58%, 100% 41%, 89% 100%, 50% 97%, 10% 100%, 0 40%);
          clip-path: polygon(49% 58%, 100% 41%, 89% 100%, 50% 97%, 10% 100%, 0 40%);
}
body .main_inner__scenes .akuaku .lip + .lip {
  background: #fff;
  width: 3em;
  height: 1em;
  left: -0.5em;
  bottom: -0.15em;
}
body .main_inner__scenes .akuaku .beard {
  position: absolute;
  bottom: -2.2em;
  left: -0.2em;
  width: 1.2em;
  height: 1.8em;
  background: #67a858;
  -webkit-clip-path: polygon(72% 0, 100% 33%, 70% 100%, 50% 63%, 8% 86%, 26% 21%);
          clip-path: polygon(72% 0, 100% 33%, 70% 100%, 50% 63%, 8% 86%, 26% 21%);
  opacity: 0;
  -webkit-transform: translateX(-2em) translateY(3em) rotate(20deg);
          transform: translateX(-2em) translateY(3em) rotate(20deg);
}
body .main_inner__scenes .akuaku .beard + .beard {
  left: 0.8em;
  -webkit-transform: translateX(2em) translateY(3em) rotate(-20deg);
          transform: translateX(2em) translateY(3em) rotate(-20deg);
  -webkit-clip-path: polygon(47% 0, 85% 27%, 62% 73%, 50% 100%, 34% 73%, 13% 30%);
          clip-path: polygon(47% 0, 85% 27%, 62% 73%, 50% 100%, 34% 73%, 13% 30%);
}
body .main_inner__scenes .akuaku .feather {
  -webkit-animation: feather 0.25s ease-in-out forwards;
          animation: feather 0.25s ease-in-out forwards;
}
body .main_inner__scenes .akuaku .feather:nth-child(1) {
  -webkit-animation-delay: 0.5s;
          animation-delay: 0.5s;
}
body .main_inner__scenes .akuaku .feather:nth-child(2) {
  -webkit-animation-delay: 0.75s;
          animation-delay: 0.75s;
}
body .main_inner__scenes .akuaku .feather:nth-child(3) {
  -webkit-animation-delay: 0.85s;
          animation-delay: 0.85s;
}
body .main_inner__scenes .akuaku .feather:nth-child(4) {
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
}
body .main_inner__scenes .akuaku .body {
  -webkit-animation: feather 0.25s ease-in-out forwards;
          animation: feather 0.25s ease-in-out forwards;
  -webkit-animation-delay: 1.15s;
          animation-delay: 1.15s;
}
body .main_inner__scenes .akuaku .eyebrows {
  -webkit-animation: eyes 0.25s ease-in-out forwards, eyebrow1 10s ease-in-out infinite;
          animation: eyes 0.25s ease-in-out forwards, eyebrow1 10s ease-in-out infinite;
  -webkit-animation-delay: 1.25s, 3s;
          animation-delay: 1.25s, 3s;
}
body .main_inner__scenes .akuaku .eyebrows + .eyebrows {
  -webkit-animation: eyes 0.25s ease-in-out forwards, eyebrow2 10s ease-in-out infinite;
          animation: eyes 0.25s ease-in-out forwards, eyebrow2 10s ease-in-out infinite;
  -webkit-animation-delay: 1.25s, 3s;
          animation-delay: 1.25s, 3s;
}
body .main_inner__scenes .akuaku .eye {
  -webkit-animation: eyes 0.25s ease-in-out forwards, eye1 10s ease-in-out infinite;
          animation: eyes 0.25s ease-in-out forwards, eye1 10s ease-in-out infinite;
  -webkit-animation-delay: 1.25s, 3s;
          animation-delay: 1.25s, 3s;
}
body .main_inner__scenes .akuaku .eye + .eye {
  -webkit-animation: eyes 0.25s ease-in-out forwards, eye2 10s ease-in-out infinite;
          animation: eyes 0.25s ease-in-out forwards, eye2 10s ease-in-out infinite;
  -webkit-animation-delay: 1.25s, 3s;
          animation-delay: 1.25s, 3s;
}
body .main_inner__scenes .akuaku .nose {
  -webkit-animation: nose1 0.25s ease-in-out forwards, nose 10s ease-in-out infinite;
          animation: nose1 0.25s ease-in-out forwards, nose 10s ease-in-out infinite;
  -webkit-animation-delay: 1.35s, 3s;
          animation-delay: 1.35s, 3s;
}
body .main_inner__scenes .akuaku .lip {
  -webkit-animation: lip 0.25s ease-in-out forwards, lip1 10s ease-in-out infinite;
          animation: lip 0.25s ease-in-out forwards, lip1 10s ease-in-out infinite;
  -webkit-animation-delay: 1.45s, 3s;
          animation-delay: 1.45s, 3s;
}
body .main_inner__scenes .akuaku .lip + .lip {
  -webkit-animation: lip 0.25s ease-in-out forwards, lip2 10s ease-in-out infinite;
          animation: lip 0.25s ease-in-out forwards, lip2 10s ease-in-out infinite;
  -webkit-animation-delay: 1.45s, 3s;
          animation-delay: 1.45s, 3s;
}
body .main_inner__scenes .akuaku .beard {
  -webkit-animation: beard1 0.25s ease-in-out forwards;
          animation: beard1 0.25s ease-in-out forwards;
  -webkit-animation-delay: 1.55s;
          animation-delay: 1.55s;
}
body .main_inner__scenes .akuaku .beard + .beard {
  -webkit-animation: beard2 0.25s ease-in-out forwards;
          animation: beard2 0.25s ease-in-out forwards;
  -webkit-animation-delay: 1.65s;
          animation-delay: 1.65s;
}
@-webkit-keyframes feather {
  to {
    opacity: 1;
    -webkit-transform: translateX(0) translateY(0) rotate(0);
            transform: translateX(0) translateY(0) rotate(0);
  }
}
@keyframes feather {
  to {
    opacity: 1;
    -webkit-transform: translateX(0) translateY(0) rotate(0);
            transform: translateX(0) translateY(0) rotate(0);
  }
}
@-webkit-keyframes body {
  to {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}
@keyframes body {
  to {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}
@-webkit-keyframes eyes {
  to {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes eyes {
  to {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes nose1 {
  from {
    opacity: 0;
    -webkit-transform: translateY(0.5em);
            transform: translateY(0.5em);
  }
  to {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}
@keyframes nose1 {
  from {
    opacity: 0;
    -webkit-transform: translateY(0.5em);
            transform: translateY(0.5em);
  }
  to {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}
@-webkit-keyframes lip {
  from {
    opacity: 0;
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  to {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes lip {
  from {
    opacity: 0;
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  to {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes beard1 {
  to {
    opacity: 1;
    -webkit-transform: translateX(0) translateY(0) rotate(10deg);
            transform: translateX(0) translateY(0) rotate(10deg);
  }
}
@keyframes beard1 {
  to {
    opacity: 1;
    -webkit-transform: translateX(0) translateY(0) rotate(10deg);
            transform: translateX(0) translateY(0) rotate(10deg);
  }
}
@-webkit-keyframes beard2 {
  to {
    opacity: 1;
    -webkit-transform: translateX(0) translateY(0) rotate(-15deg);
            transform: translateX(0) translateY(0) rotate(-15deg);
  }
}
@keyframes beard2 {
  to {
    opacity: 1;
    -webkit-transform: translateX(0) translateY(0) rotate(-15deg);
            transform: translateX(0) translateY(0) rotate(-15deg);
  }
}
@-webkit-keyframes eyebrow1 {
  5%,
                        40% {
    top: 44%;
  }
  42%,
                        80% {
    top: 50%;
  }
}
@keyframes eyebrow1 {
  5%,
                        40% {
    top: 44%;
  }
  42%,
                        80% {
    top: 50%;
  }
}
@-webkit-keyframes eyebrow2 {
  5%,
                        40% {
    top: 48%;
  }
  42%,
                        65% {
    top: 40%;
  }
}
@keyframes eyebrow2 {
  5%,
                        40% {
    top: 48%;
  }
  42%,
                        65% {
    top: 40%;
  }
}
@-webkit-keyframes eye1 {
  5%,
                        40% {
    top: 48%;
  }
  42%,
                        80% {
    top: 50%;
  }
}
@keyframes eye1 {
  5%,
                        40% {
    top: 48%;
  }
  42%,
                        80% {
    top: 50%;
  }
}
@-webkit-keyframes eye2 {
  5%,
                        40% {
    top: 48%;
    height: 2em;
  }
  42%,
                        80% {
    top: 40%;
    height: 2.2em;
  }
}
@keyframes eye2 {
  5%,
                        40% {
    top: 48%;
    height: 2em;
  }
  42%,
                        80% {
    top: 40%;
    height: 2.2em;
  }
}
@-webkit-keyframes nose {
  5%,
                        40% {
    -webkit-transform: rotate(-13deg);
            transform: rotate(-13deg);
  }
  42%,
                        80% {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
}
@keyframes nose {
  5%,
                        40% {
    -webkit-transform: rotate(-13deg);
            transform: rotate(-13deg);
  }
  42%,
                        80% {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
}
@-webkit-keyframes lip1 {
  5%,
                        25% {
    -webkit-transform: rotate(-5deg);
            transform: rotate(-5deg);
  }
  30%,
                        75% {
    -webkit-transform: rotate(5deg);
            transform: rotate(5deg);
  }
  77% {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
}
@keyframes lip1 {
  5%,
                        25% {
    -webkit-transform: rotate(-5deg);
            transform: rotate(-5deg);
  }
  30%,
                        75% {
    -webkit-transform: rotate(5deg);
            transform: rotate(5deg);
  }
  77% {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
}
@-webkit-keyframes lip2 {
  2%,
                        5% {
    width: 3.3em;
    height: 1.3em;
    left: -0.65em;
    bottom: -0.2em;
  }
  5%,
                        25% {
    width: 3.3em;
    height: 1.3em;
    left: -0.65em;
    bottom: -0.2em;
    -webkit-transform: rotate(-5deg);
            transform: rotate(-5deg);
  }
  30%,
                        75% {
    width: 3.3em;
    height: 1.3em;
    left: -0.65em;
    bottom: -0.2em;
    -webkit-transform: rotate(5deg);
            transform: rotate(5deg);
  }
  77% {
    width: 3em;
    height: 1em;
    left: -0.5em;
    bottom: -0.15em;
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
}
@keyframes lip2 {
  2%,
                        5% {
    width: 3.3em;
    height: 1.3em;
    left: -0.65em;
    bottom: -0.2em;
  }
  5%,
                        25% {
    width: 3.3em;
    height: 1.3em;
    left: -0.65em;
    bottom: -0.2em;
    -webkit-transform: rotate(-5deg);
            transform: rotate(-5deg);
  }
  30%,
                        75% {
    width: 3.3em;
    height: 1.3em;
    left: -0.65em;
    bottom: -0.2em;
    -webkit-transform: rotate(5deg);
            transform: rotate(5deg);
  }
  77% {
    width: 3em;
    height: 1em;
    left: -0.5em;
    bottom: -0.15em;
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
}
body .main_inner__scenes .hexipal {
  /* Hexagon 1  */
  /* Hexagon 2 */
  /* Hexagon 3 */
  /* Hexagon 4 */
  /* Face */
  /* Arms and Legs  */
}
body .main_inner__scenes .hexipal #hexipal {
  display: flex;
  align-content: center;
  -webkit-transform: scale(0.95);
          transform: scale(0.95);
  justify-content: center;
  height: 275px;
  width: 200px;
  font-family: "Comic Sans MS", sans-serif;
}
body .main_inner__scenes .hexipal .hexagon1 {
  position: relative;
  width: 125px;
  height: 72.17px;
  background-color: #573718;
  margin: 66.08px 0;
}
body .main_inner__scenes .hexipal .hexagon1:before, body .main_inner__scenes .hexipal .hexagon1:after {
  content: "";
  position: absolute;
  width: 0;
  border-left: 62.5px solid transparent;
  border-right: 62.5px solid transparent;
  left: 0;
}
body .main_inner__scenes .hexipal .hexagon1:before {
  bottom: 100%;
  border-bottom: 36.08px solid #573718;
}
body .main_inner__scenes .hexipal .hexagon1:after {
  top: 100%;
  width: 0;
  border-top: 36.08px solid #573718;
}
body .main_inner__scenes .hexipal .hexagon2 {
  position: absolute;
  width: 115px;
  height: 66.4px;
  background-color: #feeccf;
  margin: 33.2px 0;
  margin-top: 69px;
}
body .main_inner__scenes .hexipal .hexagon2:before, body .main_inner__scenes .hexipal .hexagon2:after {
  content: "";
  position: absolute;
  width: 0;
  border-left: 57.5px solid transparent;
  border-right: 57.5px solid transparent;
  left: 0;
}
body .main_inner__scenes .hexipal .hexagon2:before {
  bottom: 100%;
  border-bottom: 33.2px solid #feeccf;
}
body .main_inner__scenes .hexipal .hexagon2:after {
  top: 100%;
  width: 0;
  border-top: 33.2px solid #feeccf;
}
body .main_inner__scenes .hexipal .hexagon3 {
  position: absolute;
  width: 90px;
  height: 51.96px;
  background-color: #fc852e;
  margin: 25.98px 0;
  margin-top: 76px;
}
body .main_inner__scenes .hexipal .hexagon3:before, body .main_inner__scenes .hexipal .hexagon3:after {
  content: "";
  position: absolute;
  width: 0;
  border-left: 45px solid transparent;
  border-right: 45px solid transparent;
  left: 0;
}
body .main_inner__scenes .hexipal .hexagon3:before {
  bottom: 100%;
  border-bottom: 25.98px solid #fc852e;
}
body .main_inner__scenes .hexipal .hexagon3:after {
  top: 100%;
  width: 0;
  border-top: 25.98px solid #fc852e;
}
body .main_inner__scenes .hexipal .hexagon4 {
  position: absolute;
  width: 70px;
  height: 40.41px;
  background-color: #ffb141;
  margin: 20.21px 0;
  margin-top: 82px;
}
body .main_inner__scenes .hexipal .hexagon4:before, body .main_inner__scenes .hexipal .hexagon4:after {
  content: "";
  position: absolute;
  width: 0;
  border-left: 35px solid transparent;
  border-right: 35px solid transparent;
  left: 0;
}
body .main_inner__scenes .hexipal .hexagon4:before {
  bottom: 100%;
  border-bottom: 20.21px solid #ffb141;
}
body .main_inner__scenes .hexipal .hexagon4:after {
  top: 100%;
  width: 0;
  border-top: 20.21px solid #ffb141;
}
body .main_inner__scenes .hexipal .eyes {
  position: absolute;
  display: flex;
  margin-top: 80px;
}
body .main_inner__scenes .hexipal .eye {
  height: 15px;
  width: 15px;
  border-radius: 50%;
  background-color: black;
  margin: 0 17px;
}
body .main_inner__scenes .hexipal .smile {
  position: absolute;
  margin-top: 102px;
  font-size: 21px;
  -webkit-font-stretch: expanded;
}
body .main_inner__scenes .hexipal .left-arm {
  position: absolute;
  z-index: -1;
  margin-top: 115px;
  margin-left: -70px;
  border-left: 4px solid black;
  height: 30px;
  -webkit-transform: rotate(40deg);
          transform: rotate(40deg);
}
body .main_inner__scenes .hexipal .left-arm:before {
  content: "";
  position: absolute;
  border-left: 4px solid black;
  height: 30px;
  -webkit-transform: rotate(97deg);
          transform: rotate(97deg);
  margin-left: 10px;
  margin-top: 15px;
}
body .main_inner__scenes .hexipal .left-hands {
  position: absolute;
  font-weight: bold;
  font-size: 1.2em;
  margin-top: 150px;
  margin-left: -54px;
  -webkit-transform: rotate(48deg);
          transform: rotate(48deg);
}
body .main_inner__scenes .hexipal .right-arm {
  position: absolute;
  z-index: -1;
  margin-top: 117px;
  margin-left: 70px;
  border-left: 4px solid black;
  height: 30px;
  -webkit-transform: rotate(-40deg);
          transform: rotate(-40deg);
}
body .main_inner__scenes .hexipal .right-arm:before {
  content: "";
  position: absolute;
  border-left: 4px solid black;
  height: 30px;
  -webkit-transform: rotate(80deg);
          transform: rotate(80deg);
  margin-left: -17px;
  margin-top: 17px;
}
body .main_inner__scenes .hexipal .right-hands {
  position: absolute;
  margin-top: 154px;
  margin-left: 61px;
  -webkit-transform: rotate(130deg);
          transform: rotate(130deg);
  font-weight: bold;
  font-size: 1.2em;
}
body .main_inner__scenes .hexipal .left-leg {
  position: absolute;
  z-index: -1;
  border-left: 4px solid black;
  height: 70px;
  margin-top: 147px;
  margin-left: -30px;
}
body .main_inner__scenes .hexipal .left-leg:before {
  content: "";
  position: absolute;
  margin-top: 60px;
  margin-left: -15px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 0 10px 15px;
  border-color: transparent transparent black transparent;
}
body .main_inner__scenes .hexipal .right-leg {
  position: absolute;
  z-index: -1;
  border-left: 4px solid black;
  height: 70px;
  margin-top: 147px;
  margin-left: 30px;
}
body .main_inner__scenes .hexipal .right-leg:before {
  content: "";
  position: absolute;
  margin-top: 60px;
  margin-left: -4px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 10px 0 0 15px;
  border-color: transparent transparent transparent black;
}
body .main_inner__info {
  background: white;
  width: 150px;
  height: 150px;
  border-radius: 140px;
  text-align: center;
  left: 300px;
  transition: all 0.3s;
  bottom: 40px;
  box-shadow: 0 -6px 0 #d0dfec inset;
}
@media only screen and (max-width: 1000px) {
  body .main_inner__info {
    bottom: 80px;
    opacity: 0;
    position: relative;
    left: 100px;
    -webkit-transform: translateY(-420px) scale(0.7);
            transform: translateY(-420px) scale(0.7);
  }
}
body .main_inner__info p {
  font-size: 12px;
  color: #7b2010;
  opacity: 0.5;
  margin: 60px 0 6px;
  font-weight: 800;
  transition: all 0.2s;
}
@media only screen and (max-width: 1000px) {
  body .main_inner__info p {
    position: relative;
    top: 60px;
  }
}
body .main_inner__info span {
  color: #7b2010;
  font-weight: bold;
  transition: all 0.2s;
}
@media only screen and (max-width: 1000px) {
  body .main_inner__info span {
    position: relative;
    top: 60px;
  }
}
body .main_inner__info a {
  display: block;
  color: white;
  text-decoration: none;
  position: absolute;
}
body .main_inner__info a.twitter {
  height: 30px;
  width: 30px;
  background: #0aaef2;
  border-radius: 100px;
  line-height: 32px;
  left: 118px;
  font-size: 13px;
  box-shadow: 0 -3px 0 #1587b7 inset;
  top: 105px;
}
body .main_inner__info a.codepen {
  height: 40px;
  width: 40px;
  background: #1d1a1a;
  border-radius: 100px;
  box-shadow: 0 -6px 0 #101010 inset;
  line-height: 40px;
  left: 80px;
  top: 125px;
}
body .main_inner__feedback {
  -webkit-animation: squiggly-anim 0.3s linear infinite;
          animation: squiggly-anim 0.3s linear infinite;
  pointer-events: none;
  font-size: 80px;
  z-index: 22;
  -webkit-transform: translateY(-50%) scale(0) rotate(20deg);
          transform: translateY(-50%) scale(0) rotate(20deg);
  transition: all 0.2s;
  font-weight: bold;
  text-transform: uppercase;
  text-align: center;
  letter-spacing: -5px;
}
@media only screen and (max-width: 1000px) {
  body .main_inner__feedback {
    position: fixed;
  }
}
body .main_inner__feedback.correct {
  color: #87cc37;
  text-shadow: 0px 5px 0px #54841d;
}
body .main_inner__feedback.wrong {
  color: #ec3d20;
  text-shadow: 0px 5px 0px #bb321d;
}
body .main_inner__answers {
  left: auto;
  width: 33.33%;
  padding-left: 70px;
  counter-reset: count;
}
@media only screen and (max-width: 1000px) {
  body .main_inner__answers {
    width: 100%;
    padding: 0px;
    -webkit-transform: translateY(calc(-50% + -187px)) scale(0.8);
            transform: translateY(calc(-50% + -187px)) scale(0.8);
    position: relative;
    top: 120px;
  }
}
body .main_inner__answers .answer {
  float: left;
  clear: both;
  position: relative;
  cursor: pointer;
  padding: 12px 30px;
  border: 2px solid white;
  left: 0;
  margin-top: 24px;
  color: white;
  transition: all 0.3s;
  font-size: 16px;
  -webkit-transform: skew(-8deg);
          transform: skew(-8deg);
}
body .main_inner__answers .answer:nth-of-type(1) {
  transition: text-indent 0.12s, left 0.2s 0.0714285714s, opacity 0.2s 0.0714285714s;
}
body .main_inner__answers .answer:nth-of-type(2) {
  transition: text-indent 0.12s, left 0.2s 0.1428571429s, opacity 0.2s 0.1428571429s;
}
body .main_inner__answers .answer:nth-of-type(3) {
  transition: text-indent 0.12s, left 0.2s 0.2142857143s, opacity 0.2s 0.2142857143s;
}
@media only screen and (max-width: 1000px) {
  body .main_inner__answers .answer {
    width: 100%;
    margin: 24px auto;
    float: none;
    text-align: center;
  }
}
body .main_inner__answers .answer:hover {
  text-indent: 14px;
}
body .main_inner__answers .answer:hover:before {
  top: -24px;
}
body .main_inner__answers .answer.correct {
  background: #41c042;
}
body .main_inner__answers .answer.wrong {
  background: #d6302f;
}
body .main_inner__answers .answer:before {
  display: block;
  box-shadow: 0 -6px 0 #d0dfec inset;
  position: absolute;
  content: counter(count);
  counter-increment: count;
  background: white;
  color: rgba(0, 0, 0, 0.5);
  width: 40px;
  line-height: 41px;
  transition: all 0.2s;
  text-align: center;
  height: 40px;
  border-radius: 100px;
  font-weight: bold;
  top: -21px;
  left: -20px;
}
body .main_inner__breadcrumbs {
  z-index: 1;
  text-align: center;
  bottom: 40px;
  top: auto;
}
@media only screen and (max-width: 1000px) {
  body .main_inner__breadcrumbs {
    bottom: auto;
    position: fixed;
    right: auto;
    top: 50%;
    width: 20px !important;
    left: 20px;
  }
}
body .main_inner__breadcrumbs .breadcrumb {
  width: 6px;
  height: 6px;
  background: black;
  border-radius: 10px;
  float: left;
  transition: all 0.3s;
  opacity: 0.2;
  position: relative;
  margin: 0 14px;
}
body .main_inner__breadcrumbs .breadcrumb:last-child {
  display: none;
}
@media only screen and (max-width: 1000px) {
  body .main_inner__breadcrumbs .breadcrumb {
    float: none;
    margin: 14px 0;
  }
}
body .main_inner__breadcrumbs .breadcrumb.active {
  background: white;
  opacity: 1;
  box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.3);
}
body .main_inner__breadcrumbs .breadcrumb.correct {
  opacity: 1;
  background: rgba(0, 0, 0, 0);
  color: #42bf42;
}
body .main_inner__breadcrumbs .breadcrumb.correct:before {
  content: "\f00c";
  top: -7px;
  left: -5px;
}
body .main_inner__breadcrumbs .breadcrumb.wrong {
  background: rgba(0, 0, 0, 0);
  opacity: 1;
  color: #d8302f;
}
body .main_inner__breadcrumbs .breadcrumb.wrong:before {
  content: "\f00d";
  top: -6px;
  left: -4px;
}

@-webkit-keyframes circle {
  0% {
    -webkit-transform: translateX(0px) scale(1);
            transform: translateX(0px) scale(1);
  }
  33.33% {
    -webkit-transform: translateX(230px) scale(0.5);
            transform: translateX(230px) scale(0.5);
  }
  66.66% {
    -webkit-transform: translateX(-230px) scale(0.5);
            transform: translateX(-230px) scale(0.5);
  }
  100% {
    -webkit-transform: translateX(0px) scale(1);
            transform: translateX(0px) scale(1);
  }
}

@keyframes circle {
  0% {
    -webkit-transform: translateX(0px) scale(1);
            transform: translateX(0px) scale(1);
  }
  33.33% {
    -webkit-transform: translateX(230px) scale(0.5);
            transform: translateX(230px) scale(0.5);
  }
  66.66% {
    -webkit-transform: translateX(-230px) scale(0.5);
            transform: translateX(-230px) scale(0.5);
  }
  100% {
    -webkit-transform: translateX(0px) scale(1);
            transform: translateX(0px) scale(1);
  }
}
@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@-webkit-keyframes float {
  0% {
    bottom: -400px;
  }
  50% {
    bottom: -420px;
  }
  100% {
    bottom: -400px;
  }
}
@keyframes float {
  0% {
    bottom: -400px;
  }
  50% {
    bottom: -420px;
  }
  100% {
    bottom: -400px;
  }
}
@-webkit-keyframes squiggly-anim {
  0% {
    -webkit-filter: url("#squiggly-0");
            filter: url("#squiggly-0");
  }
  25% {
    -webkit-filter: url("#squiggly-1");
            filter: url("#squiggly-1");
  }
  50% {
    -webkit-filter: url("#squiggly-2");
            filter: url("#squiggly-2");
  }
  75% {
    -webkit-filter: url("#squiggly-3");
            filter: url("#squiggly-3");
  }
  100% {
    -webkit-filter: url("#squiggly-4");
            filter: url("#squiggly-4");
  }
}
@keyframes squiggly-anim {
  0% {
    -webkit-filter: url("#squiggly-0");
            filter: url("#squiggly-0");
  }
  25% {
    -webkit-filter: url("#squiggly-1");
            filter: url("#squiggly-1");
  }
  50% {
    -webkit-filter: url("#squiggly-2");
            filter: url("#squiggly-2");
  }
  75% {
    -webkit-filter: url("#squiggly-3");
            filter: url("#squiggly-3");
  }
  100% {
    -webkit-filter: url("#squiggly-4");
            filter: url("#squiggly-4");
  }
}
.grain {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 4;
  pointer-events: none;
}

@-webkit-keyframes loadOut {
  from {
    -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
  }
  to {
    -webkit-clip-path: inset(0 0 100% 0);
            clip-path: inset(0 0 100% 0);
  }
}

@keyframes loadOut {
  from {
    -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
  }
  to {
    -webkit-clip-path: inset(0 0 100% 0);
            clip-path: inset(0 0 100% 0);
  }
}
@-webkit-keyframes scale_bounce_expo {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  20% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  40% {
    -webkit-transform: scale(0.88);
            transform: scale(0.88);
  }
  60% {
    -webkit-transform: scale(1.06);
            transform: scale(1.06);
  }
  80% {
    -webkit-transform: scale(0.969);
            transform: scale(0.969);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes scale_bounce_expo {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  20% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  40% {
    -webkit-transform: scale(0.88);
            transform: scale(0.88);
  }
  60% {
    -webkit-transform: scale(1.06);
            transform: scale(1.06);
  }
  80% {
    -webkit-transform: scale(0.969);
            transform: scale(0.969);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes pulse {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0.2;
  }
  100% {
    opacity: 1;
  }
}
@keyframes pulse {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0.2;
  }
  100% {
    opacity: 1;
  }
}

</style>
<body>
<svg version='1.1' xmlns='http://www.w3.org/2000/svg'>
  <defs>
    <filter id='squiggly-0'>
      <feturbulence basefrequency='0.06' id='turbulence' numoctaves='3' result='noise' seed='0'></feturbulence>
      <fedisplacementmap id='displacement' in2='noise' in='SourceGraphic' scale='6'></fedisplacementmap>
    </filter>
    <filter id='squiggly-1'>
      <feturbulence basefrequency='0.06' id='turbulence' numoctaves='3' result='noise' seed='1'></feturbulence>
      <fedisplacementmap in2='noise' in='SourceGraphic' scale='8'></fedisplacementmap>
    </filter>
    <filter id='squiggly-2'>
      <feturbulence basefrequency='0.06' id='turbulence' numoctaves='3' result='noise' seed='2'></feturbulence>
      <fedisplacementmap in2='noise' in='SourceGraphic' scale='6'></fedisplacementmap>
    </filter>
    <filter id='squiggly-3'>
      <feturbulence basefrequency='0.06' id='turbulence' numoctaves='3' result='noise' seed='3'></feturbulence>
      <fedisplacementmap in2='noise' in='SourceGraphic' scale='8'></fedisplacementmap>
    </filter>
    <filter id='squiggly-4'>
      <feturbulence basefrequency='0.06' id='turbulence' numoctaves='3' result='noise' seed='4'></feturbulence>
      <fedisplacementmap in2='noise' in='SourceGraphic' scale='6'></fedisplacementmap>
    </filter>
  </defs>
</svg>
<div class='overlay'></div>
<div class='options'>
  <div class='options_sf'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/sfIcon2.png'>
  </div>
  <div class='options_bg'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/bgIcon2.png'>
  </div>
</div>
<div class='main'>
  <div class='main_inner'>
    <div class='main_inner__loading'>
      <div class='bg'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/mars_sunburst.png'>
      </div>
      <div class='loader'>
        <div class='text'>
          <span>V</span>
          <span>i</span>
          <span>d</span>
          <span>e</span>
          <span>o</span>
          <div class='s'>
            <span>g</span>
            <span>a</span>
            <span>m</span>
            <span>e</span>
            <span>&nbsp</span>
            <span>q</span>
            <span>u</span>
            <span>i</span>
            <span>z</span>
          </div>
        </div>
        <p>
          <button>Click anywhere to play</button>
        </p>
      </div>
    </div>
    <div class='main_inner__modalOverlay'></div>
    <div class='main_inner__modal'></div>
    <div class='main_inner__modalContent'>
      <h1>Quiz complete!</h1>
      <p class='score'>You got 7 out of 8 correct!</p>
      <p>Don't forget to follow the talented bunch that contributed to this pen. They are:</p>
      <a href='https://www.codepen.io/jotavejv' target='_blank'>João Santos</a>
      <a href='https://www.codepen.io/kathykato' target='_blank'>Katherine Kato</a>
      <a href='https://www.codepen.io/KristopherVanSant' target='_blank'>Kristopher Van Sant</a>
      <a href='https://www.codepen.io/jnwright' target='_blank'>Jasmine Wright</a>
      <a href='https://www.codepen.io/miffili' target='_blank'>Klara Miffili</a>
      <button class='share'>Tweet your score</button>
    </div>
    <div class='main_inner__logo'>
      <a href=''>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/vgqlogo.svg'>
      </a>
    </div>
    <div class='main_inner__title'>
      <h1>In what popular video game would you find this?</h1>
      <p>Click on an answer or use the number keys</p>
      <a>Need a hint?</a>
      <div class='hint'></div>
    </div>
    <div class='main_inner__circle'></div>
    <div class='main_inner__feedback'></div>
    <div class='main_inner__scenes'>
      <div class='scene akuaku'>
        <div class='container'>
          <div class='feather'></div>
          <div class='feather'></div>
          <div class='feather'></div>
          <div class='feather'></div>
          <div class='body'></div>
          <div class='eyebrows'></div>
          <div class='eyebrows'></div>
          <div class='eye'></div>
          <div class='eye'></div>
          <div class='nose'></div>
          <div class='lip'></div>
          <div class='lip'></div>
          <div class='beard'></div>
          <div class='beard'></div>
        </div>
      </div>
      <div class='scene kirby'>
        <div id='container'>
          <div class='kirby'>
            <div class='body'>
              <div class='face'>
                <div class='eyes'>
                  <div class='eye'></div>
                  <div class='eye'></div>
                </div>
                <div class='mouth'></div>
                <div class='cheeks'>
                  <div class='cheek'></div>
                  <div class='cheek'></div>
                </div>
              </div>
              <div class='arms'>
                <div class='arm'></div>
                <div class='arm'></div>
              </div>
              <div class='feet'>
                <div class='foot'></div>
                <div class='foot'></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='scene hexipal'>
        <div id='hexipal'>
          <div class='hexagon1'></div>
          <div class='hexagon2'></div>
          <div class='hexagon3'></div>
          <div class='hexagon4'></div>
          <div class='eyes'>
            <div class='eye'></div>
            <div class='eye'></div>
          </div>
          <div class='smile'>U</div>
          <div class='left-arm'></div>
          <div class='left-hands'>E</div>
          <div class='right-arm'></div>
          <div class='right-hands'>E</div>
          <div class='left-leg'></div>
          <div class='right-leg'></div>
        </div>
      </div>
      <div class='scene moogle'>
        <div class='container'>
          <div class='ball'></div>
          <div class='head'>
            <div class='nose'></div>
            <div class='cheeks'></div>
            <div class='eyes'></div>
          </div>
          <div class='body'></div>
          <div class='feet'></div>
          <div class='ears'></div>
          <div class='inside'></div>
          <div class='wings'></div>
          <div class='wings2'></div>
        </div>
      </div>
      <div class='scene mario'>
        <div class='container'>
          <div class='hat'>
            <div class='main'></div>
            <div class='label'>
              <p>M</p>
            </div>
            <div class='screen'></div>
          </div>
          <div class='ears'>
            <div class='ear left'></div>
            <div class='ear right'></div>
          </div>
          <div class='head'>
            <div class='hair'>
              <div class='hair-back left'></div>
              <div class='hair-back right'></div>
            </div>
            <div class='face'></div>
            <div class='mustache'>
              <div class='detail farleft'></div>
              <div class='detail left'></div>
              <div class='detail right'></div>
              <div class='detail farright'></div>
              <div class='main'></div>
            </div>
            <div class='eyes'>
              <div class='eye left'></div>
              <div class='eye right'></div>
            </div>
            <div class='nose'></div>
          </div>
          <div class='brows'>
            <div class='brow left'></div>
            <div class='brow right'></div>
          </div>
        </div>
      </div>
    </div>
    <div class='main_inner__info'>
      <p>CSS illustration by</p>
      <span></span>
      <a class='codepen' href='#' target='_blank'>
        <i class='fa fa-codepen'></i>
      </a>
      <a class='twitter' href='#' target='_blank'>
        <i class='fa fa-twitter'></i>
      </a>
    </div>
    <div class='main_inner__answers'>
      <div class='answer'></div>
      <div class='answer'></div>
      <div class='answer'></div>
    </div>
    <div class='main_inner__breadcrumbs'></div>
  </div>
</div>
<canvas class='grain'></canvas>

</body>
</html>

<script type="text/javascript">
	


const globals = {
    audio: true
}

// Audio
buttonClick = new Audio('https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/Buttonclick.mp3');
featured = new Audio('https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/featured.mp3');
slideSlow = new Audio('https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/slideSlow.mp3');
wrong = new Audio('https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/Wrong.mp3');
bg = new Audio('https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/retrogameloop.mp3');

wrong.volume = 0.2;
// ## Create a function to play our sounds
function playSound(sound) {
    if (globals.audio) {

        sound.play(); // Play sound
    }
}

function playAudio(sound) {

    sound.loop = true;
    sound.volume = 0.7;
    sound.play(); // Play sound

}

$(document).ready(function() {
    setTimeout(function(){
        $('button').animate({'opacity': 1});
    }, 2000)

})

$('.loader').click(function() {
    $('.main_inner__loading').addClass('loaded');
    playAudio(bg);    
})

audioSwitch = 0;
sfxSwitch = 0;

$('.options_sf').click(function(){
    if(sfxSwitch == 0) {
        globals.audio = false
        sfxSwitch = 1;
        $(this).css('opacity','0.4')
    } else {
        globals.audio = true
        sfxSwitch = 0;
        $(this).css('opacity','1')
    }
});
$('.options_bg').click(function(){
    console.log('test')
    if(audioSwitch == 0) {
        $(bg).animate({volume: 0}, 600);
        audioSwitch = 1;
        $(this).css('opacity','0.4')
    } else {
        $(bg).animate({volume: 0.7}, 600);
        audioSwitch = 0;
        $(this).css('opacity','1')
    }
})

// Quiz options
const sceneDelay = 870; // Scene delay in ms

// Elements
const answers = $('.main_inner__answers');
const answer = answers.find('.answer');
const circle = $('.main_inner__circle');

// Quiz progress
var progress = 1; // Change this to your scene number

// Transition check
var transitioning = false;

// End circle scale
const circleScale = 10;

// Our main array. You must add your details to this.
const scenes = [
    {
        name: 'akuaku', // Must mirror class name
        author: 'João Santos', // Your name
        codepenprofile: 'jotavejv', // Your Codepen profile link
        twitterprofile: '_jotavejv', // Your Codepen profile link
        answer: 'Crash Bandicoot', // The correct game, we can obfuscate this later if we want to hide answers
        backgroundColor: 'rgb(67, 34, 56)', // Page background color for your scene
        hint: 'UKA UKA is FREEEEE!'
    },{
        name: 'kirby', // Must mirror class name
        author: 'Katherine Kato', // Your name
        codepenprofile: 'kathykato', // Your Codepen profile link
        twitterprofile: 'kato_katherine', // Your Codepen profile link
        answer: 'Kirby', // The correct game, we can obfuscate this later if we want to hide answers
        backgroundColor: 'rgb(218, 68, 103)', // Page background color for your scene
        hint: 'A Nintendo classic'
    }, {
        name: 'hexipal', // Must mirror class name
        author: 'Kristopher Van Sant', // Your name
        codepenprofile: 'KristopherVanSant', // Your Codepen profile link
        twitterprofile: 'KristopherVanSant', // Your Codepen profile link
        answer: 'Broken Age', // The correct game, we can obfuscate this later if we want to hide answers
        backgroundColor: '#ea894f', // Page background color for your scene
        hint: 'An animated puzzle adventure'
    }, {
        name: 'moogle', // Must mirror class name
        author: 'Jasmine Wright', // Your name
        codepenprofile: 'jnwright', // Your Codepen profile link
        twitterprofile: 'salsaverde', // Your Codepen profile link
        answer: 'Final Fantasy', // The correct game, we can obfuscate this later if we want to hide answers
        backgroundColor: '#3fde9d', // Page background color for your scene
        hint: 'Kupo!'
    }, {
        name: 'mario', // Must mirror class name
        author: 'Klara Miffili', // Your name
        codepenprofile: 'miffili', // Your Codepen profile link
        twitterprofile: 'KlaraMiffili', // Your Codepen profile link
        answer: 'Mario Brothers', // The correct game, we can obfuscate this later if we want to hide answers
        backgroundColor: '#fb741e', // Page background color for your scene
        hint: 'Letsa gooooooo!'
    }, {
        name: 'buster', // Must mirror class name
        author: 'Jamie Coulter', // Your name
        codepenprofile: 'jcoulterdesign', // Your Codepen profile link
        twitterprofile: 'jamiecoulter89', // Your Codepen profile link
        answer: 'Final Fantsy 7', // The correct game, we can obfuscate this later if we want to hide answers
        backgroundColor: '#4d352f', // Page background color for your scene
        hint: '1997 JRPG for PS1!'
    }
]

// List of random video games that our JS can pull from, feel free to add your own
const videoGames = [
    'Pong',
    'Zork',
    'Space Invaders',
    'Asteroids',
    'Pac-Man',
    'Defender',
    'Donkey Kong',
    'Frogger',
    'Galaga',
    'Joust',
    'Ms. Pac-Man',
    'Pitfall!',
    'Tetris',
    'Gauntlet',
    'Super Mario Bros.',
    'The Legend of Zelda',
    'Contra',
    'Double Dragon',
    'Grand Theft Auto',
    'Half-Life 2',
    'Katamari Damacy',
    'Metal Gear Solid 3',
    'World of Warcraft',
    'Civilization IV',
    'Devil May Cry 3',
    'God of War',
    'Guitar Hero',
    'Resident Evil 4',
    'Shadow of the Colossus',
    'Tom Clancys Splinter Cell',
    'The Elder Scrolls IV',
    'Gears of War',
    'Ōkami',
    'Spiderman',
    'Tomb Raider',
    'Wii Sports',
    'BioShock',
    'Call of Duty 4: Modern Warfare'
]

// Start by assigning colors and other props to the scene
function setUp() {

    // Lets start by setting the correct colors for our scene
    $('body').css('background', scenes[progress - 1].backgroundColor);
    circle.css('background', scenes[progress].backgroundColor);
    circle.find('.circles').css('background', scenes[progress].backgroundColor);

    // Then fade our first scene in
    $(`.scene:nth-of-type(${progress})`).fadeIn();

    // Loop through the array and add a breadcrum for each
    for(let i in scenes) {
        $('.main_inner__breadcrumbs').append('<div class="breadcrumb"></div>');
    }

    // Set first to active
    $('.breadcrumb:first').addClass('active');

    // Calculate width of breadcrumbs
    let width = ($('.breadcrumb').length - 1) * 34;
    $('.main_inner__breadcrumbs').css('width', width);
}

// Set up initial scene
setUp();

// Initialise scene
function initScene(scene) {

    // Get the next scene from our array
    let nextScene = $('.scene.' + scenes[progress - 1].name);

    // Bring the next scene in
    setTimeout(function(){
        nextScene.fadeIn();
        nextScene.css('bottom', '-400px');
    }, 500);

    // Change info
    $('.main_inner__info span').text(scenes[progress - 1].author);
    $('.main_inner__info .codepen').attr('href' , `https://www.codepen.io/${scenes[progress - 1].codepenprofile}`);
    $('.main_inner__info .twitter').attr('href' , `https://www.twitter.com/${scenes[progress - 1].twitterprofile}`);

    // Change the hint
    $('.main_inner__title .hint').slideUp(function() {
        $('.main_inner__title .hint').text(scenes[progress - 1].hint);
    });

    // Bring the info in
    setTimeout(function() {
        $('.main_inner__info').css('bottom' , '40px');
        $('.main_inner__info').css('opacity' , '1');
    }, 700);

    // Clear any data on the answers
    answer.removeData();

    // Let assign the correct answer to one of the available answers

    // Pick a random number between 0 and 2
    let correctAnswer = Math.floor(Math.random() * 3); 
    let correctAnswerEl = $(answer[correctAnswer]);

    // Set the text of the answer element
    correctAnswerEl.text(scenes[scene - 1].answer);
    correctAnswerEl.data('correct', true);

    // Select the other answers and if no data set against it, pick a random game
    answer.each(function() {
        let el = $(this);
        if(!el.data('correct')) {

            // Pick a random number between 0 and VG array length
            let rand = Math.floor(Math.random() * (videoGames.length - 1));
            $(this).text(videoGames[rand]);
        }
    });
}

// Check answer
function checkAnswer(el) {
    // If clicked answer has data stored
    if(el.data('correct'))
        return 'correct';
}

$(answer).mouseenter(function() {
    playSound(buttonClick);
});

// Bind answers to check, this should really be passed to another function but meh...
$(answer).click(function() {

    // Lets first scroll to the top of the page incase its mobile
    $("html, body").animate({ scrollTop: 0 }, "fast");

    // Start a transition
    if(!transitioning) {
        transitioning = true; // Check if not mid transition
        if(checkAnswer($(this))) {

            // Play sound
            playSound(featured);

            // Add breadcrumb class
            $('.breadcrumb.active').addClass('correct');

            // Add class to button
            $(this).addClass('correct');

            // Set up feedback message
            $('.main_inner__feedback').removeClass('wrong');
            $('.main_inner__feedback').text('Correct').addClass('correct');
            $('.main_inner__feedback').css('transform', 'translateY(-50%) scale(1) rotate(0deg)');
        } else {
            // Add breadcrumb class
            $('.breadcrumb.active').addClass('wrong');

            playSound(wrong);

            // Add class to button
            $(this).addClass('wrong');

            // Set up feedback message
            $('.main_inner__feedback').removeClass('correct');
            $('.main_inner__feedback').text('Wrong').addClass('wrong');
            $('.main_inner__feedback').css('transform', 'translateY(-50%) scale(1) rotate(0deg)');
        }

        // Move breadcrumb
        $('.breadcrumb.active').removeClass('active').next().addClass('active');

        let currentScene = $('.scene.' + scenes[progress - 1].name);
        console.log(progress)

        currentScene.css('opacity', '0');
        console.log(currentScene)

        $('.main_inner__info').css('bottom' , '-50px');
        $('.main_inner__info').css('opacity' , '0');

        // Increase our progress in the quiz
        progress++;

        // End screen 
        if(progress == $('.scene').length + 1) {
            $('.main_inner__modalOverlay, .main_inner__modal, .main_inner__modalContent').show();
            $('p.score').html('You got ' + $('.breadcrumb.correct').length + ' out of 5 correct!')
        }

        // Some crazy animations. I've gone a bit nuts on using set timeouts, should really be using delays in CSS
        // So we start by setting the scale of our circle and moving the scene out, CSS transitions does the rest
        setTimeout(function() {
            circle.css('transform' , `translateY(-50%) scale(${circleScale})`);
            answer.css('left' , '100px')
            answer.css('opacity' , '0')
        }, 230);

        // Then after the transition is complete we set the background to the next color in our array
        // Then set the scale of the circle back to 0 (removing any transitions)
        setTimeout(function() {
            $('body').css('background', scenes[progress - 1].backgroundColor);
            circle.css({'transform' : `translateY(-50%) scale(0)`});
            circle.css({'transition-duration' : '0ms'})

            // Get some colors based on new bg
            let newHue = LightenDarkenColor(scenes[progress - 1].backgroundColor, 30);
            let newHueInfo = LightenDarkenColor(scenes[progress - 1].backgroundColor, -20);

            // Alter the hue of certain texts to match new bg color
            $('.main_inner__title a').css('color', newHue);
            $('.main_inner__info p').css('color', newHueInfo);
            $('.main_inner__info span').css('color', newHueInfo);



            $('.main_inner__feedback').css('transform', 'translateY(-50%) scale(0) rotate(20deg)');
        }, sceneDelay);

        // Then bring the circle back in and color it to the next bg in the array
        setTimeout(function() {
            answer.removeClass('correct');
            answer.removeClass('wrong');
            if(window.innerWidth > 1000) {
                circle.css({'transform' : `translateY(-50%) scale(1)`});
            } else {
                circle.css({'transform' : `translateY(calc(-50% - 110px)) scale(0.6)`});
            }
            circle.css({'transition-duration' : '500ms'});
            circle.css('background', scenes[progress].backgroundColor);
            circle.find('.circles').css('background', scenes[progress].backgroundColor);
            answer.css('left' , '0');
            answer.css('opacity' , '1');

            // Set timeout to transition to next scene
            playSound(slideSlow);

            initScene(progress);
            transitioning = false;
        }, sceneDelay + 100);
    }
});

// Show hint
$('.main_inner__title a').click(function() {
    $(this).next().slideToggle();  
    return false;
});

// Handle key presses
$(document).keypress(function(event) {
    if(event.charCode == 49) {
        answer[0].click();
    }
    if(event.charCode == 50) {
        answer[1].click();
    }
    if(event.charCode == 51) {
        answer[2].click();
    }
});

// Returns a lightened or darkened version of the passed hex
// Taken from CSS tricks
function LightenDarkenColor(col, amt) {
    var usePound = false;
    if (col[0] == "#") {
        col = col.slice(1);
        usePound = true;
    }
    var num = parseInt(col,16);
    var r = (num >> 16) + amt;
    if (r > 255) r = 255;
    else if  (r < 0) r = 0;
    var b = ((num >> 8) & 0x00FF) + amt;
    if (b > 255) b = 255;
    else if  (b < 0) b = 0;
    var g = (num & 0x0000FF) + amt;
    if (g > 255) g = 255;
    else if (g < 0) g = 0;
    return (usePound?"#":"") + (g | (b << 8) | (r << 16)).toString(16);
}

// Initialise the quiz
function initQuiz() {
    initScene(progress);
}


class Grain {
    constructor (el) {
        /**
     * Options
     * Increase the pattern size if visible pattern
     */
        this.patternSize = 150;
        this.patternScaleX = 1;
        this.patternScaleY = 1;
        this.patternRefreshInterval = 3; // 8
        this.patternAlpha = 12; // int between 0 and 255,

        /**
     * Create canvas
     */
        this.canvas = el;
        this.ctx = this.canvas.getContext('2d');
        this.ctx.scale(this.patternScaleX, this.patternScaleY);

        /**
     * Create a canvas that will be used to generate grain and used as a
     * pattern on the main canvas.
     */
        this.patternCanvas = document.createElement('canvas');
        this.patternCanvas.width = this.patternSize;
        this.patternCanvas.height = this.patternSize;
        this.patternCtx = this.patternCanvas.getContext('2d');
        this.patternData = this.patternCtx.createImageData(this.patternSize, this.patternSize);
        this.patternPixelDataLength = this.patternSize * this.patternSize * 4; // rgba = 4

        /**
     * Prebind prototype function, so later its easier to user
     */
        this.resize = this.resize.bind(this);
        this.loop = this.loop.bind(this);

        this.frame = 0;

        window.addEventListener('resize', this.resize);
        this.resize();

        window.requestAnimationFrame(this.loop);
    }

    resize () {
        this.canvas.width = window.innerWidth * devicePixelRatio;
        this.canvas.height = window.innerHeight * devicePixelRatio;
    }

    update () {
        const {patternPixelDataLength, patternData, patternAlpha, patternCtx} = this;

        // put a random shade of gray into every pixel of the pattern
        for (let i = 0; i < patternPixelDataLength; i += 4) {
            // const value = (Math.random() * 255) | 0;
            const value = Math.random() * 255;

            patternData.data[i] = value;
            patternData.data[i + 1] = value;
            patternData.data[i + 2] = value;
            patternData.data[i + 3] = patternAlpha;
        }

        patternCtx.putImageData(patternData, 0, 0);
    }

    draw () {
        const {ctx, patternCanvas, canvas, viewHeight} = this;
        const {width, height} = canvas;

        // clear canvas
        ctx.clearRect(0, 0, width, height);

        // fill the canvas using the pattern
        ctx.fillStyle = ctx.createPattern(patternCanvas, 'repeat');
        ctx.fillRect(0, 0, width, height);
    }

    loop () {
        // only update grain every n frames
        const shouldDraw = ++this.frame % this.patternRefreshInterval === 0;
        if (shouldDraw) {
            this.update();
            this.draw();
        }

        window.requestAnimationFrame(this.loop);
    }
}

function twShare(url, title, winWidth, winHeight) {
    const winTop = 100;
    const winLeft = 100;
    window.open(`https://twitter.com/intent/tweet?text=${title}`, 'sharer', `top=${winTop},left=${winLeft},toolbar=0,status=0,width=${winWidth},height=${winHeight}`);
}

pen_id = $('._pen_id').text();

$('body').on('click', '.share', () => {
    twShare(`https://codepen.io/jcoulterdesign/full/a1b3ea524ead4700015153bb95b881c3`, `I got ${$('.breadcrumb.correct').length} out of 5 questions correct in this quiz by @jamiecoulter89 and others. https://bit.ly/2TLaILc %23cssvideogamequiz`, 520, 350);
    return false;
});

/**
 * Initiate Grain
 */
const el = document.querySelector('.grain');
const grain = new Grain(el);

//$('.main_inner__loading').fadeOut()

initQuiz();

// 8 questions
// Find the mario
// Release screen rec and tweet - 20
</script>