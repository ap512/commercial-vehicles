"use strict";(self.webpackChunkshopwp=self.webpackChunkshopwp||[]).push([["AdminSettingPluginAllowTracking-admin"],{XyRh:function(e,t,n){n.d(t,{Z:function(){return s}});var a=n("oYSA"),o=n("qZpH"),l=n("ALIA"),i=wp.element.memo((function(e){var t=e.settingName,n=e.onChange,a=e.label,o=e.help,l=e.note,i=e.noticeCSS,c=wp.components,s=c.ToggleControl,r=c.Notice;return React.createElement(React.Fragment,null,React.createElement(s,{checked:t,onChange:n,label:a,help:o,className:l&&t&&"shopwp-toggle-has-note"}),l&&t&&React.createElement(r,{isDismissible:!1,css:i,status:"warning"},l))})),c={name:"1cirfju-noticeCSS",styles:"&&{margin-left:0!important;margin-right:0!important;margin-bottom:3em!important;};label:noticeCSS;"},s=wp.element.memo((function(e){var t=e.settingName,n=void 0!==t&&t,s=e.label,r=void 0!==s&&s,m=e.help,p=void 0!==m&&m,g=e.note,u=void 0!==g&&g,h=e.alsoChange,d=void 0!==h&&h,S=e.disable,b=void 0!==S&&S,w=React.useContext,C=wp.components.Disabled,f=w(l.Z),v=(0,a.Z)(f,2),T=v[0],k=v[1],y=c;function N(){k({type:"UPDATE_SETTING",payload:{key:n,value:!T[n]}}),d&&k({type:"UPDATE_SETTING",payload:{key:d,value:!T[d]}})}return(0,o.tZ)(React.Fragment,null,b?(0,o.tZ)(C,null,(0,o.tZ)(i,{settingName:T[n],onChange:N,label:r,help:p,note:u,noticeCSS:y})):(0,o.tZ)(i,{settingName:T[n],onChange:N,label:r,help:p,note:u,noticeCSS:y}))}))},"6Tb2":function(e,t,n){n.r(t);var a=n("XyRh");t.default=function(){return React.createElement(a.Z,{label:wp.i18n.__("Share Usage Data","shopwp"),settingName:"allowTracking"})}}}]);