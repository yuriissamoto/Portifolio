// rolagem para as sections

function scrollToSection(sectionId) {
    var targetSection = $(sectionId);
    if (targetSection.length) {
        $('html, body').animate({
            scrollTop: targetSection.offset().top
        }, 200); // Tempo em milissegundos para a animação
    }
};

// movimento do mouse com luz

document.addEventListener('mousemove', function(e) {
    var light = document.getElementById('light');
    light.style.left = e.pageX + 'px';
    light.style.top = e.pageY + 'px';
});

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
