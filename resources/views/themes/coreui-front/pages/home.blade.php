@extends('themes.coreui-front.layout.master')

@section('content')
<header>
<div class="container">
     <div class="intro-text">
       <div class="intro-lead-in">Welcome To Our Site!</div>
           <div class="intro-heading">{{ $data['title'] }}</div>
           <a href="signup" class="page-scroll btn btn-xl">SIGNUP</a>
     </div>
 </div>
 </header>

 <!-- About Section -->
 <section id="about">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 text-center">
                 <h2 class="section-heading">About</h2>
                 <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-12">
                 <ul class="timeline">
                     <li>
                         <div class="timeline-image">
                             {!! Theme::img('img/about/1.jpg', '2009-2011', 'img-circle img-responsive') !!}
                         </div>
                         <div class="timeline-panel">
                             <div class="timeline-heading">
                                 <h4>2009-2011</h4>
                                 <h4 class="subheading">Our Humble Beginnings</h4>
                             </div>
                             <div class="timeline-body">
                                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                             </div>
                         </div>
                     </li>
                     <li class="timeline-inverted">
                         <div class="timeline-image">
                             {!! Theme::img('img/about/2.jpg', 'march-2011', 'img-circle img-responsive') !!}
                         </div>
                         <div class="timeline-panel">
                             <div class="timeline-heading">
                                 <h4>March 2011</h4>
                                 <h4 class="subheading">An Agency is Born</h4>
                             </div>
                             <div class="timeline-body">
                                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                             </div>
                         </div>
                     </li>
                     <li>
                         <div class="timeline-image">
                             {!! Theme::img('img/about/3.jpg', 'dec-2012', 'img-circle img-responsive') !!}
                         </div>
                         <div class="timeline-panel">
                             <div class="timeline-heading">
                                 <h4>December 2012</h4>
                                 <h4 class="subheading">Transition to Full Service</h4>
                             </div>
                             <div class="timeline-body">
                                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                             </div>
                         </div>
                     </li>
                     <li class="timeline-inverted">
                         <div class="timeline-image">
                             {!! Theme::img('img/about/4.jpg', 'jul-2014', 'img-circle img-responsive') !!}
                         </div>
                         <div class="timeline-panel">
                             <div class="timeline-heading">
                                 <h4>July 2014</h4>
                                 <h4 class="subheading">Phase Two Expansion</h4>
                             </div>
                             <div class="timeline-body">
                                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                             </div>
                         </div>
                     </li>
                     <li class="timeline-inverted">
                         <div class="timeline-image">
                             <h4>Be Part
                                 <br>Of Our
                                 <br>Story!</h4>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </section>

 <!-- How Grid Section -->
 <section id="how" class="bg-light-gray">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 text-center">
                 <h2 class="section-heading">How</h2>
                 <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
             </div>
         </div>
         <div class="row">
             <div class="col-md-4 col-sm-6 portfolio-item">
                 <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                     <div class="portfolio-hover">
                         <div class="portfolio-hover-content">
                             <i class="fa fa-plus fa-3x"></i>
                         </div>
                     </div>
                     {!! Theme::img('img/portfolio/roundicons.png', 'graphic-design', 'img-responsive') !!}
                 </a>
                 <div class="portfolio-caption">
                     <h4>Round Icons</h4>
                     <p class="text-muted">Graphic Design</p>
                 </div>
             </div>
             <div class="col-md-4 col-sm-6 portfolio-item">
                 <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                     <div class="portfolio-hover">
                         <div class="portfolio-hover-content">
                             <i class="fa fa-plus fa-3x"></i>
                         </div>
                     </div>
                     {!! Theme::img('img/portfolio/startup-framework.png', 'framework', 'img-responsive') !!}
                 </a>
                 <div class="portfolio-caption">
                     <h4>Startup Framework</h4>
                     <p class="text-muted">Website Design</p>
                 </div>
             </div>
             <div class="col-md-4 col-sm-6 portfolio-item">
                 <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                     <div class="portfolio-hover">
                         <div class="portfolio-hover-content">
                             <i class="fa fa-plus fa-3x"></i>
                         </div>
                     </div>
                     {!! Theme::img('img/portfolio/treehouse.png', 'treehouse', 'img-responsive') !!}
                 </a>
                 <div class="portfolio-caption">
                     <h4>Treehouse</h4>
                     <p class="text-muted">Website Design</p>
                 </div>
             </div>
             <div class="col-md-4 col-sm-6 portfolio-item">
                 <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                     <div class="portfolio-hover">
                         <div class="portfolio-hover-content">
                             <i class="fa fa-plus fa-3x"></i>
                         </div>
                     </div>
                     {!! Theme::img('img/portfolio/golden.png', 'golden', 'img-responsive') !!}
                 </a>
                 <div class="portfolio-caption">
                     <h4>Golden</h4>
                     <p class="text-muted">Website Design</p>
                 </div>
             </div>
             <div class="col-md-4 col-sm-6 portfolio-item">
                 <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                     <div class="portfolio-hover">
                         <div class="portfolio-hover-content">
                             <i class="fa fa-plus fa-3x"></i>
                         </div>
                     </div>
                     {!! Theme::img('img/portfolio/escape.png', 'escape', 'img-responsive') !!}
                 </a>
                 <div class="portfolio-caption">
                     <h4>Escape</h4>
                     <p class="text-muted">Website Design</p>
                 </div>
             </div>
             <div class="col-md-4 col-sm-6 portfolio-item">
                 <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                     <div class="portfolio-hover">
                         <div class="portfolio-hover-content">
                             <i class="fa fa-plus fa-3x"></i>
                         </div>
                     </div>
                     {!! Theme::img('img/portfolio/dreams.png', 'dreams', 'img-responsive') !!}
                 </a>
                 <div class="portfolio-caption">
                     <h4>Dreams</h4>
                     <p class="text-muted">Website Design</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

    <!-- Features Section -->
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Features</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="testimonial" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">What People Says</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        {!! Theme::img('img/team/1.jpg', 'kay-garland', 'img-responsive img-circle') !!}
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        {!! Theme::img('img/team/2.jpg', 'lary-parker', 'img-responsive img-circle') !!}
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        {!! Theme::img('img/team/3.jpg', 'diana-pertersen', 'img-responsive img-circle') !!}
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        {!! Theme::img('logos/envato.jpg', 'envato', 'img-responsive img-centered') !!}
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        {!! Theme::img('logos/designmodo.jpg', 'designmodo', 'img-responsive img-centered') !!}
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        {!! Theme::img('logos/themeforest.jpg', 'themeforest', 'img-responsive img-centered') !!}
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        {!! Theme::img('logos/creative-market.jpg', 'creative-market', 'img-responsive img-centered') !!}
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                {!! Theme::img('img/portfolio/roundicons-free.png', 'project-name', 'img-responsive img-centered') !!}
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                {!! Theme::img('img/portfolio/startup-framework-preview.png', 'project-heading', 'img-responsive img-centered') !!}
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                {!! Theme::img('img/portfolio/treehouse-preview.png', 'project-name', 'img-responsive img-centered') !!}
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                {!! Theme::img('img/portfolio/golden-preview.png', 'project-name', 'img-responsive img-centered') !!}
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                {!! Theme::img('img/portfolio/escape-preview.png', 'project-name', 'img-responsive img-centered') !!}
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                {!! Theme::img('img/portfolio/dreams-preview.png', 'project-name', 'img-responsive img-centered') !!}
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
