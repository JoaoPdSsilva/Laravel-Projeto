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
                <a href="{{route('home')}}" class="branch"><img src="logo.png" alt="Minha logo" title="Logo"></a>
                <nav class="menu">
                    <ul>
                        <li><a class="menu-link" href="{{route('home')}}">Início</a></li>
                        <li><a class="menu-link" href="{{route('contato')}}">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="container">
            <article>
                <h2 class="sub-title">Contatos</h2>
                <ul>
                    <li class="li-ornament"><a class="contact-link" href="mailto:joaopedro123jp1@outlook.com">Email: joaopedro123jp1@outlook.com</a class="contato-link"></li>
                    <li class="li-ornament"><a class="contact-link" href="https://api.whatsapp.com/send?phone=5514998351988">Celular: (14) 99835-1988</a></li>
                    <li class="li-ornament"><a class="contact-link" href="https://github.com/JoaoPdSsilva">Github: JoaoPdSsilva</a></li>
                    <li class="li-ornament"><a class="contact-link" href="https://www.linkedin.com/in/joaopedrodevsantos/">Linkedin: João Pedro</a></li>
                    
                </ul>
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59324.47678417713!2d-49.779576762179055!3d-21.672421677106144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94be14d250277975%3A0x3fc5d189489e0104!2sLins%2C%20SP!5e0!3m2!1spt-BR!2sbr!4v1646833084705!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </article>
        </main>
    </body>
</html>