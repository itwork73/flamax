var conf = {
    'xhrStatus':false,
    'nodeBody':$('#body'),
    'nodeWindow':$(window),
    'nodeDoc':$(document)
};

var globalApp = {
    'init':function(){
        globalApp.globalEventsInit();
        globalApp.executeModules();
        globalApp.pageLoader();
    },
    'executeModules':function($parent){
        $parent = $parent || conf.nodeBody;
        $mods = $parent.find('[data-is]');
        $mods.each(function (i,thisModule) {
            var $thisModule = $(thisModule);
            var thisModuleName = $thisModule.attr('data-is');
            if ($thisModule.closest('.hidden-content').length) {
                console.log('%cSkip: `'+thisModuleName+'` - module hidden.','color:#444;'); return true;
            }
            if (moduleApp[thisModuleName]) {
                console.log('%cRun: `'+thisModuleName+'` - module executed.','color:#009900;');
                moduleApp[thisModuleName]($thisModule);
            } else {
                console.log('%cError: `'+thisModuleName+'` - module not defined.','color:#ff6347;');
            }
        });
    },
    'globalEventsInit':function(){
        conf.nodeDoc.on('click','[data-gclick]',function(e){
            e.preventDefault();
            var $this = $(this);
            var thisAction = $this.attr('data-gclick');
            var thisValue = $this.val() || $this.data().value;
            if (globalApp.globalEventsActions[thisAction]) { globalApp.globalEventsActions[thisAction]($this,thisValue); }
            else { console.log('Event: `data-gclick`, Action: `'+thisAction+'` - not defined.'); }
        });
    },
    'globalEventsActions':{
        'toggleNavButton':function(){
            conf.nodeBody.toggleClass('body-state-nav-open');
        },
        'closeNav':function(){
            conf.nodeBody.removeClass('body-state-nav-open');
        },
        'submitClosestForm':function($thisNode,thisValue){
            $thisNode.closest('form').submit();
        }
    },
    'pageLoader':function(){
        conf.nodeBody.addClass('jsfx-ready');
    }
};

var moduleApp = {
    'search-tools':function($thisModule){




        var $nodes = $thisModule.getNodeList();

        $nodes.searchToolsForm.on('submit',function(e){
            if ($nodes.searchToolsInput.val().length > 0) {
                return true;
            } else {
                $thisModule.addClass('state-bounce');
                setTimeout(function(){
                    $thisModule.removeClass('state-bounce');
                    $nodes.searchToolsInput.select().focus();
                }, 400);
                return false;
            }
        });

    },
    'index-slider':function($thisModule){
        var swiperParams = {
            speed: 500,
            loop: true,
            autoplay: 5000,
            onlyExternal: true,
            roundLengths: true,
            prevButton: $thisModule.find('.ss-arrow-prev')[0],
            nextButton: $thisModule.find('.ss-arrow-next')[0]
        };

        var thisSwiper = $thisModule.find('.swiper-container').swiper(swiperParams);
    },
    'tabs-nav':function($thisModule, inputConfig){

        var defaultConfig = {
            'speed':'300',
            'initAttr':'data-tab-body',
            'initAttrType':'.',
            'onBeforeChange':false,
            'onAfterChange':false,


            // private config

            'opacityDuration':'150',
            'opacityDelay':'150',
            'wrapperClass':'.is-tabs-wrapper',
            'contentClass':'.is-tabs-tab',
            'navLinkClass':'.is-tabs-link'
        };

        var tabsConfig = $.extend({}, defaultConfig, inputConfig);

        var debouncer = false;
        var playStringRaw = 'transition:height '+tabsConfig.speed+'ms 0s, opacity '+(parseInt(tabsConfig.speed)+parseInt(tabsConfig.opacityDuration))+'ms '+tabsConfig.opacityDuration+'ms;';
        var playStringCSS = '-webkit-'+playStringRaw+'-moz-'+playStringRaw+'-ms-'+playStringRaw+'-o-'+playStringRaw+playStringRaw;
        var containerBox = $thisModule.attr(tabsConfig.initAttr) || false;

        var $navLinks = $thisModule.find(tabsConfig.navLinkClass);
        var $containerBox = $(tabsConfig.initAttrType + containerBox);
        var $wrapperBox = $containerBox.find(tabsConfig.wrapperClass);
        var $contentBox = $containerBox.find(tabsConfig.contentClass);

        var cH = $wrapperBox.outerHeight();
        var lastIndex = -1;

        var tabsCore = {
            'addEvent':function(){
                $navLinks.on('click', function(e){
                    e.preventDefault();
                    var $this = $(this);
                    if (debouncer || $this.hasClass('active')) { return false; }
                    debouncer = true;
                    var thisIndex = $this.index();
                    $navLinks.removeClass('active');
                    $this.addClass('active');
                    if (tabsConfig.onBeforeChange) {
                        var cbReturn = tabsConfig.onBeforeChange({
                            'oldIndex':lastIndex,
                            'newIndex':thisIndex,
                            'thisLink':$this,
                            'thisContent':$contentBox.eq(thisIndex)
                        });
                        if (cbReturn===false) {
                            debouncer = false;
                            return false;
                        }
                    }
                    $containerBox.attr('style','opacity:0;height:'+cH+'px;');
                    tabsCore.changeTab(thisIndex);
                });
            },
            'changeTab':function(thisIndex){
                $contentBox.hide().eq(thisIndex).show();
                cH = $wrapperBox.outerHeight();
                $containerBox.attr('style','opacity:1;height:'+cH+'px;'+playStringCSS);
                setTimeout(function(){
                    $containerBox.attr('style','height:auto;');
                    if (tabsConfig.onAfterChange) {
                        var cbReturn = tabsConfig.onAfterChange({
                            'oldIndex':lastIndex,
                            'newIndex':thisIndex,
                            'thisLink':$navLinks.eq(thisIndex),
                            'thisContent':$contentBox.eq(thisIndex)
                        });
                        if (cbReturn===false) {
                            debouncer = false;
                            return false;
                        }
                    }
                    lastIndex = thisIndex;
                    debouncer = false;
                    conf.nodeWindow.trigger('resize');


                }, parseInt(tabsConfig.speed)+25);
            }
        };

        // init
        tabsCore.addEvent();
        $navLinks.eq(0).addClass('active');
    },
    'page-contacts':function($thisModule){

        var $nodes = $thisModule.getNodeList();

        var tabsConfig = {
            onAfterChange:function(t){


                var $mapNode = t.thisContent.find('[data-node="cYmap"]');

                if ($mapNode.length > 0 && !$mapNode.hasClass('state-ready') && window.ymaps && window.ymaps.Map) {

                    var mapLat = $mapNode.data().lat || 55.751244;
                    var mapLng = $mapNode.data().lng || 37.618423;
                    var mapZoom = $mapNode.data().zoom || 16;

                    var map = new ymaps.Map($mapNode[0], {
                        center: [mapLat, mapLng],
                        zoom: mapZoom,
                        type: 'yandex#publicMap',
                        behaviors: ['drag', 'dblClickZoom']
                    });

                    var marker = new ymaps.Placemark(map.getCenter(), {}, {
                        iconLayout: 'default#image',
                        iconImageHref: '/assets/img/pin.png',
                        iconImageSize: [25,36],
                        hideIconOnBalloonOpen: false
                    });


                    map.geoObjects.add(marker);


                    $mapNode.addClass('state-ready');

                }



            }
        };

        moduleApp['tabs-nav']($nodes.contactsTabs, tabsConfig);

    }

};


$(document).ready(function(){
    globalApp.init();
});




