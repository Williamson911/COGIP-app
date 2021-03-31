<?php require 'includes/header.php'?>

    <section>
        
        <h1>Companies</h1>

        <h2>Clients</h2>

        <table>
        <tr>
          <th>Name</th>
          <th>VAT</th>
          <th>Country</th>
        </tr>
        <tr>
          <td>
          <?php foreach ($companies->getClients() as $key => $client) { ?>
            <p><a href="/index.php?page=companies&id=<?=$client['Id']?>"><?= $client['Name']?></a></p><?php } ?>     
          </td>
          <td>
            <?php foreach ($companies->getClients() as $key => $client) { ?>
            <p><?php echo $client['VATNumber']?></p><?php } ?>
          </td>
          <td>
            <?php foreach ($companies->getClients() as $key => $client) { ?>
            <p><?php echo $client['Country']?></p><?php } ?>
          </td>
        </tr>
        </table>
        
        <h2>Suppliers</h2>

        <table>
        <tr>
          <th>Name</th>
          <th>VAT</th>
          <th>Country</th>
        </tr>
        <tr>
          <td>
            <?php foreach ($companies->getProviders() as $key => $provider) { ?>
            <p><a href="/index.php?page=companies&id=<?=$provider['Id']?>"><?= $provider['Name']?></a></p><?php } ?>    
          </td>
          <td>
            <?php foreach ($companies->getProviders() as $key => $provider) { ?>
            <p><?php echo $provider['VATNumber']?></p><?php } ?>
          </td>
          <td>
            <?php foreach ($companies->getProviders() as $key => $provider) { ?>
            <p><?php echo $provider['Country']?></p><?php } ?>
          </td>
        </tr>
        </table>
    </section>
    
<?php require 'includes/footer.php'?>