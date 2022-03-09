<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">


    </head>
    <body>
        <header>
            <div class="container">
                <a href="{{route('home')}}" class="branch"><img src="logo.png" alt="Minha logo" title="Nome da minha logo"></a>
                <nav class="menu">
                    <ul>
                        <li><a class="menu-link" href="{{route('home')}}">Início</a></li>
                        <li><a class="menu-link" href="{{route('contato')}}">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="container">
            <article class="super-card">
                <section class="super-card-img">
                    <img src="JoaoPedro.jpg" alt="Foto do João Pedro", title="João Pedro">
                    <h2>João Pedro</h2>
                </section>
                <section class="super-card-text">
                    <p>
                       Meu nome é João Pedro tenho 17 anos, sou tecnico em desenvolvimento de sistemas pela Etec, participei de alguns hackatons e maratonas realizadas pelas empresas da minha cidade e pelo centro paula souza (CPS).
                    </p>
                    <p>
                        Nos 3 anos de ensino medio juntamente ao tecnico aprendi como desenvolver com Python, Java, JavaScript, PHP, HTML5, CSS3 também sei usar as ferramentas LowCode Adalo e Bubble.
                    </p>
                </section>
            </article>
        </main>
    </body>
</html>