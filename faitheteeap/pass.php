<pre>
<?php
echo count($_POST)."<br>";		// Counts number of input fields
print_r($_POST);		// Shows all input fields

// Le hefty inputs catalog (arrays and variables)

/* form-part-1 */

$lastname=$_POST['lastname'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$address=$_POST['address'];
$zipcode=$_POST['zipcode'];
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
$birthplace=$_POST['birthplace'];
$civstatus=$_POST['civstatus'];
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
$inclusiveDates=array();
$formalEducCerfPhotos=array();
$titleTrainingProgram=array();
$titleCerfObtained=array();
$dateAttendance=array();
$nonFormalEducCerfPhotos=array();
$titleCerfExam=array();
$otherCerfPhotos=array();

/* form-part-3 */

$postDesignation=array();
$inYear=array();
$inMonth=array();
$inDay=array();
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
//     $state=$dbcon->prepare();
//    $state->execute();
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
</pre>