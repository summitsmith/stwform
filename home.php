<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:index.php");
	exit;
}
?>

<!DOCTYPE html>

<html>
<head>
<title>Holy Trinity Secondary School Nkozi- Students resource</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="icon" href="images/icon.png" type="image/x-icon">
<link rel="stylesheet" href="layout/style.css">
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
	  
        <li><a href="home.php">Home</a></li>
        <li><a href="pages/contact us.php">Contact Us</a></li>
        <li><a href="logout.php">Log out</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a>Holy Trinity online Classes</a></h1>
      <marquee><p>Welcome to Holy Trinity online classes - powered by ICT sector</p></marquee>
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search Here">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>


<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        
        <li><a class="drop" href="#">NCDC</a>
          <ul>
            
            <li><a class="drop" href="https://mega.nz/folder/WVImHJ5J#XfDhQSZe0Fz7nWGo9NjdMA">NCDC Notes</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Senior One</a>
          <ul>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/CRE LB Chp 1Komprressed.pdf">CRE LB Chp 1</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 Agric LB Chp 1-2Kompressed.pdf">S.1 Chap1 Agric</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 Biology LB Chp 1-2Kompressed2.pdf">S.1 Biology LB Chp 1-2</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 Chemistry LB Chp1 -2kompressed.pdf">S.1 Chemistry LB Chp1 -2</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 English Language and Lit LB Chp 1-3Kompressed.pdf">S.1 English Language and Lit LB Chp 1-3</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 Entrepreneurship LB Chp 1-2Kompressed.pdf">S.1 Entrepreneurship LB Chp 1-2</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 French LB Chp 1Kompressed.pdf">S.1 French LB Chp 1</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 French LB Chp 2Kompressed.pdf">S.1 French LB Chp 2</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 German LB Chp 1 - 2Kompress.pdf">S.1 German LB Chp 1 - 2</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 History Learner Book Chp 1 -2Kompressed.pdf">S.1 History Learner Book Chp 1 -2</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 ICT Learner  Textbook-Full Kompressed.pdf">S.1 ICT Learner  Textbook-Full</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 IRE Learner Book Chp 1Kompressed.pdf">S.1 IRE Learner Book Chp 1</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 Learner Book Agric Chp 1 - 3Kompressed.pdf">S.1 Learner Book Agric Chp 1 - 3</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 Learner Book Arabic Chp 1 - 3Kompressed.pdf">S.1 Learner Book Arabic Chp 1 - 3</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 Maths Learner Book Chp 1 -2Kompressed.pdf">S.1 Maths Learner Book Chp 1 -2</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 Maths Learner Book Chp 3Kompressed.pdf">S.1 Maths Learner Book Chp 3</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 Physical Educ Learner Book Chp 1 -5Kompressed.pdf">S.1 Physical Educ Learner Book Chp 1 -5</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 Physics Learner Book Chp 1 - 3Kompressed.pdf">S.1 Physics Learner Book Chp 1 - 3</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 Swahili LB Chp 1Kompressed.pdf">S.1 Swahili LB Chp 1</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S.1 Technology and Design Learner Book Chp 1 -5Kompressed.pdf">S.1 Technology and Design Learner Book Chp 1 -5</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S1 Geog Learner Book Chp 1- 2Kompressed.pdf">S1 Geog Learner Book Chp 1- 2</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S1 Geog Learner Book Chp 1- 4.pdf">S1 Geog Learner Book Chp 1- 4</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S1 Geog Learner Book Chp 3- 4Kompressed.pdf">S1 Geog Learner Book Chp 3- 4</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S1 History Learner Book Chp 3- 4Kompressed.pdf">S1 History Learner Book Chp 3- 4</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S1 Nutrition and Food Technology LB Chp 1 - 3Kompressed.pdf">S1 Nutrition and Food Technology LB Chp 1 - 3</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/S1 Nutrition and Food Technology LB Chp 1 - 3Kompressed.pdf">Bishop SS Mukono</a></li>
            <li><a class="drop" href="content=id3233/S.1 Learners Textbook by NCDC-20210903/CRE LB Chp 1Komprressed.pdf">Bishop SS Mukono</a></li>
            <li><a class="drop" href="https://mega.nz/folder/zNxh3QxB#xknRRx0o31J-2knaoPv27g">Bishop SS Mukono</a></li>
            <li><a class="drop" href="https://mega.nz/folder/DMImVDwC#httMhlUiTttRQl2D650GXA">Mpoma Girls</a></li>
            <li><a class="drop" href="https://mega.nz/folder/PcAkGZTA#0XcTjTTtHaLa60hYMGvOfg">Nabisunsa Girls</a></li>
            <li><a class="drop" href="https://mega.nz/folder/LERSRZpC#a9UM8W0huc8ufnOdMLN2xQ">Standard HS Zana</a></li>
            <li><a class="drop" href="#">Smack Collection</a>
              <ul>
                <li><a href="content=id3233/SMACK-20210903/S1 Chemistry.pdf">S1 Chemistry</a></li>
                <li><a href="content=id3233/SMACK-20210903/S1 Geogrraphy.pdf">S1 Geogrraphy</a></li>
                
              </ul>
            </li>
            <li><a class="drop" href="#">National Holiday Work</a>
              <ul>
      
                <li><a href="content=id3233/National Holiday Work-20210903/S1-Materials - Science.pdf">S1 Material</a></li>
               
                
              </ul>
            </li>
            <li><a class="drop" href="https://mega.nz/folder/rFhXBaiY#bqq6WhkyCNlE0KAD3QRxDg" >Other sources</a></li>
            
          </ul>
        </li>
        <li><a class="drop" href="#">Senior Two</a>
          <ul>
            <li><a class="drop" href="#">Smack Collection</a>
              <ul>
      
                <li><a href="content=id3233/SMACK-20210903/S2 Biology.pdf">Biology</a></li>
                <li><a href="content=id3233/SMACK-20210903/S2 Chemistry.pdf">Chemistry</a></li>
                <li><a href="content=id3233/SMACK-20210903/S2 History.pdf">History</a></li>
                
              </ul>
            </li>
            <li><a class="drop" href="https://mega.nz/folder/yJQyEThT#6WIXNMPyB3897j_gt5eVYQ">Standard HS Zana</a></li>
            <li><a class="drop" href="https://mega.nz/folder/OVYURZKL#04wdIh7HbLqSlf9T4S6S7g">Nabisunsa Girls</a></li>
            <li><a class="drop" href="https://mega.nz/folder/6dIgFJQI#0jvhkNiTwrgZkDwOrmGGaw">Gayaza HS</a></li>
            <li><a class="drop" href="https://mega.nz/folder/6NRGyTDA#ALlXnyZ8bfc-4JU_1AbV2Q">Mpoma Girls</a></li>
            <li><a class="drop" href="https://mega.nz/folder/TY5zDKhL#u5jdqZLVrIurFyfGqFz2dQ">Bishop SS Mukono</a></li>
            <li><a class="drop" href="#">National Holiday Work</a>
              <ul>
      
                <li><a href="content=id3233/National Holiday Work-20210903/S2 Material - Humanities 1.pdf">Material - Humanities 1</a></li>
                <li><a href="content=id3233/National Holiday Work-20210903/S2-Materials-SCIENCE (1).pdf">S2-Materials-SCIENCE (1)</a></li>
                <li><a href="content=id3233/National Holiday Work-20210903/Biology O level.pdf">Biology 0 level</a></li>
                <li><a href="content=id3233/National Holiday Work-20210903/English O level.pdf">English O level</a></li>
                
              </ul>
            </li>
            <li><a class="drop" href="https://mega.nz/folder/HQRHjAyB#_GkfjuwtFScbZ_HBs9kYVA">Other Sources</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Senior Three</a>
          <ul>
            <li><a class="drop" href="#">Smack Collection</a>
              <ul>
                
                <li><a href="content=id3233/SMACK-20210903/S3 Chemistry.pdf">Chemistry</a></li>
                <li><a href="content=id3233/SMACK-20210903/S3 History East Africa.pdf">History East Africa</a></li>
                <li><a href="content=id3233/SMACK-20210903/S3 Lit.pdf">Lit</a></li>
                <li><a href="content=id3233/SMACK-20210903/S3 Literature.pdf">Literature</a></li>
                <li><a href="content=id3233/SMACK-20210903/S3 Maths.pdf">Math</a></li>
                <li><a href="content=id3233/SMACK-20210903/S3 Physics.pdf">Physics</a></li>
                
              </ul>
            </li>
            <li><a class="drop" href="https://mega.nz/folder/WdRC3TjR#9U7H72xRN2z4kmmrSFhp5Q">Standard HS Zana</a></li>
            <li><a class="drop" href="https://mega.nz/folder/LZR2BD5D#4Bk2CcLDMiWcafmncN3I8g">Nabisunsa Girls</a></li>
            <li><a class="drop" href="https://mega.nz/folder/6YYyTZzY#PO8T9jj6y1aTT1FQXD-CMA">Mpoma Girls</a></li>
            <li><a class="drop" href="https://mega.nz/folder/HVQmUBwK#qI8mLM06VyF6BA6UXRXyIA">Gayaza HS</a></li>
            <li><a class="drop" href="https://mega.nz/folder/vBphkAxD#5bQqlLntFkujq2QtQKDhtA">Bishop SS Mukono</a></li>
            <li><a class="drop" href="#">National Holiday Work</a>
              <ul>
      
                <li><a href="content=id3233/National Holiday Work-20210903/S3-Materials-SCIENCE.pdf">Material Science</a></li>
                <li><a href="content=id3233/National Holiday Work-20210903/Biology O level.pdf">Biology 0 level</a></li>
                <li><a href="content=id3233/National Holiday Work-20210903/English O level.pdf">English O level</a></li>
                
              </ul>
            </li>
            <li><a class="drop" href="https://mega.nz/folder/6B41XYba#Mf0qrixMyYhqq4VsR6hajg">Other Sources 1</a></li>
            <li><a class="drop" href="https://mega.nz/folder/2AAxhCDC#eu_z8Z5ACggDCYEY1X6naA">Other Sources 2</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Senior Four</a>
          <ul>
            <li><a class="drop" href="#">Smack Collection</a>
              <ul>
          
                <li><a href="content=id3233/SMACK-20210903/S4 Biology.pdf">Biology</a></li>
                <li><a href="content=id3233/SMACK-20210903/S4 Chemistry.pdf">Chemistry</a></li>
                <li><a href="content=id3233/SMACK-20210903/S4 Commerce.pdf">Commerce</a></li>
                <li><a href="content=id3233/SMACK-20210903/S4 Computer Software.pdf">Computer Software</a></li>
                <li><a href="content=id3233/SMACK-20210903/S4 English.pdf">English</a></li>
                <li><a href="content=id3233/SMACK-20210903/S4 Geog 2.pdf">Geog 2</a></li>
                <li><a href="content=id3233/SMACK-20210903/S4 History.pdf">History</a></li>
                
              </ul>
            </li>
            <li><a class="drop" href="https://mega.nz/folder/rEIyDJjS#_KZ6LchF1yNtmU6Z3o7NHA">Standard HS Zana</a></li>
            <li><a class="drop" href="https://mega.nz/folder/7NAEyLwK#yLQmgB-Wq3pYsNwZAWkrhA">Nabisunsa Girls</a></li>
            <li><a class="drop" href="https://mega.nz/folder/3NQm0T5Q#K2cs-C4S9cHJrfP9fbgEOA">Mpoma Girls</a></li>
            <li><a class="drop" href="https://mega.nz/folder/XZAUzBKQ#0G9wrvo36oTIXijQtavnFA">Gayaza HS</a></li>
            <li><a class="drop" href="https://mega.nz/folder/fVA0BT6L#pee7eLYBdc-SpR9-8pDqnw">Bishop SS Mukono</a></li>
            <li><a class="drop" href="#">National Holiday Work</a>
              <ul>
      
                <li><a href="content=id3233/National Holiday Work-20210903/S4 Materials - Humanities 1.pdf">Materials - Humanities 1</a></li>
                <li><a href="content=id3233/National Holiday Work-20210903/S4 Materials SCIENCE.pdf">Materials-SCIENCE (1)</a></li>
                <li><a href="content=id3233/National Holiday Work-20210903/Biology O level.pdf">Biology 0 level</a></li>
                <li><a href="content=id3233/National Holiday Work-20210903/English O level.pdf">English O level</a></li>
                
              </ul>
            </li>
            <li><a class="drop" href="https://mega.nz/folder/6B41XYba#Mf0qrixMyYhqq4VsR6hajg">Other Sources 1</a></li>
            <li><a class="drop" href="https://mega.nz/folder/bAQBWADa#BQm81pkF1BgDYCuLVDOeoQ">Other Sources</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Senior Five</a>
          <ul>
            <li><a class="drop" href="#">Smack Collection</a>
              <ul>
                
               
                <li><a href="content=id3233/SMACK-20210903/S5 Geog 2.pdf">Geog 2</a></li>
                <li><a href="content=id3233/SMACK-20210903/S5 Geog1.pdf">Goeg 1</a></li>
                
              </ul>
            </li>
            <li><a class="drop" href="https://mega.nz/folder/LRhRiCSJ#eTHIxbzxSLivL5xS3Z_rCQ">Standard HS Zana</a></li>
            <li><a class="drop" href="https://mega.nz/folder/jYQ0nBKK#hMSnNj79PV136mnGYEKIlg">Nabisunsa Girls</a></li>
            <li><a class="drop" href="https://mega.nz/folder/uQY0ibJJ#FZD5UInexjzZFF-lRGOZUw">Mpoma Girls</a></li>
            <li><a class="drop" href="https://mega.nz/folder/DABWXbJD#zoF2U3kfH09Rt-lXXigVVA">Gayaza HS</a></li>
            <li><a class="drop" href="https://mega.nz/folder/PEYQSJjS#ydYSQ-ndhgRiW5QMl84Ysg">Bishop SS Mukono</a></li>
            <li><a class="drop" href="#">National Holiday Work</a>
              <ul>
      
                <li><a href="content=id3233/National Holiday Work-20210903/A level-Arts Materials 1.pdf">A level-Arts Materials 1</a></li>
              
              </ul>
            </li>
            <li><a class="drop" href="https://mega.nz/folder/eE5mmTYC#9YzqJfbSuNnla8tck9iJIQ">Other Sources 1</a></li>
            <li><a class="drop" href="https://mega.nz/folder/7J423KpS#W3HK8Ch3wUQ4d2ETbZ83kw">Other Sources 2</a></li>
          </ul>
        </li><li><a class="drop" href="#">Senior Six</a>
          <ul>
            <li><a class="drop" href="#">Smack Collection</a>
              <ul>
                <li><a href="content=id3233/SMACK-20210903/S6 Geog 2.pdf">Geog 2</a></li>
                <li><a href="content=id3233/SMACK-20210903/S6 Maths P1.pdf">Math P1</a></li>
                <li><a href="content=id3233/SMACK-20210903/S6 Maths P2.pdf">Math P2</a></li>
              </ul>
            </li>
            <li><a class="drop" href="https://mega.nz/folder/LRhRiCSJ#eTHIxbzxSLivL5xS3Z_rCQ">Standard HS Zana</a></li>
            <li><a class="drop" href="https://mega.nz/folder/WFZE0ZjR#kcKQl_e5Cv70IOhixsh3VQ">Nabisunsa Girls</a></li>
            <li><a class="drop" href="https://mega.nz/folder/aYRGhJoK#ldgO88KqLonjzAzQnqX59g">Mpoma Girls</a></li>
            <li><a class="drop" href="https://mega.nz/folder/mAJkxbAR#wnLHSjx2Oj_yeR6FWfky_w">Gayaza HS</a></li>
            <li><a class="drop" href="https://mega.nz/folder/DBBkyDZZ#xFLKYMa1vZya4--gcmfPKg">Bishop SS Mukono</a></li>
            <li><a class="drop" href="#">National Holiday Work</a>
              <ul>
      
                <li><a href="content=id3233/National Holiday Work-20210903/A level-Arts Materials 1.pdf">A level-Arts Materials 1</a></li>
              
              </ul>
            </li>
            <li><a class="drop" href="https://mega.nz/folder/eE5mmTYC#9YzqJfbSuNnla8tck9iJIQ">Other Sources 1</a></li>
            <li><a class="drop" href="https://mega.nz/folder/jRhwzQqK#diQ5hgc2tZYzJGn7PwmnYQ">Other Sources 2</a></li>
          </ul>
        </li>

<!--


        <li><a class="drop" href="#">Senior Two</a>
          <ul>
            <li><a class="drop" href="#">Luganda</a>
              <ul>
                
                <li><a href=" https://mega.nz/file/yNIA0ZiQ#lGLlwb3DRUsahPLvf85E2KlxNjoDmWy1VNAeHdfybTM ">Ebisoko</a></li>                    
              </ul>
            </li>
            <li><a class="drop" href="#">CRE Other Sources</a>
              <ul>
                <li><a href="https://mega.nz/folder/fEYTHQaR#kuvYBU2mhO2DJb1g7Ad22Q">Complete Other Sources CRE</a></li>
                
              </ul>  
            </li>  
            <li><a class="drop" href="#">ICT</a>
              <ul>
                
                <li><a href="https://mega.nz/folder/SJY20DKT#LcSAALegH7XFFkMUKA0Wqw">Download notes</a></li>
                <li><a href="https://mega.nz/file/OdxVkCRA#QTUODM3F7ZyohjFxJn5l0OzczIQ-mCiTYiVeHrFc6xU">Past papers- Uneb</a></li>
                <li><a href="https://mega.nz/file/ycpW2TTL#VzLcWVSqx6Cl8-flKF7H5QMLtX57yHL-Jx3hTZi8IKU">Revision Book</a></li>
                <li><a href="pages/UNEB COMPUTER PAST PAPERS.pdf">Read Uneb Past papers</a></li>
                <li><a href="pages/Students revision book-1.pdf">Revise now</a></li>
                
              </ul>
            </li>
            <li><a class="drop" href="https://mega.nz/folder/HQRHjAyB#_GkfjuwtFScbZ_HBs9kYVA">Other Notes</a></li>
           </ul> 
 
        </li>

        <li><a class="drop" href="#">Senior Three</a>
   
          <ul>
            <li><a href="https://mega.nz/folder/uZBWmRoY#ApGgvhDIqQavM-faHDbRnQ">Biology</a></li>  
            <li><a class="drop" href="#">CRE Notes</a>
              <ul>
                <li><a href="https://mega.nz/folder/fEYTHQaR#kuvYBU2mhO2DJb1g7Ad22Q">Complete notes CRE</a></li>
                <li><a href="#">Other Notes</a></li>
              </ul>  
            </li>  
           
            <li><a class="drop" href="#">Optionals</a>
              <ul>
                <li><a class="drop" href="#">ICT</a>
                  <ul>               
                    <li><a href="https://mega.nz/folder/SJY20DKT#LcSAALegH7XFFkMUKA0Wqw">Download notes</a></li>
                    <li><a href="https://mega.nz/file/OdxVkCRA#QTUODM3F7ZyohjFxJn5l0OzczIQ-mCiTYiVeHrFc6xU">Past papers- Uneb</a></li>
                    <li><a href="https://mega.nz/file/ycpW2TTL#VzLcWVSqx6Cl8-flKF7H5QMLtX57yHL-Jx3hTZi8IKU">Revision Book</a></li>
                    <li><a href="pages/UNEB COMPUTER PAST PAPERS.pdf">Read Uneb Past papers</a></li>
                    <li><a href="pages/Students revision book-1.pdf">Revise now</a></li>                    
                  </ul>
      
                </li>
                <li><a class="drop" href="#">Luganda</a>
                  <ul>
                    
                    <li><a href=" https://mega.nz/file/yNIA0ZiQ#lGLlwb3DRUsahPLvf85E2KlxNjoDmWy1VNAeHdfybTM ">Ebisoko</a></li>                    
                  </ul>
                </li>


              </ul>
              
            </li>
            
          </ul>
        </li>
        <li><a class="drop" href="#">Senior Four</a>
   
          <ul>
            <li><a href="https://mega.nz/folder/uZBWmRoY#ApGgvhDIqQavM-faHDbRnQ">Biology</a></li>  
            <li><a class="drop" href="#">CRE Notes</a>
              <ul>
                <li><a href="https://mega.nz/folder/fEYTHQaR#kuvYBU2mhO2DJb1g7Ad22Q">Complete notes CRE</a></li>
                <li><a href="#">Other Notes</a></li>
              </ul>  
            </li>  
           
            <li><a class="drop" href="#">Optionals</a>
              <ul>
                <li><a class="drop" href="#">ICT</a>
                  <ul>               
                    <li><a href="https://mega.nz/folder/SJY20DKT#LcSAALegH7XFFkMUKA0Wqw">Download notes</a></li>
                    <li><a href="https://mega.nz/file/OdxVkCRA#QTUODM3F7ZyohjFxJn5l0OzczIQ-mCiTYiVeHrFc6xU">Past papers- Uneb</a></li>
                    <li><a href="https://mega.nz/file/ycpW2TTL#VzLcWVSqx6Cl8-flKF7H5QMLtX57yHL-Jx3hTZi8IKU">Revision Book</a></li>
                    <li><a href="pages/UNEB COMPUTER PAST PAPERS.pdf">Read Uneb Past papers</a></li>
                    <li><a href="pages/Students revision book-1.pdf">Revise now</a></li>                    
                  </ul>
      
                </li>
                <li><a class="drop" href="#">Luganda</a>
                  <ul>
                    
                    <li><a href=" https://mega.nz/file/yNIA0ZiQ#lGLlwb3DRUsahPLvf85E2KlxNjoDmWy1VNAeHdfybTM ">Ebisoko</a></li>                    
                  </ul>
                </li>


              </ul>
              
            </li>
            
          </ul>
        </li>


        
        <li><a class="drop" href="#">Senior Five</a>
          <ul>
            <li><a href="https://mega.nz/file/eNwnxarD#DoE8-XNJaKfVxjhyZl0KT20TsOvy83siPQtKP2EZ6z8">A-level Luganda</a></li>
            <li><a href="https://mega.nz/folder/Kdgw0YZA#_6BYmMjDrUOiJHKKdTJb9A"> Other A-Level Material</a></li>
           
          </ul>
        </li>

        <li><a class="drop" href="#">Senior Six</a>
          <ul>
            <li><a href="https://mega.nz/file/eNwnxarD#DoE8-XNJaKfVxjhyZl0KT20TsOvy83siPQtKP2EZ6z8">A-level Luganda</a></li>
            <li><a href="https://mega.nz/folder/Kdgw0YZA#_6BYmMjDrUOiJHKKdTJb9A"> Other A-Level Material</a></li>
          </ul>    
        
          
        </li>

-->
       

        
      </ul>
      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>
<!--
<div class=" cent">
  <h3>ZOOM MEETING IDs & PASSCODES</h3>
</div>
<div class="container2">
	
	<div class="table ">
		<div class="table-header">
			<div class="header__item"><a  class="filter__link" ><b>Subject</b></a></div>
			<div class="header__item"><a  class="filter__link filter__link--number" ><b>Class Teacher</b></a></div>
			<div class="header__item"><a  class="filter__link filter__link--number" ><b>Zoom ID</b></a></div>
			<div class="header__item"><a  class="filter__link filter__link--number" ><b>Passcode</b></a></div>
			
		</div>
		<div class="table-content">	
			<div class="table-row">		
				<div class="table-data">Biology</div>
				<div class="table-data">Luyima Steven</div>
				<div class="table-data">987 753 6330</div>
				<div class="table-data">steven</div>
			</div>
			<div class="table-row">
				<div class="table-data">Computer</div>
				<div class="table-data">Ssembatya Shafic</div>
				<div class="table-data">206 506 2430</div>
				<div class="table-data">summit</div>
			</div>
			<div class="table-row">
				<div class="table-data">Luganda</div>
				<div class="table-data">Mwanje Alex Andrew</div>
				<div class="table-data">384 448 1887</div>
				<div class="table-data">DIAZ1995</div>
			</div>
			<div class="table-row">
				<div class="table-data">Mathematics</div>
				<div class="table-data">Natukunda Julius</div>
				<div class="table-data">206 506 2430</div>
				<div class="table-data">summit</div>
			</div>
      
		</div>	
	</div>
</div>

-->

<div class="wrapper">
  <div class="row6">
    
      <div class="fl_left">
        <h1>September - November Examinations</h1>
        <p>We shall have two sets running for one month as communicated earlier on</p>
        <!--<p>Download set one time table <a href="content=id3233/exams/HOTSS EXAMINATION PROGRAMME FOR S3.pdf">click to view</a></p>  -->
        <p>Assesment your self with set 1 exams<a href="content=id3233/exams/assessment set 1.pdf"> click to view</a></p>  
        <p>The links below are now expired because set one is done already, if you missed set one exams, contact admin to activate any desired exam</p>
      </div>
  </div>
  
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      <ul id="slide-tabs">
        <li><a onclick="exam()" href="">English 2</a></li><!--content=id3233/exams/ENGLISH.pdf-->
        <li><a onclick="exam()" href="#">Mathem</a></li><!--content=id3233/exams/MATH.pdf-->
        <li><a onclick="exam()" href="#">History iv</a></li><!--content=id3233/exams/HISTORY SOUTH AFRICA.pdf-->
        
      </ul>
    </div>
  </div>

  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      <ul id="slide-tabs">
        
        <li><a onclick="exam()" href="#">CRE</a></li><!--content=id3233/exams/CRE.pdf-->
        <li><a onclick="exam()" href="#">GEOGRAPHY I</a></li><!--content=id3233/exams/GEOG 1.pdf-->
        <li><a onclick="exam()" href="#">CHEMISTRY II</a></li><!--content=id3233/exams/CHEMISTRY.pdf-->
      </ul>
    </div>
  </div>
</div>





<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        <!-- Left Column -->
        <div class="one_quarter first"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li class="btmspace-15"><a ><em class="heading">From Mr.Shafic</em> </a>
              <p>We officially open for semester 2 in our online classes, you are all welcome please</p>
            </li>
            
            <li><a ><em class="heading">Mr.Luyima</em></a>
              <p>Welcome to semester two of online classes at holy trinity<!-- <a href="https://mega.nz/file/CII0DRYZ#0x0-3nRTaOWvPc9QtH293gM0ZQjFrLOhMR9xtnPIElE"> Download ICT exam</a></p> -->
            </li>
          </ul>
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Left Column --> 
        <!-- Middle Column -->
        <div class="one_half"> 
          <!-- ################################################################################################ -->
          <h2>Latest News &amp; Events</h2>
          <ul class="nospace listing">
            <li class="clear">
       
              <p class="nospace btmspace-15"><a >Hello S2s</a></p>
              <p>This is to inform all S2s that the platform is having all staff needed for home revision, so please exploit all the corners</a></p>
            </li>
           
              
              <p class="nospace btmspace-15"><a>Success everywhere.</a></p>
              <p>Holy trinity fraternity wishes you well in your online classes</p>
            </li>
          </ul>
          
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Middle Column --> 
        <!-- Right Column -->
        <div class="one_quarter sidebar"> 
          <ul class="nospace">
            <li class="btmspace-15"><a ><em class="heading">From Father Ssonko</em> </a>
              <p>When we embrace online classses then we ensure some part of success in our hearts, nothing strong like prospering in a situation where people dont expect prosperity,Long live the life in holy trinity </p>
            </li>
            
        </div>
        <!-- / Right Column --> 
      </div>     
      <div class="clear"></div>
    </main>
  </div>
</div>






<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        <!-- Left Column -->
        <div class="one_quarter first"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li class="btmspace-15"><a ><em class="heading">Holy Trinity</em> <img class="borderedbox" src="images/demo/trinity2.gif" alt=""></a><p>Current member of parliament addressing our students, just early this year</a></p></li>
            <li class="btmspace-15"><a ><em class="heading">Students</em> <img class="borderedbox" src="images/demo/students.gif" alt=""></a><p>Our students having a brief talk with some of their gardians</a></p></li>
            <li class="btmspace-15"><a ><em class="heading">Computer Lessons</em> <img class="borderedbox" src="images/demo/computer.gif" alt=""></a><p>Our students having computer practical lessons from our second hall</a></p></li>
            <li><a ><em class="heading">At the equator</em> <img class="borderedbox" src="images/demo/stud2.gif" alt=""></a></li>
          </ul>
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Left Column --> 
        <!-- Middle Column -->
        <div class="one_half"> 
          <!-- ################################################################################################ -->
          <h2> part of our Administrators &amp; Teaching Staff</h2>
          <ul class="nospace listing">
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/father.gif " alt=""></div>
              <p class="nospace btmspace-15"><a >Director.</a></p>
              <p>Father Ssonko - the director Holy Trinity Secondary School Nkozi</a></p>
            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/hm.gif" alt=""></div>
              <p class="nospace btmspace-15"><a >Headteacher</a></p>
              <p>Madam Nakiwala Teddy- the Headteacher Holy Trinity Secondary School Nkozi</p>
            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/deputy.gif" alt=""></div>
              <p class="nospace btmspace-15"><a >Deputy Headteacher</a></p>
              <p>Mwanje Alex Andrew - the Deputy Headteacher Holy Trinity Secondary School Nkozi</p>
            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/dos.gif" alt=""></div>
              <p class="nospace btmspace-15"><a >Mr.Zziwa Denis.</a></p>
              <p>Our Director of studies at Holy Trinity Secondary School Nkozi</p>
            </li>
          </ul>

          <!-- ################################################################################################ --> 
        </div>
        <!-- / Middle Column --> 
        <!-- Right Column -->
        <div class="one_quarter sidebar"> 
          <ul class="nospace">
            <li class="btmspace-15"><a ><em class="heading">Holy Trinity</em> <img class="borderedbox" src="images/demo/trinity.gif" alt=""></a><p>Holy trinity Secondary School part of our front view</a></p></li>
            <li class="btmspace-15"><a ><em class="heading">The hall</em> <img class="borderedbox" src="images/demo/hall.gif" alt=""></a><p>This is the students hall, we use it for differrent purposes like mass, academic assemblies and more. </a></p></li>
            <li class="btmspace-15"><a ><em class="heading">Classes and labs</em> <img class="borderedbox" src="images/demo/labs.gif" alt=""></a><p>Hallo, these are some of our classes and the labs</a></p></li>
            <li><a ><em class="heading">The conducive green</em> <img class="borderedbox" src="images/demo/green.gif" alt=""></a></li>
          </ul>
        </div>
        <!-- / Right Column --> 
      </div>
      
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      <div class="group">
        <h2>Quickly Find Whatever You Are Looking For</h2>
        <div class="one_quarter first"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><a href="https://mega.nz/folder/SJY20DKT#LcSAALegH7XFFkMUKA0Wqw">Complete 0 and A Level ICT</a></li>
            <li><a href="https://mega.nz/folder/zNxh3QxB#xknRRx0o31J-2knaoPv27g">S1 Bishop SS Mukono</a></li>
            <li><a href="https://mega.nz/folder/DMImVDwC#httMhlUiTttRQl2D650GXA">S1 Mpoma Girls</a></li>
            <li><a href="https://mega.nz/folder/PcAkGZTA#0XcTjTTtHaLa60hYMGvOfg">S1 Nabisunsa Girls</a></li>
            <li><a href="https://mega.nz/folder/LERSRZpC#a9UM8W0huc8ufnOdMLN2xQ">S1 Standard HS Zana</a></li>
            <li><a href="https://mega.nz/folder/6dIgFJQI#0jvhkNiTwrgZkDwOrmGGaw">S2 Gayaza HS</a></li>
            <li><a href="https://mega.nz/folder/OVYURZKL#04wdIh7HbLqSlf9T4S6S7g">S2 Nabisunsa Girls</a></li>
            <li><a href="https://mega.nz/folder/yJQyEThT#6WIXNMPyB3897j_gt5eVYQ">S2 Standard HS Zana</a></li>
            <li><a href="https://mega.nz/folder/6NRGyTDA#ALlXnyZ8bfc-4JU_1AbV2Q">S2 Mpoma Girls</a></li>
            <li><a href="https://mega.nz/folder/TY5zDKhL#u5jdqZLVrIurFyfGqFz2dQ">S2 Bishop SS Mukono</a></li>
            <li><a href="https://mega.nz/folder/WdRC3TjR#9U7H72xRN2z4kmmrSFhp5Q">S3 Standard HS Zana</a></li>
            <li><a href="https://mega.nz/folder/LZR2BD5D#4Bk2CcLDMiWcafmncN3I8g">S3 Nabisunsa Girls</a></li>
            <li><a href="https://mega.nz/folder/6YYyTZzY#PO8T9jj6y1aTT1FQXD-CMA">S3 Mpoma Girls</a></li>
            <li><a href="https://mega.nz/folder/HVQmUBwK#qI8mLM06VyF6BA6UXRXyIA">S3 Gayaza HS</a></li>
            <li><a href="https://mega.nz/folder/vBphkAxD#5bQqlLntFkujq2QtQKDhtA">S3 Bishop SS Mukono</a></li>
          </ul>
          <!-- ################################################################################################ --> 
        </div>
        <div class="one_quarter"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><a href="https://mega.nz/folder/rEIyDJjS#_KZ6LchF1yNtmU6Z3o7NHA">S4 Standard HS Zana</a></li>
            <li><a href="https://mega.nz/folder/7NAEyLwK#yLQmgB-Wq3pYsNwZAWkrhA">S4 Nabisunsa Girls</a></li>
            <li><a href="https://mega.nz/folder/3NQm0T5Q#K2cs-C4S9cHJrfP9fbgEOA">S4 Mpoma Girls</a></li>
            <li><a href="https://mega.nz/folder/XZAUzBKQ#0G9wrvo36oTIXijQtavnFA">S4 Gayaza HS</a></li>
            <li><a href="https://mega.nz/folder/fVA0BT6L#pee7eLYBdc-SpR9-8pDqnw">S4 Bishop SS Mukono</a></li>
            <li><a href="https://mega.nz/folder/LRhRiCSJ#eTHIxbzxSLivL5xS3Z_rCQ">S5 Standard HS Zana</a></li>
            <li><a href="https://mega.nz/folder/jYQ0nBKK#hMSnNj79PV136mnGYEKIlg">S5 Nabisunsa Girls</a></li>
            <li><a href="https://mega.nz/folder/uQY0ibJJ#FZD5UInexjzZFF-lRGOZUw">S5 Mpoma Girls</a></li>
            <li><a href="https://mega.nz/folder/DABWXbJD#zoF2U3kfH09Rt-lXXigVVA">S5 Gayaza HS</a></li>
            <li><a href="https://mega.nz/folder/PEYQSJjS#ydYSQ-ndhgRiW5QMl84Ysg">S5 Bishop SS Mukono</a></li>
            <li><a href="https://mega.nz/folder/LRhRiCSJ#eTHIxbzxSLivL5xS3Z_rCQ">S6 Standard HS Zana</a></li>
            <li><a href="https://mega.nz/folder/WFZE0ZjR#kcKQl_e5Cv70IOhixsh3VQ">S6 Nabisunsa Girls</a></li>
            <li><a href="https://mega.nz/folder/aYRGhJoK#ldgO88KqLonjzAzQnqX59g">S6 Mpoma Girls</a></li>
            <li><a href="https://mega.nz/folder/mAJkxbAR#wnLHSjx2Oj_yeR6FWfky_w">S6 Gayaza HS</a></li>
            <li><a href="https://mega.nz/folder/DBBkyDZZ#xFLKYMa1vZya4--gcmfPKg">S6 Bishop SS Mukono</a></li>
            
            
          </ul>
          <!-- ################################################################################################ --> 
        </div>
        <div class="one_quarter"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><a href="https://mega.nz/folder/nBpgFCBK#yUKIkuUOSZFRp-o3noKYhA">O-Level Geography</a></li>
            <li><a href="https://mega.nz/folder/TQpl2KxD#y1hnyEOM1fY1MXwXk_kK9A">O-Level Chemistry</a></li>
            <li><a href="https://mega.nz/folder/Kdgw0YZA#_6BYmMjDrUOiJHKKdTJb9A">A-Level Material</a></li>
            <li><a href="https://mega.nz/folder/CAZF1IrK#-SuMRKHmgDSqGJaw_teGuw">O-Level Physics</a></li>
            <li><a href="https://mega.nz/folder/SJY20DKT#LcSAALegH7XFFkMUKA0Wqw">O-Level Computer notes</a></li>
            <li><a href="https://mega.nz/folder/SJY20DKT#LcSAALegH7XFFkMUKA0Wqw">O-Level Computer notes</a></li>
            <li><a href="https://mega.nz/folder/DRpBSKbL#nR324vfp9f3e2KwvGDk7fw">UNEB Biology past papers</a></li>
            <li><a href="https://mega.nz/folder/qMoXlQqD#scpGYK5xkyH2g7IxAdcDaA">UNEB Chemistry past papers</a></li>
            <li><a href="https://mega.nz/folder/fEQyEJSJ#hfFaIP_C9WdkyC_2iWlkow">Smack collection S1 - S6</a></li>
            <li><a href="https://mega.nz/folder/PFAWVRRS#VJY5fWMwIf5LIEffcS3oPQ">National Holiday Work</a></li>
            <li><a href="https://mega.nz/folder/WVImHJ5J#XfDhQSZe0Fz7nWGo9NjdMA">NCDC Notes</a></li>
            <li><a href="https://mega.nz/folder/rFhXBaiY#bqq6WhkyCNlE0KAD3QRxDg">S1 Other Sources</a></li>
            <li><a href="https://mega.nz/folder/HQRHjAyB#_GkfjuwtFScbZ_HBs9kYVA">S2 Other Sources</a></li>
            <li><a href="https://mega.nz/folder/2AAxhCDC#eu_z8Z5ACggDCYEY1X6naA">Senior Three Other Sources</a></li>
            <li><a href="https://mega.nz/folder/bAQBWADa#BQm81pkF1BgDYCuLVDOeoQ">Senior Four Other Sources</a></li>
          </ul>
          <!-- ####################  ############################################################################ --> 
        </div>
        <div class="one_quarter"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            
            
            
            <li><a href="https://mega.nz/file/yFonDaRD#QpYcveOiR5_1bQ88Kqd2r7K0PeL4m00_XdWviUGNENA">UNEB 2016 report on all subjects and collection</a></li>
            
            <li><a href="https://mega.nz/folder/TVIziA6D#cySALTGlhRxPWaELTEbrfA">UNEB english past papers</a></li>
            <li><a href="https://mega.nz/folder/bJBnGIIB#G2r4H2f6zogUys2swxSxag">UNEB Geography past papers</a></li>
            <li><a href="https://mega.nz/folder/iQIn0C5C#sloPd2h7Un4F2onhFiRtRg">UNEB History past papers</a></li>
            <li><a href="https://mega.nz/folder/DIYVWSBS#_lVRPQ2FI8xP4fXJFrLyqA">UNEB Mathematics past papers</a></li>
            <li><a href="https://mega.nz/folder/HZQliAbL#6flwao39tI5tA_Z4E43-Ow">UNEB Economics past papers</a></li>
            <li><a href="https://mega.nz/folder/CQgFEaKA#kywBp7wk9V9VFp1FhisavA">UNEB Commerce past papers</a></li>
          </ul>
          <!-- ################################################################################################ --> 
        </div>
      </div>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_third first">
        <address>
          Holy Trinity Secondary School Nkozi<br>
          Address Line 1 - Administration<br>
          Uganda/Mpigi<br>
          Nkozi/Kawango<br>
          <br>
          <i class="fa fa-phone pright-10"></i> +256 703 309 253<br>
          <i class="fa fa-envelope-o pright-10"></i> <a href="mailto:holytrinity453@gmail.com">holytrinity453@gmail.com</a>
          </address>
      </div>
      <div class="one_third">
        <address>
        Holy Trinity Secondary School Nkozi<br>
        Address Line 2 - ICT Department<br>
        Uganda/Mpigi<br>
        Nkozi/Kawango<br>
        <br>
        <i class="fa fa-phone pright-10"></i> +256 757 839 407<br>
        <i class="fa fa-envelope-o pright-10"></i> <a href="mailto:summitsmith842@gmail.com">summitsmith842@gmail.com</a>
        </address>
      </div>
      <div class="one_third">
        <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
        <ul class="faico clear">
          <li><a class="faicon-twitter" href="https://www.twitter.com/Summit Ficland"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-linkedin" href="https://www.linkedin.com/in/summittechworld"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-facebook" href="https://m.facebook.com/ssembatya.shafic"><i class="fa fa-facebook"></i></a></li>
          
        </ul>
        <p class="nospace btmspace-10">Thanks for taking part in the E-Learning with Holy Trinity Nkozi</p>
      </div>
      <!-- ################################################################################################ --> 
    </footer>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; <a href="https://resumeshafic.netlify.app/">Ssembatya Shafic</a> 2021 - All Rights Reserved - Holy Trinity Kawango </p>
    
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
<script type="text/javascript">
  (function () {
      var options = {
          whatsapp: "+256757839407", 
          call_to_action: "Quickly Message ICT Teacher(Mr.Shafic)", 
          position: "right",
      };
      var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
      s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
      var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
  })();
</script>
<script>
  function exam(){
    alert('Hey there, this exam is protected because some students arent done doing it yet,to access it contact IT admin via the whatsapp button on this page to make it available for your user ID, Thanks');
  }
</script>
</body>
</html>
