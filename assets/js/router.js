$(function() {
    // Khai báo biến
    const urlPage = 'https://demorouter.herokuapp.com/';
    const urlHost = window.location.href;
    const urlPathname = window.location.pathname;
    const thumb_img = urlPage + 'assets/imgs/404error.png';
    const pathName = (urlHost === urlPage) ? urlPathname : urlPathname.replace(/[/]$/g, '');
    // Register router
    const registerRouter = {
        routers: [{
                path: '/',
                url: 'views/home.php',
                title: 'Home'
            },
            {
                path: '/about',
                url: 'views/about.php',
                title: 'About'
            },
            {
                path: '/contact',
                url: 'views/contact.php',
                title: 'Contact'
            }
        ]
    };
    // Check router exist
    const router = registerRouter.routers.findIndex(
        function findRouter(router, index) {
            return router.path === pathName;
        }
    );
    // if router exist
    if (router !== -1) {
        routerExist(pathName);
    } else {
        routerNonExist();
    };
    // Function router exist
    function routerExist(pathName) {
        $.each(registerRouter.routers, function(index, router) {
            if (router.path === pathName) {
                $(`[router='${router.path}']`).addClass('current-router');
                renderContent(urlPage + router.url, router.title);
            }
        })
    };
    // Function router not exist
    function routerNonExist() {
        $.each(registerRouter.routers, function(index, router) {
            if (router.path !== pathName) {
                document.title = 'Page not found';
                document.body.innerHTML = `<img src='${thumb_img}'/>`;
            }
        })
    };
    // Render if success
    function renderContent(url, title) {
        $.ajax({
            url: url,
            method: 'GET',
            beforeSend: function() {
                document.getElementById('app').innerHTML = '<p>Đang tải...</p>';
            },
            success: function(data) {
                document.title = title;
                document.getElementById('app').innerHTML = data;
            }
        })
    };
    // When back url
    window.onpopstate = function(event) {
        routerExist(window.location.pathname);
    };
    // Button click load router
    $(document).on('click', 'button', function() {
        var vRouter = $(this).attr('router'); // Get attr Router
        var button = $('button').removeAttr('class'); // Remove all class button
        var loadRouter = routerExist(vRouter); // Add class button selected
        var pushState = history.pushState(null, null, vRouter); // push url
    })
})
