<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch and Display Content</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        #content {
            width: 100%;
            height: 100%;
            overflow: auto;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div id="content"></div>

    <script>
        async function fetchContent() {
            try {
                const response = await fetch('https://large-mint-dogfish.ngrok-free.app', {
                    headers: {
                        'ngrok-skip-browser-warning': 'yay'
                    }
                });
                if (response.ok) {
                    const text = await response.text();
                    document.getElementById('content').innerHTML = text;
                } else {
                    console.error('Error fetching content:', response.statusText);
                }
            } catch (error) {
                console.error('Error fetching content:', error);
            }
        }

        fetchContent();
    </script>
</body>
</html>
