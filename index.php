<html>
<head>
<title>Nahravac</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
<div class="col-md-12">
<div class="content">
 <div class="col-lg-12">
<div class="panel" >
    <div class="image_upload_div">
                <form action="upload.php" class="dropzone">
                    <div class="dz-message">
                        Sem nahrajte soubory, nebo kliknete pro nahrani<br>
                    </div>
                    
                </form>
                <button id="startUpload">Upload</button>
            </div>
    </div></div></div>
</div>
 
<script>
Dropzone.autoDiscover = false;
 
$(function() {
    var myDropzone = new Dropzone(".dropzone", {
        url: "upload.php",
        paramName: "file",
        maxFilesize: 2,
        maxFiles: 10,
        acceptedFiles: "image/*,application/pdf",
        autoProcessQueue: false
    });
    
    $('#startUpload').click(function(){           
        myDropzone.processQueue();
    });
});
</script>
</div>
</body>
</html>
 