<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Jean Forteroche</title>
        <link rel="stylesheet" href="../public/CSS/webfonts.css">
        <link rel="stylesheet" href="../public/CSS/chapitre.css">
        <link rel="stylesheet" href="../public/CSS/theme.css">
        <link rel="stylesheet" href="../public/CSS/header.css">
        <link rel="stylesheet" href="../public/CSS/admin.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0we1xr1faowqwxal60fwo8hupje5a8vwhkcnyezdbfi9ofe5"></script>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <script>tinymce.init({ selector:'textarea' });</script>
    </head>
 
    <body>
    <header>
        <div>
        <h1>Jean Forteroche</h1>
        <p>Auteur et ecrivain</p>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="#administration">ADMINISTRATION</a></li>
                <li><a href="accueil.php">BLOG</a></li>
              
            </ul>
         </nav>
    </header>
    <div id="publication">
    <h3>Poster un billet</h3>
    <input id="titre-billet" type="text" placeholder="Titre du billet">
    <textarea></textarea>
    <button id="bouton-publier" type="submit">publier</button>
    </div>
    <div id="list-billets">
        <h3>Liste des billets</h3>
        <ul>
         <li>chapitre 1
             <small>
                <a href="">Supprimer</a>
            </small></li>
         <li>chapitre 2
             <small>
                <a href="">Supprimer</a>
            </small></li> 
         <li>chapitre 3
             <small>
                <a href="">Supprimer</a>
            </small></li> 
         <li>chapitre 4
             <small>
                <a href="">Supprimer</a>
            </small></li>  
        </ul>

    </div>
    <div id="comments">
        <h3>Commentaires</h3>
        <article>
            <b>Martine</b>
            <span>Le 11/03/2018</span>
            <small>
                <a href="">Supprimer</a>
            </small>
            <p>Super !</p>
            <hr>
        </article>
        <article>
            <b>Martine</b>
            <span>Le 11/03/2018</span>
            <small>
                <a href="">Supprimer</a>
            </small>
            <p>Super !</p>
            <hr>
        </article>
        <article>
            <b>Martine</b>
            <span>Le 11/03/2018</span>
            <small>
                <a href="">Supprimer</a>
            </small>
            <p>Super !</p>
            <hr>
        </article>
    </div>

    </div>
    </body>
</html>