<!DOCTYPE html>
<html>
    <head>
        <title>form</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <h1>Buat Account Baru!</h1>
            <h3>Sign Up Form</h3>
        </div>
    <form method = "POST" action="/welcome">
    
    <div>
            <p>First Name:</p>
            
                <input type="text" id="firstname" name="firstname" value = "">
            

            <p>Last Name:</p>
            
                <input type="text" id="lastname" name="lastname" value = "">
            
        </div>

        <div>
            <p>Gender:</p>
            
                <input type="radio" name="gender" value="0">Male <br>
                <input type="radio" name="gender" value="1">Female <br>
                <input type="radio" name="gender" value="2">Other
            
        </div>

        <div>
            <p>Nationality:</p>
            <select>
                <option value="ina">Indonesian</option>
                <option value="sin">Singaporean</option>
                <option value="mas">Malaysian</option>
                <option value="aus">Australian</option>
            </select>
        </div>

        <div>
            <p>Language Spoken:</p>
            
                <input type="checkbox" name="langs" value="bahasa">Bahasa Indonesia <br>
                <input type="checkbox" name="langs" value="eng">English <br>
                <input type="checkbox" name="langs" value="other">Other
            
        </div>

        <div>
            <p>Bio:</p>
            
                <textarea cols="30" rows="5"></textarea>
            
        </div>

        <div>
                <input type="submit" value="Sign Up">
    </form>
        </div>
    </body>
</html>