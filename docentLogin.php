
<main class="container mt-5">
        <div class="row">
            <div class="col" id="login">

            <div class="card-3" id="LoginCard">
                <div class="card-body" >
                <form action="./index.php?content=login_script" method="POST">
                <div class="form-group">
                    <label for="email" id="administratieText"><b>Afkorting</b></label>
                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Voer je Afkorting in">
                </div>

                <div class="form-group">
                    <label for="password" id="administratieText"><b>Wachtwoord</b></label>
                    <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password" placeholder="Voer je wachtwoord in">
                </div>

                <button type="submit" class="btn btn-danger btn-lg btn-block"><b>login</b></button>
            </form>
                </div>
            </div>

        </div>
    </div>
    </main>