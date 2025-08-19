# 🚗 appEstar - Docker Quick Start

## 🚀 Rodar o Site

### 1. Iniciar os Containers
```bash
docker-compose up -d
```

### 2. Verificar Status
```bash
docker-compose ps
```

### 3. Acessar o Site
- **URL**: http://localhost:8080
- **Porta**: 8080 (evita conflito com porta 80)

## 🔧 Solução de Problemas

### Se o site não abrir:

#### Opção 1: Reconstruir containers
```bash
docker-compose down
docker-compose build --no-cache
docker-compose up -d
```

#### Opção 2: Verificar logs
```bash
# Logs do Apache
docker-compose logs apache

# Logs do PHP
docker-compose logs php

# Logs em tempo real
docker-compose logs -f apache
```

#### Opção 3: Verificar portas
```bash
# Ver se a porta 8080 está livre
netstat -tuln | grep :8080

# Ver se a porta 80 está livre
netstat -tuln | grep :80
```

### Se der erro de permissão:
```bash
sudo chown -R $USER:$USER .
```

## 📱 Testar no Mobile

Para testar no celular, use o IP da sua máquina:
```bash
# Descobrir IP
hostname -I

# Acessar no celular
http://SEU_IP:8080
```

## 🛑 Parar os Containers

```bash
docker-compose down
```

## 🔄 Reiniciar

```bash
docker-compose restart
```

## 📊 Status dos Serviços

- **Apache**: Porta 8080 (externa) → 80 (interna)
- **PHP-FPM**: Porta 9000 (interna)
- **MySQL**: Porta 3306 (externa)

## 🎯 URLs Importantes

- **Site Principal**: http://localhost:8080
- **PHP Info**: http://localhost:8080/phpinfo.php (se existir)
- **Status**: http://localhost:8080/status (se existir)

## 🚨 Problemas Comuns

1. **Porta 80 ocupada**: Mudei para 8080 para evitar conflitos
2. **Container não inicia**: Verifique logs com `docker-compose logs`
3. **Site não carrega**: Verifique se Apache e PHP estão rodando
4. **Erro de permissão**: Execute `sudo chown -R $USER:$USER .`

---

**💡 Dica**: Use o script `test-site.sh` para diagnosticar problemas automaticamente! 