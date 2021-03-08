
<div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <!-- invoice list -->
                    <section class="invoice-list-wrapper section">
                        <!-- create invoice button-->
                        <!-- Options and filter dropdown button-->
                      
                      
                 
                        <div class="responsive-table">
                            <table class="table invoice-data-table white border-radius-4 pt-1">
                                <thead>
                                    <tr>
                                        <!-- data table responsive icons -->
                                        <th></th>
                                        <!-- data table checkbox -->
                                        <th></th>
                                        
                                        <th>ID du film</th>
                                        <th>Titre du film</th>
                                        <th>Année de sortie du film</th>
                                        <th>Titre du film</th>
                                        <th>Réalisateur du film</th>
                                        <th>Genre du film</th>
                                        <th>Résumé du film</th>
                                        <th>Pays du film</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php if (isset($tabFilm)) {  ?>

                                    <?php  foreach ($tabFilm as $film) {  ?>

                                    <?php 
                                    
                                    $artistes = $artistesModel->where('id',$film['id_realisateur'])->first();

                                    //$films = $filmModel->where('id',$tabRole['id_film'])->first();
                                    
                                    //dd($films);
                                    ?>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="app-invoice-view.html"><?php echo $film['id'] ; ?></a>
                                        </td>
                                        <td><span class="invoice-amount"> <?php echo $film['titre'] ; ?> </span></td>
                                        <td><small> <?php echo $film['annee'] ; ?> </small></td> 
                                        <td><small> <?php echo $artistes['nom'] ; ?> </small></td> 
                                        <td><small> <?php echo $film['genre'] ; ?> </small></td>
                                        <td><small> <?php echo $film['resume'] ; ?> </small></td>
                                        <td><small> <?php echo $film['code_pays'] ; ?> </small></td>                             
                                        <td>
                                            <div class="invoice-action">
                                                <a href="<?php echo base_url('admin/film/edit/') ; ?>" class="invoice-action-edit">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="<?php echo base_url('admin/film/delete/') ; ?>" class="invoice-action-view mr-4">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php } ?>

                                    <?php } ?>

                                </tbody>

                                <div class="d-flex justify-content-end">
        
        <?= $pager->links() ?>
        
        
      </div>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>               