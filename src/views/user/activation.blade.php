@extends('themes/default::layouts.fixed-box')

@section('box-header')
    <div class="title">{{ trans('admin::user.activation_title') }}</div>
@show

@section('box-content')
    {{ Former::open()->class('separate-sections') }}
        <div class="input-group addon-left">
            <span class="input-group-addon" href="#"><i class="fa fa-user"></i></span>
            {{ Form::text('login','',array('placeholder'=>trans('admin::user.login_label_login'))) }}
        </div>
        <div>
            <btn id="submit" class="btn btn-blue btn-block">{{ trans('admin::user.activation_btn_send') }} <i class="fa fa-signin"></i></btn>
        </div>
    {{ Former::close() }}
@show

@section('javascript')
    @parent
    <script>
        $(document).ready(function(){
            $('#submit').on('click',function(){
                $('form').submit();
            });
        });
    </script>
@stop