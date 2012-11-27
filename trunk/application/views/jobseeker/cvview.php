<div id="cv">
<?php

echo'<h1>Curriculum Vitae</h2>';

foreach ($person as $r) 
{
//echo '<h1>' . $r->forename1 . ' ' . $r->surname . '</h1>';
echo '<h2>Personal Details</h2>';
echo '<table>';
echo '<tr><th>Name:</th><td>' . $r->title . ' ' . $r->forename1 . ' ' . $r->surname . '</td></tr>';
echo '<tr><th>Address:</th><td>' . $r->addressLine1 . ', ' . $r->addressLine2 . ', ' . $r->town . ', ' . $r->postcode . '</td></tr>';
echo '<tr><th>E-mail address:</th><td>' . $r->username . '</td></tr>';
if (isset($r->secondEmail)) {echo '<tr><th>Secondary e-mail address:</th><td>' . $r->secondEmail . '</td></tr>';}
if (isset($r->personalUrl)) {echo '<tr><th>Personal Web Site:</th><td>' . $r->personalUrl . '</td></tr>';}
if (isset($r->mobile)) {echo '<tr><th>Mobile Telephone:</th><td>' . $r->mobile . '</td></tr>';}
if (isset($r->landline)) {echo '<tr><th>Landline Telephone:</th><td>' . $r->landline . '</td></tr>';}
}
echo '</table>';

if ($educationQuals) {
echo '<h2>Educational Qualifications</h2>';
$count = 0;
echo '<table>';
foreach ($educationQuals as $r)
{
$count ++;
echo '<tr><th colspan="2"><h3>Educational Qualification ' . $count . '</h3></th></tr>';
echo '<tr><th>Qualification Type:</th><td>' .  $r->qualificationType . '<br/>';
echo '<tr><th>Course Name:</th><td>' . $r->courseName . '</td></tr>';
echo '<tr><th>Main Subject:</th><td>' . $r->mainSubject . '</td></tr>';
echo '<tr><th>Institution:</th><td>' . $r->nameOfInstitutions . '</td></tr>';
echo '<tr><th>Country:</th><td>' . $r->country . '</td></tr>';
echo '<tr><th>Year Obtained:</th><td>' . $r->yearObtained . '</td></tr>';
echo '<tr><th>Result:</th><td>' . $r->result . '</td></tr>';
echo '<tr><th>Thesis Title:</th><td>' . $r->thesesTitle . '</td></tr>';
if ($r->verified == 1) echo '<tr><th>Verified:</th><td>Yes</td></tr>';
else echo '<tr><th>Verified:</th><td>No</td></tr>';
echo '<tr><th>Verification Method:</th><td>' . $r->howVerified . '</td></tr>';
}
echo '</table>';
}


if ($professionalQuals) {
echo '<h2>Professional Qualifications</h2>';
$count = 0;
echo '<table>';
foreach ($professionalQuals as $r)
{
$count ++;
echo '<tr><th colspan="2"><h3>Professional Qualification ' . $count . '</h3></th></tr>';
echo '<tr><th>Qualification Name:</th><td>' .  $r->qualificationName . '<br/>';
echo '<tr><th>Awarding Body:</th><td>' . $r->awardingBody . '</td></tr>';
echo '<tr><th>Year Obtained:</th><td>' . $r->yearObtained . '</td></tr>';
echo '<tr><th>Result:</th><td>' . $r->result . '</td></tr>';
if ($r->verified == 1) echo '<tr><th>Verified:</th><td>Yes</td></tr>';
else echo '<tr><th>Verified:</th><td>No</td></tr>';
echo '<tr><th>Verification Method:</th><td>' . $r->howVerified . '</td></tr>';
}
echo '</table>';
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
}
echo '</table>';
}

if ($skills) {
echo '<h2>Skills</h2>';
$count = 0;
echo '<table>';
foreach ($skills as $r)
{
$count ++;
echo '<tr><th colspan="2"><h3>Skill ' . $count . '</h3></th></tr>';
echo '<tr><th>Skill Name:</th><td>' . $r->skillName . '</td></tr>';
echo '<tr><th>Skill Level:</th><td>' . $r->skillLevel . '</td></tr>';
if ($r->verified == 1) echo '<tr><th>Verified:</th><td>Yes</td></tr>';
else echo '<tr><th>Verified:</th><td>No</td></tr>';
echo '<tr><th>Verification Method:</th><td>' . $r->howVerified . '</td></tr>';
}
echo '</table>';
}
if ($preferences) {
echo '<h2>Job Preferences</h2>';
echo '<table>';
$count = 0;
foreach ($preferences as $r)
{
$count ++;
echo '<tr><th colspan="2"><h3>Desired Job Title ' . $count . '</h3></tr>';
echo '<tr><td>'. $r->jobTitle . '</td></tr>';
}
echo '</table>';
}

if ($referees) {
echo '<h2>References</h2>';
echo '<table>';
$count = 0;
foreach ($referees as $r)
{
$count ++;
echo '<tr><th colspan="2"><h3>Referee ' . $count . '</h3></tr>';
echo '<tr><th>Name:</th><td>' . $r->title . ' ' . $r->forename . ' ' . $r->surname . '</td></tr>';
echo '<tr><th>Email:</th><td>' . $r->email . '</td></tr>';
echo '<tr><th>Telephone:</th><td>' . $r->contactPhone . '</td></tr>';
echo '<tr><th>Relationship:</th><td>' . $r->relationship . '</td></tr>';
echo '<tr><th>Permission to contact?</th>';
if ($r->permissionToContact == 1) echo '<td>Yes</td></tr>';
else echo '<td>No</td></tr>';
echo '<tr><th>Permission to store details?</th>';
if ($r->permissionToStoreDetails == 1) echo '<td>Yes</td></tr>';
else echo '<td>No</td></tr>';
}
echo '</table>';
}
?>
</div>