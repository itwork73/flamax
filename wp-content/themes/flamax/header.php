<? $cacheLock = rand(1000,9999); ?>
<? $bCustomState = bCustomState(); ?>
<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="utf-8" />

    <title><?the_field('seo_title', get_the_ID());?></title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="<?the_field('seo_description', get_the_ID());?>" />
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

    <?
        $protocol = "http".((!empty($_SERVER["HTTPS"])) ? "s" : "")."://";
        $httpHost = preg_replace("#:(443|80)$#", "", $_SERVER["HTTP_HOST"]);
    ?>


    <meta property="og:url" content="<?=$protocol.$httpHost.$_SERVER['REQUEST_URI'];?>" />
    <meta property="og:site_name" content="Flamax" />
    <meta property="og:title" content="<?the_field('seo_title', get_the_ID());?>" />
    <meta property="og:description" content="<?the_field('seo_description', get_the_ID());?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?=$protocol.$httpHost."/social.jpg";?>" />

    <? /*
    <link rel="apple-touch-icon" href="/assets/img/icons/icon57.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/icons/icon57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/icons/icon72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/icons/icon114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/icons/icon120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/icons/icon152.png">
    <link rel="shortcut icon" type="image/png" href="/assets/img/icons/icon16.png"/>
    */ ?>


    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>



</head>


<body id="body" class=" <?=$bCustomState["body"]?>">
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
                <?foreach(B_DATA_ARRAY["NAV_ARRAY"] as $key=>$value):?>
                    <?
                        $activeClass = "";
                        if(str_replace('/', '', $value["href"]) == B_DATA_ARRAY["URI_ARRAY"][0]) {
                            $activeClass = " state-active";
                        }
                    ?>
                    <a class="dn-link <?=$activeClass?>" href="<?=$value["href"]?>">
                        <?=$value["title"]?>
                    </a>
                <?endforeach?>
            </div>

            <div class="gn-dock-search">
                <div class="is-search-tools" data-is="search-tools">
                    <form data-node="searchToolsForm" action="/" method="get">
                        <div class="st-search-inner">
                            <a class="st-search-submit" href="#" data-gclick="submitClosestForm">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                                    <path d="M1 10a9 9 0 0 1 18 0 9 9 0 0 1-18 0zm25 14l-8-8a10 10 0 1 0-18-6 10 10 0 0 0 16 8l8 8z"></path>
                                </svg>
                            </a>
                            <div class="st-search-input">
                                <input data-node="searchToolsInput" autocomplete="off" type="text" name="s" placeholder="Поиск по сайту">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="gn-dock-lang">
                <div class="l-item state-active">
                    Ru
                </div>
                <a class="l-item state-link" href="/">
                    En
                </a>
            </div>


        </div>
    </div>
</div>



<div class="main-layout">



    <?if(B_DATA_ARRAY["URI_ARRAY"][0] == ""):?>
        <div class="is-header-logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1117 166">
                <path fill="#db2424" d="M1099 139l18 27h-81l-18-36 81 9zm-77-112l12-27h81l-21 29-72-2zm-98-2L905 0h84l12 27-77-2zm29 39l-19-25 74 2 4 9 4-8 66 2-19 26-110-6zm-9 43l18-27 103 7 22 33-143-13zm-63-33l9 28-74-7-8-26 73 5zM741 21l8-21h105l9 23-122-2zm-10 31l7-20 129 5 9 23-72-4-2-8-2 8-69-4zm-12 34l8-23 69 5-7 24-70-6zM590 17l4-17h77l2 19-83-2zm-6 27l4-17 87 3 3 19-94-5zM482 15l2-15h77l4 17-83-2zm-3 23l2-15 87 3 4 17-93-5zm-3 25l2-17 97 7 3 14 3-14 98 7 3 22-206-19zM141 7V0h77v9l-77-2zm0 12v-7l77 2v9l-77-4zm0 13v-9l77 5v11l-77-7zm156-21l4-11h105l5 13-114-2zm-6 16l4-10 119 4 5 14-128-8zm63 25l-1-4-1 4-67-7 4-12 132 9 6 17-73-7zm-16 45h29l-11-37 74 8 33 91 11-87 210 23 9 66 22-63 181 19 15 42 24-38 71 8-17 37H837l-8-28h-54l-9 28H623l-9-61-18 61h-36l-18-61-9 61H388l-8-28h-54l-9 28H141V37l77 8v73h42l23-66 67 7-12 38zM0 0h126l-4 42-47-6v31h44l-3 30H75v69H0V0" fill-rule="evenodd">/path>
            </svg>
            <span>
                Пожарные резервуары
            </span>
        </div>
    <?else:?>
        <a class="is-header-logo" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1117 166">
                <path fill="#db2424" d="M1099 139l18 27h-81l-18-36 81 9zm-77-112l12-27h81l-21 29-72-2zm-98-2L905 0h84l12 27-77-2zm29 39l-19-25 74 2 4 9 4-8 66 2-19 26-110-6zm-9 43l18-27 103 7 22 33-143-13zm-63-33l9 28-74-7-8-26 73 5zM741 21l8-21h105l9 23-122-2zm-10 31l7-20 129 5 9 23-72-4-2-8-2 8-69-4zm-12 34l8-23 69 5-7 24-70-6zM590 17l4-17h77l2 19-83-2zm-6 27l4-17 87 3 3 19-94-5zM482 15l2-15h77l4 17-83-2zm-3 23l2-15 87 3 4 17-93-5zm-3 25l2-17 97 7 3 14 3-14 98 7 3 22-206-19zM141 7V0h77v9l-77-2zm0 12v-7l77 2v9l-77-4zm0 13v-9l77 5v11l-77-7zm156-21l4-11h105l5 13-114-2zm-6 16l4-10 119 4 5 14-128-8zm63 25l-1-4-1 4-67-7 4-12 132 9 6 17-73-7zm-16 45h29l-11-37 74 8 33 91 11-87 210 23 9 66 22-63 181 19 15 42 24-38 71 8-17 37H837l-8-28h-54l-9 28H623l-9-61-18 61h-36l-18-61-9 61H388l-8-28h-54l-9 28H141V37l77 8v73h42l23-66 67 7-12 38zM0 0h126l-4 42-47-6v31h44l-3 30H75v69H0V0" fill-rule="evenodd">/path>
            </svg>
            <span>
                Пожарные резервуары
            </span>
        </a>
    <?endif;?>



    <div class="is-header-phone">
        <a href="tel:+78002006269">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                <path d="M11.73 9.5L9.88 7.63a.96.96 0 0 0-1.36.03l-.94.94-.18-.1a9.3 9.3 0 0 1-2.25-1.64c-.85-.85-1.3-1.66-1.63-2.25l-.1-.18.63-.63.3-.3c.4-.4.4-1 .03-1.37L2.53.27A.96.96 0 0 0 1.17.3L.65.82l.01.02a3.03 3.03 0 0 0-.62 1.53c-.25 2.03.68 3.89 3.2 6.41 3.47 3.49 6.28 3.22 6.4 3.21a3.13 3.13 0 0 0 1.53-.62l.54-.51c.38-.39.39-1 .02-1.37z"></path>
            </svg>
            +7 (800) 200-62-69
        </a>
    </div>

    <div class="main-layout-content">


