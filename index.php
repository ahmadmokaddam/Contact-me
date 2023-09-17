<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmad Mokadam - ملف شخصي</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        #header {
            background-color: #007bff;
            color: #fff;
            padding: 20px 0;
            font-size: 24px;
        }

        #container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            max-width: 800px;
            text-align: center;
        }

        #container img {
            width: 200px;
            border-radius: 50%;
            margin: 20px auto;
            display: block;
        }

        h1 {
            color: #009933; /* تلوين النص باللون الأخضر */
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            background-color: #f9f9f9; /* خلفية خفيفة للنصوص */
            padding: 10px;
            border-radius: 5px;
        }

        h2 {
            font-size: 20px;
            margin-top: 20px;
            color: #ff6600; /* تلوين النص باللون البرتقالي */
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        #contact-form {
            text-align: left;
            margin-top: 20px;
            background-color: #f9f9f9; /* خلفية لصندوق الرسائل */
            padding: 20px;
            border-radius: 10px;
        }

        #contact-form label {
            display: block;
            font-size: 18px;
            margin-bottom: 10px;
            color: #333; /* تلوين النص باللون الأسود */
        }

        #contact-form input[type="text"],
        #contact-form input[type="email"],
        #contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        #contact-form textarea {
            height: 150px;
        }

        #contact-form button[type="submit"] {
            background-color: #009933;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        #contact-form button[type="submit"]:hover {
            background-color: #0056b3;
        }

        #notification {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            text-align: center;
            padding: 10px;
            z-index: 1000;
            display: none;
        }

        #notification.success {
            background-color: #4CAF50;
            color: #fff;
        }

        #notification.error {
            background-color: #f44336;
            color: #fff;
        }

        #notification p {
            margin: 0;
            font-size: 18px;
        }

        #notification p:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="header">
        Ahmad Mokadam - ملف شخصي
    </div>

    <div id="container">
        <img src="IMG_8975.jpg" alt="صورة أحمد مقدم" width="300">
        <h1 style="color: #009933;">مرحبًا بك في ملفي الشخصي</h1>
        <a href="https://github.com/ahmadmokaddam/Contact-me/" download>
  <button>تحميل السكربت</button>
</a>

        <p>
            أنا Ahmad Mokadam، أنا شخص يعشق تطوير البرمجيات والذكاء الاصطناعي.
            هذه ملفي الشخصي لعرض معلوماتي الشخصية ومهاراتي.
        </p>
        <h2 style="color: #ff6600;">معلومات عني:</h2>
        <ul>
            <li><strong>الاسم:</strong> Ahmad Mokadam</li>
            <li><strong>العمر:</strong> 34 سنة قبل الميلاد</li>
            <li><strong>الإقامة:</strong> مدينة الذكاء الاصطناعي</li>
        </ul>
        <h2 style="color: #ff6600;">مهاراتي:</h2>
        <ul>
            <li>تطوير الويب باستخدام HTML، CSS، و PHP .Laravel .Java & (Java Script)</li>
            <li>تطوير التطبيقات باستخدام Python و Java .Objectiv-C . Swift .Kotline</li>
            <li>تطوير الذكاء الاصطناعي باستخدام TensorFlow و PyTorch</li>
        </ul>

        <h2 style="color: #ff6600;">اتصل بي:</h2>
        <form id="contact-form" action="index.php.php" method="post">
            <label for="name" style="color: #333;">الاسم:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email" style="color: #333;">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="message" style="color: #333;">رسالتك:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>

            <button type="submit" name="submit" style="background-color: #009933; color: #fff;">إرسال</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // تقوم هنا بإرسال البريد الإلكتروني إلى عنوان البريد الإلكتروني الخاص بك
            mail('ahmadmokaddam@gmail.com', 'رسالة من ملفي الشخصي', $message, 'From: ' . $email);

            echo '<p style="color: #009933;">تم إرسال الرسالة بنجاح. سأقوم بالرد عليك في أقرب وقت ممكن.</p>';
        }
        ?>
    </div>
</body>
</html>
