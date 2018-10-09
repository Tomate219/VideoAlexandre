<?php require
'menu.php';
?>
<div class=ModifMDP>
  <form class='modifmdp'  method='post'>
    Ancien mot de passe : <input TYPE='password' name='AncMDP'/>
    <br>Nouveau mot de passe : <input TYPE='password' name='NvMDP'/>
    <br>Répeter votre nouveau mot de passe : <input TYPE='password' name='NvMDP2'/>

    <br><br><input class='btn btn-secondary mx-auto' type='submit' value='Validé'/><a href="javascript:history.go(-1)">Retour</a>
  </form>
</div>
