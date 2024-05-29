<section id="cabecera">
    <a href="{{ url('/') }}"><img src="{{ asset('images\iconWhite.png') }}" alt="Trace Better ICON"></a>
    <div>
        <a href="{{ route('perfil') }}" class="enlaceHeader">Perfíl de <b>@auth{{Auth::user()->nickname}}@endauth</b><img src="{{asset('images\icons\perfil.png') }}" alt="icono login" class="iconos"></a>
    </div>
</section>