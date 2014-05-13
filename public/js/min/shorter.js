window.Modernizr=function(t,e,i){function n(t){_.cssText=t}function s(t,e){return typeof t===e}function r(t,e){return!!~(""+t).indexOf(e)}function o(t,e){for(var n in t){var s=t[n];if(!r(s,"-")&&_[s]!==i)return"pfx"==e?s:!0}return!1}function a(t,e,n){for(var r in t){var o=e[t[r]];if(o!==i)return n===!1?t[r]:s(o,"function")?o.bind(n||e):o}return!1}function l(t,e,i){var n=t.charAt(0).toUpperCase()+t.slice(1),r=(t+" "+T.join(n+" ")+n).split(" ");return s(e,"string")||s(e,"undefined")?o(r,e):(r=(t+" "+C.join(n+" ")+n).split(" "),a(r,e,i))}var u,f,d,c="2.6.2",h={},p=!0,m=e.documentElement,y="modernizr",v=e.createElement(y),_=v.style,g=({}.toString," -webkit- -moz- -o- -ms- ".split(" ")),$="Webkit Moz O ms",T=$.split(" "),C=$.toLowerCase().split(" "),b={},E=[],z=E.slice,w=function(t,i,n,s){var r,o,a,l,u=e.createElement("div"),f=e.body,d=f||e.createElement("body");if(parseInt(n,10))for(;n--;)a=e.createElement("div"),a.id=s?s[n]:y+(n+1),u.appendChild(a);return r=["&#173;",'<style id="s',y,'">',t,"</style>"].join(""),u.id=y,(f?u:d).innerHTML+=r,d.appendChild(u),f||(d.style.background="",d.style.overflow="hidden",l=m.style.overflow,m.style.overflow="hidden",m.appendChild(d)),o=i(u,t),f?u.parentNode.removeChild(u):(d.parentNode.removeChild(d),m.style.overflow=l),!!o},S={}.hasOwnProperty;d=s(S,"undefined")||s(S.call,"undefined")?function(t,e){return e in t&&s(t.constructor.prototype[e],"undefined")}:function(t,e){return S.call(t,e)},Function.prototype.bind||(Function.prototype.bind=function(t){var e=this;if("function"!=typeof e)throw new TypeError;var i=z.call(arguments,1),n=function(){if(this instanceof n){var s=function(){};s.prototype=e.prototype;var r=new s,o=e.apply(r,i.concat(z.call(arguments)));return Object(o)===o?o:r}return e.apply(t,i.concat(z.call(arguments)))};return n}),b.csstransforms=function(){return!!l("transform")},b.csstransforms3d=function(){var t=!!l("perspective");return t&&"webkitPerspective"in m.style&&w("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(e){t=9===e.offsetLeft&&3===e.offsetHeight}),t},b.csstransitions=function(){return l("transition")};for(var x in b)d(b,x)&&(f=x.toLowerCase(),h[f]=b[x](),E.push((h[f]?"":"no-")+f));return h.addTest=function(t,e){if("object"==typeof t)for(var n in t)d(t,n)&&h.addTest(n,t[n]);else{if(t=t.toLowerCase(),h[t]!==i)return h;e="function"==typeof e?e():e,"undefined"!=typeof p&&p&&(m.className+=" "+(e?"":"no-")+t),h[t]=e}return h},n(""),v=u=null,h._version=c,h._prefixes=g,h._domPrefixes=C,h._cssomPrefixes=T,h.testProp=function(t){return o([t])},h.testAllProps=l,h.testStyles=w,h.prefixed=function(t,e,i){return e?l(t,e,i):l(t,"pfx")},m.className=m.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(p?" js "+E.join(" "):""),h}(this,this.document),function(t,e){var i,n=t.jQuery||t.Cowboy||(t.Cowboy={});n.throttle=i=function(t,i,s,r){function o(){function n(){l=+new Date,s.apply(u,d)}function o(){a=e}var u=this,f=+new Date-l,d=arguments;r&&!a&&n(),a&&clearTimeout(a),r===e&&f>t?n():i!==!0&&(a=setTimeout(r?o:n,r===e?t-f:t))}var a,l=0;return"boolean"!=typeof i&&(r=s,s=i,i=e),n.guid&&(o.guid=s.guid=s.guid||n.guid++),o},n.debounce=function(t,n,s){return s===e?i(t,n,!1):i(t,s,n!==!1)}}(this),!function(t,e,i){"use strict";function n(t){return t?t.replace(/([A-Z])/g,function(t,e){return"-"+e.toLowerCase()}).replace(/^ms-/,"-ms-"):""}var s=0,r=e.prefixed("transition"),o=e.prefixed("transitionDelay"),a=e.prefixed("transitionDuration"),l={WebkitTransition:"webkitTransitionEnd",transition:"transitionend"}[r],u=e.prefixed("transform"),f=n(u),d=e.csstransforms&&e.csstransitions,c=e.csstransforms3d,h="shuffle",p="all",m="groups",y=function(e,i){i=i||{},t.extend(this,y.options,i,y.settings),this.$el=t(e),this.$window=t(window),this.unique="shuffle_"+s++,this._fire(y.EventType.LOADING),this._init(),setTimeout(t.proxy(this._fire,this,y.EventType.DONE),16)};y.EventType={LOADING:"loading",DONE:"done",SHRINK:"shrink",SHRUNK:"shrunk",FILTER:"filter",FILTERED:"filtered",SORTED:"sorted",LAYOUT:"layout",REMOVED:"removed"},y.prototype={_init:function(){var e,i,n=this,s=t.proxy(n._onResize,n),o=n.throttle?n.throttle(n.throttleTime,s):s,a=n.initialSort?n.initialSort:null;n._setVars(),n._resetCols(),n._addClasses(),n._initItems(),n.$window.on("resize."+h+"."+n.unique,o),e=n.$el.css(["paddingLeft","paddingRight","position"]),i=n._getOuterWidth(n.$el[0]),"static"===e.position&&(n.$el[0].style.position="relative"),n.offset={left:parseInt(e.paddingLeft,10)||0,top:parseInt(e.paddingTop,10)||0},n._setColumns(parseInt(i,10)),n.shuffle(n.group,a),n.supported&&setTimeout(function(){n._setTransitions(),n.$el[0].style[r]="height "+n.speed+"ms "+n.easing},0)},_addClasses:function(){this.$el.addClass(h),this.$items.addClass("shuffle-item filtered")},_setVars:function(){var e=this,i=e.columnWidth;e.$items=e._getItems(),e.isFluid=i&&t.isFunction(e.columnWidth),0===i&&null!==e.sizer&&(i=e.sizer),"string"==typeof i?e.$sizer=e.$el.find(i):i&&i.nodeType&&1===i.nodeType?e.$sizer=t(i):i&&i.jquery&&(e.$sizer=i),e.$sizer&&e.$sizer.length&&(e.useSizer=!0,e.sizer=e.$sizer[0])},_filter:function(e,n){var s=this,r=n!==i,o=r?n:s.$items,a=t();return e=e||s.lastFilter,s._fire(y.EventType.FILTER),t.isFunction(e)?o.each(function(){var i=t(this);e.call(i[0],i,s)&&(a=a.add(i))}):(s.group=e,e===p?a=o:o.each(function(){var i=t(this),n=i.data(m),r=s.delimeter&&!t.isArray(n)?n.split(s.delimeter):n;t.inArray(e,r)>-1&&(a=a.add(i))})),s._toggleFilterClasses(o,a),o=null,n=null,a},_toggleFilterClasses:function(e,i){var n="concealed",s="filtered";e.filter(i).each(function(){var e=t(this);e.hasClass(n)&&e.removeClass(n),e.hasClass(s)||e.addClass(s)}),e.not(i).each(function(){var e=t(this);e.hasClass(n)||e.addClass(n),e.hasClass(s)&&e.removeClass(s)})},_initItems:function(t){return t=t||this.$items,t.css(this.itemCss)},_updateItemCount:function(){return this.visibleItems=this.$items.filter(".filtered").length,this},_setTransition:function(t){var e=this;return t.style[r]=f+" "+e.speed+"ms "+e.easing+", opacity "+e.speed+"ms "+e.easing,t},_setTransitions:function(t){var e=this;return t=t||e.$items,t.each(function(){e._setTransition(this)}),e},_setSequentialDelay:function(e){var i=this;i.supported&&t.each(e,function(e){this.style[o]="0ms,"+(e+1)*i.sequentialFadeDelay+"ms",t(this).one(l,function(){this.style[o]="0ms"})})},_getItems:function(){return this.$el.children(this.itemSelector)},_getPreciseDimension:function(e,i){var n;return n=window.getComputedStyle?window.getComputedStyle(e,null)[i]:t(e).css(i),parseFloat(n)},_getOuterWidth:function(t,e){var i=t.offsetWidth;if(e){var n=Math.round(parseFloat(t.style.marginLeft))||0,s=Math.round(parseFloat(t.style.marginRight))||0;i+=n+s}return i},_getColumnSize:function(t,e){var i;return i=this.isFluid?this.columnWidth(e):this.useSizer?this._getPreciseDimension(this.sizer,"width"):this.columnWidth?this.columnWidth:this.$items.length>0?this._getOuterWidth(this.$items[0],!0):e,0===i&&(i=e),i+t},_getGutterSize:function(e){var i;return i=t.isFunction(this.gutterWidth)?this.gutterWidth(e):this.useSizer?this._getPreciseDimension(this.sizer,"marginLeft"):this.gutterWidth},_setColumns:function(t){var e=t||this._getOuterWidth(this.$el[0]),i=this._getGutterSize(e),n=this._getColumnSize(i,e),s=(e+i)/n;Math.abs(Math.round(s)-s)<.03&&(s=Math.round(s)),this.cols=Math.max(Math.floor(s),1),this.containerWidth=e,this.colWidth=n},_setContainerSize:function(){this.$el.css("height",Math.max.apply(Math,this.colYs))},_fire:function(t,e){this.$el.trigger(t+"."+h,e&&e.length?e:[this])},_layout:function(e,i,n,s){var r=this;i=i||r.filterEnd,r.layoutTransitionEnded=!1,t.each(e,function(e,o){var a=t(o),l=r._getOuterWidth(o,!0),u=l/r.colWidth;Math.abs(Math.round(u)-u)<.03&&(u=Math.round(u));var f=Math.min(Math.ceil(u),r.cols);if(1===f)r._placeItem(a,r.colYs,i,n,s);else{var d,c,h=r.cols+1-f,p=[];for(c=0;h>c;c++)d=r.colYs.slice(c,c+f),p[c]=Math.max.apply(Math,d);r._placeItem(a,p,i,n,s)}}),r._processStyleQueue(),r._setContainerSize()},_resetCols:function(){var t=this.cols;for(this.colYs=[];t--;)this.colYs.push(0)},_reLayout:function(t,e){var i=this;t=t||i.filterEnd,i._resetCols(),i.keepSorted&&i.lastSort?i.sort(i.lastSort,!0,e):i._layout(i.$items.filter(".filtered").get(),i.filterEnd,e)},_placeItem:function(t,e,i,n,s){for(var r=this,o=Math.min.apply(Math,e),a=0,l=0,u=e.length;u>l;l++)if(e[l]>=o-r.buffer&&e[l]<=o+r.buffer){a=l;break}var f=r.colWidth*a,d=o;f=Math.round(f+r.offset.left),d=Math.round(d+r.offset.top),t.data({x:f,y:d});var c=o+t.outerHeight(!0),h=r.cols+1-u;for(l=0;h>l;l++)r.colYs[a+l]=c;var p={from:"layout",$this:t,x:f,y:d,scale:1};n?p.skipTransition=!0:(p.opacity=1,p.callback=i),s&&(p.opacity=0),r.styleQueue.push(p)},_shrink:function(e,i){var n=this,s=e||n.$items.filter(".concealed"),r={},o=i||n.shrinkEnd;s.length&&(n._fire(y.EventType.SHRINK),n.shrinkTransitionEnded=!1,s.each(function(){var e=t(this),i=e.data();r={from:"shrink",$this:e,x:i.x,y:i.y,scale:.001,opacity:0,callback:o},n.styleQueue.push(r)}))},_onResize:function(){if(this.enabled&&!this.destroyed){var t=this._getOuterWidth(this.$el[0]);t!==this.containerWidth&&this.resized()}},transition:function(e){var n,s=this,r=function(){s.layoutTransitionEnded||"layout"!==e.from?s.shrinkTransitionEnded||"shrink"!==e.from||(e.callback.call(s),s.shrinkTransitionEnded=!0):(s._fire(y.EventType.LAYOUT),e.callback.call(s),s.layoutTransitionEnded=!0)};if(e.callback=e.callback||t.noop,s.supported)e.scale===i&&(e.scale=1),n=c?"translate3d("+e.x+"px, "+e.y+"px, 0) scale3d("+e.scale+", "+e.scale+", 1)":"translate("+e.x+"px, "+e.y+"px) scale("+e.scale+", "+e.scale+")",e.x!==i&&e.$this.css(u,n),e.opacity!==i&&e.$this.css("opacity",e.opacity),e.$this.one(l,r);else{var o={left:e.x,top:e.y,opacity:e.opacity};e.$this.stop(!0).animate(o,s.speed,"swing",r)}},_processStyleQueue:function(){var e=this,i=e.styleQueue;t.each(i,function(t,i){i.skipTransition?e._skipTransition(i.$this[0],function(){e.transition(i)}):e.transition(i)}),e.styleQueue.length=0},shrinkEnd:function(){this._fire(y.EventType.SHRUNK)},filterEnd:function(){this._fire(y.EventType.FILTERED)},sortEnd:function(){this._fire(y.EventType.SORTED)},_skipTransition:function(e,i,n){var s,r=e.style[a];e.style[a]="0ms",t.isFunction(i)?i():e.style[i]=n,s=e.offsetWidth,e.style[a]=r},_addItems:function(t,e,n){var s,r,o=this;o.supported||(e=!1),t.addClass("shuffle-item"),o._initItems(t),o._setTransitions(t),o.$items=o._getItems(),t.css("opacity",0),s=o._filter(i,t),r=s.get(),o._updateItemCount(),e?(o._layout(r,null,!0,!0),n&&o._setSequentialDelay(s),o._revealAppended(s)):o._layout(r)},_revealAppended:function(e){var i=this;setTimeout(function(){e.each(function(e,n){i.transition({from:"reveal",$this:t(n),opacity:1})})},i.revealAppendedDelay)},shuffle:function(t,e){var i=this;i.enabled&&(t||(t=p),i._filter(t),i.lastFilter=t,i._updateItemCount(),i._resetCols(),i._shrink(),e&&(i.lastSort=e),i._reLayout())},sort:function(t,e,i){var n=this,s=n.$items.filter(".filtered").sorted(t);e||n._resetCols(),n._layout(s,function(){e&&n.filterEnd(),n.sortEnd()},i),n.lastSort=t},resized:function(t){this.enabled&&(t||this._setColumns(),this._reLayout())},layout:function(){this.update(!0)},update:function(t){this.resized(t)},appended:function(t,e,i){e=e===!1?!1:!0,i=i===!1?!1:!0,this._addItems(t,e,i)},disable:function(){this.enabled=!1},enable:function(t){this.enabled=!0,t!==!1&&this.update()},remove:function(t){if(t.length&&t.jquery){var e=this;return e._shrink(t,function(){var e=this;t.remove(),setTimeout(function(){e.$items=e._getItems(),e.layout(),e._updateItemCount(),e._fire(y.EventType.REMOVED,[t,e]),t=null},0)}),e._processStyleQueue(),e}},destroy:function(){var t=this;t.$window.off("."+t.unique),t.$el.removeClass(h).removeAttr("style").removeData(h),t.$items.removeAttr("style").removeClass("concealed filtered shuffle-item"),t.$window=null,t.$items=null,t.$el=null,t.$sizer=null,t.sizer=null,t.destroyed=!0}},y.options={group:p,speed:250,easing:"ease-out",itemSelector:"",sizer:null,gutterWidth:0,columnWidth:0,delimeter:null,buffer:0,initialSort:null,throttle:t.throttle||null,throttleTime:300,sequentialFadeDelay:150,supported:d},y.settings={$sizer:null,useSizer:!1,itemCss:{position:"absolute",top:0,left:0},offset:{top:0,left:0},revealAppendedDelay:300,keepSorted:!0,enabled:!0,destroyed:!1,styleQueue:[]},t.fn.shuffle=function(e){var i=Array.prototype.slice.call(arguments,1);return this.each(function(){var n=t(this),s=n.data(h);s||(s=new y(n,e),n.data(h,s)),"string"==typeof e&&s[e]&&s[e].apply(s,i)})},t.fn.sorted=function(e){var n=t.extend({},t.fn.sorted.defaults,e),s=this.get(),r=!1;return s.length?n.randomize?t.fn.sorted.randomize(s):(n.by!==t.noop&&null!==n.by&&n.by!==i&&s.sort(function(e,s){if(r)return 0;var o=n.by(t(e)),a=n.by(t(s));return o===i&&a===i?(r=!0,0):"sortFirst"===o||"sortLast"===a?-1:"sortLast"===o||"sortFirst"===a?1:a>o?-1:o>a?1:0}),r?this.get():(n.reverse&&s.reverse(),s)):[]},t.fn.sorted.defaults={reverse:!1,by:null,randomize:!1},t.fn.sorted.randomize=function(t){var e,i,n=t.length;if(!n)return t;for(;--n;)i=Math.floor(Math.random()*(n+1)),e=t[i],t[i]=t[n],t[n]=e;return t}}(jQuery,Modernizr);