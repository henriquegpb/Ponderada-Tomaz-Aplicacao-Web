# Demo AWS RDS + EC2 + Apache + PHP

Aplicação web simples com PHP + MySQL (Amazon RDS) rodando em um EC2 (Amazon Linux 2023).
Inclui:
- **Tabela base `EMPLOYEES`** (do tutorial) e **tabela extra `CLIENTES`** com 5 campos e 4 tipos (INT, VARCHAR, DECIMAL, TIMESTAMP).
- Páginas:
  - `/SamplePage.php` (cria/lista EMPLOYEES)
  - `/clientes.php` (cria/lista CLIENTES)
  - `/index.php` (links de navegação)

## Como reproduzir (resumo)
1. **Criar EC2** (Amazon Linux 2023, t2.micro, habilitar HTTP/HTTPS e SSH) e **RDS MySQL** (db.t3.micro, database inicial `sample`, usuário `tutorial_user`). Conectar o RDS ao EC2 pelo assistente de conectividade do console.
2. **Instalar Apache + PHP + cliente MariaDB** no EC2:
   ```bash
   sudo dnf update -y
   sudo dnf install -y httpd php php-mysqli mariadb105
   sudo systemctl start httpd
   sudo systemctl enable httpd
   sudo usermod -a -G apache ec2-user
   exit
   sudo chown -R ec2-user:apache /var/www
   sudo chmod 2775 /var/www
   find /var/www -type d -exec sudo chmod 2775 {} \;
   find /var/www -type f -exec sudo chmod 0664 {} \;
   ```
3. **Deploy do código**: copie `html` para `/var/www/html` e `inc` para `/var/www/inc`.
4. **Configurar credenciais** em `inc/dbinfo.inc` com o **endpoint** do RDS, usuário e senha.
5. Acesse: `http://SEU_DNS_PUBLICO_EC2/index.php`

## Vídeo (demonstração)
Cole aqui a URL do vídeo (YouTube não listado, por exemplo).  
**URL do vídeo:** [COLE AQUI]

### Roteiro do vídeo sugerido
- Console EC2: instância em **Running**, tipo, SG com portas 80/443/22.
- Console RDS: instância **Available**, engine MySQL, **endpoint** e porta.
- SSH no EC2: `systemctl status httpd`, estrutura em `/var/www`.
- Navegador: `/clientes.php` criando e listando, `/SamplePage.php` funcionando.
- Explicar *deploy*: instalação de pacotes, cópia de arquivos, edição do `dbinfo.inc`.

## Estrutura do repositório
```
inc/dbinfo.inc
html/index.php
html/SamplePage.php
html/clientes.php
scripts/create_clientes_table.sql
```

## Licença
MIT
