<?php
class ProductRepository
{
    private PersistenceInterface $persistence;

    public function __construct(PersistenceInterface $persistence)
    {
        $this->persistence = $persistence;
    }

    public function save(Product $product): void
    {
        $this->persistence->save($product);
    }
}