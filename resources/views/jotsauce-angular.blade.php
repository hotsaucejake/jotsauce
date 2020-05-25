<!doctype html>
<html>
<head>
  <base href="/">
  <title>Jot Sauce</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:title" content="Jot Sauce">
  <meta property="og:description" content="Rapid Logging for Productivity and Journaling">
  <meta property="og:image" content="">
  <meta property="og:url" content="https://jotsauce.com">

  <link rel="icon" type="image/png" href="/assets/jotsauce-angular/assets/img/logo.png">
  <style type="text/css">
    body, html {
      height: 100%;
    }
    .app-loading {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    .app-loading .spinner {
      height: 200px;
      width: 200px;
      animation: rotate 2s linear infinite;
      transform-origin: center center;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
    }

    .app-loading .spinner .path {
      stroke-dasharray: 1, 200;
      stroke-dashoffset: 0;
      animation: dash 1.5s ease-in-out infinite;
      stroke-linecap: round;
      stroke: #ddd;
    }

    @keyframes rotate {
      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes dash {
      0% {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0;
      }
      50% {
        stroke-dasharray: 89, 200;
        stroke-dashoffset: -35px;
      }
      100% {
        stroke-dasharray: 89, 200;
        stroke-dashoffset: -124px;
      }
    }
  </style>
<link rel="stylesheet" href="/assets/jotsauce-angular/styles.31c1c2b8cfeb1af32172.css"></head>
<body>
<jot-root>
  <div class="app-loading">
    <div class="logo">
      <svg class="spinner" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
      </svg>
    </div>
  </div>
</jot-root>
<script src="/assets/jotsauce-angular/runtime-es2015.316165a6148026d159af.js" type="module"></script><script src="/assets/jotsauce-angular/runtime-es5.316165a6148026d159af.js" nomodule defer></script><script src="/assets/jotsauce-angular/polyfills-es5.0c875935332c0324767b.js" nomodule defer></script><script src="/assets/jotsauce-angular/polyfills-es2015.49bc2ead84c3e3eae683.js" type="module"></script><script src="/assets/jotsauce-angular/main-es2015.cbef41d2150f4b0afcb3.js" type="module"></script><script src="/assets/jotsauce-angular/main-es5.cbef41d2150f4b0afcb3.js" nomodule defer></script></body>
</html>
