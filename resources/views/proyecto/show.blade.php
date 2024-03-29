@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? __('Show') . " " . __('Proyecto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('proyectos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombreproyecto:</strong>
                            {{ $proyecto->NombreProyecto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fuentefondos:</strong>
                            {{ $proyecto->fuenteFondos }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Montoplanificado:</strong>
                            {{ $proyecto->MontoPlanificado }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Montopatrocinado:</strong>
                            {{ $proyecto->MontoPatrocinado }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Montofondospropios:</strong>
                            {{ $proyecto->MontoFondosPropios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
