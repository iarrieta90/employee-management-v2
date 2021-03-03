<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="<?=URL?>node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=URL?>node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?=URL?>node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=URL?>node_modules/jsgrid/css/theme.css">
    <link rel="stylesheet" href="<?=URL?>node_modules/jsgrid/css/jsgrid.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>assets/css/main.css">

</head>

<body>
    <?php include_once 'views/header.php'; ?>
    <?php require_once 'controllers/dashboard.php'; ?>
    <section id="form-wrapper">
        <div class="container overflow-hidden">
            <form class="needs-validation" action="<?=URL?>dashboard/employeeProfile" method="POST">
            <h4 class="mb-3"><?= isset($this->employee) ? $this->employee['name'] . "'s profile" : "New employee" ?></h4>
            <input type="hidden" name="_method" value="<?= isset($this->employee) ? "PUT" : "POST" ?>">
            <div class="row">
                <div class="col-sm-6 p-2">
                <label for="uName" class="form-label">First name</label>
                <input type="text" class="form-control" id="uName" name="name" placeholder="" value="<?= isset($this->employee) ? $this->employee['name']: '' ?>" required="">
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
                </div>

                <div class="col-sm-6 p-2">
                <label for="uLastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="uLastName" name="lastName" placeholder="" value="<?= isset($this->employee) ? $this->employee['lastName'] : '' ?>" required="">
                </div>

                <div class="col-sm-6 p-2">
                <label for="uEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="uEmail" name="email" value="<?= isset($this->employee) ? $this->employee['email'] : '' ?>" required="">
                </div>
                <div class="col-sm-6 p-2">
                <label for="uGender" class="form-label">Gender</label><br>
                <select class="form-control" id="uGender" name="gender" required>
                    <option value="man" <?= isset($this->employee) ? ($this->employee['gender'] == "man" ? "selected" : "") : '' ?>>Man</option>
                    <option value="woman" <?= isset($this->employee) ? ($this->employee['gender'] == "woman" ? "selected" : "") : '' ?>>Woman</option>
                    <option value="nobinary" <?= isset($this->employee) ? ($this->employee['gender'] == "nobinary" ? "selected" : "") : '' ?>>No binary</option>
                </select>
                </div>

                <div class="col-md-6 p-2">
                <label for="uAddress" class="form-label">Street Address</label>
                <input type="text" class="form-control" id="uAddress" name="streetAddress" required value="<?= isset($this->employee) ? $this->employee['streetAddress'] : '' ?>">
                </div>

                <div class="col-sm-6 p-2">
                <label for="uState" class="form-label">State</label>
                <input type="text" class="form-control" id="uState" name="state" value="<?= isset($this->employee) ? $this->employee['state'] : '' ?>">
                </div>


                <div class="col-sm-6 p-2">
                <label for="uCity" class="form-label">City</label>
                <input type="text" class="form-control" id="uCity" name="city" value="<?= isset($this->employee) ? $this->employee['city'] : '' ?>">
                </div>

                <div class="col-md-6 p-2">
                <label for="uAge" class="form-label">Age</label>
                <input type="number" class="form-control" id="uAge" name="age" required value="<?= isset($this->employee) ? $this->employee['age'] : '' ?>">
                </div>

                <div class="col-sm-6 p-2">
                <label for="uPC" class="form-label">Postal Code</label>
                <input type="number" class="form-control" id="uPC" name="postalCode" required value="<?= isset($this->employee) ? $this->employee['postalCode'] : '' ?>">
                </div>

                <div class="col-sm-6 p-2">
                <label for="uPhoneNumber" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="uPhoneNumber" name="phoneNumber" required value="<?= isset($this->employee) ? $this->employee['phoneNumber'] : '' ?>">
                </div>
            </div>
            <input type="hidden" name="id" value="<?= isset($this->employee) ? $this->employee['id'] : '' ?>" >

            <input type="submit" class="w-30 btn btn-dark mt-5 mr-3" value="<?= isset($this->employee) ? 'Update' : 'Create' ?>" name="employeeProfile">
            <a class="w-30 btn btn-dark mt-5" href="<?=URL?>dashboard">Go Back</a>
            </form>
        </div>
    </section>
</body>
</html>
