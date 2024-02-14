function scrollToSection(sectionId) {
    var targetSection = $(sectionId);
    if (targetSection.length) {
        $('html, body').animate({
            scrollTop: targetSection.offset().top
        }, 200); // Tempo em milissegundos para a animação
    }
};

document.addEventListener('mousemove', function(e) {
    var light = document.getElementById('light');
    light.style.left = e.pageX + 'px';
    light.style.top = e.pageY + 'px';
});


// document.addEventListener('DOMContentLoaded', function() {
//     // Seleciona o botão
//     var toggleBtn = document.getElementById('toggleLanguageBtn');

//     // Adiciona um ouvinte de eventos de clique ao botão
//     toggleBtn.addEventListener('click', function() {
//         // Obtém o idioma atual do botão
//         var currentLanguage = toggleBtn.innerText.trim();

//         // Alterna o idioma
//         if (currentLanguage === 'English') {
//             // Se for inglês, muda para português
//             toggleBtn.innerText = 'Portuguese';
//             // Redireciona para a rota do idioma português
//             window.location.href = `{{ route('lang.switch', 'pt_BR') }}`;
//         } else {
//             // Se for português, muda para inglês
//             toggleBtn.innerText = 'English';
//             // Redireciona para a rota do idioma inglês
//             window.location.href = "{{ route('lang.switch', 'en') }}";
//         }
//     });
// });


// document.getElementById('toggleLanguageBtn').addEventListener('click', function() {
//     var switchLangUrl = this.getAttribute('data-lang-switch');
//     window.location.href = switchLangUrl;
// });

// Obtenha o botão de alternância de idioma

document.getElementById('toggleLanguageBtn').addEventListener('click', function() {
    var currentLanguage = document.documentElement.lang;
    var newLanguage = (currentLanguage === 'en') ? 'pt_BR' : 'en';
    window.location.href = '/lang/' + newLanguage;
});


// dark mode
function toggleDarkMode() {
    const isDarkMode = document.body.classList.contains('dark-mode');
    if (isDarkMode) {
        document.body.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');
        themeToggleBtn.textContent = 'Dark'; // Atualiza o texto do botão
    } else {
        document.body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
        themeToggleBtn.textContent = 'Light'; // Atualiza o texto do botão
    }
}

// Adiciona um ouvinte de evento ao botão de alternância de tema
const themeToggleBtn = document.getElementById('theme-toggle');
themeToggleBtn.addEventListener('click', toggleDarkMode);

// Verifica se há uma preferência de tema armazenada localmente
const preferredTheme = localStorage.getItem('theme');
if (preferredTheme === 'dark') {
    document.body.classList.add('dark-mode');
    themeToggleBtn.textContent = 'Light'; // Atualiza o texto do botão
} else {
    themeToggleBtn.textContent = 'Dark'; // Atualiza o texto do botão
}
