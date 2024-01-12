@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-light">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Anda Berhasil Login!') }}

                    <a href="/menu" class="wbutton-outline hpoppins" style="font-weight: bold;" role="button">Kembali Ke Menu</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
