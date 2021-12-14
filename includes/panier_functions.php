<?php

function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['id'] = array(); 
      $_SESSION['panier']['imageurl'] = array(); 
      $_SESSION['panier']['titre'] = array(); 
      $_SESSION['panier']['quantite'] = array();
      $_SESSION['panier']['price'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}

function ajouterArticle($titre,$quantite,$price,$img,$id){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité 
      $positionProduit = array_search($id,  $_SESSION['panier']['id']);

      if ($positionProduit !== false)
      {
         $_SESSION['panier']['quantite'][$positionProduit] += $quantite;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['id'],$id);
         array_push( $_SESSION['panier']['titre'],$titre);
         array_push( $_SESSION['panier']['quantite'],$quantite);
         array_push( $_SESSION['panier']['price'],$price); 
         array_push( $_SESSION['panier']['imageurl'],$img); 
         
      }
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}


function modifierQTeArticle($titre,$quantite){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($quantite > 0)
      {
         //Recharche du produit dans le panier
         $positionProduit = array_search($titre,  $_SESSION['panier']['titre']);

         if ($positionProduit !== false)
         {
            $_SESSION['panier']['quantite'][$positionProduit] = $quantite ;
         }
      }
      else
      supprimerArticle($titre);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function supprimerArticle($titre){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['titre'] = array();
      $tmp['quantite'] = array();
      $tmp['price'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i = 0; $i < count($_SESSION['panier']['titre']); $i++)
      {
         if ($_SESSION['panier']['titre'][$i] !== $titre)
         {
            array_push( $tmp['titre'],$_SESSION['panier']['titre'][$i]);
            array_push( $tmp['quantite'],$_SESSION['panier']['quantite'][$i]);
            array_push( $tmp['price'],$_SESSION['panier']['price'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['titre']); $i++)
   {
      $total += $_SESSION['panier']['quantite'][$i] * $_SESSION['panier']['price'][$i];
   }
   return $total;
}

function supprimePanier(){
   unset($_SESSION['panier']);
}

function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}

function compterArticles(){
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['titre']);
   else
   return 0;
}

?>



