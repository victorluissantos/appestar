# 🚗 appEstar - Estacionamento Digital Inteligente

Site institucional inspirado no design do Datavalid, desenvolvido para o appEstar - aplicativo de estacionamento rotativo digital.

## ✨ Características

- **Design Responsivo**: Inspirado no Datavalid com paleta de cores moderna
- **Bootstrap 5**: Framework CSS otimizado e customizado
- **PHP Nativo**: Sem dependências de frameworks pesados
- **Otimizado para Performance**: Arquivos locais, compressão GZIP, cache otimizado
- **Segurança**: Headers de segurança, proteção contra ataques comuns
- **Mobile First**: Design otimizado para dispositivos móveis

## 🚀 Instalação

### Pré-requisitos

- PHP 7.4 ou superior
- Composer
- Servidor web (Apache/Nginx)

### Passo a Passo

1. **Clone o repositório**
   ```bash
   git clone <seu-repositorio>
   cd appestar
   ```

2. **Instale as dependências do Bootstrap**
   ```bash
   composer install --no-dev --optimize-autoloader
   ```

3. **Configure o servidor web**
   - Aponte o DocumentRoot para a pasta do projeto
   - Certifique-se de que o mod_rewrite está habilitado (Apache)

4. **Acesse o site**
   - Abra seu navegador e acesse o domínio configurado

## 📁 Estrutura do Projeto

```
appestar/
├── index.php              # Arquivo principal
├── composer.json          # Dependências PHP
├── composer-bootstrap.json # Configuração Bootstrap
├── .htaccess             # Configurações Apache
├── README.md             # Este arquivo
├── public/               # Arquivos públicos
│   ├── css/             # CSS customizado
│   ├── js/              # JavaScript
│   ├── fonts/           # Fontes (Bootstrap Icons)
│   ├── icon/            # Ícones do app
│   ├── landscape/       # Imagens landscape
│   └── print/           # Imagens para impressão
└── vendor/               # Dependências Composer (gerado)
```

## 🎨 Personalização

### Cores
As cores principais estão definidas em variáveis CSS no arquivo `public/css/style.css`:

```css
:root {
    --primary-color: #0d6efd;
    --primary-dark: #0b5ed7;
    --secondary-color: #6c757d;
    /* ... outras cores */
}
```

### Conteúdo
- **Textos**: Edite diretamente no `index.php`
- **Imagens**: Substitua as imagens na pasta `public/landscape/`
- **Ícones**: Use classes do Bootstrap Icons (ex: `bi-car-front-fill`)

## 🔧 Configurações

### Apache (.htaccess)
O arquivo `.htaccess` já está configurado com:
- Compressão GZIP
- Cache otimizado
- Headers de segurança
- Redirecionamentos

### PHP
Configurações recomendadas no `php.ini`:
```ini
memory_limit = 256M
max_execution_time = 300
upload_max_filesize = 10M
post_max_size = 10M
```

## 📱 Responsividade

O site é totalmente responsivo e funciona em:
- Desktop (1200px+)
- Tablet (768px - 1199px)
- Mobile (< 768px)

## 🚀 Performance

### Otimizações Implementadas
- **Arquivos Locais**: Bootstrap e ícones baixados localmente
- **Compressão GZIP**: Reduz tamanho dos arquivos
- **Cache Otimizado**: Headers de cache para arquivos estáticos
- **Lazy Loading**: Imagens carregadas sob demanda
- **Minificação**: CSS e JS já minificados

### Métricas Esperadas
- **PageSpeed**: 90+ (Desktop e Mobile)
- **Tempo de Carregamento**: < 2 segundos
- **Tamanho Total**: < 500KB (sem imagens)

## 🔒 Segurança

### Headers Implementados
- X-XSS-Protection
- X-Frame-Options
- X-Content-Type-Options
- Referrer-Policy
- Content-Security-Policy

### Proteções
- Bloqueio de acesso a arquivos sensíveis
- Proteção do diretório vendor
- Validação de formulários

## 📊 Analytics

O site inclui sistema básico de tracking de eventos:
- Cliques em botões
- Visualizações de seções
- Interações com formulários

Para integrar com Google Analytics, edite o arquivo `public/js/app.js`.

## 🛠️ Manutenção

### Atualizações
```bash
# Atualizar Bootstrap
composer update twbs/bootstrap

# Atualizar ícones
composer update twbs/bootstrap-icons
```

### Backup
- Faça backup da pasta `public/` antes de atualizações
- Mantenha backup do `.htaccess` e `index.php`

## 📞 Suporte

Para suporte técnico ou dúvidas:
- **Email**: contato@appestar.com.br
- **Telefone**: (41) 99999-9999

## 📄 Licença

Este projeto é propriedade do appEstar. Todos os direitos reservados.

---

**Desenvolvido com ❤️ para revolucionar o estacionamento digital! 🚗✨**
