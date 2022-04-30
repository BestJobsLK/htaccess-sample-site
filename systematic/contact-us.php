<?php $page = 'contact'; ?>
<?php $title = 'Contact Us - '; ?>
<?php require_once('inc/header.php') ?>

		<div class="content clearfix">
			<div class="colleft clearfix">
				<h2>Send Us A Message</h2>
				<form action=""  class="contact contactus">
					<p>
						<label for="sender">Name:</label>
						<input type="text" name="sender" id="sender" required>
					</p>
					<p>
						<label for="email">Email:</label>
						<input type="email" name="email" id="email" required>
					</p>
					<p>
						<label for="tel">Telephone:</label>
						<input type="tel" name="tel" id="tel" required>
					</p>
					<p>
						<label for="message">Message:</label>
						<textarea name="message" id="message" cols="30" rows="10" required></textarea>
					</p>
					<p>
						<button type="submit">Send Message</button>
					</p>
				</form>
			</div> <!-- .colleft -->
			<div class="colright clearfix">
				<h2>Contact Us</h2>
				<img src="img/office.jpg" alt="Our Office">
				<p><b>Address:</b><br> #999<br> Stereet Name<br> City Name<br> Country.</p>
				<p><b>Telephone:</b><br> +94 123 456 7890</p>
				<p><b>Email: </b><br> contactus@systematic.com</p>
			</div> <!-- .colright -->
		</div> <!-- .content -->

		

<?php require_once('inc/footer.php'); ?>