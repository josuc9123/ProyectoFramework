@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/cabecera.css">
    <link rel="stylesheet" href="./img/main3.jpg">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
			.box{
				width:600px;
				margin:0 auto;
				border:1px solid #ccc;
			}
			.has-error
			{
				border-color:#cc0000;
				background-color:#ffff99;
			}
		</style>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
<div class="col-md-6">
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          <input id="tipo" type="hidden"  name="tipo" value="{{ value('4') }}" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <span id="error_email"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button name="register"id="register" type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){

$('#email').blur(function(){
    var error_email = '';
    var email = $('#email').val();
    var _token = $('input[name="_token"]').val();
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if($.trim(email).length > 0)
    {
        if(!filter.test(email))
        {				
            $('#error_email').html('<label class="text-danger">Invalid Email</label>');
            $('#email').addClass('has-error');
            $('#register').attr('disabled', 'disabled');
        }
        else
        {
            $.ajax({
                url:"{{ route('register.check') }}",
                method:"POST",
                data:{email:email, _token:_token},
                success:function(result)
                {
                    if(result == 'unique')
                    {
                        $('#error_email').html('<label class="text-success">Correo Disponible</label>');
                        $('#email').removeClass('has-error');
                        $('#register').attr('disabled', false);
                    }
                    else
                    {
                        $('#error_email').html('<label class="text-danger">Correo no Disponible</label>');
                        $('#email').addClass('has-error');
                        $('#register').attr('disabled', 'disabled');
                    }
                }
            })
        }
    }
    else
    {
        $('#error_email').html('<label class="text-danger">correo requerido</label>');
        $('#email').addClass('has-error');
        $('#register').attr('disabled', 'disabled');
    }
});

});
</script>
@endsection
