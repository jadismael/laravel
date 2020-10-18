@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('PaymentInformation') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('registerPaymentInformation') }}">
                            @csrf
                            @foreach ($paymentFields as $field)
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{$field}}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has($field) ? ' is-invalid' : '' }}" name="{{$field}}" value="{{ old($field) }}" required autofocus>

                                    @if ($errors->has($field))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first($field) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            @endforeach


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
