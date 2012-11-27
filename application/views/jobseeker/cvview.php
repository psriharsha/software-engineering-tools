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
echo '<h3>Educational Qualification ' . $count . '</h3>';
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

echo '<h2>Professional Qualifications</h2>';
$count = 0;
foreach ($professionalQuals as $r)
{
$count ++;
echo '<h3>Professional Qualification ' . $count . '</h3>';
echo '<p>';
echo 'Qualification Name: ' .  $r->qualificationName . '<br/>';
echo 'Awarding Body: ' . $r->awardingBody . '<br/>';
echo 'Year Obtained: ' . $r->yearObtained . '<br/>';
echo 'Result: ' . $r->result . '<br/>';
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

echo '<h2>Skills</h2>';
$count = 0;
foreach ($skills as $r)
{
$count ++;
echo '<h3>Skill ' . $count . '</h3>';
echo '<p>';
echo 'Skill Name: ' . $r->skillName . '<br/>';
echo 'Skill Level: ' . $r->skillLevel . '<br/>';
if ($r->verified == 1) echo 'Verified: Yes<br/>';
else echo 'Verified: No<br/>';
echo 'Verification Method: ' . $r->howVerified . '<br/>';
echo '</p>';
}

echo '<h2>Job Preferences</h2>';
$count = 0;
foreach ($preferences as $r)
{
$count ++;
echo '<p>';
echo 'Desired Job Title ' . $count . ': ' . $r->jobTitle . '<br/>';
echo '</p>';
}

echo '<h2>References</h2>';
$count = 0;
foreach ($referees as $r)
{
$count ++;
echo '<p>';
echo 'Referee ' . $count . ': ' . $r->title . ' ' . $r->forename . ' ' . $r->surname . '<br/>';
echo 'Email: ' . $r->email . '<br/>';
echo 'Telephone: ' . $r->contactPhone . '<br/>';
echo 'Relationship: ' . $r->relationship . '<br/>';
echo 'Permission to contact? ';
if ($r->permissionToContact == 1) echo 'Yes<br/>';
else echo 'No<br/>';
echo 'Permission to store details? ';
if ($r->permissionToStoreDetails == 1) echo 'Yes<br/>';
else echo 'No<br/>';
echo '</p>';
}

?>