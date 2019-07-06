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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ({

/***/ 44:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(45);


/***/ }),

/***/ 45:
/***/ (function(module, exports) {

var validator = $('#createNewClub').validate({
    ignore: ':hidden,:disabled',
    rules: {
        logo: {
            required: false,
            extension: 'png|jpg|jpeg'
        },
        name: {
            required: true,
            string: true,
            maxlength: 255
        },
        nature: {
            required: true,
            string: true,
            maxlength: 255
        },
        continent: {
            required: true,
            digits: true
        },
        country: {
            required: true,
            digits: true
        },
        province: {
            required: true,
            digits: true
        },
        region: {
            required: true,
            digits: true
        },
        municipality: {
            required: true,
            digits: true
        },
        city: {
            required: true,
            string: true,
            maxlength: 255
        },
        type: {
            required: true,
            digits: true
        },
        sport: {
            required: true,
            digits: true
        },
        category: {
            required: true,
            digits: true
        },
        established_in: {
            digits: true,
            range: [1800, new Date().getFullYear()]
        },
        home_field: {
            string: true,
            maxlength: 255
        },
        competition: {
            string: true,
            maxlength: 255
        },
        association: {
            required: true,
            digits: true
        },
        phone_1: {
            digits: true,
            maxlength: 255
        },
        phone_2: {
            digits: true,
            maxlength: 50
        },
        fax: {
            digits: true,
            maxlength: 50
        },
        email: {
            email: true,
            maxlength: 255
        },
        website: {
            string: true,
            maxlength: 255
        },
        address: {
            string: true,
            maxlength: 255
        },
        facebook: {
            string: true,
            maxlength: 255
        },
        instagram: {
            string: true,
            maxlength: 255
        },
        twitter: {
            string: true,
            maxlength: 255
        },
        youtube: {
            string: true,
            maxlength: 255
        },
        video: {
            string: true,
            maxlength: 255
        },
        history: {
            string: true
        },
        'galerija[]': {
            extension: 'png|jpg|jpeg'
        },
        'proof[]': {
            required: true,
            extension: 'png|jpg|jpeg'
        }
    },
    invalidHandler: function invalidHandler(form, validator) {
        $('html, body').animate({ scrollTop: '500em' }, 300);
    }
});

$('[role="tab"]').click(function (e) {
    var tab = $("#tabs").children(".active");

    var valid = true;
    tab.each(function (activeTab) {
        $('input', activeTab).each(function (i, v) {
            valid = validator.element(v) && valid;
        });
    });

    if (!valid) {
        e.stopPropagation();
        $('html, body').animate({
            scrollTop: $('.error').offset().top
        }, 500);
    }
});

/***/ })

/******/ });