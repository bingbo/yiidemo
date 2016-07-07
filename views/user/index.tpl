{extends file='../layout/main.tpl'}

{block name=body}
<div class="jumbotron">
    <h1>Congratulations!</h1>
    <p class="lead">You have successfully created your Yii-powered application.</p>
    <div class="body-content">
        <table class="table">
            <tr><th>id</th><th>name</th><th>password</th></tr>
            {foreach $users as $key => $user}
            <tr><td>{$user.id}</td><td>{$user.name}</td><td>{$user.password}</td></tr>
            {/foreach}
        </table>
    </div>
</div>
{/block}
