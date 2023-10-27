<?php require_once( 'couch/cms.php' ); ?>
<cms:editable name='about-texts' label='About' desc='About Texts' type='group' />
<cms:editable name='p-1' label='Paragraph 1' 
    maxlength='200'
    type='text' 
    group="about-texts"
    />
    <cms:editable name='p-2' label='Paragraph 2' 
    maxlength='200'
    type='text' 
    group="about-texts"
    />
    <cms:editable name='p-3' label='Question after button' 
    maxlength='200'
    type='text' 
    group="about-texts"
    />
    <cms:editable name='p-4' label='Last paragraph' 
    maxlength='200'
    type='text' 
    group="about-texts"
    />
<cms:editable name='socials' label='Socials' desc='Social Links' type='group' />
<cms:editable name='email' label='Email' desc='Enter email to display on the page'
    maxlength='20'
    type='text' 
    group="socials"
    />
<cms:editable name='whatsapp' label='Whatsapp' desc='Enter contact to display on the page'
    maxlength='20'
    type='text' 
    group="socials"
    />


    <!-- HTML -->
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NJ Talents</title>
    <link rel="stylesheet" href="style.css">
        <!-- Importing icons library -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- How the website appears when shared on twitter -->
    <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@NJ Talents" />
  <meta name="twitter:title" content="NJ Talents" />
  <meta name="twitter:description" content="Bring African art to your home, office and living. Supporting talented Rwandan artists" />
  <meta name="twitter:image" content="https://www.njtalents.com/media/lady%20with%20pot%20painting.webp" />
<!-- General meta tags for seo -->
  <meta name="description" content="Bring African art to your home, office and living room or collect it in Kigali. We support emerging Rwandan artists and give them the recognition they deserve. ">
  <meta name="keywords"
    content="african, rwanda, art, painting, nj talents, handmade, local, community,  young, emerging, exotic, buy, ecommerce, painting, necklace">
  <meta name="author" content="NJ Talents">
  <meta name="title" content="NJ Talents">
  <meta property="og:type" content="website" />
<!-- How the website appears when shared on social media -->
  <meta property="og:title" content="NJ Talents" />
  <meta property="og:description" content="Bring African art to your home, office and living room or collect it in Kigali. We support emerging Rwandan artists and give them the recognition they deserve. ">
    <meta property="og:image" content="https://www.njtalents.com/media/lady%20with%20pot%20painting.webp">
  <!-- Importing the Tachyons css framework -->

    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>

  <link rel="icon" type="image/x-icon" href="media/NJ Talents logo.png">
</head>
<body>
  <header class=" fixed w-100 ph3 pv3 pv4-ns ph4-m ph5-l">
    <nav class="f6 fw6 ttu tracked flex justify-center">
      <a class="link dim white dib mr3" href="#about" title="About">About</a>
      <a class="link dim white dib mr3" href="#buyart" title="Buy Art">Buy Art</a>
      <a class="link dim white dib" href="#contact" title="Contact">Contact</a>
    </nav>
  </header>
  
    <section class="hero">
          <div class="hero-content">
            <div class="hero-text">
                <h1 class="underline-paintbrush">Bring African Art to <br>
                    <span class="txt-type" data-wait="3000" data-words='["Your home", "Your office", "Your living room"]'></span>
                  </h1>
              <h2 class="hero-subtitle">NJ talents works with talented young artists in Rwanda.</h2>
              <a class="view-art link grow white" href="#buyart">View the artwork</a>
              
      
            
          </div>
        </div>
      </section>

      <div class="flex justify-center about pa2" id="about">
        <div class="w-80 mw7 bg-white pa3 shadow-5">
          <div class="flex flex-column flex-row-ns">
            <div class="w-100 w-40-ns pa2">
              <img src="media/janvier profile pic.webp" alt="Janvier, a Rwandan artist and founder of NJ Talents" class="w-100 h-auto">
              <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/c9/20/ab/kigali-arts-center-artworks.jpg?w=500&h=400&s=1" alt="Janvier, a Rwandan artist and founder of NJ Talents" class="w-100 h-auto">



            </div>
            <div class="w-100 w-60-ns pa3">
              <h2 class="f3 mb3 pa2 tc">
                <span>About</span>
                <svg class="paintbrush-line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10">
                  <path fill="none" stroke="var(--yellow)" stroke-width="4" d="M0,5 C25,2 75,2 100,5"></path>
                </svg>
              </h2>
              
              
              
              <p class="f6 lh-copy tc about-text">
                Hi there, I am Janvier Nshimiyimana, founder and CEO of NJ Talents. I grew up in Kigali and I have 
                been working in the arts industry since 2008. I started NJ talents to 
                market the artwork and handmade products of emerging Rwandan artists. 
              </p><br><br>
              
              <p class="f6 lh-copy tc about-text">Rwanda’s art scene is young and booming. Multiple art galleries and handmade jewellery shops were established in recent years. 
                I want to give talented artists the recognition they deserve. 

              </p>
              
              <div class="pa2 flex justify-center">
                <a class="view-art link grow white " href="#buyart">View the artwork</a>
              </div>

              <a class="link f4" href="#kigali"><p class=" link black tc pa3 paintbrush-line b grow">Are you in Kigali?</p></a>
              <svg class="paintbrush-line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10">
                <path fill="none" stroke="var(--yellow)" stroke-width="4" d="M0,5 C25,2 75,2 100,5"></path>
              </svg>
              <p class="f7 tc pa1">Come and collect your favourite products!</p>

            </div>

          </div>

        </div>
      </div>
      
        <!-- Modal that opens when they click on the image of the artwork -->

      <div id="myModal" class="modal">
        <span class="close-button" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage">
      </div>
      <h1 class="f2 mb3 pa2 tc" id="buyart">
        <span>Artwork</span>
        <svg class="paintbrush-line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10">
          <path fill="none" stroke="var(--yellow)" stroke-width="4" d="M0,5 C25,2 75,2 100,5"></path>
        </svg>
        <p class="f5" >We ship worldwide, or you can collect the artwork if you are visiting Kigali.
        </p>
      </h1>      
      <section class="art">
      <div class="flex flex-wrap justify-center">
        <div class="w-100 w-50-m w-25-l pa2">
          <div class=" tc artwork-card shadow-5 pa2">
            <img src="media/elephant.svg" alt="Painting of an African elephant" class="w-100 pointer" onclick="openModal('media/cow painting.webp')">
            <h3 class="ma2">Elephant</h3>
            <p class="ma2">Acrylic</p>

            <p class="ma2">Price: Available upon request</p>
            <p class="ma2">Size: 80 x 100 cm</p>
            <p class="ma2">Artist name: Munezero JMV</p>
            <div class="pa2 flex justify-center">
              <a class="view-art link grow white " href="#contact">Contact for price</a>
            </div> 
          </div>
          
        </div>

        <div class="w-100 w-50-m w-25-l pa2 ">
            <div class="tc artwork-card shadow-5 pa2">
              <img src="media/dark mountain.svg" alt="A mystical mountain at night with trees" class="w-100 pointer" onclick="openModal('media/fabric painting.webp')">
              <h3 class="ma2">Dark Mountain</h3>
              <p class="ma2">Acrylic</p>
              <p class="ma2">Price: Available upon request</p>
              <p class="ma2">Size: 45 x 20 cm</p>
              <p class="ma2">Artist name: John</p>
            
            

              <div class="pa2 flex justify-center">
                <a class="view-art link grow white " href="#contact">Contact for price</a>
              </div>            </div>
          </div>

          <div class="w-100 w-50-m w-25-l pa2">
            <div class="tc artwork-card shadow-5 pa2">
              <img src="media/blue painting.webp" alt="View of the lake and a mountain and a forest" class="w-100 pointer" onclick="openModal('media/blue painting.webp')">
              <h3 class="ma2">Blue Landscape</h3>
              <p class="ma2">Oil Painting</p>

              <p class="ma2">Price: $250</p>
              <p class="ma2">Size: 80 x 60 cm</p>
              <p class="ma2">Artist name: Burabyo</p>
              

              <div class="pa2 flex justify-center">
                <a class="view-art link grow white " href="#contact">Contact to buy</a>
              </div>               </div>
          </div>

          <div class="w-100 w-50-m w-25-l pa2">
            <div class="tc artwork-card shadow-5 pa2">
              <img src="media/african traditional culture painting.webp" alt="Painting of tribal people in africa. Abstract" class="w-100 pointer" onclick="openModal('media/african traditional culture painting.webp')">
              <h3 class="ma2">African traditional culture</h3>
              <p class="ma2">Oil painting</p>

              <p class="ma2">Price: $200</p>
              <p class="ma2">Size: 50 x 50 cm</p>
              <p class="ma2">Artist name: Keve</p>
              <div class="pa2 flex justify-center">
                <a class="view-art link grow white " href="#contact">Contact to buy</a>
              </div>               </div>

            
          </div>

          
          <div class="flex flex-wrap justify-center">
            <div class="w-100 w-50-m w-25-l pa2 ">
              <div class="tc artwork-card shadow-5 pa2">
                <img src="media/our tradition people painting.webp" alt="Painting of 3 africans wearing traditional clothes" class="w-100 pointer" onclick="openModal('media/our tradition people painting.webp')">
                <h3 class="ma2">Our tradition</h3>
                <p class="ma2">Oil Painting</p>

                <p class="ma2">Price: $250</p>
                <p class="ma2">Size: 60 x 40 cm</p>
                <p class="ma2">Artist name: Burabyo</p>
                <div class="pa2 flex justify-center">
                  <a class="view-art link grow white " href="#contact">Contact to buy</a>
                </div>                 </div>
              
            </div>
    
            <div class="w-100 w-50-m w-25-l pa2 ">
                <div class="tc artwork-card shadow-5 pa2">
                  <img src="media/african lady making baskets.svg" alt="An African lady making baskets" class="w-100 pointer" onclick="openModal('media/necklace.webp')">
                  <h3 class="ma2">African lady making baskets</h3>
                  <p class="ma2">Acrylic</p>

                  <p class="ma2">Price: Available upon request</p>
                  <p class="ma2">Size: 60 x 45 cm</p>
                  <p class="ma2">Artist name: Herve</p>



                  <div class="pa2 flex justify-center">
                    <a class="view-art link grow white " href="#contact">Contact for price</a>
                  </div>                 </div>
              </div>
    
              <div class="w-100 w-50-m w-25-l pa2">
                <div class="tc artwork-card shadow-5 pa2">
                  <img src="media/lady with pot painting.webp" alt="Painting of an African lady carrying a pot on her head" class="w-100 pointer" onclick="openModal('media/lady with pot painting.webp')">
                  <h3 class="ma2">Lady with Pot</h3>
                  <p class="ma2">Oil Painting</p>

                  <p class="ma2">Price: $200</p>
                  <p class="ma2">Size: 50 x 40 cm</p>
                  <p class="ma2">Artist name: Burabyo</p>

                  <div class="pa2 flex justify-center">
                    <a class="view-art link grow white " href="#contact">Contact to buy</a>
                  </div>                   </div>
              </div>
    
              <div class="w-100 w-50-m w-25-l pa2">
                <div class="tc artwork-card shadow-5 pa2">
                  <img src="media/african tradition dancer.svg" alt="An african traditional dancer" class="w-100 pointer" onclick="openModal('media/giraffe painting.webp')">
                  <h3 class="ma2">African tradition dancer</h3>
                  <p class="ma2">Acrylic</p>
                  <p class="ma2">Price: Available upon request</p>
                  <p class="ma2">Size: 65 x 45 cm</p>
                  <p class="ma2">Artist name: Herve</p>

                  <div class="pa2 flex justify-center">
                    <a class="view-art link grow white " href="#contact">Contact for price</a>
                  </div>                 </div>
    
                
              </div>
        
      </div>

      <div class="flex flex-wrap justify-center">
        
          

        <div class="w-100 w-50-m w-25-l pa2 ">
          
            <div class="tc artwork-card shadow-5 pa2 waiting">
              <img src="media/other people painting.webp" alt="Painting of African people dancing. Abstract" class="w-100 pointer" onclick="openModal('media/other people painting.webp')">
              <h3 class="ma2">People's painting</h3>
              <p class="ma2">Price: $300</p>
              <p class="ma2">Size: waiting</p>
              <p class="ma2">Artist name: waiting</p>
              <a class="view-art link grow white" href="#0">Purchase</a>

            </div>
          </div>

          <div class="w-100 w-50-m w-25-l pa2 waiting">
            <div class="tc artwork-card shadow-5 pa2">
              <img src="media/other people painting 2.webp" alt="Product 1" class="w-100 pointer" onclick="openModal('media/other people painting 2.webp')">
              <h3 class="ma2">African Culture painting</h3>
              <p class="ma2">Price: $300</p>
              <p class="ma2">Size: waiting</p>
              <p class="ma2">Artist name: waiting</p>
              <a class="view-art link grow white" href="#0">Purchase</a>

            </div>
          </div>

          
            </div>

            
          </div>
    
  </div>

      
    </section>
      
    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close-button" onclick="closeModal()">&times;</span>
        <img class="modal-image" id="modalImage" src="" alt="Modal Image">
      </div>
    </div>


    <h1 class="f2 mb3 pa2 tc" id="kigali">
      <span>Are you in Kigali?</span>
      <svg class="paintbrush-line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10">
        <path fill="none" stroke="var(--yellow)" stroke-width="4" d="M0,5 C25,2 75,2 100,5"></path>
      </svg>
      <p class="f4 pa1" >You can contact Janvier and take a look at the artwork. He also sells amazing jewellery!
      </p>
   

    </h1> 
    <p class="tc pa2">Business Hours: Monday to Saturday 9am-8pm</p>
    <p class="tc pa2">Location: House KG80 - Avenue 19 - Kibagabaga - Near the hospital</p>

    <div class="flex flex-wrap justify-center">
    <a class="view-art link grow white mr2 ma2 ma-1-ns" href="#0">WhatsApp</a>
    <a class="view-art link grow white mr2 ma2 ma-1-ns" href="#0">Email</a></div>
     
    <section class="pa3">
      <div class="flex justify-center">
        <div class="w-100 mw7">
          <div class="carousel flex justify-center">
            <img src="media/jewelry1.webp" alt="Rwandan jewellery" class="db w-100 w-75-ns w-50-l">
            <img src="media/other people painting 2.webp" alt="Traditional Rwandan Painting with people dancing " class="db w-100 w-75-ns w-50-l">
            <img src="media/jewelry2.webp" alt="Rwandan jewellery" class="db w-100 w-75-ns w-50-l">
            <img src="media/jewelry3.webp" alt="Rwandan jewellery" class="db w-100 w-75-ns w-50-l">
            <img src="media/other people painting.webp" alt="Traditional Rwandan Painting with people dancing" class="db w-100 w-75-ns w-50-l">
            <img src="media/jewelry4.webp" alt="Rwandan jewellery" class="db w-100 w-75-ns w-50-l">


          </div>
        </div>
      </div>
    </section>
    
    <h2 class="f3 mb3 pa2 tc">
      <span>Testimonial</span>
      <svg class="paintbrush-line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10">
        <path fill="none" stroke="var(--yellow)" stroke-width="4" d="M0,5 C25,2 75,2 100,5"></path>
      </svg>
      <div class="video-container shadow-2">
        <video class="shadow-2" src="https://res.cloudinary.com/dpcy1ezvt/video/upload/v1693836703/testimonial_1_ydzo8p.mp4" controls></video>
    </h2>
    

                                            <!-- Contact section -->

      <div class="contact-section" id="contact">
        <div class="contact-form shadow-5">
          <h1 class="f2 mb3 pa2 tc">
            <span>Contact</span>
            <svg class="paintbrush-line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10">
              <path fill="none" stroke="var(--yellow)" stroke-width="4" d="M0,5 C25,2 75,2 100,5"></path>
            </svg>
          </h1>
          <p class="pa3 tc">Do you want a personalised painting or handmade jewellery?
            Do you have any questions before you purchase our products?</p>

          <form target="_blank" action="https://formsubmit.co/devkenya@proton.me

          " method="POST">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            </div>

             
             
             
             
            <div class="form-group">
              <textarea placeholder="Your message" class="form-control" name="message" rows="6" required></textarea>
            </div>
            <button class="submit-btn" type="submit">Send</button>

          </form>
          
        </div>
        
        <div class="contact-details">
          <img src="media/studio.webp">
        
      

          <div class="contact-bottom">

            <div class="icon-bottom grow">
              <a href="mailto:njtalentscenter@gmail.com">
                <i class="fas fa-envelope" aria-label="email"></i>
              </a>
            </div>
         
            <div class="icon-bottom grow">
              <a href="https://wa.me/250786384028">
                <i class="fab fa-whatsapp
                " aria-label="whatsapp"></i>
              </a>

            </div>
           
          
          </div>

      <p class="tc white">Copyright - NJ Talents - 2023

      </p>
      <p class="tc white">Website designed by <a target="_blank" class="link white underline" href="https://devkenya.com">DevKenya</a></p>
    <script src="script.js"></script>
</body>
</head>
</html>
<?php COUCH::invoke(); ?>