<?php require 'includes/header.php' ?>

<section>

    <h2>Invoice: <?= $detailInvoice['InvoiceNumber'] ?></h2>

    <h3>Company linked to the invoice</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>VAT</th>
            <th>Company type</th>
        </tr>
        <tr>
            <td><?= $detailInvoice['Name'] ?></td>
            <td><?= $detailInvoice['VATNumber'] ?></td>
            <td><?= $detailInvoice['Type'] ?></td>
        </tr>
    </table>

    <h3>Contact person</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <td><?= $detailInvoice['FirstName'] . ' ' . $detailInvoice['LastName'] ?></td>
            <td><?= $detailInvoice['Email'] ?></td>
        </tr>
    </table>

</section>

<?php require 'includes/footer.php' ?>