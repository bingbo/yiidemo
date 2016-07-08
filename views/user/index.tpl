{extends file='../layout/main.tpl'}

{block name=body}
<div class="jumbotron">
    <h1>Congratulations!</h1>
    <p class="lead">You have successfully created your Yii-powered application.</p>
    <div class="body-content">
        <table class="table">
            <tr><th>id</th><th>name</th><th>password</th><th>操作</th></tr>
            {foreach $users as $key => $user}
            <tr>
                <td>{$user.id}</td>
                <td>{$user.name}</td>
                <td>{$user.password}</td>
                <td>
                    <a href="/user/detail?id={$user.id}">详情</a>
                    <a href="/user/delete?id={$user.id}">删除</a>
                    <a href="/user/edit?id={$user.id}">编辑</a>
                </td>
            </tr>
            {/foreach}
        </table>
        <a class="btn btn-default" href="/user/show" role="button">Add User</a>
    </div>
</div>
{/block}
