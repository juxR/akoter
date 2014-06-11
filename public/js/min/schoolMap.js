(function(o){"use strict";var e,n,a,t,l,i=new google.maps.LatLng(50.833,4.333),s=[],g="img/",c=o(".searchMap"),r=g+"map/markers/school.png",d=g+"newSchool.png",p=o("#latlng"),m=new google.maps.Geocoder;o(function(){});var u=function(){M(),f(),c.on("click",function(o){o.preventDefault(),v("geocoder")})},v=function(n,a){if("geocoder"===n){var t=o("#address").val(),i=o("#region").find("option:selected").text(),s=o("#locality").find("option:selected").text();console.log(i),m.geocode({address:t+" "+i+" "+s+" Belgium",region:"be"},function(o){console.log(o);var e=o[0].geometry.location;console.log(e),w(e);var n=e.lat(),a=e.lng();l=new google.maps.LatLng(n,a),p.val(" "),p.val(n+","+a)})}else p.val(" "),console.log(a),p.val(a.lat()+","+a.lng()),e.panTo(a)},f=function(){o.ajax({url:"/ajax/getSchools",type:"get",dataType:"json",success:function(o){t=o,L(o)}})},w=function(o){a=new google.maps.Marker({position:o,map:e,icon:d,animation:google.maps.Animation.DROP,draggable:!0}),google.maps.event.addListener(a,"dragend",function(o){v("latlng",new google.maps.LatLng(o.latLng.lat(),o.latLng.lng()))}),google.maps.event.addListener(a,"click",function(){e.setZoom(17),e.panTo(this.getPosition())})},h=function(o,a,l){n=new google.maps.Marker({position:o,map:e,id:a,order:l,icon:r}),s.push(n),google.maps.event.addListener(n,"click",function(){e.setZoom(17),e.panTo(this.getPosition());var o=t[this.id],a='<div class="school"><h3 aria-level="3" role="heading" class="titleSchool">'+o.name+'</h3><span class="address">'+o.street+", "+o.locality.postal+" ("+o.locality.name+" "+o.region.translation[0].value+')</span><div class="website">'+o.web+"</div></div>",l=new google.maps.InfoWindow({content:a});l.open(e,n)})},L=function(o){for(var e=0;e<o.length;e++){var n=y(o[e].latlng,"lat"),a=y(o[e].latlng,"lng");h(new google.maps.LatLng(n,a),o[e].id,e)}},y=function(o,e){return"lat"===e?o.split(",")[0]:"lng"===e?o.split(",")[1]:void 0},M=function(){e=new google.maps.Map(document.getElementById("sMap"),{center:i,zoom:7,disableDefaultUI:!1,streetViewControl:!1,mapTypeId:google.maps.MapTypeId.ROADMAP})};google.maps.event.addDomListener(window,"load",u)}).call(this,jQuery);