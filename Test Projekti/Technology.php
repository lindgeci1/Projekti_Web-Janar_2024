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
                    <div class="img"><img src="indexphoto/foto5.webp" alt="foto4"></div>
                    <h3>Major advertisers flee X, deepening crisis at Elon Musk’s social media site</h3>
                    <p>
                        A torrent of prominent brands halted their advertising on X on Friday, dealing a massive reputational blow to Elon Musk’s social media company after his public embrace this week of an antisemitic conspiracy theory favored by White supremacists.
                        The high-profile advertiser revolt includes some of the world’s largest media companies, such as Disney, Paramount, NBCUniversal, Comcast, Lionsgate and Warner Bros. 
                    </p>
                    </div>

                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto13.webp" alt = "foto33" ></div>
                        <h3>Welsh technology to join search for life on Mars</h3>
                        <p>
                            A scientific instrument built in Wales will lead the search for life on Mars at the end of this decade. Enfys, meaning "rainbow" in Welsh, is an infrared spectrometer and will be assembled at Aberystwyth University.
                            It will be fitted to the European Space Agency's Rosalind Franklin rover, which launches to the Red Planet in 2028.
                            Enfys will work alongside the robot's other camera systems to identify the most promising rocks to drill and test for evidence of ancient biology.
                        </p>
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
                        <div class="img"><img src="indexphoto/foto14.avif" alt="foto12"></div>
                        <h3>Nissan will invest $1.4 billion to make EV versions of its best-selling cars at its UK factory</h3>
                        <p>
                            Nissan will invest $1.4 billion to update its factory in northeast England to make electric versions of its two best-selling cars, a boost for the British government as it tries to revive the country's ailing economy.
                            The Japanese automaker manufactures the gasoline or gas-hybrid Qashqai and smaller Juke crossover vehicles at the factory in Sunderland, which employs 6,000 workers.
                        </p>
                        
                    </div>
                
                    <div class="newsItem1"> 
                        <div class="img"><img src="indexphoto/foto15.avif" alt="foto11"></div>
                        <h3>One of world's largest icebergs drifting beyond Antarctic waters</h3>
                        <p>
                            One of the world’s largest icebergs is drifting beyond Antarctic waters, after being grounded for more than three decades, according to the British Antarctic Survey.
                            The iceberg, known as A23a, split from the Antarctic's Filchner Ice Shelf in 1986. But it became stuck to the ocean floor and had remained for many years in the Weddell Sea.
                            The iceberg is about three times the size of New York City and more than twice the size of Greater London.
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
                <h3>Latest in Tech</h3>
            </div>
            <div class="newsBox">

                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto34.webp" alt = "foto34" ></div>
                    <h3>No, You Don’t Need to Turn Off Apple’s NameDrop Feature in iOS 17</h3>
                    <p>
                        Apple’s NameDrop feature in iOS 17 is having a bit of a viral moment. Across the United States, police departments are warning adults to turn off the contact-sharing feature on their iPhones and their children’s devices. In addition, a widely shared TikTok video, with over 2 million views, describes how the feature lets strangers at the gym or on the bus steal all your information. The catch? It’s not true. You shouldn’t worry about NameDrop being some huge security risk.
                    </p>
                    
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto35.jpg" alt = "foto35" ></div>
                    <h3>Indonesia implements new policy requiring digital ID for citizens</h3>
                    <p>
                        The Ministry of Communication and Information in Indonesia has implemented a new policy that requires all citizens to have a digital ID. This policy aims to enhance public data security in the digital space.
                        Director General of Informatics Applications, explained that program will be developed in accordance with the Personal Data Protection Law. Its purpose is to validate the data owner and prevent the misuse of personal identities. Implementation of the policy is expected to improve public data security and reduce the risk of unauthorized access to sensitive information.
                    </p>
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto36.png" alt = "foto36" ></div>
                    <h3>India grants first satellite broadband license to Eutelsat OneWeb, bridging digital divide</h3>
                    <p>
                        The Indian space regulator, IN-SPACe, has granted its first satellite broadband license to Eutelsat OneWeb India. The company is now authorised to launch the first commercial satellite broadband service in India. This approval opens the door for OneWeb to deliver high-speed, low-latency internet connectivity to customers across India once spectrum allocation is granted by the government.
                    </p>
                    
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto37.avif" alt = "foto37" ></div>
                    <h3>In spot bitcoin ETF race, some pioneers stick to the sidelines</h3>
                    <p>
                        Despite growing excitement that spot bitcoin exchange-traded funds (ETFs) will soon win regulatory approval, some cryptocurrency ETF pioneers plan to sit out what is expected to be a fierce industry battle for market share.
                        Demand for a bitcoin ETF, which would allow retail and institutional investors to easily bet on the price of the world's biggest cryptocurrency, is expected to draw in as much as $3 billion from investors in the first few days of trading and pull in billions more thereafter.
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
                <h3>Latest in Tech</h3>
            </div>
            <div class="newsBox">

                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto38.webp" alt = "foto38" ></div>
                    <h3>OpenAI’s turmoil is about more than Sam Altman</h3>
                    <p>
                        The battle over the most consequential technology in decades is getting ugly, fast. OpenAI’s incredible upheaval — with former CEO Sam Altman caught in the middle — could have broad implications for who gets to control the future of artificial intelligence.
                        A year ago, OpenAI was an obscure startup that unleashed a technology so powerful, it almost immediately invited comparisons to Prometheus bringing fire down from the realm of the gods. ChatGPT — the impressively human-sounding artificial intelligence tool — and the scrappy nonprofit that built it, quickly became synonymous with the emerging field of generative artificial intelligence.
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
                    <div class="img"><img src="indexphoto/foto40.jpg" alt = "foto40" ></div>
                    <h3>How to protect yourself from iPhone thieves locking you out of your own device</h3>
                    <p>
                        A complex but concerning method of gaining control over a user’s iPhone and permanently locking them out the device appears to be on the rise.
                        Some iPhone thieves are exploiting a security setting, called the recovery key, that makes it nearly impossible for owners to access their photos, messages, data and more, according to a recent Wall Street Journal report. Some victims also told the publication their bank accounts were drained after the thieves gained access to their financial apps.
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
                    <h3>Latest in Tech</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto42.jpg" alt="foto42"></div>
                        <h3>Jack Ma backs off on plans to sell Alibaba shares after stock plunge</h3>
                        <p>
                            Jack Ma has put off plans to sell hundreds of millions of dollars worth of Alibaba shares after the Chinese tech giant’s stock plummeted last week.
                            Two regulatory filings from last Thursday revealed that Ma had been looking to offload 10 million shares, worth nearly $871 million.
                            But because the company’s stock price has fallen below the billionaire’s expectations, he has not sold “a single share,” according to a Wednesday post from Alibaba (BABA) Chief People Officer Jane Jiang Fang on the company’s internal forum seen by CNN.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="box"> 
                <div class="title">
                    <h3>Latest in Tech</h3>
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
                    <h3>Latest in Tech</h3>
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
                    <h3>Latest in Tech</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto45.jpg" alt="foto45"></div>
                        <h3>Microsoft recruits former OpenAI CEO Sam Altman and Co-Founder Greg Brockman</h3>
                       <p>
                            AI experts don’t stay jobless for long, as evidenced by Microsoft’s quick recruitment of former OpenAI CEO Sam Altman and Co-Founder Greg Brockman.
                            Altman, who was recently ousted by OpenAI’s board for reasons that have had no shortage of speculation, has found a new home at Microsoft. The announcement came after unsuccessful negotiations with OpenAI’s board to reinstate Altman.
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
