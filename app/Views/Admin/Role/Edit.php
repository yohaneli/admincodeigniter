
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

                        <?php 
                        
                        $titreForm = "ajout" ; 

                        $bouton = "Ajouter" ;

                        $iconeBouton = "add" ;
                        
                        ?>

<div class="row">
                            <div class="row">
                                <div id="basic-form" class="card card card-default scrollspy">
                                    <div class="card-content">

                                        <form action="<?php echo base_url('admin/role/edit/'.$roles['id_film'].'/'.$roles['id_acteur']) ; ?>" method="POST">
                                        
                                        <!-- Je cache mon champ pour etre sur d'etre dans le mode éditer -->
                                            
                                            <?php if (isset($roles['id_film']) && isset($roles['id_acteur'])) { ?>

                                        <input name='save' value='update' type='hidden'>

                                        <?php 
                                        
                                        $titreForm = "edition" ; 

                                        $bouton = "Editer" ;

                                        $iconeBouton = "edit" ;

                                        ?>
                                               
                                                <?php } else { ?>

                                        <input name='save' value='create' type=hidden>

                                        <?php 
                                        
                                        $titreForm = "ajout" ; 

                                        $bouton = "Ajouter" ;

                                        $iconeBouton = "add" ;

                                        ?>
                                                    
                                                    <?php } ?>
                                                    
                                        <h4 class="card-title"><h3>Formulaire d'<?php echo $titreForm ; ?> d'un rôle</h3></h4>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="nomFilm">
                                                    <option value="">Nom du film</option>
                                                        
                                                        <?php foreach($films as $film) { ?>

                                                            <!-- Pour afficher le film selectionné par défaut -->

                                                            <?php if ($roles['id_film'] == $film['id']) { ?>
                                                    
                                                    <option selected value="<?php echo $film['id'] ;?>"><?php echo " ID du film : ".$film['id']. " Nom du film : ".$film['titre'] ; ?></option>
                                                            
                                                                <?php } else { ?>

                                                    <option value="<?php echo $film['id'] ;?>"><?php echo " ID du film : ".$film['id']. " Nom du film : ".$film['titre'] ; ?></option>

                                                                <?php } ?>
                                                            
                                                            <?php } ?>

                                                    </select>
                                                    <label class="black-text text-darken-2">Selectionnez le nom du film</label>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                            <div class="input-field col s12">
                                                    <select name="nomArtiste" >
                                                    <option value="">Nom de l'artiste</option>
                                                        
                                                        <?php foreach($artistes as $artiste) { ?>

                                                            <?php if ($roles['id_acteur'] == $artiste['id']) { ?>

                                                    <option selected value="<?php echo $artiste['id'] ; ?>"><?php echo "ID de l'acteur : ".$artiste['id']. " Nom de l'acteur : " .$artiste['nom'] ; ?></option>
                                     
                                                                <?php } else { ?>
                                                                    
                                                    <option value="<?php echo $artiste['id'] ; ?>"><?php echo "ID de l'acteur : ".$artiste['id']. " Nom de l'acteur : " .$artiste['nom'] ; ?></option>

                                                                    <?php } ?>

                                                        <?php } ?>
                                                        
                                                    </select>
                                                    <label class="black-text text-darken-2">Selectionnez le nom de l'acteur</label>
                                                </div>
                                            
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" name="nomRole" value="<?php echo $roles['nom_role'] ;?>">
                                                    <label class="black-text text-darken-2">Nom du rôle</label>
                                                </div>
                                            </div>

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light " type="submit" name="action"><?php echo $bouton ; ?>
                                                            <i class="material-icons right"><?php echo $iconeBouton ; ?></i>
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

