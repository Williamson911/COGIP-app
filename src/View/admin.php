<?php require 'includes/headerAdmin.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section class="page-section bg-light">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Hello <?= $_SESSION['username'] ?>!</h2>
			<p>What operations do you want to perform today?</p>

			<a class="btn btn-primary btn-xl text-uppercase" href="/newinvoice">+ New invoice</a>
			<a class="btn btn-primary btn-xl text-uppercase" href="/newcontact">+ New contact</a>
			<a class="btn btn-primary btn-xl text-uppercase" href="/newcompany">+ New company</a>

			<h2 class="section-heading text-uppercase">Last invoices</h2>
		</div>
		<div>
			<table>
				<tr>
					<?php if ($_SESSION['role'] == 'Admin') : ?>
						<th></th>
					<?php endif ?>
					<th>Invoice Number</th>
					<th>Dates</th>
					<th>Company</th>
					<?php if ($_SESSION['role'] == 'Admin') : ?>
						<th></th>
					<?php endif ?>
				</tr>
				<tr>
					<?php if ($_SESSION['role'] == 'Admin') : ?>
						<td class="pr-2">
							<?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
								<p><a href="/editinvoice/<?= $invoice['Id'] ?>">edit</a></p>
							<?php } ?>
						</td>
					<?php endif ?>

					<td class="pr-2"><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
							<p><?php echo $invoice['InvoiceNumber'] ?></p><?php } ?>
					</td>
					<td class="pr-2"><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
							<p><?php echo $invoice['InvoiceDate'] ?></p><?php } ?>
					</td>
					<td class="pr-2"><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
							<p><?php echo $invoice['Name'] ?></p><?php } ?>
					</td>
					<?php if ($_SESSION['role'] == 'Admin') : ?>
						<td class="pr-2">
							<?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
								<form action="" method="POST">
									<input type="hidden" name="id-invoice" value="<?= $invoice['InvoiceNumber'] ?>">
									<input type="submit" name="delete-invoice" value="delete">
								</form>
							<?php } ?>
						</td>
					<?php endif ?>
				</tr>
			</table>
		</div>
	</div>
</section>

<section class="page-section" id="lastcontacts">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Last contacts</h2>
		</div>

		<div>
			<table>
				<tr>
					<?php if ($_SESSION['role'] == 'Admin') : ?>
						<th></th>
					<?php endif ?>
					<th>Name</th>
					<th>e-mail</th>
					<th>Company</th>
					<?php if ($_SESSION['role'] == 'Admin') : ?>
						<th></th>
					<?php endif ?>
				</tr>
				<tr>
					<?php if ($_SESSION['role'] == 'Admin') : ?>
						<td class="pr-2">
							<?php foreach ($contacts->getContacts() as $key => $contact) { ?>
								<p><a href="/editcontact/<?= $contact['Id'] ?>">edit</a></p>
							<?php } ?>
						</td>
					<?php endif ?>

					<td class="pr-2"><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
							<p><?php echo $contact['FirstName'] . ' ' . $contact['LastName'] ?></p><?php } ?>
					</td>

					<td class="pr-2"><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
							<p><?php echo $contact['Email'] ?></p><?php } ?>
					</td>

					<td class="pr-2"><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
							<p><?php echo $contact['CompanyName'] ?></p><?php } ?>
					</td>

					<?php if ($_SESSION['role'] == 'Admin') : ?>
						<td class="pr-2">
							<?php foreach ($contacts->getContacts() as $key => $contact) { ?>
								<form action="" method="POST">
									<input type="hidden" name="id-people" value="<?= $contact['Id'] ?>">
									<input type="submit" name="delete-contact" value="delete">
								</form>
							<?php } ?>
						</td>
					<?php endif ?>
				</tr>
			</table>
		</div>
	</div>
</section>

<section class="page-section" id="lastcontacts">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Last companies</h2>
		</div>

		<div>
			<table>
				<tr>
					<?php if ($_SESSION['role'] == 'Admin') : ?>
						<th></th>
					<?php endif ?>
					<th>Name</th>
					<th>VAT</th>
					<th>Country</th>
					<th>Type</th>
					<?php if ($_SESSION['role'] == 'Admin') : ?>
						<th></th>
					<?php endif ?>
				</tr>
				<tr>
					<?php if ($_SESSION['role'] == 'Admin') : ?>
						<td class="pr-2"><?php foreach ($companies->getCompanies() as $key => $company) { ?>
								<p><a href="/editcompany/<?= $company['Id'] ?>">edit</a></p><?php } ?>
						</td class="pr-2">
					<?php endif ?>
					<td class="pr-2"><?php foreach ($companies->getCompanies() as $key => $company) { ?>
							<p><?php echo $company['Name'] ?></p><?php } ?>
					</td>
					<td class="pr-2"><?php foreach ($companies->getCompanies() as $key => $company) { ?>
							<p><?php echo $company['VATNumber'] ?></p><?php } ?>
					</td>
					<td class="pr-2"><?php foreach ($companies->getCompanies() as $key => $company) { ?>
							<p><?php echo $company['Country'] ?></p><?php } ?>
					</td>
					<td class="pr-2"><?php foreach ($companies->getCompanies() as $key => $company) { ?>
							<p><?php echo $company['Type'] ?></p><?php } ?>
					</td>
					<?php if ($_SESSION['role'] == 'Admin') : ?>
						<td class="pr-2">
							<?php foreach ($companies->getCompanies() as $key => $company) { ?>
								<form action="" method="POST">
									<input type="hidden" name="id-company" value="<?= $company['Id'] ?>">
									<input type="submit" name="delete-company" value="delete">
								</form>
							<?php } ?>
						</td>
					<?php endif ?>
				</tr>
			</table>
		</div>
	</div>
</section>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<!-- <script src="assets/mail/jqBootstrapValidation.js"></script> -->
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>
<?php require 'includes/footer.php' ?>