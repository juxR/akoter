(function(t){var e=!1,o=(t("#query"),t(".kots #container")),n=(t(".kot:last").offset(),400),i="?page=",s=1,a=t(window),c=(t(".loadmore"),t("#filterKot")),l=t("#locations"),r=t("#filterKot .clearAll"),f=(t("#filterKot input, #filterKot select"),t(".pagination")),p=t(".sortmenu"),d=t(".sortmenu .searchBar"),u=t(".formActions"),h=t(".alertbox"),g=t(".classify"),v=t(".listing"),m=l.find(".map"),k=t(".filterType .filterItem"),b=t(".selectCharge"),r=t(".clearAll"),y=t(".pannel"),x=t(".toogleMap"),w=t(".toogleList"),C=f.find("li").length-2;t(function(){b.on("change",L),t("html").on("click",T),f.attr("aria-hidden",!1).hide(),g.on("change",P),r.on("click",F),t(window).scroll(function(){j(),O()}),j(),u.on("click","a.goOn",I),u.on("click","a.submit",function(t){t.preventDefault(),c.submit()}),h.on("click",function(t){t.stopPropagation()}),k.on("click","a",K),x.on("click",A),w.on("click",D)});var D=function(e){e.preventDefault();var o=t(this);m.fadeOut("fast",function(){v.fadeIn(),y.find("a").removeClass("active"),o.addClass("active")})},A=function(e){e.preventDefault();var o=t(this);v.fadeOut("fast",function(){m.fadeIn(),y.find("a").removeClass("active"),o.addClass("active")})},P=function(){c.submit()},T=function(t){t.stopPropagation(),h.hide()},I=function(e){e.preventDefault(),e.stopPropagation(),t(this).parents(".alertbox").hide()},K=function(e){e.preventDefault(),e.stopPropagation(),h.hide(),t(this).siblings(".alertbox").toggle()},O=function(){a.scrollTop()>=80?(p.css({position:"fixed",height:70,top:0}),d.css("display","none"),m.css({"padding-top":70}),v.css({"padding-top":94}),r.css("display","none"),y.css("display","none")):(p.css({position:"absolute",height:112,top:80}),d.css("display","block"),m.css({"padding-top":94}),v.css({"padding-top":136}),r.css("display","inline-block"),y.css("display","block"))},F=function(e){e.preventDefault(),t(":input",c).not(":button, :submit, :reset, :hidden").val("").removeAttr("checked").removeAttr("selected"),c[0].reset()},L=function(){var e=t("#input-chargePrice");0==t(this).val()?e.parent().css("display","none"):e.parent().css("display","block")},j=function(){if(t(".kot:last").offset().top-2*n-a.height()<=a.scrollTop()&&0==e&&(e=!0,C>s)){s++;var l=c.serialize();t.get(i+s+"&"+l,function(i){var s=t(t(i).find("#container").html());o.append(s).masonry("appended",s,!0),offset=t(".kot:last").offset(),setTimeout(function(){e=!1,t(".kot:last").offset().top-2*n-a.height()<=a.scrollTop()&&0==e&&j()},3e3)})}};t.fn.clearForm=function(){return this.each(function(){var e=this.type,o=this.tagName.toLowerCase();return"form"==o?t(":input",this).clearForm():void("text"==e||"password"==e||"textarea"==o?this.value="":"checkbox"==e||"radio"==e?this.checked=!1:"select"==o&&(this.selectedIndex=-1))})}}).call(this,jQuery);