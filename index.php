<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Apprendre le HTML</title>
</head>

<body>
    <div class="clickEvent">
        <button id="btn">Appuyez ! </button>
        <br>
        <img src="./pissenlit-fleur-2824.jpg" id="img" alt="">
    </div>

    <header>
        <hgroup>
            <h1 title="Le titre est en latin. Merde!">Calculus I</h1>
            <h2>Fundamentals</h2>
        </hgroup>
        <nav>
            <h1>Ma Barre de menu</h1>
            <ul>
            </ul><a href="demo.php">DEMO</a>
            <a href=""></a>
        </nav>
    </header>
    <section>
        <h1>Les exercices</h1>

        <label for="name">tapez un mot</label>

        <input type="text" id="name" name="name" required minlength="4" maxlength="8" size="10">

        <section>
            <h1></h1>
            <p>The three primary web development technologies are
                <abbr title="Hypertext Markup Language">HTML</abbr>,
                <abbr title="Cascading Stylesheets">CSS</abbr>, and
                JavaScript.
            </p>

        </section>
    </section>

    <footer></footer>

    <script src="js/scripts.js"></script>
</body>

</html>



<?php
$dir = dirname("/etc/passwd") . PHP_EOL; ?>



<?php echo $_SERVER['DOCUMENT_ROOT']; ?>