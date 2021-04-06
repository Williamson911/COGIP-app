<?php require 'includes/header.php'?>

    <section>
        
        <h2>Companies</h2>

        <a href="/index.php?page=providers">Providers</a>
        <a href="/index.php?page=clients">Clients</a>

        <h3>Clients</h3>

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
        
        <h3>Suppliers</h3>

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