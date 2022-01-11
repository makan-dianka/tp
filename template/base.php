<!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Decouvert PHP</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <?php
                
                $path = "./content";
                $navElements = scandir($path);

                for($i = 2; $i < count($navElements); $i++):
                    $navElement = str_replace(".php", "", $navElements[$i]); ?>
                    <li class='nav-item'>
                        <a class='nav-link active' aria-current='page' href='./?page=<?=$navElement?>'> <?=$navElement?></a>
                    </li>
                <?php endfor ?>                

            </ul>
            
            <?php if (isset($_SESSION["dataUsers"])) : ?>
               
                <?= "<h5 style='margin:15px'>Hello {$_SESSION['dataUsers'][0]['nom']}</h5>"; ?>
                <?="<a href='./sessions/destroy.php' class='btn btn-primary' style='margin-right: 50px;'>Deconxion</a>"; ?>

            <?php elseif (isset($_COOKIE["nom"])) : ?>
                
            <?php else : ?>
                <p class="login"><a href="./auth/login.php" class="btn btn-primary">Connexion</a></p>
                <p class="login mini-space"><a href="./auth/registration.php" class="btn btn-primary">Registration</a></p>
            <?php endif ?>


        </div>
    </div>
</nav>