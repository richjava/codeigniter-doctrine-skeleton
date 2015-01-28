<div class="row">
    <div class="col-md-9">
        <div>
            <h1 id="welcome">Welcome to <?php echo $name ?></h1>
	    <?php if (isset($user)): ?>
	    <p>You're all set to go! Below is the data from the database.</p>
            <h2>User</h2>
            <pre>
$user->getId() => <?php echo $user->getId(); ?><br/>
$user->getUsername() => <?php echo $user->getUsername(); ?><br/>
$user->getPassword() => <?php echo $user->getPassword(); ?><br/>
$user->getEmail() => <?php echo $user->getEmail(); ?>
	    </pre>
	    <h2>User Group</h2>
	    <pre>
$group->getId() => <?php echo $group->getId(); ?><br/>
$group->getName() => <?php echo $group->getName(); ?><br/>
	    </pre>
	    <?php else: ?>
	    <p>This is a starting point for a CodeIgniter project with modular views and assets, and Object Relational Mapping.</p>
		<p>To learn more about ORM in CodeIgniter with Doctrine, visit: <a href="https://github.com/wildlyinaccurate/CodeIgniter-2-with-Doctrine-2">https://github.com/wildlyinaccurate/CodeIgniter-2-with-Doctrine-2</a> and <a href="http://wildlyinaccurate.com/integrating-doctrine-2-with-codeigniter-2/">Integrating Doctrine 2 with CodeIgniter 2</a>. For more on modularized views using a custom template, see: <a href="https://github.com/anvoz/codeigniter-skeleton">https://github.com/anvoz/codeigniter-skeleton</a>.</p>
	    <p>To get started:</p>
	    <div class="container">
    <div class="row">
        <div class="col-xs-12">
            <ol class="list-group">
                <li class="list-group-item">
                    <p>In PHPMyAdmin, create a database named "doctrinedb".</p>
                </li>
                <li class="list-group-item">
                    <p>Run the doctrine.sql file. You'll find this file at the root of the project. An easy way to do this in PHPMyAdmin is to open the "SQL" tab, copy and paste in the raw SQL from the file and press "Go".</p>
                </li>
                <li class="list-group-item">
                    <p>Go to application > config > database and configure your database settings (if they are different from what is set).</p>
                </li>
		<li class="list-group-item">
                    <p>In application > controllers > welcome.php, uncomment the "doctrine section.</p>
                </li>
            </ol>
        </div>
    </div>
</div>
	     <?php endif; ?>
        </div>

    </div>
    <div class="col-md-3">

    </div>
</div>