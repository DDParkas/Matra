<!-- 
© Copyright Matra do Brasil. 2016 Todos os direitos reservados.
Produzido e Revisado por: Daniel Pinhal e Rodrigo R. Fidalgo.
-->
<!doctype html>
<html>
	<head>
		<meta name="DESCRIPTION" CONTENT="MATRA DO BRASIL é uma empresa especializada na produção de paletes de madeira, destinados para venda e locação.">
		<META NAME="KEYWORDS" CONTENT="paletes de madeira, reforma de paletes, locação de paletes, paletes usados, moveis de paletes, mesa de paletes, caixa de madeira, paletes pbr, paletes one-way, palete sustentavel, paletes de exportação" >
		<META NAME="ROBOT" CONTENT="Index,Follow" >
		<META NAME="LANGUAGE" CONTENT="PT" >
		<title>::Matra do Brasil::</title>
		<link type="text/css" rel="stylesheet" href="css/fale.css"/>
		<link rel="shortcut icon" href="imagens/logo.jpg"/>
		
	</head>
	<body>
	<?php include_once("analyticstracking.php") ?>
		<div class="linha"></div>
		<div class="master">
			<div class="topo">
				<a href="index.html"><img src="imagens/logo.png" id="logo"></a>
				<div class="menu">
					<a href="index.html"> <img src="imagens/icones/home.png" id="icons">Inicio</a>
					<a href="servicos.html"> <img src="imagens/icones/tools.png" id="icons2">Serviços</a>
					<a href="produtos.html"> <img src="imagens/icones/box.png" id="icons3">Produtos</a>
					<a href="galeria.html"> <img src="imagens/icones/photo.png" id="icons4">Galeria</a>
					<a href="fale.php"> <img src="imagens/icones/team.png" id="icons5">Fale conosco</a>
				</div>
			</div>
		
			<div class="corpo">
		
				<div class="barra">
					<img src="imagens/banner_fale.jpg">
				</div>
				<div class="fomulario">
				
					<div id="text">

						<font color="green"><b>Escreva pra gente!</b></font><br>
					</div>
					<!-- mail------------------------------------------------------------------------------>
					
 							<div class="col-md-5 col-sm-6">                        
 								<div class="contact-form">                            
 									<form method="post" name="contactform" id="contactform" action="#envia-mensagem">                                
 										                                  
 											<input name="name" type="text"  placeholder="Seu Nome" id="in">                                
 										                                   
 											<input name="email" type="text"  placeholder="Seu Email" id="in">                                 
 										                                    
 											<input name="subject" type="text"  placeholder="Assunto" id="in">                                 
 										                                   
 											<textarea name="comments" id="comments" placeholder=' Mande sua mensagem' rows='15' cols='60' maxlength='500' ></textarea>                                
 										<br>
										<input type="image" class="mainBtn" src="imagens/enviar.jpg" width='150' id="botao_form" value="Enviar Mensagem">										
 										<div id="envia-mensagem"><?php
 											if($_POST){
 												
 												$nome = $_POST['name'];
 												$email = $_POST['email'];
 												$ass = $_POST['subject'];
 												$msg = $_POST['comments'];
												$ass = "--- Email encaminhado pelo site www.matradobrasil.com.br ---";

 												//Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
												require("phpmailer/class.phpmailer.php");
												require("phpmailer/class.smtp.php");
												
												$mail = new PHPMailer();
												$mail->setLanguage('pt');												

												$host		='mail.proceduraweb.com.br';
												$username	='jackson@proceduraweb.com.br';
												$password	='jks57312573';
												$port		= 587;
												$secure		= false;

												$from		= $email;
												$fromName	= $nome;
								

												$mail->isSMTP();
												$mail->Host 		= $host;
												$mail->SMTPAuth		= true;
												$mail->Username 	= $username;
												$mail->Password 	= $password;
												$mail->Port     	= $port;
												$mail->SMTPSecure 	= $secure;

												$mail->From = $from;
												$mail->FromName = $fromName;
												$mail->addReplyTo($from, $fromName);

												$mail->addAddress('arvoredacoruja@gmail.com', 'Daniel Dormin');
												$mail->addAddress('informatica@matradobrasil.com.br', 'Daniel Dormin');
												$mail->addAddress('r.fidalgo@matradobrasil.com.br', 'Rodrigo Guilherme');
												$mail->addAddress('danielpinhalfilho@yahoo.com.br', 'Daniel Dormin');

												$mail->isHTML(true);
												$mail->CharSet = 'utf-8';
												$mail->WordWrap = 70;

												$mail->Subject = $ass;
												$mail->Body = $msg;
												$mail->AltBody = $msg;

												$send = $mail->Send();

												if($send){													
													print "<h1 style='background-color:#27cf52;padding:15px;font-size:16px;color:#fff;'>Email Enviado! Aguarde, que entraremos em contato com você!</h1>";
													}
												else{
													echo "<h1 style='background-color:#ff0000;padding:15px;font-size:16px;color:#fff;'>E-mail NÃO enviado, Por favor tente novamente!</h1>";
													//echo 'Erro: '.$mail->ErrorInfo;
												}

 											}
 										?>   </div>                    
 									</form>                        
 								</div> <!-- /.contact-form -->                    
 							</div> <!-- /.col-md-5 -->     
					
					
					<!-- mail------------------------------------------------------------------------------>
				</div>
				<div class="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1830.2389937644098!2d-46.33321800187048!3d-23.44321696210792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7cfd790758d5%3A0x2c9b27279f11f035!2sMatra+Brasil!5e0!3m2!1spt-BR!2sbr!4v1456925098565" width="565" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="cartao">
					Matra do Brasil Ltda.<br>
					Av. Industrial, 775 - Distrito Industrial<br>
					Itaquaquecetuba - SP - CEP 08586 - 150<br>
					Tel: 11 4646 - 1120<br>
					Tel: 11 4648 - 6120<br>
					Tel: 11 4648 - 6654
				</div>
				
			</div>
			<div class="2banner">
				<img src="imagens/rodape.jpg">
			</div>
				<div class="rodape">
				<br>© Copyright Matra do Brasil. 2016 Todos os direitos reservados.<br><br>
				Tel: 11 4646 - 1120
				 / 11 4648 - 6120
				 / 11 4648 - 6654
				<h6>Icon made by <a href="http://www.freepik.com/">Freepik in interface.</a>
				<br>Pack: Interface and web from www.flaticon.com 
				<br>E.g.: Icon made by Freepik from www.flaticon.com </h6>
			</div>
		</div>
		<div class="rodape_fundo"></div>
	</body>
</html>
<!--

     \;,._                           _,,-
     \`;, `-._ _..--'''```--.._ __.-',;(
      \ `;,  `:.  ,   ;.   .   :'  .;` /
       ; `;;,      .:    :.      ,;;` /
        \ ';/    \:: :  . ::/    \;` ;
         ).' __.._`        '_..__ `./
         /<  \\ /I`,      ,'I\ //   >
         /\   `;-7/_\ -- /_\7-;'   /\
         //.    `"':" ;; ":`"'     /\
          |/ .  .:' __..__ `.     \|
          /\|: ./. `=_  _=' .\   |/\
             /:(/::.  \/  .::\) /
              ////=-v-'`-v-=\\\\  
              ///`Nx_\;;/_xN'\\\
             / /   `"w==w"'   \ \
              /                \


                                                _
                   |\___/|                      \\
                   )     (    |\_/|              ||
                  =\     /=   )a a `,_.-""""-.  //
                    )===(    =\Y_= /          \//
                   /     \     `"`\       /    /
                   |     |         |    \ |   /
                  /       \         \   /- \  \
                  \       /         || |  // /`
           _/\_/\_/\_   _/_/\_/\_/\_((_|\((_//\_/\_/\_/\_
           

      \    /\
       )  ( ')
      (  /  )
       \(__)|
       


           M.                                         .:M
           MMMM.                                   .:MMMM
           MMMMMMMM                             .:MMMMMMM
           :MMHHHMMMMHMM.  .:MMMMMMMMM:.      .:MMHHMHMM:
            :MMHHIIIHMMMM.:MMHHHHIIIHHMMMM. .:MMHIHIIHHM:
             MMMHIIIIHHMMMIIHHMHHIIIIIHHMMMMMMHHHIIIIHHM:
             :MMHIIIIIHMMMMMMMHHIIIIIIHHHMMMMMHHII:::IHM.
              MH:I:::IHHMMMMMHHII:::IIHHMMMHHHMMM:I:IHMM
              :MHI:HHIHMMHHIIHII::.::IIHMMHHIHHMMM::HMM:
               MI::HHMMIIM:IIHII::..::HM:MHHII:::IHHMM:
               MMMHII::..:::IHMMHHHMHHMMI:::...::IHM:
               :MHHI::....::::HMMMMMMHHI::.. ..:::HM:
                :MI:.:MH:.....:HMMMMHHMIHMMHHI:HH.:M
                M:.I..MHHHHHMMMIHMMMMHMMHHHHHMMH:.:M.
                M:.H..H  I:HM:MHMHI:IM:I:MM::  MMM:M:
                :M:HM:.M I:MHMIIMMIIHM I:MM::.:MMI:M.
                'M::MM:IMH:MMII MMHIMHI :M::IIHMM:MM
                 MH:HMMHIHMMMMMMHMMIMHIIHHHHIMMHHMM
                  MI:MMMMHI:::::IMM:MHI:::IMMMMHIM
                   :IMHIHMMMMMM:MMMMMHHHHMMMHI:M
                    HI:IMIHMMMM:MMMMMMHHHMI:.:M      .....
        ............M::..:HMMMMIMHIIHMMMMHII:M:::''''
            ....:::MHI:.:HMMMMMMMMHHHMHHI::M:::::::''''''
           ''   ...:MHI:.::MMHHHMHMIHMMMMHH.MI..........
              ''  ...MHI::.::MHHHHIHHMM:::IHM           '''
                 '  IMH.::..::HMMHMMMH::..:HM:
                   :M:.H.IHMIIII::IIMHMMM:H.MH
                    IMMMH:HI:MMIMI:IHI:HIMIHM:
                  .MMI:.HIHMIMI:IHIHMMHIHI:MIM.
                 .MHI:::HHIIIIIHHI:IIII::::M:IM.
                .MMHII:::IHIII::::::IIIIIIHMHIIM
                MHHHI::.:IHHII:::.:::IIIIHMHIIHM:
               MHHHII::..::MII::.. ..:IIIHHHII:IM.
              .MHHII::....:MHII::.  .:IHHHI::IIHMM.
              MMHHII::.....:IHMI:. ..:IHII::..:HHMM
              MHHII:::......:IIHI...:IHI::.....::HM:
             :MMH:::........ ...::..::....  ...:IHMM
             IMHIII:::..........     .........::IHMM.
             :MHIII::::......          .......::IHMM:
              MHHIII::::...             ......::IHMM:
              IMHHIII:::...             .....::IIHMM,
              :MHHIII:::I:::...     ....:::I:::IIHMM
               MMHHIII::IHI:::...........:::IIH:IHMM
               :MMHHII:IIHHI::::::.....:::::IH:IHMIM
                MMMHHII:IIHHI:::::::::::::IHI:IIHM:M.
                MMMHHIII::IHHII:::::::::IHI:IIIHMM:M:
                :MMHHHIII::IIIHHII::::IHI..IIIHHM:MHM
                :MMMHHII:..:::IHHMMHHHHI:IIIIHHMM:MIM
                .MMMMHHII::.:IHHMM:::IIIIIIHHHMM:MI.M
              .MMMMHHII::.:IHHMM:::IIIIIIHHHMM:MI.M
            .MMMMHHMHHII:::IHHMM:::IIIIIHHHHMM:MI.IM.
           .MMHMMMHHHII::::IHHMM::I&&&IHHHHMM:MMH::IM.
          .MMHHMHMHHII:::.::IHMM::IIIIHHHMMMM:MMH::IHM
          :MHIIIHMMHHHII:::IIHMM::IIIHHMMMMM::MMMMHHHMM.
          MMHI:IIHMMHHHI::::IHMM:IIIIHHHMMMM:MMMHI::IHMM.
          MMH:::IHMMHHHHI:::IHMM:IIIHHHHMMMM:MMHI:.:IHHMM.
          :MHI:::IHMHMHHII::IHMM:IIIHHHMMMMM:MHH::.::IHHM:
          'MHHI::IHMMHMHHII:IHMM:IIHHHHMMMM:MMHI:...:IHHMM.
           :MHII:IIHMHIHHIIIIHMM:IIHHHHMMMM:MHHI:...:IIHMM:
           'MHIII:IHHMIHHHIIHHHMM:IHHHMMMMM:MHHI:..::IIHHM:
            :MHHIIIHHMIIHHHIHHHMM:HHHHMMMMM:MHII::::IIIHHMM
             MHHIIIIHMMIHHHIIHHMM:HHHHMMMM:MMHHIIHIIIIIHHMM.
             'MHHIIIHHMIIHHIIIHMM:HHHMMMMH:MHHMHII:IIIHHHMM:
              'MHHIIIHMMIHHHIHHMM:HHHMMMHH:MMIMMMHHHIIIHHMM:
               'MHHIIHHMIHHHHHMMM:HHHMMMH:MIMMMMMMMMMMHIHHM:
                'MHIIIHMMIHHHHHMM:HHHMMMH:IMMMMMHHIHHHMMHHM'
                 :MHHIIHMIHHHHHMM:HHHMMMM:MMHMMHIHMHI:IHHHM
                  MHHIIHM:HHHHHMM:HHHMMMM:MMMHIHHIHMM:HHIHM
                   MHHIHM:IHHHHMM:HHHHMM:MMHMIIHMIMMMHMHIM:
                   :MHIHMH:HHHHMM:HHHHMM:MMHIIHMIIHHMMHIHM:
                    MMHHMH:HHHHMM:HHHHMM:MHHIHMMIIIMMMIIHM'
                    'MMMMH:HHHHMM:HHHMM:MHHHIMMHIIII::IHM:
                     :MMHM:HHHHMM:HHHMM:MHIHIMMHHIIIIIHM:
                      MMMM:HHHHMM:HHHHM:MHHMIMMMHHHIHHM:MMMM.
                      :MMM:IHHHMM:HHHMM:MHHMIIMMMHHMM:MMMMMMM:
                      :MMM:IHHHM:HHHHMM:MMHHHIHHMMM:MMMMMMMMMM
                       MHM:IHHHM:HHHMMM:MMHHHHIIIMMIIMMMMMMMMM
                       MHM:HHHHM:HHHMMM:HMMHHHHHHHHHMMMMMMMMM:
                    .MI:MM:MHHMM:MHMMHMHHMMMMHHHHHHHMMMMMMMMM'
                   :IM:MMIM:M:MM:MH:MM:MH:MMMMMHHHHHMMMMMMMM'
                   :IM:M:IM:M:HM:IMIHM:IMI:MMMMMHHHMMMMMM:'
                    'M:MHM:HM:MN:HMIHM::M'   '::MMMMMMM:'
                       'M'HMM'M''M''HM'I'
                       
                                                       /\-/\
  _                                                   /  o o\
 ( \_________________________________________,-~~~~~~-\=  Y /=
  \__________________________________________          '--^'
                                             \           /
                                             /  /'---|  ||
                                             |__))   |__)_)


		-->