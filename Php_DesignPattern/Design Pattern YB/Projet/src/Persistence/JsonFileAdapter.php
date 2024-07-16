<?php
class JsonFileAdapter implements PersistenceInterface
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function save(Product $product): void
    {
        $data = [
            'id' => $product->id,
            'designation' => $product->designation,
            'univers' => $product->univers,
            'price' => $product->price
        ];
        
        $jsonData = json_encode($data);
        file_put_contents($this->filename, $jsonData . PHP_EOL, FILE_APPEND);
    }
}