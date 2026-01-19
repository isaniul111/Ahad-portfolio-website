<?php
$statusMsg = "";
$statusClass = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (empty($name) || empty($email) || empty($message)) {
        $statusMsg = "⚠ Please fill in all fields.";
        $statusClass = "error";
    } else {
        $statusMsg = "✅ Message received. I will contact you soon, $name.";
        $statusClass = "success";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Saniul Islam — Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
:root{
    --bg:#020617;
    --card:rgba(255,255,255,0.06);
    --border:rgba(255,255,255,0.12);
    --primary:#38bdf8;
    --secondary:#a78bfa;
    --text:#e5e7eb;
    --muted:#9ca3af;
}

*{margin:0;padding:0;box-sizing:border-box;font-family:Poppins,sans-serif}

body{
    background:radial-gradient(circle at top,#0f172a,#020617 70%);
    color:var(--text);
}

/* ===== NAVBAR ===== */
nav{
    position:fixed;
    top:0;left:0;
    width:100%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:18px 8%;
    backdrop-filter:blur(12px);
    background:rgba(2,6,23,.7);
    border-bottom:1px solid var(--border);
    z-index:100;
}

.logo{
    font-weight:800;
    font-size:1.3rem;
    background:linear-gradient(90deg,var(--primary),var(--secondary));
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

nav a{
    color:var(--muted);
    margin-left:30px;
    text-decoration:none;
    font-weight:500;
}

nav a:hover{color:#fff}

/* ===== SECTIONS ===== */
section{padding:120px 8%}

.glass{
    background:var(--card);
    border:1px solid var(--border);
    border-radius:18px;
    backdrop-filter:blur(18px);
}

/* ===== HERO ===== */
.hero{
    min-height:100vh;
    display:grid;
    grid-template-columns:1.2fr .8fr;
    gap:60px;
    align-items:center;
}

.hero h1{
    font-size:3.2rem;
    line-height:1.1;
}

.hero span{
    background:linear-gradient(90deg,var(--primary),var(--secondary));
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.hero p{
    margin:25px 0;
    color:var(--muted);
    max-width:520px;
}

.hero button{
    padding:14px 30px;
    border:none;
    border-radius:30px;
    background:linear-gradient(90deg,var(--primary),var(--secondary));
    color:#020617;
    font-weight:700;
    cursor:pointer;
}

.hero img{
    width:320px;
    height:320px;
    border-radius:50%;
    object-fit:cover;
    border:4px solid transparent;
    background:linear-gradient(#020617,#020617) padding-box,
               linear-gradient(90deg,var(--primary),var(--secondary)) border-box;
    box-shadow:0 0 60px rgba(56,189,248,.35);
}

/* ===== TITLES ===== */
.title{
    font-size:2.1rem;
    margin-bottom:40px;
}

/* ===== SKILLS ===== */
.skills{
    display:flex;
    flex-wrap:wrap;
    gap:15px;
}

.skill{
    padding:10px 18px;
    border-radius:30px;
    background:linear-gradient(90deg,rgba(56,189,248,.2),rgba(167,139,250,.2));
    border:1px solid var(--border);
}

/* ===== PROJECTS ===== */
.projects{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:30px;
}

.project{
    overflow:hidden;
    transition:.4s;
}

.project img{
    width:100%;
    height:180px;
    object-fit:cover;
}

.project .p-body{
    padding:25px;
}

.project:hover{
    transform:translateY(-10px) scale(1.02);
    box-shadow:0 0 40px rgba(56,189,248,.25);
}

/* ===== CONTACT ===== */
form{
    max-width:550px;
    display:grid;
    gap:18px;
}

input,textarea{
    background:rgba(0,0,0,.3);
    border:1px solid var(--border);
    padding:14px;
    border-radius:10px;
    color:#fff;
}

button.send{
    background:linear-gradient(90deg,var(--primary),var(--secondary));
    border:none;
    padding:14px;
    font-weight:700;
    border-radius:12px;
    cursor:pointer;
}

/* alerts */
.alert.success{background:#022c22;color:#5eead4;padding:12px;border-radius:10px}
.alert.error{background:#2a0404;color:#fca5a5;padding:12px;border-radius:10px}

/* ===== FOOTER ===== */
footer{
    text-align:center;
    padding:40px;
    opacity:.6;
}

/* ===== MOBILE ===== */
@media(max-width:900px){
.hero{grid-template-columns:1fr;text-align:center}
.hero img{margin:auto}
nav{padding:16px 5%}
section{padding:100px 5%}
}
</style>
</head>
<body>
<nav>
<div class="logo">Abdullah Al Ahad</div>
<div>
<a href="#home">Home</a>
<a href="#skills">Skills</a>
<a href="#projects">Projects</a>
<a href="#contact">Contact</a>
</div>
</nav>
<section id="home" class="hero">
<div>
<h1>Hi, I'm <span>Ahad</span><br>Secure Software & AI Developer</h1>
<p>I build high-performance applications combining Java systems, machine learning and cybersecurity principles.</p>
<a href="#contact"><button>Hire Me</button></a>
</div>
<img src="images/image.png" alt="Ahad">
</section>

<section id="skills">
<h2 class="title">Skills & Tools</h2>
<div class="skills">
<div class="skill">Java</div>
<div class="skill">JavaFX</div>
<div class="skill">Python ML</div>
<div class="skill">MySQL</div>
<div class="skill">Linux</div>
<div class="skill">Cybersecurity</div>
<div class="skill">PHP</div>
</div>
</section>

<section id="projects">
<h2 class="title">Featured Projects</h2>
<div class="projects">

<div class="project glass">
<img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c">
<div class="p-body">
<h3>Tour Management System</h3>
<p>Java desktop system with secure authentication and booking automation.</p>
</div>
</div>

<div class="project glass">
<img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d">
<div class="p-body">
<h3>Lung Cancer Detection</h3>
<p>Machine learning model improving early diagnosis accuracy.</p>
</div>
</div>

<div class="project glass">
<img src="https://images.unsplash.com/photo-1581090700227-1e37b190418e">
<div class="p-body">
<h3>Secure Portfolio</h3>
<p>Custom PHP portfolio focused on performance and security.</p>
</div>
</div>

</div>
</section>

<section id="contact">
<h2 class="title">Contact Me</h2>

<?php if($statusMsg): ?>
<div class="alert <?= $statusClass ?>"><?= $statusMsg ?></div>
<?php endif; ?>

<form method="post">
<input type="text" name="name" placeholder="Your name">
<input type="email" name="email" placeholder="Your email">
<textarea name="message" rows="5" placeholder="Your message"></textarea>
<button class="send">Send Message</button>
</form>
</section>

<footer>
© <?= date("Y") ?> Abdullah Al Ahad— All Rights Reserved
</footer>

</body>
</html>
