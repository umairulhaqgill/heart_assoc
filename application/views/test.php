<!DOCTYPE html>
<html>
<head>
  <title>Application</title> 
  <script type="text/javascript">
    function printDiv(divName) 
    {
        
      window.print();

    }
  </script>
</head>
<body>
   <input type="button" onclick="printDiv('print')" value="Print"/>
   <div id="print">
  <h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
  <h3 style="text-align: center;">DRIVER'S APPLICATION FOR EMPLOYMENT</h3>
  <div style=" margin-left:10px;">
  <b>Applicant name (first middle last)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->first_name.' '.$result[0]->middle_name.' '.$result[0]->last_name; ?></u></b><br>
  <b> Date of application:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->application_date; ?></u>
  </b><br>
  <b>Cell Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->cell_phone; ?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->home_phone; ?></u></b><br>
</div>
  <p style="border: 2px solid;">In compliance with Federal and State equal employment opportunity laws, qualified applicants are considered for all positions without regard to race, color, religion, sex, national origin, age, marital status, veteran status, non-job related disability, or any other protected group status.</p>
<div style="border: 2px solid;">
  <h3 style="text-align: center;">TO BE READ AND SIGNED BY APPLICANT</h3>
  <p style="margin-left: 15px;">
    I authorize Paragon Freight Inc to make such investigations and inquiries of my personal, employment, financial or medical history and other related matters as may be necessary in arriving at an employment decision.<br><br>  (Generally, inquiries regarding medical history will be made only if and alter a conditional offer of employment has been extended.)<br>  I hereby release employers, schools, health care providers and other persons from all liability in responding to inquiries and releasing information in connection with myl application.<br>  In the event of employment, I understand that false or misleading information given in my application or interview(s) may result in discharge.<br>  I understand, also, that I am required to abide by all rules and regulations of the Company.<br>  I understand that information provide regarding current and/or previous employers may be used, and those employer(s) will be contacted, for the purpose of investigating my safety performance history as required by 49 CFR 391.23(d) and (e). I understand that I have the right to:<br>  
    .Review information provided by previous employers;<br>  
    .Have errors in the information corrected by previous employers and for those previous employers to re-send the corrected information to the prospective employer; and <br>  
    .Have a rebuttal statement attached to the alleged erroneous information, if the previous employer(s) and I cannot agree on the accuracy of the information. 
  </p>
  <h5 style="margin-left: 50px;">Applicants signature:<br><br>_X__________________________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-75px; ">Date:<br><br><u><?php echo $result[0]->applicant_sign_date; ?></u></h5>
</div><br> 
<div  style="border: 2px solid;">
  <h3 style="text-align: center; border: 2px solid; margin-top: -3px;">FOR PARAGON FREIGHT INC USE ONLY</h3>
  <p style="text-align: center; border: 1px solid; margin-top: -20px;">APPLICANTS DO NOT WRITE UNDER THIS LINE </p>
  
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->recommend_for_hire == '1'?"checked":""); ?>>
  <label>Recommended for hire</label>

  <p> Date employed &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->date_employed; ?></u></p>
  <p> Classification &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>____CMV DRIVER OVER THE ROAD_____________________</u></p>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->rejected == '1'?"checked":""); ?>>
  <label>Rejected</label>
  <p> Rejection Reason &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->reject_reason; ?></u></p>
  <p>Signature of interviewing officer:&nbsp;&nbsp;_________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->Interv_officer_sign_date; ?></u></p>
  <p>Interviewing officer printed name:
   &nbsp;__NIKOLA TRAJKOVIC_______________________</p>
   <h4 style="border: 1px solid;">TERMINATION OF EMPLOYMENT</h4>
   <p> Termination date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->termination_date; ?></u></p>
   <p> Termination reason &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->termination_reason; ?></u></p>
   <p> Supervisor's signature &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; ______________________________________________________</p>
   <p> Supervisor's printed name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<u><?php echo $result[0]->supervisor_name; ?></u></p>
</div>  
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 1 of 17</h3>

<P style="page-break-before: always"></P>

<!-- page 1 end -->

<!-- page 2 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
  <h4>Position(s) applied for:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->position_applied_for; ?></u></h4>
  <h4>Name (first/last/middle) :&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->name_first.' '.$result[0]->name_middle.' '.$result[0]->name_last; ?></u></h4>
  <h4>Date of birth :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->dob; ?></u></h4>
  <h4>Social security number :&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->social_security_number; ?></u></h4>
  <h4>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->gender; ?></u></h4>  
  <div style=" border: 2px solid; float: right;margin-top:-190px; margin-right:5px;">
  <h3 style="border: 1px solid; margin-top: -2px;">EMERGENCY CONTACT INFO:</h3>
  <P>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->emergency_phone; ?></u></P>
  <P>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->emergency_per_name; ?></u></P>
  <P>Relation:&nbsp;&nbsp;<u><?php echo $result[0]->emergaency_pers_relation; ?></u></P>
</div>
<hr>
<div>
  <table style=" border-collapse: collapse;" width="100%;" border="1">
  <thead >
    <tr>
      <th colspan="2">Current drivers license information</th>
      <th>Endorsements </th>
      <th>Restrictions </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Driver license number</td>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><?php echo $result[0]->c_driv_license_endorsements; ?></td>
      <td><?php echo $result[0]->c_driv_license_restrictions; ?></td>
    </tr>
    <tr>
      <td>Driver license issuing state</td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><?php echo $result[0]->driv_license_issu_state_endorsements; ?></td>
      <td><?php echo $result[0]->driv_license_issu_state_restriction; ?></td>
      
    </tr>
    <tr>
      <td>Driver license type</td>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><?php echo $result[0]->driv_license_type_endorsements; ?></td>
      <td><?php echo $result[0]->driv_license_type_restrictions; ?></td>
    </tr> 
    <tr>
      <td>Driver license class </td>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><?php echo $result[0]->driv_license_class_endorsements; ?></td>
      <td><?php echo $result[0]->driv_license_class_restrictions; ?></td>
    </tr> 
    <tr>
      <td>Driver license expiration date </td>
       <td><?php echo $result[0]->driv_license_expiry_date; ?></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</div><hr>
<div>
  <p> Current street address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->street_address; ?></u></p>
  <p> City, state zip: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->city.' '.$result[0]->state_zip; ?></u></p>
  <p> Previous address:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->previous_address; ?></u><br><small>(if less than 3 years on current)</small></p>
  <p> Mailing address:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->mailing_address; ?></u><br><small>(if different than current)</small></p>
</div><hr>
<div>
  <label>Do you have legal right to work in the United States?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->legal_right_in_us == '1'?"checked":""); ?>> Yes
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->legal_right_in_us == '0'?"checked":""); ?>> NO <br><br>
  <label for="check">Have You worked for this company before?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->work_for_comp_befor == '1'?"checked":""); ?>> Yes
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->work_for_comp_befor == '0'?"checked":""); ?>> NO
  <p>If answered <b>YES</b> to previous question please, provide following information:</p>
  <p>Where:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->where_job; ?></u></p>
  <p> Dates: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->from; ?></u>&nbsp;&nbsp;To:&nbsp;&nbsp;<u><?php echo $result[0]->to; ?></u>&nbsp;&nbsp;Rate Of Pay:&nbsp;&nbsp;<u><?php echo $result[0]->rate_of_pay; ?></u></p>
  <p>Position held:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->position_held; ?></u></p>
  <p>Reason for leaving:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->reason_for_leaving; ?></u></p>
  <label>Are You now employed? </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->employed_now == '1'?"checked":""); ?>> Yes
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->employed_now == '0'?"checked":""); ?>> NO
  <p>IF <b>NO</b> how long since leaving last employment?:&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->last_employme_period; ?></u></p>
  <p>Who referred You? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->reference; ?></u></p>
  <label>Have you ever been bonded?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->ever_employed == '1'?"checked":""); ?>> Yes
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->ever_employed == '0'?"checked":""); ?>> NO
  <p> If <b>YES</b> please, provide the name of bonding company:&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->employment_company; ?></u></p>
  <label>Have you ever been convicted for a felony?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->convicted_for_felony == '1'?"checked":""); ?>> Yes
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->convicted_for_felony == '0'?"checked":""); ?>> NO<br>
  <small>(Conviction of a crime is not an automatic bar to employment - all circumstances will be considered.) </small> <br>
  <strong>If YES, please, explain</strong> <br>
  <textarea rows="6" cols="100">
<?php echo $result[0]->explain_falcony; ?></textarea>
</div>

  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 2 of 17</h3>

<P style="page-break-before: always"></P>

<!-- page 2 end -->

<!-- page 3 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
<div>
  <strong>EMPLOYMENT HISTORY</strong>
  <p>Please, provide all required information <strong>COMPLETELY</strong>. The United States Department of Transportation requires that the driver applicants show all employment for past <strong>3(three) years.</strong> Effective July 1, 1987, <strong>they must also show commercial driver employment for the 7(seven) years preceding this 3(three) year period. FMCSR 391.21(b)(10)(11).</strong></p>
</div><hr>

  <?php 
    $i=1;
    foreach ($result[0]->employment_history as $row) { 
      if ($i==1) {
        $record = 'First';
      }elseif ($i==2) {
        $record = 'Second';
      }elseif ($i==3) {
        $record = 'Third';
      }elseif ($i==4) {
        $record = 'Forth';
      }elseif ($i==5) {
        $record = 'Fifth';
      }elseif ($i==6) {
        $record = 'Sixth';
      }elseif ($i==7) {
        $record = 'Seventh';
      }elseif ($i==8) {
        $record = 'Eighth';
      }elseif ($i==9) {
        $record = 'Nine';
      }elseif ($i==10) {
        $record = 'Ten';
      }

  ?>

<div style="border : 0.3px solid; ">
  <p><strong><?php echo $record; ?></strong> previous company name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $row->company_name; ?></u></p>
  <p>Company address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $row->company_address; ?></u></p>
  <p>City, state zip code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $row->city.' '.$row->stat_zip_code; ?></u></p>
  <p>Phone / Fax number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $row->phone; ?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $row->fax; ?></u></p>
  <p>Contact / supervisor name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $row->contact_no.'/'.$row->supervisor_name; ?></u></p>
  <p>Employment period :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $row->employment_from; ?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $row->employment_to; ?></u></p>
  <p>Position Held:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $row->position_held; ?></u></p>
  <p>Reason for leaving:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $row->reason_for_leaving; ?></u></p>
  <label>Were you subject to the FMCSRs while employed?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($row->subject_to_FMCSRs == '1'?"checked":""); ?>> Yes
  <input type="checkbox" name="checkbox" <?php echo ($row->subject_to_FMCSRs == '0'?"checked":""); ?>> NO<br>
  <label>Was it DOT regulated job, subject to the D&A testing requirements of 49 CFR part 40? 
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($row->DOT_regulated_job == '1'?"checked":""); ?>> Yes
  <input type="checkbox" name="checkbox" <?php echo ($row->DOT_regulated_job == '0'?"checked":""); ?>> NO
</div>
<?php 
$i++; 
}

?>
  <br>
  <small>(IF THERE IS MORE THAN EIGHT PREVIOUS EMPLOYERS USE SEPARATE SHEET OF PAPER)</small>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 4 of 17</h3>

  <P style="page-break-before: always"></P>

<!-- page 4 end -->

<!-- page 5 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
<div>
  <strong>ACCIDENT RECORD</strong> FOR PAST 3 YEARS OR MORE <small>(attach sheet if more space is needed)</small><br>
  <label>Do you have legal right to work in the United States?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->accident_pass_lst_3y == '1'?"checked":""); ?>>
<table style=" border-collapse: collapse;" width="100%;" border="1">
  <thead>
    <tr  >
      <th style="width: 8%;">&nbsp;</th>
      <th style="width: 3%;">Date</th>
      <th style="width: 15%;">Accident description</th>
      <th style="width: 4%;">Fatalities</th>
      <th style="width: 4%;">Injuries</th>
      <th style="width: 4%;">HM accid</th>
      <th style="width: 3%;">Tow</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
      $i=1;
      foreach ($result[0]->accident_record as $row) { 
        if ($i==1) {
          $record = 'First';
        }elseif ($i==2) {
          $record = 'Second';
        }elseif ($i==3) {
          $record = 'Third';
        }elseif ($i==4) {
          $record = 'Forth';
        }elseif ($i==5) {
          $record = 'Fifth';
        }
      ?>

      <td><b><?php echo $record; ?></b> accident</td>
      <td><?php echo $row->accident_date; ?></td>
      <td><?php echo $row->accident_description; ?></td>
      <td><?php echo $row->fatalities; ?></td>
      <td><?php echo $row->injuries; ?></td>
      <td><?php echo $row->HMaccid; ?></td>
      <td><?php echo $row->TOW; ?></td>
    </tr>
    
      <?php 
      $i++; 
      }

      ?>
    </tr>
  </tbody>
</table>

<strong>TRAFFIC CONVICTIONS</strong> AND FORFEITURES FOR THE PAST 3 YEARS <small>(other than parking violations)</small><br>
  <label>Check here if no convictions past 3 years</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->traffic_convict_last_3y == '1'?"checked":""); ?>>
<table style=" border-collapse: collapse;" width="100%;" border="1">
  <thead >
    <tr>
      <th style="width: 8%;">&nbsp;</th>
      <th style="width: 7%;">Location <small>(city, state)</small> </th>
      <th style="width: 3%;">Date </th>
      <th style="width: 5%;">Violation </th>
      <th style="width: 5%;">Penalty </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
      $i=1;
      foreach ($result[0]->traffic_convictions as $row) { 
        if ($i==1) {
          $record = 'First';
        }elseif ($i==2) {
          $record = 'Second';
        }elseif ($i==3) {
          $record = 'Third';
        }elseif ($i==4) {
          $record = 'Forth';
        }elseif ($i==5) {
          $record = 'Fifth';
        }
      ?>
      <td><b><?php echo $record; ?></b> previous conviction</td>
      <td><?php echo $row->traffic_conviction_location; ?></td>
      <td><?php echo $row->traffic_conviction_date; ?></td>
      <td><?php echo $row->traffic_conviction_violation; ?></td>
      <td><?php echo $row->traffic_conviction_penalty; ?></td>
    </tr>
      <?php 
      $i++; 
      }

      ?>
    </tr>
  </tbody>
</table>
<strong>DRIVING QUALIFICATIONS</strong>- LIST ALL DRIVERS LICENSES (OTHER THAN CURRENT) AND PERMITS HELD IN PAST 3 YEARS
<table style=" border-collapse: collapse;" width="100%;" border="1">
  <thead >
    <tr>
      <th style="width: 9.3%;">&nbsp;</th>
      <th style="width: 3%;">State </th>
      <th style="width: 8%;">DL number</th>
      <th style="width: 5%;">Type</th>
      <th style="width: 5%;">Class</th>
      <th style="width: 4%;">Expiration date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
      $i=1;
      foreach ($result[0]->driving_qualification as $row) { 
        if ($i==1) {
          $record = 'First';
        }elseif ($i==2) {
          $record = 'Second';
        }elseif ($i==3) {
          $record = 'Third';
        }elseif ($i==4) {
          $record = 'Forth';
        }elseif ($i==5) {
          $record = 'Fifth';
        }
      ?>
      <td><b><?php echo $record; ?></b> previous DL or permit</td>
      <td><?php echo $row->state; ?></td>
      <td><?php echo $row->DL_number; ?></td>
      <td><?php echo $row->type; ?></td>
      <td><?php echo $row->class; ?></td>
      <td><?php echo $row->expiry_date; ?></td>
    </tr>
      <?php 
      $i++; 
      }

      ?>
    </tr>
  </tbody>
</table>
<label>Have you ever been denied a license, permit or privilege to operate a motor vehicle?  
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->denied_a_license == '1'?"checked":""); ?>> Yes
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->denied_a_license == '0'?"checked":""); ?>> NO<br>
  <label>Has any license, permit or privilege ever been suspended or revoked? 
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->license_suspended == '1'?"checked":""); ?>> Yes
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->license_suspended == '0'?"checked":""); ?>> NO <br>
  If any of last two questions answered YES, please explain: <br>
  <textarea rows="1" cols="100">&<?php echo $result[0]->why_susupended; ?>;</textarea> <br>
  <strong>DRIVING EXPERIENCE </strong>
<table style=" border-collapse: collapse;" width="100%;" border="1">
  <thead >
    <tr>
      <th>Equipment class </th>
      <th>Equipment type </th>
      <th>From </th>
      <th>To </th>
      <th>Approx. no. of miles</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
      foreach ($result[0]->driving_experience as $row) { ?>

      <td><?php echo $row->equipment_class; ?></td>
      <td><?php echo $row->equipment_type; ?></td>
      <td><?php echo $row->from_date; ?></td>
      <td><?php echo $row->to_date; ?></td>
      <td><?php echo $row->approx_no_of_miles; ?></td>
    </tr>
      <?php
      }

      ?>
    </tr> 
  </tbody>
</table> <br>
<strong>OTHER EXPERIENCE AND QUALIFICATIONS </strong>
  <p>List states or regions operated in last 5 (five) years&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->states_operated_last_5year; ?></u></p>
  <p>List special courses or trainings you have that will help you as a driver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->special_courses; ?></u></p>
  <p>List any safe driving awards you hold and from whom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->safe_driving_award; ?></u></p>
  <p>List special equipment or technical materials you can work with&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->technical_materials_you_work; ?></u></p>
  <b>EDUCATION LEVEL</b>
  <p>Highest grade completed &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->highest_grade; ?></u></p>
  <p>Last school attended &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->last_school; ?></u></p>
  <p>Last school city, state &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->last_school_city.' , '.$result[0]->last_school_state; ?></u></p>
  <p style="border: 0.3px solid;"> <b>I hereby certify that information in this application was completely provided by me, and that all entries on it and information in it are true and complete to the best of my knowledge.</b></p>
  <h5 style="margin-left: 50px;">Applicant's name<br><br><u><?php echo $result[0]->applicant_name; ?></u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Applicant's signature <br><br> _X__________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->applicant_sign_date_5; ?></u></h5>
</div>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 5 of 17</h3>

  <P style="page-break-before: always"></P>

<!-- page 5 end -->

<!-- page 6 start -->
<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
<div>
  <p style="text-align: center;">Motor vehicle driver's</p>
  <p style="text-align: center;"><strong>CERTIFICATE OF COMPLIANCE WITH DRIVER LICENSE REQUIREMENTS</strong></p>
  
  <p style="border: 0.3px solid;">MOTOR CARRIER INSTRUCTIONS: The requirements in Part 383 apply to every driver who operates in intrastate, interstate, or foreign commerce and operates a vehicle weighing 26,001 pounds or more, can transport more than 15 people, or transports hazardous materials that require placarding.<br><br> 
  The requirements in Part 391 apply to every driver who operates in interstate commerce and operates a vehicle weighing 10,001 pounds or more, can transport more than 15 people, or transports hazardous materials that require placarding.<br><br> 
  DRIVER REQUIREMENTS: Parts 383 and 391 of the Federal Motor Carrier Safety Regulations contain some requirements that you as a driver must comply with. These requirements are in effect as of July 1, 1987. They are as follows: 
  </p>

  <p style="border: 0.3px solid;"> 1) POSSESS ONLY ONE LICENSE:<br><br>  
  You, as a commercial vehicle driver, may not possess more than one motor vehicle operator's license.<br> If you have more than one license, keep the license from your state of residence and return the additional licenses to the states that issued them. <b>DESTROYING</b> a license does not close the record in the state that issued it; you must notify the state. If a multiple license has been lost, stolen, or destroyed, close your record by notifying the state of issuance that you no longer want to be licensed by that state. 
  </p>
</div>
<div style="margin-left: 70px;">
  <h3>I hereby certify that I have read and understood above requirement.</h3>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->understood_requirement == '1'?"checked":""); ?>>  <b>YES -</b> 
  <label> I agree with above requirement. </label> <br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->understood_requirement == '0'?"checked":""); ?>>  <b>NO -</b> 
  <label> I do not agree with above requirement.</label>
</div>
<div>
  <p>The following license is the only one I will posses:</p>
  <p>Drivers license number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->driver_license_no; ?></u>&nbsp;&nbsp;State&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->state; ?></u>Exp.date<u><?php echo $result[0]->expiry_date; ?></u></p>

  <p style="border: 0.3px solid;"> 2) NOTIFICATION OF LICENSE SUSPENSION, REVOCATION OR CANCELLATION: <br><br>
  Sections 391 .15(b)(2) and 383.33 of the Federal Motor Carrier Safety Regulations require that you notify your employer the NEXT BUSINESS DAY of any revocation or suspension of your driver's license. In addition, Section 383.31 requires that any time you violate a state or local traffic law (other than parking), you must report it within 30 days to: 1) your employing motor carrier, and 2) the state that issued your license (If the violation occurs in a state other than the one which issued your license). The notification to both the employer and state must be in writing. 
  </p>
</div>
<div style="margin-left: 70px;">
  <h3>I hereby certify that I have read and understood above requirement.</h3>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->understood_requirement_2 == '1'?"checked":""); ?>>  <b>YES -</b> 
  <label> I agree with above requirement. </label> <br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->understood_requirement_2 == '0'?"checked":""); ?>>  <b>NO -</b>
  <label> I do not agree with above requirement.</label>
</div><br>
<div>
  <h5 style="margin-left: 50px;">Applicant's name<br><br><u><?php echo $result[0]->applican_name; ?></u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Applicant's signature <br><br> _X__________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->signature_date; ?></u></h5>

</div>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 6 of 17</h3>

  <P style="page-break-before: always"></P>

<!-- page 6 end -->

<!-- page 7 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
<div>
  <p style="text-align: center;"><strong>CONSENT FORM PRE - EMPLOYMENT URINALYSIS </strong></p>
  
  <p style="border: 0.3px solid;">| understand that as required by the Federal Motor Carrier Safety Regulations Title 49 United States Code of Federal Regulations Section 391,103, and company policy, all prospective drivers must submit to a controlled substances test.<br><br> 
  A urine sample will be collected and tested for controlled substances.<br><br> 
  I also understand that if test positive for use of controlled substances, I am not medically qualified to operate a commercial motor vehicle. <br><br>
  The results of the drug test will be maintained by the Medical Review Officer or the company who will report whether the test results were negative or positive to the motor carrier. The results will not be released to any additional parties without my written authorization.  
  </p>
</div>
<div style="margin-left: 70px;">
  <h3>I hereby certify that I have read and understood above requirement.</h3>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->understood_requirement_7 == '1'?"checked":""); ?>>  <b>YES -</b>
  <label> I agree with above requirement. </label> <br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->understood_requirement_7 == '0'?"checked":""); ?>>  <b>NO -</b>
  <label> I do not agree with above requirement.</label>
</div><br>
<div>
  <h5 style="margin-left: 50px;">Applicant's name<br><br><u><?php echo $result[0]->applicantss_name; ?></u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Applicant's signature <br><br> _X__________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->aplicants_sign_date; ?></u></h5>

</div>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 7 of 17</h3>

  <P style="page-break-before: always"></P>

<!-- page 7 end -->

<!-- page 8 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
<div>
  <p style="text-align: center;"><strong>CERTIFICATION OF RECEIPT AND UNDERSTANDING OF AND CONSENT TO COMPLY WITH THE COMPANY SUBSTANCE ABUSE PROGRAM 
</strong></p>
  
  <p style="border: 0.3px solid;">The Company is vitally concerned with those situations where the use of illegal drugs or the illegal use of legal drugs, and the misuse of alcohol can seriously interfere with an individuals health end job performance and The Company's business operations, and is a hazard to the safety and welfare of other employees or the public at large. <br><br>
  The Company has established a Substance Abuse Program for the purpose of maintaining a drug and alcohol free work place, in accordance with Federal Regulations and Company Policy. <br><br>
  All existing covered persons and new applicants for covered positions must be drug and alcohol free in accordance with DOT Regulations and The Company Substance Abuse Program. <br><br>
  I hereby authorize The Company to obtain my DOT drug and alcohol test results from my past employers to the previous two (2) years, in accordance with the Federal Regulations and understand that those test results will be kept strictly confidential. <br><br>
  I understand The Company has designated a third party to act as its "Designated Agent" for the purpose of receiving and processing individual drug and alcohol test results administered to its employees and job applicants. <br><br>
  I hereby authorize The Company's "Designated Agent" to receive my drug and alcohol test results direct from The Company's drug testing laboratories and alcohol testing facilities, and to process and report such test results to The Company in a confidential manner.
  </p>
</div>
<div style="margin-left: 70px;">
  <h3>I hereby certify that </h3>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->receive_copy_CSAP == '1'?"checked":""); ?>>
  <label> I have received a copy of The Company Substance Abuse Program.</label> <br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->understand_its_content == '1'?"checked":""); ?>>
  <label> I have read and understand its contents.</label><br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->drug_free == '1'?"checked":""); ?>>
  <label> I understand that I must be drug and alcohol free as a condition of employment. 
</label>
</div><br>
<div>
  <h5 style="margin-left: 50px;">Applicant's name<br><br><u><?php echo $result[0]->aplicant; ?></u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Applicant's signature <br><br> _X__________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->aplicant_date; ?></u></h5>

  <h5 style="margin-left: 45px;">Company's representative printed name<br><br> __NIKOLA TRAJKOVIC______</h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Company's representative signature<br><br> _X__________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->representa_sign_date; ?></u></h5>

</div>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 8 of 17</h3>

  <P style="page-break-before: always"></P>


<!-- page 8 end -->

<!-- page 9 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
<div>
  <p style="text-align: center;"><strong>FAIR CREDIT REPORTING ACT DISCLOSURE STATEMENT</strong></p>
  
  <p style="border: 0.3px solid;">In accordance with the provisions of Section 604(b)(2)(A) of the Fair Credit Reporting Act, Public Law 91-508, as amended by the Consumer Credit Reporting Act of 1996 (Title II, Subtitle D, Chapter J. of Public Law 104-208), you are being inforn reports verifying your previous employment, previous drug and alcohol test results, and your driving record may be obtained on you for employment purposes. <br><br>
  These reports are required by Sections 382.413, 391.23, and 391.25 of the Federal Motor Carrier Safety Regulations.
  </p>
</div>
<div style="margin-left: 70px;">
  <h3>I hereby certify that </h3>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->understood_FCADS == '1'?"checked":""); ?>>
  <label>I have read and understand contents of Fair Credit Act Disclosure Statement</label> <br>
</div><br>
<div>
  <h5 style="margin-left: 50px;">Applicant's name<br><br><u><?php echo $result[0]->applicant_name_9; ?></u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Applicant's signature <br><br> _X__________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->applican_sign_date; ?></u></h5>

</div>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 9 of 17</h3>

  <P style="page-break-before: always"></P>


<!-- page 9 end -->

<!-- page 10 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
<div>
  <p style="text-align: center;"><strong>PREVIOUS PRE-EMPLOYMENT APPLICANT'S DRUG AND ALCOHOL TESTING STATEMENT</strong></p>
  
  <p style="border: 0.3px solid;">Sec. 40.25() As the employer, you must also ask the employee whether he or she has tested positive, or refused to test, on any pre-employment drug or alcohol test administered by an employer to which the employee applied for, but did not obtain, safety sensitive transportation work covered by DOT agency, drug and alcohol testing rules during the past two years. If the employee admits that he or she had a positive test or refusal to test, you must not use the employee to perform safety-sensitive functions for you, until and unless the employee documents successful completion of the return-to-duty process. (see Sec. 40.25(b)(5) and (e)). 
  </p>
</div>
  <p>Have you ever been tested positive or refused to be tested on any pre-employment drug test in which you were not hired during the past two years?</p>
<div style="margin-left: 70px;">
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->first_checkbox_10 == '1'?"checked":""); ?>><b> YES</b> <br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->first_checkbox_10 == '0'?"checked":""); ?>><b> NO</b>
</div><br>
  <p>If you answered YES, can you provide or obtain on our request proof that you have successfully completed the DOT return-to-duty requirements?</p>
<div style="margin-left: 70px;">
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->second_checkbox_10 == '1'?"checked":""); ?>><b> YES</b><br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->second_checkbox_10 == '0'?"checked":""); ?>><b> NO</b><br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->second_checkbox_10 == '2'?"checked":""); ?>><b> N/A</b>
</div><br>
<div>
  <h5 style="margin-left: 50px;">Applicant's name<br><br><u><?php echo $result[0]->applicat_name_10; ?></u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Applicant's signature <br><br> _X__________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->applicat_sign_date_10; ?></u></h5>
</div>
<h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 10 of 17</h3>

  <P style="page-break-before: always"></P>

<!-- page 10 end -->

<!-- page 11 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
<div>
  <h3 style="text-align: center;">REQUEST FOR CHECK OF DRIVING RECORD</h3><br>

  <p>To: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b>MVR Online</b> __________________</u></p>
  <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________</p>
  <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________</p>
  <strong>Dear sir/madam, has made application with PARAGON FREIGHT INC for the position of . In accordance with Section 391.23, Federal Department of Transportation Regulations, please furnish the undersigned with the applicant's driving record for the past three years. Thank You! 
  </strong>
</div>
<div>
  <p>Applicant name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->applicant_name_11; ?></u></p>
  <p>Address  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<u><?php echo $result[0]->address_11; ?></u></p>
  <p>City, state, zip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->city_11.','.$result[0]->state_11.','.$result[0]->zip_11; ?></u></p>
  <p>Date of birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->dob_11; ?></u></p>
  <p>Social sec. number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->social_sec_no; ?></u></p>
  <p>DL number, state&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->dl_no.','.$result[0]->state_11_2; ?></u></p><br>

  <p>Drivers release: </p>
  <p style="border: 0.3px solid;">I hereby authorize 'MVR ONLINE' to release my driving record information to PARAGON FREIGHT INC for purpose of investigation as required by Sections 391.23 and 391.25 of the Federal Motor Carrier Safely Regulations. You are released from any and all liability which may result from furnishing such information. </p>
  <h5 style=" margin-left:30px; ">Applicant's signature <br><br> _X_________________________________________________</h5>
  <h5 style="float: right; margin-right: 30px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->date_11; ?></u></h5>

  <strong>PARAGON FREIGHT INC statemet:</strong>
  <p style="border: 0.3px solid;">In accordance with the provisions of Sections 604 and 607 of the Fair Credit Reporting Act, Public Law 91-508, as amended by the Consumer Credit Reporting Act of 1996 (Title II, Subtitle D, Chapter 1, of Public Law 104-208), I hereby <br>certify the following:<br> 1. The consumer (applicant) has authorized in writing the procurement of this report;<br> 2. The consumer (applicant) has been informed in a separate written disclosure that a consumer report may be obtained for employment
  purposes;<br> 3. The information requested below will be used for a "permissible purpose" (i.e., information for employment purposes) and will be used for no
  other purpose;<br> 4. The information being obtained will not be used in violation of any federal or state equal opportunity law or regulation; and 5. Before taking an adverse action based in whole or in part on the report the consumer (applicant) will receive a copy of the requested report 
  and the summary of consumer rights as provided with the report by the consumer reporting agency. <br>I also hereby certify that this report request and the above applicant's release notice meet the definition of "permissible uses" of state motor vehicle records under the provisions of the Driver's Privacy Protection Act of 1994 (Public Law 103-322, Title XXX, Section 300002(a)). 
  </p>
</div>
<div>
  
  <h5 style="margin-left: 30px;">Requested by - printed name<br><br><u>__NIKOLA TRAJKOVIC__________</u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Signature<br><br> _X_____________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->requester_sign_date_11; ?></u></h5>

</div>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 11 of 17</h3>

  <P style="page-break-before: always"></P>

<!-- page 11 end -->

<!-- page 12 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
<div>
  <p style="text-align: center;"><strong>DRIVERS STATEMENT OF ON-DUTY HOURS</strong></p>
  
  <p style="border: 0.3px solid;">INSTRUCTIONS: Motor carriers when using a driver for the first time shall obtain from the driver a signed statement giving the total time on-duty during the immediately preceding 7 days and time at which such driver was last relieved from duty prior to beginning work for such carrier. Rule 395.8(1)(2) Federal Motor Carrier Safety Regulations. NOTE: Hours for any compensated work during the preceding 7 days, including work for a non-motor carrier entity, must be recorded on this form.</p>
</div>
<div>
  <p>Applicant name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo 
  $result[0]->applicant_name_12; ?></u></p>
  <p>Address  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<u><?php echo $result[0]->address_12; ?></u></p>
  <p>City, state, zip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <u><?php echo $result[0]->city_12.','.$result[0]->state_12.','.$result[0]->zip_code_12; ?></u></p>
  <p>Date of birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->dob_12; ?></u></p>
  <p>Social sec. number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->social_sec_no_12;?></u></p>
  <p>CDL number, state&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <u><?php echo $result[0]->cdl_number_12.','.$result[0]->cdl_state_12; ?></u></p>
  <p>CDL class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->cdl_class_12; ?></u></p>
  <p>CDL exp. Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <u><?php echo $result[0]->cdl_expire_date_12; ?></u></p>

<table style=" border-collapse: collapse;" width="90%" ; border="1">
    <tr>
      <th style="text-align: left;" width= "20%">DAY </th>
      <?php foreach ($result[0]->driver_work_hours_per_day as $row) { ?>

          <td width= "10%"><?php echo $row->day; ?></td>

      <?php } ?>
    </tr>

    <tr>
      <th style="text-align: left;" width= "20%">DATE</th>
      <?php foreach ($result[0]->driver_work_hours_per_day as $row) { ?>

      <td><?php echo $row->date; ?></td>

      <?php } ?>
    </tr>

    <tr>
      <th style="text-align: left;" width= "20%">HOURS WORKED </th>
      <?php 
          $var = 0;
          foreach ($result[0]->driver_work_hours_per_day as $row) {
          $var += $row->work_hours; ?>

          <td><?php echo $row->work_hours; ?></td>

      <?php }  ?>
    </tr>
</table><p style="float: right; margin-top: -40px; margin-right: 50px;"> Total:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $var; ?></p>
<br>
</div>
  <strong>I hereby certify that the information given above is correct to the best of my knowledge and belief, and that I was last relieved from work at:</strong>

<div>
  
  <h5 style="margin-left: 30px;">Date<br><br><u><?php echo $result[0]->date_12; ?></u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px;">Time<br><br><u><?php echo $result[0]->time; ?></u></h5>

</div>
<div>
  
  <h5 style="margin-left: 30px;">Applicant's printed name<br><br><u><?php echo $result[0]->applicant_print_name_12; ?></u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Applicant's signature <br><br> _X_____________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->applicant_sign_date_12; ?></u></h5>

</div>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 12 of 17</h3>

  <P style="page-break-before: always"></P>
<!-- page 12 end -->

<!-- page 13 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
<div>
  <p style="text-align: center;"><strong>DRIVER CERTIFICATION FOR OTHER COMPENSATED WORK </strong></p>
  
  <p style="border: 0.3px solid;">INSTRUCTIONS: When employed by a motor carrier, a driver must report to the carrier all on-duty time including lime working for other employers. The definition of on-duty time found in Section 395.2 paragraphs (8) and (9) of the Federal Motor Carrier Safely Regulations includes time performing any other work in the capacity of, or in the employ or service of, a common, contractor private motor carrier, also performing any compensated work for any non motor carrier entity.</p>
</div>

<label>Are you currently working for another employer?</label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->currently_working == '1'?"checked":""); ?>><b> YES</b>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->currently_working == '0'?"checked":""); ?>><b> NO</b> <br>
  <label>At this time do you intend to work for another employer while employed by this company?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->work_for_another_13 == '1'?"checked":""); ?>><b> YES</b>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->work_for_another_13 == '0'?"checked":""); ?>><b> NO</b><br><br>

  <input type="checkbox" name="checkbox" <?php echo ($result[0]->all_info_true_13 == '1'?"checked":""); ?>>
  <p style="border: 0.2px solid; margin-left: 40px; margin-top: -16px;"><strong>I hereby certify that the information given above is true and I understand that once I become employed with this company, if I begin working for any additional employer(s) for compensation that I must inform this company immediately of such employment activity</strong></p>
<div>
  <h5 style="margin-left: 30px;">Applicant's printed name <br><br><u><?php echo $result[0]->applicant_name_13; ?></u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Applicant's signature <br><br> _X________________________</h5>
  <h5 style="float: right; margin-right: 30px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->applicant_sign_date_13; ?></u></h5>

  <h5 style="margin-left: 30px;">Company representative<br><br> __NIKOLA TRAJKOVIC__</h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">signature<br><br> ___________________________</h5>
  <h5 style="float: right; margin-right: 30px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->representer_sign_date_13; ?></u></h5>

</div>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 13 of 17</h3>

  <P style="page-break-before: always"></P>

<!-- page 13 end -->

<!-- page 14 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
  <h2 style="text-align: center;">RECORD OF ROAD TEST</h2>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->operator_license_box_14 == '1'?"checked":""); ?>>
  <p style="border: 0.2px solid; margin-left: 40px; margin-top: -16px;">This applicant has presented an operator's license which PARAGON FREIGHT INC has accepted as equivalent to the road test in accordance with $391.33. FMCSR.</p>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->road_test_box == '1'?"checked":""); ?>>
  <p style="border: 0.2px solid; margin-left: 40px; margin-top: -16px;">This applicant has successfully completed a road test and has been issued a certificate of driver's road test in accordance with $391.31 (a) FMCSR</p>

<div>
  <p>Date of road test &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->road_test_date; ?></u></p>
  <p>Applicant name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->applicant_name_14; ?></u></p>
  <p>Address  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<u><?php echo $result[0]->applicant_address_14; ?></u></p>
  <p>DL number,state  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->DL_number.' , '.$result[0]->state_14; ?></u></p>
  <p>DL type,class &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->DL_type.' , '.$result[0]->DL_class; ?></u></p>
  <p>DL exp.Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->DL_expiry_date; ?></u></p>
  <p>Power unit driven &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->power_unit_driven; ?></u></p>
  <p>Towed unit driven &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->towed_unit_driven; ?></u></p>
</div><br>

<label><strong>PART 1 - PRE-TRIP INSPECTION AND EMERGENCY EQUIPMENT</strong></label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="pass" <?php echo ($result[0]->part1 == '1'?"checked":""); ?>> Pass
  <input type="checkbox" name="fail" <?php echo ($result[0]->part1 == '0'?"checked":""); ?>> Fail <br>
  <label><strong> PART 2 - COUPLING AND UNCOUPLING PART</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="pass" <?php echo ($result[0]->part2 == '1'?"checked":""); ?>> Pass
  <input type="checkbox" name="fail" <?php echo ($result[0]->part2 == '0'?"checked":""); ?>> Fail <br><br>
  <label><strong>PART 3 - PLACING VEHICLE IN MOTION AND USE OF CONTROLS</strong></label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="pass" <?php echo ($result[0]->part3 == '1'?"checked":""); ?>> Pass
  <input type="checkbox" name="fail" <?php echo ($result[0]->part3 == '0'?"checked":""); ?>> Fail <br>
  <label><strong>PART 4 - BACKING AND PARKING PART</strong></label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="pass" <?php echo ($result[0]->part4 == '1'?"checked":""); ?>> Pass
  <input type="checkbox" name="fail" <?php echo ($result[0]->part4 == '0'?"checked":""); ?>> Fail <br>
  <label><strong>PART 5 - SLOWING AND STOPPING</strong></label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="pass" <?php echo ($result[0]->part5 == '1'?"checked":""); ?>> Pass
  <input type="checkbox" name="fail" <?php echo ($result[0]->part5 == '0'?"checked":""); ?>> Fail <br>
  <label><strong>PART 6 - OPERATING IN TRAFFIC PASSING AND TURNING</strong></label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="pass" <?php echo ($result[0]->part6 == '1'?"checked":""); ?>> Pass
  <input type="checkbox" name="fail" <?php echo ($result[0]->part6 == '0'?"checked":""); ?>> Fail <br>
  <label><strong>PART 7 - MISCELLANEOUS</strong></label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="pass" <?php echo ($result[0]->part7 == '1'?"checked":""); ?>> Pass
  <input type="checkbox" name="fail" <?php echo ($result[0]->part7 == '0'?"checked":""); ?>> Fail <br> <hr> 

<div>
  <p style="text-align: center;"><strong>CERTIFICATION OF ROAD TEST</strong></p>
  <p style="border: 0.3px solid;">INSTRUCTIONS: If the road test is successfully completed, the person who gave it shall complete a certificate of the driver's road test. The original or copy of the certificate shall be retained in the employing motor carrier's driver qualification file of the person examined, and a copy given to the person who s examined. (49 CFR 391.31(e)(1)(9)).</p>
</div>
<div>
  <p>Date of road test &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->date_of_road_test_14_2; ?></u></p>
  <p>Applicant name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->driver_name_14; ?></u></p>
  <p>Social sec.num.  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->social_sec_no_14; ?></u></p>
  <p>DL number,state  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->DL_number_14_2.' , '.$result[0]->DL_state_14_2; ?></u></p>
  <p>DL type,class &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->DL_type_14_2.' , '.$result[0]->DL_class_14_2; ?></u></p>
  <p>Power unit driven &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->power_unit_driven_14_2; ?></u></p>
  <p>Towed unit driven &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><?php echo $result[0]->towed_unit_driven_14_2; ?></u></p>
</div><br>
  <strong> This is to certify that the above-named driver was given a road test under my supervision consisting of approximately 
  __20__ miles of driving. It is my considered opinion that this driver possesses sufficient driving skill to operate safely the type of commercial motor vehicle listed above. </strong><br> 

<div>

  <h5 style="margin-left: 30px;">Examiner's printed name<br><br> __NIKOLA TRAJKOVIC______</h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">signature<br><br> ______________________________</h5>
  <h5 style="float: right; margin-right: 30px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->examiner_sign_date_14; ?></u></h5>

</div>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 14 of 17</h3>

  <P style="page-break-before: always"></P>

<!-- page 14 end -->

<!-- page 15 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
  <h2 style="text-align: center;">DRIVER'S AKNOWLEDGEMENTS </h2>
  <h4 style="border: 0.2px solid;"> I hereby acknowledge then I have seen and understood following educational videos as a part of my pre employment training with Paragon Freight Inc</h4>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->accident_procedure_15 == '1'?"checked":""); ?>> Accidents procedures <br> 
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->drug_testing_15 == '1'?"checked":""); ?>> Alcohol and drug testing <br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->service_hours_15 == '1'?"checked":""); ?>> Hours of service<br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->vehicle_inspection_15 == '1'?"checked":""); ?>> AVehicle inspections <br>

  <h4 style="border: 0.2px solid;"> I hereby acknowledge then I have received, read and understood following drivers handouts as a part of my pre-employment training with Paragon Freight Inc</h4>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->accident_procedure_15_2 == '1'?"checked":""); ?>> Accidents procedures <br> 
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->drug_testing_15_2 == '1'?"checked":""); ?>> Alcohol and drug testing <br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->policy_safety_manual_15 == '1'?"checked":""); ?>> Company policy and safety manual <br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->service_hours_15_2 == '1'?"checked":""); ?>> Hours of service<br>
  <input type="checkbox" name="checkbox" <?php echo ($result[0]->vehicle_inspection_15_2 == '1'?"checked":""); ?>> Vehicle inspections <br><br>

  <input type="checkbox" name="checkbox" <?php echo ($result[0]->drug_testing_requirement_15 == '1'?"checked":""); ?>>
  <p style="border: 0.2px solid; margin-left: 40px; margin-top: -16px;"><strong>I hereby certify that I am familiar with U.S. DOT drug and alcohol testing requirements of 49 CFR part 40; FMCSR's and Paragon Freight Inc company policy and safety manual, and FMCSR's pocketbook, and hareby agree to follow and obey those rules and regulations during my employment with Paragon Freight Inc.</strong></p>

  <input type="checkbox" name="checkbox" <?php echo ($result[0]->second_last_check_15 == '1'?"checked":""); ?>>
  <p style="border: 0.2px solid; margin-left: 40px; margin-top: -16px;"><strong> I hereby certify that I am informed and I understood that Paragon Freight Inc designated representative to answer all drug and alcohol; FMCSR's and Paragon Freight Inc company policy related questions is Nikola Trajkovic. I understand that, in the case I have above mentioned questions i can call at (872) 903-4333.</strong></p>

  <input type="checkbox" name="checkbox" <?php echo ($result[0]->last_check_15 == '1'?"checked":""); ?>>
  <p style="border: 0.2px solid; margin-left: 40px; margin-top: -16px;"><strong>I hereby certify that I read and understood Paragon Freight Inc disciplinay actions, and that those actions are subject to change without prior notice given. I understand that most updated disciplinary actions handout is available upon request to my safety department.</strong></p>

<div>
  
  <h5 style="margin-left: 30px;">Applicant's printed name<br><br><u><?php echo $result[0]->applicant_name_15; ?></u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Applicant's signature <br><br> _X____________________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->applicant_sign_date_15; ?></u></h5>

</div>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 15 of 17</h3>

  <P style="page-break-before: always"></P>
   
<!-- page 15 end -->

<!-- page 16 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>

  <h2 style="text-align: center;">WORKMEN'S COMPENSATION HOLD HARMLESS LETTER</h2><br><br><br><br>
  <h4 style="border: 0.2px solid;">AGREES TO HOLD HARMLESS AND INDEMNIFY PARAGON FREIGHT INC AND ANY OF ITS AFFILIATES AGAINST ANY AWARD BY A WORKERS COMPENSATION COURT, SIMMILAR ADMINISTRATIVE BODY OF LAW. 
  </h4>
  <br><br>

<div>
  
  <h5 style="margin-left: 30px;">Applicant's printed name<br><br><u><?php echo $result[0]->applicant_name_16; ?></u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Applicant's signature <br><br> _X____________________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->applicant_sign_date_16; ?></u></h5>

</div>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 16 of 17</h3>

  <P style="page-break-before: always"></P>


<!-- page 16 end -->

<!-- page 17 start -->

<h3>Driver's Application for Employment</h3>
<div style=" margin-left:10px;">
  <b>Company name</b><br>
  <b>Street address</b><br>
  <b>City, state zip code</b><br>
  <b>Phone / Fax number</b><br>
</div>
<div style=" margin-left:250px; margin-top:-73px;">
  <b>ARAGON FREIGHT INC</b><br>
  <b>9001 W 79TH PLACE</b><br>
  <b>JUSTICE, IL</b><br>
  <b>(872) 903-4333 &nbsp;&nbsp;&nbsp;(872) 666-1430</b><br>
</div><br><hr>
  <h2 style="text-align: center;">RULES OF CONDUCT FOR ALL DRIVERS</h2>
  1). <p style=" solid; margin-left: 60px; margin-top: -18px;">All drivers must check in at 9:00 a.m. and 9:00 p.m. each day to report their location, expected delivery times and any problems encountered since the last check-in. A voice message may be left if no one is in the office, and no problems have occurred.</p> <br>
<div>
  
  <p style="">Office</p>
  <p style=" margin-left:40%; margin-top:-35px; ">(872) 903-4333</p>

</div>
<div>
  
  <p>In the case of emergency, call:</p>
  <p style=" margin-left:40%; margin-top:-35px; ">(872) 205-2066</p>
  <p style="float: right; margin-right: 50px; margin-top:-35px; ">-Nikola Trajkovic </p>
</div><br>

  <p style=" solid; margin-left: 60px;">Failure to call in twice a day will lead to a fine of $50 for each truck, or $25 per driver each day.</p><hr>
  
  2). <p style=" solid; margin-left: 60px; margin-top: -18px;">All drivers must complete a Pre-Trip Inspection on the tractor and trailer, according to DOT regulations. Company must be informed of any problems noticed during the Pre-Trip inspection. Any citations received due to the notified problem will be paid by the Company. Any citations received due to the neglect of the driver will not be paid by the Company... In case of any truck or trailer equipment failures, the Company must be informed immediately 24 hours a day. The Company will not acknowledge any actions taken by the driver prior to informing the Company, and any equipment damage due to the neglect of the driver will be considered the responsibility of the driver, and will not be paid by the Company.</p><hr>

  3). <p style=" solid; margin-left: 60px; margin-top: -18px;">If a load requires refrigeration, the driver must check the condition of the trailer every two (2) hours, including temperatures required by the shipper, and fuel level in the trailer. The Company will not be held responsible for damaged cargo, due to negligence or improper inspection. Any deducted charges against cargo liability will be withheld from INDEPENDENT CONTRACTOR'S settlement. All drivers are required to provide complete protection and safety of all cargo, whether refrigerated or dry.</p><hr>
  4). <p style=" solid; margin-left: 60px; margin-top: -18px;"> All drivers are required to keep a log book up-to-date for each portion of a trip. All log books must be completed and turned into the Company within 13 days from present day, and kept on file according to DOT regulations. Any log book violations will be paid by the driver, not the Company. If a truck is ordered Out of Service due to a logbook violation, each driver will be fined according to the Company policy. If a load is not picked up or delivered late - due to Police Order or for any other reason, unless approved by the shipper and receiver, all late charges incurred by Company will be withheld from INDEPENDENT CONTRACTOR'S settlement.</p><hr>
  5). <p style=" solid; margin-left: 60px; margin-top: -18px;"> All drivers must inspect the loading of a trailer, where allowed, and check weight at the nearest scale. If the load appears to be overweight, the driver must inform Company immediately by the phone, and return to original loading area for proper weights. The Company will not pay any Citations due to overweight violations.</p><hr>
  6). <p style=" solid; margin-left: 60px; margin-top: -18px;">During loading, the driver must pay attention to the condition of the load, and number of pallets placed on the trailer. If the driver observes any damage such as bad condition of the product, broken boxes, spilling etc..., the driver should stop the loading process, and immediately inform the Company. If the Company approves the damaged load, the driver must note the damage(s) on the Bill of Lading, and request the signature of the shipper's representative, as proof and acknowledgment of previous damage(s) to the load</p><hr>
  7). <p style=" solid; margin-left: 60px; margin-top: -18px;">At all times, drivers must be courteous and respect all rules and regulations of our customers, other drivers, and officers of all regulatory agencies.</p><hr>
  8). <p style=" solid; margin-left: 60px; margin-top: -18px;">Cause for immediate discharge include the following:

      <ul style="margin-left: 70px;">
        <li><span style="position: relative; left: 20px;"><strong>Dishonesty;</strong></span></li>
        <li><span style="position: relative; left: 20px;"><strong>Immoral conduct while on duty;</strong></span></li>
        <li><span style="position: relative; left: 20px;"><strong>Fighting;</strong></span></li>
        <li><span style="position: relative; left: 20px;"><strong> Possession of narcotics, or being under the influence of alcohol while on duty;</strong></span></li>
        <li><span style="position: relative; left: 20px;"><strong>Failure to immediately report an accident which results in fatality, injury or property damage; </strong></span></li>
        <li><span style="position: relative; left: 20px;"><strong>Failure to carry out instructions or a direct order of a supervisor;</strong></span></li>
        <li><span style="position: relative; left: 20px;"><strong>Theft;</strong></span></li>
        <li><span style="position: relative; left: 20px;"><strong>Participating in any activities that interfere with Company operation.</strong></span></li>
      </ul>

    </p><hr>
  <div style="margin-left: 55px;">
    <input type="checkbox" name="checkbox" <?php echo ($result[0]->understand_company_rules_17 = '1'?"checked":""); ?>>
    <label>I have read and understand the company rules and do hereby agree to follow them.</label> <br>
  </div><br>
  <div>
  
  <h5 style="margin-left: 30px;">Applicant's printed name<br><br><u><?php echo $result[0]->applicant_name_17; ?></u></h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Applicant's signature <br><br> _X____________________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->applicant_sign_date_17; ?></u></h5>

  <h5 style="margin-left: 30px;">Company representative<br><br> ____Nikola Trajkovic___________</h5>
  <h5 style=" margin-left:40%; margin-top:-70px; ">Signature <br><br> _X____________________________</h5>
  <h5 style="float: right; margin-right: 50px; margin-top:-73px; ">Date<br><br><u><?php echo $result[0]->comp_representer_sign_date_17; ?></u></h5>

</div>
  <h4 style="">Acusalus, Inc - affordable solution for all your safety needs</h4>
  <h3 style="float: right; ; margin-top:-42px; ">Page 17 of 17</h3>

  <P style="page-break-before: always"></P>

<!-- page 17 end -->
</div>
</body>
</html>