<?php
class Livre {
    /**
     * @return array
     */

    public function getLivres(){
        global $oPDO; 
        $oPDOStatement = $oPDO->query("SELECT id, titre, auteur, annee FROM livre ORDER BY id ASC");

        $livres = $oPDOStatement->fetchAll(PDO::FETCH_ASSOC);
        return $livres;
    }

    public function getLivreById($id){
        global $oPDO; 
        $oPDOStatement = $oPDO->prepare("SELECT id, titre, auteur, annee FROM livre WHERE id = :id");
        $oPDOStatement ->bindParam(':id', $id, PDO::PARAM_INT);

        //execution de la requete
        $oPDOStatement->execute();

        //recuperation de resultat
        $livre=$oPDOStatement->fetch(PDO::FETCH_ASSOC);
        return $livre;
    }

    public function ajouterLivre($livre){
        global $oPDO; 

        //preparation de la requete
        $oPDOStatement = $oPDO->prepare('INSERT INTO livre SET titre=:titre, auteur=:auteur, annee=:annee');
        $oPDOStatement ->bindParam(':titre', $livre['titre'], PDO::PARAM_STR);
        $oPDOStatement ->bindParam(':auteur', $livre['auteur'], PDO::PARAM_STR);
        $oPDOStatement ->bindParam(':annee', $livre['annee'], PDO::PARAM_INT);

        //execution de la requete
        $oPDOStatement->execute();

        //tester le nombre de lignes affectees
        if ($oPDOStatement->rowCount() <= 0) {
            return false;
        }
        return $oPDO->lastInsertId();
    }

    public function updateLivreById($id, $livre){
        global $oPDO; 

        $oPDOStatement = $oPDO->prepare('UPDATE livre SET titre=:titre, auteur=:auteur, annee=:annee WHERE id=:id');
        $oPDOStatement->bindParam(':id', $id, PDO::PARAM_INT); 

        $oPDOStatement ->bindParam(':titre', $livre['titre'], PDO::PARAM_STR);
        $oPDOStatement ->bindParam(':auteur', $livre['auteur'], PDO::PARAM_STR);
        $oPDOStatement ->bindParam(':annee', $livre['annee'], PDO::PARAM_INT);

        //execution de la requete
        $livre=$oPDOStatement->fetch(PDO::FETCH_ASSOC);
        return $livre;
    }

    public function deleteLivreById($id){
        global $oPDO; 
        $livre=$this->getLivreById($id);

        if($livre){
            $oPDOStatement = $oPDO->prepare("DELETE FROM livre WHERE id=:id");
            $oPDOStatement->bindParam(':id', $id, PDO::PARAM_INT);
            $oPDOStatement->execute();

            return "Le livre a etait retiré!!";
        }
        else{
            return "Livre non trouvé";
        }
    }

}
