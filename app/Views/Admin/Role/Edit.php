
<div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <!-- invoice list -->
                    <section class="invoice-list-wrapper section">
                        <!-- create invoice button-->
                        <!-- Options and filter dropdown button-->
                      
                        <!-- create invoice button-->
                        <div class="invoice-create-btn">
                            <a href="app-invoice-add.html" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                                <i class="material-icons">add</i>
                                <span class="hide-on-small-only">Create User</span>
                            </a>
                        </div>
                 
                        <!-- mon formulaire -->
<br><br>
<div class="row">
                            <div class="row">
                                <div id="basic-form" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title"><h3>Formulaire d'édition d'un rôle</h3></h4>
                                        <form action="<?php// echo base_url('admin/artiste/edit/'.$artiste['id']) ; ?>" method="POST">
                                        
                                        <!-- Je cache mon champ pour etre sur d'etre dans le mode éditer -->
                                            
                                            <?php //if (isset($artiste['id'])) { ?>

                                        <input name='save' value='update' type='hidden'>
                                               
                                                <?php //} else { ?>

                                        <input name='save' value='create' type=hidden>
                                                    
                                                    <?php //} ?>
                                            
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" name="nom" value="<?php //echo $artiste['nom'] ; ?>">
                                                    <label for="fn">Nom du Film</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" name="prenom" value="<?php //echo $artiste['prenom'] ; ?>">
                                                    <label for="fn">Nom de l'acteur</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="number" name="annee" value="<?php //echo $artiste['annee_naissance'] ; ?>">
                                                    <label for="fn">Nom du rôle</label>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light " type="submit" name="action">Editer
                                                            <i class="material-icons right">send</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
  </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>               