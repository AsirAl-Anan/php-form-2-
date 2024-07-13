<?php 
include 'configuration/database.php';
$db = new Database();

// Variable declaration
$fullname = $nickname = $fname = $mname = $dob = $email = $phone = $address = $about = $gender = $sscyear = $sscboard = $sscresult = $schoolname = $collegename = $hscyear = $hscboard = $hscresult = '';
$fullnameErr = $tableErr = $nicknameErr = $fnameErr = $mnameErr = $dobErr = $emailErr = $phoneErr = $addressErr = $genderErr = $sscyearErr = $sscboardErr = $sscresultErr = $schoolnameErr = $collegenameErr = $hscyearErr = $hscboardErr = $hscresultErr = '';

if(isset($_POST['submit'])){
  if(empty($_POST['fullname'])){
    $fullnameErr = "Full name is required";
  }else{
    $fullname = $_POST['fullname'];
  }
  if(empty($_POST['nickname'])){
    $nicknameErr = "Nickname is required";
  }else{
    $nickname = $_POST['nickname'];
  }
  if(empty($_POST['fname'])){
    $fnameErr = "Father's name is required";
  }else{
    $fname = $_POST['fname'];
  }
  if(empty($_POST['mname'])){
    $mnameErr = "Mother's name is required";
  }else{
    $mname = $_POST['mname'];
  }
  if(empty($_POST['dob'])){
    $dobErr = "Date of birth is required";
  }else{
    $dob = $_POST['dob'];
  }
  if(empty($_POST['email'])){
    $emailErr = "Email is required";
  }else{
    $email = $_POST['email'];
  } 
  if(empty($_POST['phone'])){
    $phoneErr = "Phone number is required";
  }else{
    $phone = $_POST['phone'];
  }
  if(empty($_POST['address'])){
    $addressErr = "Address is required";
  }else{
    $address = $_POST['address'];
  }
  if(empty($_POST['about'])){
    $about = '';
  }else{
    $about = $_POST['about'];
  }
  if(empty($_POST['gender'])){
    $genderErr = "Gender is required";
  }else{
    $gender = $_POST['gender'];
  }
  if (empty($_POST['hscyear']) || empty($_POST['sscyear']) || empty($_POST['hscboard']) || empty($_POST['sscboard']) || empty($_POST['hscresult']) || empty($_POST['sscresult'])) {
    $tableErr = "Incomplete Academic information";
  } else {
    $hscyear = $_POST['hscyear'];
    $hscboard = $_POST['hscboard'];
    $hscresult = $_POST['hscresult'];
    $sscyear = $_POST['sscyear'];
    $sscboard = $_POST['sscboard'];
    $sscresult = $_POST['sscresult'];
  }

  // Add conditions for schoolname and collegename
  if(empty($_POST['schoolname'])){
    $schoolnameErr = "School name is required";
  }else{
    $schoolname = $_POST['schoolname'];
  }

  if(empty($_POST['collegename'])){
    $collegenameErr = "College name is required";
  }else{
    $collegename = $_POST['collegename'];
  }

  if($fullnameErr || $nicknameErr || $fnameErr || $mnameErr || $emailErr || $phoneErr || $dobErr || $genderErr || $tableErr ){
    echo "<script>alert('Please fill up all the required fields');</script>";
  } else{
    $queryForInsertingData ="INSERT INTO registration (fullname, nickname, fathername, mothername, address, phone, email, dateofbirth, gender, about, schoolname, sscyear, sscboard, sscresult, collegename, hscyear, hscboard, hscresult) VALUES ('$fullname','$nickname','$fname','$mname','$address','$phone','$email','$dob','$gender','$about','$schoolname','$sscyear','$sscboard','$sscresult','$collegename','$hscyear','$hscboard','$hscresult')";
    $result = $db->insert($queryForInsertingData);
    if($result){
      echo "<script>alert('Form submitted succesfully');</script>";
    }else{
      echo "Process Failed try again";
    }
  }
}
?>
<!-- HTML starting -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission Form</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="text-center">
    <h1>Admission Form</h1>
  </div>
  <div class="container">
    <form action="" method="POST">
      <div class="form-group">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" id="fullname" placeholder="<?php echo $fullnameErr ? $fullnameErr : 'Enter your full name'; ?>" value="<?php echo htmlspecialchars($fullname); ?>">
      </div>
      <div class="form-group">
        <label for="nickname">Nick Name:</label>
        <input type="text" name="nickname" id="nickname" placeholder="<?php echo $nicknameErr ? $nicknameErr : 'Enter your nick name'; ?>" value="<?php echo htmlspecialchars($nickname); ?>">
      </div>
      <div class="form-group">
        <label for="fathername">Father's Name:</label>
        <input type="text" name="fname" id="fathername" placeholder="<?php echo $fnameErr ? $fnameErr : 'Enter your father\'s name'; ?>" value="<?php echo htmlspecialchars($fname); ?>">
      </div>
      <div class="form-group">
        <label for="mothername">Mother's Name:</label>
        <input type="text" name="mname" id="mothername" placeholder="<?php echo $mnameErr ? $mnameErr : 'Enter your mother\'s name'; ?>" value="<?php echo htmlspecialchars($mname); ?>">
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" name="address" placeholder="<?php echo $addressErr ? $addressErr : 'Your address...'; ?>" value="<?php echo htmlspecialchars($address); ?>">
      </div>
      <div class="form-group">
        <label for="phone">Phone number:</label>
        <input type="text" name="phone" id="phone" placeholder="<?php echo $phoneErr ? $phoneErr : 'Enter your phone number'; ?>" value="<?php echo htmlspecialchars($phone); ?>">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="<?php echo $emailErr ? $emailErr : 'Enter your email address'; ?>" value="<?php echo htmlspecialchars($email); ?>">
      </div>
      <div class="form-group">
        <label for="dob">Date of birth:</label>
        <input type="date" name="dob" id="dob" required  placeholder="<?php echo $dobErr ? $dobErr : ''; ?>" value="<?php echo htmlspecialchars($dob); ?>">
        <br>
       
      </div>
      <div class="form-group">
        <label>Gender:</label>
        <div id="gender">
          <input type="radio" value="male" name="gender" <?php if ($gender == 'male') echo 'checked'; ?>>Male
          <input type="radio" value="female" name="gender" <?php if ($gender == 'female') echo 'checked'; ?>>Female
          <input type="radio" value="others" name="gender" <?php if ($gender == 'others') echo 'checked'; ?>>Others
        </div>
        <small class="text-danger"><?php echo $genderErr; ?></small>
      </div>
      <div class="form-group">
        <label for="about">Tell about yourself:</label>
        <textarea name="about" id="about" rows="4" cols="50" placeholder="Say something about yourself"><?php echo htmlspecialchars($about); ?></textarea>
      </div>
      
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="6">Board Success Information</th>
          </tr>
          <tr>
            <th>Exam</th>
            <th>Name of School/College</th>
            <th>Year</th>
            <th>Board</th>
            <th>GPA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>SSC(10th)</td>
            <td><input type="text" name="schoolname" placeholder="Enter your school name." value="<?php echo htmlspecialchars($schoolname); ?>"></td>
            <td><input type="text" name="sscyear" placeholder="Enter SSC year" value="<?php echo htmlspecialchars($sscyear); ?>"></td>
            <td>
              <select name="sscboard" id="boards">
                <option value="dhaka" <?php if ($sscboard == 'dhaka') echo 'selected'; ?>>Dhaka Board</option>
                <option value="rajshahi" <?php if ($sscboard == 'rajshahi') echo 'selected'; ?>>Rajshahi Board</option>
                <option value="chittagong" <?php if ($sscboard == 'chittagong') echo 'selected'; ?>>Chittagong Board</option>
                <option value="barishal" <?php if ($sscboard == 'barishal') echo 'selected'; ?>>Barishal Board</option>
                <option value="sylhet" <?php if ($sscboard == 'sylhet') echo 'selected'; ?>>Sylhet Board</option>
                <option value="dinajpur" <?php if ($sscboard == 'dinajpur') echo 'selected'; ?>>Dinajpur Board</option>
              </select>
            </td>
            <td><input type="text" name="sscresult" placeholder="Enter your SSC GPA" value="<?php echo htmlspecialchars($sscresult); ?>"></td>
          </tr>
          <tr>
            <td>HSC(12th)</td>
            <td><input type="text" name="collegename" placeholder="Enter your College name." value="<?php echo htmlspecialchars($collegename); ?>"></td>
            <td><input type="text" name="hscyear" placeholder="Enter HSC year" value="<?php echo htmlspecialchars($hscyear); ?>"></td>
            <td>
              <select name="hscboard" id="boards">
                <option value="dhaka" <?php if ($hscboard == 'dhaka') echo 'selected'; ?>>Dhaka Board</option>
                <option value="rajshahi" <?php if ($hscboard == 'rajshahi') echo 'selected'; ?>>Rajshahi Board</option>
                <option value="chittagong" <?php if ($hscboard == 'chittagong') echo 'selected'; ?>>Chittagong Board</option>
                <option value="barishal" <?php if ($hscboard == 'barishal') echo 'selected'; ?>>Barishal Board</option>
                <option value="sylhet" <?php if ($hscboard == 'sylhet') echo 'selected'; ?>>Sylhet Board</option>
                <option value="dinajpur" <?php if ($hscboard == 'dinajpur') echo 'selected'; ?>>Dinajpur Board</option>
              </select>
            </td>
            <td><input type="text" name="hscresult" placeholder="Enter your HSC GPA" value="<?php echo htmlspecialchars($hscresult); ?>"></td>
          </tr>
        </tbody>
      </table>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>
</html>
