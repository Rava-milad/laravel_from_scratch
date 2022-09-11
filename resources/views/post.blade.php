<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./app.css">
</head>

<body>
    <article>
        <h1>{{ $post->title }}</h1>

        <div>
            <?= $post->body; ?>
        </div>
             {{-- this return just executed post varable example: if ( $post == <h1>hello world</h1>) this return HELLO WORLD --}}
            {{-- {{ $post }} --}} {{-- this return all of the $psot varable example if( $post == <h1>hello world</h1>) this return <h1>hello world</h1>--}}

    </article>

    <a href="/">Go Home Dady</a>
</body>

</html>