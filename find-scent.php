<!DOCTYPE html>
<html lang="th">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ค้นหากลิ่นที่ใช่ | VELOURA PERFUMES</title>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&family=Noto+Sans+Thai:wght@400;500;600;700&display=swap"
      rel="stylesheet">


<style>

/* =========================================
   RESET
========================================= */

* {
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {

    margin: 0;

    font-family:
        "Noto Sans Thai",
        "Montserrat",
        sans-serif;

    background:
        radial-gradient(
            circle at top left,
            #fff7f5,
            transparent 35%
        ),
        linear-gradient(
            135deg,
            #f7ebe8,
            #f5dfe3,
            #eee0df
        );

    color: #422c35;

    min-height: 100vh;
}


/* =========================================
   NAVBAR
========================================= */

.navbar {

    height: 80px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 0 7%;

    background:
        rgba(255,255,255,.82);

    backdrop-filter: blur(15px);

    border-bottom:
        1px solid rgba(100,60,70,.08);

    position: sticky;

    top: 0;

    z-index: 20;
}


.logo {

    text-decoration: none;

    color: #593544;
}


.logo-main {

    font-family:
        "Cormorant Garamond",
        serif;

    font-size: 32px;

    font-weight: 700;

    letter-spacing: 6px;
}


.logo-sub {

    font-size: 9px;

    letter-spacing: 4px;

    margin-left: 4px;
}


.nav-right {

    display: flex;

    align-items: center;

    gap: 15px;
}


.nav-user {

    color: #765968;

    font-size: 14px;
}


.back-btn {

    text-decoration: none;

    padding: 9px 18px;

    border-radius: 30px;

    border: 1px solid #d9b9c4;

    color: #65404f;

    font-size: 13px;

    transition: .3s;
}


.back-btn:hover {

    background: #65404f;

    color: white;
}


/* =========================================
   HERO
========================================= */

.hero {

    max-width: 1000px;

    margin: 55px auto 25px;

    padding: 0 25px;

    text-align: center;
}


.eyebrow {

    font-size: 12px;

    letter-spacing: 5px;

    color: #9c6b7b;

    font-weight: 600;
}


.hero h1 {

    margin: 10px 0;

    font-family:
        "Cormorant Garamond",
        serif;

    font-size: 60px;

    line-height: 1;

    color: #4d2c39;
}


.hero p {

    max-width: 650px;

    margin: 20px auto;

    line-height: 1.9;

    color: #74636a;

    font-size: 15px;
}


/* =========================================
   CONTAINER
========================================= */

.container {

    max-width: 920px;

    margin: auto;

    padding: 20px 25px 80px;
}


/* =========================================
   FORM CARD
========================================= */

.card {

    background:
        rgba(255,255,255,.92);

    border-radius: 30px;

    padding: 40px;

    box-shadow:
        0 20px 60px rgba(85,45,60,.12);

    border:
        1px solid rgba(120,80,90,.08);
}


.section {

    margin-bottom: 38px;
}


.section-title {

    display: flex;

    align-items: center;

    gap: 10px;

    font-size: 20px;

    font-weight: 700;

    color: #51323e;

    margin-bottom: 18px;
}


/* =========================================
   OPTIONS
========================================= */

.options {

    display: grid;

    grid-template-columns:
        repeat(2,1fr);

    gap: 12px;
}


.option {

    position: relative;
}


.option input {

    position: absolute;

    opacity: 0;
}


.option label {

    display: block;

    padding: 17px;

    border: 1px solid #ead8dd;

    border-radius: 18px;

    cursor: pointer;

    transition: .25s;

    background: #fffafa;

    font-size: 14px;
}


.option label:hover {

    border-color: #b98697;

    transform: translateY(-2px);
}


.option input:checked + label {

    background:
        linear-gradient(
            135deg,
            #f3dce2,
            #f9eeee
        );

    border-color: #9d6578;

    box-shadow:
        0 7px 20px rgba(120,70,85,.10);
}


/* =========================================
   BUTTON
========================================= */

.submit-btn {

    width: 100%;

    border: 0;

    padding: 18px;

    border-radius: 50px;

    background:
        linear-gradient(
            135deg,
            #633c4c,
            #9a6074
        );

    color: white;

    font-size: 16px;

    font-family: inherit;

    font-weight: 700;

    cursor: pointer;

    box-shadow:
        0 12px 30px rgba(92,52,68,.25);

    transition: .3s;
}


.submit-btn:hover {

    transform: translateY(-3px);

    box-shadow:
        0 18px 35px rgba(92,52,68,.32);
}


/* =========================================
   MESSAGE
========================================= */

.message {

    margin-bottom: 25px;

    padding: 18px 20px;

    border-radius: 18px;

    text-align: center;

    font-size: 14px;
}


.success {

    background: #edf8f1;

    color: #286440;

    border: 1px solid #cce8d5;
}


/* =========================================
   RESULTS
========================================= */

.results {

    margin-top: 45px;

    display: none;
}


.results.show {

    display: block;

    animation: fadeUp .6s ease;
}


@keyframes fadeUp {

    from {

        opacity: 0;

        transform: translateY(20px);

    }

    to {

        opacity: 1;

        transform: translateY(0);

    }

}


.results-title {

    text-align: center;

    font-family:
        "Cormorant Garamond",
        serif;

    font-size: 46px;

    color: #4d2c39;
}


.results-sub {

    text-align: center;

    color: #78676d;

    font-size: 14px;

    margin-bottom: 30px;
}


/* =========================================
   PRODUCTS
========================================= */

.products {

    display: grid;

    grid-template-columns:
        repeat(3,1fr);

    gap: 20px;
}


.product {

    background: white;

    border-radius: 24px;

    overflow: hidden;

    box-shadow:
        0 15px 35px rgba(70,40,50,.10);

    transition: .3s;
}


.product:hover {

    transform: translateY(-7px);

    box-shadow:
        0 20px 40px rgba(70,40,50,.16);
}


.product-img {

    width: 100%;

    height: 270px;

    object-fit: cover;

    background: #f7eeee;
}


.product-body {

    padding: 23px;
}


.rank {

    font-size: 11px;

    color: #a56d80;

    letter-spacing: 2px;

    font-weight: bold;
}


.product h3 {

    margin: 7px 0;

    font-family:
        "Cormorant Garamond",
        serif;

    font-size: 28px;

    color: #4c2d39;
}


.price {

    font-size: 20px;

    color: #995c70;

    font-weight: 700;
}


.desc {

    color: #75666b;

    font-size: 13px;

    line-height: 1.8;

    min-height: 70px;
}


.view-product {

    display: block;

    text-align: center;

    text-decoration: none;

    margin-top: 18px;

    padding: 11px;

    border-radius: 30px;

    background: #5e3949;

    color: white;

    font-size: 13px;

    font-weight: 600;

    transition: .3s;
}


.view-product:hover {

    background: #402633;

    transform: translateY(-2px);
}


/* =========================================
   EMAIL NOTICE
========================================= */

.email-notice {

    margin-top: 30px;

    padding: 22px;

    background:
        linear-gradient(
            135deg,
            #fbf0f3,
            #f9e7ec
        );

    border-radius: 20px;

    text-align: center;

    color: #654552;

    font-size: 14px;
}


.email {

    font-weight: 700;

    color: #8d566a;
}


/* =========================================
   FOOTER
========================================= */

.footer {

    margin-top: 30px;

    padding: 35px 20px;

    text-align: center;

    background: #402936;

    color: white;
}


.footer-logo {

    font-family:
        "Cormorant Garamond",
        serif;

    font-size: 27px;

    letter-spacing: 5px;

    font-weight: 700;
}


.footer-sub {

    font-size: 10px;

    letter-spacing: 3px;

    margin-top: 7px;

    color: #e5cfd7;
}


.footer-copy {

    font-size: 11px;

    margin-top: 15px;

    color: #cdb9c1;
}


/* =========================================
   RESPONSIVE
========================================= */

@media(max-width:750px) {

    .hero h1 {

        font-size: 45px;

    }


    .card {

        padding: 25px 20px;

    }


    .options {

        grid-template-columns: 1fr;

    }


    .products {

        grid-template-columns: 1fr;

    }


    .navbar {

        padding: 0 20px;

    }


    .nav-user {

        display: none;

    }


    .logo-main {

        font-size: 27px;

    }

}

</style>

</head>


<body>


<!-- =========================================
     NAVBAR
========================================= -->

<header class="navbar">

<a href="homeveloura.html" class="logo">

    <div class="logo-main">
        VELOURA
    </div>

    <div class="logo-sub">
        PERFUMES
    </div>

</a>


<div class="nav-right">

    <div class="nav-user">
        ♡ ค้นหากลิ่นของคุณ
    </div>

    <a href="homeveloura.html" class="back-btn">
        กลับหน้าหลัก
    </a>

</div>

</header>



<!-- =========================================
     HERO
========================================= -->

<section class="hero">

    <div class="eyebrow">
        FIND YOUR SIGNATURE SCENT
    </div>

    <h1>
        ค้นหากลิ่นที่ใช่สำหรับคุณ ✨
    </h1>

    <p>

        ตอบคำถามสั้น ๆ แล้วให้ VELOURA
        ช่วยค้นหาน้ำหอมที่เข้ากับบุคลิก
        ไลฟ์สไตล์ และช่วงเวลาของคุณ
        พร้อมคัดมาให้ถึง <b>3 กลิ่น</b> 💕🌸

    </p>

</section>



<div class="container">


<!-- =========================================
     FORM
========================================= -->

<div class="card">

<form id="scentForm">


<!-- =========================================
     NOTES
========================================= -->

<div class="section">

<div class="section-title">

    🌸 คุณชอบโทนกลิ่นแบบไหน?

</div>


<div class="options">


<div class="option">

<input
    type="checkbox"
    name="favorite_notes"
    value="สดชื่น"
    id="note1">

<label for="note1">
    🍋 สดชื่น สะอาด มีชีวิตชีวา
</label>

</div>


<div class="option">

<input
    type="checkbox"
    name="favorite_notes"
    value="ดอกไม้"
    id="note2">

<label for="note2">
    🌹 ดอกไม้ หอมละมุน โรแมนติก
</label>

</div>


<div class="option">

<input
    type="checkbox"
    name="favorite_notes"
    value="หวาน"
    id="note3">

<label for="note3">
    🍰 หวาน น่ารัก ชวนหลงใหล
</label>

</div>


<div class="option">

<input
    type="checkbox"
    name="favorite_notes"
    value="ไม้"
    id="note4">

<label for="note4">
    🌲 ไม้ อบอุ่น สุขุม
</label>

</div>


<div class="option">

<input
    type="checkbox"
    name="favorite_notes"
    value="เซ็กซี่"
    id="note5">

<label for="note5">
    💋 เซ็กซี่ น่าค้นหา เย้ายวน
</label>

</div>


<div class="option">

<input
    type="checkbox"
    name="favorite_notes"
    value="หรูหรา"
    id="note6">

<label for="note6">
    ✨ หรูหรา ดูแพง มีเสน่ห์
</label>

</div>


<div class="option">

<input
    type="checkbox"
    name="favorite_notes"
    value="วานิลลา"
    id="note7">

<label for="note7">
    🍦 วานิลลา นุ่มละมุน
</label>

</div>


<div class="option">

<input
    type="checkbox"
    name="favorite_notes"
    value="มัสก์"
    id="note8">

<label for="note8">
    🤍 มัสก์ สะอาด นุ่มนวล
</label>

</div>


</div>

</div>



<!-- =========================================
     TIME
========================================= -->

<div class="section">

<div class="section-title">

    🕰️ คุณมักใช้น้ำหอมช่วงไหน?

</div>


<div class="options">


<div class="option">

<input
    type="radio"
    name="perfume_time"
    value="กลางวัน"
    id="time1"
    required>

<label for="time1">
    ☀️ กลางวัน
</label>

</div>


<div class="option">

<input
    type="radio"
    name="perfume_time"
    value="กลางคืน"
    id="time2">

<label for="time2">
    🌙 กลางคืน
</label>

</div>


<div class="option">

<input
    type="radio"
    name="perfume_time"
    value="ทุกเวลา"
    id="time3">

<label for="time3">
    ✨ ได้ทุกเวลา
</label>

</div>


</div>

</div>



<!-- =========================================
     WEATHER
========================================= -->

<div class="section">

<div class="section-title">

    🌤️ สภาพอากาศที่คุณอยู่บ่อย ๆ

</div>


<div class="options">


<div class="option">

<input
    type="radio"
    name="weather"
    value="ร้อน"
    id="weather1"
    required>

<label for="weather1">
    ☀️ อากาศร้อน
</label>

</div>


<div class="option">

<input
    type="radio"
    name="weather"
    value="เย็น"
    id="weather2">

<label for="weather2">
    ❄️ อากาศเย็น
</label>

</div>


<div class="option">

<input
    type="radio"
    name="weather"
    value="ทุกสภาพอากาศ"
    id="weather3">

<label for="weather3">
    🌤️ ทุกสภาพอากาศ
</label>

</div>


</div>

</div>



<!-- =========================================
     BUDGET
========================================= -->

<div class="section">

<div class="section-title">

    💰 งบประมาณที่คุณต้องการ

</div>


<div class="options">


<div class="option">

<input
    type="radio"
    name="budget"
    value="ไม่เกิน 60"
    id="budget1"
    required>

<label for="budget1">
    💵 ไม่เกิน ฿60
</label>

</div>


<div class="option">

<input
    type="radio"
    name="budget"
    value="61-70"
    id="budget2">

<label for="budget2">
    💎 ฿61 – ฿70
</label>

</div>


<div class="option">

<input
    type="radio"
    name="budget"
    value="71-80"
    id="budget3">

<label for="budget3">
    👑 ฿71 – ฿80
</label>

</div>


</div>

</div>



<!-- =========================================
     STYLE
========================================= -->

<div class="section">

<div class="section-title">

    💫 คุณจะใช้น้ำหอมในโอกาสไหนมากที่สุด?

</div>


<div class="options">


<div class="option">

<input
    type="radio"
    name="buying_style"
    value="ใช้ทุกวัน"
    id="style1"
    required>

<label for="style1">
    🌸 ใช้ทุกวัน
</label>

</div>


<div class="option">

<input
    type="radio"
    name="buying_style"
    value="ออกเดท"
    id="style2">

<label for="style2">
    💕 ออกเดท
</label>

</div>


<div class="option">

<input
    type="radio"
    name="buying_style"
    value="ทำงาน"
    id="style3">

<label for="style3">
    💼 ไปทำงาน
</label>

</div>


<div class="option">

<input
    type="radio"
    name="buying_style"
    value="ปาร์ตี้"
    id="style4">

<label for="style4">
    🥂 ปาร์ตี้
</label>

</div>


<div class="option">

<input
    type="radio"
    name="buying_style"
    value="โอกาสพิเศษ"
    id="style5">

<label for="style5">
    👑 โอกาสพิเศษ
</label>

</div>


</div>

</div>



<button
    type="submit"
    class="submit-btn">

    ✨ ค้นหากลิ่นที่ใช่สำหรับฉัน ✨

</button>


</form>

</div>



<!-- =========================================
     RESULTS
========================================= -->

<div
    class="results"
    id="results">


<div class="results-title">

    กลิ่นที่เราเลือกให้คุณ 💕

</div>


<div class="results-sub">

    เราเลือก 3 กลิ่นที่คิดว่าเหมาะกับคุณที่สุด
    จากสไตล์และความชอบที่คุณเลือก ✨

</div>


<div
    class="products"
    id="products">

</div>


<div class="email-notice">

    💌 <b>ผลลัพธ์ของคุณพร้อมแล้ว!</b>

    <br>

    ระบบได้วิเคราะห์สไตล์
    และคัดเลือกน้ำหอมที่เหมาะกับคุณที่สุด

    <div class="email">
        VELOURA PERFUMES ✨
    </div>

</div>


</div>


</div>



<!-- =========================================
     FOOTER
========================================= -->

<footer class="footer">

<div class="footer-logo">
    VELOURA
</div>

<div class="footer-sub">
    LUXURY PERFUMES
</div>

<div class="footer-copy">
    © 2026 VELOURA PERFUMES
</div>

</footer>



<script>

/* =========================================
   PRODUCT DATA
========================================= */

const products = [

    {
        id: 1,
        name: "Veloura Essence",
        price: 59,
        image: "perfume1.jpg",
        description:
            "กลิ่นสดชื่น สะอาด และนุ่มนวล เหมาะสำหรับการใช้งานในทุกวัน",
        notes: [
            "สดชื่น",
            "มัสก์"
        ]
    },

    {
        id: 2,
        name: "Veloura Rose",
        price: 65,
        image: "perfume2.jpg",
        description:
            "กลิ่นดอกไม้แสนละมุน ผสมความหวานของกุหลาบและวานิลลา",
        notes: [
            "ดอกไม้",
            "หวาน",
            "วานิลลา"
        ]
    },

    {
        id: 3,
        name: "Veloura Noir",
        price: 69,
        image: "perfume3.jpg",
        description:
            "กลิ่นเข้มลึก สุขุม และน่าค้นหา เหมาะกับช่วงกลางคืน",
        notes: [
            "ไม้",
            "เซ็กซี่",
            "หรูหรา"
        ]
    },

    {
        id: 4,
        name: "Veloura Bloom",
        price: 62,
        image: "perfume4.jpg",
        description:
            "กลิ่นดอกไม้สดใส ให้ความรู้สึกสดชื่นและมีชีวิตชีวา",
        notes: [
            "สดชื่น",
            "ดอกไม้"
        ]
    },

    {
        id: 5,
        name: "Crimson Desire",
        price: 75,
        image: "perfume5.jpg",
        description:
            "กลิ่นหอมเย้ายวนและเซ็กซี่ เหมาะสำหรับค่ำคืนสุดพิเศษ",
        notes: [
            "หวาน",
            "เซ็กซี่",
            "วานิลลา"
        ]
    },

    {
        id: 6,
        name: "Midnight Allure",
        price: 68,
        image: "perfume6.jpg",
        description:
            "กลิ่นหอมเข้มข้น น่าค้นหา และมีเสน่ห์ เหมาะสำหรับกลางคืน",
        notes: [
            "หวาน",
            "เซ็กซี่",
            "วานิลลา"
        ]
    },

    {
        id: 7,
        name: "Golden Elysium",
        price: 79,
        image: "perfume7.jpg",
        description:
            "กลิ่นหรูหรา อบอุ่น และดูแพง เหมาะสำหรับโอกาสพิเศษ",
        notes: [
            "หรูหรา",
            "ไม้",
            "มัสก์"
        ]
    },

    {
        id: 8,
        name: "Veloura Lavender",
        price: 64,
        image: "NOIR INTENSE.jpg",
        description:
            "กลิ่นละมุน สะอาด และผ่อนคลาย ผสมความหอมของดอกไม้",
        notes: [
            "ดอกไม้",
            "ไม้",
            "มัสก์"
        ]
    }

];


/* =========================================
   GET FORM
========================================= */

const form =
    document.getElementById("scentForm");

const results =
    document.getElementById("results");

const productsContainer =
    document.getElementById("products");


/* =========================================
   FORM SUBMIT
========================================= */

form.addEventListener("submit", function(event) {

    event.preventDefault();


    /* =====================================
       GET VALUES
    ===================================== */

    const favoriteNotes =
        Array.from(
            document.querySelectorAll(
                'input[name="favorite_notes"]:checked'
            )
        ).map(input => input.value);


    const perfumeTime =
        document.querySelector(
            'input[name="perfume_time"]:checked'
        ).value;


    const weather =
        document.querySelector(
            'input[name="weather"]:checked'
        ).value;


    const budget =
        document.querySelector(
            'input[name="budget"]:checked'
        ).value;


    const buyingStyle =
        document.querySelector(
            'input[name="buying_style"]:checked'
        ).value;


    /* =====================================
       CREATE SCORE
    ===================================== */

    const scores = {};


    products.forEach(product => {

        scores[product.name] = 0;

    });


    /* =====================================
       FAVORITE NOTES
    ===================================== */

    favoriteNotes.forEach(note => {

        switch(note) {

            case "สดชื่น":

                scores["Veloura Essence"] += 5;

                scores["Veloura Bloom"] += 5;

                scores["Golden Elysium"] += 3;

                break;


            case "ดอกไม้":

                scores["Veloura Rose"] += 6;

                scores["Veloura Bloom"] += 5;

                scores["Veloura Lavender"] += 4;

                break;


            case "หวาน":

                scores["Veloura Rose"] += 5;

                scores["Crimson Desire"] += 6;

                scores["Midnight Allure"] += 5;

                break;


            case "ไม้":

                scores["Veloura Noir"] += 6;

                scores["Golden Elysium"] += 5;

                scores["Veloura Lavender"] += 3;

                break;


            case "เซ็กซี่":

                scores["Crimson Desire"] += 7;

                scores["Veloura Noir"] += 6;

                scores["Midnight Allure"] += 6;

                break;


            case "หรูหรา":

                scores["Golden Elysium"] += 7;

                scores["Veloura Noir"] += 6;

                scores["Midnight Allure"] += 5;

                break;


            case "วานิลลา":

                scores["Veloura Rose"] += 4;

                scores["Midnight Allure"] += 6;

                scores["Crimson Desire"] += 5;

                break;


            case "มัสก์":

                scores["Veloura Essence"] += 5;

                scores["Golden Elysium"] += 4;

                break;

        }

    });


    /* =====================================
       PERFUME TIME
    ===================================== */

    switch(perfumeTime) {

        case "กลางวัน":

            scores["Veloura Essence"] += 5;

            scores["Veloura Bloom"] += 5;

            scores["Golden Elysium"] += 2;

            break;


        case "กลางคืน":

            scores["Veloura Noir"] += 5;

            scores["Crimson Desire"] += 6;

            scores["Midnight Allure"] += 6;

            break;


        case "ทุกเวลา":

            scores["Veloura Essence"] += 3;

            scores["Veloura Rose"] += 3;

            scores["Golden Elysium"] += 3;

            break;

    }


    /* =====================================
       WEATHER
    ===================================== */

    switch(weather) {

        case "ร้อน":

            scores["Veloura Essence"] += 5;

            scores["Veloura Bloom"] += 5;

            scores["Veloura Lavender"] += 3;

            break;


        case "เย็น":

            scores["Veloura Noir"] += 5;

            scores["Midnight Allure"] += 5;

            scores["Golden Elysium"] += 4;

            break;


        case "ทุกสภาพอากาศ":

            scores["Veloura Essence"] += 3;

            scores["Veloura Rose"] += 3;

            scores["Golden Elysium"] += 3;

            break;

    }


    /* =====================================
       BUDGET
    ===================================== */

    if(budget === "ไม่เกิน 60") {

        scores["Veloura Essence"] += 5;

    }


    else if(budget === "61-70") {

        scores["Veloura Rose"] += 5;

        scores["Veloura Noir"] += 5;

        scores["Veloura Bloom"] += 5;

        scores["Midnight Allure"] += 5;

        scores["Veloura Lavender"] += 5;

    }


    else if(budget === "71-80") {

        scores["Crimson Desire"] += 6;

        scores["Golden Elysium"] += 6;

    }


    /* =====================================
       BUYING STYLE
    ===================================== */

    switch(buyingStyle) {

        case "ใช้ทุกวัน":

            scores["Veloura Essence"] += 5;

            scores["Veloura Bloom"] += 5;

            break;


        case "ออกเดท":

            scores["Crimson Desire"] += 7;

            scores["Midnight Allure"] += 6;

            break;


        case "ทำงาน":

            scores["Veloura Rose"] += 4;

            scores["Golden Elysium"] += 5;

            scores["Veloura Essence"] += 4;

            break;


        case "ปาร์ตี้":

            scores["Veloura Noir"] += 6;

            scores["Crimson Desire"] += 7;

            break;


        case "โอกาสพิเศษ":

            scores["Golden Elysium"] += 7;

            scores["Veloura Noir"] += 6;

            break;

    }


    /* =====================================
       SORT
    ===================================== */

    const sortedProducts =
        [...products].sort(function(a,b) {

            return scores[b.name] - scores[a.name];

        });


    /* =====================================
       TOP 3
    ===================================== */

    const topProducts =
        sortedProducts.slice(0,3);


    /* =====================================
       DISPLAY
    ===================================== */

    productsContainer.innerHTML = "";


    topProducts.forEach(function(product,index) {

        const score =
            scores[product.name];


        const card =
            document.createElement("div");


        card.className = "product";


        card.innerHTML = `

            <img
                src="images/${product.image}"
                class="product-img"
                alt="${product.name}"
                onerror="this.src='images/perfume1.jpg';"
            >

            <div class="product-body">

                <div class="rank">

                    RECOMMENDED #${index + 1}

                </div>


                <h3>

                    ${product.name}

                </h3>


                <div class="price">

                    ฿${product.price.toFixed(2)}

                </div>


                <p class="desc">

                    ${product.description}

                </p>


                <a
                    href="product_detail.php?id=${product.id}"
                    class="view-product">

                    ดูสินค้า ✨

                </a>

            </div>

        `;


        productsContainer.appendChild(card);

    });


    /* =====================================
       SHOW RESULT
    ===================================== */

    results.classList.add("show");


    setTimeout(function() {

        results.scrollIntoView({
            behavior: "smooth",
            block: "start"
        });

    },100);

});

</script>


</body>

</html>
