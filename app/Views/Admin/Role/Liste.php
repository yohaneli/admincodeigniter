
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
                                        
                                        <th>Nom du film (ID)</th>
                                        <th>Nom de l'acteur (ID)</th>
                                        <th>Nom du role</th>
                                        
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php if (isset($tabRoles)) {  ?>

                                    <?php  foreach ($tabRoles as $tabRole) {  ?>

                                    <?php 
                                    
                                    $artistes = $artistesModel->where('id',$tabRole['id_acteur'])->first();

                                    $films = $filmModel->where('id',$tabRole['id_film'])->first();
                                    
                                    //dd($films);
                                    ?>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="app-invoice-view.html"><?php echo $films['titre'] ; ?></a>
                                        </td>
                                        <td><span class="invoice-amount"> <?php echo $artistes['nom'] ; ?> </span></td>
                                        <td><small> <?php echo $tabRole['nom_role'] ; ?> </small></td>                                        
                                        <td>
                                            <div class="invoice-action">
                                                <a href="<?php echo base_url('admin/role/edit/') ; ?>" class="invoice-action-edit">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="<?php echo base_url('admin/role/delete/') ; ?>" class="invoice-action-view mr-4">
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