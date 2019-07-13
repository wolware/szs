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
        $(document).ready(function(){

            window.callDropzoneOn(
                '{{$zoneUploadUrl}}', // change to laravel route
                '{{$zoneDeleteUrl}}', // change to laravel route
                '#{{$zoneID}}', // .dropzone class element
                '#{{$zoneID}}-input' // input for file paths
            );
        });
    </script>
@endpush