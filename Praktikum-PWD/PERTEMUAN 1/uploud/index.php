<!DOCTYPE html>
<html lang="en">
<head>
    <title>Uploud File</title>
</head>
<body>
    <form enctype="multipart/form-data" method="post" action="upload.php">
        File yang diupload: <input type="file"name="fupload"><br>
        Deskripsi File: <br><textarea name="deskripsi" rows="6" cols="20"></textarea><br>
        <input type=submit value=Upload>
    </form>

    <br>

    <a href="download.php">Klik untuk download</a>
    
</body>
</html>