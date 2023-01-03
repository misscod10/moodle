<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'workshop', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    mod_workshop
 * @copyright  2009 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['activitydate:assessmentsclose'] = 'Assessments close:';
$string['activitydate:assessmentsclosed'] = 'Assessments closed:';
$string['activitydate:assessmentsopen'] = 'Assessments open:';
$string['activitydate:assessmentsopened'] = 'Assessments opened:';
$string['activitydate:submissionsclose'] = 'Submissions close:';
$string['activitydate:submissionsclosed'] = 'Submissions closed:';
$string['activitydate:submissionsopen'] = 'Submissions open:';
$string['activitydate:submissionsopened'] = 'Submissions opened:';
$string['aggregategrades'] = 'Re-calculate grades';
$string['aggregation'] = 'Grades aggregation';
$string['allocate'] = 'Allocate submissions';
$string['allocatedetails'] = 'expected: {$a->expected}<br />submitted: {$a->submitted}<br />to allocate: {$a->allocate}';
$string['allocation'] = 'Submission allocation';
$string['allocationdone'] = 'Allocation done';
$string['allocationerror'] = 'Allocation error';
$string['allocationconfigured'] = 'Allocation configured';
$string['allowedfiletypesforoverallfeedback'] = 'Feedback attachment allowed file types';
$string['allowedfiletypesforoverallfeedback_help'] = 'Feedback attachment file types can be restricted by providing a list of allowed file types. If the field is left empty, then all file types are allowed.';
$string['allowedfiletypesforoverallfeedback_link'] = 'admin/tool/filetypes/index';
$string['allowedfiletypesforsubmission'] = 'Submission attachment allowed file types';
$string['allowedfiletypesforsubmission_help'] = 'Submission attachment file types can be restricted by providing a list of allowed file types. If the field is left empty, then all file types are allowed.';
$string['allowedfiletypesforsubmission_link'] = 'admin/tool/filetypes/index';
$string['allsubmissions'] = 'All submissions ({$a})';
$string['alreadygraded'] = 'Already graded';
$string['areaconclusion'] = 'Conclusion text';
$string['areainstructauthors'] = 'Instructions for submission';
$string['areainstructreviewers'] = 'Instructions for assessment';
$string['areaoverallfeedbackattachment'] = 'Overall feedback attachments';
$string['areaoverallfeedbackcontent'] = 'Overall feedback texts';
$string['areasubmissionattachment'] = 'Submission attachments';
$string['areasubmissioncontent'] = 'Submission texts';
$string['assess'] = 'Assess';
$string['assessedexample'] = 'Assessed example submission';
$string['assessedsubmission'] = 'Assessed submission';
$string['assessingexample'] = 'Assessing example submission';
$string['assessingsubmission'] = 'Assessing submission';
$string['assessment'] = 'Assessment';
$string['assessmentby'] = 'by <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Assessment by {$a}';
$string['assessmentbyyourself'] = 'Your assessment';
$string['assessmentdeleted'] = 'Assessment deallocated';
$string['assessmentend'] = 'Deadline for assessment';
$string['assessmentendbeforestart'] = 'Deadline for assessment can not be specified before the open for assessment date';
$string['assessmentendevent'] = '{$a} deadline for assessment';
$string['assessmentenddatetime'] = 'Assessment deadline: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentform'] = 'Assessment form';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Assessment</a> of <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Reference assessment';
$string['assessmentreferenceconflict'] = 'It is not possible to assess an example submission for which you provided a reference assessment.';
$string['assessmentreferenceneeded'] = 'You have to assess this example submission to provide a reference assessment. Click \'Continue\' button to assess the submission.';
$string['assessments'] = 'Assessments';
$string['assessmentsettings'] = 'Assessment settings';
$string['assessmentstart'] = 'Open for assessment from';
$string['assessmentstartevent'] = '{$a} opens for assessment';
$string['assessmentstartdatetime'] = 'Open for assessment from {$a->daydatetime} ({$a->distanceday})';
$string['assessmentweight'] = 'Assessment weight';
$string['assignedassessments'] = 'Assigned submissions to assess';
$string['assignedassessmentsnone'] = 'You have no assigned submission to assess';
$string['backtoeditform'] = 'Back to editing form';
$string['byfullname'] = 'by <a href="{$a->url}">{$a->name}</a>';
$string['byfullnamewithoutlink'] = 'by {$a}';
$string['calculategradinggrades'] = 'Calculate assessment grades';
$string['calculategradinggradesdetails'] = 'expected: {$a->expected}<br />calculated: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Calculate submission grades';
$string['calculatesubmissiongradesdetails'] = 'expected: {$a->expected}<br />calculated: {$a->calculated}';
$string['clearaggregatedgrades'] = 'Clear all aggregated grades';
$string['clearaggregatedgrades_help'] = 'The aggregated grades for submission and grades for assessment will be reset. You can re-calculate these grades from scratch in Grading evaluation phase again.';
$string['clearassessments'] = 'Clear assessments';
$string['clearassessments_help'] = 'The calculated grades for submission and grades for assessment will be reset. The information how the assessment forms are filled is still kept, but all the reviewers must open the assessment form again and re-save it to get the given grades calculated again.';
$string['clearassessmentsconfirm'] = 'Are you sure you want to clear all assessment grades? You will not be able to get the information back on your own, reviewers will have to re-assess the allocated submissions.';
$string['clearaggregatedgradesconfirm'] = 'Are you sure you want to clear the calculated grades for submissions and grades for assessment?';
$string['conclusion'] = 'Conclusion';
$string['conclusion_help'] = 'Conclusion text is displayed to participants at the end of the activity.';
$string['configexamplesmode'] = 'Default mode of examples assessment in workshops';
$string['configgrade'] = 'Default maximum grade for submission in workshops';
$string['configgradedecimals'] = 'Default number of digits that should be shown after the decimal point when displaying grades.';
$string['configgradinggrade'] = 'Default maximum grade for assessment in workshops';
$string['configmaxbytes'] = 'Default maximum submission file size for all workshops on the site (subject to course limits and other local settings)';
$string['configstrategy'] = 'Default grading strategy for workshops';
$string['createsubmission'] = 'Add submission';
$string['crontask'] = 'Background processing for workshop module';
$string['daysago'] = '{$a} days ago';
$string['daysleft'] = '{$a} days left';
$string['daystoday'] = 'today';
$string['daystomorrow'] = 'tomorrow';
$string['daysyesterday'] = 'yesterday';
$string['deadlinesignored'] = 'Time restrictions do not apply to you';
$string['deletesubmission'] = 'Delete submission';
$string['editassessmentform'] = 'Edit assessment form';
$string['editassessmentformstrategy'] = 'Edit assessment form ({$a})';
$string['editingassessmentform'] = 'Editing assessment form';
$string['editingsubmission'] = 'Editing submission';
$string['editsubmission'] = 'Edit submission';
$string['err_multiplesubmissions'] = 'While editing this form, another version of the submission has been saved. Multiple submissions per user are not allowed.';
$string['err_removegrademappings'] = 'Unable to remove the unused grade mappings';
$string['evaluategradeswait'] = 'Please wait until the assessments are evaluated and the grades are calculated';
$string['evaluation'] = 'Grading evaluation';
$string['evaluationmethod'] = 'Grading evaluation method';
$string['evaluationmethod_help'] = 'The grading evaluation method determines how the grade for assessment is calculated. You can let it re-calculate grades repeatedly with different settings unless you are happy with the result.';
$string['evaluationsettings'] = 'Grading evaluation settings';
$string['eventassessableuploaded'] = 'A submission has been uploaded.';
$string['eventassessmentevaluationsreset'] = 'Assessment evaluations reset';
$string['eventassessmentevaluated'] = 'Assessment evaluated';
$string['eventassessmentreevaluated'] = 'Assessment re-evaluated';
$string['eventsubmissionassessed'] = 'Submission assessed';
$string['eventsubmissionassessmentsreset'] = 'Submission assessments cleared';
$string['eventsubmissioncreated'] = 'Submission created';
$string['eventsubmissionreassessed'] = 'Submission re-assessed';
$string['eventsubmissionupdated'] = 'Submission updated';
$string['eventsubmissiondeleted'] = 'Submission deleted';
$string['eventsubmissionviewed'] = 'Submission viewed';
$string['eventphaseautomaticallyswitched'] = 'Phase automatically switched';
$string['eventphaseswitched'] = 'Phase switched';
$string['example'] = 'Example submission';
$string['exampleadd'] = 'Add example submission';
$string['exampleassess'] = 'Assess example submission';
$string['exampleassesstask'] = 'Assess examples';
$string['exampleassesstaskdetails'] = 'expected: {$a->expected}<br />assessed: {$a->assessed}';
$string['exampleassessments'] = 'Example submissions to assess';
$string['examplecomparing'] = 'Comparing assessments of example submission';
$string['exampledelete'] = 'Delete example';
$string['exampledeleteconfirm'] = 'Are you sure you want to delete the following example submission? Click \'Continue\' button to delete the submission.';
$string['exampleedit'] = 'Edit example';
$string['exampleediting'] = 'Editing example';
$string['exampleneedassessed'] = 'You have to assess all example submissions first';
$string['exampleneedsubmission'] = 'You have to submit your work and assess all example submissions first';
$string['examplesbeforeassessment'] = 'Examples are available after own submission and must be assessed before peer assessment';
$string['examplesbeforesubmission'] = 'Examples must be assessed before own submission';
$string['examplesmode'] = 'Mode of examples assessment';
$string['examplesubmissions'] = 'Example submissions';
$string['examplesvoluntary'] = 'Assessment of example submission is voluntary';
$string['exportsubmission'] = 'Export this page';
$string['feedbackauthor'] = 'Feedback for the author';
$string['feedbackauthorattachment'] = 'Attachment';
$string['feedbackby'] = 'Feedback by {$a}';
$string['feedbackreviewer'] = 'Feedback for the reviewer';
$string['feedbacksettings'] = 'Feedback';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Grades given';
$string['grade_submission_name'] = 'Submission';
$string['grade_grading_name'] = 'Assessment';
$string['gradecalculated'] = 'Calculated grade for submission';
$string['gradedecimals'] = 'Decimal places in grades';
$string['gradegivento'] = '&gt;';
$string['gradeitemassessment'] = '{$a->workshopname} (assessment)';
$string['gradeitemsubmission'] = '{$a->workshopname} (submission)';
$string['gradeover'] = 'Override grade for submission';
$string['gradesreport'] = 'Workshop grades report';
$string['gradereceivedfrom'] = '&lt;';
$string['gradeinfo'] = 'Grade: {$a->received} of {$a->max}';
$string['gradetopasssubmission'] = 'Submission grade to pass';
$string['gradetopassgrading'] = 'Assessment grade to pass';
$string['gradinggrade'] = 'Grade for assessment';
$string['gradinggrade_help'] = 'This setting specifies the maximum grade that may be obtained for submission assessment.';
$string['gradinggradecalculated'] = 'Calculated grade for assessment';
$string['gradinggradeof'] = 'Grade for assessment (of {$a})';
$string['gradinggradeover'] = 'Override grade for assessment';
$string['gradingsettings'] = 'Grading settings';
$string['groupnoallowed'] = 'You are not allowed to access any group in this workshop';
$string['chooseuser'] = 'Choose user...';
$string['iamsure'] = 'Yes, I am sure';
$string['indicator:cognitivedepth'] = 'Workshop cognitive';
$string['indicator:cognitivedepth_help'] = 'This indicator is based on the cognitive depth reached by the student in a Workshop activity.';
$string['indicator:cognitivedepthdef'] = 'Workshop cognitive';
$string['indicator:cognitivedepthdef_help'] = 'The participant has reached this percentage of the cognitive engagement offered by the Workshop activities during this analysis interval (Levels = No view, View, Submit, View feedback, Comment on feedback, Resubmit after viewing feedback)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Workshop social';
$string['indicator:socialbreadth_help'] = 'This indicator is based on the social breadth reached by the student in a Workshop activity.';
$string['indicator:socialbreadthdef'] = 'Workshop social';
$string['indicator:socialbreadthdef_help'] = 'The participant has reached this percentage of the social engagement offered by the Workshop activities during this analysis interval (Levels = No participation, Participant alone, Participant with others)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Info';
$string['instructauthors'] = 'Instructions for submission';
$string['instructreviewers'] = 'Instructions for assessment';
$string['introduction'] = 'Description';
$string['latesubmissions'] = 'Late submissions';
$string['latesubmissions_desc'] = 'Allow submissions after the deadline';
$string['latesubmissions_help'] = 'If enabled, an author may submit their work after the submissions deadline or during the assessment phase. Late submissions cannot be edited though.';
$string['latesubmissionsallowed'] = 'Late submissions are allowed';
$string['legacyallocationplugincron'] = 'Legacy cron workshop allocation';
$string['maxbytes'] = 'Maximum submission attachment size';
$string['modulename'] = 'Workshop';
$string['modulename_help'] = 'The workshop activity module enables the collection, review and peer assessment of students\' work.

Students can submit any digital content (files), such as word-processed documents or spreadsheets and can also type text directly into a field using the text editor.

Submissions are assessed using a multi-criteria assessment form defined by the teacher. The process of peer assessment and understanding the assessment form can be practised in advance with example submissions provided by the teacher, together with a reference assessment. Students are given the opportunity to assess one or more of their peers\' submissions. Submissions and reviewers may be anonymous if required.

Students obtain two grades in a workshop activity - a grade for their submission and a grade for their assessment of their peers\' submissions. Both grades are recorded in the gradebook.';
$string['modulename_link'] = 'mod/workshop/view';
$string['modulenameplural'] = 'Workshops';
$string['myassessments'] = 'My assessments';
$string['mysubmission'] = 'My submission';
$string['nattachments'] = 'Maximum number of submission attachments';
$string['noexamples'] = 'No examples yet in this workshop';
$string['noexamplesformready'] = 'You must define the assessment form before providing example submissions';
$string['nosubmissiontype'] = 'At least one submission type must be available';
$string['nogradeyet'] = 'No grade yet';
$string['nosubmissionfound'] = 'No submission found for this user';
$string['nosubmissions'] = 'No submissions yet in this workshop';
$string['nothingtoreview'] = 'Nothing to review';
$string['notassessed'] = 'Not assessed yet';
$string['notoverridden'] = 'Not overridden';
$string['noworkshops'] = 'There are no workshops in this course';
$string['noyoursubmission'] = 'You have not submitted your work yet';
$string['nothingfound'] = 'Nothing to display';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'Overall feedback';
$string['overallfeedbackfiles'] = 'Maximum number of overall feedback attachments';
$string['overallfeedbackmaxbytes'] = 'Maximum overall feedback attachment size';
$string['overallfeedbackmode'] = 'Overall feedback mode';
$string['overallfeedbackmode_0'] = 'Disabled';
$string['overallfeedbackmode_1'] = 'Enabled and optional';
$string['overallfeedbackmode_2'] = 'Enabled and required';
$string['overallfeedbackmode_help'] = 'If enabled, a text field is displayed at the bottom of the assessment form. Reviewers can put the overall assessment of the submission there, or provide additional explanation of their assessment.';
$string['page-mod-workshop-x'] = 'Any workshop module page';
$string['participant'] = 'Participant';
$string['participantrevierof'] = 'Participant is reviewer of';
$string['participantreviewedby'] = 'Participant is reviewed by';
$string['phaseassessment'] = 'Assessment phase';
$string['phaseclosed'] = 'Closed';
$string['phaseevaluation'] = 'Grading evaluation phase';
$string['phasesoverlap'] = 'The submission phase and the assessment phase can not overlap';
$string['phasesetup'] = 'Setup phase';
$string['phasesubmission'] = 'Submission phase';
$string['pluginadministration'] = 'Workshop administration';
$string['pluginname'] = 'Workshop';
$string['prepareexamples'] = 'Prepare example submissions';
$string['previewassessmentform'] = 'Preview';
$string['privacy:metadata:aggregatedgradinggrade'] = 'Aggregated grade for all assessments made by the user in the given workshop activity';
$string['privacy:metadata:assessmentgrade'] = 'Aggregated grade for the submission suggested by this assessment';
$string['privacy:metadata:assessmentgradinggrade'] = 'Grade for providing this assessment';
$string['privacy:metadata:assessmentgradinggradeover'] = 'Manually overridden value of the grade for providing this assessment';
$string['privacy:metadata:assessmentid'] = 'ID of the assessment';
$string['privacy:metadata:authorid'] = 'ID of the submission author';
$string['privacy:metadata:dimensiongrade'] = 'Grade in the given assessment dimension';
$string['privacy:metadata:dimensionid'] = 'ID of the assessment dimension';
$string['privacy:metadata:example'] = 'Whether this record represents an example submission';
$string['privacy:metadata:feedbackauthor'] = 'Feedback for the author';
$string['privacy:metadata:feedbackauthorformat'] = 'Text format of the feedback for the author';
$string['privacy:metadata:feedbackreviewer'] = 'Feedback for the user providing the assessment';
$string['privacy:metadata:feedbackreviewerformat'] = 'Text format of the feedback for the user providing the assessment';
$string['privacy:metadata:late'] = 'Whether the submission been submitted after the deadline';
$string['privacy:metadata:peercomment'] = 'Comment on the given grade by the user providing the assessment';
$string['privacy:metadata:peercommentformat'] = 'Text format of the comment on the given grade';
$string['privacy:metadata:preference:viewlet-allexamples-collapsed'] = 'The collapsed/expanded state for the \'Example submissions\' viewlet.';
$string['privacy:metadata:preference:viewlet-allsubmissions-collapsed'] = 'The collapsed/expanded state for the \'Workshop submissions report\' viewlet.';
$string['privacy:metadata:preference:viewlet-assessmentform-collapsed'] = 'The collapsed/expanded state for the \'Assessment form\' viewlet.';
$string['privacy:metadata:preference:viewlet-assignedassessments-collapsed'] = 'The collapsed/expanded state for the \'Assigned submissions to assess\' viewlet.';
$string['privacy:metadata:preference:viewlet-cleargrades-collapsed'] = 'The collapsed/expanded state for the \'Workshop toolbox\' viewlet.';
$string['privacy:metadata:preference:viewlet-conclusion-collapsed'] = 'The collapsed/expanded state for the \'Conclusion\' viewlet.';
$string['privacy:metadata:preference:viewlet-examples-collapsed'] = 'The collapsed/expanded state for the \'Example submissions to assess\' viewlet.';
$string['privacy:metadata:preference:viewlet-examplesfail-collapsed'] = 'The collapsed/expanded state for the \'Example submissions to assess\' viewlet.';
$string['privacy:metadata:preference:viewlet-gradereport-collapsed'] = 'The collapsed/expanded state for the \'Workshop grades report\' viewlet.';
$string['privacy:metadata:preference:viewlet-instructauthors-collapsed'] = 'The collapsed/expanded state for the \'Instructions for submission\' viewlet.';
$string['privacy:metadata:preference:viewlet-instructreviewers-collapsed'] = 'The collapsed/expanded state for the \'Instructions for assessment\' viewlet.';
$string['privacy:metadata:preference:viewlet-intro-collapsed'] = 'The collapsed/expanded state for the \'Intro\' viewlet.';
$string['privacy:metadata:preference:viewlet-overallfeedback-collapsed'] = 'The collapsed/expanded state for the \'Overall feedback\' viewlet.';
$string['privacy:metadata:preference:viewlet-ownsubmission-collapsed'] = 'The collapsed/expanded state for the \'Your submission\' viewlet.';
$string['privacy:metadata:preference:viewlet-publicsubmissions-collapsed'] = 'The collapsed/expanded state for the \'Published submissions\' viewlet.';
$string['privacy:metadata:preference:viewlet-yourgrades-collapsed'] = 'The collapsed/expanded state for the \'Your grades\' viewlet.';
$string['privacy:metadata:preference:perpage'] = 'Number of submissions the user prefers to see on one page';
$string['privacy:metadata:published'] = 'Whether the submission should be published to all participants once the workshop is closed';
$string['privacy:metadata:reviewerid'] = 'ID of the user providing the assessment';
$string['privacy:metadata:strategy'] = 'Name of the grading strategy subplugin interpreting the record values';
$string['privacy:metadata:submissioncontent'] = 'Content of the submission';
$string['privacy:metadata:submissioncontentformat'] = 'Text format of the submission content';
$string['privacy:metadata:submissiongrade'] = 'Aggregated grade for the submission written as a decimal number from interval 0..100';
$string['privacy:metadata:submissiongradeover'] = 'Manually overridden value of the aggregated grade';
$string['privacy:metadata:submissionid'] = 'ID of the submission';
$string['privacy:metadata:submissiontitle'] = 'Title of the submission';
$string['privacy:metadata:subsystem:corefiles'] = 'Workshop module stores files embedded in / attached to the submission text';
$string['privacy:metadata:subsystem:coreplagiarism'] = 'Workshop module has inbuilt support for plagiarism prevention systems';
$string['privacy:metadata:timeaggregated'] = 'When the aggregated grade was last calculated';
$string['privacy:metadata:timecreated'] = 'When this record was created in the database';
$string['privacy:metadata:timemodified'] = 'When this record was last modified in the database';
$string['privacy:metadata:userid'] = 'ID of the user for which aggregated grade is calculated';
$string['privacy:metadata:weight'] = 'Weight of the assessment';
$string['privacy:metadata:workshopaggregations'] = 'Holds aggregated grades for assessment';
$string['privacy:metadata:workshopassessments'] = 'Holds information about allocated assessments of workshop module submissions';
$string['privacy:metadata:workshopgrades'] = 'Holds information about how the assessment forms were filled with grades and comments';
$string['privacy:metadata:workshopid'] = 'ID of the workshop activity';
$string['privacy:metadata:workshopsubmissions'] = 'Holds information about workshop module submissions';
$string['privacy:request:delete:title'] = '[Deleted]';
$string['privacy:request:delete:content'] = 'The content has been deleted (requested by the user or expired)';
$string['publishedsubmissions'] = 'Published submissions';
$string['publishsubmission'] = 'Publish submission';
$string['publishsubmission_help'] = 'Published submissions are available to the others when the workshop is closed.';
$string['reassess'] = 'Re-assess';
$string['receivedgrades'] = 'Grades received';
$string['recentassessments'] = 'Workshop assessments:';
$string['recentsubmissions'] = 'Workshop submissions:';
$string['resetassessments'] = 'Delete all assessments';
$string['resetassessments_help'] = 'You can choose to delete just allocated assessments without affecting submissions. If submissions are to be deleted, their assessments will be deleted implicitly and this option is ignored. Note this also includes assessments of example submissions.';
$string['resetsubmissions'] = 'Delete all submissions';
$string['resetsubmissions_help'] = 'All the submissions and their assessments will be deleted. This does not affect example submissions.';
$string['resetphase'] = 'Switch to the setup phase';
$string['resetphase_help'] = 'If enabled, all workshops will be put into the initial setup phase.';
$string['saveandclose'] = 'Save and close';
$string['saveandcontinue'] = 'Save and continue editing';
$string['saveandpreview'] = 'Save and preview';
$string['saveandshownext'] = 'Save and show next';
$string['search:activity'] = 'Workshop - activity information';
$string['selfassessmentdisabled'] = 'Self-assessment disabled';
$string['showingperpage'] = 'Showing {$a} items per page';
$string['showingperpagechange'] = 'Change ...';
$string['someuserswosubmission'] = 'There is at least one author who has not yet submitted their work';
$string['sortasc'] = 'Ascending sort';
$string['sortdesc'] = 'Descending sort';
$string['submissionsallocation'] = 'Submissions allocation';
$string['strategy'] = 'Grading strategy';
$string['strategy_help'] = 'The grading strategy determines the assessment form used and the method of grading submissions. There are 4 options:

* Accumulative grading - Comments and a grade are given regarding specified aspects
* Comments - Comments are given regarding specified aspects but no grade can be given
* Number of errors - Comments and a yes/no assessment are given regarding specified assertions
* Rubric - A level assessment is given regarding specified criteria';
$string['strategyhaschanged'] = 'The workshop grading strategy has changed since the form was opened for editing.';
$string['submission'] = 'Submission';
$string['submissionattachment'] = 'Attachment';
$string['submissionby'] = 'Submission by {$a}';
$string['submissioncontent'] = 'Submission content';
$string['submissiondeleteconfirm'] = 'Are you sure you want to delete the following submission?';
$string['submissiondeleteconfirmassess'] = 'Are you sure you want to delete the following submission? Note this will also delete {$a->count} assessments associated with this submission, which may affect the reviewers\' grades.';
$string['submissionend'] = 'Submissions deadline';
$string['submissionendbeforestart'] = 'Submissions deadline can not be specified before the open for submissions date';
$string['submissionendevent'] = '{$a} deadline for submissions';
$string['submissionenddatetime'] = 'Submissions deadline: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendswitch'] = 'Switch to the next phase after the submissions deadline';
$string['submissionendswitch_help'] = 'If the submissions deadline is specified and this box is checked, the workshop will automatically switch to the assessment phase after the submissions deadline.

If you enable this feature, it is recommended to set up the scheduled allocation method, too. If the submissions are not allocated, no assessment can be done even if the workshop itself is in the assessment phase.';
$string['submissiongrade'] = 'Grade for submission';
$string['submissiongrade_help'] = 'This setting specifies the maximum grade that may be obtained for submitted work.';
$string['submissiongradeof'] = 'Grade for submission (of {$a})';
$string['submissionlastmodified'] = 'Last modified';
$string['submissionrequiredcontent'] = 'You need to enter some text or add a file.';
$string['submissionrequiredfile'] = 'You need to add a file or enter some text.';
$string['submissionsettings'] = 'Submission settings';
$string['submissionstart'] = 'Open for submissions from';
$string['submissionstartevent'] = '{$a} opens for submissions';
$string['submissionstartdatetime'] = 'Open for submissions from {$a->daydatetime} ({$a->distanceday})';
$string['submissiontitle'] = 'Title';
$string['submissiontypefileavailable'] = 'File attachment<span class="accesshide"> available</span>';
$string['submissiontypefilerequired'] = '<span class="accesshide">File attachment </span>Required';
$string['submissiontypetextavailable'] = 'Online text<span class="accesshide"> available</span>';
$string['submissiontypetextrequired'] = '<span class="accesshide">Online text </span>Required';
$string['submissiontypedisabled'] = 'This submission type is disabled for this workshop.';
$string['submissiontypes'] = 'Submission types';
$string['submissionsreport'] = 'Workshop submissions report';
$string['submittednotsubmitted'] = 'Submitted ({$a->submitted}) / not submitted ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = 'Submissions allocation method';
$string['subplugintype_workshopallocation_plural'] = 'Submissions allocation methods';
$string['subplugintype_workshopeval'] = 'Grading evaluation method';
$string['subplugintype_workshopeval_plural'] = 'Grading evaluation methods';
$string['subplugintype_workshopform'] = 'Grading strategy';
$string['subplugintype_workshopform_plural'] = 'Grading strategies';
$string['switchingphase'] = 'Switching phase';
$string['switchphase'] = 'Switch phase';
$string['switchphaseauto'] = 'Switching has been scheduled';
$string['switchphasenext'] = 'Switch to the next phase';
$string['switchphase10'] = 'Switch to the setup phase';
$string['switchphase10info'] = 'You are about to switch the workshop into the <strong>Setup phase</strong>. In this phase, users cannot modify their submissions or their assessments. Teachers may use this phase to change workshop settings, modify the grading strategy or tweak assessment forms.';
$string['switchphase20'] = 'Switch to the submission phase';
$string['switchphase20info'] = 'You are about to switch the workshop into the <strong>Submission phase</strong>. Students may submit their work during this phase (within the submission access control dates, if set). Teachers may allocate submissions for peer review.';
$string['switchphase30'] = 'Switch to the assessment phase';
$string['switchphase30auto'] = 'Workshop will automatically switch into the assessment phase after {$a->daydatetime} ({$a->distanceday})';
$string['switchphase30info'] = 'You are about to switch the workshop into the <strong>Assessment phase</strong>. In this phase, reviewers may assess the submissions they have been allocated (within the assessment access control dates, if set).';
$string['switchphase40'] = 'Switch to the evaluation phase';
$string['switchphase40info'] = 'You are about to switch the workshop into the <strong>Grading evaluation phase</strong>. In this phase, users cannot modify their submissions or their assessments. Teachers may use the grading evaluation tools to calculate final grades and provide feedback for reviewers.';
$string['switchphase50'] = 'Close workshop';
$string['switchphase50info'] = 'You are about to close the workshop. This will result in the calculated grades appearing in the gradebook. Students may view their submissions and their submission assessments.';
$string['taskassesspeers'] = 'Assess peers';
$string['taskassesspeersdetails'] = 'total: {$a->total}<br />pending: {$a->todo}';
$string['taskassessself'] = 'Assess yourself';
$string['taskconclusion'] = 'Provide a conclusion of the activity';
$string['taskdone'] = 'Task done';
$string['taskfail'] = 'Task fail';
$string['taskinfo'] = 'Task info';
$string['taskinstructauthors'] = 'Provide instructions for submission';
$string['taskinstructreviewers'] = 'Provide instructions for assessment';
$string['taskintro'] = 'Set the workshop description';
$string['tasksubmit'] = 'Submit your work';
$string['tasktodo'] = 'Task to do';
$string['toolbox'] = 'Workshop toolbox';
$string['undersetup'] = 'The workshop is currently being set up. Please wait until it is switched to the next phase.';
$string['useexamples'] = 'Use examples';
$string['useexamples_desc'] = 'Example submissions are provided for practice in assessing';
$string['useexamples_help'] = 'If enabled, users can try assessing one or more example submissions and compare their assessment with a reference assessment. The grade is not counted in the grade for assessment.';
$string['usepeerassessment'] = 'Use peer assessment';
$string['usepeerassessment_desc'] = 'Students may assess the work of others';
$string['usepeerassessment_help'] = 'If enabled, a user may be allocated submissions from other users to assess and will receive a grade for assessment in addition to a grade for their own submission.';
$string['userdatecreated'] = 'submitted on <span>{$a}</span>';
$string['userdatemodified'] = 'modified on <span>{$a}</span>';
$string['userplan'] = 'Workshop planner';
$string['userplancurrentphase'] = 'Current phase';
$string['userplan_help'] = 'The workshop planner displays all phases of the activity and lists the tasks for each phase. The current phase is highlighted and task completion is indicated with a tick.';
$string['userplanaccessibilityskip'] = 'Skip to current tasks';
$string['userplanaccessibilitytitle'] = 'Workshop timeline with {$a} phases';
$string['useselfassessment'] = 'Use self-assessment';
$string['useselfassessment_help'] = 'If enabled, a user may be allocated their own submission to assess and will receive a grade for assessment in addition to a grade for their submission.';
$string['useselfassessment_desc'] = 'Students may assess their own work';
$string['viewworkshopsummary'] = 'View workshop summary';
$string['weightinfo'] = 'Weight: {$a}';
$string['withoutsubmission'] = 'Reviewer without own submission';
$string['workshop:addinstance'] = 'Add a new workshop';
$string['workshop:allocate'] = 'Allocate submissions for review';
$string['workshop:editdimensions'] = 'Edit assessment forms';
$string['workshop:exportsubmissions'] = 'Export submissions';
$string['workshop:deletesubmissions'] = 'Delete submissions';
$string['workshop:ignoredeadlines'] = 'Ignore time restrictions';
$string['workshop:manageexamples'] = 'Manage example submissions';
$string['workshopname'] = 'Workshop name';
$string['workshop:overridegrades'] = 'Override calculated grades';
$string['workshop:peerassess'] = 'Peer assess';
$string['workshop:publishsubmissions'] = 'Publish submissions';
$string['workshop:submit'] = 'Submit';
$string['workshop:switchphase'] = 'Switch phase';
$string['workshop:view'] = 'View workshop';
$string['workshop:viewallassessments'] = 'View all assessments';
$string['workshop:viewallsubmissions'] = 'View all submissions';
$string['workshop:viewauthornames'] = 'View author names';
$string['workshop:viewauthorpublished'] = 'View authors of published submissions';
$string['workshop:viewpublishedsubmissions'] = 'View published submissions';
$string['workshop:viewreviewernames'] = 'View reviewer names';
$string['yourassessmentfor'] = 'Your assessment for {$a}';
$string['yourgrades'] = 'Your grades';
$string['yoursubmission'] = 'Your submission';
$string['yoursubmissionwithassessments'] = 'Your submission with assessments';
