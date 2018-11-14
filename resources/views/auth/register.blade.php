@extends('layouts.app')

@section('content')
<script type="text/javascript">
$(function () {
    //Date picker
    $('.tanggal').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });

    $('.tanggalcc').datepicker({
      autoclose: true,
      format: 'mm/yy',
      viewMode: "months",
      minViewMode: "months"
    });
  });
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" data-role="tagsinput" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dateofbirth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dateofbirth" type="text" class="form-control{{ $errors->has('dateofbirth') ? ' is-invalid' : '' }} tanggal" name="dateofbirth" value="{{ old('dateofbirth') }}" required>

                                @if ($errors->has('dateofbirth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dateofbirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="membership" class="col-md-4 col-form-label text-md-right">{{ __('Membership') }}</label>

                            <div class="col-md-6">
                              <select class="form-control{{ $errors->has('membership') ? ' is-invalid' : '' }}" style="height: 30px" id="membership" name="membership" required>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                                <option value="Platinum">Platinum</option>
                                <option value="Black">Black</option>
                                <option value="VIP">VIP</option>
                                <option value="VVIP">VVIP</option>
                              </select>

                                @if ($errors->has('membership'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('membership') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numbercard" class="col-md-4 col-form-label text-md-right">{{ __('Credit Card Number') }}</label>

                            <div class="col-md-6">
                                <input id="numbercard" type="text" class="form-control{{ $errors->has('numbercard') ? ' is-invalid' : '' }}" name="numbercard" value="{{ old('numbercard') }}" required>

                                @if ($errors->has('numbercard'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numbercard') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="typecard" class="col-md-4 col-form-label text-md-right">{{ __('Type Credit Card') }}</label>

                            <div class="col-md-6">
                              <select class="form-control{{ $errors->has('typecard') ? ' is-invalid' : '' }}" style="height: 30px" id="typecard" name="typecard" required>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                                <option value="Platinum">Platinum</option>
                                <option value="Black">Black</option>
                                <option value="VIP">VIP</option>
                                <option value="VVIP">VVIP</option>
                              </select>

                                @if ($errors->has('typecard'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('typecard') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="expdatecard" class="col-md-4 col-form-label text-md-right">{{ __('Expired Date Credit Card') }}</label>

                            <div class="col-md-6">
                                <input id="expdatecard" type="text" class="form-control{{ $errors->has('expdatecard') ? ' is-invalid' : '' }} tanggalcc" name="expdatecard" value="{{ old('expdatecard') }}" required>

                                @if ($errors->has('expdatecard'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('expdatecard') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row checkbox">
                            <label for="expdatecard" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input type="checkbox" id="terms_agree" name="terms_agree" required>
                                <label for="terms_agree">Saya setuju dengan <a href="#">Terms and Conditions</a></label>

                                @if ($errors->has('expdatecard'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('expdatecard') }}</strong>
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
