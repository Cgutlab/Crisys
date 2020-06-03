<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrf_token: '{{ csrf_token() }}' }</script>
    <title>@lang('translator.main-backend')</title>

    <link rel='shortcut icon' href='{{asset('img/logo/'.$favicon->image)}}' type='image/png' />
    <link rel='icon' href='{{asset('img/logo/'.$favicon->image)}}' type='image/png' />
        <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> --}}
    <link href=" {{ asset('css/materialize/materialize.min.css')}}" rel="stylesheet">
    <link href="{{ asset('icons/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

</head>
<body class="main-bg-color-dark">

  <main>
  <div class="container mt-15 w-ful">
    <div class="row">
      <div class="col offset-l4 l4 offset-m3 m6 s12 container" style="position:absolute; top: 10%;left: 0%;max-width: 600px;">
        <form class="main-card-light" action="{{route('adm.auth.auth')}}" method="post" enctype="multipart/form-data">


        {{-- {!!Form::open(['route'=>'adm.auth.auth', 'method'=>'POST', 'files' => true, 'class' => 'main-card-light'])!!} --}}
        {{ csrf_field() }}
        <div class="row">
            <div class="logo-login center mt-15">
                <img class="responsive-img h-max-200" src="{{ asset('img/logo/'.$headband->image) }}">
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">face</i>
                    <label for="username" class="fs15 fw5">@lang('translator.main-username')</label>
                    <input type="text" name="username" value="{{old('username')}}" class="validate" required id="username">
                    {{-- {!!Form::label('username', trans('translator.main-username'), ['class' => 'fs15 fw5'])!!} --}}
                    {{-- {!!Form::text('username', old('username'), ['class' => 'validate', 'required', 'id' => 'username'])!!} --}}

                    @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">https</i>
                    <label for="password" class="fs15 fw5">@lang('translator.main-password')</label>
                    <input type="password" name="password" value="{{old('password')}}" class="validate" required id="password">
                    {{-- {!!Form::label('password', trans('translator.main-password'), ['class' => 'fs15 fw5'])!!} --}}
                    {{-- {!!Form::password('password', ['class' => 'validate', 'required', 'id' => 'password'])!!} --}}
                </div>
            </div>
            <input type="submit" name="" value="@lang('translator.main-option-submit')" class="btn right">
            {{-- {!!Form::submit(trans('translator.main-option-submit'), ['class' => 'btn right'])!!} --}}
        </div>
      </div>
      </form>
    </div>
  </div>
  </main>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/materialize/materialize.min.js') }}"></script>
    <script>
      $(document).ready(function(){
        $('.collapsible').collapsible();
        $('.sidenav').sidenav({
            closeOnClick: false
        });
        $('.dropdown-trigger').dropdown({
            constrainWidth: false,
            closeOnClick: false,
            hover: true
        });
        $('.dropdown-buscador').dropdown({
            constrainWidth: false,
            closeOnClick: false,
        });
      });
      @if(session('success'))
        M.toast({html: '{!!session('success')!!}', classes: 'rounded'});
      @endif
    </script>

</body>
</html>
