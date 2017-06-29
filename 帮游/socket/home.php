
<script type="text/javascript" src="jquery-2.0.3.min.js"></script> 

<style type="text/css">

.p1{width:80%;height:auto;margin:20px auto;text-align:left;}

.list{width:80%;height:auto;margin:20px auto;text-align:left;border:1px solid #dcdcdc;}

.list{padding:2px 2px 30px 2px;font-size:12px;}
.top{width:50%;}
.c{width:100%;text-align:left;}
.s{width:100%;text-align:right;}

.c p{background:#fff;width:auto;display:inline;padding:5px;}
.s p{background:green;width:auto;display:inline;padding:5px;}

</style>
<p class="p1">客户端发送消息<input type="input" id="c_content"  />&nbsp;&nbsp;<input type="button" id="btn_client" value="发送"  /></p>

<p class="p1">服务器发送消息<input type="input" id="s_content"  />&nbsp;&nbsp;<input type="button" id="btn_server" value="发送"  /></p>

<div class="list">
<p class="top" style="float:left;">客户端</p><p class="top" style="float:right;text-align:right;">服务器</p>
   <div class="c"><p>你好</p></div>
   
   <div class="s"><p>嗯</p></div>
</div>

<script type="text/javascript">
  
  $(document).ready(function(){
        $.ajax({
				url:'client.php',
				type : "post",
				data:{type:'2'},
				dataType:'json',
				success:function(data){
				    
				},
				error:function(data){
				},
			
			});
			
			$.ajax
			({
				url:'server.php',
				type : "post",
				data:{type:'2'},
				dataType:'json',
				success:function(data){
				    
				},
				error:function(data){
				}
			
			});
	   
	  //客户端	
      $("#btn_client").click(function(){
	  var c_message=$("#c_content").val();
	        $.ajax({
				url:'client.php',
				type : "post",
				data:{ message:c_message,type:'1'},
				dataType:'json',
				success:function(data){
				    
				},
				error:function(data){
				},
			
			});
			
			$.ajax
			({
				url:'server.php',
				type : "post",
				data:{type:'2'},
				dataType:'json',
				success:function(data){
				    
				},
				error:function(data){
				}
			
			});
	  
	  })
  
  })


</script>