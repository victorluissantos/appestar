#!/bin/bash

# ===== APP ESTAR - SCRIPT DE INSTALAÇÃO =====

echo "🚗 appEstar - Instalação Automatizada"
echo "======================================"
echo ""

# Verificar se o Composer está instalado
if ! command -v composer &> /dev/null; then
    echo "❌ Composer não encontrado!"
    echo "Por favor, instale o Composer primeiro:"
    echo "https://getcomposer.org/download/"
    exit 1
fi

echo "✅ Composer encontrado"
echo ""

# Verificar se o PHP está instalado
if ! command -v php &> /dev/null; then
    echo "❌ PHP não encontrado!"
    echo "Por favor, instale o PHP 7.4+ primeiro"
    exit 1
fi

# Verificar versão do PHP
PHP_VERSION=$(php -r "echo PHP_VERSION;")
PHP_MAJOR=$(echo $PHP_VERSION | cut -d. -f1)
PHP_MINOR=$(echo $PHP_VERSION | cut -d. -f2)

if [ "$PHP_MAJOR" -lt 7 ] || ([ "$PHP_MAJOR" -eq 7 ] && [ "$PHP_MINOR" -lt 4 ]); then
    echo "❌ Versão do PHP muito antiga: $PHP_VERSION"
    echo "É necessário PHP 7.4 ou superior"
    exit 1
fi

echo "✅ PHP $PHP_VERSION encontrado"
echo ""

# Criar diretórios necessários
echo "📁 Criando diretórios..."
mkdir -p public/css
mkdir -p public/js
mkdir -p public/fonts
mkdir -p public/images

echo "✅ Diretórios criados"
echo ""

# Instalar dependências do Bootstrap
echo "📦 Instalando Bootstrap e dependências..."
composer install --no-dev --optimize-autoloader

if [ $? -eq 0 ]; then
    echo "✅ Dependências instaladas com sucesso"
else
    echo "❌ Erro ao instalar dependências"
    exit 1
fi

echo ""

# Verificar se os arquivos foram copiados
echo "🔍 Verificando arquivos..."
if [ -f "public/css/bootstrap.min.css" ]; then
    echo "✅ Bootstrap CSS copiado"
else
    echo "❌ Bootstrap CSS não encontrado"
fi

if [ -f "public/js/bootstrap.bundle.min.js" ]; then
    echo "✅ Bootstrap JS copiado"
else
    echo "❌ Bootstrap JS não encontrado"
fi

if [ -f "public/css/bootstrap-icons.css" ]; then
    echo "✅ Bootstrap Icons CSS copiado"
else
    echo "❌ Bootstrap Icons CSS não encontrado"
fi

if [ -f "public/fonts/bootstrap-icons.woff2" ]; then
    echo "✅ Bootstrap Icons font copiado"
else
    echo "❌ Bootstrap Icons font não encontrado"
fi

echo ""

# Definir permissões
echo "🔐 Configurando permissões..."
chmod 755 public/css
chmod 755 public/js
chmod 755 public/fonts
chmod 755 public/images
chmod 644 .htaccess
chmod 644 index.php

echo "✅ Permissões configuradas"
echo ""

# Verificar estrutura final
echo "📋 Estrutura do projeto:"
echo "appestar/"
echo "├── index.php"
echo "├── composer.json"
echo "├── .htaccess"
echo "├── README.md"
echo "├── public/"
echo "│   ├── css/"
echo "│   ├── js/"
echo "│   ├── fonts/"
echo "│   └── images/"
echo "└── vendor/"
echo ""

# Verificar se o servidor web está rodando
echo "🌐 Verificando servidor web..."
if command -v apache2 &> /dev/null || command -v httpd &> /dev/null; then
    echo "✅ Apache encontrado"
    echo "💡 Certifique-se de que o mod_rewrite está habilitado:"
    echo "   sudo a2enmod rewrite"
    echo "   sudo systemctl restart apache2"
elif command -v nginx &> /dev/null; then
    echo "✅ Nginx encontrado"
    echo "💡 Configure o Nginx para usar o arquivo .htaccess"
else
    echo "⚠️  Servidor web não encontrado"
    echo "💡 Instale Apache ou Nginx para servir o site"
fi

echo ""

# Instruções finais
echo "🎉 Instalação concluída com sucesso!"
echo ""
echo "📝 Próximos passos:"
echo "1. Configure seu servidor web para apontar para esta pasta"
echo "2. Acesse o site no seu navegador"
echo "3. Personalize o conteúdo editando o index.php"
echo "4. Substitua as imagens na pasta public/landscape/"
echo ""
echo "🔧 Para desenvolvimento local, você pode usar:"
echo "   php -S localhost:8000"
echo ""
echo "📚 Consulte o README.md para mais informações"
echo ""
echo "🚗 appEstar - Transformando o estacionamento digital! ✨" 