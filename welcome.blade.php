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
                                <button onclick="scrollToSection('#certificate-section')" class="header-round-button-1">{{ __('locale.Table.HeaderbuttonLink.Certificates') }}</button>
                            </div>
                        </div>
                        <div class="headertxt">
                            <h1 class="header__title">Yuri de Oliveira Issamoto</h1>

                            <p class="header__p">{{ __('locale.Table.Headerbody.Developer') }}</p>
                            <p class="header__p">&#x1F60E; &#x1F60E; &#x1F60E;</p>
                            <p class="header__p">{{ __('locale.Table.Headerbody.P1') }} </p>
                            <p class="header__p">{{ __('locale.Table.Headerbody.P2') }}</p>
                    </div>
                    <div class="headercontacts__body">

                        <ul class="headercontacts__ul">
                            <li class="headercontacts__li">

                                <a class="headercontacts__a" href="https://web.whatsapp.com/send?phone=5511969906770">
                                    <i aria-hidden="true" class="fab fa-whatsapp">

                                    </i>
                                </a>
                            </li>
                        </ul>
                        <ul class="headercontacts__ul">
                            <li class="headercontacts__li">
                                <a class="headercontacts__a" href="mailto:yuh.tomodaty@hotmail.com">

                                    <i aria-hidden="true" class="far fa-envelope-open">

                                    </i>

                                </a>
                            </li>
                        </ul>
                        <ul class="headercontacts__ul">
                            <li class="headercontacts__li">
                                <span>
                                    <a class="headercontacts__a elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-animation-grow elementor-repeater-item-3388c9b" href="https://www.linkedin.com/in/yuri-de-oliveira-issamoto-806968169/" target="_blank">
                                        <i class="fab fa-linkedin">

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

                                        </i>
                                    </a>
                                </span>
                            </li>
                        </ul>
                        <ul class="headercontacts__ul">
                            <li class="headercontacts__li">
                                <span>
                                    <a class="headercontacts__a elementor-icon elementor-social-icon elementor-social-icon-curriculo elementor-animation-grow" href="/img/cv/cv.pdf" download="Yuri_Oliveira_Issamoto.pdf" target="_blank">
                                        <i class="fas fa-file-pdf"></i>
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
                    <div class="AboutMe__body1">
                        <h1 class="AboutMe__title">{{ __('locale.Table.AboutMetitle') }}</h1>
                        <div class="AboutMe__button">
                            <a href="/img/cv/cv.pdf" class="AboutMeBtn">{{ __('locale.Table.CVBtn') }}</a>
                        </div>
                    </div>
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
                    <h1 class="projects__title">{{ __('locale.Table.Projectstitle') }}</h1>
                    <div class="projects__body">
                        <h2 class="projects__title2">Projetos Iniciais</h2>
                        <div data-aos="zoom-out-right" data-aos-delay="500" class="projects__initials">
                            <a class="projects__link" href="https://yuriissamoto.github.io/snake/">
                                <div class="projects__txt">Snake</div>
                                <div class="projects__img"><img src="/img/projects/snake2.png"></div>
                            </a>
                            <a class="projects__link" href="https://yuriissamoto.github.io/FlappyBird/">
                                <div class="projects__txt">Flappy Bird</div>
                                <div class="projects__img"><img class="projects__img2" src="/img/projects/flappybird.png"></div>
                            </a>
                        </div>
                    </div>
                </section>

                <section id="certificate-section">
                    <h1 class="certificate__title" >{{ __('locale.Table.HeaderbuttonLink.Certificates') }}</h1>
                    <div class="certificate__body">
                        <div data-aos="zoom-out-right" data-aos-delay="500" class="certificate">
                            <a class="certificate__link" href="https://cursos.alura.com.br/certificate/aa401834-c211-44bc-b490-4c77e34f6a72?lang=pt_BR">
                                <div class="certificate__txt">Django Rest Framework</div>
                                <div class="certificate__img"><img src="/img/certificate/API_Django.png"></div>

                            </a>
                            <a class="certificate__link" href="https://cursos.alura.com.br/certificate/21d68d24-3a0f-49e8-8a54-9e72d60c3f9e?lang=pt_BR">
                                <div class="certificate__txt">Django: {{ __('locale.Table.Certificates.Txt1') }}</div>
                                <div class="certificate__img"><img src="/img/certificate/API_Django.png" ></div>

                            </a>
                            <a class="certificate__link" href="https://cursos.alura.com.br/certificate/0567f4d1-300c-4ebe-ad8e-8dc3a251e6ed?lang=pt_BR">
                                <div class="certificate__txt">HTML5/CSS3: {{ __('locale.Table.Certificates.Txt2') }}</div>
                                <div class="certificate__img"><img src="/img/certificate/API_Django.png" ></div>

                            </a>
                            <a class="certificate__link" href="https://cursos.alura.com.br/certificate/410c1e84-4292-460a-b2ca-303007cfee26?lang=pt_BR">
                                <div class="certificate__txt">HTML5/CSS3: {{ __('locale.Table.Certificates.Txt3') }}</div>
                                <div class="certificate__img"><img src="/img/certificate/API_Django.png" ></div>

                            </a>
                            <a class="certificate__link" href="https://cursos.alura.com.br/certificate/6fe3f320-edc3-4ca9-b083-a863b0df526b?lang=pt_BR">
                                <div class="certificate__txt">JavaScript: {{ __('locale.Table.Certificates.Txt4') }}</div>
                                <div class="certificate__img"><img src="/img/certificate/API_Django.png"></div>

                            </a>
                            <a class="certificate__link" href="https://cursos.alura.com.br/certificate/9a69f8f7-eec0-4711-b5e9-42c29093ac46?lang=pt_BR">
                                <div class="certificate__txt">Laravel: {{ __('locale.Table.Certificates.Txt5') }}</div>
                                <div class="certificate__img"><img src="/img/certificate/API_Django.png"></div>

                            </a>
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
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
    </body>
</html>

