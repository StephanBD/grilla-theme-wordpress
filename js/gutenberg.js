/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/helpers.js":
/*!***************************!*\
  !*** ./src/js/helpers.js ***!
  \***************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "query": () => (/* binding */ query),
/* harmony export */   "queryAll": () => (/* binding */ queryAll)
/* harmony export */ });
function query(node) {
  var from = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : document;
  return from.querySelector(node);
}
function queryAll(node) {
  return document.querySelectorAll(node);
}

var toggleCSSclasses = function toggleCSSclasses(el) {
  for (var _len = arguments.length, cls = new Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
    cls[_key - 1] = arguments[_key];
  }

  return cls.map(function (cl) {
    return el.classList.toggle(cl);
  });
}; // export function getXY(e) {
// 	// Get the bounding rectangle of target
// 	const rect = e.target.getBoundingClientRect();
// 	// Mouse position
// 	const x = e.clientX - rect.left;
// 	const y = e.clientY - rect.top;
// 	return { x, y }
// }
// export function emoveClasses(element, ...classes) {
// 	// console.log(classes);
// 	classes.forEach(className => {
// 		element.classList.remove(className)
// 	});
// 	// return element
// }
// -------------------------------------------------
// export function insertBefore(newNode, existingNode) {
// 	existingNode.parentNode.insertBefore(newNode, existingNode);
// }
// export function insertAfter(newNode, existingNode) {
// 	existingNode.parentNode.insertBefore(newNode, existingNode.nextSibling);
// }

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
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
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
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!*****************************!*\
  !*** ./src/js/gutenberg.js ***!
  \*****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _helpers_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./helpers.js */ "./src/js/helpers.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }


var editorWrapper;

window.onload = function () {
  // --------------------
  var _wp$data = wp.data,
      select = _wp$data.select,
      subscribe = _wp$data.subscribe;

  var PageTemplateSwitcher = /*#__PURE__*/function () {
    function PageTemplateSwitcher() {
      _classCallCheck(this, PageTemplateSwitcher);

      this.template = null;
    }

    _createClass(PageTemplateSwitcher, [{
      key: "init",
      value: function init() {
        var _this = this;

        subscribe(function () {
          var newTemplate = select('core/editor').getEditedPostAttribute('template');

          if (newTemplate !== _this.template) {
            _this.template = newTemplate;

            _this.changeTemplate();
          }
        });
      }
    }, {
      key: "changeTemplate",
      value: function changeTemplate() {
        editorWrapper = (0,_helpers_js__WEBPACK_IMPORTED_MODULE_0__.query)(".edit-post-visual-editor__content-area"); // do your stuff here

        console.log("template changed to ".concat(this.template));

        if (this.template === "full-width.php" || this.template === "blank.php") {
          // editorWrapper.style.maxWidth = "100%"
          console.log(editorWrapper);
          console.log("full-width");
          editorWrapper.classList.add("full-width");
        } else {
          editorWrapper.classList.remove("full-width");
          editorWrapper.style.maxWidth = ""; // console.log("no change");
        }
      }
    }]);

    return PageTemplateSwitcher;
  }();

  new PageTemplateSwitcher().init();
}; //====================================================//
})();

/******/ })()
;
//# sourceMappingURL=gutenberg.js.map