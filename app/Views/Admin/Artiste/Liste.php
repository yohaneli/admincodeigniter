
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
                                        <th>
                                            <span>ID</span>
                                        </th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Année de naissance</th>
                                        <th>Image de l'artiste</th>
                                        <th>Nombre de films</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php if (isset($tabArtistes)) {  ?>

                                    <?php  foreach ($tabArtistes as $tabArtiste) {  ?>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="app-invoice-view.html"><?php echo $tabArtiste['id'] ; ?></a>
                                        </td>
                                        <td><span class="invoice-amount"> <?php echo $tabArtiste['nom'] ; ?> </span></td>
                                        <td><small> <?php echo $tabArtiste['prenom'] ; ?> </small></td>
                                        <td><span class="invoice-customer"> <?php echo $tabArtiste['annee_naissance'] ; ?> </span></td>
                                        <td> 
                                        
                                                <?php if (!empty($tabArtiste['ArtisteImage'])) { ?>

                                                    <img src="/imagesmin/<?php echo $tabArtiste['ArtisteImage'] ; ?>">

                                                <?php } ?>
                                        
                                         </td>
                                        <td>
                                            <span class="bullet green"></span>
                                            <small> </small>
                                        </td>
                                        <td>
                                            <div class="invoice-action">
                                                <a href="<?php echo base_url('admin/artiste/edit/'.$tabArtiste['id']) ; ?>" class="invoice-action-edit">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="<?php echo base_url('admin/artiste/delete/'.$tabArtiste['id']) ; ?>" class="invoice-action-view mr-4">
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