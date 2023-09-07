<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h1>Hello</h1>
    <h3>
        {{ $variable }}
    </h3>
    <form action = "validate-contact" method = "post">
        @csrf <!--cross site resource forgery-->
        <label for = "email">Email</label>
        <input 
            type = "email" 
            name = "email" 
            @if($variable == 'alumno')
                value = "@alumnos.udg.mx"
            @else
                value = "@gmail.com"
            @endif
        ><br>
        <label for = "comment">Comment</label>
        <textarea name = "comment" cols = "30" rows = "10"></textarea>
        <input type = "submit" value = "submit">
    </form>
</body>
</html>