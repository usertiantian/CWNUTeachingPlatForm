{{--大家加油！--}}
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>西华师范大学教学管理系统</title>
  <link rel="stylesheet" href="/layui/css/layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">CWNU教学管理系统</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="">考勤／互动</a></li>
      <li class="layui-nav-item"><a href="">调查反馈</a></li>
      <li class="layui-nav-item"><a href="">阅卷系统</a></li>
      <li class="layui-nav-item">
        <a href="javascript:;">系统设置</a>
        <dl class="layui-nav-child">
          <dd><a href="">消息管理</a></dd>
          <dd><a href="">授权管理</a></dd>
        </dl>
      </li>
    </ul>
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img class="layui-nav-img">
          学生姓名
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">注销</a></li>
    </ul>
  </div>
  
  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;">课程管理</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">选课管理</a></dd>
            <dd><a href="javascript:;">开课管理</a></dd>
            <dd><a href="javascript:;">选课统计</a></dd>
            <dd><a href="javascript:;">成绩查询</a></dd>
            <dd><a href="javascript:;">成绩统计</a></dd>
            <dd><a href="javascript:;">成绩录入</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">培养方案</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">培养方案列表</a></dd>
            <dd><a href="javascript:;">已选培养方案</a></dd>
            <dd><a href="javascript:;">创建培养方案</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item"><a href="">学期设置</a></li>
        <li class="layui-nav-item"><a href="">教学评估</a></li>
        <li class="layui-nav-item"><a href="">实验管理</a></li>
        <li class="layui-nav-item"><a href="">专业调整</a></li>
        <li class="layui-nav-item"><a href="">毕业管理</a></li>
      </ul>
    </div>
  </div>
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 30px;font-size: 40px;">相 关 功 能 模 块</div>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
    西华师范大学教学管理系统
  </div>
</div>
<script src="/layui/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
});
</script>
</body>
</html>