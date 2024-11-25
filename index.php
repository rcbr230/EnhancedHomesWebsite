<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Example Homepage</title>
  <!-- Bootstrap CSS -->
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <style>
    body {
      scroll-behavior: smooth;
      overflow-x: hidden;
      
    }
    .hero {
      background-color: #e0e0e0;
      /* padding: 100px 0; */
      padding-bottom: 10px;
      padding-top: 10px;
      text-align: center;
    }
    .section {
      padding-top: 30px;
      padding-left:  25%;
      padding-right: 20%;
    }
    #topNavDiv{
      background-color: #101010 !important;
    }
    .navbar-brand{
      color: white;
    }
    .navbar-brand:hover{
      color:red;
      text-decoration: underline;
    }
    .nav-link{
      color: white;
    }
    .nav-link:hover{
      color:red;
      text-decoration: underline;
    }
    .navbar-break{
      padding-top: 7px;
    }
    .phoneNum{
      margin-top: 7px;
      color: #0093bf;
    }
    /* NOTE: THIS ONLY WORKS WHEN ALL THE IMAGES ARE THE SAME SIZE! */
    .hover-effect {
      transition: transform 0.3s ease; /* Smooth animation */
      width:  100%;
      height: 100%;
    }

    .homes-for-sale-table{
    }
    /* Happens when a mouse is hovered over the image */
    .hover-effect:hover {
      transform: scale(1.1); /* Slightly enlarge the image */
    }
    .homes-for-sale-cell{
      padding: 5px;
    }
    #contact-dropdown{
      display: none;
      background-color: white;
      position: absolute;
    }
    #contact-dropdown:hover{
      display:block;
    }
    #contactUsNav:hover + #contact-dropdown,
    #contactUsNav:hover #contact-dropdown{
      display: block;
    }
    
    .scroll-img{
      width: 100%;
      overflow: hidden;
    }
    .sale-portfolio-break-div{
      width: 100%;
      padding-top: 50px;
      height:5%;
    }
    .sale-portfolio-break-img{
      height: 150px;
      width:100%;
    }

    .about-us-paragraph{
      width:65%;
      float: left;
    }
    .clear{
      clear: both;
    }
    .meet-makers-link{
      padding-left: 50px;
      text-decoration: none;
    }
    
    .section-contact{
      background-color: #101010;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class='navbar navbar-expand-lg navbar-light bg-light fixed-top' id='topNavDiv'>
    <div class='container'>
      <a class='navbar-brand' href='#'>Home</a>
      
      <div class='collapse navbar-collapse' id='navbarNav'>
        <ul class='navbar-nav ms-auto'>
          <li class='nav-item'>
            <a class='nav-link' href='#section1'>Homes for Sale</a>
          </li>
          <p class='navbar-break' style='color: white;'>|</p>
          <li class='nav-item'>
            <a class='nav-link' href='#section2'>Portfolio</a>
          </li>
          <p class='navbar-break' style='color: white;'>|</p>
          <li class='nav-item'>
            <a class='nav-link' href='#section3'>About Us</a>
          </li>
          <p class='navbar-break' style='color: white;'>|</p>

		  <li class='nav-item'>
            <a class='nav-link' href='#section4' id='contactUsNav'>Contact Us 🡣</a>
              <div id='contact-dropdown'>
                <ul class='navbar-nav ms-auto'>
                  <li><a class='nav-link' style='color:black' href='/ContactUs'>Sell a house</a></li>
                </ul>
              </div>
          </li>
          <p class='navbar-break' style='color: white;'>|</p>
          <li class='nav-item'>
            <a class='nav-link' href=''>Upcoming Projects</a>
          </li>
		  
		  <li class='nav-item'>
            <p class='phoneNum'>1(859)-555-5555</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class='hero'>

  <!-- Autoplay Bar at the top of the screen -->
    <div class='autoplay'>
      <div>
        <img class='scroll-img' src='https://www.tennessean.com/gcdn/presto/2019/10/11/PNAS/adf1101a-0f8c-404f-9df3-5837bf387dfd-1_Exterior_House_Beautiful_Whole_Home_Concept_House_Castle_Homes_Photo_Reed_Brown_Photography.jpg?width=1200&disable=upscale&format=pjpg&auto=webp'>
      </div>
      <div>
        <img class='scroll-img' src='https://postandporch.com/cdn/shop/articles/AdobeStock_209124760.jpg?v=1662575433&width=1440'>
      </div>
      <div>

      <img class='scroll-img' src='https://postandporch.com/cdn/shop/articles/AdobeStock_209124760.jpg?v=1662575433&width=1440'>
      </div>
      <div>
        <img class='scroll-img' src='https://www.tennessean.com/gcdn/presto/2019/10/11/PNAS/adf1101a-0f8c-404f-9df3-5837bf387dfd-1_Exterior_House_Beautiful_Whole_Home_Concept_House_Castle_Homes_Photo_Reed_Brown_Photography.jpg?width=1200&disable=upscale&format=pjpg&auto=webp'>
      </div>
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script type="text/javascript">
       $(document).ready(function(){
         $('.autoplay').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 4000,
        });
       });
      </script>
      
    <div class='container' id='header-container'>
      <img src='./SiteImages/Logo.png' style='width:40%;height:10%;'>
      <p>Mini description here...</p>
    </div>
  </div>
  <div class='mainBody'>
  <!-- Sections -->
   <div id='section1'></br></br></div>
    <div id='section' class='section bg-light'>
      <div class='container'>
        <h2>Homes for Sale</h2>
        <table id='homes-for-sale-table'>
          <!-- 
          THIS WILL BE NEEDED IN THE FUTURE!
          <script>
            var table = document.getElementById('HomesForSaleTable');
            for (var i=0;i<3;i++){
              var tableRow = document.createElement('tr');
              for (var j=0;j<3;j++){
                // last element is for viewing more homes for sale
                if(i==2 && j==2){
                  break;
                }
                //NOTE: This is a temporary fix! I am doing these TDs manually, but will
                // have to create a DB to store all the house data.
                var tableDataCell = document.createElement('td');
                tableDataCell.innerHTML('<img src=./Homes/Listed/777_Haven_st/HouseImages/tempHouseEx.jpg>');
                tableRow.appendChild(tableDataCell);
              }
              table.appendChild(tableRow);
            }
          </script> -->

          <!-- TEMPORARY EXAMPLE TABLE: -->
          <tr>
            <td class='homes-for-sale-cell'><a><img class='hover-effect' src='./Homes/Listed/777_Haven_st/HouseImages/tempHouseEx.jpg'></a></td>
            <td class='homes-for-sale-cell'><a><img class='hover-effect' src='./Homes/Listed/777_Haven_st/HouseImages/tempHouseEx.jpg'></a></td>
            <td class='homes-for-sale-cell'><a><img class='hover-effect' src='./Homes/Listed/777_Haven_st/HouseImages/tempHouseEx.jpg'></a></td>
            <td class='homes-for-sale-cell'><a><img class='hover-effect' src='./Homes/Listed/777_Haven_st/HouseImages/tempHouseEx.jpg'></a></td>
            <td class='homes-for-sale-cell'><a><img class='hover-effect' src='./Homes/Listed/777_Haven_st/HouseImages/tempHouseEx.jpg'></a></td>
          </tr>
          <tr></tr>
            <td class='homes-for-sale-cell'><a><img class='hover-effect' src='./Homes/Listed/777_Haven_st/HouseImages/tempHouseEx.jpg'></a></td>
            <td class='homes-for-sale-cell'><a><img class='hover-effect' src='./Homes/Listed/777_Haven_st/HouseImages/tempHouseEx.jpg'></a></td>
            <td class='homes-for-sale-cell'><a><img class='hover-effect' src='./Homes/Listed/777_Haven_st/HouseImages/tempHouseEx.jpg'></a></td>
            <td class='homes-for-sale-cell'><a><img class='hover-effect' src='./Homes/Listed/777_Haven_st/HouseImages/tempHouseEx.jpg'></a></td>
          </tr>
        </table>
      </div>
    </div>

    <!-- Middle Image between Homes for sale and Portfolio examples -->
    <div class='sale-portfolio-break-div'>

      <img class='sale-portfolio-break-img' src='https://media.istockphoto.com/id/1372488781/vector/wood-texture-vector-brown-wooden-background.jpg?s=612x612&w=0&k=20&c=eXQbrqxBXe4VvXXDFXNv0rsDNMUqvXzWJRi7GTYUWXM='>

    </div>
    <div id='section2'></br></br></div>
    <div id='section' class='section'>
      <div class='container'>
        <h2>Portfolio</h2>
        <p>EX.</p>
      </div>
    </div>
    <div id='section3'></br></br></div>
    <div id='section' class='section bg-light'>
      <div class='container'>
        <h2>About Us</h2>
        <!-- ex written by GPT -->
        <div >
          <p class='about-us-paragraph'>An “About Me” section serves as a personal introduction, offering readers a glimpse into who you are, your background, and what drives you. It's more than just a biography; it's a chance to communicate your values, skills, and personality in a way that resonates with your audience. Whether it's for a professional portfolio, a social media profile, or a casual personal website, this space is a unique opportunity to establish a connection by showcasing your individuality. For professionals, it often includes details about your career journey, achievements, and aspirations, demonstrating expertise and building credibility. For creatives, it might delve into passions, inspirations, or unique quirks that define your perspective. While the tone and content can vary depending on the context, the ultimate goal of an "About Me" section is to engage readers, answer their unspoken questions about who you are and what you offer, and leave a lasting impression that invites further interaction.</p>
          <img class='about-us-image' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEM7h-3_xucDg6PXVOyOxh9QOnMkS0dvydRA&s'>
          </br>
          </br>
          <a class='meet-makers-link' href='/MeetUs'><b>Meet the Makers &#62;&#62;</b></a>
          <div class='clear'></div>
          <p> PROBABLY MORE HERE? BUT WITH IMAGE ON THE LEFT</p>
        </div>
      </div>
    </div>
   <div id='section4'></br></br></div>
    <div id='section-contact' class='section bg-light'>
      <div class='container'>
        <h2>Contact Us</h2>
        <div class='contact-us-section'>
            <p>EX.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>
