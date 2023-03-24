<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ToDo App</title>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <header>
            <h1>choose_shop_view</h1>
        </header>
        <main>
            @foreach($folders as $folder)
                <h1>{{ $folder->name }}</h1>
            @endforeach
        </main>
    </body>
</html>