@include('layout.components.validate')
<div class="row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="name" class="control-label">Nome:</label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ isset($school->name) ? $school->name : '' }}" />
                    @error('name')
                        <span class="invalid-feedback">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="address" class="control-label">Endereço:</label>
                    <input id="address" name="address" class="form-control @error('address') is-invalid @enderror"
                        value="{{ isset($school->address) ? $school->address : '' }}" />
                    @error('address')
                        <span class="invalid-feedback">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="phone" class="control-label">Telefone:</label>
                    <input id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror"
                        value="{{ isset($school->phone) ? $school->phone : '' }}" />
                    @error('phone')
                        <span class="invalid-feedback">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="email" class="control-label">E-mail:</label>
                    <input id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ isset($school->email) ? $school->email : '' }}" />
                    @error('email')
                        <span class="invalid-feedback">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
