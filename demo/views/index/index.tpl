<div>
<table>
<tr><th>id</th><th>name</th><th>password</th></tr>
{foreach $users as $key => $user}
<tr><td>{$user.id}</td><td>{$user.name}</td><td>{$user.password}</td></tr>
{/foreach}
</table>
</div>
