<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f8f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Entry Form</h1>
        <form method="post" action="index.php">
            <label for="studentName">Student Name</label>
            <input type="text" id="studentName" name="studentName" required>

            <label for="studentId">Student ID</label>
            <input type="text" id="studentId" name="studentId" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="course">Course</label>
            <select id="course" name="course" required>
                <option value="">Choose a course</option>
                <option value="math">Mathematics</option>
                <option value="science">Science</option>
                <option value="history">History</option>
                <option value="english">English</option>
                <option value="computer_science">Computer Science</option>
            </select>

            <label for="notes">Notes</label>
            <textarea id="notes" name="notes" rows="4"></textarea>

            <button type="submit">Submit Student</button>
        </form>
    </div>
</body>
</html>