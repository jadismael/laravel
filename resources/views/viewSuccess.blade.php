@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Finish Line wohoo') }}</div>

          <h3>success ! {{$paymentDataId}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
