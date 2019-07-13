
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

if(window.Dropzone != undefined) {

    console.log("init dropzone / app.js");
    Dropzone.autoDiscover = false;

    $(function () {
        window.callDropzoneOn = function(uploadUrl,
                                         deleteUrl,
                                         dropzoneContainer,
                                         dropzoneInput
        )
        {
            if ($(dropzoneContainer).length > 0) {
                var residencePaths = [];
                var filesdz = [];
                var optsFilePaths = null;

                var dzdropzoneContainer = new Dropzone(dropzoneContainer, {
                    url: uploadUrl,
                    paramName: 'file',
                    autoProcessQueue: true,
                    acceptedFiles: "image/jpeg, image/png, image/gif, .pdf, .doc, .docx, .txt",
                    autoDiscover: false,
                    addRemoveLinks: true,
                    headers: {
                        'X-CSRF-Token': window.csrfToken
                    }
                });
                dzdropzoneContainer.on('success', function (file, response) {
                    optsFilePaths = [];
                    filesdz.push({path: response, file: file});
                    filesdz.forEach(function (obj) {
                        optsFilePaths.push({path: obj.path});
                    });
                    $(dropzoneInput).val(JSON.stringify(optsFilePaths));
                });

                dzdropzoneContainer.on('removedfile', function (file) {

                    filesdz.forEach(function (obj, key) {
                        if (obj.file.name === file.name && obj.file.size === file.size) {
                            filesdz.splice(key);
                            $.ajax({
                                url: deleteUrl,
                                headers: {
                                    'X-CSRF-TOKEN': window.csrfToken
                                },
                                method: 'POST',
                                data: {path: obj.path}
                            });
                            optsFilePaths = [];
                            filesdz.forEach(function (obj) {
                                optsFilePaths.push({path: obj.path});
                            });
                            $(dropzoneInput).val(JSON.stringify(optsFilePaths));
                            return false;
                        }
                    });
                });
            }

        }
    });
}
