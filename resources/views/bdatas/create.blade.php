@extends('layouts.nobg')
@section('content')
    <div class="layui-container">
        <div class="layui-row" >
            <div class="layui-col-md8" style="padding-right: 20px">
                @include('bdatas.create_components.create_form')
            </div>
            <div class="layui-col-md4" style="padding-left: 15px">
                @include('bdatas.create_components.create_information')
            </div>
        </div>

@endsection
