<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Jotsauce Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: March 1 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://jotsauce.test";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.4.2.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://jotsauce.test</code></pre><h1>Authenticating requests</h1>
<p>Authenticate requests to this API's endpoints by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p><h1>Authentication</h1>
<h2>Login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://jotsauce.test/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"wstoltenberg@example.net","password":"porro","remember_me":false}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "wstoltenberg@example.net",
    "password": "porro",
    "remember_me": false
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
     'accessToken': [
         'abilities': ['*'],
         'name': 'Personal Access Token'
     ],
     'plainTextToken': '69|9r1lp8rbNmQ9d7FEHvIM9S34z6S5X0TSEuZgI9aw'
}</code></pre>
<div id="execution-results-POSTapi-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-login"></code></pre>
</div>
<form id="form-POSTapi-auth-login" data-method="POST" data-path="api/auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-login" onclick="tryItOut('POSTapi-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-login" onclick="cancelTryOut('POSTapi-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-login" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-auth-login" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>remember_me</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-auth-login" hidden><input type="radio" name="remember_me" value="true" data-endpoint="POSTapi-auth-login" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-auth-login" hidden><input type="radio" name="remember_me" value="false" data-endpoint="POSTapi-auth-login" data-component="body" ><code>false</code></label>
<br>
Frontend setting to remember email.</p>

</form>
<h2>Register</h2>
<p>Before submitting a Register request, you may use the
Email Availability and Username Availability endpoints
to determine if they're already in use</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://jotsauce.test/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"qui","email":"damon.lehner@example.net","password":"unde"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "qui",
    "email": "damon.lehner@example.net",
    "password": "unde"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "password": [
            "The password must be at least 8 characters.",
            "The password confirmation does not match."
        ]
    }
}</code></pre>
<div id="execution-results-POSTapi-auth-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-register"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-register"></code></pre>
</div>
<form id="form-POSTapi-auth-register" data-method="POST" data-path="api/auth/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-register" onclick="tryItOut('POSTapi-auth-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-register" onclick="cancelTryOut('POSTapi-auth-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-auth-register" data-component="body" required  hidden>
<br>
A username that doesn't already exist.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-register" data-component="body" required  hidden>
<br>
An email that doesn't already exist. The value must be a valid email address.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-auth-register" data-component="body" required  hidden>
<br>
Minimum of 8 characters.</p>

</form>
<h2>Username Availability</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://jotsauce.test/api/auth/username-availability" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"hic"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/auth/username-availability"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "hic"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">true</code></pre>
<div id="execution-results-POSTapi-auth-username-availability" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-username-availability"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-username-availability"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-username-availability" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-username-availability"></code></pre>
</div>
<form id="form-POSTapi-auth-username-availability" data-method="POST" data-path="api/auth/username-availability" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-username-availability', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-username-availability" onclick="tryItOut('POSTapi-auth-username-availability');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-username-availability" onclick="cancelTryOut('POSTapi-auth-username-availability');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-username-availability" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/username-availability</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-auth-username-availability" data-component="body" required  hidden>
<br>
A username that doesn't already exist.</p>

</form>
<h2>Email Availability</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://jotsauce.test/api/auth/email-availability" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"hilpert.charlene@example.org"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/auth/email-availability"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "hilpert.charlene@example.org"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">true</code></pre>
<div id="execution-results-POSTapi-auth-email-availability" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-auth-email-availability"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-email-availability"></code></pre>
</div>
<div id="execution-error-POSTapi-auth-email-availability" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-email-availability"></code></pre>
</div>
<form id="form-POSTapi-auth-email-availability" data-method="POST" data-path="api/auth/email-availability" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-email-availability', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-auth-email-availability" onclick="tryItOut('POSTapi-auth-email-availability');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-auth-email-availability" onclick="cancelTryOut('POSTapi-auth-email-availability');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-auth-email-availability" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/auth/email-availability</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-email-availability" data-component="body" required  hidden>
<br>
An email that doesn't already exist. The value must be a valid email address.</p>

</form>
<h2>Logout</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://jotsauce.test/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-GETapi-auth-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-auth-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-logout"></code></pre>
</div>
<div id="execution-error-GETapi-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-logout"></code></pre>
</div>
<form id="form-GETapi-auth-logout" data-method="GET" data-path="api/auth/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-auth-logout" onclick="tryItOut('GETapi-auth-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-auth-logout" onclick="cancelTryOut('GETapi-auth-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-auth-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/auth/logout</code></b>
</p>
</form><h1>Jot Manager</h1>
<h2>Jots list</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://jotsauce.test/api/jot" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-GETapi-jot" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-jot"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-jot"></code></pre>
</div>
<div id="execution-error-GETapi-jot" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-jot"></code></pre>
</div>
<form id="form-GETapi-jot" data-method="GET" data-path="api/jot" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-jot', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-jot" onclick="tryItOut('GETapi-jot');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-jot" onclick="cancelTryOut('GETapi-jot');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-jot" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/jot</code></b>
</p>
<p>
<label id="auth-GETapi-jot" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-jot" data-component="header"></label>
</p>
</form>
<h2>Create a new Jot</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://jotsauce.test/api/jot" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-POSTapi-jot" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-jot"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-jot"></code></pre>
</div>
<div id="execution-error-POSTapi-jot" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-jot"></code></pre>
</div>
<form id="form-POSTapi-jot" data-method="POST" data-path="api/jot" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-jot', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-jot" onclick="tryItOut('POSTapi-jot');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-jot" onclick="cancelTryOut('POSTapi-jot');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-jot" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/jot</code></b>
</p>
<p>
<label id="auth-POSTapi-jot" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-jot" data-component="header"></label>
</p>
</form>
<h2>Return specified Jot</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://jotsauce.test/api/jot/ut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/ut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-GETapi-jot--jot-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-jot--jot-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-jot--jot-"></code></pre>
</div>
<div id="execution-error-GETapi-jot--jot-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-jot--jot-"></code></pre>
</div>
<form id="form-GETapi-jot--jot-" data-method="GET" data-path="api/jot/{jot}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-jot--jot-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-jot--jot-" onclick="tryItOut('GETapi-jot--jot-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-jot--jot-" onclick="cancelTryOut('GETapi-jot--jot-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-jot--jot-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/jot/{jot}</code></b>
</p>
<p>
<label id="auth-GETapi-jot--jot-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-jot--jot-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="GETapi-jot--jot-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified Jot</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://jotsauce.test/api/jot/est" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/est"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-PUTapi-jot--jot-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-jot--jot-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-jot--jot-"></code></pre>
</div>
<div id="execution-error-PUTapi-jot--jot-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-jot--jot-"></code></pre>
</div>
<form id="form-PUTapi-jot--jot-" data-method="PUT" data-path="api/jot/{jot}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-jot--jot-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-jot--jot-" onclick="tryItOut('PUTapi-jot--jot-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-jot--jot-" onclick="cancelTryOut('PUTapi-jot--jot-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-jot--jot-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/jot/{jot}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/jot/{jot}</code></b>
</p>
<p>
<label id="auth-PUTapi-jot--jot-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-jot--jot-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="PUTapi-jot--jot-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Remove the specified Jot</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://jotsauce.test/api/jot/enim" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/enim"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-DELETEapi-jot--jot-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-jot--jot-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-jot--jot-"></code></pre>
</div>
<div id="execution-error-DELETEapi-jot--jot-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-jot--jot-"></code></pre>
</div>
<form id="form-DELETEapi-jot--jot-" data-method="DELETE" data-path="api/jot/{jot}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-jot--jot-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-jot--jot-" onclick="tryItOut('DELETEapi-jot--jot-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-jot--jot-" onclick="cancelTryOut('DELETEapi-jot--jot-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-jot--jot-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/jot/{jot}</code></b>
</p>
<p>
<label id="auth-DELETEapi-jot--jot-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-jot--jot-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="DELETEapi-jot--jot-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://jotsauce.test/api/jot/voluptates/entries" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/voluptates/entries"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-GETapi-jot--jot--entries" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-jot--jot--entries"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-jot--jot--entries"></code></pre>
</div>
<div id="execution-error-GETapi-jot--jot--entries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-jot--jot--entries"></code></pre>
</div>
<form id="form-GETapi-jot--jot--entries" data-method="GET" data-path="api/jot/{jot}/entries" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-jot--jot--entries', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-jot--jot--entries" onclick="tryItOut('GETapi-jot--jot--entries');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-jot--jot--entries" onclick="cancelTryOut('GETapi-jot--jot--entries');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-jot--jot--entries" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/jot/{jot}/entries</code></b>
</p>
<p>
<label id="auth-GETapi-jot--jot--entries" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-jot--jot--entries" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="GETapi-jot--jot--entries" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://jotsauce.test/api/jot/similique/entries" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/similique/entries"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-POSTapi-jot--jot--entries" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-jot--jot--entries"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-jot--jot--entries"></code></pre>
</div>
<div id="execution-error-POSTapi-jot--jot--entries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-jot--jot--entries"></code></pre>
</div>
<form id="form-POSTapi-jot--jot--entries" data-method="POST" data-path="api/jot/{jot}/entries" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-jot--jot--entries', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-jot--jot--entries" onclick="tryItOut('POSTapi-jot--jot--entries');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-jot--jot--entries" onclick="cancelTryOut('POSTapi-jot--jot--entries');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-jot--jot--entries" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/jot/{jot}/entries</code></b>
</p>
<p>
<label id="auth-POSTapi-jot--jot--entries" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-jot--jot--entries" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="POSTapi-jot--jot--entries" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://jotsauce.test/api/jot/dignissimos/entries/cupiditate" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/dignissimos/entries/cupiditate"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-GETapi-jot--jot--entries--entry-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-jot--jot--entries--entry-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-jot--jot--entries--entry-"></code></pre>
</div>
<div id="execution-error-GETapi-jot--jot--entries--entry-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-jot--jot--entries--entry-"></code></pre>
</div>
<form id="form-GETapi-jot--jot--entries--entry-" data-method="GET" data-path="api/jot/{jot}/entries/{entry}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-jot--jot--entries--entry-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-jot--jot--entries--entry-" onclick="tryItOut('GETapi-jot--jot--entries--entry-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-jot--jot--entries--entry-" onclick="cancelTryOut('GETapi-jot--jot--entries--entry-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-jot--jot--entries--entry-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/jot/{jot}/entries/{entry}</code></b>
</p>
<p>
<label id="auth-GETapi-jot--jot--entries--entry-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-jot--jot--entries--entry-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="GETapi-jot--jot--entries--entry-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>entry</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="entry" data-endpoint="GETapi-jot--jot--entries--entry-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://jotsauce.test/api/jot/exercitationem/entries/nulla" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/exercitationem/entries/nulla"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-PUTapi-jot--jot--entries--entry-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-jot--jot--entries--entry-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-jot--jot--entries--entry-"></code></pre>
</div>
<div id="execution-error-PUTapi-jot--jot--entries--entry-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-jot--jot--entries--entry-"></code></pre>
</div>
<form id="form-PUTapi-jot--jot--entries--entry-" data-method="PUT" data-path="api/jot/{jot}/entries/{entry}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-jot--jot--entries--entry-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-jot--jot--entries--entry-" onclick="tryItOut('PUTapi-jot--jot--entries--entry-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-jot--jot--entries--entry-" onclick="cancelTryOut('PUTapi-jot--jot--entries--entry-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-jot--jot--entries--entry-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/jot/{jot}/entries/{entry}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/jot/{jot}/entries/{entry}</code></b>
</p>
<p>
<label id="auth-PUTapi-jot--jot--entries--entry-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-jot--jot--entries--entry-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="PUTapi-jot--jot--entries--entry-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>entry</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="entry" data-endpoint="PUTapi-jot--jot--entries--entry-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://jotsauce.test/api/jot/placeat/entries/aut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/placeat/entries/aut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-DELETEapi-jot--jot--entries--entry-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-jot--jot--entries--entry-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-jot--jot--entries--entry-"></code></pre>
</div>
<div id="execution-error-DELETEapi-jot--jot--entries--entry-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-jot--jot--entries--entry-"></code></pre>
</div>
<form id="form-DELETEapi-jot--jot--entries--entry-" data-method="DELETE" data-path="api/jot/{jot}/entries/{entry}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-jot--jot--entries--entry-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-jot--jot--entries--entry-" onclick="tryItOut('DELETEapi-jot--jot--entries--entry-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-jot--jot--entries--entry-" onclick="cancelTryOut('DELETEapi-jot--jot--entries--entry-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-jot--jot--entries--entry-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/jot/{jot}/entries/{entry}</code></b>
</p>
<p>
<label id="auth-DELETEapi-jot--jot--entries--entry-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-jot--jot--entries--entry-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="DELETEapi-jot--jot--entries--entry-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>entry</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="entry" data-endpoint="DELETEapi-jot--jot--entries--entry-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display a listing of jottings for a jot</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://jotsauce.test/api/jot/itaque/jottings" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/itaque/jottings"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-GETapi-jot--jot--jottings" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-jot--jot--jottings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-jot--jot--jottings"></code></pre>
</div>
<div id="execution-error-GETapi-jot--jot--jottings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-jot--jot--jottings"></code></pre>
</div>
<form id="form-GETapi-jot--jot--jottings" data-method="GET" data-path="api/jot/{jot}/jottings" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-jot--jot--jottings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-jot--jot--jottings" onclick="tryItOut('GETapi-jot--jot--jottings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-jot--jot--jottings" onclick="cancelTryOut('GETapi-jot--jot--jottings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-jot--jot--jottings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/jot/{jot}/jottings</code></b>
</p>
<p>
<label id="auth-GETapi-jot--jot--jottings" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-jot--jot--jottings" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="GETapi-jot--jot--jottings" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Create a new jotting</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://jotsauce.test/api/jot/reiciendis/jottings" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/reiciendis/jottings"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-POSTapi-jot--jot--jottings" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-jot--jot--jottings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-jot--jot--jottings"></code></pre>
</div>
<div id="execution-error-POSTapi-jot--jot--jottings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-jot--jot--jottings"></code></pre>
</div>
<form id="form-POSTapi-jot--jot--jottings" data-method="POST" data-path="api/jot/{jot}/jottings" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-jot--jot--jottings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-jot--jot--jottings" onclick="tryItOut('POSTapi-jot--jot--jottings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-jot--jot--jottings" onclick="cancelTryOut('POSTapi-jot--jot--jottings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-jot--jot--jottings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/jot/{jot}/jottings</code></b>
</p>
<p>
<label id="auth-POSTapi-jot--jot--jottings" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-jot--jot--jottings" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="POSTapi-jot--jot--jottings" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Return the specified jotting</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://jotsauce.test/api/jot/quod/jottings/neque" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/quod/jottings/neque"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-GETapi-jot--jot--jottings--jotting-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-jot--jot--jottings--jotting-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-jot--jot--jottings--jotting-"></code></pre>
</div>
<div id="execution-error-GETapi-jot--jot--jottings--jotting-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-jot--jot--jottings--jotting-"></code></pre>
</div>
<form id="form-GETapi-jot--jot--jottings--jotting-" data-method="GET" data-path="api/jot/{jot}/jottings/{jotting}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-jot--jot--jottings--jotting-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-jot--jot--jottings--jotting-" onclick="tryItOut('GETapi-jot--jot--jottings--jotting-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-jot--jot--jottings--jotting-" onclick="cancelTryOut('GETapi-jot--jot--jottings--jotting-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-jot--jot--jottings--jotting-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/jot/{jot}/jottings/{jotting}</code></b>
</p>
<p>
<label id="auth-GETapi-jot--jot--jottings--jotting-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-jot--jot--jottings--jotting-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="GETapi-jot--jot--jottings--jotting-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>jotting</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jotting" data-endpoint="GETapi-jot--jot--jottings--jotting-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified jotting</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://jotsauce.test/api/jot/molestias/jottings/est" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/molestias/jottings/est"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-PUTapi-jot--jot--jottings--jotting-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-jot--jot--jottings--jotting-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-jot--jot--jottings--jotting-"></code></pre>
</div>
<div id="execution-error-PUTapi-jot--jot--jottings--jotting-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-jot--jot--jottings--jotting-"></code></pre>
</div>
<form id="form-PUTapi-jot--jot--jottings--jotting-" data-method="PUT" data-path="api/jot/{jot}/jottings/{jotting}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-jot--jot--jottings--jotting-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-jot--jot--jottings--jotting-" onclick="tryItOut('PUTapi-jot--jot--jottings--jotting-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-jot--jot--jottings--jotting-" onclick="cancelTryOut('PUTapi-jot--jot--jottings--jotting-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-jot--jot--jottings--jotting-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/jot/{jot}/jottings/{jotting}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/jot/{jot}/jottings/{jotting}</code></b>
</p>
<p>
<label id="auth-PUTapi-jot--jot--jottings--jotting-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-jot--jot--jottings--jotting-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="PUTapi-jot--jot--jottings--jotting-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>jotting</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jotting" data-endpoint="PUTapi-jot--jot--jottings--jotting-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Remove the specified jotting</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://jotsauce.test/api/jot/labore/jottings/explicabo" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/jot/labore/jottings/explicabo"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-DELETEapi-jot--jot--jottings--jotting-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-jot--jot--jottings--jotting-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-jot--jot--jottings--jotting-"></code></pre>
</div>
<div id="execution-error-DELETEapi-jot--jot--jottings--jotting-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-jot--jot--jottings--jotting-"></code></pre>
</div>
<form id="form-DELETEapi-jot--jot--jottings--jotting-" data-method="DELETE" data-path="api/jot/{jot}/jottings/{jotting}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-jot--jot--jottings--jotting-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-jot--jot--jottings--jotting-" onclick="tryItOut('DELETEapi-jot--jot--jottings--jotting-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-jot--jot--jottings--jotting-" onclick="cancelTryOut('DELETEapi-jot--jot--jottings--jotting-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-jot--jot--jottings--jotting-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/jot/{jot}/jottings/{jotting}</code></b>
</p>
<p>
<label id="auth-DELETEapi-jot--jot--jottings--jotting-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-jot--jot--jottings--jotting-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="DELETEapi-jot--jot--jottings--jotting-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>jotting</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jotting" data-endpoint="DELETEapi-jot--jot--jottings--jotting-" data-component="url" required  hidden>
<br>
</p>
</form><h1>User Manager</h1>
<h2>Current User</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://jotsauce.test/api/user/current" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/user/current"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-GETapi-user-current" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user-current"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-current"></code></pre>
</div>
<div id="execution-error-GETapi-user-current" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-current"></code></pre>
</div>
<form id="form-GETapi-user-current" data-method="GET" data-path="api/user/current" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user-current', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user-current" onclick="tryItOut('GETapi-user-current');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user-current" onclick="cancelTryOut('GETapi-user-current');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user-current" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user/current</code></b>
</p>
<p>
<label id="auth-GETapi-user-current" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-user-current" data-component="header"></label>
</p>
</form>
<h2>Users list</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://jotsauce.test/api/user" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/user"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
<p>
<label id="auth-GETapi-user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-user" data-component="header"></label>
</p>
</form>
<h2>Create a new User</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://jotsauce.test/api/user" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/user"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-POSTapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user"></code></pre>
</div>
<div id="execution-error-POSTapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user"></code></pre>
</div>
<form id="form-POSTapi-user" data-method="POST" data-path="api/user" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user" onclick="tryItOut('POSTapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user" onclick="cancelTryOut('POSTapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user</code></b>
</p>
<p>
<label id="auth-POSTapi-user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-user" data-component="header"></label>
</p>
</form>
<h2>Return specified User</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://jotsauce.test/api/user/velit" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/user/velit"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-GETapi-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user--user-"></code></pre>
</div>
<div id="execution-error-GETapi-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user--user-"></code></pre>
</div>
<form id="form-GETapi-user--user-" data-method="GET" data-path="api/user/{user}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user--user-" onclick="tryItOut('GETapi-user--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user--user-" onclick="cancelTryOut('GETapi-user--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user/{user}</code></b>
</p>
<p>
<label id="auth-GETapi-user--user-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-user--user-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETapi-user--user-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified User</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://jotsauce.test/api/user/nobis" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/user/nobis"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-PUTapi-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-user--user-"></code></pre>
</div>
<div id="execution-error-PUTapi-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-user--user-"></code></pre>
</div>
<form id="form-PUTapi-user--user-" data-method="PUT" data-path="api/user/{user}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-user--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-user--user-" onclick="tryItOut('PUTapi-user--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-user--user-" onclick="cancelTryOut('PUTapi-user--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-user--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/user/{user}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/user/{user}</code></b>
</p>
<p>
<label id="auth-PUTapi-user--user-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-user--user-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="PUTapi-user--user-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Remove the specified User</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://jotsauce.test/api/user/ullam" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://jotsauce.test/api/user/ullam"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}</code></pre>
<div id="execution-results-DELETEapi-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-user--user-"></code></pre>
</div>
<div id="execution-error-DELETEapi-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-user--user-"></code></pre>
</div>
<form id="form-DELETEapi-user--user-" data-method="DELETE" data-path="api/user/{user}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-user--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-user--user-" onclick="tryItOut('DELETEapi-user--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-user--user-" onclick="cancelTryOut('DELETEapi-user--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-user--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/user/{user}</code></b>
</p>
<p>
<label id="auth-DELETEapi-user--user-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-user--user-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEapi-user--user-" data-component="url" required  hidden>
<br>
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>