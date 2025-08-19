// ===== APP ESTAR - JAVASCRIPT PRINCIPAL =====

document.addEventListener('DOMContentLoaded', function() {
    
    // ===== NAVEGAÇÃO SUAVE =====
    const navLinks = document.querySelectorAll('a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 80; // Ajuste para navbar fixa
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // ===== NAVBAR SCROLL EFFECT =====
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });
    
    // Aplicar classe inicial baseada na posição do scroll
    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    }
    
    // ===== ANIMAÇÕES AO SCROLL =====
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
            }
        });
    }, observerOptions);
    
    // Observar elementos para animação
    const animateElements = document.querySelectorAll('.service-card, .advantage-item, .pricing-card, .step-item, .stat-item');
    animateElements.forEach(el => observer.observe(el));
    
    // ===== FORMULÁRIO DE CONTATO =====
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simular envio do formulário
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Enviando...';
            submitBtn.disabled = true;
            
            // Simular delay de envio
            setTimeout(() => {
                // Mostrar mensagem de sucesso
                showNotification('Mensagem enviada com sucesso! Entraremos em contato em breve.', 'success');
                
                // Resetar formulário
                this.reset();
                
                // Restaurar botão
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });
    }
    
    // ===== NOTIFICAÇÕES =====
    function showNotification(message, type = 'info') {
        // Remover notificações existentes
        const existingNotifications = document.querySelectorAll('.notification');
        existingNotifications.forEach(notification => notification.remove());
        
        // Criar nova notificação
        const notification = document.createElement('div');
        notification.className = `notification notification-${type} alert alert-${type === 'success' ? 'success' : 'info'} alert-dismissible fade show position-fixed`;
        notification.style.cssText = `
            top: 100px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        `;
        
        notification.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        document.body.appendChild(notification);
        
        // Auto-remover após 5 segundos
        setTimeout(() => {
            if (notification.parentNode) {
                notification.remove();
            }
        }, 5000);
    }
    
    // ===== CONTADOR ANIMADO =====
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        
        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start);
            }
        }, 16);
    }
    
    // Animar contadores quando visíveis
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target.querySelector('h2');
                if (counter && !counter.classList.contains('animated')) {
                    const text = counter.textContent;
                    const number = parseInt(text.replace(/\D/g, ''));
                    
                    if (!isNaN(number)) {
                        counter.classList.add('animated');
                        animateCounter(counter, number);
                    }
                }
            }
        });
    }, { threshold: 0.5 });
    
    const statItems = document.querySelectorAll('.stat-item');
    statItems.forEach(item => counterObserver.observe(item));
    
    // ===== MODAL DE DEMO =====
    const demoButtons = document.querySelectorAll('a[href="#testar"], a[href="#contratar"]');
    
    demoButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (this.getAttribute('href') === '#testar') {
                e.preventDefault();
                showDemoModal();
            }
        });
    });
    
    function showDemoModal() {
        const modalHTML = `
            <div class="modal fade" id="demoModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="bi bi-play-circle text-primary me-2"></i>
                                Demonstração appEstar
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Funcionalidades Principais:</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle text-success me-2"></i>Gestão de vagas em tempo real</li>
                                        <li><i class="bi bi-check-circle text-success me-2"></i>App mobile nativo</li>
                                        <li><i class="bi bi-check-circle text-success me-2"></i>Relatórios automáticos</li>
                                        <li><i class="bi bi-check-circle text-success me-2"></i>Integração com pagamentos</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center">
                                        <img src="public/landscape/app-demo.png" alt="Demo App" class="img-fluid rounded" style="max-height: 200px;">
                                        <p class="text-muted mt-2">Interface intuitiva e responsiva</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <a href="#contato" class="btn btn-primary" data-bs-dismiss="modal">
                                <i class="bi bi-chat-dots me-2"></i>
                                Solicitar Demo Completa
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        // Adicionar modal ao DOM
        document.body.insertAdjacentHTML('beforeend', modalHTML);
        
        // Mostrar modal
        const modal = new bootstrap.Modal(document.getElementById('demoModal'));
        modal.show();
        
        // Remover modal do DOM após fechar
        document.getElementById('demoModal').addEventListener('hidden.bs.modal', function() {
            this.remove();
        });
    }
    
    // ===== LAZY LOADING DE IMAGENS =====
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
    
    // ===== SCROLL TO TOP =====
    const scrollToTopBtn = document.createElement('button');
    scrollToTopBtn.innerHTML = '<i class="bi bi-arrow-up"></i>';
    scrollToTopBtn.className = 'btn btn-primary position-fixed';
    scrollToTopBtn.style.cssText = `
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    `;
    
    document.body.appendChild(scrollToTopBtn);
    
    // Mostrar/ocultar botão scroll to top
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            scrollToTopBtn.style.display = 'block';
        } else {
            scrollToTopBtn.style.display = 'none';
        }
    });
    
    // Funcionalidade do botão
    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // ===== VALIDAÇÃO DE FORMULÁRIO =====
    const inputs = document.querySelectorAll('.contact-form input, .contact-form textarea');
    
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            if (this.classList.contains('is-invalid')) {
                this.classList.remove('is-invalid');
            }
        });
    });
    
    function validateField(field) {
        const value = field.value.trim();
        
        if (field.hasAttribute('required') && !value) {
            field.classList.add('is-invalid');
            return false;
        }
        
        if (field.type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                field.classList.add('is-invalid');
                return false;
            }
        }
        
        return true;
    }
    
    // ===== MENU MOBILE =====
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (navbarToggler && navbarCollapse) {
        // Fechar menu ao clicar em um link
        const mobileNavLinks = navbarCollapse.querySelectorAll('.nav-link');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    navbarCollapse.classList.remove('show');
                }
            });
        });
    }
    
    // ===== PERFORMANCE OPTIMIZATION =====
    
    // Debounce para eventos de scroll
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    // Aplicar debounce ao scroll
    const debouncedScrollHandler = debounce(function() {
        // Lógica de scroll otimizada aqui
    }, 16);
    
    window.addEventListener('scroll', debouncedScrollHandler);
    
    // ===== ANALYTICS SIMPLES =====
    function trackEvent(eventName, eventData = {}) {
        // Simular tracking de eventos
        console.log('Event tracked:', eventName, eventData);
        
        // Aqui você pode integrar com Google Analytics, Facebook Pixel, etc.
    }
    
    // Track de cliques em botões importantes
    const importantButtons = document.querySelectorAll('.btn-primary, .btn-success');
    importantButtons.forEach(button => {
        button.addEventListener('click', function() {
            const buttonText = this.textContent.trim();
            trackEvent('button_click', {
                button_text: buttonText,
                button_class: this.className,
                section: this.closest('section')?.id || 'unknown'
            });
        });
    });
    
    // Track de visualizações de seções
    const sections = document.querySelectorAll('section[id]');
    const sectionObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                trackEvent('section_view', {
                    section_id: entry.target.id,
                    section_name: entry.target.querySelector('h2, h3')?.textContent || 'Unknown'
                });
            }
        });
    }, { threshold: 0.5 });
    
    sections.forEach(section => sectionObserver.observe(section));
    
    console.log('appEstar - Site carregado com sucesso! 🚗✨');
}); 