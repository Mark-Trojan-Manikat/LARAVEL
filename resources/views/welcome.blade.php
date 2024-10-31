<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="profile">
            <div class="profile_container">
                <div class="profile_profileImg">
                    <img src="Mark Trojan Photo Resume.png" alt="Mark Trojan T. Manikat">
                </div>
                <div>
                    <h1 class="profile_name">
                        {{$data['name']}}
                        <span class="profile_name_firstName">Mark Trojan T.</span>
                        <span class="profile_name_lastName">Manikat</span>
                    </h1>
                    <p class="profile_title">4th Year College Student</p>
                    <p class="description profile_description">
                        I am Mark Trojan T. Manikat, 21 years old, currently studying Bachelor of Science in Information Technology (BSIT) at Baliwag Polytechnic College.
                        I am also a project manager and an IT practitioner, leading innovative projects in online monitoring systems.
                    </p>
                    {{$data['objective']}}
                </div>
            </div>
        </div>
        <div class="group-1">
            <div class="skills">
                <h3 class="title">Expertise</h3>
                <ul class="skills_list description">
                    <li>Figma</li>
                    <li>Canva</li>
                    <li>CapCut</li>
                    <li>HTML & CSS</li>
                    <li>Microsoft Office (Word, Excel, Powerpoint)</li>
                </ul>
            </div>
            <div class="comp">
                <h3 class="title">Comptencies</h3>
                <div class="comp_item">
                    <h4 class="comp_name">Leadership and team management</h4>
                    <p class="description">I'm skilled at leading and managing teams, motivating others, and keeping projects on track while fostering a positive, productive environment.</p>
                </div>
                <div class="comp_item">
                    <h4 class="comp_name">Problem-solving and critical thinking</h4>
                    <p class="description"> I'm skilled at analyzing problems and finding smart, practical solutions quickly. </p>
                </div>
            </div>

            <div class="edu">
                <h3 class="title">Education</h3>
                <div class="edu_item">
                    <p class="item_preTitle">2009-2015</p>
                    <h4 class="item_title">Elementary</h4>
                    <p class="item_subtitle">
                        Guiguinto Elementary School
                    </p>
                </div>
                <div class="edu_item">
                    <p class="item_preTitle">2015-2021</p>
                    <h4 class="item_title">Junior Highschool & Senior Highschool</h4>
                    <p class="item_subtitle">
                        Guiguinto National Vocational Highschool
                    </p>
                </div>
                <div class="edu_item">
                    <p class="item_preTitle">2021-2025</p>
                    <h4 class="item_title">College</h4>
                    <p class="item_subtitle">
                        Baliwag Polytechnic College
                    </p>
                </div>
            </div>

            <div class="certification">
                <h3 class="title">certification</h3>
                <div class="certification_item">
                    <p class="item_preTitle">2015</p>
                    <h4 class="item_title">Guintong Pandayan Summer Workshop</h4>
                    <p class="description">
                        I successfully completed the Arts and Crafts Certification at Guintong Pandayan's Summer Workshop in 2015. This experience allowed me to develop hands-on skills in
                        traditional and modern craft-making, boosting my creativity and artistic abilities.
                    </p>
                </div>
            </div>
        </div>
        <div class="group-2">
            <div class="exp">
                <h3 class="title">Experience</h3>
                <div class="exp_item">
                    <p class="item_preTitle">2022 - present</p>
                    <h4 class="item_title">IT support specialist</h4>
                    <p class="item_subtitle">Part-timer</p>
                    <p class=" description">
                        Since 2022, I've worked as a part-time IT Support Specialist, mainly handling software installations like Microsoft Office. This role has sharpened my technical
                        skills and given me the satisfaction of helping users get set up and running smoothly. It's been a rewarding experience in my IT journey.
                    </p>
                </div>
                <div class="exp_item">
                    <p class="item_preTitle">2023 - present</p>
                    <h4 class="item_title">Digital Marketing</h4>
                    <p class="item_subtitle">Freelancer</p>
                    <p class="description">
                        Since 2023, I've been a freelance digital marketer, specializing in creating digital products like monthly and yearly planners, financial planners, and children's books.
                        This experience has enabled me to help clients grow their online businesses by providing engaging and practical digital content.
                    </p>
                </div>
            </div>
            <div class="awards">
                <h3 class="title">Awards</h3>
                <div class="awards_item">
                    <p class="item_preTitle">2015</p>
                    <h4 class="item_title">Guintong Pandayan Summer Workshop</h4>
                    <p class=" description">
                        In 2015, I participated in the Guintong Pandayan Summer Workshop, where my team and I won 2nd place in the arts and crafts category.
                        It was an exciting experience to showcase our creativity and teamwork, and receiving the award was a proud moment for all of us.
                    </p>
                </div>
                <div class="awards_item">
                    <p class="item_preTitle">2017</p>
                    <h4 class="item_title">Guiguinto National Vocational Highschool Youth Day</h4>
                    <p class="description">
                        In 2017, my team and I won the championship in mural painting during Youth Day at Guiguinto National Vocational High School.
                        It was a proud moment for us, as we showcased our creativity and teamwork through art.
                    </p>
                </div>
            </div>

            <div class="interest">
                <h3 class="title">Interest</h3>
                <div class="interest_items">
                    <div class="interest_item">
                        <i data-feather="music"></i>
                        <span>Music</span>
                    </div>
                    <div class="interest_item">
                        <i data-feather="book"></i>
                        <span>Books</span>
                    </div>
                    <div class="interest_item">
                        <i data-feather="map"></i>
                        <span>Travel</span>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="group-3">
            <div class="contact">
                <h3 class="title">Contact</h3>
                <div class="contact_info">
                    <p class="description">
                        Tabang, Plaridel, Bulacan
                    </p>
                    {{$data['address']}}
                    <p class="description">
                        +639109244832
                    </p>
                    {{$data['contact']}}
                    <p class="description">
                        marktrojanmanikat@gmail.com
                    </p>
                    {{$data['email']}}
                </div>
            </div>
            <div class="social">
                <h3 class="title">Socials</h3>
                <div class="social_items">
                    <a href="https://github.com/Mark-Trojan-Manikat" target="_blank" class="social_item">
                        <i data-feather="github"></i>
                        <span>/Mark-Trojan-Manikat</span>
                    </a>
                    <a href="https://www.facebook.com/marktrojan.manikat/" target="_blank" class="social_item">
                        <i data-feather="facebook"></i>
                        <span>/marktrojan manikat</span>
                    </a>
                    <a href="https://www.instagram.com/eros_trjn/" target="_blank" class="social_item">
                        <i data-feather="instagram"></i>
                        <span>/eros_trjn</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        feather.replace()
    </script>
</body>

</html>