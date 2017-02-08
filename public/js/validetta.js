/*!
 * Validetta (http://lab.hasanaydogdu.com/validetta/)
 * Version 1.0.1 ( 16-08-2015 )
 * Licensed under MIT (https://github.com/hsnayd/validetta/blob/master/LICENCE)
 * Copyright 2013-2015 Hasan Aydoğdu - http://www.hasanaydogdu.com 
 */
!function(e){"use strict";var t={},r={},a=new RegExp(/^(minChecked|maxChecked|minSelected|maxSelected|minLength|maxLength|equalTo|different|regExp|remote|callback)\[(\w{1,15})\]/i),n=new RegExp(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/),i=new RegExp(/^[\-\+]?(\d+|\d+\.?\d+)$/),s={required:"This field is required. Please be sure to check.",email:"Your E-mail address appears to be invalid. Please be sure to check.",number:"You can enter only numbers in this field.",maxLength:"Maximum {count} characters allowed!",minLength:"Minimum {count} characters allowed!",maxChecked:"Maximum {count} options allowed. Please be sure to check.",minChecked:"Please select minimum {count} options.",maxSelected:"Maximum {count} selection allowed. Please be sure to check.",minSelected:"Minimum {count} selection allowed. Please be sure to check.",notEqual:"Fields do not match. Please be sure to check.",different:"Fields cannot be the same as each other",creditCard:"Invalid credit card number. Please be sure to check."},o={showErrorMessages:!0,display:"bubble",errorTemplateClass:"validetta-bubble",errorClass:"validetta-error",validClass:"validetta-valid",bubblePosition:"right",bubbleGapLeft:15,bubbleGapTop:0,realTime:!1,onValid:function(){},onError:function(){},validators:{}},l=function(e){return"string"==typeof e?e.replace(/^\s+|\s+$/g,""):e},d={required:function(e,t){switch(e.el.type){case"checkbox":return e.el.checked||s.required;case"radio":return this.radio.call(t,e.el)||s.required;case"select-multiple":return null!==e.val||s.required;default:return""!==e.val||s.required}},email:function(e){return n.test(e.val)||s.email},number:function(e){return i.test(e.val)||s.number},minLength:function(e){var t=e.val.length;return 0===t||t>=e.arg||s.minLength.replace("{count}",e.arg)},maxLength:function(e){return e.val.length<=e.arg||s.maxLength.replace("{count}",e.arg)},equalTo:function(e,t){return t.form.querySelector('input[name="'+e.arg+'"]').value===e.val||s.notEqual},different:function(e,t){return t.form.querySelector('input[name="'+e.arg+'"]').value!==e.val||s.different},creditCard:function(e){if(""===e.val)return!0;var t,r,a,n,i,o,l,d=0;if(t=new RegExp(/[^0-9]+/g),r=e.val.replace(t,""),l=r.length,16>l)return s.creditCard;for(i=0;l>i;i++)a=l-i,n=parseInt(r.substring(a-1,a),10),i%2===1?(o=2*n,o>9&&(o=1+(o-10))):o=n,d+=o;return d>0&&d%10===0?!0:s.creditCard},maxChecked:function(t,r){var a=e(r.form.querySelectorAll('input[type=checkbox][name="'+t.el.name+'"]'));if(0===a.index(t.el)){var n=a.filter(":checked").length;if(0!==n)return n<=t.arg||s.maxChecked.replace("{count}",t.arg)}},minChecked:function(t,r){var a=e(r.form.querySelectorAll('input[type=checkbox][name="'+t.el.name+'"]'));if(0===a.index(t.el)){var n=a.filter(":checked").length;return n>=t.arg||s.minChecked.replace("{count}",t.arg)}},maxSelected:function(e){return null!==e.val?e.val.length<=e.arg||s.maxSelected.replace("{count}",e.arg):void 0},minSelected:function(e){return null!==e.val&&e.val.length>=e.arg||s.minSelected.replace("{count}",e.arg)},radio:function(e){var t=this.form.querySelectorAll('input[type=radio][name="'+e.name+'"]:checked').length;return 1===t},regExp:function(e,t){var r=t.options.validators.regExp[e.arg],a=new RegExp(r.pattern);return a.test(e.val)||r.errorMessage},remote:function(e){e.remote=e.arg},callback:function(e,t){var r=t.options.validators.callback[e.arg];return r.callback(e.el,e.val)||r.errorMessage}};t=function(t,r){this.handler=!1,this.options=e.extend(!0,{},o,r),this.form=t,this.xhr={},this.events()},t.prototype={constructor:t,events:function(){var t=this;e(this.form).submit(function(e){return r=this.querySelectorAll("[data-validetta]"),t.init(e)}),this.options.realTime===!0&&(e(this.form).find("[data-validetta]").not("[type=checkbox]").on("change",function(a){return r=e(this),t.init(a)}),e(this.form).find("[data-validetta][type=checkbox]").on("click",function(e){return r=t.form.querySelectorAll('[data-validetta][type=checkbox][name="'+this.name+'"]'),t.init(e)})),e(this.form).on("reset",function(){return e(t.form.querySelectorAll("."+t.options.errorClass+", ."+t.options.validClass)).removeClass(t.options.errorClass+" "+t.options.validClass),t.reset()})},init:function(e){return this.reset(r),this.checkFields(e),"submit"!==e.type?void 0:"pending"===this.handler?!1:this.handler===!0?(this.options.onError.call(this,e),!1):this.options.onValid.call(this,e)},checkFields:function(t){var n=this,i=[];this.getInvalidFields=function(){return i};for(var s=0,o=r.length;o>s;s++)if(!r[s].disabled){var c,u=r[s],h="",p=l(e(u).val()),m=u.getAttribute("data-validetta").split(",");this.tmp={},this.tmp={el:u,val:p,parent:this.parents(u)};for(var f=0,v=m.length;v>f;f++){var g,b=m[f].match(a);if(null!==b?("undefined"!=typeof b[2]&&(this.tmp.arg=b[2]),g=b[1]):g=m[f],(""!==p||"required"===g||"equalTo"===g)&&d.hasOwnProperty(g)&&(c=d[g](n.tmp,n),"undefined"!=typeof c&&c!==!0)){var C=u.getAttribute("data-vd-message-"+g);null!==C&&(c=C),h+=c+"<br/>"}}""!==h?(i.push({field:u,errors:h}),this.addErrorClass(this.tmp.parent),this.window.open.call(this,u,h)):"undefined"!=typeof this.tmp.remote?this.checkRemote(u,t):("undefined"!=typeof c?this.addValidClass(this.tmp.parent):e(this.tmp.parent).removeClass(this.options.errorClass+" "+this.options.validClass),c=void 0)}},checkRemote:function(t,r){var a={},n={},i=t.name||t.id;"undefined"==typeof this.remoteCache&&(this.remoteCache={}),n[i]=this.tmp.val,a=e.extend(!0,{},{data:n},this.options.validators.remote[this.tmp.remote]||{});var s=e.param(a),o=this.remoteCache[s];if("undefined"!=typeof o)switch(o.state){case"pending":this.handler="pending",o.event=r.type;break;case"rejected":throw r.preventDefault(),new Error(o.result.message);case"resolved":o.result.valid===!1?(this.addErrorClass(this.tmp.parent),this.window.open.call(this,t,o.result.message)):this.addValidClass(this.tmp.parent)}else{var l=this.xhr[i];"undefined"!=typeof l&&"pending"===l.state()&&l.abort(),o=this.remoteCache[s]={state:"pending",event:r.type},this.remoteRequest(a,o,t,i)}},remoteRequest:function(t,r,a,n,i){var s=this;e(this.tmp.parent).addClass("validetta-pending"),this.xhr[n]=e.ajax(t).done(function(t){"object"!=typeof t&&(t=JSON.parse(t)),r.state="resolved",r.result=t,"submit"===r.event?(s.handler=!1,e(s.form).trigger("submit")):t.valid===!1?(s.addErrorClass(s.tmp.parent),s.window.open.call(s,a,t.message)):s.addValidClass(s.tmp.parent)}).fail(function(e,t){if("abort"!==t){var a="Ajax request failed for field ("+n+") : "+e.status+" "+e.statusText;throw r.state="rejected",r.result={valid:!1,message:a},new Error(a)}}).always(function(t){e(s.tmp.parent).removeClass("validetta-pending")}),this.handler="pending"},window:{open:function(t,r){if(!this.options.showErrorMessages)return void(this.handler=!0);var a=this.parents(t);if("undefined"==typeof a&&(a=t[0].parentNode),!a.querySelectorAll("."+this.options.errorTemplateClass).length){var n=document.createElement("span");if(n.className=this.options.errorTemplateClass+" "+this.options.errorTemplateClass+"--"+this.options.bubblePosition,"bubble"===this.options.display){var i,s=0,o=0;i=e(t).position(),"top"===this.options.bubblePosition?o=t.offsetHeight:s=t.offsetWidth,n.innerHTML="",n.style.top=i.top+o+this.options.bubbleGapTop+"px",n.style.left=i.left+s+this.options.bubbleGapLeft+"px"}a.appendChild(n),n.innerHTML=r,this.handler=!0}},close:function(e){e.parentNode.removeChild(e)}},reset:function(e){var t={};t="undefined"==typeof e||e.length>1&&"checkbox"!==e[0].type?this.form.querySelectorAll("."+this.options.errorTemplateClass):this.parents(e[0]).querySelectorAll("."+this.options.errorTemplateClass);for(var r=0,a=t.length;a>r;r++)this.window.close.call(this,t[r]);this.handler=!1},addErrorClass:function(t){e(t).removeClass(this.options.validClass).addClass(this.options.errorClass)},addValidClass:function(t){e(t).removeClass(this.options.errorClass).addClass(this.options.validClass)},parents:function(e){for(var t=parseInt(e.getAttribute("data-vd-parent-up"),10)||0,r=0;t>=r;r++)e=e.parentNode;return e}},e.fn.validetta=function(r,a){return e.validettaLanguage&&(s=e.extend(!0,{},s,e.validettaLanguage.messages)),"undefined"!=typeof a&&(s=e.extend(!0,{},s,a)),this.each(function(){new t(this,r)})}}(jQuery);