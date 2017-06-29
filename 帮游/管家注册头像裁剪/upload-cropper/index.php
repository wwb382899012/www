<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传头像</title>

  <link rel="stylesheet" href="cropper/css/bootstrap.min.css">
  <link rel="stylesheet" href="cropper/css/cropper.css">
  <link rel="stylesheet" href="cropper/main.css">
  
   <script src="jquery-2.0.3.min.js"></script>
<link href="uploadify/uploadify.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="uploadify/jquery.uploadify-3.1.js"></script>
 <script src="cropper/js/bootstrap.min.js"></script>
  <script src="cropper/js/cropper.js"></script>
<style type="text/css">
body{font-family: Arial, '宋体';margin:0 auto;padding:0; font-size:12px;color:#000;}
.content { width:1200px; margin:0px auto; }
.section { background-color:#fff; padding:20px;}
.content .row{ width:661px; overflow:hidden; margin-top:20px;line-height:30px;padding-left:94px;}
.content .row span.label{float:left;position:relative;line-height:30px;margin-left:-94px;width:84px;text-align:right; color:#5b5b5b;}
.btn_submit {background:url(images/submit.gif) no-repeat;width:70px;height:29px;border:0;}
</style>
</head>
<body>


<div class="content">
	
	<div class="section">
		<div class="row" id="avatar_msg" style="font-weight:700;color:#f00;display:none;">上传成功！</div>
		<div class="row" id="now_img" style="display:none;">
			<label><span class="label">当前头像：</span></label>
			<img id="avatar" src="images/default.gif" />
		</div>
		<div style="width:100%;height:auto;margin-top:20px;float:left;">
			<p style="width:100px;float:left;">上传头像</p>
			<input type="text" id="avatarUpload" value="" />
				<div style="float:left;width:100%;margin-left:100px;margin-top:10px;">
					<a href="javascript:$('#avatarUpload').uploadify('upload','*')">开始上传</a> |
					<a href="javascript:$('#avatarUpload').uploadify('cancel', '*')">取消上传</a>
				</div>
		</div>
		
		  
	</div>
</div>
<div class="container" style="display:none;">
    <div class="row">
      <div class="col-md-9">
        <!-- <h3 class="page-header">Demo:</h3> -->
        <div class="img-container">
          <img id="image" src="" alt="Picture">
        </div>
      </div>
      <div class="col-md-3">
        <!-- <h3 class="page-header">Preview:</h3> -->
        <div class="docs-preview clearfix">
          <div class="img-preview preview-lg"></div>
          <div class="img-preview preview-md"></div>
          <div class="img-preview preview-sm"></div>
          <div class="img-preview preview-xs"></div>
        </div>

        <!-- <h3 class="page-header">Data:</h3> -->
        <div class="docs-data">
          <div class="input-group input-group-sm">
            
			<input type="hidden" id="img" name="img" />
            <input type="hidden" class="form-control" id="dataX" placeholder="x">
            
          </div>
          <div class="input-group input-group-sm">
           
            <input type="hidden" class="form-control" id="dataY" placeholder="y">
           
          </div>
          <div class="input-group input-group-sm">
           
            <input type="hidden" class="form-control" id="dataWidth" placeholder="width">
           
          </div>
          <div class="input-group input-group-sm">
           
            <input type="hidden" class="form-control" id="dataHeight" placeholder="height">
           
          </div>
         
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9 docs-buttons">
        <!-- <h3 class="page-header">Toolbar:</h3> -->
        
		<div class="docs-toggles">
     <div class="btn-group btn-group-crop">
          <label class="btn btn-primary active">
            <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
            <span class="docs-tooltip" data-toggle="tooltip" id="aspect_one" title="aspectRatio: 16 / 9">
              16:9
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
            <span class="docs-tooltip" data-toggle="tooltip" id="aspect_two" title="aspectRatio: 4 / 3">
              4:3
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
              1:1
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
              2:3
            </span>
          </label>
          <label class="btn btn-primary">
            <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
            <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
              自由比例
            </span>
          </label>
        </div>
      </div>
     
       

        

        <div class="btn-group btn-group-crop">
          <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
              预览
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
              预览(160&times;90)
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
              预览(320&times;180)
            </span>
          </button>
        </div>
		

        <!-- Show the cropped image in modal -->
        <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
              </div>
              <div class="modal-body"></div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				<button type="button" id="btn_save" class="btn btn-primary" data-dismiss="modal">使用头像</button>
                <a class="btn btn-primary disabled" style="display:none;" id="download" href="javascript:void(0);" download="cropped.png">保存</a>
              </div>
            </div>
          </div>
        </div><!-- /.modal -->

        
       
      </div><!-- /.docs-buttons -->

    </div>
  </div>


<script type="text/javascript">
var mypic="";
$(function() {
	//首页轮播图1
	$("#avatarUpload").uploadify({
		'auto'				: false,
		'multi'				: false,
		'uploadLimit'		: 2,
		'formData'			: {'uid':'18'},
		'buttonText'		: '请选择图片',
		'height'			: 28,
		'width'				: 120,
		'removeCompleted'	: false,
		'swf'				: 'uploadify/uploadify.swf',
		'uploader'			: 'upload.php',
		'fileTypeExts'		: '*.gif; *.jpg; *.jpeg; *.png;',
		'fileSizeLimit'		: '10240KB',
		'onUploadSuccess' : function(file, data, response) {
			var msg = $.parseJSON(data);
			if( msg.result_code == 1 ){
				$(".container").show();
				$("#image").attr("src",msg.result_des);
				$("#img").val( msg.result_des );
				mypic=msg.result_des;
				var $image = $('.img-container > img');
				  $image.cropper({
					movable: false,
					zoomable: false,
					rotatable: false,
					scalable: false
				  });
                 $image.cropper('replace',mypic);
     
				/*$("#img").val( msg.result_des );
				$("#target").attr("src",msg.result_des);
				$(".preview").attr("src",msg.result_des);
				$('#target').Jcrop({
					minSize: [50,50],
					setSelect: [0,0,200,200],
					onChange: updatePreview,
					onSelect: updatePreview,
					onSelect: updateCoords,
					aspectRatio: 1
				},
				function(){
					// Use the API to get the real image size
					var bounds = this.getBounds();
					boundx = bounds[0];
					boundy = bounds[1];
					// Store the API in the jcrop_api variable
					jcrop_api = this;
				});
				$(".imgchoose").show(1000);
				$("#avatar_submit").show(1000);*/
			} else {
				alert('上传失败');
			}
		},
		'onClearQueue' : function(queueItemCount) {
            alert( $('#img1') );
        },
		'onCancel' : function(file) {
            alert('The file ' + file.name + ' was cancelled.');
        }
    });
    /*
	$("#aspect_two").click(function(){
		var $image = $('.img-container > img');
				  $image.cropper({
					aspectRatio: 4 / 3
					movable: false,
					zoomable: false,
					rotatable: false,
					scalable: false
				  });
        $image.cropper('replace',mypic);
		
	})*/
	
	
 
	
	$("#btn_save").click(function(){
		var img = $("#img").val();
		var x = $("#dataX").val();
		var y = $("#dataY").val();
		var w = $("#dataWidth").val();
		var h = $("#dataHeight").val();
		if(w){
			$.ajax({
				type: "POST",
				url: "resize.php",
				data: {"img":img,"x":x,"y":y,"w":w,"h":h},
				dataType: "json",
				success: function(msg){
					if( msg.result_code == 1 ){
						$('html,body').animate({scrollTop:$('#avatar').offset().top-150},1000,'swing',function(){
							$('#avatar_msg').show();
							$("#now_img").show();
							$('#avatar').attr('src',msg.result_des.small);
						});
					} else {
						alert("失败，傻逼铁道部");
					}
				}
			});
		}
	});
});
</script>

 
  <script type="text/javascript">
  $(function () {

  'use strict';

  var console = window.console || { log: function () {} };
  var $image = $('#image');
  var $download = $('#download');
  var $dataX = $('#dataX');
  var $dataY = $('#dataY');
  var $dataHeight = $('#dataHeight');
  var $dataWidth = $('#dataWidth');
  var $dataRotate = $('#dataRotate');
  var $dataScaleX = $('#dataScaleX');
  var $dataScaleY = $('#dataScaleY');
  var options = {
        aspectRatio: 16 / 9,
        preview: '.img-preview',
        crop: function (e) {
          $dataX.val(Math.round(e.x));
          $dataY.val(Math.round(e.y));
          $dataHeight.val(Math.round(e.height));
          $dataWidth.val(Math.round(e.width));
          $dataRotate.val(e.rotate);
          $dataScaleX.val(e.scaleX);
          $dataScaleY.val(e.scaleY);
        }
      };


  // Tooltip
  $('[data-toggle="tooltip"]').tooltip();


  // Cropper
  $image.on({
    'build.cropper': function (e) {
      console.log(e.type);
    },
    'built.cropper': function (e) {
      console.log(e.type);
    },
    'cropstart.cropper': function (e) {
      console.log(e.type, e.action);
    },
    'cropmove.cropper': function (e) {
      console.log(e.type, e.action);
    },
    'cropend.cropper': function (e) {
      console.log(e.type, e.action);
    },
    'crop.cropper': function (e) {
      console.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);
    },
    'zoom.cropper': function (e) {
      console.log(e.type, e.ratio);
    }
  }).cropper(options);


  // Buttons
  if (!$.isFunction(document.createElement('canvas').getContext)) {
    $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
  }

  if (typeof document.createElement('cropper').style.transition === 'undefined') {
    $('button[data-method="rotate"]').prop('disabled', true);
    $('button[data-method="scale"]').prop('disabled', true);
  }


  // Download
  if (typeof $download[0].download === 'undefined') {
   // $download.addClass('disabled');
  }


  // Options
  $('.docs-toggles').on('change', 'input', function () {
    var $this = $(this);
    var name = $this.attr('name');
    var type = $this.prop('type');
    var cropBoxData;
    var canvasData;

    if (!$image.data('cropper')) {
      return;
    }

    if (type === 'checkbox') {
      options[name] = $this.prop('checked');
      cropBoxData = $image.cropper('getCropBoxData');
      canvasData = $image.cropper('getCanvasData');

      options.built = function () {
        $image.cropper('setCropBoxData', cropBoxData);
        $image.cropper('setCanvasData', canvasData);
      };
    } else if (type === 'radio') {
	
      options[name] = $this.val();
    }

    $image.cropper('destroy').cropper(options);$image.cropper('replace',mypic);
  });


  // Methods
  $('.docs-buttons').on('click', '[data-method]', function () {
    var $this = $(this);
    var data = $this.data();
    var $target;
    var result;

    if ($this.prop('disabled') || $this.hasClass('disabled')) {
      return;
    }

    if ($image.data('cropper') && data.method) {
      data = $.extend({}, data); // Clone a new one

      if (typeof data.target !== 'undefined') {
        $target = $(data.target);

        if (typeof data.option === 'undefined') {
          try {
            data.option = JSON.parse($target.val());
          } catch (e) {
            console.log(e.message);
          }
        }
      }

      result = $image.cropper(data.method, data.option, data.secondOption);

      switch (data.method) {
        case 'scaleX':
        case 'scaleY':
          $(this).data('option', -data.option);
          break;

        case 'getCroppedCanvas':
          if (result) {

            // Bootstrap's Modal
            $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

            if (!$download.hasClass('disabled')) {
              $download.attr('href', result.toDataURL());
            }
          }

          break;
      }

      if ($.isPlainObject(result) && $target) {
        try {
          $target.val(JSON.stringify(result));
        } catch (e) {
          console.log(e.message);
        }
      }

    }
  });


  // Keyboard
  $(document.body).on('keydown', function (e) {

    if (!$image.data('cropper') || this.scrollTop > 300) {
      return;
    }

    switch (e.which) {
      case 37:
        e.preventDefault();
        $image.cropper('move', -1, 0);
        break;

      case 38:
        e.preventDefault();
        $image.cropper('move', 0, -1);
        break;

      case 39:
        e.preventDefault();
        $image.cropper('move', 1, 0);
        break;

      case 40:
        e.preventDefault();
        $image.cropper('move', 0, 1);
        break;
    }

  });


  // Import image
  var $inputImage = $('#inputImage');
  var URL = window.URL || window.webkitURL;
  var blobURL;

  if (URL) {
    $inputImage.change(function () {
      var files = this.files;
      var file;

      if (!$image.data('cropper')) {
        return;
      }

      if (files && files.length) {
        file = files[0];

        if (/^image\/\w+$/.test(file.type)) {
          blobURL = URL.createObjectURL(file);
          $image.one('built.cropper', function () {

            // Revoke when load complete
            URL.revokeObjectURL(blobURL);
          }).cropper('reset').cropper('replace', blobURL);
          $inputImage.val('');
        } else {
          window.alert('Please choose an image file.');
        }
      }
    });
  } else {
    $inputImage.prop('disabled', true).parent().addClass('disabled');
  }

});

  </script>
  <!-- <script src="cropper/main.js"></script> -->
</body>
</html>