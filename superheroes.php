<?php

$superheroes = [
  [
      "id" => 1,
      "name" => "Steve Rogers",
      "alias" => "Captain America",
      "biography" => "Recipient of the Super-Soldier serum, World War II hero Steve Rogers fights for American ideals as one of the world’s mightiest heroes and the leader of the Avengers.",
  ],
  [
      "id" => 2,
      "name" => "Tony Stark",
      "alias" => "Ironman",
      "biography" => "Genius. Billionaire. Playboy. Philanthropist. Tony Stark's confidence is only matched by his high-flying abilities as the hero called Iron Man.",
  ],
  [
      "id" => 3,
      "name" => "Peter Parker",
      "alias" => "Spiderman",
      "biography" => "Bitten by a radioactive spider, Peter Parker’s arachnid abilities give him amazing powers he uses to help others, while his personal life continues to offer plenty of obstacles.",
  ],
  [
      "id" => 4,
      "name" => "Carol Danvers",
      "alias" => "Captain Marvel",
      "biography" => "Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.",
  ],
  [
      "id" => 5,
      "name" => "Natasha Romanov",
      "alias" => "Black Widow",
      "biography" => "Despite super spy Natasha Romanoff’s checkered past, she’s become one of S.H.I.E.L.D.’s most deadly assassins and a frequent member of the Avengers.",
  ],
  [
      "id" => 6,
      "name" => "Bruce Banner",
      "alias" => "Hulk",
      "biography" => "Dr. Bruce Banner lives a life caught between the soft-spoken scientist he’s always been and the uncontrollable green monster powered by his rage.",
  ],
  [
      "id" => 7,
      "name" => "Clint Barton",
      "alias" => "Hawkeye",
      "biography" => "A master marksman and longtime friend of Black Widow, Clint Barton serves as the Avengers’ amazing archer.",
  ],
  [
      "id" => 8,
      "name" => "T'challa",
      "alias" => "Black Panther",
      "biography" => "T’Challa is the king of the secretive and highly advanced African nation of Wakanda - as well as the powerful warrior known as the Black Panther.",
  ],
  [
      "id" => 9,
      "name" => "Thor Odinson",
      "alias" => "Thor",
      "biography" => "The son of Odin uses his mighty abilities as the God of Thunder to protect his home Asgard and planet Earth alike.",
  ],
  [
      "id" => 10,
      "name" => "Wanda Maximoff",
      "alias" => "Scarlett Witch",
      "biography" => "Notably powerful, Wanda Maximoff has fought both against and with the Avengers, attempting to hone her abilities and do what she believes is right to help the world.",
  ], 
];

?>
<h1>Result</h1><hr>
<?php
$hero = filter_var($_GET["hero"],FILTER_SANITIZE_STRING);
$find = False;

foreach ($superheroes as $superhero):
    if(strtolower($superhero['name']) == strtolower($hero)|| strtolower($superhero['alias']) == strtolower($hero)){
        $find = True;
?>
        <img src="images/avengers/<?= $superhero['alias'];?>.jpg" alt="image of <?= $superhero['alias'];?>">
        <h3><?= strtoupper($superhero['alias']); ?></h3>
        <h4>A.K.A <?= strtoupper($superhero['name']); ?></h4>
        <p><?= $superhero['biography']; ?></p>
<?php
    } 
endforeach; 
if($find==False && !empty($hero)){ 
?>
    <p id="error">SUPERHERO NOT FOUND</p><br>
    <img src="images/avengers/avengers.jpg" alt="image of Avengers">

<?php } 
else if($find==False && empty($hero)) {
?>
    <img src="images/avengers/avengers.jpg" alt="image of Avengers"><br>
    <ul>
    <?php foreach ($superheroes as $superhero):
?>
        <li class="choice"><a value="superheroes.php?hero=<?= $superhero['alias']; ?>"><?= $superhero['alias']; ?></a></li>
    <?php endforeach;
} 
?>
</ul>