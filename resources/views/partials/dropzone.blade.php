<!-- need to pass on:
$zoneID
$zoneUploadUrl
$zoneDeleteUrl

optional:
$zoneLabel
$dzMessage
$dzDescription
$maxFiles
-->
<!-- Some html before -->
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="{{$zoneID}}Input">{{ isset($zoneLabel) ? $zoneLabel : 'Odaberi sliku'}}</label>
            <div id="{{$zoneID}}" class="dzupload dropzone dropzone-file-area"
                 data-uploadtype="attachments">
                <div class="dz-message">{{isset($dzMessage) ? $dzMessage : "Klikni ili prevuci fajlove ovdje"}}</div>
                <div id="dzpreviews" class="dzpreview dropzone-previews"></div>
            </div>
            <strong>{{isset($dzDescription) ? $dzDescription : "Fajlovi se mogu prebacivati i drag & drop metodom." }}</strong>
            {!! Form::hidden($zoneID.'Input', isset($zoneDisplay) ? $zoneDisplay : '', ['id' => $zoneID.'Input']) !!}
            <label id="{{$zoneID}}-error" class="error" for="{{$zoneID}}" style="display: none">Ovo polje je
                obavezno.</label>

            @if(old($zoneID) && @count(old($zoneID)))
                <p><strong>
                        Predhodno uploadovani fajlovi:
                    </strong></p>
                @foreach(old($zoneID)['attachments'] as $attachment)
                    <p><strong>
                            {{json_decode($attachment)->originalName}}
                        </strong></p>
                    <input type="hidden" name="{{$zoneID}}[attachments][{{$loop->index}}]" value="{{$attachment}}">
                @endforeach
            @endif
        </div>
    </div>
    <div id="{{$zoneID}}-uploaded-files"></div>
</div>
<!-- Some html after -->

@push('scripts-end')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function jq( id ) {

            return id.replace( /(:|\.|\[|\]|,|=|@)/g, "\\$1" );

        }
        // $(document).ready(function () {
        var numberOfUploadedFiles = {{old($zoneID) ? count(old($zoneID)): 0 }};
        Dropzone.autoDiscover = false;
        $("#{{$zoneID}}").dropzone({
            url: "/{{$zoneUploadUrl}}",
            addRemoveLinks: true,
            maxFiles: "{{isset($maxFiles) ? $maxFiles : 50}}",
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
                                console.log(data);
                                console.log($('#' + jq(data.path)));
                            }
                        });
                    }
                });
            },
            sending: function (file, xhr, formData) {
                formData.append("_token", $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (file, response) {
                $("#{{$zoneID}}-error").hide();
                $('<input>').attr('type', 'hidden')
                    .attr('name', '{{$zoneID}}[attachments][' + numberOfUploadedFiles + ']')
                    .attr('name', '{{$zoneID}}[attachments][' + numberOfUploadedFiles + ']')
                    .attr('id', response.path)
                    .val(JSON.stringify(response))
                    .appendTo('#{{$zoneID}}-uploaded-files');
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

        // });

    </script>
@endpush