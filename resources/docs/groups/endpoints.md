# Endpoints


## Handle the incoming request.




> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"bschneider@example.com","password":"harum","remember_me":false}'

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
    "email": "bschneider@example.com",
    "password": "harum",
    "remember_me": false
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
        "credentials": [
            "The provided credentials are incorrect."
        ]
    }
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
</p>

</form>


## Handle the incoming request.




> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"saepe","email":"arielle.schaden@example.com","password":"esse"}'

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
    "username": "saepe",
    "email": "arielle.schaden@example.com",
    "password": "esse"
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
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-register" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-auth-register" data-component="body" required  hidden>
<br>
</p>

</form>


## Handle the incoming request.




> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/auth/username-availability" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"enim"}'

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
    "username": "enim"
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
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-auth-username-availability" data-component="body"  hidden>
<br>
</p>

</form>


## Handle the incoming request.




> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/auth/email-availability" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"lavern.schuster@example.org"}'

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
    "email": "lavern.schuster@example.org"
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
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-auth-email-availability" data-component="body"  hidden>
<br>
The value must be a valid email address.</p>

</form>


## Handle the incoming request.




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


## Handle the incoming request.




> Example request:

```bash
curl -X GET \
    -G "http://jotsauce.test/api/user/current" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://jotsauce.test/api/user/current"
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
<div id="execution-results-GETapi-user-current" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user-current"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-current"></code></pre>
</div>
<div id="execution-error-GETapi-user-current" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-current"></code></pre>
</div>
<form id="form-GETapi-user-current" data-method="GET" data-path="api/user/current" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user-current', this);">
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
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://jotsauce.test/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://jotsauce.test/api/user"
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
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
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
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://jotsauce.test/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
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
<div id="execution-results-POSTapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user"></code></pre>
</div>
<div id="execution-error-POSTapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user"></code></pre>
</div>
<form id="form-POSTapi-user" data-method="POST" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user', this);">
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
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://jotsauce.test/api/user/enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://jotsauce.test/api/user/enim"
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
<div id="execution-results-GETapi-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user--user-"></code></pre>
</div>
<div id="execution-error-GETapi-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user--user-"></code></pre>
</div>
<form id="form-GETapi-user--user-" data-method="GET" data-path="api/user/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user--user-', this);">
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
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETapi-user--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://jotsauce.test/api/user/ab" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://jotsauce.test/api/user/ab"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
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
<div id="execution-results-PUTapi-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-user--user-"></code></pre>
</div>
<div id="execution-error-PUTapi-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-user--user-"></code></pre>
</div>
<form id="form-PUTapi-user--user-" data-method="PUT" data-path="api/user/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-user--user-', this);">
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
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="PUTapi-user--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://jotsauce.test/api/user/placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://jotsauce.test/api/user/placeat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
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
<div id="execution-results-DELETEapi-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-user--user-"></code></pre>
</div>
<div id="execution-error-DELETEapi-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-user--user-"></code></pre>
</div>
<form id="form-DELETEapi-user--user-" data-method="DELETE" data-path="api/user/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-user--user-', this);">
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
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEapi-user--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://jotsauce.test/api/jot" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://jotsauce.test/api/jot"
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
<div id="execution-results-GETapi-jot" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-jot"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-jot"></code></pre>
</div>
<div id="execution-error-GETapi-jot" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-jot"></code></pre>
</div>
<form id="form-GETapi-jot" data-method="GET" data-path="api/jot" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-jot', this);">
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
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/jot" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://jotsauce.test/api/jot"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
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
<div id="execution-results-POSTapi-jot" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-jot"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-jot"></code></pre>
</div>
<div id="execution-error-POSTapi-jot" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-jot"></code></pre>
</div>
<form id="form-POSTapi-jot" data-method="POST" data-path="api/jot" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-jot', this);">
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
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://jotsauce.test/api/jot/odit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://jotsauce.test/api/jot/odit"
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
<div id="execution-results-GETapi-jot--jot-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-jot--jot-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-jot--jot-"></code></pre>
</div>
<div id="execution-error-GETapi-jot--jot-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-jot--jot-"></code></pre>
</div>
<form id="form-GETapi-jot--jot-" data-method="GET" data-path="api/jot/{jot}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-jot--jot-', this);">
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
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="GETapi-jot--jot-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://jotsauce.test/api/jot/enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://jotsauce.test/api/jot/enim"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
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
<div id="execution-results-PUTapi-jot--jot-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-jot--jot-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-jot--jot-"></code></pre>
</div>
<div id="execution-error-PUTapi-jot--jot-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-jot--jot-"></code></pre>
</div>
<form id="form-PUTapi-jot--jot-" data-method="PUT" data-path="api/jot/{jot}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-jot--jot-', this);">
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
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="PUTapi-jot--jot-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://jotsauce.test/api/jot/voluptatum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://jotsauce.test/api/jot/voluptatum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
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
<div id="execution-results-DELETEapi-jot--jot-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-jot--jot-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-jot--jot-"></code></pre>
</div>
<div id="execution-error-DELETEapi-jot--jot-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-jot--jot-"></code></pre>
</div>
<form id="form-DELETEapi-jot--jot-" data-method="DELETE" data-path="api/jot/{jot}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-jot--jot-', this);">
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
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jot</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jot" data-endpoint="DELETEapi-jot--jot-" data-component="url" required  hidden>
<br>
</p>
</form>



