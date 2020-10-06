
<?php

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = [
  [
      "quote" => "Numbing the pain for a while will make it worse when you finally feel it.",
      "source" => "Albus Dumbledore",
      "citation" => "The Goblet of Fire "
  ],
  [
      "quote" => "It is the unknown we fear when we look upon death and darkness, nothing more.",
      "source" => "Albus Dumbledore",
      "citation" => "The Half-Blood Prince"
  ],
  [
      "quote" => "You’re just as sane as I am.",
      "source" => "Luna Lovegood",
      "citation" => "The Half-Blood Prince"
  ],
  [
      "quote" => "Not my daughter, you b*tch!",
      "source" => "Molly Weasly",
      "citation" => "the Deathly Hallows: Part 2"
  ],
  [
      "quote" => "Time will not slow down when something unpleasant lies ahead.",
      "source" => "Harry Potter",
      "citation" => "The Goblet of Fire"
  ],
  [
      "quote" => "Always",
      "source" => "Severus Snape",
      "citation" => "the Deathly Hallows: Part 1",
      "Year" => "2010",
      "mood" => "saddest part in the movie"
  ]
  ];


// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($array){
    $randomNumber = rand(0,count($array)-1);
    return $array[$randomNumber];
}

function randomColor(){
    $colors=["#740001", "#AE0001", "#D3A625", "#EEBA30", "#000000", "#C0C0C0"];
    $randnum=rand(0,count($colors)-1);
    return $colors[$randnum];

}
// Create the printQuote funtion and name it printQuote

function printQuote($array){
  $html="";
  $printArray= getRandomQuote($array);
  $html.="<p class=quote>".$printArray["quote"];
  $html.="<p class=source>".$printArray["source"];
  $html.="<p class=citation>".$printArray["citation"];
  if(isset($printArray["year"])){
      $html.="<span class=year>".$printArray["year"]."</span>";
  }
  if(isset($printArray["mood"])){
      $html.="<span class=mood>".$printArray["mood"]."</span>";
  }
  $html.="</p>";

  return $html;
}


?>