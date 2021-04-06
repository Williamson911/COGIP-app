<?php require 'includes/header.php'?>

    <section>
        
        <h2>Contact: <?= $detailContact['FirstName'] . ' ' . $detailContact['LastName'] ?></h2>

        <p>Contact: <?= $detailContact['FirstName'] . ' ' . $detailContact['LastName'] ?></p>
        <p>Company: <?= $detailContact['CompanyName'] ?></p>
        <p>Email: <?= $detailContact['Email'] ?></p>

        <h3>Contact person for these invoices:</h3>

        <table>
            <tr>
                <th>Invoice number</th>
                <th>Date</th>
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
            </tr>
        </table>                 
    </section>
    
<?php require 'includes/footer.php'?>