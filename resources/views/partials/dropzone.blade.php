<!-- need to pass on:
$zoneID
$zoneUploadUrl
$zoneDeleteUrl
-->
<!-- Some html before -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="{{$zoneID}}Input">{{ isset($zoneLabel) ? $zoneLabel : 'Odaberi sliku'}}</label>
            <div id="{{$zoneID}}" class="dzupload dropzone dropzone-file-area"
                 data-uploadtype="attachments">
                <div class="dz-message">Klikni ili prevuci fajlove ovdje</div>
                <div id="dzpreviews" class="dzpreview dropzone-previews"></div>
            </div>
            <strong>Fajlovi se mogu uploadovati i "drag & drop" metodom</strong>
            {!! Form::hidden($zoneID.'-input', isset($zoneDisplay) ? $zoneDisplay : '', ['id' => $zoneID.'-input']) !!}
        </div>
    </div>

    <div id="uploaded-files"></div>
</div>
<!-- Some html after -->

@push('scripts-end')
    <script>
        $(document).ready(function () {
            // Dropzone.autoDiscover = false;
            $("#{{$zoneID}}").dropzone({
                url: "/{{$zoneUploadUrl}}",
                addRemoveLinks: true,
                init: function () {
                    this.on("removedfile", function (file) {
                        if (file.status == 'success') {
                            var fileUploded = file.previewElement.querySelector("[data-dz-name]");

                            var filename = $(fileUploded).attr('data-path');

                            $.ajax({
                                url: '/{{$zoneDeleteUrl}}',
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

                    $('<input>').attr('type', 'hidden').attr('name', 'attachments[]').val(JSON.stringify(response)).appendTo('#attachments-files');

                    var fileUploded = file.previewElement.querySelector("[data-dz-name]");
                    $(fileUploded).attr('data-path', response.path);

                    file.previewElement.classList.add("dz-success");
                    console.log("Successfully uploaded :" + response.originalName);
                },
                error: function (file, response) {
                    file.previewElement.classList.add("dz-error");
                }
            });

        });
    </script>
@endpush