<?php require 'includes/header.php'?>

    <section>
        
        <h2>Suppliers</h2>

        <table>
        <tr>
          <th>Name</th>
          <th>VAT</th>
          <th>Country</th>
        </tr>
        <tr>
          <td>
            <?php foreach ($providers->getProviders() as $key => $provider) { ?>
            <p><a href="/index.php?page=providers&id=<?=$provider['Id']?>"><?= $provider['Name']?></a></p><?php } ?>    
          </td>
          <td>
            <?php foreach ($providers->getProviders() as $key => $provider) { ?>
            <p><?php echo $provider['VATNumber']?></p><?php } ?>
          </td>
          <td>
            <?php foreach ($providers->getProviders() as $key => $provider) { ?>
            <p><?php echo $provider['Country']?></p><?php } ?>
          </td>
        </tr>
        </table>
    </section>
    
<?php require 'includes/footer.php'?>