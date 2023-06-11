<!DOCTYPE html>
<html>
<head>
  <title>Like Post Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .liked {
      color: red;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Like Post Example</h1>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Post Title</h5>
        <p class="card-text">This is a sample post.</p>
        <?php
          // Assuming you have a $postId variable containing the ID of the post
          echo '<button id="likeButton" class="btn btn-outline-primary" data-postid="' . $postId . '">Like</button>';
        ?>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#likeButton").click(function() {
        var postId = $(this).data("postid");
        $.ajax({
          type: "POST",
          url: "like_post.php",
          data: { postId: postId },
          success: function(response) {
            if (response === "liked") {
              $("#likeButton").toggleClass("liked");
            }
          }
        });
      });
    });
  </script>
</body>
</html>
