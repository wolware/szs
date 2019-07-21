<div class="row licnostHover">
    <div class="izbrisiLicnost"><i class="fa fa-times-circle-o"></i></div>
    <div class="row identitet-style">
        <div class="col-md-6 objavi-klub-logo-setup">
                @include('partials.dropzone', [
                               'zoneID' => 'licnost[' . $licnostiCount . '][avatar]',
                               'zoneUploadUrl' => 'uploads',
                               'zoneDeleteUrl' => 'uploads',
                               'zoneLabel' => 'Odaberite sliku za istaknutu ličnost',
                               'dzMessage' => 'Klikni ili prevuci sliku ovdje',
                               'dzDescription' => 'Slika se može prebaciti i drag & drop metodom.',
                               'maxFiles' => 1,
                               ])
            <div class="col-sm-7">
                <div class="info001">
                    <p class="info-upload-slike">Preporučene dimenzije za sliku ličnosti:</p>
                    <p class="info-upload-slike">Minimalno: 312x250 px</p>
                    <p class="info-upload-slike">Maksimalno: 1920x1080 px</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group col-md-6 col-xs-12">
                <label for="licnost[{{$licnostiCount}}][ime]"><img class="flow-icons-013" src="/images/icons/edit.svg"> Ime</label>
                <input type="text" name="licnost[{{$licnostiCount}}][ime]" class="form-control"
                       placeholder="Unesite ime ličnosti">
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="licnost[{{$licnostiCount}}][prezime]"><img class="flow-icons-013" src="/images/icons/edit.svg"> Prezime</label>
                <input type="text" name="licnost[{{$licnostiCount}}][prezime]" class="form-control"
                       placeholder="Unesite prezime ime ličnosti">
            </div>
            <div class="form-group col-md-12">
                <label for="licnost[{{$licnostiCount}}][opis]"><img class="flow-icons-013" src="/images/icons/edit.svg"> Opis i uloga</label>
                <textarea class="form-control" rows="4" name="licnost[{{$licnostiCount}}][opis]"
                          placeholder="Upišite kratak opis uloge i funkcije navedene ličnosti u klubu..."></textarea>
            </div>
        </div>
    </div>
</div>