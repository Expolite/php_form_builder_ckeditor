

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form builder</title>

</head>
<body style="background: grey;">




    <textarea name="editor" id="editor"></textarea>




    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: 'ckeditor/ck_upload.php',
            filebrowserUploadMethod: 'form'
        });
    </script>
    
</body>
</html>