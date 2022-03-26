<h1>Student info submit</h1>
    <form action="/upload-docs" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Full Name:</label><br>
        <input type="text" id="name" name="name" value=""><br>
        <label for="email">Email ID:</label><br>
        <input type="text" id="email" name="email" value=""><br>
        <label for="phone">Mob num-:</label><br>
        <input type="number" id="phone" name="phone" value=""><br><br>
        <label for="cgpa">CGPA:</label><br>
        <input type="text" id="cgpa" name="cgpa" value=""><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    