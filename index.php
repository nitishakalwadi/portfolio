<!DOCTYPE HTML>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/lib/typed.js"></script>
        <script type="text/javascript">
        
            $(function(){
                var welcometext = ""
                welcometext += "Welcome to Nitish Akalwadi's geeky terminal^2000 <br/><br/>";
                welcometext += "Use the following commands to know more.<br/>";
                welcometext += "<pre>";
                welcometext += "role            : get the roles and reponsibilities I have undertaken.<br/>";
                welcometext += "responsibility  : alias for role.<br/>";
                welcometext += "experience      : get details of the total experience I have.<br/>";
                welcometext += "education       : get my education details.<br/>";
                welcometext += "projects        : get the details of the projects I have undertaken till date.<br/>";
                welcometext += "skills          : get details of my skills.<br/>";
                welcometext += "personal        : get my personal details.<br/>";
                welcometext += "clear           : clear screen<br/><br/>";
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
                                            
                        case "help" : retVal = getHelpMenu();
                                            break;
                                        
                        default : retVal = "Invalid command";
                                break;
                    }
                }
                return retVal;
            }
            
            function getHelpMenu(){
                var content = "";
                content += "<div>";
                content += "<br/>";
                
                content += "<div>Command List</div>";
                content += "<ul>";
                content += "<li>role : get the roles and reponsibilities I have undertaken.</li>";
                content += "<li>responsibility : alias for role.</li>";
                content += "<li>experience : get details of the total experience I have.</li>";
                content += "<li>education : get my education details.</li>";
                content += "<li>projects : get the details of the projects I have undertaken till date.</li>";
                content += "<li>skills : get details of my skills</li>";
                content += "<li>personal : get my personal details.</li>";
                content += "<li>clear : clear screen</li>";
                content += "</ul>";
                
                content += "<br/>";
                content += "</div>";
                
                return content;
            }
            
            function getPersonalDetails(){
                var content = "";
                content += "<div>";
                content += "<br/>";
                
                content += "<ul>";
                content += "<li>DOB : 26th April 1991</li>";
                content += "<li>Gender : Male</li>";
                content += "<li>Marital Status : Single</li>";
                content += "<li>Nationality : Indian</li>";
                content += "<li>Languages Known : English, Hindi, Kannada</li>";
                content += "<li>Father's Name : Vasant</li>"
                content += "</ul>";
                
                content += "<br/>";
                content += "</div>";
                
                return content;
            }
            
            function getSkills(){
                var content = "";
                content += "<div>";
                content += "<br/>";
                
                content += "<ul>";
                content += "<li>Languages : C, C++</li>";
                content += "<li>Operating Systems : Windows, Linux</li>";
                content += "<li>Database : MySQL</li>";
                content += "<li>Web Technologies : PHP, HTML, CSS, JavaScript, JQuery, Jquery UI, JSON, AJAX.</li>";
                content += "<li>Frameworks : CodeIgniter</li>";
                content += "<li>Version Control : Git</li>";
                content += "<ul>";
                
                content += "<br/>";
                content += "<div>";
                
                return content;
            }
            
            function getProjects(){
                var content = "";
                content += "<div>";
                content += "<br/>";
                
                content += "<div>Projects</div>";
                
                content += "<div>";
                content += "<div>Activity Tracking System</div>";
                content += "<div>Team Size : 2</div>";
                content += "<ul>";
                content += "<li>A partner management system, used to assign tasks/activities to various partners and accordingly generate various reports showing effort investment in various areas, help comparing performance of partners and hence enables them to align their work with company as well as other partners, which in turn ensures better profitability.</li>";
                content += "<li>The system was developed using MVC architecture.</li>";
                content += "<li>Technologies used includes HTML, CSS, javascript, Jquery and AJAX (clientside) and PHP5 and MySql(server-side).</li>";
                content += "</ul>";
                content += "</div>";
                
                content += "<br/>";
                
                content += "<div>";
                content += "<div>Employee Performance Managemenet System</div>";
                content += "<div>Team Size : 2</div>";
                content += "<ul>";
                content += "<li>A performance management system (based on KRA framework), which help employees to set their objectives on quarterly basis and later get rated on the basis of objective achieved. The system is accompanied with review framework where reviews can be done or demanded at any point of time.The results and reports generated are used by top management authorities to work on promotion cycle for employees.</li>";
                content += "<li>The system was developed using MVC architecture.</li>";
                content += "<li>Technologies used includes HTML, CSS, javascript, Jquery and AJAX (clientside) and PHP5 and MySql(server-side).</li>";
                content += "</ul>";
                content += "</div>";
                
                content += "<br/>";
                
                content += "<div>";
                content += "<div>Weekly 45 hours attendance system</div>";
                content += "<div>Team Size : 2</div>";
                content += "<ul>";
                content += "<li>Attendance management system, which reads the attendance log from access card machine, maps the log with employee data and hence captures the attendance of employees.The additional capabilities of system involves calculation of weekly, monthly and yearly average working hours of employees which helps employees to collect knowledge of their working efficiencies and generates reports which enables team leads and management to keep a check on employee activities.</li>";
                content += "<li>The system works on Files and File groups architecture.</li>";
                content += "<li></li>Technologies used includes HTML, CSS, javascript, Jquery and AJAX (clientside) and PHP5 and MySql(server-side).";
                content += "</ul>";
                content += "</div>";
                
                content += "<br/>";
                
                content += "<div>Other Works</div>";
                
                content += "<div>";
                content += "<ul>";
                content += "<li>Worked on various systems of HRIS (Human Resource Information System) for bug fixes and minor enhancements.</li>";
                content += "<li>Generating reports for attendance, employee reimbursements, TDS calculation etc.</li>";
                content += "<li>TDS calculation in various employee benefits.</li>";
                content += "</ul>";
                content += "</div>";
                
                content += "<br/>";
                
                content += "<div>College Projects</div>";
                
                content += "<div>";
                content += "<div>Event Reminder</div>";
                content += "<div>An application to remind user about the upcoming events and also give details about the past and future events entered by the user. It had the functionality of snooze and also to postpone the event to next day, week, month and year.</div>";
                content += "</div>";
                
                content += "<br/>";
                
                content += "<div>";
                content += "<div>TWEET TWEET</div>";
                content += "<div>An android game developed as a part of mini project. It is a never ending running/flying game where the ultimate winner is the one with the highest score.</div>";
                content += "</div>";
                
                content += "<br/>";
                
                content += "<div>";
                content += "<div>CBIR System for Orthopaedic X-Ray Diagnosis</div>";
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
                
                content += "<div>B.E., Bachelor of Engineering - Computer Science. (2009-2013)</div>";
                content += "<div>B.V.Bhoomaraddi College of Engineering & Technology, Hubli</div>";
                content += "<div>CGPA: 8.06 (First Class with Distinction)</div>";
                
                content += "<br/>";
                
                content += "<div>PUC: Chetan PU Science College, Hubli in 2009</div>";
                content += "<div>Percentage: 74.83</div>";
                
                content += "<br/>";
                
                content += "<div>SSLC: St. Joseph's High School, Dharwad in 2007</div>";
                content += "<div>Percentage: 90.72 (Distinction)</div>";
                
                content += "<br/>";
                content += "</div>";
                
                return content;
            }
            
            function getWorkExperience(){
                var content = "";
                content += "<div>";
                content += "<br/>";
                
                content += "<div>Travelyaari.com, Mantis Technologies: March, 2015 - Till Date</div>";
                content += "<div>Designation: Software Engineer</div>";
                content += "<div>Location: Bangalore, India</div>";
                
                content += "<br/>";
                
                content += "<div>Tally Solutions Private Limited: Aug, 2013 - Feb, 2015</div>";
                content += "<div>Designation: Software Engineer - CIS</div>";
                content += "<div>Location: Bangalore, India</div>";
                
                content += "<br/>";
                content += "</div>";
                
                return content;
            }
        </script>
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

            body{
                background-color:black;    
                color:white;
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
        </style>
    </head>
    <body>
        <div class="message"></div>
        <div class="terminal"></div>
    </body>
</html>