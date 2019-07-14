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
/******/ 	return __webpack_require__(__webpack_require__.s = 46);
/******/ })
/************************************************************************/
/******/ ({

/***/ 46:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(47);


/***/ }),

/***/ 47:
/***/ (function(module, exports) {

// Dodavanje kluba - Dodaj ličnost
$('#dodajLicnost').on('click', function () {

    $.ajax({
        url: '/getNewFigureForm',
        method: 'GET',
        data: { 'licnostiCount': licnostiCount },
        success: function success(res) {
            $(res).appendTo('#tab-licnosti #licnostiLista').hide().slideDown();

            $("#licnost[" + licnostiCount + "][avatar]").dropzone({
                url: "/uploads",
                addRemoveLinks: true,
                maxFiles: 50,
                init: function init() {
                    this.on("removedfile", function (file) {
                        if (file.status == 'success') {
                            var fileUploded = file.previewElement.querySelector("[data-dz-name]");

                            var filename = $(fileUploded).attr('data-path');

                            $.ajax({
                                url: '/uploads',
                                type: "delete",
                                data: { 'path': filename },
                                success: function success(data) {
                                    $('[value="' + filename + '"]').remove();
                                }
                            });
                        }
                    });
                },
                sending: function sending(file, xhr, formData) {
                    formData.append("_token", $('meta[name="csrf-token"]').attr('content'));
                },
                success: function success(file, response) {

                    $('<input>').attr('type', 'hidden').attr('name', 'licnost[' + licnostiCount + '][avatar][attachments]').val(JSON.stringify(response)).appendTo('#{{$zoneID}}-uploaded-files');

                    var fileUploded = file.previewElement.querySelector("[data-dz-name]");
                    $(fileUploded).attr('data-path', response.path);

                    file.previewElement.classList.add("dz-success");
                    console.log("Successfully uploaded :" + response.originalName);
                },
                error: function error(file, response) {
                    file.previewElement.classList.add("dz-error");
                }
            });

            licnostiCount++;
        }
    });

    addLicnostValidation();
});

// Dodavanje kluba - Obriši ličnost
$('#licnostiLista').on('click', '.izbrisiLicnost', function () {
    $(this).closest('.licnostHover').slideUp('normal', function () {
        $(this).remove();
    });
});

/***/ })

/******/ });