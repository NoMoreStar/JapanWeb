<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ricerca Terremoti</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="LogoJapan.png">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">



        <!--<link rel="stylesheet" href="assets/css/materialize.css">-->
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- For navmenu css -->
        <link rel="stylesheet" href="assets/css/navmenu.css" />

        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <!--Theme Colors css-->
        <link rel="stylesheet" href="assets/css/white.css">



        <!--Old browser  JS-->
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>
<body>
	<div class="main_figur">
            <div class="container">
                <div class="div-menu">
                    <header class="cd-header">
                        <a href="index.html" class="brand-logo text-left"><img src="assets/images/LogoJapan.png" alt="" /></a>
                       <a class="cd-menu-trigger" href="Ricerca.html"><span></span></a>
                    </header>
                </div>
           	</div>
    </div>
    <section id="service" class="service colorsbg">
                <div class="container">
                    <div class="row">
                        <div class="main_service_area text-center padding-bottom-80">
                            <div class="head_title text-center wow fadeInUp">
                            
                           		<table>
                                <caption>Terremoti</caption>
                                	<thead>
                                	<tr>
                                    	<th>
                                        	Codice Terremoto
                                		</th>
                                        <th>
                                        	Luogo
                                        </th>
                                        <th>
                                        	Magnitudo
                                        </th>
                                        <th>
                                        	Tsunami
                                        </th>
                                	</tr>
                                    </thead>
                               	<?php
                                    $host = "localhost";
                                    $user = "infoterremotijapan";
                                    $db = "my_infoterremotijapan";
                                    $password = "";
                                    $lu = $_POST['Luogo'];
                                    $magn = $_POST['Magnitudo'];
                                    $tsu = $_POST['tsunami'];
                                 //ricerca per luogo
                                 if($lu!=""){
                                    try {

                                        $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
                                        $connessione->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                                        
                                        $query = $connessione->query("SELECT CodiceT,Luogo,Magnitudo,Tsunami FROM Terremoto WHERE Luogo ='$lu' ");

                                        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                        $CodiceT = $row['CodiceT'];
                                        $Luogo = $row['Luogo'];
                                        $Magnitudo = $row['Magnitudo'];
                                        $Tsunami = $row['Tsunami'];
                                        echo "<tr>";
                                      	echo "<td>";
                                      		echo $CodiceT;
                                      	echo "</td>";
                                        echo "<td>";
                                      		echo $Luogo;
                                      	echo "</td>";
                                        echo "<td>";
                                      		echo $Magnitudo;
                                      	echo "</td>";
                                        echo "<td>";
                                      		echo $Tsunami;
                                      	echo "</td>";
                                      echo "</tr>";
                                      }
                                    }
                                    catch(PDOException $e)
                                    {
                                        die("Connessione fallita: ". $e->getMessage());
                                    }
                                   }
                                   //ricerca per il magnutudo
                                   if($magn!=""){
                                    try {

                                        $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
                                        $connessione->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                                        
                                        $query = $connessione->query("SELECT CodiceT,Luogo,Magnitudo,Tsunami FROM Terremoto WHERE Magnitudo ='$magn' ");

                                        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                        $CodiceT = $row['CodiceT'];
                                        $Luogo = $row['Luogo'];
                                        $Magnitudo = $row['Magnitudo'];
                                        $Tsunami = $row['Tsunami'];

                                        echo "<tr>";
                                      	echo "<td>";
                                      		echo $CodiceT;
                                      	echo "</td>";
                                        echo "<td>";
                                      		echo $Luogo;
                                      	echo "</td>";
                                        echo "<td>";
                                      		echo $Magnitudo;
                                      	echo "</td>";
                                        echo "<td>";
                                      		echo $Tsunami;
                                      	echo "</td>";
                                      echo "</tr>";
                                      }
                                    }
                                    catch(PDOException $e)
                                    {
                                        die("Connessione fallita: ". $e->getMessage());
                                    }
                                   }
                                   //Ricerca per gli tsunami
                                   if($tsu!=""){
                                    try {

                                        $connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password);
                                        $connessione->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                                        
                                        $query = $connessione->query("SELECT CodiceT,Luogo,Magnitudo,Tsunami FROM Terremoto WHERE Tsunami ='$tsu' ");

                                        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                        $CodiceT = $row['CodiceT'];
                                        $Luogo = $row['Luogo'];
                                        $Magnitudo = $row['Magnitudo'];
                                        $Tsunami = $row['Tsunami'];

                                        echo "<tr>";
                                      	echo "<td>";
                                      		echo $CodiceT;
                                      	echo "</td>";
                                        echo "<td>";
                                      		echo $Luogo;
                                      	echo "</td>";
                                        echo "<td>";
                                      		echo $Magnitudo;
                                      	echo "</td>";
                                        echo "<td>";
                                      		echo $Tsunami;
                                      	echo "</td>";
                                      echo "</tr>";
                                      }
                                    }
                                    catch(PDOException $e)
                                    {
                                        die("Connessione fallita: ". $e->getMessage());
                                    }
                                   }   
                                    

                                ?>

                                
                              </table>
                              </font>
                            </div>

                        </div><!-- End of col-sm-12 -->
                    </div><!-- End of row -->
                </div><!-- End of Container -->


            </section>
            
            <!-- Contact Section -->
            <section id="contact" class="contactus colorsbg">
                <div class="container">
                    <div class="row">
                        <div class="main_service_area main_contactus_area">
                            <div class="head_title text-center wow fadeInUp">
                                <h2></h2>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 wow rollIn">
                                    <div class="single_contant_left margin-top-60 margin-bottom-80">
                                        <form action="#" id="formid">
                                            <div class="row">
                                                

                                            </div>
                                        </form>
                                    </div>
                                </div><!-- End of col-sm-6 -->

                                <div class="col-sm-6">
                                    <div class="contact_us_right margin-top-60 margin-bottom-80 wow fadeInLeft">
                                        <div class="single_contactus">
                                            <div class="ourmap"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="single_map_bottom margin-top-30">
                                                 <font size=4>
                                                    <p class="text-uppercase">ITTS Volta Perugia</p>
                                                    <span><a href="http://www.avolta.pg.it/" target="_blank">Sito Web</a></span>
                                                    <span>Via Assisasa 40e - Loc. Piscille</span>
                                                 </font>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="single_map_bottom text-right margin-top-30">
                                                <font size=4>
                                                    <p class="text-uppercase">Manuel Antonini</p>
                                                    <span>Via Mosca 5, Bastia Umbra PG 06083</span>
                                                    <span>5CI A.S. 2017/2018</span>
                                                </font>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- End of col-sm-6 -->

                            </div>
                        </div>
                    </div><!-- End of row -->
                </div><!-- End of container -->
                <!-- Contact Section -->
            <footer id="footer" class="footer">                
                <div class="container">
                    <div class="row">
                        <div class="main_footer">
                            <div class="col-sm-2">
                                <div class="footer_logo">
                                    <a href="#home"><img src="assets/images/LogoJapan.png" alt="" /></a>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="copyright_text margin-top-20">
                                    <p class=" wow fadeInRight animated" data-wow-duration="1s">Made
                                        by Manuel Antonini. All Rights Reserved</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="footer_socail text-right  margin-top-20">
                                    <ul class="list-inline">
                                        <li><a href="https://www.facebook.com/NoMoreStar" target="_blank"><i class="fa fa-facebook"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- End of row -->
                </div><!-- End of container-fluid -->
            </footer><!-- End of Footer Section -->

            <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            </section>
            
    

</body>
</html>

