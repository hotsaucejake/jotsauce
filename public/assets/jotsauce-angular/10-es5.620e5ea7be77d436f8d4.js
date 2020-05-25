function _classCallCheck(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function _defineProperties(t,e){for(var n=0;n<e.length;n++){var a=e[n];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(t,a.key,a)}}function _createClass(t,e,n){return e&&_defineProperties(t.prototype,e),n&&_defineProperties(t,n),t}(window.webpackJsonp=window.webpackJsonp||[]).push([[10],{"9iNo":function(t,e,n){"use strict";n.r(e),n.d(e,"FeatureListModule",(function(){return S}));var a=n("2kYt"),i=n("PCNd"),o=n("sEIs"),r=n("pKmL"),s=n("AytR"),c=[{name:"Angular",version:s.a.versions.angular,description:"jot.features.angular",github:"https://github.com/angular/angular",documentation:"https://angular.io/docs/ts/latest/"},{name:"Angular Material",version:s.a.versions.material,description:"jot.features.angular-material",github:"https://github.com/angular/material2/",documentation:"https://material.angular.io/"},{name:"Angular Cli",version:s.a.versions.angularCli,description:"jot.features.angular-cli",github:"https://github.com/angular/angular-cli",documentation:"https://cli.angular.io/"},{name:"NgRx",version:s.a.versions.ngrx,description:"jot.features.ngrx",github:"https://github.com/ngrx/platform",documentation:"http://ngrx.github.io/",medium:"https://medium.com/@tomastrajan/object-assign-vs-object-spread-in-angular-ngrx-reducers-3d62ecb4a4b0"},{name:"RxJS",version:s.a.versions.rxjs,description:"jot.features.rxjs",github:"https://github.com/ReactiveX/RxJS",documentation:"http://reactivex.io/rxjs/",medium:"https://medium.com/@tomastrajan/practical-rxjs-in-the-wild-requests-with-concatmap-vs-mergemap-vs-forkjoin-11e5b2efe293"},{name:"Bootstrap",version:s.a.versions.bootstrap,description:"jot.features.bootstrap",github:"https://github.com/twbs/bootstrap",documentation:"https://getbootstrap.com/docs/4.0/layout/grid/",medium:"https://medium.com/@tomastrajan/how-to-build-responsive-layouts-with-bootstrap-4-and-angular-6-cfbb108d797b"},{name:"Typescript",version:s.a.versions.typescript,description:"jot.features.typescript",github:"https://github.com/Microsoft/TypeScript",documentation:"https://www.typescriptlang.org/docs/home.html"},{name:"I18n",version:s.a.versions.ngxtranslate,description:"jot.features.ngxtranslate",github:"https://github.com/ngx-translate/core",documentation:"http://www.ngx-translate.com/"},{name:"Font Awesome 5",version:s.a.versions.fontAwesome,description:"jot.features.fontawesome",github:"https://github.com/FortAwesome/Font-Awesome",documentation:"https://fontawesome.com/icons"},{name:"Cypress",version:s.a.versions.cypress,description:"jot.features.cypress",github:"https://github.com/cypress-io/cypress",documentation:"https://www.cypress.io/"},{name:"jot.features.themes.title",description:"jot.features.themes.description",documentation:"https://material.angular.io/guide/theming",medium:"https://medium.com/@tomastrajan/the-complete-guide-to-angular-material-themes-4d165a9d24d1"},{name:"jot.features.lazyloading.title",description:"jot.features.lazyloading.description",documentation:"https://angular.io/guide/router#lazy-loading-route-configuration"}],u=n("EM62"),m=n("cz58"),l=n("Meci"),b=n("PBFl"),g=n("Pq5H"),p=n("s2Ay");function d(t,e){if(1&t&&(u.Sb(0,"code"),u.Cc(1),u.Rb()),2&t){var n=u.ec().$implicit;u.Bb(1),u.Dc(n.version)}}var f=function(){return["fab","github"]};function h(t,e){if(1&t&&(u.Sb(0,"a",13),u.Ob(1,"fa-icon",14),u.Rb()),2&t){var n=u.ec().$implicit;u.kc("href",n.github,u.vc),u.Bb(1),u.kc("icon",u.nc(2,f))}}var v=function(){return["fab","medium-m"]};function w(t,e){if(1&t&&(u.Sb(0,"a",10),u.Ob(1,"fa-icon",14),u.Cc(2),u.fc(3,"translate"),u.Rb()),2&t){var n=u.ec().$implicit;u.kc("href",n.medium,u.vc),u.Bb(1),u.kc("icon",u.nc(5,v)),u.Bb(1),u.Ec("",u.gc(3,3,"jot.features.guide")," ")}}function j(t,e){if(1&t&&(u.Sb(0,"div",6),u.Sb(1,"mat-card"),u.Sb(2,"mat-card-title"),u.Ac(3,d,2,1,"code",7),u.Cc(4),u.fc(5,"translate"),u.Rb(),u.Sb(6,"mat-card-subtitle",8),u.Cc(7),u.fc(8,"translate"),u.Rb(),u.Sb(9,"mat-card-actions"),u.Ac(10,h,2,3,"a",9),u.Sb(11,"a",10),u.Ob(12,"fa-icon",11),u.Cc(13),u.fc(14,"translate"),u.Rb(),u.Ac(15,w,4,6,"a",12),u.Rb(),u.Rb(),u.Rb()),2&t){var n=e.$implicit,a=u.ec();u.kc("ngClass",a.routeAnimationsElements),u.Bb(3),u.kc("ngIf",n.version),u.Bb(1),u.Ec("",u.gc(5,8,n.name)," "),u.Bb(3),u.Ec(" ",u.gc(8,10,n.description)," "),u.Bb(3),u.kc("ngIf",n.github),u.Bb(1),u.kc("href",n.documentation,u.vc),u.Bb(2),u.Ec("",u.gc(14,12,"jot.features.documentation")," "),u.Bb(2),u.kc("ngIf",n.medium)}}var k,y,C,R=[{path:"",component:(k=function(){function t(){_classCallCheck(this,t),this.routeAnimationsElements=r.e,this.features=c}return _createClass(t,[{key:"ngOnInit",value:function(){}},{key:"openLink",value:function(t){window.open(t,"_blank")}}]),t}(),k.\u0275fac=function(t){return new(t||k)},k.\u0275cmp=u.Hb({type:k,selectors:[["jot-feature-list"]],decls:8,vars:4,consts:[[1,"container"],[1,"row"],[1,"col-md-12"],["rtl","",1,"main-heading"],[1,"row","align-items-end"],["class","col-md-6 col-lg-4",3,"ngClass",4,"ngFor","ngForOf"],[1,"col-md-6","col-lg-4",3,"ngClass"],[4,"ngIf"],["rtl",""],["mat-icon-button","","target","_blank",3,"href",4,"ngIf"],["mat-button","","target","_blank",3,"href"],["icon","book"],["mat-button","","target","_blank",3,"href",4,"ngIf"],["mat-icon-button","","target","_blank",3,"href"],[3,"icon"]],template:function(t,e){1&t&&(u.Sb(0,"div",0),u.Sb(1,"div",1),u.Sb(2,"div",2),u.Sb(3,"h1",3),u.Cc(4),u.fc(5,"translate"),u.Rb(),u.Rb(),u.Rb(),u.Sb(6,"div",4),u.Ac(7,j,16,14,"div",5),u.Rb(),u.Rb()),2&t&&(u.Bb(4),u.Dc(u.gc(5,2,"jot.features.title")),u.Bb(3),u.kc("ngForOf",e.features))},directives:[m.a,a.j,a.i,l.a,l.h,a.k,l.g,l.b,b.a,g.a],pipes:[p.c],styles:[""],changeDetection:0}),k),data:{title:"jot.menu.features"}}],x=((C=function t(){_classCallCheck(this,t)}).\u0275mod=u.Lb({type:C}),C.\u0275inj=u.Kb({factory:function(t){return new(t||C)},imports:[[o.k.forChild(R)],o.k]}),C),S=((y=function t(){_classCallCheck(this,t)}).\u0275mod=u.Lb({type:y}),y.\u0275inj=u.Kb({factory:function(t){return new(t||y)},imports:[[a.c,i.a,x]]}),y)}}]);