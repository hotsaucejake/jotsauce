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
<link rel="stylesheet" href="/assets/jotsauce-angular/styles.98bd5423f6fa98f8410d.css"></head>
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
<script src="/assets/jotsauce-angular/runtime-es2015.7bd21b6687e2961fc39e.js" type="module"></script><script src="/assets/jotsauce-angular/runtime-es5.7bd21b6687e2961fc39e.js" nomodule defer></script><script src="/assets/jotsauce-angular/polyfills-es5.78c7e93a033b75778ec5.js" nomodule defer></script><script src="/assets/jotsauce-angular/polyfills-es2015.874403552baf1f0ad093.js" type="module"></script><script src="/assets/jotsauce-angular/main-es2015.d85a4231699336cf9cd9.js" type="module"></script><script src="/assets/jotsauce-angular/main-es5.d85a4231699336cf9cd9.js" nomodule defer></script></body>
</html>
