!function(){"use strict";var e,t={338:function(){var e=window.wp.blocks,t=window.wp.element,r=window.wp.i18n,n=window.wp.blockEditor,o=JSON.parse('{"apiVersion":2,"name":"create-block/block-1","version":"0.1.0","title":"My First Block","category":"widgets","icon":"smiley","description":"Example block written with ESNext standard and JSX support – build step required.","supports":{"html":false},"textdomain":"my-first-block","editorScript":"file:./index.js","editorStyle":"file:./index.css","style":"file:./style-index.css"}');(0,e.registerBlockType)(o,{edit:function(){return(0,t.createElement)("p",(0,n.useBlockProps)(),(0,r.__)("My First Block – hello from the editor!","my-first-block"))},save:function(){return(0,t.createElement)("p",n.useBlockProps.save(),(0,r.__)("My First Block – hello from the saved content!","my-first-block"))}})}},r={};function n(e){var o=r[e];if(void 0!==o)return o.exports;var i=r[e]={exports:{}};return t[e](i,i.exports,n),i.exports}n.m=t,e=[],n.O=function(t,r,o,i){if(!r){var s=1/0;for(u=0;u<e.length;u++){r=e[u][0],o=e[u][1],i=e[u][2];for(var l=!0,c=0;c<r.length;c++)(!1&i||s>=i)&&Object.keys(n.O).every((function(e){return n.O[e](r[c])}))?r.splice(c--,1):(l=!1,i<s&&(s=i));if(l){e.splice(u--,1);var f=o();void 0!==f&&(t=f)}}return t}i=i||0;for(var u=e.length;u>0&&e[u-1][2]>i;u--)e[u]=e[u-1];e[u]=[r,o,i]},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={996:0,997:0};n.O.j=function(t){return 0===e[t]};var t=function(t,r){var o,i,s=r[0],l=r[1],c=r[2],f=0;if(s.some((function(t){return 0!==e[t]}))){for(o in l)n.o(l,o)&&(n.m[o]=l[o]);if(c)var u=c(n)}for(t&&t(r);f<s.length;f++)i=s[f],n.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return n.O(u)},r=self.webpackChunkminitools_settings_framework=self.webpackChunkminitools_settings_framework||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))}();var o=n.O(void 0,[997],(function(){return n(338)}));o=n.O(o)}();