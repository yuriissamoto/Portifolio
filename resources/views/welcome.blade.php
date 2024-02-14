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
                        <div class="headerIMG">
                            <div class="headerbuttonLink">
                                <button onclick="scrollToSection('#about-section')" class="header-round-button-2">{{ __('locale.Table.HeaderbuttonLink.About') }}</button>
                                <button onclick="scrollToSection('#skills-section')" class="header-round-button-1">{{ __('locale.Table.HeaderbuttonLink.Skills') }}</button>
                                <button onclick="scrollToSection('#projects-section')" class="header-round-button-2">{{ __('locale.Table.HeaderbuttonLink.Projects') }}</button>
                                <button onclick="scrollToSection('#experience-section')" class="header-round-button-1">{{ __('locale.Table.HeaderbuttonLink.Experience') }}</button>



                            </div>
                        </div>
                        <div class="headertxt">
                            <h1 class="header__title">Yuri de Oliveira Issamoto</h1>

                            <p class="header__p">{{ __('locale.Table.Headerbody.Developer') }}</p>
                            <p class="header__p">{{ __('locale.Table.Headerbody.P1') }} &#x1F60E;</p>
                            <p class="header__p">{{ __('locale.Table.Headerbody.P2') }}</p>
                    </div>
                    <div class="headercontacts__body">

                        <ul class="headercontacts__ul">
                            <li class="headercontacts__li">
                                <a class="headercontacts__a" href="https://wa.me/551196990-6770">
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

                {{-- <section id="home-section">
                    <div class="home__body">
                        <div data-aos="flip-left" class="home">
                            <h1 class="home__title">Yuri de Oliveira</h1>

                            <p class="home__p">Programadora Front-End</p>
                            <p class="home__p">Apaixonada pelo que faço  &#x1F60E;</p>
                            <p class="home__p">Sede constante de aprendizado</p>
                        </div>
                        <div data-aos="flip-left" class="homeIMG">
                            <div class="buttonLink">
                                <button onclick="scrollToSection('#home-section')" class="round-button-1">Home</button>
                                <button onclick="scrollToSection('#about-section')" class="round-button-2">About</button>
                            </div>
                            <div data-aos="fade-right" class="bodyIMG">
                                <img src="{{ asset('img/globo2.png') }}" alt="Descrição da Imagem" class="imgHome" >
                                <img src="{{ asset('img/mao.png') }}" alt="Descrição da Imagem" class="imgHome2">

                            </div>
                            <div class="buttonLink">
                                <button onclick="scrollToSection('#skills-section')" class="round-button-1">Skills</button>
                                <button onclick="scrollToSection('#projects-section')" class="round-button-2">Projects</button>
                            </div>
                        </div>
                    </div>

                </section> --}}
                <section id="about-section">
                    <h1 class="AboutMe__title">{{ __('locale.Table.AboutMetitle') }}</h1>
                    <div class="AboutMe__body">
                        <div data-aos="flip-left" class="AboutMe">


                            <p class="AboutMe__p">{{ __('locale.Table.AboutMeBody.P1') }}</p>


                            <p class="AboutMe__p">{{ __('locale.Table.AboutMeBody.P2') }}</p>

                            <p class="AboutMe__p">{{ __('locale.Table.AboutMeBody.P3') }} <strong>python</strong>{{ __('locale.Table.AboutMeBody.P3_0') }}, {{ __('locale.Table.AboutMeBody.P3_1') }} (<strong>regex</strong>) {{ __('locale.Table.AboutMeBody.P3_2') }}</p>

                            <p class="AboutMe__p">{{ __('locale.Table.AboutMeBody.P4') }} <strong>PHP</strong>, {{ __('locale.Table.AboutMeBody.P4_1') }} <strong>Laravel</strong>{{ __('locale.Table.AboutMeBody.P4_2') }}, <strong>Html</strong>, <strong>Javascript</strong> {{ __('locale.Table.AboutMeBody.P4_3') }} <strong>Mysql</strong>{{ __('locale.Table.AboutMeBody.P4_4') }}. {{ __('locale.Table.AboutMeBody.P4_5') }}</p>

                            <p class="AboutMe__p">{{ __('locale.Table.AboutMeBody.P5') }}</p>

                        </div>
                    </div>

                </section>

                <section id="skills-section">
                    <h1 class="skills__title">{{ __('locale.Table.Skilltitle') }}</h1>
                    <div class="skills__body">
                        <div class="skills">
                            <div class="skills__l">
                                <img src="/img/skills/python.png" data-aos="fade-down-right" data-aos-delay="500">
                                <p class="skills__p" id="python" data-aos="fade-down-right" data-aos-delay="500">Python</p>
                            </div>
                            <div class="skills__l">
                                <img src="/img/skills/django.png" data-aos="fade-down-right" data-aos-delay="500">
                                <p class="skills__p" id="django" data-aos="fade-down-right" data-aos-delay="500">Django</p>
                            </div>
                            <div class="skills__l">
                                <img src="/img/skills/html5.png" data-aos="fade-down-left" data-aos-delay="500">
                                <p class="skills__p" data-aos="fade-down-left" data-aos-delay="500">HTML5</p>
                            </div>
                            <div class="skills__l" data-aos="fade-up-right" data-aos-delay="500">
                                <img src="/img/skills/mysql3.png">
                                <p class="skills__p" id="mysql" data-aos="fade-up-right" data-aos-delay="500">MySQL</p>
                            </div>
                        </div>
                        <div class="skills">
                            <div class="skills__l">
                                <img src="/img/skills/json.png" data-aos="fade-down-right" data-aos-delay="500">
                                <p class="skills__p" id="json" data-aos="fade-down-right" data-aos-delay="500">Json</p>
                            </div>
                            <div class="skills__l">
                                <img src="/img/skills/api.png" data-aos="fade-down-right" data-aos-delay="500">
                                <p class="skills__p" id="api" data-aos="fade-down-right" data-aos-delay="500">API</p>
                            </div>
                            <div class="skills__l">
                                <img src="/img/skills/php.png" data-aos="fade-down-left" data-aos-delay="500">
                                <p class="skills__p" data-aos="fade-down-left" data-aos-delay="500">PHP</p>
                            </div>
                            <div class="skills__l">
                                <img src="/img/skills/regularExp.png" data-aos="fade-up-right" data-aos-delay="500">
                                <p class="skills__p" id="regex" data-aos="fade-up-right" data-aos-delay="500">Regex</p>
                            </div>
                        </div>
                        <div class="skills">
                            <div class="skills__l">
                                <img src="/img/skills/laravel2.png" data-aos="fade-down-left" data-aos-delay="500">
                                <p class="skills__p" data-aos="fade-down-left" data-aos-delay="500">Laravel</p>
                            </div>
                            <div class="skills__l">
                                <img src="/img/skills/swagger.png" data-aos="fade-up-right" data-aos-delay="500">
                                <p class="skills__p" id="swagger" data-aos="fade-up-right" data-aos-delay="500">Swagger</p>
                            </div>
                            <div class="skills__l" data-aos="fade-up-right" data-aos-delay="500">
                                <img src="/img/skills/postman.png">
                                <p class="skills__p" id="postman" data-aos="fade-up-right" data-aos-delay="500">Postman</p>
                            </div>



                            <div class="skills__l">
                                <img src="/img/skills/javascript.png" data-aos="fade-down-left" data-aos-delay="500">
                                <p class="skills__p" data-aos="fade-down-left" data-aos-delay="500">JavaScript</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="projects-section">
                    <div data-aos="fade-right" class="projects">
                        <h1 class="projects__title">{{ __('locale.Table.Projectstitle') }}</h1>
                        <div class="projects__body">
                            <p class="projects__p">Explore meu portfólio para ver alguns dos projetos empolgantes em que trabalhei.</p>
                            <p class="projects__p">Se você está procurando uma desenvolvedora comprometida, criativa e apaixonada, você está no lugar certo!</p>

                            <p class="projects__p">Project 1</p>
                            <p class="projects__p">Project 2</p>
                            <p class="projects__p">Project 3</p>
                        </div>
                    </div>
                </section>

                {{-- <section id="contact-section">
                    <h1 class="contacts__title" >Contatos</h1>
                    <div class="contacts__body">
                        <div data-aos="zoom-out-right" data-aos-delay="500" class="contacts">
                            <ul class="contacts__ul">
                                <li class="contacts__li">
                                    <a class="contacts__a" href="https://wa.me/551196990-6770">
                                        <i aria-hidden="true" class="fas fa-phone-alt">
                                            <span class="contacts__span elementor-icon-list-text">Contact</span>
                                        </i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="contacts__ul">
                                <li class="contacts__li">
                                    <a class="contacts__a" href="mailto:yuh.tomodaty@hotmail.com">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="far fa-envelope-open">
                                                <span class="contacts__span elementor-icon-list-text">
                                                    E-mail
                                                </span>
                                            </i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="contacts__ul">
                                <li class="contacts__li">
                                    <span>
                                        <a class="contacts__a elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-animation-grow elementor-repeater-item-3388c9b" href="https://www.linkedin.com/in/yuri-de-oliveira-issamoto-806968169/" target="_blank">
                                            <i class="fab fa-linkedin">
                                                <span class="contacts__span elementor-screen-only">
                                                    Linkedin
                                                </span>
                                            </i>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                            <ul class="contacts__ul">
                                <li class="contacts__li">
                                    <span>
                                        <a class="contacts__a elementor-icon elementor-social-icon elementor-social-icon-github elementor-animation-grow" href="https://github.com/yuriissamoto" target="_blank">
                                            <i class="fab fa-github">
                                                <span class="contacts__span elementor-screen-only">
                                                    GitHub
                                                </span>
                                            </i>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div data-aos="zoom-out-left" data-aos-delay="500" class="contactsIMG">
                            <img src="{{ asset('img/robo_contato.png') }}" alt="Descrição da Imagem" class="animated-object" >
                        </div>
                    </div>


                </section> --}}

                <script src="script/script.js">
                //     document.addEventListener('DOMContentLoaded', function () {
                //     var options = {
                //         strings: ["Python", "Django", "API", "Json", "Swagger", "Regex", "Postman"],
                //         typeSpeed: 50, // velocidade de digitação em milissegundos
                //         backSpeed: 20, // velocidade de retrocesso em milissegundos
                //         startDelay: 100, // atraso antes de começar a digitar
                //         backDelay: 500, // atraso antes de retroceder
                //         loop: true, // se a animação deve se repetir
                //         showCursor: false, // se deve mostrar ou não o cursor
                //     };

                //     var typed = new Typed('#python', options);
                //     var typed = new Typed('#django', options);
                //     var typed = new Typed('#api', options);
                //     // Adicione mais instâncias Typed.js conforme necessário
                // });

                </script>

            </main>



            <footer>
                <div class="dados col-md-6">
                    <ul class="dadoscontacts__ul">
                        <li class="dadoscontacts__li">
                            <a class="dadoscontacts__a" href="https://wa.me/551196990-6770">
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

