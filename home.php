<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trio_aces - Chatbot Home</title>
  <style>
    /* Global styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
     /* background-color: #f0f0f0; */

     background-color: rgb(162, 174, 153);
    }

    /* Navigation bar styles */
    nav {
      background-color: #333;
      color: white;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav a {
      color: white;
      text-decoration: none;
      padding: 8px 16px;
    }

    nav a:hover {
      background-color: #555;
    }

    /* Main content styles */
    .containers {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      text-align:center;
    }

    /* Form styles */
    form {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    input[type="text"] {
      padding: 10px;
      width: 70%;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    div.containers{
      background-color: rgb(153, 170, 174);
    }
    
    footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            padding-bottom: 20px;
        }
        footer {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
}

        .social-links {
            margin-top: 10px;
        }
        .social-links a {
            display: inline-block;
            margin-right: 10px;
        }
        .social-links img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            transition: transform 0.3s ease;
        }
        .social-links img:hover {
            transform: scale(1.2);
        }

        .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
    }
    /* Text container styles */
    .text-container {
      flex-basis: 60%;
      text-align: center;
    }
    /* Image container styles */
    .image-container {
      flex-basis: 30%;
      text-align: center;
    }
    /* Image styles */
    .image-container img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }

  </style>
</head>

<body>
  <nav>
    <div>
      <a href="#">Trio_aces</a>
    </div>
    <div>
      <a href="index.php">Login</a>
      <a href="register.php">Signup</a>
    </div>
  </nav>

  <div class="containers">
    <h1 >Welcome to Trio_aces Openai</h1>
   

    <form  >
      <input type="text" placeholder="Type your message...">
      <input type="submit" value="Submit">
    </form>
  </div><br><br>
  <div class="container">
    <div class="text-container">
     
      <p>OpenAI is a research organization and AI lab that aims to ensure that artificial general intelligence (AGI) benefits all of humanity. It conducts research in various domains of artificial intelligence and develops tools and platforms to democratize AI.</p>
      <h2>Uses of OpenAI:</h2>
      <ul>
        <li>Natural language processing (NLP) - Understanding and generating human-like text.</li>
        <li>Machine learning - Training models to recognize patterns and make predictions.</li>
        <li>Robotics - Developing AI systems to control robots and automate tasks.</li>
        <li>Generative models - Creating realistic images, videos, and music using AI.</li>
      </ul>
      <h2>Types of OpenAI:</h2>
      <ol>
        <li>GPT (Generative Pre-trained Transformer) models - Used for language tasks like text generation and translation.</li>
        <li>DALL·E - Generates images from textual descriptions.</li>
        <li>CLIP (Contrastive Language-Image Pre-training) - Understands and generates images from text.</li>
        <li>Codex - AI system for natural language understanding and code generation.</li>
      </ol>
    </div>
    <div class="image-container">
      <img src="openai_logo.png" alt="OpenAI Logo">
    </div>
  </div>
  
<footer>
    <div class="social-links">
        <a href="https://www.instagram.com/" target="_blank">
            <img src="instagram.png" alt="Instagram">
        </a>
        <a href="https://www.youtube.com/" target="_blank">
            <img src="youtube.png" alt="YouTube">
        </a>
        <a href="https://twitter.com/" target="_blank">
            <img src="twitter.png" alt="Twitter">
        </a>
        <a href="https://www.facebook.com/" target="_blank">
            <img src="facebook.png" alt="Facebook">
        </a>
    </div>
    <p>Follow us on social media for updates!</p>
</footer>
</body>

</html>