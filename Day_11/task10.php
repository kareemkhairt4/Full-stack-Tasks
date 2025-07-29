<?php

trait Timestampable
{
    public function currentTimestamp()
    {
        return "Hour -> 4:00 AM  Day ->29/7/2025";
    }
}
class Order
{
    use Timestampable;
}
class Invoice
{
    use Timestampable;
}
$array = [
    new Order(),
    new Invoice()
];

foreach ($array as $item) {
    echo $item->currentTimestamp(). "<hr><br>";
     
}

?>