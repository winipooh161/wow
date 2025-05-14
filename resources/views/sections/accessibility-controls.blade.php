<div class="accessibility-controls">
    <button type="button" class="accessibility-toggle btn btn-primary rounded-circle" aria-label="Открыть меню доступности" aria-expanded="false">
        <i class="bi bi-eye"></i>
    </button>
    
    <div class="accessibility-menu bg-white rounded-3 shadow-lg p-3" role="dialog" aria-label="Меню доступности">
        <h3 class="h5 mb-3">Настройки доступности</h3>
        
        <div class="mb-3">
            <button type="button" class="btn btn-sm btn-outline-secondary me-1 mb-1 js-font-decrease" aria-label="Уменьшить размер шрифта">
                <i class="bi bi-dash-circle"></i> Шрифт
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary me-1 mb-1 js-font-increase" aria-label="Увеличить размер шрифта">
                <i class="bi bi-plus-circle"></i> Шрифт
            </button>
            <button type="button" class="btn btn-sm btn-outline-secondary mb-1 js-font-reset" aria-label="Сбросить размер шрифта">
                <i class="bi bi-arrow-counterclockwise"></i> Сбросить
            </button>
        </div>
        
        <div class="mb-3">
            <label class="form-label mb-2 d-block">Контрастность</label>
            <button type="button" class="btn btn-sm btn-outline-dark me-1 mb-1 js-contrast-normal" aria-label="Нормальный контраст">
                Нормальная
            </button>
            <button type="button" class="btn btn-sm btn-outline-dark me-1 mb-1 js-contrast-high" aria-label="Высокий контраст">
                Высокая
            </button>
        </div>
        
        <div class="mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="accessibilityCursor" aria-label="Увеличенный курсор">
                <label class="form-check-label" for="accessibilityCursor">Увеличенный курсор</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="accessibilityMotion" aria-label="Уменьшить анимацию">
                <label class="form-check-label" for="accessibilityMotion">Уменьшить анимацию</label>
            </div>
        </div>
        
        <div class="mb-2">
            <button type="button" class="btn btn-sm btn-primary js-accessibility-close" aria-label="Закрыть меню доступности">
                <i class="bi bi-check-lg"></i> Готово
            </button>
        </div>
    </div>
</div>

<style>
/* Стили для компонента доступности */
.accessibility-controls {
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 1050;
}

@media (max-width: 767.98px) {
    .accessibility-controls {
        bottom: 10px;
        left: 10px;
    }
}

.accessibility-toggle {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

@media (max-width: 767.98px) {
    .accessibility-toggle {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
}

.accessibility-menu {
    position: absolute;
    bottom: 60px;
    left: 0;
    width: 280px;
    display: none;
}

@media (max-width: 767.98px) {
    .accessibility-menu {
        width: 230px;
        bottom: 50px;
    }
}

/* Классы для изменения доступности */
body.accessibility-font-large {
    font-size: 1.2em;
}

body.accessibility-font-larger {
    font-size: 1.4em;
}

body.accessibility-high-contrast {
    filter: contrast(1.2);
}

body.accessibility-larger-cursor * {
    cursor: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 16" fill="%23000000"><path d="M12.316 3.051a1 1 0 0 1 .633 1.265l-4 12a1 1 0 0 1-1.898-.632l4-12a1 1 0 0 1 1.265-.633zM5.707 6.293a1 1 0 0 1 0 1.414L3.414 10l2.293 2.293a1 1 0 0 1-1.414 1.414l-3-3a1 1 0 0 1 0-1.414l3-3a1 1 0 0 1 1.414 0z"/></svg>'), auto;
}

body.accessibility-reduced-motion * {
    animation-duration: 0.001s !important;
    transition-duration: 0.001s !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accessibilityToggle = document.querySelector('.accessibility-toggle');
    const accessibilityMenu = document.querySelector('.accessibility-menu');
    const closeButton = document.querySelector('.js-accessibility-close');
    
    // Открытие/закрытие меню доступности
    accessibilityToggle.addEventListener('click', function() {
        const expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !expanded);
        
        if (expanded) {
            accessibilityMenu.style.display = 'none';
        } else {
            accessibilityMenu.style.display = 'block';
        }
    });
    
    closeButton.addEventListener('click', function() {
        accessibilityMenu.style.display = 'none';
        accessibilityToggle.setAttribute('aria-expanded', 'false');
    });
    
    // Изменение размера шрифта
    document.querySelector('.js-font-increase').addEventListener('click', function() {
        const body = document.body;
        
        if (body.classList.contains('accessibility-font-large')) {
            body.classList.remove('accessibility-font-large');
            body.classList.add('accessibility-font-larger');
        } else if (!body.classList.contains('accessibility-font-larger')) {
            body.classList.add('accessibility-font-large');
        }
        
        localStorage.setItem('accessibility-font', body.classList.contains('accessibility-font-larger') ? 
            'larger' : body.classList.contains('accessibility-font-large') ? 'large' : 'normal');
    });
    
    document.querySelector('.js-font-decrease').addEventListener('click', function() {
        const body = document.body;
        
        if (body.classList.contains('accessibility-font-larger')) {
            body.classList.remove('accessibility-font-larger');
            body.classList.add('accessibility-font-large');
        } else if (body.classList.contains('accessibility-font-large')) {
            body.classList.remove('accessibility-font-large');
        }
        
        localStorage.setItem('accessibility-font', body.classList.contains('accessibility-font-larger') ? 
            'larger' : body.classList.contains('accessibility-font-large') ? 'large' : 'normal');
    });
    
    document.querySelector('.js-font-reset').addEventListener('click', function() {
        document.body.classList.remove('accessibility-font-large', 'accessibility-font-larger');
        localStorage.setItem('accessibility-font', 'normal');
    });
    
    // Контрастность
    document.querySelector('.js-contrast-high').addEventListener('click', function() {
        document.body.classList.add('accessibility-high-contrast');
        localStorage.setItem('accessibility-contrast', 'high');
    });
    
    document.querySelector('.js-contrast-normal').addEventListener('click', function() {
        document.body.classList.remove('accessibility-high-contrast');
        localStorage.setItem('accessibility-contrast', 'normal');
    });
    
    // Увеличенный курсор
    document.getElementById('accessibilityCursor').addEventListener('change', function() {
        if (this.checked) {
            document.body.classList.add('accessibility-larger-cursor');
            localStorage.setItem('accessibility-cursor', 'large');
        } else {
            document.body.classList.remove('accessibility-larger-cursor');
            localStorage.setItem('accessibility-cursor', 'normal');
        }
    });
    
    // Уменьшение анимации
    document.getElementById('accessibilityMotion').addEventListener('change', function() {
        if (this.checked) {
            document.body.classList.add('accessibility-reduced-motion');
            localStorage.setItem('accessibility-motion', 'reduced');
        } else {
            document.body.classList.remove('accessibility-reduced-motion');
            localStorage.setItem('accessibility-motion', 'normal');
        }
    });
    
    // Загрузка настроек из localStorage при загрузке страницы
    window.addEventListener('load', function() {
        // Размер шрифта
        const savedFont = localStorage.getItem('accessibility-font');
        if (savedFont === 'large') {
            document.body.classList.add('accessibility-font-large');
        } else if (savedFont === 'larger') {
            document.body.classList.add('accessibility-font-larger');
        }
        
        // Контрастность
        if (localStorage.getItem('accessibility-contrast') === 'high') {
            document.body.classList.add('accessibility-high-contrast');
        }
        
        // Курсор
        if (localStorage.getItem('accessibility-cursor') === 'large') {
            document.body.classList.add('accessibility-larger-cursor');
            document.getElementById('accessibilityCursor').checked = true;
        }
        
        // Анимация
        if (localStorage.getItem('accessibility-motion') === 'reduced') {
            document.body.classList.add('accessibility-reduced-motion');
            document.getElementById('accessibilityMotion').checked = true;
        }
    });
    
    // Закрытие меню при клике вне
    document.addEventListener('click', function(event) {
        if (accessibilityMenu.style.display === 'block' &&
            !accessibilityMenu.contains(event.target) &&
            event.target !== accessibilityToggle) {
            accessibilityMenu.style.display = 'none';
            accessibilityToggle.setAttribute('aria-expanded', 'false');
        }
    });
    
    // Закрытие при нажатии Esc
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && accessibilityMenu.style.display === 'block') {
            accessibilityMenu.style.display = 'none';
            accessibilityToggle.setAttribute('aria-expanded', 'false');
        }
    });
});
</script>
