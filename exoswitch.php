<?php
$choix=3;
echo"
    ******MENU PRINCIPAL***** <br>
    1-Sports <br>
    2-Couleur <br>
    3-Musique <br>
    Faites votre choix: $choix <br>
    ";
    switch ($choix) {
        case '1':
            $choix=1;
             echo "****Menu Sports*****" <br>;
             1-football <br>
             2-basketball <br>
             ";

             
             switch ($choix) {
             case '1':
                $choix ='a';
                echo"**Menu football** <br>
                a-Homme <br>
                b-femme < br>
                Faites votre choix: $choix <br>
                ";
                case 'a':
                    echo"vous avez choisi football--> Homme;
            break;

            case 'b':
                    echo"vous avez choisi Musique femme";
                    break;
                    default:
                    echo "choix indisponible pour le menu musique";
    }
    break;
                    
                    ;case 2:

            echo "****Menu Couleur*****";
            break;
            case 3:
            $choix = 'b';
            echo "
             ****Menu Musique ***** <br>
             a-Mbalax <br>
             b-Raggae <br>
             Faites votre choix: $choix <br>
            ";
            switch ($choix) {
                case 'a':
                    echo "vous avez choisi musique->Mbalax";
                    break;
               case 'b':
               echo "vous avez choisi musique->raggae";
               break;
                default:
                echo "Choix indisponible pour le menu Musique";                    
                    break;
            }
            break;
            default:
               echo "Choix indisponible";
            break;
    }