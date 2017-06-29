<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <title>html5 图片上传预览</title>
    <style>
	
        #preview {
            width: 300px;
            height: 300px;
            overflow: hidden;
        }
        #preview img {
            width: 100%;
            height: 100%;
        }
    </style>
    <script src="jquery-2.0.3.min.js"></script>
    <script type="text/javascript">
        function preview1(file) {
            var img = new Image(), url = img.src = URL.createObjectURL(file)
            var $img = $(img)
            img.onload = function() {
                URL.revokeObjectURL(url)
                $('#preview').empty().append($img)
            }
        }
        function preview2(file) {
            var reader = new FileReader()
            reader.onload = function(e) {
                var $img = $('<img>').attr("src", e.target.result)
                $('#preview').empty().append($img)
            }
            reader.readAsDataURL(file)
        }
         
        $(function() {
            $('[type=file]').change(function(e) {
                var file = e.target.files[0]
                preview1(file)
            })
        })
		function doUpload() { 
		var formData = new FormData($("form" )[0]);
		console.log($("form"));
		$.ajax({
				type : "post",
				url : "deal.php",
				data : formData,
				async: false,  
          cache: false,  
          contentType: false,  
          processData: false, 
		
				success : function(data) {
					
				},
				error:function(data){
					
				}
			});	
       } 			
    </script>
</head>
<body>
<form enctype="multipart/form-data" id="postForm" action="" method="post">
<input type="text" name="a" value="1" id="a" />
    
	<input type="file" name="imageUpload" class="fileInput"/> 
    
	<input type="button" id="btn_upload" onclick="doUpload()" value="上传" />
    <div id="preview" style="width: 300px;height:300px;border:1px solid gray;"></div>
</form>
</body>
</html>