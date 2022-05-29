<?php
    if(isset($_POST['mailform'])){

    $header="MIME-Version: 1.0\r\n";
    $header.='From:"OMNESANTE.com"<omnes.sante@gmail.com>'."\n";
    $header.='Content-Type:text/html; charset="utf-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';

    $message='
    <html>
        <body>
            <div align=""center>
                <img src="LOGO.png">
                <br>
                Bonjour,<br> Nous vous confirmons votre rendez-vous dans notre laboratoire OMNES SANTE en date du <span id="crenauxRdv"></span>.<br>
                N\'oublliez pas d\'apporter les éléments suivants :<br>
                <ul>
                    <li>Votre carte Visale si vous en avez une</li>
                    <li>Votre attestation C2S, CMU, ACS, ou AME si vous êtes bénéficiaire.</li>
                    <li>Votre feuillet AT délivré par l\'employeur si vous venez pour un accident de travail</li>
                    <li>Vos ordonnances éventuelles</li>
                    <li>Vos éventuels résultats d\'examens</li>
                    <li>Le carnet de santé pour les enfants</li>
                </ul>
                <p>Merci d\'avance pour votre ponctualité : en cas de retard de votre part et afin
                de ne pas pénaliser les patients suivants, votre créneau de rendez-vous ne pourra être garanti.
                Si vous ne pouvez vous rendre à la consultation, prévenez-nous en avance pour permettre
                à un autre patient de voir le praticien !</p>

                <p>Si vous souhaitez <strong>modifier</strong> ou <strong>annuler</strong> ce rendez-vous,
                connectez-vous avec vos identifiants sur <strong>www.omnesante.com</strong> ou appelez nous 
                au 0675189910.</p>
                <p>Merci pour votre confiance, à bientôt<p>

            </div>
        </body>


    </html>
    ';
    mail("f.marielouise02@gmail.com","Votre rendez-vous chez OMNES SANTE",$message,$header);
    }
?>