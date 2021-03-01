# Jot Manager


## Jots list

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://jotsauce.test/api/jot" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Create a new Jot

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/jot" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Return specified Jot

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://jotsauce.test/api/jot/ut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Update the specified Jot

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://jotsauce.test/api/jot/est" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Remove the specified Jot

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://jotsauce.test/api/jot/enim" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://jotsauce.test/api/jot/voluptates/entries" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/jot/similique/entries" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://jotsauce.test/api/jot/dignissimos/entries/cupiditate" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://jotsauce.test/api/jot/exercitationem/entries/nulla" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://jotsauce.test/api/jot/placeat/entries/aut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Display a listing of jottings for a jot

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://jotsauce.test/api/jot/itaque/jottings" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Create a new jotting

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://jotsauce.test/api/jot/reiciendis/jottings" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Return the specified jotting

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://jotsauce.test/api/jot/quod/jottings/neque" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Update the specified jotting

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://jotsauce.test/api/jot/molestias/jottings/est" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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


## Remove the specified jotting

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://jotsauce.test/api/jot/labore/jottings/explicabo" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
</form>



