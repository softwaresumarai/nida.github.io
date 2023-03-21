<?php

include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ideas development league</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<style>
#idl {
    color: #94c045;

}

#subreg {
    float: right;
}



.card-from {
    /* background: url(assets/img/form/work-process-2.png); */
    opacity: 0.8;
    background-attachment: no-repeat;
    ;
}
</style>

<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <!-- <h1 class="text-light"><a href="index.php">NIDA</a></h1> -->
                <a href="index.php"><img src="assets/img/INVENTION ACADEMY LOGO edited.jpg" alt="" class="img-fluid"
                        style="border-radius:50px;"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active" href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="about.php">About NIDA</a></li>
                            <li><a href="board-of-direct.php">Board Of Directors</a></li>
                            <li><a href="mentors.php">Mentors</a></li>
                            <li><a href="team.php">Team NIDA</a></li>
                            <li><a href="portfolio.php">NIDA Portfolio</a></li>
                            <!-- <li class="dropdown">
                  <a href="#"
                    ><span>Publications</span>
                    <i class="bi bi-chevron-right"></i
                  ></a>
                  <ul>
                    <li><a href="#">Magazines/Blog</a></li>
                  </ul>
                </li> -->
                        </ul>
                    </li>
                    <li><a href="services.php">Services</a></li>

                    <li class="dropdown">
                        <a href="#"><span>Programs</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="ideasdl.php">Ideas development league </a></li>
                            <li>
                                <a href="inventorsdlc.php">Inventors’ Development Clubs </a>
                            </li>
                            <li>
                                <a href="bootcamp.php">Holiday Bootcamp/Ideas Project Development Camp
                                </a>
                            </li>
                            <li>
                                <a href="IP.php">IP Referral
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
              <a href="#">
                <span>Publications</span>
                <i class="bi bi-chevron-right"></i>
                <ul>
                  </ul>
                </ul>
              </a>
            </li> -->
                    <li class="dropdown">
                        <a href="#"><span>Publications</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Magazine/Blog</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>Membership</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown">
                                <a href="#"><span>Membership Institutions</span><i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li>
                                        <a href="#">Application for Institutional Membership</a>
                                    </li>
                                    <li>
                                        <a href="#">Benefits for Becoming a Member of Institution</a>
                                    </li>
                                    <li><a href="#">Sustaining Member Institutions</a></li>
                                    <li><a href="#">NIDA Member Institutions Directory</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#"><span>Fellows </span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li>
                                        <a href="aboutFP.php">About the NIDA Fellows Program</a>
                                    </li>
                                    <li>
                                        <a href="#">Current Fellow Resources</a>
                                    </li>
                                    <li><a href="#">Normination Process</a></li>
                                    <li><a href="#">Norminate a Fellows</a></li>
                                    <li><a href="#">Search Fellows</a></li>
                                    <li><a href="#">Normination Commitee</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#"><span>Senior Members</span>
                                    <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li>
                                        <a href="#">About the Senior Members Program</a>
                                    </li>
                                    <li><a href="#">Normination Process</a></li>
                                    <li><a href="#">Norminate a Senior Member</a></li>
                                    <li><a href="#">Search for Senior Members</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <!-- <h2 style="font-family:fantasy;">Ideas Development League</h2> -->
                        <img src="assets/img/IDLC LOGO 2-1.png" class="img-fluid" alt="ial" height="50px" width="400px">
                        <p>

                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Ideas Development League</li>
                </ol>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        </div>
        </header>
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12 card shadow p-4 " id="card">
                    <div class="" data-aos="fade-up">
                        <h4 class="title"><a href="">About Ideas Development League</a></h4>
                        <p class="description">
                            The IDEAS Development league is positioned to be a strategic
                            alliance between universities of science and technology,
                            polytechnics, science and technical secondary schools in which
                            we believe have the power to shape the future of Nigeria. By
                            joining forces together, IDL will create valuable
                            partnerships, connection and sponsorship that will inspire
                            inventiveness and innovativeness with research at the
                            foundation level of our youth to tertiary for the pursuit of
                            nations improved innovative index. <br />Through a
                            cross-border, bottom-up collaboration, IDL will provide a
                            competitive platform for youths, researchers, inventors,
                            innovators, artisans, fabricators, institutions, industries,
                            departments, agencies and entrepreneurs to share a collective
                            wealth of knowledge and experience to create designed products
                            for solutions and challenges for ultimate investment. <br />By
                            doing so, IDL aim to connect and inspire a new generation
                            Nigerian graduate inventors/innovators, scientist and
                            technologist who will in turn champion innovation and
                            entrepreneurship and steer Nigeria holistically towards a more
                            competitive and compassionate future.
                        </p>
                        <h4 class="title"><a href="">League Objectives</a></h4>
                        <ul>
                            <li>To provide a professional intellectual league played with ideas
                                to attract investment opportunity to enhance competitiveness among
                                universities students, entrepreneurs, MDGs and departments of various
                                levels in the promotion of creativity, invention and innovation to drive
                                nation’s economic growth.</li>
                            <li>Establishment of Inventors Development Club from primary, secondary,
                                and tertiary institutions</li>
                            <li>Facilitating an integration of academic, vocational, Technical and invention
                                education programs in schools</li>
                            <li>To establish collaborative, and partnership between educators, businesses,
                                labor and communities to inspire a generation innovative leaders </li>
                            <li>Help student to maintain high level of academic, technical and inventive
                                competences </li>
                            <li>Implementing work-based learning experiences for young people</li>
                            <li>Prepare and coordinate comprehensive communication and investment
                                plans for league participants</li>
                        </ul>
                    </div>

                    <h4 class="title">
                        <a href="">League Participants</a>
                    </h4>
                    <p class="description">
                        Each participant of IDEAS Development League (IDL) in strategic alliance must be
                        a, research-oriented institutions, Universities of Science and Technology,
                        Innovation Centers/Hubs, Polytechnics, Science and Technical Secondary
                        Schools and other Organizations providing R&D services. Meet our members
                    </p>
                    <h4 class="title">
                        <a href="">League Program</a>
                    </h4>
                    <p class="description">Initiated by the director of operation Office of the president,
                        the National Inventors Development Academy with five dedicated ANI staff members,
                        the IDL is formed to brings inventors and investors with valuable initiatives and ideas
                        together.
                        The program also intend to sign Memorandum of Understanding (MoU) to commit to a
                        cross-sector
                        research partnership with these various institution to investigate new ideas, make
                        evidence-based
                        decisions, and explore the frontier of creativity and innovation in Nigeria.
                        In its first year of collaboration and partnership, the League will host multiple events to
                        gather input from institutions, agencies and departments to collaborate more intensively
                        on objectives and needs. Nigerian brightest academics, inspired inventors and innovators,
                        engineers, designers, practitioners, artisans and entrepreneurs and community innovative
                        youths will came together to learn about technology, data, challenges and opportunities for
                        the League to explore critical areas including mobility, environment, public safety,
                        housing,
                        health,
                        and the digital divide.
                    </p>
                    <h4 class="title">
                        <a href="">League Mission</a>
                    </h4>
                    <p class="description">
                        The mission of the League is to create cross-sector, multi-disciplinary teams that utilize
                        creative thinking &
                        data to invent and innovate on new ideas, investigate and facilitate evidence-based
                        policymaking,
                        and explore the frontier of innovation for the nations improved innovative index and
                        economic
                        growth.
                    </p>
                    <h4 class="title">
                        <a href="">League Goals</a>
                    </h4>
                    <p class="description">
                    <ul>
                        <li>Facilitate inventive and innovative mindset, research and evidence-based
                            decision-making team from our institutions of learning and the private sector</li>
                        <li>Advance equitable and efficient youth’s critical thinking and solution delivery </li>
                        <li>Engage cross-sector in creating and innovating new ways </li>
                        <li>Create a culture of imagination and experimentation </li>
                    </ul>
                    </p>
                    <h4 class="title">
                        <a href="">League Tools</a>
                    </h4>
                    <ul>
                        <li>Scientific methods/innovative approach and process
                        </li>
                        <li> Invention analysis and accessing </li>
                        <li> User-centered design </li>
                        <li> Agile, iterative execution</li>
                    </ul>
                    <h4 class="title">
                        <a href="">League Priorities</a>
                    </h4>
                    <p class="description">
                    <ul>
                        <li><b>Capacity –</b> establish a core cross-sector team of 5 that can execute
                            projects of value each year to attract, secure million in grants investment to facilitate
                            League activities. </li>
                        <li><b>Process – </b>Formalize efficient, equitable, transparent processes to facilitate League
                            activities. </li>
                        <li><b>Grants – </b>Establish grant strategies that lead to a sustainable financial support
                            system for League activities</li>
                        <li><b>Prototyping – </b>Help build prototypes of innovative thinkers for pitching to potential
                            investors.</li>
                        <li><b>Patenting – </b>Help facilitate patent for potential league participants and to link them
                            to investors yearly </li>
                    </ul>
                    </p>

                </div>
            </div>
        </div>
        </div>
        </div>

        <!-- ========League Form Registration ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class=" text-center" style="color:#94c045;">
                <div class="container">
                    <div class=" ">
                        <h2 style="font-family:fantasy;">Ideas League Registration Process</h2>
                        <!-- <img src="assets/img/IDLC LOGO 2-1.png" class="img-fluid" alt="ial" height="50px" width="400px"> -->
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
        <div class="container shadow mt-5 p-4">
            <p>
                The Ideas Development League Championship is an exciting opportunity for creative minds to
                come together and showcase their innovative ideas. The competition will bring together
                individuals from diverse backgrounds, including entrepreneurs, inventors, designers, and
                developers, to compete against each other in a fast-paced and stimulating environment.
            </p>
            <p>
                Participants will have the chance to present their ideas to a panel of expert judges, who
                will assess the feasibility, scalability, and potential impact of each concept. The
                championship will be divided into several rounds, each one more challenging than the
                previous, with the best performers progressing to the next stage.
            </p>
        </div>

        <div class="container shadow mt-4 p-4">
            <h4 class="title" style="color:#94c045;">
                <a>How to register for the league competition</a>
            </h4>
            <p>
                To register for the championship, interested individuals must fill out an HTML form, which will include
                their name, contact information, and a brief overview of their idea. The form will also include
                questions about the team's experience, qualifications, and motivations. After submitting the form,
                participants will receive a confirmation email with instructions on how to proceed.
            </p>
            <p>
                The Ideas Development League Championship aims to foster innovation, creativity, and collaboration among
                participants. It will be an excellent opportunity for individuals to network, gain exposure, and receive
                feedback from industry experts. The winning team will receive a cash prize and have the chance to
                further develop their idea with the support of our partners.
            </p>
            <p>
                So, if you have an innovative idea that you believe can change the world, don't miss this opportunity to
                showcase it in front of a panel of experts. Register now for the Ideas Development League Championship
                and let your imagination soar!
            </p>

        </div>

        <div class="container mb-4  card card-from "
            style="margin-top: 6%;border-color:#94c045;font-family:Arial, Helvetica, sans-serif;">
            <div class="columns">
                <div class="column col-auto col-mx-auto p-5">
                    <div class="form-group">
                        <fieldset>
                            <h3 style="color: #94c045;">League registration form
                                <br /><small></small>
                            </h3>
                            <p style="    font-size: 18px;
                                                font-family: 'Trebuchet MS', 'Lucida Sans Unicode',
                                                'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-weight:bold;">
                                (Please complete all details)
                            </p>
                        </fieldset>
                    </div>
                    <div class="form-group p-3">
                        <form target="" action="ideasdl-process.php" id="leagueForm" method="POST">
                            <fieldset>
                                <p class=""
                                    style="font-size: 20px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;">
                                    Category of
                                    Participants</p>
                                <div class="form-group"
                                    style="font-size: 15px; font-family:Arial, Helvetica, sans-serif">
                                    <input id="" type="checkbox" name="std" value="student" /> Student<br>
                                    <input id="" type="checkbox" name="std" value="passed-out-student" />
                                    Passed-out Student working
                                    on innovative ideas/start-up(0-3 years)<br>
                                    <input id="" type="checkbox" name="std" value="Start-up registered
                                    associate of Nigeria's inventions
                                    " /> Start-up registered
                                    associate of Nigeria's inventions

                                </div>
                            </fieldset>
                            <hr>
                            </p>

                            <fieldset class="mt-4">
                                <p class=""
                                    style="font-size: 20px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;">
                                    Section A:
                                    Team Details*</p>

                                <div class="form-group">
                                    <p style="font-weight:bold;">Names of team members</p>
                                    <ol>
                                        <li> <input type="text" name="team" class="form-control mb-4" value="team one"
                                                required /></li>
                                        <li><input type="text" name="team" class="form-control mb-4" value="team two"
                                                required /></li>
                                        <li><input type="text" name="team" class="form-control mb-4" value="team three"
                                                required /></li>
                                    </ol>
                                </div>
                            </fieldset>
                            <fieldset class="mt-4">
                                <p style="font-weight:bold;">Name of Institution/University/Incubation</p>
                                <div class="form-group">

                                    <label class="mb-3">Education</label>
                                    <input id="" type="text" name="education" class="form-control mb-4" required />
                                </div>
                                <div class="form-group">
                                    <label class="mb-3">Additional achievement</label>
                                    <input id="" type="text" name="achievement" class="form-control mb-4" required />
                                </div>
                                <div class="form-group">
                                    <label class="mb-3">Past Experience(If any)</label>
                                    <input id="" type="text" name="pstexp" class="form-control mb-4" required />
                                </div>

                            </fieldset>
                            <fieldset class="mt-4">
                                <p style="font-weight:bold;">Primary Contact Details (All communications will be done to
                                    given contact details)*
                                </p>

                                <div class="form-group">
                                    <label class="mb-3">Address</label>
                                    <textarea id="" type="text" name="address" required class="form-control mb-4"
                                        placeholder="E.g #house N0 50, New GRA, Makurdi."></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="mb-3">City</label>
                                    <input id="" type="text" name="city" class="form-control mb-4" required />

                                </div>
                            </fieldset>
                            <fieldset class="mt-4">

                                <div class="form-group">
                                    <label class="mb-3">Local govenment</label>
                                    <input id="" type="text" name="lga" class="form-control mb-4" required
                                        placeholder="E.g Makurdi" />
                                </div>
                            </fieldset>
                            <fieldset class="mt-4">

                                <div class="form-group">
                                    <label class="mb-3">State</label>
                                    <input id="" type="text" name="state" class="form-control mb-4" required />
                                </div>
                            </fieldset>

                            <fieldset class="mt-4">

                                <div class="form-group">
                                    <label class="mb-3">Email</label>
                                    <input id="" type="text" name="email" class="form-control mb-4" required
                                        placeholder="someone@gmail.com" />
                                </div>
                            </fieldset>

                            <fieldset class="mt-4">
                                <div class="form-group">
                                    <label class="mb-3">Website</label>
                                    <input id="" type="text" name="website" class="form-control mb-4" required
                                        placeholder="www.website.com" />
                                </div>
                            </fieldset>

                            <fieldset class="mt-4">
                                <div class="form-group">
                                    <label class="mb-3">Mobile Number* / Landline</label>
                                    <input id="" type="number" name="number" class="form-control mb-4" required />
                                </div>
                            </fieldset>

                            <fieldset class="mt-4">
                                <div class="form-group">
                                    <label class="mb-3">Alternate Contact Number</label>
                                    <input id="" type="number" name="altnumber" class="form-control mb-4" required />
                                </div>
                            </fieldset>
                            <fieldset class="mt-4">
                                <div class="form-group">
                                    <label class="mb-3">Social Links</label>
                                    <input id="" type="text" name="social" class="form-control mb-4" required
                                        placeholder="Twiter, LinkeIn, Facebook URL" />
                                </div>
                            </fieldset>
                            <fieldset class="mt-4">
                                <p class=""
                                    style="font-size: 20px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;">
                                    Section B:
                                    Company Details*</p>


                                <p style="font-weight:bold;">This section is not mandatory for students submitting their
                                    ideas. This is to be
                                    filled by registered start-ups.</p>
                                <br>
                                <br>
                                <p style="font-weight:bold;">Information of the company</p>
                                <div class="form-group">
                                    <label class="mb-3">Company Name</label>

                                    <input type="text" name="cmp" class="form-control mb-4" placeholder="company name"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label class="mb-3">Founded in year</label>
                                    <input type="text" name="year" class="form-control mb-4" placeholder="founded year"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label class="mb-3">Website/Facebook-Twitter-Social media pages</label>
                                    <input type="text" name="media" class="form-control mb-4"
                                        placeholder="Website/Facebook-Twitter-Social media pages" required />
                                </div>
                                <p style="font-weight:bold;">
                                    <b>Note: </b>Shortlisted participants in start up category will have to submit
                                    documents
                                    partaining to founding year which will be referred by the committee before futher
                                    process. Insufficient documents will result in disqualification from competition.
                                </p>

                    </div>
                    </fieldset>
                    <fieldset class="mt-4">
                        <p class="" style="font-size: 20px;font-family:Arial, Helvetica, sans-serif;font-weight:bold">
                            Section C:
                            Ideas League Info*</p>
                        <br>
                        <p><b>Stage of start-up </b>(please tick)</p>
                        <div class="form-group">
                            <input id="" type="checkbox" name="ideasl-info" value="Idea" /> Idea<br>
                            <input id="" type="checkbox" name="ideasl-info" value="Idea with prototype" /> Idea
                            with prototype<br>
                            <input id="" type="checkbox" name="ideasl-info" value="Pilot launched" /> Pilot
                            launched<br>
                            <input id="" type="checkbox" name="ideasl-info" value="Already launched" /> Already
                            launched
                        </div>
                        <br>
                        <br>
                        <p><b>Idea belonging to sector </b>(please tick)</p>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input id="" type="checkbox" name="sectr" class="mb-3" value="Hospitality" />
                                    Hospitality<br>
                                    <input id="" type="checkbox" name="sectr" class="mb-3" value="Tech-Automation" />
                                    Tech-Automation<br>
                                    <input id="" type="checkbox" name="sectr" class="mb-3" value="Fin Tech" />
                                    Fin Tech<br>
                                    <input id="" type="checkbox" name="sectr" class="mb-3" value=" IoT" />
                                    IoT<br>
                                    <input id="" type="checkbox" name="sectr" class="mb-3" value="Health-Wellness &
                                    Pharma" /> Health-Wellness &
                                    Pharma<br>
                                    <input id="" type="checkbox" name="sectr" class="mb-3" value="Environment; Green
                                    Tech &
                                    Sustainability" /> Environment; Green
                                    Tech &
                                    Sustainability<br>
                                </div>
                                <div class="col-sm-6">
                                    <input id="" type="checkbox" name="sectr" class="mb-3" value=" Soial Development &
                                    Art /
                                    Culture" /> Soial Development &
                                    Art /
                                    Culture<br>
                                    <input id="" type="checkbox" name="sectr" class="mb-3" value=" Supply Chain &
                                    Logistics" /> Supply Chain &
                                    Logistics<br>
                                    <input id="" type="checkbox" name="sectr" class="mb-3" value="Media, Communication &
                                    Entertainment" /> Media, Communication &
                                    Entertainment<br>
                                    <input id="" type="checkbox" name="sectr" class="mb-3" value="Textile & Apparels" />
                                    Textile & Apparels<br>
                                    <input id="" type="checkbox" name="sectr" class="mb-3" value="Food & Beverage" />
                                    Food & Beverage<br>
                                    <input id="" type="checkbox" name="sectr" class="mb-3" value="Energy" />
                                    Energy
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <br>
                    <fieldset class="mt-4">

                        <div class="form-group">

                            <div class="row">
                                <div class="col-sm-6">
                                    <p><b>Business Model </b>(please tick)</p>
                                    <input id="" type="checkbox" name="bmodel" class="mb-3" value="For profit" /> For
                                    profit<br>
                                    <input id="" type="checkbox" name="bmodel" class="mb-3" value="Not-for-profit" />
                                    Not-for-profit<br>
                                    <input id="" type="checkbox" name="bmodel" class="mb-3" value="Hybrid" />
                                    Hybrid
                                </div>
                                <div class="col-sm-6">
                                    <p><b>Type of Venture</b>(please tick)</p>
                                    <input id="" type="checkbox" name="tventure" class="mb-3"
                                        value="Single Ownership" /> Single Ownership<br>
                                    <input id="" type="checkbox" name="tventure" class="mb-3" value="Partnership/LLP" />
                                    Partnership/LLP<br>
                                    <input id="" type="checkbox" name="tventure" class="mb-3" value=" Others" /> Others
                                </div>
                            </div>
                    </fieldset>

                    <fieldset class="mt-5">
                        <div class="form-group">
                            <label class="mb-3"><b>Description of idea and source of your inspiration</b></label>
                            <p>Explain your idea, from where/which events did you get the inspiration for it? (word
                                limit: 150)</p>
                            <textarea class="form-control" name="doisi"
                                placeholder="texx goes here..........."></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="mt-5">
                        <div class="form-group">
                            <label class="mb-3"><b>Idea overview</b></label>
                            <p> Explain the objective of your Idea. Also Explain its core offsprings and probable
                                outputs. (word limit:200)</p>
                            <textarea class="form-control" name="idov"
                                placeholder="texx goes here..........."></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="mt-5">
                        <div class="form-group">
                            <label class="mb-3"><b>Product Description</b></label>
                            <p> Explain what is your product (software, technology, intervention, design, research,
                                prototype etc.), its distinct features & advantages. Additionally give details or
                                product's offerings.(word limit:150)</p>
                            <textarea class="form-control" name="pdtn"
                                placeholder="texx goes here..........."></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="mt-5">
                        <div class="form-group">
                            <label class="mb-3"><b>Explain pain points your idea/product primilarly address</b></label>
                            <p> What current issues and challenges of society/sector/lifestyle your idea addresses? what
                                is your idea's approach to solve these issues?(word limit: 150)</p>
                            <textarea class="form-control" name="eppyi"
                                placeholder="texx goes here..........."></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="mt-5">
                        <div class="form-group">
                            <label class="mb-3"><b>Explain your business model. How does/will your venture make
                                    money?</b>(word limit: 200)</label>
                            <textarea class="form-control" name="eybm"
                                placeholder="texx goes here..........."></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="mt-5">
                        <div class="form-group">
                            <label class="mb-3"><b>Describe your market & consumer</b></label>
                            <p> Explain the market for your product, current pricing, category of consumer, growth
                                trends.(word limit: 100)</p>
                            <textarea class="form-control" name="dymc"
                                placeholder="texx goes here..........."></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="mt-5">
                        <div class="form-group">
                            <label class="mb-3"><b>Major Competitors & Barriers.</b></label>
                            <p> Explain your competitor products (Give specific product/company). Major barriers you
                                will face entering in market and how do you plan to overcome these barriers.(word limit:
                                150)<i class="fas fa-map-marked-alt"></i></p>
                            <textarea class="form-control" name="mcb"
                                placeholder="texx goes here..........."></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="mt-5">
                        <div class="form-group">
                            <label class="mb-3"><b>How will you scale the venture? is your product replicable? if
                                    yes,then how will you overcome that challenge?</b>(word limit: 150)</label>
                            <textarea class="form-control" name="hwysv"
                                placeholder="texx goes here..........."></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="mt-5">
                        <div class="form-group">
                            <label class="mb-3"><b>What makes your management team qualified to scale-up proposed
                                    idea?</b>(word limit: 100)</label>
                            <textarea class="form-control" name="wmymtq"
                                placeholder="texx goes here..........."></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="mt-5">
                        <div class="form-group">
                            <label class="mb-3"><b>What social/environmental co-benefits that your venture can generate,
                                    if any?</b>(word limit: 50)</label>
                            <textarea class="form-control" name="wse"
                                placeholder="texx goes here..........."></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="mt-4">
                        <p class="" style="font-size: 20px;font-family:Arial, Helvetica, sans-serif;font-weight;">
                            Section D:
                            Investment Requirement*</p>
                        <fieldset class="mt-5">
                            <div class="form-group">
                                <label class="mb-3"><b>What are you looking for?</b></label><br>
                                <input id="" type="checkbox" name="ivest" class="mb-3" value="Investment" />
                                Investment<br>
                                <input id="" type="checkbox" name="ivest" class="mb-3" value="Mentorship" />
                                Mentorship
                            </div>
                        </fieldset>
                        <hr>
                        <fieldset class="mt-5">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="mb-3"><b>Did you get any funding before?</b></label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="" type="checkbox" name="dygfb" class="mb-3" value="YES" />
                                        YES<br>
                                        <input id="" type="checkbox" name="dygfb" class="mb-3" value="NO" /> NO
                                        <p>if yes then how much funding you have received:
                                        </p>
                                        <span>&#8358;</span>
                                        <input id="" type="number" name="amt" class=" mb-3" required />
                                        <div class="row">
                                            <div class="col-sm-6"></div>
                                            <label class="mb-3"><b>Funding type</b></label>

                                        </div>
                                        <div class="col-sm-6">
                                            <input id="" type="checkbox" name="fndtyp" class="mb-3" value="Crowd
                                            funding" /> Crowd
                                            funding<br>
                                            <input id="" type="checkbox" name="fndtyp" class="mb-3" value=" Seed
                                            funding" /> Seed
                                            funding<br>

                                            <input id="" type="checkbox" name="fndtyp" class="mb-3"
                                                value="Individual" /> Individual<br>
                                        </div>

                                    </div>
                                </div>
                        </fieldset>
                        <fieldset class="mt-5">
                            <div class="form-group">
                                <label class="mb-3"><b>Use of funds.</b>(List Activities which needs funding)</label>
                                <textarea class="form-control" name="uofds"
                                    placeholder="texx goes here..........."></textarea>
                            </div>
                        </fieldset>
                        <fieldset class="mt-5">
                            <p class="" style="font-size: 20px;font-family:Arial, Helvetica, sans-serif">Other Details
                            </p>
                        </fieldset>
                        <fieldset class="">
                            <div class="form-group">
                                <label class="mb-3"><b>Additional information to disclose about your idea
                                        start-up</b></label>
                                <p> Details of product Patent, Copyright, Awards etc.(word limit: 50)</p>
                                <textarea class="form-control" name="dopp"
                                    placeholder="texx goes here..........."></textarea>
                            </div>
                        </fieldset>
                        <fieldset class="mt-5">
                            <div class="form-group">
                                <label class="mb-3"><b>From where did you here about this competition?</b></label><br>
                                <input id="" type="checkbox" name="qstn" class="mb-3" value="Competition website" />
                                Competition website<br>
                                <input id="" type="checkbox" name="qstn" class="mb-3" /> Social media
                                (Facebook,Instagram,LinkedIn)<br>
                                <input id="" type="checkbox" name="qstn" class="mb-3" value="Poster/ Flyer" />
                                Poster/ Flyer<br>
                                <input id="" type="checkbox" name="qstn" class="mb-3" value="Newspaper" />
                                Newspaper<br>
                                <input id="" type="checkbox" name="qstn" class="mb-3" value="Radio/ TV Channel" />
                                Radio/ TV Channel<br>
                                <input id="" type="checkbox" name="qstn" class="mb-3" value="Friends & Family" />
                                Friends & Family
                                <br>
                                Others
                                <input id="" type="text" name="odas" class="mb-3" required />
                            </div>
                        </fieldset>
                        <button type="submit" name="register" id="subreg" class="btn btn-lg text-light mt-4 "
                            style="background-color: #94c045; " value="Submit  registration">Submit
                            registration</button>
                        </form>
                </div>
            </div>
        </div>
        </div>


        </div>
        </div>
        </div>
        </div>
        </div>
        </div>


        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 footer-info">
                            <h3>NIDA</h3>
                            <p style="font-size: 12px;font-family:Arial, Helvetica, sans-serif">
                                The Nigerian Inventors development Academy is an non-profit organization that is
                                positioned to corporate with other Nigerian higher institutions, governmental and
                                non-profit research institutes, Hubs, individual inventor, and research fellows that
                                will span from our institutions and communities nationwide.
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Terms of service</a></li>
                                <li><a href="#">Privacy policy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4>Contact Us</h4>
                            <p>
                                #39 Anthony Enahoro <br />Street Utako,Abuja.<br />

                                <strong>Phone:</strong> +234 9159652077<br />
                                <strong>Email:</strong> nidaproject@protonmail.com<br />
                            </p>

                            <div class="social-links">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-newsletter">
                            <h4>Our Newsletter</h4>
                            <p>
                                Stay up-to-date with the latest news and exclusive offers by subscribing to our
                                newsletter
                                today! Don't miss out on important updates and exciting promotions. Sign up now and
                                never
                                miss a beat!
                            </p>
                            <form action="" method="post">
                                <input type="email" name="email" /><input type="submit" value="Subscribe" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>NIDA</span></strong>. All Rights Reserved
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>


        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
</body>

</html>