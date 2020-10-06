// PHP - Random Quote Generator
<?php

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = [
  [
      "quote" => "Numbing the pain for a while will make it worse when you finally feel it.",
      "source" => "Albus Dumbledore",
      "citation" => "The Goblet of Fire "
  ]
  [
      "quote" => "It is the unknown we fear when we look upon death and darkness, nothing more.",
      "source" => "Albus Dumbledore",
      "citation" => "The Half-Blood Prince"
  ]
  [
      "quote" => "I'll just go down and have some pudding and wait for it all to turn up ... It always does in the end.",
      "source" => "Luna Lovegood",
      "citation" => "The Order of the Phoenix"
  ]
  [
      "quote" => "If you want to know what a man’s like, take a good look at how he treats his inferiors, not his equals.",
      "source" => "Sirius Black",
      "citation" => "The Goblet of Fire"
  ]
  [
      "quote" => "Time will not slow down when something unpleasant lies ahead.",
      "source" => "Harry Potter",
      "citation" => "The Goblet of Fire"
  ]
  [
      "quote" => "Always",
      "source" => "Severus Snape",
      "citation" => "the Deathly Hallows: Part 1",
      "Year" => "2010",
      "mood" => "sad"
  ]
]


// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($array){
    $randomNumber = rand(0,count($array)-1);
    return $array[$randomNumber];
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