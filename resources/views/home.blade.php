@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>


                    {!! Form::open(['url' =>'networks']) !!}

                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-cyan btn-rounded active form-check-label">
                            <input class="form-check-input" type="radio" checked autocomplete="on"> Facebook <i
                                    class="fa fa-diamond ml-2"></i>
                        </label>
                        <label class="btn btn-cyan btn-rounded form-check-label">
                            <input class="form-check-input" type="radio" autocomplete="off"> Twitter <i
                                    class="fa fa-user ml-2"></i>
                        </label>

                        <label class="btn btn-cyan btn-rounded form-check-label">
                            <input class="form-check-input" type="radio" autocomplete="off"> Instagram <i
                                    class="fa fa-code ml-2"></i>
                        </label>

                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                            {!! Form::label('login','Login') !!}
                            {!! Form::text('login', null,['class' => 'form-control']) !!}
                            {!! Form::label('password','Password') !!}
                            {!! Form::password('password',['class' => 'form-control']) !!}
                            {!! Form::submit('Add account', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                        </div>
                        @include('errors.list')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection
