<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>

	<h2>Last invoices</h2>
	<table>
		<tr>
			<th>Invoice Number</th>
			<th>Dates</th>
			<th>Company</th>
		</tr>
		<tr>
			<td><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
					<p><?php echo $invoice['InvoiceNumber'] ?></p><?php } ?>
			</td>
			<td><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
					<p><?php echo $invoice['InvoiceDate'] ?></p><?php } ?>
			</td>
			<td><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
					<p><?php echo $invoice['Name'] ?></p><?php } ?>
			</td>
		</tr>
	</table>

	<h2>Last contacts</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>e-mail</th>
			<th>Company</th>
		</tr>
		<tr>
			<td><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
					<p><?php echo $contact['FirstName'] . ' ' . $contact['LastName'] ?></p><?php } ?>
			</td>
			<td><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
					<p><?php echo $contact['Email'] ?></p><?php } ?>
			</td>
			<td><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
					<p><?php echo $contact['CompanyName'] ?></p><?php } ?>
			</td>
		</tr>
	</table>
	<h2>Last companies</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>VAT</th>
			<th>Country</th>
			<th>Type</th>
		</tr>
		<tr>
			<td><?php foreach ($companies->getCompanies() as $key => $company) { ?>
					<p><?php echo $company['Name'] ?></p><?php } ?>
			</td>
			<td><?php foreach ($companies->getCompanies() as $key => $company) { ?>
					<p><?php echo $company['VATNumber'] ?></p><?php } ?>
			</td>
			<td><?php foreach ($companies->getCompanies() as $key => $company) { ?>
					<p><?php echo $company['Country'] ?></p><?php } ?>
			</td>
			<td><?php foreach ($companies->getCompanies() as $key => $company) { ?>
					<p><?php echo $company['Type'] ?></p><?php } ?>
			</td>
		</tr>
	</table>

</section>
<?php require 'includes/footer.php' ?>