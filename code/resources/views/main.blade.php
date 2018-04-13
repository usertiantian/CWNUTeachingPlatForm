<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>西华师范大学教学管理系统</title>
  <link rel="stylesheet" href="/layui/css/layui.css">
  <link rel="stylesheet" type="text/css" href="/css/global.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo" style="font-size: 19px;color: #dedede;">教务管理系统</div> 
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
        <li class="layui-nav-item"><a href="javascript:loadView('HOME');">主页</a></li>
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;">课程管理</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:loadView('XKGL');">选课管理</a></dd>
            <dd><a href="javascript:loadView('KKGL');">开课管理</a></dd>
            <dd><a href="javascript:loadView('XKTJ');">选课统计</a></dd>
            <dd><a href="javascript:loadView('CJCX');">成绩查询</a></dd>
            <dd><a href="javascript:loadView('CJTJ');">成绩统计</a></dd>
            <dd><a href="javascript:loadView('CJLR');">成绩录入</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">培养方案</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:loadView('PYFA');">培养方案列表</a></dd>
            <dd><a href="javascript:loadView('YXFA');">已选培养方案</a></dd>
            <dd><a href="javascript:loadView('CJFA');">创建培养方案</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item"><a href="javascript:loadView('XQSZ');">学期设置</a></li>
        <li class="layui-nav-item"><a href="javascript:loadView('JXPG');">教学评估</a></li>
        <li class="layui-nav-item"><a href="javascript:loadView('SYGL');">实验管理</a></li>
        <li class="layui-nav-item"><a href="javascript:loadView('ZYTZ');">专业调整</a></li>
        <li class="layui-nav-item"><a href="javascript:loadView('BYGL');">毕业管理</a></li>
      </ul>
    </div>
  </div>
  
  <div class="layui-body" id="contentView">
    <!-- 内容主体区域 -->
    <div style="padding: 30px;font-size: 40px;">相 关 功 能 模 块</div>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
    西华师范大学教学管理系统
  </div>
</div>
<script src="/layui/layui.js"></script>
<script src="/js/jquery-3.3.1.min.js"></script>
<script>
/*
  说明
  在点击左侧的按钮后通过ajax加载相应的视图
  
 【伪代码如下】
  js部分：
  $("学期设置").click(funtion(
    response = ajax("/XQSZ");
    $("#contentView").html(response);
  ))
  路由部分：
  Route::get("/XQSZ","XQSZCOntroller@f");
  控制器部分：
  class XQSZController{
    public function f(){
      return view("XQSZ");
    }
  }
  视图部分：
  自己写相应的view，应该是独立的blade.php文件
  注意只需要写内容DIV的内容，不是整个html页面。
*/
layui.use('element', function(){
  var element = layui.element;
});

function loadView(viewString){
  $("#contentView").html("<i class='layui-icon layui-anim layui-anim-rotate layui-anim-loop' style='font-size:70px;margin-left:48%;margin-top:300px;'>&#xe63d;</i>");
  $.get("/" + viewString,function(data,status){
    if(status == "success")
      $("#contentView").html(data);
    else
      alert("加载失败！");
  });
}


</script>
</body>
</html>