<!DOCTYPE HTML>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <style type="text/css">
        
            @keyframes blink {
              to {
                visibility: hidden;
              }
            }
            @-webkit-keyframes blink {
              to {
                visibility: hidden;
              }
            }

            @-moz-keyframes skip {
            to {
                background-position: 0 100%;
              }
            }
            @-webkit-keyframes skip {
              to {
                background-position: 0 100%;
              }
            }
            @keyframes skip {
              to {
                background-position: 0 100%;
              }
            }

            body{
                background-color:#222222;
                color:white;
                font-family: 'Inconsolata';
                background-image:url(img/404-stripe.png), url(img/404-noise.png);
                /*background-repeat:repeat-x, repeat;*/
                -webkit-animation:skip 3s linear infinite;
                animation:skip 3s linear infinite;
            }
            
            .terminal .command:before{
                content:'/>';
                color:green;
                font-weight:bold;
            }
            
            .terminal .command:last-child:after{
                content:'a';
                width:1em;
                color:white;
                background-color:white;
                animation: blink 1s steps(5, start) infinite;
                -webkit-animation: blink 1s steps(5, start) infinite;
            }
            
            .terminal .command{
                word-wrap:break-word;
            }
            
            .typed-cursor{
                display:none;
            }
            
            .message:after{
                content:'a';
                width:1em;
                color:white;
                background-color:white;
                animation: blink 1s steps(5, start) infinite;
                -webkit-animation: blink 1s steps(5, start) infinite;
            }
            
            .cmd{
                color:#6969ff;
            }
            
            .title1{
                color:#e43b3b;
                text-decoration:underline;
            }
            
            .title2{
                color:#6969ff;
                text-decoration:underline;
            }
            
            .highlight1{
                color:#6969ff;
            }
            
            .highlight2{
                color:#e43b3b;
            }
            
            .name{
                color:#b26818;
                text-decoration:underline;
            }
            
            .projects{
                
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/lib/typed.js"></script>
        <script type="text/javascript">
        
            $(function(){
                var welcometext = ""
                welcometext += "Welcome to <span class='name'>Nitish Akalwadi</span>'s geeky terminal^2000 <br/><br/>";
                welcometext += "Use the following commands to know more.<br/>";
                welcometext += "<pre>";
                welcometext += "<span class='cmd'>role</span>            : get the roles and reponsibilities I have undertaken<br/>";
                welcometext += "<span class='cmd'>responsibility</span>  : alias for role<br/>";
                welcometext += "<span class='cmd'>experience</span>      : get details of the total experience I have<br/>";
                welcometext += "<span class='cmd'>education</span>       : get my education details<br/>";
                welcometext += "<span class='cmd'>projects</span>        : get the details of the projects I have undertaken till date<br/>";
                welcometext += "<span class='cmd'>skills</span>          : get details of my skills<br/>";
                welcometext += "<span class='cmd'>personal</span>        : get my personal details<br/>";
                welcometext += "<span class='cmd'>download</span>        : download my resume<br/>";
                welcometext += "<span class='cmd'>clear</span>           : clear screen<br/>";
                welcometext += "<span class='cmd'>help</span>            : display this help text<br/><br/>";
                welcometext += "</pre>";
                welcometext += "press enter to continue.";
                
                $(".message").typed({
                    strings : [" ^1000 Hello^1000 :^300)^2000" , welcometext],
                    typeSpeed : 0,
                    showCursor : false,
                    callback : function(){
                                    $("body").append("<style>.message:after{display:none !important;}</style");
                                }
                });
            });
        
            $(window).keypress(function(e){
                var code = e.which;//e.charCode || e.keyCode;
                if(code == 13){
                    e.preventDefault();
                    var command = $(".terminal .command:last-child").html();
                    var output = processCmd(command);
                    $(".terminal").append("<div>"+output+"</div>");
                    $(".terminal").append("<div></div><span class='command'></span>");
                    $("html, body").animate({ scrollTop: 99999999999999999999 }, 1);
                }
                else{
                    $(".terminal .command:last-child").append(String.fromCharCode(code));
                }
            });
            
            $(window).keydown(function(e){
                var code = e.which;
                if(code == 8){
                    e.preventDefault();
                    $(".terminal .command:last-child").text(function(i,s){
                        return s.slice(0,-1);
                    });
                }
            });
            
            function processCmd(cmd){
                var command = $.trim(cmd);
                var retVal = "";
                if(command != ""){
                    switch(command){
                                    
                        case "clear" :  $(".terminal").html("");   
                                        break;
                        
                        case "responsibility" :
                        case "role" : retVal = getRole();
                                        break;
                                        
                        case "experience" : retVal = getWorkExperience();
                                            break;
                                            
                        case "education" : retVal = getEducationProfile();
                                            break;
                                            
                        case "projects" : retVal = getProjects();
                                            break;
                                            
                        case "skills" : retVal = getSkills();
                                            break;
                                            
                        case "personal" : retVal = getPersonalDetails();
                                            break;
                                            
                        case "download" : downloadDoc();
                                            break;
                                            
                        case "help" : retVal = getHelpMenu();
                                            break;
                                        
                        default : retVal = "Invalid command";
                                break;
                    }
                }
                return retVal;
            }
            
            
            function downloadDoc(){
                window.open("docs/nitishkumar_akalwadi_resume.pdf","_blank");
            }
            
            function getHelpMenu(){
                var content = "";
                content += "<div>";
                content += "<br/>";
                
                content += "<div class='title1'>Command List</div>";
                content += "<table>";
                content += "<tr><td>role</td><td> : </td><td>get the roles and reponsibilities I have undertaken</td></tr>";
                content += "<tr><td>responsibility</td><td> : </td><td>alias for role</td></tr>";
                content += "<tr><td>experience</td><td> : </td><td>get details of the total experience I have</td></tr>";
                content += "<tr><td>education</td><td> : </td><td>get my education details</td></tr>";
                content += "<tr><td>projects</td><td> : </td><td>get the details of the projects I have undertaken till date</td></tr>";
                content += "<tr><td>skills</td><td> : </td><td>get details of my skills</td></tr>";
                content += "<tr><td>personal</td><td> : </td><td>get my personal details</td></tr>";
                content += "<tr><td>download</td><td> : </td><td>download my resume</td></tr>";
                content += "<tr><td>clear</td><td> : </td><td>clear screen</td></tr>";
                content += "<tr><td>help</td><td> : </td><td>display this help text</td></tr>";
                content += "</table>";
                
                content += "<br/>";
                content += "</div>";
                
                return content;
            }
            
            function getPersonalDetails(){
                var content = "";
                content += "<div>";
                content += "<br/>";
                
                content += "<div class='title1'>Personal Details</div>";
                content += "<table>";
                content += "<tr><td>DOB</td><td> : </td><td>26th April 1991</td></tr>";
                content += "<tr><td>Gender</td><td> : </td><td>Male</td></tr>";
                content += "<tr><td>Marital Status</td><td> : </td><td>Single</td></tr>";
                content += "<tr><td>Nationality</td><td> : </td><td>Indian</td></tr>";
                content += "<tr><td>Languages Known</td><td> : </td><td>English, Hindi, Kannada</td></tr>";
                content += "<tr><td>Father's Name</td><td> : </td><td>Vasant</td></tr>"
                content += "</table>";
                
                content += "<br/>";
                content += "</div>";
                
                return content;
            }
            
            function getSkills(){
                var content = "";
                content += "<div>";
                content += "<br/>";
                content += "<div class='title1'>Technical Skills</div>";
                
                content += "<table>";
                content += "<tr><td>Languages</td><td> : </td><td>C, C++</td></tr>";
                content += "<tr><td>Operating Systems</td><td> : </td><td>Windows, Linux</td></tr>";
                content += "<tr><td>Database</td><td> : </td><td>MySQL</td></tr>";
                content += "<tr><td>Web Technologies</td><td> : </td><td>PHP, HTML, CSS, JavaScript, JQuery, Jquery UI, JSON, AJAX.</td></tr>";
                content += "<tr><td>Frameworks</td><td> : </td><td>CodeIgniter</td></tr>";
                content += "<tr><td>Version Control</td><td> : </td><td>Git</td></tr>";
                content += "</table>";
                
                content += "<br/>";
                content += "<div>";
                
                return content;
            }
            
            function getProjects(){
                var content = "";
                content += "<div class='projects'>";
                content += "<br/>";
                
                content += "<div class='title1'>Projects</div>";
                
                content += "<div>";
                content += "<div class='title2'>Activity Tracking System</div>";
                content += "<div>Team Size : 2</div>";
                content += "<ul>";
                content += "<li>A partner management system, used to assign tasks/activities to various partners and accordingly generate various reports showing effort investment in various areas, help comparing performance of partners and hence enables them to align their work with company as well as other partners, which in turn ensures better profitability.</li>";
                content += "<li>The system was developed using MVC architecture.</li>";
                content += "<li>Technologies used includes HTML, CSS, javascript, Jquery and AJAX (clientside) and PHP5 and MySql(server-side).</li>";
                content += "</ul>";
                content += "</div>";
                
                content += "<br/>";
                
                content += "<div>";
                content += "<div class='title2'>Employee Performance Managemenet System</div>";
                content += "<div>Team Size : 2</div>";
                content += "<ul>";
                content += "<li>A performance management system (based on KRA framework), which help employees to set their objectives on quarterly basis and later get rated on the basis of objective achieved. The system is accompanied with review framework where reviews can be done or demanded at any point of time.The results and reports generated are used by top management authorities to work on promotion cycle for employees.</li>";
                content += "<li>The system was developed using MVC architecture.</li>";
                content += "<li>Technologies used includes HTML, CSS, javascript, Jquery and AJAX (clientside) and PHP5 and MySql(server-side).</li>";
                content += "</ul>";
                content += "</div>";
                
                content += "<br/>";
                
                content += "<div>";
                content += "<div class='title2'>Weekly 45 hours attendance system</div>";
                content += "<div>Team Size : 2</div>";
                content += "<ul>";
                content += "<li>Attendance management system, which reads the attendance log from access card machine, maps the log with employee data and hence captures the attendance of employees.The additional capabilities of system involves calculation of weekly, monthly and yearly average working hours of employees which helps employees to collect knowledge of their working efficiencies and generates reports which enables team leads and management to keep a check on employee activities.</li>";
                content += "<li>The system works on Files and File groups architecture.</li>";
                content += "<li>Technologies used includes HTML, CSS, javascript, Jquery and AJAX (clientside) and PHP5 and MySql(server-side).</li>";
                content += "</ul>";
                content += "</div>";
                
                content += "<br/>";
                
                content += "<div class='title1'>Other Works</div>";
                
                content += "<div>";
                content += "<ul>";
                content += "<li>Worked on various systems of HRIS (Human Resource Information System) for bug fixes and minor enhancements.</li>";
                content += "<li>Generating reports for attendance, employee reimbursements, TDS calculation etc.</li>";
                content += "<li>TDS calculation in various employee benefits.</li>";
                content += "</ul>";
                content += "</div>";
                
                content += "<br/>";
                
                content += "<div class='title1'>College Projects</div>";
                
                content += "<div>";
                content += "<div class='title2'>Event Reminder</div>";
                content += "<div>An application to remind user about the upcoming events and also give details about the past and future events entered by the user. It had the functionality of snooze and also to postpone the event to next day, week, month and year.</div>";
                content += "</div>";
                
                content += "<br/>";
                
                content += "<div>";
                content += "<div class='title2'>TWEET TWEET</div>";
                content += "<div>An android game developed as a part of mini project. It is a never ending running/flying game where the ultimate winner is the one with the highest score.</div>";
                content += "</div>";
                
                content += "<br/>";
                
                content += "<div>";
                content += "<div class='title2'>CBIR System for Orthopaedic X-Ray Diagnosis</div>";
                content += "<div>The CBIR system could analyse an uploaded X-ray image, perform various manipulations on the image to increase its quality, analyse it and provide top matching images from the database along with the description of the diagnosis, cause and treatment of the selected image. This would help doctors and medical students in identifying diseases and taking decisions more precisely and quickly.</div>";
                content += "</div>";
                
                content += "<br/>";
                content += "</div>";
                
                return content;
            }
            
            function getRole(){
                var content = "";
                content += "<div>";
                content += "<br/>";
                
                content += "<div class='title1'>Roles and Responsibilities</div>";
                content += "<ul>";
                content += "<li>Functioning in domain of Information Systems as a developer at both User-Interface and Database levels.</li>";
                content += "<li>Shoulder responsibilities in understanding requirements and developing designs of front-end(User Experience) and back-end Schema Designing through Relational Data Modal(MySQL).</li>";
                content += "<li>Develop web application compatible in IE9, IE10, IE11, Mozilla-firefox, Googlechrome, Opera etc.</li>";
                content += "<li>Develop front-end view by using client side languages like HTML,CSS,JQuery,Javascript and AJAX etc. and back-end controllers by using server side languages like PHP5,MYSQL.</li>";
                content += "<li>Develop in MVC framework.</li>";
                content += "</ul>";
                
                content += "<br/>";
                content += "</div>";
                
                return content;
            }
            
            function getEducationProfile(){
                var content = "";
                content += "<div>";
                content += "<br/>";
                content += "<div class='title1'>Education Details</div>";
                
                content += "<div>----------------------------------------------------------------------</div>";
                
                content += "<div>B.E., Bachelor of Engineering - Computer Science. (2009-2013)</div>";
                content += "<div>B.V.Bhoomaraddi College of Engineering & Technology, Hubli</div>";
                content += "<div>CGPA: <span class='highlight2'>8.06</span> (First Class with Distinction)</div>";
                
                content += "<br/>";
                content += "<div>----------------------------------------------------------------------</div>";
                
                content += "<div>PUC: Chetan PU Science College, Hubli in 2009</div>";
                content += "<div>Percentage: <span class='highlight2'>74.83</span></div>";
                
                content += "<br/>";
                content += "<div>----------------------------------------------------------------------</div>";
                
                content += "<div>SSLC: St. Joseph's High School, Dharwad in 2007</div>";
                content += "<div>Percentage: <span class='highlight2'>90.72</span> (Distinction)</div>";
                
                content += "<br/>";
                content += "<div>----------------------------------------------------------------------</div>";
                content += "</div>";
                
                return content;
            }
            
            function getWorkExperience(){
                var content = "";
                content += "<div>";
                content += "<br/>";
                content += "<div class='title1'>Work Experience Details</div>";
                
                content += "<div>----------------------------------------------------------------------</div>";
                
                content += "<div><span class='highlight1'>Travelyaari.com, Mantis Technologies</span>: March, 2015 - Till Date</div>";
                content += "<div>Designation: Software Engineer</div>";
                content += "<div>Location: Bangalore, India</div>";
                
                content += "<br/>";
                content += "<div>----------------------------------------------------------------------</div>";
                
                content += "<div><span class='highlight1'>Tally Solutions Private Limited</span>: Aug, 2013 - Feb, 2015</div>";
                content += "<div>Designation: Software Engineer - CIS</div>";
                content += "<div>Location: Bangalore, India</div>";
                
                content += "<br/>";
                content += "<div>----------------------------------------------------------------------</div>";
                content += "</div>";
                
                return content;
            }
        </script>
    </head>
    <body>
        <div class="message"></div>
        <div class="terminal"></div>
    </body>
</html>