<?php require'menu.php';
?>
<div class=ModifMDP>
  <form class='modifmdp'  method='post'>
    <input class='btn btn-secondary mx-auto' type='submit' value='Mettre à jour dateAbo' name="MAjDate"/>
    <br>  <br>  <br>


  <mi style="color:#FFFFFF";>
    Ancien mot de passe : <input TYPE='password' name='AncMDP'/>
    <br>Nouveau mot de passe : <input TYPE='password' name='NvMDP'/>
    <br>Répeter votre nouveau mot de passe : <input TYPE='password' name='NvMDP2'/>
  </mi>
    <br><br><input class='btn btn-secondary mx-auto' type='submit' value='Validé'/><a href="javascript:history.go(-1)">   Retour</a>
  </form>
</div>
