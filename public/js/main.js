/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/frontend.js":
/*!**********************************!*\
  !*** ./resources/js/frontend.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var jquery_ui_bundle_jquery_ui__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! jquery-ui-bundle/jquery-ui */ "./node_modules/jquery-ui-bundle/jquery-ui.js");
/* harmony import */ var jquery_ui_bundle_jquery_ui__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(jquery_ui_bundle_jquery_ui__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var bootstrap_dist_js_bootstrap_bundle__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! bootstrap/dist/js/bootstrap.bundle */ "./node_modules/bootstrap/dist/js/bootstrap.bundle.js");
/* harmony import */ var bootstrap_dist_js_bootstrap_bundle__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(bootstrap_dist_js_bootstrap_bundle__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.esm.js");
/* harmony import */ var _frontend_header__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./frontend/header */ "./resources/js/frontend/header.js");
/* harmony import */ var _frontend_slider__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./frontend/slider */ "./resources/js/frontend/slider.js");
/* harmony import */ var _frontend_page__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./frontend/page */ "./resources/js/frontend/page.js");








/***/ }),

/***/ "./resources/js/frontend/header.js":
/*!*****************************************!*\
  !*** ./resources/js/frontend/header.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

var el = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.lang');
var cur = el.find('.lang__current');
var options = el.find('.lang__options li');
var content = jquery__WEBPACK_IMPORTED_MODULE_0___default()('#content');
jquery__WEBPACK_IMPORTED_MODULE_0___default()('.price-number__increment').on('click', function (event) {
  var counting = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).closest('.price-number').find('.price_counting');
  var data = parseInt(counting.text());
  data = data + 1;
  counting.text(data);
});
jquery__WEBPACK_IMPORTED_MODULE_0___default()('.price-number__decrement').on('click', function () {
  var counting = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).closest('.price-number').find('.price_counting');
  var data = parseInt(counting.text());
  console.log(counting);
  if (data <= 1) {
    return false;
  } else {
    data = data - 1;
    counting.text(data);
  }
});
el.on('click', function (e) {
  el.addClass('show-options');
  setTimeout(function () {
    el.addClass('anim-options');
  }, 50);
  setTimeout(function () {
    el.addClass('show-shadow');
  }, 200);
});
options.on('click', function (e) {
  e.stopPropagation();
  el.removeClass('anim-options');
  el.removeClass('show-shadow');
  var newLang = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).data('lang');
  cur.find('span').text(newLang);
  content.attr('class', newLang);
  setLang(newLang);
  options.removeClass('selected');
  jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass('selected');
  setTimeout(function () {
    el.removeClass('show-options');
  }, 600);
});
function getLang() {
  var lang;
  if (localStorage.getItem('currentLang') === null) {
    lang = cur.find('span').text();
  } else {
    lang = JSON.parse(localStorage.getItem('currentLang')).toLowerCase();
  }
  cur.find('span').text(lang);
  options.parent().find("li[data-lang=\"".concat(lang, "\"]")).addClass('selected');
  content.attr('class', lang);
}
getLang();
function setLang(newLang) {
  localStorage.setItem('currentLang', JSON.stringify(newLang).toLowerCase());
  content.attr('class', newLang);
}

/***/ }),

/***/ "./resources/js/frontend/page.js":
/*!***************************************!*\
  !*** ./resources/js/frontend/page.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

window.jQuery = __webpack_require__.g.jquery = (jquery__WEBPACK_IMPORTED_MODULE_0___default());
// const icons = {
//     header: "fas fa-plus",
//     activeHeader: "fas fa-minus"
// };
// $(function(){
//     $("#accordion").accordion({
//         icons: icons
//     });
// });

/***/ }),

/***/ "./resources/js/frontend/slider.js":
/*!*****************************************!*\
  !*** ./resources/js/frontend/slider.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.esm.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_1__);


swiper__WEBPACK_IMPORTED_MODULE_0__["default"].use([swiper__WEBPACK_IMPORTED_MODULE_0__.Navigation, swiper__WEBPACK_IMPORTED_MODULE_0__.Parallax, swiper__WEBPACK_IMPORTED_MODULE_0__.Pagination, swiper__WEBPACK_IMPORTED_MODULE_0__.Mousewheel, swiper__WEBPACK_IMPORTED_MODULE_0__.Keyboard, swiper__WEBPACK_IMPORTED_MODULE_0__.EffectCoverflow, swiper__WEBPACK_IMPORTED_MODULE_0__.Zoom, swiper__WEBPACK_IMPORTED_MODULE_0__.Grid, swiper__WEBPACK_IMPORTED_MODULE_0__.A11y, swiper__WEBPACK_IMPORTED_MODULE_0__.FreeMode, swiper__WEBPACK_IMPORTED_MODULE_0__.Scrollbar]);
jquery__WEBPACK_IMPORTED_MODULE_1___default()(function () {
  var heroSlider = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"](".heroSlider", {
    direction: "vertical",
    autoHeight: true,
    grabCursor: true,
    // zoom: true,
    keyboard: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function renderBullet(index, className) {
        return '<span class="' + className + '">' + (index < 9 ? '0' : '') + (index + 1) + "</span>";
      }
    }
  });
  var artistSlider = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"](".slideSlider", {
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: false,
      draggable: true
    },
    slidesPerView: 2,
    spaceBetween: 30,
    grabCursor: true,
    breakpoints: {
      576: {
        slidesPerView: 3
      },
      1200: {
        centeredSlides: true,
        slidesPerView: 4
      }
    }
  });
  var newSlider = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"](".newSlider", {
    effect: "coverflow",
    grabCursor: true,
    slidesPerView: "auto",
    autoHeight: true,
    centeredSlides: true,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2,
      slideShadows: true
    },
    spaceBetween: 100,
    loop: false,
    pagination: false

    // breakpoints: {
    //     576:{
    //         slidesPerView: 3,
    //     },
    //     768: {
    //         slidesPerView: 4,
    //     }
    // }
  });

  var newsSlider = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"](".newsSlider", {
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: false,
      draggable: true
    },
    grabCursor: false
  });
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/global */
/******/ 	(() => {
/******/ 		__webpack_require__.g = (function() {
/******/ 			if (typeof globalThis === 'object') return globalThis;
/******/ 			try {
/******/ 				return this || new Function('return this')();
/******/ 			} catch (e) {
/******/ 				if (typeof window === 'object') return window;
/******/ 			}
/******/ 		})();
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"main": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["vendor"], () => (__webpack_require__("./resources/js/frontend.js")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=main.js.map