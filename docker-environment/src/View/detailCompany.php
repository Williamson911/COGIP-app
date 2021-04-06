<?php require 'includes/header.php'?>

    <section>
        
        <h2>Company: <?= $detailCompanies['Name']?></h2>

        <h3>VAT: <?= $detailCompanies['VATNumber']?></h3>
        <h3>Type: <?= $detailCompanies['Type']?></h3>

        <h4>Contact persons</h4>

        <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
        </tr>
        <tr>
            <td>
            <?php foreach ($employees as $key => $employee) { ?>
    		<p><?php echo $employee['FirstName'] . ' ' . $employee['LastName']?></p><?php } ?>
            </td>
            <td>
            <?php foreach ($employees as $key => $employee) { ?>
    		<p><?php echo $employee['Email']?></p><?php } ?>
            </td>
        </tr>
        </table>

        <h4>Invoices</h4>

        <table>
        <tr>
          <th>Invoice number</th>
          <th>Date</th>
          <th>Contact person</th>
        </tr>
        <tr>
            <td>
            <?php foreach ($invoices as $key => $invoice) { ?>
    		<p><?php echo $invoice['InvoiceNumber']?></p><?php } ?>
            </td>
            <td>
            <?php foreach ($invoices as $key => $invoice) { ?>
    		<p><?php echo $invoice['InvoiceDate']?></p><?php } ?>
            </td>
            <td>
            <?php foreach ($invoices as $key => $invoice) { ?>
    		<p><?php echo $invoice['FirstName'] . ' ' . $invoice['LastName']?></p><?php } ?>
            </td>
        </tr>
        </table>
        
    </section>
    
<?php require 'includes/footer.php'?>