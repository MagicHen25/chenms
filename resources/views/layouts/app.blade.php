<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'LONG') - 票据报销系统</title>
    {{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="https://www.layuicdn.com/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/css/global.css" />
</head>
<body background="../img/bg.png">
@include('layouts._header')

<div class="container">
    @yield('content')

</div>
{{--@include('layouts._footer')--}}

<script src="https://www.layuicdn.com/layui/layui.js"></script>
<!--您的Layui代码start-->
<script type="text/javascript">
    //JavaScript代码区域
    layui.use('element', function () {
        var element = layui.element;
    });
    layui.use('form', function () {
        var form = layui.form;
        form.render();
    });
    layui.use('laydate', function () {
        var laydate = layui.laydate;

        //执行一个laydate实例
        laydate.render({
            elem: '#test1' //指定元素
        });
    });
</script>
</body>
</html>
