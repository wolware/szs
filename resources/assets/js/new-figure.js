function jq( id ) {

    return id.replace( /(:|\.|\[|\]|,|=|@)/g, "\\$1" );

}
$(document).ready(function () {
// Dodavanje kluba - Dodaj ličnost
    $('#dodajLicnost').on('click', function () {

        $.ajax({
                url: '/getNewFigureForm',
                method: 'GET',
                data: {'licnostiCount': licnostiCount},
                success: function (res) {
                    var numberOfUploadedFiles = 0;
                    $(res).appendTo('#tab-licnosti #licnostiLista').hide().slideDown();
                    let dropzone = new Dropzone("#licnost\\[" + licnostiCount + "\\]\\[avatar\\]", {
                        url: "/uploads",
                        addRemoveLinks: true,
                        maxFiles: 1,
                        init: function () {
                            this.on("removedfile", function (file, xhr, formData) {
                                if (file.status == 'success') {
                                    var fileUploded = file.previewElement.querySelector("[data-dz-name]");

                                    var filename = $(fileUploded).attr('data-path');
                                    formData.append("_token", $('meta[name="csrf-token"]').attr('content'));

                                    $.ajax({
                                        url: '/uploads',
                                        type: "delete",
                                        data: {'path': filename},
                                        success: function (data) {
                                            $('[value="' + filename + '"]').remove();
                                        }
                                    });
                                }
                            });
                        },
                        sending: function (file, xhr, formData) {
                            formData.append("_token", $('meta[name="csrf-token"]').attr('content'));
                        },
                        success: function (file, response) {
                            //todo find a beter way to get current zone id with escaped [ and ]
                            let zoneID = this.element.id;
                            let JQzoneID = jq(zoneID);

                            $('<input>').attr('type', 'hidden')
                                .attr('name', zoneID + '[attachments][' + numberOfUploadedFiles + ']')
                                .val(JSON.stringify(response))
                                .appendTo("#" + JQzoneID + "-uploaded-files");

                            numberOfUploadedFiles++;

                            var fileUploded = file.previewElement.querySelector("[data-dz-name]");
                            $(fileUploded).attr('data-path', response.path);

                            file.previewElement.classList.add("dz-success");
                            console.log("Successfully uploaded :" + response.originalName);

                        },
                        error: function (file, response) {
                            file.previewElement.classList.add("dz-error");
                        }
                    });

                    licnostiCount++;
                }
            }
        );

        addLicnostValidation();
    });

// Dodavanje kluba - Obriši ličnost
    $('#licnostiLista').on('click', '.izbrisiLicnost', function () {
        $(this).closest('.licnostHover').slideUp('normal', function () {
            $(this).remove();
        });
    });
})
