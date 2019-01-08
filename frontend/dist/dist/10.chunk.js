webpackJsonp([10],{233:function(t,e,n){"use strict";function r(t){u||n(982)}Object.defineProperty(e,"__esModule",{value:!0});var o=n(521),i=n.n(o);for(var s in o)"default"!==s&&function(t){n.d(e,t,function(){return o[t]})}(s);var a=n(986),c=n.n(a),u=!1,l=n(1),d=r,f=l(i.a,c.a,!1,d,"data-v-23b24771",null);f.options.__file="src/views/sql/platformSettings.vue",e.default=f.exports},241:function(t,e,n){"use strict";function r(t){var e,n;this.promise=new t(function(t,r){if(void 0!==e||void 0!==n)throw TypeError("Bad Promise constructor");e=t,n=r}),this.resolve=o(e),this.reject=o(n)}var o=n(83);t.exports.f=function(t){return new r(t)}},243:function(t,e,n){"use strict";function r(t){return t&&t.__esModule?t:{default:t}}function o(t,e,n){p.default.Notice.error({duration:10,title:e,desc:t?"":n})}Object.defineProperty(e,"__esModule",{value:!0});var i=n(249),s=r(i),a=n(6),c=r(a),u=n(50),l=r(u),d=n(91),f=r(d),h=(n(89),n(4)),v=(r(h),n(29)),p=r(v);l.default.defaults.timeout=3e4,l.default.interceptors.request.use(function(t){var e=c.default.get("token");return e&&(t.headers.Authorization="JWT "+e),t},function(t){return s.default.reject(t)}),l.default.interceptors.response.use(function(t){return t},function(t){if(console.log(p.default),t.response)switch(t.response.status){case 400:o(!1,t.response.request.statusText,t.response.request.responseText);break;case 401:f.default.commit("logout");var e="https:"==document.location.protocol,n=window.location.host;n=e?"https://"+n:"http://"+n,window.location.href=n+"/login";break;case 403:o(!1,t.response.statusText,t.response.data.detail);break;case 500:o(!1,t.response.status,t.response.statusText)}return s.default.reject(t)}),e.default=l.default},244:function(t,e,n){var r=n(9),o=n(83),i=n(2)("species");t.exports=function(t,e){var n,s=r(t).constructor;return void 0===s||void 0==(n=r(s)[i])?e:o(n)}},245:function(t,e,n){var r,o,i,s=n(49),a=n(254),c=n(84),u=n(51),l=n(5),d=l.process,f=l.setImmediate,h=l.clearImmediate,v=l.MessageChannel,p=l.Dispatch,_=0,m={},g=function(){var t=+this;if(m.hasOwnProperty(t)){var e=m[t];delete m[t],e()}},y=function(t){g.call(t.data)};f&&h||(f=function(t){for(var e=[],n=1;arguments.length>n;)e.push(arguments[n++]);return m[++_]=function(){a("function"==typeof t?t:Function(t),e)},r(_),_},h=function(t){delete m[t]},"process"==n(28)(d)?r=function(t){d.nextTick(s(g,t,1))}:p&&p.now?r=function(t){p.now(s(g,t,1))}:v?(o=new v,i=o.port2,o.port1.onmessage=y,r=s(i.postMessage,i,1)):l.addEventListener&&"function"==typeof postMessage&&!l.importScripts?(r=function(t){l.postMessage(t+"","*")},l.addEventListener("message",y,!1)):r="onreadystatechange"in u("script")?function(t){c.appendChild(u("script")).onreadystatechange=function(){c.removeChild(this),g.call(t)}}:function(t){setTimeout(s(g,t,1),0)}),t.exports={set:f,clear:h}},246:function(t,e){t.exports=function(t){try{return{e:!1,v:t()}}catch(t){return{e:!0,v:t}}}},247:function(t,e,n){var r=n(9),o=n(16),i=n(241);t.exports=function(t,e){if(r(t),o(e)&&e.constructor===t)return e;var n=i.f(t);return(0,n.resolve)(e),n.promise}},249:function(t,e,n){t.exports={default:n(250),__esModule:!0}},250:function(t,e,n){n(90),n(30),n(54),n(251),n(259),n(260),t.exports=n(3).Promise},251:function(t,e,n){"use strict";var r,o,i,s,a=n(23),c=n(5),u=n(49),l=n(87),d=n(22),f=n(16),h=n(83),v=n(252),p=n(253),_=n(244),m=n(245).set,g=n(255)(),y=n(241),b=n(246),w=n(256),x=n(247),k=c.TypeError,C=c.process,P=C&&C.versions,A=P&&P.v8||"",G=c.Promise,M="process"==l(C),S=function(){},j=o=y.f,F=!!function(){try{var t=G.resolve(1),e=(t.constructor={})[n(2)("species")]=function(t){t(S,S)};return(M||"function"==typeof PromiseRejectionEvent)&&t.then(S)instanceof e&&0!==A.indexOf("6.6")&&-1===w.indexOf("Chrome/66")}catch(t){}}(),W=function(t){var e;return!(!f(t)||"function"!=typeof(e=t.then))&&e},L=function(t,e){if(!t._n){t._n=!0;var n=t._c;g(function(){for(var r=t._v,o=1==t._s,i=0;n.length>i;)!function(e){var n,i,s,a=o?e.ok:e.fail,c=e.resolve,u=e.reject,l=e.domain;try{a?(o||(2==t._h&&N(t),t._h=1),!0===a?n=r:(l&&l.enter(),n=a(r),l&&(l.exit(),s=!0)),n===e.promise?u(k("Promise-chain cycle")):(i=W(n))?i.call(n,c,u):c(n)):u(r)}catch(t){l&&!s&&l.exit(),u(t)}}(n[i++]);t._c=[],t._n=!1,e&&!t._h&&O(t)})}},O=function(t){m.call(c,function(){var e,n,r,o=t._v,i=U(t);if(i&&(e=b(function(){M?C.emit("unhandledRejection",o,t):(n=c.onunhandledrejection)?n({promise:t,reason:o}):(r=c.console)&&r.error&&r.error("Unhandled promise rejection",o)}),t._h=M||U(t)?2:1),t._a=void 0,i&&e.e)throw e.v})},U=function(t){return 1!==t._h&&0===(t._a||t._c).length},N=function(t){m.call(c,function(){var e;M?C.emit("rejectionHandled",t):(e=c.onrejectionhandled)&&e({promise:t,reason:t._v})})},T=function(t){var e=this;e._d||(e._d=!0,e=e._w||e,e._v=t,e._s=2,e._a||(e._a=e._c.slice()),L(e,!0))},E=function(t){var e,n=this;if(!n._d){n._d=!0,n=n._w||n;try{if(n===t)throw k("Promise can't be resolved itself");(e=W(t))?g(function(){var r={_w:n,_d:!1};try{e.call(t,u(E,r,1),u(T,r,1))}catch(t){T.call(r,t)}}):(n._v=t,n._s=1,L(n,!1))}catch(t){T.call({_w:n,_d:!1},t)}}};F||(G=function(t){v(this,G,"Promise","_h"),h(t),r.call(this);try{t(u(E,this,1),u(T,this,1))}catch(t){T.call(this,t)}},r=function(t){this._c=[],this._a=void 0,this._s=0,this._d=!1,this._v=void 0,this._h=0,this._n=!1},r.prototype=n(257)(G.prototype,{then:function(t,e){var n=j(_(this,G));return n.ok="function"!=typeof t||t,n.fail="function"==typeof e&&e,n.domain=M?C.domain:void 0,this._c.push(n),this._a&&this._a.push(n),this._s&&L(this,!1),n.promise},catch:function(t){return this.then(void 0,t)}}),i=function(){var t=new r;this.promise=t,this.resolve=u(E,t,1),this.reject=u(T,t,1)},y.f=j=function(t){return t===G||t===s?new i(t):o(t)}),d(d.G+d.W+d.F*!F,{Promise:G}),n(31)(G,"Promise"),n(258)("Promise"),s=n(3).Promise,d(d.S+d.F*!F,"Promise",{reject:function(t){var e=j(this);return(0,e.reject)(t),e.promise}}),d(d.S+d.F*(a||!F),"Promise",{resolve:function(t){return x(a&&this===s?G:this,t)}}),d(d.S+d.F*!(F&&n(88)(function(t){G.all(t).catch(S)})),"Promise",{all:function(t){var e=this,n=j(e),r=n.resolve,o=n.reject,i=b(function(){var n=[],i=0,s=1;p(t,!1,function(t){var a=i++,c=!1;n.push(void 0),s++,e.resolve(t).then(function(t){c||(c=!0,n[a]=t,--s||r(n))},o)}),--s||r(n)});return i.e&&o(i.v),n.promise},race:function(t){var e=this,n=j(e),r=n.reject,o=b(function(){p(t,!1,function(t){e.resolve(t).then(n.resolve,r)})});return o.e&&r(o.v),n.promise}})},252:function(t,e){t.exports=function(t,e,n,r){if(!(t instanceof e)||void 0!==r&&r in t)throw TypeError(n+": incorrect invocation!");return t}},253:function(t,e,n){var r=n(49),o=n(85),i=n(86),s=n(9),a=n(52),c=n(53),u={},l={},e=t.exports=function(t,e,n,d,f){var h,v,p,_,m=f?function(){return t}:c(t),g=r(n,d,e?2:1),y=0;if("function"!=typeof m)throw TypeError(t+" is not iterable!");if(i(m)){for(h=a(t.length);h>y;y++)if((_=e?g(s(v=t[y])[0],v[1]):g(t[y]))===u||_===l)return _}else for(p=m.call(t);!(v=p.next()).done;)if((_=o(p,g,v.value,e))===u||_===l)return _};e.BREAK=u,e.RETURN=l},254:function(t,e){t.exports=function(t,e,n){var r=void 0===n;switch(e.length){case 0:return r?t():t.call(n);case 1:return r?t(e[0]):t.call(n,e[0]);case 2:return r?t(e[0],e[1]):t.call(n,e[0],e[1]);case 3:return r?t(e[0],e[1],e[2]):t.call(n,e[0],e[1],e[2]);case 4:return r?t(e[0],e[1],e[2],e[3]):t.call(n,e[0],e[1],e[2],e[3])}return t.apply(n,e)}},255:function(t,e,n){var r=n(5),o=n(245).set,i=r.MutationObserver||r.WebKitMutationObserver,s=r.process,a=r.Promise,c="process"==n(28)(s);t.exports=function(){var t,e,n,u=function(){var r,o;for(c&&(r=s.domain)&&r.exit();t;){o=t.fn,t=t.next;try{o()}catch(r){throw t?n():e=void 0,r}}e=void 0,r&&r.enter()};if(c)n=function(){s.nextTick(u)};else if(!i||r.navigator&&r.navigator.standalone)if(a&&a.resolve){var l=a.resolve(void 0);n=function(){l.then(u)}}else n=function(){o.call(r,u)};else{var d=!0,f=document.createTextNode("");new i(u).observe(f,{characterData:!0}),n=function(){f.data=d=!d}}return function(r){var o={fn:r,next:void 0};e&&(e.next=o),t||(t=o,n()),e=o}}},256:function(t,e,n){var r=n(5),o=r.navigator;t.exports=o&&o.userAgent||""},257:function(t,e,n){var r=n(11);t.exports=function(t,e,n){for(var o in e)n&&t[o]?t[o]=e[o]:r(t,o,e[o]);return t}},258:function(t,e,n){"use strict";var r=n(5),o=n(3),i=n(7),s=n(10),a=n(2)("species");t.exports=function(t){var e="function"==typeof o[t]?o[t]:r[t];s&&e&&!e[a]&&i.f(e,a,{configurable:!0,get:function(){return this}})}},259:function(t,e,n){"use strict";var r=n(22),o=n(3),i=n(5),s=n(244),a=n(247);r(r.P+r.R,"Promise",{finally:function(t){var e=s(this,o.Promise||i.Promise),n="function"==typeof t;return this.then(n?function(n){return a(e,t()).then(function(){return n})}:t,n?function(n){return a(e,t()).then(function(){throw n})}:t)}})},260:function(t,e,n){"use strict";var r=n(22),o=n(241),i=n(246);r(r.S,"Promise",{try:function(t){var e=o.f(this),n=i(t);return(n.e?e.reject:e.resolve)(n.v),e.promise}})},261:function(t,e,n){"use strict";function r(t){s||n(262)}Object.defineProperty(e,"__esModule",{value:!0});var o=n(264),i=n.n(o),s=!1,a=n(1),c=r,u=a(null,i.a,!1,c,"data-v-2c49e4f3",null);u.options.__file="src/views/my-components/public/copyright.vue",e.default=u.exports},262:function(t,e,n){var r=n(263);"string"==typeof r&&(r=[[t.i,r,""]]),r.locals&&(t.exports=r.locals);n(15)("71e53e78",r,!1,{})},263:function(t,e,n){e=t.exports=n(14)(!1),e.push([t.i,"\ndiv[data-v-2c49e4f3] {\n  margin-top: 20px;\n}\nspan[data-v-2c49e4f3] {\n  color: #6c6c6c\n}\n\n",""])},264:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("center",[n("span",[t._v(" Copyright © 2018 julive.com ")])])],1)},o=[];r._withStripped=!0;var i={render:r,staticRenderFns:o};e.default=i},303:function(t,e,n){"use strict";function r(t){return(0,p.default)({url:_,method:"get",params:t})}function o(t,e){return(0,p.default)({url:_+t+"/",method:"put",data:e})}function i(t){return(0,p.default)({url:_,method:"post",data:t})}function s(t){return(0,p.default)({url:_+t+"/",method:"delete"})}function a(t){return(0,p.default)({url:m,method:"get",params:t})}function c(t){return(0,p.default)({url:m,method:"post",data:t})}function u(t,e){return(0,p.default)({url:m+t+"/",method:"put",data:e})}function l(t){return(0,p.default)({url:m+t+"/",method:"delete"})}function d(t){return(0,p.default)({url:g,method:"get",params:t})}function f(t){return(0,p.default)({url:y,method:"get",params:t})}function h(t){return(0,p.default)({url:y,method:"post",data:t})}Object.defineProperty(e,"__esModule",{value:!0}),e.GetUserList=r,e.UpdateUser=o,e.CreateUser=i,e.DeleteUser=s,e.GetGroupList=a,e.CreateGroup=c,e.UpdateGroup=u,e.DeleteGroup=l,e.GetPermissonList=d,e.GetPersonal=f,e.UpdatePersonal=h;var v=n(243),p=function(t){return t&&t.__esModule?t:{default:t}}(v),_="/api/account/users/",m="/api/account/groups/",g="/api/account/permissions/",y="/api/account/personal/"},415:function(t,e,n){"use strict";function r(t){return(0,s.default)({url:a,method:"get",params:t})}function o(t){return(0,s.default)({url:a,method:"post",data:t})}Object.defineProperty(e,"__esModule",{value:!0}),e.GetMailActions=r,e.SetMailActions=o;var i=n(243),s=function(t){return t&&t.__esModule?t:{default:t}}(i),a="/api/sqlmng/mailactions/"},521:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var r=n(984),o=n(985),i=n(415),s=n(303),a=n(261),c=function(t){return t&&t.__esModule?t:{default:t}}(a);e.default={components:{copyright:c.default},data:function(){return{readonly:!0,res:[],actions:[],indeterminate:!0,checkAll:!1,actions_checked:[],forbiddenWords:{id:"",forbidden_words:""},userList:[],strategy:{id:"",is_manual_review:!1},getParams:{page:1,pagesize:10}}},created:function(){this.handleGetUsers(),this.handleGetFWList(),this.handleGetStrategyList(),this.handleGetMailActions()},methods:{handleCheckAll:function(){this.indeterminate?this.checkAll=!1:this.checkAll=!this.checkAll,this.indeterminate=!1,this.checkAll?this.actions_checked=this.actions:this.actions_checked=[]},checkAllGroupChange:function(t){t.length===this.actions.length?(this.indeterminate=!1,this.checkAll=!0):t.length>0?(this.indeterminate=!0,this.checkAll=!1):(this.indeterminate=!1,this.checkAll=!1)},getActionName:function(){var t=[];for(var e in this.actions_checked){var n=this.actions_checked[e];for(var r in this.res){var o=this.res[r];if(o.desc_cn==n){t.push(o.name);break}}}return t},handleGetMailActions:function(){var t=this;(0,i.GetMailActions)(this.getParams).then(function(e){t.res=e.data.results,t.actions=[],t.actions_checked=[];for(var n in t.res){var r=t.res[n];t.actions.push(r.desc_cn),1==r.value&&t.actions_checked.push(r.desc_cn)}})},handleSetMailActions:function(){var t=this,e=this.getActionName();console.log(e),(0,i.SetMailActions)(e).then(function(e){console.log(e),t.handleNotice(e)})},notice:function(t,e){this.$Notice.success({title:t,duration:6,desc:e})},handleNotice:function(t){var e=t.status;if(200==e||201==e){this.notice("服务器提示","设置 保存成功")}},editHandle:function(){this.readonly=!1},saveHandle:function(){this.readonly=!0,this.handleWriteFW()},handleGetStrategyList:function(){var t=this;(0,r.GetStrategyList)({}).then(function(e){console.log(e);var n=e.data.results;n.length>0&&(t.strategy=n[0])})},handleWriteStrategy:function(){var t=this,e=this.strategy.id,n=this.strategy;""==e?(0,r.CreateStrategy)(n).then(function(e){t.handleNotice(e),t.handleGetStrategyList()}):(0,r.UpdateStrategy)(e,n).then(function(e){t.handleNotice(e),t.handleGetStrategyList()})},handleGetFWList:function(){var t=this;(0,o.GetFWList)({}).then(function(e){console.log(e);var n=e.data.results;n.length>0&&(t.forbiddenWords=n[0])})},handleGetUsers:function(){var t=this;(0,s.GetUserList)({pagesize:1e3}).then(function(e){console.log(e),t.userList=[];var n=e.data.results;for(var r in n){var o=n[r];1==o.is_superuser&&t.userList.push(o)}})},handleWriteFW:function(){var t=this,e=this.forbiddenWords.id,n=this.forbiddenWords;""==e?(0,o.CreateFW)(n).then(function(e){t.handleNotice(e),t.handleGetFWList()}):(0,o.UpdateFW)(e,n).then(function(e){t.handleNotice(e),t.handleGetFWList()})}}}},982:function(t,e,n){var r=n(983);"string"==typeof r&&(r=[[t.i,r,""]]),r.locals&&(t.exports=r.locals);n(15)("72c2ab73",r,!1,{})},983:function(t,e,n){e=t.exports=n(14)(!1),e.push([t.i,"\n.left20[data-v-23b24771] {\n  margin-left: 20px\n}\n\n",""])},984:function(t,e,n){"use strict";function r(t){return(0,a.default)({url:c,method:"get",params:t})}function o(t,e){return(0,a.default)({url:c+t+"/",method:"put",data:e})}function i(t){return(0,a.default)({url:c,method:"post",data:t})}Object.defineProperty(e,"__esModule",{value:!0}),e.GetStrategyList=r,e.UpdateStrategy=o,e.CreateStrategy=i;var s=n(243),a=function(t){return t&&t.__esModule?t:{default:t}}(s),c="/api/sqlmng/strategy/"},985:function(t,e,n){"use strict";function r(t){return(0,a.default)({url:c,method:"get",params:t})}function o(t,e){return(0,a.default)({url:c+t+"/",method:"put",data:e})}function i(t){return(0,a.default)({url:c,method:"post",data:t})}Object.defineProperty(e,"__esModule",{value:!0}),e.GetFWList=r,e.UpdateFW=o,e.CreateFW=i;var s=n(243),a=function(t){return t&&t.__esModule?t:{default:t}}(s),c="/api/sqlmng/forbiddenwords/"},986:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("Card",[n("Row",[n("Col",{attrs:{span:"12"}},[n("Alert",{attrs:{"show-icon":""}},[t._v("设置禁用词")]),t._v(" "),n("div",[n("Form",{staticClass:"step-form",attrs:{"label-width":100}},[n("FormItem",{attrs:{label:"SQL语句禁用词"}},[n("Input",{attrs:{readonly:t.readonly,type:"textarea",rows:4,placeholder:"SQL语句里不允许出现的词，多个以空格分隔"},model:{value:t.forbiddenWords.forbidden_words,callback:function(e){t.$set(t.forbiddenWords,"forbidden_words",e)},expression:"forbiddenWords.forbidden_words"}})],1),t._v(" "),n("FormItem",{attrs:{label:"操作"}},[n("div",[n("Button",{directives:[{name:"show",rawName:"v-show",value:1==t.readonly,expression:"readonly == true"}],attrs:{type:"warning"},on:{click:t.editHandle}},[t._v("编辑")]),t._v(" "),n("Button",{directives:[{name:"show",rawName:"v-show",value:0==t.readonly,expression:"readonly == false"}],attrs:{type:"primary"},on:{click:t.saveHandle}},[t._v("保存")])],1)])],1)],1)],1),t._v(" "),n("Col",{attrs:{span:"12"}},[n("div",{staticStyle:{"margin-left":"20px"}},[n("Alert",{attrs:{type:"warning","show-icon":"",closable:""}},[n("b",[t._v("SQL语句禁用词")]),t._v(" "),n("template",{slot:"desc"},[n("p",{staticClass:"left20"},[t._v("\n              可指定不允许语句中出现的词，对包含禁词的SQL语句，后端会做拦截处理。\n            ")])])],2)],1)])],1),t._v(" "),n("Row",[n("Col",{attrs:{span:"12"}},[n("Alert",{attrs:{"show-icon":""}},[t._v("设置工单流")]),t._v(" "),n("div",[n("Form",{staticClass:"step-form",attrs:{"label-width":100}},[n("FormItem",{attrs:{label:"工单流"}},[n("i-switch",{attrs:{size:"large"},on:{"on-change":t.handleWriteStrategy},model:{value:t.strategy.is_manual_review,callback:function(e){t.$set(t.strategy,"is_manual_review",e)},expression:"strategy.is_manual_review"}},[n("span",{attrs:{slot:"open"},slot:"open"},[t._v("开启")]),t._v(" "),n("span",{attrs:{slot:"close"},slot:"close"},[t._v("关闭")])])],1)],1)],1)],1),t._v(" "),n("Col",{attrs:{span:"12"}},[n("div",{staticClass:"left20"},[n("Alert",{attrs:{type:"warning","show-icon":"",closable:""}},[n("b",[t._v("工单流")]),t._v(" "),n("template",{slot:"desc"},[n("p",{staticClass:"left20"},[n("b",[t._v("1")]),t._v(". 关闭，工单流: 提交人 --- 核准人 。\n              ")]),t._v(" "),n("p",{staticClass:"left20"},[n("b",[t._v("2")]),t._v(". 开启，工单流: 提交人 --- 核准人 --- 管理员 。\n              ")])])],2)],1)])],1),t._v(" "),n("Row",[n("Col",{attrs:{span:"12"}},[n("Alert",{attrs:{"show-icon":""}},[t._v("设置邮件提醒")]),t._v(" "),n("div",[n("Form",{staticClass:"step-form",attrs:{"label-width":100}},[n("FormItem",{attrs:{label:"选择事件"}},[n("div",{staticStyle:{"border-bottom":"1px solid #e9e9e9","padding-bottom":"6px","margin-bottom":"6px"}},[n("Checkbox",{attrs:{indeterminate:t.indeterminate,value:t.checkAll},nativeOn:{click:function(e){return e.preventDefault(),t.handleCheckAll(e)}}},[t._v("全选")])],1),t._v(" "),n("CheckboxGroup",{on:{"on-change":t.checkAllGroupChange},model:{value:t.actions_checked,callback:function(e){t.actions_checked=e},expression:"actions_checked"}},[n("Checkbox",{attrs:{label:"审核"}}),t._v(" "),n("Checkbox",{attrs:{label:"放弃"}}),t._v(" "),n("Checkbox",{attrs:{label:"执行"}}),t._v(" "),n("Checkbox",{attrs:{label:"回滚"}}),t._v(" "),n("Checkbox",{attrs:{label:"审批通过"}}),t._v(" "),n("Checkbox",{attrs:{label:"审批拒绝"}})],1)],1),t._v(" "),n("FormItem",{attrs:{label:"操作"}},[n("div",[n("Button",{attrs:{type:"primary"},on:{click:t.handleSetMailActions}},[t._v("提交")])],1)])],1)],1)],1),t._v(" "),n("Col",{attrs:{span:"12"}},[n("div",{staticClass:"left20"},[n("Alert",{attrs:{type:"warning","show-icon":"",closable:""}},[n("b",[t._v("邮件提醒")]),t._v(" "),n("template",{slot:"desc"},[n("p",{staticClass:"left20"},[t._v("\n                   对于生产环境的数据库，发生选择的事件时，工单相关人员将收到邮件提醒。\n              ")])])],2)],1)])],1)],1),t._v(" "),n("copyright")],1)},o=[];r._withStripped=!0;var i={render:r,staticRenderFns:o};e.default=i}});