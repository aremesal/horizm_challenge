<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Horizm code test Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://127.0.0.1:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.37.2.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.37.2.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-data-import-with-users">
                        <a href="#endpoints-GETapi-v1-data-import-with-users">Imports posts and users from the source</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-posts-top">
                        <a href="#endpoints-GETapi-v1-posts-top">Returns a JSON with list of top posts for each user</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-posts--post_id-">
                        <a href="#endpoints-GETapi-v1-posts--post_id-">Returns a JSON with post data.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-users">
                        <a href="#endpoints-GETapi-v1-users">Returns a list of all users with their posts, order by the average rating of user&#039;s posts</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: December 1 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Aplicación de prueba para proceso de selección en Horizm</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://127.0.0.1:8000</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-GETapi-v1-data-import-with-users">Imports posts and users from the source</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-data-import-with-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/v1/data/import-with-users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/data/import-with-users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-data-import-with-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;posts&quot;: {
        &quot;new&quot;: 0,
        &quot;updated&quot;: 50
    },
    &quot;users&quot;: {
        &quot;new&quot;: 0,
        &quot;exists&quot;: 5
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-data-import-with-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-data-import-with-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-data-import-with-users"></code></pre>
</span>
<span id="execution-error-GETapi-v1-data-import-with-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-data-import-with-users"></code></pre>
</span>
<form id="form-GETapi-v1-data-import-with-users" data-method="GET"
      data-path="api/v1/data/import-with-users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-data-import-with-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-data-import-with-users"
                    onclick="tryItOut('GETapi-v1-data-import-with-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-data-import-with-users"
                    onclick="cancelTryOut('GETapi-v1-data-import-with-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-data-import-with-users" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/data/import-with-users</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-v1-posts-top">Returns a JSON with list of top posts for each user</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-posts-top">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/v1/posts/top" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/posts/top"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-posts-top">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 3,
        &quot;title&quot;: &quot;ea molestias quasi exercitationem repellat qui ipsa sit aut&quot;,
        &quot;body&quot;: &quot;et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut&quot;,
        &quot;rating&quot;: &quot;44&quot;,
        &quot;name&quot;: &quot;Leanne Graham&quot;,
        &quot;user_id&quot;: 1
    },
    {
        &quot;id&quot;: 13,
        &quot;title&quot;: &quot;dolorum ut in voluptas mollitia et saepe quo animi&quot;,
        &quot;body&quot;: &quot;aut dicta possimus sint mollitia voluptas commodi quo doloremque\niste corrupti reiciendis voluptatem eius rerum\nsit cumque quod eligendi laborum minima\nperferendis recusandae assumenda consectetur porro architecto ipsum ipsam&quot;,
        &quot;rating&quot;: &quot;47&quot;,
        &quot;name&quot;: &quot;Ervin Howell&quot;,
        &quot;user_id&quot;: 2
    },
    {
        &quot;id&quot;: 27,
        &quot;title&quot;: &quot;quasi id et eos tenetur aut quo autem&quot;,
        &quot;body&quot;: &quot;eum sed dolores ipsam sint possimus debitis occaecati\ndebitis qui qui et\nut placeat enim earum aut odit facilis\nconsequatur suscipit necessitatibus rerum sed inventore temporibus consequatur&quot;,
        &quot;rating&quot;: &quot;43&quot;,
        &quot;name&quot;: &quot;Clementine Bauch&quot;,
        &quot;user_id&quot;: 3
    },
    {
        &quot;id&quot;: 38,
        &quot;title&quot;: &quot;explicabo et eos deleniti nostrum ab id repellendus&quot;,
        &quot;body&quot;: &quot;animi esse sit aut sit nesciunt assumenda eum voluptas\nquia voluptatibus provident quia necessitatibus ea\nrerum repudiandae quia voluptatem delectus fugit aut id quia\nratione optio eos iusto veniam iure&quot;,
        &quot;rating&quot;: &quot;46&quot;,
        &quot;name&quot;: &quot;Patricia Lebsack&quot;,
        &quot;user_id&quot;: 4
    },
    {
        &quot;id&quot;: 43,
        &quot;title&quot;: &quot;eligendi iste nostrum consequuntur adipisci praesentium sit beatae perferendis&quot;,
        &quot;body&quot;: &quot;similique fugit est\nillum et dolorum harum et voluptate eaque quidem\nexercitationem quos nam commodi possimus cum odio nihil nulla\ndolorum exercitationem magnam ex et a et distinctio debitis&quot;,
        &quot;rating&quot;: &quot;47&quot;,
        &quot;name&quot;: &quot;Chelsey Dietrich&quot;,
        &quot;user_id&quot;: 5
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-posts-top" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-posts-top"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-posts-top"></code></pre>
</span>
<span id="execution-error-GETapi-v1-posts-top" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-posts-top"></code></pre>
</span>
<form id="form-GETapi-v1-posts-top" data-method="GET"
      data-path="api/v1/posts/top"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-posts-top', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-posts-top"
                    onclick="tryItOut('GETapi-v1-posts-top');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-posts-top"
                    onclick="cancelTryOut('GETapi-v1-posts-top');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-posts-top" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/posts/top</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-v1-posts--post_id-">Returns a JSON with post data.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-posts--post_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/v1/posts/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/posts/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-posts--post_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;title&quot;: &quot;sunt aut facere repellat provident occaecati excepturi optio reprehenderit&quot;,
    &quot;body&quot;: &quot;quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto&quot;,
    &quot;user&quot;: &quot;Leanne Graham&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-posts--post_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-posts--post_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-posts--post_id-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-posts--post_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-posts--post_id-"></code></pre>
</span>
<form id="form-GETapi-v1-posts--post_id-" data-method="GET"
      data-path="api/v1/posts/{post_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-posts--post_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-posts--post_id-"
                    onclick="tryItOut('GETapi-v1-posts--post_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-posts--post_id-"
                    onclick="cancelTryOut('GETapi-v1-posts--post_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-posts--post_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/posts/{post_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="post_id"
               data-endpoint="GETapi-v1-posts--post_id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the post.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-v1-users">Returns a list of all users with their posts, order by the average rating of user&#039;s posts</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/v1/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Patricia Lebsack&quot;,
        &quot;email&quot;: &quot;Julianne.OConner@kory.org&quot;,
        &quot;city&quot;: &quot;South Elvis&quot;,
        &quot;avg_rating&quot;: &quot;38.7&quot;,
        &quot;posts&quot;: [
            {
                &quot;id&quot;: 31,
                &quot;title&quot;: &quot;ullam ut quidem id aut vel consequuntur&quot;,
                &quot;body&quot;: &quot;debitis eius sed quibusdam non quis consectetur vitae\nimpedit ut qui consequatur sed aut in\nquidem sit nostrum et maiores adipisci atque\nquaerat voluptatem adipisci repudiandae&quot;,
                &quot;rating&quot;: &quot;40&quot;,
                &quot;user_id&quot;: &quot;4&quot;
            },
            {
                &quot;id&quot;: 32,
                &quot;title&quot;: &quot;doloremque illum aliquid sunt&quot;,
                &quot;body&quot;: &quot;deserunt eos nobis asperiores et hic\nest debitis repellat molestiae optio\nnihil ratione ut eos beatae quibusdam distinctio maiores\nearum voluptates et aut adipisci ea maiores voluptas maxime&quot;,
                &quot;rating&quot;: &quot;36&quot;,
                &quot;user_id&quot;: &quot;4&quot;
            },
            {
                &quot;id&quot;: 33,
                &quot;title&quot;: &quot;qui explicabo molestiae dolorem&quot;,
                &quot;body&quot;: &quot;rerum ut et numquam laborum odit est sit\nid qui sint in\nquasi tenetur tempore aperiam et quaerat qui in\nrerum officiis sequi cumque quod&quot;,
                &quot;rating&quot;: &quot;33&quot;,
                &quot;user_id&quot;: &quot;4&quot;
            },
            {
                &quot;id&quot;: 34,
                &quot;title&quot;: &quot;magnam ut rerum iure&quot;,
                &quot;body&quot;: &quot;ea velit perferendis earum ut voluptatem voluptate itaque iusto\ntotam pariatur in\nnemo voluptatem voluptatem autem magni tempora minima in\nest distinctio qui assumenda accusamus dignissimos officia nesciunt nobis&quot;,
                &quot;rating&quot;: &quot;37&quot;,
                &quot;user_id&quot;: &quot;4&quot;
            },
            {
                &quot;id&quot;: 35,
                &quot;title&quot;: &quot;id nihil consequatur molestias animi provident&quot;,
                &quot;body&quot;: &quot;nisi error delectus possimus ut eligendi vitae\nplaceat eos harum cupiditate facilis reprehenderit voluptatem beatae\nmodi ducimus quo illum voluptas eligendi\net nobis quia fugit&quot;,
                &quot;rating&quot;: &quot;37&quot;,
                &quot;user_id&quot;: &quot;4&quot;
            },
            {
                &quot;id&quot;: 36,
                &quot;title&quot;: &quot;fuga nam accusamus voluptas reiciendis itaque&quot;,
                &quot;body&quot;: &quot;ad mollitia et omnis minus architecto odit\nvoluptas doloremque maxime aut non ipsa qui alias veniam\nblanditiis culpa aut quia nihil cumque facere et occaecati\nqui aspernatur quia eaque ut aperiam inventore&quot;,
                &quot;rating&quot;: &quot;44&quot;,
                &quot;user_id&quot;: &quot;4&quot;
            },
            {
                &quot;id&quot;: 37,
                &quot;title&quot;: &quot;provident vel ut sit ratione est&quot;,
                &quot;body&quot;: &quot;debitis et eaque non officia sed nesciunt pariatur vel\nvoluptatem iste vero et ea\nnumquam aut expedita ipsum nulla in\nvoluptates omnis consequatur aut enim officiis in quam qui&quot;,
                &quot;rating&quot;: &quot;41&quot;,
                &quot;user_id&quot;: &quot;4&quot;
            },
            {
                &quot;id&quot;: 38,
                &quot;title&quot;: &quot;explicabo et eos deleniti nostrum ab id repellendus&quot;,
                &quot;body&quot;: &quot;animi esse sit aut sit nesciunt assumenda eum voluptas\nquia voluptatibus provident quia necessitatibus ea\nrerum repudiandae quia voluptatem delectus fugit aut id quia\nratione optio eos iusto veniam iure&quot;,
                &quot;rating&quot;: &quot;46&quot;,
                &quot;user_id&quot;: &quot;4&quot;
            },
            {
                &quot;id&quot;: 39,
                &quot;title&quot;: &quot;eos dolorem iste accusantium est eaque quam&quot;,
                &quot;body&quot;: &quot;corporis rerum ducimus vel eum accusantium\nmaxime aspernatur a porro possimus iste omnis\nest in deleniti asperiores fuga aut\nvoluptas sapiente vel dolore minus voluptatem incidunt ex&quot;,
                &quot;rating&quot;: &quot;41&quot;,
                &quot;user_id&quot;: &quot;4&quot;
            },
            {
                &quot;id&quot;: 40,
                &quot;title&quot;: &quot;enim quo cumque&quot;,
                &quot;body&quot;: &quot;ut voluptatum aliquid illo tenetur nemo sequi quo facilis\nipsum rem optio mollitia quas\nvoluptatem eum voluptas qui\nunde omnis voluptatem iure quasi maxime voluptas nam&quot;,
                &quot;rating&quot;: &quot;32&quot;,
                &quot;user_id&quot;: &quot;4&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Chelsey Dietrich&quot;,
        &quot;email&quot;: &quot;Lucio_Hettinger@annie.ca&quot;,
        &quot;city&quot;: &quot;Roscoeview&quot;,
        &quot;avg_rating&quot;: &quot;37.3&quot;,
        &quot;posts&quot;: [
            {
                &quot;id&quot;: 41,
                &quot;title&quot;: &quot;non est facere&quot;,
                &quot;body&quot;: &quot;molestias id nostrum\nexcepturi molestiae dolore omnis repellendus quaerat saepe\nconsectetur iste quaerat tenetur asperiores accusamus ex ut\nnam quidem est ducimus sunt debitis saepe&quot;,
                &quot;rating&quot;: &quot;31&quot;,
                &quot;user_id&quot;: &quot;5&quot;
            },
            {
                &quot;id&quot;: 42,
                &quot;title&quot;: &quot;commodi ullam sint et excepturi error explicabo praesentium voluptas&quot;,
                &quot;body&quot;: &quot;odio fugit voluptatum ducimus earum autem est incidunt voluptatem\nodit reiciendis aliquam sunt sequi nulla dolorem\nnon facere repellendus voluptates quia\nratione harum vitae ut&quot;,
                &quot;rating&quot;: &quot;43&quot;,
                &quot;user_id&quot;: &quot;5&quot;
            },
            {
                &quot;id&quot;: 43,
                &quot;title&quot;: &quot;eligendi iste nostrum consequuntur adipisci praesentium sit beatae perferendis&quot;,
                &quot;body&quot;: &quot;similique fugit est\nillum et dolorum harum et voluptate eaque quidem\nexercitationem quos nam commodi possimus cum odio nihil nulla\ndolorum exercitationem magnam ex et a et distinctio debitis&quot;,
                &quot;rating&quot;: &quot;47&quot;,
                &quot;user_id&quot;: &quot;5&quot;
            },
            {
                &quot;id&quot;: 44,
                &quot;title&quot;: &quot;optio dolor molestias sit&quot;,
                &quot;body&quot;: &quot;temporibus est consectetur dolore\net libero debitis vel velit laboriosam quia\nipsum quibusdam qui itaque fuga rem aut\nea et iure quam sed maxime ut distinctio quae&quot;,
                &quot;rating&quot;: &quot;35&quot;,
                &quot;user_id&quot;: &quot;5&quot;
            },
            {
                &quot;id&quot;: 45,
                &quot;title&quot;: &quot;ut numquam possimus omnis eius suscipit laudantium iure&quot;,
                &quot;body&quot;: &quot;est natus reiciendis nihil possimus aut provident\nex et dolor\nrepellat pariatur est\nnobis rerum repellendus dolorem autem&quot;,
                &quot;rating&quot;: &quot;34&quot;,
                &quot;user_id&quot;: &quot;5&quot;
            },
            {
                &quot;id&quot;: 46,
                &quot;title&quot;: &quot;aut quo modi neque nostrum ducimus&quot;,
                &quot;body&quot;: &quot;voluptatem quisquam iste\nvoluptatibus natus officiis facilis dolorem\nquis quas ipsam\nvel et voluptatum in aliquid&quot;,
                &quot;rating&quot;: &quot;28&quot;,
                &quot;user_id&quot;: &quot;5&quot;
            },
            {
                &quot;id&quot;: 47,
                &quot;title&quot;: &quot;quibusdam cumque rem aut deserunt&quot;,
                &quot;body&quot;: &quot;voluptatem assumenda ut qui ut cupiditate aut impedit veniam\noccaecati nemo illum voluptatem laudantium\nmolestiae beatae rerum ea iure soluta nostrum\neligendi et voluptate&quot;,
                &quot;rating&quot;: &quot;34&quot;,
                &quot;user_id&quot;: &quot;5&quot;
            },
            {
                &quot;id&quot;: 48,
                &quot;title&quot;: &quot;ut voluptatem illum ea doloribus itaque eos&quot;,
                &quot;body&quot;: &quot;voluptates quo voluptatem facilis iure occaecati\nvel assumenda rerum officia et\nillum perspiciatis ab deleniti\nlaudantium repellat ad ut et autem reprehenderit&quot;,
                &quot;rating&quot;: &quot;36&quot;,
                &quot;user_id&quot;: &quot;5&quot;
            },
            {
                &quot;id&quot;: 49,
                &quot;title&quot;: &quot;laborum non sunt aut ut assumenda perspiciatis voluptas&quot;,
                &quot;body&quot;: &quot;inventore ab sint\nnatus fugit id nulla sequi architecto nihil quaerat\neos tenetur in in eum veritatis non\nquibusdam officiis aspernatur cumque aut commodi aut&quot;,
                &quot;rating&quot;: &quot;41&quot;,
                &quot;user_id&quot;: &quot;5&quot;
            },
            {
                &quot;id&quot;: 50,
                &quot;title&quot;: &quot;repellendus qui recusandae incidunt voluptates tenetur qui omnis exercitationem&quot;,
                &quot;body&quot;: &quot;error suscipit maxime adipisci consequuntur recusandae\nvoluptas eligendi et est et voluptates\nquia distinctio ab amet quaerat molestiae et vitae\nadipisci impedit sequi nesciunt quis consectetur&quot;,
                &quot;rating&quot;: &quot;44&quot;,
                &quot;user_id&quot;: &quot;5&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Leanne Graham&quot;,
        &quot;email&quot;: &quot;Sincere@april.biz&quot;,
        &quot;city&quot;: &quot;Gwenborough&quot;,
        &quot;avg_rating&quot;: &quot;36.0&quot;,
        &quot;posts&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;sunt aut facere repellat provident occaecati excepturi optio reprehenderit&quot;,
                &quot;body&quot;: &quot;quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto&quot;,
                &quot;rating&quot;: &quot;41&quot;,
                &quot;user_id&quot;: &quot;1&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;qui est esse&quot;,
                &quot;body&quot;: &quot;est rerum tempore vitae\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla&quot;,
                &quot;rating&quot;: &quot;37&quot;,
                &quot;user_id&quot;: &quot;1&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;ea molestias quasi exercitationem repellat qui ipsa sit aut&quot;,
                &quot;body&quot;: &quot;et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut&quot;,
                &quot;rating&quot;: &quot;44&quot;,
                &quot;user_id&quot;: &quot;1&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;eum et est occaecati&quot;,
                &quot;body&quot;: &quot;ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit&quot;,
                &quot;rating&quot;: &quot;36&quot;,
                &quot;user_id&quot;: &quot;1&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;nesciunt quas odio&quot;,
                &quot;body&quot;: &quot;repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse voluptatibus quis\nest aut tenetur dolor neque&quot;,
                &quot;rating&quot;: &quot;29&quot;,
                &quot;user_id&quot;: &quot;1&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;dolorem eum magni eos aperiam quia&quot;,
                &quot;body&quot;: &quot;ut aspernatur corporis harum nihil quis provident sequi\nmollitia nobis aliquid molestiae\nperspiciatis et ea nemo ab reprehenderit accusantium quas\nvoluptate dolores velit et doloremque molestiae&quot;,
                &quot;rating&quot;: &quot;38&quot;,
                &quot;user_id&quot;: &quot;1&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;magnam facilis autem&quot;,
                &quot;body&quot;: &quot;dolore placeat quibusdam ea quo vitae\nmagni quis enim qui quis quo nemo aut saepe\nquidem repellat excepturi ut quia\nsunt ut sequi eos ea sed quas&quot;,
                &quot;rating&quot;: &quot;33&quot;,
                &quot;user_id&quot;: &quot;1&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;dolorem dolore est ipsam&quot;,
                &quot;body&quot;: &quot;dignissimos aperiam dolorem qui eum\nfacilis quibusdam animi sint suscipit qui sint possimus cum\nquaerat magni maiores excepturi\nipsam ut commodi dolor voluptatum modi aut vitae&quot;,
                &quot;rating&quot;: &quot;34&quot;,
                &quot;user_id&quot;: &quot;1&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;nesciunt iure omnis dolorem tempora et accusantium&quot;,
                &quot;body&quot;: &quot;consectetur animi nesciunt iure dolore\nenim quia ad\nveniam autem ut quam aut nobis\net est aut quod aut provident voluptas autem voluptas&quot;,
                &quot;rating&quot;: &quot;37&quot;,
                &quot;user_id&quot;: &quot;1&quot;
            },
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;optio molestias id quia eum&quot;,
                &quot;body&quot;: &quot;quo et expedita modi cum officia vel magni\ndoloribus qui repudiandae\nvero nisi sit\nquos veniam quod sed accusamus veritatis error&quot;,
                &quot;rating&quot;: &quot;31&quot;,
                &quot;user_id&quot;: &quot;1&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Ervin Howell&quot;,
        &quot;email&quot;: &quot;Shanna@melissa.tv&quot;,
        &quot;city&quot;: &quot;Wisokyburgh&quot;,
        &quot;avg_rating&quot;: &quot;35.8&quot;,
        &quot;posts&quot;: [
            {
                &quot;id&quot;: 11,
                &quot;title&quot;: &quot;et ea vero quia laudantium autem&quot;,
                &quot;body&quot;: &quot;delectus reiciendis molestiae occaecati non minima eveniet qui voluptatibus\naccusamus in eum beatae sit\nvel qui neque voluptates ut commodi qui incidunt\nut animi commodi&quot;,
                &quot;rating&quot;: &quot;37&quot;,
                &quot;user_id&quot;: &quot;2&quot;
            },
            {
                &quot;id&quot;: 12,
                &quot;title&quot;: &quot;in quibusdam tempore odit est dolorem&quot;,
                &quot;body&quot;: &quot;itaque id aut magnam\npraesentium quia et ea odit et ea voluptas et\nsapiente quia nihil amet occaecati quia id voluptatem\nincidunt ea est distinctio odio&quot;,
                &quot;rating&quot;: &quot;38&quot;,
                &quot;user_id&quot;: &quot;2&quot;
            },
            {
                &quot;id&quot;: 13,
                &quot;title&quot;: &quot;dolorum ut in voluptas mollitia et saepe quo animi&quot;,
                &quot;body&quot;: &quot;aut dicta possimus sint mollitia voluptas commodi quo doloremque\niste corrupti reiciendis voluptatem eius rerum\nsit cumque quod eligendi laborum minima\nperferendis recusandae assumenda consectetur porro architecto ipsum ipsam&quot;,
                &quot;rating&quot;: &quot;47&quot;,
                &quot;user_id&quot;: &quot;2&quot;
            },
            {
                &quot;id&quot;: 14,
                &quot;title&quot;: &quot;voluptatem eligendi optio&quot;,
                &quot;body&quot;: &quot;fuga et accusamus dolorum perferendis illo voluptas\nnon doloremque neque facere\nad qui dolorum molestiae beatae\nsed aut voluptas totam sit illum&quot;,
                &quot;rating&quot;: &quot;28&quot;,
                &quot;user_id&quot;: &quot;2&quot;
            },
            {
                &quot;id&quot;: 15,
                &quot;title&quot;: &quot;eveniet quod temporibus&quot;,
                &quot;body&quot;: &quot;reprehenderit quos placeat\nvelit minima officia dolores impedit repudiandae molestiae nam\nvoluptas recusandae quis delectus\nofficiis harum fugiat vitae&quot;,
                &quot;rating&quot;: &quot;25&quot;,
                &quot;user_id&quot;: &quot;2&quot;
            },
            {
                &quot;id&quot;: 16,
                &quot;title&quot;: &quot;sint suscipit perspiciatis velit dolorum rerum ipsa laboriosam odio&quot;,
                &quot;body&quot;: &quot;suscipit nam nisi quo aperiam aut\nasperiores eos fugit maiores voluptatibus quia\nvoluptatem quis ullam qui in alias quia est\nconsequatur magni mollitia accusamus ea nisi voluptate dicta&quot;,
                &quot;rating&quot;: &quot;46&quot;,
                &quot;user_id&quot;: &quot;2&quot;
            },
            {
                &quot;id&quot;: 17,
                &quot;title&quot;: &quot;fugit voluptas sed molestias voluptatem provident&quot;,
                &quot;body&quot;: &quot;eos voluptas et aut odit natus earum\naspernatur fuga molestiae ullam\ndeserunt ratione qui eos\nqui nihil ratione nemo velit ut aut id quo&quot;,
                &quot;rating&quot;: &quot;36&quot;,
                &quot;user_id&quot;: &quot;2&quot;
            },
            {
                &quot;id&quot;: 18,
                &quot;title&quot;: &quot;voluptate et itaque vero tempora molestiae&quot;,
                &quot;body&quot;: &quot;eveniet quo quis\nlaborum totam consequatur non dolor\nut et est repudiandae\nest voluptatem vel debitis et magnam&quot;,
                &quot;rating&quot;: &quot;30&quot;,
                &quot;user_id&quot;: &quot;2&quot;
            },
            {
                &quot;id&quot;: 19,
                &quot;title&quot;: &quot;adipisci placeat illum aut reiciendis qui&quot;,
                &quot;body&quot;: &quot;illum quis cupiditate provident sit magnam\nea sed aut omnis\nveniam maiores ullam consequatur atque\nadipisci quo iste expedita sit quos voluptas&quot;,
                &quot;rating&quot;: &quot;34&quot;,
                &quot;user_id&quot;: &quot;2&quot;
            },
            {
                &quot;id&quot;: 20,
                &quot;title&quot;: &quot;doloribus ad provident suscipit at&quot;,
                &quot;body&quot;: &quot;qui consequuntur ducimus possimus quisquam amet similique\nsuscipit porro ipsam amet\neos veritatis officiis exercitationem vel fugit aut necessitatibus totam\nomnis rerum consequatur expedita quidem cumque explicabo&quot;,
                &quot;rating&quot;: &quot;37&quot;,
                &quot;user_id&quot;: &quot;2&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Clementine Bauch&quot;,
        &quot;email&quot;: &quot;Nathan@yesenia.net&quot;,
        &quot;city&quot;: &quot;McKenziehaven&quot;,
        &quot;avg_rating&quot;: &quot;35.7&quot;,
        &quot;posts&quot;: [
            {
                &quot;id&quot;: 21,
                &quot;title&quot;: &quot;asperiores ea ipsam voluptatibus modi minima quia sint&quot;,
                &quot;body&quot;: &quot;repellat aliquid praesentium dolorem quo\nsed totam minus non itaque\nnihil labore molestiae sunt dolor eveniet hic recusandae veniam\ntempora et tenetur expedita sunt&quot;,
                &quot;rating&quot;: &quot;40&quot;,
                &quot;user_id&quot;: &quot;3&quot;
            },
            {
                &quot;id&quot;: 22,
                &quot;title&quot;: &quot;dolor sint quo a velit explicabo quia nam&quot;,
                &quot;body&quot;: &quot;eos qui et ipsum ipsam suscipit aut\nsed omnis non odio\nexpedita earum mollitia molestiae aut atque rem suscipit\nnam impedit esse&quot;,
                &quot;rating&quot;: &quot;38&quot;,
                &quot;user_id&quot;: &quot;3&quot;
            },
            {
                &quot;id&quot;: 23,
                &quot;title&quot;: &quot;maxime id vitae nihil numquam&quot;,
                &quot;body&quot;: &quot;veritatis unde neque eligendi\nquae quod architecto quo neque vitae\nest illo sit tempora doloremque fugit quod\net et vel beatae sequi ullam sed tenetur perspiciatis&quot;,
                &quot;rating&quot;: &quot;36&quot;,
                &quot;user_id&quot;: &quot;3&quot;
            },
            {
                &quot;id&quot;: 24,
                &quot;title&quot;: &quot;autem hic labore sunt dolores incidunt&quot;,
                &quot;body&quot;: &quot;enim et ex nulla\nomnis voluptas quia qui\nvoluptatem consequatur numquam aliquam sunt\ntotam recusandae id dignissimos aut sed asperiores deserunt&quot;,
                &quot;rating&quot;: &quot;33&quot;,
                &quot;user_id&quot;: &quot;3&quot;
            },
            {
                &quot;id&quot;: 25,
                &quot;title&quot;: &quot;rem alias distinctio quo quis&quot;,
                &quot;body&quot;: &quot;ullam consequatur ut\nomnis quis sit vel consequuntur\nipsa eligendi ipsum molestiae et omnis error nostrum\nmolestiae illo tempore quia et distinctio&quot;,
                &quot;rating&quot;: &quot;32&quot;,
                &quot;user_id&quot;: &quot;3&quot;
            },
            {
                &quot;id&quot;: 26,
                &quot;title&quot;: &quot;est et quae odit qui non&quot;,
                &quot;body&quot;: &quot;similique esse doloribus nihil accusamus\nomnis dolorem fuga consequuntur reprehenderit fugit recusandae temporibus\nperspiciatis cum ut laudantium\nomnis aut molestiae vel vero&quot;,
                &quot;rating&quot;: &quot;34&quot;,
                &quot;user_id&quot;: &quot;3&quot;
            },
            {
                &quot;id&quot;: 27,
                &quot;title&quot;: &quot;quasi id et eos tenetur aut quo autem&quot;,
                &quot;body&quot;: &quot;eum sed dolores ipsam sint possimus debitis occaecati\ndebitis qui qui et\nut placeat enim earum aut odit facilis\nconsequatur suscipit necessitatibus rerum sed inventore temporibus consequatur&quot;,
                &quot;rating&quot;: &quot;43&quot;,
                &quot;user_id&quot;: &quot;3&quot;
            },
            {
                &quot;id&quot;: 28,
                &quot;title&quot;: &quot;delectus ullam et corporis nulla voluptas sequi&quot;,
                &quot;body&quot;: &quot;non et quaerat ex quae ad maiores\nmaiores recusandae totam aut blanditiis mollitia quas illo\nut voluptatibus voluptatem\nsimilique nostrum eum&quot;,
                &quot;rating&quot;: &quot;35&quot;,
                &quot;user_id&quot;: &quot;3&quot;
            },
            {
                &quot;id&quot;: 29,
                &quot;title&quot;: &quot;iusto eius quod necessitatibus culpa ea&quot;,
                &quot;body&quot;: &quot;odit magnam ut saepe sed non qui\ntempora atque nihil\naccusamus illum doloribus illo dolor\neligendi repudiandae odit magni similique sed cum maiores&quot;,
                &quot;rating&quot;: &quot;35&quot;,
                &quot;user_id&quot;: &quot;3&quot;
            },
            {
                &quot;id&quot;: 30,
                &quot;title&quot;: &quot;a quo magni similique perferendis&quot;,
                &quot;body&quot;: &quot;alias dolor cumque\nimpedit blanditiis non eveniet odio maxime\nblanditiis amet eius quis tempora quia autem rem\na provident perspiciatis quia&quot;,
                &quot;rating&quot;: &quot;31&quot;,
                &quot;user_id&quot;: &quot;3&quot;
            }
        ]
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users"></code></pre>
</span>
<form id="form-GETapi-v1-users" data-method="GET"
      data-path="api/v1/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users"
                    onclick="tryItOut('GETapi-v1-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users"
                    onclick="cancelTryOut('GETapi-v1-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users</code></b>
        </p>
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
