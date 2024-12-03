# 🛠️ Plugin 3: Configuração de URL do GitHub

## 📄 Descrição do Plugin
Este plugin adiciona uma página de configurações no menu **"Configurações"** do painel administrativo do WordPress, onde você pode inserir e salvar a URL do perfil do GitHub.  
➡️ A URL salva será exibida como uma meta tag no `<head>` do site:

```html
<meta name="verify-skills" content="{URL do perfil}" />
```

---

## 🚀 Instruções de Instalação e Ativação

1. 📂 Coloque a pasta do plugin em:  
   `wp-content/plugins/`.
2. 🧩 No painel do WordPress, vá para **wp-admin > Plugins**.
3. ✅ Ative o plugin chamado **"Configuração de URL do GitHub"**.

---

## ⚙️ Instruções de Configuração

1. Acesse o menu **Configurações > GitHub URL** no painel do WordPress.  
2. Insira a URL do perfil do GitHub no campo correspondente.  
3. Clique em **"Salvar Mudanças"** para armazenar a configuração.  

---

## 🛠️ Funções PHP Utilizadas

- `add_options_page()`: Adiciona a página de configurações no menu do WordPress.  
- `register_setting()`: Registra as opções de configuração.  
- `wp_head()`: Adiciona a meta tag no `<head>` do site.

---

## 📋 Dependências e Requisitos do Servidor

- 🖥️ **PHP**: Suporte a PHP 7.4 ou superior.  
- 🗄️ **Banco de Dados**: MySQL.  
- 🌐 **WordPress**: Versão 5.0 ou superior.  

---

## 🤔 Lógica e Aplicação

### 🧩 Lógica
- O plugin utiliza a função `add_options_page()` para criar uma página de configurações no painel administrativo.  
- A função `register_setting()` salva a URL do GitHub de forma segura.  
- Por fim, `wp_head()` é usado para injetar a meta tag contendo a URL no `<head>` do site.

### 🌟 Aplicação Prática
- Este plugin é ideal para sites que desejam vincular seus perfis do GitHub, seja para:
  - **Rastreamento de habilidades**.  
  - **Verificação de credenciais**.  
- Pode ser aplicado em portfólios, sites corporativos ou projetos que exigem uma integração simples com o GitHub.  



