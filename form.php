
        <div class="row">            
                <div class="offset-lg-3 col-lg-6" id="blockContact">
                    <div class="section noprint">
                        <h2 class="section-title ct1">Contactez-moi</h2>

                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            Tous les champs de saisie doivent être remplis avant d'envoyer votre courriel.
                        </div>


                        <form method="post" action="donnees.php" class="well form-horizontal">
                            <fieldset>
                                <legend><h4 class="ct1"> Adressez-moi un message en utilisant le formulaire ci-dessous :</h4></legend>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName" class="ct2">Nom</label>
                                        <input type="text" name="nom" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail" class="ct2">email</label>
                                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSujet" class="ct2">Sujet</label>
                                    <input type="text" name="sujet" class="form-control" id="inputSujet" placeholder="Sujet">
                                </div>

                                <div class="form-group">
                                    <label for="inputMessage" class="ct2">Message:</label>
                                    <textarea name="msg" class="form-control"  rows="5" id="inputMessage" placeholder="Message"></textarea>
                                </div>
                                
                    </div>
                   
                 </fieldset>
                    </form>
                    <button class="btn btn-primary" id="button">Sign in</button>
                </div>                
            </div>
        </div>