jQuery(document).ready(function($){var e="img."!==cssTarget?cssTarget:"img.style-svg";$(e).each(function(e){var t=jQuery(this),r=t.attr("id"),a=t.attr("class"),d=t.attr("src");d.endsWith("svg")&&$.get(d,function(d){var s=$(d).find("svg"),i=s.attr("id");"undefined"==typeof r?"undefined"==typeof i?(r="svg-replaced-"+e,s=s.attr("id",r)):r=i:s=s.attr("id",r),"undefined"!=typeof a&&(s=s.attr("class",a+" replaced-svg svg-replaced-"+e)),s=s.removeAttr("xmlns:a"),t.replaceWith(s),$(document).trigger("svg.loaded",[r])},"xml")})});