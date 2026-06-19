<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mentor Request Form</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#081421;
    color:white;
}

.request-container{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:50px 20px;
}

.request-card{
    background:#10263d;
    border:1px solid cyan;
    border-radius:20px;
    padding:35px;
    width:100%;
    max-width:700px;
    box-shadow:0 0 20px rgba(0,255,255,.3);
}

.title{
    text-align:center;
    color:cyan;
    margin-bottom:30px;
}

.form-control,
.form-select{
    background:#0d1b2a;
    border:1px solid cyan;
    color:white;
}

.form-control:focus,
.form-select:focus{
    background:#0d1b2a;
    color:white;
    border-color:cyan;
    box-shadow:none;
}

.btn-request{
    width:100%;
    background:cyan;
    color:#081421;
    font-weight:bold;
    padding:12px;
    border:none;
}

.btn-request:hover{
    background:white;
}

</style>

</head>
<body>

<div class="request-container">

<div class="request-card">

<h2 class="title">Request a Mentor</h2>

<form action="mentor_request_action.php" method="POST">

<div class="row">

<div class="col-md-6 mb-3">
<label class="form-label">Full Name</label>
<input
type="text"
name="full_name"
class="form-control"
placeholder="Enter your name"
required>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Email</label>
<input
type="email"
name="email"
class="form-control"
placeholder="Enter email"
required>
</div>

</div>

<div class="mb-3">
<label class="form-label">College / University</label>
<input
type="text"
name="college"
class="form-control"
placeholder="College Name"
required>
</div>

<div class="mb-3">
<label class="form-label">Course</label>
<input
type="text"
name="course"
class="form-control"
placeholder="BCA, B.Tech, MCA etc."
required>
</div>

<div class="mb-3">
<label class="form-label">Career Interest</label>
<select
name="career_interest"
class="form-select"
required>

<option value="">Select Domain</option>
<option>Web Development</option>
<option>Data Science</option>
<option>Artificial Intelligence</option>
<option>Cyber Security</option>
<option>UI/UX Design</option>
<option>Software Engineering</option>

</select>
</div>

<div class="mb-3">
<label class="form-label">Preferred Mentor</label>
<input
type="text"
name="preferred_mentor"
class="form-control"
placeholder="Mentor Name">
</div>

<div class="mb-3">
<label class="form-label">Why do you need mentorship?</label>
<textarea
name="mentorship_reason"
class="form-control"
rows="5"
placeholder="Describe your goals and expectations"></textarea>
</div>

<div class="mb-3">
<label class="form-label">Skills</label>
<input
type="text"
name="skills"
class="form-control"
placeholder="HTML, CSS, Bootstrap, Python">
</div>

<button type="submit" class="btn btn-request">
Send Mentor Request
</button>

</form>


</div>

</div>

</body>
</html>