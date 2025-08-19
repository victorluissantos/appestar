#!/bin/bash

# ===== APP ESTAR - TESTE DO SITE =====

echo "🚗 appEstar - Testando Site"
echo "============================"
echo ""

# Verificar se o Docker está rodando
if ! docker info > /dev/null 2>&1; then
    echo "❌ Docker não está rodando!"
    exit 1
fi

# Verificar se os containers estão rodando
if ! docker ps | grep -q "cursos-apache"; then
    echo "❌ Container Apache não está rodando!"
    echo "Execute: docker-compose up -d"
    exit 1
fi

if ! docker ps | grep -q "cursos-php"; then
    echo "❌ Container PHP não está rodando!"
    echo "Execute: docker-compose up -d"
    exit 1
fi

echo "✅ Containers estão rodando"
echo ""

# Testar conexão com o site
echo "🌐 Testando conexão com o site..."
echo "URL: http://localhost:8080"
echo ""

# Testar se o site responde
HTTP_CODE=$(curl -s -o /dev/null -w "%{http_code}" http://localhost:8080)

if [ "$HTTP_CODE" = "200" ]; then
    echo "✅ Site está funcionando! (HTTP $HTTP_CODE)"
    echo ""
    echo "🎉 Acesse: http://localhost:8080"
    echo ""
    echo "📱 Para testar no mobile, use o IP da sua máquina:"
    echo "   http://$(hostname -I | awk '{print $1}'):8080"
else
    echo "❌ Site não está respondendo (HTTP $HTTP_CODE)"
    echo ""
    echo "🔧 Verificando logs..."
    echo ""
    echo "📋 Logs do Apache:"
    docker logs cursos-apache --tail 10
    echo ""
    echo "📋 Logs do PHP:"
    docker logs cursos-php --tail 10
    echo ""
    echo "💡 Possíveis soluções:"
    echo "1. docker-compose down"
    echo "2. docker-compose build --no-cache"
    echo "3. docker-compose up -d"
    echo "4. Verificar se a porta 8080 não está sendo usada"
fi 