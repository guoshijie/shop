$(document).ready(function(){
	 $("#select2").change( function() {
		var id = $("#select2").find("option:selected").attr("id");

	
		if(id == 1){
			$.get('pubgoods.php', null, function(data){
				$("#two").empty();
				$("#two").append("<select id='type3' name='type3'><option value='图书消遣'>图书消遣</opton><option value='教材用书'>教材用书</opton><option value='复习资料'>复习资料</opton><option value='游戏装备'>游戏装备</opton><option value='其他'>其他</opton></select>");
			});
		}else if(id == 2){
			$.get('pubgoods.php', null, function(data){
				$("#two").empty();
				$("#two").append("<select id='type3' name='type3'><option value='学习用品'>学习用品</opton><option value='球类用品'>球类用品</opton><option value='运动装备'>运动装备</opton><option value='各种球拍'>各种球拍</opton><option value='健身器材'>健身器材</opton><option value='其他'>其他</opton></select>");
			});	
		}else if(id == 3){
		    $.get('pubgoods.php', null, function(data){
				$("#two").empty();
				$("#two").append("<select id='type3' name='type3'><option value='数码相机'>数码相机</opton><option value='U盘'>U盘</opton><option value='MP3 MP4'>MP3 MP4</opton><option value='移动硬盘'>移动硬盘</opton><option value='万能充'>万能充</opton><option value='读卡器'>读卡器</opton><option value='其他'>其他</opton></select>");
			});	
		}else if(id == 4){
			$.get('pubgoods.php', null, function(data){
				$("#two").empty();
				$("#two").append("<select id='type3' name='type3'><option value='电脑桌椅'>电脑桌椅</opton><option value='毛绒娃娃'>毛绒娃娃</opton><option value='玩具'>玩具</opton><option value='台灯'>台灯</opton><option value='日用品'>日用品</opton><option value='其他'>其他</opton></select>");
			});	
		}else if(id == 5){
			$.get('pubgoods.php', null, function(data){
				$("#two").empty();
				$("#two").append("<select id='type3' name='type3'><option value='箱包'>箱包</opton><option value='男鞋女鞋'>男鞋女鞋</opton><option value='裤子'>裤子</opton><option value='衣服'>衣服</opton><option value='连衣裙'>连衣裙</opton><option value='饰品'>饰品</opton><option value='化妆品'>化妆品</opton><option value='其他'>其他</opton></select>");
			});	
		}else if(id == 6){
			$.get('pubgoods.php', null, function(data){
				$("#two").empty();
				$("#two").append("<select id='type3' name='type3'><option value='小米'>小米</opton><option value='苹果'>苹果</opton><option value='三星'>三星</opton><option value='HTC'>HTC</opton><option value='索尼'>索尼</opton><option value='其他'>其他</opton></select>");
			});	
		}
	 });  
});