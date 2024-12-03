
### 📄 Plugin 1: **Custom CSS Class Adder**

# 🎨 Custom CSS Class Adder

## 📄 Descrição do Plugin
Este plugin adiciona automaticamente uma **classe CSS personalizada** chamada `custom-class` a todas as tags `<p>` dentro dos posts do WordPress.  

---

## 🚀 Instruções de Instalação e Ativação

1. 📂 Coloque a pasta do plugin em:  
   `wp-content/plugins/`.
2. 🧩 No painel do WordPress, vá para **wp-admin > Plugins**.
3. ✅ Ative o plugin chamado **"Custom CSS Class Adder"**.

---

## ⚙️ Como Funciona

- Após ativado, o plugin adicionará automaticamente a classe CSS `custom-class` a todas as tags `<p>` nos posts.  
- Exemplo de saída resultante:  
```html
<p class="custom-class">Este é um exemplo de parágrafo.</p>
```

---

## 🛠️ Funções PHP Utilizadas

- `add_filter()`: Aplica a lógica de filtragem no conteúdo dos posts.  
- `preg_replace()`: Adiciona a classe CSS à tag `<p>` no conteúdo.

---

## 📋 Dependências e Requisitos do Servidor

- 🖥️ **PHP**: Suporte a PHP 7.4 ou superior.  
- 🗄️ **Banco de Dados**: MySQL.  
- 🌐 **WordPress**: Versão 5.0 ou superior.  

---

## 🤔 Lógica e Aplicação

### 🧩 Lógica
- Utiliza `preg_replace()` para encontrar todas as tags `<p>` e inserir a classe `custom-class`.  
- A função é conectada ao filtro `the_content` para garantir que as modificações sejam aplicadas apenas ao conteúdo dos posts.  

### 🌟 Aplicação Prática
- Útil para:
  - **Designers** que precisam estilizar tags `<p>` de forma uniforme.  
  - **Desenvolvedores** que desejam simplificar a aplicação de estilos personalizados.  

---

✨ **Personalize o estilo dos seus posts com facilidade!** 🚀  
``` 

