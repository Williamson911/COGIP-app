<?php require 'includes/headerAdmin.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>
	<p>Hello <?= $_SESSION['username']?>!</p>
	<p>What operations do you want to perform today?</p>

	<a href="/index.php?page=newinvoice">+ New invoice</a>
	<a href="/index.php?page=newcontact">+ New contact</a>
	<a href="/index.php?page=newcompany">+ New company</a>

	<h2>Last invoices</h2>
	<table>
		<tr>
			<th>Invoice Number</th>
			<th>Dates</th>
			<th>Company</th>
            <th></th>
		</tr>
		<tr>
			<td><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
    		<p><?php echo $invoice['InvoiceNumber']?></p><?php } ?>
		</td>
			<td><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
    		<p><?php echo $invoice['InvoiceDate']?></p><?php } ?>
		</td>
		<td><?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
    		<p><?php echo $invoice['Name']?></p><?php } ?>
		</td>
        <td>
            <?php foreach ($invoices->getInvoices() as $key => $invoice) { ?>
            <form action="" method="POST">
                <input type="hidden" name="id-invoice" value="<?= $invoice['InvoiceNumber'] ?>">
                <input type="submit" name="delete-invoice" value="delete">
            </form>
            <?php } ?>
		</td>
		</tr>
	</table>
	<h2>Last contacts</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>e-mail</th>
			<th>Company</th>
            <th></th>
		</tr>
		<tr>
			<td><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
    		<p><?php echo $contact['FirstName'] . ' ' . $contact['LastName']?></p><?php } ?>
		</td>
		<td><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
    		<p><?php echo $contact['Email']?></p><?php } ?>
		</td>
		<td><?php foreach ($contacts->getContacts() as $key => $contact) { ?>
    		<p><?php echo $contact['CompanyName']?></p><?php } ?>
		</td>
        <td>
            <?php foreach ($contacts->getContacts() as $key => $contact) { ?>
            <form action="" method="POST">
				<input type="hidden" name="id-people" value="<?= $contact['Id'] ?>">
                <input type="submit" name="delete-contact" value="delete">
            </form>
            <?php } ?>
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
            <th></th>
		</tr>
		<tr>
			<td><?php foreach ($companies->getCompanies() as $key => $company) { ?>
    		<p><?php echo $company['Name']?></p><?php } ?>
		</td>
		<td><?php foreach ($companies->getCompanies() as $key => $company) { ?>
    		<p><?php echo $company['VATNumber']?></p><?php } ?>
		</td>
		<td><?php foreach ($companies->getCompanies() as $key => $company) { ?>
    		<p><?php echo $company['Country']?></p><?php } ?>
		</td>
		<td><?php foreach ($companies->getCompanies() as $key => $company) { ?>
    		<p><?php echo $company['Type']?></p><?php } ?>
		</td>
        <td>
            <?php foreach ($companies->getCompanies() as $key => $company) { ?>
            <form action="" method="POST">
				<input type="hidden" name="id-company" value="<?= $company['Id'] ?>">
                <input type="submit" name="delete-company" value="delete">
            </form>
            <?php } ?>
		</td>
		</tr>
	</table>

</section>
<?php require 'includes/footer.php'?>