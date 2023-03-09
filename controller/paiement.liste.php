<?php

$arr_list = array('data' => array());
if(isset($_SESSION['_ccgim_201'])  and isset($_SESSION['myformkey']) and isset($_POST['token']) and $_SESSION['myformkey'] == $_POST['token']){

$liste = $tresorerie->getPaiementByUserIdJoin($_SESSION['_ccgim_201']['id_utilisateur']);
while($dats = $liste->fetch()){

    $datLgts = $logement->getLogementById($dats['lgt_id'])->fetch();
    $test = 1;
    if($dats['type_transac'] == 1){
        $debit = $dats['debit_transac'];
        $credit = 0;
        $mont = $debit + $credit;
        $montant = '<span class="badge-green"><b> + '. number_format($mont,0,',',' ').'</b> </span>';
    }else{
        $debit = 0;
        $credit = $dats['credit_transac'];
        $mont = $debit + $credit;
        $montant = '<span class="badge-red"><b> - '. number_format($mont,0,',',' ').'</b> </span>';
    }
    $action = '<a href="'.$domaine.'/facture/'.$dats['ref_paiement'].'" class="btn-voir"> <i class="fa fa-print"></i></a>';
    $arr_list['data'][] = array(
        date_fr($dats['date_tresorerie']),
        html_entity_decode(stripslashes($datLgts["nom_lgt"])),
        html_entity_decode(stripslashes($dats["libelle_transac"])),
        $montant,
        $action

    );
}



}
echo json_encode($arr_list);