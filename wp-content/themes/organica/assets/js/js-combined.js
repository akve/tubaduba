/*! jQuery Migrate v1.2.1 | (c) 2005, 2013 jQuery Foundation, Inc. and other contributors | jquery.org/license */
jQuery.migrateMute===void 0&&(jQuery.migrateMute=!0),function(e,t,n){function r(n){var r=t.console;i[n]||(i[n]=!0,e.migrateWarnings.push(n),r&&r.warn&&!e.migrateMute&&(r.warn("JQMIGRATE: "+n),e.migrateTrace&&r.trace&&r.trace()))}function a(t,a,i,o){if(Object.defineProperty)try{return Object.defineProperty(t,a,{configurable:!0,enumerable:!0,get:function(){return r(o),i},set:function(e){r(o),i=e}}),n}catch(s){}e._definePropertyBroken=!0,t[a]=i}var i={};e.migrateWarnings=[],!e.migrateMute&&t.console&&t.console.log&&t.console.log("JQMIGRATE: Logging is active"),e.migrateTrace===n&&(e.migrateTrace=!0),e.migrateReset=function(){i={},e.migrateWarnings.length=0},"BackCompat"===document.compatMode&&r("jQuery is not compatible with Quirks Mode");var o=e("<input/>",{size:1}).attr("size")&&e.attrFn,s=e.attr,u=e.attrHooks.value&&e.attrHooks.value.get||function(){return null},c=e.attrHooks.value&&e.attrHooks.value.set||function(){return n},l=/^(?:input|button)$/i,d=/^[238]$/,p=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,f=/^(?:checked|selected)$/i;a(e,"attrFn",o||{},"jQuery.attrFn is deprecated"),e.attr=function(t,a,i,u){var c=a.toLowerCase(),g=t&&t.nodeType;return u&&(4>s.length&&r("jQuery.fn.attr( props, pass ) is deprecated"),t&&!d.test(g)&&(o?a in o:e.isFunction(e.fn[a])))?e(t)[a](i):("type"===a&&i!==n&&l.test(t.nodeName)&&t.parentNode&&r("Can't change the 'type' of an input or button in IE 6/7/8"),!e.attrHooks[c]&&p.test(c)&&(e.attrHooks[c]={get:function(t,r){var a,i=e.prop(t,r);return i===!0||"boolean"!=typeof i&&(a=t.getAttributeNode(r))&&a.nodeValue!==!1?r.toLowerCase():n},set:function(t,n,r){var a;return n===!1?e.removeAttr(t,r):(a=e.propFix[r]||r,a in t&&(t[a]=!0),t.setAttribute(r,r.toLowerCase())),r}},f.test(c)&&r("jQuery.fn.attr('"+c+"') may use property instead of attribute")),s.call(e,t,a,i))},e.attrHooks.value={get:function(e,t){var n=(e.nodeName||"").toLowerCase();return"button"===n?u.apply(this,arguments):("input"!==n&&"option"!==n&&r("jQuery.fn.attr('value') no longer gets properties"),t in e?e.value:null)},set:function(e,t){var a=(e.nodeName||"").toLowerCase();return"button"===a?c.apply(this,arguments):("input"!==a&&"option"!==a&&r("jQuery.fn.attr('value', val) no longer sets properties"),e.value=t,n)}};var g,h,v=e.fn.init,m=e.parseJSON,y=/^([^<]*)(<[\w\W]+>)([^>]*)$/;e.fn.init=function(t,n,a){var i;return t&&"string"==typeof t&&!e.isPlainObject(n)&&(i=y.exec(e.trim(t)))&&i[0]&&("<"!==t.charAt(0)&&r("$(html) HTML strings must start with '<' character"),i[3]&&r("$(html) HTML text after last tag is ignored"),"#"===i[0].charAt(0)&&(r("HTML string cannot start with a '#' character"),e.error("JQMIGRATE: Invalid selector string (XSS)")),n&&n.context&&(n=n.context),e.parseHTML)?v.call(this,e.parseHTML(i[2],n,!0),n,a):v.apply(this,arguments)},e.fn.init.prototype=e.fn,e.parseJSON=function(e){return e||null===e?m.apply(this,arguments):(r("jQuery.parseJSON requires a valid JSON string"),null)},e.uaMatch=function(e){e=e.toLowerCase();var t=/(chrome)[ \/]([\w.]+)/.exec(e)||/(webkit)[ \/]([\w.]+)/.exec(e)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(e)||/(msie) ([\w.]+)/.exec(e)||0>e.indexOf("compatible")&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(e)||[];return{browser:t[1]||"",version:t[2]||"0"}},e.browser||(g=e.uaMatch(navigator.userAgent),h={},g.browser&&(h[g.browser]=!0,h.version=g.version),h.chrome?h.webkit=!0:h.webkit&&(h.safari=!0),e.browser=h),a(e,"browser",e.browser,"jQuery.browser is deprecated"),e.sub=function(){function t(e,n){return new t.fn.init(e,n)}e.extend(!0,t,this),t.superclass=this,t.fn=t.prototype=this(),t.fn.constructor=t,t.sub=this.sub,t.fn.init=function(r,a){return a&&a instanceof e&&!(a instanceof t)&&(a=t(a)),e.fn.init.call(this,r,a,n)},t.fn.init.prototype=t.fn;var n=t(document);return r("jQuery.sub() is deprecated"),t},e.ajaxSetup({converters:{"text json":e.parseJSON}});var b=e.fn.data;e.fn.data=function(t){var a,i,o=this[0];return!o||"events"!==t||1!==arguments.length||(a=e.data(o,t),i=e._data(o,t),a!==n&&a!==i||i===n)?b.apply(this,arguments):(r("Use of jQuery.fn.data('events') is deprecated"),i)};var j=/\/(java|ecma)script/i,w=e.fn.andSelf||e.fn.addBack;e.fn.andSelf=function(){return r("jQuery.fn.andSelf() replaced by jQuery.fn.addBack()"),w.apply(this,arguments)},e.clean||(e.clean=function(t,a,i,o){a=a||document,a=!a.nodeType&&a[0]||a,a=a.ownerDocument||a,r("jQuery.clean() is deprecated");var s,u,c,l,d=[];if(e.merge(d,e.buildFragment(t,a).childNodes),i)for(c=function(e){return!e.type||j.test(e.type)?o?o.push(e.parentNode?e.parentNode.removeChild(e):e):i.appendChild(e):n},s=0;null!=(u=d[s]);s++)e.nodeName(u,"script")&&c(u)||(i.appendChild(u),u.getElementsByTagName!==n&&(l=e.grep(e.merge([],u.getElementsByTagName("script")),c),d.splice.apply(d,[s+1,0].concat(l)),s+=l.length));return d});var Q=e.event.add,x=e.event.remove,k=e.event.trigger,N=e.fn.toggle,T=e.fn.live,M=e.fn.die,S="ajaxStart|ajaxStop|ajaxSend|ajaxComplete|ajaxError|ajaxSuccess",C=RegExp("\\b(?:"+S+")\\b"),H=/(?:^|\s)hover(\.\S+|)\b/,A=function(t){return"string"!=typeof t||e.event.special.hover?t:(H.test(t)&&r("'hover' pseudo-event is deprecated, use 'mouseenter mouseleave'"),t&&t.replace(H,"mouseenter$1 mouseleave$1"))};e.event.props&&"attrChange"!==e.event.props[0]&&e.event.props.unshift("attrChange","attrName","relatedNode","srcElement"),e.event.dispatch&&a(e.event,"handle",e.event.dispatch,"jQuery.event.handle is undocumented and deprecated"),e.event.add=function(e,t,n,a,i){e!==document&&C.test(t)&&r("AJAX events should be attached to document: "+t),Q.call(this,e,A(t||""),n,a,i)},e.event.remove=function(e,t,n,r,a){x.call(this,e,A(t)||"",n,r,a)},e.fn.error=function(){var e=Array.prototype.slice.call(arguments,0);return r("jQuery.fn.error() is deprecated"),e.splice(0,0,"error"),arguments.length?this.bind.apply(this,e):(this.triggerHandler.apply(this,e),this)},e.fn.toggle=function(t,n){if(!e.isFunction(t)||!e.isFunction(n))return N.apply(this,arguments);r("jQuery.fn.toggle(handler, handler...) is deprecated");var a=arguments,i=t.guid||e.guid++,o=0,s=function(n){var r=(e._data(this,"lastToggle"+t.guid)||0)%o;return e._data(this,"lastToggle"+t.guid,r+1),n.preventDefault(),a[r].apply(this,arguments)||!1};for(s.guid=i;a.length>o;)a[o++].guid=i;return this.click(s)},e.fn.live=function(t,n,a){return r("jQuery.fn.live() is deprecated"),T?T.apply(this,arguments):(e(this.context).on(t,this.selector,n,a),this)},e.fn.die=function(t,n){return r("jQuery.fn.die() is deprecated"),M?M.apply(this,arguments):(e(this.context).off(t,this.selector||"**",n),this)},e.event.trigger=function(e,t,n,a){return n||C.test(e)||r("Global events are undocumented and deprecated"),k.call(this,e,t,n||document,a)},e.each(S.split("|"),function(t,n){e.event.special[n]={setup:function(){var t=this;return t!==document&&(e.event.add(document,n+"."+e.guid,function(){e.event.trigger(n,null,t,!0)}),e._data(this,n,e.guid++)),!1},teardown:function(){return this!==document&&e.event.remove(document,n+"."+e._data(this,n)),!1}}})}(jQuery,window);

// SUMOSELECT

/*!
 * jquery.sumoselect - v2.1.0
 * http://hemantnegi.github.io/jquery.sumoselect
 */

!function(e){"namespace sumo";e.fn.SumoSelect=function(t){var l=e.extend({placeholder:bwg_objectsL10n.bwg_select_tag,csvDispCount:3,captionFormat:"{0} Selected",floatWidth:400,forceCustomRendering:!1,nativeOnDevice:["Android","BlackBerry","iPhone","iPad","iPod","Opera Mini","IEMobile","Silk"],outputAsCSV:!1,csvSepChar:",",okCancelInMulti:!1,triggerChangeCombined:!0,selectAll:!1,selectAlltext:"Select All"},t),s=this.each(function(){var t=this;!this.sumo&&e(this).is("select")&&(this.sumo={E:e(t),is_multi:e(t).attr("multiple"),select:"",caption:"",placeholder:"",optDiv:"",CaptionCont:"",is_floating:!1,is_opened:!1,mob:!1,Pstate:[],createElems:function(){var t=this;return t.E.wrap('<div class="SumoSelect" tabindex="0">'),t.select=t.E.parent(),t.caption=e("<span></span>"),t.CaptionCont=e('<p class="CaptionCont"><label><i></i></label></p>').addClass("SlectBox").attr("style",t.E.attr("style")).prepend(t.caption),t.select.append(t.CaptionCont),t.E.attr("disabled")&&t.select.addClass("disabled").removeAttr("tabindex"),l.outputAsCSV&&t.is_multi&&t.E.attr("name")&&(t.select.append(e('<input class="HEMANT123" type="hidden" />').attr("name",t.E.attr("name")).val(t.getSelStr())),t.E.removeAttr("name")),t.isMobile()&&!l.forceCustomRendering?void t.setNativeMobile():(t.E.hide(),t.optDiv=e('<div class="optWrapper">'),t.floatingList(),ul=e('<p><input type="text" style="width: 100%; border-radius: 4px; box-shadow: 0 0 3px 1px #CCCCCC; border: 1px solid #CCCCCC;" class="search_tag" onkeypress="searchTags(this);" onkeyup="searchTags(this);"></p><ul class="options">'),t.optDiv.append(ul),l.selectAll&&t.selAll(),e(t.E.children("option")).each(function(l,i){i=e(i),t.createLi(i)}),t.is_multi&&t.multiSelelect(),t.select.append(t.optDiv),t.basicEvents(),void t.selAllState())},createLi:function(t,l){var i=this;return t.attr("value")||t.attr("value",t.val()),li=e('<li data-val="'+t.val()+'"><label>'+t.text()+"</label></li>"),i.is_multi&&li.prepend("<span><i></i></span>"),t[0].disabled&&(li=li.addClass("disabled")),i.onOptClick(li),t[0].selected&&li.addClass("selected"),t.attr("class")&&li.addClass(t.attr("class")),ul=i.optDiv.children("ul.options"),"undefined"==typeof l?ul.append(li):ul.children("li").eq(l).before(li),li},getSelStr:function(){return sopt=[],this.E.children("option:selected").each(function(){sopt.push(e(this).val())}),sopt.join(l.csvSepChar)},multiSelelect:function(){var t=this;t.optDiv.addClass("multiple"),t.okbtn=e('<p class="btnOk">OK</p>').click(function(){l.triggerChangeCombined&&(changed=!1,t.E.children("option:selected").length!=t.Pstate.length?changed=!0:t.E.children("option:selected").each(function(){t.Pstate.indexOf(e(this).val())<0&&(changed=!0)}),changed&&(t.E.trigger("change").trigger("click"),t.setText())),t.hideOpts()}),t.cancelBtn=e('<p class="btnCancel">Cancel</p>').click(function(){t._cnbtn(),t.hideOpts()}),t.optDiv.append(e('<div class="MultiControls">').append(t.okbtn).append(t.cancelBtn))},_cnbtn:function(){var e=this;for(e.E.children("option:selected").each(function(){this.selected=!1}),e.optDiv.find("li.selected").removeClass("selected"),i=0;i<e.Pstate.length;i++)e.E.children('option[value="'+e.Pstate[i]+'"]')[0].selected=!0,e.optDiv.find('li[data-val="'+e.Pstate[i]+'"]').addClass("selected");e.selAllState()},selAll:function(){var t=this;t.is_multi&&(t.chkAll=e("<i>"),t.selAll=e('<p class="select-all"><label>'+l.selectAlltext+"</label></p>").prepend(e("<span></span>").append(t.chkAll)),t.chkAll.on("click",function(){t.selAll.toggleClass("selected"),t.optDiv.find("ul.options li").each(function(l,i){i=e(i),t.selAll.hasClass("selected")?i.hasClass("selected")||i.trigger("click"):i.hasClass("selected")&&i.trigger("click")})}),t.optDiv.prepend(t.selAll))},selAllState:function(){var t=this;if(l.selectAll){var i=0,s=0;t.optDiv.find("ul.options li").each(function(t,l){e(l).hasClass("selected")&&i++,e(l).hasClass("disabled")||s++}),i==s?t.selAll.removeClass("partial").addClass("selected"):0==i?t.selAll.removeClass("selected partial"):t.selAll.addClass("partial")}},showOpts:function(){var t=this;t.E.attr("disabled")||(t.is_opened=!0,t.optDiv.addClass("open"),e(document).on("click.sumo",function(e){if(!t.select.is(e.target)&&0===t.select.has(e.target).length){if(!t.is_opened)return;t.hideOpts(),t.is_multi&&l.okCancelInMulti&&t._cnbtn()}}),t.is_floating&&(H=t.optDiv.children("ul").outerHeight()+2,t.is_multi&&(H+=parseInt(t.optDiv.css("padding-bottom"))),t.optDiv.css("height",H)),t.is_multi&&(t.is_floating||l.okCancelInMulti)&&(t.Pstate=[],t.E.children("option:selected").each(function(){t.Pstate.push(e(this).val())})))},hideOpts:function(){var t=this;t.is_opened=!1,t.optDiv.removeClass("open").find("ul li.sel").removeClass("sel"),e(document).off("click.sumo")},setOnOpen:function(){var e=this,t=e.optDiv.find("ul li").eq(e.E[0].selectedIndex);t.addClass("sel"),e.showOpts()},nav:function(e){var t,l=this,i=l.optDiv.find("ul li.sel");if(l.is_opened&&i.length){if(t=e?i.prevAll("li:not(.disabled)"):i.nextAll("li:not(.disabled)"),!t.length)return;i.removeClass("sel"),i=t.first().addClass("sel");var s=l.optDiv.find("ul"),n=s.scrollTop(),o=i.position().top+n;o>=n+s.height()-i.outerHeight()&&s.scrollTop(o-s.height()+i.outerHeight()),n>o&&s.scrollTop(o)}else l.setOnOpen()},basicEvents:function(){var t=this;t.CaptionCont.click(function(e){t.E.trigger("click"),t.is_opened?t.hideOpts():t.showOpts(),e.stopPropagation()}),t.select.on("keydown",function(e){switch(e.which){case 38:t.nav(!0);break;case 40:t.nav(!1);break;case 13:t.is_opened?t.optDiv.find("ul li.sel").trigger("click"):t.setOnOpen();break;case 9:case 27:return t.is_multi&&l.okCancelInMulti&&t._cnbtn(),void t.hideOpts();default:return}e.preventDefault()}),e(window).on("resize.sumo",function(){t.floatingList()})},onOptClick:function(t){var i=this;t.click(function(){var t=e(this);t.hasClass("disabled")||(txt="",i.is_multi?(t.toggleClass("selected"),i.E.children('option[value="'+t.data("val")+'"]')[0].selected=t.hasClass("selected"),i.selAllState()):(t.parent().find("li.selected").removeClass("selected"),t.toggleClass("selected"),i.E.val(t.attr("data-val"))),i.is_multi&&l.triggerChangeCombined&&(i.is_floating||l.okCancelInMulti)||(i.setText(),i.E.trigger("change").trigger("click")),i.is_multi||i.hideOpts())})},setText:function(){var t=this;if(t.placeholder="",t.is_multi){for(sels=t.E.children(":selected").not(":disabled"),i=0;i<sels.length;i++){if(i>=l.csvDispCount&&l.csvDispCount){t.placeholder=l.captionFormat.replace("{0}",sels.length);break}t.placeholder+=e(sels[i]).text()+", "}t.placeholder=t.placeholder.replace(/,([^,]*)$/,"$1")}else t.placeholder=t.E.children(":selected").not(":disabled").text();return is_placeholder=!1,t.placeholder||(is_placeholder=!0,t.placeholder=t.E.attr("placeholder"),t.placeholder||(t.placeholder=t.E.children("option:disabled:selected").text())),t.placeholder=t.placeholder?t.placeholder:l.placeholder,t.caption.text(t.placeholder),csvField=t.select.find("input.HEMANT123"),csvField.length&&csvField.val(t.getSelStr()),is_placeholder?t.caption.addClass("placeholder"):t.caption.removeClass("placeholder"),t.placeholder},isMobile:function(){for(var e=navigator.userAgent||navigator.vendor||window.opera,t=0;t<l.nativeOnDevice.length;t++)if(e.toString().toLowerCase().indexOf(l.nativeOnDevice[t].toLowerCase())>0)return l.nativeOnDevice[t];return!1},setNativeMobile:function(){var e=this;e.E.addClass("SelectClass"),e.mob=!0,e.E.change(function(){e.setText()})},floatingList:function(){var t=this;t.is_floating=e(window).width()<=l.floatWidth,t.optDiv.toggleClass("isFloating",t.is_floating),t.is_floating||t.optDiv.css("height",""),t.optDiv.toggleClass("okCancelInMulti",l.okCancelInMulti&&!t.is_floating)},vRange:function(e){var t=this;if(opts=t.E.children("option"),opts.length<=e||0>e)throw"index out of bounds";return t},toggSel:function(e,t){var l=this.vRange(t);l.E.children("option")[t].disabled||(l.E.children("option")[t].selected=e,l.mob||l.optDiv.find("ul.options li").eq(t).toggleClass("selected",e),l.setText())},toggDis:function(e,t){var l=this.vRange(t);l.E.children("option")[t].disabled=e,e&&(l.E.children("option")[t].selected=!1),l.mob||l.optDiv.find("ul.options li").eq(t).toggleClass("disabled",e).removeClass("selected"),l.setText()},toggSumo:function(e){var t=this;return t.enabled=e,t.select.toggleClass("disabled",e),e?(t.E.attr("disabled","disabled"),t.select.removeAttr("tabindex")):(t.E.removeAttr("disabled"),t.select.attr("tabindex","0")),t},toggSelAll:function(t){var i=this;i.E.find("option").each(function(l,s){i.E.find("option")[e(this).index()].disabled||(i.E.find("option")[e(this).index()].selected=t,i.mob||i.optDiv.find("ul.options li").eq(e(this).index()).toggleClass("selected",t),i.setText())}),!i.mob&&l.selectAll&&i.selAll.removeClass("partial").toggleClass("selected",t)},reload:function(){var t=this.unload();return e(t).SumoSelect(l)},unload:function(){var e=this;return e.select.before(e.E),e.E.show(),l.outputAsCSV&&e.is_multi&&e.select.find("input.HEMANT123").length&&e.E.attr("name",e.select.find("input.HEMANT123").attr("name")),e.select.remove(),delete t.sumo,t},add:function(l,i,s){if("undefined"==typeof l)throw"No value to add";var n=this;if(opts=n.E.children("option"),"number"==typeof i&&(s=i,i=l),"undefined"==typeof i&&(i=l),opt=e("<option></option>").val(l).html(i),opts.length<s)throw"index out of bounds";return"undefined"==typeof s||opts.length==s?(n.E.append(opt),n.mob||n.createLi(opt)):(opts.eq(s).before(opt),n.mob||n.createLi(opt,s)),t},remove:function(e){var t=this.vRange(e);t.E.children("option").eq(e).remove(),t.mob||t.optDiv.find("ul.options li").eq(e).remove(),t.setText()},selectItem:function(e){this.toggSel(!0,e)},unSelectItem:function(e){this.toggSel(!1,e)},selectAll:function(){this.toggSelAll(!0)},unSelectAll:function(){this.toggSelAll(!1)},disableItem:function(e){this.toggDis(!0,e)},enableItem:function(e){this.toggDis(!1,e)},enabled:!0,enable:function(){return this.toggSumo(!1)},disable:function(){return this.toggSumo(!0)},init:function(){var e=this;return e.createElems(),e.setText(),e}},t.sumo.init())});return 1==s.length?s[0]:s}}(jQuery);


// JQ.MOBILE

/*! jQuery Mobile v1.3.2 | Copyright 2010, 2013 jQuery Foundation, Inc. | jquery.org/license */
(function(e,t,n){typeof define=="function"&&define.amd?define(["jquery"],function(r){return n(r,e,t),r.mobile}):n(e.jQuery,e,t)})(this,document,function(e,t,n,r){(function(e,t,n,r){function x(e){while(e&&typeof e.originalEvent!="undefined")e=e.originalEvent;return e}function T(t,n){var i=t.type,s,o,a,l,c,h,p,d,v;t=e.Event(t),t.type=n,s=t.originalEvent,o=e.event.props,i.search(/^(mouse|click)/)>-1&&(o=f);if(s)for(p=o.length,l;p;)l=o[--p],t[l]=s[l];i.search(/mouse(down|up)|click/)>-1&&!t.which&&(t.which=1);if(i.search(/^touch/)!==-1){a=x(s),i=a.touches,c=a.changedTouches,h=i&&i.length?i[0]:c&&c.length?c[0]:r;if(h)for(d=0,v=u.length;d<v;d++)l=u[d],t[l]=h[l]}return t}function N(t){var n={},r,s;while(t){r=e.data(t,i);for(s in r)r[s]&&(n[s]=n.hasVirtualBinding=!0);t=t.parentNode}return n}function C(t,n){var r;while(t){r=e.data(t,i);if(r&&(!n||r[n]))return t;t=t.parentNode}return null}function k(){g=!1}function L(){g=!0}function A(){E=0,v.length=0,m=!1,L()}function O(){k()}function M(){_(),c=setTimeout(function(){c=0,A()},e.vmouse.resetTimerDuration)}function _(){c&&(clearTimeout(c),c=0)}function D(t,n,r){var i;if(r&&r[t]||!r&&C(n.target,t))i=T(n,t),e(n.target).trigger(i);return i}function P(t){var n=e.data(t.target,s);if(!m&&(!E||E!==n)){var r=D("v"+t.type,t);r&&(r.isDefaultPrevented()&&t.preventDefault(),r.isPropagationStopped()&&t.stopPropagation(),r.isImmediatePropagationStopped()&&t.stopImmediatePropagation())}}function H(t){var n=x(t).touches,r,i;if(n&&n.length===1){r=t.target,i=N(r);if(i.hasVirtualBinding){E=w++,e.data(r,s,E),_(),O(),d=!1;var o=x(t).touches[0];h=o.pageX,p=o.pageY,D("vmouseover",t,i),D("vmousedown",t,i)}}}function B(e){if(g)return;d||D("vmousecancel",e,N(e.target)),d=!0,M()}function j(t){if(g)return;var n=x(t).touches[0],r=d,i=e.vmouse.moveDistanceThreshold,s=N(t.target);d=d||Math.abs(n.pageX-h)>i||Math.abs(n.pageY-p)>i,d&&!r&&D("vmousecancel",t,s),D("vmousemove",t,s),M()}function F(e){if(g)return;L();var t=N(e.target),n;D("vmouseup",e,t);if(!d){var r=D("vclick",e,t);r&&r.isDefaultPrevented()&&(n=x(e).changedTouches[0],v.push({touchID:E,x:n.clientX,y:n.clientY}),m=!0)}D("vmouseout",e,t),d=!1,M()}function I(t){var n=e.data(t,i),r;if(n)for(r in n)if(n[r])return!0;return!1}function q(){}function R(t){var n=t.substr(1);return{setup:function(r,s){I(this)||e.data(this,i,{});var o=e.data(this,i);o[t]=!0,l[t]=(l[t]||0)+1,l[t]===1&&b.bind(n,P),e(this).bind(n,q),y&&(l.touchstart=(l.touchstart||0)+1,l.touchstart===1&&b.bind("touchstart",H).bind("touchend",F).bind("touchmove",j).bind("scroll",B))},teardown:function(r,s){--l[t],l[t]||b.unbind(n,P),y&&(--l.touchstart,l.touchstart||b.unbind("touchstart",H).unbind("touchmove",j).unbind("touchend",F).unbind("scroll",B));var o=e(this),u=e.data(this,i);u&&(u[t]=!1),o.unbind(n,q),I(this)||o.removeData(i)}}}var i="virtualMouseBindings",s="virtualTouchID",o="vmouseover vmousedown vmousemove vmouseup vclick vmouseout vmousecancel".split(" "),u="clientX clientY pageX pageY screenX screenY".split(" "),a=e.event.mouseHooks?e.event.mouseHooks.props:[],f=e.event.props.concat(a),l={},c=0,h=0,p=0,d=!1,v=[],m=!1,g=!1,y="addEventListener"in n,b=e(n),w=1,E=0,S;e.vmouse={moveDistanceThreshold:10,clickDistanceThreshold:10,resetTimerDuration:1500};for(var U=0;U<o.length;U++)e.event.special[o[U]]=R(o[U]);y&&n.addEventListener("click",function(t){var n=v.length,r=t.target,i,o,u,a,f,l;if(n){i=t.clientX,o=t.clientY,S=e.vmouse.clickDistanceThreshold,u=r;while(u){for(a=0;a<n;a++){f=v[a],l=0;if(u===r&&Math.abs(f.x-i)<S&&Math.abs(f.y-o)<S||e.data(u,s)===f.touchID){t.preventDefault(),t.stopPropagation();return}}u=u.parentNode}}},!0)})(e,t,n),function(e){e.mobile={}}(e),function(e,t){var r={touch:"ontouchend"in n};e.mobile.support=e.mobile.support||{},e.extend(e.support,r),e.extend(e.mobile.support,r)}(e),function(e,t,r){function l(t,n,r){var i=r.type;r.type=n,e.event.dispatch.call(t,r),r.type=i}var i=e(n);e.each("touchstart touchmove touchend tap taphold swipe swipeleft swiperight scrollstart scrollstop".split(" "),function(t,n){e.fn[n]=function(e){return e?this.bind(n,e):this.trigger(n)},e.attrFn&&(e.attrFn[n]=!0)});var s=e.mobile.support.touch,o="touchmove scroll",u=s?"touchstart":"mousedown",a=s?"touchend":"mouseup",f=s?"touchmove":"mousemove";e.event.special.scrollstart={enabled:!0,setup:function(){function s(e,n){r=n,l(t,r?"scrollstart":"scrollstop",e)}var t=this,n=e(t),r,i;n.bind(o,function(t){if(!e.event.special.scrollstart.enabled)return;r||s(t,!0),clearTimeout(i),i=setTimeout(function(){s(t,!1)},50)})}},e.event.special.tap={tapholdThreshold:750,setup:function(){var t=this,n=e(t);n.bind("vmousedown",function(r){function a(){clearTimeout(u)}function f(){a(),n.unbind("vclick",c).unbind("vmouseup",a),i.unbind("vmousecancel",f)}function c(e){f(),s===e.target&&l(t,"tap",e)}if(r.which&&r.which!==1)return!1;var s=r.target,o=r.originalEvent,u;n.bind("vmouseup",a).bind("vclick",c),i.bind("vmousecancel",f),u=setTimeout(function(){l(t,"taphold",e.Event("taphold",{target:s}))},e.event.special.tap.tapholdThreshold)})}},e.event.special.swipe={scrollSupressionThreshold:10,durationThreshold:1000,horizontalDistanceThreshold:10,verticalDistanceThreshold:475,start:function(t){var n=t.originalEvent.touches?t.originalEvent.touches[0]:t;return{time:(new Date).getTime(),coords:[n.pageX,n.pageY],origin:e(t.target)}},stop:function(e){var t=e.originalEvent.touches?e.originalEvent.touches[0]:e;return{time:(new Date).getTime(),coords:[t.pageX,t.pageY]}},handleSwipe:function(t,n){n.time-t.time<e.event.special.swipe.durationThreshold&&Math.abs(t.coords[0]-n.coords[0])>e.event.special.swipe.horizontalDistanceThreshold&&Math.abs(t.coords[1]-n.coords[1])<e.event.special.swipe.verticalDistanceThreshold&&t.origin.trigger("swipe").trigger(t.coords[0]>n.coords[0]?"swipeleft":"swiperight")},setup:function(){var t=this,n=e(t);n.bind(u,function(t){function o(t){if(!i)return;s=e.event.special.swipe.stop(t),Math.abs(i.coords[0]-s.coords[0])>e.event.special.swipe.scrollSupressionThreshold&&t.preventDefault()}var i=e.event.special.swipe.start(t),s;n.bind(f,o).one(a,function(){n.unbind(f,o),i&&s&&e.event.special.swipe.handleSwipe(i,s),i=s=r})})}},e.each({scrollstop:"scrollstart",taphold:"tap",swipeleft:"swipe",swiperight:"swipe"},function(t,n){e.event.special[t]={setup:function(){e(this).bind(n,e.noop)}}})}(e,this)});

// cookie
/*!
 * JavaScript Cookie v2.1.0
 * https://github.com/js-cookie/js-cookie
 *
 * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
 * Released under the MIT license
 */
(function (factory) {
	if (typeof define === 'function' && define.amd) {
		define(factory);
	} else if (typeof exports === 'object') {
		module.exports = factory();
	} else {
		var _OldCookies = window.Cookies;
		var api = window.Cookies = factory();
		api.noConflict = function () {
			window.Cookies = _OldCookies;
			return api;
		};
	}
}(function () {
	function extend () {
		var i = 0;
		var result = {};
		for (; i < arguments.length; i++) {
			var attributes = arguments[ i ];
			for (var key in attributes) {
				result[key] = attributes[key];
			}
		}
		return result;
	}

	function init (converter) {
		function api (key, value, attributes) {
			var result;
			if (typeof document === 'undefined') {
				return;
			}

			// Write

			if (arguments.length > 1) {
				attributes = extend({
					path: '/'
				}, api.defaults, attributes);

				if (typeof attributes.expires === 'number') {
					var expires = new Date();
					expires.setMilliseconds(expires.getMilliseconds() + attributes.expires * 864e+5);
					attributes.expires = expires;
				}

				try {
					result = JSON.stringify(value);
					if (/^[\{\[]/.test(result)) {
						value = result;
					}
				} catch (e) {}

				if (!converter.write) {
					value = encodeURIComponent(String(value))
						.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent);
				} else {
					value = converter.write(value, key);
				}

				key = encodeURIComponent(String(key));
				key = key.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent);
				key = key.replace(/[\(\)]/g, escape);

				return (document.cookie = [
					key, '=', value,
					attributes.expires && '; expires=' + attributes.expires.toUTCString(), // use expires attribute, max-age is not supported by IE
					attributes.path    && '; path=' + attributes.path,
					attributes.domain  && '; domain=' + attributes.domain,
					attributes.secure ? '; secure' : ''
				].join(''));
			}

			// Read

			if (!key) {
				result = {};
			}

			// To prevent the for loop in the first place assign an empty array
			// in case there are no cookies at all. Also prevents odd result when
			// calling "get()"
			var cookies = document.cookie ? document.cookie.split('; ') : [];
			var rdecode = /(%[0-9A-Z]{2})+/g;
			var i = 0;

			for (; i < cookies.length; i++) {
				var parts = cookies[i].split('=');
				var name = parts[0].replace(rdecode, decodeURIComponent);
				var cookie = parts.slice(1).join('=');

				if (cookie.charAt(0) === '"') {
					cookie = cookie.slice(1, -1);
				}

				try {
					cookie = converter.read ?
						converter.read(cookie, name) : converter(cookie, name) ||
						cookie.replace(rdecode, decodeURIComponent);

					if (this.json) {
						try {
							cookie = JSON.parse(cookie);
						} catch (e) {}
					}

					if (key === name) {
						result = cookie;
						break;
					}

					if (!key) {
						result[name] = cookie;
					}
				} catch (e) {}
			}

			return result;
		}

		api.get = api.set = api;
		api.getJSON = function () {
			return api.apply({
				json: true
			}, [].slice.call(arguments));
		};
		api.defaults = {};

		api.remove = function (key, attributes) {
			api(key, '', extend(attributes, {
				expires: -1
			}));
		};

		api.withConverter = init;

		return api;
	}

	return init(function () {});
}));