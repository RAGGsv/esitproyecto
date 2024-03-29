<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_proyecto" class="form-label">{{ __('Nombreproyecto') }}</label>
            <input type="text" name="NombreProyecto" class="form-control @error('NombreProyecto') is-invalid @enderror" value="{{ old('NombreProyecto', $proyecto?->NombreProyecto) }}" id="nombre_proyecto" placeholder="Nombreproyecto">
            {!! $errors->first('NombreProyecto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fuente_fondos" class="form-label">{{ __('Fuentefondos') }}</label>
            <input type="text" name="fuenteFondos" class="form-control @error('fuenteFondos') is-invalid @enderror" value="{{ old('fuenteFondos', $proyecto?->fuenteFondos) }}" id="fuente_fondos" placeholder="Fuentefondos">
            {!! $errors->first('fuenteFondos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="monto_planificado" class="form-label">{{ __('Montoplanificado') }}</label>
            <input type="text" name="MontoPlanificado" class="form-control @error('MontoPlanificado') is-invalid @enderror" value="{{ old('MontoPlanificado', $proyecto?->MontoPlanificado) }}" id="monto_planificado" placeholder="Montoplanificado">
            {!! $errors->first('MontoPlanificado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="monto_patrocinado" class="form-label">{{ __('Montopatrocinado') }}</label>
            <input type="text" name="MontoPatrocinado" class="form-control @error('MontoPatrocinado') is-invalid @enderror" value="{{ old('MontoPatrocinado', $proyecto?->MontoPatrocinado) }}" id="monto_patrocinado" placeholder="Montopatrocinado">
            {!! $errors->first('MontoPatrocinado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="monto_fondos_propios" class="form-label">{{ __('Montofondospropios') }}</label>
            <input type="text" name="MontoFondosPropios" class="form-control @error('MontoFondosPropios') is-invalid @enderror" value="{{ old('MontoFondosPropios', $proyecto?->MontoFondosPropios) }}" id="monto_fondos_propios" placeholder="Montofondospropios">
            {!! $errors->first('MontoFondosPropios', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>