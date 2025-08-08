<!DOCTYPE html>
<html lang="pt-PT">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacto | Esteves.Tattoo</title>
        <link rel="stylesheet" href="/projetofinal/css/style.css">
    </head>
    <body>
        <header class="navbar">
            <a href="index.html" class="logo">
                <img src="imagens/logomedusa.png" alt="Logo Esteves Tattoo">
                <span>Esteves.Tattoo</span>
            </a>
           <nav>
               <ul>
                  <li><a href="galeria.html" class="botoes">Galeria</a></li>
                  <li><a href="about.html" class="botoes">Acerca de</a></li>
                  <li><a href="contact.php" class="botoes">Contacto</a></li>
               </ul>
           </nav>
        </header>

        <main class="contact-wrapper">
          <div class="contact-page">
             <h1>Contacta-me</h1>
             <form action="processa_contacto.php" method="POST">
                 <label for="nome">Nome:</label>
                 <input type="text" id="nome" name="nome" required>

                 <label for="email">Email:</label>
                 <input type="email" id="email" name="email" required>

                 <label for="mensagem">Mensagem:</label>
                 <textarea id="mensagem" name="mensagem" rows="6" required></textarea>

                 <button type="submit">Enviar Mensagem</button>
             </form>
          </div>
        </main>
    </body>
</html>