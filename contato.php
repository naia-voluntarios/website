
<?php 
include "header.php";
include "banner.php";
require 'inc/mailer/PHPMailerAutoload.php';

new Header("Naia | Núcleo Assistencial Irmão Alfredo",'Conheça o Núcleo Assistencial Irmão Alfredo'); 
 
new Banner("Contato");
 

if(!empty($_POST['email'])){
	$mail = new PHPMailer;
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	$mail ->CharSet = "UTF-8";
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'email-ssl.com.br';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'noreply@naia.org.br';                 // SMTP username
	$mail->Password = 'wsws8443@';                           // SMTP password
	//$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 435;                                    // TCP port to connect to
	
	$mail->setFrom('noreply@naia.org.br', 'Não Responda');
	$mail->addAddress('noreply@naia.org.br', $_POST["name"]);     // Add a recipient
	                               // Set email format to HTML
	$mail->Subject = $_POST['motivo'];
	$mail->Body    = $_POST['message'];
	$mail->AltBody = $_POST['message'];

	if(!$mail->send()) {
	    $output = $mail->ErrorInfo;
	} else {
	    $output = 0;
	}
	    var_dump($output);

}
?>



	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					<h2 class="title-style-2">FORMULÁRIO DE CONTATO<span class="title-under"></span></h2>

					<form action="/contato.php" method="post">

						<div class="row">

							<div class="form-group col-md-6">
	                            <input type="text" name="name" class="form-control" placeholder="Nome*" required>
	                        </div>

	                         <div class="form-group col-md-6">
	                            <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
	                        </div>
							
						</div>
						<div class="form-group">
                        	<select class="form-control" name="motivo">
                        	<option selected disabled>Motivo</option>
                        	<option value="Doação - Pessoa Física">Doação - Pessoa Física</option>
                        	<option value="Doação - Organização">Doação - Organização</option>
                        	<option value="Doação - Bazar">Doação - Bazar</option>
                        	<option value="Voluntáriado">Voluntáriado</option>
                        	<option value="A Bola em suas mãos">A Bola em suas mãos</option>
                        	<option value="Dúvida">Dúvida</option>
                        	</select>
                        </div>

                        <div class="form-group">
                            <textarea name="message" rows="5" class="form-control" placeholder="Nos deixe uma Mensagem*" required></textarea>
                        </div>

                        <div class="form-group alerts">
                        
                        	<div class="alert alert-success" role="alert">
							 
							</div>

							<div class="alert alert-danger" role="alert">
							  
							</div>
							
                        </div>
                        
                        

                         <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Enviar Mensagem</button>
                        </div>

                        <div class="clearfix"></div>

					</form>

				</div>

				<div class="col-md-4 col-md-offset-1 col-contact">

					<h2 class="title-style-2"> NAIA - CONTATOS <span class="title-under"></span></h2>
					<p>
						Núcleo Assistencial Irmão Alfredo  
					</p>

					<div class="contact-items">

						<ul class="list-unstyled contact-items-list">
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span>Rua: Ribeiro do Vale, 120</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> 55 (11) 5533-7922</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span><a href="mailto:diretoria@naia.org.br">diretoria@naia.org.br</a></li>
						</ul>
					</div>
					
				</div>

			</div>

		</div>

	</div>

	<!-- div id="contact-map" class="contact-map">
		
	</div -->


<?php include "footer.php"; ?>