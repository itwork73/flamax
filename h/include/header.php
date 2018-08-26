<? $cacheLock = rand(1000,9999); ?>
<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="utf-8" />

    <title>Project title</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" id="viewport" content="width=1380">
    <meta name="cmsmagazine" content="9fd15f69c95385763dcf768ea3b67e22" />
    <meta name="theme-color" content="#3e4046" />
    <script>
        var appConfig = {
            'mobileVersion':false,
            'desktopVersion':true,
            'startupMessage':{
                'title':false,
                'message':false
            }
        };
        (function(){var a,b,c,d,e,f,g,h,i,j;a=window.device,window.device={},c=window.document.documentElement,j=window.navigator.userAgent.toLowerCase(),device.ios=function(){return device.iphone()||device.ipod()||device.ipad()},device.iphone=function(){return d("iphone")},device.ipod=function(){return d("ipod")},device.ipad=function(){return d("ipad")},device.android=function(){return d("android")},device.androidPhone=function(){return device.android()&&d("mobile")},device.androidTablet=function(){return device.android()&&!d("mobile")},device.blackberry=function(){return d("blackberry")||d("bb10")||d("rim")},device.blackberryPhone=function(){return device.blackberry()&&!d("tablet")},device.blackberryTablet=function(){return device.blackberry()&&d("tablet")},device.windows=function(){return d("windows")},device.windowsPhone=function(){return device.windows()&&d("phone")},device.windowsTablet=function(){return device.windows()&&d("touch")&&!device.windowsPhone()},device.fxos=function(){return(d("(mobile;")||d("(tablet;"))&&d("; rv:")},device.fxosPhone=function(){return device.fxos()&&d("mobile")},device.fxosTablet=function(){return device.fxos()&&d("tablet")},device.meego=function(){return d("meego")},device.cordova=function(){return window.cordova&&"file:"===location.protocol},device.nodeWebkit=function(){return"object"==typeof window.process},device.mobile=function(){return device.androidPhone()||device.iphone()||device.ipod()||device.windowsPhone()||device.blackberryPhone()||device.fxosPhone()||device.meego()},device.tablet=function(){return device.ipad()||device.androidTablet()||device.blackberryTablet()||device.windowsTablet()||device.fxosTablet()},device.desktop=function(){return!device.tablet()&&!device.mobile()},device.portrait=function(){return window.innerHeight/window.innerWidth>1},device.landscape=function(){return window.innerHeight/window.innerWidth<1},device.noConflict=function(){return window.device=a,this},d=function(a){return-1!==j.indexOf(a)},f=function(a){var b;return b=new RegExp(a,"i"),c.className.match(b)},b=function(a){return f(a)?void 0:c.className+=" "+a},h=function(a){return f(a)?c.className=c.className.replace(a,""):void 0},device.ios()?device.ipad()?b("ios ipad tablet"):device.iphone()?b("ios iphone mobile"):device.ipod()&&b("ios ipod mobile"):b(device.android()?device.androidTablet()?"android tablet":"android mobile":device.blackberry()?device.blackberryTablet()?"blackberry tablet":"blackberry mobile":device.windows()?device.windowsTablet()?"windows tablet":device.windowsPhone()?"windows mobile":"desktop":device.fxos()?device.fxosTablet()?"fxos tablet":"fxos mobile":device.meego()?"meego mobile":device.nodeWebkit()?"node-webkit":"desktop"),device.cordova()&&b("cordova"),e=function(){return device.landscape()?(h("portrait"),b("landscape")):(h("landscape"),b("portrait"))},i="onorientationchange"in window,g=i?"orientationchange":"resize",window.addEventListener?window.addEventListener(g,e,!1):window.attachEvent?window.attachEvent(g,e):window[g]=e,e()}).call(this);
        (function(m,a,d,vp){
            var w = document.documentElement.clientWidth;
            if(device.mobile() || device.tablet()) {
                if (w<m) { document.getElementById(vp).setAttribute('content','width='+m); }
                if (w>a) { document.getElementById(vp).setAttribute('content','width='+a); }
                appConfig.mobileVersion = true;
            }
            if(device.ipad()) {
                document.getElementById(vp).setAttribute('content','width='+d);
                appConfig.mobileVersion = false;
            }
        })(320,745,1380,'viewport');
    </script>

    <link rel="stylesheet" href="/assets/main.css?nocache=<?=$cacheLock?>" />

    <meta property="og:url" content="<? /* http://domain.com/path/to/page/ */ ?>" />
    <meta property="og:site_name" content="<? /* Site name */ ?>" />
    <meta property="og:title" content="<? /* title */ ?>" />
    <meta property="og:description" content="<? /* description */ ?>" />
    <meta property="og:type" content="blog" />
    <meta property="og:image" content="<? /* http://domain.com/path/to/image.png */ ?>" />


    <link rel="apple-touch-icon" href="/assets/img/icons/icon57.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/icons/icon57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/icons/icon72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/icons/icon114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/icons/icon120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/icons/icon152.png">
    <link rel="shortcut icon" type="image/png" href="/assets/img/icons/icon16.png"/>
</head>



<body id="body" class=" <?=$bodyState?>">
    <script>
        (function(t){
            var el = document.getElementById(t);
            var ua = navigator.userAgent.toLowerCase();

            // sfx
            el.className += ' jsfx';

            // cookie privacy
            var cookieStatus = false;
            var cookieKey = "_cookiePolicyIdentify";
            try { cookieStatus = localStorage[cookieKey]; }
            catch(e) { cookieStatus = false; }
            if (!cookieStatus) { el.className += ' state-cookie-privacy' }

            // mac user
            if (!!(navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i))) {
                el.className += ' state-mac-user';
            }

            // internet explore user
            if (/msie\s|trident\/|edge\//i.test(ua) && !!(document.uniqueID || window.MSInputMethodContext)) {
                el.className += ' state-ie-user';
            }

            // safari user
            if (ua.indexOf('safari') > -1 && ua.indexOf('chrome') < 0) {
                el.className += ' state-safari-user';
            }
        })('body');
    </script>

    <?if($headerState=="index"):?>
        <div class="is-header-logo">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJ8AAAAtCAMAAACHx0msAAAArlBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8tivQqAAAAOXRSTlMAd7tE3iHuEGdViDOZk9rMxQiq/G3zrkwX0MqoPOJ+wY+DLRvr97YpchQF5mMl8F5ZSZejDFDUnkANndlOAAAGWUlEQVR4AaTXaXOiTBAH8FZBQBRBDkWRGw8OETy0v/8Xe2BDj5qYrbWe375ZKrHmT0/3ZATA764AKpIJPIzwhQXMHJnp629mGpCtji+28MVCZg6tExK9fJNvA+BI80ZVVfMtPLg47BxM09SVEEiFia4/8u09JOYAyA5fSfThIZITNLYckv7+TT4fwN14ffuqxMPn+gmOs20sGlqapvAi2srHcjeZ9NsliuV02bF3QHz7yinK+jAcmq/1F5EkbQFrJFwBb/KJAMfezmj+9Xqj6mUTk6ZuS1VVT3Vdu7sQSLi7DAYhz2vwV+coWoSD+/1iGOJu0oOOthtPvtRS8xTU3dP4Du/yVQCS7/c9xd5sLAmYhXR0gyCYbTabZRzHB1QFWtfDxnC9tlW1nwMMrBWxdvA/IeOFx2DcX0cAE8s3pEE+srgRkCi7WqvZatVkdN3j8Zhf5D18SfeydMl9f6KqSxxDunk3ReNM+cIpX9aWAETYC180EM6a9j5fH4iKqOsHexaIWyD7/tLm1mb7E9b8fLdBTrO3fLOERsttCznPxcnEX9ILOiYbSiQlkAl7nSpeT/u3umcc+d/zvTlfNFHKy1wUd0Zu1LOVZ1+HJnaLR5jE8XrpeVZ9m7jhsazCH60Y+qNOjmS5YPXz6JXXFP/gfJTvkmAyVK5e15LnRRTKd5nyPfMVTDJl2bd8t6y2EXyXzjuXuQBEXuMr/fiz/9JF632+G/ugCDd1Nu4ZlVNoNDrOXHR9q680Y5MoB2SSA4rQuq83M9815oMiBdDgpz3vSJfLrhnAUzOAihlAB7/bv8u3t7Gzjh4H1nUBLScs9ueuDYpQKnuj8abt1myIiD1oBUgGICfcVb2dgp5YpfC7j/JJ+lMX7IcvHb6Pk6anV015jnf5TMXR9oV8l0rXgUbKXs/mYaEiCYGcd25+LCVHdrZnQUg/zecjMQBghp0xNEK2ofows9vG60m098TJd6OTNb3i6nlaUQTSw5aeZRk3tW3Vm//Ml3DrlvAmX2QjGUTRwsAOt21rm+A3up4c4rg/G+0uzhkaC62ryJ/ynu/5aKPEBx1XbLw5fDXV4IP5HeAv2ikT9Ucu/GHUvh6XqavAmDthdAaykPPApWZY4XflJ/l8/MVKe75NeTb7H6uHpQEbqGRoe80Y55W80OCZ0KtvlrrMYhOJrf17PmGNvzD55wtc78a69PR8CNMDOWTXpVcHpbOFh1RYFM1IDQxjdFtN7Vj8l3zJsHXAXxkAfSQlG/PQxc5wSze6H/QENxo0eH5BHdrRNOH893z/yANh+riMChxtzgWJAxL+Sr8AwNzUFW5jnYLAKEC7OIUA5NN8p9xolSrbqojnWL6KdtIH+WmEbkgy4w+RQ3IDiKZI4jsIiql4s7pXOnz6cT6lYHd94oYxW72Aud7d3XmFDXAUIwl+3PXNAkbI1OwkRD3m7MGn+U7QqdigbY7J05++VMFGJj99B5lJSPQQvvAmEneAzKGdFwcZhf8s3+PbTsQmmrN07ChUWCt9OpI47/k06tRIsv/aKbtUyXUYCH+S/GPHBoN34/1v7EaJT0433LeZl4EUpKiIMvqImw7f/5VkXb8HePXq1atXr169+tcUxQVUqWCSKfHMQMHfRSLRo2AGuItI2Ufb5Uabs+54WuXuNAEk0xrseYmw3St32ssykA2oGWq9HgsiskCHDCXOA7W8KrRlICpHiKbAQgRwXzefHw3V3UilpnjHJaKH+5AcjKIwFfZcDXC/BuVOe1kHugBJIKYYQ+Rn9wSm0EJWu1666gXDIT8dFYkXH5d8XKf7pRHvuCAn9zopgWDEcNqea5eSN99DupctuR6Kpuyuwua7a541pLHM8QkNEbIWW67rY6bofKrHrh/dkmqBNgZ3dLLgnVRhqMKJNNlz7TLH8/3sTntZT5K6cGZ3RuDhmwUonZjqkHlAnzY7slY6+LjfLs5n1gDHntmGWQSyljue09G8I8E7Rly1rj2/eIJ98T3L5GyLUMJ9dIz68Fmq1GSooJaTxaWqK4oAH3w51O/73d7C8ztgsb0lKAo9qIa+52q0lb/v93dZ5LQwVFM5IVrKe7fTrmHIuE7U1DvQ+yff/pjOd+qX73xRehgh33HzneXCDI24Im6bb61Q+OA7i5/LREoASpgHHJO/pdj4H+XMn+k/P9riOJDX4dkAAAAASUVORK5CYII=" />
        </div>
    <?else:?>
        <a class="is-header-logo" href="/h/page-index.php">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJ4AAAAXCAMAAADN5AZZAAAC/VBMVEUAAACMU0OjSUBgZUlTa0qtRD9RbEufSkFpYUhSa0trYEdWakq/PDx5WkZpYUfHOTy/PDxzXUbIODu0QT7JODulSECGVUTFOTy+PDzJODufSkCHVURkY0hVakrFOjzJODu3QD7IODvJODzGOTvBOzzCOjudS0GST0JlY0hnYkhgZUibTEFWaUq+PT3HOTuwQz+/PDzJODvIODu/PDytQz6+PDy9PDyVT0LBOzyAWEW/PD2kSD+EVkR9WUScS0FiZEhoYkdjY0hPbEvFOjy0QT7FOTu+PT2+PDzGOTvFOTzIODrIODu1QD6xQj6YTUHGOTu4Pz2+PDzKNzu5Pz2wQj6/PDy4Pz2/Ozy5PTtrYEeHVEO1QT5yXUaGVEOtRD9nYkibS0BnYkhaaEnCOzy/PD3GOTuvQz7JODvCOzyqRj/BOzzNNjq+OzvIODuOUkOQUUOvQz7EOju9PDy2Pz3FOTuhSUCLU0OzQT20QD2LU0OtQz6dSkB6WkWuQz6LUkOEVkSVT0KxQj66Pz6zQDyjSUGXTUGJVESRT0J/WEWNUUK5Pz2+PT3BOzzIODvHOTvFOTy5Pj2yQT7HODvLNzu4Pz3MNzvPNTucS0HHOTuyQT65Pz6yQT6VT0LEOjy1QT69PTypRj/GOTudSkCxQj6/PDyFVkR3W0asRD6HVENzXUaBV0SbSkB8WUR/WEVmYkiTTkFjZEh6WkVyXUaBVkPDOzzJODvDOjyyQz7AOzy3Pz3LNzvAPDzAPDyqRT/NNzuyQj/GOTumR0DAPDy6Pj3AOzymRz+QT0LNNjqfSUC0QT6GVUSfSkCLU0OuQz6OUUKEVkSAV0SrR0F7WUW0QD2kRz5uX0aOUUJZaEqVTUHONjvQNTvWMjm5Pz7MNju6Pj2uRD+hSUDWMjqjSECbTEGXTUKgSkG0QD2RUUPKOj2UTkGZTEGbS0GWTUG+PT2/PD3BPD3GOTzDOzzFOjy9PT3JOTzIOTzCOzzMNzvLNzvIODvKNzu8Pj3PNTrVMzraMTqZPQ9FAAAA7XRSTlMAk8UECdsQvEsWTganbAjxdQ787tzKEvbr6JKJFhL99u7uz5dsZGBFPS8oHx385OHg4NLRx8G2qIB+W002LCgkIRkM+vLr483KxsPAvbWvr66tqJiFg4FvWFRUUUVCLSolHRT89PPm5Nu8s6uenpmRkI6KiYV3cnFsampoZ2NeWFBLRj49MiocGhf5+e/r597b2djV0svFwby4tKqppaOimJGKint2c3BkYlxVST05OTMwJyT98vHq5eHg1tTPz87Ny8bEuq6gmpmVhoOAfnttX1hXVkdAPzQK+Pjy8e3n1dTLu7ein4+Jhn59cVxnGtEWAAAGR0lEQVR4AaXVdVQc1wLH8R+dfTSwlN2lW4SHBHce/oILxQkuBIGQpHF3d/fGG3f31N3d/bn7u7OzsjSQ9p03O3PvJAvbUk4/f83AcO937twZQPox/AFI+UaQfTsDd71r4e81BQpXK6GMr0A0lzDxX4PJGWs/TydkB3lC8atgM40wHssH5o0EIke5ug6TROOudPIg9bBo88QuMMOEwrFjjTa9LwAYU25kAiPAnBPs5/kMstVblbyjEN3cQZgKz4F5M4H0g5WVe/bsHD68xwkK58irXdHR0X4iFcdxsBOTs+6/4f/x9b3/TQC5Ka88RL0wH8yMl3br9bviNUFBXoKorwbUQotA/SoT4EIEJjEHA/MWA6O02tDm5matds4wKIb9z+olKi0rKzsSEhLSdPYGmOyzru3t2Xl57vhBX2/YuGl9RMeXKxctWjTf6Qwo1fzpTrLpnwKq953YWQfuzeN7eFHPKuCTWbNTUycmp02uGQWFy6hPRjQ2NrqlpaWVeHt7b+3b5wxZwb7bfX19QRMmBJfvO3ABiKg6fPjwLyVVZ/HTEMa4Pzujqb7ymW7At3pWaEt72OzaxH+AiR3/xxo30QjR6YyMjLCVX7lAxo3J+qxt2cxT76SkpNyZDvVB0zfMd2+Aqh//M3vja3Rg/P2dJf4qOBeo1JyDPNP9YO4zkrgtv02ubQxdD8Z/UmlJQvE4wnt48MTmzp0nYyBRX43Kzc3zsw0u0+WMvhYevsTX1/ehdyG78pvbVJ+B6lsO5oSZql3tXVzy+tR6bWhL7A/lyQQnUO5LW8MywsLCtAuWflQ/pa48OCnoiW8b6MJaCouK4ksryqtDpr2Tnn3x48s38tw52Ima8XPqvJUS/pQPyrPCTCTjiuOIxPzE2qHkZf7atMX7uedT02ql7ajL746K+uI6zTPyDOEtJ3b1Bvro91ZW+f47/POcjehPLX2zXG2cwayLN/B2xrb033v3qV1sOId5fzOxT+USvJnyxvF55zLXjmZvav6aVcs+mDnysUefKtJ4TXzSJDIaBEEIKNRYl8JmzfiRh2Z+sHDV6ltqcCoMNCZvTVtb24KGhoajj4kDPdwAlsfwEoOLozzPYHZR8UYsFgyy3ZtgExmV61dA98DodZfC5518+y+T9ibpfYJ6e787A5smZcO143pgwvOvTnVr1IZe5jAY0g/vMO9TDyLrmQR4etMT68fSjRcFxr98oM43/aMVHTd0bEXdPW9lXVlx8f1IiLhknsiSuuFXRo/Nlk4wuvnp51dcbM3Kylqv8/RUO8jjDRKHeX83sLzFAGroZIZ6iDo10lxGi9UjaELS3klVJ+ddYg+e+SJMO/tYbclzfB2AEIMNHYw6fdtq7e318PHxSQwOfvG1/Zn98/jNv5D4O8jrTjITWvR5bGx+KM0zP9sF4FIhuYe5RzAFFHppvJ+qPHRqQdu1AohcVGrYcAUqALo1y06NfLRIE2A5BCo70f4RCi+r8OPf3A6j3RoTxrQCwJIAQsXFEQVP/RPABv3Tr7rNPecaGZWvA7NpXfh7H7KdMMVM7PUsG0LeLDNxyFynBk6aCJWarBwlEKpaBSyySsGWwKCkiroZ6ecvZ21S4V7O896aVl1Wun37IwIdjN/j/qPznIvJ9xgXA1QpedqphGp2I1RpPnCMJ3cJ1l6Nz+6X9r/9XvjaHNzF+fvlRl+PbG8OnT3VrSR525LB8/jNDw63Id+HXwj8WbmZ5a3sBe8cQahtXeh6duCyG0ymgACvnsnuEMXmurjY/aflVCrngsHz2BZSRjVaZAYz/fVr7JMoeqTDk+7wZNVKtkGNV9BqUkazyJQBA1YCyAx8fOKO1ycfmTt3YTRUrldv6sAMlmfP9NcLD9hcUK7QxNzSK3kROCpVmWfhq152RxmYZmZ1v39AsvQZ1md+C9j4opmd/e5L+OsD9eVTjp9Zfi2GG2qe/iZkHwrsr/6V7UOo7aOR+bj0w1bk7SDUnG5vQvFNkC0wKLcUjTm8knAcgFZ6SlaPbYnBEUPL44+BitAQKq1lC6EmbIB6p20unyiMqSCUWwth4johixlHmKbVPYTZuh5ApECYXTFDytNEgNoQT6iEyXEsfieA07a8ag44oVyQSpgjasi4EMI8nUAYfg5EugNE4fZ/GADZwVH560wAAAAASUVORK5CYII=" />
        </a>
    <?endif?>



    <div class="is-header-phone">
        <a href="tel:+78002006269">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                <path d="M11.73 9.5L9.88 7.63a.96.96 0 0 0-1.36.03l-.94.94-.18-.1a9.3 9.3 0 0 1-2.25-1.64c-.85-.85-1.3-1.66-1.63-2.25l-.1-.18.63-.63.3-.3c.4-.4.4-1 .03-1.37L2.53.27A.96.96 0 0 0 1.17.3L.65.82l.01.02a3.03 3.03 0 0 0-.62 1.53c-.25 2.03.68 3.89 3.2 6.41 3.47 3.49 6.28 3.22 6.4 3.21a3.13 3.13 0 0 0 1.53-.62l.54-.51c.38-.39.39-1 .02-1.37z"></path>
            </svg>
            +7 (800) 200-62-69
        </a>
    </div>



    <div class="is-global-nav-overlay" data-gclick="closeNav"></div>

    <div class="is-global-nav">
        <a class="gh-button" href="#" data-gclick="toggleNavButton">
            <div class="gh-burger">
                <i class="tl"></i><i class="tr"></i>
                <i class="ml"></i><i class="mr"></i>
                <i class="bl"></i><i class="br"></i>
            </div>
        </a>
        <div class="gh-dock">
            <div class="gh-dock-content">


                <div class="gh-dock-nav">
                    <a class="dn-link state-active" data-href href="/h/page-index.php">
                        Главная
                    </a>
                    <a class="dn-link" href="/h/page-projects.php">
                        Наши проекты
                    </a>
                    <a class="dn-link" href="#">
                        Технология
                    </a>
                    <a class="dn-link" href="#">
                        Документы
                    </a>
                    <a class="dn-link" href="/h/page-news.php">
                        Новости
                    </a>
                    <a class="dn-link" href="/h/page-contacts.php">
                        Контакты
                    </a>
                </div>

                <div class="gn-dock-search">
                    <div class="is-search-tools" data-is="search-tools">
                        <form data-node="searchToolsForm" action="/h/page-index.php" method="get">
                            <div class="st-search-inner">
                                <a class="st-search-submit" href="#" data-gclick="submitClosestForm">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                                        <path d="M1 10a9 9 0 0 1 18 0 9 9 0 0 1-18 0zm25 14l-8-8a10 10 0 1 0-18-6 10 10 0 0 0 16 8l8 8z"></path>
                                    </svg>
                                </a>
                                <div class="st-search-input">
                                    <input data-node="searchToolsInput" autocomplete="off" type="text" name="q" placeholder="Поиск по сайту">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>



    <div class="main-layout">
        <div class="main-layout-content">


