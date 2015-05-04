<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name       = trim($_POST["name"]);
		$email      = trim($_POST["email"]);
		$message    = trim($_POST["message"]);

		if($name == "" OR $email == "" OR $message== ""){
			echo "You must specify a value for name email address and message";
			exit;
		}

		foreach($_POST as $value){
			if (stripos($value, "Content-Type:") !== FALSE){
				echo "there was a problem with the information you entered";
				exit;
			}
		}

		if($_POST["address"] != ""){
			echo "your form submission has an error.";
			exit;
		}

		include_once("includes/phpmailer/class.phpmailer.php");

		$email_body = "";
		$email_body = $email_body."Name: ".$name."\n";
		$email_body = $email_body."Email: ".$email."\n";
		$email_body = $email_body."Message: ".$message;

		//TODO: send email
		//redirect
		header("Location: contact.php?status=thanks");
		exit;
	}
?>

<?php
$pageTitle = "Contact Mike";
$section   = "contact";
include ("includes/header.php");
?>
<div class="section page">
		<div class="wrapper">
			<h1>Contact</h1>
			<p>I&rsquo;d would love to hear from you. Please fill out the contact form with you information.</p>

			<form method="post" action="contact.php">
				<table>
					<tr>
						<th>
							<label for="name">Name</label>
						</th>
						<td>
							<input type="text" name="name" id="name">
						</td>
					</tr>
					<tr>
						<th>
							<label for="email">Email</label>
						</th>
						<td>
							<input type="text" name="email" id="email">
						</td>
					</tr>
					<tr>
						<th>
							<label for="message">Message</label>
						</th>
						<td>
							<textarea name="message" id="message"></textarea>
						</td>
					</tr>
					<tr style="display: none;">
						<th>
							<label for="address">Address</label>
						</th>
						<td>
							<input type="text" name="address" id="address">
							<p>Humans and frogs: please leave this field blank.</p>
						</td>
					</tr>
				</table>
				<input type="submit" value="Send">
			</form>
		</div>
	</div>

<?php include ("includes/footer.php");?>