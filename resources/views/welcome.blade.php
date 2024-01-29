<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Portifólio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <!-- Adicione estas linhas no elemento head -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('caminho/para/seu/arquivo.css') }}">


    </head>

    <body>
        {{-- <div class="line">teste</div> --}}
        <header>
            <div class="caixa text-center">
                <!-- Dentro de sua visualização (.blade.php) -->

                {{-- <h1>Yuri</h1> --}}

                {{-- <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="produtos.html">Sobre</a></li>
                        <li><a href="produtos.html">Projetos</a></li>
                        <li><a href="contato.html">Habilidades</a></li>
                    </ul>
                </nav> --}}
            </div>
        </header>

        <main>
            <div data-aos="flip-left" class="AboutMe">
                <h1>Yuri de Oliveira</h1>

                <p>Programadora Front-End</p>
                <p>Apaixonada pelo que faço  &#x1F60E;</p>
                <p>Sede constante de aprendizado</p>

            </div>
            {{-- <div data-aos="flip-left" class="AboutMe">
                <h1>Olá, eu sou a Yuri</h1>

                <p>Sou uma programadora com um ano de experiência e uma sede constante de aprendizado. Sou uma apaixonada pelo que faço.</p>

                <p>Mesmo sendo relativamente nova na indústria, estou dedicada a aprimorar minhas habilidades e conhecimentos. Ao longo do último ano, tive a oportunidade de contribuir para o desenvolvimento de um site onde foi utilizado PHP, o framework Laravel, Html, Javascript e o Banco de dados Mysql. Estou entusiasmada com as oportunidades de crescimento que estão por vir.</p>

                <p>Meu foco principal é a área de programação, onde busco constantemente aprender e aplicar as melhores práticas para criar soluções eficientes e escaláveis.</p>

                <p>Explore meu portfólio para ver alguns dos projetos empolgantes em que trabalhei. Se você está procurando uma desenvolvedora comprometida, criativa e apaixonada, você está no lugar certo!</p>



            </div> --}}
            <div class="buttonLink">
                <button class="round-button-1">Home</button>
                <button class="round-button-2">About</button>
            </div>
            <div data-aos="fade-right" class="bodyIMG">
                <img src="{{ asset('img/globo2.png') }}" alt="Descrição da Imagem" class="img-fluid rotating-earth" >
                <img src="{{ asset('img/mao.png') }}" alt="Descrição da Imagem" class="img-fluid " >
            </div>

            <div class="buttonLink">
                <button class="round-button-1">Skills</button>
                <button class="round-button-2">Projects</button>
            </div>

        </main>

        <footer>
            <div class="dados col-md-6">
                <ul>
                    <li>
                        <a href="https://wa.me/551196990-6770">
                            <i aria-hidden="true" class="fas fa-phone-alt">
                                <span class="elementor-icon-list-text">Contact</span>
                            </i>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="mailto:yuh.tomodaty@hotmail.com">
                            <span class="elementor-icon-list-icon">
                                <i aria-hidden="true" class="far fa-envelope-open">
                                    <span class="elementor-icon-list-text">
                                        E-mail
                                    </span>
                                </i>
                            </span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <span>
                            <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-animation-grow elementor-repeater-item-3388c9b" href="https://www.linkedin.com/in/yuri-de-oliveira-issamoto-806968169/" target="_blank">
                                <i class="fab fa-linkedin">
                                    <span class="elementor-screen-only">
                                        Linkedin
                                    </span>
                                </i>
                            </a>
                        </span>
                        <span>
                            <a class="elementor-icon elementor-social-icon elementor-social-icon-github elementor-animation-grow" href="https://github.com/yuriissamoto" target="_blank">
                                <i class="fab fa-github">
                                    <span class="elementor-screen-only">
                                        GitHub
                                    </span>
                                </i>
                            </a>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="dadosIMG col-md-6">
                <img src="{{ asset('img/LogoYuri.png') }}" alt="Descrição da Imagem" class="img-fluid">
            </div>
        </footer>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

    </body>


</html>

