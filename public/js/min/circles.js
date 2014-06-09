!function(){var t=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(t){setTimeout(t,1e3/60)},e=window.Circles=function(t){if(this._el=document.getElementById(t.id),null!==this._el){this._radius=t.radius||10,this._duration=void 0===t.duration?500:t.duration,this._value=0,this._maxValue=t.maxValue||100,this._text=void 0===t.text?function(t){return this.htmlifyNumber(t)}:t.text,this._strokeWidth=t.width||10,this._colors=t.colors||["#EEE","#F00"],this._textContainer=this._wrapContainer=this._movingPath=this._svg=null,this._wrpClass=t.wrpClass||"circles-wrp",this._textClass=t.textClass||"circles-text";var e=Math.PI/180*270;this._start=-Math.PI/180*90,this._startPrecise=this._precise(this._start),this._circ=e-this._start,this._generate().update(t.value||0)}};e.prototype={VERSION:"0.0.5",_generate:function(){return this._svgSize=2*this._radius,this._radiusAdjusted=this._radius-this._strokeWidth/2,this._generateSvg()._generateText()._generateWrapper(),this._el.innerHTML="",this._el.appendChild(this._wrapContainer),this},_setPercentage:function(t){this._movingPath.setAttribute("d",this._calculatePath(t,!0)),this._textContainer.innerHTML=this._getText(this.getValueFromPercent(t))},_generateWrapper:function(){return this._wrapContainer=document.createElement("div"),this._wrapContainer.className=this._wrpClass,this._wrapContainer.style.position="relative",this._wrapContainer.style.display="inline-block",this._wrapContainer.appendChild(this._svg),this._wrapContainer.appendChild(this._textContainer),this},_generateText:function(){this._textContainer=document.createElement("div"),this._textContainer.className=this._textClass;var t,e={position:"absolute",top:0,left:0,textAlign:"center",width:"100%",fontSize:.7*this._radius+"px",height:this._svgSize+"px",lineHeight:this._svgSize+"px"};for(t in e)this._textContainer.style[t]=e[t];return this._textContainer.innerHTML=this._getText(0),this},_getText:function(t){return this._text?(void 0===t&&(t=this._value),t=parseFloat(t.toFixed(2)),"function"==typeof this._text?this._text.call(this,t):this._text):""},_generateSvg:function(){return this._svg=document.createElementNS("http://www.w3.org/2000/svg","svg"),this._svg.setAttribute("xmlns","http://www.w3.org/2000/svg"),this._svg.setAttribute("width",this._svgSize),this._svg.setAttribute("height",this._svgSize),this._generatePath(100,!1,this._colors[0])._generatePath(1,!0,this._colors[1]),this._movingPath=this._svg.getElementsByTagName("path")[1],this},_generatePath:function(t,e,i){var s=document.createElementNS("http://www.w3.org/2000/svg","path");return s.setAttribute("fill","transparent"),s.setAttribute("stroke",i),s.setAttribute("stroke-width",this._strokeWidth),s.setAttribute("d",this._calculatePath(t,e)),this._svg.appendChild(s),this},_calculatePath:function(t,e){var i=this._precise(this._start+t/100*this._circ);return this._arc(i,e)},_arc:function(t,e){var i=t-.001,s=t-this._startPrecise<Math.PI?0:1;return["M",this._radius+this._radiusAdjusted*Math.cos(this._startPrecise),this._radius+this._radiusAdjusted*Math.sin(this._startPrecise),"A",this._radiusAdjusted,this._radiusAdjusted,0,s,1,this._radius+this._radiusAdjusted*Math.cos(i),this._radius+this._radiusAdjusted*Math.sin(i),e?"":"Z"].join(" ")},_precise:function(t){return Math.round(1e3*t)/1e3},htmlifyNumber:function(t,e,i){return e=e||"circles-integer",i=i||"circles-decimals",t=(t+"").split("."),e='<span class="'+e+'">'+t[0]+"</span>",1<t.length&&(e+='.<span class="'+i+'">'+t[1].substring(0,2)+"</span>"),e},updateRadius:function(t){return this._radius=t,this._generate().update(!0)},updateWidth:function(t){return this._strokeWidth=t,this._generate().update(!0)},updateColors:function(t){this._colors=t;var e=this._svg.getElementsByTagName("path");return e[0].setAttribute("stroke",t[0]),e[1].setAttribute("stroke",t[1]),this},getPercent:function(){return 100*this._value/this._maxValue},getValueFromPercent:function(t){return this._maxValue*t/100},getValue:function(){return this._value},getMaxValue:function(){return this._maxValue},update:function(e,i){if(!0===e)return this._setPercentage(this.getPercent()),this;if(this._value==e||isNaN(e))return this;void 0===i&&(i=this._duration);var s,n,r,a,h=this,u=h.getPercent(),o=1;return this._value=Math.min(this._maxValue,Math.max(0,e)),i?(s=h.getPercent(),n=s>u,o+=s%1,r=Math.floor(Math.abs(s-u)/o),a=i/r,function _(e){if(u=n?u+o:u-o,n&&u>=s||!n&&s>=u)t(function(){h._setPercentage(s)});else{t(function(){h._setPercentage(u)});var i=Date.now();e=i-e,e>=a?_(i):setTimeout(function(){_(Date.now())},a-e)}}(Date.now()),this):(this._setPercentage(this.getPercent()),this)}},e.create=function(t){return new e(t)}}();