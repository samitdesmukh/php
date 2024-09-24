<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Analyzer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        textarea {
            width: 100%;
            height: 150px;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .result {
            background-color: #e2e8f0;
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
            margin-top: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Text Analyzer</h1>
    <form method="POST">
        <textarea name="text" placeholder="Enter your text here..."></textarea>
        <button type="submit" class="btn">Analyze</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $text = $_POST['text'];

        // Count words
        $wordCount = str_word_count($text);

        // Count characters
        $characterCount = strlen($text);

        // Count sentences
        $sentenceCount = preg_match_all('/[^\s](\.|\!|\?)(?!\w)/', $text);

        echo "<div class='result'>
                <p><strong>Word Count:</strong> $wordCount</p>
                <p><strong>Character Count:</strong> $characterCount</p>
                <p><strong>Sentence Count:</strong> $sentenceCount</p>
              </div>";
    }
    ?>
</div>

</body>
</html>
