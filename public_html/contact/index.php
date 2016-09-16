<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2>Contact Me</h2>
			<form id="contact-form" action="php/mailer.php" method="post" novalidate>

				<div class="form-group">
					<label for="name">Name</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user"></i>
						</div>
						<input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
					</div>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-envelope"></i>
						</div>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-pencil"></i>
						</div>
						<input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
					</div>
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-comment"></i>
						</div>
						<textarea name="message" rows="5" id="message" class="form-control"
									 placeholder="Your Message (2000 charaters max)"></textarea>
					</div>
				</div>

				<!-- reCAPTCHA for Marcelo's live site-->
				<div class="g-recaptcha" data-sitekey="6LdmsykTAAAAADzZnm_QTYypp2Wk4-f2cwjxR8c4"></div>


				<!-- reCAPTCHA for bootcapm-coders-->
				<!--<div class="g-recaptcha" data-sitekey="6LerrykTAAAAAPw2bx7gWd-EnoLyDJb5LfdqOwzB"></div>
				-->

				<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>

			</form>
		</div>
	</div>
</div>
