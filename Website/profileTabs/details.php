<div class=profile-image>
    <input type="file" accept="image/*" onchange="loadFile(event)">
    <img id="output" />
</div>
<div class=profile-details>
    <p>First Name:</p>
    <p>Last Name: </p>
    <p>Email:</p>
    <p>Date of Birth:</p>    
    <p>Phone Number:</p>
    <p>Address:</p>
</div>
<input type="button" value="Edit Profile">


<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>