// Dodavanje kluba - Dodaj ličnost
$('#dodajLicnost').on('click', function () {

    $.ajax({
            url: '/getNewFigureForm',
            method: 'GET',
            data: {'licnostiCount': licnostiCount},
            success: function (res) {
                $(res).appendTo('#tab-licnosti #licnostiLista').hide().slideDown();

                $("#licnost[" + licnostiCount + "][avatar]").dropzone({
                    url: "/uploads",
                    addRemoveLinks: true,
                    maxFiles: 50,
                    init: function () {
                        this.on("removedfile", function (file) {
                            if (file.status == 'success') {
                                var fileUploded = file.previewElement.querySelector("[data-dz-name]");

                                var filename = $(fileUploded).attr('data-path');

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

                        $('<input>').attr('type', 'hidden').attr('name', 'licnost[' + licnostiCount + '][avatar][attachments]').val(JSON.stringify(response)).appendTo('#{{$zoneID}}-uploaded-files');

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