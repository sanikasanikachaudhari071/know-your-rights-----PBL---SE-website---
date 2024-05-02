<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Rights</title>
    <link rel="stylesheet" href="index.css">
    <style>
        .mySlides {display:none;}
        </style>
         <link rel="icon" href="law.png">
</head>

<body>
<header>
    <nav class="navbar">
        <div class="navigation">
            <ul class="menu">
                
                <li class="logo" style="color: aliceblue;"><h3>KNOW YOUR RIGHTS
                </h3></li>
                <li class="item" id="Home"><a href="index2.php">Home</a></li>
                <li class="item" id="about"><a href="aboutus.html">About Us</a></li>
                <li class="item" id="contact"><a href="contact.html">Contact Us</a></li>
                <li class="item" id="penal"><a href="https://lddashboard.legislative.gov.in/sites/default/files/A1860-45.pdf" target="_blank">Indian Penal Code doc</a></li>
                <li class="item" id="constituion"><a href="https://lddashboard.legislative.gov.in/sites/default/files/COI...pdf" target="_blank">Indian Constituion doc</a></li>
                <li class="toggle"><a href=""><span class="bars"></span></a></li>
            </ul>
        </div>
    </nav>

</header>
<main>
    <aside>
        <div class="content">
            <div class="cate"><h4>CATEGORY</h4></div>
            <button class="button"><a href="domestic-voilence.html">DOMESTIC VOILENCE</a></button>
            <button class="button"><a href="union.html">UNION TERRITORY</a></button>
            <button class="button"><a href="citizen.html">CITIZENSHIP</a></button>
            <button class="button"><a href="marriage-divorce.html">MARRIAGE AND DIVORCE</a></button>
            <button class="button"><a href="bmr.html">BANK & MONEY & RBI</a></button>
            <button class="button"><a href="construction.html">CONSTRUCTION</a></button>
            <button class="button"><a href="medical.html">MEDICAL & PHARMACEUTICAL</a></button>
            <button class="button"><a href="goods.html">GOODS & SHIPPING</a></button>
            <button class="button"><a href="shop.html">SHOP</a></button>
            <button class="button"><a href="factory.html">FACTORY</a></button>
            <button class="button"><a href="taxes.html">TAXES</a></button>
            <button class="button"><a href="agricultural.html">AGRICULTURAL</a></button> 
            <button class="button"><a href="land nd water.html">LAND & WATER LAW</a></button> 
            <button class="button"><a href="archeological.html">ARCHEOLOGICAL</a></button> 
            <button class="button"><a href="education.html">EDUCATIONAL & EXAMINATION</a></button> 
            <button class="button"><a href="liscence.html">LICENSE</a></button> 
            <button class="button"><a href="">PLIGRIMS</a></button> 
            <button class="button"><a href="transportation.html">TRANSPORTAION</a></button> 
            <button class="button"><a href="domestic-wild.html">DOMESTIC & WILDLIFE</a></button> 
            <button class="button"><a href="harrasement.html">HARASSMENT<small> (general)</small></a></button> 
            <button class="button"><a href="parliament.html">PARLIAMENT</a></button> 
            <button class="button"><a href="bills.html">BILLS / PRESIDENTIAL RIGHTS</a></button> 
            <button class="button"><a href="">UNIVERSAL LIBERTIES</a></button> 
            <button class="button"><a href="fundamental-rights.html">FUNDAMENTAL RIGHTS</a></button> 
        </div>
    </aside>
    <section>
        <div class="hwrap"><div class="hmove">
          <div class="hitem">● MADE BY SANIKA , TITIKSHA , SARVESH, AND VISHVAJEET ●</div>
          <div class="hitem">● KNOW YOUR RIGHTS ●</div>
          <div class="hitem">● PBL-PROJECT ●</div>
            <div class="hitem">● SECOND YEAR ●</div>
          </div></div>
          <div class="homepage">
            
              <h1>Welcome to Know Your Rights!</h1>

              <p>Unlock the complexities of the Indian Constitution and laws with ease. Whether you're a seasoned legal professional or a complete novice, our comprehensive platform is designed to guide you through the intricacies of Indian law.</p>

              <p>With user-friendly navigation and categorized sections, finding information on specific areas of law such as labor law, domestic violence, and more has never been simpler. Our website empowers you to explore and understand the nuances of the Indian legal system at your own pace.</p>

              <p>From fundamental rights enshrined in the Constitution to specialized laws governing diverse aspects of society, we provide valuable insights and resources to aid your journey towards legal enlightenment. Dive deep into the realm of Indian law and emerge with a clearer understanding and greater confidence.</p>

              <p>Start your exploration today and embark on a journey towards legal literacy and empowerment!</p>


            
          </div>
    </section>    
    <article>
        <!--<div class="article">
         <div class="all-data">   
        <div class="container">
          <form class="nosubmit" >
            <input class="nosubmit" type="search" placeholder="Search...">
          </form>
          </div>-->
        <div class="elements">
                <button class="button"><a href="schedu.html">SCHEDULE</a></button>
                <button class="button"><a href="part.html">PARTS</a></button>
                <button class="button"><a href="article.html">ARTICLES</a></button>
        </div>
        </div>
        <br>
        <h1 style="font-size: 2em;text-align: center;">NEWS</h1>
       <div class="news">
            <div class="w3-content w3-section" style="max-width:500px">
              <img class="mySlides" src="pblimg2.jpg" style="width:100%">
              <img class="mySlides" src="pblimg3.jpg" style="width:100%">
              <img class="mySlides" src="pbl4.jpg" style="width:100%">
            </div>
            
            <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carousel, 2000); // Change image every 2 seconds
            }
            </script>
            
        </div>
    </article>
    
</main>
<div>
<?php
$connection = new mysqli("localhost", "root", "sEb/JjWV7)57(YBK", "finals");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM comment";
$result = $connection->query($sql);

echo '<div class="comments-container">';
echo '<h2>Comments</h2>';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="comment">';
        echo '<div class="comment-info">';
        echo '<span class="comment-author">' . $row["author"] . '</span>';
        echo '<span class="comment-date">' . $row["date"] . '</span>';
        echo '</div>';
        echo '<p class="comment-text">' . $row["comment"] . '</p>';
        echo '</div>';
    }
} else {
    echo "<p>No comments yet.</p>";
}

echo '<div class="comment-form">';
echo '<form action="index.php" method="POST">';
echo '<input type="text" id="author" name="author" placeholder="Your Name">';
echo '<textarea id="comment-text" name="comment" placeholder="Your Comment"></textarea>';
echo '<button type="submit" id="add-comment">Add Comment</button>';
echo '</form>';
echo '</div>';
echo '</div>';

$connection->close();
?>
 <!--<div class="comments-container">

   <div class="comment">
      <div class="comment-info">
        <span class="comment-author">John Doe</span>
        <span class="comment-date">2 hours ago</span>
      </div>
      <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus varius, finibus orci id, placerat odio.</p>
    </div>
    <div class="comment-form">
      <form action="index.php" method="POST">
      <input type="text" id="author" placeholder="Your Name">
      <textarea id="comment-text" placeholder="Your Comment"></textarea>
      <button type="submit" id="add-comment">Add Comment</button>
    </form>
    </div>
  </div>-->

  <script>
    document.addEventListener('DOMContentLoaded', function () {
const addCommentButton = document.getElementById('add-comment');
addCommentButton.addEventListener('click', function () {
const authorInput = document.getElementById('author');
const commentTextInput = document.getElementById('comment-text');
const author = authorInput.value;
const commentText = commentTextInput.value;

if (author && commentText) {
const commentContainer = document.createElement('div');
commentContainer.classList.add('comment');

const commentInfo = document.createElement('div');
commentInfo.classList.add('comment-info');

const authorSpan = document.createElement('span');
authorSpan.classList.add('comment-author');
authorSpan.textContent = author;

const dateSpan = document.createElement('span');
dateSpan.classList.add('comment-date');
const currentDate = new Date();
dateSpan.textContent = currentDate.toLocaleString();

commentInfo.appendChild(authorSpan);
commentInfo.appendChild(dateSpan);

const commentTextParagraph = document.createElement('p');
commentTextParagraph.classList.add('comment-text');
commentTextParagraph.textContent = commentText;

commentContainer.appendChild(commentInfo);
commentContainer.appendChild(commentTextParagraph);

const commentsSection = document.querySelector('.comments-container');
commentsSection.insertBefore(commentContainer, commentsSection.children[1]);

// Clear input fields
authorInput.value = '';
commentTextInput.value = '';
} else {
alert('Please fill in both fields!');
}
});
});

  </script>
</div>
<footer>
  <h4 style="text-align: center;color: rgba(255, 255, 255, 0.782);">&copy copyrights 2024</h4>
</footer>


</body>
</html>
  