/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/sass/style.scss":
/*!*****************************!*\
  !*** ./src/sass/style.scss ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./src/scripts/script.js":
/*!*******************************!*\
  !*** ./src/scripts/script.js ***!
  \*******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _templateSupport_frontPage__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./templateSupport/frontPage */ "./src/scripts/templateSupport/frontPage.js");
/* harmony import */ var _templateSupport_frontPage__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_templateSupport_frontPage__WEBPACK_IMPORTED_MODULE_0__);

document.addEventListener('DOMContentLoaded', function () {
  var MENU_TOGGLE_BUTTON = document.getElementById('menu-toggle-button');
  var MENU_CLOSE_BUTTON = document.getElementById('menu-close-button');
  var MAIN_SIDEBAR = document.getElementById('main-sidebar');
  MENU_TOGGLE_BUTTON.addEventListener('click', function () {
    return MAIN_SIDEBAR.classList.toggle('active');
  });
  MENU_CLOSE_BUTTON.addEventListener('click', function () {
    return MAIN_SIDEBAR.classList.remove('active');
  });
});

/***/ }),

/***/ "./src/scripts/templateSupport/frontPage.js":
/*!**************************************************!*\
  !*** ./src/scripts/templateSupport/frontPage.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

if (document.querySelector('.home.blog')) {
  document.addEventListener('DOMContentLoaded', function () {
    loadMore();
    modalWindows();
  });
}

function loadMore() {
  var LOAD_MORE_BTN = document.querySelector('.load-more.button');
  var POST_CONTAINER = document.querySelector('.post-container');
  var PAGES_NUM = Math.ceil(enqueuedData.postsNum / 6);
  var NONCE = document.getElementById('__load_more_posts_nonce').getAttribute('value');
  var isLoading = false;
  var requestedPage = 3;
  LOAD_MORE_BTN.addEventListener('click', function (e) {
    e.preventDefault;
    requestData();
  });

  function htmlToElements(html) {
    var template = document.createElement('template');
    template.innerHTML = html;
    return template.content.childNodes;
  }

  function postOperations() {
    requestedPage++;
    isLoading = false;
    LOAD_MORE_BTN.classList.remove('is-loading');
    modalWindows();

    if (requestedPage > PAGES_NUM) {
      LOAD_MORE_BTN.classList.add('hide');
    }
  }

  function appendPosts(posts) {
    setTimeout(function () {
      posts.forEach(function (post) {
        POST_CONTAINER.appendChild(post.cloneNode(true));
      });
      postOperations();
    }, 1500);
  }

  function requestData() {
    if (isLoading) return;
    if (requestedPage > PAGES_NUM) return;
    isLoading = true;
    LOAD_MORE_BTN.classList.add('is-loading');
    var params = new URLSearchParams({
      action: 'load_more_posts',
      nonce: NONCE,
      requested_page: requestedPage
    });
    fetch(enqueuedData.ajaxUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
      },
      body: params.toString()
    }).then(function (res) {
      return res.text();
    }).then(function (data) {
      return appendPosts(htmlToElements(data));
    })["catch"](function (err) {
      return console.log(err);
    });
  }
}

function modalWindows() {
  var openedModalId = '';
  var overlayListener = false;
  var articleTiles = document.querySelectorAll('.grid-tile > article:not(.click-listener)');
  var PAGE_OVERLAY = document.getElementById('page-overlay');

  var openModalWindow = function openModalWindow(e, article) {
    if (article !== e.target) return;
    var el = e.target.querySelector('div.modal-window');
    PAGE_OVERLAY.classList.add('active');
    el.classList.add('active');
    openedModalId = el.id;
  };

  var closeModalWindow = function closeModalWindow() {
    document.getElementById(openedModalId).classList.remove('active');
    PAGE_OVERLAY.classList.remove('active');
  };

  (function () {
    if (overlayListener) return;
    overlayListener = true;
    PAGE_OVERLAY.addEventListener('click', closeModalWindow);
  })();

  articleTiles.forEach(function (article) {
    article.addEventListener('click', function (e) {
      return openModalWindow(e, article);
    });
    article.classList.add('click-listener');
  });
}

/***/ }),

/***/ 0:
/*!***********************************************************!*\
  !*** multi ./src/scripts/script.js ./src/sass/style.scss ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/vavra/Projects/dev1/wp-content/themes/nowadays_alchemyst/src/scripts/script.js */"./src/scripts/script.js");
module.exports = __webpack_require__(/*! /home/vavra/Projects/dev1/wp-content/themes/nowadays_alchemyst/src/sass/style.scss */"./src/sass/style.scss");


/***/ })

/******/ });