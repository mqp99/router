Build the <b>SINGLE PAGE APPLICATION</b> easy
+ Before you create the file <b>.htaccess</b> and add content:
  <pre>RewriteEngine on<br>RewriteCond %{REQUEST_FILENAME} !-f<br>RewriteCond %{REQUEST_FILENAME} !-d<br>RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]</pre>
+ Create a file <b>index.php</b>
<pre>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;&lt;/title&gt;
  &lt;/head&gt;
  &lt;/html&gt;
  &lt;body&gt;
    &lt;nav&gt;
      &lt;router link='/'&gt;Home&lt;/router&gt;
      &lt;router link='/welcome'&gt;Welcome&lt;/router&gt;
    &lt;/nav&gt;
    &lt;div id="app"&gt;&lt;/div&gt;
    &lt;script src="https://code.jquery.com/jquery-3.5.1.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://mqp99.github.io/cdn/router/router.class.js"&gt;&lt;/script&gt;
    &lt;script&gt;
      var app = document.querySelector('#app');
      var ROUTER = new Router(app);
          ROUTER.setRouter([
            {
              path: '/',
              url: 'views/home.php',
              title: 'Home'
            },{
              path: '/welcome',
              url: 'views/welcome.php',
              title: 'Welcome'
            }
         ]);
         ROUTER.getRouter();
         $('router').on('click',function () {
            valuePath = $(this).attr('link'); <b>/** Get path */</b>
            router.render(valuePath); <b>/** Find path and load content to #app */</b>
         })
    &lt;/script&gt;
  &lt;/body&gt;
  &lt;/html&gt;
</pre>
