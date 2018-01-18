<?php
/**
 * Created by PhpStorm.
 * User: jdabricot
 * Date: 18/01/18
 * Time: 17:52
 */

require 'header.php';
require 'Publish.php';
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="row">
                    <div class="row">
                        <form class="col s12" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="title" id="title" type="text" class="validate">
                                    <label for="titre">Titre</label>
                                </div>
                                <div class="input-field col s12">
                                    <textarea id="content" class="materialize-textarea" name="content" type="text" class="validate"></textarea>
                                    <label for="content">Contenu</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light" type="submit" name="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>