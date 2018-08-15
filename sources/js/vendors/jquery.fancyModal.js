
;(function($){

    var initial = {
        content: '',
        afterShow:false,
        afterClose:false
    };

    var node = {
        html:$('html'),
        overlay:null,
        fancyParent:null,
        fancyInner:null
    };

    var params = {
        initialStatus: false,
        openStatus:false,
        playTimeout:null
    };

    var methods = {
        initialSetup:function(){
            params.initialStatus = true;

            this.setScrollMargin();
            this.constructOverlay();
            this.setEvents();
        },
        setScrollMargin:function(){
            node.html.addClass('state-show-fancy-test');
            var sw = (window.innerWidth - document.documentElement.clientWidth);
            node.html.removeClass('state-show-fancy-test');
            var t = '<style>.state-show-fancy-modal{margin-right:'+sw+'px;}</style>';
            node.html.find('head').append(t);
        },
        constructOverlay:function(){
            // construct overlay
            $('body').append('<div class="is-fancy-modal-overlay"><div class="fmo-parent"><div class="fmo-inner"></div></div></div>');
            
            // setup node
            node.overlay = node.html.find('.is-fancy-modal-overlay');
            node.fancyParent = node.overlay.find('.fmo-parent');
            node.fancyInner = node.overlay.find('.fmo-inner');

        },
        setEvents:function(){
            node.html.on('click',function(e){
                var $target = $(e.target);
                if ($target.hasClass('fmo-inner') || $target.hasClass('fmo-parent') || $target.hasClass('fmo-cross') || $target.hasClass('is-fancy-modal-overlay')) {
                    $.fancyModal.close();
                    return false;
                } else {
                    return true;
                }
            });

            node.html.on('keydown',function(e){
                if(params.openStatus && e.keyCode === 27) {
                    $.fancyModal.close();
                    return false;
                } else {
                    return true;
                }
            });
        }
    };

    $.fancyModal = {};

    $.fancyModal.open = function(data){
        data = $.extend({}, initial, data);

        if (!params.initialStatus) { methods.initialSetup(); }

        node.fancyInner.html(data.content);

        node.fancyInner.find('.fb-modal-default').prepend('<a class="fmo-cross" href="#"></a>');

        if (typeof data.afterShow === "function") { data.afterShow(node.fancyInner); }
        
        node.html.addClass('state-show-fancy-modal');

        setTimeout(function(){
            node.html.addClass('state-show-fancy-play');
            params.openStatus = true;
        }, 10);

    };

    $.fancyModal.close = function(data){
        node.html.removeClass('state-show-fancy-play');

        setTimeout(function(){
            node.html.removeClass('state-show-fancy-modal');
            params.openStatus = false;
        }, 250);
    };

})(jQuery);


