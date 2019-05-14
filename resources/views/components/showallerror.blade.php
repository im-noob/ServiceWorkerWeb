<Section>
    @foreach ($errors->all() as $message) 
        <div class="alert alert-danger"> 
            <strong>{{$message}}</strong>
        </div>
    @endforeach
</Section>