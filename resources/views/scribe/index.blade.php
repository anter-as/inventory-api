<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.3.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.3.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
            <img src="https://img.freepik.com/premium-vector/nooh-name-arabic-calligraphy_1184925-100.jpg" alt="logo" class="logo" style="padding-top: 10px;" width="100%"/>
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-inventory">
                                <a href="#endpoints-GETapi-inventory">GET api/inventory</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-stock-transfers">
                                <a href="#endpoints-POSTapi-stock-transfers">POST api/stock-transfers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-warehouses--id--inventory">
                                <a href="#endpoints-GETapi-warehouses--id--inventory">GET api/warehouses/{id}/inventory</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: October 25, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-inventory">GET api/inventory</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-inventory">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/inventory" \
    --header "Authorization: Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/inventory"
);

const headers = {
    "Authorization": "Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-inventory">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;current_page&quot;: 1,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;laborum&quot;,
            &quot;sku&quot;: &quot;SKU-2229&quot;,
            &quot;price&quot;: &quot;85.22&quot;,
            &quot;description&quot;: &quot;Qui beatae rerum natus nulla ipsam fuga optio.&quot;,
            &quot;created_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;stocks&quot;: []
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;quo&quot;,
            &quot;sku&quot;: &quot;SKU-0939&quot;,
            &quot;price&quot;: &quot;343.29&quot;,
            &quot;description&quot;: &quot;Mollitia qui consectetur et quas.&quot;,
            &quot;created_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;stocks&quot;: []
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;dolorem&quot;,
            &quot;sku&quot;: &quot;SKU-7148&quot;,
            &quot;price&quot;: &quot;112.47&quot;,
            &quot;description&quot;: &quot;Qui natus veritatis reprehenderit ratione dolor vel rem.&quot;,
            &quot;created_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;stocks&quot;: []
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;voluptatem&quot;,
            &quot;sku&quot;: &quot;SKU-4108&quot;,
            &quot;price&quot;: &quot;473.41&quot;,
            &quot;description&quot;: &quot;Omnis dolor ipsa inventore asperiores delectus eaque.&quot;,
            &quot;created_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;stocks&quot;: []
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;libero&quot;,
            &quot;sku&quot;: &quot;SKU-3385&quot;,
            &quot;price&quot;: &quot;339.49&quot;,
            &quot;description&quot;: &quot;Hic non sed dolorem ab maiores.&quot;,
            &quot;created_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;stocks&quot;: []
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;ut&quot;,
            &quot;sku&quot;: &quot;SKU-1444&quot;,
            &quot;price&quot;: &quot;205.06&quot;,
            &quot;description&quot;: &quot;Porro maiores et quia voluptatem quae voluptate.&quot;,
            &quot;created_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;stocks&quot;: []
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;corrupti&quot;,
            &quot;sku&quot;: &quot;SKU-6865&quot;,
            &quot;price&quot;: &quot;318.22&quot;,
            &quot;description&quot;: &quot;Et consequatur in nemo sapiente.&quot;,
            &quot;created_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;stocks&quot;: []
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;est&quot;,
            &quot;sku&quot;: &quot;SKU-5749&quot;,
            &quot;price&quot;: &quot;125.40&quot;,
            &quot;description&quot;: &quot;Quidem voluptas minus sed ipsa et ipsa velit.&quot;,
            &quot;created_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;stocks&quot;: []
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;nihil&quot;,
            &quot;sku&quot;: &quot;SKU-6713&quot;,
            &quot;price&quot;: &quot;114.10&quot;,
            &quot;description&quot;: &quot;Voluptas et voluptates qui repellendus.&quot;,
            &quot;created_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;stocks&quot;: []
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;rem&quot;,
            &quot;sku&quot;: &quot;SKU-0510&quot;,
            &quot;price&quot;: &quot;163.86&quot;,
            &quot;description&quot;: &quot;Ex et excepturi et et.&quot;,
            &quot;created_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-07-23T09:33:43.000000Z&quot;,
            &quot;stocks&quot;: []
        }
    ],
    &quot;first_page_url&quot;: &quot;http://localhost:8000/api/inventory?page=1&quot;,
    &quot;from&quot;: 1,
    &quot;last_page&quot;: 100,
    &quot;last_page_url&quot;: &quot;http://localhost:8000/api/inventory?page=100&quot;,
    &quot;links&quot;: [
        {
            &quot;url&quot;: null,
            &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=1&quot;,
            &quot;label&quot;: &quot;1&quot;,
            &quot;active&quot;: true
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=2&quot;,
            &quot;label&quot;: &quot;2&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=3&quot;,
            &quot;label&quot;: &quot;3&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=4&quot;,
            &quot;label&quot;: &quot;4&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=5&quot;,
            &quot;label&quot;: &quot;5&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=6&quot;,
            &quot;label&quot;: &quot;6&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=7&quot;,
            &quot;label&quot;: &quot;7&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=8&quot;,
            &quot;label&quot;: &quot;8&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=9&quot;,
            &quot;label&quot;: &quot;9&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=10&quot;,
            &quot;label&quot;: &quot;10&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: null,
            &quot;label&quot;: &quot;...&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=99&quot;,
            &quot;label&quot;: &quot;99&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=100&quot;,
            &quot;label&quot;: &quot;100&quot;,
            &quot;active&quot;: false
        },
        {
            &quot;url&quot;: &quot;http://localhost:8000/api/inventory?page=2&quot;,
            &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
            &quot;active&quot;: false
        }
    ],
    &quot;next_page_url&quot;: &quot;http://localhost:8000/api/inventory?page=2&quot;,
    &quot;path&quot;: &quot;http://localhost:8000/api/inventory&quot;,
    &quot;per_page&quot;: 10,
    &quot;prev_page_url&quot;: null,
    &quot;to&quot;: 10,
    &quot;total&quot;: 1000
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-inventory" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-inventory"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-inventory"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-inventory" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-inventory">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-inventory" data-method="GET"
      data-path="api/inventory"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-inventory', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-inventory"
                    onclick="tryItOut('GETapi-inventory');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-inventory"
                    onclick="cancelTryOut('GETapi-inventory');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-inventory"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/inventory</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-inventory"
               value="Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-inventory"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-inventory"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-stock-transfers">POST api/stock-transfers</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-stock-transfers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/stock-transfers" \
    --header "Authorization: Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"inventory_item_id\": \"architecto\",
    \"from_warehouse_id\": \"architecto\",
    \"to_warehouse_id\": \"architecto\",
    \"quantity\": 22
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/stock-transfers"
);

const headers = {
    "Authorization": "Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "inventory_item_id": "architecto",
    "from_warehouse_id": "architecto",
    "to_warehouse_id": "architecto",
    "quantity": 22
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-stock-transfers">
</span>
<span id="execution-results-POSTapi-stock-transfers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-stock-transfers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-stock-transfers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-stock-transfers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-stock-transfers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-stock-transfers" data-method="POST"
      data-path="api/stock-transfers"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-stock-transfers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-stock-transfers"
                    onclick="tryItOut('POSTapi-stock-transfers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-stock-transfers"
                    onclick="cancelTryOut('POSTapi-stock-transfers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-stock-transfers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/stock-transfers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-stock-transfers"
               value="Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-stock-transfers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-stock-transfers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>inventory_item_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="inventory_item_id"                data-endpoint="POSTapi-stock-transfers"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the inventory_items table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>from_warehouse_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="from_warehouse_id"                data-endpoint="POSTapi-stock-transfers"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the warehouses table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>to_warehouse_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="to_warehouse_id"                data-endpoint="POSTapi-stock-transfers"
               value="architecto"
               data-component="body">
    <br>
<p>The value and <code>from_warehouse_id</code> must be different. The <code>id</code> of an existing record in the warehouses table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="POSTapi-stock-transfers"
               value="22"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>22</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-warehouses--id--inventory">GET api/warehouses/{id}/inventory</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-warehouses--id--inventory">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/warehouses/architecto/inventory" \
    --header "Authorization: Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/warehouses/architecto/inventory"
);

const headers = {
    "Authorization": "Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-warehouses--id--inventory">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-warehouses--id--inventory" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-warehouses--id--inventory"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-warehouses--id--inventory"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-warehouses--id--inventory" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-warehouses--id--inventory">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-warehouses--id--inventory" data-method="GET"
      data-path="api/warehouses/{id}/inventory"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-warehouses--id--inventory', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-warehouses--id--inventory"
                    onclick="tryItOut('GETapi-warehouses--id--inventory');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-warehouses--id--inventory"
                    onclick="cancelTryOut('GETapi-warehouses--id--inventory');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-warehouses--id--inventory"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/warehouses/{id}/inventory</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-warehouses--id--inventory"
               value="Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488"
               data-component="header">
    <br>
<p>Example: <code>Bearer 1|rVUMAr0EYmphhaYAMp5SJozZtG4lUw2JhZUWE2D947b2a488</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-warehouses--id--inventory"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-warehouses--id--inventory"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-warehouses--id--inventory"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the warehouse. Example: <code>architecto</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
