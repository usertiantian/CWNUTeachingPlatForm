<div class="layui-row" style="height: 150px;">
	<div class="layui-col-xs6 layui-col-sm6 layui-col-md6" style="">
		<div class="layui-row">
			<div class="layui-col-xs3 layui-col-sm3 layui-col-md3">
				<img src="img/logo.png" style="width: 150px;margin-left: 20px;margin-top:10px;float: left;">
			</div>
			<div class="layui-col-xs7 layui-col-sm7 layui-col-md7">
				<p style="float:left;font-size: 26px;margin:20px 0px 0px 20px;">西华师范大学教学管理系统</p>
				<p style="font-size: 14px;color: #777;margin:0px 0px 25px 20px;float: left;clear:left;">China West Normal University</p>
				<p style="font-size: 22px;float: left;clear: left;margin-left: 20px;">部门:</p>
				<a href="/ad" style="font-size: 22px;float: left;margin-left: 20px;color: #68e">
					计算机学院
				</a>
			</div>
		</div>
	</div>
	<div class="layui-col-xs4 layui-col-sm4 layui-col-md4">
		<div id="timeBlock" style="float: right;font-size: 15px;margin-top: 30px;color: #777;"></div>
	</div>
</div>
<hr>
<div class="layui-row" style="height: 500px;">
	<div class="layui-col-xs6 layui-col-sm6 layui-col-md6" style="height: 500px;padding: 10px;">
		<p style="font-size: 24px;">新闻</p>
	</div>
	<div class="layui-col-xs6 layui-col-sm6 layui-col-md6" style="height:500px;padding: 10px;">
		<p style="font-size: 24px;">系统公告</p>
	</div>
	
</div>

<script>	
	var nowTime ;
        function play(){
        var time = new Date();
        nowTime = time.getFullYear()+"年"+time.getMonth()+"月"+time.getDate()+"日"+time.getHours()+"时"+time.getMinutes()+"分"+time.getSeconds()+"秒";
        document.getElementById("timeBlock").innerHTML = nowTime;
        }
    setInterval(play,1000);
</script>