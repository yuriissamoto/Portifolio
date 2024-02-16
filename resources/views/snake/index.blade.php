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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Satisfy&display=swap" rel="stylesheet">


        <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@1,900&family=Oswald:wght@700&family=Protest+Guerrilla&family=Roboto+Slab:wght@300&family=Satisfy&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>




    </head>

    <body >
        <div class="headerbody">
            <header>
                {{-- <nav class="headerNav">
                    <ul class="headerUl">
                        <li class="headerli"><a class="header_a" href="index.html">Home</a></li>
                        <li class="headerli"><a class="header_a" href="produtos.html">Sobre</a></li>
                        <li class="headerli"><a class="header_a" href="produtos.html">Projetos</a></li>
                        <li class="headerli"><a class="header_a" href="contato.html">Habilidades</a></li>
                    </ul>
                </nav> --}}
                <nav class="headerNav">
                    <ul class="headerUl">
                        <li class="headerli">
                            <button  class="headerLanguageBtn" id="toggleLanguageBtn">{{ __('locale.Table.toggleLanguageBtn') }}</button>
                            <button class="headerLanguageBtn" id="theme-toggle">{{ __('locale.Table.DarkModeBtn') }}</button>
                        </li>

                    </ul>
                </nav>
                <div class="headerhome">

                    <div class="header__body">
                        <div class="headertxt">
                            <h1 class="header__title">Yuri de Oliveira Issamoto</h1>

                            <p class="header__p">{{ __('locale.Table.Headerbody.Developer') }}</p>
                            <p class="header__p">{{ __('locale.Table.Headerbody.P1') }} &#x1F60E;</p>
                            <p class="header__p">{{ __('locale.Table.Headerbody.P2') }}</p>
                    </div>
                    <div class="headercontacts__body">

                        <ul class="headercontacts__ul">
                            <li class="headercontacts__li">

                                <a class="headercontacts__a" href="https://web.whatsapp.com/send?phone=5511969906770">
                                    <i aria-hidden="true" class="fab fa-whatsapp">
                                        {{-- <span class="headercontacts__span elementor-icon-list-text"></span> --}}
                                    </i>
                                </a>
                            </li>
                        </ul>
                        <ul class="headercontacts__ul">
                            <li class="headercontacts__li">
                                <a class="headercontacts__a" href="mailto:yuh.tomodaty@hotmail.com">
                                    {{-- <span class="elementor-icon-list-icon"> --}}
                                        <i aria-hidden="true" class="far fa-envelope-open">
                                            {{-- <span class="headercontacts__span elementor-icon-list-text">

                                            </span> --}}
                                        </i>
                                    {{-- </span> --}}
                                </a>
                            </li>
                        </ul>
                        <ul class="headercontacts__ul">
                            <li class="headercontacts__li">
                                <span>
                                    <a class="headercontacts__a elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-animation-grow elementor-repeater-item-3388c9b" href="https://www.linkedin.com/in/yuri-de-oliveira-issamoto-806968169/" target="_blank">
                                        <i class="fab fa-linkedin">
                                            {{-- <span class="headercontacts__span elementor-screen-only">

                                            </span> --}}
                                        </i>
                                    </a>
                                </span>
                            </li>
                        </ul>
                        <ul class="headercontacts__ul">
                            <li class="headercontacts__li">
                                <span>
                                    <a class="headercontacts__a elementor-icon elementor-social-icon elementor-social-icon-github elementor-animation-grow" href="https://github.com/yuriissamoto" target="_blank">
                                        <i class="fab fa-github">
                                            {{-- <span class="headercontacts__span elementor-screen-only">

                                            </span> --}}
                                        </i>
                                    </a>
                                </span>
                            </li>
                        </ul>

                    </div>


                </div>
            </header>
        </div>
        <div class="mainbody">
            <main>
                <div id="light">
                </div>
                <section id="about-section">
                    <h1 class="AboutMe__title">Snake</h1>
                    <div class="AboutMe__body">
                        <div data-aos="flip-left" class="AboutMe">


                            <p class="AboutMe__p">&#x1F60E; Colocar a tela de snake aqui &#x1F60E; </p>




                        </div>
                    </div>

                </section>


                <script src="script/script.js">
                </script>
            </main>
            <footer>
                <div class="dados col-md-6">
                    <ul class="dadoscontacts__ul">
                        <li class="dadoscontacts__li">
                            <a class="dadoscontacts__a" href="https://web.whatsapp.com/send?phone=5511969906770">
                                <i aria-hidden="true" class="fab fa-whatsapp">
                                    <span class="elementor-icon-list-text">WhatsApp</span>
                                </i>
                            </a>
                        </li>
                    </ul>
                    <ul class="dadoscontacts__ul">
                        <li class="dadoscontacts__li">
                            <a class="dadoscontacts__a" href="mailto:yuh.tomodaty@hotmail.com">
                                <i aria-hidden="true" class="far fa-envelope-open">
                                    <span class="elementor-icon-list-text">
                                        E-mail
                                    </span>
                                </i>
                            </a>
                        </li>
                    </ul>
                    <ul class="dadoscontacts__ul">
                        <li class="dadoscontacts__li">
                                <a class=" dadoscontacts__a elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-animation-grow elementor-repeater-item-3388c9b" href="https://www.linkedin.com/in/yuri-de-oliveira-issamoto-806968169/" target="_blank">
                                    <i class="fab fa-linkedin">
                                        <span class="elementor-screen-only">
                                            Linkedin
                                        </span>
                                    </i>
                                </a>
                        </li>
                    </ul>
                    <ul class="dadoscontacts__ul">
                        <li class="dadoscontacts__li">
                            <a class="dadoscontacts__a elementor-icon elementor-social-icon elementor-social-icon-github elementor-animation-grow" href="https://github.com/yuriissamoto" target="_blank">
                                <i class="fab fa-github">
                                    <span class="elementor-screen-only">
                                        GitHub
                                    </span>
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
                <img src="{{ asset('img/LogoYuri.png') }}" alt="Descrição da Imagem" class="img-fluid">
            </footer>
        </div>


        <div class="line"></div>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

    </body>


</html>

