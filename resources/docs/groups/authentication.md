# Authentication


## Login




> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"wstoltenberg@example.net","password":"porro","remember_me":false}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (200):

```json

{
     'accessToken': [
         'abilities': ['*'],
         'name': 'Personal Access Token'
     ],
     'plainTextToken': '69|9r1lp8rbNmQ9d7FEHvIM9S34z6S5X0TSEuZgI9aw'
}
```
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


## Register


Before submitting a Register request, you may use the
Email Availability and Username Availability endpoints
to determine if they're already in use

> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"qui","email":"damon.lehner@example.net","password":"unde"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "password": [
            "The password must be at least 8 characters.",
            "The password confirmation does not match."
        ]
    }
}
```
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


## Username Availability




> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/auth/username-availability" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"hic"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (200):

```json
true
```
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


## Email Availability




> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/auth/email-availability" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"hilpert.charlene@example.org"}'

```

```javascript
const url = new URL(
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
}).then(response => response.json());
```


> Example response (200):

```json
true
```
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


## Logout




> Example request:

```bash
curl -X GET \
    -G "http://jotsauce.test/api/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://jotsauce.test/api/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (403):

```json
{
    "success": false,
    "message": "Unauthenticated.",
    "data": []
}
```
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
</form>



