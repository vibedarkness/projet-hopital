 <?php
if (isset($_GET["annee"])) {
   $anne= $_GET['annee'];
    $moi= $_GET['moiss'];


}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery-3.5.1.slim.min.js" ></script>
    <script src="bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <title>Hopital</title>
</head>
<body>
    <?php 
    include 'connexion-db.php';

    include 'nav.php'; ?>
 <div class="report">
    <div>
  
    </div><br><br>

<?php 


                                    /* $query = "SELECT nom_mal FROM rapport GROUP BY nom_mal ";
                                    $result = $conn->query($query);
                                     //$row=$result->mysql_fetch_assoc();
                                    //$row=$resultfetch_assoc();
                                     while ($row = $result->fetch_assoc()){
                                        
                                        $malad=$row['nom_mal'];

                                        echo ;
                                    
                                          }
                                         
                                    
                                   
                                    $conn->close();


                                    include('connexion-db.php');
                                   $query = "SELECT nom_mal, COUNT(nom_mal) AS total FROM rapport WHERE tranche= '5_9ans' AND sexe='masculin'";
                                    $result = $conn->query($query);
                                  
                                    $row=$result->fetch_assoc();
                                    print($row['total']);
                                    foreach ($row as $rows ) {
                                        print($rows) ;
                                    }


                                    $query = "SELECT COUNT(*) AS total FROM rapport WHERE tranche= '5_9ans' AND sexe='masculin' AND nom_mal=".$malad." ";
                                    $result = $conn->query($query);
                                     while ($row = $result->fetch_assoc()){
                                        
                                        echo $row;
                                          }
                                         
                                    
                                   
                                    $conn->close();

 */  


 
 ?>
 <style>
    .on-print{
        display: none;
    }
</style>
<noscript>
    <style>
        .text-center{
            text-align:center;
        }
        .text-right{
            text-align:right;
        }
        table{
            width: 100%;
            border-collapse: collapse
        }
        tr,td,th{
            border:1px solid black;
        }
    </style>
</noscript>


<table class="table table-bordered " style="margin-top: -40px;">
    <thead class="thead-dark">

    <tr>
        <th rowspan="3" class="text-center text-uppercase align-middle">Affectations / Classifications </th>

        <th colspan="21" class="text-center"><h2>
            <?php 

                    $moislettre='';

               switch ($moi) {
                  case 1:
                    $moislettre='janvier';
                    break;
                    case 2:
                    $moislettre='fevrier';
                    break;
                    case 3:
                    $moislettre='mars';
                    break;
                    case 4:
                    $moislettre='avril';
                    break;
                    case 5:
                    $moislettre='mai';
                    break;
                    case 6:
                    $moislettre='juin';
                    break;
                    case 7:
                    $moislettre='juillet';
                    break;
                    case 8:
                    $moislettre='Aout';
                    break;
                    case 9:
                    $moislettre='septembre';
                    break;
                    case 10:
                    $moislettre='octobre';
                    break;
                    case 11:
                    $moislettre='Novembre';
                    break;
                    case 12:
                    $moislettre='Decembre';
                    break;





                   
                  
                  default:
                    # code...
                    break;
                }




             ?>





         <u>Rapport <?php echo $moislettre  ;  ?> &nbsp<?php echo  $anne ;  ?></u></h2>Nombre de nouveaux cas selon les tranches d'âges </th>

    </tr>
    <tr>

        <th colspan="2" class="text-center">0-11 <br>mois</th>
        <th colspan="2" class="text-center">12-59 <br>mois</th>
        <th colspan="2" class="text-center">5-9 <br>ans</th>
        <th colspan="2" class="text-center">10-14 <br>ans</th>
        <th colspan="2" class="text-center">15-19 <br>ans</th>
        <th colspan="2" class="text-center">20-24 <br>ans</th>
        <th colspan="2" class="text-center">25-49 <br>ans</th>
        <th colspan="2" class="text-center">50-59 <br>ans</th>
        <th colspan="2" class="text-center">60 ans et <br>plus</th>
        <th colspan="2" class="text-center">Age <br>ND</th>
        <th class="text-center">Total</th>
    </tr>
    <tr>

        <th class="text-center">M</th>
        <th class="text-center">F</th>
        <th class="text-center">M</th>
        <th class="text-center">F</th>
        <th class="text-center">M</th>
        <th class="text-center">F</th>
        <th class="text-center">M</th>
        <th class="text-center">F</th>
        <th class="text-center">M</th>
        <th class="text-center">F</th>
        <th class="text-center">M</th>
        <th class="text-center">F</th>
        <th class="text-center">M</th>
        <th class="text-center">F</th>
        <th class="text-center">M</th>
        <th class="text-center">F</th>
        <th class="text-center">M</th>
        <th class="text-center">F</th>
        <th class="text-center">M</th>
        <th class="text-center">F</th>
        <th class="text-center"></th>
    </tr>
    </thead>
    <tbody>
        <?php 

                                     include('connexion-db.php');
                                    $query = 'SELECT nom_mal FROM rapport  WHERE  annee="'.$anne.'" AND mois="'.$moi.'"  GROUP BY nom_mal ORDER BY nom_mal' ;
                                    $result = $conn->query($query);
                                     //$row=$result->mysql_fetch_assoc();
                                    //$row=$resultfetch_assoc();
                                     while ($row = $result->fetch_assoc()){
                                        
                                        $malad=$row['nom_mal'];   

                                                       
 ?>
    <tr>


        <td class="text-center"><?php   echo $malad;?> </td>

    <?php 
                                        //include('connexion-db.php');
                                     $query2 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "0_11mois" AND sexe="masculin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result2 = $conn->query($query2);
                                         while ($rows = $result2->fetch_assoc()){ 
                                            $lign=$rows['total'];
                                            //$soustotal += $rows['total'];                              
                                          ?>
        <td class="text-center"><?php echo $lign;?></td>
    <?php  }?>

        <?php 
                                        //include('connexion-db.php');
                                     $query3 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "0_11mois" AND sexe="feminin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result3 = $conn->query($query3);
                                         while ($rows1 = $result3->fetch_assoc()){   
                                            $ligne=$rows1['total'];  
                                            //$soustotal += $rows1['total'];                             
                                          ?>
        <td class="text-center"><?php echo $ligne;?></td>
    <?php  }?>
        <?php 
                                        //include('connexion-db.php');
                                     $query4 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "12_59mois" AND sexe="masculin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result4 = $conn->query($query4);
                                         while ($rows2 = $result4->fetch_assoc()){   
                                            $lign1=$rows2['total']; 
                                            //$soustotal += $rows2['total'];                              
                                          ?>
        <td class="text-center"><?php echo $lign1;?></td>
    <?php  }?>

    <?php 
                                        //include('connexion-db.php');
                                     $query5 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "12_59mois" AND sexe="feminin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result5 = $conn->query($query5);
                                         while ($rows3 = $result5->fetch_assoc()){   
                                            $lign2=$rows3['total'];  
                                            //$soustotal += $rows3['total'];                             
                                          ?>
        <td class="text-center"><?php echo $lign2;?></td>
    <?php  }?>

        <?php 
                                        //include('connexion-db.php');
                                     $query6 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "5_9ans" AND sexe="masculin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result6 = $conn->query($query6);
                                         while ($rows4 = $result6->fetch_assoc()){   
                                            $lign3=$rows4['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign3;?></td>
    <?php  }?>

    <?php 
                                        //include('connexion-db.php');
                                     $query7 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "5_9ans" AND sexe="feminin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result7 = $conn->query($query7);
                                         while ($rows5 = $result7->fetch_assoc()){   
                                            $lign4=$rows5['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign4;?></td>
    <?php  }?>

        <?php 
                                        //include('connexion-db.php');
                                     $query8 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "10_14ans" AND sexe="masculin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result8 = $conn->query($query8);
                                         while ($rows6 = $result8->fetch_assoc()){   
                                            $lign5=$rows6['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign5;?></td>
    <?php  }?>

        <?php 
                                        //include('connexion-db.php');
                                     $query9 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "10_14ans" AND sexe="feminin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result9 = $conn->query($query9);
                                         while ($rows7 = $result9->fetch_assoc()){   
                                            $lign6=$rows7['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign6;?></td>
    <?php  }?>

            <?php 
                                        //include('connexion-db.php');
                                     $query10 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "15_19ans" AND sexe="masculin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result10 = $conn->query($query10);
                                         while ($rows8 = $result10->fetch_assoc()){   
                                            $lign7=$rows8['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign7;?></td>
    <?php  }?>

               <?php 
                                        //include('connexion-db.php');
                                     $query11 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "15_19ans" AND sexe="feminin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result11 = $conn->query($query11);
                                         while ($rows9 = $result11->fetch_assoc()){   
                                            $lign8=$rows9['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign8;?></td>
    <?php  }?>

               <?php 
                                        //include('connexion-db.php');
                                     $query12 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "20_24ans" AND sexe="masculin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result12 = $conn->query($query12);
                                         while ($rows10 = $result12->fetch_assoc()){   
                                            $lign9=$rows10['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign9;?></td>
    <?php  }?>

               <?php 
                                        //include('connexion-db.php');
                                     $query13 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "20_24ans" AND sexe="feminin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result13 = $conn->query($query13);
                                         while ($rows11 = $result13->fetch_assoc()){   
                                            $lign10=$rows11['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign10;?></td>
    <?php  }?>

        <?php 
                                        //include('connexion-db.php');
                                     $query14 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "25_49ans" AND sexe="masculin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result14 = $conn->query($query14);
                                         while ($rows12 = $result14->fetch_assoc()){   
                                            $lign11=$rows12['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign11;?></td>
    <?php  }?>

            <?php 
                                        //include('connexion-db.php');
                                     $query15 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "25_49ans" AND sexe="feminin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result15 = $conn->query($query15);
                                         while ($rows13 = $result15->fetch_assoc()){   
                                            $lign12=$rows13['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign12;?></td>
    <?php  }?>

    <?php 
                                        //include('connexion-db.php');
                                     $query16 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "50_59ans" AND sexe="masculin" AND annee="'.$anne.'" AND mois="'.$moi.'"  AND nom_mal= "'.$malad.'"';
                                      $result16 = $conn->query($query16);
                                         while ($rows14 = $result16->fetch_assoc()){   
                                            $lign13=$rows14['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign13;?></td>
    <?php  }?>

    <?php 
                                        //include('connexion-db.php');
                                     $query17 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "50_59ans" AND sexe="feminin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result17 = $conn->query($query17);
                                         while ($rows15 = $result17->fetch_assoc()){   
                                            $lign14=$rows15['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign14;?></td>
    <?php  }?>

        <?php 
                                        //include('connexion-db.php');
                                     $query18 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "60ansplus" AND sexe="masculin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result18 = $conn->query($query18);
                                         while ($rows16 = $result18->fetch_assoc()){   
                                            $lign15=$rows16['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign15;?></td>
    <?php  }?>

        <?php 
                                        //include('connexion-db.php');
                                     $query19 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "60ansplus" AND sexe="feminin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result19 = $conn->query($query19);
                                         while ($rows17 = $result19->fetch_assoc()){   
                                            $lign16=$rows17['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign16;?></td>
    <?php  }?>

     <?php 
                                        //include('connexion-db.php');
                                     $query20 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "AgeNd" AND sexe="masculin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result20 = $conn->query($query20);
                                         while ($rows18 = $result20->fetch_assoc()){   
                                            $lign17=$rows18['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign17;?></td>
    <?php  }?>

     <?php 
                                        //include('connexion-db.php');
                                     $query21 = 'SELECT COUNT(*) AS total FROM rapport WHERE tranche= "AgeNd" AND sexe="feminin" AND annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $result21 = $conn->query($query21);
                                         while ($rows19 = $result21->fetch_assoc()){   
                                            $lign18=$rows19['total'];                               
                                          ?>
        <td class="text-center"><?php echo $lign18;?></td>
    <?php  }?>


<?php 
                                        //include('connexion-db.php');
                                     $queryTotaux = 'SELECT COUNT(*) AS total FROM rapport WHERE annee="'.$anne.'" AND mois="'.$moi.'" AND nom_mal= "'.$malad.'"';
                                      $resultTotaux = $conn->query($queryTotaux);
                                         while ($rowsTotaux = $resultTotaux->fetch_assoc()){ 
                                            $soustotal=$rowsTotaux['total'];
                                          ?>
                            <td class="text-center font-weight-bold"><?php echo $soustotal; ?></td>
    <?php  }?>
        
    </tr>
<?php  } ?>

    </tbody>
</table>
<br><br>
                    <div class="row">
                            <div class="col-md-12 mb-2">
                            <button onclick="window.print();" class="btn btn-primary" id="print-btn">PDF</button>
                            </div>
                        </div>
</div>


</body>
</html>

<!-- <script>
    $('#print').click(function(){
        var _style = $('noscript').clone()
        var _content = $('#report').clone()
        var nw = window.open("","_blank","width=800,height=700");
        nw.document.write(_style.html())
        nw.document.write(_content.html())
        nw.document.close()
        nw.print()
        setTimeout(function(){
        nw.close()
        },500)
    })
    $('#filter-report').submit(function(e){
        e.preventDefault()
        location.href = 'index.php?page=payment_report&'+$(this).serialize()
    })
</script>
 -->

<?php  //SELECT COUNT(*) FROM rapport WHERE nom_mal= 'covid19' AND date_rap BETWEEN "2021-05-24" AND "2021-05-30";
?>