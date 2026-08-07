<?php
include "../Controller/FormValidation.php";
?>

<!DOCTYPE html>
<html>
<head>

    <title>Form Validation</title>

    <script>

        function collect_data()
        {
            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();
            let website = document.getElementById("website").value.trim();
            let comment = document.getElementById("comment").value.trim();

            let female = document.getElementById("female").checked;
            let male = document.getElementById("male").checked;
            let other = document.getElementById("other").checked;

            let valid = true;
            let message = "";

            if(name.length == 0)
            {
                message += "Name is required\n";
                valid = false;
            }

            if(email.length == 0)
            {
                message += "Email is required\n";
                valid = false;
            }

            if(!female && !male && !other)
            {
                message += "Please select Gender\n";
                valid = false;
            }

            if(!valid)
            {
                alert(message);
            }

            return valid;
        }

    </script>

</head>

<body>

<h2>PHP Form Validation Example</h2>

<p>* required field</p>

<form method="post" onsubmit="return collect_data()" action="">

<table>

    <tr>
        <td>
            <label for="name">Name:</label>
        </td>

        <td>
            <input type="text" id="name" name="name">
            <?php echo $name; ?>
        </td>

        <td>*</td>
    </tr>


    <tr>
        <td>
            <label for="email">E-mail:</label>
        </td>

        <td>
            <input type="text" id="email" name="email">
            <?php echo $email; ?>
        </td>

        <td>*</td>
    </tr>


    <tr>
        <td>
            <label for="website">Website:</label>
        </td>

        <td>
            <input type="text" id="website" name="website">
            <?php echo $website; ?>
        </td>
    </tr>


    <tr>
        <td>
            <label for="comment">Comment:</label>
        </td>

        <td>
            <textarea id="comment" name="comment"></textarea>
            <?php echo $comment; ?>
        </td>
    </tr>


    <tr>
        <td>
            <label>Gender:</label>
        </td>

        <td>

            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label>

            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>

            <input type="radio" id="other" name="gender" value="Other">
            <label for="other">Other</label>

            <?php echo $gender; ?>

        </td>

        <td>*</td>
    </tr>


    <tr>
        <td>
            <input type="submit" id="submit" name="submit" value="Submit">

            <input type="reset" id="reset" name="reset">
        </td>
    </tr>

</table>

</form>

</body>
</html>