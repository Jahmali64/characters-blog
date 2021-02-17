<?php include ("includes/header.php"); ?>

<div class="jumbotron clearfix">
  <h1><?php echo APP_NAME ?></h1>
  <p class="lead">This is a basic PHP application that is connected to a database and allows users to create, read, update, delete and search items in the database.</p>
</div>

<p>One Piece is a Japanese manga series written and illustrated by Eiichiro Oda. It has been serialized in Shueisha's Weekly Shōnen Jump magazine since July 1997, with its individual chapters compiled into 98 tankōbon volumes as of February 2021. The story follows the adventures of Monkey D. Luffy, a boy whose body gained the properties of rubber after unintentionally eating a Devil Fruit. With his crew of pirates, named the Straw Hat Pirates, Luffy explores the Grand Line in search of the world's ultimate treasure known as "One Piece" in order to become the next King of the Pirates.</p>

<p>The manga spawned a media franchise, having been adapted into a festival film produced by Production I.G, and an anime series produced by Toei Animation, which began broadcasting in Japan in 1999. Additionally, Toei has developed fourteen animated feature films, one original video animation and thirteen television specials. Several companies have developed various types of merchandising and media, such as a trading card game and numerous video games. The manga series was licensed for an English language release in North America and the United Kingdom by Viz Media and in Australia by Madman Entertainment. The anime series was licensed by 4Kids Entertainment for an English-language release in North America in 2004, before the license was dropped and subsequently acquired by Funimation in 2007.</p>

<p>One Piece has received praise for its storytelling, art, characterization, and humor. Several volumes of the manga have broken publishing records, including the highest initial print run of any book in Japan. The official website for Eiichiro Oda's One Piece manga announced that the manga has set the Guinness World Record for "the most copies published for the same comic book series by a single author". As of February 2021, the manga had over 480 million copies in circulation in 43 countries worldwide, making it the best-selling manga series in history. It became the best-selling manga for the eleventh consecutive year in 2018. One Piece is also one of the highest-grossing media franchises of all time.</p>

<?php
  $con = mysqli_connect("localhost","jmcknight12","YQKyWQRZCSdm4eS","jmcknight12_2025");
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // reading from a DB: SELECT
  $result = mysqli_query($con, "SELECT * FROM jmc_characters ORDER BY RAND() LIMIT 1") or die(mysqli_error($con));

  while($row = mysqli_fetch_array($result)){
    echo "<div class=\"card mb-3 bg-light shadow\">";
    echo "<p class=\"card-head pl-3 mb-0 mt-3\"><b>" .$row['jmc_fname']. " " .$row['jmc_lname']. "</b></p>";
    echo "<p class=\"card-body p-3\">" .$row['jmc_description']. "</p>";
    echo "</div>";
  }
?>

<?php include ("includes/footer.php"); ?>