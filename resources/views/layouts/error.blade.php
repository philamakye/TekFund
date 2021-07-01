@if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @elseif (session()->has('status'))
<div class="alert alert-success">
    @if(is_array(session('status')))
        <ul>
            @foreach (session('status') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @else
        {{ session('status') }}
    @endif
</div>
        @endif


