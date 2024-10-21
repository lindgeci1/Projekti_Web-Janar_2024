
<!DOCTYPE html>
<html>
<head>
    
    
    <title>News Website</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <header>
        <div class="logo">
            <h1>The New York Times</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Business.php">Business</a></li>
                <li><a href="Technology.php">Technology</a></li>
                <li><a href="World.php">World</a></li>
                <li><a href="Sports.php">Sports</a></li>
                <li><a href="Health.php">Health</a></li>
                
                <?php
                 session_start();
                    if (isset($_SESSION["user"]) && $_SESSION["user"] == "yes") {
           
                    if ($_SESSION["Rolet"] == "admin") {
                        echo '<li><a href="dashboard.php">Admin</a></li>';
                        echo '<li><a href="newsdashboard.php">News</a></li>';
                        echo '<li><a href="insertNews.php">Insert</a></li>';
                    } 
                        echo '<li><a href="logout.php">Logout</a></li>';
                    } else {
                        echo '<li><a href="Login.php">Log-in</a></li>';
                        echo '<li><a href="Register.php">Register</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </header>
    <div class="search">
        <div class="search1">
            <input type="search" id="pc" placeholder="Search...">
            <button onclick="checkSearch()">Search</button>
        </div>
    </div>
    
    <div class="main">
        <div class="left">
            <div class="box">
                <div class="title">
                    <h3>Breaking News</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                    <div class="img"><img src="indexphoto/foto7.jpg" alt="foto7"></div>
                    <h3>The most powerful rocket ever built just went farther than it had ever gone, then was lost</h3>
                    <p>SpaceX’s gargantuan deep-space rocket system, Starship, safely lifted off Saturday morning but ended prematurely with an explosion and a loss of signal.
                        The Super Heavy booster and Starship spacecraft successfully separated after liftoff, as the Starship lit up its engines and pushed away. That process ended up destroying the Super Heavy booster, which erupted into a ball of flames over the Gulf of Mexico. But the Starship spacecraft was able to briefly continue its journey.
                    </p>
                    </div>

                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto8.webp" alt = "foto8" ></div>
                        <h3>Dwindling ammunition, a jailed artist and Kyiv’s new ‘foothold’ in the south: The latest from Ukraine</h3>
                        <p>Ukraine this week claimed to have “gained a foothold” on the left bank of the Dnipro River, a welcome boost after its much vaunted counteroffensive failed to make major gains.
                            But it has been worse news elsewhere for Kyiv, after Germany admitted European targets for providing ammunition would fall short.                     
                            Here are the main developments from Ukraine this week.</p>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="right">
            <div class="box">
                <div class="title">
                    <h3>Headlines</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto9.jpg" alt="foto9"></div>
                        <h3>Gaza's largest hospital is a 'death zone,' WHO says</h3>
                        <p>The Israeli military announced a brief suspension on Sunday of “military activities” in the city of Rafah, in the southern Gaza Strip, for "humanitarian purposes." 
                            The pause took place from 10 a.m. to 2 p.m. local time (3 a.m. to 7 a.m. ET) Sunday, according to an IDF spokesperson. 
                            At the southern part of Rafah city is the Rafah border crossing between Gaza and Egypt– the only crossing in and out of Gaza that is not controlled by Israel, making it the sole option for foreigners trying to leave the besieged enclave.</p>
                        
                    </div>
                
                    <div class="newsItem1"> 
                        <div class="img"><img src="indexphoto/foto10.webp" alt="foto10"></div>
                        <h3>Turmoil in UK government after key minister slams police ahead of pro-Palestinian march on Armistice Day</h3>
                        <p>The British government is braced for a tricky weekend.
                            Tricky because Rishi Sunak, a prime minister whose grip on power appears to slip at every turn, is a crisis-time leader who seemingly struggles with handling crises.                           
                            On Saturday, the UK will mark Armistice Day – the date commemorating the de-facto end of World War I. Also on Saturday, pro-Palestinian protesters will march through central London demanding a ceasefire in the Israel-Hamas conflict. The march will end outside the US embassy in south London.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

 
    
<div class="lajmi3">
    <div class="page2">
        <div class="box" >
            
           
            <div class="title">
                <h3>Latest in World</h3>
            </div>
            <div class="newsBox">

                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto46.webp" alt = "foto46" ></div>
                    <h3>A floating village is stranded on a dry lakebed as extreme drought grips the Amazon</h3>
                    <p>
                        A floating village now lies stranded on a lakebed in Brazil’s Amazon as severe drought leaves communities struggling to access food, fresh water and fuel.
                        Dramatically receding water levels in Lake Puraquequara, east of Manaus, the capital of the state of Amazonas, have left boats and floating buildings marooned in the mud.
                        It is the latest example of the devastating impacts of heat and drought on this part of Brazil – earlier this month more than a hundred river dolphins washed ashore dead as water temperatures soared – and authorities say the situation is set to get worse.

                    </p>
                    
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto47.webp" alt = "foto47" ></div>
                    <h3>Mysterious cosmic ray observed in Utah came from beyond our galaxy, scientists say</h3>
                    <p>
                        Space scientists seeking to understand the enigmatic origins of powerful cosmic rays have detected an extremely rare, ultra-high-energy particle that they believe traveled to Earth from beyond the Milky Way galaxy.
                        The energy of this subatomic particle, invisible to the naked eye, is equivalent to dropping a brick on your toe from waist height, according to the authors of new research published Thursday in the journal Science. It rivals the single most energetic cosmic ray ever observed, the “Oh-My-God” particle that was detected in 1991, the study found.
                    </p>
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto48.webp" alt = "foto48" ></div>
                    <h3>Venezuela issues arrest warrant for US-based opposition leader Juan Guaido</h3>
                    <p>
                        Venezuelan authorities on Thursday issued an arrest warrant for opposition leader and former interim president Juan Guaido, who dismissed the move as politically motivated.
                        During a press conference in the capital Caracas, Attorney General Tarek William Saab alleged that Guaido had used the state-owned oil company PDVSA’s resources to finance himself and pay his legal expenses.
                        “Juan Guaido used PDVSA resources to finance himself, pay his legal expenses, and forced PDVSA to accept his financing terms. 
                    </p>
                    
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto49.webp" alt = "foto49" ></div>
                    <h3>UN Security Council approves sending foreign forces to Haiti</h3>
                   <p>
                        The United Nations Security Council has greenlit the deployment of an armed multinational force to Haiti, as the Caribbean nation wrestles with rampant gang violence and political paralysis.
                        The decision follows repeated calls for military assistance by Haitian Prime Minister Ariel Henry. United Nations Secretary General Antonio Guterres and the United States have also strongly urged the international community to back such a mission.
                   </p>
                    
                </div>

            </div>
            
        </div>
     
    
    </div>
</div>
<div class="lajmi3">
    <div class="page3">
        <div class="box">  
            
            <div class="title">
                <h3>Latest in World</h3>
            </div>
            <div class="newsBox">

                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto50.jpg" alt = "foto50" ></div>
                    <h3>Why has Rishi Sunak brought former UK PM David Cameron back to frontline politics?</h3>
                   <p>
                         Ever since he became British prime minister a little over a year ago, Rishi Sunak has tried to bring calm to the chaotic government he inherited.
                        His predecessor Liz Truss’ economic policies had caused the pound to fall to its lowest level against the dollar in decades. Inflation was in double digits. Interest rates were rising. And his governing Conservative Party was still struggling to recover from the turmoil of Boris Johnson’s premiership before Truss – which ended in scandal, public fury and dreadful poll ratings.
                   </p>
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto39.jpg" alt = "foto39" ></div>
                    <h3>FBI warns consumers not to use public phone charging stations</h3>
                    <p>
                        The FBI is warning consumers against using public phone charging stations in order to avoid exposing their devices to malicious software.
                        Public USB stations like the kind found at malls and airports are being used by bad actors to spread malware and monitoring software, according to a tweet last week from the FBI’s Denver branch. The agency did not provide any specific examples.
                        “Carry your own charger and USB cord and use an electrical outlet instead,” the agency advised in the tweet.
                    </p>
                    
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto51.jpg" alt = "foto51" ></div>
                    <h3>Ukraine prepares for fresh Russian attacks on energy as winter nears</h3>
                    <p>
                        Oleksandr Gindyuk is determined not to be caught off guard if electricity supplies fail again this winter. When Russia pounded Ukraine’s power grid with widespread and repeated waves of airstrikes last year, causing massive rolling blackouts, his wife had just given birth to their second daughter.
                        “It was quite difficult,”  Gindyuk, who lives with his family in the suburbs of the capital, Kyiv, told CNN. “There is no life in our house if there is no electricity. Without electricity, we have no water, light or heating.”
                    </p>
                    
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto41.jpg" alt = "foto41" ></div>
                    <h3>Google to begin deleting inactive accounts this week</h3>
                    <p>
                        That Google account you haven’t checked in years might be getting wiped this week.
                        Beginning Friday, Google is moving ahead with its plan to delete accounts that have been inactive for at least two years.
                        The company announced the new policy back in May, saying it’s intended to prevent security risks: Internal findings show older accounts are more likely to rely on recycled passwords and less likely to employ up-to-date security measures like two-step-verification, making them far more vulnerable to issues like phishing, hacking and spam.
                    </p>
                    
                </div>

            </div>
            
        </div>
   </div>
</div> 
    
    <div class="main">
        <div class="left">
            <div class="box"> 
                <div class="title">
                    <h3>Latest in World</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto52.jpg" alt="foto52"></div>
                        <h3>Tensions grow in Kyiv over status of war, as Zelensky insists conflict with Russia is not at a ‘stalemate’</h3>
                        <p>
                            Apparent divisions between Ukrainian President Volodymyr Zelensky and his military command are becoming increasingly public, after a bitter back-and-forth over the state of play in the war with Russia.
                            Igor Zhovka, the deputy head of Zelensky’s office, on Saturday condemned an assessment by Ukraine’s military chief that the war with Russia is at a “stalemate,” deepening a feud in Kyiv which has heightened nerves about Western support for the conflict.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="box"> 
                <div class="title">
                    <h3>Latest in World</h3>
                </div>
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto43.jpg" alt="foto43"></div>
                        <h3>US government’s proposal to boost EV sales is challenging but not impossible</h3>
                        <p>
                            The US government is planning to change auto emissions standards in a way that means automakers would need to sell a lot more electric vehicles. By 2032, electric vehicles would need to make up about two-thirds of all the new cars sold in America.
                            Without these requirements, electric vehicles would have reached that sort of market share sometime after 2035, according to Moody’s industry analyst Matthias Heck. The goals laid out by the EPA are manageable, he said, but it won’t be easy and high levels of investment would be needed. For now, the proposal is still just that, a proposal, and could well change before before being finalized, Heck pointed out.
                        </p>
                        
                    </div>
                
            </div>
        </div>
    </div>
        


    <div class="main">
        <div class="left">
            <div class="box"> 
                <div class="title">
                    <h3>Latest in World</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto44.webp" alt="foto44"></div>
                        <h3>The Future of Text Generation: Unleashing the Power of AI</h3>
                        <p>
                            n a world where words have the power to captivate, motivate, and educate, the future of text generation is poised to revolutionize the way we communicate. As advancements in Artificial Intelligence (AI) continue to push the boundaries of what is possible, text generation stands at the forefront of this digital evolution.
                            With the potential to transform industries ranging from journalism and content creation to customer service and personal communication, AI's ability to generate human-like text holds immense promise. Prepare to be enthralled as we delve into the limitless possibilities and envision a future where AI unlocks its true potential in text generation.
                        </p>
                        
                    </div>                    
                </div>
            </div>
        </div>
        <div class = "right">
            <div class="box">
                <div class="title">
                    <h3>Latest in World</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto53.webp" alt="foto53"></div>
                        <h3>Russia launches deadly missile strike on civilian ship at Ukrainian Black Sea port, Kyiv says</h3>
                       <p>
                            A Russian missile struck a cargo ship as it docked in the Ukrainian Black Sea port of Odesa, killing the pilot and injuring four others, Ukrainian officials said.
                            Ukraine’s southern military command said a Russian tactical aircraft in the Black Sea launched an anti-radar missile at the ship on Wednesday afternoon.
                            “The rocket hit the superstructure of a civilian vessel under the flag of Liberia, at the moment of its entry into the port,” Operational Command South said in a statement on Telegram.
                       </p>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="section">
                <h2>Categories</h2>
                <div class="kategorite">
                    <p>Business</p>
                    <p>Technology</p>
                    <p>Sports</p>
                    <p>World</p>
                    <p>Health</p>
                </div>
            </div>
    
            <div class="section">
                <h2>Contact Us</h2>
                <div class="contact-info">
                <p>Phone:
                    <span>+383 123-456-789</span><br>
                    <span>+383 123-456-789</span></p><hr>
                    <p>Email:
                    <span>lindgeci@gmail.com</span><br>
                    <span>alketarama@gmail.com</span></p><hr>
                    <p>Address: <span>Prishtine, Kosove</span></p>
                </div>
                <textarea id="commentInput" name="comment" placeholder="Write your comment..."></textarea>
            </div>
    
            <div class="section1">
                <h2>Follow Us</h2>
                <div class="icon">
                    <a href="https://twitter.com/?lang=en"><img src="indexphoto/twitter-icon.png" alt="Twitter"></a>
                    <a href="https://www.instagram.com/"><img src="indexphoto/instagram-icon.png" alt="Instagram"></a>
                    <a href="https://www.facebook.com/login/"><img src="indexphoto/facebook-icon.png" alt="Facebook"></a>
                </div>
            </div>
    
            <div class="section">
                <h2>Subscribe to Our News</h2>
                <div class="email">
                    <input type="email" id="emailInput" placeholder="Enter Your Email Here">
                    <button onclick="checkEmail()">Subscribe</button>
                </div>
            </div>
        </div>
    
        <div class="copyrights">
            <p>&copy; 2023 𝔗𝔥𝔢 𝔑𝔢𝔴 𝔜𝔬𝔯𝔨 𝔗𝔦𝔪𝔢𝔰</p>
        </div>
    </footer>
          
        
        
        <script>


            function checkEmail() {


                let domain = document.getElementById("emailInput").value.split('@')[1];
        
                if (domain !== "@gmail.com") {
                    alert("Please use the correct email domain!");
                } else {
                    alert("You have successfully subscribed!");
                }
            }


            function checkSearch() {

                if(document.getElementById("pc").value===''){
                    alert("Please put something on the search bar!");
                }

                
            }
            



        </script>
</body>
</html>
