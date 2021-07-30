 @if(session()->has('mess'))
<div class="alert alert-success">{{session()->get('mess')}}</div>
@elseif (session()->has('camp_error'))
<div class="alert alert-danger">{{session()->get('camp_error')}}</div>

@endif
