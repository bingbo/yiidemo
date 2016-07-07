{extends file='../layout/main.tpl'}

{block name=body}
<div class="jumbotron">
    <h1>Congratulations!</h1>
    <p class="lead">You have successfully created your Yii-powered application.</p>
    <div class="body-content">
        <table class="table">
            <tr>
                <th>id</th>
                <td>{$user.id}</td>
            </tr>
            <tr>
                <th>name</th>
                <td>{$user.name}</td>
            </tr>
            <tr>
                <th>password</th>
                <td>{$user.password}</td>
            </tr>
        </table>
    </div>
</div>
{/block}
