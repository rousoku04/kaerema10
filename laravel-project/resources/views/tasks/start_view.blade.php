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
            <h1>Kaerema10</h1>
        </header>
        <main>
            <div class="start_button">
                <input type="button" onclick="location.href=' {{ url ('/choose_shop_view') }} '" value="start">
            </div>
        </main>
    </body>
</html>