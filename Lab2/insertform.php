<html>
    <head>
        <title>Add Contact</title>
        <link rel="stylesheet" href="styles.css" />
    </head>

  <body>
    <div class="row">
        <div class="form">
            <h2 class="form-title">
                Add a New Contact
            </h2>
            
            <div>
                <form action="insert.php" method="post">
                    <input type="text" placeholder="Contact Name" name="contact_name" required/>
                    <input type="text" placeholder="Contact Profession" name="contact_profession" required/>
                    <input type="text" placeholder="Telephone Number" name="telephone_number" required/>
                    <input type="text" placeholder="Mobile Number" name="mobile_number" required/>
                    <div style="display: flex; margin-top: 10px;">
                        <input type="submit" style="margin-right:10px"/>
                        <input type="reset" />
                    </div>    
                </form>
            </div>
        </div>
    </div>

  </body>
</html>