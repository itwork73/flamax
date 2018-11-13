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
    <meta name="viewport" id="viewport" content="width=device-width">
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

            <div class="gn-dock-order">
                <a class="is-button-c" data-gclick="showOrderModal" href="#">
                    Оставить заявку
                </a>
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

<div class="a-global-header">

    <div class="a-gh-burger" data-gclick="toggleAdaptiveNav">
        <i class="tl"></i><i class="tr"></i>
        <i class="ml"></i><i class="mr"></i>
        <i class="bl"></i><i class="br"></i>
    </div>


    <?if(true):?>
        <div class="a-gh-logo">
            <svg viewBox="0 0 1117 258" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1099 139L1117 166H1036L1018 130L1099 139ZM1022 27L1034 0H1115L1094 29L1022 27ZM924 25L905 0H989L1001 27L924 25ZM953 64L934 39L1008 41L1012 50L1016 42L1082 44L1063 70L953 64ZM944 107L962 80L1065 87L1087 120L944 107ZM881 74L890 102L816 95L808 69L881 74ZM741 21L749 0H854L863 23L741 21ZM731 52L738 32L867 37L876 60L804 56L802 48L800 56L731 52ZM719 86L727 63L796 68L789 92L719 86ZM590 17L594 0H671L673 19L590 17ZM584 44L588 27L675 30L678 49L584 44ZM482 15L484 0H561L565 17L482 15ZM479 38L481 23L568 26L572 43L479 38ZM476 63L478 46L575 53L578 67L581 53L679 60L682 82L476 63ZM141 7V0H218V9L141 7ZM141 19V12L218 14V23L141 19ZM141 32V23L218 28V39L141 32ZM297 11L301 0H406L411 13L297 11ZM291 27L295 17L414 21L419 35L291 27ZM354 52L353 48L352 52L285 45L289 33L421 42L427 59L354 52ZM338 97H367L356 60L430 68L463 159L474 72L684 95L693 161L715 98L896 117L911 159L935 121L1006 129L989 166H837L829 138H775L766 166H623L614 105L596 166H560L542 105L533 166H388L380 138H326L317 166H141V37L218 45V118H260L283 52L350 59L338 97ZM0 0H126L122 42L75 36V67H119L116 97H75V166H0V0Z" fill="#DB2424"></path>
                <path d="M83.4 206.6V257C87.792 257 92.184 257 96.576 257V218.48H112.128V257C116.52 257 120.912 257 125.304 257V206.6H83.4ZM185.166 231.8C185.166 214.376 172.35 205.592 159.462 205.592C146.358 205.592 133.47 214.376 133.47 231.8C133.47 249.296 145.926 257.936 159.246 257.936C174.51 257.936 185.166 247.208 185.166 231.8ZM146.646 231.8C146.646 222.584 152.91 218.12 159.462 218.12C165.726 218.12 171.99 222.8 171.99 231.8C171.99 240.8 165.582 245.48 159.318 245.48C152.838 245.48 146.646 240.8 146.646 231.8ZM261.295 257V255.056C256.471 247.568 251.647 240.008 246.895 232.52C249.703 229.496 251.143 224.96 252.655 218.912C253.519 215.6 256.327 215.024 259.207 215.6V206.744C250.711 204.8 242.863 205.88 241.063 215.384C240.343 218.696 239.263 223.52 236.095 225.32C234.871 226.112 233.215 226.184 231.199 226.184V206.6C226.879 206.6 222.559 206.6 218.167 206.6V226.184C216.151 226.184 214.567 226.112 213.343 225.32C210.103 223.52 209.023 218.696 208.375 215.384C206.503 205.88 198.655 204.8 190.159 206.744V215.6C193.111 215.024 195.919 215.6 196.711 218.912C198.223 224.96 199.663 229.496 202.543 232.52C197.719 240.008 192.895 247.568 188.143 255.056V257H202.975C206.647 250.52 210.319 244.04 213.991 237.632C215.503 237.776 216.367 237.92 218.167 237.92V257C222.559 257 226.879 257 231.199 257V237.92C233.071 237.92 233.863 237.776 235.447 237.632C239.047 244.04 242.719 250.52 246.391 257H261.295ZM297.273 250.736L300.225 257H313.833V255.2L290.937 206.096H284.889L261.777 255.2V257H275.529L278.409 250.736H297.273ZM287.841 227.552L293.097 239.72H282.657L287.841 227.552ZM331.703 256.928V243.896H340.775C352.727 243.896 358.847 234.68 358.847 225.464C359.063 215.96 352.871 206.528 340.775 206.528C333.287 206.456 326.015 206.528 318.527 206.528V256.928H331.703ZM331.487 232.448V217.976H340.775C344.375 217.976 346.247 221.504 346.247 225.104C346.247 228.776 344.231 232.448 340.775 232.448H331.487ZM407.821 257V206.6H394.645V224.816H379.021V206.6H365.845V257H379.021V236.84H394.645V257H407.821ZM431.466 206.6C427.218 206.6 422.898 206.6 418.65 206.6C418.65 223.376 418.65 240.08 418.65 257C425.922 257 433.41 257 440.754 257C464.874 256.856 464.874 221.648 440.754 221.648H431.466V206.6ZM440.754 233.24C447.81 233.24 448.17 245.336 440.754 245.408C437.658 245.552 434.49 245.408 431.466 245.408C431.466 241.376 431.466 237.344 431.466 233.24H440.754ZM478.626 206.6H465.522V257H478.626V206.6ZM520.919 206.6H489.455V257H521.567V244.976H502.631V236.768H519.479V225.248H502.631V218.048H520.919V206.6ZM561.132 256.928V243.896H570.204C582.156 243.896 588.276 234.68 588.276 225.464C588.492 215.96 582.3 206.528 570.204 206.528C562.716 206.456 555.444 206.528 547.956 206.528V256.928H561.132ZM560.916 232.448V217.976H570.204C573.804 217.976 575.676 221.504 575.676 225.104C575.676 228.776 573.66 232.448 570.204 232.448H560.916ZM626.739 206.6H595.275V257H627.387V244.976H608.451V236.768H625.299V225.248H608.451V218.048H626.739V206.6ZM646.558 219.344C646.558 217.256 648.934 216.032 651.31 216.032C653.902 216.032 656.134 217.76 656.134 220.568C656.134 222.728 654.478 225.104 651.238 225.104H647.494V235.616H651.382C655.774 235.616 657.934 238.496 657.934 241.304C657.934 244.184 655.774 247.064 651.382 247.064C647.638 247.064 644.614 244.544 644.614 240.584H633.166C633.166 251.96 640.294 257.936 651.382 257.936C664.558 257.936 671.038 251.024 671.038 242.096C671.038 236.408 668.878 232.376 663.694 229.64C666.646 227.408 668.158 223.592 668.158 220.28C668.158 212.936 662.398 205.664 651.31 205.664C642.382 205.664 634.534 209.984 634.966 219.344H646.558ZM710.552 206.6H679.088V257H711.2V244.976H692.264V236.768H709.112V225.248H692.264V218.048H710.552V206.6ZM733.539 256.928V243.896H742.611C754.563 243.896 760.683 234.68 760.683 225.464C760.899 215.96 754.707 206.528 742.611 206.528C735.123 206.456 727.851 206.528 720.363 206.528V256.928H733.539ZM733.323 232.448V217.976H742.611C746.211 217.976 748.083 221.504 748.083 225.104C748.083 228.776 746.067 232.448 742.611 232.448H733.323ZM805.913 221.864C805.913 212.504 799.361 206.384 790.001 206.384H767.753V256.712H792.017C802.385 256.712 808.001 250.016 808.001 241.376C808.001 236.768 805.841 232.664 801.737 230.576C804.257 228.56 805.913 224.96 805.913 221.864ZM789.065 217.832C791.729 217.832 793.025 220.064 792.953 222.296C792.881 224.312 791.585 226.256 789.065 226.256H780.929V217.832H789.065ZM791.009 236.912C793.601 236.912 795.113 239.072 794.969 241.376C794.753 243.392 793.601 245.264 791.081 245.264H780.929V236.912H791.009ZM826.078 242.96C823.63 248.288 820.678 248.216 815.926 246.488L814.198 255.776C828.166 260.96 834.142 256.64 839.182 245.12L857.398 207.968V206.6H843.43L834.934 225.968H834.502L824.926 206.6H810.454V208.256L827.806 239.36L826.078 242.96ZM887.546 250.736L890.498 257H904.106V255.2L881.21 206.096H875.162L852.05 255.2V257H865.802L868.682 250.736H887.546ZM878.114 227.552L883.37 239.72H872.93L878.114 227.552ZM921.976 256.928V243.896H931.048C943 243.896 949.12 234.68 949.12 225.464C949.336 215.96 943.144 206.528 931.048 206.528C923.56 206.456 916.288 206.528 908.8 206.528V256.928H921.976ZM921.76 232.448V217.976H931.048C934.648 217.976 936.52 221.504 936.52 225.104C936.52 228.776 934.504 232.448 931.048 232.448H921.76ZM968.935 206.6C964.687 206.6 960.367 206.6 956.119 206.6C956.119 223.376 956.119 240.08 956.119 257C963.391 257 970.879 257 978.223 257C1002.34 256.856 1002.34 221.648 978.223 221.648H968.935V206.6ZM978.223 233.24C985.279 233.24 985.639 245.336 978.223 245.408C975.127 245.552 971.959 245.408 968.935 245.408C968.935 241.376 968.935 237.344 968.935 233.24H978.223ZM1016.09 206.6H1002.99V257H1016.09V206.6Z" fill="#DB2424"></path>
            </svg>
        </div>
    <?else:?>
        <a class="a-gh-logo" href="/">
            <svg viewBox="0 0 1117 258" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1099 139L1117 166H1036L1018 130L1099 139ZM1022 27L1034 0H1115L1094 29L1022 27ZM924 25L905 0H989L1001 27L924 25ZM953 64L934 39L1008 41L1012 50L1016 42L1082 44L1063 70L953 64ZM944 107L962 80L1065 87L1087 120L944 107ZM881 74L890 102L816 95L808 69L881 74ZM741 21L749 0H854L863 23L741 21ZM731 52L738 32L867 37L876 60L804 56L802 48L800 56L731 52ZM719 86L727 63L796 68L789 92L719 86ZM590 17L594 0H671L673 19L590 17ZM584 44L588 27L675 30L678 49L584 44ZM482 15L484 0H561L565 17L482 15ZM479 38L481 23L568 26L572 43L479 38ZM476 63L478 46L575 53L578 67L581 53L679 60L682 82L476 63ZM141 7V0H218V9L141 7ZM141 19V12L218 14V23L141 19ZM141 32V23L218 28V39L141 32ZM297 11L301 0H406L411 13L297 11ZM291 27L295 17L414 21L419 35L291 27ZM354 52L353 48L352 52L285 45L289 33L421 42L427 59L354 52ZM338 97H367L356 60L430 68L463 159L474 72L684 95L693 161L715 98L896 117L911 159L935 121L1006 129L989 166H837L829 138H775L766 166H623L614 105L596 166H560L542 105L533 166H388L380 138H326L317 166H141V37L218 45V118H260L283 52L350 59L338 97ZM0 0H126L122 42L75 36V67H119L116 97H75V166H0V0Z" fill="#DB2424"></path>
                <path d="M83.4 206.6V257C87.792 257 92.184 257 96.576 257V218.48H112.128V257C116.52 257 120.912 257 125.304 257V206.6H83.4ZM185.166 231.8C185.166 214.376 172.35 205.592 159.462 205.592C146.358 205.592 133.47 214.376 133.47 231.8C133.47 249.296 145.926 257.936 159.246 257.936C174.51 257.936 185.166 247.208 185.166 231.8ZM146.646 231.8C146.646 222.584 152.91 218.12 159.462 218.12C165.726 218.12 171.99 222.8 171.99 231.8C171.99 240.8 165.582 245.48 159.318 245.48C152.838 245.48 146.646 240.8 146.646 231.8ZM261.295 257V255.056C256.471 247.568 251.647 240.008 246.895 232.52C249.703 229.496 251.143 224.96 252.655 218.912C253.519 215.6 256.327 215.024 259.207 215.6V206.744C250.711 204.8 242.863 205.88 241.063 215.384C240.343 218.696 239.263 223.52 236.095 225.32C234.871 226.112 233.215 226.184 231.199 226.184V206.6C226.879 206.6 222.559 206.6 218.167 206.6V226.184C216.151 226.184 214.567 226.112 213.343 225.32C210.103 223.52 209.023 218.696 208.375 215.384C206.503 205.88 198.655 204.8 190.159 206.744V215.6C193.111 215.024 195.919 215.6 196.711 218.912C198.223 224.96 199.663 229.496 202.543 232.52C197.719 240.008 192.895 247.568 188.143 255.056V257H202.975C206.647 250.52 210.319 244.04 213.991 237.632C215.503 237.776 216.367 237.92 218.167 237.92V257C222.559 257 226.879 257 231.199 257V237.92C233.071 237.92 233.863 237.776 235.447 237.632C239.047 244.04 242.719 250.52 246.391 257H261.295ZM297.273 250.736L300.225 257H313.833V255.2L290.937 206.096H284.889L261.777 255.2V257H275.529L278.409 250.736H297.273ZM287.841 227.552L293.097 239.72H282.657L287.841 227.552ZM331.703 256.928V243.896H340.775C352.727 243.896 358.847 234.68 358.847 225.464C359.063 215.96 352.871 206.528 340.775 206.528C333.287 206.456 326.015 206.528 318.527 206.528V256.928H331.703ZM331.487 232.448V217.976H340.775C344.375 217.976 346.247 221.504 346.247 225.104C346.247 228.776 344.231 232.448 340.775 232.448H331.487ZM407.821 257V206.6H394.645V224.816H379.021V206.6H365.845V257H379.021V236.84H394.645V257H407.821ZM431.466 206.6C427.218 206.6 422.898 206.6 418.65 206.6C418.65 223.376 418.65 240.08 418.65 257C425.922 257 433.41 257 440.754 257C464.874 256.856 464.874 221.648 440.754 221.648H431.466V206.6ZM440.754 233.24C447.81 233.24 448.17 245.336 440.754 245.408C437.658 245.552 434.49 245.408 431.466 245.408C431.466 241.376 431.466 237.344 431.466 233.24H440.754ZM478.626 206.6H465.522V257H478.626V206.6ZM520.919 206.6H489.455V257H521.567V244.976H502.631V236.768H519.479V225.248H502.631V218.048H520.919V206.6ZM561.132 256.928V243.896H570.204C582.156 243.896 588.276 234.68 588.276 225.464C588.492 215.96 582.3 206.528 570.204 206.528C562.716 206.456 555.444 206.528 547.956 206.528V256.928H561.132ZM560.916 232.448V217.976H570.204C573.804 217.976 575.676 221.504 575.676 225.104C575.676 228.776 573.66 232.448 570.204 232.448H560.916ZM626.739 206.6H595.275V257H627.387V244.976H608.451V236.768H625.299V225.248H608.451V218.048H626.739V206.6ZM646.558 219.344C646.558 217.256 648.934 216.032 651.31 216.032C653.902 216.032 656.134 217.76 656.134 220.568C656.134 222.728 654.478 225.104 651.238 225.104H647.494V235.616H651.382C655.774 235.616 657.934 238.496 657.934 241.304C657.934 244.184 655.774 247.064 651.382 247.064C647.638 247.064 644.614 244.544 644.614 240.584H633.166C633.166 251.96 640.294 257.936 651.382 257.936C664.558 257.936 671.038 251.024 671.038 242.096C671.038 236.408 668.878 232.376 663.694 229.64C666.646 227.408 668.158 223.592 668.158 220.28C668.158 212.936 662.398 205.664 651.31 205.664C642.382 205.664 634.534 209.984 634.966 219.344H646.558ZM710.552 206.6H679.088V257H711.2V244.976H692.264V236.768H709.112V225.248H692.264V218.048H710.552V206.6ZM733.539 256.928V243.896H742.611C754.563 243.896 760.683 234.68 760.683 225.464C760.899 215.96 754.707 206.528 742.611 206.528C735.123 206.456 727.851 206.528 720.363 206.528V256.928H733.539ZM733.323 232.448V217.976H742.611C746.211 217.976 748.083 221.504 748.083 225.104C748.083 228.776 746.067 232.448 742.611 232.448H733.323ZM805.913 221.864C805.913 212.504 799.361 206.384 790.001 206.384H767.753V256.712H792.017C802.385 256.712 808.001 250.016 808.001 241.376C808.001 236.768 805.841 232.664 801.737 230.576C804.257 228.56 805.913 224.96 805.913 221.864ZM789.065 217.832C791.729 217.832 793.025 220.064 792.953 222.296C792.881 224.312 791.585 226.256 789.065 226.256H780.929V217.832H789.065ZM791.009 236.912C793.601 236.912 795.113 239.072 794.969 241.376C794.753 243.392 793.601 245.264 791.081 245.264H780.929V236.912H791.009ZM826.078 242.96C823.63 248.288 820.678 248.216 815.926 246.488L814.198 255.776C828.166 260.96 834.142 256.64 839.182 245.12L857.398 207.968V206.6H843.43L834.934 225.968H834.502L824.926 206.6H810.454V208.256L827.806 239.36L826.078 242.96ZM887.546 250.736L890.498 257H904.106V255.2L881.21 206.096H875.162L852.05 255.2V257H865.802L868.682 250.736H887.546ZM878.114 227.552L883.37 239.72H872.93L878.114 227.552ZM921.976 256.928V243.896H931.048C943 243.896 949.12 234.68 949.12 225.464C949.336 215.96 943.144 206.528 931.048 206.528C923.56 206.456 916.288 206.528 908.8 206.528V256.928H921.976ZM921.76 232.448V217.976H931.048C934.648 217.976 936.52 221.504 936.52 225.104C936.52 228.776 934.504 232.448 931.048 232.448H921.76ZM968.935 206.6C964.687 206.6 960.367 206.6 956.119 206.6C956.119 223.376 956.119 240.08 956.119 257C963.391 257 970.879 257 978.223 257C1002.34 256.856 1002.34 221.648 978.223 221.648H968.935V206.6ZM978.223 233.24C985.279 233.24 985.639 245.336 978.223 245.408C975.127 245.552 971.959 245.408 968.935 245.408C968.935 241.376 968.935 237.344 968.935 233.24H978.223ZM1016.09 206.6H1002.99V257H1016.09V206.6Z" fill="#DB2424"></path>
            </svg>
        </a>
    <?endif?>

    <a class="a-gh-callback" href="tel:+78469201000" onclick="gtag('event','event_name',{'event_category':'phone_click','event_action':'click'});yaCounter50929832.reachGoal('phone_click');return true;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12">
            <path fill="#333" d="M11.73 9.5L9.88 7.63a.96.96 0 0 0-1.36.03l-.94.94-.18-.1a9.3 9.3 0 0 1-2.25-1.64c-.85-.85-1.3-1.66-1.63-2.25l-.1-.18.63-.63.3-.3c.4-.4.4-1 .03-1.37L2.53.27A.96.96 0 0 0 1.17.3L.65.82l.01.02a3.03 3.03 0 0 0-.62 1.53c-.25 2.03.68 3.89 3.2 6.41 3.47 3.49 6.28 3.22 6.4 3.21a3.13 3.13 0 0 0 1.53-.62l.54-.51c.38-.39.39 1 .02-1.37z"></path>
        </svg>
    </a>


    <div class="a-gh-parent">
        <div class="a-gh-parent-inner">



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


