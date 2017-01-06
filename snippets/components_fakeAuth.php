<div class="row">
    <div class="col-md-10">
    With Protostrap you can prototype rolebased experiences without having to duplicate your prototype for the different users and roles. <br><br>
    Protostrap let's you define users and roles in the file assets/data/users.yml. <br>
    The structure of the file is straight forward. There is a section for users and one for roles.
    <br><div class="micropadding"></div><pre class="pre-scrollable"><code class="html">users:
1:
  fullName: Sara Default
  email: one@company.com
  username: sara
  role: user
2:
  fullName: Mara Admin
  email: two@company.com
  username: mara
  role: admin

roles:
admin:
  name: Admin
  permissions: ['createData', 'editData', 'deleteData']
user:
  name: Default User
  permissions: ['editData']
guest:
  name: Guest User
  permissions: [ ]
  </code>
</pre>
    </div>
</div>
<a id="loginsection"></a>
<h4 class="sub">Login</h4>
The default state of the prototype is that no user is logged in. <br>
To log in a user you can use the default login form. <br><br>
The essential part of the form is the Email field. Protostrap will log the user in as long as the form that is submitted has a field with the name <b>login</b>.
<br><br>
 <div class="row">
     <div class="col-md-5">
        <a name="login"></a>
        <div class="card">
            <div class="card-block">
                <form action='' method='post' id="loginform">
                    <div class="form-group">
                        <label for="login">Email</label>
                        <input id="login" name='login' class='form-control' type='text' placeholder='Email' autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="" placeholder="Password" >
                            <span class="input-group-addon passwordToggle"><i class="fa fa-square-o"></i> Show</span>
                        </div>
                    </div>
                    <button type='button' class="btn-block btn btn-primary loginFirstUser" data-key="<?php getFirstUserLogin() ;?>">Log in</button>
                </form>
            </div>
        </div>
     </div>
     <div class="col-md-5">
        <strong>User-Roles</strong><br>
            Click the following to log in as:<br>
            <?php foreach($users as $key => $user){ ?>
                <strong><a href="javascript:void(0);" class="loginUser" data-key="<?php echo  $user[$config['loginWith']];?>"><?php echo  $roles[$user['role']]['name']; ?></a></strong><br>
                <?php }

            echo "<br>";

            if ($loggedIn){
                echo "You are currently logged in as:<br> ". $activeUser['fullName']." <br>Role: ".$roles[$userrole]['name']." <br>";?>
                <a href="?logout=true&noredirect=true">Log out</a>
            <?php } else {
                echo "You are currently not logged in.";
            }?>
     </div>
</div>
<br>
<pre><code class="html">&lt;form action='' method='post' id="loginform">
    &lt;div class="form-group">
        &lt;label for="login">Email&lt;/label>
        &lt;input id="login" name='login' class='form-control'
               type='text' placeholder='Email' autofocus>
    &lt;/div>

    &lt;div class="form-group">
        &lt;label for="pw">Password&lt;/label>
        &lt;div class="input-group">
            &lt;input type="password" class="form-control" name="pw"
                   placeholder="Password" >
            &lt;span class="input-group-addon passwordToggle">
                &lt;i class="fa fa-square-o">&lt;/i> Show
            &lt;/span>
        &lt;/div>
    &lt;/div>
    &lt;button type='button' class="btn-block btn btn-primary loginFirstUser"
            data-key="&lt;?php getFirstUserLogin() ;?>">Log in&lt;/button>
&lt;/form>

</code></pre>
<br>
These are the Elements you need to know:
<ul class="simpleList">
    <li><b>Action</b> attribute: If the forms action attribute is empty the current page is called.</li>
    <li><b>Autofocus</b> attribute: This attribute in the Email field makes sure that the Email field is given focus on page load.</li>
    <li><b>loginFirstUser</b> class: This class in combination with the data-key attribute will log in the fist user defined in the users.yml file </li>
    <li><b>getFirstUserLogin()</b> function: calling this function gets the correct value for the first user defined in users.yml </li>
</ul>

<a id="userVariables"></a>
<h4 class="sub">User variables</h4>
Once a user is logged in Protostrap gives exposes a few variables you can work with:
<br><br>
<table class="table table-condensed">
    <tr>
        <th>$loggedIn</th>
        <td>Tells you if a user is logged in. Returns false if not.</td>
    </tr>
    <tr>
        <th>$justLoggedIn</th>
        <td>Tells you if a user just logged in. This variable returns true only on the page called by the form.</td>
    </tr>
    <tr>
        <th>$activeUser</th>
        <td> An array of the current active user. Will show false if no user is logged in.
            <?php if(!$loggedIn){?>
                <br>(You're currently not logged in. <a href="javascript:void(0);" class="loginUser" data-key="one@company.com">Log in</a> to see the array)
            <?php } ?>
            <div class="micropadding"></div>
            <pre><code><?php var_export($activeUser) ;?></code></pre>
        </td>
    </tr>
    <tr>
        <th>$username</th>
        <td>The active user's username</td>
    </tr>
    <tr>
        <th>$usermail</th>
        <td>The active user's email</td>
    </tr>
    <tr>
        <th>$userrole</th>
        <td>The active user's role</td>
    </tr>
    <tr>
        <th>$userpermissions</th>
        <td>An array of the permissions given to the user as defined in the users.yml file
            <?php if(!$loggedIn){?>
                <br>(You're currently not logged in. <a href="javascript:void(0);" class="loginUser" data-key="two@company.com">Log in</a> to see the array)
            <?php } ?>
            <div class="micropadding"></div>
            <pre><code class=""><?php if(isset($userpermissions)){
                var_export($userpermissions) ;
                } else { echo "# Not logged in";}?></code></pre>

        </td>
    </tr>
</table>

<a id="logoutsection"></a>
<h4 class="sub">Logout</h4>
<div class="row">
    <div class="col-md-10">
        Logging out is done over a link with a get parameter <b>logout</b>.
        By default the user is redirected to index.php and the session is reset. <br>
        If you want to keep the user on the current page you can add the parameter <b>noredirect</b> to the link.
        <br>
        <div class="micropadding"></div>
<pre><code>&lt;!-- Default Log out link -->
&lt;a href="?logout=true">Log out&lt;/a>

&lt;!-- Log out link without redirect -->
&lt;a href="?logout=true&noredirect=true">Log out&lt;/a></code></pre>
    </div>
</div>








