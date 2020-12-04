<head>
    <title>Sign-up Page</title>
    <link rel="stylesheet" type="text/css" href="styles1.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="bug.js" type="text/javascript"></script>

</head>
<body>
    <header>
        <p> BugMe Issue Tracker</p>

    </header>

    <div class="sidebar">
        <ul>
            <li><img src="img/home.png" width="25px" height="25px"  /><a id="home" href="#">Home</a></li>
            <li><img src="img/add.png" width="25px" height="25px"  /><a id="add" href="#">Add User</a></li>
            <li><img src="img/issue.png" width="25px" height="25px"  /><a id="newissue" href="#">New Issue</a></li>
            <li><img src="img/log.png" width="22px" height="22px"  /><a id="logout" href="#">Logout</a></li>
        </ul>
    </div>

    <main>
         <div>
            <div id="result" class="user-form">
            <h1>Create Issue</h1>
            <form action="#" method="post">
                <label for="ti">Title:</label>
                <input type="text" id="ti" name="title">
                
                <label for="de">Description</label>
                <input type="text" id="de" name="description"><br>
                
                <label for="as">Assigned To</label>
                <input type="text" id="as" name="assignedTo"><br>
                
                <label for="ty">Type</label>
                <select name="type" id="ty">
                <option value="bug">Bug</option>
                <option value="propsal">Proposal</option>
                <option value="task">Task</option>
                </select><br>


                <label for="pr">Priority</label>
                <select name="priority" id="pr">
                <option value="Minor">Minor</option>
                <option value="Major">Major</option>
                <option value="Critical">Critical</option>
                </select><br>


                <input type="submit" class="btn-primary">
            </form>
            </div>
        </div>
    </main>

</body>