<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>

	<h1>Welcome to the COGIP!</h1>
    <ol>
    	<?php 
    		foreach ($companies->getCompanies() as $key => $company) { ?>
    		<li><p><?php echo $company['company_name']?></p></li>	
    		
    	<?php } ?>
    </ol>

</section>
<?php require 'includes/footer.php'?>