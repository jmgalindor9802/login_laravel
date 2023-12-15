@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nuevo link de verificación ha sigo enviado a tu correo') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor verifica tu correo electrónico para encontrar un enlace de verificación.') }}
                    {{ __('Si no recibiste el correo electrónico') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
