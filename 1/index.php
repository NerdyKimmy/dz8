<?php

class Item
{
}

class Order
{
    private $itemList = [];

    public function addItem(Item $item)
    {
        $this->itemList[] = $item;
    }

    public function deleteItem(Item $item)
    {
        $index = array_search($item, $this->itemList, true);
        if ($index !== false) {
            unset($this->itemList[$index]);
        }
    }

    public function getItems(): array
    {
        return $this->itemList;
    }

    public function getItemCount(): int
    {
        return count($this->itemList);
    }

    public function calculateTotalSum(): float
    {
        return 0.0;
    }
}

class OrderRepository
{
    public function save(Order $order)
    {
    }

    public function load(int $orderId): Order
    {
        return new Order();
    }

    public function update(Order $order)
    {
    }

    public function delete(int $orderId)
    {
    }
}

class OrderView
{
    public function printOrder(Order $order)
    {
        echo "Printing order details...<br>";
    }

    public function showOrder(Order $order)
    {
        echo "Showing order details... <br>";
    }
}

?>
