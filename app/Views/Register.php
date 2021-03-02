<div class="row">
        <div class="col s12">
            <div class="container">
                <div id="login-page" class="row">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">

                            <?php /*if(isset($validation)):?>
                                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                                <?php endif; */ ?>
                            <form action="<?= base_url('/register/save'); ?>"  method="post" class="login-form">
                            <div class="row">
                                <div class="input-field col s12">
                                    <h5 class="ml-4">S'inscrire</h5>
                                    <p class="ml-4">Rejoignez notre communauté maintenant ! </p>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">person_outline</i>
                                    <input id="username" type="text"  name="name"  value="<?= set_value('name') ?>">
                                    <label for="username" class="center-align">Saisissez votre nom d'utilisateur</label>
                                    <?php if(isset($validation)):?>
                                    <div class="alert alert-danger">
                                    <span class="red-text text-darken-2"><?= $error = $validation->getError('name'); ?></div>
                                <?php endif;?>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">mail_outline</i>
                                    <input id="email" type="email" name="email" value="<?= set_value('email') ?>">
                                    <label for="email">Saisissez votre adresse mail</label>
                                    <?php if(isset($validation)):?>
                                    <div class="alert alert-danger">
                                    <span class="red-text text-darken-2"><?= $error = $validation->getError('email'); ?></div>
                                <?php endif;?>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password" name="password" type="password">
                                    <label for="password">Saisissez un mot de passe</label>
                                    <?php if(isset($validation)):?>
                                    <div class="alert alert-danger">
                                    <span class="red-text text-darken-2"><?= $error = $validation->getError('password'); ?></div>
                                <?php endif;?>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password-again" name="confpassword" type="password">
                                    <label for="password-again">Confirmez ce mot de passe</label>
                                    <?php if(isset($validation)):?>
                                    <div class="alert alert-danger">
                                    <span class="red-text text-darken-2"><?= $error = $validation->getError('confpassword'); ?></div>
                                <?php endif;?>
                                </div>
                            </div>
                            <div class="row">
                          
                                <div class="input-field col s12">
                                <button class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12" type="submit" >S'inscrire<Button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <p class="margin medium-small"><a href="<?= base_url('login'); ?>">Déjà inscrit? Connectez-vous !</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
