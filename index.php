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
                welcometext += "<span class='cmd'>role</span>            : display the roles and reponsibilities I have undertaken<br/>";
                welcometext += "<span class='cmd'>responsibility</span>  : alias for role<br/>";
                welcometext += "<span class='cmd'>experience</span>      : display details of my total experience<br/>";
                welcometext += "<span class='cmd'>education</span>       : display my education details<br/>";
                welcometext += "<span class='cmd'>projects</span>        : display the details of the projects I have<br/>";
                welcometext += "<span class='cmd'>skills</span>          : display details of my skills<br/>";
                welcometext += "<span class='cmd'>personal</span>        : display my personal details<br/>";
                welcometext += "<span class='cmd'>download</span>        : download my resume<br/>";
                welcometext += "<span class='cmd'>clear</span>           : clear screen<br/>";
                welcometext += "<span class='cmd'>help</span>            : display this help text<br/>";
                welcometext += "<span class='cmd'>yomama</span>          : display a 'yo mama's so fat' joke<br/><br/>";
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
                                            
                        case "yomama" : retVal = getYomamaJoke();
                                            break;
                                        
                        default : retVal = "Invalid command";
                                break;
                    }
                }
                return retVal;
            }
            
            function getYomamaJoke(){
                var jokearr = [
                    "Yo mama so fat she left the house in high heels and when she came back she had on flip flops."
                    ,"Yo mama so fat she sat on an iPhone and turned it into an iPad."
                    ,"Yo mama so fat she went to KFC to get a bucket of chicken they asked her what size and she said the one on the roof"
                    ,"Yo momma so fat she sued xbox 360 for guessing her weight"
                    ,"yo mama so fat that she dont need the internet she's already world wide"
                    ,"Yo mama so fat that I ran out of gas trying to drive around her."
                    ,"yo mama so fat that she gave draclua diabeties"
                    ,"Your mama so fat, when she twerk, she became a wrecking ball."
                    ,"Yo mama so fat shes on both sides of the family"
                    ,"Yo mama so fat, everytime she walks she does the harlem shake"
                    ,"Yo Momma so fat, I bumped into her and said 'Sorry, my mistake.' And she said 'Did you just say steak?!'"
                    ,"Yo Mama So Fat she has mass whether the Higgs Boson exists or not."
                    ,"Yo mama so fat when she sat on a dollar bill she squeezed a booger out of George Washingtons nose"
                    ,"Yo mama so fat all she wanted for christmas is to see her feet"
                    ,"Yo mama so fat she went to Mcdonalds tripped over Burger King and landed on Wendy's!"
                    ,"Yo mama so fat even Meghan Trainor made an exception and called her 'treble'."
                    ,"Yo mama so fat that when she fell down the stairs, I wasn't laughing but the stairs were cracking up. "
                    ,"Yo mama so fat she has two watches one for each time zone she's in."
                    ,"Yo mama so fat that when she took a selfie, Instagram crashed."
                    ,"Yo mamas so fat when she stepped on the scale, the doctor said 'Holy Crap, That's My Phone Number'"
                    ,"yo mama so greasy and fat she uses bacon as a bandaid"
                    ,"Yo mama so fat she ate a whole Pizza....Hut."
                    ,"Yo mama so fat I use her as a queen size matress and she doesn't even know it"
                    ,"Yo momma so fat Burger King hired her because she eats cows and shits hamburgers."
                    ,"Yo mama so fat that even Dora couldn't explore her"
                    ,"Yo Mama so fat, that she gets free WiFi. Because she's already world wide"
                    ,"Yo mama so fat, she's 'Large, Single, and ready to Pringle.'"
                    ,"Your Mama so fat that when she wore a blue dress everybody thought that the 'sky was fallin'"
                    ,"Yo mama so fat that her Polo shirt had a real horse on it."
                    ,"Yo momma so fat Joran van der Sloot couldn't make her body disappear."
                    ,"Yo mama so fat she uses Google Earth to take a selfie."
                    ,"yo Mama so fat her job with Hostess is why they went out of business"
                    ,"Yo mama so fat when she sat on my iPad she made a flat screen tv!"
                    ,"Yo mama so fat she just had a baby and said it was delicious"
                    ,"Yo mama so fat her blood type is Nutella."
                    ,"Yo mama so fat she went to a restaurant and got the group discount"
                    ,"Yo mama so fat she sat on the TV while you were watching Family Guy and Brian the dog died."
                    ,"Yo momma so fat her idea of dieting is deleting the cookies from the internet cache."
                    ,"Yo mama so fat that when someone called her fat, she ate him"
                    ,"Yo mama so fat you have to grease the door frame and hold a twinkie on the other side just to get her through"
                    ,"Yo mama so fat sets off car alarms when she runs."
                    ,"Yo Mama so fat that when she wears a Orange jumpsuit and walks up the hill, people think the sun is rising"
                    ,"yo momma is so fat she sat on Walmart and lowered the prices"
                    ,"yo momma so fat she blocks the WiFi signal"
                    ,"Yo mama so fat she lays on the beach and greenpeace tried to push her back in the water"
,"Yo mama so fat the only pictures you have of her are satellite pictures"
,"Yo mama is so fat, it took 3 years for Nationwide to get on her side."
,"Yo momma so fat, everytime she starts singing people leave."
,"Yo momma so fat, she gets confronted every time she drinks or smokes because everyone thinks shes pregnant."
,"Yo mama so fat, she masterbates to the food channel"
,"Yo mama so fat the government shut her down along with the rest of the national parks."
,"Yo mama so fat she jumped in the air and got stuck."
,"Yo mama so fat, she had a nice personality, but ate it."
,"yo mama is so fat when she bent over and showed her crack the grand canyon said 'DAMMMMMMMMMMN'"
,"yo mama so fat she can do the truffle shuffle better than Chunk in 'The Goonies'"
,"Yo mama so fat they found carmen san diego in between one of her chins"
,"Yo momma so fat, she curves space and time."
,"Yo mama so fat she put on some BVD's and by the time they reached her waist they spelled out boulevard."
,"Yo mama so fat she stepped on a rainbow and made Skittles."
,"Yo mama so fat then when she fell from her bed she fell from both sides"
,"Yo mama so fat that she would have been in E.T., but when she rode the bike across the moon, she caused an eclipse."
,"Yo mama so fat she was baptised in the ocean."
,"Yo mama so fat I told her to haul ass &amp; she hadda make two trips."
,"Yo mama so fat when she gets in an elevator, it HAS to go down."
,"Yo mama so fat she has to iron her clothes in the driveway."
,"Your momma is so fat when she walked in her new house the first thing she saw was the basement"
,"Yo mama so fat they tie a rope around her shoulders and drag her through a tunnel when they want to clean it."
,"Yo mama so fat when she got hit by a bus, she said, 'Who threw that rock?'"
,"Yo mama so fat when she stands in a left-turn lane it gives her the green arrow!"
,"Yo mama so fat that when whe was born, she gave the hospital stretch marks."
,"Yo mama's so fat when she is having sex, her partner doesen't know if it's in her butt or her boobs!"
,"Yo mama so fat we went to the drive-in and didn't have to pay because we dressed her as a Chevrolet."
,"Yo mama so fat when her beeper goes off, people thought she was backing up"
,"Yo mama so fat she eats Wheat Thicks."
,"Yo mama so fat were in her right now"
,"Yo mama so fat people jog around her for exercise"
,"Yo mama so fat she wears neck deorderant"
,"Yo mama so fat she has pork rind incense burning in her house"
,"yo momma is so fat her favorite basketball team is the Denver Nuggets"
,"Yo mama so fat when she sits on the beach she makes sandpaper"
,"Yo mama so fat she wears a sock on each toe"
,"Yo mama so fat her DNA is DRO (for Dorito)"
,"Yo mama so fat she got a bath from the cooking channel"
,"Yo mama so fat she went to the movies and sat next to everyone"
,"Yo mamma so fat you haveta roll over twice to get off her..."
,"Yo mama so fat she was floating in the ocean and Spain claimed her for then new world"
,"Yo mama so fat when you get on top of her your ears pop!"
,"Yo mama so fat she straps an iPad on her arm before every run"
,"Yo mama so fat the army stole her underwear to use as parachutes"
,"Yo mama so fat when she wears a yellow raincoat, people said 'Taxi!'"
,"Yo mama so fat she had to go to Sea World to get baptized"
,"Yo mama so fat in the summer, people use her belly button as a swimming pool."
,"Yo mama so fat her shits are as long as king kongs finger"
,"Yo mama so fat, if she was bricks she'd be a housing project."
,"Yo mama so fat she got to iron her pants on the driveway"
,"'You cant have a brother or a sister 'Why?' 'Yo mama so fat your daddy got squished in the process!'"
,"Your mom is so fat that she can't fit in this joke."
,"Yo mama so fat she puts insurance on her food"
,"Yo mama so fat she can hear bacon cooking in Canada"
,"your mama so fat she aint got cellulite she got celluheavy"
,"Some people trade tit for tat, yo mama so fat she traded fit for fat"
,"Yo mama so fat, she did a belly flop and 2 weeks later they found water on Mars."
,"Yo mama so fat, if she was a dinosaur, her name would be Jell-Osaurus Rex."
,"Yo mama so fat she put on her lipstick with a paint-roller"
,"Yo mama so fat, NASA thought she caused a solar eclipse"
,"Yo momma so fat I could travel halfway across the world and still see her shadow"
,"Yo momma so fat her cereal bowl comes with a life guard."
,"Yo mama's so fat her patronus is a cake."
,"Yo momma so fat she has to wear her pants backwards, because her front butt is bigger"
,"yo mama so fat when she got in front of the HOLLYWOOD sign you could only see H-D"
,"Yo momma so fat the national weather service gives a name to each one of her farts."
,"Yo mama's so fat she needs a steamroller to iron her clothes."
,"your mama so fat the horse on her shirt is real"
,"your moms so fat when the judge said 'Order in the Court!' she said 'Pie and chips please!'"
,"Yo mama so fat she got to pull down her pants to get into her pockets"
,"yo momma so fat she was born in space and from then on she was know as Pluto (until they discoverd she wasnt a planet!)"
,"Yo momma is so fat she shits lard"
,"Yo mama so fat when she tripped over on 4th Ave, she landed on 12th"
,"Yo mama so fat when she bungee jumps, she brings down the bridge too"
,"Yo mama so fat the highway patrol made her wear 'Caution! Wide Turn'"
,"Yo momma so fat when she sat on a penny and Abraham Lincolin said ouch."
,"Yo mama so fat when she sits around the house, she SITS AROUND THE HOUSE!"
,"Yo mama so fat the only way she burns calories is when her food catches on fire"
,"Yo mama so fat she entered the Hunger Games and won all 75 of them"
,"Yo mama so fat she's the reason African kids are starving"
,"your mama is so fat that when I tried to take a picture off her, I had to get a mile away."
,"yo mama so fat that when she got into the ocean Thailand declared another tsunami warning. please'"
,"Yo mama so fat when she steps on a scale, it read 'one at a time, please'"
,"Yo mama so fat when she sits on my face I can't hear the stereo."
,"Yo mamma so fat even penguins are jealous of the way she waddles."
,"yo mama so fat when she drives a car people shout 'hey its the fat and the furious!'"
,"yo mama so fat when I stabbed her in the stomach the whole McDonalds value meal came out of her"
,"Yo mama so fat when she gets on the scale it says to be continued."
,"Yo mama so fat she blew out both her tires on her roller skates"
,"Yo Mama so lazy AND fat, she ate all the lunch meat, and didn't bother to pack yo lunch."
,"Yo mama so fat when she gets on the scale it says we don't do livestock."

,"Yo mama so fat, when she went to sign up for Survivor, they said 'Sorry we already have an island.'"

,"Yo mama so fat she dont skinny dip she chunky dunks"

,"Yo momma so fat. Your father no longer finds her attractive and its destroying their marriage."

,"Yo mama so fat her neck looks like a pair of hot dogs!"

,"Yo mama so fat she's got her own area code!"

,"Yo mama so fat she looks like she's smuggling a Volkswagon!"

,"Yo mama so fat when God said let there be light, he asked her to move out of the way"

,"Yo momma's so fat, she's got more chins than a Hong Kong phonebook"

,"Yo mama is so fat that when she sits on the toilet it starts saying a,b,c,d,e,f,g,get your fat ass off of me "

,"Yo mama so fat the only time she saw 90210 is when she stepped on a scale"

,"Yo mama so fat NASA has to orbit a satellite around her!"

,"yo mama so fat she stuffed a turkey with her fat."

,"Yo mama so fat whenever she goes to the beach the tide comes in!"

,"Yo mama so fat when she plays hopscotch, she goes New York, L.A., Chicago..."

,"Yo momma so fat she downloads cheat codes for wii fit."

,"Yo mama so fat she's got Amtrak written on her leg."

,"Yo mama so fat even Bill Gates couldn't pay for her liposuction!"

,"Yo Mama so fat, she has a KFC bucket in her hands at all times"

,"Yo mama so fat her legs is like spoiled milk - white &amp; chunky!"

,"yo mama so fat you cant tell if she got a penis or a vagina."

,"Yo mama so fat I had to take a train and two buses just to get on the her good side!"

,"Yo mama so fat she wakes up in sections!"

,"Yo mama so fat when she goes to an amusement park, people try to ride HER!"

,"Yo mama so fat she sat on a quarter and a booger shot out of george washington's nose."

,"Yo mama so fat she rolled over 4 quarters and it made a dollar!"

,"Your mother is so fat, its illegal for her to skydive because the world only needs one grand canyon."

,"Yo mamas so fat she needs cheat codes for Wii fit"

,"Yo momma so fat she broke her leg and gravy poured out"

,"Yo momma so fat, the only thing stopping her from going to work in the morning is the front door"

,"Yo mama so fat when she lies on the beach no one else gets sun!"

,"Yo mama so fat when she bunge jumps she goes straight to hell!"

,"Yo momma so fat she masturbates to cook books"

,"Yo momma so fat she went to Hollister and the manager told her to leave cause none of the clothes could fit her."

,"Yo mama so fat when she uses a space shuttle as a vibrator"

,"your mamma so fat that when she went skydiving people thought she was a hot air balloon."

,"Yo mama so fat when her belly button doesn’t have lint, it has sweaters"

,"Yo mommas so fat she uses a whole stick of deodorant on half an armpit.  "

,"Yo mommas so fat when she died and went to heaven Jesus said there was no room so then she went to hell and the devil said HELL NO."

,"Yo mama so fat when she farted in the Gulf of Mexico it caused Hurricane Katrina"

,"Yo mama so fat when she jumps up in the air she gets stuck!!!"

,"Yo mama so fat she goes to KFC and licks other peoples fingers"

,"Yo mama so fat that her senior pictures had to be aerial views!"

,"Yo mamma so fat even Kirby can't eat her."

,"Yo mama so fat everytime she walks in high heels, she strikes oil!"

,"Yo mama so fat she fell and made the Grand Canyon!"

,"Yo mama so fat she sat on the beach and Greenpeace threw her in!"

,"Yo mama so fat even her clothes have stretch marks!"

,"Yo mamma so fat she has front, side, and back boobs"

,"Yo mama so fat she doesn't have corn rows she has crop circles"

,"Yo mama so fat, she's the reason buffets installed speed bumps"

,"Yo mamma so fat a vampire bit her and got Type 2 diabetes. "

,"Yo mama so fat if she had a porn name it would be Krispy Kreme."

,"Yo mama so fat she has a wooden leg with a kickstand!"

,"Yo mama so fat when she went swimming, The Japanese harpooned her and took her back to Japan to sell her blubber"

,"Yo mama so fat when she rides in a hot air balloon, it looks like she's wearin tights!"

,"Yo mama so fat she got hit by a parked car!"

,"Yo mama so fat they have to grease the bath tub to get her out!"

,"Yo mama so fat she has a run in her blue-jeans!"

,"Yo mama so fat when she gets on the scale it says to be continued."

,"Yo mama so fat when she wears a yellow raincoat people say 'Taxi!'"

,"Yo mama so fat she has to get out of the car to change the radio station"

,"Yo mama so fat Japanese harpooners daydream of what she would look like, in a ham slicer."

,"Yo mama so fat when she get hurt we take her to the hospital in a pick up truck"

,"yo mamma so fat it took Usain Bolt 3 years to run around her"

,"your mama so fat when someome tried to fuck her it was like throwing a hotdog down a really long hallway"

,"Yo mama so fat she sweats more than a dog in a chinese resturaunt."

,"Yo mama so fat her shadow weighs 35 pounds"

,"Yo mama so fat she's like my ex-girlfriend... I can't get within 100 yards of her"

,"Yo Mama so fat up on Uranus their saying X marks the spot"

,"Yo mama so fat but I screwed her ne way"

,"Yo mama so fat she grinded her roller skates flat"

,"Yo mama so fat, shes the reason London Bridge is falling down."

,"yo mamma so fat I took a picture of her on christmas and it still printing"

,"Yo mama so fat she uses a stick of butter for chapstick."

,"Yo mama so fat she put on her lipstick with a paint-roller!"

,"Yo mama so fat when she tripped over on 4th Ave she landed on 12th"

,"Yo Mama's so fat that when she bends over, the whole country enters daylight saving!"

,"your mama is so fat I tried to hang a picture of her on my wall, and my wall fellover."

,"Yo mama so fat she steps on a scale &amp; it goes one at a time please"

,"Yo mama so fat that when she was born the doctors had to give her a pregnancy test!"

,"Yo mama so fat when she masterbates it looks like a 3-way"

,"Yo mama so fat SHE is a map on CALL OF DUTY!"

,"Yo mama so fat the police man said lady please move that exercising ball."

,"Yo mama so fat she shops at the Gap and now its the Filled"

,"Yo mama so fat the back of her head looks like hot dogs"

,"Yo mama so fat shes like the ocean....Big...Wide...and filed with Cubans!"

,"Yo mama so fat she has soft elbows"

,"Yo mama so fat instead of an STD she gave me cholestorol"

,"Yo momma so fat she made Jabba the Hut go dayyyyummmm. "

,"Yo mama so fat she jumped up in the air and got stuck!"

,"Yo mama so fat she sweats butter and syrup and has a full time job at Denny's wiping pancakes across her forehead"

,"Yo mama so fat she's like an SUV 'Big Black and room for 6 construction workers inside'"

,"Yo mama so fat she has more crack than Whitney and Bobby"

,"Yo momma so fat she gotta eating disorder. She eat dis order, &amp; that order, &amp; everybody else's order too"

,"Yo mama so fat she fell in love and broke it."

,"yo mom is so fat all i hear when she walks by  is heffty heffty heffty"

,"Yo mama so fat when she sits on my face I can't hear the stereo."

,"Yo Mama So Fat......That evryone is extremely concerned for her health and hopes she gets better."

,"Yo mama so fat they use the elastic in her underwear for bungee jumping"

,"Yo Momma's so huge, she looked at the Empire State Building, and said, 'Hey look! A Barbie Dream House!'"

,"Yo mama so fat when they used her underwear elastic for bungee jumping, they hit the ground."

,"Yo mama so fat when she back up she beep."

,"Yo mama so fat she jumped up in the air and got stuck."

,"Yo mama so fat she has to buy two airline tickets."

,"Yo mama so fat when she fell over she rocked herself asleep trying to get up again."

,"Yo mama so fat she influences the tides."

,"Yo mama so fat she uses Mount Everest as a dildo"

,"yo mama so fat, when she made a club penguin account, SHE TIPPED THE ICE-BERG!!!"

,"Yo mama so fat that when I tried to drive around her I ran out of gas."

,"Yo mama so fat she hasn't seen her waistline since 85"

,"Yo mama so fat she puts mayonaisse on her diet pills"

,"Yo mamas sooooo fat she didnt need to take a flight she was already in China."

,"Yo mama so fat that when she crossed the street every body thaught that she was a roundabout"

,"Yo mama so fat, she step on a lego and broke it!"

,"Yo mama so fat when she walked out in August in her yellow sun dress and the kids said mommy its time for school."

,"Yo mama so fat, her favorite word is Gravy cuz she puts that shit on everything."

,"Yo mama so fat when she wears Nike's they say Nickeloden"

,"Yo mama so fat when she wears a yellow raincoat people yell 'Taxi!!'"

,"Yo mama so fat she puts mayonasise on asprin"

,"Yo mama so fat she shops for her clothes in the maternity section!"

,"yo mamma so fat when she got in a plane she was like the Japanese Kamikaze, up up up crash."

,"Yo mama so fat she bathes with Shamu at Sea World"

,"Yo mamma is so fat she was talking on her telephone and it got lost in her ear."

,"Yo mama so fat she has to pull her pants down to get into her pockets"

,"Yo mama so fat she went cow tipping and got pushed over"

,"Yo mama so fat, that in the summer, she sells her own shade."

,"Yo mama so fat, her fingers are too fat for the iPad."

,"Yo mama so fat, she used jumper cables for suspenders"

,"your mamas so fat if you slice her in fruit ninja, you automatically win the game!"

,"Yo mama so fat, her address is McDonalds"

,"Yo Mama so fat that it takes 40 men and 4 cranes to get her in Skinny Jeans"

,"Yo mamma so fat and dumb, she thinks she's in shape, because circle is a shape."

,"Yo mama so fat, she had a twin, but she ate her."

,"Yo mama so fat she went bungee jumping and broke the bridge"

,"Yo mama so fat the only time she lifts weights is when she gets out of bed"

,"Your mama so fat the only letters in the alphabet she knows is KFC"

,"Yo mama so fat shes on the seafood diet, she sees food and she eats it"

,"Yo mama so fat it took her four weeks to die from lethal injection"

,"Yo mama so fat her nipples touch on her back"

,"Yo mama so fat she's a middleweight prostitute"

,"Yo mama so fat she pulls her pants down and her ass is still in them."

,"Yo mama so fat the animals at the zoo feed her."

,"Yo mama so fat that when she jumped off a bridge she baptised the whole world."

,"Yo mama so fat not even Jesus could lift her spirits"

,"Yo mama so fat she needs a lattitude and longitude number to find her own asshole"

,"Yo mama so fat they had to put her back pockets in front"

,"Yo mama so fat her favorite actor is Krevin Bacon"

,"yo momma so fat she has enough rolls to feed china."

,"Yo Momma so fat, You can print out a picture of her and use it as a paperweight."

,"Yo mama so fat she has to wear a spandex wedding ring"

,"Yo mama so fat she has shocks on her toilet"

,"Yo mama so fat when she dances at a concert the whole band skips."

,"Yo mama is so fat when she lays on the bed she falls from all sides."

,"Yo mama is so fat, a hyperbole coulden't exagerate her weight"

,"Yo mama so fat, when she goes camping the bears hide their food"

,"Yo mama is so fat, your daddy had to hire an engineer to reinforce their bed"

,"Yo mama so fat the Aids quilt wouldn't cover her"

,"Yo mama so fat she stands in two time zones."

,"Yo mama so fat that when she died even god couldn't lift her spirit."

,"Yo mama so fat when she climbed the full moon it cracked in half"

,"your mamma's so fat she made the sumo wrestlers look anorexic."

,"Yo, mama so fat when she weres a shirt with pictures on it they become 3-D"

,"Yo mama so fat she stepped on the scale and it said my phone number."

,"yo mama is so fat the police stoped her and told her to stop selling crack"

,"Yo mama so fat that when she goes to KFC she says, 'can i get the bucket on the roof?'"

,"Yo mama so fat she walked in front of the tv and i missed the hole titanic movie"

,"Yo mama so fat she stepped on a dollar and got cents"

,"Yo Mama so fat after Hostess went bankrupt all she does is chase school buses"

,"Yo mama so fat when she gets a cut she bleeds milkshake"

,"Yo Mama so fat she became the eighth wonder of the world."

,"Yo mama so fat she puts on a black bathing suit, gets in the ocean, and everyone screams 'Oil Spill.'"

,"Yo Mama is so fat, when she got on the scale her phone number showed up!"

,"Yo mama so fat when she was in school she sat by everybody!"

,"Yo Mama So Fat She Use A Flat Bed Truck As A Bed"

,"Yo mama so fat the only way she'll lose weight is if she loses a leg to diabetes"

,"Yo mama so fat and dumb, she thinks 'Real women have curves and diabetes'"

,"Yo mama so fat the only liquor she knows is liquorice"

,"Yo mamas so fat she has more rolls than a bakery!"

,"Yo momma so fat when she  went to the zoo she got put in with hippos"

,"Yo mama is so fat, her nearest toilet is EVERYWHERE!"

,"Yo mama's so fat,when she went to the theaters everybody yelled, 'Look King-Kong in 3-D!'."

,"Yo mama so fat she jumped into the ocean and made the whales sing 'we are family, even though you are fatter than me.'"

,"Yo mama so fat she went in a bed store, and ask for a waterbed, the owner put a blanet over the Pacific Ocean"

,"Yo mama so fat, she thought that she was having a stomach ache when she was really going into labor"

,"Yo mama so fat, she was sued for eating people, so she ate the prosecutor"

,"Yo mama so fat, she uses mayonnaise for toothpaste, and Coca-Cola for mouthwash"

,"Your mama so fat that when she runs every one shouts EARTHQUAKE."

,"Yo Mama's so fat, she makes Jonah Hill look superbad at gaining weight!"

,"Yo mama so fat, she got arrested for selling crack"

,"Yo mama is so ugly that when she was born her mother said to her husband DAMN I should have just gave you head "

,"Yo mama so fat, her picture heavy"

,"yo mamas so fat that when you poke her with a fork she bleeds chocolate milk"

,"yo mama so fat she has to eat with a fork lift driver"

,"Yo mama so fat she gotta do the matix just to get of her car"

,"Your mum so fat when she walk around people say there go the  neighborhood!"

,"Yo mama so fat she cant take pictures, she have to take billboards!"

,"Yo mama so fat she uses a flat bed truck as a bed."

,"Yo mama so fat when she sat on the toilet it sang abcdefg  get your fat butt off of me."

,"Yo mama so fat she look like a obese teddy graham that should be haven a million bras two in the front of her neck,two in the back of her neck, ten on her back, eleven on her stomach, six on each arm and leg and theigh, and one wrapped around each toe,and a tripple d cup size bra to hold up her virgina!"

,"Yo mum so fat that I walked around her twice and got lost!"

,"Yo mama so fat she jumped off the Grand Canyon and got stuck"

,"Yo mama so fat that when God sent her to heaven she fell down to hell."

,"Yo mama so fat when she jumped in the Pacific ocean a tsunami wiped out half of Japan."

,"Yo mama so fat she can play pool with the planets."

,"Yo mamas so fat that she donates her fat rolls to the bakery."

,"Yo mama is so fat that when she saw a yellow bus she said 'there goes my twinkie'"

,"Yo mama so fat when she&nbsp;went to the zoo she got put in with the hippos."

,"yo mama so fat she play hopscotch like this Washington, Texas, Florida, Mexico."

,"Your mom so fat when she got on the scale the doctor looked at the number and said 'That's my phone number.'"

,"Yo momma so fat that she has a gravitational pull"

,"Your mom's so fat that she called a group of scientists to calculate the amount of chins she has."

,"yo mama so fat when she got shot in the leg the doctors couldn't find the bullet"

,"Yo Momma so fat, a Blind Dude pointed at her and said “That Bitch is FAT”"

,"Yo mama is so fat that her car is made out of spandex."

,"Yo mama so fat that u have to take 2 airplanes and bus to get on her good side."

,"Yo mama so fat her stretch marks got stretch marks."

,"Your moma is so fat, when she had fever it caused global warming."

,"Yo mama so fat she wears the eqautor for a belt just to hold up her pants."

,"Yo momma so fat, she uses Jupiter as a basketball"

,"yo mama is so fat she thought the first 3 letters of the alphabet was KFC"

,"Yo mama so fat when she puts on a yellow rain coat the childern come running to the bus stop."

,"Yo mama so fat when you have sex with her you have to slap her stomach and ride the wave in."

,"Your mom is so fat, she uses the asteroid belt to slice her foods."

,"Your mom is so fat, she is standing on Marianas Trench, which is the reason why it's the lowest point on Earth."

,"Your mom is so fat, the Hubble telescope took a picture of her not on Earth but on the opposite point of the universe."

,"Yo mama is so fat that the government could use her jelly-rolls to stop world hunger."

,"Yo mama so fat she fell off the bed and went straight to hell"

,"Yo mama so fat that even god couldn't raise her spirit"

,"Yo mama so fat she got stuck in the grand canyon"

,"Yo mama so fat when she walked past the t.v. you missed three episodes."

,"Your momma so fat that when people want to clean the tunnels they tie ropes around her shoulders and pull her through them"

,"Yo Mama so fat she wears a vcr as a beeper"

,"Yo mama so fat she had to take a specially made taxi the size of the united states."

,"Yo mama so fat when she hop she goes from Europe to asia to africa to anartica"

,"Yo mama is so fat she brought a spoon to the Superbowl."

,"Yo mama so fat she got her own area code"

,"Your mom is so fat, the NASA ordered her to clean up the satellite junks floating above."

,"Your mom is so fat, even all dark matter from space is falling into her right now."

,"Your mom is so fat, when all the planets got aligned, she played hopscotch on them, starting from the sun."

,"yo mama so fat, she went to disneyland and was offered a group discount."

,"Yo momma so fat,her car has stretch marks."

,"Your mum is so fat when sat on the rocket the rocket couldn't lift off"

,"Yo momma so fat, they used Google Earth for her school photo."

,"Yo mama so fat when she was watching the food network &amp; turned over she missed 2 episodes."

,"Yo momma so fat she broke up Pangea!"

,"yo momma so fat, she has to get pulled by a trailer to get home"

,"Yo mama so fat she fills up tha bathtub then she turns on the water."

,"Yo mama so fat that when she farts, the richter scale says 9.0!"

,"Yo mama so fat the shadow of her butt weighs fifty pounds."

,"Yo mama so fat she sat in the middle of the road and got mistakened for a roundabout."

,"Yo mama so fat NASA uses her farts for rocket fuel"

,"Yo momma so fat she has double wide swinging restuarant doors in her house."

,"Yo mama is so fat she wore a pink and yellow spotted dress and a girl thought she was Mr blobby"

,"Yo mama so fat when she leaves the beach everyone screams the coast is clear!!!"

,"Yo mama so fat she is in love with the great wall of china"

,"Yo mama so fat her strech marks spell out 'big bitch'"

,"Yo mama so fat when she leaves the beach everyone screams the coast is clear!!!"

,"Yo mama so fat when she walk up a street pepole thought the sun was coming."

,"yo mama so fat that that when she was walking home she tripped over Wal-mart and landed on Target."

,"Yo mama so fat that when she sat on the toilet she said ooh this ain't comfortable. Because she was sitting on a broken chair!"

,"Yo mama so fat, I wasted all my gas driving around her!!"

,"Yo momma so fat when she walks across the isle at the theatre everybody misses the movie"

,"Yo mama so fat she made the movie 'Gorillas in the Mist' in her shower."

,"Yo mama so fat that her belt size is the equator."

,"Yo momma so fat, she got stuck in an armless chair."

,"Yo mama is so fat to keep her cold at night she doesnt use a fan she uses a helicopter"

,"Your momma so fat she sat on 2 Sumo wrestlers and got arrested for double homicide"

,"Yo mama is so fat that her car is made out of spandex."

,"Yo mama so fat her blood type is Rocky Road"

,"Yo momma is so fat a truck hit her and she asked who pelt that stone!"

,"Yo mama's so fat she could stand on the sidewalk and still get hit by a car."

,"Yo momma so fat she has a shape of a pepsi not the bottle THE CAN!"

,"Yo mama so fat when she said beam me up scotty he said 'I cant your to heavy.'"

,"Yo mama so fat her butt cheecks look two pigs fiting over a milk dud"

,"Yo mama is so fat that when your school bus passed by she ran after it trying to catch that twinkie"

,"Yo mama so fat she got hit by a bus and was like 'who be thowin rocks at me'..."

,"Yo mama so fat that when she stepped on the scale it said to be continued"

,"Yo mama so fat every time she walked in JCPennys they said its all inside"

,"Yo Mama is so fat that when she travelled to a different country they said 'Oh look there's an American'."

,"Yo mama is so fat she hopped over walmart, tripped over kmart, rolled over sears and landed on target."

,"Yo mama so fat the bath tub sits in her!"

,"Yo mama so fat that when she farted she started global warming"

,"your mama so fat she has pictures of food in her wallet"

,"yo mammas so fat when she went to 'In 'n' Out' she couldn't get in or out"

,"Yo Mamma's So Fat, When God Said Let There Bel Light, He Asked Her To Move Out Of The Way."

,"Yo mama so fat, she wears 'Hammer Pants' as skinny jeans"

,"Yo mama so fat everytime she TRIES to masterbate she can only find her belly button"

,"Yo momma so fat that Cristopher Colombus claimed her for the new world."

,"Yo momma so fat, the rent money was stuck in her belly button for a month and ya'll got evicted cuz she could'nt find it"

,"Yo momma so fat, she lost a face cloth and a bar of soap in the crack of her ass trying to take a shower"

,"Yo mama so fat that if you tried to kick her butt you might never get your foot back"

,"Your Mama So Fat When She Bungie Jumps..She Goes Straight 2 Hell"

,"Yo mama so fat she use a county issued trash can for a girdle."

,"Yo mama so fat if she go skydiving up in the Northeast there'd be 6 Great lakes."

,"Your mama so fat when she jumped in the ocean she said 'Beat that Moses.'"

,"Yo mama so fat that when she leaned on the 'Empire State Building', it tipped"

,"Yo mama so fat, she rolls up the stairs!"

,"Yo mama so fat she put a blanket over the ocean and called it a water bed"

,"Yo momma so fat dat she left out da house wit heels on and came home wit flats on."

,"yo mama is so fat when she got in her car she says 'Dam kids, they popped my tires'"

,"Yo mama so fat when she steps on the scale Buzzlightear popped out and said to infinity and beyond"

,"Yo mama so fat she went to da zoo and da elephants was jealous"

,"yo mommas so fat that when she walks around the house she walks 'around' the house"

,"Yo mama so fat when shes in her car and she sticks out her hand, the car will turn!"

,"yo mama so fat that when she walked pass the t.v. you missed a marathon"

,"yo mama so fat that when she laughs she farts"

,"yo mama so fat her streachmarks got streachmarks!"

,"yo mama's so fat that when she wore a red shirt, people said hey look koolaid!"

,"Yo mama so fat she uses a paint-roller to put on lipstick."

,"Yo mama so fat when she walked past the t.v.you missed three episodes."

,"Yo Mama is so Fat.. when she tried to take a bath the water jumped out and said 'Nah brah, I'll wait.'"

,"Yo mama so fat when you have sex with her you have to slap her stomach and ride the wave in!"

,"Yo mama so fat that when she goes out to eat she looks at the menu and says okay"

,"Yo mama so fat when she puts on a yellow rain coat the childern come running to the bus stop."

,"Yo mama so fat when she gave birth to you  it took them 7 days to find you !"

,"Yo mama so fat she jump into the sea and the sea jump out"

,"Yo momma so fat the only way to get her out of a telephone booth is to grease her thighs and throw a twinkie in the street."

,"Yo mama, so fat 500 people cant pick her up, not even a fork lift"

,"Yo momma, so fat that everytime she takes a step the Earth's orbit changes"

,"Yo mommas so fat when she goes to the beach people ask her is she wearing bottoms!"

,"Yo Momma So Fat They Used Her For The New Years Ball Drop"

,"Yo Momma So Fat she has stretch marks on her toenails"

,"Your mamas so fat einstien based the black hole theory on her Ass hole"

,"Yo momma so fat when she fell off the roof people thought it was santa claus!"

,"Yo momma so big, she went to the airport and asked for a ticket. And they gave her clearance to take off!"

,"Yo momma is so fat she needs a GPS to find her ass hole"

,"yo mama so fat her belly button gets home 15 mins before she does"

,"Yo mama so fat she ate herself alive"

,"Yo Mama so fat she hoola-hooped the Superbowl"

,"Yo momma's so fat, Borden's called her and asked for their cottage cheese back."

,"Yo mama so fat she was laying on the side of the beach and a kid walked by and said 'WOAH BEACHED WHALE'"

,"yo mama so fat when I kicked her in the stomach porkchops came out of her ass"

,"yo mama is so fat, when she walks on the road her butts clap"

,"Yo Mama is so fat when she came up missing they couldnt fit her face on the milk carton so they branded it on the side of the cow."

,"Yo mama's so fat she broke her own branch on the family tree."

,"Yo Mama is so fat, she created a black hole because she has attained infinite mass."

,"yo mama's so fat that when I thought I heard music from her cellphone in her pocket she instead pulled out and ice cream truck."

,"Yo momma so fat her double chin is bigger then your ass"

,"your mama so fat, she has smaller fat women orbiting around her"

,"yo mama is so big dora can't explore her"

,"yo mama so fat you can stand on top of her and Hi-5 jesus."

,"yo mama so fat her blood is doughnut jelly"

,"yo mama so fat she play hop scotch like pennsylvania, new york, maine, massachussets"

,"Yo mama so fat everyone keeps asking her when her baby is due"

,"yo mama's so fat she jumped in the swiming pool and said 'Where did all the water go'"

,"Your Mama SO Fat when she got on the scale it said lose some weight bitch"

,"yo mama so fat when she got on the bus the bus driver asked how'd she got on the bus"

,"Yo mam so fat, when she auditioned for star trek she bent the space time continuum"

,"yo mama so fat the only thing stopping her from Jenny Craig is the door!"

,"Yo momma so fat she has her own orbit"

,"yo mamma so fat she sneeze bacon grease"

,"Yo mama so fat she sat on the bus seat an the bus tilted over"

,"yo mama so fat when she had surgery it took hours for the doctors to get to the flesh"

,"your mama so fat when she ordered a water bed they put a blanket over the Mississippi River"

,"Your mama's so fat that at her wedding the ring bearer was Saturn."

,"Yo mama so fat, when sumo wrestlers landed on her, they flew off into space."

,"yo mamas so fat that she rolls up her matress to use it as a tampon!"

,"Yo mama so fat, she cant float, even in space!"

,"Ya mummas so fat she has to put her boobs in the back seat to drive"

,"yo momma so fat every time she rolls out of bed she finds six naked men attached to her ass."

,"Yo mama's so fat that two guys could be having sex with her at once and they still would never meet."

,"yo mama so fat when she fell down I tried not to laugh, but the ground was cracking up."

,"Yo momma so fat she sweat bacon bits"

,"yo mama's so fat scientists thought Jupiter was her brother."

,"Yo momma so fat when she jumped into the alantic ocean she brought back titanic"

,"Yo momma so fat her kidney stones are the size of boulders."

,"yo mama so fat, when she goes on vacation, everyone gotta put sun block on"

,"Yo mama so chubby when she went out to the strip club, they called her momma shake weight"

,"Yo mama's so fat that when God said 'Let there be light.' he had to ask her to move out of the way first."

,"yo mama's so fat, even her myspace has no space."

,"Yo momma is so fat the only thing stoping her on the way to mcdonalds is the door"

,"Yo momma so fat, even Bill Gates couldn't pay for her liposuction"

,"Yo mama so fat she broke the 64 block limit on Minecraft."

,"yo momma so fat when she swam in the mediterranean sea and even Italy couldn't kick her out."

,"Yo momma is so fat during pregnancy she went to the hospital in a tow truck."

,"Yo Mama So Fat She Was Wearing An All Blue Shirt And Hawaiians Said, 'Oh Shit Tsunami.'"

,"Yo mamma so fat when she traveled to outer space people thought she was the moon"

,"Yo mamma so fat when I tickeled her, she didnt feel it!"

,"Yo Mama so fat she uses the highway as a slip and slide"

,"Yo momma so fat she said she would get me a snack walked in front of the tv and I missed the superbowl"

,"Yo mama so fat and poor that when her kids said 'i want trampoline for Christmas' she said you dont need one! You've got me! BOUNCE BOUNCE!"

,"Yo mama so fat when she turned around she knocked Mars out of orbit"

,"Yo mama so fat the police used her as a road block!"

,"Yo mama so fat her nose and her butt are in different time zones."

,"Yo mama so fat and ugly, Fat Albert says 'Hey Hey Hey,get away'"

,"yo mama so fat when she died she broke the stairway to heaven"

,"Yo mama so fat that when she jumped out an airplane her fat rolls made their own parachute."

,"Yo mama is so fat when she was in Call of Duty she got killed and the person that killed her got a five person kill streak."

,"Yo Momma so fat she makes fat people look skinny"

,"Yo momma so fat that she thinks the ocean is like jumping in a puddle"

,"Yo mama so fat that when we die we can't go to heaven or hell because it's all full"

,"yo mama is so fat instead of swimming with the dolphins she goes out to the ocean and and swims with the whales"

,"yo mommas so fat when she sat down she caused an eathquake on the OTHER side of the WORLD!"

,"yo mama so fat that her back rolls cried justin timberlake a river."

,"yo momma so fat that when she entered the fat racing contest she came in first second and third"

,"yo mama is so fat she has her own energy source"

,"yo mama so fat that when she was wearing a hollister shirt, a helicopter landed on the H"

,"yo mama so fat that when she hears the doorbell she runs to the microwave singing  'HOT POCKETS'!!!"

,"yo mama so fat she couldn't have sex with king kong"

,"yo mama so fat that when its time to take the subway no one else can come on!"

,"Yo mommas so fat when she sat in the tub it sang bubble bubble abc  get your big a$$ out of me."

,"yo mamma so fat when shes mad she turns into a tomato"

,"yo mama is so fat when she went to the movies, everyone asked 'Can this screen be any bigger?"

,"yo mama is so fat when she was in outer space she had more gravitational pull than all the planets combined....."

,"YO momma so fat that the goverment thought that she was RUSSIA."

,"Yo mama so fat they needed a bulldozer to bury her, may she Rest In Peace."

,"yo momma so fat when she pulls her panties down to her knees she still has pu**y in them."

,"Yo momma so fat she asked Jenny Craig how many Weight Watchers points Self-Esteem was worth"

,"yo mama so fat when she jumped in the Pacific ocean it became the Pacific desert"

,"Yo mama's so fat when she sat on a tree it made paper."

,"Yo mama so fat the equator is smaller then her waist line."

,"yo momma so fat every time she goes grocery shopping workers yell 'Deliverys here'"

,"yo momma is so fat......She has bacon-bits in her blood"

,"Yo mama so fat that when she went to Walmart she couldn't get in OR out! "

,"Yo Mama is so fat she uses a king size mattress for a maxi pad."

,"Yo momma so fat, that one side of her lives in a parallel universe."

,"yo mamma's so fat when she wading in the atlantic ocean, people could get to New York from London without having to pay"

,"yo mama so fat she has the weight loss commercial for a ringtone"

,"Yo mama so fat when she farts they have to put it on the weather channel!"

,"Yo Mama so fat when she went swimming Japanese whalers on the other side of the ocean harpooned her"

,"yo mama so fat she was floating in the ocean and they used her as a replica of the war of 1812"

,"Yo mama so fat when she gets out of the shower, her legs are still dry!!"

,"Yo mama is so fat, NASA qualified her as a planet"

,"Yo mama so fat when she sits on an active volcano she makes a whole beach"

,"yo mama is fat that when she sits on a semi they say 'Ok now give me the over size load sign.'"

,"Yo mama so fat, she went to take her blood test and the machine said 'Life at STEAK'."

,"Yo mama so fat, She ate popcorn out of the whole theater!"

,"Yo mama so fat that when she passes by the tv, Jesse Pinkman was in and out of rehab 4 times."

,"yo mama so fat half of her ass was in a parallel universe"

,"Yo mama so fat when she plays Mortal Kombat, Sub Zero cant freeze her."

,"yo mama so fat and old she sat on a toy airplane and invented the jet"

,"Yo mama is so fat she tried out for the Indiana Jones movie and got the part as the rolling boulder"

,"Yo mama is so fat, that when she dies, they will need to make a whole new cemetary!"

,"Yo mama so fat her farts started global warming and if she died it would be over."

,"Yo mama so fat she made a ditch the grand canyon"

,"yo mama is so fat that the Titanic ran into her not the iceberg."

,"your mom is so fat she ate the rest of the joke"

,"Yo mamma's so fat when people are looking for a moonbounce they call her!"

,"Yo mama so fat she got an ocean side house and said her pool was to small."

,"Yo mama so fat everyone keeps asking when the triplets are due"

,"Yo mama is so fat she went to space and never floated."

,"Yo mama is so fat that I had a dream about her and I woke up with a broken neck."

,"Yo mama so fat she went to the elephant exhibit at the zoo and had a family reunion."

,"Yo mama is so fat when she walks into a manwhore house all she gets is a cheese sandwich."

,"Yo mamma so fat when she sat on the bible Jesus came begging her to set his people free"

,"Yo Mama so fat her idea of eating pork is eating the entire pig."

,"Ya mamma so fat she thinks biscuits are like tic tacs"

,"Yo mama is so fat that she makes a whale look like a tic-tac"

,"Yo mammas so fat, she went to Syria and farted.... and Barack Obama almost bombed the country for having weapons of mass destruction."

,"Yo momma so fat that a car can park on her back."

,"Yo momma so fat, they got to use garden tools to give her a pap smear."

,"Yo momma so fat Nasa though they found a second moon"

,"Yo momma so fat, it takes 4 rolls of toilet paper and a Bed sheet to wipe her ass!"

,"Yo mama so fat, she used to have a six-pack, but she drank it"

,"Your mama so fat when she saw herself on the weather channel she said 'Wow I never new I was that fat'"

,"Yo momma so fat, she got steering wheel burns on her belly from driving to work everyday.."

,"Yo mama is so fat that when I had sex with her and rolled over 3 times I was still on that b**ch."

,"Yo momma so fat she hopped in a monster truck and made it a low rider"

,"Yo momma so fat her nickname is the 'Big Bang' because we only have theories as to what created her."

,"yo mamma was so fat when she left the beach, the people all shouted the coast is cleared"

,"You momma so fat when she tryied out for rhymatic gymnastics she had to hoola hoop in saturns rings."

,"yo mama so fat she can name every Restaurant because there all in her stomach."

,"Yo mamma's ass is so fat when she sits down she's three feet taller"

,"yo mamma so fat I thought she worked at KFC, but in fact she was their best customer."

,"Yo mama so heavy, that when she goes on an elevator, it turns into Hellevator."

,"Yo mama so fat when she said 'I'm jonesen for a milky way, she meant the entire galaxy'"

,"yo mama so fat you need a g.p.s to walk around her"

,"Yo mama so fat that she inspired Al Gore to invent the World Wide Web."

,"Yo mama so fat she has to call 911 anytime she wants to leave the house."

,"yo mama's so fat when she sat on the side walk she got a parking ticket!"

,"yo mammas so fat when she sat on the floor she went to the basement"

,"Yo Mama So Fat When She Step On The Scale My Credit Card Number Showed Up....."

,"yo mama so fat she eats a prize pig for breakfast and a family of whales for a light snack"

,"Yo mama is fat that scientists are worried she's helping the earth become a black hole. "

,"yo mama so fat that she counts as a 5 kill streak on Call Of Duty."

,"yo momma is so fat when she got into her mini van construction workers had to tape over size load on the back"

,"Yo mama so fat she has her own ozone layer"

,"yo mama so fat her shirt size is XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXL"

,"Yo momma so fat she walked in the aquariam and the tour guide said 'How did this whale get out?'"

,"yo mama so fat and thats that."

,"yo mama so fat if you had a dollar for every pound she weighed you could pay down the national debt."

,"yo mama so fat that when she put a sparkley dress, she almost brought back disco."

,"Yo mama so fat for halloween she wore a black plastic bag and when i asked her what she was going as she said night."

,"People used to be able to fall in love, but yo mama so fat she fell in love and broke it."

,"Yo mama so fat, SHE is a board on the MARIO PARTY GAMES!"

,"Yo mamma so fat, when she's thirsty she puts a straw in the ocean."

,"Your mums so fat, she's in every time zone"

,"Your mum so fat she needs a digital scale to remember her phone number."

,"Yo mama so fat she makes 'Free Willy' look like a goldfish. "

,"Yo mama so fat when they took pictures of Earth it looked like Earth had a pimple."

,"Yo mama so fat that when she got up from her desk she had to bring it home with her."

,"Yo mama so fat and large only the sun is jealous of her."

,"yo mama so fat, she made 'Precious' say 'God Damnnnnnn'."

,"Yo Mama so fat and her teeth are so yellow the only cat calls she gets are 'Hey Taxi'"

,"Yo mama so fat and old that her falling caused Pangaea to break apart."

,"Your momma is so fat she uses the Great wall of China as a belt."

,"Yo momma so fat she has to wait for it to rain before she can take a shower."

,"Yo momma so fat she farted in the ocean and caused El Nino."

,"Your mama so fat that when you where born they couldn't find..... You"

,"Yo mama so fat evel knievel called and wanted to jump her ....(with his motorcycle)"

,"Yo Mamas SO Fat She Went to the beach And Jumped Of A Diving Board A person Went inside of her"

,"your mom so fat when she she turns around its her birthday"

,"Yo mama soo fat she ate the rest of my joke"

,"Yo Mamas so fat she can't go swimming in Japan because of illegal whaling."

,"Yo mummy is so fat, when she steps on Wolverine.... Even he can't heal himself!"

,"yo mama so fat that when i moved from china to England, she was still my neighbor."

,"Yo mama so fat that when she sails, she sails underwater."

,"yo mama so fat when she went to the gynecologist and told them she was pregnant, they didn't think she could get any bigger."

,"yo mama so fat when she goes up a flight of stairs she leaves dents in them"

,"yo mama so fat and blonde that when the sun retired she was eligible to take its place."

,"Yo Mama so fat, when she walked into a construction site, one of the workers said, 'Hey! Bill! Get the crane ready! We've got a wide load comin' in!"

,"Yo momma so fat her engagement ring was one of Saturn's"

,"Yo mama so fat, fast food stock prices go up and down based on her eating habits."

,"Yo mamma so fat, when she does the hokey pokey her left leg goes outside of earth"

,"Your mama's so fat that she makes the national debt look small!"

,"Yo mama so fat she fell down and rocked her self asleep trying to get up"

,"yo mama so fat her ass got mistaken for Uranus"

,"Yo mama so fat that when she wore her wedding dress people thought it was snowing"

,"Yo mama's so fat, when she's going on an airplane, she her ass has to pay for baggage fees."

,"yo mamma so fat that when she stand on one end of the Earth the other end lift up"

,"Yo mama so fat she doesnt have to be famous to be nation wide."

,"Yo mamma so fat the elephant at the zoo thought they were related."

,"Yo mamma so fat, scientists proved that the moon orbits her."

,"yo mama so fat when i asked to have sex it took her years to take off her clothes"

,"You Mamas so fat when we talk about mother earth we are referring to her."

,"Yo mamas so fat, she was Miley Cyrus's wrecking ball."

,"Yo mama is so fat that when she sat on my 3DS she turned it into a 2DS."

,"Yo momma so fat, when she sat on a scooter she turned it into a bike."

,"Yo mama so fat and poor the national weather service had to call her and tell her to stop stomping out her roaches cause she's causing earthquakes"

,"Yo mama so fat, when she sits on a hockey puck, it becomes a flat tire!"

,"Yo mama so fricken fat if she could bend over she could disprove the laws of physics"

,"Yo mamma is so fat when she gets hit by a bus she yelled 'Who throw that Twinkie at me?' "

,"Yo Momma so fat i was by the ocean in the morning and by the time she passed me I missed the sunset."

,"Yo mama so fat, she fell and hit the Earth, it caused the Ice Age."

,"yo mama so fat she sat on a bear and turned it into rug"

,"yo mama so fat that when she went to a store with XXXXXXXXXXL shirts, they said ,'to get cloths for you, get a time machine and kill a wooly mammoth."

,"Yo mama so fat, she jumped into the Pacific Ocean and Tsunami sirens sounded in Southeast Asia."

,"Your momma so fat, when she jumped into the ocean, Gilligan, the Skipper, the Millon and his Wife, Movie Star, the Professer and Maryann had land to walk home."

,"Yo mamma's so fat, her plumbers crack is more like a plumbers ravine."

,"Yo mama so fat, when she farted, homeland security thought it was a dirty bomb."

,"Yo momma's so fat, she sued the State of Florida because every time she went to the beach, people dragged her into the water thinking she was a beached whale."

,"Yo mama so fat, she eats soup with the Big Dipper."

,"Yo mum so fat, a picture of her weighs more than I do."

,"Yo momma so fat, when she was in space, scientists thought her neck was pluto."

,"I bet you know about Fast and Furious, right? But....Yo mama so fat, she's the star of the reality show: Fat and Furious."

,"I have a big belly and a big face I eat too many burgers and I hate veggies! Who am I . Your mama!"


                    ];
                    
                    var num = Math.floor(Math.random() * jokearr.length * 10 % jokearr.length);
                    var content = "<div class='highlight2'>"+jokearr[num]+"</div>";
                    return content;
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
                content += "<tr><td>role</td><td> : </td><td>display the roles and reponsibilities I have undertaken</td></tr>";
                content += "<tr><td>responsibility</td><td> : </td><td>alias for role</td></tr>";
                content += "<tr><td>experience</td><td> : </td><td>display details of my total experience</td></tr>";
                content += "<tr><td>education</td><td> : </td><td>display my education details</td></tr>";
                content += "<tr><td>projects</td><td> : </td><td>display the details of the projects I have undertaken</td></tr>";
                content += "<tr><td>skills</td><td> : </td><td>display details of my skills</td></tr>";
                content += "<tr><td>personal</td><td> : </td><td>display my personal details</td></tr>";
                content += "<tr><td>download</td><td> : </td><td>download my resume</td></tr>";
                content += "<tr><td>clear</td><td> : </td><td>clear screen</td></tr>";
                content += "<tr><td>help</td><td> : </td><td>display this help text</td></tr>";
                content += "<tr><td>yomama</td><td> : </td><td>display a 'yo mama's so fat' joke</td></tr>";
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