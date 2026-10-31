<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Complete the form</h1>
    </header>

    <section>
        <form
            action="cad.php"
            method="get"
        >
            <label for="name">Name</label>
            <input 
                type="text"
                name="name"
                id="idname"
            >

            <label for="sname">Surname</label>
            <input
                type="text"
                name="sname"
                id="idsname"
            >

            <label for="address">Address</label>
            <input
                type="text"
                name="address"
                id="idaddress"
            >

            <input 
                type="submit"
                value="Send"
            >
        </form>
    </section>
</body>
</html>
