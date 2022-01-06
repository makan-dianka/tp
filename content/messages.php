
<?php 

    $messages = [
        array(
            "email" => "machin@truc.bd",
            "message" => "le super message de machin"
        ),
        array(
            "email" => "micro@loge.db",
            "message" => "le message de merde de micro"
        ),
        array(
            "email" => "stephane@gmail.com",
            "message" => "le message de merde de micro"
        )
    ];

?>


<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>

        <div class="col-md-8" id="msg">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Messages</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- partie 1. non recommander-->
                    <?php 
                        foreach ($messages as $msg) {
                            echo "<tr><td>" .  $msg["email"] . "</td><td>". $msg["message"] . "</td></tr>";
                        }
                    ?> 
                    
                    <!-- partie 2. falcultatif -->
                    <?php foreach ($messages as $i => $message) { ?>
                        <tr>
                            <td><?php echo $message['email']; ?></td>
                            <td><?= $message['message'] ?></td>
                        </tr>
                    <?php } ?>

                    
                    <!-- partie 3. recommander -->
                    <?php foreach ($messages as $i => $message) : ?>
                        <tr>
                            <td><?php echo $message['email']; ?></td>
                            <td><?= $message['message'] ?></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>

        <div class="col-md-2">
        </div>
    </div>
</div>