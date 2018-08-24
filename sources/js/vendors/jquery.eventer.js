// https://github.com/itwork73/eventer
// version: 0.0.7

;(function($){

    var defaultEventList = {
        'data-click':{
            'event':'click',
            'preventDefault':true,
            'stopPropagation':true
        }
    };

    $.fn.eventer = function(methods,inputEventList) {
        var $thisModule = this;
        inputEventList = inputEventList || {};
        inputEventList = $.extend(inputEventList,defaultEventList);

        $.each(inputEventList,function(thisEventAttr,thisEventParams){

            var thisEventName = thisEventParams.event;
            if (thisEventName === undefined || thisEventName === 0) { return true; }

            $thisModule.on(thisEventName,'['+thisEventAttr+']',function(e){

                if (thisEventParams.stopPropagation === true) { e.stopPropagation(); }
                if (thisEventParams.preventDefault === true) { e.preventDefault(); }

                var $this = $(this);
                var thisAction = $this.attr(thisEventAttr);
                var thisValue = $this.data().value || $this.val();
                if (methods[thisAction]) {
                    methods[thisAction]({
                        thisNode:$this,
                        thisValue:thisValue,
                        thisEventName:thisEventName
                    });
                } else {
                    console.log('%cEvent: `'+thisAction+'` - is not defined.','color:#ff6347;');
                }
            });
        });

        if(methods["init"]) { methods.init(); }
    };

    $.fn.getTarget = function(target) {
        return this.find('[data-target="'+target+'"]');
    };


    $.fn.getNodeList = function(target){
        var $thisModule = this;

        var nodeList = {};

        $thisModule.find('[data-node]').each(function(i,targetNode){
            var $targetNode = $(targetNode);
            var targetName = $targetNode.data().node;

            if (targetName === "" || targetName === "[object Object]") { console.log('$.getNodeList warning: wrong target type.'); return true; }

            if (nodeList[targetName]) { return true; }

            nodeList[targetName] = $thisModule.find('[data-node="'+targetName+'"]');
        });

        return nodeList;
    };


})(jQuery);
