<h2>Listings</h2>

<h2><?php echo $heading; ?></h2>

<?php foreach ($listings as $listing) : ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['description']; ?></p>
<?php endforeach; ?>