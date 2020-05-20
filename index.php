<?php include __DIR__ . '/partials/template/faq.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Faq</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>



<header>
    <div class="logo">
            <img src="img/google_logo.png" alt="">
            <h1>Privacy e termini</h1>
    </div>

    <div class="header-menu">
        <div class="header-menu-left">
            <ul>
                <li> <a href="#">Introduzione<a> </li>
                <li> <a href="#">Norme sulla privacy<a> </li>
                <li> <a href="#">Termini di servizio<a> </li>
                <li> <a href="#">Tecnologie<a> </li>
                <li class="active"> <a href="#">Domande frequenti<a> </li>
            </ul>
        </div>
        <div class="header-menu-right">
            <span>Account Google</span>
        </div>
    </div>
</header>
<main>
<?php   foreach ($faqs as $faq) { ?>
            <div> <h2 class="question"> <?php echo $faq['question'];  ?>  </h2> </div>
            <div> <p class="answer"><?php echo $faq['answer']; ?></p> </div>
<?php   }
?>
</main>
<footer>
    <div class="footer-menu">
        <div class="footer-menu-left">
            <ul>
                <li>Google</li>
                <li>Tutto su Google</li>
                <li>Privacy</li>
                <li>Termini</li>
            </ul>
        </div>
        <div class="footer-menu-right">
            <label for="language"><i class="fas fa-language"></i></label>
           <select id="language">
               <option value="italiano">Italiano</option>
               <option value="italiano">Inglese</option>
               <option value="italiano">Francese</option>
           </select> 
        </div>
    </div>
</footer>
    
</body>
</html>