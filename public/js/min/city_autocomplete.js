(function(e){var n=e(".autocomplete");e.each(n,function(a){var o=new google.maps.places.Autocomplete(n[a],{types:["geocode"],componentRestrictions:{country:"be"}});console.log(o),google.maps.event.addListener(o,"place_changed",function(){var t=o.getPlace();for(var l in t.address_components)if("administrative_area_level_2"==t.address_components[l].types[0])var s=t.address_components[l].long_name;else if("locality"==t.address_components[l].types[0])var d=t.address_components[l].long_name;else if("route"==t.address_components[l].types[0])var i=t.address_components[l].long_name;else if("postal_code"==t.address_components[l].types[0])var p=t.address_components[l].long_name;e(n[a]).attr("name").indexOf("agence[")>-1?(e('input[name="agence[region]"]').val(s).addClass("fill"),e('input[name="agence[locality]"]').val(d).addClass("fill"),e('input[name="agence[postal]"]').val(p).addClass("fill"),e('input[name="agence[address]"]').val(i).addClass("fill"),t&&window.setTimeout(function(){e('input[name="agence[address]"]').val(i)},50)):(""!=s&&"undefined"!=typeof s&&"null"!=s&&e('input[name="region"]').val(s).addClass("fill"),""!=d&&"undefined"!=typeof d&&"null"!=d&&e('input[name="locality"]').val(d).addClass("fill"),""!=p&&"undefined"!=typeof p&&"null"!=p&&e('input[name="postal"]').val(p).addClass("fill"),""!=i&&"undefined"!=typeof i&&"null"!=i&&e('input[name="address"]').val(i).addClass("fill"),t&&(""!=i&&"undefined"!=typeof i&&window.setTimeout(function(){e('input[name="address"]').val(i)},20),""!=i&&"undefined"!=typeof d&&window.setTimeout(function(){e('input[name="locality"]').val(d)},20),""!=i&&"undefined"!=typeof s&&window.setTimeout(function(){e('input[name="region"]').val(s)},20),""!=i&&"undefined"!=typeof p&&window.setTimeout(function(){e('input[name="postal"]').val(p)},20)))})})}).call(this,jQuery);