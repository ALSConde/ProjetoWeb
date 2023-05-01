@include('layout.components.validate')
<div class="row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="name" class="control-label">Nome:</label>
                    <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ isset($user->name) ? $user->name : '' }}" />
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
                    <label for="email" class="control-label">E-mail:</label>
                    <input id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ isset($user->email) ? $user->email : '' }}" />
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
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="password" class="control-label">Senha:</label>
                    <input type="password" id="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" value="" />
                    @error('password')
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
