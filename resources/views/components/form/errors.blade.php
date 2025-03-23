@if ($errors->any())
    <div>
        <url>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
        </url>
    </div>
@endif
