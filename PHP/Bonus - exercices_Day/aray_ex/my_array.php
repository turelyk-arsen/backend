<?php

$properties = array(
    array(
        'type' => 'Apartment',
        'units' => 25,
        'value' => 750000
    ),
    array(
        'type' => 'Townhouse',
        'units' => 15,
        'value' => 1200000
    ),
    array(
        'type' => 'Condominium',
        'units' => 10,
        'value' => 500000
    ),
    array(
        'type' => 'Single Family Home',
        'units' => 5,
        'value' => 2500000
    ),
    array(
        'type' => 'Commercial Building',
        'units' => 1,
        'value' => 5000000
    ),
);

// Sort properties by number of units
usort($properties, function($a, $b) {
    return $b['units'] <=> $a['units'];
});

$totalValue = 0;

echo "<ul>";
foreach ($properties as $property) {
    $propertyValue = $property['units'] * $property['value'];
    $totalValue += $propertyValue;
    $formattedValue = number_format($propertyValue);
    $formattedUnits = number_format($property['units']);
    $type = $property['type'];
    if ($propertyValue > 1000000) {
        $type = "<b>$type</b>";
    }
    echo "<li>$type - $formattedUnits units ($$formattedValue)</li>";
}
echo "</ul>";

$formattedTotalValue = number_format($totalValue);
echo "<p>Total value of all units: $$formattedTotalValue</p>";
