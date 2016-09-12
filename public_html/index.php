<?php require_once("php/partials/head-utils.php"); ?>
<!--Whole Body Container-->
<div id="top" class="sfooter">
	<!-- begin sticky footer content -->
	<div class="sfooter-content">
		<!-- begin header -->
		<?php require_once("php/partials/header.php"); ?>

		<!-- begin main content here -->
		<main>
			<div class="container">
				<div class="row">
					<div class="col-xs-8">
						<div class="jumbotron text-right">
							<h1><i>Marcelo Ibarra</h1></i>
							<h3><strong><i>Junior Web Developer</strong></i></h3>
						</div>
					</div>
				</div>
			</div>
		</main>

		<!--begin about me-->
		<div id="about" class="container">
			<h2 class="heading">About Me</h2>
			<div class="row">
				<div class="col-md-12">
					<i>
						<div class="well">
							<p>A family man who's creative and resourceful in applying a systematic problem-solving approach to
								Cash Management, Payroll, Cost Accounting, Budgeting, Reconciliation and Auditing.<br>
								Hands-on leader with the ability to motivate staff to take pride in their work and to meet
								quality standards.<br>
								Excellent problem solver -- able to handle pressure well. Communicate regularly with staff and
								management.
								Hard worker individual with strong work ethic and commitment to customer service and completely
								bilingual; fluent in oral and written communication in English & Spanish.</p>

							<p>I really like spending quality time with family and enjoy nature. I'm a dedicated/hardworking
								future web developer who likes challenge and enjoys learning new things. At the same time; I'd
								like to get acquainted to potential employers and colleagues.</p>

							<p>Got introduced to these new languages: HTML5, JavaScript, PHP, CSS, MySQL and Angular. Attending Bootcapm coders was quite a ride. Main lesson learned - NEVER to give uuuup!</p>
					</i>
				</div>
			</div>
			<div class="col-md-6">
			</div>
		</div>
		<!--begin portfolio-->
		<div id="Portfolio" class="container">
			<h2>Portfolio</h2>
		</div class="row">
		<div class="col-md-3">
			<img class="picture-image" src="images/picture_241pbw.JPG" align="right">
		</div>
	</div>
</div>
<div id="Contact" class="container" align="center"</div>
<h2>Contact Me</h2>
<div class="row">
	<div class="col-md-3">
	</div>

	<!--Begin Contact Form-->
	<div class="col-md-5"
</div>
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
	</div><!--empty area for form error/success output-->
</form>

<!--empty area for form error/success output-->
<div class="row">
	<div class="col-xs-12">
		<div id="output-area"></div>
	</div>
</div>

<!--empty area for form error/success output-->
<main>
	<div class="row">
		<div class="col-xs-12">
			<div id="output-area"></div>
		</div>
	</div>
	</div>
	</div>
</main>
<!-- begin footer here -->
<footer>
	<div class="container">
		<div class="copyright text-center">
			<a href="https://www.linkedin.com/in/marcelo-ibarra"><i class="fa fa-linkedin-square fa-2x"
																					  aria-hidden="true"></i></a>
			<a href="https://twitter.com/@ibarrahuex"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
			<a href="https://github.com/marcelo-ibarra"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a>
			<p>&copy; mi-Mibarra 2016 </p>
</footer>