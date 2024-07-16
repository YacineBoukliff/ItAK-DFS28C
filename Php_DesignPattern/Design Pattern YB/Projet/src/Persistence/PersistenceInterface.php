<?php
interface PersistenceInterface
{
    public function save(Product $product): void;
}