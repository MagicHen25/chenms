<fieldset class="layui-elem-field layui-field-title" >
    <legend>票据信息录入</legend>
</fieldset>
<div class="layui-form">
    <form method="POST" action="{{route('bdatas.store')}}">
        @csrf
        {{--发票类型--}}
        <div class="layui-form-item">
            <label class="layui-form-label">发票类型</label>
            <div class="layui-input-block">
                <input type="radio" name="bill_type" value="04" title="增值税普通发票">
                <input type="radio" name="bill_type" value="10" title="增值税电子普通发票" checked="">
                <input type="radio" name="bill_type" value="11" title="增值税普通发票（卷票）">
            </div>
        </div>
        <div class="layui-form-item" style="width: 500px;">
            <label class="layui-form-label">发票代码</label>
            <div class="layui-input-block">
                <input type="text" name="bill_code" required="" lay-verify="required"
                       placeholder="请输入8位发票代码"
                       autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item" style="width: 500px;">
            <label class="layui-form-label">发票号码</label>
            <div class="layui-input-block">
                <input type="text" name="bill_number" required="" lay-verify="required"
                       placeholder="请输入12位发票代码"
                       autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item" style="width: 250px;">
            <label class="layui-form-label">开票日期</label>
            <div class="layui-input-block">
                <input type="text" autocomplete="off" name="bill_date" class="layui-input" id="test1"
                       placeholder="YYYY-MM-DD">
            </div>
        </div>
        <div class="layui-form-item" style="width: 250px;">
            <label class="layui-form-label">价税合计</label>
            <div class="layui-input-block">
                <input type="text" name="bill_price" required="" lay-verify="required"
                       placeholder="请输入发票金额"
                       autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item" style="width: 250px;">
            <label class="layui-form-label">校验码后6位</label>
            <div class="layui-input-block">
                <input type="text" name="bill_check_number" required="" lay-verify="required"
                       placeholder="请输入校验码后6位"
                       autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item" style="width: 250px;">
            <label class="layui-form-label">员工姓名</label>
            <div class="layui-input-block">
                <input type="text" name="bill_owner" required="" lay-verify="required"
                       placeholder="请输入您的姓名"
                       autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>
</div>
