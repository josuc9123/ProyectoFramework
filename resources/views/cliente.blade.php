@extends('layout.layout')

@section('content')


               

<div class="card-body">
 @if (session('status'))
 <div class="alert alert-success" role="alert">
   {{ session('status') }}
  </div>
 @endif

 </div>
 </div>
 </div>
    </div>
</div>
@endsection