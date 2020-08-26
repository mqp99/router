$(function() {
    /**
     * @license
     * ROUTER build by (MINH PHAM) 
     * GITHUB project <https://github.com/mqp99/router>
     **/

    /** Used urlPage detech page ORIGIN and add to [/] */
    const urlPage = window.location.origin + '/';

    /** Used urlHost detech location now */
    const urlHost = window.location.href;

    /** Used urlPathname detech pathName URL */
    const urlPathname = window.location.pathname;

    /** Used urlPathNameHandling if urlPage !== urlHost url will removed [/] */
    const urlPathNameHandling = (urlHost === urlPage) ? urlPathname : urlPathname.replace(/[/]$/g, '');

    /** CREATED A ROUTER before register router */

    const ROUTER = function(routerName, routers) {
        return {
            routerName: routerName,
            routers: routers
        };
    }

    /** REGISTER A ROUTER new ROUTER */

    var MY_ROUTER = new ROUTER('MY_ROUTER', [{
        path: '/',
        url: 'views/home.php',
        title: 'Trang chủ'
    }, {
        path: '/about',
        url: 'views/about.php',
        title: 'Giới thiệu'
    }, {
        path: '/contact',
        url: 'views/contact.php',
        title: 'Liên hệ'
    }]);

    /**
     * IF ISSET ROUTER
     * router_EXIST() is handling if router isset
     * router_NON_EXIST() is handling if router not isset
     **/

    var router = (MY_ROUTER.routers.findIndex(router_Check) !== -1) ? router_EXIST(urlPathNameHandling) : router_NON_EXIST();

    /** router_Check check will check MY_ROUTER === pathName */

    function router_Check(router, index) {
        return router.path === urlPathNameHandling;
    }

    /** router_EXIST function will handling url */

    function router_EXIST(urlPathNameHandling) {
        $.each(MY_ROUTER.routers, function(index, router) {
            if (router.path === urlPathNameHandling) {
                $.get(urlPage + router.url, function(data) {
                    // document.title = 'Đang tải...';
                    // document.querySelector('#app').innerHTML = '<p><i>Đang tải...</i></p>';
                    document.title = router.title;
                    document.querySelector('#app').innerHTML = data;
                    document.querySelector(`[router='${urlPathNameHandling}']`).classList.add('current-router');
                })
            }
        })
    }

    /** router_NON_EXIST function will redirect url 404 not found */

    function router_NON_EXIST() {
        $.each(MY_ROUTER.routers, function(index, router) {
            if (router.path !== urlPathNameHandling) {
                document.title = 'Page not found';
                document.body.innerHTML = `<img class='error' src='${urlPage}assets/imgs/404error.png'/>`;
            }
        })
    }
    $(document).on('click', '.router-link', function() {
        var routerValue = $(this).attr('router');
        var buttonRemove = $('.router-link').removeClass('current-router');
        $('.navbar__menu').removeClass('navbar__menu--show');
        var routerLoad = router_EXIST(routerValue);
        var pushState = history.pushState(null, null, routerValue);
    })
    window.onpopstate = function(event) {
        $('.router-link').removeClass('current-router');
        $(`[router='${urlPathNameHandling}']`).removeClass('current-router');
        router_EXIST(window.location.pathname);
    };
})