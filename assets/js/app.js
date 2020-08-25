import { registerRouter } from './app.js';

var routerRes = [
    {
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
// run res router
routerRes = registerRouter(routerRes);