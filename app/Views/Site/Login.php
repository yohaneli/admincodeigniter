 <div class="row">
        <div class="col s12">
            <div class="container">
                <div id="login-page" class="row">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                   

                        <form action="<?= base_url('/login/connect'); ?>"  class="login-form" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <h5 class="ml-4">Connectez-vous</h5>
          												                      </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">person_outline</i>
                                    <input  type="email"  name="email"  value="">
                                    <label for="email" class="center-align">Saisissez votre adresse mail</label>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input type="password" name="password" value="">
                                    <label for="password">Saisissez votre mot de passe</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12 ml-2 mt-1">
                                    <p>
                                        <label>
                                            <input type="checkbox" />
                                            <span>Se souvenir de moi</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                <button class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12" type="submit" >Se connecter</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin medium-small"><a href="<?= base_url('register'); ?>">S'inscrire !</a></p>
                                </div>
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin right-align medium-small"><a href="user-forgot-password.html">Mot de passe oublié ?</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
