<?php
class InvoiceItem {
    private int $item_id;
    private string $desc;
    private int $qty;
    private float $unitPrice;

    public function __construct(int $item_id, string $desc, int $qty, float $unit) {
        $this->item_id = $item_id;
        $this->desc = $desc;
        $this->qty = $qty;
        $this->unitPrice = $unit;
    }

    public function getItemId(): int {
        return $this->item_id;
    }

    public function getDesc(): string {
        return $this->desc;
    }

    public function getQty(): int {
        return $this->qty;
    }

    public function setQty(int $qty) {
        $this->qty = $qty;
    }

    public function getUnitPrice(): float {
        return $this->unitPrice;
    }

    public function setUnitPrice(float $unitPrice): void {
        $this->unitPrice = $unitPrice;
    }

    public function getTotal(): float {
        return $this->unitPrice * $this->qty;
    }

    public function __toString(): string {
        return "InvoiceItem[id=$this->item_id, desc=$this->desc, qty=$this->qty, unitPrice=$this->unitPrice]";
    }
}


$invoiceItem = new InvoiceItem(1, "Laptop", 3, 750.0);

echo $invoiceItem->getItemId(); 
echo "<br>";

echo $invoiceItem->getDesc(); 
echo "<br>";

echo $invoiceItem->getQty(); 
echo "<br>";

echo $invoiceItem->getUnitPrice(); 
echo "<br>";

echo $invoiceItem->getTotal(); 
echo "<br>";

echo $invoiceItem; 
?>
