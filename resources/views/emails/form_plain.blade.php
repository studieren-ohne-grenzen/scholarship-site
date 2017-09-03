Es gab eine neue Bewerbung!

1. Personal
-----------
First name: {{ $applicant->first_name }}
Family name: {{ $applicant->family_name }}
Nationality: {{ $applicant->nationality }}
Gender: @if($applicant->gender === 'male') Male @else Female @endif
Current address: {{ $applicant->current_address }}
Civil status: {{ $applicant->civil_status }}
Date of Birth: {{ $applicant->date_of_birth }}
Place of Birth: {{ $applicant->place_of_birth }}
Phone number: {{ $applicant->phone }}
E-Mail: {{ $applicant->email }}

2. Family
---------
Name, age and profession of mother: {{ $applicant->mother }}
Name, age and profession of father: {{ $applicant->father }}
If married: name, age and profession of husband / wife: {{ $applicant->spouse }}
If applicable: age of child / children: {{ $applicant->children }}
Age and profession of sibling(s): {{ $applicant->siblings }}

3. Personal situation:
----------------------
Please describe shortly the general conditions of your family:
{{ $applicant->conditions }}

Please describe shortly the profession of your parents and how much they earn per month:
{{ $applicant->parents_profession }}

Please describe shortly how and where you live:
{{ $applicant->where_live }}

How many people are living there?
{{ $applicant->how_many_people }}

Do you have a job/occupation? Have you worked before?
{{ $applicant->job }}

Has your family been affected by the conflict? Did you have any material loss due to the conflict?
{{ $applicant->conflict }}

Would you be able to afford your studies without the support of SOG?
@if ($applicant->support_needed === '1') Yes @else No @endif

Any additional information you would like to add?
{{ $applicant->additional_information }}


4. Education
------------
Have you already been enrolled at a university?
@if($applicant->enrolled === '1') Yes @else No @endif

If yes: In which field?
{{ $applicant->major }}

If yes: Are you still studying?
@if($applicant->still_studying === '1') Yes @else No @endif

If no: What were your reasons for interrupting your studies?
{{ $applicant->dropping_out_reasons }}

In what field do you want to study? What university?
{{ $applicant->wanted_major }}

What languages do you speak? Please indicate level (spoken/written/mother tongue)
{{ $applicant->languages }}

Do you have the possibility to live with your family during your studies?
@if($applicant->live_with_family === '1') Yes @else No @endif

5. Engagement & Motivation
--------------------------

Have you already been socially engaged (e.g. volunteering in an organization, own social project, etc. work without payment)? Describe your function:
{{ $applicant->engagement }}

Where do you see the biggest problems in your country/region?
{{ $applicant->biggest_problems }}

Where do you see yourself in the near future? What do you want to do after finishing your studies?
{{ $applicant->future }}

What are your reasons/motivation for studying?
{{ $applicant->motivation }}

6. Personal project
-------------------

Please describe shortly your idea for a personal project which would help to develop your region/society
{{ $applicant->project }}

What are the concrete objects/aims of your project?
{{ $applicant->project_goal }}

Who do you want to reach? How many people would benefit from your project?
{{ $applicant->project_reach }}

What would be your role in the project?
{{ $applicant->project_role }}

How could your project be financially supported? (please remember, SOG does not grant any financial support for the project)
{{ $applicant->project_finances }}

Are there any possible partners (NGOs, local organizations, governmental institutions) who could cooperate in your project?
{{ $applicant->project_partners }}
