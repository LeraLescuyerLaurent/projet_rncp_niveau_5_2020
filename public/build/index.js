(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["index"],{

/***/ "./assets/js/editor/Buttons/ArrayButton.jsx":
/*!**************************************************!*\
  !*** ./assets/js/editor/Buttons/ArrayButton.jsx ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ArrayButton; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.concat */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./Button */ "./assets/js/editor/Buttons/Button.jsx");
















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




var ArrayButton = /*#__PURE__*/function (_Button) {
  _inherits(ArrayButton, _Button);

  var _super = _createSuper(ArrayButton);

  function ArrayButton() {
    var _this;

    _classCallCheck(this, ArrayButton);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "shortcut", 'Ctrl-B');

    return _this;
  }

  _createClass(ArrayButton, [{
    key: "icon",
    value: function icon() {
      return Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("svg", {
        xmlns: "http://www.w3.org/2000/svg",
        viewBox: "0 0 512 512"
      }, Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("path", {
        d: "M149.333 56v80c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V56c0-13.255 10.745-24 24-24h101.333c13.255 0 24 10.745 24 24zm181.334 240v-80c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.256 0 24.001-10.745 24.001-24zm32-240v80c0 13.255 10.745 24 24 24H488c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24zm-32 80V56c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.256 0 24.001-10.745 24.001-24zm-205.334 56H24c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24zM0 376v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H24c-13.255 0-24 10.745-24 24zm386.667-56H488c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24zm0 160H488c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24zM181.333 376v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24z"
      }));
    }
  }, {
    key: "action",
    value: function action(editor) {
      editor.getDoc().replaceSelection('<table><thead><tr><th colspan="2">The table header</th></tr></thead><tbody><tr><td>The table body</td><td>with two columns</td></tr></tbody></table>');
      editor.focus();
    }
  }]);

  return ArrayButton;
}(_Button__WEBPACK_IMPORTED_MODULE_16__["default"]);



/***/ }),

/***/ "./assets/js/editor/Buttons/BoldButton.jsx":
/*!*************************************************!*\
  !*** ./assets/js/editor/Buttons/BoldButton.jsx ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return BoldButton; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.concat */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./Button */ "./assets/js/editor/Buttons/Button.jsx");
















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




var BoldButton = /*#__PURE__*/function (_Button) {
  _inherits(BoldButton, _Button);

  var _super = _createSuper(BoldButton);

  function BoldButton() {
    var _this;

    _classCallCheck(this, BoldButton);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "shortcut", 'Ctrl-B');

    return _this;
  }

  _createClass(BoldButton, [{
    key: "icon",
    value: function icon() {
      return Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("svg", {
        xmlns: "http://www.w3.org/2000/svg",
        viewBox: "0 0 384 512"
      }, Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("path", {
        d: "M333.49 238a122 122 0 0 0 27-65.21C367.87 96.49 308 32 233.42 32H34a16 16 0 0 0-16 16v48a16 16 0 0 0 16 16h31.87v288H34a16 16 0 0 0-16 16v48a16 16 0 0 0 16 16h209.32c70.8 0 134.14-51.75 141-122.4 4.74-48.45-16.39-92.06-50.83-119.6zM145.66 112h87.76a48 48 0 0 1 0 96h-87.76zm87.76 288h-87.76V288h87.76a56 56 0 0 1 0 112z"
      }));
    }
  }, {
    key: "action",
    value: function action(editor) {
      editor.getDoc().replaceSelection('**' + editor.getDoc().getSelection() + '**');
      editor.focus();
    }
  }]);

  return BoldButton;
}(_Button__WEBPACK_IMPORTED_MODULE_16__["default"]);



/***/ }),

/***/ "./assets/js/editor/Buttons/Button.jsx":
/*!*********************************************!*\
  !*** ./assets/js/editor/Buttons/Button.jsx ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Button; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.concat */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_filter__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.filter */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_filter__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_filter__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.for-each */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_define_properties__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.define-properties */ "./node_modules/core-js/modules/es.object.define-properties.js");
/* harmony import */ var core_js_modules_es_object_define_properties__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_properties__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptor__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptor */ "./node_modules/core-js/modules/es.object.get-own-property-descriptor.js");
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptor__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_own_property_descriptor__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptors__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptors */ "./node_modules/core-js/modules/es.object.get-own-property-descriptors.js");
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptors__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_own_property_descriptors__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_object_keys__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.object.keys */ "./node_modules/core-js/modules/es.object.keys.js");
/* harmony import */ var core_js_modules_es_object_keys__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_keys__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");























function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }



var Button = /*#__PURE__*/function (_Component) {
  _inherits(Button, _Component);

  var _super = _createSuper(Button);

  function Button() {
    var _this;

    _classCallCheck(this, Button);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "shortcut", null);

    _defineProperty(_assertThisInitialized(_this), "onClick", function (e) {
      e.preventDefault();

      _this.action(_this.props.editor);
    });

    return _this;
  }

  _createClass(Button, [{
    key: "componentDidMount",
    value: function componentDidMount() {
      var _this2 = this;

      this.props.editor.setOption('extraKeys', _objectSpread(_objectSpread({}, this.props.editor.getOption('extraKeys')), {}, _defineProperty({}, this.shortcut, function () {
        _this2.action(_this2.props.editor);
      })));
    }
  }, {
    key: "render",
    value: function render(props, state) {
      return Object(preact__WEBPACK_IMPORTED_MODULE_22__["h"])("button", {
        onClick: this.onClick
      }, this.icon(props, state));
    }
  }, {
    key: "icon",
    value: function icon() {
      return null;
    }
  }, {
    key: "action",
    value: function action() {}
  }]);

  return Button;
}(preact__WEBPACK_IMPORTED_MODULE_22__["Component"]);



/***/ }),

/***/ "./assets/js/editor/Buttons/HcinqButton.jsx":
/*!**************************************************!*\
  !*** ./assets/js/editor/Buttons/HcinqButton.jsx ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return HcinqButton; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.concat */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./Button */ "./assets/js/editor/Buttons/Button.jsx");
















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




var HcinqButton = /*#__PURE__*/function (_Button) {
  _inherits(HcinqButton, _Button);

  var _super = _createSuper(HcinqButton);

  function HcinqButton() {
    var _this;

    _classCallCheck(this, HcinqButton);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "shortcut", 'Ctrl-5');

    return _this;
  }

  _createClass(HcinqButton, [{
    key: "icon",
    value: function icon() {
      return Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("span", null, "H5");
    }
  }, {
    key: "action",
    value: function action(editor) {
      editor.getDoc().replaceSelection('##### ' + editor.getDoc().getSelection() + ' #####');
      editor.focus();
    }
  }]);

  return HcinqButton;
}(_Button__WEBPACK_IMPORTED_MODULE_16__["default"]);



/***/ }),

/***/ "./assets/js/editor/Buttons/HdeuxButton.jsx":
/*!**************************************************!*\
  !*** ./assets/js/editor/Buttons/HdeuxButton.jsx ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return HdeuxButton; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.concat */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./Button */ "./assets/js/editor/Buttons/Button.jsx");
















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




var HdeuxButton = /*#__PURE__*/function (_Button) {
  _inherits(HdeuxButton, _Button);

  var _super = _createSuper(HdeuxButton);

  function HdeuxButton() {
    var _this;

    _classCallCheck(this, HdeuxButton);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "shortcut", 'Ctrl-2');

    return _this;
  }

  _createClass(HdeuxButton, [{
    key: "icon",
    value: function icon() {
      return Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("span", null, "H2");
    }
  }, {
    key: "action",
    value: function action(editor) {
      editor.getDoc().replaceSelection('## ' + editor.getDoc().getSelection() + ' ##');
      editor.focus();
    }
  }]);

  return HdeuxButton;
}(_Button__WEBPACK_IMPORTED_MODULE_16__["default"]);



/***/ }),

/***/ "./assets/js/editor/Buttons/HquatreButton.jsx":
/*!****************************************************!*\
  !*** ./assets/js/editor/Buttons/HquatreButton.jsx ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return HquatreButton; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.concat */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./Button */ "./assets/js/editor/Buttons/Button.jsx");
















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




var HquatreButton = /*#__PURE__*/function (_Button) {
  _inherits(HquatreButton, _Button);

  var _super = _createSuper(HquatreButton);

  function HquatreButton() {
    var _this;

    _classCallCheck(this, HquatreButton);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "shortcut", 'Ctrl-4');

    return _this;
  }

  _createClass(HquatreButton, [{
    key: "icon",
    value: function icon() {
      return Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("span", null, "H4");
    }
  }, {
    key: "action",
    value: function action(editor) {
      editor.getDoc().replaceSelection('#### ' + editor.getDoc().getSelection() + ' ####');
      editor.focus();
    }
  }]);

  return HquatreButton;
}(_Button__WEBPACK_IMPORTED_MODULE_16__["default"]);



/***/ }),

/***/ "./assets/js/editor/Buttons/HtroisButton.jsx":
/*!***************************************************!*\
  !*** ./assets/js/editor/Buttons/HtroisButton.jsx ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return HtroisButton; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.concat */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./Button */ "./assets/js/editor/Buttons/Button.jsx");
















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




var HtroisButton = /*#__PURE__*/function (_Button) {
  _inherits(HtroisButton, _Button);

  var _super = _createSuper(HtroisButton);

  function HtroisButton() {
    var _this;

    _classCallCheck(this, HtroisButton);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "shortcut", 'Ctrl-3');

    return _this;
  }

  _createClass(HtroisButton, [{
    key: "icon",
    value: function icon() {
      return Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("span", null, "H3");
    }
  }, {
    key: "action",
    value: function action(editor) {
      editor.getDoc().replaceSelection('### ' + editor.getDoc().getSelection() + ' ###');
      editor.focus();
    }
  }]);

  return HtroisButton;
}(_Button__WEBPACK_IMPORTED_MODULE_16__["default"]);



/***/ }),

/***/ "./assets/js/editor/Buttons/HunButton.jsx":
/*!************************************************!*\
  !*** ./assets/js/editor/Buttons/HunButton.jsx ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return HunButton; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.concat */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./Button */ "./assets/js/editor/Buttons/Button.jsx");
















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




var HunButton = /*#__PURE__*/function (_Button) {
  _inherits(HunButton, _Button);

  var _super = _createSuper(HunButton);

  function HunButton() {
    var _this;

    _classCallCheck(this, HunButton);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "shortcut", 'Ctrl-1');

    return _this;
  }

  _createClass(HunButton, [{
    key: "icon",
    value: function icon() {
      return Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("span", null, "H1");
    }
  }, {
    key: "action",
    value: function action(editor) {
      editor.getDoc().replaceSelection('# ' + editor.getDoc().getSelection() + ' #');
      editor.focus();
    }
  }]);

  return HunButton;
}(_Button__WEBPACK_IMPORTED_MODULE_16__["default"]);



/***/ }),

/***/ "./assets/js/editor/Buttons/ImageButton.jsx":
/*!**************************************************!*\
  !*** ./assets/js/editor/Buttons/ImageButton.jsx ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ImageButton; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./Button */ "./assets/js/editor/Buttons/Button.jsx");















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }




var ImageButton = /*#__PURE__*/function (_Button) {
  _inherits(ImageButton, _Button);

  var _super = _createSuper(ImageButton);

  function ImageButton() {
    _classCallCheck(this, ImageButton);

    return _super.apply(this, arguments);
  }

  _createClass(ImageButton, [{
    key: "icon",
    value: function icon() {
      return Object(preact__WEBPACK_IMPORTED_MODULE_14__["h"])("svg", {
        xmlns: "http://www.w3.org/2000/svg",
        viewBox: "0 0 512 512"
      }, Object(preact__WEBPACK_IMPORTED_MODULE_14__["h"])("path", {
        d: "M464 448H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h416c26.51 0 48 21.49 48 48v288c0 26.51-21.49 48-48 48zM112 120c-30.928 0-56 25.072-56 56s25.072 56 56 56 56-25.072 56-56-25.072-56-56-56zM64 384h384V272l-87.515-87.515c-4.686-4.686-12.284-4.686-16.971 0L208 320l-55.515-55.515c-4.686-4.686-12.284-4.686-16.971 0L64 336v48z"
      }));
    }
  }, {
    key: "action",
    value: function action(editor) {
      var list = document.getElementById('image');

      if (list) {
        list.remove(list);
      }

      var patch_image = document.getElementById("patch_image").value;
      var NameIframe = "image";
      var ele = document.getElementById("modal");
      ele.classList.remove("modalNone");
      var iframe = document.createElement('iframe');
      iframe.setAttribute('name', NameIframe);
      iframe.setAttribute('id', NameIframe);
      iframe.setAttribute('src', patch_image);
      iframe.style.width = '95%';
      iframe.style.minHeight = '80vh';
      iframe.style.minHeight = '80vh';
      iframe.style.marginLeft = '2.5%';
      iframe.style.border = "1px solid lightgrey";
      iframe.style.background = "#fff";
      ele.appendChild(iframe);

      if (window.IMAGE) {
        editor.getDoc().replaceSelection(window.IMAGE);
        focus();
        delete window.IMAGE;
      }
    }
  }]);

  return ImageButton;
}(_Button__WEBPACK_IMPORTED_MODULE_15__["default"]);



/***/ }),

/***/ "./assets/js/editor/Buttons/ItalicButton.jsx":
/*!***************************************************!*\
  !*** ./assets/js/editor/Buttons/ItalicButton.jsx ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ItalicButton; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.concat */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./Button */ "./assets/js/editor/Buttons/Button.jsx");
















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




var ItalicButton = /*#__PURE__*/function (_Button) {
  _inherits(ItalicButton, _Button);

  var _super = _createSuper(ItalicButton);

  function ItalicButton() {
    var _this;

    _classCallCheck(this, ItalicButton);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "shortcut", 'Ctrl-I');

    return _this;
  }

  _createClass(ItalicButton, [{
    key: "icon",
    value: function icon() {
      return Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("svg", {
        xmlns: "http://www.w3.org/2000/svg",
        viewBox: "0 0 320 512"
      }, Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("path", {
        d: "M320 48v32a16 16 0 0 1-16 16h-62.76l-80 320H208a16 16 0 0 1 16 16v32a16 16 0 0 1-16 16H16a16 16 0 0 1-16-16v-32a16 16 0 0 1 16-16h62.76l80-320H112a16 16 0 0 1-16-16V48a16 16 0 0 1 16-16h192a16 16 0 0 1 16 16z"
      }));
    }
  }, {
    key: "action",
    value: function action(editor) {
      editor.getDoc().replaceSelection('*' + editor.getDoc().getSelection() + '*');
      editor.focus();
    }
  }]);

  return ItalicButton;
}(_Button__WEBPACK_IMPORTED_MODULE_16__["default"]);



/***/ }),

/***/ "./assets/js/editor/Buttons/ListOlButton.jsx":
/*!***************************************************!*\
  !*** ./assets/js/editor/Buttons/ListOlButton.jsx ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ListOlButton; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.concat */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./Button */ "./assets/js/editor/Buttons/Button.jsx");
















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




var ListOlButton = /*#__PURE__*/function (_Button) {
  _inherits(ListOlButton, _Button);

  var _super = _createSuper(ListOlButton);

  function ListOlButton() {
    var _this;

    _classCallCheck(this, ListOlButton);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "shortcut", 'Ctrl-B');

    return _this;
  }

  _createClass(ListOlButton, [{
    key: "icon",
    value: function icon() {
      return Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("svg", {
        xmlns: "http://www.w3.org/2000/svg",
        viewBox: "0 0 512 512"
      }, Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("path", {
        d: "M61.77 401l17.5-20.15a19.92 19.92 0 0 0 5.07-14.19v-3.31C84.34 356 80.5 352 73 352H16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h22.83a157.41 157.41 0 0 0-11 12.31l-5.61 7c-4 5.07-5.25 10.13-2.8 14.88l1.05 1.93c3 5.76 6.29 7.88 12.25 7.88h4.73c10.33 0 15.94 2.44 15.94 9.09 0 4.72-4.2 8.22-14.36 8.22a41.54 41.54 0 0 1-15.47-3.12c-6.49-3.88-11.74-3.5-15.6 3.12l-5.59 9.31c-3.72 6.13-3.19 11.72 2.63 15.94 7.71 4.69 20.38 9.44 37 9.44 34.16 0 48.5-22.75 48.5-44.12-.03-14.38-9.12-29.76-28.73-34.88zM496 224H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zM16 160h64a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8H64V40a8 8 0 0 0-8-8H32a8 8 0 0 0-7.14 4.42l-8 16A8 8 0 0 0 24 64h8v64H16a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zm-3.91 160H80a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8H41.32c3.29-10.29 48.34-18.68 48.34-56.44 0-29.06-25-39.56-44.47-39.56-21.36 0-33.8 10-40.46 18.75-4.37 5.59-3 10.84 2.8 15.37l8.58 6.88c5.61 4.56 11 2.47 16.12-2.44a13.44 13.44 0 0 1 9.46-3.84c3.33 0 9.28 1.56 9.28 8.75C51 248.19 0 257.31 0 304.59v4C0 316 5.08 320 12.09 320z"
      }));
    }
  }, {
    key: "action",
    value: function action(editor) {
      editor.getDoc().replaceSelection('1. Liste 1');
      editor.focus();
    }
  }]);

  return ListOlButton;
}(_Button__WEBPACK_IMPORTED_MODULE_16__["default"]);



/***/ }),

/***/ "./assets/js/editor/Buttons/ListUlButton.jsx":
/*!***************************************************!*\
  !*** ./assets/js/editor/Buttons/ListUlButton.jsx ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ListUlButton; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.concat */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./Button */ "./assets/js/editor/Buttons/Button.jsx");
















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




var ListUlButton = /*#__PURE__*/function (_Button) {
  _inherits(ListUlButton, _Button);

  var _super = _createSuper(ListUlButton);

  function ListUlButton() {
    var _this;

    _classCallCheck(this, ListUlButton);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "shortcut", 'Ctrl-B');

    return _this;
  }

  _createClass(ListUlButton, [{
    key: "icon",
    value: function icon() {
      return Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("svg", {
        xmlns: "http://www.w3.org/2000/svg",
        viewBox: "0 0 512 512"
      }, Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("path", {
        d: "M48 48a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm0 160a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm0 160a48 48 0 1 0 48 48 48 48 0 0 0-48-48zm448 16H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"
      }));
    }
  }, {
    key: "action",
    value: function action(editor) {
      editor.getDoc().replaceSelection('* Liste point');
      editor.focus();
    }
  }]);

  return ListUlButton;
}(_Button__WEBPACK_IMPORTED_MODULE_16__["default"]);



/***/ }),

/***/ "./assets/js/editor/Buttons/SpeechButton.jsx":
/*!***************************************************!*\
  !*** ./assets/js/editor/Buttons/SpeechButton.jsx ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return SpeechButton; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_slice__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.slice */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptor__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptor */ "./node_modules/core-js/modules/es.object.get-own-property-descriptor.js");
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptor__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_own_property_descriptor__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_reflect_get__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.reflect.get */ "./node_modules/core-js/modules/es.reflect.get.js");
/* harmony import */ var core_js_modules_es_reflect_get__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_get__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_string_ends_with__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.string.ends-with */ "./node_modules/core-js/modules/es.string.ends-with.js");
/* harmony import */ var core_js_modules_es_string_ends_with__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_ends_with__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_string_trim__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.string.trim */ "./node_modules/core-js/modules/es.string.trim.js");
/* harmony import */ var core_js_modules_es_string_trim__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_trim__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./Button */ "./assets/js/editor/Buttons/Button.jsx");




















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _get(target, property, receiver) { if (typeof Reflect !== "undefined" && Reflect.get) { _get = Reflect.get; } else { _get = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(receiver); } return desc.value; }; } return _get(target, property, receiver || target); }

function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = _getPrototypeOf(object); if (object === null) break; } return object; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }




var SpeechButton = /*#__PURE__*/function (_Button) {
  _inherits(SpeechButton, _Button);

  var _super = _createSuper(SpeechButton);

  function SpeechButton(props) {
    var _this;

    _classCallCheck(this, SpeechButton);

    _this = _super.call(this, props);

    if (window.hasOwnProperty('webkitSpeechRecognition')) {
      _this.recognition = new webkitSpeechRecognition();
      _this.recognition.lang = 'fr-FR';
      _this.recognition.continuous = true;
      _this.recognition.interimResultats = false;
    }

    return _this;
  }
  /**rend le boutton que si webkitSpeechRecognition existe dans le navigateur chome oui , firefox non */


  _createClass(SpeechButton, [{
    key: "render",
    value: function render(props, state) {
      return window.hasOwnProperty('webkitSpeechRecognition') ? _get(_getPrototypeOf(SpeechButton.prototype), "render", this).call(this, props, state) : null;
    }
  }, {
    key: "icon",
    value: function icon(props, _ref) {
      var listening = _ref.listening;
      var style = null;

      if (listening === true) {
        style = 'fill:#ff0000';
      }

      return Object(preact__WEBPACK_IMPORTED_MODULE_19__["h"])("svg", {
        xmlns: "http://www.w3.org/2000/svg",
        viewBox: "0 0 352 512",
        style: style
      }, Object(preact__WEBPACK_IMPORTED_MODULE_19__["h"])("path", {
        d: "M176 352c53.02 0 96-42.98 96-96V96c0-53.02-42.98-96-96-96S80 42.98 80 96v160c0 53.02 42.98 96 96 96zm160-160h-16c-8.84 0-16 7.16-16 16v48c0 74.8-64.49 134.82-140.79 127.38C96.71 376.89 48 317.11 48 250.3V208c0-8.84-7.16-16-16-16H16c-8.84 0-16 7.16-16 16v40.16c0 89.64 63.97 169.55 152 181.69V464H96c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16h-56v-33.77C285.71 418.47 352 344.9 352 256v-48c0-8.84-7.16-16-16-16z"
      }));
    }
  }, {
    key: "action",
    value: function action(editor) {
      var _this2 = this;

      if (this.state.listening === true) {
        this.recognition.stop();
        this.setState({
          listening: false
        });
      } else {
        this.recognition.start();
        this.setState({
          listening: true
        });

        this.recognition.onresult = function (e) {
          var result = e.results.item(e.resultIndex);

          if (result.isFinal === true) {
            var transcription = result.item(0).transcript;

            if (_this2.shouldCapitalize()) {
              transcription = _this2.capitalize(transcription);
            }

            editor.getDoc().replaceSelection(transcription);
          }
        };

        editor.focus();
      }
    }
  }, {
    key: "shouldCapitalize",
    value: function shouldCapitalize() {
      var cursor = this.props.editor.getCursor();
      var startPhrase = this.props.editor.getDoc().getRange({
        line: cursor.line,
        ch: 0
      }, cursor).trim().endsWith('.');

      if (cursor.ch === 0 || startPhrase) {
        return true;
      }
    }
  }, {
    key: "capitalize",
    value: function capitalize(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }
  }]);

  return SpeechButton;
}(_Button__WEBPACK_IMPORTED_MODULE_20__["default"]);



/***/ }),

/***/ "./assets/js/editor/Markdown.jsx":
/*!***************************************!*\
  !*** ./assets/js/editor/Markdown.jsx ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Markdown; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var marked__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! marked */ "./node_modules/marked/lib/marked.js");
/* harmony import */ var marked__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(marked__WEBPACK_IMPORTED_MODULE_15__);















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }




var Markdown = /*#__PURE__*/function (_Component) {
  _inherits(Markdown, _Component);

  var _super = _createSuper(Markdown);

  function Markdown() {
    _classCallCheck(this, Markdown);

    return _super.apply(this, arguments);
  }

  _createClass(Markdown, [{
    key: "render",
    value: function render(props) {
      return Object(preact__WEBPACK_IMPORTED_MODULE_14__["h"])("div", {
        id: "preview",
        dangerouslySetInnerHTML: {
          __html: this.renderMarkdown()
        }
      });
    }
  }, {
    key: "renderMarkdown",
    value: function renderMarkdown() {
      marked__WEBPACK_IMPORTED_MODULE_15___default.a.setOptions({
        gfm: true,
        table: true,
        breaks: false,
        sanitize: false,
        // si true html echapé
        pedantic: false,
        smartLists: true,
        smartypants: false
      });
      return marked__WEBPACK_IMPORTED_MODULE_15___default()(this.props.markdown);
    }
  }]);

  return Markdown;
}(preact__WEBPACK_IMPORTED_MODULE_14__["Component"]);



/***/ }),

/***/ "./assets/js/editor/codemirror.jsx":
/*!*****************************************!*\
  !*** ./assets/js/editor/codemirror.jsx ***!
  \*****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CodeMirrorComponent; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_function_name__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.function.name */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var codemirror__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! codemirror */ "./node_modules/codemirror/lib/codemirror.js");
/* harmony import */ var codemirror__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(codemirror__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var codemirror_mode_markdown_markdown__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! codemirror/mode/markdown/markdown */ "./node_modules/codemirror/mode/markdown/markdown.js");
/* harmony import */ var codemirror_mode_markdown_markdown__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(codemirror_mode_markdown_markdown__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var codemirror_lib_codemirror_css__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! codemirror/lib/codemirror.css */ "./node_modules/codemirror/lib/codemirror.css");
/* harmony import */ var codemirror_lib_codemirror_css__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(codemirror_lib_codemirror_css__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var codemirror_theme_neo_css__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! codemirror/theme/neo.css */ "./node_modules/codemirror/theme/neo.css");
/* harmony import */ var codemirror_theme_neo_css__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(codemirror_theme_neo_css__WEBPACK_IMPORTED_MODULE_19__);
















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }







var CodeMirrorComponent = /*#__PURE__*/function (_Component) {
  _inherits(CodeMirrorComponent, _Component);

  var _super = _createSuper(CodeMirrorComponent);

  function CodeMirrorComponent() {
    _classCallCheck(this, CodeMirrorComponent);

    return _super.apply(this, arguments);
  }

  _createClass(CodeMirrorComponent, [{
    key: "render",
    value: function render(_ref) {
      var name = _ref.name,
          value = _ref.value;
      return Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("div", null);
    }
  }, {
    key: "shouldComponentUpdate",
    value: function shouldComponentUpdate() {
      return false;
    }
  }, {
    key: "componentDidMount",
    value: function componentDidMount() {
      var editor = codemirror__WEBPACK_IMPORTED_MODULE_16___default()(this.base, {
        value: this.props.value,
        mode: 'markdown',
        theme: 'neo',
        lineWrapping: true,
        viewportMargin: Infinity,
        cursorBlinkRate: 0
      });
      this.props.onReady(editor);
    }
  }]);

  return CodeMirrorComponent;
}(preact__WEBPACK_IMPORTED_MODULE_15__["Component"]);



/***/ }),

/***/ "./assets/js/editor/index.jsx":
/*!************************************!*\
  !*** ./assets/js/editor/index.jsx ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Editor; });
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_function_name__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.function.name */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.reflect.construct */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _codemirror__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./codemirror */ "./assets/js/editor/codemirror.jsx");
/* harmony import */ var _Markdown__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./Markdown */ "./assets/js/editor/Markdown.jsx");
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./style.scss */ "./assets/js/editor/style.scss");
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(_style_scss__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var _Buttons_BoldButton__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./Buttons/BoldButton */ "./assets/js/editor/Buttons/BoldButton.jsx");
/* harmony import */ var _Buttons_ItalicButton__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./Buttons/ItalicButton */ "./assets/js/editor/Buttons/ItalicButton.jsx");
/* harmony import */ var _Buttons_SpeechButton__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./Buttons/SpeechButton */ "./assets/js/editor/Buttons/SpeechButton.jsx");
/* harmony import */ var _Buttons_HunButton__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ./Buttons/HunButton */ "./assets/js/editor/Buttons/HunButton.jsx");
/* harmony import */ var _Buttons_HdeuxButton__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ./Buttons/HdeuxButton */ "./assets/js/editor/Buttons/HdeuxButton.jsx");
/* harmony import */ var _Buttons_HtroisButton__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! ./Buttons/HtroisButton */ "./assets/js/editor/Buttons/HtroisButton.jsx");
/* harmony import */ var _Buttons_HquatreButton__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! ./Buttons/HquatreButton */ "./assets/js/editor/Buttons/HquatreButton.jsx");
/* harmony import */ var _Buttons_HcinqButton__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! ./Buttons/HcinqButton */ "./assets/js/editor/Buttons/HcinqButton.jsx");
/* harmony import */ var _Buttons_ArrayButton__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! ./Buttons/ArrayButton */ "./assets/js/editor/Buttons/ArrayButton.jsx");
/* harmony import */ var _Buttons_ListOlButton__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! ./Buttons/ListOlButton */ "./assets/js/editor/Buttons/ListOlButton.jsx");
/* harmony import */ var _Buttons_ListUlButton__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! ./Buttons/ListUlButton */ "./assets/js/editor/Buttons/ListUlButton.jsx");
/* harmony import */ var _Buttons_ImageButton__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! ./Buttons/ImageButton */ "./assets/js/editor/Buttons/ImageButton.jsx");
















function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }


















var Editor = /*#__PURE__*/function (_Component) {
  _inherits(Editor, _Component);

  var _super = _createSuper(Editor);

  function Editor(props) {
    var _this;

    _classCallCheck(this, Editor);

    _this = _super.call(this, props);

    _defineProperty(_assertThisInitialized(_this), "setEditor", function (editor) {
      _this.setState({
        editor: editor
      });

      editor.on('change', function (e) {
        _this.setState({
          content: e.getDoc().getValue()
        });
      });
    });

    _this.state = {
      content: props.value,
      editor: null,
      fullscreen: false
    }; // this.setEditor = this.setEditor.bind(this)

    return _this;
  }

  _createClass(Editor, [{
    key: "render",
    value: function render(_ref, _ref2) {
      var name = _ref.name;
      var content = _ref2.content,
          editor = _ref2.editor,
          markdown = _ref2.markdown;
      var classe = 'mdeditor';
      return Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("div", {
        "class": classe
      }, Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("div", {
        "class": "mdeditor__toolbar"
      }, Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("div", {
        "class": "mdeditor__toolbarLeft"
      }, editor && [Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Buttons_SpeechButton__WEBPACK_IMPORTED_MODULE_21__["default"], {
        editor: editor
      })], " |", editor && [Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Buttons_HunButton__WEBPACK_IMPORTED_MODULE_22__["default"], {
        editor: editor
      }), Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Buttons_HdeuxButton__WEBPACK_IMPORTED_MODULE_23__["default"], {
        editor: editor
      }), Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Buttons_HtroisButton__WEBPACK_IMPORTED_MODULE_24__["default"], {
        editor: editor
      }), Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Buttons_HquatreButton__WEBPACK_IMPORTED_MODULE_25__["default"], {
        editor: editor
      }), Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Buttons_HcinqButton__WEBPACK_IMPORTED_MODULE_26__["default"], {
        editor: editor
      })], " |", editor && [Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Buttons_BoldButton__WEBPACK_IMPORTED_MODULE_19__["default"], {
        editor: editor
      }), Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Buttons_ItalicButton__WEBPACK_IMPORTED_MODULE_20__["default"], {
        editor: editor
      })], " |", editor && [Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Buttons_ArrayButton__WEBPACK_IMPORTED_MODULE_27__["default"], {
        editor: editor
      })], " |", editor && [Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Buttons_ListOlButton__WEBPACK_IMPORTED_MODULE_28__["default"], {
        editor: editor
      }), Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Buttons_ListUlButton__WEBPACK_IMPORTED_MODULE_29__["default"], {
        editor: editor
      })], " |", editor && [Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Buttons_ImageButton__WEBPACK_IMPORTED_MODULE_30__["default"], {
        editor: editor
      })]), Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("div", {
        "class": "mdeditor__toolbarRight"
      }, editor && [])), Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("div", {
        "class": "mdeditor__editor"
      }, Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_codemirror__WEBPACK_IMPORTED_MODULE_16__["default"], {
        value: content || 'Votre article ici !!',
        onReady: this.setEditor
      })), Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("div", {
        "class": "mdeditor__preview"
      }, Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])(_Markdown__WEBPACK_IMPORTED_MODULE_17__["default"], {
        markdown: content || 'Votre article ici !!'
      })), Object(preact__WEBPACK_IMPORTED_MODULE_15__["h"])("textarea", {
        name: name,
        id: "postContent",
        style: "display:none;"
      }, content));
    }
  }]);

  return Editor;
}(preact__WEBPACK_IMPORTED_MODULE_15__["Component"]); // setEditor (editor){
// console.log(editor)
// this.setState({editor})
// }




/***/ }),

/***/ "./assets/js/editor/style.scss":
/*!*************************************!*\
  !*** ./assets/js/editor/style.scss ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./assets/js/index.jsx":
/*!*****************************!*\
  !*** ./assets/js/index.jsx ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var preact__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! preact */ "./node_modules/preact/dist/preact.module.js");
/* harmony import */ var _editor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./editor */ "./assets/js/editor/index.jsx");


// let poly = require("preact-cli/lib/lib/webpack/polyfills");
// 


 // 
// import Widget from "";
// 
// 

var editors = document.querySelectorAll('[data-mdeditor]');
editors.forEach(function (editor) {
  var $textarea = editor.querySelector('textarea');
  var value = $textarea.value;
  var name = $textarea.getAttribute('name');
  var image = window.IMAGE;
  editor.innerHTML = '';
  Object(preact__WEBPACK_IMPORTED_MODULE_2__["render"])(Object(preact__WEBPACK_IMPORTED_MODULE_2__["h"])(_editor__WEBPACK_IMPORTED_MODULE_3__["default"], {
    id: "posteune",
    value: value,
    name: name
  }), editor, editor.firstChild);
});

/***/ })

},[["./assets/js/index.jsx","runtime","vendors~index"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvZWRpdG9yL0J1dHRvbnMvQXJyYXlCdXR0b24uanN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9lZGl0b3IvQnV0dG9ucy9Cb2xkQnV0dG9uLmpzeCIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvZWRpdG9yL0J1dHRvbnMvQnV0dG9uLmpzeCIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvZWRpdG9yL0J1dHRvbnMvSGNpbnFCdXR0b24uanN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9lZGl0b3IvQnV0dG9ucy9IZGV1eEJ1dHRvbi5qc3giLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2VkaXRvci9CdXR0b25zL0hxdWF0cmVCdXR0b24uanN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9lZGl0b3IvQnV0dG9ucy9IdHJvaXNCdXR0b24uanN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9lZGl0b3IvQnV0dG9ucy9IdW5CdXR0b24uanN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9lZGl0b3IvQnV0dG9ucy9JbWFnZUJ1dHRvbi5qc3giLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2VkaXRvci9CdXR0b25zL0l0YWxpY0J1dHRvbi5qc3giLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2VkaXRvci9CdXR0b25zL0xpc3RPbEJ1dHRvbi5qc3giLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2VkaXRvci9CdXR0b25zL0xpc3RVbEJ1dHRvbi5qc3giLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2VkaXRvci9CdXR0b25zL1NwZWVjaEJ1dHRvbi5qc3giLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2VkaXRvci9NYXJrZG93bi5qc3giLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2VkaXRvci9jb2RlbWlycm9yLmpzeCIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvZWRpdG9yL2luZGV4LmpzeCIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvZWRpdG9yL3N0eWxlLnNjc3MiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2luZGV4LmpzeCJdLCJuYW1lcyI6WyJBcnJheUJ1dHRvbiIsImVkaXRvciIsImdldERvYyIsInJlcGxhY2VTZWxlY3Rpb24iLCJmb2N1cyIsIkJ1dHRvbiIsIkJvbGRCdXR0b24iLCJnZXRTZWxlY3Rpb24iLCJlIiwicHJldmVudERlZmF1bHQiLCJhY3Rpb24iLCJwcm9wcyIsInNldE9wdGlvbiIsImdldE9wdGlvbiIsInNob3J0Y3V0Iiwic3RhdGUiLCJvbkNsaWNrIiwiaWNvbiIsIkNvbXBvbmVudCIsIkhjaW5xQnV0dG9uIiwiSGRldXhCdXR0b24iLCJIcXVhdHJlQnV0dG9uIiwiSHRyb2lzQnV0dG9uIiwiSHVuQnV0dG9uIiwiSW1hZ2VCdXR0b24iLCJsaXN0IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsInJlbW92ZSIsInBhdGNoX2ltYWdlIiwidmFsdWUiLCJOYW1lSWZyYW1lIiwiZWxlIiwiY2xhc3NMaXN0IiwiaWZyYW1lIiwiY3JlYXRlRWxlbWVudCIsInNldEF0dHJpYnV0ZSIsInN0eWxlIiwid2lkdGgiLCJtaW5IZWlnaHQiLCJtYXJnaW5MZWZ0IiwiYm9yZGVyIiwiYmFja2dyb3VuZCIsImFwcGVuZENoaWxkIiwid2luZG93IiwiSU1BR0UiLCJJdGFsaWNCdXR0b24iLCJMaXN0T2xCdXR0b24iLCJMaXN0VWxCdXR0b24iLCJTcGVlY2hCdXR0b24iLCJoYXNPd25Qcm9wZXJ0eSIsInJlY29nbml0aW9uIiwid2Via2l0U3BlZWNoUmVjb2duaXRpb24iLCJsYW5nIiwiY29udGludW91cyIsImludGVyaW1SZXN1bHRhdHMiLCJsaXN0ZW5pbmciLCJzdG9wIiwic2V0U3RhdGUiLCJzdGFydCIsIm9ucmVzdWx0IiwicmVzdWx0IiwicmVzdWx0cyIsIml0ZW0iLCJyZXN1bHRJbmRleCIsImlzRmluYWwiLCJ0cmFuc2NyaXB0aW9uIiwidHJhbnNjcmlwdCIsInNob3VsZENhcGl0YWxpemUiLCJjYXBpdGFsaXplIiwiY3Vyc29yIiwiZ2V0Q3Vyc29yIiwic3RhcnRQaHJhc2UiLCJnZXRSYW5nZSIsImxpbmUiLCJjaCIsInRyaW0iLCJlbmRzV2l0aCIsInN0cmluZyIsImNoYXJBdCIsInRvVXBwZXJDYXNlIiwic2xpY2UiLCJNYXJrZG93biIsIl9faHRtbCIsInJlbmRlck1hcmtkb3duIiwibWFya2VkIiwic2V0T3B0aW9ucyIsImdmbSIsInRhYmxlIiwiYnJlYWtzIiwic2FuaXRpemUiLCJwZWRhbnRpYyIsInNtYXJ0TGlzdHMiLCJzbWFydHlwYW50cyIsIm1hcmtkb3duIiwiQ29kZU1pcnJvckNvbXBvbmVudCIsIm5hbWUiLCJDb2RlTWlycm9yIiwiYmFzZSIsIm1vZGUiLCJ0aGVtZSIsImxpbmVXcmFwcGluZyIsInZpZXdwb3J0TWFyZ2luIiwiSW5maW5pdHkiLCJjdXJzb3JCbGlua1JhdGUiLCJvblJlYWR5IiwiRWRpdG9yIiwib24iLCJjb250ZW50IiwiZ2V0VmFsdWUiLCJmdWxsc2NyZWVuIiwiY2xhc3NlIiwic2V0RWRpdG9yIiwiZWRpdG9ycyIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJmb3JFYWNoIiwiJHRleHRhcmVhIiwicXVlcnlTZWxlY3RvciIsImdldEF0dHJpYnV0ZSIsImltYWdlIiwiaW5uZXJIVE1MIiwicmVuZGVyIiwiZmlyc3RDaGlsZCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7QUFDQTs7SUFHcUJBLFc7Ozs7Ozs7Ozs7Ozs7Ozs7K0RBRVYsUTs7Ozs7OzsyQkFFQTtBQUFHLGFBQU87QUFBSyxhQUFLLEVBQUMsNEJBQVg7QUFBd0MsZUFBTyxFQUFDO0FBQWhELFNBQThEO0FBQU0sU0FBQyxFQUFDO0FBQVIsUUFBOUQsQ0FBUDtBQUNUOzs7MkJBRU9DLE0sRUFBUTtBQUNaQSxZQUFNLENBQUNDLE1BQVAsR0FBZ0JDLGdCQUFoQixDQUFp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O0FBQ0E7QUFDQTtDQUlBO0FBQ0E7QUFDQTtBQUNBOztBQUVBLElBQUkrRixPQUFPLEdBQUd2RixRQUFRLENBQUN3RixnQkFBVCxDQUEwQixpQkFBMUIsQ0FBZDtBQUdBRCxPQUFPLENBQUNFLE9BQVIsQ0FBaUIsVUFBU2xILE1BQVQsRUFBZ0I7QUFDN0IsTUFBSW1ILFNBQVMsR0FBR25ILE1BQU0sQ0FBQ29ILGFBQVAsQ0FBcUIsVUFBckIsQ0FBaEI7QUFDQSxNQUFJdkYsS0FBSyxHQUFHc0YsU0FBUyxDQUFDdEYsS0FBdEI7QUFDQSxNQUFJa0UsSUFBSSxHQUFHb0IsU0FBUyxDQUFDRSxZQUFWLENBQXVCLE1BQXZCLENBQVg7QUFDQSxNQUFJQyxLQUFLLEdBQUczRSxNQUFNLENBQUNDLEtBQW5CO0FBQ0E1QyxRQUFNLENBQUN1SCxTQUFQLEdBQW1CLEVBQW5CO0FBQ0pDLHVEQUFNLENBQUMsaURBQUMsK0NBQUQ7QUFBUSxNQUFFLEVBQUMsVUFBWDtBQUFzQixTQUFLLEVBQUUzRixLQUE3QjtBQUFvQyxRQUFJLEVBQUVrRTtBQUExQyxJQUFELEVBQXFEL0YsTUFBckQsRUFBNkRBLE1BQU0sQ0FBQ3lILFVBQXBFLENBQU47QUFDQyxDQVBELEUiLCJmaWxlIjoiaW5kZXguanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgeyBofSBmcm9tICdwcmVhY3QnXG5pbXBvcnQgQnV0dG9uIGZyb20gJy4vQnV0dG9uJztcblxuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBBcnJheUJ1dHRvbiBleHRlbmRzIEJ1dHRvbntcblxuc2hvcnRjdXQgPSAnQ3RybC1CJ1xuXG4gICAgaWNvbiAoKXsgIHJldHVybiA8c3ZnIHhtbG5zPVwiaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmdcIiB2aWV3Qm94PVwiMCAwIDUxMiA1MTJcIj48cGF0aCBkPVwiTTE0OS4zMzMgNTZ2ODBjMCAxMy4yNTUtMTAuNzQ1IDI0LTI0IDI0SDI0Yy0xMy4yNTUgMC0yNC0xMC43NDUtMjQtMjRWNTZjMC0xMy4yNTUgMTAuNzQ1LTI0IDI0LTI0aDEwMS4zMzNjMTMuMjU1IDAgMjQgMTAuNzQ1IDI0IDI0em0xODEuMzM0IDI0MHYtODBjMC0xMy4yNTUtMTAuNzQ1LTI0LTI0LTI0SDIwNS4zMzNjLTEzLjI1NSAwLTI0IDEwLjc0NS0yNCAyNHY4MGMwIDEzLjI1NSAxMC43NDUgMjQgMjQgMjRoMTAxLjMzM2MxMy4yNTYgMCAyNC4wMDEtMTAuNzQ1IDI0LjAwMS0yNHptMzItMjQwdjgwYzAgMTMuMjU1IDEwLjc0NSAyNCAyNCAyNEg0ODhjMTMuMjU1IDAgMjQtMTAuNzQ1IDI0LTI0VjU2YzAtMTMuMjU1LTEwLjc0NS0yNC0yNC0yNEgzODYuNjY3Yy0xMy4yNTUgMC0yNCAxMC43NDUtMjQgMjR6bS0zMiA4MFY1NmMwLTEzLjI1NS0xMC43NDUtMjQtMjQtMjRIMjA1LjMzM2MtMTMuMjU1IDAtMjQgMTAuNzQ1LTI0IDI0djgwYzAgMTMuMjU1IDEwLjc0NSAyNCAyNCAyNGgxMDEuMzMzYzEzLjI1NiAwIDI0LjAwMS0xMC43NDUgMjQuMDAxLTI0em0tMjA1LjMzNCA1NkgyNGMtMTMuMjU1IDAtMjQgMTAuNzQ1LTI0IDI0djgwYzAgMTMuMjU1IDEwLjc0NSAyNCAyNCAyNGgxMDEuMzMzYzEzLjI1NSAwIDI0LTEwLjc0NSAyNC0yNHYtODBjMC0xMy4yNTUtMTAuNzQ1LTI0LTI0LTI0ek0wIDM3NnY4MGMwIDEzLjI1NSAxMC43NDUgMjQgMjQgMjRoMTAxLjMzM2MxMy4yNTUgMCAyNC0xMC43NDUgMjQtMjR2LTgwYzAtMTMuMjU1LTEwLjc0NS0yNC0yNC0yNEgyNGMtMTMuMjU1IDAtMjQgMTAuNzQ1LTI0IDI0em0zODYuNjY3LTU2SDQ4OGMxMy4yNTUgMCAyNC0xMC43NDUgMjQtMjR2LTgwYzAtMTMuMjU1LTEwLjc0NS0yNC0yNC0yNEgzODYuNjY3Yy0xMy4yNTUgMC0yNCAxMC43NDUtMjQgMjR2ODBjMCAxMy4yNTUgMTAuNzQ1IDI0IDI0IDI0em0wIDE2MEg0ODhjMTMuMjU1IDAgMjQtMTAuNzQ1IDI0LTI0di04MGMwLTEzLjI1NS0xMC43NDUtMjQtMjQtMjRIMzg2LjY2N2MtMTMuMjU1IDAtMjQgMTAuNzQ1LTI0IDI0djgwYzAgMTMuMjU1IDEwLjc0NSAyNCAyNCAyNHpNMTgxLjMzMyAzNzZ2ODBjMCAxMy4yNTUgMTAuNzQ1IDI0IDI0IDI0aDEwMS4zMzNjMTMuMjU1IDAgMjQtMTAuNzQ1IDI0LTI0di04MGMwLTEzLjI1NS0xMC43NDUtMjQtMjQtMjRIMjA1LjMzM2MtMTMuMjU1IDAtMjQgMTAuNzQ1LTI0IDI0elwiLz48L3N2Zz5cbiAgICB9XG5cbiAgICBhY3Rpb24gKGVkaXRvcikge1xuICAgICAgICBlZGl0b3IuZ2V0RG9jKCkucmVwbGFjZVNlbGVjdGlvbignPHRhYmxlPjx0aGVhZD48dHI+PHRoIGNvbHNwYW49XCIyXCI+VGhlIHRhYmxlIGhlYWRlcjwvdGg+PC90cj48L3RoZWFkPjx0Ym9keT48dHI+PHRkPlRoZSB0YWJsZSBib2R5PC90ZD48dGQ+d2l0aCB0d28gY29sdW1uczwvdGQ+PC90cj48L3Rib2R5PjwvdGFibGU+JylcbiAgICAgICAgZWRpdG9yLmZvY3VzKClcbiAgICB9XG5cbn0iLCJpbXBvcnQgeyBofSBmcm9tICdwcmVhY3QnXG5pbXBvcnQgQnV0dG9uIGZyb20gJy4vQnV0dG9uJztcblxuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBCb2xkQnV0dG9uIGV4dGVuZHMgQnV0dG9ue1xuXG5zaG9ydGN1dCA9ICdDdHJsLUInXG5cbiAgICBpY29uICgpe1xuICAgICAgICByZXR1cm4gPHN2ZyB4bWxucz1cImh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnXCIgdmlld0JveD1cIjAgMCAzODQgNTEyXCI+PHBhdGggZD1cIk0zMzMuNDkgMjM4YTEyMiAxMjIgMCAwIDAgMjctNjUuMjFDMzY3Ljg3IDk2LjQ5IDMwOCAzMiAyMzMuNDIgMzJIMzRhMTYgMTYgMCAwIDAtMTYgMTZ2NDhhMTYgMTYgMCAwIDAgMTYgMTZoMzEuODd2Mjg4SDM0YTE2IDE2IDAgMCAwLTE2IDE2djQ4YTE2IDE2IDAgMCAwIDE2IDE2aDIwOS4zMmM3MC44IDAgMTM0LjE0LTUxLjc1IDE0MS0xMjIuNCA0Ljc0LTQ4LjQ1LTE2LjM5LTkyLjA2LTUwLjgzLTExOS42ek0xNDUuNjYgMTEyaDg3Ljc2YTQ4IDQ4IDAgMCAxIDAgOTZoLTg3Ljc2em04Ny43NiAyODhoLTg3Ljc2VjI4OGg4Ny43NmE1NiA1NiAwIDAgMSAwIDExMnpcIi8+PC9zdmc+XG4gICAgfVxuXG4gICAgYWN0aW9uIChlZGl0b3IpIHtcbiAgICAgICAgZWRpdG9yLmdldERvYygpLnJlcGxhY2VTZWxlY3Rpb24oJyoqJyArIGVkaXRvci5nZXREb2MoKS5nZXRTZWxlY3Rpb24oKSArICcqKicpXG4gICAgICAgIGVkaXRvci5mb2N1cygpXG4gICAgfVxuXG59IiwiaW1wb3J0IHtoLENvbXBvbmVudH0gZnJvbSAncHJlYWN0J1xuXG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIEJ1dHRvbiBleHRlbmRzIENvbXBvbmVudHtcblxuICAgIHNob3J0Y3V0ID0gbnVsbFxuXG5cbiAgICBjb21wb25lbnREaWRNb3VudCAoKSB7XG4gICAgICAgIHRoaXMucHJvcHMuZWRpdG9yLnNldE9wdGlvbignZXh0cmFLZXlzJyAsIHtcbiAgICAgICAgICAgIC4uLnRoaXMucHJvcHMuZWRpdG9yLmdldE9wdGlvbignZXh0cmFLZXlzJyksXG4gICAgICAgICAgICBbdGhpcy5zaG9ydGN1dF06ICgpID0+IHtcbiAgICAgICAgICAgICAgICB0aGlzLmFjdGlvbih0aGlzLnByb3BzLmVkaXRvcilcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSlcbiAgICB9XG5cbiAgICByZW5kZXIgKHByb3BzLHN0YXRlKXtcbiAgICAgICAgcmV0dXJuIDxidXR0b24gb25DbGljaz17dGhpcy5vbkNsaWNrfT5cbiAgICAgICAgICAgIHt0aGlzLmljb24ocHJvcHMsc3RhdGUpfVxuICAgICAgICA8L2J1dHRvbj5cbiAgICB9XG4gICAgaWNvbiAoKSB7XG4gICAgICAgIHJldHVybiBudWxsXG4gICAgfVxuXG5cbiAgICBvbkNsaWNrID0gKGUpICA9PiB7XG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdGhpcy5hY3Rpb24odGhpcy5wcm9wcy5lZGl0b3IpXG4gICAgfVxuXG5cbiAgICBhY3Rpb24gKCkge31cbn0iLCJpbXBvcnQgeyBofSBmcm9tICdwcmVhY3QnXG5pbXBvcnQgQnV0dG9uIGZyb20gJy4vQnV0dG9uJztcblxuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBIY2lucUJ1dHRvbiBleHRlbmRzIEJ1dHRvbntcblxuc2hvcnRjdXQgPSAnQ3RybC01J1xuXG4gICAgaWNvbiAoKXtcbiAgICAgICAgcmV0dXJuIDxzcGFuPkg1PC9zcGFuPlxuICAgIH1cblxuICAgIGFjdGlvbiAoZWRpdG9yKSB7XG4gICAgICAgIGVkaXRvci5nZXREb2MoKS5yZXBsYWNlU2VsZWN0aW9uKCcjIyMjIyAnICsgZWRpdG9yLmdldERvYygpLmdldFNlbGVjdGlvbigpICsgJyAjIyMjIycpXG4gICAgICAgIGVkaXRvci5mb2N1cygpXG4gICAgfVxuXG59IiwiaW1wb3J0IHsgaH0gZnJvbSAncHJlYWN0J1xuaW1wb3J0IEJ1dHRvbiBmcm9tICcuL0J1dHRvbic7XG5cblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgSGRldXhCdXR0b24gZXh0ZW5kcyBCdXR0b257XG5cbnNob3J0Y3V0ID0gJ0N0cmwtMidcblxuICAgIGljb24gKCl7XG4gICAgICAgIHJldHVybiA8c3Bhbj5IMjwvc3Bhbj5cbiAgICB9XG5cbiAgICBhY3Rpb24gKGVkaXRvcikge1xuICAgICAgICBlZGl0b3IuZ2V0RG9jKCkucmVwbGFjZVNlbGVjdGlvbignIyMgJyArIGVkaXRvci5nZXREb2MoKS5nZXRTZWxlY3Rpb24oKSArICcgIyMnKVxuICAgICAgICBlZGl0b3IuZm9jdXMoKVxuICAgIH1cblxufSIsImltcG9ydCB7IGh9IGZyb20gJ3ByZWFjdCdcbmltcG9ydCBCdXR0b24gZnJvbSAnLi9CdXR0b24nO1xuXG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIEhxdWF0cmVCdXR0b24gZXh0ZW5kcyBCdXR0b257XG5cbnNob3J0Y3V0ID0gJ0N0cmwtNCdcblxuICAgIGljb24gKCl7XG4gICAgICAgIHJldHVybiA8c3Bhbj5INDwvc3Bhbj5cbiAgICB9XG5cbiAgICBhY3Rpb24gKGVkaXRvcikge1xuICAgICAgICBlZGl0b3IuZ2V0RG9jKCkucmVwbGFjZVNlbGVjdGlvbignIyMjIyAnICsgZWRpdG9yLmdldERvYygpLmdldFNlbGVjdGlvbigpICsgJyAjIyMjJylcbiAgICAgICAgZWRpdG9yLmZvY3VzKClcbiAgICB9XG5cbn0iLCJpbXBvcnQgeyBofSBmcm9tICdwcmVhY3QnXG5pbXBvcnQgQnV0dG9uIGZyb20gJy4vQnV0dG9uJztcblxuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBIdHJvaXNCdXR0b24gZXh0ZW5kcyBCdXR0b257XG5cbnNob3J0Y3V0ID0gJ0N0cmwtMydcblxuICAgIGljb24gKCl7XG4gICAgICAgIHJldHVybiA8c3Bhbj5IMzwvc3Bhbj5cbiAgICB9XG5cbiAgICBhY3Rpb24gKGVkaXRvcikge1xuICAgICAgICBlZGl0b3IuZ2V0RG9jKCkucmVwbGFjZVNlbGVjdGlvbignIyMjICcgKyBlZGl0b3IuZ2V0RG9jKCkuZ2V0U2VsZWN0aW9uKCkgKyAnICMjIycpXG4gICAgICAgIGVkaXRvci5mb2N1cygpXG4gICAgfVxuXG59IiwiaW1wb3J0IHsgaH0gZnJvbSAncHJlYWN0J1xuaW1wb3J0IEJ1dHRvbiBmcm9tICcuL0J1dHRvbic7XG5cblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgSHVuQnV0dG9uIGV4dGVuZHMgQnV0dG9ue1xuXG5zaG9ydGN1dCA9ICdDdHJsLTEnXG5cbiAgICBpY29uICgpe1xuICAgICAgICByZXR1cm4gICA8c3Bhbj5IMTwvc3Bhbj5cbiAgICB9XG5cbiAgICBhY3Rpb24gKGVkaXRvcikge1xuICAgICAgICBlZGl0b3IuZ2V0RG9jKCkucmVwbGFjZVNlbGVjdGlvbignIyAnICsgZWRpdG9yLmdldERvYygpLmdldFNlbGVjdGlvbigpICsgJyAjJylcbiAgICAgICAgZWRpdG9yLmZvY3VzKClcbiAgICB9XG5cbn0iLCJpbXBvcnQgeyBofSBmcm9tICdwcmVhY3QnXG5pbXBvcnQgQnV0dG9uIGZyb20gJy4vQnV0dG9uJztcblxuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBJbWFnZUJ1dHRvbiBleHRlbmRzIEJ1dHRvbntcblxuXG5cbiAgICBpY29uICgpeyAgcmV0dXJuIDxzdmcgeG1sbnM9XCJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Z1wiIHZpZXdCb3g9XCIwIDAgNTEyIDUxMlwiPjxwYXRoIGQ9XCJNNDY0IDQ0OEg0OGMtMjYuNTEgMC00OC0yMS40OS00OC00OFYxMTJjMC0yNi41MSAyMS40OS00OCA0OC00OGg0MTZjMjYuNTEgMCA0OCAyMS40OSA0OCA0OHYyODhjMCAyNi41MS0yMS40OSA0OC00OCA0OHpNMTEyIDEyMGMtMzAuOTI4IDAtNTYgMjUuMDcyLTU2IDU2czI1LjA3MiA1NiA1NiA1NiA1Ni0yNS4wNzIgNTYtNTYtMjUuMDcyLTU2LTU2LTU2ek02NCAzODRoMzg0VjI3MmwtODcuNTE1LTg3LjUxNWMtNC42ODYtNC42ODYtMTIuMjg0LTQuNjg2LTE2Ljk3MSAwTDIwOCAzMjBsLTU1LjUxNS01NS41MTVjLTQuNjg2LTQuNjg2LTEyLjI4NC00LjY4Ni0xNi45NzEgMEw2NCAzMzZ2NDh6XCIvPjwvc3ZnPlxuICAgIH1cblxuICAgIGFjdGlvbiAoZWRpdG9yKSB7XG4gICAgICAgICAgICBsZXQgbGlzdCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdpbWFnZScpO1xuICAgICAgICAgICAgaWYgKGxpc3QpIHtcbiAgICAgICAgICAgIGxpc3QucmVtb3ZlKGxpc3QpXG4gICAgICAgICAgICB9XG4gICAgICAgIGxldCBwYXRjaF9pbWFnZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwicGF0Y2hfaW1hZ2VcIikudmFsdWU7XG4gICAgICAgIGxldCBOYW1lSWZyYW1lID0gXCJpbWFnZVwiXG4gICAgICAgIGxldCBlbGUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1vZGFsXCIpO1xuICAgICAgICBlbGUuY2xhc3NMaXN0LnJlbW92ZShcIm1vZGFsTm9uZVwiKTtcbiAgICAgICAgY29uc3QgaWZyYW1lID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaWZyYW1lJyk7XG4gICAgICAgIGlmcmFtZS5zZXRBdHRyaWJ1dGUoJ25hbWUnLCBOYW1lSWZyYW1lKTtcbiAgICAgICAgaWZyYW1lLnNldEF0dHJpYnV0ZSgnaWQnLCBOYW1lSWZyYW1lKTtcbiAgICAgICAgaWZyYW1lLnNldEF0dHJpYnV0ZSgnc3JjJywgcGF0Y2hfaW1hZ2UpO1xuICAgICAgICBpZnJhbWUuc3R5bGUud2lkdGggPSAnOTUlJztcbiAgICAgICAgaWZyYW1lLnN0eWxlLm1pbkhlaWdodCA9ICc4MHZoJztcbiAgICAgICAgaWZyYW1lLnN0eWxlLm1pbkhlaWdodCA9ICc4MHZoJztcbiAgICAgICAgaWZyYW1lLnN0eWxlLm1hcmdpbkxlZnQgPSAnMi41JSc7XG4gICAgICAgIGlmcmFtZS5zdHlsZS5ib3JkZXIgPSBcIjFweCBzb2xpZCBsaWdodGdyZXlcIjtcbiAgICAgICAgaWZyYW1lLnN0eWxlLmJhY2tncm91bmQgPSBcIiNmZmZcIjtcbiAgICAgICAgZWxlLmFwcGVuZENoaWxkKGlmcmFtZSk7XG4gICAgICAgIGlmICh3aW5kb3cuSU1BR0UpIHtcbiAgICAgICAgICAgIGVkaXRvci5nZXREb2MoKS5yZXBsYWNlU2VsZWN0aW9uKHdpbmRvdy5JTUFHRSlcbiAgICAgICAgICAgIGZvY3VzKClcbiAgICAgICAgICAgIGRlbGV0ZSh3aW5kb3cuSU1BR0UpXG4gICAgICAgIH1cbiAgICAgIFxuICAgIH1cbn0iLCJpbXBvcnQgeyBofSBmcm9tICdwcmVhY3QnXG5pbXBvcnQgQnV0dG9uIGZyb20gJy4vQnV0dG9uJztcblxuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBJdGFsaWNCdXR0b24gZXh0ZW5kcyBCdXR0b257XG5cblxuICAgIHNob3J0Y3V0ID0gJ0N0cmwtSSdcblxuICAgIGljb24gKCl7XG4gICAgICAgIHJldHVybiA8c3ZnIHhtbG5zPVwiaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmdcIiB2aWV3Qm94PVwiMCAwIDMyMCA1MTJcIj48cGF0aCBkPVwiTTMyMCA0OHYzMmExNiAxNiAwIDAgMS0xNiAxNmgtNjIuNzZsLTgwIDMyMEgyMDhhMTYgMTYgMCAwIDEgMTYgMTZ2MzJhMTYgMTYgMCAwIDEtMTYgMTZIMTZhMTYgMTYgMCAwIDEtMTYtMTZ2LTMyYTE2IDE2IDAgMCAxIDE2LTE2aDYyLjc2bDgwLTMyMEgxMTJhMTYgMTYgMCAwIDEtMTYtMTZWNDhhMTYgMTYgMCAwIDEgMTYtMTZoMTkyYTE2IDE2IDAgMCAxIDE2IDE2elwiLz48L3N2Zz5cbiAgICB9XG5cbiAgICBhY3Rpb24gKGVkaXRvcikge1xuICAgICAgICBlZGl0b3IuZ2V0RG9jKCkucmVwbGFjZVNlbGVjdGlvbignKicgKyBlZGl0b3IuZ2V0RG9jKCkuZ2V0U2VsZWN0aW9uKCkgKyAnKicpXG4gICAgICAgIGVkaXRvci5mb2N1cygpXG4gICAgfVxuXG59IiwiaW1wb3J0IHsgaH0gZnJvbSAncHJlYWN0J1xuaW1wb3J0IEJ1dHRvbiBmcm9tICcuL0J1dHRvbic7XG5cblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgTGlzdE9sQnV0dG9uIGV4dGVuZHMgQnV0dG9ue1xuXG5zaG9ydGN1dCA9ICdDdHJsLUInXG5cbiAgICBpY29uICgpeyAgcmV0dXJuIDxzdmcgeG1sbnM9XCJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Z1wiIHZpZXdCb3g9XCIwIDAgNTEyIDUxMlwiPjxwYXRoIGQ9XCJNNjEuNzcgNDAxbDE3LjUtMjAuMTVhMTkuOTIgMTkuOTIgMCAwIDAgNS4wNy0xNC4xOXYtMy4zMUM4NC4zNCAzNTYgODAuNSAzNTIgNzMgMzUySDE2YTggOCAwIDAgMC04IDh2MTZhOCA4IDAgMCAwIDggOGgyMi44M2ExNTcuNDEgMTU3LjQxIDAgMCAwLTExIDEyLjMxbC01LjYxIDdjLTQgNS4wNy01LjI1IDEwLjEzLTIuOCAxNC44OGwxLjA1IDEuOTNjMyA1Ljc2IDYuMjkgNy44OCAxMi4yNSA3Ljg4aDQuNzNjMTAuMzMgMCAxNS45NCAyLjQ0IDE1Ljk0IDkuMDkgMCA0LjcyLTQuMiA4LjIyLTE0LjM2IDguMjJhNDEuNTQgNDEuNTQgMCAwIDEtMTUuNDctMy4xMmMtNi40OS0zLjg4LTExLjc0LTMuNS0xNS42IDMuMTJsLTUuNTkgOS4zMWMtMy43MiA2LjEzLTMuMTkgMTEuNzIgMi42MyAxNS45NCA3LjcxIDQuNjkgMjAuMzggOS40NCAzNyA5LjQ0IDM0LjE2IDAgNDguNS0yMi43NSA0OC41LTQ0LjEyLS4wMy0xNC4zOC05LjEyLTI5Ljc2LTI4LjczLTM0Ljg4ek00OTYgMjI0SDE3NmExNiAxNiAwIDAgMC0xNiAxNnYzMmExNiAxNiAwIDAgMCAxNiAxNmgzMjBhMTYgMTYgMCAwIDAgMTYtMTZ2LTMyYTE2IDE2IDAgMCAwLTE2LTE2em0wLTE2MEgxNzZhMTYgMTYgMCAwIDAtMTYgMTZ2MzJhMTYgMTYgMCAwIDAgMTYgMTZoMzIwYTE2IDE2IDAgMCAwIDE2LTE2VjgwYTE2IDE2IDAgMCAwLTE2LTE2em0wIDMyMEgxNzZhMTYgMTYgMCAwIDAtMTYgMTZ2MzJhMTYgMTYgMCAwIDAgMTYgMTZoMzIwYTE2IDE2IDAgMCAwIDE2LTE2di0zMmExNiAxNiAwIDAgMC0xNi0xNnpNMTYgMTYwaDY0YTggOCAwIDAgMCA4LTh2LTE2YTggOCAwIDAgMC04LThINjRWNDBhOCA4IDAgMCAwLTgtOEgzMmE4IDggMCAwIDAtNy4xNCA0LjQybC04IDE2QTggOCAwIDAgMCAyNCA2NGg4djY0SDE2YTggOCAwIDAgMC04IDh2MTZhOCA4IDAgMCAwIDggOHptLTMuOTEgMTYwSDgwYTggOCAwIDAgMCA4LTh2LTE2YTggOCAwIDAgMC04LThINDEuMzJjMy4yOS0xMC4yOSA0OC4zNC0xOC42OCA0OC4zNC01Ni40NCAwLTI5LjA2LTI1LTM5LjU2LTQ0LjQ3LTM5LjU2LTIxLjM2IDAtMzMuOCAxMC00MC40NiAxOC43NS00LjM3IDUuNTktMyAxMC44NCAyLjggMTUuMzdsOC41OCA2Ljg4YzUuNjEgNC41NiAxMSAyLjQ3IDE2LjEyLTIuNDRhMTMuNDQgMTMuNDQgMCAwIDEgOS40Ni0zLjg0YzMuMzMgMCA5LjI4IDEuNTYgOS4yOCA4Ljc1QzUxIDI0OC4xOSAwIDI1Ny4zMSAwIDMwNC41OXY0QzAgMzE2IDUuMDggMzIwIDEyLjA5IDMyMHpcIi8+PC9zdmc+XG4gICAgfVxuXG4gICAgYWN0aW9uIChlZGl0b3IpIHtcbiAgICAgICAgZWRpdG9yLmdldERvYygpLnJlcGxhY2VTZWxlY3Rpb24oJzEuIExpc3RlIDEnKVxuICAgICAgICBlZGl0b3IuZm9jdXMoKVxuICAgIH1cblxufSIsImltcG9ydCB7IGh9IGZyb20gJ3ByZWFjdCdcbmltcG9ydCBCdXR0b24gZnJvbSAnLi9CdXR0b24nO1xuXG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIExpc3RVbEJ1dHRvbiBleHRlbmRzIEJ1dHRvbntcblxuc2hvcnRjdXQgPSAnQ3RybC1CJ1xuXG4gICAgaWNvbiAoKXsgIHJldHVybiA8c3ZnIHhtbG5zPVwiaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmdcIiB2aWV3Qm94PVwiMCAwIDUxMiA1MTJcIj48cGF0aCBkPVwiTTQ4IDQ4YTQ4IDQ4IDAgMSAwIDQ4IDQ4IDQ4IDQ4IDAgMCAwLTQ4LTQ4em0wIDE2MGE0OCA0OCAwIDEgMCA0OCA0OCA0OCA0OCAwIDAgMC00OC00OHptMCAxNjBhNDggNDggMCAxIDAgNDggNDggNDggNDggMCAwIDAtNDgtNDh6bTQ0OCAxNkgxNzZhMTYgMTYgMCAwIDAtMTYgMTZ2MzJhMTYgMTYgMCAwIDAgMTYgMTZoMzIwYTE2IDE2IDAgMCAwIDE2LTE2di0zMmExNiAxNiAwIDAgMC0xNi0xNnptMC0zMjBIMTc2YTE2IDE2IDAgMCAwLTE2IDE2djMyYTE2IDE2IDAgMCAwIDE2IDE2aDMyMGExNiAxNiAwIDAgMCAxNi0xNlY4MGExNiAxNiAwIDAgMC0xNi0xNnptMCAxNjBIMTc2YTE2IDE2IDAgMCAwLTE2IDE2djMyYTE2IDE2IDAgMCAwIDE2IDE2aDMyMGExNiAxNiAwIDAgMCAxNi0xNnYtMzJhMTYgMTYgMCAwIDAtMTYtMTZ6XCIvPjwvc3ZnPlxuICAgIH1cblxuICAgIGFjdGlvbiAoZWRpdG9yKSB7XG4gICAgICAgIGVkaXRvci5nZXREb2MoKS5yZXBsYWNlU2VsZWN0aW9uKCcqIExpc3RlIHBvaW50JylcbiAgICAgICAgZWRpdG9yLmZvY3VzKClcbiAgICB9XG5cbn0iLCJpbXBvcnQgeyBofSBmcm9tICdwcmVhY3QnXG5pbXBvcnQgQnV0dG9uIGZyb20gJy4vQnV0dG9uJztcblxuXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBTcGVlY2hCdXR0b24gZXh0ZW5kcyBCdXR0b257XG5cbiAgICBjb25zdHJ1Y3Rvcihwcm9wcyl7XG4gICAgICAgIHN1cGVyKHByb3BzKVxuXG4gICAgICAgIGlmICh3aW5kb3cuaGFzT3duUHJvcGVydHkoJ3dlYmtpdFNwZWVjaFJlY29nbml0aW9uJykgKSB7XG4gICAgICAgIHRoaXMucmVjb2duaXRpb24gPSBuZXcgd2Via2l0U3BlZWNoUmVjb2duaXRpb24oKVxuICAgICAgICB0aGlzLnJlY29nbml0aW9uLmxhbmcgPSAnZnItRlInXG4gICAgICAgIHRoaXMucmVjb2duaXRpb24uY29udGludW91cyA9IHRydWVcbiAgICAgICAgdGhpcy5yZWNvZ25pdGlvbi5pbnRlcmltUmVzdWx0YXRzID0gZmFsc2VcbiAgICAgICAgfVxuIFxuICAgIH1cblxuICAgIC8qKnJlbmQgbGUgYm91dHRvbiBxdWUgc2kgd2Via2l0U3BlZWNoUmVjb2duaXRpb24gZXhpc3RlIGRhbnMgbGUgbmF2aWdhdGV1ciBjaG9tZSBvdWkgLCBmaXJlZm94IG5vbiAqL1xuICAgIHJlbmRlciAocHJvcHMsIHN0YXRlKSB7XG4gICAgICAgIHJldHVybiB3aW5kb3cuaGFzT3duUHJvcGVydHkoJ3dlYmtpdFNwZWVjaFJlY29nbml0aW9uJykgID8gc3VwZXIucmVuZGVyKHByb3BzLHN0YXRlKSAgOiBudWxsXG4gICAgfVxuXG4gICAgaWNvbiAocHJvcHMsIHtsaXN0ZW5pbmd9KXtcbiAgICAgICAgbGV0IHN0eWxlID0gbnVsbFxuICAgICAgICBpZiAobGlzdGVuaW5nID09PSB0cnVlKSB7XG4gICAgICAgICAgICBzdHlsZSA9ICdmaWxsOiNmZjAwMDAnXG4gICAgICAgIH1cbiAgICAgICAgcmV0dXJuIDxzdmcgeG1sbnM9XCJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Z1wiIHZpZXdCb3g9XCIwIDAgMzUyIDUxMlwiIHN0eWxlPXtzdHlsZX0+PHBhdGggZD1cIk0xNzYgMzUyYzUzLjAyIDAgOTYtNDIuOTggOTYtOTZWOTZjMC01My4wMi00Mi45OC05Ni05Ni05NlM4MCA0Mi45OCA4MCA5NnYxNjBjMCA1My4wMiA0Mi45OCA5NiA5NiA5NnptMTYwLTE2MGgtMTZjLTguODQgMC0xNiA3LjE2LTE2IDE2djQ4YzAgNzQuOC02NC40OSAxMzQuODItMTQwLjc5IDEyNy4zOEM5Ni43MSAzNzYuODkgNDggMzE3LjExIDQ4IDI1MC4zVjIwOGMwLTguODQtNy4xNi0xNi0xNi0xNkgxNmMtOC44NCAwLTE2IDcuMTYtMTYgMTZ2NDAuMTZjMCA4OS42NCA2My45NyAxNjkuNTUgMTUyIDE4MS42OVY0NjRIOTZjLTguODQgMC0xNiA3LjE2LTE2IDE2djE2YzAgOC44NCA3LjE2IDE2IDE2IDE2aDE2MGM4Ljg0IDAgMTYtNy4xNiAxNi0xNnYtMTZjMC04Ljg0LTcuMTYtMTYtMTYtMTZoLTU2di0zMy43N0MyODUuNzEgNDE4LjQ3IDM1MiAzNDQuOSAzNTIgMjU2di00OGMwLTguODQtNy4xNi0xNi0xNi0xNnpcIi8+PC9zdmc+XG4gICAgfVxuXG4gICAgYWN0aW9uIChlZGl0b3IpIHtcbiAgICAgICAgaWYgKHRoaXMuc3RhdGUubGlzdGVuaW5nID09PSB0cnVlKSB7XG4gICAgICAgICAgICB0aGlzLnJlY29nbml0aW9uLnN0b3AoKVxuICAgICAgICAgICAgdGhpcy5zZXRTdGF0ZSh7bGlzdGVuaW5nOmZhbHNlfSlcbiAgICAgICAgfWVsc2V7XG4gICAgICAgICAgICB0aGlzLnJlY29nbml0aW9uLnN0YXJ0KClcbiAgICAgICAgICAgIHRoaXMuc2V0U3RhdGUoe2xpc3RlbmluZzp0cnVlfSlcbiAgICAgICAgICAgIHRoaXMucmVjb2duaXRpb24ub25yZXN1bHQgPSAoZSkgPT4ge1xuICAgICAgICAgICAgbGV0IHJlc3VsdCA9IGUucmVzdWx0cy5pdGVtKGUucmVzdWx0SW5kZXgpXG4gICAgICAgICAgICBpZihyZXN1bHQuaXNGaW5hbCA9PT0gdHJ1ZSl7XG4gICAgICAgICAgICAgICAgbGV0IHRyYW5zY3JpcHRpb24gPSByZXN1bHQuaXRlbSgwKS50cmFuc2NyaXB0XG4gICAgICAgICAgICAgICAgaWYgKHRoaXMuc2hvdWxkQ2FwaXRhbGl6ZSgpKSB7XG4gICAgICAgICAgICAgICAgICAgIHRyYW5zY3JpcHRpb24gPSB0aGlzLmNhcGl0YWxpemUodHJhbnNjcmlwdGlvbilcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgZWRpdG9yLmdldERvYygpLnJlcGxhY2VTZWxlY3Rpb24odHJhbnNjcmlwdGlvbilcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBlZGl0b3IuZm9jdXMoKVxuICAgICAgICB9XG4gICAgfVxuICAgIHNob3VsZENhcGl0YWxpemUoKXtcbiAgICAgICAgbGV0IGN1cnNvciA9IHRoaXMucHJvcHMuZWRpdG9yLmdldEN1cnNvcigpXG4gICAgICAgIGxldCBzdGFydFBocmFzZSA9IHRoaXMucHJvcHMuZWRpdG9yLmdldERvYygpLmdldFJhbmdlKHtcbiAgICAgICAgICAgIGxpbmU6IGN1cnNvci5saW5lLFxuICAgICAgICAgICAgY2g6MFxuICAgICAgICB9LCBjdXJzb3IpLnRyaW0oKS5lbmRzV2l0aCgnLicpXG4gICAgICAgIGlmIChjdXJzb3IuY2ggPT09IDAgfHwgc3RhcnRQaHJhc2UpIHtcbiAgICAgICAgICAgIHJldHVybiB0cnVlXG4gICAgICAgIH1cbiAgICB9XG4gICAgY2FwaXRhbGl6ZSAoIHN0cmluZyApIHtcbiAgICAgICAgcmV0dXJuIHN0cmluZy5jaGFyQXQoMCkudG9VcHBlckNhc2UoKSArIHN0cmluZy5zbGljZSgxKVxuICAgIH1cbn0iLCJpbXBvcnQgeyBoLCBDb21wb25lbnR9IGZyb20gJ3ByZWFjdCdcbmltcG9ydCBtYXJrZWQgZnJvbSAnbWFya2VkJ1xuXG5cblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgTWFya2Rvd24gZXh0ZW5kcyBDb21wb25lbnQge1xuICAgIHJlbmRlciAocHJvcHMpIHtcbiAgICAgICAgcmV0dXJuIDxkaXYgaWQ9XCJwcmV2aWV3XCIgZGFuZ2Vyb3VzbHlTZXRJbm5lckhUTUwgPSB7e19faHRtbDogdGhpcy5yZW5kZXJNYXJrZG93bigpfX0vPlxuICAgIH1cblxuICAgIHJlbmRlck1hcmtkb3duKCl7XG4gICAgICAgIG1hcmtlZC5zZXRPcHRpb25zKHtcbiAgICAgICAgICAgIGdmbTogdHJ1ZSxcbiAgICAgICAgICAgIHRhYmxlOiB0cnVlLFxuICAgICAgICAgICAgYnJlYWtzOiBmYWxzZSxcbiAgICAgICAgICAgIHNhbml0aXplOiBmYWxzZSwgLy8gc2kgdHJ1ZSBodG1sIGVjaGFww6lcbiAgICAgICAgICAgIHBlZGFudGljOiBmYWxzZSxcbiAgICAgICAgICAgIHNtYXJ0TGlzdHM6IHRydWUsXG4gICAgICAgICAgICBzbWFydHlwYW50czogZmFsc2UsXG4gICAgICAgIH0pO1xuICAgICAgICByZXR1cm4gbWFya2VkKHRoaXMucHJvcHMubWFya2Rvd24pXG4gICAgfVxuXG5cbn0iLCJpbXBvcnQgeyBoLENvbXBvbmVudCB9IGZyb20gXCJwcmVhY3RcIjtcbmltcG9ydCBDb2RlTWlycm9yIGZyb20gJ2NvZGVtaXJyb3InO1xuaW1wb3J0ICdjb2RlbWlycm9yL21vZGUvbWFya2Rvd24vbWFya2Rvd24nO1xuaW1wb3J0ICdjb2RlbWlycm9yL2xpYi9jb2RlbWlycm9yLmNzcyc7XG5pbXBvcnQgJ2NvZGVtaXJyb3IvdGhlbWUvbmVvLmNzcydcblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgQ29kZU1pcnJvckNvbXBvbmVudCBleHRlbmRzIENvbXBvbmVudHtcblxuICAgIHJlbmRlciAoe25hbWUsIHZhbHVlfSl7XG4gICAgICAgIHJldHVybiA8ZGl2Lz5cbiAgICB9IFxuXG4gICAgc2hvdWxkQ29tcG9uZW50VXBkYXRlKCl7XG4gICAgICAgIHJldHVybiBmYWxzZVxuICAgIH1cbiAgICBjb21wb25lbnREaWRNb3VudCAoKSB7XG4gICAgICAgIGxldCBlZGl0b3IgPSBDb2RlTWlycm9yKHRoaXMuYmFzZSwge1xuICAgICAgICAgICAgdmFsdWU6IHRoaXMucHJvcHMudmFsdWUsXG4gICAgICAgICAgICBtb2RlOiAnbWFya2Rvd24nLFxuICAgICAgICAgICAgdGhlbWU6ICduZW8nLFxuICAgICAgICAgICAgbGluZVdyYXBwaW5nOiB0cnVlLFxuICAgICAgICAgICAgdmlld3BvcnRNYXJnaW46IEluZmluaXR5LFxuICAgICAgICAgICAgY3Vyc29yQmxpbmtSYXRlOiAwXG4gICAgICAgIH0pXG4gICAgICAgIHRoaXMucHJvcHMub25SZWFkeShlZGl0b3IpXG4gICAgfVxuXG59XG5cbiIsImltcG9ydCB7IGgsQ29tcG9uZW50IH0gZnJvbSBcInByZWFjdFwiO1xuaW1wb3J0IENvZGVNaXJyb3IgZnJvbSAnLi9jb2RlbWlycm9yJ1xuaW1wb3J0IE1hcmtkb3duIGZyb20gJy4vTWFya2Rvd24nXG5pbXBvcnQgJy4vc3R5bGUuc2Nzcyc7XG5pbXBvcnQgQm9sZEJ1dHRvbiBmcm9tIFwiLi9CdXR0b25zL0JvbGRCdXR0b25cIjtcbmltcG9ydCBJdGFsaWNCdXR0b24gZnJvbSBcIi4vQnV0dG9ucy9JdGFsaWNCdXR0b25cIjtcbmltcG9ydCBTcGVlY2hCdXR0b24gZnJvbSBcIi4vQnV0dG9ucy9TcGVlY2hCdXR0b25cIjtcbmltcG9ydCBIdW5CdXR0b24gZnJvbSBcIi4vQnV0dG9ucy9IdW5CdXR0b25cIjtcbmltcG9ydCBIZGV1eEJ1dHRvbiBmcm9tIFwiLi9CdXR0b25zL0hkZXV4QnV0dG9uXCJcbmltcG9ydCBIdHJvaXNCdXR0b24gZnJvbSBcIi4vQnV0dG9ucy9IdHJvaXNCdXR0b25cIlxuaW1wb3J0IEhxdWF0cmVCdXR0b24gZnJvbSBcIi4vQnV0dG9ucy9IcXVhdHJlQnV0dG9uXCJcbmltcG9ydCBIY2lucUJ1dHRvbiBmcm9tIFwiLi9CdXR0b25zL0hjaW5xQnV0dG9uXCJcbmltcG9ydCBBcnJheUJ1dHRvbiBmcm9tIFwiLi9CdXR0b25zL0FycmF5QnV0dG9uXCJcbmltcG9ydCBMaXN0T2xCdXR0b24gZnJvbSBcIi4vQnV0dG9ucy9MaXN0T2xCdXR0b25cIlxuaW1wb3J0IExpc3RVbEJ1dHRvbiBmcm9tIFwiLi9CdXR0b25zL0xpc3RVbEJ1dHRvblwiXG5pbXBvcnQgSW1hZ2VCdXR0b24gZnJvbSBcIi4vQnV0dG9ucy9JbWFnZUJ1dHRvblwiXG5cblxuZXhwb3J0IGRlZmF1bHQgY2xhc3MgRWRpdG9yIGV4dGVuZHMgQ29tcG9uZW50IHtcbiAgICBcbiAgICBjb25zdHJ1Y3RvciAocHJvcHMpe1xuICAgICAgICBzdXBlcihwcm9wcylcblxuICAgICAgICB0aGlzLnN0YXRlID0ge1xuICAgICAgICAgICAgY29udGVudDogcHJvcHMudmFsdWUsXG4gICAgICAgICAgICBlZGl0b3I6IG51bGwsXG4gICAgICAgICAgIGZ1bGxzY3JlZW46IGZhbHNlLFxuICAgICAgICB9XG4gICAgICAgIC8vIHRoaXMuc2V0RWRpdG9yID0gdGhpcy5zZXRFZGl0b3IuYmluZCh0aGlzKVxuICAgIH1cblxuICAgXG5cbiAgICByZW5kZXIgKHtuYW1lfSwge2NvbnRlbnQsIGVkaXRvcixtYXJrZG93bn0pe1xuICAgICAgIFxuICAgICAgICBsZXQgY2xhc3NlID0gJ21kZWRpdG9yJ1xuICAgICAgICByZXR1cm4gPGRpdiBjbGFzcz17Y2xhc3NlfT5cbiAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJtZGVkaXRvcl9fdG9vbGJhclwiPlxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJtZGVkaXRvcl9fdG9vbGJhckxlZnRcIj5cbiAgICAgICAgICAgICAgICAgICAge2VkaXRvciAmJiBbXG4gICAgICAgICAgICAgICAgICAgICAgICA8U3BlZWNoQnV0dG9uIGVkaXRvcj17ZWRpdG9yfS8+LFxuICAgICAgICAgICAgICAgICAgICBdfSB8IFxuICAgICAgICAgICAgICAgICAgICB7ZWRpdG9yICYmIFtcbiAgICAgICAgICAgICAgICAgICAgICAgIDxIdW5CdXR0b24gZWRpdG9yPXtlZGl0b3J9Lz4sXG4gICAgICAgICAgICAgICAgICAgICAgICA8SGRldXhCdXR0b24gZWRpdG9yPXtlZGl0b3J9Lz4sXG4gICAgICAgICAgICAgICAgICAgICAgICA8SHRyb2lzQnV0dG9uIGVkaXRvcj17ZWRpdG9yfS8+LFxuICAgICAgICAgICAgICAgICAgICAgICAgPEhxdWF0cmVCdXR0b24gZWRpdG9yPXtlZGl0b3J9Lz4sXG4gICAgICAgICAgICAgICAgICAgICAgICA8SGNpbnFCdXR0b24gZWRpdG9yPXtlZGl0b3J9Lz5cbiAgICAgICAgICAgICAgICAgICAgXX0gfCBcbiAgICAgICAgICAgICAgICAgICAge2VkaXRvciAmJiBbXG4gICAgICAgICAgICAgICAgICAgICAgICA8Qm9sZEJ1dHRvbiBlZGl0b3I9e2VkaXRvcn0vPixcbiAgICAgICAgICAgICAgICAgICAgICAgIDxJdGFsaWNCdXR0b24gZWRpdG9yPXtlZGl0b3J9Lz4gXG4gICAgICAgICAgICAgICAgICAgIF19IHwgXG4gICAgICAgICAgICAgICAgICAgIHtlZGl0b3IgJiYgW1xuICAgICAgICAgICAgICAgICAgICAgICAgPEFycmF5QnV0dG9uIGVkaXRvcj17ZWRpdG9yfS8+LFxuICAgICAgICAgICAgICAgICAgICBdfSB8IFxuICAgICAgICAgICAgICAgICAgICB7ZWRpdG9yICYmIFtcbiAgICAgICAgICAgICAgICAgICAgICAgIDxMaXN0T2xCdXR0b24gZWRpdG9yPXtlZGl0b3J9Lz4sXG4gICAgICAgICAgICAgICAgICAgICAgICA8TGlzdFVsQnV0dG9uIGVkaXRvcj17ZWRpdG9yfS8+XG4gICAgICAgICAgICAgICAgICAgIF19IHxcbiAgICAgICAgICAgICAgICAgICAge2VkaXRvciAmJiBbXG4gICAgICAgICAgICAgICAgICAgICAgICA8SW1hZ2VCdXR0b24gZWRpdG9yPXtlZGl0b3J9Lz5cbiAgICAgICAgICAgICAgICAgICAgXX1cbiAgICAgICAgICAgICAgICAgICAgXG5cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwibWRlZGl0b3JfX3Rvb2xiYXJSaWdodFwiPlxuICAgICAgICAgICAgICAgICAgICB7ZWRpdG9yICYmIFtcbiAgICAgICAgICAgICAgICAgICAgXX1cbiAgICAgICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgIDwvZGl2PlxuICAgICAgICAgICAgPGRpdiBjbGFzcz1cIm1kZWRpdG9yX19lZGl0b3JcIj5cbiAgICAgICAgICAgICAgICA8Q29kZU1pcnJvciB2YWx1ZT17Y29udGVudCB8fCAnVm90cmUgYXJ0aWNsZSBpY2kgISEnfSBvblJlYWR5PXt0aGlzLnNldEVkaXRvcn0vPlxuXG4gICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJtZGVkaXRvcl9fcHJldmlld1wiPlxuICAgICAgICAgICAgICAgIDxNYXJrZG93biBtYXJrZG93bj17Y29udGVudCB8fCAnVm90cmUgYXJ0aWNsZSBpY2kgISEnfS8+XG4gICAgICAgICAgICA8L2Rpdj5cbiAgICAgICAgICAgIDx0ZXh0YXJlYSBuYW1lPXtuYW1lfSBpZD0ncG9zdENvbnRlbnQnIHN0eWxlPVwiZGlzcGxheTpub25lO1wiPlxuICAgICAgICAgICAgeyBjb250ZW50IH1cbiAgICAgICAgICAgIDwvdGV4dGFyZWE+XG4gICAgICAgIDwvZGl2PlxuICAgICAgXG4gICAgfVxuICAgICAgICBcbiAgICBzZXRFZGl0b3I9IChlZGl0b3IpID0+IHtcbiAgICAgICAgdGhpcy5zZXRTdGF0ZSh7ZWRpdG9yfSlcbiAgICAgICAgZWRpdG9yLm9uKCdjaGFuZ2UnLGUgPT4ge1xuICAgICAgICAgICAgdGhpcy5zZXRTdGF0ZSh7Y29udGVudDogZS5nZXREb2MoKS5nZXRWYWx1ZSgpfSlcbiAgICAgICAgfSlcbiAgICB9XG59XG4vLyBzZXRFZGl0b3IgKGVkaXRvcil7XG4gICAgLy8gY29uc29sZS5sb2coZWRpdG9yKVxuICAgIC8vIHRoaXMuc2V0U3RhdGUoe2VkaXRvcn0pXG4vLyB9IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luIiwiLy8gbGV0IHBvbHkgPSByZXF1aXJlKFwicHJlYWN0LWNsaS9saWIvbGliL3dlYnBhY2svcG9seWZpbGxzXCIpO1xuLy8gXG5pbXBvcnQgeyBoIH0gZnJvbSBcInByZWFjdFwiO1xuaW1wb3J0IHsgcmVuZGVyIH0gZnJvbSBcInByZWFjdFwiO1xuaW1wb3J0IEVkaXRvciBmcm9tICcuL2VkaXRvcidcblxuXG4vLyBcbi8vIGltcG9ydCBXaWRnZXQgZnJvbSBcIlwiO1xuLy8gXG4vLyBcblxubGV0IGVkaXRvcnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1tZGVkaXRvcl0nKVxuXG5cbmVkaXRvcnMuZm9yRWFjaCggZnVuY3Rpb24oZWRpdG9yKXtcbiAgICBsZXQgJHRleHRhcmVhID0gZWRpdG9yLnF1ZXJ5U2VsZWN0b3IoJ3RleHRhcmVhJylcbiAgICBsZXQgdmFsdWUgPSAkdGV4dGFyZWEudmFsdWVcbiAgICBsZXQgbmFtZSA9ICR0ZXh0YXJlYS5nZXRBdHRyaWJ1dGUoJ25hbWUnKVxuICAgIGxldCBpbWFnZSA9IHdpbmRvdy5JTUFHRVxuICAgIGVkaXRvci5pbm5lckhUTUwgPSAnJ1xucmVuZGVyKDxFZGl0b3IgaWQ9XCJwb3N0ZXVuZVwiIHZhbHVlPXt2YWx1ZX0gbmFtZT17bmFtZX0gLz4sIGVkaXRvciwgZWRpdG9yLmZpcnN0Q2hpbGQpXG59KSJdLCJzb3VyY2VSb290IjoiIn0=