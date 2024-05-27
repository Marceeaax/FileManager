<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>
    @if(session('status'))
        <p>{{ session('status') }}</p>
    @endif
</body>
</html>
