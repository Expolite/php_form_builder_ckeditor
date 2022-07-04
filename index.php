

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form builder</title>

</head>
<body style="background: grey;">




    <form action="#" method="POST">

        <!-- text form field -->
        <p><textarea name="editor" id="editor"><?php echo !empty($_POST['editor'])?$_POST['editor']:''; ?></textarea></p>

        <!-- Submit button -->
        <button type="submit" name="submit">Submit</button>
    </form>




    <!-- Display submitted contents -->
    <?php if(!empty($_POST['editor'])) { ?>
        <div class="output">
            <h1>Submitted content:</h1>
            <?php echo $_POST['editor']; ?>
        </div>
    <?php } ?>




    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: 'ckeditor/ck_upload.php',
            filebrowserUploadMethod: 'form'
        });
    </script>
    
</body>
</html>