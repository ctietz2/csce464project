<!DOCTYPE html>
<html lang="en">
<head>
  <title>YourPort</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" href="icon.png">
  <link rel="stylesheet" type="text/css" media="screen and (min-width: 501px)"href="web.css">
  <link rel="stylesheet" type="text/css" media="screen and (max-width: 500px)" href="mobile.css">
  <script src="dark_mode.js"></script>
</head>
<header>
  <img src="logo-removebg-preview.png" alt="YourPort (Logo)" id="logo">
  <input type="button" value="Dark/Light" id="dark_button">
</header>
<nav>
  <div class="flex_container">
    <div class="nav_item">
      <a href="index.html">Home</a>
    </div>
    <div class="nav_item">
      <a href="extra1.html">Extra 1</a>
    </div>
    <div class="nav_item">
      <a href="extra2.html">Extra 2</a>
    </div>
    <div class="nav_item">
      <a href="Feedback.html">Feedback</a>
    </div>
  </div>
</nav>
<body>
  <h1>Extra 2</h1>
  <div class="flex_container">
    <div class="flex_container">
      <div class="flex_item">
        <form id="form1">
          <input type="radio" id="student" name="viewer">
          <label for="student">Student</label><br>
          <input type="radio" id="instructor" name="viewer">
          <label for="instructor">Instructor</label><br>
          <input type="radio" id="other" name="viewer">
          <label for="other">Other: </label>
          <input type="text" id="other_text"><br>
          <div class="button_container">
            <input type="submit" class="button" onclick="event.preventDefault()">
            <input type="reset" class="button">
          </div>
        </form>
      </div>
      <div class="flex_item">
        <form id="form2">
          <label for="review" id="instructions">After watching the video, please leave a review: </label><br><br>
          <textarea style="resize:none" id="review" name="review" rows="6" cols="40"></textarea><br>
          <div class="button_container">
            <input type="submit" class="button" onclick="event.preventDefault()">
          </div>
        </form>
      </div>
      <div class="flex_item">
        <h3>Comments:</h3>
        <br>
        <p>John Doe:</p>
        <p>Wow I love this video! 10/10! Yoga is my life!</p>
        <p>11/2/23</p>
        <br><br>
        <p>Jane Doe:</p>
        <p>This is the most boring video I've ever seen. 30 seconds of my life I will never get back.</p>
        <p>11/7/23</p>
      </div>
      <!-- <td>
        <iframe width="478" height="268" src="https://www.youtube.com/embed/TSSPDwAQLXs" title="Grizzly Bears Catching Salmon | Nature&#39;s Great Events | BBC Earth" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </td> -->
    </div>
    <div class="flex_container">
      <div class="flex_item" id="video1">
        <video width="320" height="180" controls>
          <source src="video/outdoor.mp4" type="video/mp4">
          <source src="video/outdoor.ogv" type="video/ogg">
          Browser does not support video.
        </video><br><br>
      </div>
      <div class="flex_item" id="video1big">
        <video width="640" height="360" controls>
          <source src="video/outdoor.mp4" type="video/mp4">
          <source src="video/outdoor.ogv" type="video/ogg">
          Browser does not support video.
        </video><br><br>
      </div>
      <div class="flex_item">
        <h3>Video Description:</h3>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Adipiscing elit duis tristique sollicitudin nibh. Lorem ipsum dolor sit amet consectetur adipiscing elit duis. Ut eu sem 
          integer vitae justo eget. Commodo sed egestas egestas fringilla phasellus. Quis enim lobortis scelerisque fermentum. At in 
          tellus integer feugiat. Volutpat ac tincidunt vitae semper quis lectus nulla at volutpat. Mi in nulla posuere sollicitudin 
          aliquam. Pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies.</p>
        <p>Facilisi etiam dignissim diam quis enim. Fermentum leo vel orci porta non pulvinar neque laoreet. Fringilla phasellus 
          faucibus scelerisque eleifend. Ultricies mi quis hendrerit dolor magna eget. Et magnis dis parturient montes. Vitae aliquet 
          nec ullamcorper sit. Odio facilisis mauris sit amet massa. Aenean euismod elementum nisi quis eleifend quam adipiscing vitae. 
          Elit sed vulputate mi sit amet mauris commodo. Leo a diam sollicitudin tempor id eu nisl nunc. Cras ornare arcu dui vivamus 
          arcu felis bibendum ut. Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis.</p>
      </div>
    </div>
  </div>
</body>
<script>
  var dark_button = document.querySelector('#dark_button');
  dark_button.addEventListener('click', darkMode);
</script>
<footer>
  <p>Spring 2024 &emsp; CSCE464 Project</p>
</footer>
</html>