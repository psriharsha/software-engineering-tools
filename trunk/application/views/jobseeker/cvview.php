<?php
foreach ($person as $r) 
{
echo '<h1>' . $r->forename1 . ' ' . $r->surname . '</h1>';
echo '<h2>Personal Details</h2>';
echo '<p>';
echo 'Name: ' . $r->title . ' ' . $r->forename1 . ' ' . $r->surname . '<br/>';
echo 'Address: ' . $r->addressLine1 . ', ' . $r->addressLine2 . ', ' . $r->town . ', ' . $r->postcode . '<br/>';
echo 'E-mail address: ' . $r->username . '<br/>';
echo 'Secondary e-mail address: ' . $r->secondEmail . '<br/>';
echo 'Personal Web Site: ' . $r->personalUrl . '<br/>';
echo 'Mobile Telephone: ' . $r->mobile . '<br/>';
echo 'Landline Telephone: ' . $r->landline . '<br/>';
echo '</p>';
}
echo '<h2>Educational Qualifications</h2>';
$count = 0;
foreach ($educationQuals as $r)
{
$count ++;
echo '<h3>Qualification ' . $count . '</h3>';
echo '<p>';
echo 'Qualification Type: ' .  $r->qualificationType . '<br/>';
echo 'Course Name: ' . $r->courseName . '<br/>';
echo 'Main Subject: ' . $r->mainSubject . '<br/>';
echo 'Institution: ' . $r->nameOfInstitutions . '<br/>';
echo 'Country: ' . $r->country . '<br/>';
echo 'Year Obtained: ' . $r->yearObtained . '<br/>';
echo 'Result: ' . $r->result . '<br/>';
echo 'Thesis Title: ' . $r->thesesTitle . '<br/>';
if ($r->verified == 1) echo 'Verified: Yes<br/>';
else echo 'Verified: No<br/>';
echo 'Verification Method: ' . $r->howVerified . '<br/>';
echo '</p>';
}
echo '<h2>Work Experience</h2>';
$count = 0;
foreach ($experiences as $r)
{
$count ++;
echo '<h3>Job Role ' . $count . '</h3>';
echo '<p>';
echo 'Job Title: ' . $r->jobTitle . '<br/>';
echo 'Start Date: ' . $r->dateStarted . '<br/>';
echo 'End Date: ' . $r->dateFinished . '<br/>';
echo 'Level of Employment: ' . $r->employmentLevel . '<br/>';
echo 'Key Duties: ' . $r->keyDuties . '<br/>';
echo 'Employer Name: ' . $r->employerName . '<br/>';

echo '</p>';
}

?>