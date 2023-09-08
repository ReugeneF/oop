<?php
//Create class
class room{
    // Constructs the variables needed for the rooms
    public function __construct(public string $name,public float $length, public float $width, public float $height)
    {
    }
    //Sets Volume of the rooms ( Calculates )
    public function setVolume(){
        return $this->volume = $this->length * $this->width * $this->height;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getVol(){
        return $this->name . "| Length: ". $this->length . "m Widght:, " . $this->width . "m Height " . $this->height . " <br>";
    }
}
class house{
    //used to store the rooms
    private array $rooms = [];
    //adds rooms to the array
    public function addRoom(room $room)
    {
        $this->rooms[] = $room;
    }
    // Gets the rooms
    public function getRooms()
    {
        return $this->rooms;
    }
// Sets volume to 0, each room added increases the volume
    public function setVolume(){
        $totalVolume = 0;
        foreach($this->rooms as $room){
            $totalVolume += $room->setVolume();
        }
        return number_format($totalVolume, 2);
    }
    // Calculates price
    public function getPrice()
    {
        return "The total price of the house is: &euro;" . ($this->setVolume() * 1500);
    }

}
// Create house
$house = new House();

//Create room
$room1 = new Room("Room 1", 5.2,5.1,5.5);
$room2 = new Room("Room 2", 4.8,4.6,4.9);
$room3 = new Room("Room 3", 5.9,2.5,3.1);

//Connects rooms to house
$house->addRoom($room1);
$house->addRoom($room2);
$house->addRoom($room3);

// Rooms to array
$roomsArray = $house->getRooms();

// Prints the array of the rooms
foreach ($roomsArray as $room) {
    echo $room->getVol();
}
// Prints the total price
echo "The total volume of this house is: " . $house->setVolume() . "m3 <br>";
echo $house->getPrice();

