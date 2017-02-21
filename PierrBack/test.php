<?php
session_start();
require 'db.class.php';
$bdd = new DB();

    /*
    **********************************
    *  GENERE UNE FICHE RECAPITULATIVE  *
    **********************************
    */
?>
<?php
if(isset($_POST['ajouter_recap'])){
    
        //DATE DEBUT 
        $beginDate = $_POST['datedebut'];

        //DATE FIN 
        $endDate = $_POST['datefin'];
}
$factures = $bdd->query('SELECT * FROM facture WHERE date_facture BETWEEN "'.$beginDate.'" and "'.$endDate.'"');
ob_start();
?>
<style type="text/css">
<!--
table
{
    width:  100%;
    border:none;
    border-collapse: collapse;
}
th
{
    text-align: center;
    border: solid 1px #eee;
    background: #f8f8f8;
}
td
{
    text-align: center;
    color:#015da8;      
    
}
.dataTable td{
padding:10px 5px;
background-color:#efefef;
}
.dataTable th{
padding:10px 5px;
}
-->
</style>
<page style="font-size: 12pt" backimg="./images/sign.png" backimgy="bottom">
    <table cellspacing="0" style="width: 100%; text-align: center; font-size: 14px">
        <tr>
            <td style="width: 25%; color: #444444;">
                <img style="width: 100%;" src="img/avatar3.png" alt="Logo"><br><br>
                LABORATOIRE ORTHOSUD
            </td>
            <td style="width: 75%;">
            <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%;text-align:left; "></td>
            <td style="width:36%">Mr VIDAL Vivien</td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%;text-align:left; "></td>
            <td style="width:36%">
                16 rue Michel de Cubière<br>
                30 000 Nîmes<br>
            </td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%;text-align:left; "></td>
            <td style="width:36%">N° 06 17 21 36 28</td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%;text-align:left; "></td>
            <td style="width:36%">www.laboratoireorthosud.fr</td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%;text-align:left; "></td>
            <td style="width:36%">SIRET:81102402500017</td>
        </tr>
 </table>
      
</td>
 </tr>
</table>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left;font-size: 10pt">
        <tr>
            <td style="width:50%;"></td>
            <td style="width:50%; ">Période du <? echo $beginDate; ?> au <? echo $endDate; ?> </td> 
        </tr>
    </table>
    <br>
    <br>
    <br>
    <br>
    Récapitulatif : <br />
    <br>
    <table class="dataTable" cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 25%">N° facture</th>
            <th style="width: 25%">Date d'édition</th>
            <th style="width: 25%">Nom du praticien</th>
            <th style="width: 25%">Montant</th>
        </tr>
    </table>
    <?php 
    $total = '0';
       $factures = $bdd->query('SELECT * FROM facture WHERE date_facture BETWEEN "'.$beginDate.'" and "'.$endDate.'"');
       foreach ($factures as $facture):
    $total = $facture->chiffre + $total;
?>
    <table class="dataTable" cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <td style="width: 25%"><? echo $facture->id; ?></td>
            <td style="width: 25%"><? echo $facture->date_facture; ?></td>
            <td style="width: 25%;"><? echo $facture->nom_praticien; ?></td>
            <td style="width: 25%;"><? echo $facture->chiffre; ?>€</td>
        </tr>
    </table>
<?php endforeach?>
    <table>
        <tr>
       <th style="width: 25%;"></th>
       <th style="width: 25%;"></th>
            <th style="width: 25%;">Total Pour la prériode  :</th>
            <th style="width: 25%;"><? echo $total; ?> &euro;</th>
        </tr>
    </table>
</page>
<br /><br /><br /><br /><br />
Cordialement,
<br /><br /><br /><br />
Vivien Vidal.
<?php 
    $content = ob_get_clean();
    require("html2pdf/html2pdf.class.php");
    try
    {
        $html2pdf = new HTML2PDF("P", "A4", "fr");
       
        $html2pdf->setDefaultFont("Arial");
        $html2pdf->writeHTML($content);
        $html2pdf->Output("recap.pdf");
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>
