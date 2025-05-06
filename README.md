# IP Logger com Interface Fake e Envio por E-mail

Este projeto foi desenvolvido para fins educativos e demonstra como capturar IPs públicos de visitantes que acessam um link, usando uma interface HTML disfarçada e envio automático dos dados por e-mail.

## Funcionalidades

- Captura o IP do visitante.
- Registra o navegador (User-Agent).
- Salva os dados localmente em `ips.txt`.
- Envia automaticamente as informações por e-mail via SMTP (PHPMailer).
- Interface visual simulando um botão de “Baixar Currículo”.

## Tecnologias Usadas

- PHP
- HTML + CSS
- Ngrok
- PHPMailer
- Kali Linux

## Como Rodar

1. Instale o PHPMailer (via `apt` ou GitHub).
2. Configure seu e-mail e senha de app no `index.php`.
3. Rode o servidor:
   ```bash
   php -S 127.0.0.1:3333
   ```
4. Rode o Ngrok:
   ```bash
   ngrok http 3333
   ```
5. Envie o link e aguarde os acessos. Os IPs serão registrados e enviados por e-mail.

## Autor

Felipe de Almeida Fragoso  
Email: felipefragoso2025@gmail.com
