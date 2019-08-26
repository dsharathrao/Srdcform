  
    <html>
<head>
<title>Online Survay</title>
<link rel="stylesheet" href="css/styles.css">
<link href="css/menu1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/extra.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/responsiveslides.css">
<link rel="stylesheet" href="css/bootstrap1.css">
<script src="js/menu.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
</head>
<body>

	<div class="wrap">
	  <div class="main">
	  <style>
.table_brd { border:1px solid #eee; }
.table_brd td{ border:1px solid #eee; padding:5px; }
.table_brd td input { padding:5px 8px; border:1px solid #888; border-radius:5px; width:250px;  line-height:20px; }
.table_brd td select { padding:5px 8px; border:1px solid #888; border-radius:5px; width:250px;  line-height:20px; }
</style>
<script type="text/javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

</script> 

<div class="logo" align="center" style="width:100%">
				<a href="index.php"><img src="images/srdclogo.jpg" width="98%" alt=""> </a>
			</div><br>
<center><h2 style='color:green; font-weight:bold; font-size:26px;'>Online Student Satisfaction Survey</h2> <br>
  
    <section class="welcome-section">

            <div class="col-sm-12 col-xs-12" align="center">      

                <div class="col-md-12 grid1 ">
          <h4> Student Satisfaction  <span class="design1"> Survey </span></h4>
          <p align="left">Name of the College:  <strong>Sri Ramakrishna Degreee College</strong> </p>
          <p align="left">Place:  Nandyal </p>
          <p align="left">AISHE CODE: </p>

          <hr id="line">
          <form action="____________" method="post" enctype="multipart/form-data">
          <table width="90%">
            <tbody><tr style="padding: 10px">
              <td>Lecturer Name 
              </td>
              <td>
                <input type="text" name="Lecturer" class="form-control">
              </td>
              <td> Academic Year
              </td>
              <td>
                <select name="ayear" class="form-control">
                  
                  <option value="2018-2019">2018-2019</option>
                  <option value="2019-2020">2019-2020</option>
                  <option value="2020-2021">2020-2021</option>
                  <option value="2021-2022">2021-2022</option>
                  <option value="2022-2023">2022-2023</option>
                  <option value="2023-2024">2023-2024</option>
                  <option value="2024-2025">2024-2025</option>
                  
                </select>
              </td>
              <td>
                Course
              </td>
              <td>
                <select name="Course" class="form-control">
                  <option value="B.A">B.A</option>
                  <option value="B.Com">B.Com</option>
                  <option value="B.Sc">B.Sc</option>
                </select>
              </td>
              
            </tr>
            <tr style="padding: 10px">
              
              <td>
                Group
              </td>
              <td>
                <input type="text" name="cgroup" class="form-control">
              </td>
              <td>
                Semester
              </td>
              <td>
                <select name="Semester" class="form-control">
                  <option value="I">I</option>
                  <option value="II">II</option>
                  <option value="III">III</option>
                  <option value="IV">IV</option>
                  <option value="V">V</option>
                  <option value="VI">VI</option>
                </select>
              </td>
              <td>
                Subject/Paper
              </td>
              <td>
                <input type="date" name="fdate"> 
              </td>
            </tr>
          </tbody></table>
            <hr id="line">
          <h4 style="color: red" align="left">Instructions to fill the questionnaire:</h4>
          <ol style="text-align: left">
            <li>All questions should be compulsorily attempted. </li>
            <li>Each question has five responses, choose the most appropriate one. </li>
            <li>The response to the qualitative question no. 21 is an opportunity to give suggestions or improvements(Kindly restrict your response to teaching learning process only).</li>
          </ol>

          <hr id="line">
          <table border="1" width="90%">
            <tbody><tr style="padding: 5px">
              <th>
                S.No.
              </th>
              <th style="padding: 10px;text-align: center;width: 35%">
                Item
              </th>
              <th style="padding: 10px;text-align: center;" colspan="5">
                Your Response

              </th>
              
            </tr>
            <tr>
              <td>
                01
              </td>
              <td style="padding: 5px;text-align: left;">
                How much of the syllabus was covered by the teacher? 
              </td>
              <td>
                <input type="radio" name="sn01" value="A" required> 85 to 100% 
              </td>
              <td>
                <input type="radio" name="sn01" value="B"> 70 to 84%
              </td>
              <td>
                <input type="radio" name="sn01" value="C"> 55 to 69% 
              </td>
              <td>
                <input type="radio" name="sn01" value="D"> 30 to 54% 
              </td>
              
              <td>
                <input type="radio" name="sn01" value="E"> Below 30%
              </td>
            </tr>
            <tr>
              <td>
                02
              </td>
              <td style="padding: 5px;text-align: left;">
                How well did your teacher prepare for the classes? 
              </td>
              <td>
                <input type="radio" name="sn02" value="A" required> Thoroughly 
              </td>
              <td>
                <input type="radio" name="sn02" value="B"> Satisfactorily 
              </td>
              <td>
                <input type="radio" name="sn02" value="C"> Poorly
              </td>
              <td>
                <input type="radio" name="sn02" value="D"> Indifferently
              </td>
              
              <td>
                <input type="radio" name="sn02" value="E"> Won’t teach at all
              </td>
            </tr>
            <tr>
              <td>
                03
              </td>
              <td style="padding: 5px;text-align: left;">
                How well is the teacher able to communicate? 
              </td>
              <td>
                <input type="radio" name="sn03" value="A" required> Always effective 
              </td>
              <td>
                <input type="radio" name="sn03" value="B"> Sometimes effective 
              </td>
              <td>
                <input type="radio" name="sn03" value="C"> Just satisfactorily
              </td>
              <td>
                <input type="radio" name="sn03" value="D"> Generally ineffective
              </td>
              <td>
                <input type="radio" name="sn03" value="E"> Very poor communication
              </td>
            </tr>
            <tr>
              <td>
                04
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher’s approach to teaching can best be described as 
              </td>
              <td>
                <input type="radio" name="sn04" value="A" required> Excellent
              </td>
              <td>
                <input type="radio" name="sn04" value="B"> Very good 
              </td>
              <td>
                <input type="radio" name="sn04" value="C"> Good
              </td>
              <td>
                <input type="radio" name="sn04" value="D"> Fair
              </td>
              
              <td>
                <input type="radio" name="sn04" value="E"> Poor
              </td>
            </tr>
            <tr>
              <td>
                05
              </td>
              <td style="padding: 5px;text-align: left;">
                Fairness of the internal evaluation process by the teacher
              </td>
              <td>
                <input type="radio" name="sn05" value="A" required> Always fair
              </td>
              <td>
                <input type="radio" name="sn05" value="B"> Usually fair
              </td>
              <td>
                <input type="radio" name="sn05" value="C"> Sometimes unfair
              </td>
              <td>
                <input type="radio" name="sn05" value="D"> Usually unfair
              </td>
              
              <td>
                <input type="radio" name="sn05" value="E"> Unfair
              </td>
            </tr>
            <tr>
              <td>
                06
              </td>
              <td style="padding: 5px;text-align: left;">
                 Was your performance in assignments discussed with you?
              </td>
              <td>
                <input type="radio" name="sn06" value="A" required>  Every time

              </td>
              <td>
                <input type="radio" name="sn06" value="B"> Usually
              </td>
              <td>
                <input type="radio" name="sn06" value="C"> Occasionally/Sometimes
              </td>
              <td>
                <input type="radio" name="sn06" value="D"> Rarely
              </td>
              
              <td>
                <input type="radio" name="sn06" value="E"> Never
              </td>
            </tr>
            <tr>
              <td>
                07
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher takes active interest in arranging field visits for students.
              </td>
              <td>
                <input type="radio" name="sn07" value="A" required> Regularly
              </td>
              <td>
                <input type="radio" name="sn07" value="B">Often
              </td>
              <td>
                <input type="radio" name="sn07" value="C">Sometimes
              </td>
              <td>
                <input type="radio" name="sn07" value="D">Rarely
              </td>
              
              <td>
                <input type="radio" name="sn07" value="E">Never
              </td>
            </tr>
            <tr>
              <td>
                08
              </td>
              <td style="padding: 5px;text-align: left;">
                The teaching process in the class room facilitates you in cognitive, social and emotional growth.
              </td>
              <td>
                <input type="radio" name="sn08" value="A" required> Significantly
              </td>
              <td>
                <input type="radio" name="sn08" value="B"> Very well
              </td>
              <td>
                <input type="radio" name="sn08" value="C"> Moderately
              </td>
              <td>
                <input type="radio" name="sn08" value="D"> Marginally
              </td>
              
              <td>
                <input type="radio" name="sn08" value="E"> Not at all
              </td>
            </tr>
            <tr>
              <td>
                09
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher provides multiple opportunities to learn and grow.
              </td>
              <td>
                <input type="radio" name="sn09" value="A" required> Strongly agree
              </td>
              <td>
                <input type="radio" name="sn09" value="B"> Agree
              </td>
              <td>
                <input type="radio" name="sn09" value="C"> Neutral
              </td>
              <td>
                <input type="radio" name="sn09" value="D"> Disagree
              </td>
              
              <td>
                <input type="radio" name="sn09" value="E"> Strongly disagree
              </td>
            </tr>
            <tr>
              <td>
                10
              </td>
              <td style="padding: 5px;text-align: left;">
                
                The teacher informs you about your expected competencies, course outcomes and programme outcomes.
              </td>
              <td>
                <input type="radio" name="sn10" value="A" required>  Every time
              </td>
              <td>
                <input type="radio" name="sn10" value="B"> Usually
              </td>
              <td>
                <input type="radio" name="sn10" value="C"> Occasionally/Sometimes
              </td>
              <td>
                <input type="radio" name="sn10" value="D"> Rarely
              </td>
              
              <td>
                <input type="radio" name="sn10" value="E"> Never
              </td>
            </tr>
            <tr>
              <td>
                11
              </td>
              <td style="padding: 5px;text-align: left;">
                Your teacher does a necessary follow-up with an assigned task to you.

              </td>
              <td>
                <input type="radio" name="sn11" value="A" required> Every time
              </td>
              <td>
                <input type="radio" name="sn11" value="B"> Usually
              </td>
              <td>
                <input type="radio" name="sn11" value="C"> Occasionally/Sometimes
              </td>
              <td>
                <input type="radio" name="sn11" value="D"> Rarely
              </td>
              
              <td>
                <input type="radio" name="sn11" value="E"> Never
              </td>
            </tr>
            <tr>
              <td>
                12
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher illustrates the concepts through examples and applications.

              </td>
              <td>
                <input type="radio" name="sn12" value="A" required> Every time
              </td>
              <td>
                <input type="radio" name="sn12" value="B"> Usually
              </td>
              <td>
                <input type="radio" name="sn12" value="C"> Occasionally/Sometimes
              </td>
              <td>
                <input type="radio" name="sn12" value="D"> Rarely
              </td>
              
              <td>
                <input type="radio" name="sn12" value="E"> Never
              </td>
            </tr>
            <tr>
              <td>
                13
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher identifies your strengths and encourage you with providing right level of challenges.
              </td>
              <td>
                <input type="radio" name="sn13" value="A" required> Fully
              </td>
              <td>
                <input type="radio" name="sn13" value="B"> Reasonably
              </td>
              <td>
                <input type="radio" name="sn13" value="C"> Partially
              </td>
              <td>
                <input type="radio" name="sn13" value="D"> Slightly
              </td>
              
              <td>
                <input type="radio" name="sn13" value="E"> Unable to
              </td>
            </tr>
            <tr>
              <td>
                14
              </td>
              <td style="padding: 5px;text-align: left;">
               Teacher is able to identify your weaknesses and help you to overcome them.
              </td>
              <td>

                <input type="radio" name="sn14" value="A" required> Every time

              </td>
              <td>
                <input type="radio" name="sn14" value="B"> Usually
              </td>
              <td>
                <input type="radio" name="sn14" value="C"> Occasionally/Sometimes
              </td>
              <td>
                <input type="radio" name="sn14" value="D"> Rarely
              </td>
              
              <td>
                <input type="radio" name="sn14" value="E"> Never
              </td>
            </tr>
            <tr>
              <td>
                15
              </td>
              <td style="padding: 5px;text-align: left;">
               The teacher makes effort to engage students in the monitoring, review and continuous quality improvement of the teaching learning process.
              </td>
              <td>
                <input type="radio" name="sn15" value="A" required> Strongly agree
              </td>
              <td>
                <input type="radio" name="sn15" value="B"> Agree
              </td>
              <td>
                <input type="radio" name="sn15" value="C"> Neutral
              </td>
              <td>
                <input type="radio" name="sn15" value="D"> Disagree
              </td>
              <td>
                <input type="radio" name="sn15" value="E"> Strongly disagree
              </td>
            </tr>
            <tr>
              <td>
                16
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher uses the student centric methods, such as experiential learning, participative learning and problem solving for enhancing learning experiences.
              </td>
              <td>
                <input type="radio" name="sn16" value="A" required> To a great extent
              </td>
              <td>
                <input type="radio" name="sn16" value="B"> Moderate
              </td>
              <td>
                <input type="radio" name="sn16" value="C"> Some what
              </td>
              <td>
                <input type="radio" name="sn16" value="D">Very little
              </td>
              
              <td>
                <input type="radio" name="sn16" value="E"> Not at all
              </td>
            </tr>
            <tr>
              <td>
                17
              </td>
              <td style="padding: 5px;text-align: left;">
                The teacher encourages you to participate in extracurricular activities.
              </td>
              <td>
                <input type="radio" name="sn17" value="A" required> Strongly agree
              </td>
              <td>
                <input type="radio" name="sn17" value="B"> Agree
              </td>
              <td>
                <input type="radio" name="sn17" value="C"> Neutral
              </td>
              <td>
                <input type="radio" name="sn17" value="D"> Disagree
              </td>
              
              <td>
                <input type="radio" name="sn17" value="E"> Strongly disagree
              </td>
            </tr>
            <tr>
              <td>
                18
              </td>
              <td style="padding: 5px;text-align: left;">
                Efforts are made by the teacher to inculcate soft skills, life skills and employability skills to make you ready for the world of work.
              </td>
              <td>
                <input type="radio" name="sn18" value="A" required> To a great extent
              </td>
              <td>
                <input type="radio" name="sn18" value="B"> Moderate
              </td>
              <td>
                <input type="radio" name="sn18" value="C"> Some what
              </td>
              <td>
                <input type="radio" name="sn18" value="D"> Very little
              </td>
              
              <td>
                <input type="radio" name="sn18" value="E"> Not at all
              </td>
            </tr>
            <tr>
              <td>
                19
              </td>
              <td style="padding: 5px;text-align: left;">
               The teacher uses ICT tools such as LCD projector, Multimedia, etc. while teaching.

              </td>
              <td>
                <input type="radio" name="sn19" value="A" required>Below 29%
              </td>
              <td>
                <input type="radio" name="sn19" value="B">30 – 49%
              </td>
              <td>
                <input type="radio" name="sn19" value="C">50 – 69%
              </td>
              <td>
                <input type="radio" name="sn19" value="D">70 – 89%
              </td>
              
              <td>
                <input type="radio" name="sn19" value="E"> Above 90%


              </td>
            </tr>
            <tr>
              <td>
                20
              </td>
              <td style="padding: 5px;text-align: left;">
                The overall quality of teaching-learning process in the class is very good.
              </td>
              <td>
                <input type="radio" name="sn20" value="A" required>Strongly agree
              </td>
              <td>
                <input type="radio" name="sn20" value="B"> Agree
              </td>
              <td>
                <input type="radio" name="sn20" value="C"> Neutral
              </td>
              <td>
                <input type="radio" name="sn20" value="D"> Disagree
              </td>
              <td>
                <input type="radio" name="sn20" value="E"> Strongly disagree
              </td>
            </tr>
            <tr><td>21</td><td> Give three observations/suggestions to improve the overall teaching – learning experience in the class with reference to the teacher.</td><td colspan="5"><textarea name="suggestions" cols="80" class="form-control"></textarea></td></tr>

          </tbody></table>
          
          <br>
          <input type="submit" name="Submit" value="Submit" class="btn btn-primary"></h4>
          <br>
          
        </form>

        </div>
      </div>

            </section></div>
             <div class="col-sm-3 col-xs-12">
            <br>
        
            
          <div class="row clearfix"> </div>
            
        </div
