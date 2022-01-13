<?php include './server/server-info.php' ?>

<body class='body-sys'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-2'></div>

            <div class='col-md-8' id='info'>
                <h2>Info du server & Document</h2>
                <?php if (!empty($server)) :?>
                    <?php foreach ($server as $key => $value) :?>
                        <ul class='list-group'>
                            <li class='list-group-item'>
                                <strong><?= $key ?></strong> <?= $value ?>
                            </li>
                        </ul>
                    <?php endforeach ?>
                <?php endif ?>
                
                <br /> <br />

                <h2>Info du client</h2>
                <?php if (!empty($client)) :?>
                    <?php foreach ($client as $key => $value) :?>
                        <ul class='list-group'>
                            <li class='list-group-item'>
                                <strong><?= $key ?></strong> <?= $value ?>
                            </li>
                        </ul>
                    <?php endforeach ?>
                <?php endif ?>
            </div>

            <div class='col-md-2'></div>
        </div>
    </div>
</body>