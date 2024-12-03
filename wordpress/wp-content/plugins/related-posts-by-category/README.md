### 📄 Plugin 2: **Related Posts by Category**

# 🔗 Related Posts by Category

## 📄 Descrição do Plugin
Este plugin adiciona um **shortcode** para exibir links de posts relacionados com base na mesma categoria do post atual. Ideal para melhorar a navegação e o engajamento no seu site WordPress.  

---

## 🚀 Instruções de Instalação e Ativação

1. 📂 Coloque a pasta do plugin em:  
   `wp-content/plugins/`.
2. 🧩 No painel do WordPress, vá para **wp-admin > Plugins**.
3. ✅ Ative o plugin chamado **"Related Posts by Category"**.

---

## ⚙️ Como Usar o Shortcode

1. Adicione o shortcode `[related_posts]` em qualquer post ou página onde deseja exibir os links relacionados.  
2. O shortcode exibirá os **5 posts mais recentes** relacionados à mesma categoria do post atual.  

---

## 🛠️ Funções PHP Utilizadas

- `wp_get_post_categories()`: Obtém as categorias associadas ao post atual.  
- `WP_Query()`: Executa uma consulta personalizada para recuperar os posts relacionados.  
- `add_shortcode()`: Registra o shortcode `[related_posts]`.  

---

## 📋 Dependências e Requisitos do Servidor

- 🖥️ **PHP**: Suporte a PHP 7.4 ou superior.  
- 🗄️ **Banco de Dados**: MySQL.  
- 🌐 **WordPress**: Versão 5.0 ou superior.  

---

## 🤔 Lógica e Aplicação

### 🧩 Lógica
- O plugin utiliza `wp_get_post_categories()` para identificar as categorias do post atual.  
- Com `WP_Query()`, busca até **5 posts** dentro das mesmas categorias, excluindo o post atual.  
- Retorna um `<ul>` com links dos posts encontrados.  

### 🌟 Aplicação Prática
- Perfeito para blogs e sites que desejam:
  - **Aumentar o tempo de permanência** no site.  
  - **Melhorar a experiência de navegação** dos usuários.  
  - **Expor mais conteúdo relacionado** automaticamente.  

---

