<?php

class Good
{
    protected $id;
    protected $name;
    protected $price;
    protected $info;

    public function __construct($id, $name, $price, $info)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->info = $info;
    }

    public function display(): string
    {
        $content = '';
        $content .= "<h1>{$this->getName()}</h1>";
        $content .= "<p>{$this->getInfo()}</p>";
        $content .= "<p>Цена: {$this->getPrice()}р.</p>";
        return $content;
    }

    protected function getName()
    {
        return $this->name;
    }

    protected function getInfo()
    {
        return $this->info;
    }

    protected function getPrice()
    {
        return $this->price;
    }
}

class MilkGood extends Good
{
    protected $date;

    public function __construct($id, $name, $price, $info, $date)
    {
        parent::__construct($id, $name, $price, $info);
        $this->date = $date;
    }

    public function display(): string
    {
//        $content = '';
//        $content .= "<h1>{$this->getName()}</h1>";
//        $content .= "<p>{$this->getInfo()}</p>";
//        $content .= "<p>{$this->getDate()}</p>";
//        $content .= "<p>Цена:{$this->getPrice()}</p>";
//        return $content;
        $content = parent::display();
        $content .= "<p>Дата производства: {$this->getDate()}</p>";
        return $content;
    }

    protected function getDate()
    {
        return $this->date;
    }
}

$good = new MilkGood(
    10,
    'Товар',
    456,
    'inf',
    '2019-11-25'
);

echo $good->display();

$good2 = new Good(
    10,
    'Товар',
    456,
    'inf'
);
echo $good2->display();