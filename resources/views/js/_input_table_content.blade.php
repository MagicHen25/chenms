<script type="text/javascript">
    layui.use('table', function () {
        var table = layui.table;
        table.render({
            elem: '#demo'
            ,height: 312
            , url: '/get_bdatas/paginate' //
            , page: true //开启分页
            , limit: 10 //开启分页
            , cols: [[ //表头
                {field: 'id', title: 'ID', sort: true, fixed: 'left'}
                // , {field: 'created_at', title: 'created_at', width: 80}
                // , {field: 'updated_at', title: 'updated_at', width: 80, sort: true}
                , {field: 'bill_type', title: '发票类型'}
                , {field: 'bill_code', title: '发票代码'}
                , {field: 'bill_number', title: '发票号码', sort: true}
                , {field: 'bill_date', title: '开票日期', sort: true}
                , {field: 'bill_price', title: '价税合计'}
                , {field: 'bill_check_number', title: '校验码后6位', sort: true}
                , {field: 'bill_owner', title: '员工姓名', sort: true}
            ]]
        });
    });
</script>
