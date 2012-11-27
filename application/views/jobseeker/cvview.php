<div id="cv">
<?php

foreach ($person as $r) 
{
echo '<h1>' . $r->forename1 . ' ' . $r->surname . '</h1>';
echo '<h2>Personal Details</h2>';
echo '<table><tr>';
echo '<th>Name:</th><td>' . $r->title . ' ' . $r->forename1 . ' ' . $r->surname . '</td></tr>';
echo '<tr><th>Address:</th><td>' . $r->addressLine1 . ', ' . $r->addressLine2 . ', ' . $r->town . ', ' . $r->postcode . '</td></tr>';
echo '<tr><th>E-mail address:</th><td> ' . $r->username . '</td></tr>';
if (isset($r->secondEmail)) {echo 'Secondary e-mail address: ' . $r->secondEmail . '<br/>';}
if (isset($r->personalUrl)) {echo 'Personal Web Site: ' . $r->personalUrl . '<br/>';}
if (isset($r->mobile)) {echo 'Mobile Telephone: ' . $r->mobile . '<br/>';}
if (isset($r->landline)) {echo 'Landline Telephone: ' . $r->landline . '<br/>';}
echo '</table>';
}
if ($educationQuals) {
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
}


if ($professionalQuals) {
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
}

if ($experiences) {
echo '<h2>Work Experience</h2>';
$count = 0;
echo '<table>';
foreach ($experiences as $r)
{
$count ++;
echo '<tr><th colspan="2"><h3>Job Role ' . $count . '</h3></th></tr>';
echo '<tr><th>Job Title:</th><td>' . $r->jobTitle . '</td></tr>';
echo '<tr><th>Start Date:</th><td>' . $r->dateStarted . '</td></tr>';
echo '<tr><th>End Date:</th><td>' . $r->dateFinished . '</td></tr>';
echo '<tr><th>Level of Employment:</th><td>' . $r->employmentLevel . '</td></tr>';
echo '<tr><th>Key Duties:</th><td>' . $r->keyDuties . '</td></tr>';
echo '<tr><th>Employer Name:</th><td>' . $r->employerName . '</td></tr>';

echo '</table>';
}
}

if ($skills) {
echo '<h2>Skills</h2>';
$count = 0;
echo '<table>';
foreach ($skills as $r)
{
$count ++;
echo '<tr><th colspan="2"><h3>Skill ' . $count . '</h3>';
echo '<tr><th>Skill Name:</th><td>' . $r->skillName . '</td></tr>';
echo '<tr><th>Skill Level:</th><td>' . $r->skillLevel . '</td></tr>';
if ($r->verified == 1) echo '<tr><th>Verified:</th><td>Yes</td></tr>';
else echo '<tr><th>Verified:</th><td>No</td></tr>';
echo '<tr><th>Verification Method:</th><td>' . $r->howVerified . '</td></tr>';
echo '</table>';
}
}
if ($preferences) {
echo '<h2>Job Preferences</h2>';
$count = 0;
foreach ($preferences as $r)
{
$count ++;
echo '<p>';
echo 'Desired Job Title ' . $count . ': ' . $r->jobTitle . '<br/>';
echo '</p>';
}
}

if ($referees) {
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
}
?>
</div>