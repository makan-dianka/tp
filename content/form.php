<!-- form -->
<div class="row">
    <div class="col-md-4">
    </div>

    <div class="col-md-4" id="form-bwb">
        <h2>Se connecter</h2>
        <form method="POST" action="/functions/traitement.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Message</label>
                <textarea name="message" type="text" class="form-control" id="exampleInputPassword1"></textarea>
            </div>


            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
    </div>

    <div class="col-md-4">
    </div>
</div>
</div>