@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifique su email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Hemos enviado un link de verificación 
                        </div>
                    @endif

                    Verifique el link que le hemos enviado a su correo
                    {{ __('Si no ha recivido un link') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Reenviar</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
