<style>
        .hero {
      background-color: #6D5C7C;
      color: white;
      text-align: center;
      padding: 60px 20px 80px;
    }
 
    .hero h1 {
      font-size: 42px;
      font-weight: 700;
      margin-bottom: 10px;
    }
 
    .hero p {
      font-size: 16px;
      color: #F2BBC9;
      margin-bottom: 30px;
    }
 
    .hero a {
      background-color: #F2BBC9;
      color: #6D5C7C;
      padding: 12px 28px;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
      font-size: 15px;
    }
 
    .hero a:hover {
      background-color: white;
    }
 
    /* info bar */
    .info-bar {
      display: flex;
      justify-content: center;
      gap: 40px;
      background-color: #80748C;
      padding: 20px;
      color: white;
      text-align: center;
      flex-wrap: wrap;
    }
 
    .info-bar div span {
      display: block;
      font-size: 20px;
      font-weight: 700;
    }
 
    .info-bar div p {
      font-size: 12px;
      color: #F2BBC9;
    }
 
    /* main content */
    .content {
      max-width: 1000px;
      margin: 50px auto;
      padding: 0 20px;
    }
 
    .content h2 {
      font-size: 26px;
      color: #6D5C7C;
      margin-bottom: 15px;
      border-bottom: 2px solid #6D5C7C;
      padding-bottom: 8px;
    }
 
    .content p {
      font-size: 15px;
      line-height: 1.7;
      color: #555;
      margin-bottom: 30px;
    }
 
    /* modules */
    .modules {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-bottom: 40px;
    }
 
    .module-card {
      background: white;
      border-left: 4px solid #6D5C7C;
      padding: 16px;
      border-radius: 4px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.07);
    }
 
    .module-card h3 {
      font-size: 15px;
      color: #333;
      margin-bottom: 6px;
    }
 
    .module-card p {
      font-size: 13px;
      color: #777;
      margin-bottom: 0;
    }
 
    /* entry reqs */
    .req-box {
      background: white;
      border-radius: 8px;
      padding: 24px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      margin-bottom: 40px;
    }
 
    .req-box ul {
      padding-left: 20px;
    }
 
    .req-box ul li {
      font-size: 15px;
      color: #555;
      margin-bottom: 8px;
      line-height: 1.6;
    }
 
    /* apply section */
    .apply {
      background-color: #6D5C7C;
      color: white;
      text-align: center;
      padding: 50px 20px;
      border-radius: 10px;
      margin-bottom: 60px;
    }
 
    .apply h2 {
      font-size: 28px;
      margin-bottom: 10px;
      border: none;
      color: white;
    }
 
    .apply p {
      font-size: 15px;
      color: #F2BBC9;
      margin-bottom: 24px;
    }
 
    .apply a {
      background-color: #F2BBC9;
      color: #6D5C7C;
      padding: 12px 30px;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
    }
 
    .apply a:hover {
      background-color: white;
    }
 
    /* footer */
    footer {
      background-color: #80748C;
      color: white;
      text-align: center;
      padding: 30px;
      font-size: 13px;
    }
 
    footer a {
      color: #F2BBC9;
      text-decoration: none;
    }

</style>

<div class="hero">
  <h1>BSc Computing</h1>
  <p>3 Years · Full Time · UCAS Code: G400</p>
  <a href="#">Apply Now</a>
</div>
 
<div class="info-bar">
  <div><span>96%</span><p>Graduate Employment</p></div>
  <div><span>AAB</span><p>Typical Offer</p></div>
  <div><span>#8</span><p>UK Rankings</p></div>
  <div><span>£9,535</span><p>Per Year (UK)</p></div>
</div>
 
<div class="content">
 
  <h2>About the Course</h2>
  <p>
    This degree covers everything from programming and algorithms to AI and cybersecurity. 
    You'll learn how computers work from the ground up and build real software along the way. 
    There's also an optional placement year where you can get work experience before your final year.
  </p>
 
  <h2>Year 1 Modules</h2>
  <div class="modules">
    <div class="module-card">
      <h3>Programming Fundamentals</h3>
      <p>Learn Python and Java. Covers variables, loops, functions and basic object-oriented programming.</p>
    </div>
    <div class="module-card">
      <h3>Data Structures & Algorithms</h3>
      <p>Arrays, trees, sorting and searching. You'll use these in basically every other module.</p>
    </div>
    <div class="module-card">
      <h3>Computer Systems</h3>
      <p>How hardware and operating systems actually work. Memory, processes, and file systems.</p>
    </div>
    <div class="module-card">
      <h3>Web Technologies</h3>
      <p>HTML, CSS, JavaScript and building your first proper web app.</p>
    </div>
    <div class="module-card">
      <h3>Discrete Mathematics</h3>
      <p>The maths behind computing — logic, sets, graph theory. Not as scary as it sounds.</p>
    </div>
    <div class="module-card">
      <h3>Professional Practice</h3>
      <p>Group projects, Git, agile methods and writing proper documentation.</p>
    </div>
  </div>
 
  <h2>Entry Requirements</h2>
  <div class="req-box">
    <ul>
      <li><strong>A-Levels:</strong> AAB–ABB including Maths at grade A</li>
      <li><strong>GCSEs:</strong> At least 5 at grade 6+, including Maths and English</li>
      <li><strong>IB:</strong> 34–36 points with Higher Level Maths at 6</li>
      <li><strong>BTEC:</strong> D*DD in Computing or IT also accepted</li>
      <li><strong>International:</strong> IELTS 6.5 overall (min 6.0 in each section)</li>
    </ul>
  </div>
 
  <div class="apply">
    <h2>Ready to apply?</h2>
    <p>Applications go through UCAS. Deadline is 31 January 2025.</p>
    <a href="#">Apply via UCAS →</a>
  </div>
 
</div>
