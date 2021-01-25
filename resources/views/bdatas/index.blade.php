@extends('layouts.nobg')
@section('content')
    <div class="layui-container">
        <div class="layui-row" style="height: 58px;text-align: right;margin-top: 10px">
            <a href="{{route('bdatas.index')}}?orderFlag=true" class="layui-btn">发票号码顺序排列</a>
            <a href="{{route('bdatas_down')}}" class="layui-btn">票据数据表导出</a>
        </div>
        <div class="layui-row">
            @include('bdatas.index_components.index_table')
        </div>
    </div>
@stop
