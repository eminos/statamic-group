function u(n,e,t,a,l,r,g,d){var i=typeof n=="function"?n.options:n;e&&(i.render=e,i.staticRenderFns=t,i._compiled=!0),a&&(i.functional=!0),r&&(i._scopeId="data-v-"+r);var o;if(g?(o=function(s){s=s||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext,!s&&typeof __VUE_SSR_CONTEXT__<"u"&&(s=__VUE_SSR_CONTEXT__),l&&l.call(this,s),s&&s._registeredComponents&&s._registeredComponents.add(g)},i._ssrRegister=o):l&&(o=d?function(){l.call(this,(i.functional?this.parent:this).$root.$options.shadowRoot)}:l),o)if(i.functional){i._injectStyles=o;var _=i.render;i.render=function(p,c){return o.call(c),_(p,c)}}else{var f=i.beforeCreate;i.beforeCreate=f?[].concat(f,o):[o]}return{exports:n,options:i}}const h={mixins:[Fieldtype],data(){return{toggle:!1}},watch:{toggle(){this.config.save_toggle_state&&this.update(this.toggle)}},mounted(){this.config.save_toggle_state&&(this.toggle=this.value);let n=this.$el.closest(".publish-field"),e=[];for(;n.nextElementSibling&&!n.nextElementSibling.classList.contains("group-fieldtype");)e.push(n.nextElementSibling),n=n.nextElementSibling;this.$nextTick(()=>{e.forEach(t=>{this.$el.querySelector(".publish-fields").appendChild(t)})})}};var v=function(){var e=this,t=e._self._c;return t("div",[e.config.show_header?t("div",{staticClass:"form-group section-fieldtype w-full",class:{active:e.toggle}},[t("div",{staticClass:"flex grp-justify-between grp-items-center"},[t("div",{staticClass:"field-inner"},[t("label",{staticClass:"publish-field-label"},[t("span",{directives:[{name:"tooltip",rawName:"v-tooltip",value:{content:e.config.handle,delay:300,autoHide:!1},expression:"{content: config.handle, delay: 300, autoHide: false}"}],domProps:{textContent:e._s(e.config.display)}})]),e.config.instructions?t("div",{staticClass:"help-block -mt-2",domProps:{innerHTML:e._s(e.$options.filters.markdown(e.config.instructions))}}):e._e()]),e.config.show_toggle?t("div",{staticClass:"toggle-fieldtype-wrapper grp-mt-2"},[t("toggle-input",{model:{value:e.toggle,callback:function(a){e.toggle=a},expression:"toggle"}})],1):e._e()])]):e._e(),t("div",{directives:[{name:"show",rawName:"v-show",value:!e.config.toggle_controls_visibility||e.config.toggle_controls_visibility&&e.toggle,expression:"!config.toggle_controls_visibility || (config.toggle_controls_visibility && toggle)"}],staticClass:"publish-fields w-full"})])},m=[],b=u(h,v,m,!1,null,null,null,null);const C=b.exports;Statamic.booting(()=>{Statamic.$components.register("group-fieldtype",C)});