// Khai báo biến
const urlPage = window.location.origin + '/';
const urlHost = window.location.href;
const urlPathname = window.location.pathname;
const thumb_img = urlPage + 'assets/imgs/404error.png';
const pathName = (urlHost === urlPage) ? urlPathname : urlPathname.replace(/[/]$/g, '');
//
var routerRes = [{
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
];
//
function registerRouter(routerRes) {
    return { routers: [routerRes] };
}
// Check router exist
function checkRouter() {
    return (registerRouter(routerRes).routers[0].findIndex(findRouter) !== -1) ? routerExist(pathName) : routerNonExist();

    function findRouter(router, index) {
        return router.path === pathName;
    }
}
// Function router exist
function routerExist(pathName) {
    $.each(registerRouter(routerRes).routers[0], function(index, router) {
        if (router.path === pathName) {
            $(`[router='${router.path}']`).addClass('current-router');
            renderContent(urlPage + router.url, router.title);
        }
    })
};
// Function router not exist
function routerNonExist() {
    $.each(registerRouter(routerRes).routers[0], function(index, router) {
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
        /*beforeSend: function() {
            document.getElementById('app').innerHTML = '<p>Đang tải...</p>';
        },*/
        success: function(data) {
            document.title = title;
            document.getElementById('app').innerHTML = data;
        }
    })
};
// When back url
window.onpopstate = function(event) {
    $('button').removeAttr('class');
    $(`[router='${pathName}']`).removeClass('current-router');
    routerExist(window.location.pathname);
};
// Button click load router
$(document).on('click', 'button', function() {
    var vRouter = $(this).attr('router'); // Get attr Router
    var button = $('button').removeAttr('class'); // Remove all class button
    var loadRouter = routerExist(vRouter); // Add class button selected
    var pushState = history.pushState(null, null, vRouter); // push url
})
// Run
checkRouter();