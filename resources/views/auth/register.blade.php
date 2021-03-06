@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!-- ADD DATE OF BIRTH COLUMN -->
                        <div class="form-group row">
                            <label for="bday" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                           <label for="phone_number" class="col-md-4 control-label">Phone Number</label>
    
                            <div class="col-md-6">
                              <input id="phone_number" type="tel" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autofocus
                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                placeholder="012-345-6789">
    
                            @if ($errors->has('phone_number'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('phone_number') }}</strong>
                              </span>
                            @endif
                              </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                         <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                           <label for="address" class="col-md-4 control-label">Address</label>
    
                            <div class="col-md-6">
                              <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>
    
                            @if ($errors->has('phone_number'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('address') }}</strong>
                              </span>
                            @endif
                              </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('profile_image') ? ' has-error' : '' }}">
                           <label for="profile_image" class="col-md-4 control-label">Profile Image</label>
    
                            <div class="col-md-6">
                              <input id="profile_image" type="file" class="form-control" name="profile_image" value="{{ old('profile_image') }}" required autofocus
                              accept="image/png, image/jpeg, iamge/jpg">
    
                            @if ($errors->has('phone_number'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('profile_image') }}</strong>
                              </span>
                            @endif
                              </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
