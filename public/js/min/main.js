(function(n){{var t,o=n(".mapContainer"),i=n(".main"),e=n(".mapManage"),a=(n(window),500),s=80,c=(n(window).height(),n(window).width(),n("html,body"),n(".addInfos"),n(".banner"),n(".nav")),l=n(".mapItem"),r=n(".mapItem .accordeon"),p=(n("body"),n(".kots").outerHeight(),n(".mapItem .tab")),d=0,u=(n(".mapManage .search .content"),n("#zoom"),n(".researchBtn")),f=n(".ListingBtn"),h=n(".switchView"),g=n(".mapManage .research"),m=n(".mapManage .oneBuilding"),v=(n('input[type="submit"]'),n("form"),n("#form-city"),n(".overlay")),k=n(".popup"),b=n(".popup.lang"),w=n(".popup.connection"),y=(n(".popup.agence"),n(".closePopup")),x=n(".toSocialLogin"),C=n(".toEmailLogin"),D=n(".loginEmail"),L=n(".loginSocial"),P=n(".toPopup"),j=n(".errorsNotifications"),z=n(".errorsNotifications .tab"),I=(n(".errorsNotifications .list"),0);n(".warning-tick"),n(".warning-tick-box"),n(".closeTickbox"),n("#query"),n(".kots #container"),n(".kot:last").offset(),n(".loadmore"),n(".pagination"),n(".pagination ul"),n(".agenceAjax")}n(function(){M(),r.drags({handle:".head"}),n(".typeLocation")&&B(),z.on("click","a",E),n("html").on("click",A),j.on("click",function(n){n.stopPropagation()}),Y(),q(),p.on("click","a",N),P.on("click",Q),n(document).keyup(function(n){27==n.keyCode&&S(n)}),y.on("click",S),v.on("click",function(n){U(n)}),c.find(".connection").on("click","a",Q),x.on("click",H),C.on("click",O),n(window).resize(function(){Y(n(window).height()),q(n(window).width())}),n(".goTo").on("click",function(t){t.preventDefault(),V(n("#main"))}),u.on("click",$),f.on("click",T)});var T=function(t){t.preventDefault();var o=n(this);g.css("display","none"),m.css("display","block"),h.find("a").removeClass("active"),o.addClass("active")},$=function(t){t.preventDefault();var o=n(this);m.css("display","none"),g.css("display","block"),h.find("a").removeClass("active"),o.addClass("active")},M=function(){n.ajax({type:"get",async:!1,url:"/getAllLang",dataType:"json",success:function(n){return oLang=n,console.log(n),!0}})},B=function(){n(".typeLocation li").each(function(){$checkbox=n(this).find('input[type="checkbox"]'),$checkbox.css({visibility:"hidden",position:"absolute",left:"-99999999px"}),n(this).find("label").css({backgroundImage:"url(./img/"+$checkbox.attr("data-background")+")",backgroundPosition:"top",width:"100%",height:100,paddingTop:60,display:"block"})})},N=function(n){n.preventDefault(),0===d?(l.css({left:"-220px"}),d=1):(l.css({left:"12px"}),d=0)},A=function(n){n.stopPropagation(),1===I&&(j.css({right:"-250px"}),I=0)},E=function(n){n.preventDefault(),0===I?(j.css({right:"12px"}),I=1):(j.css({right:"-250px"}),I=0)},H=function(n){n.preventDefault(),D.slideUp(function(){L.slideDown()})},O=function(n){n.preventDefault(),L.slideUp(function(){D.slideDown()})},Q=function(t){t.preventDefault(),t.stopPropagation();var o=n(this).attr("data-type");"lang"===o?(v.css("display","block"),b.css("display","block")):"connection"===o&&(v.css("display","block"),w.css("display","block"))},S=function(n){n.preventDefault(),k.fadeOut("fast",function(){X()})},U=function(n){n.preventDefault(),k.fadeOut("fast",function(){X()})},X=function(){v.css("display","none")},Y=function(c){o&&(t=c?(c-n(".banner").height())/100*s:(n(window).height()-n(".banner").height())/100*s,o.css({height:t,width:n(window).width()-240,"min-height":a}),e.css({height:t,"min-height":a}),i.css({height:"auto","min-height":"100%"}))},q=function(){},V=function(t){n("html,body").animate({scrollTop:t.offset().top},"slow")}}).call(this,jQuery),function(n){n.fn.drags=function(t){if($that=n(this),t=n.extend({handle:"",cursor:"move"},t),""===t.handle)var o=this;else var o=this.find(t.handle);return o.css("cursor",t.cursor).on("mousedown",function(o){if(o.stopPropagation(),""===t.handle)var i=n(this).addClass("draggable");else{console.log(n(this));var i=n(this).addClass("active-handle");$that.addClass("draggable")}var e=i.css("z-index"),a=i.outerHeight(),s=i.outerWidth(),c=i.offset().top+a-o.pageY,l=i.offset().left+s-o.pageX;i.css("z-index",1e3).parents().on("mousemove",function(t){n(".draggable").offset({top:t.pageY+c-a,left:t.pageX+l-s}).on("mouseup",function(){n(this).removeClass("draggable").css("z-index",e)})}),o.preventDefault()}).on("mouseup",function(){""===t.handle?n(this).removeClass("draggable"):n(this).removeClass("active-handle").parent().removeClass("draggable")})}}.call(this,jQuery);