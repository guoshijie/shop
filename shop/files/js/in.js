$(document).ready(function(){
	 $("#select2").change( function() {
		var id = $("#select2").find("option:selected").attr("id");

	
		if(id == 1){
			$.get('pubgoods.php', null, function(data){
				$("#two").empty();
				$("#two").append("<select id='type3' name='type3'><option value='ͼ����ǲ'>ͼ����ǲ</opton><option value='�̲�����'>�̲�����</opton><option value='��ϰ����'>��ϰ����</opton><option value='��Ϸװ��'>��Ϸװ��</opton><option value='����'>����</opton></select>");
			});
		}else if(id == 2){
			$.get('pubgoods.php', null, function(data){
				$("#two").empty();
				$("#two").append("<select id='type3' name='type3'><option value='ѧϰ��Ʒ'>ѧϰ��Ʒ</opton><option value='������Ʒ'>������Ʒ</opton><option value='�˶�װ��'>�˶�װ��</opton><option value='��������'>��������</opton><option value='��������'>��������</opton><option value='����'>����</opton></select>");
			});	
		}else if(id == 3){
		    $.get('pubgoods.php', null, function(data){
				$("#two").empty();
				$("#two").append("<select id='type3' name='type3'><option value='�������'>�������</opton><option value='U��'>U��</opton><option value='MP3 MP4'>MP3 MP4</opton><option value='�ƶ�Ӳ��'>�ƶ�Ӳ��</opton><option value='���ܳ�'>���ܳ�</opton><option value='������'>������</opton><option value='����'>����</opton></select>");
			});	
		}else if(id == 4){
			$.get('pubgoods.php', null, function(data){
				$("#two").empty();
				$("#two").append("<select id='type3' name='type3'><option value='��������'>��������</opton><option value='ë������'>ë������</opton><option value='���'>���</opton><option value='̨��'>̨��</opton><option value='����Ʒ'>����Ʒ</opton><option value='����'>����</opton></select>");
			});	
		}else if(id == 5){
			$.get('pubgoods.php', null, function(data){
				$("#two").empty();
				$("#two").append("<select id='type3' name='type3'><option value='���'>���</opton><option value='��ЬŮЬ'>��ЬŮЬ</opton><option value='����'>����</opton><option value='�·�'>�·�</opton><option value='����ȹ'>����ȹ</opton><option value='��Ʒ'>��Ʒ</opton><option value='��ױƷ'>��ױƷ</opton><option value='����'>����</opton></select>");
			});	
		}else if(id == 6){
			$.get('pubgoods.php', null, function(data){
				$("#two").empty();
				$("#two").append("<select id='type3' name='type3'><option value='С��'>С��</opton><option value='ƻ��'>ƻ��</opton><option value='����'>����</opton><option value='HTC'>HTC</opton><option value='����'>����</opton><option value='����'>����</opton></select>");
			});	
		}
	 });  
});