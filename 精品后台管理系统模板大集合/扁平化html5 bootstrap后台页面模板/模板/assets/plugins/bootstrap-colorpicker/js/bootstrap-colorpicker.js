/*!
 * Bootstrap Colorpicker
 * (c) 2012 Stefan Petre
 * http://mjaalnir.github.io/bootstrap-colorpicker/
 * http://www.apache.org/licenses/LICENSE-2.0.txt
 */(function(d){var k=function(a){this.value={h:1,s:1,b:1,a:1};this.setColor(a)};k.prototype={constructor:k,setColor:function(a){a=a.toLowerCase();var b=this;d.each(e.stringParsers,function(c,d){var f=d.re.exec(a),f=f&&d.parse(f),g=d.space||"rgba";return f?(b.value="hsla"===g?e.RGBtoHSB.apply(null,e.HSLtoRGB.apply(null,f)):e.RGBtoHSB.apply(null,f),!1):!0})},setHue:function(a){this.value.h=1-a},setSaturation:function(a){this.value.s=a},setLightness:function(a){this.value.b=1-a},setAlpha:function(a){this.value.a=
parseInt(100*(1-a),10)/100},toRGB:function(a,b,c,d){a||(a=this.value.h,b=this.value.s,c=this.value.b);var f,g,e;a=360*a%360/60;e=c*b;b=e*(1-Math.abs(a%2-1));c=f=g=c-e;a=~~a;c+=[e,b,0,0,b,e][a];f+=[b,e,e,b,0,0][a];g+=[0,0,b,e,e,b][a];return{r:Math.round(255*c),g:Math.round(255*f),b:Math.round(255*g),a:d||this.value.a}},toHex:function(a,b,c,d){a=this.toRGB(a,b,c,d);return"#"+(16777216|parseInt(a.r)<<16|parseInt(a.g)<<8|parseInt(a.b)).toString(16).substr(1)},toHSL:function(a,b,c,d){a||(a=this.value.h,
b=this.value.s,c=this.value.b);var f=(2-b)*c;b*=c;b=0<f&&1>=f?b/f:b/(2-f);1<b&&(b=1);return{h:a,s:b,l:f/2,a:d||this.value.a}}};var l=0,h=function(a,b){l++;this.element=d(a).attr("data-colorpicker-guid",l);var c=b.format||this.element.data("color-format")||"hex";this.format=e.translateFormats[c];this.isInput=this.element.is("input");this.component=this.element.is(".colorpicker-component")?this.element.find(".add-on, .input-group-addon"):!1;this.picker=d(e.template).attr("data-colorpicker-guid",l).appendTo("body").on("mousedown.colorpicker",
d.proxy(this.mousedown,this));if(this.isInput)this.element.on({"focus.colorpicker":d.proxy(this.show,this),"keyup.colorpicker":d.proxy(this.update,this)});else if(this.component)this.component.on({"click.colorpicker":d.proxy(this.show,this)});else this.element.on({"click.colorpicker":d.proxy(this.show,this)});if("rgba"===c||"hsla"===c)this.picker.addClass("alpha"),this.alpha=this.picker.find(".colorpicker-alpha")[0].style;this.component?(this.picker.find(".colorpicker-color").hide(),this.preview=
this.element.find("i")[0].style):this.preview=this.picker.find("div:last")[0].style;this.base=this.picker.find("div:first")[0].style;this.update();d(d.proxy(function(){this.element.trigger("create",[this])},this))};h.prototype={constructor:h,show:function(a){this.picker.show();this.height=this.component?this.component.outerHeight():this.element.outerHeight();this.place();d(window).on("resize.colorpicker",d.proxy(this.place,this));!this.isInput&&a&&(a.stopPropagation(),a.preventDefault());d(document).on({"mousedown.colorpicker":d.proxy(this.hide,
this)});this.element.trigger({type:"showPicker",color:this.color})},update:function(){var a=this.isInput?this.element.prop("value"):this.element.data("color");if("undefined"===typeof a||null===a)a="#ffffff";this.color=new k(a);this.picker.find("i").eq(0).css({left:100*this.color.value.s,top:100-100*this.color.value.b}).end().eq(1).css("top",100*(1-this.color.value.h)).end().eq(2).css("top",100*(1-this.color.value.a));this.previewColor()},hide:function(){this.picker.hide();d(window).off("resize",this.place);
d(document).off({mousedown:this.hide});this.isInput?""!==this.element.val()&&this.element.prop("value",this.format.call(this)).trigger("change"):(this.component&&""!==this.element.find("input").val()&&this.element.find("input").prop("value",this.format.call(this)).trigger("change"),this.element.data("color",this.format.call(this)));this.element.trigger({type:"hidePicker",color:this.color})},place:function(){var a=this.component?this.component.offset():this.element.offset();this.picker.css({top:a.top+
this.height,left:a.left})},destroy:function(){d(".colorpicker[data-colorpicker-guid="+this.element.attr("data-colorpicker-guid")+"]").remove();this.element.removeData("colorpicker").removeAttr("data-colorpicker-guid").off(".colorpicker");!1!==this.component&&this.component.off(".colorpicker");this.element.trigger("destroy",[this])},setValue:function(a){this.isInput?this.element.prop("value",a):(this.element.find("input").val(a),this.element.data("color",a));this.update();this.element.trigger({type:"changeColor",
color:this.color})},previewColor:function(){try{this.preview.backgroundColor=this.format.call(this)}catch(a){this.preview.backgroundColor=this.color.toHex()}this.base.backgroundColor=this.color.toHex(this.color.value.h,1,1,1);this.alpha&&(this.alpha.backgroundColor=this.color.toHex())},pointer:null,slider:null,mousedown:function(a){a.stopPropagation();a.preventDefault();var b=d(a.target).closest("div");if(!b.is(".colorpicker")){if(b.is(".colorpicker-saturation"))this.slider=d.extend({},e.sliders.saturation);
else if(b.is(".colorpicker-hue"))this.slider=d.extend({},e.sliders.hue);else if(b.is(".colorpicker-alpha"))this.slider=d.extend({},e.sliders.alpha);else return!1;var c=b.offset();this.slider.knob=b.find("i")[0].style;this.slider.left=a.pageX-c.left;this.slider.top=a.pageY-c.top;this.pointer={left:a.pageX,top:a.pageY};d(document).on({"mousemove.colorpicker":d.proxy(this.mousemove,this),"mouseup.colorpicker":d.proxy(this.mouseup,this)}).trigger("mousemove")}return!1},mousemove:function(a){a.stopPropagation();
a.preventDefault();var b=Math.max(0,Math.min(this.slider.maxLeft,this.slider.left+((a.pageX||this.pointer.left)-this.pointer.left)));a=Math.max(0,Math.min(this.slider.maxTop,this.slider.top+((a.pageY||this.pointer.top)-this.pointer.top)));this.slider.knob.left=b+"px";this.slider.knob.top=a+"px";this.slider.callLeft&&this.color[this.slider.callLeft].call(this.color,b/100);this.slider.callTop&&this.color[this.slider.callTop].call(this.color,a/100);this.previewColor();if(this.isInput)try{this.element.val(this.format.call(this)).trigger("change")}catch(c){this.element.val(this.color.toHex()).trigger("change")}else try{this.element.find("input").val(this.format.call(this)).trigger("change")}catch(d){this.element.find("input").val(this.color.toHex()).trigger("change")}this.element.trigger({type:"changeColor",
color:this.color});return!1},mouseup:function(a){a.stopPropagation();a.preventDefault();d(document).off({mousemove:this.mousemove,mouseup:this.mouseup});return!1}};d.fn.colorpicker=function(a,b){return this.each(function(){var c=d(this),e=c.data("colorpicker"),f="object"===typeof a&&a;if(!e)"destroy"!==a&&c.data("colorpicker",new h(this,d.extend({},d.fn.colorpicker.defaults,f)));else if("string"===typeof a)e[a](b)})};d.fn.colorpicker.defaults={};d.fn.colorpicker.Constructor=h;var e={translateFormats:{rgb:function(){var a=
this.color.toRGB();return"rgb("+a.r+","+a.g+","+a.b+")"},rgba:function(){var a=this.color.toRGB();return"rgba("+a.r+","+a.g+","+a.b+","+a.a+")"},hsl:function(){var a=this.color.toHSL();return"hsl("+Math.round(360*a.h)+","+Math.round(100*a.s)+"%,"+Math.round(100*a.l)+"%)"},hsla:function(){var a=this.color.toHSL();return"hsla("+Math.round(360*a.h)+","+Math.round(100*a.s)+"%,"+Math.round(100*a.l)+"%,"+a.a+")"},hex:function(){return this.color.toHex()}},sliders:{saturation:{maxLeft:100,maxTop:100,callLeft:"setSaturation",
callTop:"setLightness"},hue:{maxLeft:0,maxTop:100,callLeft:!1,callTop:"setHue"},alpha:{maxLeft:0,maxTop:100,callLeft:!1,callTop:"setAlpha"}},RGBtoHSB:function(a,b,c,d){a/=255;b/=255;c/=255;var f,e;f=Math.max(a,b,c);e=f-Math.min(a,b,c);a=60*(((0===e?0:f===a?(b-c)/e:f===b?(c-a)/e+2:(a-b)/e+4)+360)%6)/360;return{h:a||1,s:0===e?0:e/f,b:f,a:d||1}},HueToRGB:function(a,b,c){0>c?c+=1:1<c&&(c-=1);return 1>6*c?a+6*(b-a)*c:1>2*c?b:2>3*c?a+6*(b-a)*(2/3-c):a},HSLtoRGB:function(a,b,c,d){0>b&&(b=0);b=0.5>=c?c*(1+
b):c+b-c*b;var f=2*c-b,g=a-1/3;c=Math.round(255*e.HueToRGB(f,b,a+1/3));a=Math.round(255*e.HueToRGB(f,b,a));b=Math.round(255*e.HueToRGB(f,b,g));return[c,a,b,d||1]},stringParsers:[{re:/rgba?\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*(?:,\s*(\d+(?:\.\d+)?)\s*)?\)/,parse:function(a){return[a[1],a[2],a[3],a[4]]}},{re:/rgba?\(\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d+(?:\.\d+)?)\s*)?\)/,parse:function(a){return[2.55*a[1],2.55*a[2],2.55*a[3],a[4]]}},{re:/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/,
parse:function(a){return[parseInt(a[1],16),parseInt(a[2],16),parseInt(a[3],16)]}},{re:/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/,parse:function(a){return[parseInt(a[1]+a[1],16),parseInt(a[2]+a[2],16),parseInt(a[3]+a[3],16)]}},{re:/hsla?\(\s*(\d+(?:\.\d+)?)\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d+(?:\.\d+)?)\s*)?\)/,space:"hsla",parse:function(a){return[a[1]/360,a[2]/100,a[3]/100,a[4]]}}],template:'<div class="colorpicker dropdown-menu"><div class="colorpicker-saturation"><i><b></b></i></div><div class="colorpicker-hue"><i></i></div><div class="colorpicker-alpha"><i></i></div><div class="colorpicker-color"><div /></div></div>'}})(window.jQuery);