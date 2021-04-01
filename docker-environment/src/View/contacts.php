<?php require 'includes/header.php'?>

    <section>
        
        <h2>Contacts</h2>

        <table>
      <tr>
        <th>Invoice number</th>
        <th>Dates</th>
        <th>Companies</th>
        <th>Type</th>
      </tr>
      <tr>
        <td><?php foreach ($contacts->getContact() as $key => $contact) { ?>
        <p><a href="/index.php?page=contacts&id=<?=$contact['Id']?>"><?= $contact['FirstName'] . ' ' . $contact['LastName']?></a></p><?php } ?>
        <td><?php foreach ($contacts->getContact() as $key => $contact) { ?>
    		<p><?php echo $contact['Email']?></p><?php } ?></td>
        <td><?php foreach ($contacts->getContact() as $key => $contact) { ?>
    		<p><?php echo $contact['CompanyName']?></p><?php } ?></td>
      </tr>
      </table>

    </section>
    
<?php require 'includes/footer.php'?>