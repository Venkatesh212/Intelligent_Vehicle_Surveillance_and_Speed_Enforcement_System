<!DOCTYPE html>
<html>
  <head>
    <title>Video Processing</title>
    <style>
      body {
		background-image: url('https://shorturl.at/LNRTU');
		background-position: center;
        font-family: "Arial", sans-serif;
        background-size: cover;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      #container {
        background-color: gold;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
      }
      .welcome-user {
        position: absolute;
        top: 10px;
        right: 10px;
      }
      h1 {
        color: #333;
      }
      .option {
        margin: 20px 0;
      }
      .button {
        background-color: black;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }
      .button:hover {
        background-color: black;
      }
      .file-input {
        display: none;
      }
      label.upload-label {
        display: block;
        background-color: black;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }
      label.upload-label:hover {
        background-color: black;
      }
      .processing-message {
        display: none;
        font-size: 24px;
        color: #0074d9;
        margin-top: 20px;
      }
      .download-link {
        display: none;
      }
    </style>

  </head>
  <body>
    <div id="container">
      <div class="welcome-user">
        <p>Welcome, User! <a href="index.php">Logout</a></p>
      </div>
      <h1>Video Processing Options</h1>
      <div class="option">
        <label for="uploadVideo" class="upload-label">Upload Video</label>
        <input
          type="file"
          id="uploadVideo"
          accept="video/*"
          class="file-input"
        />
      </div>
      <div class="option">
        <button class="button" id="processVideo">Train</button>
        <p class="processing-message">Processing...</p>
      </div>
      <div class="option">
        <a class="button download-link" id="downloadVideo" href="#" download
          >Download</a
        >
      </div>
    </div>

    <script>
      document
        .getElementById("processVideo")
        .addEventListener("click", function () {
          // Display the "Processing" message and hide the other options
          document.querySelector(".processing-message").style.display = "block";
          document.getElementById("uploadVideo").style.display = "none";
          document.getElementById("processVideo").style.display = "none";

          // Simulate processing (you should replace this with your actual processing logic)
          setTimeout(function () {
            // Once processing is complete, enable the download button and hide the message
            document.getElementById("downloadVideo").style.display =
              "inline-block";
            document.querySelector(".processing-message").style.display =
              "none";
          }, 3000); // Simulating a 3-second processing time
        });

      // Reset the page when a new video is uploaded
      document
        .getElementById("uploadVideo")
        .addEventListener("change", function () {
          document.getElementById("downloadVideo").style.display = "none";
          document.querySelector(".processing-message").style.display = "none";
          document.getElementById("uploadVideo").style.display = "inline-block";
          document.getElementById("processVideo").style.display =
            "inline-block";
        });
    </script>
  </body>
</html>