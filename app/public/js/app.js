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

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: /var/www/html/resources/js/app.js: Support for the experimental syntax 'jsx' isn't currently enabled (2:1):\n\n\u001b[0m \u001b[90m 1 |\u001b[39m require(\u001b[32m'./bootstrap'\u001b[39m)\u001b[33m;\u001b[39m\n\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 2 |\u001b[39m \u001b[33m<\u001b[39m\u001b[33mscript\u001b[39m src\u001b[33m=\u001b[39m\u001b[32m\"https://code.jquery.com/jquery-3.5.0.min.js\"\u001b[39m integrity\u001b[33m=\u001b[39m\u001b[32m\"sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=\"\u001b[39m crossorigin\u001b[33m=\u001b[39m\u001b[32m\"anonymous\"\u001b[39m\u001b[33m>\u001b[39m\u001b[33m<\u001b[39m\u001b[33m/\u001b[39m\u001b[33mscript\u001b[39m\u001b[33m>\u001b[39m\n \u001b[90m   |\u001b[39m \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\nAdd @babel/preset-react (https://github.com/babel/babel/tree/main/packages/babel-preset-react) to the 'presets' section of your Babel config to enable transformation.\nIf you want to leave it as-is, add @babel/plugin-syntax-jsx (https://github.com/babel/babel/tree/main/packages/babel-plugin-syntax-jsx) to the 'plugins' section to enable parsing.\n\nIf you already added the plugin for this syntax to your config, it's possible that your config isn't being loaded.\nYou can re-run Babel with the BABEL_SHOW_CONFIG_FOR environment variable to show the loaded configuration:\n\tnpx cross-env BABEL_SHOW_CONFIG_FOR=/var/www/html/resources/js/app.js <your build command>\nSee https://babeljs.io/docs/configuration#print-effective-configs for more info.\n\n    at constructor (/var/www/html/node_modules/@babel/parser/lib/index.js:351:19)\n    at Parser.raise (/var/www/html/node_modules/@babel/parser/lib/index.js:3281:19)\n    at Parser.expectOnePlugin (/var/www/html/node_modules/@babel/parser/lib/index.js:3315:18)\n    at Parser.parseExprAtom (/var/www/html/node_modules/@babel/parser/lib/index.js:10952:18)\n    at Parser.parseExprSubscripts (/var/www/html/node_modules/@babel/parser/lib/index.js:10607:23)\n    at Parser.parseUpdate (/var/www/html/node_modules/@babel/parser/lib/index.js:10590:21)\n    at Parser.parseMaybeUnary (/var/www/html/node_modules/@babel/parser/lib/index.js:10568:23)\n    at Parser.parseMaybeUnaryOrPrivate (/var/www/html/node_modules/@babel/parser/lib/index.js:10422:61)\n    at Parser.parseExprOps (/var/www/html/node_modules/@babel/parser/lib/index.js:10427:23)\n    at Parser.parseMaybeConditional (/var/www/html/node_modules/@babel/parser/lib/index.js:10404:23)\n    at Parser.parseMaybeAssign (/var/www/html/node_modules/@babel/parser/lib/index.js:10365:21)\n    at Parser.parseExpressionBase (/var/www/html/node_modules/@babel/parser/lib/index.js:10319:23)\n    at /var/www/html/node_modules/@babel/parser/lib/index.js:10315:39\n    at Parser.allowInAnd (/var/www/html/node_modules/@babel/parser/lib/index.js:11952:16)\n    at Parser.parseExpression (/var/www/html/node_modules/@babel/parser/lib/index.js:10315:17)\n    at Parser.parseStatementContent (/var/www/html/node_modules/@babel/parser/lib/index.js:12393:23)\n    at Parser.parseStatementLike (/var/www/html/node_modules/@babel/parser/lib/index.js:12260:17)\n    at Parser.parseModuleItem (/var/www/html/node_modules/@babel/parser/lib/index.js:12237:17)\n    at Parser.parseBlockOrModuleBlockBody (/var/www/html/node_modules/@babel/parser/lib/index.js:12817:36)\n    at Parser.parseBlockBody (/var/www/html/node_modules/@babel/parser/lib/index.js:12810:10)\n    at Parser.parseProgram (/var/www/html/node_modules/@babel/parser/lib/index.js:12137:10)\n    at Parser.parseTopLevel (/var/www/html/node_modules/@babel/parser/lib/index.js:12127:25)\n    at Parser.parse (/var/www/html/node_modules/@babel/parser/lib/index.js:13941:10)\n    at parse (/var/www/html/node_modules/@babel/parser/lib/index.js:13983:38)\n    at parser (/var/www/html/node_modules/@babel/core/lib/parser/index.js:41:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (/var/www/html/node_modules/@babel/core/lib/transformation/normalize-file.js:64:37)\n    at normalizeFile.next (<anonymous>)\n    at run (/var/www/html/node_modules/@babel/core/lib/transformation/index.js:21:50)\n    at run.next (<anonymous>)\n    at transform (/var/www/html/node_modules/@babel/core/lib/transform.js:22:33)\n    at transform.next (<anonymous>)\n    at step (/var/www/html/node_modules/gensync/index.js:261:32)\n    at /var/www/html/node_modules/gensync/index.js:273:13\n    at async.call.result.err.err (/var/www/html/node_modules/gensync/index.js:223:11)\n    at /var/www/html/node_modules/gensync/index.js:189:28\n    at /var/www/html/node_modules/@babel/core/lib/gensync-utils/async.js:67:7\n    at /var/www/html/node_modules/gensync/index.js:113:33\n    at step (/var/www/html/node_modules/gensync/index.js:287:14)\n    at /var/www/html/node_modules/gensync/index.js:273:13\n    at async.call.result.err.err (/var/www/html/node_modules/gensync/index.js:223:11)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /var/www/html/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /var/www/html/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });