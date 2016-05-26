<pre>
<?php
echo count($_POST)."<br>";		// Counts number of input fields
print_r($_POST);		// Shows all input fields

// Le hefty inputs catalog (arrays and variables)

/* form-part-1 */

/* Represents the name of the applicant */ 
$lastName=$_POST['lastname'];
$firstName=$_POST['firstname'];
$middleName=$_POST['middlename'];

$address=$_POST['address'];         // Represents the home address of the applicant
$emailAddress=$_POST['email-address'];
$zipCode=$_POST['zipcode'];         // Represents the ZIP code of the applicant; only accepts 4-digit ZIP codes (PhilPost standard)
$year=$_POST['year'];                       // Represents the birth year of the applicant
$month=$_POST['month'];                // Represents the birth month of the applicant
$day=$_POST['day'];                          // Represents the birth day of the applicant
$birthplace=$_POST['birthplace'];
$civStatus=$_POST['civstatus'];
$gender=$_POST['gender'];
$userNationality=$_POST['user-nationality'];
$firstPriorityDegree=$_POST['first-priority-degree'];
$secondPriorityDegree=$_POST['second-priority-degree'];
$thirdPriorityDegree=$_POST['third-priority-degree'];
$goalStatements=$_POST['goal-statements'];
$devoteTime=$_POST['devote-time'];
$overseaApplicantPlan=$_POST['oversea-applicant-plan'];
$howSoonCompleteOption=$_POST['how-soon-complete-option'];

/* form-part-2 */

$courseDegree=array();
$schoolName=array();
$schoolAddress=array();
$inclusiveDatesFormal=array();
$formalEducCerfPhotos=array();

$titleTrainingProgram=array();
$titleCerfObtained=array();
$inclusiveDatesNonFormal=array();
$nonFormalEducCerfPhotos=array();

$titleCerfExam=array();
$awardAgencyName=array();
$awardAgencyAddress=array();
$inclusiveDatesOther=array();
$otherCerfPhotos=array();

/* form-part-3 */

$postDesignation=array();
$startYear=array();
$startMonth=array();
$startDay=array();
$companyNames=array();
$companyAddresses=array();
$employmentStatuses=array();
$supervisorName=array();
$supervisorDesignation=array();
$reasonsLeavingJob=array();
$actualJobFunctions=array();
$referencePersons=array();

/* form-part-4 */

$academicAwards=array();
$awardConferringOrg=array();
$conferringOrgAddress=array();
$awardYear=array();
$awardMonth=array();
$awardDay=array();

$comCivOrgAwards=array();
$awardConferringComCivOrg=array();
$conferringComCivOrgAddress=array();
$comCivAwardYear=array();
$comCivAwardMonth=array();
$comCivAwardDay=array();

$workRelatedAwards=array();
$workRelatedAwardConferringOrg=array();
$conferringWorkRelatedOrgAddress=array();
$workRelatedAwardYear=array();
$workRelatedAwardMonth=array();
$workRelatedAwardDay=array();

/* form-part-5 */

$creativeWorkDescription=array();
$creativeWorkYear=array();
$creativeWorkMonth=array();
$creativeWorkDay=array();
$creativeWorkPublishingAgencyName=array();
$creativeWorkPublishingAgencyAddress=array();

/* form-part-6 */

$hobbies=$_POST['hobbies'];
$specialSkills=$_POST['special-skills'];
$workRelatedActivities=$_POST['work-related-activities'];
$volunteerActivities=$_POST['volunteer-activities'];
$travel=$_POST['travel'];

/* form-part-7 */

$essay=$_POST['essay'];


try
{
    $dbcon=new PDO('mysql:host=localhost;dbname=faitheteeap', 'root', '' );
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $formPart1=array('fname'=>$firstName, 'mname'=>$middleName, 'lname'=>$lastName, 'add'=>$address, 'eadd'=>$emailAddress, 'zip'=>$zipCode,
                                        'y'=>$year, 'm'=>$month, 'd'=>$day, 'bplace'=>$birthplace, 'status'=>$civStatus,'sex'=>$gender,
                                        'nationality'=>$userNationality, 'fpdegree'=>$firstPriorityDegree, 'spdegree'=>$secondPriorityDegree, 'tpdegree'=>$thirdPriorityDegree, 'goals'=>$goalStatements, 'devote'=>$devoteTime,
                                        'oversea'=>$overseaApplicantPlan, 'how'=>$howSoonCompleteOption);
    print_r($formPart1); 
    $state=$dbcon->prepare("INSERT INTO applicant (applicant_firstname, applicant_middlename, applicant_lastname,
                                                        applicant_address, applicant_emailaddress, applicant_zipcode, applicant_birthyear, applicant_birthmonth,
                                                        applicant_birthday, applicant_birthplace, applicant_civstatus, applicant_gender, applicant_nationality, applicant_firstprioritydegree,
                                                        applicant_secondprioritydegree, applicant_thirdprioritydegree, applicant_goalstatements, applicant_devotetime,
                                                        applicant_overseaapplicantplan, applicant_howsooncompleteoption) VALUES(:fname, :mname, :lname, :add, :eadd, :zip,
                                                        :y, :m, :d, :bplace, :status, :sex, :nationality, :fpdegree, :spdegree, :tpdegree, :goals, :devote, :oversea, :how);");
    $state->execute($formPart1);
    
    
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
</pre>