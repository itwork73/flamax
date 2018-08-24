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
        'submitClosestForm':function($thisNode,thisValue){
            $thisNode.closest('form').submit();
        }
    },
    'pageLoader':function(){
        conf.nodeBody.addClass('jsfx-ready');
    }
};

var moduleApp = {
    'global-header':function($thisModule){

        var nodes = $thisModule.getNodeList();

        nodes.toggleHeaderButton.on('click',function(e){
            e.preventDefault();
            $thisModule.toggleClass('state-header-open');
        });
    },
    'search-tools':function($thisModule){

        var nodes = $thisModule.getNodeList();

        nodes.searchToolsForm.on('submit',function(e){
            if (nodes.searchToolsInput.val().length > 0) {
                return true;
            } else {
                $thisModule.addClass('state-bounce');
                setTimeout(function(){
                    $thisModule.removeClass('state-bounce');
                    nodes.searchToolsInput.select().focus();
                }, 400);
                return false;
            }
        });
    },
    'index-slider':function($thisModule){
        var swiperParams = {
            loop: true,
            roundLengths: true,
            onlyExternal: false,
            prevButton: $thisModule.find('.ss-arrow-prev')[0],
            nextButton: $thisModule.find('.ss-arrow-next')[0]
        };

        var thisSwiper = $thisModule.find('.swiper-container').swiper(swiperParams);
    }
};


$(document).ready(function(){
    globalApp.init();
});




