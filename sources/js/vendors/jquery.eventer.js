// https://github.com/itwork73/eventer
// version: 0.0.4

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


})(jQuery);
