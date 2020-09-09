@extends('layouts.custom')


@section('content')
<div class="name-heading">
    <div class="row">
        <h2> Press Release </h2>
    </div>
       
</div>
<p class="menu">Ooops! Your browser does not support PDF. Please <a href="/img/home/KorbaPru_Partnership.pdf" download="KorbaPru_Partnership">download</a> instead</p>

<embed class="web"  src="img/home/KorbaPru_Partnership.pdf" width="100%" height="100%" />

<style>
    .menu{
       display:none;
    }
    .web{
        display: block;
    }
    @media only screen and (max-width: 767px) {
    .menu{
       display:block;
    }
    .web{
        display: none;
    }
}

</style>

@endsection

