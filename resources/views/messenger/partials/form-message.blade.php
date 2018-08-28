<div class="row">
    <br>

    <div class="col-md-offset-2 col-md-8">
        <h4 class="text-center">Poruka</h4>
        <form action="{{ route('messages.update', $thread->id) }}" method="post">
        {{ method_field('put') }}
        {{ csrf_field() }}

        <!-- Message Form Input -->
            <div class="form-group">
                <textarea name="message" class="form-control">{{ old('message') }}</textarea>
            </div>


            <!-- Submit Form Input -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Pošalji</button>
            </div>
        </form>
    </div>
</div>