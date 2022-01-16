<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/c054b78f84.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.1.1/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Thomas Aubert Portfolio</title>
</head>



<body>
    <main class="container">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

        <header>
            <nav>
                <div>
                    <a href="https://github.com/N0rooo" target="blank">
                        <i class="fab fa-github-square fa-2x"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/thomas-aubert-0718ba207/" target="blank">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                </div>
                <ul id="menu_btn">
                    <a id="home_btn" class="btn_hd btn_select">
                        <li>Home</li>
                    </a>
                    <a id="about_btn" class="btn_hd">
                        <li>About</li>
                    </a>
                    <a id="projects_btn" class="btn_hd">
                        <li>Projects</li>
                    </a>
                    <a id="contact_btn" class="btn_hd">
                        <li>Contact</li>
                    </a>
                </ul>
            </nav>
        </header>
        <section data-0="transform:translate(0%);" data-1000="transform:translate(-300%);">
            <section class="home">
                <div>
                    <h1>Thomas Aubert</h1>
                    <h2>Web developer at IIM</h2>
                </div>
                <article>
                    <img src="img/profile.png" alt="profile">
                    <div id="typingParent" class="typingContainer">
                        <div class="typingParent">
                            <p id="myself"></p>
                            <span id="cursor_name" class="cursor">&nbsp;</span>
                        </div>
                        <div class="typingParent">
                            <p id="myage"></p>
                            <span id="cursor_age" class="cursor age">&nbsp;</span>
                        </div>
                        <div class="typingParent">
                            <p id="myloc"></p>
                            <span id="cursor_loc" class="cursor loc">&nbsp;</span>
                        </div>
                        <div class="typingParent">
                            <p id="myschool"></p>
                            <span id="cursor_school" class="cursor school">&nbsp;</span>
                        </div>
                    </div>
                </article>
            </section>
            <section class="about">
                <div>
                    <h2>About</h2>
                </div>
                <section>
                    <div>
                        <div id="btn_all">
                            <div id="btn_frontend" class="underline">
                                <i class="fas fa-code"></i>
                                <h3>Frontend</h3>
                            </div>
                            <div id="btn_backend" class="btns_skills">
                                <i class="fas fa-code-branch"></i>
                                <h3>Backend</h3>
                            </div>
                            <div id="btn_others" class="btns_skills">
                                <i class="fas fa-laptop"></i>
                                <h3>Others</h3>
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="ab_content">
                        <div id="skills">
                            <article id="frontend" class="visible_sk">
                                <div>
                                    <!-- 1-->
                                    <div>
                                        <label for="html">Html/Css</label>
                                        <span>90%</span>
                                    </div>
                                    <progress name="html" max="100" value="95"></progress>
                                </div>
                                <div>
                                    <!-- 2-->
                                    <div>
                                        <label for="sass">Sass/Scss</label>
                                        <span>90%</span>
                                    </div>
                                    <progress name="sass" max="100" value="95"></progress>
                                </div>
                                <div>
                                    <div>
                                        <label for="js">JavaScript</label>
                                        <span>70%</span>
                                    </div>
                                    <progress name="js" max="100" value="70"></progress>
                                </div>
                                <div>
                                    <div>
                                        <label for="tlwnd">Tailwind Css</label>
                                        <span>85%</span>
                                    </div>
                                    <progress name="tlwnd" max="100" value="85"></progress>
                                </div>
                            </article>
                            <article id="backend" class="visible_sk hidden_sk">
                                <div>
                                    <div>
                                        <label for="php">Php</label>
                                        <span>50%</span>
                                    </div>
                                    <progress name="php" max="100" value="65"></progress>
                                </div>
                                <div>
                                    <div>
                                        <label for="symfony">Symfony</label>
                                        <span>50%</span>
                                    </div>
                                    <progress name="symfony" max="100" value="50"></progress>
                                </div>
                                <div>
                                    <div>
                                        <label for="laravel">Laravel</label>
                                        <span>55%</span>
                                    </div>
                                    <progress name="laravel" max="100" value="55"></progress>
                                </div>
                                <div>
                                    <div>
                                        <label for="sql">SQL modeling</label>
                                        <span>90%</span>
                                    </div>
                                    <progress name="sql" max="100" value="90"></progress>
                                </div>
                                <div>
                                    <div>
                                        <label for="python">Python</label>
                                        <span>75%</span>
                                    </div>
                                    <progress name="python" max="100" value="75"></progress>
                                </div>
                            </article>
                            <article id="others" class="visible_sk hidden_sk">
                                <div>
                                    <div>
                                        <label for="git">Git / Github</label>
                                        <span>90%</span>
                                    </div>
                                    <progress name="git" max="100" value="90"></progress>
                                </div>
                                <div>
                                    <div>
                                        <label for="wordpress">Wordpress.org</label>
                                        <span>80%</span>
                                    </div>
                                    <progress name="wordpress" max="100" value="80"></progress>
                                </div>
                                <div>
                                    <div>
                                        <label for="wordpress">Adobe suite</label>
                                        <span>85%</span>
                                    </div>
                                    <progress name="wordpress" max="100" value="85"></progress>
                                </div>
                                <div>
                                    <div>
                                        <label for="wordpress">Figma</label>
                                        <span>85%</span>
                                    </div>
                                    <progress name="wordpress" max="100" value="85"></progress>
                                </div>

                            </article>
                        </div>
                        <div id="description">
                            <div>
                                <h3>Description</h3>
                                <article id="txt_front" class="visible_txt">
                                    <p>I really enjoy spending my time doing frontend. I always do my best until I'm really proud of my work. I worked in classic css, learning to use flexboxes, grids, keyframe animations etc. I generally prefer to use Scss but I also know how to use Sass and tailwind css. Designing with tailwind was quite difficult at first but I got better and find this framework really practical.</p>
                                    <div>

                                    </div>
                                </article>
                                <article id="txt_back" class="visible_txt hidden_txt">
                                    <p>I have always liked logical, mathematical and particularly algorithmic exercises. That's why I'm a big fan of the backend. Even if it's not always easy to understand at first, I really like learning about the different frameworks. I had to work with laravel recently and i had to be patient but at end this is so better than native php.
                                        I really like this..</p>
                                    <div>

                                    </div>
                                </article>
                                <article id="txt_others" class="visible_txt hidden_txt">
                                    <p>Of course, I use git every time with my team and sometimes for my personal projects. I invite you to visit my github, there is a link in the left corner of the screen.
                                        I can work with wordpress without any issues. There is a majority of the websites whoses are mades wth wordpress, this is really important to be comfortable with this style of developpement.
                                        I also know how to use Figma and the Adobe suite globally , especially photoshop, premiere pro and adobe XD.
                                    </p>
                                    <div>

                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section class="projects">
                <div>
                    <h2>Projects</h2>
                </div>
                <div>
                    <article>
                        <div class="scrollbar" id="proj_btns">
                            <div id="ea_btn" class="btn_hd btn_select">
                                <h4>Easy Apply</h4>
                                <img src="" alt="">
                            </div>
                            <!-- <div id="kk_btn" class="btn_hd">
                                <h4>Ken kaneki</h4>
                                <img src="" alt="">
                            </div> -->
                            <div id="pulv_btn" class="btn_hd">
                                <h4>Teachers PULV app</h4>
                                <img src="" alt="">
                            </div>
                            <div id="pp_btn" class="btn_hd">
                                <h4>Pokedex Pokemon</h4>
                                <img src="" alt="">
                            </div>
                            <div id="mop_btn" class="btn_hd">
                                <h4>My old portfolio</h4>
                                <img src="" alt="">
                            </div>
                        </div>
                    </article>
                    <article id="proj_all">
                        <article id="ea" class="p_visible">
                            <div>
                                <h3>Easy Apply</h3>
                                <p>"Easy Apply" is a group website project. The objective is to help the candidate find a suitable job more easily and to help the employer to find an employee corresponding to the job. The project was initiated for the BAP (Bourse aux Projets) with my school. We responded to a real request from a client. We chose to use framworks like Laravel and TailwindCss to make this project. Here is a short demo to show you the result.</p>
                                <div class="img_ea">
                                    <img src="img/projects/ea/ea_logo.png" alt="ea_logo">
                                    <iframe src="https://www.youtube.com/embed/ADwOWsWhVJg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <p>Click on the video to show the result.</p>
                            </div>
                            <div>
                                <a href="https://www.w3.org/Style/CSS/Overview.en.html" target="blank">
                                    <i class="fab fa-css3-alt fa-lg"></i>
                                    <p>Css</p>
                                </a>
                                <a href="https://www.javascript.com/" target="blank">
                                    <i class="fab fa-js fa-lg"></i>
                                    <p>JavaScript</p>
                                </a>
                                <a href="https://laravel.com/" target="blank">
                                    <i class="fab fa-laravel fa-lg"></i>
                                    <p>Laravel</p>
                                </a>
                                <a href="https://tailwindcss.com/" target="blank" style="color:white;" onmouseover="this.style.color='#7b4ddd';" onmouseout="this.style.color='white';">
                                    <span class="iconify" data-icon="simple-icons:tailwindcss" data-width="1.33em"></span>
                                    <p>Tailwind Css</p>
                                </a>
                            </div>
                        </article>
                        <!-- <article id="kk" class="p_visible p_hidden">
                            <div>
                                <h3>Ken Kaneki</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas molestias soluta nihil delectus quia vitae libero optio repellat doloremque odio atque dicta excepturi dolor facere, natus unde eaque maiores reiciendis!
                                    Quae officia voluptates eum excepturi, maxime sunt? Laudantium quis consectetur veritatis adipisci asperiores odit ipsum iure quidem commodi quibusdam, nam repellendus laborum obcaecati amet neque, eius ratione ut sint quae.</p>
                                <div class="img_kk">
                                    <iframe src="https://www.youtube.com/embed/L2W_Jon-bmQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <p>Click on the video to show the result.</p>
                            </div>
                            <div>
                                <a href="https://www.w3.org/Style/CSS/Overview.en.html" target="blank">
                                    <i class="fab fa-css3-alt fa-lg"></i>
                                    <p>Css</p>
                                </a>
                                <a href="https://www.javascript.com/" target="blank">
                                    <i class="fab fa-js fa-lg"></i>
                                    <p>JavaScript</p>
                                </a>
                                <a href="https://www.php.net/" target="blank">
                                    <i class="fab fa-php fa-lg"></i>
                                    <p>Php</p>
                                </a>

                            </div>
                        </article> -->
                        <article id="pulv" class="p_visible p_hidden">
                            <div>
                                <h3>Teachers PULV app</h3>
                                <p>The Teachers PULV application is an IOS application model made on figma. The goal was to learn the figma with the creation of an application for the professors of the PULV (Pôle Universitaire Léonard de Vinci). There is a home page with general information and a timetable page with the different timetables, class numbers and subjects. There is also a specific page that gathers the teacher's student information as well as a page with the different notes that the teacher has filled in or not.</p>
                                <div class="img_pulv" id="img_pulv">
                                    <img src="img/projects/pulv/1.png" alt="pulv_img" id="1">
                                    <img src="img/projects/pulv/2.png" alt="pulv_img" id="2">
                                    <img src="img/projects/pulv/3.png" alt="pulv_img" id="3">
                                    <img src="img/projects/pulv/4.png" alt="pulv_img" id="4">
                                    <img src="img/projects/pulv/5.png" alt="pulv_img" id="5">
                                    <img src="img/projects/pulv/6.png" alt="pulv_img" id="6">
                                    <img src="img/projects/pulv/7.png" alt="pulv_img" id="7">
                                    <img src="img/projects/pulv/8.png" alt="pulv_img" id="8>
                                    <img src=" img/projects/pulv/9.png" alt="pulv_img" id="9">

                                </div>
                                <p>Click on the images for a large view.</p>
                            </div>
                            <div>
                                <a href="https://www.figma.com/" target="blank">
                                    <i class="fab fa-figma fa-lg"></i>
                                    <p>Figma</p>
                                </a>


                            </div>

                        </article>
                        <article id="pp" class="p_visible p_hidden">
                            <div>
                                <h3>Pokedex Pokémon</h3>
                                <p>Here is a pokdex made in Javascript using PokéAPI. All Pokemon are listed. It is possible to sort them by size, weight, type, name or id. A search bar is also available.</p>
                                <div class="img_pp">
                                    <a href="https://www.pokedex.gq/" target="blank">
                                        <img src="img/projects/pp/pokedex.png" alt="pokedex">
                                    </a>
                                </div>
                                <p>Click on the image to go to the website.</p>
                            </div>
                            <div>
                                <a href="https://www.w3.org/Style/CSS/Overview.en.html" target="blank">
                                    <i class="fab fa-css3-alt fa-lg"></i>
                                    <p>Css</p>
                                </a>
                                <a href="https://www.javascript.com/" target="blank">
                                    <i class="fab fa-js fa-lg"></i>
                                    <p>JavaScript</p>
                                </a>
                                <a href="https://pokeapi.co/" target="blank" style="color:white;" onmouseover="this.style.color='#7b4ddd';" onmouseout="this.style.color='white';">
                                    <span class="iconify" data-icon="ic:twotone-catching-pokemon"></span>
                                    <p>PokéAPI</p>
                                </a>
                            </div>

                        </article>
                        <article id="mop" class="p_visible p_hidden">
                            <div>
                                <h3>My old portfolio</h3>
                                <p>I decided to share my old portfolio with you. It was my first real portfolio. I find it less complete and I hope you will prefer this one. I mainly used SASS to make the different pages of the project. It taught me how interesting and practical SASS and Scss were (I actually use Scss to do this portfolio) and how to use the "display:grid".</p>
                                <div class="img_mop">
                                    <a href="https://portfolio.thomas-aubert.tk/" target="blank">
                                        <img src="img/projects/mop/home.png" alt="pokedex">
                                    </a>
                                </div>
                                <p>Click on the image to visit my old portfolio.</p>

                            </div>
                            <div>
                                <a href="https://www.w3.org/Style/CSS/Overview.en.html" target="blank">
                                    <i class="fab fa-css3-alt fa-lg"></i>
                                    <p>Css</p>
                                </a>
                                <a href="https://www.javascript.com/" target="blank">
                                    <i class="fab fa-js fa-lg"></i>
                                    <p>JavaScript</p>
                                </a>
                                <a href="https://sass-lang.com/" target="blank">
                                    <i class="fab fa-sass fa-lg"></i>
                                    <p>Sass</p>
                                </a>
                            </div>
                        </article>
                    </article>
                </div>
            </section>
            <section class="contact">
                <div>
                    <h2>Contact</h2>
                    <article>
                        <div>
                            <div>
                                <p>For any website, design or other request, you can contact me using the form opposite, or directly by email at the address below.</p>
                                <p>You can also download my CV by clicking on the icone.</p>
                                <p> Thank you very much for your visit. Hoping to meet you soon ! </p>
                            </div>
                            <div>
                                <a href="mailto:Thomas2002@outlook.fr">

                                    <i class="fas fa-envelope fa-lg"></i></i>
                                    <p>Thomas2002@outlook.fr</p>
                                </a>
                                <a href="img/Thomas_Aubert_CV.pdf" download="Thomas_Aubert_CV">
                                    <i class="fab fa-black-tie fa-lg"></i>
                                    <p>Download my CV</p>
                                </a>
                            </div>

                        </div>

                        <form method="POST" action="form_contact.php">
                            <h3>Send me your message here </h3>
                            <div>
                                <div>
                                    <input type="text" placeholder="Firstname" name="firstname" required>
                                    <input type="text" placeholder="Lastname" name="lastname" required>
                                </div>
                                <input type="email" placeholder="Email" name="email" required>
                            </div>
                            <textarea id="" cols="30" rows="8" name="message" placeholder="Write your message..." required></textarea>
                            <input type="submit" name="submit" value="Send">
                        </form>

                    </article>
                </div>
            </section>
        </section>
        <div id="go_top" class="go_top">
            <i class="fas fa-arrow-up fa-lg"></i>
            <p>Go top</p>
        </div>
        <div class="mobile_back"></div>
        <footer>
            <p>Copyright © 2022 Thomas Aubert. All Rights Reserved</p>
        </footer>


        </div>
    </main>

    <script type="text/javascript" src="js/skrollr.js"></script>
    <script type="text/javascript">
        var s = skrollr.init();
    </script>

    <script src="js/script.js"></script>
</body>

</html>