@extends('layout.app')

@section('title',"About Me")

@section('content')
    <div class="experience my-5" id="experience" style="background-color: #4db99a; background-image: url(assets/edgetop01.png),url(assets/edgebottom02.png); background-position: top,bottom; background-repeat:no-repeat, repeat-x,repeat-y;">
        <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                            <h1 class="text-white my-5 font-weight-bold">About Mehedi Shamim</h1>
                            <img src="{{asset('assets/Mehedi-shamim.png')}}" alt="" width="100%" height="80%" class="mt-4">
                        </header>
                    </div>
                    <div class="col-sm-6 col-md-6 mt-3">
                        <div class="timeline mt-5">
                            <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                                <div class="timeline-text">
                                    <div class="timeline-date">7 JULY 1993</div>
                                    <h2 class="text-right">Bron</h2>
                                    <p class="text-right">
                                        Born in New Town, Madaripur, Dhaka, Bangladesh
                                    </p>
                                </div>
                            </div>
                            <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                                <div class="timeline-text">
                                    <div class="timeline-date">January, 1998</div>
                                    <h2>Enrolled Udoyar Path</h2>
                                    <p>
                                        Enrolled Udoyar Path, Lake Par Madaripur. Wrote and published his first rhymes.
                                    </p>
                                </div>
                            </div>
                            <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                                <div class="timeline-text">
                                    <div class="timeline-date">2001</div>
                                    <h2>Performed his first recitation on stage.</h2>
                                </div>
                            </div>
                            <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                                <div class="timeline-text">
                                    <div class="timeline-date">2004</div>
                                    <h2>Unicef Journey</h2>
                                    <h4>Child Repoter</h4>
                                    <p>
                                        Joined Unicef as a child reporter. Wrote and Published his first reports on Child Express and Location Newspaper.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row py-5">
            <div class="col-md-6 col-sm-6 d-flex align-items-center">
                <p style="font-size: 20px;">Having a long time of voluntary working experience in INGOs, Mehedi has worked for Media, Startup, RMG Industry, Group of Companies,
                    and eCommerce and owned a digital marketing agency in Dhaka. He worked in cultural organizations for a long time.
                    He co-founded a couple of social service organizations. Mehedi is a brand and digital marketing professional and loves to write and recite.
                    He published several books and now works in a leading position to establish brands and businesses in the mark</p>
            </div>
            <div class="col-md-6 col-sm-6">
                <img src="{{asset('assets/img.png')}}" width="100%" height="100%">
            </div>
        </div>
    </div>

    <div class="experience my-5" id="experience" style="background-color: #4bc1c4; background-image: url(assets/edgetop01.png),url(assets/edgebottom02.png); background-position: top,bottom; background-repeat:no-repeat, repeat-x,repeat-y;">
        <div class="container ">
            <div class="timeline">
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2005</div>
                        <h2>Trainig Session</h2>
                        <h4>Participate</h4>
                        <p>
                            Participated several times in different training sessions on writing, reporting, and presentation skills.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2006</div>
                        <h2>Started using a mobile phone.</h2>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2007</div>
                        <h2>Shilpokola Academy and Udici Shilpi Ghosti</h2>
                        <h4>First Join</h4>
                        <p>
                            Joined Shilpokola Academy and Udici Shilpi Ghosti to learn acting and recitation. After learning the history of Bangladesh, he started writing about it. He got in touch with technology this year and started using the computer.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">December, 2008</div>
                        <h2>Theatre show on stage</h2>
                        <h4>Performer</h4>
                        <p>
                            Performed his first theatre show on stage. ‘Payer Aowaj Paowa Jay by Syed Shamsul Huq’. Then performed more than 20 different theatre shows.
                            Theatre makes him a leader, creative thinker and politically conscious..
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="experience " id="experience" >
        <div class="container">
            <div class="timeline" >
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2009</div>
                        <h2>The daily bislesion</h2>
                        <h4>News Editor</h4>
                        <p>
                            Joined The daily bislesion as News Editor. And co-founded a recitation organization named ‘Udvash’.
                            Enrolled in the book reading community ‘Bissow Shahitto Kendro’. Read more than a hundred books.
                            Explored Bengali literature and philosophical books. He has started publishing a little magazine titled ‘Michil’.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2010</div>
                        <h2>TIB Journey</h2>
                        <h4>YES (Youth Engagement and Support) Member</h4>
                        <p>
                            Joined TIB as YES (Youth Engagement and Support) Member. Started a social movement against corruption.
                            Performed lots of street theatre shows to create awareness among the root and urban people.
                            Get opportunities to learn about ‘Media for Safe Migration’ from IOM. Become the team leader of the YES group.
                            TIB helps him to learn how to engage people to solve common problems, and how to think smartly in any situation.
                            He started participating in different debate competitions.
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2011</div>
                        <h2>Othocho Akjon Diaries</h2>
                        <h4>Awarded Winner</h4>
                        <p>
                            Awarded for an outstanding short story titled ‘Othocho Akjon Diaries’.Enrolled in the most beautiful university of
                            Bangladesh- Jahangirnagar University in the Public Administration Department. Moved to Dhaka.
                            Started living alone. Awarded for the inter university best debater award.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2012</div>
                        <h2>The Daily Kaler Kontha</h2>
                        <h4>Feature Reporter</h4>
                        <p>
                            Joined The Daily Kaler Kontha as a feature writer and translator.
                            Wrote and translated more than two hundred features. And Joined again YES group in the cretral team. Learned web development.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="experience my-5" id="experience" style="background-color: #4bc1c4; background-image: url(assets/edgetop01.png),url(assets/edgebottom02.png); background-position: top,bottom; background-repeat:no-repeat, repeat-x,repeat-y;">
        <div class="container ">
            <div class="timeline">
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2013</div>
                        <h2>International Academy of Film and Media</h2>
                        <h4>Join</h4>
                        <p>
                            Joined International Academy of Film and Media. Over there he organized more than twenty training/workshops and film festivals.
                            He co-founded Madaripur social service club, under the club he was the part of implementation of different projects titled as Project Natun Jama,
                            Project Schooling, Project Ushnota, and Project Forwarding. In this stage he has started giving back to the community.
                            Through those initiatives, he touched more than 6 thousand children. Some get school bags to carry his/her educational materials to school,
                            some children get warm clothes in the winter, and some other children get new dresses for their festival celebration.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2014</div>
                        <h2>Bodher Breaking News’</h2>
                        <h4>Book Published</h4>
                        <p>Published his first poetry book titled ‘Bodher Breaking News’. It was full of political thoughts. Some words trigger power,
                            corruption, inhumanity and some other words trigger the inner self of our mind. And then he started content marketing.</p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2015</div>
                        <h2>96.4 Spice FM </h2>
                        <h4>Full time Job</h4>
                        <p>
                            Joined a full time job at 96.4 Spice FM as Program Producer. Over there he has started doing professional digital marketing.
                            He was part of the new digital radio in Bangladesh. Completed his graduation from Jahangirnagar University in Public Administration.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="experience " id="experience" >
        <div class="container">
            <div class="timeline" >
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2016</div>
                        <h2>Completed post graduation from the same university in the same subject. </h2>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2017</div>
                        <h2>Cholo Chitrar Nam Bangladesh</h2>
                        <h4>Second Book</h4>
                        <p>
                            Published his second book titled ‘Cholo Chitrar Nam Bangladesh’.
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2018</div>
                        <h2>Tolpitolpar Golpo</h2>
                        <h4>Third Book</h4>
                        <p>
                            Published his third book titled ‘Tolpitolpar Golpo’ Joined MBM group as Business Development & CSR Manager.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2019</div>
                        <h2>Walton</h2>
                        <h4>Brand Category Head</h4>
                        <p>
                            Joined the largest electronic & electric brand Walton as Brand Category Head.
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2020</div>
                        <h2>Founded Tailor Marketing</h2>
                        <h4>Founder</h4>
                        <p>
                            Founded a digital marketing agency named Tailor Marketing Ltd.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2020</div>
                        <h2>Jobike Limited</h2>
                        <h4>Marketing Manager</h4>
                        <p>
                            Joined a vibrante startup Jobike limited as Marketing Manager. Jobike is a bicycle sharing system serving the cities of Dhaka, Chittagong and Cox's Bazar.
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2020</div>
                        <h2>Abdul Momen Ltd</h2>
                        <h4>Marketing Manager</h4>
                        <p>
                            Joined a group of companies Abdul Monem Ltd. as Marketing Manager for a E-commerce project, B2B Business titled AIIM Glogbal,
                            and BPO service company titled as ServicEngine Ltd. And then promoted to Head of Business for a E-commerce project titled SNEHO.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
