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
        globalApp.startupMessage();
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
        },
        'navTo':function($thisNode,thisValue){

            var $scrollNode = $('html,body');
            var $target = $('[data-nav-target="'+thisValue.target+'"]');

            if ($target.length) {
                var h = $target.offset().top;

                // shift
                if (!isNaN(thisValue.shift)) { h = h + Number(thisValue.shift); }

                $scrollNode.animate({'scrollTop':h}, 800);
            }

        },
        'showOrderModal':function($thisNode,thisValue){
            var t = $('#fb-contacts-form').html();
            $.fancyModal.open({
                content: t,
                afterShow:function($thisModal){
                    globalApp.executeModules($thisModal);
                }
            });
        }
    },
    'pageLoader':function(){
        conf.nodeBody.addClass('jsfx-ready');
    },
    'startupMessage':function(){
        if (appConfig.startupMessage.title && appConfig.startupMessage.message) {
            var template = '<div class="fb-modal-default">';
            template += '<div class="md-header">'+appConfig.startupMessage.title+'</div>';
            template += '<div class="md-body">'+appConfig.startupMessage.message+'</div>';
            template += '</div>';

            $.fancyModal.open({
                content: template
            });
        }
    },
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
            preventClicks: false,
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
    'contacts-map':function($thisModule){

        ymaps.ready(function(){

            var $mapNode = $thisModule.find('[data-node="cYmap"]');

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
                iconImageSize: [40,55],
                iconImageOffset: [-20, -55],
                hideIconOnBalloonOpen: false
            });

            map.geoObjects.add(marker);


            // shift pin to right
            if ($thisModule.data().shift) {
                var position = map.getGlobalPixelCenter();
                map.setGlobalPixelCenter([ position[0] + 110, position[1] - 20 ]);
            }

            setTimeout(function(){
                $('.is-contacts-drag-image').addClass('state-ready');
            }, 1000);



        });


    },
    'contacts-drag-image':function($thisModule){

        var dragStatus = false;

        var v = [0,0]; // velocity
        var c = [0,0]; // current
        var cl = [0,0]; // current last
        var l = [0,0]; // last
        var s = [0,0]; // saver
        var a = [0,0];


        $thisModule.on('mousedown',function(){


            dragStatus = true;
            l[0] = c[0] - s[0];
            l[1] = c[1] - s[1];
        });

        conf.nodeDoc.on('mouseup',function(){

            if (dragStatus) {

                s[0] = v[0] + a[0];
                s[1] = v[1] + a[1];


                var style = 'transition:transform .4s;transform:translate3d('+s[0]+'px,'+s[1]+'px,0px);';
                $thisModule.attr('style',style);

                if(a[0] == 0 && a[1] == 0) {
                    alert('show gallery');
                }

                console.log(a);
            }
            dragStatus = false;

        });

        conf.nodeDoc.on('mousemove',function(e){
            c[0] = e.screenX;
            c[1] = e.screenY;

            if (dragStatus) {
                a[0] = (c[0] - cl[0]) * 8;
                a[1] = (c[1] - cl[1]) * 6;
            } else {
                a = [0,0];
            }


            cl[0] = c[0];
            cl[1] = c[1];
        });

        var ticker = function(){
            if (dragStatus) {

                v[0] = c[0] - l[0];
                v[1] = c[1] - l[1];

                var style = 'transform:translate3d('+v[0]+'px,'+v[1]+'px,0px);';
                $thisModule.attr('style',style);
            }

            window.requestAnimationFrame(ticker);
        };

        ticker();

    },
    'project-slider':function($thisModule){

        var swiperCount = $thisModule.find('.swiper-slide').length;

        var timeout = null;
        var shift = parseInt((Math.max(document.documentElement.clientWidth, window.innerWidth || 0) - 1140)/2);
        if (shift < 40) { shift = 40; }

        var swiperParams = {
            speed: 300,
            loop: false,
            slidesPerView: 'auto',
            slidesOffsetBefore: shift,
            slidesOffsetAfter: 60,
            spaceBetween: 40,
            onlyExternal: true,
            roundLengths: true,
            preventClicks: false,
            breakpoints: {
                1340: {
                    spaceBetween: 30
                }
            }
        };

        if (swiperCount > 2) {
            swiperParams.mousewheelControl = true;
        }

        var thisSwiper = $thisModule.find('.swiper-container').swiper(swiperParams);

        conf.nodeWindow.on('resize',function(){
            clearTimeout(timeout);
            timeout = setTimeout(function(){
                var shift = parseInt((Math.max(document.documentElement.clientWidth, window.innerWidth || 0) - 1140)/2);
                if (shift < 40) { shift = 40; }

                thisSwiper.params.slidesOffsetBefore = shift;
                thisSwiper.update(true);
            }, 50);
        });

        $thisModule.find('.ss-arrow').on('click',function(e){
            e.preventDefault();
            if (swiperCount<2) { return false; }
            if ($(this).hasClass('ss-arrow-prev')) {
                thisSwiper.slidePrev();
            } else {
                thisSwiper.slideNext();
            }
        });

    },
    'wide-slider':function($thisModule){
        var swiperParams = {
            speed: 500,
            loop: true,
            loopAdditionalSlides: 6,
            autoplay: 5000,
            onlyExternal: false,
            roundLengths: true,
            centeredSlides: true,
            slidesPerView: 2.2,
            spaceBetween: 30,
            prevButton: $thisModule.find('.ws-arrow-prev')[0],
            nextButton: $thisModule.find('.ws-arrow-next')[0]
        };

        var thisSwiper = $thisModule.find('.swiper-container').swiper(swiperParams);
    },
    'header-filter-all':function($thisModule){
        $thisModule.on('change',function(){
            $thisModule.addClass('state-progress');
            location.href = '?' + $thisModule.find('form').serialize();
        });
    },
    'header-filter-single':function($thisModule){
        $thisModule.find('select').on('change',function(){
            $thisModule.addClass('state-progress');
            var $this = $(this);
            location.href = '?' + $this.attr('name') + '=' + encodeURI($this.val());
        });
    },
    'field-selectric':function($thisModule){

        $thisModule.find('select').selectric({
            arrowButtonMarkup:'<b class="button"></b>'
        });

    },
    'technology-page':function($thisModule){

        var $thisNodes = $thisModule.getNodeList();

        var params = {
            swipers:{},
            ymapReady: false,
            markers: {}
        };

        var customEvents = {

        };

        var methods = {
            'init':function(){
                this.initSwipers();
                this.initYandexMap();
            },
            'initSwipers':function(){
                params.swipers.swiperMain = $thisNodes.swiperMain.swiper({
                    speed: 500,
                    loop: false,
                    direction: 'vertical',
                    onlyExternal: true,
                    roundLengths: true,
                    preventClicks: false,
                    mousewheelControl: true,
                    pagination: $('.is-tech-pager')[0],
                    paginationClickable: true,
                    onSlideChangeStart:function(sw){
                        if(sw.activeIndex>0) {
                            conf.nodeBody.addClass('body-state-technology-second');
                        } else {
                            conf.nodeBody.removeClass('body-state-technology-second');
                        }
                    }
                });

                params.swipers.swiperProduction = $thisNodes.swiperProduction.swiper({
                    speed: 500,
                    loop: false,
                    direction: 'horizontal',
                    nested: true,
                    onlyExternal: false,
                    roundLengths: true,
                    preventClicks: false
                });

                params.swipers.swiperFlamax = $thisNodes.swiperFlamax.swiper({
                    speed: 500,
                    loop: false,
                    direction: 'horizontal',
                    nested: true,
                    onlyExternal: false,
                    roundLengths: true,
                    preventClicks: false
                });

                params.swipers.swiperPartners = $thisNodes.swiperPartners.swiper({
                    speed: 400,
                    loop: true,
                    nested: true,
                    slidesPerView: 4,
                    onlyExternal: true,
                    roundLengths: true,
                    preventClicks: false,
                    prevButton: $thisNodes.swiperPartnersPrev[0],
                    nextButton: $thisNodes.swiperPartnersNext[0]
                });

                console.log(params.swipers);
            },
            'initYandexMap':function(){

                ymaps.ready(function(){

                    var $mapNode = $thisNodes.ymap;

                    var mapLat = $mapNode.data().lat || 55.751244;
                    var mapLng = $mapNode.data().lng || 37.618423;
                    var mapZoom = $mapNode.data().zoom || 16;

                    var map = new ymaps.Map($mapNode[0], {
                        center: [mapLat, mapLng],
                        zoom: mapZoom,
                        type: 'yandex#publicMap',
                        behaviors: ['drag', 'dblClickZoom']
                    });


                    $.each($thisNodes.partnerItem,function(i,thisPartner){
                        var thisData = $(thisPartner).data().value || {};
                        var thisPosition = [Number(thisData.lat), Number(thisData.lng)];

                        var t = '<div class="ymap-inner-partners"><div class="y-ip-image"><img src="'+thisData.image+'" /></div>';
                        t += '<div class="ymap-inner-partners"><div class="y-ip-header">'+thisData.title+'</div>';
                        t += '<div class="y-ip-preview">'+thisData.preview+'</div></div>';

                        var marker = new ymaps.Placemark(thisPosition, {
                            balloonContent: t
                        }, {
                            iconLayout: 'default#image',
                            iconImageHref: '/assets/img/pin2.png',
                            iconImageSize: [20,20],
                            iconImageOffset: [-10, -10],
                            hideIconOnBalloonOpen: false,
                            balloonPanelMaxMapArea: 0
                        });

                        map.geoObjects.add(marker);
                        params.markers[thisData.id] = marker;
                    });

                    map.setBounds(map.geoObjects.getBounds());

                    map.events.add('balloonopen', function(e){
                        var target = e.get('target');
                        if (target.geometry && typeof target.getGeoObjects == 'undefined') {
                            target.options.set({
                                iconImageHref: "/assets/img/pin3.png"
                            });
                        }
                    });
                    map.events.add('balloonclose', function(e){
                        var target = e.get('target');
                        if (target.geometry && typeof target.getGeoObjects == 'undefined') {
                            target.options.set({
                                iconImageHref: "/assets/img/pin2.png"
                            });
                        }
                    });



                    params.ymapReady = true;

                });


            },
            'showPartnerOnMap':function(e){
                if (!params.ymapReady) { return false; }
                params.markers[e.thisValue.id].balloon.open();
            },
            'swipePrev':function(e){
                params.swipers[e.thisValue.target].slidePrev();
            },
            'swipeNext':function(e){
                params.swipers[e.thisValue.target].slideNext();
            },
            'swipeTo':function(e){
                console.log(e.thisValue.target);
                params.swipers[e.thisValue.target].slideTo(e.thisValue.slide);
                
            }
        };

        $thisModule.eventer(methods,customEvents);


    },
    'video-player':function($thisModule){
        var $poster = $thisModule.find('.hp-poster');
        $poster.find('.hp-play').on('click',function(e){
            e.preventDefault();
            var $video = $thisModule.find('video').eq(0);
            var video = $video[0];
            if (appConfig.mobileVersion) {
                location.href = $video.find('source').eq(0).attr('src');
            } else {
                video.play();
                $poster.fadeOut(200)
            }
        });
    },
    'form-validation':function($thisModule,thisCallback){

        thisCallback = thisCallback || false;

        var params = {
            'fields':{
                'attr':'validation',
                'parentClass':'is-form-field',
                'parentErrorState':'state-error',
                'errorNode':'ff-error-parent',
                'formFocusClass':'state-focus',
                'formHasValueClass':'state-has-value',
                'fromInitedClass':'state-inited',
                'fieldInitidClass':'_field-inited',
                'initialNodes':$(null),
                'passwordFields':{
                    'primaryNode':$(null),
                    'secondaryNode':$(null)
                },
                'maskedBlank':'–'
            },
            'form':{
                'moduleParent':$thisModule,
                'parent':$thisModule.find('form'),
                'submitLinkClass':'js-form-submit',
                'validFormClass':'form-state-valid',
                'invalidFormClass':'form-state-invalid',
                'progressFormClass':'form-state-progress'
            },
            'inner':{
                'submitCallback':thisCallback,
                'realTimeCheck':false,
                'defaultFieldData':{
                    'mask':'none',
                    'require':true,
                    'visible':true,
                    'error':'',
                    'cleaveMask':false
                }
            }
        };

        var methods = {
            'init':function(){
                methods.initFields();
                methods.initEvents();
                methods.initFieldsMarkup();
                methods.initFormStatus();
                methods.initialFieldFocus();
            },
            'initFields':function(){
                params.fields.initialNodes = params.form.parent.find('[data-'+params.fields.attr+']');
            },
            'initEvents':function(){
                params.form.parent.on('submit', methods.eventFormSubmit);
                params.form.parent.find('.'+params.form.submitLinkClass).on('click', methods.eventSubmitLinkClick);
                $thisModule.on('keypress input change','[data-'+params.fields.attr+']',methods.eventChangeFields);
                $thisModule.on('keydown','[data-'+params.fields.attr+']',methods.eventFormSubmitEnter);
                $thisModule.on('focus','[data-'+params.fields.attr+']',methods.eventFocusEnter);
                $thisModule.on('blur','[data-'+params.fields.attr+']',methods.eventFocusLeave);
            },
            'initFieldsMarkup':function(){
                params.form.parent.find('[data-'+params.fields.attr+']:not(.'+params.fields.fieldInitidClass+')').each(function(i,thisField){
                    var $thisField = $(thisField);
                    var thisFieldDataRaw = $thisField.data()[params.fields.attr];
                    var thisFieldData = $.extend({}, params.inner.defaultFieldData, thisFieldDataRaw);

                    // error message
                    if(thisFieldData.error) { $thisField.closest('.'+params.fields.parentClass).append('<div class="'+params.fields.errorNode+'">'+thisFieldData.error+'</div>'); }

                    // password fields
                    if(thisFieldData.mask == "passwordPrimary") { params.fields.passwordFields.primaryNode = $thisField; }
                    if(thisFieldData.mask == "passwordSecondary") { params.fields.passwordFields.secondaryNode = $thisField; }

                    // masked input
                    if(thisFieldData.cleaveMask) {
                        new Cleave($thisField[0], thisFieldData.cleaveMask);
                    }

                    $thisField.addClass(params.fields.fieldInitidClass);
                    $thisField.closest('.'+params.fields.parentClass).addClass(params.fields.fromInitedClass);


                });
            },
            'initFormStatus':function(){
                if(methods.checkingFieldsAll(params.fields.initialNodes,true)) {
                    params.form.moduleParent.addClass(params.form.validFormClass);
                    params.form.moduleParent.removeClass(params.form.invalidFormClass);
                } else {
                    params.form.moduleParent.removeClass(params.form.validFormClass);
                    params.form.moduleParent.addClass(params.form.invalidFormClass);
                }
            },
            'eventFormSubmitEnter':function(e){
                if (e.keyCode == 13) { methods.eventFormSubmit(); return false; }
                return true;
            },
            'eventFormSubmit':function(){
                methods.initFields();
                methods.initFieldsMarkup();
                methods.initFormStatus();


                // if form in progress
                if (params.form.moduleParent.hasClass(params.form.progressFormClass)) { return false; }

                // enable real time checking
                params.inner.realTimeCheck = true;

                // return state - is a error state
                // if `FALSE` - fields has error and submit is prevent
                // if `TRUE` - no error and form going submit
                var returnState = methods.checkingFieldsAll(params.fields.initialNodes);

                // if fields valid then add progress state to form


                if (returnState == true) {
                    params.form.moduleParent.addClass(params.form.progressFormClass);
                }

                // if submit callback
                if (returnState && params.inner.submitCallback) {
                    params.inner.submitCallback(params.form.parent,params.form.moduleParent);
                    return false;
                }

                return returnState;
            },
            'eventSubmitLinkClick':function(e){
                e.preventDefault();


                params.form.parent.submit();
            },
            'eventChangeFields':function(){
                var $thisField = $(this);
                var thisFieldDataRaw = $.extend({}, $thisField.data()[params.fields.attr], {
                    thisField:$thisField,
                    thisValue:$.trim($thisField.val())
                });

                // checking this field
                if(params.inner.realTimeCheck) { methods.checkingField($thisField); }

                // hidden checking all field for submit status
                methods.initFormStatus();

                // double fields logic, trigger secondary on primary
                if (thisFieldDataRaw.mask == "passwordPrimary") { params.fields.passwordFields.secondaryNode.trigger('change'); }
            },
            'checkingField':function($thisField,hiddenChecking){
                // hiddenChecking is check fields but don't change style

                var fieldStatus = true;

                var thisFieldDataRaw = $.extend({}, $thisField.data()[params.fields.attr], {
                    thisField:$thisField,
                    thisValue:$.trim($thisField.val())
                });

                var thisFieldData = $.extend({}, params.inner.defaultFieldData, thisFieldDataRaw);

                // checking empty value

                if ($thisField.val().length === 0) {
                    $thisField.closest('.'+params.fields.parentClass).removeClass(params.fields.formHasValueClass);
                } else {
                    $thisField.closest('.'+params.fields.parentClass).addClass(params.fields.formHasValueClass);
                }

                // checking for mask
                if (methods.checkingMasks[thisFieldData.mask]) {
                    if (methods.checkingMasks[thisFieldData.mask](thisFieldData) || methods.checkingMasks['visibleAndRequire'](thisFieldData)) {
                        // remove error class
                        if (!hiddenChecking) { $thisField.closest('.'+params.fields.parentClass).removeClass(params.fields.parentErrorState); }
                    } else {
                        // added error class
                        if (!hiddenChecking) { $thisField.closest('.'+params.fields.parentClass).addClass(params.fields.parentErrorState); }

                        // added error status
                        fieldStatus = false;
                    }
                }

                return fieldStatus;
            },
            'checkingFieldsAll': function($fields,hiddenChecking){
                var checkingParams = {
                    'status':true,
                    'focusFlag':true,
                    'scrollNode':$('body,html'),
                    'scrollSpeed':300,
                    'scrollDelay':100,
                    'scrollOffsetShift': 150
                };
                $fields.each(function(i,thisField){
                    var $thisField = $(thisField);
                    var thisFieldStatus = methods.checkingField($thisField,hiddenChecking);
                    if (!thisFieldStatus) {
                        checkingParams.status = false;

                        // scroll to error field and focus
                        if (checkingParams.focusFlag && !hiddenChecking && !$thisField.is(':checkbox')) {
                            checkingParams.focusFlag = false;
                            var t = ($thisField.offset().top - checkingParams.scrollOffsetShift);
                            checkingParams.scrollNode.animate({scrollTop:t}, checkingParams.scrollSpeed, function(){
                                $thisField.focus();
                            });
                        }
                    }
                });
                return checkingParams.status;
            },
            'checkingMasks':{
                'text':function(data){
                    return (data.thisValue.length > 0);
                },
                'email':function(data){
                    return (/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(data.thisValue));
                },
                'phoneRussia':function(data){
                    // `+7_902_002_20_22`
                    return (data.thisValue.length === 16);
                },
                'select':function(data){
                    return !(data.thisValue == 0);
                },
                'checkedGroup':function(data){
                    return data.thisField.closest('.field-group').find('input:checked').length;
                },
                'visibleAndRequire':function(data){
                    // invisible field
                    if (data.visible && !data.thisField.closest('.'+params.fields.parentClass).is(':visible')) { return true; }

                    // not require field
                    if (!data.require && data.thisValue.length === 0) { return true; }

                    // return default
                    return false;
                },
                'passwordPrimary':function(data){
                    return (data.thisValue.length > 5);
                },
                'passwordSecondary':function(data){
                    return (data.thisValue.length > 5 && (params.fields.passwordFields.primaryNode.val() === params.fields.passwordFields.secondaryNode.val()));
                },
                'textInn':function(data){
                    return (data.thisValue.length === 10);
                },
                'textKpp':function(data){
                    return (data.thisValue.length === 9);
                }
            },
            'eventFocusEnter':function(){
                $(this).closest('.'+params.fields.parentClass).addClass(params.fields.formFocusClass);
            },
            'eventFocusLeave':function(){
                $(this).closest('.'+params.fields.parentClass).removeClass(params.fields.formFocusClass)
            },
            'initialFieldFocus':function(){
                setTimeout(function(){ $thisModule.find('.state-initial-focus').focus(); }, 500);
            }
        };

        methods.init();
    }

};

$(document).ready(function(){
    globalApp.init();
});


