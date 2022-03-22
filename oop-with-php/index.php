<?php
class Books
{
    
    /* Member variables */
    private $price;
    private $title;

    /* Member functions */
    function setPrice($par)
    {
        $this->price = $par;
    }

    function getPrice()
    {
        echo $this->price . "<br/>";
    }

    function setTitle($par)
    {
        $this->title = $par;
    }

    function getTitle()
    {
        echo $this->title . " <br/>";
    }

    function __destruct()
    {
        echo "Destructed";
    }
}
?>
<?php
$physics = new Books();
$maths = new Books();
$chemistry = new Books();


$physics->setTitle("Physics for High School");
$chemistry->setTitle("Advanced Chemistry");
$maths->setTitle("Algebra");

$physics->setPrice(10);
$chemistry->setPrice(15);
$maths->setPrice(7);

echo $physics->getTitle();
echo $chemistry->getTitle();
echo $maths->getTitle();
echo $physics->getPrice();
echo $chemistry->getPrice();
echo $maths->getPrice();

?>