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


    <div class="main">

            <div class="is-global-header" data-is="global-header">
                <a class="gh-button" href="#" data-node="toggleHeaderButton">
                    <div class="gh-burger">
                        <i class="tl"></i><i class="tr"></i>
                        <i class="ml"></i><i class="mr"></i>
                        <i class="bl"></i><i class="br"></i>
                    </div>
                </a>
                <div class="gh-dock">
                    <div class="gh-dock-content">


                        <div class="gh-dock-nav">
                            <a class="dn-link state-active" href="#">
                                Главная
                            </a>
                            <a class="dn-link" href="#">
                                Наши проекты
                            </a>
                            <a class="dn-link" href="#">
                                Технология
                            </a>
                            <a class="dn-link" href="#">
                                Документы
                            </a>
                            <a class="dn-link" href="#">
                                Новости
                            </a>
                            <a class="dn-link" href="#">
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

